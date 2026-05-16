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

/* marketing/coupon_form.twig */
class __TwigTemplate_8dd2a0668e886bab86ea57871d1b360cad16330fe6eb8675c850004686f53dc5 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 29
        if (($context["coupon_id"] ?? null)) {
            // line 30
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            ";
        }
        // line 32
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <input type=\"hidden\" name=\"logged\" value=\"";
        // line 35
        if (((($context["logged"] ?? null) == 1) || (($context["logged"] ?? null) == "1"))) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
              <input type=\"hidden\" name=\"uses_total\" value=\"";
        // line 36
        echo ($context["uses_total"] ?? null);
        echo "\" />
              <input type=\"hidden\" name=\"uses_customer\" value=\"";
        // line 37
        echo ($context["uses_customer"] ?? null);
        echo "\" />
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 39
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 41
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 42
        if (($context["error_name"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 44
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 49
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 50
        if (($context["error_code"] ?? null)) {
            // line 51
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
                  ";
        }
        // line 52
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 55
        echo ($context["help_type"] ?? null);
        echo "\">";
        echo ($context["entry_type"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 58
        if ((($context["type"] ?? null) == "P")) {
            // line 59
            echo "                    <option value=\"P\" selected=\"selected\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 61
            echo "                    <option value=\"P\">";
            echo ($context["text_percent"] ?? null);
            echo "</option>
                    ";
        }
        // line 63
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 64
            echo "                    <option value=\"F\" selected=\"selected\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 66
            echo "                    <option value=\"F\">";
            echo ($context["text_amount"] ?? null);
            echo "</option>
                    ";
        }
        // line 67
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">";
        // line 72
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 74
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 78
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 80
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 84
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 86
        if (($context["shipping"] ?? null)) {
            // line 87
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 88
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 90
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 91
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 92
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 93
        if ( !($context["shipping"] ?? null)) {
            // line 94
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 95
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 97
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 98
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 99
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 103
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 105
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 107
            echo "                    <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 107);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 107);
            echo "
                      <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 108);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 116
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 118
            echo "                    <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 118);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 118);
            echo "
                      <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 119);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">";
        // line 125
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 128
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-end\">";
        // line 135
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 138
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 145
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 148
        if (($context["status"] ?? null)) {
            // line 149
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 150
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 152
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 153
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 154
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            ";
        // line 159
        if (($context["coupon_id"] ?? null)) {
            // line 160
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 162
            echo ($context["text_coupon"] ?? null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>
            ";
        }
        // line 166
        echo " </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 175
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#coupon-product' + item['value']).remove();
\t\t
\t\t\$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 204
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t
\t\t\$('#coupon-category' + item['value']).remove();
\t\t
\t\t\$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}\t
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  ";
        // line 229
        if (($context["coupon_id"] ?? null)) {
            echo " 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 237
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script> 
  ";
        }
        // line 239
        echo " 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 242
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 246
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 246,  568 => 242,  563 => 239,  555 => 237,  544 => 229,  516 => 204,  484 => 175,  473 => 166,  465 => 162,  461 => 160,  459 => 159,  452 => 154,  447 => 153,  442 => 152,  437 => 150,  432 => 149,  430 => 148,  424 => 145,  412 => 138,  406 => 135,  394 => 128,  388 => 125,  382 => 121,  373 => 119,  366 => 118,  362 => 117,  358 => 116,  351 => 114,  345 => 110,  336 => 108,  329 => 107,  325 => 106,  321 => 105,  314 => 103,  308 => 99,  303 => 98,  300 => 97,  295 => 95,  292 => 94,  290 => 93,  287 => 92,  282 => 91,  279 => 90,  274 => 88,  271 => 87,  269 => 86,  264 => 84,  255 => 80,  248 => 78,  239 => 74,  234 => 72,  227 => 67,  221 => 66,  215 => 64,  212 => 63,  206 => 61,  200 => 59,  198 => 58,  190 => 55,  185 => 52,  179 => 51,  177 => 50,  171 => 49,  164 => 47,  159 => 44,  153 => 43,  151 => 42,  145 => 41,  140 => 39,  135 => 37,  131 => 36,  123 => 35,  118 => 32,  112 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
