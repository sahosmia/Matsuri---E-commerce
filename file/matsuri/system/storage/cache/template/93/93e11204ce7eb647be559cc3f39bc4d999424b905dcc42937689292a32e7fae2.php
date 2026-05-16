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

/* journal3/template/product/category.twig */
class __TwigTemplate_5984a33057a5843202ad541e403e643bac1fe2e474dca17e1cf2689ed66b62f0 extends \Twig\Template
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
            echo "    <li><a href=\"";
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


<div style=\"background: #fff;\">        
 
    <div class=\"breadcrumb\" style=\"white-space: wrap !important;\">
        <h1 style=\"color:#3663AA; font-family:'trebuchet_msregular'; padding-top: 0px;\">";
        // line 12
        echo ($context["caption"] ?? null);
        echo " Price in Bangladesh ";
        echo ($context["year"] ?? null);
        echo " - ";
        echo ($context["store"] ?? null);
        echo "</h1>                    
        <p style=\"padding-top: 10px;\">";
        // line 13
        echo ($context["caption"] ?? null);
        echo " Price in Bangladesh ";
        echo ($context["year"] ?? null);
        echo " at ";
        echo ($context["store"] ?? null);
        echo " depends on the model, brand, technical specifications, and order quantity. We offer a wide range of routers, including dual-band routers, mesh Wi-Fi systems, gigabit routers, and enterprise-grade networking solutions—perfect for both home and corporate use. Browse below now.
        </p>

        <div class=\"cat-list\">
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 17)) {
            // line 18
            echo "            ";
            if (($context["categories"] ?? null)) {
                // line 19
                echo "              <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 19);
                echo "\">
                ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "refineTitle"], "method", false, false, false, 20)) {
                    // line 21
                    echo "                  <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "refineTitleText"], "method", false, false, false, 21);
                    echo "</h3>
                ";
                }
                // line 23
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 23) == "carousel")) {
                    // line 24
                    echo "                <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 24), "get", [0 => "subcategoriesItemsPerRow"], "method", false, false, false, 24), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 24), "getJs", [], "method", false, false, false, 24), 1 => "subcategoriesCarouselStyle"], "method", false, false, false, 24), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
                  <div class=\"swiper-container\" ";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 25)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                } else {
                    // line 28
                    echo "                      <div class=\"refine-items\">
                        ";
                }
                // line 30
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 31
                    echo "                          <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 31) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                            <a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                    echo "\">
                              ";
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 33) != "links")) {
                        // line 34
                        echo "                                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 34);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 34)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 34);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 34);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 34);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 34);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 34);
                        echo "\"/>
                              ";
                    }
                    // line 36
                    echo "                              <span class=\"refine-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                    echo "</span>
                            </a>
                          </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 40) != "carousel")) {
                    // line 41
                    echo "                      </div>
                      ";
                } else {
                    // line 43
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
                ";
                }
                // line 52
                echo "              </div>
            ";
            }
            // line 54
            echo "          ";
        }
        // line 55
        echo "        </div>
    </div>

</div>


";
        // line 66
        echo "        
";
        // line 114
        echo "
";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 115), "get", [0 => "pageTitlePosition"], "method", false, false, false, 115) == "top")) {
            // line 116
            echo "  ";
        }
        // line 118
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 118);
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 120
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 122), "get", [0 => "pageTitlePosition"], "method", false, false, false, 122) == "default")) {
            // line 123
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 125
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 125), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 125)) {
            // line 126
            echo "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 127
                echo "        <div class=\"category-description\">
          ";
                // line 128
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 128), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 128))) {
                    // line 129
                    echo "          <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 129), "get", [0 => "image_dimensions_category.width"], "method", false, false, false, 129);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 129), "get", [0 => "image_dimensions_category.height"], "method", false, false, false, 129);
                    echo "\"/>
          ";
                }
                // line 131
                echo "          ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 131), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 131))) {
                    // line 132
                    echo "            <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 134
                echo "        </div>
      ";
            }
            // line 136
            echo "      ";
        }
        // line 137
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      

      
      <div class=\"main-products-wrapper\">
      ";
        // line 142
        if (($context["products"] ?? null)) {
            // line 143
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 143), "get", [0 => "sortBarStatus"], "method", false, false, false, 143)) {
                // line 144
                echo "        <div class=\"products-filter\">
          <div class=\"grid-list\">
            <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 146
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 146), "get", [0 => "globalProductView"], "method", false, false, false, 146) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
            <button id=\"btn-list-view\" class=\"view-btn ";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 147), "get", [0 => "globalProductView"], "method", false, false, false, 147) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
            <a href=\"";
                // line 148
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
            <span class=\"category-name\">";
                // line 149
                echo ($context["heading_title"] ?? null);
                echo "</span>
          </div>
          <div class=\"select-group\">
            <div class=\"input-group input-group-sm per-page\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 153
                echo ($context["text_limit"] ?? null);
                echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 156
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 156) == ($context["limit"] ?? null))) {
                        // line 157
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 157);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 157);
                        echo "</option>
                  ";
                    } else {
                        // line 159
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 159);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 159);
                        echo "</option>
                  ";
                    }
                    // line 161
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "              </select>
            </div>
              
            <div class=\"input-group input-group-sm sort-by\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 166
                echo ($context["text_sort"] ?? null);
                echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 169
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 169) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 170
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 170);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 170);
                        echo "</option>
                  ";
                    } else {
                        // line 172
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 172);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 172);
                        echo "</option>
                  ";
                    }
                    // line 174
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "              </select>
            </div>
          
          </div>
        </div>
        ";
            }
            // line 181
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => "globalProductView"], "method", false, false, false, 181);
            echo "\">
          ";
            // line 182
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 182), "get", [0 => "globalProductView"], "method", false, false, false, 182);
            // line 183
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 183)->display($context);
            // line 184
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 186
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 187
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 190
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 191
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 193
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 196
        echo "      </div>
      ";
        // line 197
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 198
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 200
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 200);
        echo "
";
        // line 201
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 201,  466 => 200,  461 => 198,  457 => 197,  454 => 196,  446 => 193,  440 => 191,  437 => 190,  431 => 187,  427 => 186,  423 => 184,  420 => 183,  418 => 182,  413 => 181,  405 => 175,  399 => 174,  391 => 172,  383 => 170,  380 => 169,  376 => 168,  371 => 166,  365 => 162,  359 => 161,  351 => 159,  343 => 157,  340 => 156,  336 => 155,  331 => 153,  324 => 149,  318 => 148,  310 => 147,  302 => 146,  298 => 144,  295 => 143,  293 => 142,  284 => 137,  281 => 136,  277 => 134,  271 => 132,  268 => 131,  246 => 129,  244 => 128,  241 => 127,  238 => 126,  235 => 125,  229 => 123,  227 => 122,  222 => 120,  217 => 118,  214 => 116,  212 => 115,  209 => 114,  206 => 66,  198 => 55,  195 => 54,  191 => 52,  180 => 43,  176 => 41,  173 => 40,  162 => 36,  142 => 34,  140 => 33,  136 => 32,  129 => 31,  124 => 30,  120 => 28,  112 => 25,  105 => 24,  102 => 23,  96 => 21,  94 => 20,  89 => 19,  86 => 18,  84 => 17,  73 => 13,  65 => 12,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
