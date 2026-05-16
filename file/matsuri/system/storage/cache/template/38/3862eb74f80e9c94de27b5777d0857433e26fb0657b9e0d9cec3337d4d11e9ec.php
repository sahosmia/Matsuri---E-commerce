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

/* journal3/template/journal3/checkout/payment_method.twig */
class __TwigTemplate_28bded17d3995884004664c60cef465455eec36d937a27395a4680f0ccdea007 extends \Twig\Template
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
        echo "<div class=\"section-payment\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitlePaymentMethod"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div v-if=\"Object.keys(payment_methods).length === 0\" class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 4
        echo ($context["error_warning"] ?? null);
        echo "</div>
    <div v-for=\"payment_method in payment_methods\">
      <div class=\"radio\">
        <label>
          <input v-bind:value=\"payment_method.code\" type=\"radio\" name=\"payment_method\" v-model=\"order_data.payment_code\" v-on:change=\"forceLoadingOverlay\"/>
          <span v-html=\"payment_method.title + (payment_method.terms ? '(' + payment_method.terms + ')' : '') \"></span>
        </label>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/payment_method.twig", "");
    }
}
