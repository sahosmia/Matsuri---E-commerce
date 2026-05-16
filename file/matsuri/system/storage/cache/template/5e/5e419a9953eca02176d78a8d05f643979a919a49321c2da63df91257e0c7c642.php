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

/* extension/shipping/pathao.twig */
class __TwigTemplate_532c3408345fc5dfb43c189ea0a08ee09608530082b34daf103c7ae5fabab488 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-shipping-pathao\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping-pathao\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant-username\">";
        // line 30
        echo ($context["entry_merchant_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_pathao_merchant_username\" value=\"";
        // line 32
        echo ($context["shipping_pathao_merchant_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_username"] ?? null);
        echo "\" id=\"input-merchant-username\" class=\"form-control\" />
              <small class=\"text-muted\">";
        // line 33
        echo ($context["help_merchant_username"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant-password\">";
        // line 37
        echo ($context["entry_merchant_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"shipping_pathao_merchant_password\" value=\"";
        // line 39
        echo ($context["shipping_pathao_merchant_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_password"] ?? null);
        echo "\" id=\"input-merchant-password\" class=\"form-control\" autocomplete=\"off\" />
              <small class=\"text-muted\">";
        // line 40
        echo ($context["help_merchant_password"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-client-id\">";
        // line 44
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_pathao_client_id\" value=\"";
        // line 46
        echo ($context["shipping_pathao_client_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_client_id"] ?? null);
        echo "\" id=\"input-client-id\" class=\"form-control\" />
              <small class=\"text-muted\">";
        // line 47
        echo ($context["help_client_id"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-client-secret\">";
        // line 51
        echo ($context["entry_client_secret"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"shipping_pathao_client_secret\" value=\"";
        // line 53
        echo ($context["shipping_pathao_client_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_client_secret"] ?? null);
        echo "\" id=\"input-client-secret\" class=\"form-control\" autocomplete=\"off\" />
              <small class=\"text-muted\">";
        // line 54
        echo ($context["help_client_secret"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-environment\">";
        // line 58
        echo ($context["entry_environment"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_pathao_sandbox\" id=\"input-environment\" class=\"form-control\">
                <option value=\"1\" ";
        // line 61
        if (($context["shipping_pathao_sandbox"] ?? null)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_environment_sandbox"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 62
        if ( !($context["shipping_pathao_sandbox"] ?? null)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_environment_live"] ?? null);
        echo "</option>
              </select>
              <small class=\"text-muted\">";
        // line 64
        echo ($context["help_environment"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-webhook-url\">";
        // line 68
        echo ($context["entry_webhook_url"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" id=\"input-webhook-url\" class=\"form-control\" value=\"";
        // line 70
        echo ($context["shipping_pathao_webhook_url"] ?? null);
        echo "\" readonly />
              <small class=\"text-muted\">";
        // line 71
        echo ($context["help_webhook_url"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-webhook-secret\">";
        // line 75
        echo ($context["entry_webhook_secret"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" id=\"input-webhook-secret\" class=\"form-control\" value=\"";
        // line 77
        echo ($context["shipping_pathao_webhook_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_save_to_generate"] ?? null);
        echo "\" readonly />
              <small class=\"text-muted\">";
        // line 78
        echo ($context["help_webhook_secret"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 82
        echo ($context["entry_stores_saved"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"pathao-test-alert\" class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> <span id=\"pathao-test-alert-msg\"></span></div>
              <button type=\"button\" id=\"btn-test-pathao\" class=\"btn btn-info\"><i class=\"fa fa-plug\"></i> ";
        // line 85
        echo ($context["button_test_connection"] ?? null);
        echo "</button>
              <span id=\"pathao-test-status\" class=\"text-muted\" style=\"margin-left:10px;\"></span>
              <div id=\"pathao-stores-list\" class=\"form-control\" style=\"margin-top:8px; min-height:60px; max-height:120px; overflow-y:auto;\">
                ";
        // line 88
        if ( !twig_test_empty(($context["pathao_stores"] ?? null))) {
            // line 89
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pathao_stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 90
                echo "                  <div><strong>";
                echo (((twig_get_attribute($this->env, $this->source, $context["store"], "store_name", [], "any", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, $context["store"], "store_name", [], "any", false, false, false, 90)))) ? (twig_get_attribute($this->env, $this->source, $context["store"], "store_name", [], "any", false, false, false, 90)) : (twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 90)));
                echo "</strong> (ID: ";
                echo (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 90)))) ? (twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 90)) : (twig_get_attribute($this->env, $this->source, $context["store"], "id", [], "any", false, false, false, 90)));
                echo ")";
                if (((((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", true, true, false, 90) &&  !(null === twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 90)))) ? (twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 90)) : (twig_get_attribute($this->env, $this->source, $context["store"], "id", [], "any", false, false, false, 90))) == ($context["pathao_default_store_id"] ?? null))) {
                    echo " <span class=\"label label-success\">";
                    echo ($context["text_default"] ?? null);
                    echo "</span>";
                }
                echo "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                ";
        } else {
            // line 93
            echo "                  <span class=\"text-muted\">";
            echo ($context["text_no_stores_run_test"] ?? null);
            echo "</span>
                ";
        }
        // line 95
        echo "              </div>
              <small class=\"text-muted\">";
        // line 96
        echo ($context["help_stores_saved"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-pickup-address\">";
        // line 100
        echo ($context["entry_pickup_address"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"shipping_pathao_pickup_address\" rows=\"3\" placeholder=\"";
        // line 102
        echo ($context["entry_pickup_address"] ?? null);
        echo "\" id=\"input-pickup-address\" class=\"form-control\">";
        echo ($context["shipping_pathao_pickup_address"] ?? null);
        echo "</textarea>
              <small class=\"text-muted\">";
        // line 103
        echo ($context["help_pickup_address"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 107
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_pathao_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 110
        if (($context["shipping_pathao_status"] ?? null)) {
            // line 111
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 114
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 117
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 121
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"shipping_pathao_sort_order\" value=\"";
        // line 123
        echo ($context["shipping_pathao_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" min=\"0\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#btn-test-pathao').on('click', function() {
  var \$btn = \$(this);
  var \$status = \$('#pathao-test-status');
  var \$alert = \$('#pathao-test-alert');
  var \$list = \$('#pathao-stores-list');

  \$btn.prop('disabled', true);
  \$alert.hide();
  \$status.removeClass('text-danger text-success').addClass('text-muted').html('<i class=\"fa fa-spinner fa-spin\"></i> ";
        // line 140
        echo ($context["text_testing"] ?? null);
        echo "');

  \$.ajax({
    url: '";
        // line 143
        echo ($context["test_connection_url"] ?? null);
        echo "',
    type: 'post',
    data: \$('#form-shipping-pathao').serialize(),
    dataType: 'json',
    success: function(json) {
      \$btn.prop('disabled', false);
      if (json.success) {
        \$status.removeClass('text-muted text-danger').addClass('text-success').html('<i class=\"fa fa-check\"></i> ' + json.message);
        \$alert.removeClass('alert-danger').addClass('alert-success').show();
        \$('#pathao-test-alert-msg').text(json.message || '";
        // line 152
        echo ($context["text_connection_success"] ?? null);
        echo "');

        var html = '';
        if (json.stores && json.stores.length) {
          for (var i = 0; i < json.stores.length; i++) {
            var s = json.stores[i];
            var id = (s.id || s.store_id);
            var name = (s.name || s.store_name || '');
            html += '<div><strong>' + name + '</strong> (ID: ' + id + ')';
            if (id == json.default_store_id) html += ' <span class=\"label label-success\">";
        // line 161
        echo ($context["text_default"] ?? null);
        echo "</span>';
            html += '</div>';
          }
        } else {
          html = '<span class=\"text-muted\">";
        // line 165
        echo ($context["text_no_stores_run_test"] ?? null);
        echo "</span>';
        }
        \$list.html(html);
      } else {
        \$alert.removeClass('alert-success').addClass('alert-danger').show();
        \$('#pathao-test-alert-msg').text(json.message || '";
        // line 170
        echo ($context["text_connection_failed"] ?? null);
        echo "');
        \$status.removeClass('text-muted text-success').addClass('text-danger').html('<i class=\"fa fa-exclamation-circle\"></i> ' + (json.message || '";
        // line 171
        echo ($context["text_connection_failed"] ?? null);
        echo "'));
      }
    },
    error: function() {
      \$btn.prop('disabled', false);
      \$alert.removeClass('alert-success').addClass('alert-danger').show();
      \$('#pathao-test-alert-msg').text('";
        // line 177
        echo ($context["text_connection_invalid"] ?? null);
        echo "');
      \$status.removeClass('text-muted text-success').addClass('text-danger').html('');
    }
  });
});
//--></script>
";
        // line 183
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "extension/shipping/pathao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 183,  436 => 177,  427 => 171,  423 => 170,  415 => 165,  408 => 161,  396 => 152,  384 => 143,  378 => 140,  356 => 123,  351 => 121,  345 => 117,  340 => 115,  335 => 114,  330 => 112,  325 => 111,  323 => 110,  317 => 107,  310 => 103,  304 => 102,  299 => 100,  292 => 96,  289 => 95,  283 => 93,  280 => 92,  263 => 90,  258 => 89,  256 => 88,  250 => 85,  244 => 82,  237 => 78,  231 => 77,  226 => 75,  219 => 71,  215 => 70,  210 => 68,  203 => 64,  194 => 62,  186 => 61,  180 => 58,  173 => 54,  167 => 53,  162 => 51,  155 => 47,  149 => 46,  144 => 44,  137 => 40,  131 => 39,  126 => 37,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/pathao.twig", "");
    }
}
