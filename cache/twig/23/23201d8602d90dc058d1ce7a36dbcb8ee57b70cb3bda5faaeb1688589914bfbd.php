<?php

/* partials/base.html.twig */
class __TwigTemplate_4c043e5c893c100bdb9d878da5ea98af4f27a3ad5d5b2359b208af0222494aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 5
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 5)->display($context);
        // line 6
        echo "    </head>
    <body>
        ";
        // line 8
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  36 => 8,  32 => 6,  30 => 5,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% include 'partials/head.html.twig' %}
    </head>
    <body>
        {% include 'partials/header.html.twig' %}

        {% block content %}{% endblock %}

        {% include 'partials/footer.html.twig' %}
    </body>
</html>
", "partials/base.html.twig", "/home/gus/Workspace/grav_nnb/user/themes/big-picture/templates/partials/base.html.twig");
    }
}
