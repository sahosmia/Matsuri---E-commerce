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

/* journal3/template/account/order_info.twig */
class __TwigTemplate_9aea0b24076b22e2757485036f30ff258c98ab801756d7f606478df7b93f448a extends \Twig\Template
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
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"account-order\" class=\"container oc-invoice-page\">
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 23
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 25
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 29
            echo "    ";
        }
        // line 30
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "pageTitlePosition"], "method", false, false, false, 31) == "default")) {
            // line 32
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 34
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "

      <article class=\"oc-invoice\" aria-label=\"";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "\">
        <header class=\"oc-invoice-header\">
          <div class=\"oc-invoice-header-main\">
            <p class=\"oc-invoice-store\">";
        // line 39
        echo ($context["store_name"] ?? null);
        echo "</p>
            <p class=\"oc-invoice-type\">";
        // line 40
        echo ($context["text_invoice_title"] ?? null);
        echo "</p>
          </div>
          <div class=\"oc-invoice-header-aside\">
            ";
        // line 43
        if (($context["order_status"] ?? null)) {
            // line 44
            echo "              <span class=\"oc-invoice-status-badge\">";
            echo ($context["order_status"] ?? null);
            echo "</span>
            ";
        }
        // line 46
        echo "            <dl class=\"oc-invoice-dl\">
              <div class=\"oc-invoice-dl-row\">
                <dt>";
        // line 48
        echo ($context["text_order_id"] ?? null);
        echo "</dt>
                <dd>#";
        // line 49
        echo ($context["order_id"] ?? null);
        echo "</dd>
              </div>
              ";
        // line 51
        if (($context["invoice_no"] ?? null)) {
            // line 52
            echo "              <div class=\"oc-invoice-dl-row\">
                <dt>";
            // line 53
            echo ($context["text_invoice_no"] ?? null);
            echo "</dt>
                <dd>";
            // line 54
            echo ($context["invoice_no"] ?? null);
            echo "</dd>
              </div>
              ";
        }
        // line 57
        echo "              <div class=\"oc-invoice-dl-row\">
                <dt>";
        // line 58
        echo ($context["text_date_added"] ?? null);
        echo "</dt>
                <dd>";
        // line 59
        echo ($context["date_added"] ?? null);
        echo "</dd>
              </div>
              ";
        // line 61
        if (($context["payment_method"] ?? null)) {
            // line 62
            echo "              <div class=\"oc-invoice-dl-row\">
                <dt>";
            // line 63
            echo ($context["text_payment_method"] ?? null);
            echo "</dt>
                <dd>";
            // line 64
            echo ($context["payment_method"] ?? null);
            echo "</dd>
              </div>
              ";
        }
        // line 67
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            // line 68
            echo "              <div class=\"oc-invoice-dl-row\">
                <dt>";
            // line 69
            echo ($context["text_shipping_method"] ?? null);
            echo "</dt>
                <dd>";
            // line 70
            echo ($context["shipping_method"] ?? null);
            echo "</dd>
              </div>
              ";
        }
        // line 73
        echo "            </dl>
          </div>
        </header>

        <div class=\"oc-invoice-addresses\">
          <section class=\"oc-invoice-card\">
            <h2 class=\"oc-invoice-card-title\">";
        // line 79
        echo ($context["text_payment_address"] ?? null);
        echo "</h2>
            <div class=\"oc-invoice-card-body\">";
        // line 80
        echo ($context["payment_address"] ?? null);
        echo "</div>
          </section>
          ";
        // line 82
        if (($context["shipping_address"] ?? null)) {
            // line 83
            echo "          <section class=\"oc-invoice-card\">
            <h2 class=\"oc-invoice-card-title\">";
            // line 84
            echo ($context["text_shipping_address"] ?? null);
            echo "</h2>
            <div class=\"oc-invoice-card-body\">";
            // line 85
            echo ($context["shipping_address"] ?? null);
            echo "</div>
          </section>
          ";
        }
        // line 88
        echo "        </div>

        <div class=\"oc-invoice-body\">
          <div class=\"oc-invoice-main\">
            <h2 class=\"oc-invoice-section-title\">";
        // line 92
        echo ($context["text_invoice_line_items"] ?? null);
        echo "</h2>
            <div class=\"oc-invoice-table-wrap\">
              <table class=\"oc-invoice-table oc-invoice-table--lines\">
                <thead>
                  <tr>
                    <th class=\"oc-col-product\">";
        // line 97
        echo ($context["column_name"] ?? null);
        echo "</th>
                    <th class=\"oc-col-model\">";
        // line 98
        echo ($context["column_model"] ?? null);
        echo "</th>
                    <th class=\"oc-col-qty text-right\">";
        // line 99
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                    <th class=\"oc-col-price text-right\">";
        // line 100
        echo ($context["column_price"] ?? null);
        echo "</th>
                    <th class=\"oc-col-line text-right\">";
        // line 101
        echo ($context["column_total"] ?? null);
        echo "</th>
                    ";
        // line 102
        if (($context["products"] ?? null)) {
            // line 103
            echo "                    <th class=\"oc-col-actions\"></th>
                    ";
        }
        // line 105
        echo "                  </tr>
                </thead>
                <tbody>
                  ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 109
            echo "                  <tr class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ((twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 109), [])) : ([]))], "method", false, false, false, 109);
            echo "\">
                    <td class=\"oc-col-product\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
            echo "
                      ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br/><span class=\"oc-invoice-option\">— ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 111);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 111);
                echo "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    </td>
                    <td class=\"oc-col-model\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 113);
            echo "</td>
                    <td class=\"oc-col-qty text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 114);
            echo "</td>
                    <td class=\"oc-col-price text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
            echo "</td>
                    <td class=\"oc-col-line text-right\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 116);
            echo "</td>
                    ";
            // line 117
            if (($context["products"] ?? null)) {
                // line 118
                echo "                    <td class=\"oc-col-actions text-right\">
                      ";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 119)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 119);
                    echo "\" class=\"btn btn-default btn-sm oc-invoice-icon-btn\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_reorder"] ?? null);
                    echo "\"><i class=\"fa fa-shopping-cart\"></i></a>";
                }
                // line 120
                echo "                      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 120);
                echo "\" class=\"btn btn-default btn-sm oc-invoice-icon-btn\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_return"] ?? null);
                echo "\"><i class=\"fa fa-reply\"></i></a>
                    </td>
                    ";
            }
            // line 123
            echo "                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 126
            echo "                  <tr>
                    <td class=\"oc-col-product\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 127);
            echo "</td>
                    <td class=\"oc-col-model\">—</td>
                    <td class=\"oc-col-qty text-right\">1</td>
                    <td class=\"oc-col-price text-right\">";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 130);
            echo "</td>
                    <td class=\"oc-col-line text-right\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 131);
            echo "</td>
                    ";
            // line 132
            if (($context["products"] ?? null)) {
                echo "<td></td>";
            }
            // line 133
            echo "                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tbody>
              </table>
            </div>
          </div>

          <aside class=\"oc-invoice-sidebar\">
            <div class=\"oc-invoice-card oc-invoice-card--totals\">
              <h2 class=\"oc-invoice-card-title\">";
        // line 142
        echo ($context["text_invoice_summary"] ?? null);
        echo "</h2>
              <div class=\"oc-invoice-totals\">
                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 145
            echo "                <div class=\"oc-invoice-total-row";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 145) == "total")) {
                echo " oc-invoice-total-row--grand";
            }
            echo "\">
                  <span class=\"oc-invoice-total-label\">";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 146);
            echo "</span>
                  <span class=\"oc-invoice-total-value\">";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 147);
            echo "</span>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "              </div>
            </div>
          </aside>
        </div>

        ";
        // line 155
        if (($context["comment"] ?? null)) {
            // line 156
            echo "        <section class=\"oc-invoice-card oc-invoice-card--comment\">
          <h2 class=\"oc-invoice-card-title\">";
            // line 157
            echo ($context["text_comment"] ?? null);
            echo "</h2>
          <div class=\"oc-invoice-card-body\">";
            // line 158
            echo ($context["comment"] ?? null);
            echo "</div>
        </section>
        ";
        }
        // line 161
        echo "
        ";
        // line 162
        if (($context["histories"] ?? null)) {
            // line 163
            echo "        <section class=\"oc-invoice-history\">
          <h2 class=\"oc-invoice-section-title\">";
            // line 164
            echo ($context["text_history"] ?? null);
            echo "</h2>
          <div class=\"oc-invoice-table-wrap\">
            <table class=\"oc-invoice-table\">
              <thead>
                <tr>
                  <th>";
            // line 169
            echo ($context["column_date_added"] ?? null);
            echo "</th>
                  <th>";
            // line 170
            echo ($context["column_status"] ?? null);
            echo "</th>
                  <th>";
            // line 171
            echo ($context["column_comment"] ?? null);
            echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 176
                echo "                <tr>
                  <td>";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 177);
                echo "</td>
                  <td>";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 178);
                echo "</td>
                  <td>";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 179);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "              </tbody>
            </table>
          </div>
        </section>
        ";
        }
        // line 187
        echo "
        <footer class=\"oc-invoice-actions no-print\">
          <button type=\"button\" class=\"btn btn-default\" onclick=\"window.print();\"><i class=\"fa fa-print\"></i> ";
        // line 189
        echo ($context["button_print"] ?? null);
        echo "</button>
          <a href=\"";
        // line 190
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
        </footer>
      </article>

      ";
        // line 194
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 195
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 197
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 197,  560 => 195,  556 => 194,  547 => 190,  543 => 189,  539 => 187,  532 => 182,  523 => 179,  519 => 178,  515 => 177,  512 => 176,  508 => 175,  501 => 171,  497 => 170,  493 => 169,  485 => 164,  482 => 163,  480 => 162,  477 => 161,  471 => 158,  467 => 157,  464 => 156,  462 => 155,  455 => 150,  446 => 147,  442 => 146,  435 => 145,  431 => 144,  426 => 142,  417 => 135,  410 => 133,  406 => 132,  402 => 131,  398 => 130,  392 => 127,  389 => 126,  384 => 125,  377 => 123,  368 => 120,  360 => 119,  357 => 118,  355 => 117,  351 => 116,  347 => 115,  343 => 114,  339 => 113,  336 => 112,  323 => 111,  319 => 110,  314 => 109,  310 => 108,  305 => 105,  301 => 103,  299 => 102,  295 => 101,  291 => 100,  287 => 99,  283 => 98,  279 => 97,  271 => 92,  265 => 88,  259 => 85,  255 => 84,  252 => 83,  250 => 82,  245 => 80,  241 => 79,  233 => 73,  227 => 70,  223 => 69,  220 => 68,  217 => 67,  211 => 64,  207 => 63,  204 => 62,  202 => 61,  197 => 59,  193 => 58,  190 => 57,  184 => 54,  180 => 53,  177 => 52,  175 => 51,  170 => 49,  166 => 48,  162 => 46,  156 => 44,  154 => 43,  148 => 40,  144 => 39,  138 => 36,  132 => 34,  126 => 32,  124 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  99 => 23,  94 => 22,  86 => 18,  83 => 17,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_info.twig", "");
    }
}
