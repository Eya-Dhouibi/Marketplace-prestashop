{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}
    {* <div id="hook-display-before-carrier">
        {$hookDisplayBeforeCarrier nofilter}
    </div>
     *}
    <div class="delivery-options-list">
        <h2>Liste des associations</h2>
        {if $cellules}
            <form
                class="clearfix"
                id="js-delivery"
                data-url-update="{url entity='order' params=['ajax' => 1, 'action' => 'selectDeliveryOption']}"
                method="post"
            >
                <div class="form-fields">
                    {block name='delivery_options'}
                        <div class="delivery-options">
                            {foreach $cellules as $cellule}
                                {if $cellule.valid == 1}
                                    <div class="row js-delivery-option">
                                        <div class="col-sm-12">
                                                <input class="form-check-input" type="radio" id="flexCheckDisabled" name="flexCheckDisabled" >
                                                <label class="form-check-label" for="flexCheckDisabled">
                                                    <h5><span>{$cellule.nom}<span></h5>
                                                </label>
                                        </div>
                                    </div>
                                {/if}
                                <div class="clearfix"></div>
                            {/foreach}
                        </div>
                    {/block}
                </div>
                <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
                    {l s='Continue' d='Shop.Theme.Actions'}
                </button>
            </form>
        {else}
            <p class="alert alert-danger">{l s='Unfortunately, there are no carriers available for your delivery address.' d='Shop.Theme.Checkout'}</p>
        {/if}
    </div>
    
    {* <div id="hook-display-after-carrier">
        {$hookDisplayAfterCarrier nofilter}
    </div> *}
    <div id="extra_carrier"></div>
{/block}


    