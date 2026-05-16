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

/* journal3/template/account/address_list.twig */
class __TwigTemplate_56d96185d2f9808bf73d0714542b7e82c35c589af1e11778094ecd48c0d40b78 extends \Twig\Template
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
            echo ($context["text_address_book"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"account-address\" class=\"container\">
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 15
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "pageTitlePosition"], "method", false, false, false, 27) == "default")) {
            // line 28
            echo "        <h1 class=\"title page-title\">";
            echo ($context["text_address_book"] ?? null);
            echo "</h1>
      ";
        }
        // line 30
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 31
        if (($context["addresses"] ?? null)) {
            // line 32
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 35
                echo "          <tr>
            <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 36);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 37);
                echo "\" class=\"btn btn-info\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 37);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </table>
      </div>
      ";
        } else {
            // line 43
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 45
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 46
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 47
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 52,  196 => 50,  192 => 49,  185 => 47,  179 => 46,  176 => 45,  170 => 43,  165 => 40,  150 => 37,  146 => 36,  143 => 35,  139 => 34,  135 => 32,  133 => 31,  128 => 30,  122 => 28,  120 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 18,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/address_list.twig", "");
    }
}
