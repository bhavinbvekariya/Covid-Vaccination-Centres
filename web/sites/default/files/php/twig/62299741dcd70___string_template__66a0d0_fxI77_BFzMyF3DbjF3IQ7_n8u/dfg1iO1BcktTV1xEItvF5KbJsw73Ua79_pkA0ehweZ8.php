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

/* __string_template__66a0d0c83c66219782661bfb9748cdcc8d45b286033f6b089f6913fd1ac4c3d2 */
class __TwigTemplate_28404875b13c8f117afc43819c65d90828d793c356c9fd0735edfc1e86d19dd9 extends \Twig\Template
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
        if ((($context["field_vaccination_status"] ?? null) == "Yes")) {
            echo " 
<div class=\"disable-btn rmbtn\" >Hi, ";
            // line 2
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_first_name"] ?? null), 2, $this->source), "html", null, true);
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_last_name"] ?? null), 2, $this->source), "html", null, true);
            echo " <br> You're Already Registered!</div>
";
        } else {
            // line 4
            echo "<a class=\"btn btn-lg btn-primary reg-btn\" href=\"#\" role=\"button\">Register!</a>
 ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__66a0d0c83c66219782661bfb9748cdcc8d45b286033f6b089f6913fd1ac4c3d2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__66a0d0c83c66219782661bfb9748cdcc8d45b286033f6b089f6913fd1ac4c3d2", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
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
