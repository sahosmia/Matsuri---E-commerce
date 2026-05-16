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

/* journal3/template/journal3/checkout/login.twig */
class __TwigTemplate_5f0a106174120c361adadb1f17355a30500dec3162bb2423252372cd47bc6761 extends \Twig\Template
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
        echo "<div class=\"checkout-section section-login\" v-if=\"!customer_id\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleLogin"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div class=\"form-group login-options\">
      <div class=\"radio\">
        <label><input v-model=\"account\" type=\"radio\" name=\"account\" value=\"\"/>";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 6), "get", [0 => "sectionLoginText"], "method", false, false, false, 6);
        echo "</label>
      </div>
      <div class=\"radio\">
        <label><input v-model=\"account\" type=\"radio\" name=\"account\" value=\"register\"/>";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "sectionRegisterText"], "method", false, false, false, 9);
        echo "</label>
      </div>
      ";
        // line 12
        echo "      ";
        // line 13
        echo "      ";
        // line 14
        echo "    </div>
    <div class=\"login-form\">
      <div v-if=\"account === ''\" class=\"form-group\">
        <label class=\"control-label\" for=\"input-login-email\">";
        // line 17
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" v-model=\"login_email\" placeholder=\"";
        // line 18
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-login-email\" class=\"form-control\"/>
      </div>
      <div v-if=\"account === ''\" class=\"form-group\">
        <label class=\"control-label\" for=\"input-login-password\">";
        // line 21
        echo ($context["entry_password"] ?? null);
        echo "</label>
        <input type=\"password\" v-model=\"login_password\" placeholder=\"";
        // line 22
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-login-password\" class=\"form-control\"/>
        <div><a href=\"";
        // line 23
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
      </div>
      <div class=\"buttons\" v-if=\"account === ''\">
        <div class=\"pull-right\">
          <button type=\"button\" id=\"button-login\" v-on:click=\"login()\" data-loading-text=\"<span>";
        // line 27
        echo ($context["button_login"] ?? null);
        echo "</span>\" class=\"btn btn-primary\"><span>";
        echo ($context["button_login"] ?? null);
        echo "</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  62 => 14,  60 => 13,  58 => 12,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/login.twig", "");
    }
}
