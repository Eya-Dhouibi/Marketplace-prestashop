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

/* @Modules/cellule/views/templates/admin/cellule_list.html.twig */
class __TwigTemplate_a116a280efc74127fe7ca463b1bd808196dd6463d2e95b8d86c4178366ba7caf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'cellule_table_row' => [$this, 'block_cellule_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<tbody>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cellules"] ?? null));
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
            // line 3
            echo " ";
            $this->displayBlock('cellule_table_row', $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</tbody>";
    }

    // line 3
    public function block_cellule_table_row($context, array $blocks = [])
    {
        // line 4
        echo "<tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-cellule-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_cellule-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" name=\"bulk_action_selected_cellule[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_cellule-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\"><img src=\"/prestashop/img/cellule_logo/";
        echo $this->getAttribute(($context["cellule"] ?? null), "logo", []);
        echo "\" 
            alt=\"\" class=\"imgm img-thumbnail\" style=\"width:150px;\"></a>
        </td>
        <td>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "nom", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "nom", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "email", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "email", []), "")) : ("")), "html", null, true);
        echo "
        </td>
         <td>
            ";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "telephone", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "telephone", []), "")) : ("")), "html", null, true);
        echo "
        </td>
         <td>
            ";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "adresse", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "adresse", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "Imm_fiscale", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "Imm_fiscale", []), "")) : ("")), "html", null, true);
        echo "
        </td>

        <td class=\"text-center\">
          <div
            class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center\"
            onclick=\"toggleCellule(";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "valid", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "valid", []), 0)) : (0)), "html", null, true);
        echo ");\"
          >
          <input type=\"radio\" name=\"input-";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" id=\"input-false-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" value=\"0\" ";
        if (((($this->getAttribute(($context["cellule"] ?? null), "valid", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "valid", []), 0)) : (0)) == 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable %cellule_name% input", ["%cellule_name%" => $this->getAttribute(($context["cellule"] ?? null), "nom", [])], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-false-";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">Off</label>
              <input type=\"radio\" name=\"input-";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" id=\"input-true-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\" value=\"1\" ";
        if (((($this->getAttribute(($context["cellule"] ?? null), "valid", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "valid", []), 0)) : (0)) != 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable %cellule_name% input", ["%cellule_name%" => $this->getAttribute(($context["cellule"] ?? null), "nom", [])], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-true-";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? null), "id_cellule", []), "html", null, true);
        echo "\">On</label>
              <span class=\"slide-button\"></span>
            </div>
        </td>

     <!-- actions -->
      <td>
      <div class=\"d-flex mt-2\">
      <a class=\"pr-2\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_view", ["id_cellule" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\">
      <span class=\"material-icons\">visibility</span></a>
      <form method=\"post\" action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_delete", ["id_cellule" => $this->getAttribute(($context["cellule"] ?? null), "id_cellule", [])]), "html", null, true);
        echo "\">
       <a type=\"submit\"><span class=\"material-icons\" style=\"color:red;\">delete</span></a>
      </form>
      </div>
      </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/cellule_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 56,  195 => 54,  184 => 46,  172 => 45,  168 => 44,  156 => 43,  149 => 41,  140 => 35,  134 => 32,  128 => 29,  122 => 26,  114 => 23,  105 => 19,  98 => 15,  94 => 14,  83 => 8,  73 => 4,  70 => 3,  66 => 64,  51 => 3,  34 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/cellule/views/templates/admin/cellule_list.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\cellule_list.html.twig");
    }
}
