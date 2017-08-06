<?php

/* partials/header.html.twig */
class __TwigTemplate_66764fbe3b4845c84ee56a34481904c0f76680878257852fe4f3d56081433c4c extends Twig_Template
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
        echo "<header id=\"header\">
    <h1 id=\"logo\"><a href=\"";
        // line 2
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"> <img src=\"";
        echo $this->getAttribute(($context["site"] ?? null), "logo", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "\" class=\"header-logo\"></a></h1>
    <nav id=\"nav\">
        <ul>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "            <li><a href=\"#";
            echo twig_replace_filter($this->getAttribute($context["module"], "folder", array()), array("_" => ""));
            echo "\">";
            echo $this->getAttribute($context["module"], "menu", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  36 => 6,  32 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
    <h1 id=\"logo\"><a href=\"{{ base_url == '' ? '/' : base_url }}\"> <img src=\"{{ site.logo }}\" alt=\"{{ site.title }}\" class=\"header-logo\"></a></h1>
    <nav id=\"nav\">
        <ul>
            {% for module in page.collection() %}
            <li><a href=\"#{{ module.folder|replace({'_': ''}) }}\">{{ module.menu }}</a></li>
            {% endfor %}
        </ul>
    </nav>
</header>
", "partials/header.html.twig", "/home/gus/Workspace/grav_nnb/user/themes/big-picture/templates/partials/header.html.twig");
    }
}
