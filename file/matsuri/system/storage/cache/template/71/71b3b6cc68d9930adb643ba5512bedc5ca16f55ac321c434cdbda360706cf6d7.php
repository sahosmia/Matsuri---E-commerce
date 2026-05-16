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

/* sale/order_invoice.twig */
class __TwigTemplate_594d249333b739827bd27e76abe465540d50cd09a59e292f1de1ab5e734ebb9f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "  <div style=\"page-break-after: always;\">
    <table class=\"table\" style=\"margin-bottom: 0px;\">
      <tr>
        <td><img  src=\"/image/cache/catalog/website/logo/matsuri-1000x548.png.webp\" width=\"130px\" alt=\"Matsuri\" title=\"Matsuri\"></td>
        <td style=\"text-align: right; border:none;\">
          <h1 style=\"margin:0; color:#333;\">";
            // line 21
            echo ($context["text_invoice"] ?? null);
            echo "</h1>
          <span style=\"font-size:18px; color:#666;\">#";
            // line 22
            echo ((twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 22)) ? (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 22)) : (sprintf(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 22), "%07d")));
            echo "</span>
        </td>
      </tr>
    </table>
    
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
            // line 30
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"width: 50%;\"><address>
            <strong>";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 36);
            echo "</strong><br />
            ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 37);
            echo "
            </address>
            <b>";
            // line 39
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 39);
            echo "<br />
            ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 40)) {
                // line 41
                echo "            <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 41);
                echo "<br />
            ";
            }
            // line 43
            echo "            <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 43);
            echo "<br />
            <b>";
            // line 44
            echo ($context["text_website"] ?? null);
            echo "</b> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 44);
            echo "</a></td>
          <td style=\"width: 50%;\"><b>";
            // line 45
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 45);
            echo "<br />
            ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 46)) {
                // line 47
                echo "            <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 47);
                echo "<br />
            ";
            }
            // line 49
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 49);
            echo "<br />
            <b>";
            // line 50
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 50);
            echo "<br />
            
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          
          <td style=\"\"><b>";
            // line 59
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 65);
            echo "
            </address>";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 66);
            echo "</td>
            
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 74
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 75
            echo ($context["column_model"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 76
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 77
            echo ($context["column_price"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 78
            echo ($context["column_total"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "        <tr>
          <td>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "
            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 86
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 87);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 87);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "</td>
          <td>";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 89);
                echo "</td>
          <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 90);
                echo "</td>
          <td class=\"text-right\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
                echo "</td>
          <td class=\"text-right\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 92);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 96
                echo "        <tr>
          <td>";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 97);
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 100);
                echo "</td>
          <td class=\"text-right\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 101);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 105
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 106);
                echo "</b></td>
          <td class=\"text-right\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 107);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "      </tbody>
    </table>
    ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 112)) {
                // line 113
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 116
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 121);
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 126
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 128,  350 => 126,  342 => 121,  334 => 116,  329 => 113,  327 => 112,  323 => 110,  314 => 107,  310 => 106,  307 => 105,  302 => 104,  293 => 101,  289 => 100,  283 => 97,  280 => 96,  275 => 95,  266 => 92,  262 => 91,  258 => 90,  254 => 89,  251 => 88,  241 => 87,  238 => 86,  234 => 85,  230 => 84,  227 => 83,  223 => 82,  216 => 78,  212 => 77,  208 => 76,  204 => 75,  200 => 74,  189 => 66,  185 => 65,  176 => 59,  162 => 50,  155 => 49,  147 => 47,  145 => 46,  139 => 45,  131 => 44,  124 => 43,  116 => 41,  114 => 40,  108 => 39,  103 => 37,  99 => 36,  90 => 30,  79 => 22,  75 => 21,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_invoice.twig", "");
    }
}
