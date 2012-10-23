<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_51d658419bfcb6b5152d61eda91b5396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 156,  323 => 150,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 105,  236 => 97,  226 => 89,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 69,  126 => 45,  84 => 28,  67 => 20,  171 => 57,  168 => 56,  162 => 55,  154 => 53,  146 => 52,  138 => 49,  133 => 47,  111 => 40,  108 => 39,  88 => 28,  38 => 11,  21 => 2,  299 => 100,  293 => 133,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 66,  196 => 74,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 26,  63 => 16,  36 => 7,  156 => 56,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 14,  59 => 16,  45 => 11,  103 => 24,  91 => 31,  74 => 22,  70 => 22,  66 => 21,  92 => 39,  86 => 24,  77 => 23,  57 => 22,  26 => 3,  89 => 20,  82 => 19,  42 => 10,  29 => 4,  223 => 88,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 61,  178 => 72,  170 => 64,  157 => 61,  152 => 54,  145 => 53,  130 => 46,  125 => 44,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 35,  76 => 24,  73 => 23,  69 => 15,  56 => 13,  32 => 5,  24 => 6,  22 => 3,  25 => 4,  23 => 3,  19 => 1,  17 => 1,  68 => 20,  61 => 11,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 50,  137 => 45,  129 => 46,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 30,  81 => 27,  78 => 25,  72 => 16,  64 => 19,  53 => 12,  50 => 6,  48 => 10,  41 => 7,  39 => 7,  35 => 4,  33 => 5,  30 => 4,  27 => 6,  182 => 70,  176 => 58,  169 => 62,  163 => 60,  160 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 41,  117 => 43,  114 => 41,  109 => 38,  106 => 37,  100 => 33,  96 => 34,  93 => 33,  90 => 28,  87 => 29,  83 => 22,  79 => 25,  71 => 19,  62 => 17,  58 => 16,  55 => 16,  52 => 13,  49 => 13,  46 => 11,  43 => 7,  40 => 8,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
