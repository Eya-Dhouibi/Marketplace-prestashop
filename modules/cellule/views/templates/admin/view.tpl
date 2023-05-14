<div class='cellule-admin'>
{block 'page_title'}
    <h1 class="page-heading">{$cellule[0]['nom']}</h1>
    <a href="#"><img class="logo-img-top img-thumbnail" 
    src="/prestashop/img/cellule_logo/{$cellule[0]['logo']}" alt="Logo" style="width:150px;"></a>
{/block}

{block 'page_content'}
    <ul class="cellule-view">
        <li><h5>{l s='Nom :' mod='cellule'}</h5>{$cellule[0]['nom']}</li>
        <hr />
        <li><h5>{l s='Description :' mod='cellule'}</h5>{$cellule[0]['description']}</li>
        <hr />
        <li><h5>{l s='Email :' mod='cellule'}</h5>{$cellule[0]['email']}</li>
        <hr />
        <li><h5>{l s='Téléphone :' mod='cellule'}</h5>{$cellule[0]['telephone']}</li>
        <hr />
        <li><h5>{l s='Adresse :' mod='cellule'}</h5>{$cellule[0]['adresse']}</li>
        <hr />
        <li><h5>{l s='Imm_fiscale :' mod='cellule'}</h5>{$cellule[0]['Imm_fiscale']}</li>
        <hr />
        <li><h5>{l s='Piece_joindre :' mod='cellule'}</h5>{$cellule[0]['piece_joindre']}</li>
    </ul>
    <div class="confirmation">
    <a type="botton" class="btn btn-primary btn-valid" href="#">valider</a>
    <a type="botton" class="btn btn-danger btn-valid" href="#">refuser</a>
    <a type="botton" class="btn btn-primary btn-valid" href="#">envoyer un email</a>
    </div>
{/block}
</div> 
