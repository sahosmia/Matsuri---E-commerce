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
class __TwigTemplate_6d854c9a442a0fd32e658ab1e73e796bc5d72d8d68ce26bc4b3095dede4b8468 extends \Twig\Template
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
<div id=\"account-order\" class=\"container order-tracking-page\">
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
        echo "    <div id=\"content\" class=\"";
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

      <div class=\"oti-wrap\">
        <header class=\"oti-hero\">
          <div class=\"oti-hero-text\">
            <p class=\"oti-kicker\">";
        // line 39
        echo ($context["text_order_id"] ?? null);
        echo " <span class=\"oti-order-hash\">#";
        echo ($context["order_id"] ?? null);
        echo "</span></p>
            <p class=\"oti-sub\"><i class=\"fa fa-calendar\"></i> ";
        // line 40
        echo ($context["text_date_added"] ?? null);
        echo " ";
        echo ($context["date_added"] ?? null);
        echo "</p>
            ";
        // line 41
        if (($context["invoice_no"] ?? null)) {
            // line 42
            echo "              <p class=\"oti-sub\"><i class=\"fa fa-file-text-o\"></i> ";
            echo ($context["text_invoice_no"] ?? null);
            echo " ";
            echo ($context["invoice_no"] ?? null);
            echo "</p>
            ";
        }
        // line 44
        echo "          </div>
          ";
        // line 45
        if (($context["order_status"] ?? null)) {
            // line 46
            echo "            <div class=\"oti-hero-badge-wrap\">
              <span class=\"oti-status-badge\">";
            // line 47
            echo ($context["order_status"] ?? null);
            echo "</span>
            </div>
          ";
        }
        // line 50
        echo "        </header>

        <div class=\"oti-methods\">
          ";
        // line 53
        if (($context["payment_method"] ?? null)) {
            // line 54
            echo "            <div class=\"oti-method\"><span class=\"oti-method-label\">";
            echo ($context["text_payment_method"] ?? null);
            echo "</span><span class=\"oti-method-value\">";
            echo ($context["payment_method"] ?? null);
            echo "</span></div>
          ";
        }
        // line 56
        echo "          ";
        if (($context["shipping_method"] ?? null)) {
            // line 57
            echo "            <div class=\"oti-method\"><span class=\"oti-method-label\">";
            echo ($context["text_shipping_method"] ?? null);
            echo "</span><span class=\"oti-method-value\">";
            echo ($context["shipping_method"] ?? null);
            echo "</span></div>
          ";
        }
        // line 59
        echo "        </div>

        <div class=\"row oti-split\">
          <div class=\"col-md-7 oti-main-col\">
            <section class=\"oti-panel\">
              <h2 class=\"oti-panel-title\">";
        // line 64
        echo ($context["text_order_detail"] ?? null);
        echo "</h2>
              <div class=\"oti-address-grid\">
                <div class=\"oti-address-card\">
                  <h3 class=\"oti-address-title\">";
        // line 67
        echo ($context["text_payment_address"] ?? null);
        echo "</h3>
                  <div class=\"oti-address-body\">";
        // line 68
        echo ($context["payment_address"] ?? null);
        echo "</div>
                </div>
                ";
        // line 70
        if (($context["shipping_address"] ?? null)) {
            // line 71
            echo "                <div class=\"oti-address-card\">
                  <h3 class=\"oti-address-title\">";
            // line 72
            echo ($context["text_shipping_address"] ?? null);
            echo "</h3>
                  <div class=\"oti-address-body\">";
            // line 73
            echo ($context["shipping_address"] ?? null);
            echo "</div>
                </div>
                ";
        }
        // line 76
        echo "              </div>
            </section>

            <section class=\"oti-panel oti-products-panel\">
              <h2 class=\"oti-panel-title\">";
        // line 80
        echo ($context["text_items_ordered"] ?? null);
        echo "</h2>
              <div class=\"table-responsive\">
                <table class=\"table oti-table\">
                  <thead>
                    <tr>
                      ";
        // line 85
        if (($context["products"] ?? null)) {
            echo "<td class=\"oti-col-thumb\"></td>";
        }
        // line 86
        echo "                      <td class=\"text-left\">";
        echo ($context["column_name"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 87
        echo ($context["column_model"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 88
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 89
        echo ($context["column_price"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 90
        echo ($context["column_total"] ?? null);
        echo "</td>
                      ";
        // line 91
        if (($context["products"] ?? null)) {
            echo "<td class=\"oti-col-actions\"></td>";
        }
        // line 92
        echo "                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 96
            echo "                    <tr class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 96)], "method", false, false, false, 96);
            echo "\">
                      <td class=\"oti-col-thumb\">
                        ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 98)) {
                // line 99
                echo "                          <span class=\"oti-pthumb\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 99);
                echo "\" alt=\"\"/></span>
                        ";
            } else {
                // line 101
                echo "                          <span class=\"oti-pthumb oti-pthumb--empty\"><i class=\"fa fa-image\"></i></span>
                        ";
            }
            // line 103
            echo "                      </td>
                      <td class=\"text-left\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
            echo "
                        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br/><small class=\"oti-opt\">— ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 105);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 105);
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                      </td>
                      <td class=\"text-left\">";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 107);
            echo "</td>
                      <td class=\"text-right\">";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 108);
            echo "</td>
                      <td class=\"text-right\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
            echo "</td>
                      <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 110);
            echo "</td>
                      <td class=\"text-right oti-col-actions\">
                        ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 112)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 112);
                echo "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\"><i class=\"fa fa-shopping-cart\"></i></a>";
            }
            // line 113
            echo "                        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 113);
            echo "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\"><i class=\"fa fa-reply\"></i></a>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 118
            echo "                    <tr>
                      ";
            // line 119
            if (($context["products"] ?? null)) {
                echo "<td></td>";
            }
            // line 120
            echo "                      <td class=\"text-left\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 120);
            echo "</td>
                      <td class=\"text-left\">—</td>
                      <td class=\"text-right\">1</td>
                      <td class=\"text-right\">";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 123);
            echo "</td>
                      <td class=\"text-right\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 124);
            echo "</td>
                      ";
            // line 125
            if (($context["products"] ?? null)) {
                echo "<td></td>";
            }
            // line 126
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                  </tbody>
                  <tfoot>
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 131
            echo "                    <tr class=\"oti-total-row";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 131) == "total")) {
                echo " oti-total-row--grand";
            }
            echo "\">
                      <td class=\"oti-tfoot-pad\" colspan=\"";
            // line 132
            echo ((($context["products"] ?? null)) ? (4) : (3));
            echo "\"></td>
                      <td class=\"text-right\"><b>";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 133);
            echo "</b></td>
                      <td class=\"text-right\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 134);
            echo "</td>
                      ";
            // line 135
            if (($context["products"] ?? null)) {
                echo "<td></td>";
            }
            // line 136
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                  </tfoot>
                </table>
              </div>
            </section>

            ";
        // line 143
        if (($context["comment"] ?? null)) {
            // line 144
            echo "            <section class=\"oti-panel oti-comment-panel\">
              <h2 class=\"oti-panel-title\">";
            // line 145
            echo ($context["text_comment"] ?? null);
            echo "</h2>
              <div class=\"oti-comment-body\">";
            // line 146
            echo ($context["comment"] ?? null);
            echo "</div>
            </section>
            ";
        }
        // line 149
        echo "          </div>

          <div class=\"col-md-5 oti-side-col\">
            ";
        // line 152
        if (($context["histories"] ?? null)) {
            // line 153
            echo "            <section class=\"oti-panel oti-timeline-panel\">
              <h2 class=\"oti-panel-title\">";
            // line 154
            echo ($context["text_history"] ?? null);
            echo "</h2>
              <ul class=\"oti-timeline\">
                ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 157
                echo "                <li class=\"oti-timeline-item\">
                  <span class=\"oti-timeline-dot\"></span>
                  <div class=\"oti-timeline-card\">
                    <div class=\"oti-timeline-date\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 160);
                echo "</div>
                    <div class=\"oti-timeline-status\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 161);
                echo "</div>
                    ";
                // line 162
                if (twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 162)) {
                    echo "<div class=\"oti-timeline-comment\">";
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 162);
                    echo "</div>";
                }
                // line 163
                echo "                  </div>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "              </ul>
            </section>
            ";
        }
        // line 169
        echo "
            <section class=\"oti-panel oti-summary-panel\">
              <h2 class=\"oti-panel-title\">";
        // line 171
        echo ($context["text_order_summary"] ?? null);
        echo "</h2>
              <ul class=\"oti-summary-list\">
                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 174
            echo "                <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 174) == "total")) {
                echo "oti-summary-grand";
            }
            echo "\"><span>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 174);
            echo "</span><strong>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 174);
            echo "</strong></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "              </ul>
            </section>

            <div class=\"oti-actions\">
              <a href=\"";
        // line 180
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary btn-block\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 186
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 187
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 189
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
        return array (  574 => 189,  569 => 187,  565 => 186,  554 => 180,  548 => 176,  533 => 174,  529 => 173,  524 => 171,  520 => 169,  515 => 166,  507 => 163,  501 => 162,  497 => 161,  493 => 160,  488 => 157,  484 => 156,  479 => 154,  476 => 153,  474 => 152,  469 => 149,  463 => 146,  459 => 145,  456 => 144,  454 => 143,  447 => 138,  440 => 136,  436 => 135,  432 => 134,  428 => 133,  424 => 132,  417 => 131,  413 => 130,  409 => 128,  402 => 126,  398 => 125,  394 => 124,  390 => 123,  383 => 120,  379 => 119,  376 => 118,  371 => 117,  358 => 113,  350 => 112,  345 => 110,  341 => 109,  337 => 108,  333 => 107,  330 => 106,  317 => 105,  313 => 104,  310 => 103,  306 => 101,  300 => 99,  298 => 98,  292 => 96,  288 => 95,  283 => 92,  279 => 91,  275 => 90,  271 => 89,  267 => 88,  263 => 87,  258 => 86,  254 => 85,  246 => 80,  240 => 76,  234 => 73,  230 => 72,  227 => 71,  225 => 70,  220 => 68,  216 => 67,  210 => 64,  203 => 59,  195 => 57,  192 => 56,  184 => 54,  182 => 53,  177 => 50,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  155 => 42,  153 => 41,  147 => 40,  141 => 39,  132 => 34,  126 => 32,  124 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  99 => 23,  94 => 22,  86 => 18,  83 => 17,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_info.twig", "");
    }
}
