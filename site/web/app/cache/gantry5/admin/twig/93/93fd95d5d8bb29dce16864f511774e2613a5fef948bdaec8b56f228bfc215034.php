<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_e4f275a3fd84be87cba6868f72499de164ab50094bdea09ce3f30845dfbbd6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_6255ecf949a83d0cc448e8e08a6c8cd07f392d7b6c15ed9625a8a8ef6f9cf1f8 = ($context["php_version"] ?? null)) && is_string($__internal_fe997dba7291a80d93ad45a0990de3555ff265d9150e0e9333bf797ee7f03fa4 = "5.4") && ('' === $__internal_fe997dba7291a80d93ad45a0990de3555ff265d9150e0e9333bf797ee7f03fa4 || 0 === strpos($__internal_6255ecf949a83d0cc448e8e08a6c8cd07f392d7b6c15ed9625a8a8ef6f9cf1f8, $__internal_fe997dba7291a80d93ad45a0990de3555ff265d9150e0e9333bf797ee7f03fa4)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/srv/www/www.dsourc.com/current/web/app/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
