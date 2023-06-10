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
include_once _PS_MODULE_DIR_ . 'checkoutstep/classes/checkoutAssociationStep.php';
class CheckoutStep extends Module
{
    protected $config_form = false;
     /** @var array */
     protected $cellules;

    public function __construct()
    {
        $this->name = 'checkoutstep';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'dhouibi eya';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('checkout Step');
        $this->description = $this->l('Ajouter une étape dans le tunnel de commande');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('CHECKOUTSTEP_LIVE_MODE', false);

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('actionCheckoutRender');
    }

    public function uninstall()
    {
        Configuration::deleteByName('CHECKOUTSTEP_LIVE_MODE');

        return parent::uninstall();
    }

   public function hookActionCheckoutRender($params)
   {
    $this->translator = Context::getContext()->getTranslator();
    /** @var CheckoutProcess $process */
    $process = $params['checkoutProcess'];
    $steps = $process->getSteps();

    $checkoutAssociationStep = new checkoutAssociationStep(
        $this->context,
        $this->translator
    );
    $checkoutAssociationStep->setCheckoutProcess($process);

    // Récupérer les cellules à partir de votre source de données
    $db = Db::getInstance();
    $sql = 'SELECT * FROM `'._DB_PREFIX_.'cellule` WHERE 1=1';
    $cellules = $db->executeS($sql);

    // Passer les cellules récupérées à setCellules
    $checkoutAssociationStep->setCellules($cellules);

    $newSteps = [
        $steps[0],
        $steps[1],
        $steps[2],
        $checkoutAssociationStep,
        $steps[3],
        
    ];

    $process->setSteps($newSteps);
  }

    
}
