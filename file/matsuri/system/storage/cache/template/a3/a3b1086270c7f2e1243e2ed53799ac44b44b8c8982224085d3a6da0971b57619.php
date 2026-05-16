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
class __TwigTemplate_a13ce2419e90706f5a964697713e1005c2712ec0a95cc357ceee2409f3e35309 extends \Twig\Template
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
            echo "        ";
            // line 119
            echo "        ";
            $context["coupon_post_url"] = ((array_key_exists("coupon_ajax_url", $context)) ? (_twig_default_filter(($context["coupon_ajax_url"] ?? null), "index.php?route=extension/total/coupon/coupon")) : ("index.php?route=extension/total/coupon/coupon"));
            // line 120
            echo "        ";
            $context["coupon_block_title"] = ((array_key_exists("heading_coupon_block", $context)) ? (_twig_default_filter(($context["heading_coupon_block"] ?? null), ($context["entry_coupon"] ?? null))) : (($context["entry_coupon"] ?? null)));
            // line 121
            echo "        ";
            $context["coupon_btn_label"] = ((array_key_exists("button_submit", $context)) ? (_twig_default_filter(($context["button_submit"] ?? null), ($context["button_coupon"] ?? null))) : (($context["button_coupon"] ?? null)));
            // line 122
            echo "        ";
            $context["coupon_ok_text"] = ((array_key_exists("coupon_success_text", $context)) ? (_twig_default_filter(($context["coupon_success_text"] ?? null), "Success: Your coupon discount has been applied!")) : ("Success: Your coupon discount has been applied!"));
            // line 123
            echo "        <div class=\"checkout-section section-cvr cart-page-coupon\">
          <div class=\"title section-title\">";
            // line 124
            echo ($context["coupon_block_title"] ?? null);
            echo "</div>
          <div class=\"section-body\">
            <div class=\"form-group form-coupon\">
              <label class=\"control-label\" for=\"input-coupon-cart\">";
            // line 127
            echo ($context["entry_coupon"] ?? null);
            echo "</label>
              <div class=\"input-group\" style=\"max-width: 480px;\">
                <input type=\"text\" name=\"coupon\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, ($context["coupon"] ?? null), "html_attr");
            echo "\" placeholder=\"";
            echo ($context["entry_coupon"] ?? null);
            echo "\" id=\"input-coupon-cart\" class=\"form-control\" autocomplete=\"off\" />
                <span class=\"input-group-btn\">
                  <button type=\"button\" id=\"button-coupon-cart\" data-loading-text=\"";
            // line 131
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><span>";
            echo ($context["coupon_btn_label"] ?? null);
            echo "</span></button>
                </span>
              </div>
              <div id=\"coupon-cart-message\" class=\"coupon-cart-feedback\" style=\"display: none; margin-top: 8px;\"></div>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\"><!--
(function (\$) {
  var couponSuccessDefault = ";
            // line 140
            echo json_encode(($context["coupon_ok_text"] ?? null));
            echo ";

  function journalCartCouponUrl(u) {
    if (!u) { return u; }
    if (u.indexOf('http') === 0) { return u; }
    if (u.charAt(0) === '/') { return window.location.protocol + '//' + window.location.host + u; }
    var b = \$('base').attr('href') || (window.location.origin + '/');
    if (b.slice(-1) !== '/') { b += '/'; }
    return b + u.replace(/^\\.\\//, '');
  }

  function showCartCouponSuccess(\$msg, text) {
    var t = (text && String(text).length) ? String(text) : (couponSuccessDefault || '');
    if (!t) { return; }
    \$msg.removeClass('text-danger').addClass('text-success')
      .html('<i class=\"fa fa-check-circle\"></i> ' + \$('<span/>').text(t).html())
      .css('display', 'block');
    try {
      if (\$msg[0] && \$msg[0].scrollIntoView) {
        \$msg[0].scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    } catch (e) {}
  }

  \$('#button-coupon-cart').on('click', function () {
    var \$msg = \$('#coupon-cart-message');
    var \$btn = \$('#button-coupon-cart');
    \$msg.hide().removeClass('text-danger text-success').html('').css('display', 'none');

    \$.ajax({
      url: '";
            // line 170
            echo ($context["coupon_post_url"] ?? null);
            echo "',
      type: 'post',
      data: 'coupon=' + encodeURIComponent(\$('#input-coupon-cart').val()),
      dataType: 'json',
      beforeSend: function () {
        try {
          if (\$btn.data('loading-text')) {
            \$btn.data('orig-html', \$btn.html()).html(\$btn.data('loading-text')).prop('disabled', true);
          } else {
            \$btn.prop('disabled', true);
          }
        } catch (e) {
          \$btn.prop('disabled', true);
        }
      },
      complete: function () {
        try {
          if (\$btn.data('orig-html')) {
            \$btn.html(\$btn.data('orig-html')).prop('disabled', false);
          } else {
            \$btn.prop('disabled', false);
          }
        } catch (e) {
          \$btn.prop('disabled', false);
        }
      },
      success: function (json) {
        if (typeof json === 'string') {
          try { json = JSON.parse(json); } catch (e) { return; }
        }
        if (typeof json !== 'object' || json === null) {
          return;
        }

        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$msg.addClass('text-danger').removeClass('text-success').html(json['error']).show();
          return;
        }

        if (json['redirect']) {
          if (json['coupon'] !== undefined) {
            \$('#input-coupon-cart').val(json['coupon']);
          }
          showCartCouponSuccess(\$msg, json['success']);

          var reloadUrl = journalCartCouponUrl(json['redirect']);
          \$.get(reloadUrl, function (html) {
            var \$parsed = \$('<div>').append(\$.parseHTML(html, document, true));
            var \$newTable = \$parsed.find('#checkout-cart .cart-total table').first();
            if (\$newTable.length) {
              \$('#checkout-cart .cart-total table').first().replaceWith(\$newTable.clone());
            }
          }).fail(function () {
            window.location.href = reloadUrl + (reloadUrl.indexOf('?') === -1 ? '?' : '&') + '_=' + Date.now();
          });
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \\\"\\\\r\\\\n\\\" + xhr.statusText + \\\"\\\\r\\\\n\\\" + xhr.responseText);
      }
    });
  });
})(jQuery);
//--></script>
        ";
        }
        // line 237
        echo "
        <div class=\"cart-bottom\">
          <div class=\"panels-total\">
              ";
        // line 240
        if ((($context["modules"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 240), "get", [0 => "cartPanelsStatus"], "method", false, false, false, 240))) {
            // line 241
            echo "                <div class=\"cart-panels\">
                  <h2 class=\"title\">";
            // line 242
            echo ($context["text_next"] ?? null);
            echo "</h2>
                  <p>";
            // line 243
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 245
                echo "                          ";
                echo $context["module"];
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                  </div>
                </div>
              ";
        }
        // line 250
        echo "            <div class=\"cart-total\">
              <table class=\"table table-bordered\">
                  ";
        // line 253
        echo "                  ";
        $context["sub_total"] = null;
        // line 254
        echo "                  ";
        $context["coupon_total"] = null;
        // line 255
        echo "                  ";
        $context["other_totals"] = [];
        // line 256
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 257
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 257) == "sub_total")) {
                // line 258
                echo "                      ";
                $context["sub_total"] = $context["total"];
                // line 259
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 259) == "coupon")) {
                // line 260
                echo "                      ";
                $context["coupon_total"] = $context["total"];
                // line 261
                echo "                    ";
            } else {
                // line 262
                echo "                      ";
                $context["other_totals"] = twig_array_merge(($context["other_totals"] ?? null), [0 => $context["total"]]);
                // line 263
                echo "                    ";
            }
            // line 264
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "
                  ";
        // line 266
        if (($context["sub_total"] ?? null)) {
            // line 267
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 268
            echo twig_get_attribute($this->env, $this->source, ($context["sub_total"] ?? null), "title", [], "any", false, false, false, 268);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 269
            echo twig_get_attribute($this->env, $this->source, ($context["sub_total"] ?? null), "text", [], "any", false, false, false, 269);
            echo "</td>
                    </tr>
                  ";
        }
        // line 272
        echo "
                  ";
        // line 273
        if (($context["coupon_total"] ?? null)) {
            // line 274
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 275
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_total"] ?? null), "title", [], "any", false, false, false, 275);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 276
            echo twig_get_attribute($this->env, $this->source, ($context["coupon_total"] ?? null), "text", [], "any", false, false, false, 276);
            echo "</td>
                    </tr>
                  ";
        }
        // line 279
        echo "
                  ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["other_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 281
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 282
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 282);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 283
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 283);
            echo "</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "              </table>
            </div>
          </div>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 290
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\"><span>";
        echo ($context["button_shopping"] ?? null);
        echo "</span></a></div>
            <div class=\"pull-right\"><a href=\"";
        // line 291
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_checkout"] ?? null);
        echo "</span></a></div>
          </div>
        </div>
      </div>
      ";
        // line 295
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 296
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 298
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
        return array (  697 => 298,  692 => 296,  688 => 295,  679 => 291,  673 => 290,  667 => 286,  658 => 283,  654 => 282,  651 => 281,  647 => 280,  644 => 279,  638 => 276,  634 => 275,  631 => 274,  629 => 273,  626 => 272,  620 => 269,  616 => 268,  613 => 267,  611 => 266,  608 => 265,  602 => 264,  599 => 263,  596 => 262,  593 => 261,  590 => 260,  587 => 259,  584 => 258,  581 => 257,  576 => 256,  573 => 255,  570 => 254,  567 => 253,  563 => 250,  558 => 247,  549 => 245,  545 => 244,  541 => 243,  537 => 242,  534 => 241,  532 => 240,  527 => 237,  457 => 170,  424 => 140,  410 => 131,  403 => 129,  398 => 127,  392 => 124,  389 => 123,  386 => 122,  383 => 121,  380 => 120,  377 => 119,  375 => 118,  373 => 117,  366 => 112,  357 => 109,  353 => 108,  346 => 106,  338 => 101,  334 => 99,  329 => 98,  320 => 95,  316 => 94,  307 => 90,  303 => 89,  291 => 82,  284 => 78,  276 => 77,  271 => 76,  267 => 75,  262 => 74,  259 => 73,  250 => 72,  243 => 71,  240 => 70,  232 => 69,  218 => 68,  215 => 67,  211 => 66,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  175 => 51,  169 => 49,  165 => 47,  159 => 46,  157 => 45,  152 => 44,  150 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  125 => 35,  120 => 34,  112 => 30,  109 => 29,  101 => 25,  98 => 24,  90 => 20,  88 => 19,  83 => 17,  78 => 14,  72 => 12,  70 => 11,  66 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/checkout/cart.twig", "");
    }
}
