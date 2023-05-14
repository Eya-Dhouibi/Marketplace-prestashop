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
$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'cellule` (
    `id_cellule` int(11) NOT NULL AUTO_INCREMENT,
    `id_configuration` int(11) NOT NULL,
    `nom` varchar(255) NOT NULL,
    `adresse` varchar(255) NOT NULL,
    `description` text,
    `email` varchar(255) NOT NULL,
    `telephone` int(11) NOT NULL,
    `Imm_fiscale` int(11) NOT NULL,
    `logo` varchar(255) NOT NULL,
    `piece_joindre` varchar(255) NOT NULL,
    `valid` int(1) default 0,
    PRIMARY KEY  (`id_cellule`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'cellule_lang` (
    `id_cellule` int(11) NOT NULL AUTO_INCREMENT,
    `id_lang` int(11) UNSIGNED NOT NULL,
    `description` text,
    PRIMARY KEY  (`id_cellule`,`id_lang`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
