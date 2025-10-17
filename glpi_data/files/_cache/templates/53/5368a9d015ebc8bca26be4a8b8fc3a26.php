<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/search/controls.html.twig */
class __TwigTemplate_439e678f8bf46e2d3175ea928c6f1dcd extends Template
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
        // line 32
        yield "
<div class=\"d-inline-flex search-controls\">
   ";
        // line 34
        if ((($context["showmassiveactions"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 35
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
            // line 36
            yield "   ";
        }
        // line 37
        yield "
   ";
        // line 38
        if ((($context["may_be_located"] ?? null) && ((($context["count"] ?? null) > 0) || ((($__internal_compile_0 = (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["search"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["as_map"] ?? null) : null) == 1)))) {
            // line 39
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as map"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"as_map\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('as_map','','',''); document.forms['searchform";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 44
            yield ((((($__internal_compile_2 = (($__internal_compile_3 = ($context["data"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["search"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-map-2\"></i>
         </span >
      </label>
   ";
        }
        // line 50
        yield "
   ";
        // line 51
        if (($context["may_be_browsed"] ?? null)) {
            // line 52
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle browse"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"browse\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('browse','','',''); document.forms['searchform";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 57
            yield ((((($__internal_compile_4 = (($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["search"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["browse"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-subtask\"></i>
         </span>
      </label>
   ";
        }
        // line 63
        yield "
   ";
        // line 64
        if (($context["may_be_deleted"] ?? null)) {
            // line 65
            yield "      <label class=\"form-check form-switch btn btn-sm btn-ghost-danger me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show the trashbin"), "html", null, true);
            yield "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"is_deleted\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('is_deleted','','',''); document.forms['searchform";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["itemtype"] ?? null)), "html", null, true);
            yield "'].submit();\"
                ";
            // line 70
            yield ((((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_deleted"] ?? null) : null) == 1)) ? ("checked") : (""));
            yield " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-trash\"></i>
         </span>
      </label>
   ";
        }
        // line 76
        yield "
   <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
          title=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle search filters"), "html", null, true);
        yield "\">
      <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 fold-search\" role=\"button\"
             ";
        // line 81
        yield (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpifold_search")) ? ("") : ("checked"));
        yield " autocomplete=\"off\" />
      <span class=\"form-check-label mb-1 mb-sm-0\">
         <i class=\"ti fa-lg ti-search\"></i>
      </span>
   </label>

   <div class=\"d-inline-flex\" role=\"group\">

      ";
        // line 89
        if ((($context["can_config"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 90
            yield "      <button class=\"btn btn-sm btn-icon btn-ghost-secondary show_displaypreference_modal me-0 me-sm-1\"
             title=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"ti fa-lg ti-tool\"></i>
      </button>
      ";
        }
        // line 95
        yield "
      ";
        // line 96
        if ((($context["count"] ?? null) > 0)) {
            // line 97
            yield "         <button class=\"dropdown-toggle btn btn-sm btn-icon btn-ghost-secondary\" type=\"button\" id=\"dropdown-export\"
               data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
            <span class=\"py-1 px-2 my-n1 mx-n2\"data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Export"), "html", null, true);
            yield "\">
               <i id=\"export_dropdown_icon\" class=\"ti fa-lg ti-file-download\"></i>
            </span>
         </button>
      ";
            // line 103
            $context["exporthref"] = (((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?") . Twig\Extension\CoreExtension::urlencode(["item_type" =>             // line 104
($context["itemtype"] ?? null), "sort" =>             // line 105
($context["sort"] ?? null), "order" =>             // line 106
($context["order"] ?? null), "start" =>             // line 107
($context["start"] ?? null)])) . "&") .             // line 108
($context["posthref"] ?? null));
            // line 109
            yield "      <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown-export\">
         <li><a class=\"dropdown-item\" href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in landscape PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in portrait PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::SYLK_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in SLK"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page in CSV"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in landscape PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in portrait PDF"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::SYLK_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in SLK"), "html", null, true);
            yield "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
            yield "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages in CSV"), "html", null, true);
            yield "
         </a></li>
         ";
            // line 142
            if ((($context["itemtype"] ?? null) != "Stat")) {
                // line 143
                yield "         <li id=\"copy_names_to_clipboard\"><a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::NAMES_OUTPUT")), "html", null, true);
                yield "\">
            <i class=\"far fa-lg fa-copy\"></i>
            ";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy names to clipboard"), "html", null, true);
                yield "
         </a></li>
         ";
            }
            // line 148
            yield "      </ul>
      ";
        }
        // line 150
        yield "   </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   \$('.show_displaypreference_modal').click(function(e) {
      e.preventDefault();

      var modal = '<div class=\"modal fade\" id=\"displayprefence_modal";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"dialog\">';
      modal += '<div class=\"modal-dialog modal-lg\">';
      modal += '<div class=\"modal-content\">';
      modal += '<div class=\"modal-header\">';
      modal += '<h4 class=\"modal-title\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
        yield "</h4>';
      modal += '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close modal"), "html", null, true);
        yield "\"></button>';
      modal += '</div>';
      modal += '<div class=\"modal-body\">';
      modal += '<div class=\"ratio ratio-4x3\">';
      modal += '<iframe src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/displaypreference.form.php?itemtype=" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "url"))), "html", null, true);
        yield "\"></iframe>'
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';

      // remove old modal
      \$('#displayprefence_modal";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').remove();

      // create new one
      \$('body').append(modal);
      \$('#displayprefence_modal";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').modal('show');
   });

   \$(\"body\").on('hide.bs.modal', '#displayprefence_modal";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', function() {
      location.reload();
   });

   \$('.fold-search').change(function(event) {
      var show_search = \$(this).is(\":checked\");

      // hide tooltips (issue maybe ?)
      \$('[data-toggle=\"tooltip\"]').tooltip('hide');

      event.preventDefault();
      \$.ajax({
         url: '";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/search.php"), "html", null, true);
        yield "',
         type: 'POST',
         datatype: 'json',
         data: {
            'action': 'fold_search',
            'show_search': (show_search ? 1 : 0),
         },
         success: function() {
            toggle_fold_search(show_search);

            // scroll to top to display the change
            if (show_search) {
               \$(\"html, body, .search-container\").animate({ scrollTop: 0 });
            }
         }
      });
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__('Results copied to clipboard'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }
   function copy_error() {
      glpi_toast_error(__('Unexpected error'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }

   \$('#copy_names_to_clipboard').click(function(e) {
      // Get target link
      var link = \$(this).find('a').prop('href');

      // Show loading indicator
      \$('#export_dropdown_icon').removeClass('fa-file-download');
      \$('#export_dropdown_icon').addClass('fa-circle-notch');
      \$('#export_dropdown_icon').addClass('fa-spin');
      \$('#export_dropdown_icon').parent().parent().removeClass('dropdown-toggle');

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
   });
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/search/controls.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  354 => 193,  339 => 181,  333 => 178,  326 => 174,  316 => 167,  309 => 163,  305 => 162,  298 => 158,  288 => 150,  284 => 148,  278 => 145,  272 => 143,  270 => 142,  265 => 140,  260 => 138,  255 => 136,  250 => 134,  245 => 132,  240 => 130,  235 => 128,  230 => 126,  225 => 124,  220 => 122,  215 => 120,  210 => 118,  205 => 116,  200 => 114,  195 => 112,  190 => 110,  187 => 109,  185 => 108,  184 => 107,  183 => 106,  182 => 105,  181 => 104,  180 => 103,  173 => 99,  169 => 97,  167 => 96,  164 => 95,  157 => 91,  154 => 90,  152 => 89,  141 => 81,  136 => 79,  131 => 76,  122 => 70,  118 => 69,  112 => 66,  109 => 65,  107 => 64,  104 => 63,  95 => 57,  91 => 56,  85 => 53,  82 => 52,  80 => 51,  77 => 50,  68 => 44,  64 => 43,  58 => 40,  55 => 39,  53 => 38,  50 => 37,  47 => 36,  44 => 35,  42 => 34,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/controls.html.twig", "/var/www/glpi/templates/components/search/controls.html.twig");
    }
}
