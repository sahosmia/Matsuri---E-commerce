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

/* common/dashboard.twig */
class __TwigTemplate_788a8ed6fa699b1637702e0b22d4caf859eee1e814a5411374ffd6ee949e91d4 extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-developer\" title=\"";
        // line 6
        echo ($context["button_developer"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
      </div>
      <div class=\"pull-right\" onclick=\"modiRef()\" style=\"margin-right: 5px;\">
        <a href=\"";
        // line 9
        echo ($context["modi_refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_modi_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\">
        <i class=\"fa fa-superpowers\"></i></a>
        </div>
\t\t<div class=\"pull-right\" style=\"margin-right: 2px;\">
\t\t<button type=\"button\" style=\"margin-right: 2px;\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_page_refresh"] ?? null);
        echo "\"
         onclick=\"window.location.reload(true)\" class=\"btn btn-success\">
\t\t<i class=\"fa fa-refresh\"></i></button>
\t  </div>
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"pull-right btn\" style=\"margin-right:3px;background-color:#575fcf;\">
\t\t<div style=\"color:#ffffff;\"><i class=\"fa fa-clock-o\"></i> <span id=\"currentoctime\" class=\"clock\" onload=\"showTime()\"></span></div>
        </div>
        <script>
    \t\tfunction showTime(){var date = new Date();var h = date.getHours();var m = date.getMinutes();var s = date.getSeconds();
        \th = (h < 10) ? \"0\" + h : h;m = (m < 10) ? \"0\" + m : m;s = (s < 10) ? \"0\" + s : s;var time = h + \":\" + m + \":\" + s;
        \tdocument.getElementById(\"currentoctime\").innerText = time;document.getElementById(\"currentoctime\").textContent = time;
        \tsetTimeout(showTime, 1000);}showTime();
\t\t</script>
      <ul class=\"breadcrumb\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 29
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </ul>
    </div>
  </div>
  ";
        // line 34
        if ((array_key_exists("success", $context) && ($context["success"] ?? null))) {
            // line 35
            echo "    <script>
        setTimeout(function(modiRef){
        Swal.fire(
        'Good job!',
        'All modifications have been refreshed!',
        'success'
        )}, 1300);
    </script>
    ";
        }
        // line 44
        echo "  <div class=\"container-fluid\">";
        if (($context["error_install"] ?? null)) {
            // line 45
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <button type=\"button\" class=\"close pull-right\" data-dismiss=\"alert\">&times;</button>
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 47
            echo ($context["error_install"] ?? null);
            echo "</div>
    ";
        }
        // line 49
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 50
            echo "    <div class=\"row\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 51
                echo "      ";
                $context["class"] = sprintf("col-lg-%s %s", twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 51), "col-md-3 col-sm-6");
                // line 52
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 53
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 53) > 3)) {
                        // line 54
                        echo "      ";
                        $context["class"] = sprintf("col-lg-%s %s", twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 54), "col-md-12 col-sm-12");
                        // line 55
                        echo "      ";
                    }
                    // line 56
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "      <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 57);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>
    ";
        // line 60
        echo ($context["security"] ?? null);
        echo "
  <script type=\"text/javascript\"><!--
\$('#button-developer').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer&user_token=";
        // line 64
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-developer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-developer').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#modal-developer').remove();
\t\t\t
\t\t\t\$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-developer').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
});\t
//--></script> 
</div>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t// Login to the API
\t\t\t\t\$(document).ready(function(){
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=common/hp_validate/storeauth&user_token=";
        // line 91
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcrossDomain: true,
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.alert').remove();
\t\t\t\t\t\t\tif (json['error'] && json['error']['domain'] != 'undefined') {
\t\t\t\t\t\t\t\tjson['error']['domain'].forEach(function(item, index) {
\t\t\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + item + ' <a href=\"'+ json['link'][index] +'\" id=\"button-validate-store\" data-loading-text=\"";
        // line 99
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i> '+ json['button_validate_store'] +'</a></div>');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t\t//--></script>
";
        // line 109
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "common/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 109,  231 => 99,  220 => 91,  190 => 64,  183 => 60,  180 => 59,  173 => 58,  162 => 57,  156 => 56,  153 => 55,  150 => 54,  147 => 53,  142 => 52,  139 => 51,  134 => 50,  129 => 49,  124 => 47,  120 => 45,  117 => 44,  106 => 35,  104 => 34,  99 => 31,  88 => 29,  84 => 28,  70 => 17,  63 => 13,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/dashboard.twig", "");
    }
}
