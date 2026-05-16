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

/* catalog/category_list.twig */
class __TwigTemplate_74a94a408894153608f3fdc00f2200798a792d1e2dc4ab58e55117e7a09c15d4 extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                 <tr>
\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t <input type=\"text\"  style=\"width: 36%; display: inline-block;\" name=\"filter_name\" value=\"";
        // line 38
        echo ($context["filter_name"] ?? null);
        echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary button\" style=\"margin-top: -4px;\" ><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t <button type=\"button\" id=\"button-clear\" style=\"margin-top: -4px;\" class=\"btn btn-danger button\">";
        // line 40
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t   </td>
                </tr>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "name")) {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 49
        echo "</td>
                  <td class=\"text-right\">";
        // line 50
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 51
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 54
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        if (($context["categories"] ?? null)) {
            // line 60
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 61
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 62
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 62), ($context["selected"] ?? null))) {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 63);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 65
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 65);
                    echo "\" />
                    ";
                }
                // line 66
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67);
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 68);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        } else {
            // line 73
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 74
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 77
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 82
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 83
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
      var url = 'index.php?route=catalog/category&user_token=";
        // line 91
        echo ($context["user_token"] ?? null);
        echo "';
    
      var filter_name = \$('input[name=\\'filter_name\\']').val();
    \t\t
      if (filter_name) 
      {
    \turl += '&filter_name=' + encodeURIComponent(filter_name);
      }
      location = url;
    });
 \$('#button-clear').on('click', function() {
 location ='index.php?route=catalog/category&user_token=";
        // line 102
        echo ($context["user_token"] ?? null);
        echo "';
});\t\t\t\t\t\t
// Category
\$('input[name=\\'filter_name\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 108
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
\t    response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_name\\']').val(item['label']);
  }
});\t\t
//--></script>
";
        // line 125
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 125,  300 => 108,  291 => 102,  277 => 91,  266 => 83,  262 => 82,  255 => 77,  249 => 74,  246 => 73,  243 => 72,  232 => 69,  228 => 68,  224 => 67,  221 => 66,  215 => 65,  209 => 63,  207 => 62,  204 => 61,  199 => 60,  197 => 59,  190 => 55,  187 => 54,  179 => 53,  169 => 51,  167 => 50,  164 => 49,  156 => 48,  146 => 46,  144 => 45,  136 => 40,  132 => 39,  128 => 38,  119 => 32,  113 => 29,  109 => 27,  101 => 23,  98 => 22,  90 => 18,  88 => 17,  82 => 13,  71 => 11,  67 => 10,  62 => 8,  55 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
