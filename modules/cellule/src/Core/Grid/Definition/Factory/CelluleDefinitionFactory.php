<?php
/**
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

namespace Cellule\Core\Grid\Definition\Factory;

use PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection;
use PrestaShop\PrestaShop\Core\Grid\Action\Row\Type\SubmitRowAction;
use PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollection;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\Common\ActionColumn;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\Common\PositionColumn;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\DataColumn;
use PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory;
use PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface;

/**
 * Class CelluleDefinitionFactory.
 */
final class CelluleDefinitionFactory extends AbstractGridDefinitionFactory
{
    protected function getId()
    {
        return 'cellules';
    }

    protected function getName()
    {
        return $this->trans('cellules', [], 'Admin.Advparameters.Feature');
    }

     /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
        $columns = (new ColumnCollection())
            ->add(
                (new DataColumn('id_cellule'))
                ->setName($this->trans('ID', [], 'Modules.cellule.Admin'))
                ->setOptions([
                    'field' => 'id_cellule',
                ])
            )
            ->add(
                (new DataColumn('logo'))
                ->setName($this->trans('Logo', [], 'Modules.cellule.Admin'))
                ->setOptions([
                    'field' => 'logo',
                ])
            )
            ->add(
                (new DataColumn('nom'))
                ->setName($this->trans('Nom', [], 'Modules.cellule.Admin'))
                ->setOptions([
                    'field' => 'nom',
                ])
            )
            ->add(
                (new DataColumn('email'))
                    ->setName($this->trans('Email', [], 'Modules.cellule.Admin'))
                    ->setOptions([
                        'field' => 'email',
                    ])
            )
            ->add(
                (new DataColumn('adresse'))
                    ->setName($this->trans('Adresse', [], 'Modules.cellule.Admin'))
                    ->setOptions([
                        'field' => 'adresse',
                    ])
            )
            ->add(
                (new DataColumn('telephone'))
                    ->setName($this->trans('Téléphone', [], 'Modules.cellule.Admin'))
                    ->setOptions([
                        'field' => 'telephone',
                    ])
            )
            ->add(
                (new DataColumn('Imm_fiscale'))
                    ->setName($this->trans('Imm_fiscale', [], 'Modules.cellule.Admin'))
                    ->setOptions([
                        'field' => 'Imm_fiscale',
                    ])
            )
            ->add(
                (new DataColumn('valid'))
                    ->setName($this->trans('Status', [], 'Modules.cellule.Admin'))
                    ->setOptions([
                        'field' => 'valid',
                    ])
            )
            ->add(
                (new ActionColumn('actions'))
                ->setName($this->trans('Actions', [], 'Modules.cellule.Admin'))
                ->setOptions([
                    'actions' => (new RowActionCollection())

                    ->add(
                        (new SubmitRowAction('view'))
                        ->setName($this->trans('view', [], 'Admin.Actions'))
                        ->setIcon('view')
                        ->setOptions([
                            'method' => 'GET',
                            'route' => 'admin_cellule_view',
                            'route_param_name' => 'celluleId',
                            'route_param_field' => 'id_cellule',
                         
                        ])
                    )
                        ->add(
                            (new SubmitRowAction('delete'))
                            ->setName($this->trans('Delete', [], 'Admin.Actions'))
                            ->setIcon('delete')
                            ->setOptions([
                                'method' => 'POST',
                                'route' => 'admin_cellule_delete',
                                'route_param_name' => 'celluleId',
                                'route_param_field' => 'id_cellule',
                                'confirm_message' => $this->trans(
                                    'Delete selected item?',
                                    [],
                                    'Admin.Notifications.Warning'
                                ),
                            ])
                        ),
                ])
            )
        ;

        return $columns;
    }
}


