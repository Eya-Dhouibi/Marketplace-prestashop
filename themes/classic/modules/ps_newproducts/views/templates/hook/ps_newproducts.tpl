{*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{include file="module:cellule/views/templates/hook/btncellule.tpl"}
<section class="main-content mt-3">
<div class="progress-title px-md-5">
  <h1>{l s='NOUVEAUTÉS' d='Modules.Newproducts.Shop'}</h1>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
<div class="products">
<div id="carouselNewProducts" class="carousel slide" data-ride="carousel" data-interval="false">
  <a class="carousel-control-prev" href="#carouselNewProducts" role="button" data-slide="prev">
    <div class="circle_prev">
      <span class="material-icons-outlined carousel-icon carousel-control-prev-icon" aria-hidden="true">arrow_back_ios</span>
    </div>
  </a>
  <div class="carousel-inner mt-2">
  {foreach from=$products item="product" name="slider_loop"}
    {if $smarty.foreach.slider_loop.iteration % 5 == 1}
      <div class="carousel-item {if $smarty.foreach.slider_loop.first}active{/if}">
        <div class="row product-slider">
    {/if}
    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    </div>
    {if $smarty.foreach.slider_loop.iteration % 5 == 0 || $smarty.foreach.slider_loop.last}
        </div>
      </div>
    {/if}
  {/foreach}
</div>

  <a class="carousel-control-next" href="#carouselNewProducts" role="button" data-slide="next">
    <div class="circle_next">
      <span class="material-icons carousel-icon carousel-control-next-icon" aria-hidden="true">arrow_forward_ios</span>
    </div>
  </a>
</div>
</div>

</section>

