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

/* journal3/template/journal3/module/countdown.twig */
class __TwigTemplate_eecb0feb5759749087cb606285fcd937f0ca39bab9dabfad8d838064981a2e64 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  <div class=\"countdown\" data-date=\"";
        // line 2
        echo ($context["date"] ?? null);
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/countdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/countdown.twig", "");
    }
}
