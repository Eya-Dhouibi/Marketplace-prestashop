<?php

namespace Cellule\Core\Grid\Query;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface;
use PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder;

/**
 * Class CelluleQueryBuilder.
 */
final class CelluleQueryBuilder extends AbstractDoctrineQueryBuilder
{
     /**
     * @param SearchCriteriaInterface|null $searchCriteria
     *
     * @return QueryBuilder
     * @var int
     */
    private $contextLangId;

    /** 
    * @param SearchCriteriaInterface|null $searchCriteria
    *
    * @return QueryBuilder
    **/
    
    public function __construct(Connection $connection, $dbPrefix, $contextLangId)
    {
        parent::__construct($connection, $dbPrefix);

        $this->contextLangId = $contextLangId;
    }

    private function getBaseQuery()
    {
        return $this->connection
            ->createQueryBuilder()
            ->from($this->dbPrefix.'cellule', 'p')
            ->leftJoin(
                'p',
                $this->dbPrefix.'cellule_lang',
                'pl',
                'p.id_cellule = pl.id_cellule' 
            )
            ->setParameter('context_lang_id', $this->contextLangId)
        ;
    }

public function getSearchQueryBuilder(SearchCriteriaInterface $searchCriteria)
{
$qb = $this->getBaseQuery();
$qb->select('p.*')
    ->orderBy(
        $searchCriteria->getOrderBy(),
        $searchCriteria->getOrderWay()
    )
    ->setFirstResult($searchCriteria->getOffset())
    ->setMaxResults($searchCriteria->getLimit());

foreach ($searchCriteria->getFilters() as $filterName => $filterValue) {
    if ('id_cellule' === $filterName) {
        $qb->andWhere("p.id_cellule = :$filterName");
        $qb->setParameter($filterName, $filterValue);

        continue;
    }

    $qb->andWhere("$filterName LIKE :$filterName");
    $qb->setParameter($filterName, '%'.$filterValue.'%');
}

return $qb;
}

    
    // Get Count query builder that is used to get the total count of all records (cellules)
    public function getCountQueryBuilder(SearchCriteriaInterface $searchCriteria)
    {
        $qb = $this->getBaseQuery();
        $qb->select('COUNT(p.id_cellule)');

        return $qb;
    }
    
    // Nouvelle méthode pour récupérer toutes les données de la table cellules
    public function getAllDataQueryBuilder()
    {
        $qb = $this->getBaseQuery();
        $qb->select('p.*');

        return $qb;
    }
    
}

