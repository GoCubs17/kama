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

/* themes/gavias_kama/templates/page/header.html.twig */
class __TwigTemplate_0c72a7795223ec8157e476bce995a29ebc901bb7d0b43cdf88796767cc04cf08 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 3, "if" => 10];
        $filters = ["escape" => 11, "t" => 88];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 't'],
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
        echo "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_kama/templates/page/header.html.twig", 3)->display($context);
        // line 4
        echo "
   <div class=\"header-main\">
      <div class=\"container\">
         <div class=\"header-main-inner\">
            <div class=\"row\">
               <div class=\"col-lg-2 col-md-2 col-xs-12\">
               ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 11
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
               ";
        }
        // line 13
        echo "               </div>

               <div class=\"col-lg-10 col-md-10 col-xs-12 header-right\">
                  ";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "header_right", [])) {
            // line 17
            echo "                     <div class=\"header-right-inner\">
                        ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
            echo "
                     </div>
                   ";
        }
        // line 21
        echo "               </div>
            </div>
         </div>
      </div>
   </div>

    <div class=\"header-bottom ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-xs-12 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  
                  <div class=\"gva-offcanvas-inner\">
                    <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"fa fa-times\"></i></a></div>
                    ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 37
            echo "                      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                    ";
        }
        // line 38
        echo "  
                    ";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 40
            echo "                      <div class=\"after-offcanvas hidden-lg hidden-md\">
                        ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                      </div>
                   ";
        }
        // line 44
        echo "                  </div>
                  
                  <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>

                  ";
        // line 52
        if ($this->getAttribute(($context["page"] ?? null), "menu_another", [])) {
            // line 53
            echo "                    <div class=\"menu-another hidden-xs hidden-sm\">
                      <div id=\"menu-bar-another\" class=\"menu-bar\">
                        <span class=\"one\"></span>
                        <span class=\"two\"></span>
                        <span class=\"three\"></span>
                      </div>
                      <div class=\"content-inner\">
                        ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu_another", [])), "html", null, true);
            echo "
                      </div>
                    </div>  
                  ";
        }
        // line 64
        echo "
                  ";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 66
            echo "                    <div class=\"gva-search-region search-region\">
                      <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                      <div class=\"search-content\">
                        <a class=\"close\"><i class=\"fa fa-times\"></i></a> 
                        <div class=\"content-inner\"> 
                          ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                        </div>
                      </div>  
                    </div>
                 ";
        }
        // line 76
        echo "                 
                </div>   
              </div>
           </div>
        </div>
      </div>
   </div>

   ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "breaking_news", [])) {
            // line 85
            echo "      <div class=\"breaking-news hidden\">
        <div class=\"container clearfix\">
          <div class=\"title\">
            ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breaking news"));
            echo "
          </div>
          <div class=\"content-inner\">";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breaking_news", [])), "html", null, true);
            echo "</div> 
        </div> 
      </div>
    ";
        }
        // line 94
        echo "   
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 94,  205 => 90,  200 => 88,  195 => 85,  193 => 84,  183 => 76,  175 => 71,  168 => 66,  166 => 65,  163 => 64,  156 => 60,  147 => 53,  145 => 52,  135 => 44,  129 => 41,  126 => 40,  124 => 39,  121 => 38,  115 => 37,  113 => 36,  101 => 27,  93 => 21,  87 => 18,  84 => 17,  82 => 16,  77 => 13,  71 => 11,  69 => 10,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/header.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/header.html.twig");
    }
}
