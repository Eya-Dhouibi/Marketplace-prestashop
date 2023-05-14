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

/* @Modules/cellule/views/templates/admin/cellule_form.html.twig */
class __TwigTemplate_e0da1ec523309bf229b174416c77202f938fe60dbb6db84ca0224afc5ec22b69 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'cellule_form_table' => [$this, 'block_cellule_form_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/cellule/views/templates/admin/cellule_form.html.twig"));

        // line 1
        echo "<form
  name=\"cellule_list\"
  id=\"ellule_list\"
  method=\"post\"
  ";
        // line 7
        echo ">
  <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"table-responsive\">
    <table class=\"table cellule mt-3\">
      ";
        // line 12
        $this->displayBlock('cellule_form_table', $context, $blocks);
        // line 16
        echo "      </table>
      </div>
    </div>
  </div>

  ";
        // line 36
        echo "</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_cellule_form_table($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_form_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cellule_form_table"));

        echo "_column_nom
        ";
        // line 13
        echo twig_include($this->env, $context, "@Modules/cellule/views/templates/admin/cellule_table.html.twig");
        echo "
         ";
        // line 14
        $this->loadTemplate("@Modules/cellule/views/templates/admin/cellule_list.html.twig", "@Modules/cellule/views/templates/admin/cellule_form.html.twig", 14)->display($context);
        // line 15
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/cellule_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  85 => 14,  81 => 13,  70 => 12,  59 => 36,  52 => 16,  50 => 12,  43 => 7,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form
  name=\"cellule_list\"
  id=\"ellule_list\"
  method=\"post\"
  {# action=\"{{ path('admin_cellule', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
  orderingurl=\"{{ path('admin_cellule', {offset: 0, 'limit': 300, 'orderBy': 'position_ordering', 'sortOrder': sortOrder}) }}\" #}
>
  <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"table-responsive\">
    <table class=\"table cellule mt-3\">
      {% block cellule_form_table %}_column_nom
        {{ include('@Modules/cellule/views/templates/admin/cellule_table.html.twig')}}
         {% include '@Modules/cellule/views/templates/admin/cellule_list.html.twig' %}
      {% endblock %}
      </table>
      </div>
    </div>
  </div>

  {# {% if product_count_filtered > 20 %}
    <div class=\"row\">
      <div class=\"col-md-12\">

        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination', {
          'limit': limit,
          'offset': offset,
          'total': product_count_filtered,
          'caller_route': app.request.attributes.get('_route'),
          'caller_parameters': pagination_parameters,
          'limit_choices': pagination_limit_choices
          })) }}
      </div>
    </div>
  {% endif %} #}
</form>
", "@Modules/cellule/views/templates/admin/cellule_form.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\cellule_form.html.twig");
    }
}
