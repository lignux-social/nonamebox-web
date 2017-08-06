<?php

/* partials/head.html.twig */
class __TwigTemplate_47d521fc9d78e11e4ca4f739c40e30cd984fe03e064c44e57d8368f5038bee10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute(($context["site"] ?? null), "title", array());
            echo " ";
        }
        echo "</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 7
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", array()) != "generator")) {
                // line 8
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", array())) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", array())) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", array())) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", array())) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", array());
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "robots", array())) {
            // line 13
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", array());
            echo "\">
";
        }
        // line 15
        echo "
<link rel=\"icon\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    ";
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/font-awesome.min.css"), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/main.css"), "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/nnb_custom.css"), "method");
        // line 23
        echo "
    ";
        // line 24
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 25
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 9))) {
            // line 29
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 30
            echo "    ";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 37
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 41
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/ie/respond.min.js"), "method");
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 45
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/jquery.poptrox.min.js"), "method");
        // line 46
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/jquery.dropotron.min.js"), "method");
        // line 47
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/jquery.onvisible.min.js"), "method");
        // line 48
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/jquery.scrolly.min.js"), "method");
        // line 49
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/jquery.scrollex.min.js"), "method");
        // line 50
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 51
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/util.js"), "method");
        // line 52
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://assets/js/main.js"), "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 52,  209 => 51,  206 => 50,  203 => 49,  200 => 48,  197 => 47,  194 => 46,  191 => 45,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  178 => 40,  175 => 39,  172 => 38,  169 => 37,  166 => 36,  163 => 35,  158 => 30,  155 => 29,  153 => 28,  150 => 27,  147 => 26,  144 => 25,  142 => 24,  139 => 23,  136 => 22,  133 => 21,  131 => 20,  128 => 19,  125 => 18,  118 => 55,  115 => 54,  113 => 35,  108 => 33,  105 => 32,  103 => 18,  98 => 16,  95 => 15,  89 => 13,  87 => 12,  84 => 11,  50 => 8,  47 => 7,  43 => 6,  28 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

<link rel=\"icon\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

{% block stylesheets %}
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    {% do assets.add('theme://assets/css/font-awesome.min.css') %}
    {% do assets.add('theme://assets/css/main.css') %}
    {% do assets.add('theme://assets/css/nnb_custom.css') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/css/ie8.css') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
        {% do assets.add('theme://assets/css/ie9.css') %}
    {% endif %}
{% endblock %}

{{ assets.css() }}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/html5shiv.js') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/respond.min.js') %}
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://assets/js/jquery.poptrox.min.js') %}
    {% do assets.add('theme://assets/js/jquery.dropotron.min.js') %}
    {% do assets.add('theme://assets/js/jquery.onvisible.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrolly.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrollex.min.js') %}
    {% do assets.add('theme://assets/js/skel.min.js') %}
    {% do assets.add('theme://assets/js/util.js') %}
    {% do assets.add('theme://assets/js/main.js') %}
{% endblock %}

{{ assets.js() }}

{% endblock head %}
", "partials/head.html.twig", "/home/gus/Workspace/grav_nnb/user/themes/big-picture/templates/partials/head.html.twig");
    }
}
