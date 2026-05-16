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

/* default/template/extension/module/hp_chat_button_wa.twig */
class __TwigTemplate_5b4a3b78188294eb120f7a1c208772258800438bc6243d6d39f36fd01c1aad83 extends \Twig\Template
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
        if (($context["whatsapp"] ?? null)) {
            // line 2
            echo "
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/hpcb.css\">

\t";
            // line 5
            if (($context["rtl_status"] ?? null)) {
                // line 6
                echo "\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/hpcb-rtl.css\">
\t";
            }
            // line 8
            echo "
\t<div class=\"wa__btn_popup\">
\t\t<div class=\"wa__btn_popup_txt\"
\t\t     ";
            // line 11
            if (($context["hide_prechattext"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo ($context["call_to_action"] ?? null);
            echo "</div>
\t\t<div class=\"wa__btn_popup_icon relative\">
\t\t \t<div class=\"span\"></div>
 \t\t\t <div class=\"span\"></div>
\t\t</div>
\t</div>
\t<div class=\"wa__popup_chat_box wa__pending wa__lauch\">
\t\t<div class=\"wa__popup_heading\">
\t\t\t<div class=\"wa__popup_title\">";
            // line 19
            echo ($context["heading_title"] ?? null);
            echo "</div>
\t\t\t<div class=\"wa__popup_intro\"> ";
            // line 20
            echo ($context["description"] ?? null);
            echo "
\t\t\t\t<div id=\"\\&quot;eJOY__extension_root\\&quot;\"></div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.wa__popup_heading -->
\t\t<div class=\"wa__popup_content wa__popup_content_left\">
\t\t\t<div class=\"wa__popup_notice\">";
            // line 26
            echo ($context["chat_reply"] ?? null);
            echo "</div>
\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["whatsapp"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["wa"]) {
                // line 28
                echo "\t\t\t\t<div class=\"wa__popup_content_list\">
\t\t\t\t\t<div class=\"wa__popup_content_item \">
\t\t\t\t\t\t";
                // line 30
                if (($context["is_mobile"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t";
                    // line 32
                    if ((twig_get_attribute($this->env, $this->source, $context["wa"], "link_type", [], "any", false, false, false, 32) == 1)) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["mobile_compatibility"] ?? null)) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\thref=\"https://wa.me/";
                            echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_country", [], "any", false, false, false, 34);
                            echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_number", [], "any", false, false, false, 34);
                            echo "?text=";
                            echo ($context["text"] ?? null);
                            echo "\" %}
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 36
                            echo "\t\t\t\t\t\t\t\t\thref=\"whatsapp://send?phone=";
                            echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_country", [], "any", false, false, false, 36);
                            echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_number", [], "any", false, false, false, 36);
                            echo "&text=";
                            echo ($context["text"] ?? null);
                            echo "\"
\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\thref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["wa"], "custom_link", [], "any", false, false, false, 39);
                        echo "\"
\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "                           class=\"wa__stt wa__stt_online\">
\t\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "
\t\t\t\t\t\t\t<a target=\"_blank\"
\t\t\t\t\t\t\t\t";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->source, $context["wa"], "link_type", [], "any", false, false, false, 45) == 1)) {
                        // line 46
                        echo "\t\t\t\t\t\t\t    href=\"https://wa.me/";
                        echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_country", [], "any", false, false, false, 46);
                        echo twig_get_attribute($this->env, $this->source, $context["wa"], "wa_number", [], "any", false, false, false, 46);
                        echo "?text=";
                        echo ($context["text"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t    ";
                    } else {
                        // line 48
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["wa"], "custom_link", [], "any", false, false, false, 48);
                        echo "\"
\t\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t   class=\"wa__stt wa__stt_online\">
\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp wa__button__stt\"></i>
\t\t\t\t\t\t\t\t<div class=\"wa__popup_avatar\">
\t\t\t\t\t\t\t\t\t<div class=\"wa__cs_img_wrap\"><img src=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["wa"], "picture_wa", [], "any", false, false, false, 54);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["wa"], "position", [], "any", false, false, false, 54);
                echo "-img\" center center no-repeat
\t\t\t\t\t\t\t\t\t                                  style=\"background-size: cover;\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"wa__popup_txt\">
\t\t\t\t\t\t\t\t\t<div class=\"wa__member_name\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["wa"], "name", [], "any", false, false, false, 59);
                echo "</div>
\t\t\t\t\t\t\t\t\t<!-- /.wa__member_name -->
\t\t\t\t\t\t\t\t\t<div class=\"wa__member_duty\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["wa"], "position", [], "any", false, false, false, 61);
                echo "</div>
\t\t\t\t\t\t\t\t\t<!-- /.wa__member_duty -->
\t\t\t\t\t\t\t\t\t";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["wa"], "online_status", [], "any", false, false, false, 63) == 1)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"wa__member_status_online\">
\t\t\t\t\t\t\t\t\t\t\t<font>";
                    // line 65
                    echo ($context["text_online"] ?? null);
                    echo "</font>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 67
$context["wa"], "online_status", [], "any", false, false, false, 67) == 2)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"wa__member_status_away\">
\t\t\t\t\t\t\t\t\t\t\t<font>";
                    // line 69
                    echo ($context["text_away"] ?? null);
                    echo "</font>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"wa__member_status_offline\">
\t\t\t\t\t\t\t\t\t\t\t<font>";
                    // line 73
                    echo ($context["text_offline"] ?? null);
                    echo "</font>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.wa__popup_txt -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
\t\t\t<!-- /.wa__popup_content_list -->
\t\t</div>
\t\t<!-- /.wa__popup_content -->
\t</div>


\t<!-- partial -->
\t<script src=\"catalog/view/javascript/lc_main.min.js\" type=\"text/javascript\">
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/hp_chat_button_wa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 84,  215 => 76,  209 => 73,  206 => 72,  200 => 69,  197 => 68,  195 => 67,  190 => 65,  187 => 64,  185 => 63,  180 => 61,  175 => 59,  165 => 54,  161 => 52,  157 => 50,  151 => 48,  142 => 46,  140 => 45,  136 => 43,  132 => 41,  126 => 39,  123 => 38,  114 => 36,  105 => 34,  102 => 33,  100 => 32,  97 => 31,  95 => 30,  91 => 28,  87 => 27,  83 => 26,  74 => 20,  70 => 19,  55 => 11,  50 => 8,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/hp_chat_button_wa.twig", "");
    }
}
