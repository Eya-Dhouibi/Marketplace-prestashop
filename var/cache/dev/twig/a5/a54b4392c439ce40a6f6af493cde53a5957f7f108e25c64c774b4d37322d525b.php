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
class __TwigTemplate_f51ec2059939f11403f095180bb2e64491b260e311bd4500865b144dbb20befc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_table.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_cellule_form_table_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_form_table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_form_table_header"));

        // line 3
        echo " <tr class=\"column-headers\">
 <th scope=\"col\" style=\"width: 2rem\"></th>
 <th scope=\"col\" style=\"width: 5rem\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), 1 => "id_cellule", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nom", [], "Admin.Global"), 1 => "nom", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email", [], "Admin.Global"), 1 => "email", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\">
  ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("telephone", [], "Admin.Global"), 1 => "telephone", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("adresse", [], "Admin.Global"), 1 => "adresse", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
        echo "
 </th>
  <th scope=\"col\" style=\"width: 9%\">
  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Imm_fiscale", [], "Admin.Global"), 1 => "Imm_fiscale", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
        echo "
 </th>
 <th scope=\"col\" class=\"text-center\">
  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "sortable_column_header", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), 1 => "active", 2 => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), 3 => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))], "method"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_cellule_table_filters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_table_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_table_filters"));

        // line 35
        echo "       ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"));
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
        echo twig_escape_filter($this->env, ($context["filter_column_nom"] ?? $this->getContext($context, "filter_column_nom")), "html", null, true);
        echo "\"
               aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_nom"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 48
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
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
        echo twig_escape_filter($this->env, ($context["filter_column_email"] ?? $this->getContext($context, "filter_column_email")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_email"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 59
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
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
        echo twig_escape_filter($this->env, ($context["filter_column_telephone"] ?? $this->getContext($context, "filter_column_telephone")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "telephone"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 70
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
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
        echo twig_escape_filter($this->env, ($context["filter_column_adresse"] ?? $this->getContext($context, "filter_column_adresse")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_adresse"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 81
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
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
        echo twig_escape_filter($this->env, ($context["filter_column_Imm_fiscale"] ?? $this->getContext($context, "filter_column_Imm_fiscale")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_Imm_fiscale"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 92
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 93
        echo "            />
          </th>
          <th id=\"cellule_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 97
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 100
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 101
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/cellule_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  314 => 114,  308 => 111,  293 => 101,  287 => 100,  277 => 97,  271 => 93,  267 => 92,  263 => 91,  259 => 90,  254 => 88,  246 => 82,  242 => 81,  238 => 80,  234 => 79,  229 => 77,  221 => 71,  217 => 70,  213 => 69,  209 => 68,  204 => 66,  196 => 60,  192 => 59,  188 => 58,  184 => 57,  179 => 55,  171 => 49,  167 => 48,  163 => 47,  159 => 46,  154 => 44,  141 => 35,  132 => 34,  118 => 30,  112 => 27,  106 => 24,  100 => 21,  94 => 18,  88 => 15,  82 => 12,  76 => 9,  70 => 6,  65 => 3,  56 => 2,  46 => 119,  43 => 34,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<thead class=\"with-filters\">
{% block cellule_form_table_header %}
 <tr class=\"column-headers\">
 <th scope=\"col\" style=\"width: 2rem\"></th>
 <th scope=\"col\" style=\"width: 5rem\">
    {{ ps.sortable_column_header(\"ID\"|trans({}, 'Admin.Global'), 'id_cellule', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\">
   {{ \"logo\"|trans({}, 'Admin.Global') }}
 </th>
 <th scope=\"col\">
  {{ ps.sortable_column_header(\"nom\"|trans({}, 'Admin.Global'), 'nom', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  {{ ps.sortable_column_header(\"email\"|trans({}, 'Admin.Global'), 'email', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\">
  {{ ps.sortable_column_header(\"telephone\"|trans({}, 'Admin.Global'), 'telephone', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\" style=\"width: 9%\">
  {{ ps.sortable_column_header(\"adresse\"|trans({}, 'Admin.Global'), 'adresse', orderBy, sortOrder) }}
 </th>
  <th scope=\"col\" style=\"width: 9%\">
  {{ ps.sortable_column_header(\"Imm_fiscale\"|trans({}, 'Admin.Global'), 'Imm_fiscale', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\" class=\"text-center\">
  {{ ps.sortable_column_header(\"Status\"|trans({}, 'Admin.Global'), 'active', orderBy, sortOrder) }}
 </th>
 <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
  {{ \"Actions\"|trans({}, 'Admin.Global') }}
 </th> 
</tr>
 {% endblock %}
   {% block cellule_table_filters %}
       {% set filters_disabled = activate_drag_and_drop %} 
        <tr class=\"column-filters\">
          <th>&nbsp;</th>
          <th>&nbsp;</th> 
          <th>&nbsp;</th>  
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search name\"|trans({}, 'Modules.cellule.Admin') }}\"
              name=\"filter_column_nom\"
              value=\"{{ filter_column_nom }}\"
               aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_nom'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search email\"|trans({}, 'Modules.cellule.Admin') }}\"
              name=\"filter_column_email\"
              value=\"{{ filter_column_email }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_email'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search téléphone\"|trans({}, 'Modules.cellule.Admin') }}\"
              name=\"filter_column_telephone\"
              value=\"{{ filter_column_telephone }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'telephone'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search adresse\"|trans({}, 'Modules.cellule.Admin') }}\"
              name=\"filter_column_adresse\"
              value=\"{{ filter_column_adresse }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_adresse'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
           <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search Imm_fiscale\"|trans({}, 'Modules.cellule.Admin') }}\"
              name=\"filter_column_Imm_fiscale\"
              value=\"{{ filter_column_Imm_fiscale }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_Imm_fiscale'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th id=\"cellule_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"{% if filters_disabled %} disabled{% endif %} aria-label=\"{{ \"%inputId% select\"|trans({'%inputId%': 'filter_column_active'}, 'Admin.Global') }}\"
                >
                <option value=\"\"></option>
                <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
              </select>
            </div>
          </th>

          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"cellules_filter_submit\"
              title=\"{{ \"Search\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">search</i>
              {{ \"Search\"|trans({}, 'Admin.Actions') }}
            </button>
          </th>
        </tr>
      {% endblock %}
 </thead>", "@Modules/cellule/views/templates/admin/cellule_table.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\cellule_table.html.twig");
    }
}
