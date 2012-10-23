<?php

/* FormFormBundle:Form:form.html.twig */
class __TwigTemplate_7afc66d950317734f763e9bb90c0177b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Form";
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/formform/css/style.css"), "html", null, true);
        echo "\" /> ";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"menu\">
        <a href=\"index\">Add web-sites</a><span> | </span><a href=\"products/1\">Site List</a>
    </div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "isActive"), 'row');
        echo "
        <input type=\"submit\" value=\"Submit\" id=\"submit\" />
    </form>
    <div class='clear'>
        <h4>
            ";
        // line 21
        if (($this->getContext($context, "formMessage") == true)) {
            // line 22
            echo "                The form was submitted!!";
        }
        // line 24
        echo "</h4>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FormFormBundle:Form:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 14,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  92 => 39,  86 => 24,  77 => 23,  57 => 22,  26 => 3,  89 => 20,  82 => 19,  42 => 12,  29 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 24,  73 => 16,  69 => 15,  56 => 12,  32 => 11,  24 => 6,  22 => 3,  25 => 4,  23 => 3,  19 => 1,  17 => 1,  68 => 20,  61 => 13,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 21,  78 => 24,  72 => 16,  64 => 15,  53 => 11,  50 => 15,  48 => 10,  41 => 7,  39 => 7,  35 => 4,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 22,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 14,  52 => 10,  49 => 9,  46 => 7,  43 => 6,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}
