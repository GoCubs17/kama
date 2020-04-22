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

/* themes/gavias_kama/templates/user/user.html.twig */
class __TwigTemplate_c007a0f70a8b4121ead2b370eed02c8bf336b731383a90e0b85ce161fd68bae1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21];
        $filters = ["escape" => 19, "without" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
        // line 19
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "profile user-profile"], "method")), "html", null, true);
        echo ">
   <div class=\"row\">
      ";
        // line 21
        if (($context["user_content"] ?? null)) {
            // line 22
            echo "         <div class=\"col-md-8 col-xs-12\">
            ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_content"] ?? null)), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (($context["user_content"] ?? null)) {
            // line 28
            echo "         <div class=\"col-md-4 col-xs-12\">
      ";
        } else {
            // line 29
            echo "   
         <div class=\"col-md-12 col-xs-12\">
      ";
        }
        // line 31
        echo "   
         ";
        // line 32
        if ($this->getAttribute(($context["content"] ?? null), "user_picture", [])) {
            // line 33
            echo "            <div class=\"user-picture\">
               ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "user_picture", [])), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 36
        echo "    
         ";
        // line 37
        if ($this->getAttribute(($context["content"] ?? null), "field_full_name", [])) {
            // line 38
            echo "            <div class=\"user-fullname\">
               ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_full_name", [])), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 41
        echo "      
         ";
        // line 42
        if ($this->getAttribute(($context["content"] ?? null), "field_user_position", [])) {
            // line 43
            echo "            <div class=\"user-position\">
               ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_user_position", [])), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 46
        echo "     
         ";
        // line 47
        if (($context["content"] ?? null)) {
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "user_picture", "field_full_name", "field_user_position"), "html", null, true);
        }
        // line 50
        echo "      </div>
   </div>  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  133 => 48,  131 => 47,  128 => 46,  122 => 44,  119 => 43,  117 => 42,  114 => 41,  108 => 39,  105 => 38,  103 => 37,  100 => 36,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  81 => 29,  77 => 28,  75 => 27,  72 => 26,  66 => 23,  63 => 22,  61 => 21,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/user/user.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/user/user.html.twig");
    }
}
