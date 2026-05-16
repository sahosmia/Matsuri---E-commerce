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
class __TwigTemplate_4d1a5cbcfa67f99bbf5d985ee0dadca736c623251389e9731e1b88c7030087a9 extends \Twig\Template
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
    <div class=\"section-comments\" v-bind:class=\"{ 'has-error': error && error.comments }\">
      <textarea class=\"form-control\" placeholder=\"";
        // line 6
        echo ($context["text_comments"] ?? null);
        echo "\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
    </div>

    ";
        // line 9
        if (($context["newsletter"] ?? null)) {
            // line 10
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"newsletter\" type=\"checkbox\"/>";
            // line 11
            echo ($context["newsletter"] ?? null);
            echo "</label>
      </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (($context["privacy"] ?? null)) {
            // line 16
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\">
        <label><input v-model=\"privacy\" type=\"checkbox\" v-init=\"privacy = true\"/>";
            // line 17
            echo ($context["privacy"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.privacy\" v-html=\"error.privacy\"></span>
      </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (($context["agree"] ?? null)) {
            // line 23
            echo "      <div class=\"checkbox d-none\" style=\"display: none !important;\"> 
        <label><input v-model=\"agree\" type=\"checkbox\" v-init=\"agree = true\"/>";
            // line 24
            echo ($context["agree"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.agree\" v-html=\"error.agree\"></span>
      </div>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (($context["captcha"] ?? null)) {
            // line 30
            echo "      <div class=\"captcha\" v-bind:class=\"{ 'has-error': error && error.captcha }\">
        ";
            // line 31
            echo ($context["captcha"] ?? null);
            echo "
        <span class=\"text-danger\" v-if=\"error && error.captcha\" v-html=\"error.captcha\"></span>
      </div>
    ";
        }
        // line 35
        echo "
    <div class=\"buttons confirm-buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" v-on:click=\"save(true)\" data-loading-text=\"<span>";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 38)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 38)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 38)));
        echo "</span>\" class=\"btn btn-primary\" id=\"quick-checkout-button-confirm\"><span>";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 38);
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
        return array (  116 => 38,  111 => 35,  104 => 31,  101 => 30,  99 => 29,  96 => 28,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  74 => 17,  71 => 16,  69 => 15,  66 => 14,  60 => 11,  57 => 10,  55 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/confirm.twig", "");
    }
}
