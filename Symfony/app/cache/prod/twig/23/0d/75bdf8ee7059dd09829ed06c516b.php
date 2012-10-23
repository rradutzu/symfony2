<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_230d75bdf8ee7059dd09829ed06c516b extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 6,  77 => 39,  57 => 22,  41 => 7,  26 => 3,  33 => 7,  27 => 3,  89 => 20,  82 => 19,  72 => 16,  64 => 15,  53 => 13,  44 => 8,  42 => 7,  29 => 6,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  161 => 63,  157 => 61,  152 => 59,  145 => 55,  130 => 48,  125 => 46,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 34,  76 => 28,  73 => 27,  69 => 26,  61 => 24,  56 => 22,  39 => 5,  32 => 11,  24 => 4,  30 => 4,  22 => 2,  20 => 2,  25 => 4,  23 => 3,  19 => 1,  17 => 1,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 53,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 32,  106 => 31,  100 => 30,  96 => 29,  93 => 31,  90 => 27,  87 => 26,  83 => 24,  79 => 40,  71 => 19,  62 => 15,  58 => 23,  55 => 14,  52 => 11,  49 => 9,  46 => 14,  43 => 8,  40 => 6,  37 => 8,  34 => 7,  31 => 6,  28 => 3,);
    }
}
