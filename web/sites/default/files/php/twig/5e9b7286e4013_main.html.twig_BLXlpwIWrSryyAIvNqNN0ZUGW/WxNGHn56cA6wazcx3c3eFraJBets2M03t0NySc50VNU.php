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

/* themes/gavias_kama/templates/page/parts/main.html.twig */
class __TwigTemplate_c9673f0edc589eb8aa352f779f8ba70a585587bf864b403884241ea36737ea8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "if" => 12];
        $filters = ["escape" => 23];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 7
        echo "
<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 11
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 12
        echo "\t\t";
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_right", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_left", []))) {
            echo "\t
\t\t\t";
            // line 13
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 14
            echo "\t\t";
        } elseif (($this->getAttribute(($context["page"] ?? null), "sidebar_right", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_left", []))) {
            echo "\t
\t\t\t";
            // line 15
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
                // line 16
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-8 sb-r ";
                // line 17
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 18
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
                // line 19
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-8 col-md-push-4 sb-l ";
                // line 20
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 21
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null)), "html", null, true);
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 28
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t";
        // line 33
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 34
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 38
        echo "
\t\t\t\t";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 40
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 49
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
            // line 50
            echo "\t\t\t
\t\t\t";
            // line 51
            $context["cl_left"] = "col-md-4 col-md-pull-8 col-sm-12 col-xs-12";
            // line 52
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
                // line 53
                echo "\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 54
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null)), "html", null, true);
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 62
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
            // line 66
            echo "\t\t\t
\t\t\t";
            // line 67
            $context["cl_right"] = "col-lg-4 col-md-4 col-sm-12 col-xs-12";
            // line 68
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
                // line 69
                echo "\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 70
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null)), "html", null, true);
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 78
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/parts/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 78,  213 => 74,  208 => 72,  202 => 70,  199 => 69,  196 => 68,  194 => 67,  191 => 66,  189 => 65,  184 => 62,  177 => 58,  172 => 56,  166 => 54,  163 => 53,  160 => 52,  158 => 51,  155 => 50,  153 => 49,  146 => 44,  140 => 41,  137 => 40,  135 => 39,  132 => 38,  126 => 35,  123 => 34,  121 => 33,  118 => 32,  112 => 29,  109 => 28,  107 => 27,  100 => 23,  96 => 21,  90 => 20,  87 => 19,  85 => 18,  80 => 17,  77 => 16,  75 => 15,  70 => 14,  68 => 13,  63 => 12,  61 => 11,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/parts/main.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/parts/main.html.twig");
    }
}
