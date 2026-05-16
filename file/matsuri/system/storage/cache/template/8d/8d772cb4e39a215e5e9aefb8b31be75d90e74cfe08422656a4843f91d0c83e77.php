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

/* journal3/template/journal3/checkout/coupon_voucher_reward.twig */
class __TwigTemplate_cedb4932dd499c2052b7fef08bd44225ab2b8aeddd236d9be1e7fc9a7f75b768 extends \Twig\Template
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
        echo "<div class=\"checkout-section section-cvr\" v-if=\"coupon_status || voucher_status || (reward_status && customer_id)\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleCouponVoucherReward"], "method", false, false, false, 2);
        echo "</div>

  <div class=\"section-body\">
    <div class=\"form-group form-coupon\" v-if=\"coupon_status\">
      <label class=\"control-label\" for=\"input-coupon\">";
        // line 6
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"coupon\" placeholder=\"";
        // line 8
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"applyCoupon()\" data-loading-text=\"";
        // line 10
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-success\" v-if=\"coupon_message\" v-html=\"coupon_message\"></span>
      <span class=\"text-danger\" v-if=\"error && error.coupon\" v-html=\"error.coupon\"></span>
    </div>

    <div class=\"form-group form-voucher\" v-if=\"voucher_status\">
      <label class=\"control-label\" for=\"input-voucher\">";
        // line 18
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"voucher\" placeholder=\"";
        // line 20
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"applyVoucher()\" data-loading-text=\"";
        // line 22
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-success\" v-if=\"voucher_message\" v-html=\"voucher_message\"></span>
      <span class=\"text-danger\" v-if=\"error && error.voucher\" v-html=\"error.voucher\"></span>
    </div>

    <div class=\"form-group form-reward\" v-if=\"reward_status && customer_id\">
      <label class=\"control-label\" for=\"input-reward\">";
        // line 30
        echo ($context["entry_reward"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" v-model=\"reward\" placeholder=\"";
        // line 32
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" v-on:click=\"applyReward()\" data-loading-text=\"";
        // line 34
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
            </span>
      </div>
      <span class=\"text-success\" v-if=\"reward_message\" v-html=\"reward_message\"></span>
      <span class=\"text-danger\" v-if=\"error && error.reward\" v-html=\"error.reward\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/coupon_voucher_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  98 => 32,  93 => 30,  80 => 22,  75 => 20,  70 => 18,  57 => 10,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/coupon_voucher_reward.twig", "");
    }
}
