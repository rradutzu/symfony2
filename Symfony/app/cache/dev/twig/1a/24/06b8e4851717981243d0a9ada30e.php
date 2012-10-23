<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1a2406b8e4851717981243d0a9ada30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  60 => 16,  54 => 13,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  207 => 77,  205 => 76,  200 => 73,  191 => 68,  188 => 67,  167 => 56,  105 => 27,  95 => 23,  186 => 66,  172 => 58,  165 => 64,  132 => 54,  47 => 13,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  236 => 97,  226 => 87,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 69,  126 => 45,  84 => 29,  67 => 20,  171 => 57,  168 => 56,  162 => 63,  154 => 53,  146 => 46,  138 => 42,  133 => 47,  111 => 40,  108 => 42,  88 => 28,  38 => 11,  21 => 2,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 86,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 96,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 63,  175 => 59,  158 => 57,  107 => 41,  101 => 25,  80 => 19,  63 => 16,  36 => 5,  156 => 56,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 34,  65 => 14,  59 => 12,  45 => 9,  103 => 24,  91 => 31,  74 => 17,  70 => 22,  66 => 20,  92 => 39,  86 => 20,  77 => 18,  57 => 22,  26 => 3,  89 => 35,  82 => 33,  42 => 8,  29 => 4,  223 => 88,  214 => 90,  210 => 78,  203 => 84,  199 => 83,  194 => 69,  192 => 62,  189 => 70,  187 => 77,  184 => 61,  178 => 72,  170 => 64,  157 => 61,  152 => 48,  145 => 58,  130 => 46,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 39,  98 => 24,  76 => 24,  73 => 23,  69 => 21,  56 => 14,  32 => 5,  24 => 6,  22 => 3,  25 => 3,  23 => 3,  19 => 1,  17 => 1,  68 => 15,  61 => 11,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 50,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 39,  104 => 35,  99 => 33,  94 => 30,  81 => 28,  78 => 32,  72 => 16,  64 => 19,  53 => 9,  50 => 14,  48 => 10,  41 => 7,  39 => 8,  35 => 4,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 58,  169 => 57,  163 => 54,  160 => 53,  155 => 56,  151 => 62,  149 => 47,  141 => 43,  136 => 55,  134 => 50,  131 => 43,  128 => 39,  120 => 51,  117 => 43,  114 => 31,  109 => 38,  106 => 41,  100 => 33,  96 => 34,  93 => 36,  90 => 21,  87 => 29,  83 => 22,  79 => 25,  71 => 16,  62 => 17,  58 => 16,  55 => 16,  52 => 13,  49 => 13,  46 => 11,  43 => 7,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
