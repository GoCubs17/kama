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

/* themes/gavias_kama/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig */
class __TwigTemplate_2c19badaddace1a171f2da97bc444577f4396b4f7aa156b3f6971e5cc9bb8261 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 9, "for" => 10];
        $filters = ["escape" => 2, "raw" => 15, "length" => 23];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'raw', 'length'],
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
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "slidershow-v1"], "method")), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   
   ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "      <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
   ";
        }
        // line 8
        echo "
   ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "      ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            echo "
      ";
            // line 13
            if ((($context["i"] ?? null) == 1)) {
                // line 14
                echo "         <div class=\"item\">
            <div class=\"post-large\">";
                // line 15
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
                echo "</div>
         </div>       
      ";
            } else {
                // line 18
                echo "         ";
                if ((($context["i"] ?? null) == 2)) {
                    echo " <div class=\"item\"> ";
                }
                // line 19
                echo "            ";
                if (((($context["i"] ?? null) % 2) == 0)) {
                    echo " <div class=\"items-small\"> ";
                }
                // line 20
                echo "               <div class=\"post-small-item\">
                  <div class=\"item content\">";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
                echo "</div>
               </div> 
            ";
                // line 23
                if ((((($context["i"] ?? null) % 2) == 1) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo "</div>";
                }
                // line 24
                echo "         ";
                if (((($context["i"] ?? null) == 5) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div> ";
                }
                // line 25
                echo "      ";
            }
            echo "  

      ";
            // line 27
            if ((($context["i"] ?? null) == 5)) {
                $context["i"] = 0;
            }
            // line 28
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 

";
        // line 30
        if (($context["attributes"] ?? null)) {
            // line 31
            echo "</div>
";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 33,  149 => 31,  147 => 30,  138 => 28,  134 => 27,  128 => 25,  123 => 24,  119 => 23,  114 => 21,  111 => 20,  106 => 19,  101 => 18,  95 => 15,  92 => 14,  90 => 13,  87 => 12,  84 => 11,  79 => 10,  77 => 9,  74 => 8,  68 => 6,  66 => 5,  63 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig");
    }
}
