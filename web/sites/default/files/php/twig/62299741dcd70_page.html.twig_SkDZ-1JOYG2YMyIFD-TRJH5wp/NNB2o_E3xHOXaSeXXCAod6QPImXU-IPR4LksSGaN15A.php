<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/demo/templates/page/page.html.twig */
class __TwigTemplate_d73716855c6b66f97cb16becaadead05120951c8e80456c2cb45dda2dc4d1d5e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"region-container\">
\t\t\t\t\t";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
  
<div class=\"container main-content\">

\t<div class=\"top-section\">
\t  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
\t  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
\t</div>
\t
\t<div class=\"row\">\t
\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 26)) {
            // line 27
            echo "\t\t  <div class=\"col-md-3 sidenav\">
\t\t\t";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
\t\t  </div>
\t\t";
        }
        // line 31
        echo "
\t\t";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) {
            // line 33
            echo "\t\t<div class=\"col-md-9\"> 
\t\t  ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
\t\t</div>
\t\t";
        } else {
            // line 37
            echo "\t\t<div class=\"col-md-12\"> 
\t\t  ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 41
        echo "
\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 42)) {
            // line 43
            echo "\t\t  <div class=\"col-md-3 sidenav\">
\t\t\t";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
\t\t  </div>
\t\t";
        }
        // line 47
        echo "\t</div>
</div>

";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t<footer>
\t\t<div class=\"container\">
\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/demo/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  139 => 51,  137 => 50,  132 => 47,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  112 => 38,  109 => 37,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  89 => 28,  86 => 27,  84 => 26,  77 => 22,  73 => 21,  69 => 20,  56 => 10,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/demo/templates/page/page.html.twig", "C:\\xampp\\htdocs\\cvc\\web\\themes\\demo\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
