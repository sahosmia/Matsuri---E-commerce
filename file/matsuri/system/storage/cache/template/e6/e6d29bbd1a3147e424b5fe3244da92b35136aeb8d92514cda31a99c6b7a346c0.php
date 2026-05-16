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

/* journal3/template/account/login.twig */
class __TwigTemplate_190bd830baa73171b1aa14d8077a28002d4e4991e8fbdc13be91ed2bef30aa50 extends \Twig\Template
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
";
        // line 2
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 2), "isPopup", [], "method", false, false, false, 2)) {
            // line 3
            echo "<ul class=\"breadcrumb\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</ul>
";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 8), "get", [0 => "pageTitlePosition"], "method", false, false, false, 8) == "top")) {
                // line 9
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 11);
            echo "
<div id=\"account-login\" class=\"container\">
  ";
            // line 13
            if (($context["success"] ?? null)) {
                // line 14
                echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
                echo ($context["success"] ?? null);
                echo "</div>
  ";
            }
            // line 16
            echo "  ";
            if (($context["error_warning"] ?? null)) {
                // line 17
                echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "</div>
  ";
            }
            // line 19
            echo "  <div class=\"row\">";
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 20
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 21
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 22
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 23
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 24
                echo "    ";
            } else {
                // line 25
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 26
                echo "    ";
            }
            // line 27
            echo "    
    <style>
    
     
        .layout-6 #content {
            background: white;
            width: 430px;
            margin: 20px 400px 20px 400px;
        }
        
        .login-box
.title {
    font-size: 22px;
    color: rgba(8, 22, 33, 1);
    text-transform: capitalize;
}
        
    @media (max-width: 470px) {
        .layout-6 #content {
    background: white;
    width: 450px;
    margin: 20px 5px;
    
}
.route-account-register input.form-control {
    
    width: 340px;
}

    }  
    
    @media (max-width: 820px) {
        .layout-6 #content {
    background: white;
    width: 400px;
    margin: 140px 200px;
    
}
.route-account-register input.form-control {
    
    width: 340px;
}

    }
    
    
    </style>
    
    
    <div id=\"content\" class=\"";
            // line 76
            echo ($context["class"] ?? null);
            echo "\" style=\"box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 10px;\">
      ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 77), "get", [0 => "pageTitlePosition"], "method", false, false, false, 77) == "default")) {
                // line 78
                echo "        <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
      ";
            }
            // line 80
            echo "      ";
            echo ($context["content_top"] ?? null);
            echo "
      <div class=\"row login-box\">
        ";
            // line 83
            echo "        ";
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            // line 86
            echo "        ";
            // line 87
            echo "        ";
            // line 88
            echo "        ";
            // line 89
            echo "        ";
            // line 90
            echo "        ";
            // line 91
            echo "        ";
            // line 92
            echo "        ";
            // line 93
            echo "        ";
            // line 94
            echo "        
        <style>
            .forgot-password {
                margin-top: 0px;
                padding-top: 0px;
                margin-bottom: -20px;
                display: flex;
            }
            .login-button{
                background:#01AEED !important;
                font-size: 20px;
            }
            .login-button:hover{
                background:#2BB4B6 !important;
            }
            .login-font{
                color:#F47E2D !important;
                text-decoration:none;
            }
            .login-font:hover{
                color:#1A4B3B !important;
                
            }
        </style>
        
        
        <div class=\"col-sm-6\">
          <div class=\"well\">
";
        }
        // line 123
        echo "            ";
        // line 124
        echo "            <h2 class=\"title\">Enter Your Login Info</h2>
            <p><strong>";
        // line 125
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 126
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal login-form\">
              ";
        // line 128
        echo "              ";
        // line 129
        echo "              ";
        // line 130
        echo "              ";
        // line 131
        echo "              
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-telephone\">";
        // line 133
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"telephone\" value=\"";
        // line 134
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              </div>

              ";
        // line 138
        echo "              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 139
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 140
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <div class=\"forgot-password\"><a href=\"";
        // line 141
        echo ($context["forgotten"] ?? null);
        echo "\" target=\"_top\" class=\"login-font\" >";
        echo ($context["text_forgotten"] ?? null);
        echo " </a> <span style=\"padding:0px 10px;\"> | </span> <a href=\"";
        echo ($context["register"] ?? null);
        echo "\" class=\"login-font\"> Registration</a></div>
                </div>
                
                <div class=\"pull-left\">
                  <button style=\"width: 100%; background: #3564AD !important; font-size:15px;\" type=\"submit\" class=\"btn btn-primary login-button\" data-loading-text=\"<span>";
        // line 145
        echo ($context["button_login"] ?? null);
        echo "</span>\"><span>";
        echo ($context["button_login"] ?? null);
        echo "</span></button>
                </div>
              
            ";
        // line 149
        echo "    
            ";
        // line 151
        echo "            
            ";
        // line 153
        echo "            ";
        // line 154
        echo "            ";
        // line 155
        echo "            ";
        // line 156
        echo "            ";
        // line 157
        echo "            ";
        // line 158
        echo "    
            ";
        // line 160
        echo "            
            ";
        // line 162
        echo "              
            ";
        // line 164
        echo "            ";
        // line 165
        echo "            ";
        // line 166
        echo "            ";
        // line 167
        echo "            ";
        // line 168
        echo "              
              ";
        // line 169
        if (($context["redirect"] ?? null)) {
            // line 170
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 172
        echo "            </form>
";
        // line 173
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 173), "isPopup", [], "method", false, false, false, 173)) {
            // line 174
            echo "          </div>
        </div>
      </div>
      ";
            // line 177
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 178
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 181
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 181,  366 => 178,  362 => 177,  357 => 174,  355 => 173,  352 => 172,  346 => 170,  344 => 169,  341 => 168,  339 => 167,  337 => 166,  335 => 165,  333 => 164,  330 => 162,  327 => 160,  324 => 158,  322 => 157,  320 => 156,  318 => 155,  316 => 154,  314 => 153,  311 => 151,  308 => 149,  300 => 145,  289 => 141,  283 => 140,  279 => 139,  276 => 138,  268 => 134,  264 => 133,  260 => 131,  258 => 130,  256 => 129,  254 => 128,  250 => 126,  246 => 125,  243 => 124,  241 => 123,  210 => 94,  208 => 93,  206 => 92,  204 => 91,  202 => 90,  200 => 89,  198 => 88,  196 => 87,  194 => 86,  192 => 85,  190 => 84,  188 => 83,  182 => 80,  176 => 78,  174 => 77,  170 => 76,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  99 => 20,  94 => 19,  88 => 17,  85 => 16,  79 => 14,  77 => 13,  72 => 11,  66 => 9,  64 => 8,  61 => 7,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/login.twig", "");
    }
}
