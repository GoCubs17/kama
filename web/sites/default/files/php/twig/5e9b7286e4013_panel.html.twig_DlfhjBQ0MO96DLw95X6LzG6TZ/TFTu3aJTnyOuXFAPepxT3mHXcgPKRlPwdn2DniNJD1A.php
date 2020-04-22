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

/* themes/gavias_kama/templates/page/parts/panel.html.twig */
class __TwigTemplate_94ed8c811aa9ed4832f72aa1acbbe859a91a37d9fabb2a71256f6b1d1ea170e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 2];
        $filters = ["escape" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        if (($this->getAttribute(($context["page"] ?? null), "panel_first", []) || ($context["panel_second"] ?? null))) {
            // line 2
            echo "    ";
            $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 3
            echo "    ";
            $context["nub_panel"] = 0;
            // line 4
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "panel_first", [])) {
                echo " 
      ";
                // line 5
                $context["nub_panel"] = (($context["nub_panel"] ?? null) + 1);
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "panel_second", [])) {
                echo "  
      ";
                // line 8
                $context["nub_panel"] = (($context["nub_panel"] ?? null) + 1);
                // line 9
                echo "    ";
            }
            // line 10
            echo "    
    ";
            // line 11
            if ((($context["nub_panel"] ?? null) == "1")) {
                // line 12
                echo "       ";
                $context["cl_panel"] = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
                // line 13
                echo "    ";
            } elseif ((($context["nub_panel"] ?? null) == "2")) {
                // line 14
                echo "       ";
                $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
                // line 15
                echo "    ";
            }
            echo "  

    <div class=\"area area-panel\">
      <div class=\"container\">
        <div class=\"area-panel-inner\">
          <div class=\"row\"> 
            ";
            // line 21
            if ($this->getAttribute(($context["page"] ?? null), "panel_first", [])) {
                // line 22
                echo "              <div class=\"panel_first ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_panel"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"panel-inner\">
                  ";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first", [])), "html", null, true);
                echo "
                </div>  
              </div>
            ";
            }
            // line 27
            echo " 
            ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "panel_second", [])) {
                // line 29
                echo "              <div class=\"panel_second ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_panel"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"panel-inner\">
                  ";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 34
            echo " 
          </div>
        </div>  
      </div>  
    </div>
  ";
        }
        // line 39
        echo " ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/parts/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  140 => 34,  133 => 31,  127 => 29,  125 => 28,  122 => 27,  115 => 24,  109 => 22,  107 => 21,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  86 => 11,  83 => 10,  80 => 9,  78 => 8,  73 => 7,  70 => 6,  68 => 5,  63 => 4,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/parts/panel.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/parts/panel.html.twig");
    }
}
