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
class __TwigTemplate_2aaeace12994b6870eb2234984c539263d1b273d81c57b0eec90a1b58e57b04f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_list.html.twig"));

        // line 1
        echo "<tbody>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cellules"] ?? $this->getContext($context, "cellules")));
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
        // line 61
        echo "</tbody>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_cellule_table_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_table_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_table_row"));

        // line 4
        echo "<tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-cellule-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_cellule-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "\" name=\"bulk_action_selected_cellule[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_cellule-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cellule"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cellule"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\"><img src=\"/prestashop/img/cellule_logo/";
        echo $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "logo", []);
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
    <button type=\"button\" class=\"toggle-cellule btn";
        // line 39
        if ($this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "valid", [])) {
            echo "-success";
        } else {
            echo "-danger";
        }
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", []), "html", null, true);
        echo "\" data-valid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "valid", []), "html", null, true);
        echo "\">
        ";
        // line 40
        if (($this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "valid", []) == 1)) {
            // line 41
            echo "            Accepter
        ";
        } else {
            // line 43
            echo "             Refuser
        ";
        }
        // line 45
        echo "    </button>
   </td>
    
     <!-- actions -->
      <td>
      <div class=\"d-flex mt-2\">
      <a class=\"pr-2\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_view", ["id_cellule" => $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", [])]), "html", null, true);
        echo "\">
      <span class=\"material-icons\">visibility</span></a>
      <form method=\"post\" action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cellule_delete", ["id_cellule" => $this->getAttribute(($context["cellule"] ?? $this->getContext($context, "cellule")), "id_cellule", [])]), "html", null, true);
        echo "\">
       <a type=\"submit\"><span class=\"material-icons\" style=\"color:red;\">delete</span></a>
      </form>
      </div>
      </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  200 => 53,  195 => 51,  187 => 45,  183 => 43,  179 => 41,  177 => 40,  165 => 39,  158 => 35,  152 => 32,  146 => 29,  140 => 26,  132 => 23,  123 => 19,  116 => 15,  112 => 14,  101 => 8,  91 => 4,  82 => 3,  72 => 61,  57 => 3,  40 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<tbody>
{% for cellule in cellules %}
 {% block cellule_table_row %}
<tr data-uniturl=\"{{ cellule.unit_action_url|default('#') }}\" data-cellule-id=\"{{ cellule.id_cellule }}\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_cellule-{{ cellule.id_cellule }}\" name=\"bulk_action_selected_cellule[]\" value=\"{{ cellule.id_cellule }}\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_cellule-{{ cellule.id_cellule }}\">
                {{ cellule.id_cellule }}
            </label>
        </td>
        <td>
            <a href=\"{{ cellule.url|default('') }}#tab-step1\"><img src=\"/prestashop/img/cellule_logo/{{ cellule.logo|raw }}\" 
            alt=\"\" class=\"imgm img-thumbnail\" style=\"width:150px;\"></a>
        </td>
        <td>
            <a href=\"{{ cellule.url|default('') }}#tab-step1\">{{ cellule.nom|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td>
            {{ cellule.email|default('') }}
        </td>
         <td>
            {{ cellule.telephone|default('') }}
        </td>
         <td>
            {{ cellule.adresse|default('') }}
        </td>
        <td>
            {{ cellule.Imm_fiscale|default('') }}
        </td>

       <td class=\"text-center\">
    <button type=\"button\" class=\"toggle-cellule btn{% if cellule.valid %}-success{% else %}-danger{% endif %}\" data-id=\"{{ cellule.id_cellule }}\" data-valid=\"{{ cellule.valid }}\">
        {% if cellule.valid ==1 %}
            Accepter
        {% else %}
             Refuser
        {% endif %}
    </button>
   </td>
    
     <!-- actions -->
      <td>
      <div class=\"d-flex mt-2\">
      <a class=\"pr-2\" href=\"{{ path('admin_cellule_view', {'id_cellule': cellule.id_cellule}) }}\">
      <span class=\"material-icons\">visibility</span></a>
      <form method=\"post\" action=\"{{ path('admin_cellule_delete', {'id_cellule': cellule.id_cellule}) }}\">
       <a type=\"submit\"><span class=\"material-icons\" style=\"color:red;\">delete</span></a>
      </form>
      </div>
      </td>
</tr>
{% endblock %}
{% endfor %}
</tbody>", "@Modules/cellule/views/templates/admin/cellule_list.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\cellule_list.html.twig");
    }
}
