<?php

/* ::base.html.twig */
class __TwigTemplate_e7982e3803e2d1cdf245a6e73c8e34f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 8
        echo "</head>
<body>
<div id=\"content\">
    ";
        // line 11
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "</div>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "My site manager";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  38 => 11,  21 => 2,  35 => 4,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  147 => 51,  121 => 47,  118 => 46,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  104 => 35,  85 => 28,  68 => 20,  65 => 14,  59 => 16,  45 => 9,  103 => 24,  94 => 21,  91 => 20,  81 => 21,  74 => 22,  70 => 14,  66 => 12,  48 => 10,  92 => 39,  86 => 24,  77 => 23,  57 => 22,  41 => 7,  26 => 3,  33 => 8,  27 => 6,  89 => 20,  82 => 19,  72 => 16,  64 => 15,  53 => 11,  44 => 7,  42 => 12,  29 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  161 => 63,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 24,  73 => 16,  69 => 15,  61 => 11,  56 => 7,  39 => 7,  32 => 11,  24 => 6,  30 => 4,  22 => 3,  20 => 2,  25 => 4,  23 => 3,  19 => 1,  17 => 1,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 32,  106 => 31,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 22,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 14,  52 => 10,  49 => 9,  46 => 7,  43 => 13,  40 => 12,  37 => 9,  34 => 5,  31 => 7,  28 => 7,);
    }
}
