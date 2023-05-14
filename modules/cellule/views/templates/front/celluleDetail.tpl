{extends file='page.tpl'}
{block 'page_content'}
  {block name='cellule_detail'}
    <div class="cellule_detail col-md-9">
    {block 'page_title'}
      <h1 class="page-heading">{$cellules[0]['nom']}</h1>
      <a href="#"><img class="logo-img-top img-thumbnail" 
      src="/prestashop/img/cellule_logo/{$cellules[0]['logo']}" alt="Logo" style="width:150px;"></a>
  {/block}
   <div class="cellule-description">
     <ul class="cellule-view">
        <li><h5>{l s='Nom :' mod='cellule'}</h5>{$cellules[0]['nom']}</li>
        <hr />
        <li><h5>{l s='Description :' mod='cellule'}</h5>{$cellules[0]['description']}</li>
        <hr />
        <li><h5>{l s='Email :' mod='cellule'}</h5>{$cellules[0]['email']}</li>
        <hr />
        <li><h5>{l s='Téléphone :' mod='cellule'}</h5>{$cellules[0]['telephone']}</li>
        <hr />
        <li><h5>{l s='Adresse :' mod='cellule'}</h5>{$cellules[0]['adresse']}</li>
    </ul>
  </div>
  <a  class="cellule-detail" href="{$link->getModuleLink('cellule', 'list', array(), true)|escape:'html':'UTF-8'}" class="btn btn-primary">
  Retourner à toutes les cellules<span class="material-icons">arrow_forward_ios</span>
  </a>
  </div>
 {/block}
{/block}