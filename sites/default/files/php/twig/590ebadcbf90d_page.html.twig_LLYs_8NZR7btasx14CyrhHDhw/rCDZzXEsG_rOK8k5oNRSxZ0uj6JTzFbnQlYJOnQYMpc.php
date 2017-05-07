<?php

/* themes/gimnasio_center/templates/system/page.html.twig */
class __TwigTemplate_9f8937c066fd6d06555404964c1ccf6426ea48cae3e1ca071759050f5ecb1b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 77);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('header', $context, $blocks);
        }
        // line 113
        echo "
";
        // line 115
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 116
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
";
        }
        // line 118
        echo "
";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 178
        echo "
";
        // line 180
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 181
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 183
        echo "
";
        // line 184
        $context["columns"] = ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) ? ("columns") : (""));
        // line 185
        echo "
";
        // line 186
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()) || (isset($context["columns"]) ? $context["columns"] : null))) {
            // line 187
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ("")));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navigation\">
        <div class=\"navbar-header\">
          ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
          ";
        // line 75
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 76
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 83
        echo "        </div>

        ";
        // line 86
        echo "          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            ";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 88
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
            ";
        }
        // line 90
        echo "            ";
        // line 91
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_nav", array())) {
            // line 92
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_nav", array()), "html", null, true));
            echo "
            ";
        }
        // line 94
        echo "          </div>
      </div>

        ";
        // line 98
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 99
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 102
            echo "        ";
        }
        // line 103
        echo "
      <div class=\"top-head\">
        ";
        // line 106
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 107
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 109
        echo "      </div>
    </header>
  ";
    }

    // line 99
    public function block_highlighted($context, array $blocks = array())
    {
        // line 100
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 120
    public function block_main($context, array $blocks = array())
    {
        // line 121
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
    <div class=\"container\">
      <div class=\"row\">

        ";
        // line 126
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 127
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 132
            echo "        ";
        }
        // line 133
        echo "
        ";
        // line 135
        echo "        ";
        // line 136
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 137
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 138
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 139
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 140
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")));
        // line 143
        echo "        <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

          ";
        // line 146
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 147
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 150
            echo "          ";
        }
        // line 151
        echo "
          ";
        // line 153
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 154
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 157
            echo "          ";
        }
        // line 158
        echo "
          ";
        // line 160
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "        </section>

        ";
        // line 167
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 168
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 173
            echo "        ";
        }
        // line 174
        echo "      </div>
    </div>
  </div>
";
    }

    // line 127
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 128
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 147
    public function block_action_links($context, array $blocks = array())
    {
        // line 148
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 154
    public function block_help($context, array $blocks = array())
    {
        // line 155
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 160
    public function block_content($context, array $blocks = array())
    {
        // line 161
        echo "            <a id=\"main-content\"></a>
            ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 168
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 169
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 187
    public function block_footer($context, array $blocks = array())
    {
        // line 188
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 189
        if ((isset($context["columns"]) ? $context["columns"] : null)) {
            // line 190
            echo "      <div class=\"footer_top\">
        <div class=\"";
            // line 191
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
          <div class=\"row\">
            ";
            // line 193
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 194
                echo "            <div class=\"col-sm-4\">
              ";
                // line 195
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 198
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 199
                echo "            <div class=\"col-sm-4\">
              ";
                // line 200
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 203
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 204
                echo "            <div class=\"col-sm-4\">
              ";
                // line 205
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 208
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 209
                echo "            <div class=\"col-sm-4\">
              ";
                // line 210
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
            </div>
            ";
            }
            // line 213
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 217
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_nav", array())) {
            // line 218
            echo "      <div class=\"footer_nav\">
        <div class=\"";
            // line 219
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
          ";
            // line 220
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_nav", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 224
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 225
            echo "      <div class=\"footer_bottom\">
        <div class=\"";
            // line 226
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
          ";
            // line 227
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 231
        echo "    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/gimnasio_center/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 231,  443 => 227,  439 => 226,  436 => 225,  433 => 224,  426 => 220,  422 => 219,  419 => 218,  416 => 217,  410 => 213,  404 => 210,  401 => 209,  398 => 208,  392 => 205,  389 => 204,  386 => 203,  380 => 200,  377 => 199,  374 => 198,  368 => 195,  365 => 194,  363 => 193,  358 => 191,  355 => 190,  353 => 189,  350 => 188,  347 => 187,  340 => 170,  337 => 169,  334 => 168,  328 => 162,  325 => 161,  322 => 160,  315 => 155,  312 => 154,  305 => 148,  302 => 147,  295 => 129,  292 => 128,  289 => 127,  282 => 174,  279 => 173,  276 => 168,  273 => 167,  269 => 164,  266 => 160,  263 => 158,  260 => 157,  257 => 154,  254 => 153,  251 => 151,  248 => 150,  245 => 147,  242 => 146,  236 => 143,  234 => 140,  233 => 139,  232 => 138,  231 => 137,  230 => 136,  228 => 135,  225 => 133,  222 => 132,  219 => 127,  216 => 126,  210 => 121,  207 => 120,  200 => 100,  197 => 99,  191 => 109,  185 => 107,  182 => 106,  178 => 103,  175 => 102,  172 => 99,  169 => 98,  164 => 94,  158 => 92,  155 => 91,  153 => 90,  147 => 88,  145 => 87,  142 => 86,  138 => 83,  129 => 77,  126 => 76,  123 => 75,  119 => 73,  112 => 70,  110 => 67,  109 => 66,  108 => 64,  106 => 63,  103 => 62,  97 => 187,  95 => 186,  92 => 185,  90 => 184,  87 => 183,  81 => 181,  79 => 180,  76 => 178,  74 => 120,  71 => 118,  65 => 116,  63 => 115,  60 => 113,  56 => 62,  54 => 61,  52 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gimnasio_center/templates/system/page.html.twig", "/var/www/html/angelhack/themes/gimnasio_center/templates/system/page.html.twig");
    }
}
