<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/cellule/views/templates/admin/cellule_table.html.twig */
class __TwigTemplate_cf047d875eecc2f13687c7092723887a6f9bece7614d68d9fbbd784438fc0454 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'cellule_table_row' => [$this, 'block_cellule_table_row'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 27
($context["grid"] ?? null), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 30
        echo "

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? null), "filter_form", []), 'form_start', ["attr" => ["id" => ($this->getAttribute(($context["grid"] ?? null), "id", []) . "_filter_form"), "class" => "table-responsive"]]);
        echo "

<table class=\"grid-table js-grid-table table ";
        // line 34
        if ($this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->isOrderingColumn(($context["grid"] ?? null))) {
            echo "grid-ordering-column";
        }
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "attributes", []), "is_empty_state", [])) {
            echo "border-0";
        }
        echo "\"
       id=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "query", []), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 39
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 46
        echo "
  </thead>
<tbody>
  ";
        // line 49
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 118
        echo "</tbody>




";
        // line 123
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 124
        echo "
</table>
";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? null), "filter_form", []), 'form_end');
        echo "

";
        // line 128
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 129
($context["grid"] ?? null), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 130
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 131
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 132
        echo "
";
    }

    // line 39
    public function block_grid_table_head($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
    ";
        // line 41
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "actions", []), "bulk", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "filter_form", [])) > 1))) {
            // line 42
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            echo "
    ";
        }
        // line 44
        echo "
    ";
    }

    // line 49
    public function block_grid_table_body($context, array $blocks = [])
    {
        // line 50
        echo "    ";
        if ( !twig_test_empty(($context["cellules"] ?? null))) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cellules"] ?? null));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cellule"]) {
                // line 52
                echo "      ";
                $this->displayBlock('cellule_table_row', $context, $blocks);
                // line 113
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 114
                echo "      ";
                echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    ";
        }
        // line 117
        echo "  ";
    }

    // line 52
    public function block_cellule_table_row($context, array $blocks = [])
    {
        // line 53
        echo "        <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-cellule-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">
          <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_cellule-";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">
              ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "
            </label>
          </td>

          <td>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_view", ["celluleId" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\"><img src=\"/prestashop/img/cellule_logo/";
        echo $this->getAttribute(($context["cellule"] ?? null), "logo", []);
        echo "\" 
            alt=\"\" class=\"imgm img-thumbnail\" style=\"width:150px;\"></a>
          </td>

          <td>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_view", ["celluleId" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "nom", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "nom", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
          </td>

          <td>
            ";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "email", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "email", []), "")) : ("")), "html", null, true);
        echo "
          </td>

          <td>
            ";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "telephone", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "telephone", []), "")) : ("")), "html", null, true);
        echo "
          </td>

          <td>
            ";
        // line 78
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "adresse", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "adresse", []), "")) : ("")), "html", null, true);
        echo "
          </td>

          <td>
            ";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "Imm_fiscale", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "Imm_fiscale", []), "")) : ("")), "html", null, true);
        echo "
          </td>

          <td class=\"text-center\">
            <button type=\"button\" class=\"toggle-cellule btn";
        // line 86
        if ($this->getAttribute(($context["cellule"] ?? null), "valid", [])) {
            echo "-success";
        } else {
            echo "-danger";
        }
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" data-valid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "valid", []), "html", null, true);
        echo "\">
              ";
        // line 87
        if (($this->getAttribute(($context["cellule"] ?? null), "valid", []) == 1)) {
            // line 88
            echo "                Accepter
              ";
        } else {
            // line 90
            echo "                Refuser
              ";
        }
        // line 92
        echo "            </button>
          </td>

<td class=\"action-type column-actions\">                          
  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
    <a class=\"btn tooltip-link js-link-row-action dropdown-item grid-view-row-link\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_view", ["celluleId" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\">
      <span class=\"material-icons\">visibility</span>
    </a>
    </div>
    <div class=\"btn-group\">
      <a class=\"btn tooltip-link js-submit-row-action dropdown-item grid-delete-row-link\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_delete", ["celluleId" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\" 
         data-confirm-message=\"Delete selected item?\" data-method=\"POST\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"Delete\">
        <i class=\"material-icons\">delete</i>
      </a>
    </div>
  </div>
</td>

        </tr>
      ";
    }

    // line 123
    public function block_grid_table_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/cellule_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 123,  294 => 103,  286 => 98,  278 => 92,  274 => 90,  270 => 88,  268 => 87,  256 => 86,  249 => 82,  242 => 78,  235 => 74,  228 => 70,  219 => 66,  209 => 61,  201 => 56,  197 => 55,  189 => 53,  186 => 52,  182 => 117,  179 => 116,  170 => 114,  157 => 113,  154 => 52,  135 => 51,  132 => 50,  129 => 49,  124 => 44,  118 => 42,  116 => 41,  111 => 40,  108 => 39,  103 => 132,  101 => 131,  100 => 130,  99 => 129,  98 => 128,  93 => 126,  89 => 124,  87 => 123,  80 => 118,  78 => 49,  73 => 46,  71 => 39,  65 => 36,  61 => 35,  51 => 34,  46 => 32,  42 => 30,  40 => 29,  39 => 28,  38 => 27,  37 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/cellule/views/templates/admin/cellule_table.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\cellule_table.html.twig");
    }
}
