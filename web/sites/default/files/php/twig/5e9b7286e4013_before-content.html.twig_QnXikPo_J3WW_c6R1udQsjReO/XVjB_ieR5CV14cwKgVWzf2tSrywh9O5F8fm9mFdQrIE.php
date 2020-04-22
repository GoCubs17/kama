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

/* themes/gavias_kama/templates/page/parts/before-content.html.twig */
class __TwigTemplate_08a2544d037ec552e73c2c74de95bee369712c4badeb8566313054e5160a72cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 3];
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
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 2
            echo "  <div class=\"breadcrumbs\">
    ";
            // line 3
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "  
  </div>
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "promotion", [])) {
            // line 8
            echo "  <div class=\"promotion area\">
    <div class=\"container\">
      <div class=\"content-inner\">
        ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promotion", [])), "html", null, true);
            echo "
      </div>
    </div>    
  </div>
";
        }
        // line 15
        echo " 

";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 18
            echo "  <div class=\"help show\">
    <div class=\"container\">
      <div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
      <div class=\"content-inner\">
        ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 27
        echo "
<div class=\"clearfix\"></div>

";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 31
            echo "  <div class=\"before_content area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
          </div>
      </div>
    </div>
  </div>
";
        }
        // line 41
        echo "
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kama/templates/page/parts/before-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  117 => 35,  111 => 31,  109 => 30,  104 => 27,  96 => 22,  90 => 18,  88 => 17,  84 => 15,  76 => 11,  71 => 8,  69 => 7,  66 => 6,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kama/templates/page/parts/before-content.html.twig", "/Applications/MAMP/htdocs/kama/themes/gavias_kama/templates/page/parts/before-content.html.twig");
    }
}
