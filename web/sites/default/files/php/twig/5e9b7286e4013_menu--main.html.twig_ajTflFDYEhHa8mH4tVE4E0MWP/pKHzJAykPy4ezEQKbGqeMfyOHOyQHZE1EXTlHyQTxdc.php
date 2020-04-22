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

/* themes/gavias_kama/templates/navigation/menu--main.html.twig */
class __TwigTemplate_4813f7190939fa4570344ad0a5c96d22fa41eeb5da6b05737a255e41e01b5a24 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 40];
        $filters = ["escape" => 35, "join" => 46, "without" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'without'],
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
        // line 21
        echo "
<div class=\"gva-navigation\">
";
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        // line 82
        echo "</div>
";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "gva_menu gva_menu_main"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    $context["class_mega_menu"] = "";
                    // line 41
                    echo "      ";
                    $context["class_columns"] = "";
                    // line 42
                    echo "      ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_layout", []) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 43
                        echo "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        echo " 
      ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 44
$context["item"], "attributes", []), "gva_layout", []) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        echo "   
        ";
                        // line 45
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        echo " 
        ";
                        // line 46
                        $context["class_columns"] = twig_join_filter([0 => "menu-columns-", 1 => $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_layout_columns", [])], "");
                        // line 47
                        echo "      ";
                    }
                    // line 48
                    echo "      ";
                    // line 49
                    $context["classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                    // line 51
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 52
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 53
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => $this->getAttribute($this->getAttribute(                    // line 54
$context["item"], "attributes", []), "gva_class", []), 5 =>                     // line 55
($context["class_mega_menu"] ?? null), 6 =>                     // line 56
($context["class_columns"] ?? null)];
                    // line 59
                    echo "      <li ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true);
                    echo ">
        <a href=\"";
                    // line 60
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">
          ";
                    // line 61
                    if (($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_icon", []) != "")) {
                        // line 62
                        echo "            <i class=\"fa ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_icon", [])), "html", null, true);
                        echo "\"></i>
          ";
                    }
                    // line 64
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "
          ";
                    // line 65
                    if (($this->getAttribute($context["item"], "below", []) || (($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_layout", []) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        // line 66
                        echo "            <span class=\"icaret nav-plus nav-minus fa fa-angle-down\"></span>
          ";
                    }
                    // line 67
                    echo "  
        </a>
        ";
                    // line 69
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "gva_layout", []) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 70
                        echo "          <div class=\"sub-menu\">
            ";
                        // line 71
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "gva_block_content", [])), "html", null, true);
                        echo "
          </div>
        ";
                    }
                    // line 73
                    echo "  
        ";
                    // line 74
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 75
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 77
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 79,  203 => 77,  197 => 75,  195 => 74,  192 => 73,  186 => 71,  183 => 70,  181 => 69,  177 => 67,  173 => 66,  171 => 65,  166 => 64,  160 => 62,  158 => 61,  154 => 60,  149 => 59,  147 => 56,  146 => 55,  145 => 54,  144 => 53,  143 => 52,  142 => 51,  141 => 49,  139 => 48,  136 => 47,  134 => 46,  130 => 45,  126 => 44,  121 => 43,  118 => 42,  115 => 41,  112 => 40,  107 => 39,  103 => 37,  97 => 35,  94 => 34,  91 => 33,  88 => 32,  74 => 31,  69 => 82,  64 => 29,  61 => 24,  59 => 23,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/navigation/menu--main.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/navigation/menu--main.html.twig");
    }
}
