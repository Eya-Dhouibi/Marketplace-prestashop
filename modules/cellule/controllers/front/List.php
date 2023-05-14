<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
require_once(_PS_MODULE_DIR_.'cellule/classes/CelluleTab.php');
class CelluleListModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        if (Tools::getValue('id_cellule')) {
            // Appel de la méthode getCelluledetail()
            $cellulesTab = new CelluleTab();
            $cellules = $cellulesTab->getListeCelluleById(Tools::getValue('id_cellule'));

            // Passage des variables à la template
            $this->context->smarty->assign(array(
                'cellules' => $cellules,
            ));

            $this->setTemplate('module:cellule/views/templates/front/celluleDetail.tpl');
        } else {
            // Appel de la méthode getListeCellules()
            $cellulesTab = new CelluleTab();
            $cellules = $cellulesTab->getListeCellules();

            // Passage des variables à la template
            $this->context->smarty->assign(array(
                'cellules' => $cellules,
            ));

            $this->setTemplate('module:cellule/views/templates/front/cellule.tpl');
        }
    }
}