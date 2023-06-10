<section class="main-content mt-3">
<div class="progress-title px-md-5">
<div class="cellule-brand">
  <h1>{l s='NOS CELLULES' d='Modules.cellule.Shop'}</h1>
  <img class="mb-1 ml-1" src="{_MODULE_DIR_}cellule/views/img/cellule_logo.png" alt="">
</div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
  <div class="cellules">
  <div id="carouselCellules" class="carousel slide" data-ride="carousel" data-interval="false">
    <a class="carousel-control-prev" href="#carouselCellules" role="button" data-slide="prev">
    <div class="circle_prev mt-3">
      <span class="material-icons carousel-icon carousel-control-prev-icon" aria-hidden="true">arrow_back_ios</span>
    </div>
    </a>

    <div class="carousel-inner cellule-carousel">
      {foreach from=$cellules item=cellule name=slider_loop}
        {if $smarty.foreach.slider_loop.iteration % 4 == 1}
          <div class="carousel-item{if $smarty.foreach.slider_loop.first} active{/if}">
            <div class="row cellule-slider">
        {/if}

        {if $cellule.valid == 1}
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <a href="{$link->getModuleLink('cellule', 'list', ['id_cellule' => $cellule.id_cellule], true)|escape:'html':'UTF-8'}" 
               class="thumbnail cellule-thumbnail">
              <img src="/prestashop/img/cellule_logo/{$cellule['logo']}" alt="logo" style="width:100px;"/>
            </a>
          </div>
        {/if}
        
        {if $smarty.foreach.slider_loop.iteration % 4 == 0 || $smarty.foreach.slider_loop.last}
            </div>
          </div>
        {/if}
      {/foreach}
    </div>

    <a class="carousel-control-next" href="#carouselCellules" role="button" data-slide="next">
    <div class="circle_next mt-3">
      <span class="material-icons carousel-icon carousel-control-next-icon" aria-hidden="true">arrow_forward_ios</span>
    </div>
    </a>
  </div>
</div>

<div class="cellule_list">
<a class="btn h2 cellule-btn" type="button" href="{$link->getModuleLink('cellule', 'list', array(), true)|escape:'html':'UTF-8'}">
    Voir Nos Cellules
    <img class="ml-2 mb-1" src="{_MODULE_DIR_}cellule/views/img/cellule_icon.png" alt="">
</a>
</div>

</section>

