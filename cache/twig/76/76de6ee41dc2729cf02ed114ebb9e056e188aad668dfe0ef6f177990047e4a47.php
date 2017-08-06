<?php

/* modular/info.html.twig */
class __TwigTemplate_a85863275164ee70ff0e8549b7ca4a8953a67cf636adb5e48d10f1c92f2cf092 extends Twig_Template
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
        $context["subpages"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/home"), "method"), "header", array()), "content", array()), "order", array()), "custom", array());
        // line 2
        $context["nextSubPageIndex"] =  -1;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subpages"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
            // line 4
            echo "    ";
            if (($this->getAttribute(($context["page"] ?? null), "folder", array()) == $context["subpage"])) {
                // line 5
                echo "        ";
                $context["nextSubPageIndex"] = $this->getAttribute($context["loop"], "index", array());
                // line 6
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<section id=\"";
        // line 9
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "folder", array()), array("_" => ""));
        echo "\" class=\"info main style2 dark fullscreen ";
        if (($this->getAttribute(($context["header"] ?? null), "content_position", array()) == "left")) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\" style=\"background-image: url('";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/images/overlay.png", true);
        echo "'), url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "background_image", array()), array(), "array"), "url", array());
        echo "');
\">
    <div class=\"content box style2\">
        <header>
            <h2>";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "heading", array());
        echo "</h2>
        </header>
        ";
        // line 15
        echo ($context["content"] ?? null);
        echo "
    </div>

    ";
        // line 18
        if ($this->getAttribute(($context["subpages"] ?? null), ($context["nextSubPageIndex"] ?? null), array(), "array")) {
            // line 19
            echo "    <a href=\"#";
            echo twig_replace_filter($this->getAttribute(($context["subpages"] ?? null), ($context["nextSubPageIndex"] ?? null), array(), "array"), array("_" => ""));
            echo "\" class=\"button style2 down anchored\">Next</a>
    ";
        }
        // line 21
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  94 => 19,  92 => 18,  86 => 15,  81 => 13,  64 => 9,  61 => 8,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set subpages =  page.find('/home').header.content.order.custom %}
{% set nextSubPageIndex = -1 %}
{% for subpage in subpages %}
    {% if page.folder == subpage %}
        {% set nextSubPageIndex = loop.index %}
    {% endif %}
{% endfor %}

<section id=\"{{ page.folder|replace({'_': ''}) }}\" class=\"info main style2 dark fullscreen {% if header.content_position == 'left' %}left{% else %}right{% endif %}\" style=\"background-image: url('{{ url('theme://assets/css/images/overlay.png', true) }}'), url('{{ page.media[header.background_image].url }}');
\">
    <div class=\"content box style2\">
        <header>
            <h2>{{ header.heading }}</h2>
        </header>
        {{ content }}
    </div>

    {% if subpages[nextSubPageIndex] %}
    <a href=\"#{{ subpages[nextSubPageIndex]|replace({'_': ''}) }}\" class=\"button style2 down anchored\">Next</a>
    {% endif %}
</section>
", "modular/info.html.twig", "/home/gus/Workspace/grav_nnb/user/themes/big-picture/templates/modular/info.html.twig");
    }
}
