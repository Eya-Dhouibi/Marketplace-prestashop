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

/* @Modules/cellule/views/templates/admin/index.html.twig */
class __TwigTemplate_3d0555f7630f3ac90ef69ed5f888e75a888b85909455efb5cac06ea891ed5058 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@Modules/cellule/views/templates/admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "  <div class=\"row\">
    <div class=\"col-sm-12\">
      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div class=\"_cellule_desktop\">
        <div class=\"content container-fluid\">
          ";
        // line 15
        echo "
          <div class=\"table-responsive\">
            <table class=\"table cellule mt-3\">
              ";
        // line 18
        $this->loadTemplate("@Modules/cellule/views/templates/admin/cellule_table.html.twig", "@Modules/cellule/views/templates/admin/index.html.twig", 18)->display($context);
        // line 19
        echo "              ";
        $this->loadTemplate("@Modules/cellule/views/templates/admin/cellule_list.html.twig", "@Modules/cellule/views/templates/admin/index.html.twig", 19)->display($context);
        // line 20
        echo "            </table>
          </div>

          <!---pagination-->
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/cellule/views/templates/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  56 => 19,  54 => 18,  49 => 15,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/cellule/views/templates/admin/index.html.twig", "C:\\laragon\\www\\prestashop\\modules\\cellule\\views\\templates\\admin\\index.html.twig");
    }
}
