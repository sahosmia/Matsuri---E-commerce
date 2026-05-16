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

/* journal3/template/journal3/checkout/shipping_method.twig */
class __TwigTemplate_910282c144b632e92aab4e42453d11333a84aa00b233c65743679f447c02e74a extends \Twig\Template
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
        echo "<div class=\"section-shipping\" v-if=\"shipping_required\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleShippingMethod"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div v-if=\"Object.keys(shipping_methods).length === 0\" class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 4
        echo ($context["error_warning"] ?? null);
        echo "</div>
    <div v-for=\"shipping_method in shipping_methods\">
      <div class=\"shippings\">
        <div class=\"ship-wrapper\">
          <p v-html=\"shipping_method.title\"></p>
          <div class=\"radio\" v-for=\"quote in shipping_method.quote\">
            <label>
              <input v-bind:value=\"quote.code\" type=\"radio\" name=\"shipping_method\" v-model=\"order_data.shipping_code\" v-on:change=\"forceLoadingOverlay\"/>
              <span class=\"shipping-quote-title\" v-html=\"quote.title + (quote.text ? ' - ' + quote.text : '')\"></span>
              <span class=\"shipping-quote-desc\" v-if=\"quote.desc\" v-html=\"quote.desc\"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/shipping_method.twig";
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
        return new Source("", "journal3/template/journal3/checkout/shipping_method.twig", "");
    }
}
