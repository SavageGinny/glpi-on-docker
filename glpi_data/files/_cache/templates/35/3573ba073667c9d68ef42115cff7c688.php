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

/* components/pager.html.twig */
class __TwigTemplate_3296d4b9d74034fad3091c698aec44ca extends Template
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
";
        // line 33
        if ( !array_key_exists("additional_params", $context)) {
            // line 34
            yield "    ";
            $context["additional_params"] = "";
        } else {
            // line 36
            yield "    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($__internal_compile_0 = ($context["additional_params"] ?? null)) && is_string($__internal_compile_1 = "&") && str_starts_with($__internal_compile_0, $__internal_compile_1)))) {
                // line 37
                yield "        ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 38
                yield "    ";
            }
        }
        // line 40
        yield "
";
        // line 41
        $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
        // line 42
        $context["href"] = (((($context["href"] ?? null) . ($context["href_separator"] ?? null)) . "start=%start%") . ($context["additional_params"] ?? null));
        // line 43
        if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
            // line 44
            yield "   ";
            $context["href"] = (("javascript:reloadTab('start=%start%" . ($context["additional_params"] ?? null)) . "');");
        }
        // line 46
        if ( !array_key_exists("limit", $context)) {
            // line 47
            yield "    ";
            $context["limit"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit");
        }
        // line 49
        yield "
";
        // line 50
        $context["forward"] = (($context["start"] ?? null) + ($context["limit"] ?? null));
        // line 51
        $context["end"] = (($context["count"] ?? null) - ($context["limit"] ?? null));
        // line 52
        $context["current_start"] = (($context["start"] ?? null) + 1);
        // line 53
        $context["current_end"] = ((($context["current_start"] ?? null) + ($context["limit"] ?? null)) - 1);
        // line 54
        if ((($context["current_end"] ?? null) > ($context["count"] ?? null))) {
            // line 55
            yield "    ";
            $context["current_end"] = ($context["count"] ?? null);
        }
        // line 57
        yield "
";
        // line 58
        $context["back"] = (($context["start"] ?? null) - ($context["limit"] ?? null));
        // line 59
        if (((($context["current_start"] ?? null) - ($context["list_limit"] ?? null)) <= 0)) {
            // line 60
            yield "   ";
            $context["back"] = 0;
        }
        // line 62
        yield "
";
        // line 63
        $context["nb_pages"] = Twig\Extension\CoreExtension::round((($context["count"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 64
        $context["current_page"] = (Twig\Extension\CoreExtension::round(((($context["current_start"] ?? null) - 1) / ($context["limit"] ?? null)), 0, "ceil") + 1);
        // line 65
        yield "
";
        // line 67
        $context["adjacents"] = 2;
        // line 68
        $context["skip_adjacents"] = false;
        // line 69
        yield "
<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    ";
        // line 71
        $context["limitdropdown"] = Twig\Extension\CoreExtension::include($this->env, $context, "components/dropdown/limit.html.twig", ["no_onchange" => ((        // line 72
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(        // line 74
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)])]);
        // line 76
        yield "    <span class=\"search-limit d-none d-md-block\">
        ";
        // line 77
        yield Twig\Extension\CoreExtension::sprintf(__("%s rows / page"), ($context["limitdropdown"] ?? null));
        yield "
    </span>
    <span class=\"search-limit d-block d-md-none\">
        ";
        // line 80
        yield ($context["limitdropdown"] ?? null);
        yield "
    </span>
    <p class=\"m-0 text-muted d-none d-md-block page-infos\">
        ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Showing %s to %s of %s rows"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        yield "
    </p>
    <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
        ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s/%s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        yield "
    </p>

    <ul class=\"pagination m-0 mt-sm-2 mt-md-0\">
        ";
        // line 90
        if ((($context["nb_pages"] ?? null) > 1)) {
            // line 91
            yield "            ";
            $context["is_first_page"] = (($context["start"] ?? null) == 0);
            // line 92
            yield "            ";
            $context["is_last_page"] = (($context["forward"] ?? null) >= ($context["count"] ?? null));
            // line 93
            yield "
            <li class=\"page-item ";
            // line 94
            if (($context["is_first_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-start\" href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => 0]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start"), "html", null, true);
            yield "\" data-start=\"0\" ";
            if (($context["is_first_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 99
            if (($context["is_first_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-prev\" href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["back"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["back"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_first_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>
            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["nb_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 105
                yield "                ";
                if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                    // line 106
                    yield "                    ";
                    $context["page_start"] = (($context["page"] - 1) * ($context["limit"] ?? null));
                    // line 107
                    yield "                    <li class=\"d-none d-sm-block page-item ";
                    if (($context["page"] == ($context["current_page"] ?? null))) {
                        yield "active selected";
                    }
                    yield "\">
                    <a class=\"page-link page-link-num\" href=\"";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["page_start"] ?? null)]), "html", null, true);
                    yield "\" data-start=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_start"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                    ";
                    // line 110
                    if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                        // line 111
                        yield "                    ";
                        $context["skip_adjacents"] = false;
                        // line 112
                        yield "                    ";
                    }
                    // line 113
                    yield "                ";
                } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                    // line 114
                    yield "                    ";
                    $context["skip_adjacents"] = true;
                    // line 115
                    yield "                    <li class=\"d-none d-sm-block page-item disabled\">
                    <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                    </li>
                ";
                }
                // line 119
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "
            <li class=\"page-item ";
            // line 121
            if (($context["is_last_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-next\" href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["forward"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["forward"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_last_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 126
            if (($context["is_last_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-last\" href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["end"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_last_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        ";
        }
        // line 132
        yield "    </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/pager.html.twig";
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
        return array (  303 => 132,  287 => 127,  281 => 126,  266 => 122,  260 => 121,  257 => 120,  251 => 119,  245 => 115,  242 => 114,  239 => 113,  236 => 112,  233 => 111,  231 => 110,  222 => 108,  215 => 107,  212 => 106,  209 => 105,  205 => 104,  190 => 100,  184 => 99,  171 => 95,  165 => 94,  162 => 93,  159 => 92,  156 => 91,  154 => 90,  147 => 86,  141 => 83,  135 => 80,  129 => 77,  126 => 76,  124 => 74,  123 => 72,  122 => 71,  118 => 69,  116 => 68,  114 => 67,  111 => 65,  109 => 64,  107 => 63,  104 => 62,  100 => 60,  98 => 59,  96 => 58,  93 => 57,  89 => 55,  87 => 54,  85 => 53,  83 => 52,  81 => 51,  79 => 50,  76 => 49,  72 => 47,  70 => 46,  66 => 44,  64 => 43,  62 => 42,  60 => 41,  57 => 40,  53 => 38,  50 => 37,  47 => 36,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/pager.html.twig", "/var/www/glpi/templates/components/pager.html.twig");
    }
}
