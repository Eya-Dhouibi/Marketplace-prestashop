{extends file='page.tpl'}
{block name='page_content'}
  <div class="col-sm-12 p-2">
  <div class="panel-default col-md-4">
  {if isset($_GET['cellule']) && $_GET['cellule']}
    {foreach $cellules as $cellule}
      {if $cellule.id_cellule == $_GET['cellule']}
        <h1>{$cellule.nom}</h1>
        <p>{$cellule.description}</p>
        <!-- Autres détails de la cellule -->
      {/if}
    {/foreach}
  {else}
    <form style="display:flex;">
  <select id="cellule-select" name="cellule" class="form-control">
    <option value="">-- Sélectionner --</option>
    {foreach $cellules as $cellule}
      <option value="{$cellule.id_cellule}">{$cellule.nom}</option>
    {/foreach}
  </select>
  <button type="button" class="btn btn-filter ml-1" id="afficher">Afficher</button>
</form>
  {/if}
  </div>
</div> 
<div class="row">
  {foreach $cellules as $cellule}
  <div class="js-cellule col-sm-3 cellule-box">
  <a href="" class="thumbnail cellule-thumbnail">
  <img src="/prestashop/img/cellule_logo/{$cellule.logo}"alt="logo" loading="lazy" style="width:150px;"/></a>
  <h5><span>{$cellule.nom}</span></h5>
  <hr>
    {block name='cellule_description'}
      <div class="cellule-description">
        <ul class="cellule-view">
          <li>
            <h6>{l s='Email :' mod='cellule'}
            <p>{$cellule.email}</p></h6>
          </li>
          <li>
            <h6>{l s='Téléphone :' mod='cellule'}
            <p>{$cellule.telephone}</p></h6>
          </li>
          <li>
            <h6>{l s='Adresse :' mod='cellule'}
            <p>{$cellule.adresse}</p></h6>
          </li>
        </ul>
        <a class="cellule-detail" href="{$link->getModuleLink('cellule', 'list', ['id_cellule' => $cellule.id_cellule], true)|escape:'html':'UTF-8'}" class="btn btn-primary">Voir détail</a>
      </div>
    {/block}
  </div>

{/foreach}
</div>
{/block}