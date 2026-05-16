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

/* journal3/template/product/product.twig */
class __TwigTemplate_1ca09640c923de16571e34011a27bf837992b8d6541ba9983372efdf850c8d86 extends \Twig\Template
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
        $context["stylePrefix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [0 => "quickview"], "method", false, false, false, 1)) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["optionPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionPrice")], "method", false, false, false, 2);
        // line 3
        $context["direction"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "right"))) ? ("vertical") : ("horizontal"));
        // line 4
        $context["carousel"] = ((($context["direction"] ?? null) == "vertical") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesCarousel")], "method", false, false, false, 4));
        // line 5
        $context["carouselOptions"] = ["slidesPerView" => "auto", "spaceBetween" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", false, false, false, 7), 0)) : (0)), "direction" =>         // line 8
($context["direction"] ?? null)];
        // line 10
        $context["galleryOptions"] = ["thumbWidth" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "image_dimensions_popup_thumb.width"], "method", false, false, false, 11), "thumbConHeight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "image_dimensions_popup_thumb.height"], "method", false, false, false, 12), "addClass" => "lg-product-images", "mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryMode")], "method", false, false, false, 14), "download" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryDownload")], "method", false, false, false, 15), "fullScreen" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryFullScreen")], "method", false, false, false, 16)];
        // line 18
        $context["quickviewExpand"] = ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 18) || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18) > 0) && ($context["description"] ?? null)) && (twig_length_filter($this->env, ($context["description"] ?? null)) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18))))) ? ("no-expand") : (""));
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isDescriptionEmpty", [0 => ($context["description"] ?? null)], "method", false, false, false, 19)) {
            // line 20
            $context["description"] = "";
        }
        // line 22
        echo ($context["header"] ?? null);
        echo "
";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 23), "isPopup", [], "method", false, false, false, 23)) {
            // line 24
            echo "<ul class=\"breadcrumb\">
  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 26
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</ul>
";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "pageTitlePosition"], "method", false, false, false, 29) == "top")) {
                // line 30
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 32);
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 34
            echo ($context["column_left"] ?? null);
            echo "
    <div id=\"content\" class=\"";
            // line 35
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 37
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "isPopup", [0 => "options"], "method", false, false, false, 38)) {
            // line 39
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "pageTitlePosition"], "method", false, false, false, 39) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "isPopup", [0 => "quickview"], "method", false, false, false, 39))) {
                // line 40
                echo "          <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
        ";
            }
            // line 42
            echo "      ";
        }
        // line 43
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 44
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 45
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 46
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 47
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 43) . " ") .         // line 48
($context["product_exclude_classes"] ?? null));
        // line 49
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 50
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 50), "isPopup", [0 => "options"], "method", false, false, false, 50)) {
            // line 51
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 52
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 52), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 52);
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 53
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "getJs", [], "method", false, false, false, 53), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 53), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 53)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 53);
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 54)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 56
            $context["gallery"] = [];
            // line 57
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                echo "                    ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 58), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 58), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 59
                echo "                    <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 59), "isPopup", [], "method", false, false, false, 59) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 59))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59);
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 60);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 60)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 60);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 60);
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 60);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 60);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 60);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 60)) {
                    echo "loading=\"lazy\"";
                }
                echo "/>
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 72
            if (($context["product_labels"] ?? null)) {
                // line 73
                echo "                <div class=\"product-labels\">
                  ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 75
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 75);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 75);
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                </div>
              ";
            }
            // line 79
            echo "            </div>
            ";
            // line 80
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 80))) {
                // line 81
                echo "              ";
                if (($context["carousel"] ?? null)) {
                    // line 82
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo "style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 82), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 82);
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 83
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 83)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 86
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86);
                        echo "\">
                          <img src=\"";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 87)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 87);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 87);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 87);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) {
                            echo "loading=\"lazy\"";
                        }
                        echo "/>
                        </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 99
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 101
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101);
                        echo "\">
                      <img src=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 102);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 102);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 102);
                        echo "\"/>
                    </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "                </div>
              ";
                }
                // line 107
                echo "            ";
            }
            // line 108
            echo "          </div>
          ";
            // line 109
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 109), "isPopup", [], "method", false, false, false, 109) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 109), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 109))) {
                // line 110
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 112
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 112), "isPopup", [0 => "options"], "method", false, false, false, 112)) {
                // line 113
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 115
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 115));
                    echo "
            </div>
            ";
                }
                // line 118
                echo "          ";
            }
            // line 119
            echo "          ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 119), "isPopup", [0 => "quickview"], "method", false, false, false, 119)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 119), "get", [0 => "quickviewDescription"], "method", false, false, false, 119)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 119), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 119) == "image"))) {
                // line 120
                echo "            <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 123
                echo ($context["description"] ?? null);
                echo "
                </div>
                ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 125), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 125)) {
                    // line 126
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 128
                echo "              </div>
            </div>
          ";
            }
            // line 131
            echo "          ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 131), "isPopup", [], "method", false, false, false, 131)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 131), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 131) == "image"))) {
                // line 132
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 133
                echo ($context["text_tags"] ?? null);
                echo "</span>
              ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 135
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 135);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 135);
                    echo "</a>
                ";
                    // line 136
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 136)) {
                        echo "<b>,</b>";
                    }
                    // line 137
                    echo "              ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "            </div>
          ";
            }
            // line 140
            echo "        </div>
        ";
        }
        // line 142
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 144
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 144), "isPopup", [0 => "options"], "method", false, false, false, 144)) {
            // line 145
            echo "          <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>

\t\t\t<div style=\"display: flex; align-items: center; gap: 10px; order:20;\">
            <span style=\"font-size: 16px; font-weight: bold; color: #333;\">Share:</span>
            <div class=\"social-share\" style=\"display: flex; gap: 5px;\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 150
            echo ($context["social_share"] ?? null);
            echo "\" target=\"_blank\">
                    <button style=\"background-color: #4267B2; color: white; padding: 2px 10px; border: none; border-radius: 3px;\">
                        <i class=\"fa fa-facebook\"></i>
                    </button>
                </a>
                <a href=\"https://twitter.com/intent/tweet?url=";
            // line 155
            echo ($context["share"] ?? null);
            echo "&text=";
            echo ($context["product_name"] ?? null);
            echo "\" target=\"_blank\">
                    <button style=\"background-color: #1DA1F2; color: white; padding: 2px 10px; border: none; border-radius: 3px;\">
                        <i class=\"fa fa-twitter\"></i>
                    </button>
                </a>
                <a href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
            // line 160
            echo ($context["social_share"] ?? null);
            echo "&title=";
            echo ($context["product_name"] ?? null);
            echo "\" target=\"_blank\">
                    <button style=\"background-color: #0077B5; color: white; padding: 2px 10px; border: none; border-radius: 3px;\">
                        <i class=\"fa fa-linkedin\"></i>
                    </button>
                </a>
                <a href=\"https://api.whatsapp.com/send?text=";
            // line 165
            echo ($context["social_share"] ?? null);
            echo "\" target=\"_blank\">
                    <button style=\"background-color: #25D366; color: white; padding: 2px 10px; border: none; border-radius: 3px;\">
                        <i class=\"fa fa-whatsapp\"></i>
                    </button>
                </a>
            </div>
        </div>
\t\t\t
          ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 173)) {
                // line 174
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 175
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 175));
                echo "
          </div>
          ";
            }
            // line 178
            echo "          ";
        }
        // line 179
        echo "
          ";
        // line 180
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 180), "isPopup", [0 => "quickview"], "method", false, false, false, 180)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => "quickviewDescription"], "method", false, false, false, 180)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 180) == "top"))) {
            // line 181
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 184
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 186
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 186), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 186)) {
                // line 187
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 189
            echo "              </div>
            </div>
          ";
        }
        // line 192
        echo "
          ";
        // line 193
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 193), "isPopup", [0 => "options"], "method", false, false, false, 193) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 193)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 193) == "default"))) {
            // line 194
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 196
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 196), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 196)) {
                // line 197
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 197), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 197);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 199
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 199)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 199) == "list"))) {
                // line 200
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 200);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 202
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 202), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 202) && ($context["reward"] ?? null))) {
                // line 203
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 203), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 203);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 205
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 205) && ($context["model"] ?? null))) {
                // line 206
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 206), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 206);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 208
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 208), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 208) && ($context["product_weight"] ?? null))) {
                // line 209
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 209), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 209);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 211
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 211), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 211) && ($context["product_dimension"] ?? null))) {
                // line 212
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 212), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 212);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 214
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 214), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 214) && ($context["product_sku"] ?? null))) {
                // line 215
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 215), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 215);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 217
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 217), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 217) && ($context["product_upc"] ?? null))) {
                // line 218
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 218), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 218);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 220
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 220), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 220) && ($context["product_ean"] ?? null))) {
                // line 221
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 221), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 221);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 223
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 223), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 223) && ($context["product_jan"] ?? null))) {
                // line 224
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 224), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 224);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 226
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 226), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 226) && ($context["product_isbn"] ?? null))) {
                // line 227
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 227), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 227);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 229
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 229), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 229) && ($context["product_mpn"] ?? null))) {
                // line 230
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 230), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 230);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 232
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 232), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 232) && ($context["product_location"] ?? null))) {
                // line 233
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 233), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 233);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 235
            echo "              </ul>
              ";
            // line 236
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 236), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 236)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 236), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 236) == "image"))) {
                // line 237
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 238
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 239
                if (($context["manufacturer_image"] ?? null)) {
                    // line 240
                    echo "                      <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 240), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 240);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 240), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 240);
                    echo "\"/>
                    ";
                }
                // line 242
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 246
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 246), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 246)) {
                // line 247
                echo "                <div class=\"custom-stats\">
                  ";
                // line 248
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 248), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 248)) {
                    // line 249
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 249), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 249);
                    echo "</b></div>
                  ";
                }
                // line 251
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 251), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 251)) {
                    // line 252
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 252), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 252);
                    echo "</b></div>
                  ";
                }
                // line 254
                echo "                </div>
              ";
            }
            // line 256
            echo "            </div>
          ";
        }
        // line 258
        echo "
          ";
        // line 259
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 259), "isPopup", [], "method", false, false, false, 259))) {
            // line 260
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 263
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 264
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 267
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 272
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 275
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 276
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 276), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 276);
            echo "</b>
                <a>";
            // line 277
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 281
        echo "
          ";
        // line 282
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 282), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 282), "isPopup", [], "method", false, false, false, 282)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 282))) {
            // line 283
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 284), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 284)) {
                // line 285
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 285), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 285);
                echo "</h5>
              ";
            }
            // line 287
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 288
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 288), "get", [0 => "countdownDay"], "method", false, false, false, 288);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 289
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 289), "get", [0 => "countdownHour"], "method", false, false, false, 289);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 290
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 290), "get", [0 => "countdownMin"], "method", false, false, false, 290);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 291
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 291), "get", [0 => "countdownSec"], "method", false, false, false, 291);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 295
        echo "
          ";
        // line 296
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 296), "isPopup", [0 => "options"], "method", false, false, false, 296))) {
            // line 297
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 300
            if ( !($context["special"] ?? null)) {
                // line 301
                echo "                 <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            } else {
                // line 303
                echo "                 <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 304
                echo ($context["price"] ?? null);
                echo "</div>
               ";
            }
            // line 306
            echo "             </div>
             ";
            // line 307
            if (($context["tax"] ?? null)) {
                // line 308
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 310
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 311
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 313
            echo "
             ";
            // line 314
            if (($context["discounts"] ?? null)) {
                // line 315
                echo "               <div class=\"discounts\">
                 ";
                // line 316
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 317
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 317);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 317);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 319
                echo "               </div>
             ";
            }
            // line 321
            echo "           </div>
            ";
            // line 322
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 322), "isPopup", [0 => "options"], "method", false, false, false, 322) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 322), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 322)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 322), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 322) == "price"))) {
                // line 323
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 325
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 325), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 325)) {
                    // line 326
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 326), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 326);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 328
                echo "                  ";
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 328), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 328)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 328), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 328) == "list"))) {
                    // line 329
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 329), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 329);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 331
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 331), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 331) && ($context["reward"] ?? null))) {
                    // line 332
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 332), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 332);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 334
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 334), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 334) && ($context["model"] ?? null))) {
                    // line 335
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 335), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 335);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 337
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 337), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 337) && ($context["product_weight"] ?? null))) {
                    // line 338
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 338), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 338);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 340
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 340), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 340) && ($context["product_dimension"] ?? null))) {
                    // line 341
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 341), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 341);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 343
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 343), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 343) && ($context["product_sku"] ?? null))) {
                    // line 344
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 344), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 344);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 346
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 346) && ($context["product_upc"] ?? null))) {
                    // line 347
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 347), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 347);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 349
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 349), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 349) && ($context["product_ean"] ?? null))) {
                    // line 350
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 350);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 352
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 352), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 352) && ($context["product_jan"] ?? null))) {
                    // line 353
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 353), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 353);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 355
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 355), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 355) && ($context["product_isbn"] ?? null))) {
                    // line 356
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 356), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 356);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 358
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 358), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 358) && ($context["product_mpn"] ?? null))) {
                    // line 359
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 359);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 361
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 361), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 361) && ($context["product_location"] ?? null))) {
                    // line 362
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 362), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 362);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 364
                echo "                </ul>
                ";
                // line 365
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 365), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 365)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 365), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 365) == "image"))) {
                    // line 366
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 367
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                      ";
                    // line 368
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 369
                        echo "                        <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 369), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 369);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 369), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 369);
                        echo "\"/>
                      ";
                    }
                    // line 371
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 375
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 375), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 375)) {
                    // line 376
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 377
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 377), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 377)) {
                        // line 378
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 378), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 378);
                        echo "</b></div>
                    ";
                    }
                    // line 380
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 380), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 380)) {
                        // line 381
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 381), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 381);
                        echo "</b></div>
                    ";
                    }
                    // line 383
                    echo "                  </div>
                ";
                }
                // line 385
                echo "              </div>
            ";
            }
            // line 387
            echo "          </div>
          ";
        }
        // line 389
        echo "
          ";
        // line 390
        if (($context["options"] ?? null)) {
            // line 391
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 392
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 394
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 394) == "select")) {
                    // line 395
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 395)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 395);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 395), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 395)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 396);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 396);
                    echo "</label>
              <select name=\"option[";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 398
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 399
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 399));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 400
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 400);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 400);
                        echo "
                ";
                        // line 401
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 401) && ($context["optionPrice"] ?? null))) {
                            // line 402
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 402);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 402);
                            echo ")
                ";
                        }
                        // line 403
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 405
                    echo "              </select>
            </div>
            ";
                }
                // line 408
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 408) == "radio")) {
                    // line 409
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 409)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 409);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 409), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 409)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 410
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 410);
                    echo "</label>
              <div id=\"input-option";
                    // line 411
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 411);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 411));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 412
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 414
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 414);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 414);
                        echo "\" />
                    ";
                        // line 415
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 415)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 415);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 415);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 415);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 415);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 415);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 415), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 415);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 415);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 415);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 415);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 416
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 417
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 417);
                        echo "
                      ";
                        // line 418
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 418) && ($context["optionPrice"] ?? null))) {
                            // line 419
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 420
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 420);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 420);
                            echo ")
                        </span>
                      ";
                        }
                        // line 423
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 426
                    echo " </div>
            </div>
            ";
                }
                // line 429
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 429) == "checkbox")) {
                    // line 430
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 430)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 430);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 430), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 430)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 431);
                    echo "</label>
              <div id=\"input-option";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 432);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 432));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 433
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 435
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 435);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 435);
                        echo "\" />
                    ";
                        // line 436
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 436)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 436), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 436);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 436), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 436);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 436);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 436);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 436) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 436);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 436);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 436), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 436);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 436);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 436) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 436);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 436);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 437
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 438
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 438);
                        echo "
                      ";
                        // line 439
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 439) && ($context["optionPrice"] ?? null))) {
                            // line 440
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 440);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 440);
                            echo ")</span>
                      ";
                        }
                        // line 442
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 445
                    echo " </div>
            </div>
            ";
                }
                // line 448
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 448) == "text")) {
                    // line 449
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 449)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 449);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 450
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 450);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 451
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 451);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 451);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 451);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 451);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 454
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 454) == "textarea")) {
                    // line 455
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 455)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 455);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 456
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 456);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 456);
                    echo "</label>
              <textarea name=\"option[";
                    // line 457
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 457);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 457);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 457);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 457);
                    echo "</textarea>
            </div>
            ";
                }
                // line 460
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 460) == "file")) {
                    // line 461
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 461)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 461);
                    echo "\">
              <label class=\"control-label\">";
                    // line 462
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 462);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 463
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 463);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 464
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 464);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 464);
                    echo "\" />
            </div>
            ";
                }
                // line 467
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 467) == "date")) {
                    // line 468
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 468)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 468);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 469
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 469);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 469);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 471
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 471);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 471);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 471);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 477
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 477) == "datetime")) {
                    // line 478
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 478)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 478);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 479
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 479);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 479);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 481
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 481);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 481);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 481);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 487
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 487) == "time")) {
                    // line 488
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 488)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 488);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 489
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 489);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 489);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 491
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 491);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 491);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 491);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 497
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "          </div>
          ";
        }
        // line 500
        echo "
          ";
        // line 501
        if (($context["recurrings"] ?? null)) {
            // line 502
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 505
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 506
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 507
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 507);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 507);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 513
        echo "
          ";
        // line 514
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 514), "get", [0 => "catalogCartStatus"], "method", false, false, false, 514) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 514), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 514)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 514), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 514)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 514), "isPopup", [], "method", false, false, false, 514)))) {
            // line 515
            echo "           ";
            if (((($context["stock_type"] ?? null) == "instock") || (($context["stock_type"] ?? null) == "preorder"))) {
                // line 516
                echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
                // line 519
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 519), "get", [0 => "catalogCartStatus"], "method", false, false, false, 519)) {
                    // line 520
                    echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                    // line 521
                    echo ($context["entry_qty"] ?? null);
                    echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                    // line 522
                    echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                    echo "\" data-minimum=\"";
                    echo ($context["minimum"] ?? null);
                    echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                    // line 523
                    echo ($context["product_id"] ?? null);
                    echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                    // line 529
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\" class=\"btn btn-cart\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 529), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 529) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 529), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 529))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 529), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 529);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
                ";
                }
                // line 531
                echo "                ";
                if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 531), "isPopup", [], "method", false, false, false, 531))) {
                    // line 532
                    echo "                  <div class=\"extra-group\">
                    ";
                    // line 533
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_extra_buttons"] ?? null));
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
                        // line 534
                        echo "                      <a class=\"btn btn-extra btn-extra-";
                        echo $context["id"];
                        echo " btn-";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 534);
                        echo "-extra\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 534), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 534)) . "ButtonDisplay")], "method", false, false, false, 534) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 534), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 534))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 534), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 534);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 534);
                            echo "\" ";
                        }
                        echo " ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 534) == "quickbuy")) {
                            echo "data-quick-buy";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 534) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 534), "href", [], "any", false, false, false, 534))) {
                            echo "href=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 534), "href", [], "any", false, false, false, 534);
                            echo "\" ";
                            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 534)], "method", false, false, false, 534);
                            echo " data-product_id=\"";
                            echo ($context["product_id"] ?? null);
                            echo "\"";
                        }
                        echo " data-loading-text=\"<span class='btn-text'>";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 534);
                        echo "</span>\"><span class=\"btn-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 534);
                        echo "</span></a>
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
                    // line 536
                    echo "                  </div>
                ";
                }
                // line 538
                echo "              </div>

              ";
                // line 540
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 540) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 540)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 540), "isPopup", [0 => "quickview"], "method", false, false, false, 540))) {
                    // line 541
                    echo "              <div class=\"wishlist-compare\">
                ";
                    // line 542
                    if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 542), "isPopup", [0 => "options"], "method", false, false, false, 542)) {
                        // line 543
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 543), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 543)) {
                            // line 544
                            echo "                  <a class=\"btn btn-wishlist\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 544) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 544))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 544);
                                echo "\" title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" ";
                            }
                            echo " onclick=\"parent.wishlist.add(";
                            echo ($context["product_id"] ?? null);
                            echo ");\"><span class=\"btn-text\">";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></a>
                  ";
                        }
                        // line 546
                        echo "
                  ";
                        // line 547
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 547), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 547)) {
                            // line 548
                            echo "                  <a class=\"btn btn-compare\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 548), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 548) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 548), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 548))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 548), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 548);
                                echo "\" title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" ";
                            }
                            echo " onclick=\"parent.compare.add(";
                            echo ($context["product_id"] ?? null);
                            echo ");\"><span class=\"btn-text\">";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></a>
                  ";
                        }
                        // line 550
                        echo "                ";
                    }
                    // line 551
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 551), "isPopup", [0 => "quickview"], "method", false, false, false, 551)) {
                        // line 552
                        echo "                  <a class=\"btn btn-more-details\" href=\"";
                        echo ($context["view_more_url"] ?? null);
                        echo "\" target=\"_top\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 552) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 552))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 552);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => "quickviewExtraText"], "method", false, false, false, 552);
                            echo "\" ";
                        }
                        echo "><span class=\"btn-text\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 552), "get", [0 => "quickviewExtraText"], "method", false, false, false, 552);
                        echo "</span></a>
                ";
                    }
                    // line 554
                    echo "              </div>
              ";
                }
                // line 556
                echo "            </div>
          </div>
          
          ";
            } else {
                // line 560
                echo "                    <!-- Hide Price & Show Stock Status -->
            <p class=\"stock-status\" style=\"color: #fff; font-weight: bold; background-color:#DF146D; text-align:center; padding:7px 10px; border-radius:3px; width:200px\"><span>";
                // line 561
                echo ($context["stock_status"] ?? null);
                echo "</span></p>
           ";
            }
            // line 563
            echo "
          ";
        }
        // line 565
        echo "
          ";
        // line 566
        if ((($context["minimum"] ?? null) > 1)) {
            // line 567
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 569
        echo "
          ";
        // line 570
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 570), "isPopup", [0 => "options"], "method", false, false, false, 570)) {
            // line 571
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 571)) {
                // line 572
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 572));
                echo "
            ";
            }
            // line 574
            echo "          ";
        }
        // line 575
        echo "          </div>
          ";
        // line 576
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 576), "isPopup", [0 => "options"], "method", false, false, false, 576)) {
            // line 577
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 577)) {
                // line 578
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 579
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 579));
                echo "
          </div>
          ";
            }
            // line 582
            echo "          ";
        }
        // line 583
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 583), "isPopup", [], "method", false, false, false, 583)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 583), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 583) == "details"))) {
            // line 584
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 585
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 586
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 587
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 587);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 587);
                echo "</a>
                ";
                // line 588
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 588)) {
                    echo "<b>,</b>";
                }
                // line 589
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 590
            echo "            </div>
          ";
        }
        // line 592
        echo "        </div>
      </div>
      ";
        // line 594
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 594), "isPopup", [0 => "quickview"], "method", false, false, false, 594)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 594), "get", [0 => "quickviewDescription"], "method", false, false, false, 594)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 594), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 594) == "default"))) {
            // line 595
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 598
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 600
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 600), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 600)) {
                // line 601
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 603
            echo "          </div>
        </div>
      ";
        }
        // line 606
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 606), "isPopup", [0 => "options"], "method", false, false, false, 606)) {
            // line 607
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 607)) {
                // line 608
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 609
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 609));
                echo "
        </div>
        ";
            }
            // line 612
            echo "      ";
        }
        // line 613
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 613), "isPopup", [], "method", false, false, false, 613)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 613), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 613) == "default"))) {
            // line 614
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 615
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 616
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 617
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 617);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 617);
                echo "</a>
            ";
                // line 618
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 618)) {
                    echo "<b>,</b>";
                }
                // line 619
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 620
            echo "        </div>
      ";
        }
        // line 622
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 622), "isPopup", [], "method", false, false, false, 622)) {
            // line 623
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 624
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 627
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items,.cart-badge').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items,.cart-badge').removeClass('count-zero');
        } else {
          parent.\$('#cart-items,.cart-badge').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }

        if (json['redirect']) {
          parent.location.href = json['redirect'];
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 746
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 751
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 757
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 825
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 829
        echo ($context["product_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$review.closest('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 884
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 884), "isPopup", [], "method", false, false, false, 884)) {
            // line 885
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 885);
            echo "
";
        }
        // line 887
        echo "
";
        // line 888
        if (($context["module_qa_status"] ?? null)) {
            // line 889
            echo "<script type=\"text/javascript\"><!--
\$(\"body\").on(\"click\",\"#qa-ask\",function(a){a.preventDefault(),\$(\"a[href='#tab-qa']\").trigger(\"click\"),\$(\"html,body\").animate({scrollTop:\$(\"#qa-title\").offset().top},1300)}).on(\"click\",\"#qa .pagination a\",function(){var a=this.href;return \$(\"#qa\").slideUp(\"slow\",function(){\$(\"#qa\").load(a,function(){\$(\"#qa\").slideDown(\"slow\")})}),!1});";
            // line 890
            if ((($context["preload"] ?? null) != 1)) {
                echo "\$('#qa').load('index.php?route=extension/module/qa/question&product_id=";
                echo ($context["product_id"] ?? null);
                echo "');";
            }
            echo "\$(\"#button-qa\").on(\"click\",function(){\$.ajax({type:\"POST\",url:\"index.php?route=extension/module/qa/ask&product_id=";
            echo ($context["product_id"] ?? null);
            echo "\",dataType:\"json\",data:\$(\"#q-form :input\").serialize(),beforeSend:function(){\$(\"#button-qa\").button(\"loading\")},complete:function(){\$(\"#button-qa\").button(\"reset\")},success:function(a){\$(\".alert-success, .alert-danger\").remove(),a.error&&\$(\"#qa-title\").before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> '+a.error+\"</div>\"),a.success&&(\$(\"#qa-title\").before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+a.success+\"</div>\"),\$(\"textarea[name='q_question']\").val(\"\"))},error:function(a){\$(\"#qa-title\").before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> '+a.statusText+\"</div>\")}})});

//--></script>
";
        }
        // line 894
        echo "\t\t\t
";
        // line 895
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2551 => 895,  2548 => 894,  2535 => 890,  2532 => 889,  2530 => 888,  2527 => 887,  2522 => 885,  2520 => 884,  2462 => 829,  2455 => 825,  2384 => 757,  2375 => 751,  2367 => 746,  2246 => 627,  2240 => 624,  2235 => 623,  2232 => 622,  2228 => 620,  2214 => 619,  2210 => 618,  2203 => 617,  2186 => 616,  2182 => 615,  2179 => 614,  2176 => 613,  2173 => 612,  2167 => 609,  2164 => 608,  2161 => 607,  2158 => 606,  2153 => 603,  2149 => 601,  2147 => 600,  2142 => 598,  2135 => 595,  2133 => 594,  2129 => 592,  2125 => 590,  2111 => 589,  2107 => 588,  2100 => 587,  2083 => 586,  2079 => 585,  2076 => 584,  2073 => 583,  2070 => 582,  2064 => 579,  2061 => 578,  2058 => 577,  2056 => 576,  2053 => 575,  2050 => 574,  2044 => 572,  2041 => 571,  2039 => 570,  2036 => 569,  2030 => 567,  2028 => 566,  2025 => 565,  2021 => 563,  2016 => 561,  2013 => 560,  2007 => 556,  2003 => 554,  1987 => 552,  1984 => 551,  1981 => 550,  1965 => 548,  1963 => 547,  1960 => 546,  1944 => 544,  1941 => 543,  1939 => 542,  1936 => 541,  1934 => 540,  1930 => 538,  1926 => 536,  1881 => 534,  1864 => 533,  1861 => 532,  1858 => 531,  1843 => 529,  1834 => 523,  1828 => 522,  1824 => 521,  1821 => 520,  1819 => 519,  1814 => 516,  1811 => 515,  1809 => 514,  1806 => 513,  1800 => 509,  1789 => 507,  1785 => 506,  1781 => 505,  1774 => 502,  1772 => 501,  1769 => 500,  1765 => 498,  1759 => 497,  1746 => 491,  1739 => 489,  1730 => 488,  1727 => 487,  1714 => 481,  1707 => 479,  1698 => 478,  1695 => 477,  1682 => 471,  1675 => 469,  1666 => 468,  1663 => 467,  1655 => 464,  1647 => 463,  1643 => 462,  1634 => 461,  1631 => 460,  1619 => 457,  1613 => 456,  1604 => 455,  1601 => 454,  1589 => 451,  1583 => 450,  1574 => 449,  1571 => 448,  1566 => 445,  1557 => 442,  1550 => 440,  1548 => 439,  1544 => 438,  1541 => 437,  1510 => 436,  1504 => 435,  1500 => 433,  1494 => 432,  1490 => 431,  1477 => 430,  1474 => 429,  1469 => 426,  1460 => 423,  1453 => 420,  1450 => 419,  1448 => 418,  1444 => 417,  1441 => 416,  1410 => 415,  1404 => 414,  1400 => 412,  1394 => 411,  1390 => 410,  1377 => 409,  1374 => 408,  1369 => 405,  1362 => 403,  1355 => 402,  1353 => 401,  1346 => 400,  1342 => 399,  1338 => 398,  1332 => 397,  1326 => 396,  1313 => 395,  1310 => 394,  1306 => 393,  1302 => 392,  1299 => 391,  1297 => 390,  1294 => 389,  1290 => 387,  1286 => 385,  1282 => 383,  1276 => 381,  1273 => 380,  1267 => 378,  1265 => 377,  1262 => 376,  1259 => 375,  1251 => 371,  1231 => 369,  1229 => 368,  1225 => 367,  1222 => 366,  1220 => 365,  1217 => 364,  1209 => 362,  1206 => 361,  1198 => 359,  1195 => 358,  1187 => 356,  1184 => 355,  1176 => 353,  1173 => 352,  1165 => 350,  1162 => 349,  1154 => 347,  1151 => 346,  1143 => 344,  1140 => 343,  1128 => 341,  1125 => 340,  1117 => 338,  1114 => 337,  1106 => 335,  1103 => 334,  1095 => 332,  1092 => 331,  1082 => 329,  1079 => 328,  1065 => 326,  1063 => 325,  1059 => 323,  1057 => 322,  1054 => 321,  1050 => 319,  1039 => 317,  1035 => 316,  1032 => 315,  1030 => 314,  1027 => 313,  1019 => 311,  1016 => 310,  1008 => 308,  1006 => 307,  1003 => 306,  998 => 304,  993 => 303,  987 => 301,  985 => 300,  980 => 297,  978 => 296,  975 => 295,  968 => 291,  964 => 290,  960 => 289,  956 => 288,  951 => 287,  945 => 285,  943 => 284,  940 => 283,  938 => 282,  935 => 281,  928 => 277,  924 => 276,  920 => 275,  916 => 273,  910 => 272,  903 => 267,  898 => 264,  895 => 263,  891 => 262,  887 => 260,  885 => 259,  882 => 258,  878 => 256,  874 => 254,  868 => 252,  865 => 251,  859 => 249,  857 => 248,  854 => 247,  851 => 246,  843 => 242,  823 => 240,  821 => 239,  817 => 238,  814 => 237,  812 => 236,  809 => 235,  801 => 233,  798 => 232,  790 => 230,  787 => 229,  779 => 227,  776 => 226,  768 => 224,  765 => 223,  757 => 221,  754 => 220,  746 => 218,  743 => 217,  735 => 215,  732 => 214,  720 => 212,  717 => 211,  709 => 209,  706 => 208,  698 => 206,  695 => 205,  687 => 203,  684 => 202,  674 => 200,  671 => 199,  657 => 197,  655 => 196,  651 => 194,  649 => 193,  646 => 192,  641 => 189,  637 => 187,  635 => 186,  630 => 184,  623 => 181,  621 => 180,  618 => 179,  615 => 178,  609 => 175,  606 => 174,  604 => 173,  593 => 165,  583 => 160,  573 => 155,  565 => 150,  556 => 145,  554 => 144,  550 => 142,  546 => 140,  542 => 138,  528 => 137,  524 => 136,  517 => 135,  500 => 134,  496 => 133,  493 => 132,  490 => 131,  485 => 128,  481 => 126,  479 => 125,  474 => 123,  467 => 120,  464 => 119,  461 => 118,  455 => 115,  452 => 114,  449 => 113,  446 => 112,  438 => 110,  436 => 109,  433 => 108,  430 => 107,  426 => 105,  401 => 102,  396 => 101,  379 => 100,  376 => 99,  365 => 90,  328 => 87,  323 => 86,  306 => 85,  299 => 83,  288 => 82,  285 => 81,  283 => 80,  280 => 79,  276 => 77,  263 => 75,  259 => 74,  256 => 73,  254 => 72,  243 => 63,  204 => 60,  195 => 59,  192 => 58,  174 => 57,  172 => 56,  165 => 54,  155 => 53,  149 => 52,  146 => 51,  144 => 50,  139 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  133 => 44,  131 => 43,  128 => 42,  122 => 40,  119 => 39,  117 => 38,  112 => 37,  107 => 35,  103 => 34,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  76 => 26,  72 => 25,  69 => 24,  67 => 23,  63 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
