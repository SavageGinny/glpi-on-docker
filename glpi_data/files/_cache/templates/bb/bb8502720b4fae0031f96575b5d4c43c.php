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

/* pages/login.html.twig */
class __TwigTemplate_0a98f828989d1f00d3e4fd87c1d183f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 33
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "   <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        yield "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noAuto"] ?? null), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect"] ?? null), "html", null, true);
        yield "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">
            <div class=\"card-header mb-4\">
               <h2 class=\"mx-auto\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login to your account"), "html", null, true);
        yield "</h2>
            </div>
            <div class=\"mb-3\">
               <label class=\"form-label\" for=\"login_name\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login"), "html", null, true);
        yield "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["namfield"] ?? null), "html", null, true);
        yield "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\" for=\"login_password\">
                  ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Password"), "html", null, true);
        yield "

                  ";
        // line 54
        if (($context["show_lost_password"] ?? null)) {
            // line 55
            yield "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            yield "\">
                           ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Forgotten password?"), "html", null, true);
            yield "
                        </a>
                     </span>
                  ";
        }
        // line 61
        yield "               </label>
               <input type=\"password\" class=\"form-control\" id=\"login_password\" name=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pwdfield"] ?? null), "html", null, true);
        yield "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 65
        if (Twig\Extension\CoreExtension::constant("GLPI_DEMO_MODE")) {
            // line 66
            yield "               <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"dropdown_language";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Language"), "html", null, true);
            yield "</label>
                  ";
            // line 68
            yield ($context["languages_dropdown"] ?? null);
            yield "
               </div>
            ";
        }
        // line 71
        yield "
            ";
        // line 72
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 73
            yield "               <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"dropdown_auth";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login source"), "html", null, true);
            yield "</label>
                  ";
            // line 75
            yield ($context["auth_dropdown_login"] ?? null);
            yield "
               </div>
            ";
        }
        // line 78
        yield "
            ";
        // line 79
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 80
            yield "               <div class=\"mb-2\">
                  <label class=\"form-check\" for=\"login_remember\">
                     <input type=\"checkbox\" class=\"form-check-input\" id=\"login_remember\" name=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rmbfield"] ?? null), "html", null, true);
            yield "\" ";
            yield (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            yield " />
                     <span class=\"form-check-label\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remember me"), "html", null, true);
            yield "</span>
                  </label>
               </div>
            ";
        }
        // line 87
        yield "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sign in"), "html", null, true);
        yield "
               </button>
            </div>

            ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 95
            yield "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errors"] ?? null), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 100
        yield "         </div>

         ";
        // line 102
        if (($context["right_panel"] ?? null)) {
            // line 103
            yield "            <div class=\"col-auto px-2 text-center\">
               ";
            // line 104
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["text_login"] ?? null)) > 0)) {
                // line 105
                yield "                  <div class=\"rich_text_container\">
                     ";
                // line 106
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                yield "
                  </div>
               ";
            }
            // line 109
            yield "
               ";
            // line 110
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 111
                yield "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("FAQ"), "html", null, true);
                yield "
                  </a>
               ";
            }
            // line 118
            yield "
               ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            yield "
            </div>
         ";
        }
        // line 122
        yield "      </div>
   </form>
";
        return; yield '';
    }

    // line 126
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        yield "   ";
        yield ($context["copyright_message"] ?? null);
        yield "
";
        return; yield '';
    }

    // line 130
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
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
        return "pages/login.html.twig";
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
        return array (  269 => 130,  261 => 127,  257 => 126,  250 => 122,  244 => 119,  241 => 118,  235 => 115,  229 => 111,  227 => 110,  224 => 109,  218 => 106,  215 => 105,  213 => 104,  210 => 103,  208 => 102,  204 => 100,  198 => 97,  194 => 95,  192 => 94,  185 => 90,  180 => 87,  173 => 83,  167 => 82,  163 => 80,  161 => 79,  158 => 78,  152 => 75,  146 => 74,  143 => 73,  141 => 72,  138 => 71,  132 => 68,  126 => 67,  123 => 66,  121 => 65,  115 => 62,  112 => 61,  105 => 57,  101 => 56,  98 => 55,  96 => 54,  91 => 52,  84 => 48,  80 => 47,  74 => 44,  66 => 39,  62 => 38,  58 => 37,  53 => 36,  49 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "/var/www/glpi/templates/pages/login.html.twig");
    }
}
