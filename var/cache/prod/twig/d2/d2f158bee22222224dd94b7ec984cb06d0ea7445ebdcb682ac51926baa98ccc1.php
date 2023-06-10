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
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "    <div class=\"row\">
     <div class=\"col-sm-12\">
       ";
        // line 7
        $this->loadTemplate("@Modules/cellule/views/templates/admin/grid_panel.html.twig", "@Modules/cellule/views/templates/admin/index.html.twig", 7)->display(twig_array_merge($context, ["grid" => ($context["celluleGrid"] ?? null)]));
        // line 8
        echo "        </div>
    </div>
    
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../modules/cellule/views/public/grid.bundle.js"), "html", null, true);
        echo "\"></script>
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
        return array (  65 => 16,  59 => 14,  56 => 13,  49 => 8,  47 => 7,  43 => 5,  40 => 4,  30 => 1,);
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
