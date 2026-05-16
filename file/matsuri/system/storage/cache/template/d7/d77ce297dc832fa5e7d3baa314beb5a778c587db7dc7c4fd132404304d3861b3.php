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
class __TwigTemplate_d33cecb277efdc66f54528aa9820dfb1150bd6cfd15aeebfd26b068e492c3f38 extends \Twig\Template
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
<div id=\"account-order\" class=\"container\">
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
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 38
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 43
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br />
              ";
        }
        // line 44
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br />
              <b>";
        // line 45
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 46
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br />
              ";
        }
        // line 48
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 55
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 56
        if (($context["shipping_address"] ?? null)) {
            // line 57
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 58
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 62
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 63
        if (($context["shipping_address"] ?? null)) {
            // line 64
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 65
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-order\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 72
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 73
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 74
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 75
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 76
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 77
        if (($context["products"] ?? null)) {
            // line 78
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 79
        echo " </tr>
          </thead>
          <tbody>

          ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 84
            echo "          <tr class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 84)], "method", false, false, false, 84);
            echo "\">
            <td class=\"text-left\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
            echo "
              ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              &nbsp;<small> - ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 87);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 87);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 88);
            echo "</td>
            <td class=\"text-right\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 89);
            echo "</td>
            <td class=\"text-right\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
            echo "</td>
            <td class=\"text-right\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 91);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 92
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 92)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 92);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 92);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 96
            echo "          <tr>
            <td class=\"text-left\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 97);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 100);
            echo "</td>
            <td class=\"text-right\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 101);
            echo "</td>
            ";
            // line 102
            if (($context["products"] ?? null)) {
                // line 103
                echo "            <td></td>
            ";
            }
            // line 104
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </tbody>

          <tfoot>

          ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 111
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 113);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 114);
            echo "</td>
            ";
            // line 115
            if (($context["products"] ?? null)) {
                // line 116
                echo "            <td></td>
            ";
            }
            // line 117
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </tfoot>

        </table>
      </div>
      ";
        // line 123
        if (($context["comment"] ?? null)) {
            // line 124
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 127
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 132
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 137
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 138
            echo "      <h2 class=\"title\">";
            echo ($context["text_history"] ?? null);
            echo "</h2>
      <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 143
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 144
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 145
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>

        ";
            // line 150
            if (($context["histories"] ?? null)) {
                // line 151
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 152
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 153);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 154);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 155);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "        ";
            } else {
                // line 159
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 160
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 163
            echo "          </tbody>

      </table>
      </div>
      ";
        }
        // line 168
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 169
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 171
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 172
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 174
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
        return array (  524 => 174,  519 => 172,  515 => 171,  508 => 169,  505 => 168,  498 => 163,  492 => 160,  489 => 159,  486 => 158,  477 => 155,  473 => 154,  469 => 153,  466 => 152,  461 => 151,  459 => 150,  451 => 145,  447 => 144,  443 => 143,  434 => 138,  431 => 137,  423 => 132,  415 => 127,  410 => 124,  408 => 123,  402 => 119,  395 => 117,  391 => 116,  389 => 115,  385 => 114,  381 => 113,  377 => 111,  373 => 110,  367 => 106,  360 => 104,  356 => 103,  354 => 102,  350 => 101,  346 => 100,  340 => 97,  337 => 96,  332 => 95,  313 => 92,  309 => 91,  305 => 90,  301 => 89,  297 => 88,  286 => 87,  280 => 86,  276 => 85,  271 => 84,  267 => 83,  261 => 79,  257 => 78,  255 => 77,  251 => 76,  247 => 75,  243 => 74,  239 => 73,  235 => 72,  226 => 65,  220 => 64,  218 => 63,  214 => 62,  208 => 58,  202 => 57,  200 => 56,  196 => 55,  179 => 48,  170 => 46,  164 => 45,  157 => 44,  148 => 43,  140 => 38,  132 => 34,  126 => 32,  124 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  99 => 23,  94 => 22,  86 => 18,  83 => 17,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_info.twig", "");
    }
}
