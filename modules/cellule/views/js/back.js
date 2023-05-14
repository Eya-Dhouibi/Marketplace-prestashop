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
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/
// $(document).on('click', '.toggle-cellule', function() {
//     var celluleId = $(this).data('id');
//     var valid = $(this).data('valid') ? 0 : 1;

//     $.ajax({
//         url: "{{ path('admin_cellule_toggle', {'id_cellule': 'CELLULE_ID', 'valid': 'VALID_VALUE'}) }}".replace('CELLULE_ID', celluleId).replace('VALID_VALUE', valid),
//         type: 'POST',
//         data: {
//             id_cellule: celluleId,
//             valid: valid
//         },
//         success: function(data) {
//             var button = $('.toggle-cellule[data-id=' + celluleId + ']');
//             if (valid) {
//                 button.text('Désactiver').data('valid', true);
//             } else {
//                 button.text('Activer').data('valid', false);
//             }
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             console.error(textStatus + ':' + errorThrown);
//         }
//     });
// });
