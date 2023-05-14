{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
 <h1>cellule</h1>
 {*block name='cellule_miniature_item'}
 <div class="js-cellule cellule{if !empty($celluleClasses)} {$celluleClasses}{/if}">
   <article class="cellule-miniature js-cellule-miniature" data-id-cellule="{$cellule.id_cellule}" data-id-cellule-attribute="{$cellule.id_cellule_attribute}">
     <div class="thumbnail-container">
       <div class="thumbnail-top">
         {block name='cellule_thumbnail'}
           {if $cellule.cover}
             <a href="{$cellule.url}" class="thumbnail cellule-thumbnail">
               <img
                 src="{$cellule.cover.bySize.home_default.url}"
                 alt="{if !empty($cellule.cover.legend)}{$cellule.cover.legend}{else}{$cellule.name|truncate:30:'...'}{/if}"
                 loading="lazy"
                 data-full-size-image-url="{$cellule.cover.large.url}"
                 width="{$cellule.cover.bySize.home_default.width}"
                 height="{$cellule.cover.bySize.home_default.height}"
               />
             </a>
           {else}
             <a href="{$cellule.url}" class="thumbnail cellule-thumbnail">
               <img
                 src="{$urls.no_picture_image.bySize.home_default.url}"
                 loading="lazy"
                 width="{$urls.no_picture_image.bySize.home_default.width}"
                 height="{$urls.no_picture_image.bySize.home_default.height}"
               />
             </a>
           {/if}
         {/block}
       </div>
 
       {block name='cellule_description'}
        <div class="cellule-description">
          {block name='cellule_name'}
            <h2 class="h3 cellule-title">
              <a href="{$cellule.url}" content="{$cellule.url}">
                {$cellule.name}
              </a>
            </h2>
          {/block}
          <ul class="cellule-view">
            <li>
              <h5>{l s='Description :' mod='cellule'}</h5>
              {$cellule.description}
            </li>
            <li>
              <h5>{l s='Email :' mod='cellule'}</h5>
              {$cellule.email}
            </li>
            <li>
              <h5>{l s='Téléphone :' mod='cellule'}</h5>
              {$cellule.telephone}
            </li>
            <li>
              <h5>{l s='Adresse :' mod='cellule'}</h5>
              {$cellule.adresse}
            </li>
            <li>
              <h5>{l s='Imm_fiscale :' mod='cellule'}</h5>
              {$cellule.Imm_fiscale}
            </li>
            <li>
              <h5>{l s='Piece_joindre :' mod='cellule'}</h5>
              {$cellule.piece_joindre}
            </li>
          </ul>
        </div>
      {/block}

      </div>

    </div>
  </article>
</div>
{/block*}
