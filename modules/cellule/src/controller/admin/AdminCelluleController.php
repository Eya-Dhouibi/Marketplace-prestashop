<?php

namespace Cellule\Controller\Admin;

use Cellule\Core\Grid\CelluleGridFactory;
use Cellule\Repository\CelluleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Cellule\Core\Search\Filters\CelluleFilters;
use Cellule\Core\Grid\Query\CelluleQueryBuilder;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use PrestaShopBundle\Security\Annotation\AdminSecurity;
use PrestaShop\PrestaShop\Core\Form\FormHandlerInterface;
use PrestaShopBundle\Security\Annotation\ModuleActivated;
use PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteria;
use PrestaShop\PrestaShop\Core\Exception\DatabaseException;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

/**
 * Class AdminCelluleController.
 *
 * @ModuleActivated(moduleName="cellule", redirectRoute="admin_module_manage")
 */
class AdminCelluleController extends FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function listAction(Request $request)
    {
        $cellulesGridDefinitionFactory = $this->get('prestashop.module.cellule.repository.cellule_definition_factory');
        $cellulesGridDefinition = $cellulesGridDefinitionFactory->getDefinition();
        
        // Accédez à toutes les informations définies
        $cellulesGridDefinition->getColumns(); 
        $cellulesGridDefinition->getName(); 
        $cellulesGridDefinition->getId(); 

        $filters = [
            'id_cellule' => 4,
        ];
        
        $searchCriteria = new SearchCriteria(
            $filters,
            'id_cellule',
            'asc',
            0,
            10
        );
        
        $searchCriteria->getFilters();  
        $searchCriteria->getOrderBy();  
        $searchCriteria->getOrderWay(); 
        $searchCriteria->getOffset(); 
        $searchCriteria->getLimit(); 
        
     
        /** @var \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $celluleGridDataFactory */
        $celluleDataFactory = $this->get('prestashop.module.cellule.grid.data_factory');
        $celluleGridData = $celluleDataFactory->getData($searchCriteria);

        $celluleGridData->getRecords(); 
        $celluleGridData->getRecordsTotal(); 
        $celluleGridData->getQuery(); 

        $celluleGridFactory = $this->get('prestashop.module.cellule.grid.factory');
        $celluleGrid = $celluleGridFactory->getGrid($searchCriteria);

        $celluleQueryBuilder = new CelluleQueryBuilder($this->get('doctrine.dbal.default_connection'), _DB_PREFIX_, $this->getContext()->language->id);
        $qb = $celluleQueryBuilder->getAllDataQueryBuilder();
        $cellules = $qb->execute()->fetchAll();
        
        return $this->render('@Modules/cellule/views/templates/admin/index.html.twig', [
            // $this->presentGrid() est une méthode d'assistance fournie par FrameworkBundleAdminController
            'celluleGrid' => $this->presentGrid($celluleGrid),
            'cellules' => $cellules,
           
        ]);
    
    }

/**
 * @param int $celluleId
 */
public function viewAction($celluleId)
{
    $celluleRepository = $this->get('prestashop.module.cellule.repository');
    $cellule = $celluleRepository->getCelluleById($celluleId);

    return $this->render('@Modules/cellule/views/templates/admin/cellule_view.html.twig', [
        'cellule' => $cellule
    ]);
}


/**
 * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="Access denied.")
 *
 * @param int $celluleId
 *
 * @return RedirectResponse
 */
public function deleteAction($celluleId)
{
    $repository = $this->get('prestashop.module.cellule.repository');
    $errors = [];

    try {
        $request = $this->get('request_stack')->getCurrentRequest();
        $repository->delete($request, $celluleId);
        $session = new Session();
        $session->getFlashBag()->add('success', 'La cellule a été supprimée avec succès');
    } catch (DatabaseException $e) {
        $errors[] = [
            'key' => sprintf('Could not delete #%d', $celluleId),
            'domain' => 'Admin.Catalog.Notification',
            'parameters' => [$celluleId],
        ];
    }

    // Rediriger l'utilisateur vers une page appropriée
    return $this->redirectToRoute('admin_cellule');
   }

/**
 * @param Request $request
 * @param int $celluleId
 * @return Response
 */
  public function validateAction(Request $request, int $celluleId, int $valid): Response
  {
    $celluleRepository = $this->get('prestashop.module.cellule.repository');
    $valid = $celluleRepository->validation($request, $celluleId, $valid);


    return new Response($message); 
  }


    /**
     * @param Request $request
     *
     * @return array
     */
    protected function buildFiltersParamsByRequest(Request $request)
    {
        $filtersParams = array();
        $filtersParams = array_merge(CelluleFilters::getDefaults(), $request->query->all());
        $filtersParams['filters']['id_lang'] = $this->getContext()->language->id;

        return $filtersParams;
    }
}
