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

/* journal3/template/common/success.twig */
class __TwigTemplate_c7bd8e7851bb256c00f27e65886b1e6abcbee9e9fecf5b8fb0f57707e7b0c04a extends \Twig\Template
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
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
        
        <div id=\"printableInvoice\">
            <div style=\"text-align: center; margin-bottom: 20px;\">
           <img src=\"https://matsuridev.client.againtheme.com/image/cache/catalog/website/logo/matsuri-1000x548.png\" alt=\"Website Logo\" style=\"width: 150px;\">
           </div>
           
      ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "pageTitlePosition"], "method", false, false, false, 27) == "default")) {
            // line 28
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 30
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 32
        echo "      
      ";
        // line 33
        if (($context["products"] ?? null)) {
            // line 34
            echo "        
        <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">Order Details</td>
            ";
            // line 40
            echo "          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">
              <b>Order ID:</b> #";
            // line 45
            echo ($context["order_id"] ?? null);
            echo "<br />
              <b>Date Added:</b> ";
            // line 46
            echo ($context["date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
            // line 47
            if (($context["payment_method"] ?? null)) {
                echo " <b>Payment Method</b> ";
                echo ($context["payment_method"] ?? null);
                echo "<br />
              ";
            }
            // line 49
            echo "              ";
            if (($context["shipping_method"] ?? null)) {
                echo " <b>Shipping Method</b> ";
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
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">Payment Address</td>
            ";
            // line 57
            if (($context["shipping_address"] ?? null)) {
                // line 58
                echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">Shipping Address</td>
            ";
            }
            // line 59
            echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 63
            echo ($context["payment_address"] ?? null);
            echo "</td>
            ";
            // line 64
            if (($context["shipping_address"] ?? null)) {
                // line 65
                echo "            <td class=\"text-left\">";
                echo ($context["shipping_address"] ?? null);
                echo "</td>
            ";
            }
            // line 66
            echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-order\">
          <thead>
            <tr>
              <td class=\"text-left\">Product Name</td>
              <td class=\"text-left\">Model</td>
              <td class=\"text-right\">Quantity</td>
              <td class=\"text-right\">Price</td>
              <td class=\"text-right\">Total</td>
              </tr>
          </thead>
          <tbody>
          
          ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "          <tr class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 83)], "method", false, false, false, 83);
                echo "\">
            <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "
              ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
              &nbsp;<small> - ";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 86);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
            <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 87);
                echo "</td>
            <td class=\"text-right\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 88);
                echo "</td>
            <td class=\"text-right\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                echo "</td>
            <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 90);
                echo "</td>
        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 94
                echo "          <tr>
            <td class=\"text-left\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 95);
                echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 98);
                echo "</td>
            <td class=\"text-right\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 99);
                echo "</td>
        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </tbody>
          
          <tfoot>
          
          ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 107
                echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 109);
                echo "</b></td>
            <td class=\"text-right\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 110);
                echo "</td>
            ";
                // line 111
                if (($context["products"] ?? null)) {
                    // line 112
                    echo "            <td></td>
            ";
                }
                // line 113
                echo " </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </tfoot>
          
        </table>
      </div>
      ";
            // line 119
            if (($context["comment"] ?? null)) {
                // line 120
                echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
                // line 123
                echo ($context["text_comment"] ?? null);
                echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
                // line 128
                echo ($context["comment"] ?? null);
                echo "</td>
          </tr>
        </tbody>
      </table>
      ";
            }
            // line 133
            echo "        
      ";
        }
        // line 135
        echo "      
      </div>
      
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 139
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 141
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 142
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<script>
    function printInvoice() {
        // Get the invoice content
        var printContents = document.getElementById('printableInvoice').innerHTML;

        // Save the current page content
        var originalContents = document.body.innerHTML;

        // Replace the page content with the printable content
        document.body.innerHTML = printContents;

        // Trigger print
        window.print();

        // Optionally, remove the page reload if it is not necessary.
         window.location.reload();
    }
</script>

";
        // line 164
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 164,  376 => 142,  372 => 141,  365 => 139,  359 => 135,  355 => 133,  347 => 128,  339 => 123,  334 => 120,  332 => 119,  326 => 115,  319 => 113,  315 => 112,  313 => 111,  309 => 110,  305 => 109,  301 => 107,  297 => 106,  291 => 102,  282 => 99,  278 => 98,  272 => 95,  269 => 94,  264 => 93,  255 => 90,  251 => 89,  247 => 88,  243 => 87,  232 => 86,  226 => 85,  222 => 84,  217 => 83,  213 => 82,  195 => 66,  189 => 65,  187 => 64,  183 => 63,  177 => 59,  173 => 58,  171 => 57,  155 => 49,  148 => 47,  144 => 46,  140 => 45,  133 => 40,  126 => 34,  124 => 33,  121 => 32,  116 => 30,  110 => 28,  108 => 27,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/success.twig", "");
    }
}
