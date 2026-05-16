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

/* journal3/template/product/search.twig */
class __TwigTemplate_30b23817627211e4c7de21bfbb18b9366dba5f44301ed6b6491d0052db59a2fa extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
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
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "pageTitlePosition"], "method", false, false, false, 21) == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"title search-criteria-title\">";
        // line 25
        echo ($context["entry_search"] ?? null);
        echo "</h2>

      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 29
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />

          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 32
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34) == ($context["category_id"] ?? null))) {
                // line 35
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 35);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
                echo "</option>
              ";
            } else {
                // line 37
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 37);
                echo "</option>
              ";
            }
            // line 39
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 40
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                    // line 41
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 41);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    echo "</option>
                ";
                } else {
                    // line 43
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 43);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 43);
                    echo "</option>
                ";
                }
                // line 45
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 46
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46) == ($context["category_id"] ?? null))) {
                        // line 47
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        echo "</option>
                  ";
                    } else {
                        // line 49
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 49);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        echo "</option>
                  ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 59
        if (($context["sub_category"] ?? null)) {
            // line 60
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 62
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 64
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>

        <div class=\"checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 69
        if (($context["description"] ?? null)) {
            // line 70
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 72
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 74
        echo "            ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
        </div>

      </div>

      <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>";
        // line 80
        echo ($context["button_search"] ?? null);
        echo "</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">";
        // line 82
        echo ($context["text_search"] ?? null);
        echo "</h2>
      <div class=\"main-products-wrapper\">
      ";
        // line 84
        if (($context["products"] ?? null)) {
            // line 85
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 85), "get", [0 => "sortBarStatus"], "method", false, false, false, 85)) {
                // line 86
                echo "              <div class=\"products-filter\">
                  <div class=\"grid-list\">
                    <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "globalProductView"], "method", false, false, false, 88) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
                    <button id=\"btn-list-view\" class=\"view-btn ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 89), "get", [0 => "globalProductView"], "method", false, false, false, 89) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
                    <a href=\"";
                // line 90
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
                  </div>
                  <div class=\"select-group\">
                      <div class=\"input-group input-group-sm sort-by\">
                          <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 94
                echo ($context["text_sort"] ?? null);
                echo "</label>
                          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                              ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 97
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 97) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 98
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 98);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 98);
                        echo "</option>
                                  ";
                    } else {
                        // line 100
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 100);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 100);
                        echo "</option>
                                  ";
                    }
                    // line 102
                    echo "                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                          </select>
                      </div>
                      <div class=\"input-group input-group-sm per-page\">
                          <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 106
                echo ($context["text_limit"] ?? null);
                echo "</label>
                          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                              ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 109
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 109) == ($context["limit"] ?? null))) {
                        // line 110
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 110);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 110);
                        echo "</option>
                                  ";
                    } else {
                        // line 112
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 112);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 112);
                        echo "</option>
                                  ";
                    }
                    // line 114
                    echo "                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                          </select>
                      </div>
                  </div>
              </div>
          ";
            }
            // line 120
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 120), "get", [0 => "globalProductView"], "method", false, false, false, 120);
            echo "\">
          ";
            // line 121
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 121), "get", [0 => "globalProductView"], "method", false, false, false, 121);
            // line 122
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/search.twig", 122)->display($context);
            // line 123
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 125
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 126
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 129
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 131
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 134
        echo "      </div>
      ";
        // line 135
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 136
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 185
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 185,  438 => 136,  434 => 135,  431 => 134,  423 => 131,  417 => 129,  411 => 126,  407 => 125,  403 => 123,  400 => 122,  398 => 121,  393 => 120,  386 => 115,  380 => 114,  372 => 112,  364 => 110,  361 => 109,  357 => 108,  352 => 106,  347 => 103,  341 => 102,  333 => 100,  325 => 98,  322 => 97,  318 => 96,  313 => 94,  304 => 90,  296 => 89,  288 => 88,  284 => 86,  281 => 85,  279 => 84,  274 => 82,  269 => 80,  259 => 74,  255 => 72,  251 => 70,  249 => 69,  240 => 64,  236 => 62,  232 => 60,  230 => 59,  223 => 54,  217 => 53,  211 => 52,  205 => 51,  197 => 49,  189 => 47,  186 => 46,  181 => 45,  173 => 43,  165 => 41,  162 => 40,  157 => 39,  149 => 37,  141 => 35,  138 => 34,  134 => 33,  130 => 32,  122 => 29,  115 => 25,  110 => 24,  104 => 22,  102 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/search.twig", "");
    }
}
