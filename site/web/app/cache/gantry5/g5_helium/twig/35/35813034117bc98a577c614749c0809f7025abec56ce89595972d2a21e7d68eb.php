<?php

/* page.html.twig */
class __TwigTemplate_cee8b18be2714c26302f4b89d96169777131824a6eaba27a6d91f1b5ea44595b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["twigTemplate"] = "page.html.twig";
        // line 3
        $context["scope"] = "page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"content-wrapper\">
            <section class=\"entry\">

                ";
        // line 11
        $this->loadTemplate(array(0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/content.html.twig"), "page.html.twig", 11)->display($context);
        // line 12
        echo "
            </section>
        </div> <!-- /content-wrapper -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"partials/page.html.twig\" %}
{% set twigTemplate = 'page.html.twig' %}
{% set scope = 'page' %}

{% block content %}

    <div class=\"platform-content\">
        <div class=\"content-wrapper\">
            <section class=\"entry\">

                {% include ['partials/content-' ~ scope ~ '.html.twig', 'partials/content.html.twig'] %}

            </section>
        </div> <!-- /content-wrapper -->
    </div>

{% endblock %}
", "page.html.twig", "/srv/www/www.dsourc.com/current/web/app/themes/g5_helium/views/page.html.twig");
    }
}
