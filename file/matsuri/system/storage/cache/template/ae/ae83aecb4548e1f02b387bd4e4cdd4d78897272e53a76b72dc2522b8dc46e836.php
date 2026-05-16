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

/* sale/order_list.twig */
class __TwigTemplate_4454e9b525823f56ac684c1dd67cd75dbe97ca6990ec55e39b55d44a4c196554 extends \Twig\Template
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
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 28
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 36
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 37
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 40
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 41
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-telephone\">";
        // line 45
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_telephone\" value=\"";
        // line 46
        echo ($context["filter_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 49
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 53
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 54
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 58
            echo "              
              <option value=\"0\">";
            // line 59
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 62
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 63
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 63) == ($context["filter_order_status_id"] ?? null))) {
                // line 64
                echo "              
              <option value=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 65);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 65);
                echo "</option>
              
              ";
            } else {
                // line 68
                echo "              
              <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 69);
                echo "</option>
              
              ";
            }
            // line 72
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 77
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 78
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 81
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 83
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 89
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 91
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 97
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 105
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 114
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 115
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">Product</td>
                    <td class=\"text-right\">";
        // line 118
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 119
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 120
        if ((($context["sort"] ?? null) == "o.telephone")) {
            echo " <a href=\"";
            echo ($context["sort_telephone"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_telephone"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_telephone"] ?? null);
            echo "\">";
            echo ($context["column_telephone"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 121
        if ((($context["sort"] ?? null) == "o.address")) {
            echo " <a href=\"";
            echo ($context["sort_address"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_address"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_address"] ?? null);
            echo "\">";
            echo ($context["column_address"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 122
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 127
        if (($context["orders"] ?? null)) {
            // line 128
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 129
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 130
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130), ($context["selected"] ?? null))) {
                    // line 131
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 131);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 133
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 133);
                    echo "\" />
                    ";
                }
                // line 135
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 135);
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136);
                echo "</td>
                  <td class=\"text-left\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 137);
                echo "</td>
                  <td class=\"text-left\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 138);
                echo "</td>
                  <td class=\"text-left\">
                    ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, $context["order"], "order_products", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                    
                    ";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "order_products", [], "any", false, false, false, 142));
                    foreach ($context['_seq'] as $context["_key"] => $context["orderp"]) {
                        // line 143
                        echo "                    
                    <a target=\"_blank\" href=\"";
                        // line 144
                        echo twig_constant("HTTP_CATALOG");
                        echo "?route=product/product&product_id=";
                        echo twig_get_attribute($this->env, $this->source, $context["orderp"], "product_id", [], "any", false, false, false, 144);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["orderp"], "name", [], "any", false, false, false, 144);
                        echo "</a><br>
                    
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                    ";
                } else {
                    // line 148
                    echo "                    ";
                    echo ($context["text_no_results"] ?? null);
                    echo "
                    
                    ";
                }
                // line 150
                echo "\t
                    </td>
                  <td class=\"text-right\">";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 152);
                echo "</td>
                  <td class=\"text-left\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 153);
                echo "</td>
                  <td class=\"text-left\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 154);
                echo "</td>
                  <td class=\"text-left\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address_1", [], "any", false, false, false, 155);
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 80px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 157);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 160);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 161);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                ";
        } else {
            // line 168
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 169
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 172
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 178
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 179
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
  url = '';

  var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

  if (filter_order_id) {
    url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
  }

  var filter_customer = \$('input[name=\\'filter_customer\\']').val();

  if (filter_customer) {
    url += '&filter_customer=' + encodeURIComponent(filter_customer);
  }

    var filter_telephone = \$('input[name=\\'filter_telephone\\']').val();

  if (filter_telephone) {
    url += '&filter_telephone=' + encodeURIComponent(filter_telephone);
  }

  var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

  if (filter_order_status_id !== '') {
    url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
  }

  var filter_total = \$('input[name=\\'filter_total\\']').val();

  if (filter_total) {
    url += '&filter_total=' + encodeURIComponent(filter_total);
  }

  var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

  if (filter_date_added) {
    url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
  }

  var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

  if (filter_date_modified) {
    url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
  }

  location = 'index.php?route=sale/order&user_token=";
        // line 231
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 238
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['customer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_customer\\']').val(item['label']);
  }
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
  \$('#button-shipping, #button-invoice').prop('disabled', true);

  var selected = \$('input[name^=\\'selected\\']:checked');

  if (selected.length) {
    \$('#button-invoice').prop('disabled', false);
  }

  for (i = 0; i < selected.length; i++) {
    if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
      \$('#button-shipping').prop('disabled', false);

      break;
    }
  }
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
  \$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
  e.preventDefault();
  
  var element = this;
  
  if (confirm('";
        // line 288
        echo ($context["text_confirm"] ?? null);
        echo "')) {
    \$.ajax({
      url: '";
        // line 290
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
      dataType: 'json',
      beforeSend: function() {
        \$(element).parent().parent().parent().find('button').button('loading');
      },
      complete: function() {
        \$(element).parent().parent().parent().find('button').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();
  
        if (json['error']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }
  
        if (json['success']) {
          location = '";
        // line 306
        echo ($context["delete"] ?? null);
        echo "';
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 320
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});
//--></script></div>
";
        // line 324
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 324,  748 => 320,  731 => 306,  708 => 290,  703 => 288,  650 => 238,  640 => 231,  585 => 179,  581 => 178,  573 => 172,  567 => 169,  564 => 168,  561 => 167,  547 => 161,  541 => 160,  533 => 157,  528 => 155,  524 => 154,  520 => 153,  516 => 152,  512 => 150,  505 => 148,  502 => 147,  489 => 144,  486 => 143,  482 => 142,  479 => 141,  477 => 140,  472 => 138,  468 => 137,  464 => 136,  459 => 135,  453 => 133,  447 => 131,  445 => 130,  442 => 129,  437 => 128,  435 => 127,  427 => 122,  409 => 121,  391 => 120,  373 => 119,  355 => 118,  336 => 116,  318 => 115,  300 => 114,  288 => 105,  277 => 97,  266 => 91,  261 => 89,  250 => 83,  245 => 81,  237 => 78,  233 => 77,  227 => 73,  221 => 72,  213 => 69,  210 => 68,  202 => 65,  199 => 64,  196 => 63,  191 => 62,  185 => 59,  182 => 58,  176 => 55,  173 => 54,  171 => 53,  164 => 49,  156 => 46,  152 => 45,  143 => 41,  139 => 40,  131 => 37,  127 => 36,  120 => 32,  114 => 28,  106 => 24,  103 => 23,  95 => 19,  93 => 18,  88 => 15,  77 => 13,  73 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
