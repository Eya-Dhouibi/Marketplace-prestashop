<?php

namespace Cellule\Controller\Admin;

use Db;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class AdminCelluleController extends FrameworkBundleAdminController
{

    public function indexAction(Request $request)
    {
        // // Récupérer les paramètres de filtre de la requête
           $filter_column_nom = $request->get('filter_column_nom');
           $filter_column_email = $request->get('filter_column_email');
           $filter_column_telephone = $request->get('filter_column_telephone');
           $filter_column_adresse = $request->get('filter_column_adresse');
           $filter_column_Imm_fiscale = $request->get('filter_column_Imm_fiscale');
           $search_term = $request->get('search');
           $activate_drag_and_drop = true;
           $filters_disabled = false;

         // Définir les valeurs par défaut des paramètres de tri
            $orderBy = $request->get('orderBy', 'id_cellule');
            $sortOrder = $request->get('sortOrder', 'desc');

        // Construire la requête SQL
          $sql = 'SELECT * FROM `'._DB_PREFIX_.'cellule` WHERE 1=1';

          if ($filter_column_nom !== '') {
              $sql .= ' AND `nom` LIKE "%'.$filter_column_nom.'%"';
          }
          if ($filter_column_email !== '') {
             $sql .= ' AND `email` LIKE "%'.$filter_column_email.'%"';
          }
           if ($filter_column_telephone !== '') {
              $sql .= ' AND `telephone` LIKE "%'.$filter_column_telephone.'%"';
           }
           if ($filter_column_adresse !== '') {
              $sql .= ' AND `adresse` LIKE "%'.$filter_column_adresse.'%"';
            }
           if ($filter_column_Imm_fiscale !== '') {
              $sql .= ' AND `Imm_fiscale` LIKE "%'.$filter_column_Imm_fiscale.'%"';
           }
            $sql .= ' ORDER BY `'.$orderBy.'` '.$sortOrder;

        // Exécuter la requête SQL
         $cellules = Db::getInstance()->executeS($sql);

        return $this->render('@Modules/cellule/views/templates/admin/index.html.twig',[
            'cellules' => $cellules,
             'orderBy' => $orderBy,
             'sortOrder' => $sortOrder,
              'filter_column_nom' => $filter_column_nom,
              'filter_column_email' => $filter_column_email,
              'filter_column_telephone' => $filter_column_telephone,
              'filter_column_adresse' => $filter_column_adresse,
              'filter_column_Imm_fiscale' => $filter_column_Imm_fiscale,
               'activate_drag_and_drop' => $activate_drag_and_drop,
              //'filters_disabled' => $filters_disabled,
        ]);
    }
    public function getCelluleById($id)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'cellule WHERE id_cellule = ' . (int)$id;
        $result = Db::getInstance()->getRow($sql);

        return $result;
    }

    // action "view" pour afficher les détails d'une cellule
    public function viewAction($id_cellule)
    {
        $cellule = $this->getCelluleById($id_cellule);

        if (!$cellule || !isset($cellule['id_cellule'])) {
            throw new NotFoundHttpException('Cellule non trouvée');
        }
        // retourner une réponse avec les détails de la cellule
        return $this->render('@Modules/cellule/views/templates/admin/cellule_view.html.twig', [
            'cellule' => $cellule,
        ]);
    }

    // action "delete" pour supprimer une cellule
    function deleteAction($id_cellule, Request $request)
    {
    $cellule = $this->getCelluleById($id_cellule);

    $sql = 'DELETE FROM `' . _DB_PREFIX_ . 'cellule` WHERE `id_cellule` = ' . (int) $id_cellule;
    $result = Db::getInstance()->execute($sql);
    $session = new Session();
    if ($result) {
        $session->getFlashBag()->add('success', 'La cellule a été supprimée avec succès');
    } else {
        $session->getFlashBag()->add('error', 'Erreur lors de la suppression de la cellule');
    }

    return $this->redirectToRoute('admin_cellule');
   }


   public function toggleCellule(Request $request): Response
   {
       // Vérifier que la requête est de type POST
       if (!$request->isMethod('POST')) {
           throw new \RuntimeException('Invalid request method');
       }
   
       // Récupérer les paramètres de la requête
       $id_cellule = $request->request->getInt('id_cellule');
       $valid = $request->request->getInt('valid');
   
       // Activer ou désactiver la cellule dans la base de données
       $query = 'UPDATE `' . _DB_PREFIX_ . 'cellule` SET `valid` = ' . (int) $valid . ' WHERE `id_cellule` = ' . (int) $id_cellule;
       Db::getInstance()->execute($query);
       $message = $valid ? 'La cellule a été valider avec succès' : 'La cellule a été refuser';
       $status = $valid ? 'success' : 'error';

       $response = new JsonResponse(['message' => $message, 'status' => $status]);
       return $response;
   }


}


