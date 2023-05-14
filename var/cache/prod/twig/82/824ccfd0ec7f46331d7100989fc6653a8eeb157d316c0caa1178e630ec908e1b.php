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
            'cellule_form_table_header' => [$this, 'block_cellule_form_table_header'],
            'cellule_table_filters' => [$this, 'block_cellule_table_filters'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<thead class=\"with-filters\">
";
        // line 2
        $this->displayBlock('cellule_form_table_header', $context, $blocks);
        // line 34
        echo "   ";
        $this->displayBlock('cellule_table_filters', $context, $blocks);
        // line 119
        echo " </thead>";
    }

    // line 2
    public function block_cellule_form_table_header($context, array $blocks = [])
    {
        // line 3
        echo " <tr class=\"column-headers\">
 <th scope=\"col\" style=\"width: 2rem\"></th>
 <th scope=\"col\" style=\"width: 5rem\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), 1 => "id_cellule", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\">
   ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("logo", [], "Admin.Global"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nom", [], "Admin.Global"), 1 => "nom", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email", [], "Admin.Global"), 1 => "email", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\">
  ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("telephone", [], "Admin.Global"), 1 => "telephone", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("adresse", [], "Admin.Global"), 1 => "adresse", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
  <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Imm_fiscale", [], "Admin.Global"), 1 => "Imm_fiscale", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" class=\"text-center\">
  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), 1 => "active", 2 => ($context["orderBy"] ?? null), 3 => ($context["sortOrder"] ?? null)], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
  ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
 </th> 
</tr>
 ";
    }

    // line 34
    public function block_cellule_table_filters($context, array $blocks = [])
    {
        // line 35
        echo "       ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? null);
        echo " 
        <tr class=\"column-filters\">
          <th>&nbsp;</th>
          <th>&nbsp;</th> 
          <th>&nbsp;</th>  
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", [], "Modules.cellule.Admin"), "html", null, true);
        echo "\"
              name=\"filter_column_nom\"
              value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["filter_column_nom"] ?? null), "html", null, true);
        echo "\"
               aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_nom"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 48
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 49
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search email", [], "Modules.cellule.Admin"), "html", null, true);
        echo "\"
              name=\"filter_column_email\"
              value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["filter_column_email"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_email"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 59
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 60
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search téléphone", [], "Modules.cellule.Admin"), "html", null, true);
        echo "\"
              name=\"filter_column_telephone\"
              value=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["filter_column_telephone"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "telephone"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 70
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 71
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search adresse", [], "Modules.cellule.Admin"), "html", null, true);
        echo "\"
              name=\"filter_column_adresse\"
              value=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["filter_column_adresse"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_adresse"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 81
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 82
        echo "            />
          </th>
           <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Imm_fiscale", [], "Modules.cellule.Admin"), "html", null, true);
        echo "\"
              name=\"filter_column_Imm_fiscale\"
              value=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["filter_column_Imm_fiscale"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_Imm_fiscale"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 92
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 93
        echo "            />
          </th>
          <th id=\"cellule_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 97
        if (($context["filters_disabled"] ?? null)) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 100
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 101
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>

          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"cellules_filter_submit\"
              title=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>
      ";
    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/cellule_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  284 => 114,  278 => 111,  263 => 101,  257 => 100,  247 => 97,  241 => 93,  237 => 92,  233 => 91,  229 => 90,  224 => 88,  216 => 82,  212 => 81,  208 => 80,  204 => 79,  199 => 77,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  174 => 66,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  149 => 55,  141 => 49,  137 => 48,  133 => 47,  129 => 46,  124 => 44,  111 => 35,  108 => 34,  100 => 30,  94 => 27,  88 => 24,  82 => 21,  76 => 18,  70 => 15,  64 => 12,  58 => 9,  52 => 6,  47 => 3,  44 => 2,  40 => 119,  37 => 34,  35 => 2,  32 => 1,);
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
