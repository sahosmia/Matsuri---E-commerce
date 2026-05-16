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

/* journal3/template/journal3/checkout/register.twig */
class __TwigTemplate_5d215fe6cbe6eb0b20b0e0ab70d7ed35048a34cdff183d3d1c431a829712317f extends \Twig\Template
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
        echo "<div class=\"checkout-section section-register\" v-if=\"!customer_id\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitlePersonal"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div class=\"form-group account-customer-group\" style=\"display: ";
        // line 4
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
      <label class=\"control-label\">";
        // line 5
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 7
            echo "        <div class=\"radio\">
          <label>
            <input v-model=\"order_data.customer_group_id\" type=\"radio\" name=\"customer_group_id\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 9);
            echo "\" checked=\"checked\"/>
            ";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 10);
            echo "</label>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    ";
        // line 16
        echo "
    <div class=\"form-group required account-firstname\">
      <label class=\"control-label\" for=\"input-firstname\">";
        // line 18
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
      <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 19
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
    </div>

    ";
        // line 24
        echo "
    <div class=\"form-group required account-lastname\">
      <label class=\"control-label\" for=\"input-lastname\">";
        // line 26
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
      <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 27
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
    </div>

    ";
        // line 32
        echo "
    <div class=\"form-group required account-email\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input v-model=\"order_data.email\" type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.email\" v-html=\"error.email\"></span>
    </div>

    ";
        // line 40
        echo "
    <div class=\"form-group required account-telephone\">
      <label class=\"control-label\" for=\"input-telephone\">";
        // line 42
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
      <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 43
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
    </div>
    
    ";
        // line 48
        echo "    <div class=\"form-group account-secondary-telephone\">
      <label class=\"control-label\" for=\"input-secondary-telephone\">Secondary Telephone</label>
      <input v-model=\"order_data.secondary_telephone\" v-init=\"order_data.secondary_telephone = '500'\" type=\"text\" name=\"secondary_telephone\" placeholder=\"Enter secondary number\" id=\"input-secondary-telephone\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.secondary_telephone\" v-html=\"error.secondary_telephone\"></span>
    </div>

    ";
        // line 55
        echo "
    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        // line 61
        echo "
    ";
        // line 63
        echo "    ";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        // line 67
        echo "
    ";
        // line 69
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <select v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
        <option value=\"\">";
        // line 73
        echo ($context["text_select"] ?? null);
        echo "</option>
        <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 80
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\">
        <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
          <label>
            <input type=\"radio\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
            <span v-html=\"custom_field_value.name\"></span></label>
        </div>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 94
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\"> ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 98
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
            // line 100
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 100);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 100);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
            echo "\"/>
              ";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 101);
            echo "</label>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo " </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 108
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"";
        // line 111
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 111);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 116
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <textarea v-model=\"order_data.custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        // line 119
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 119);
        echo "</textarea>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 124
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <br/>
      <button type=\"button\" v-on:click=\"upload('custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        // line 128
        echo ($context["button_upload"] ?? null);
        echo "</button>
      <input type=\"hidden\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 134
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group date\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 138);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 147
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group time\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 151
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 151);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 160
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group datetime\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 164
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 164);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 164,  313 => 160,  302 => 151,  296 => 147,  285 => 138,  279 => 134,  271 => 128,  265 => 124,  258 => 119,  253 => 116,  246 => 111,  241 => 108,  235 => 103,  226 => 101,  218 => 100,  214 => 98,  210 => 97,  205 => 94,  190 => 80,  181 => 73,  175 => 69,  172 => 67,  170 => 66,  168 => 65,  166 => 64,  164 => 63,  161 => 61,  159 => 60,  157 => 59,  155 => 58,  153 => 57,  150 => 55,  142 => 48,  135 => 43,  131 => 42,  127 => 40,  120 => 35,  116 => 34,  112 => 32,  105 => 27,  101 => 26,  97 => 24,  90 => 19,  86 => 18,  82 => 16,  78 => 13,  69 => 10,  65 => 9,  61 => 7,  57 => 6,  53 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/register.twig", "");
    }
}
