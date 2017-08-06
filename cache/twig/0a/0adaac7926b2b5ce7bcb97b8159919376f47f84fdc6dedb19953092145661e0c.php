<?php

/* error.html.twig */
class __TwigTemplate_88ea4862ee31a884d66631523349a73093e433d19d9b5aef28da65c5404d8270 extends Twig_Template
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
        echo "<h1>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR");
        echo " ";
        echo $this->getAttribute(($context["header"] ?? null), "http_response_code", array());
        echo "</h1>

<p>";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'PLUGIN_ERROR.ERROR'|t }} {{ header.http_response_code }}</h1>

<p>{{ page.content|raw }}</p>
", "error.html.twig", "/home/gus/Workspace/grav_nnb/user/plugins/error/templates/error.html.twig");
    }
}
