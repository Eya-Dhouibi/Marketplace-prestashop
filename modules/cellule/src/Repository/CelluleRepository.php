<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace Cellule\Repository;

use Hook;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\DBAL\Query\QueryBuilder;
use Cellule\Adapter\ObjectModelHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PrestaShop\PrestaShop\Adapter\Shop\Context;
use Doctrine\DBAL\Exception\ConnectionException;
use Symfony\Component\Translation\TranslatorInterface;
use PrestaShop\PrestaShop\Core\Exception\DatabaseException;

/**
 * Class CelluleRepository.
 */
class CelluleRepository
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var string
     */
    private $dbPrefix;

    /**
     * @var array
     */
    private $languages;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * CelluleRepository constructor.
     *
     * @param Connection $connection
     * @param string $dbPrefix
     * @param array $languages
     * @param TranslatorInterface $translator
     */
    public function __construct(
        Connection $connection,
        $dbPrefix,
        array $languages,
        TranslatorInterface $translator
    ) {
        $this->connection = $connection;
        $this->dbPrefix = $dbPrefix;
        $this->languages = $languages;
        $this->translator = $translator;
    }

           /**
     * @param QueryBuilder $qb
     * @param string $errorPrefix
     *
     * @return Statement|int
     *
     * @throws DatabaseException
     */
    private function executeQueryBuilder(QueryBuilder $qb, $errorPrefix = 'SQL error')
    {
        $statement = $qb->execute();
        if ($statement instanceof Statement && !empty($statement->errorInfo())) {
            throw new DatabaseException($errorPrefix . ': ' . var_export($statement->errorInfo(), true));
        }

        return $statement;
    }

    /**
     * @return array
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function createTables()
    {
        $errors = [];
        $engine = _MYSQL_ENGINE_;
        $this->dropTables();

        $queries = [
            "CREATE TABLE IF NOT EXISTS `{$this->dbPrefix}cellule`(
    			`id_cellule` int(10) unsigned NOT NULL auto_increment,
    			`id_configuration` int(1) unsigned DEFAULT NULL,
                `nom` varchar(40) NOT NULL ,
                `email` varchar(150) NOT NULL ,
                `adresse` varchar(150) NOT NULL ,
                `telephone` int(20) NOT NULL ,
                `Imm_fiscale` int(20) NOT NULL ,
                `logo` varchar(255) NOT NULL ,
                `piece_joindre` varchar(255) NOT NULL ,
                `valid` int(10) unsigned NOT NULL default '0',
    			`description` text default NULL,
    			PRIMARY KEY (`id_cellule`)
            ) ENGINE=$engine DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `{$this->dbPrefix}cellule_lang`(
    			`id_cellule` int(10) unsigned NOT NULL,
    			`id_lang` int(10) unsigned NOT NULL,
    			`name` varchar(40) NOT NULL default '',
    			`custom_content` text default NULL,
    			PRIMARY KEY (`id_cellule`, `id_lang`)
            ) ENGINE=$engine DEFAULT CHARSET=utf8",
        ];

        foreach ($queries as $query) {
            $statement = $this->connection->executeQuery($query);

            if ($statement instanceof Statement && 0 != (int) $statement->errorCode()) {
                $errors[] = [
                    'key' => json_encode($statement->errorInfo()),
                    'parameters' => [],
                    'domain' => 'Admin.Modules.Notification',
                ];
            }
        }

        return $errors;
    }


    /**
     * @return array
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function dropTables()
    {
        $errors = [];
        $tableNames = [
            'cellule_lang',
            'cellule',
        ];
        foreach ($tableNames as $tableName) {
            $sql = 'DROP TABLE IF EXISTS ' . $this->dbPrefix . $tableName;
            $statement = $this->connection->executeQuery($sql);
            if ($statement instanceof Statement && 0 != (int) $statement->errorCode()) {
                $errors[] = [
                    'key' => json_encode($statement->errorInfo()),
                    'parameters' => [],
                    'domain' => 'Admin.Modules.Notification',
                ];
            }
        }

        return $errors;
    }

     /**
     * @return array
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getListCellule()
    {
        $qb = $this->connection->createQueryBuilder();
        $qb->select('*')
            ->from($this->dbPrefix . 'cellule')
        ;

        $cellules=$qb->execute()->fetchAll();

        return $cellules;
   
    }

 /**
 * @param Request $request
 * @param int $celluleId
 *
 * @throws DatabaseException
 */
public function delete(Request $request, $celluleId): Response
{
    $tableNames = [
        'cellule_lang',
        'cellule',
    ];

    foreach ($tableNames as $tableName) {
        $qb = $this->connection->createQueryBuilder();
        $qb
            ->delete($this->dbPrefix . $tableName)
            ->andWhere('id_cellule = :celluleId')
            ->setParameter('celluleId', $celluleId);

        $this->executeQueryBuilder($qb, 'Delete from multi-store tables error');
    }
}

/**
 * @param int $id
 * @return Cellule|null
 */
public function getCelluleById($celluleId)
{
    $qb = $this->connection->createQueryBuilder();
    $qb->select('*')
       ->from($this->dbPrefix . 'cellule')
       ->where('id_cellule = :id_cellule')
       ->setParameter('id_cellule', $celluleId);

    $result = $qb->execute()->fetch();
}

   /**
 * @param Request $request
 *
 * @return Response
 * @throws DatabaseException
 */
public function validation(Request $request): Response
{
    $tableNames = [
        'cellule_lang',
        'cellule',
    ];

    $id_cellule = $request->request->getInt('id_cellule');
    $valid = $request->request->getInt('valid');

    foreach ($tableNames as $tableName) {
        $qb = $this->connection->createQueryBuilder();
        $qb
            ->update($this->dbPrefix . $tableName)
            ->set('valid', $valid)
            ->andWhere('id_cellule = :id_cellule')
            ->setParameter('id_cellule', $id_cellule);

        $this->executeQueryBuilder($qb, 'Validation from multi-store tables error');
    } 

    // Retourner une réponse appropriée ici si nécessaire
    // $response = new Response();
    // ...
    // return $response;
}


}
