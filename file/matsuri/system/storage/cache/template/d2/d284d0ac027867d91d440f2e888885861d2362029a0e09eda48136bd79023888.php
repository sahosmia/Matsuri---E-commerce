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

/* journal3/template/journal3/checkout/confirm.twig */
class __TwigTemplate_f6a2cb60f46046241d18148435807409f4ea0736b1637ddca4a90311a9d22a70 extends \Twig\Template
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
        echo "<div class=\"checkout-section confirm-section\">
  <div class=\"section-body\">
    ";
        // line 3
        if (($context["newsletter"] ?? null)) {
            // line 4
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"newsletter\" type=\"checkbox\"/>";
            // line 5
            echo ($context["newsletter"] ?? null);
            echo "</label>
      </div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (($context["privacy"] ?? null)) {
            // line 10
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\">
        <label><input v-model=\"privacy\" type=\"checkbox\" v-init=\"privacy = true\"/>";
            // line 11
            echo ($context["privacy"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.privacy\" v-html=\"error.privacy\"></span>
      </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if (($context["agree"] ?? null)) {
            // line 17
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\"> 
        <label><input v-model=\"agree\" type=\"checkbox\" v-init=\"agree = true\"/>";
            // line 18
            echo ($context["agree"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.agree\" v-html=\"error.agree\"></span>
      </div>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (($context["captcha"] ?? null)) {
            // line 24
            echo "      <div class=\"captcha\" v-bind:class=\"{ 'has-error': error && error.captcha }\">
        ";
            // line 25
            echo ($context["captcha"] ?? null);
            echo "
        <span class=\"text-danger\" v-if=\"error && error.captcha\" v-html=\"error.captcha\"></span>
      </div>
    ";
        }
        // line 29
        echo "
    <div class=\"buttons confirm-buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" v-on:click=\"save(true)\" data-loading-text=\"<span>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 32)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 32)));
        echo "</span>\" class=\"btn btn-primary\" id=\"quick-checkout-button-confirm\"><span>";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 32);
        echo "</span></button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  97 => 29,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/confirm.twig", "");
    }
}
