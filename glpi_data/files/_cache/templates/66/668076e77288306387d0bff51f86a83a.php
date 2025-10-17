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

/* components/plugin_uninstall_modal.html.twig */
class __TwigTemplate_7b157a2ad1175e9604fe076ecf8923c9 extends Template
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
<!-- Button trigger modal -->
";
        // line 34
        yield ($context["open_btn"] ?? null);
        yield "

<!-- Modal -->
<div class=\"modal fade\" id=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
        yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <a type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <div class=\"modal-status bg-danger\"></div>
            <div
                class=\"modal-body text-center py-4\">
                <i class=\"fa-2x ti ti-alert-triangle mb-2 text-danger\"></i>
                <h3>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("uninstall_plugin", "Are you sure?"), "html", null, true);
        yield "</h3>
                <div class=\"text-muted\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("By uninstalling the \"%s\" plugin you will lose all the data of the plugin."), ($context["plugin_name"] ?? null)), "html", null, true);
        yield "</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"w-100\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a class=\"btn w-100\" data-bs-dismiss=\"modal\">
                                ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "html", null, true);
        yield "
                            </a>
                        </div>
                        <div class=\"col\">
                            ";
        // line 57
        yield ($context["uninstall_btn"] ?? null);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/plugin_uninstall_modal.html.twig";
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
        return array (  80 => 57,  73 => 53,  63 => 46,  59 => 45,  48 => 37,  42 => 34,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/plugin_uninstall_modal.html.twig", "/var/www/glpi/templates/components/plugin_uninstall_modal.html.twig");
    }
}
