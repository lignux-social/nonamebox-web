<?php

/* partials/footer.html.twig */
class __TwigTemplate_6a3b6a2c28b7c595e602ac25f2b181b1423a2921c543b551dedd76f8e16edfaa extends Twig_Template
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
        echo "<footer id=\"footer\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_icons", array())) > 0)) {
            // line 3
            echo "    <ul class=\"actions\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_icons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 5
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["icon"], "link", array());
                echo "\" class=\"icon ";
                echo $this->getAttribute($context["icon"], "icon", array());
                echo "\"></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_items", array())) > 0)) {
            // line 11
            echo "    <ul class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li>";
                echo $this->getAttribute($context["item"], "item", array());
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
    ";
        }
        // line 17
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  67 => 15,  58 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  42 => 7,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\">
    {% if theme_config.footer_icons|length > 0 %}
    <ul class=\"actions\">
        {% for icon in theme_config.footer_icons %}
        <li><a href=\"{{ icon.link }}\" class=\"icon {{ icon.icon }}\"></a></li>
        {% endfor %}
    </ul>
    {% endif %}

    {% if theme_config.footer_items|length > 0 %}
    <ul class=\"menu\">
        {% for item in theme_config.footer_items %}
        <li>{{ item.item }}</li>
        {% endfor %}
    </ul>
    {% endif %}
</footer>
", "partials/footer.html.twig", "/home/gus/Workspace/grav_nnb/user/themes/big-picture/templates/partials/footer.html.twig");
    }
}
