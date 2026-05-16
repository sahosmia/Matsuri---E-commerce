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

/* journal3/template/checkout/cart.twig */
class __TwigTemplate_022128b9a579b2d875408bb00a6594fc7e6d2d6acff5e43e34f6edc7f862080c extends \Twig\Template
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
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\">
    <span >
      ";
            // line 10
            echo ($context["heading_title"] ?? null);
            echo "
    ";
            // line 11
            if (($context["weight"] ?? null)) {
                // line 12
                echo "      &nbsp;(";
                echo ($context["weight"] ?? null);
                echo ")
    ";
            }
            // line 14
            echo "    </span>
  </h1>
";
        }
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 17);
        echo "
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 19
        if (($context["attention"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 34
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 41
            echo "    ";
        }
        // line 42
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "pageTitlePosition"], "method", false, false, false, 43) == "default")) {
            // line 44
            echo "      <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "
        ";
            // line 45
            if (($context["weight"] ?? null)) {
                // line 46
                echo "        &nbsp;(";
                echo ($context["weight"] ?? null);
                echo ")
        ";
            }
            // line 47
            echo " </h1>
      ";
        }
        // line 49
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"cart-page\">
        <form action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-table\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
              <tr>
                <td class=\"text-center td-image\">";
        // line 56
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left td-name\">";
        // line 57
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-center td-model\">";
        // line 58
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-center td-qty\">";
        // line 59
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-center td-price\">";
        // line 60
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-center td-total\">";
        // line 61
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
              </thead>
              <tbody>

              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 67
            echo "                <tr>
                  <td class=\"text-center td-image\">";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                echo "\" /></a> ";
            }
            echo "</td>
                  <td class=\"text-left td-name\"><a href=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 69)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 70
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 70)) {
                // line 71
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 71));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                            <small>";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 72);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 72);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                      ";
            }
            // line 74
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 74)) {
                echo " <br />
                        <small>";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 75);
                echo "</small> ";
            }
            // line 76
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 76)) {
                echo " <br />
                        <span class=\"label label-info\">";
                // line 77
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 77);
                echo "</small> ";
            }
            echo "</td>
                  <td class=\"text-center td-model\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 78);
            echo "</td>
                  <td class=\"text-center td-qty\">
                    <div class=\"input-group btn-block\">
                      <div class=\"stepper\">
                        <input type=\"text\" name=\"quantity[";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 82);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 82);
            echo "\" size=\"1\" class=\"form-control\" />
                        <span>
                      <i class=\"fa fa-angle-up\"></i>
                      <i class=\"fa fa-angle-down\"></i>
                    </span>
                      </div>
                      <span class=\"input-group-btn\">
                    <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 89
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-remove\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 90);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
                    </div>
                  </td>
                  <td class=\"text-center td-price\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
            echo "</td>
                  <td class=\"text-center td-total\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 95);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 99
            echo "                <tr>
                  <td></td>
                  <td class=\"text-left td-voucher\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 101);
            echo "</td>
                  <td class=\"text-left td-voucher\"></td>
                  <td class=\"text-left td-voucher\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 106
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 106);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right td-voucher\">";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 108);
            echo "</td>
                  <td class=\"text-right td-voucher\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 109);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "              </tbody>
            </table>
          </div>
        </form>

        ";
        // line 117
        if (($context["coupon_status"] ?? null)) {
            // line 118
            echo "          <div class=\"cart-coupon-under-products\" style=\"margin: 12px 0 0 0;\">
            <div class=\"form-group\" style=\"margin-bottom: 0;\">
              <div class=\"input-group\" style=\"max-width: 420px;\">
                <input type=\"text\" name=\"coupon\" value=\"";
            // line 121
            echo ($context["coupon"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["button_coupon"] ?? null);
            echo "\" id=\"input-coupon-cart\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                  <button type=\"button\" id=\"button-coupon-cart\" data-loading-text=\"";
            // line 123
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_coupon"] ?? null);
            echo "</button>
                </span>
              </div>
              <div id=\"coupon-cart-message\" style=\"max-width: 420px; margin-top: 6px; display: none;\"></div>
            </div>
          </div>
          <script type=\"text/javascript\"><!--
\$('#button-coupon-cart').on('click', function() {
  var \$msg = \$('#coupon-cart-message');
  \$msg.hide().removeClass('text-danger text-success').html('');

  \$.ajax({
    url: 'index.php?route=extension/total/coupon/coupon',
    type: 'post',
    data: 'coupon=' + encodeURIComponent(\$('#input-coupon-cart').val()),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-coupon-cart').button('loading');
    },
    complete: function() {
      \$('#button-coupon-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        // Show checkout-like inline warning under the coupon input
        \$msg.addClass('text-danger').html(json['error']).show();
        return;
      }

      if (json['redirect']) {
        location.href = json['redirect'] + (json['redirect'].indexOf('?') === -1 ? '?' : '&') + '_=' + Date.now();
      } else {
        location.reload();
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \\\"\\\\r\\\\n\\\" + xhr.statusText + \\\"\\\\r\\\\n\\\" + xhr.responseText);
    }
  });
});
//--></script>
        ";
        }
        // line 167
        echo "
        <div class=\"cart-bottom\">
          <div class=\"panels-total\">
              ";
        // line 170
        if ((($context["modules"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 170), "get", [0 => "cartPanelsStatus"], "method", false, false, false, 170))) {
            // line 171
            echo "                <div class=\"cart-panels\">
                  <h2 class=\"title\">";
            // line 172
            echo ($context["text_next"] ?? null);
            echo "</h2>
                  <p>";
            // line 173
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 175
                echo "                          ";
                echo $context["module"];
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                  </div>
                </div>
              ";
        }
        // line 180
        echo "            <div class=\"cart-total\">
              <table class=\"table table-bordered\">
                  ";
        // line 183
        echo "                  ";
        $context["sub_total"] = null;
        // line 184
        echo "                  ";
        $context["coupon_total"] = null;
        // line 185
        echo "                  ";
        $context["other_totals"] = [];
        // line 186
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 187
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 187) == "sub_total")) {
                // line 188
                echo "                      ";
                $context["sub_total"] = $context["total"];
                // line 189
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 189) == "coupon")) {
                // line 190
                echo "                      ";
                $context["coupon_total"] = $context["total"];
                // line 191
                echo "                    ";
            } else {
                // line 192
                echo "                      ";
                $context["other_totals"] = twig_array_merge(($context["other_totals"] ?? null), [0 => $context["total"]]);
                // line 193
                echo "                    ";
            }
            // line 194
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
                  ";
        // line 196
        if (($context["sub_total"] ?? null)) {
            // line 197
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 198
            echo twig_get_attribute($this->env, $this->source, ($context["sub_total"] ?? null), "title", [], "any", false, false, false, 198);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 199
            echo twig_get_attribute($this->env, $this->source, ($context["sub_total"] ?? null), "text", [], "any", false, false, false, 199);
            echo "</td>
                    </tr>
                  ";
        }
        // line 202
        echo "
                  ";
        // line 203
        if (($context["coupon_total"] ?? null)) {
            // line 204
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 205
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_total"] ?? null), "title", [], "any", false, false, false, 205);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 206
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_total"] ?? null), "text", [], "any", false, false, false, 206);
            echo "</td>
                    </tr>
                  ";
        }
        // line 209
        echo "
                  ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["other_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 211
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 212
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 212);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 213
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 213);
            echo "</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "              </table>
            </div>
          </div>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 220
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\"><span>";
        echo ($context["button_shopping"] ?? null);
        echo "</span></a></div>
            <div class=\"pull-right\"><a href=\"";
        // line 221
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_checkout"] ?? null);
        echo "</span></a></div>
          </div>
        </div>
      </div>
      ";
        // line 225
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 226
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 228
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 228,  601 => 226,  597 => 225,  588 => 221,  582 => 220,  576 => 216,  567 => 213,  563 => 212,  560 => 211,  556 => 210,  553 => 209,  547 => 206,  543 => 205,  540 => 204,  538 => 203,  535 => 202,  529 => 199,  525 => 198,  522 => 197,  520 => 196,  517 => 195,  511 => 194,  508 => 193,  505 => 192,  502 => 191,  499 => 190,  496 => 189,  493 => 188,  490 => 187,  485 => 186,  482 => 185,  479 => 184,  476 => 183,  472 => 180,  467 => 177,  458 => 175,  454 => 174,  450 => 173,  446 => 172,  443 => 171,  441 => 170,  436 => 167,  387 => 123,  380 => 121,  375 => 118,  373 => 117,  366 => 112,  357 => 109,  353 => 108,  346 => 106,  338 => 101,  334 => 99,  329 => 98,  320 => 95,  316 => 94,  307 => 90,  303 => 89,  291 => 82,  284 => 78,  276 => 77,  271 => 76,  267 => 75,  262 => 74,  259 => 73,  250 => 72,  243 => 71,  240 => 70,  232 => 69,  218 => 68,  215 => 67,  211 => 66,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  175 => 51,  169 => 49,  165 => 47,  159 => 46,  157 => 45,  152 => 44,  150 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  125 => 35,  120 => 34,  112 => 30,  109 => 29,  101 => 25,  98 => 24,  90 => 20,  88 => 19,  83 => 17,  78 => 14,  72 => 12,  70 => 11,  66 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/checkout/cart.twig", "");
    }
}
