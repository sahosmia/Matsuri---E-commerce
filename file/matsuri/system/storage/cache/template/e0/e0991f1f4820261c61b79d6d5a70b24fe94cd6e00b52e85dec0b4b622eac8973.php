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
class __TwigTemplate_c2b21cb0bc4deaa3925454ad2f7178319fa4df0a68b9527279c0903504d373e4 extends \Twig\Template
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
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleConfirm"], "method", false, false, false, 2);
        echo "</div>

  <div class=\"section-body\">
    ";
        // line 5
        if (($context["newsletter"] ?? null)) {
            // line 6
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"newsletter\" type=\"checkbox\"/>";
            // line 7
            echo ($context["newsletter"] ?? null);
            echo "</label>
      </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (($context["privacy"] ?? null)) {
            // line 12
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\">
        <label><input v-model=\"privacy\" type=\"checkbox\" v-init=\"privacy = true\"/>";
            // line 13
            echo ($context["privacy"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.privacy\" v-html=\"error.privacy\"></span>
      </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (($context["agree"] ?? null)) {
            // line 19
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\"> 
        <label><input v-model=\"agree\" type=\"checkbox\" v-init=\"agree = true\"/>";
            // line 20
            echo ($context["agree"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.agree\" v-html=\"error.agree\"></span>
      </div>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (($context["captcha"] ?? null)) {
            // line 26
            echo "      <div class=\"captcha\" v-bind:class=\"{ 'has-error': error && error.captcha }\">
        ";
            // line 27
            echo ($context["captcha"] ?? null);
            echo "
        <span class=\"text-danger\" v-if=\"error && error.captcha\" v-html=\"error.captcha\"></span>
      </div>
    ";
        }
        // line 31
        echo "
    <div class=\"buttons confirm-buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" v-on:click=\"save(true)\" data-loading-text=\"<span>";
        // line 34
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 34)));
        echo "</span>\" class=\"btn btn-primary\" id=\"quick-checkout-button-confirm\"><span>";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 34);
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
        return array (  107 => 34,  102 => 31,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  80 => 20,  77 => 19,  75 => 18,  72 => 17,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/confirm.twig", "");
    }
}
