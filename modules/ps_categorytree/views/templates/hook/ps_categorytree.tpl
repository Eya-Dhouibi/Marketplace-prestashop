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

{function name="categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
      <ul>
        {foreach from=$nodes item=node}
          <li>
            <a href="{$node.link}">{$node.name}</a>
            <div>
              {categories nodes=$node.children depth=$depth+1}
            </div>
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}


<div class="dropdown category-tree">
<button class="btn btn-dropdown dropdown-toggle" type="button" 
id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  CATEGORIES
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <ul>
    <li><a class="dropdown-item" href="{$categories.link nofilter}">{$categories.name}</a></li>
    {if !empty($categories.children)}
      <li>{categories nodes=$categories.children}</li>
    {/if}
  </ul>
</div>
</div>

