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

/* journal3/template/journal3/checkout/address.twig */
class __TwigTemplate_94d044d7e2a7098b1523224713f1a48abfd3f85cebbdedefbd225ccfb5359ab3 extends \Twig\Template
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
        echo "<div class=\"checkout-section ";
        echo ($context["type"] ?? null);
        echo "-address\" v-if=\"('";
        echo ($context["type"] ?? null);
        echo "' === 'payment') || (('";
        echo ($context["type"] ?? null);
        echo "' === 'shipping') && !same_address && shipping_required)\">
  <div class=\"title section-title\">";
        // line 2
        echo (((($context["type"] ?? null) == "payment")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitlePaymentAddress"], "method", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleShippingAddress"], "method", false, false, false, 2)));
        echo "</div>
  <div class=\"section-body\">
    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 6
        echo ($context["type"] ?? null);
        echo "_address_type\" v-on:change=\"save()\" value=\"existing\"/>
        ";
        // line 7
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>

    <div id=\"";
        // line 10
        echo ($context["type"] ?? null);
        echo "-existing\" v-if=\"customer_id && (";
        echo ($context["type"] ?? null);
        echo "_address_type === 'existing')\">
      <select v-model=\"order_data.";
        // line 11
        echo ($context["type"] ?? null);
        echo "_address_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address\" class=\"form-control\">
        <option v-for=\"address in addresses\" v-bind:value=\"address.address_id\" v-html=\"address.firstname + ' ' + address.lastname + ' ' + address.address_1 + ' ' + address.city + ' ' + address.zone + ' ' + address.country\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.";
        // line 14
        echo ($context["type"] ?? null);
        echo "_address_error\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_error\"></span>
    </div>

    <div class=\"radio\" v-if=\"customer_id && Object.keys(addresses).length\">
      <label>
        <input type=\"radio\" v-model=\"";
        // line 19
        echo ($context["type"] ?? null);
        echo "_address_type\" v-on:change=\"save()\" value=\"new\"/>
        ";
        // line 20
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>

    <div v-if=\"!customer_id || (customer_id && (";
        // line 23
        echo ($context["type"] ?? null);
        echo "_address_type === 'new'))\">
      <div class=\"form-group required address-firstname\" v-if=\"customer_id || (!customer_id && '";
        // line 24
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\">
        <label class=\"control-label\" for=\"input-";
        // line 25
        echo ($context["type"] ?? null);
        echo "-firstname\">";
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 26
        echo ($context["type"] ?? null);
        echo "_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-firstname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 27
        echo ($context["type"] ?? null);
        echo "_firstname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_firstname\"></span>
      </div>

      <div class=\"form-group required address-lastname\" v-if=\"customer_id || (!customer_id && '";
        // line 30
        echo ($context["type"] ?? null);
        echo "' === 'shipping')\">
        <label class=\"control-label\" for=\"input-";
        // line 31
        echo ($context["type"] ?? null);
        echo "-lastname\">";
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 32
        echo ($context["type"] ?? null);
        echo "_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-lastname\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 33
        echo ($context["type"] ?? null);
        echo "_lastname\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_lastname\"></span>
      </div>

      <div class=\"form-group required address-company\">
        <label class=\"control-label\" for=\"input-";
        // line 37
        echo ($context["type"] ?? null);
        echo "-company\">";
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 38
        echo ($context["type"] ?? null);
        echo "_company\" type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 39
        echo ($context["type"] ?? null);
        echo "_company\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_company\"></span>
      </div>

      <div class=\"form-group required address-address-1\">
        <label class=\"control-label\" for=\"input-";
        // line 43
        echo ($context["type"] ?? null);
        echo "-address-1\">";
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 44
        echo ($context["type"] ?? null);
        echo "_address_1\" type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 45
        echo ($context["type"] ?? null);
        echo "_address_1\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_1\"></span>
      </div>

      <div class=\"form-group required address-address-2\">
        <label class=\"control-label\" for=\"input-";
        // line 49
        echo ($context["type"] ?? null);
        echo "-address-2\">";
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 50
        echo ($context["type"] ?? null);
        echo "_address_2\" type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 51
        echo ($context["type"] ?? null);
        echo "_address_2\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_address_2\"></span>
      </div>

      <div class=\"form-group required address-city\">
        <label class=\"control-label\" for=\"input-";
        // line 55
        echo ($context["type"] ?? null);
        echo "-city\">";
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input v-model=\"order_data.";
        // line 56
        echo ($context["type"] ?? null);
        echo "_city\" type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 57
        echo ($context["type"] ?? null);
        echo "_city\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_city\"></span>
      </div>

      ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "quickCheckoutAddressPostcodeField"], "method", false, false, false, 60) != "hidden")) {
            // line 61
            echo "      <div class=\"form-group required address-postcode\">
        <label class=\"control-label\" for=\"input-";
            // line 62
            echo ($context["type"] ?? null);
            echo "-postcode\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
        <input v-model=\"order_data.";
            // line 63
            echo ($context["type"] ?? null);
            echo "_postcode\" type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-";
            echo ($context["type"] ?? null);
            echo "-postcode\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
            // line 64
            echo ($context["type"] ?? null);
            echo "_postcode\" v-html=\"error.";
            echo ($context["type"] ?? null);
            echo "_postcode\"></span>
      </div>
      ";
        }
        // line 67
        echo "
      ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "quickCheckoutAddressCountryField"], "method", false, false, false, 68) != "hidden")) {
            // line 69
            echo "      <div class=\"form-group required address-country\">
        <label class=\"control-label\" for=\"input-";
            // line 70
            echo ($context["type"] ?? null);
            echo "-country\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
        <select v-model=\"order_data.";
            // line 71
            echo ($context["type"] ?? null);
            echo "_country_id\" name=\"country_id\" id=\"input-";
            echo ($context["type"] ?? null);
            echo "-country\" class=\"form-control\">
          <option value=\"\">";
            // line 72
            echo ($context["text_select"] ?? null);
            echo "</option>
          <option v-for=\"country in countries\" v-bind:value=\"country.country_id\" v-html=\"country.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
            // line 75
            echo ($context["type"] ?? null);
            echo "_country\" v-html=\"error.";
            echo ($context["type"] ?? null);
            echo "_country\"></span>
      </div>
      ";
        }
        // line 78
        echo "
      ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "quickCheckoutAddressRegionField"], "method", false, false, false, 79) != "hidden")) {
            // line 80
            echo "      <div class=\"form-group required address-zone\">
        <label class=\"control-label\" for=\"input-";
            // line 81
            echo ($context["type"] ?? null);
            echo "-zone\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
        <select v-model=\"order_data.";
            // line 82
            echo ($context["type"] ?? null);
            echo "_zone_id\" name=\"zone_id\" id=\"input-";
            echo ($context["type"] ?? null);
            echo "-zone\" class=\"form-control\">
          <option v-if=\"";
            // line 83
            echo ($context["type"] ?? null);
            echo "_zones.length > 0\" value=\"\">";
            echo ($context["text_select"] ?? null);
            echo "</option>
          <option v-if=\"";
            // line 84
            echo ($context["type"] ?? null);
            echo "_zones.length == 0\" value=\"\">";
            echo ($context["text_none"] ?? null);
            echo "</option>
          <option v-for=\"zone in ";
            // line 85
            echo ($context["type"] ?? null);
            echo "_zones\" v-bind:value=\"zone.zone_id\" v-html=\"zone.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
            // line 87
            echo ($context["type"] ?? null);
            echo "_zone\" v-html=\"error.";
            echo ($context["type"] ?? null);
            echo "_zone\"></span>
      </div>
      ";
        }
        // line 90
        echo "
      ";
        // line 92
        echo "      <div class=\"form-group order-notes\" v-if=\"'";
        echo ($context["type"] ?? null);
        echo "' === 'payment'\">
        <div class=\"section-comments\" v-bind:class=\"{ 'has-error': error && error.comments }\">
          <textarea class=\"form-control\" placeholder=\"";
        // line 94
        echo ($context["text_comments"] ?? null);
        echo "\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
        </div>
      </div>

      ";
        // line 99
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'";
        // line 100
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 101
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <select v-model=\"order_data.";
        // line 102
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
          <option value=\"\">";
        // line 103
        echo ($context["text_select"] ?? null);
        echo "</option>
          <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
        </select>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 106
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 110
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'";
        // line 111
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 113
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\">
          <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
            <label>
              <input type=\"radio\" v-model=\"order_data.";
        // line 116
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
              <span v-html=\"custom_field_value.name\"></span></label>
          </div>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 120
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 124
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'";
        // line 125
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-html=\"custom_field.name\"></label>
        <div v-bind:id=\"'input-";
        // line 127
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\"> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 128
            echo "            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"custom_field[";
            // line 130
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 130);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 130);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
            echo "\"/>
                ";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo " </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 134
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 138
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'";
        // line 139
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 140
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <input type=\"text\" v-model=\"order_data.";
        // line 141
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 141);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 142
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 146
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'";
        // line 147
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 148
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <textarea v-model=\"order_data.";
        // line 149
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 149);
        echo "</textarea>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 150
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 154
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'";
        // line 155
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 156
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <br/>
        <button type=\"button\" v-on:click=\"upload('";
        // line 158
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
        <input type=\"hidden\" v-model=\"order_data.";
        // line 159
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 160
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 164
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'";
        // line 165
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 166
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group date\">
          <input type=\"text\" v-model=\"order_data.";
        // line 168
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 168);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 171
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 175
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'";
        // line 176
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 177
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 179
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 179);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 182
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>

      ";
        // line 186
        echo "
      <div v-for=\"custom_field in custom_fields.custom_fields.address\" v-if=\"custom_field.type === 'datetime'\" v-bind:id=\"'";
        // line 187
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
        <label class=\"control-label\" v-bind:for=\"'input-";
        // line 188
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
        <div class=\"input-group time\">
          <input type=\"text\" v-model=\"order_data.";
        // line 190
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('";
        echo ($context["type"] ?? null);
        echo "_custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 190);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-";
        echo ($context["type"] ?? null);
        echo "-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
          <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
        </div>
        <span class=\"text-danger\" v-if=\"error && error.";
        // line 193
        echo ($context["type"] ?? null);
        echo "_custom_field && error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\" v-html=\"error.";
        echo ($context["type"] ?? null);
        echo "_custom_field[custom_field.custom_field_id]\"></span>
      </div>
    </div>
    <div v-if=\"('";
        // line 196
        echo ($context["type"] ?? null);
        echo "' === 'payment') && shipping_required\" class=\"checkbox checkout-same-address\">
      <label>
        <input v-model=\"same_address\" v-on:change=\"save()\" type=\"checkbox\"/>
        ";
        // line 199
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 199,  675 => 196,  665 => 193,  653 => 190,  648 => 188,  644 => 187,  641 => 186,  631 => 182,  619 => 179,  614 => 177,  610 => 176,  607 => 175,  597 => 171,  585 => 168,  580 => 166,  576 => 165,  573 => 164,  563 => 160,  557 => 159,  551 => 158,  546 => 156,  542 => 155,  539 => 154,  529 => 150,  521 => 149,  517 => 148,  513 => 147,  510 => 146,  500 => 142,  492 => 141,  488 => 140,  484 => 139,  481 => 138,  471 => 134,  468 => 133,  459 => 131,  451 => 130,  447 => 128,  441 => 127,  436 => 125,  433 => 124,  423 => 120,  416 => 116,  410 => 113,  405 => 111,  402 => 110,  392 => 106,  386 => 103,  380 => 102,  376 => 101,  372 => 100,  369 => 99,  360 => 94,  354 => 92,  351 => 90,  343 => 87,  338 => 85,  332 => 84,  326 => 83,  320 => 82,  314 => 81,  311 => 80,  309 => 79,  306 => 78,  298 => 75,  292 => 72,  286 => 71,  280 => 70,  277 => 69,  275 => 68,  272 => 67,  264 => 64,  256 => 63,  250 => 62,  247 => 61,  245 => 60,  237 => 57,  229 => 56,  223 => 55,  214 => 51,  206 => 50,  200 => 49,  191 => 45,  183 => 44,  177 => 43,  168 => 39,  160 => 38,  154 => 37,  145 => 33,  137 => 32,  131 => 31,  127 => 30,  119 => 27,  111 => 26,  105 => 25,  101 => 24,  97 => 23,  91 => 20,  87 => 19,  77 => 14,  69 => 11,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/address.twig", "");
    }
}
