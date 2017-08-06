<?php

/* forms/fields/radio/radio.html.twig */
class __TwigTemplate_139e738c9dff10c83f59b5588c58bbb32ef5a59549779ff209e07c7d5852b2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/radio/radio.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_input($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            echo "        ";
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", array()), $this->getAttribute(($context["field"] ?? null), "name", array()))) : ($this->getAttribute(($context["field"] ?? null), "name", array()))) . "-") . $context["key"]);
            // line 9
            echo "
        <span class=\"radio\">
            <input type=\"radio\"
                   value=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                   id=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                   ";
            // line 15
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "checked=\"checked\" ";
            }
            // line 16
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 17
            echo "                   ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 18
            echo "            />
            <label style=\"display: inline\" class=\"inline\" for=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"]);
            } else {
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]);
            }
            echo "</label>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/radio/radio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  75 => 18,  70 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  44 => 9,  41 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}

{% block input %}
    {% for key, text in field.options %}
        {% set id = field.id|default(field.name) ~ '-' ~ key %}

        <span class=\"radio\">
            <input type=\"radio\"
                   value=\"{{ key|e }}\"
                   id=\"{{ id|e }}\"
                   name=\"{{ (scope ~ field.name)|fieldName }}\"
                   {% if key == value %}checked=\"checked\" {% endif %}
                   {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                   {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
            />
            <label style=\"display: inline\" class=\"inline\" for=\"{{ id|e }}\">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu|raw }}{% else %}{{ text|t|raw }}{% endif %}</label>
        </span>
    {% endfor %}
{% endblock %}
", "forms/fields/radio/radio.html.twig", "/home/gus/Workspace/grav_nnb/user/plugins/form/templates/forms/fields/radio/radio.html.twig");
    }
}
