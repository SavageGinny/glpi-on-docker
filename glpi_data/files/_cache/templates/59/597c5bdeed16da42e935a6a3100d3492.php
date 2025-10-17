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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_31d8696100c8065eb9f83f54e844f868 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 34
        if ( !array_key_exists("css_files", $context)) {
            // line 35
            yield "   ";
            $context["css_files"] = [["path" => "public/lib/base.css"], ["path" => (("css/palettes/" .             // line 37
($context["theme"] ?? null)) . ".scss")]];
            // line 39
            yield "   ";
        }
        // line 41
        if ( !array_key_exists("js_files", $context)) {
            // line 42
            yield "   ";
            $context["js_files"] = [["path" => "public/lib/base.js"], ["path" => "js/common.js"], ["path" => "public/lib/fuzzy.js"]];
        }
        // line 48
        if ( !array_key_exists("js_modules", $context)) {
            // line 49
            yield "   ";
            $context["js_modules"] = [];
        }
        // line 51
        if ( !array_key_exists("custom_header_tags", $context)) {
            // line 52
            yield "   ";
            $context["custom_header_tags"] = [];
        }
        // line 54
        yield "
";
        // line 56
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(true));
        // line 57
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(true));
        // line 58
        yield "
";
        // line 59
        $context["is_anonymous_page"] = true;
        // line 60
        yield "
";
        // line 61
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head.html.twig");
        yield "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 65
        $context["style"] = null;
        // line 66
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 67
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 68
            yield "         ";
        }
        // line 69
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 70
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 71
            yield "         ";
        }
        // line 72
        yield "
         <div class=\"container-tight py-6\" ";
        // line 73
        if ( !(null === ($context["style"] ?? null))) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md\">
               <div class=\"card-body\">
               ";
        // line 81
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 82
        yield "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 86
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 87
        yield "            </div>
         </div>
      </div>
   </div>

   ";
        // line 92
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 93
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 81
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 86
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 92
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
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
        return array (  173 => 92,  166 => 86,  159 => 81,  152 => 93,  150 => 92,  143 => 87,  141 => 86,  135 => 82,  133 => 81,  118 => 73,  115 => 72,  112 => 71,  109 => 70,  106 => 69,  103 => 68,  100 => 67,  97 => 66,  95 => 65,  88 => 61,  85 => 60,  83 => 59,  80 => 58,  78 => 57,  76 => 56,  73 => 54,  69 => 52,  67 => 51,  63 => 49,  61 => 48,  57 => 42,  55 => 41,  52 => 39,  50 => 37,  48 => 35,  46 => 34,  44 => 33,  41 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
