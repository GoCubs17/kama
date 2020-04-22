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

/* themes/gavias_kama/templates/page/parts/topbar.html.twig */
class __TwigTemplate_4ad78929d056931f1915aea4853383fda652650ddb712a18a4d6ef6ad00ca5d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-6 col-xs-12 hidden-xs\">
        ";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 7
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "      </div>

      <div class=\"topbar-right col-sm-6 col-xs-12\">
        <div class=\"social-list\">
          ";
        // line 13
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])) {
            // line 14
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 15
        echo " 
          ";
        // line 16
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 18
        echo " 
          ";
        // line 19
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])) {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 21
        echo " 
          ";
        // line 22
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])) {
            // line 23
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 24
        echo " 
          ";
        // line 25
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])) {
            // line 26
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 27
        echo " 
          ";
        // line 28
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])) {
            // line 29
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 30
        echo " 
          ";
        // line 31
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])) {
            // line 32
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 33
        echo " 
          ";
        // line 34
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])) {
            // line 35
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 36
        echo " 
          ";
        // line 37
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])) {
            // line 38
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 39
        echo " 
          ";
        // line 40
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])) {
            // line 41
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 42
        echo "  
          ";
        // line 43
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])) {
            // line 44
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 45
        echo "  
        </div>  
      </div>
    </div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 45,  188 => 44,  186 => 43,  183 => 42,  177 => 41,  175 => 40,  172 => 39,  166 => 38,  164 => 37,  161 => 36,  155 => 35,  153 => 34,  150 => 33,  144 => 32,  142 => 31,  139 => 30,  133 => 29,  131 => 28,  128 => 27,  122 => 26,  120 => 25,  117 => 24,  111 => 23,  109 => 22,  106 => 21,  100 => 20,  98 => 19,  95 => 18,  89 => 17,  87 => 16,  84 => 15,  78 => 14,  76 => 13,  70 => 9,  64 => 7,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/parts/topbar.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/parts/topbar.html.twig");
    }
}
