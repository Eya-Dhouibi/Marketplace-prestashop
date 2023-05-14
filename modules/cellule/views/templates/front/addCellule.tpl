{extends file='page.tpl'}
{block name='page_content'}
  {if isset($message)}
    {if $res}
      <div class="alert alert-success">
        {$message}
      </div>
    {else}
      <div class="alert alert-danger">
        {$message}
      </div>
    {/if}
  {/if}
  
  <div id="_desktop_cellule">
  <div class="container">
    <h1>Inscription</h1>
    <form action="{$link->getModuleLink('cellule', 'ajout', array('fc' => 'module', 'module' => 'cellule', 'controller' => 'module', 'task' => 'initContent'), true)|escape:'html':'UTF-8'}" 
    method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" value="" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" value=""></textarea>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="" required>
      </div>
      <div class="form-group">
        <label for="telephone">Téléphone</label>
        <input type="tel" class="form-control" name="telephone" id="telephone" value="" required>
      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" name="adresse" id="adresse" value="" required>
      </div>
      <div class="form-group">
        <label for="imm_fiscale">Immatriculation fiscale</label>
        <input type="text" class="form-control" name="imm_fiscale" id="imm_fiscale" value="" required>
      </div>
      <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" class="form-control-file" name="logo" id="logo" value="" required>
      </div> 
       <div class="form-group">
        <label for="piece_joindre">Pièce jointe</label>
        <input type="file" class="form-control-file" name="piece_joindre" id="piece_joindre" value="" required>
      </div> 
      <button type="submit" class="btn btn-inscrit" name="add_cellule">Inscription</button>
    </form>
  </div>
{/block}