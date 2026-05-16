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

/* journal3/template/journal3/product_card.twig */
class __TwigTemplate_037d7b231be7e2f05504b72cdf3e2a34f38e0aa6ee015f10e94377e47be3f3d5 extends \Twig\Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  ";
            $context["classes"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 4
$context["product"], "quantity", [], "any", false, false, false, 4) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 5
$context["product"], "date_end", [], "any", false, false, false, 5), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 6
$context["product"], "price_value", [], "any", false, false, false, 6), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 7
$context["product"], "extra_buttons", [], "any", false, false, false, 7)]], "method", false, false, false, 3);
            // line 9
            echo "  <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
    <div class=\"product-thumb\">
      ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 11) == "image")) {
                // line 12
                echo "        <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a></div>
      ";
            }
            // line 14
            echo "      <div class=\"image\">
        ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => "quickviewStatus"], "method", false, false, false, 15)) {
                // line 16
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\" ";
                // line 17
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 17) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 17))) {
                    echo "data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "quickviewText"], "method", false, false, false, 17);
                    echo "\"";
                }
                echo " onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 17);
                echo "')\"><span class=\"btn-text\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "quickviewText"], "method", false, false, false, 17);
                echo "</span></a>
          </div>
        ";
            }
            // line 20
            echo "
        <a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
            echo "\" class=\"product-img ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 21)) {
                echo "has-second-image";
            }
            echo "\">
          <div>
            ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 23)) {
                // line 24
                echo "              <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 24)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 24);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive img-first lazyload\"/>
            ";
            } else {
                // line 26
                echo "              <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 26)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 26);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" class=\"img-responsive img-first\"/>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 29)) {
                // line 30
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 30)) {
                    // line 31
                    echo "                <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 31);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 31)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 31);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 31);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" class=\"img-responsive img-second lazyload\"/>
              ";
                } else {
                    // line 33
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 33);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 33)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 33);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 33);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" class=\"img-responsive img-second\"/>
              ";
                }
                // line 35
                echo "            ";
            }
            // line 36
            echo "
          </div>
        </a>

        ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 40)) {
                // line 41
                echo "          <div class=\"product-labels\">
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 43
                    echo "              <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 43);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 43);
                    echo "</b></span>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </div>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "countdownStatus"], "method", false, false, false, 48) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 48))) {
                // line 49
                echo "          <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 49);
                echo "\"></div>
        ";
            }
            // line 51
            echo "      </div>

      <div class=\"caption\">
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 54) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 54))) {
                // line 55
                echo "          <div class=\"stats\">
            ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "              <span class=\"stat-1\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57), "label", [], "any", false, false, false, 57);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57), "text", [], "any", false, false, false, 57);
                    echo "</span></span>
            ";
                }
                // line 59
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "              <span class=\"stat-2\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 60), "text", [], "any", false, false, false, 60);
                    echo "</span></span>
            ";
                }
                // line 62
                echo "          </div>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 65) == "default")) {
                // line 66
                echo "          <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "</a></div>
        ";
            }
            // line 68
            echo "
        
                
                <style>
                .module-features-description ul{
                padding-inline-start: 20px !important;
                }
                .module-features-description ul ul{
                display: contents;
                }
                .module-features-description ul ul li {
                    list-style-type: disc;
                }

                </style>
                <div class=\"description\">
                    ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, $context["product"], "product_attributes", [], "any", false, false, false, 84)) {
                // line 85
                echo "                        <div class=\"module-features-description\">
                            <ul>
                                ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_attributes", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["short_attribute"]) {
                    // line 88
                    echo "                                    <li>";
                    echo $context["short_attribute"];
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['short_attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                            </ul>
                        </div>
                        ";
            }
            // line 93
            echo "                    </div>
                

        ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96)) {
                // line 97
                echo "          <div class=\"price\">
            <div>
              ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 100);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                    echo "</span>
              ";
                } else {
                    // line 102
                    echo "                <span class=\"price-normal\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                    echo "</span>
              ";
                }
                // line 104
                echo "            </div>
            ";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105)) {
                    // line 106
                    echo "              <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                    echo "</span>
            ";
                }
                // line 108
                echo "          </div>
        ";
            }
            // line 110
            echo "
        ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 111)) {
                // line 112
                echo "          <div class=\"rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 112), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 112) == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">
              ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 115
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 115) < $context["i"])) {
                        // line 116
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    } else {
                        // line 118
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    }
                    // line 120
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "            </div>
          </div>
        ";
            } else {
                // line 124
                echo "          <div class=\"rating no-rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 124) == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">
              ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 127
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 127) < $context["i"])) {
                        // line 128
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    } else {
                        // line 130
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    }
                    // line 132
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "            </div>
          </div>
        ";
            }
            // line 136
            echo "
        ";
            // line 137
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "catalogCartStatus"], "method", false, false, false, 137) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 137)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 137), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 137))) {
                // line 138
                echo "        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">
            ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 140), "get", [0 => "catalogCartStatus"], "method", false, false, false, 140)) {
                    // line 141
                    echo "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <input type=\"text\" name=\"quantity\" value=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 143);
                    echo "\" data-minimum=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 143);
                    echo "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 144);
                    echo "\"/>
                <span>
                <i class=\"fa fa-angle-up\"></i>
                <i class=\"fa fa-angle-down\"></i>
              </span>
              </div>
              <a class=\"btn btn-cart\" ";
                    // line 150
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 150), "getIn", [0 => (($context["prefix"] ?? null) . "CartDisplay"), 1 => $context], "method", false, false, false, 150) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 150), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipStatus"), 1 => $context], "method", false, false, false, 150))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 150), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipPosition"), 1 => $context], "method", false, false, false, 150);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
            </div>
            ";
                }
                // line 153
                echo "
            ";
                // line 154
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 154) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 154))) {
                    // line 155
                    echo "            <div class=\"wish-group\">
              ";
                    // line 156
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 156), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 156)) {
                        // line 157
                        echo "              <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 157), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 157) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 157), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 157))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 157), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 157);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                        echo "')\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
              ";
                    }
                    // line 159
                    echo "
              ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 160)) {
                        // line 161
                        echo "              <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 161) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 161))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 161);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
                        echo "')\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
              ";
                    }
                    // line 163
                    echo "            </div>
            ";
                }
                // line 165
                echo "          </div>
        </div>
        ";
            }
            // line 168
            echo "
        ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 169)) {
                // line 170
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 170) == "In Stock") || (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 170) == "Pre-Order"))) {
                    // line 171
                    echo "          <div class=\"extra-group\">
            <div>
              ";
                    // line 173
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 173));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                        // line 174
                        echo "                <a class=\"btn btn-extra btn-extra-";
                        echo $context["id"];
                        echo "\"
                  ";
                        // line 175
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "getIn", [0 => ((($context["prefix"] ?? null) . "ExtraButtonDisplay") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 175)), 1 => $context], "method", false, false, false, 175) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), 1 => $context], "method", false, false, false, 175))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " extra-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), 1 => $context], "method", false, false, false, 175);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 175);
                            echo "\" ";
                        }
                        // line 176
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 176) == "quickbuy")) {
                            echo "onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 176);
                            echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                        }
                        // line 177
                        echo "                  ";
                        if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 177) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 177), "href", [], "any", false, false, false, 177))) {
                            echo "href=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 177), "href", [], "any", false, false, false, 177);
                            echo "\" ";
                            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 177)], "method", false, false, false, 177);
                            echo " data-product_id=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 177);
                            echo "\" data-product_url=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 177);
                            echo "\"";
                        }
                        // line 178
                        echo "                   data-loading-text=\"<span class='btn-text'>";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 178);
                        echo "</span>\">
                  <span class=\"btn-text\">";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 179);
                        echo "</span>
                </a>
              ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "            </div>
          </div>
         ";
                } else {
                    // line 185
                    echo "            <p class=\"stock-status\" style=\"color: #fff; font-weight: bold; background-color:#DF146D; margin:10px; text-align:center; padding:7px 10px; border-radius:3px\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 185);
                    echo "</span></p>
        ";
                }
                // line 187
                echo "        ";
            }
            // line 188
            echo "      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 188,  667 => 187,  661 => 185,  656 => 182,  639 => 179,  634 => 178,  621 => 177,  614 => 176,  604 => 175,  599 => 174,  582 => 173,  578 => 171,  575 => 170,  573 => 169,  570 => 168,  565 => 165,  561 => 163,  543 => 161,  541 => 160,  538 => 159,  520 => 157,  518 => 156,  515 => 155,  513 => 154,  510 => 153,  490 => 150,  481 => 144,  475 => 143,  471 => 141,  469 => 140,  465 => 138,  463 => 137,  460 => 136,  455 => 133,  449 => 132,  445 => 130,  441 => 128,  438 => 127,  434 => 126,  426 => 124,  421 => 121,  415 => 120,  411 => 118,  407 => 116,  404 => 115,  400 => 114,  392 => 112,  390 => 111,  387 => 110,  383 => 108,  376 => 106,  374 => 105,  371 => 104,  365 => 102,  357 => 100,  355 => 99,  351 => 97,  349 => 96,  344 => 93,  339 => 90,  330 => 88,  326 => 87,  322 => 85,  320 => 84,  302 => 68,  294 => 66,  292 => 65,  289 => 64,  285 => 62,  277 => 60,  274 => 59,  266 => 57,  264 => 56,  261 => 55,  259 => 54,  254 => 51,  248 => 49,  246 => 48,  243 => 47,  239 => 45,  226 => 43,  222 => 42,  219 => 41,  217 => 40,  211 => 36,  208 => 35,  186 => 33,  162 => 31,  159 => 30,  157 => 29,  154 => 28,  132 => 26,  108 => 24,  106 => 23,  97 => 21,  94 => 20,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  60 => 12,  58 => 11,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/product_card.twig", "/Applications/XAMPP/xamppfiles/htdocs/matsuri/system/storage/modification/catalog/view/theme/journal3/template/journal3/product_card.twig");
    }
}
