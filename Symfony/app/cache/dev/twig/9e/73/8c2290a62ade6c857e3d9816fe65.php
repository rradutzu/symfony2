<?php

/* FormFormBundle:Form:products.html.twig */
class __TwigTemplate_9e738c2290a62ade6c857e3d9816fe65 extends Twig_Template
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
        echo "Products";
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/formform/css/style.css"), "html", null, true);
        echo "\" /> ";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"menu\">
        <a href=\"../index\">Add web-sites</a><span> | </span><a href=\"./1\">Site List</a>
    </div>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"products\">
        <table border=\"1px solid black\" >
            <tr>
                <th>Site Name</th>
                <th>Site URL</th>
                <th>Active</th>
                <th>Created at</th>
            </tr>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
            echo "</td>
                    <td>
                    ";
            // line 25
            if (($this->getAttribute($this->getContext($context, "product"), "isActive") == 1)) {
                // line 26
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "url"), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "url"), "html", null, true);
                echo "
                    ";
            }
            // line 30
            echo "                    </td>
                    <td>
                        ";
            // line 32
            if (($this->getAttribute($this->getContext($context, "product"), "isActive") == 1)) {
                // line 33
                echo "                            Yes
                        ";
            } else {
                // line 35
                echo "                            No
                        ";
            }
            // line 37
            echo "                    </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "        </table>
    </div>
    <div id=\"pages\">
        ";
        // line 44
        if (($this->getContext($context, "pages") > 1)) {
            // line 45
            echo "            ";
            if (($this->getContext($context, "curr_page") != 1)) {
                // line 46
                echo "                <a href=\"./1\">First</a>
                <a href=\"./";
                // line 47
                echo twig_escape_filter($this->env, ($this->getContext($context, "curr_page") - 1), "html", null, true);
                echo "\">Prev</a>
            ";
            }
            // line 49
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                ";
                if (($this->getContext($context, "curr_page") == $this->getContext($context, "i"))) {
                    // line 51
                    echo "                    <a class='current' href=\"./";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 53
                    echo "                    <a href=\"./";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 56
            echo "            ";
            if (($this->getContext($context, "curr_page") != $this->getContext($context, "pages"))) {
                // line 57
                echo "                <a href=\"./";
                echo twig_escape_filter($this->env, ($this->getContext($context, "curr_page") + 1), "html", null, true);
                echo "\">Next</a>
                <a href=\"./";
                // line 58
                echo twig_escape_filter($this->env, $this->getContext($context, "pages"), "html", null, true);
                echo "\">Last</a>
            ";
            }
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "FormFormBundle:Form:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 57,  168 => 56,  162 => 55,  154 => 53,  146 => 51,  138 => 49,  133 => 47,  111 => 38,  108 => 37,  88 => 28,  38 => 11,  21 => 2,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 26,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 14,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 22,  66 => 21,  92 => 39,  86 => 24,  77 => 23,  57 => 22,  26 => 3,  89 => 20,  82 => 19,  42 => 12,  29 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 61,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 46,  125 => 44,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 32,  76 => 24,  73 => 23,  69 => 15,  56 => 13,  32 => 11,  24 => 6,  22 => 3,  25 => 4,  23 => 3,  19 => 1,  17 => 1,  68 => 20,  61 => 11,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 50,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 30,  81 => 21,  78 => 25,  72 => 16,  64 => 15,  53 => 12,  50 => 6,  48 => 10,  41 => 7,  39 => 7,  35 => 4,  33 => 8,  30 => 4,  27 => 6,  182 => 70,  176 => 58,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 41,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 33,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 22,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 14,  52 => 10,  49 => 9,  46 => 8,  43 => 7,  40 => 12,  37 => 9,  34 => 5,  31 => 7,  28 => 7,);
    }
}
