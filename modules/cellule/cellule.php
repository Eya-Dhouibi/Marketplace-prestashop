<?php
/**
* 2007-2023 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
require_once(_PS_MODULE_DIR_.'cellule/classes/CelluleTab.php');

class Cellule extends Module implements WidgetInterface
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'cellule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'eya dhouibi';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        // Assignation du module à la propriété $module
         $this->module = 'cellule';
        $this->displayName = $this->l('cellules');
        $this->description = $this->l('consulté la liste des cellules');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        $tabNames = [];
        foreach (Language::getLanguages(true) as $lang) {
            $tabNames[$lang['locale']] = $this->trans('Cellule', array(), 'Modules.cellule.Admin', $lang['locale']);
        }
        $this->tabs = [
            [
                'route_name' => 'admin_cellule',
                'class_name' => 'AdminCellule',
                'visible' => true,
                'name' => $tabNames,
                'parent_class_name' => 'AdminParentCustomer',
                'wording' => 'Cellule',
                'wording_domain' => 'Modules.cellule.Admin'
            ],
        ];
    }

    public function install()
    {
        Configuration::updateValue('CELLULE_LIVE_MODE', false);

        require_once(_PS_MODULE_DIR_.$this->name.'/sql/install.php');
        return parent::install() &&
            //$this->registerHook('moduleRoute') &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader') ;

    }

    public function uninstall()
    {
        Configuration::deleteByName('CELLULE_LIVE_MODE');
        
        require_once(_PS_MODULE_DIR_.$this->name.'/sql/uninstall.php');
        return parent::uninstall();
    }
     
    /**
     * Load the configuration form
     */
    public function getContent()
    {
  
        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output;
    }


    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addJS($this->_path.'views/js/back.js');
        $this->context->controller->addCSS($this->_path.'views/css/back.css');
        
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

  public function renderWidget($hookName, array $configuration)
    {
        // Appel de la méthode getListeCellules()
        $cellulesTab = new CelluleTab();
        $cellules = $cellulesTab->getListeCellules();
       // Passage des variables à la template
         $this->context->smarty->assign(array(
             'cellules' => $cellules,
        ));

        return $this->fetch($this->templateFile = 'module:cellule/views/templates/hook/celluleList.tpl');
    }

     public function getWidgetVariables($hookName,array $configuration){

     }

    }
