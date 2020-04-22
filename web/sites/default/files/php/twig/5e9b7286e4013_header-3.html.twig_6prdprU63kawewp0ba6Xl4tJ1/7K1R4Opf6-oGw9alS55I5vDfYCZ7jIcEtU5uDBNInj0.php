<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_kama/templates/page/header-3.html.twig */
class __TwigTemplate_29b29e3820f365dc5f58736e96ed315eb3b7cbacd2dbff2073a4616cc6447e9e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 3, "if" => 10];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\" class=\"header-v3\">
  
  ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_kama/templates/page/header-3.html.twig", 3)->display($context);
        // line 4
        echo "
    <div class=\"header-bottom ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-lg-2 col-md-2 col-xs-5\">
                ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 11
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                ";
        }
        // line 12
        echo "    
              </div>
              <div class=\"col-lg-10 col-md-10 col-xs-7 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  <div class=\"gva-offcanvas-inner\">
                    <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"fa fa-times\"></i></a></div>
                    ";
        // line 18
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 19
            echo "                      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                    ";
        }
        // line 20
        echo "  
                    ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 22
            echo "                      <div class=\"after-offcanvas hidden-lg hidden-md\">
                        ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                      </div>
                   ";
        }
        // line 26
        echo "                  </div>
                  
                  <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>

                  ";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "menu_another", [])) {
            // line 35
            echo "                    <div class=\"menu-another hidden-xs hidden-sm\">
                      <div id=\"menu-bar-another\" class=\"menu-bar\">
                        <span class=\"one\"></span>
                        <span class=\"two\"></span>
                        <span class=\"three\"></span>
                      </div>
                      <div class=\"content-inner\">
                        ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu_another", [])), "html", null, true);
            echo "
                      </div>
                    </div>  
                  ";
        }
        // line 46
        echo "
                  ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 48
            echo "                    <div class=\"gva-search-region search-region\">
                      <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                      <div class=\"search-content\">
                        <a class=\"close\"><i class=\"fa fa-times\"></i></a> 
                        <div class=\"content-inner\"> 
                          ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                        </div>
                      </div>  
                    </div>
                 ";
        }
        // line 58
        echo "                  
                </div>   
              </div>
           </div>
        </div>
      </div>
    </div>
   
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/header-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  150 => 53,  143 => 48,  141 => 47,  138 => 46,  131 => 42,  122 => 35,  120 => 34,  110 => 26,  104 => 23,  101 => 22,  99 => 21,  96 => 20,  90 => 19,  88 => 18,  80 => 12,  74 => 11,  72 => 10,  64 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/header-3.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/header-3.html.twig");
    }
}
