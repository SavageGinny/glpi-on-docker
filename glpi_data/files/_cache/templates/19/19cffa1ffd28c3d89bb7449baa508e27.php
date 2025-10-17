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

/* components/search/table.html.twig */
class __TwigTemplate_de899073fce297e2db8644c58f89d32f extends Template
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
        $context["searchform_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null), ("search_" . ($context["rand"] ?? null)))) : (("search_" . ($context["rand"] ?? null))));
        // line 34
        yield "
<div class=\"table-responsive-lg\">
   <table class=\"search-results table card-table table-hover ";
        // line 36
        yield (((($__internal_compile_1 = (($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["search"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_deleted"] ?? null) : null)) ? ("table-danger deleted-results") : ("table-striped"));
        yield "\"
          id=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "html", null, true);
        yield "\">
      <thead>
         <tr ";
        // line 39
        if ((($context["count"] ?? null) == 0)) {
            yield "style=\"display: none;\"";
        }
        yield ">
            ";
        // line 40
        if (($context["showmassiveactions"] ?? null)) {
            // line 41
            yield "            <th style=\"width: 30px;\">
               <div>
                  <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                        value=\"\" aria-label=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check all as"), "html", null, true);
            yield "\"
                        onclick=\"checkAsCheckboxes(this, '";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "html", null, true);
            yield "', '.massive_action_checkbox');\" />
               </div>
            </th>
            ";
        }
        // line 49
        yield "
            ";
        // line 50
        $context["sorts"] = (($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sort"] ?? null) : null);
        // line 51
        yield "
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_5 = (($__internal_compile_6 = ($context["data"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["data"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["cols"] ?? null) : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 53
            yield "               ";
            // line 54
            yield "               ";
            $context["linkto"] = "";
            // line 55
            yield "               ";
            $context["so_no_sort"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 55), "nosort", [], "array", true, true, false, 55) &&  !(null === (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 55)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["nosort"] ?? null) : null)))) ? ((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 55)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["nosort"] ?? null) : null)) : (false));
            // line 56
            yield "               ";
            $context["meta"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 56) &&  !(null === (($__internal_compile_9 = $context["col"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["meta"] ?? null) : null)))) ? ((($__internal_compile_10 = $context["col"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["meta"] ?? null) : null)) : (false));
            // line 57
            yield "               ";
            $context["sort_order"] = "nosort";
            // line 58
            yield "               ";
            $context["sort_num"] = "";
            // line 59
            yield "               ";
            $context["can_sort"] = (( !($context["meta"] ?? null) &&  !($context["no_sort"] ?? null)) &&  !($context["so_no_sort"] ?? null));
            // line 60
            yield "               ";
            if (($context["can_sort"] ?? null)) {
                // line 61
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sort_opt"]) {
                    // line 62
                    yield "                     ";
                    if (($context["sort_opt"] == (($__internal_compile_11 = $context["col"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null))) {
                        // line 63
                        yield "                        ";
                        $context["sort_order"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 63), "order", [], "array", false, true, false, 63), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63), [], "array", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 63), "order", [], "array", false, true, false, 63)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63)] ?? null) : null), "ASC")) : ("ASC"));
                        // line 64
                        yield "                        ";
                        $context["sort_num"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64);
                        // line 65
                        yield "                     ";
                    }
                    // line 66
                    yield "                  ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_opt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                yield "               ";
            }
            // line 68
            yield "
               ";
            // line 69
            $context["col_name"] = (($__internal_compile_13 = $context["col"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
            // line 70
            yield "               ";
            // line 71
            yield "               ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", true, true, false, 71)) {
                // line 72
                yield "                  ";
                $context["groupname"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 72), "name", [], "array", true, true, false, 72) &&  !(null === (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 72)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null)))) ? ((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 72)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null)) : ((($__internal_compile_16 = $context["col"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["groupname"] ?? null) : null)));
                // line 73
                yield "                  ";
                $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), ($context["groupname"] ?? null), (($__internal_compile_17 = $context["col"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null));
                // line 74
                yield "               ";
            }
            // line 75
            yield "
               ";
            // line 77
            yield "               ";
            if (( !($context["itemtype"] ?? null) == (($__internal_compile_18 = $context["col"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["itemtype"] ?? null) : null))) {
                // line 78
                yield "                  ";
                $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_19 = $context["col"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["itemtype"] ?? null) : null)), ($context["col_name"] ?? null));
                // line 79
                yield "               ";
            }
            // line 80
            yield "
               <th data-searchopt-id=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = $context["col"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            yield "\" ";
            if ( !($context["can_sort"] ?? null)) {
                yield "data-nosort=\"true\"";
            }
            yield " data-sort-order=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_order"] ?? null), "html", null, true);
            yield "\"
                  ";
            // line 82
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["sort_num"] ?? null))) {
                yield "data-sort-num=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["sort_num"] ?? null) - 1), "html", null, true);
                yield "\"";
            }
            yield ">
                  ";
            // line 83
            $context["sort_icon"] = (((($context["sort_order"] ?? null) == "ASC")) ? ("fas fa-sort-up") : ((((($context["sort_order"] ?? null) == "DESC")) ? ("fas fa-sort-down") : (""))));
            // line 84
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
            yield "
                  ";
            // line 85
            if (($context["can_sort"] ?? null)) {
                // line 86
                yield "                     <span class=\"sort-indicator\"><i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_icon"] ?? null), "html", null, true);
                yield "\"></i><span class=\"sort-num\">";
                (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sorts"] ?? null)) > 1)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_num"] ?? null), "html", null, true)) : (yield ""));
                yield "</span></span>
                  ";
            }
            // line 88
            yield "               </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "
            ";
        // line 92
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 92)) {
            // line 93
            yield "               <th>
                  ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
            yield "
               </th>
            ";
        }
        // line 97
        yield "         </tr>
      </thead>
      <tbody>
         ";
        // line 100
        if ((($context["count"] ?? null) == 0)) {
            // line 101
            yield "            <tr>
               <td colspan=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_21 = (($__internal_compile_22 = ($context["data"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["data"] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["cols"] ?? null) : null)), "html", null, true);
            yield "\">
                  <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
                     ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found"), "html", null, true);
            yield "
                  </div>
               </td>
            </tr>
         ";
        } else {
            // line 109
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_23 = (($__internal_compile_24 = ($context["data"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["data"] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["rowkey"] => $context["row"]) {
                // line 110
                yield "               <tr>
                  ";
                // line 111
                if (($context["showmassiveactions"] ?? null)) {
                    // line 112
                    yield "                  <td>
                     <div>
                        ";
                    // line 115
                    yield "                        ";
                    if (((($context["itemtype"] ?? null) == "Entity") &&  !Session::haveAccessToEntity((($__internal_compile_25 = $context["row"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null)))) {
                        // line 116
                        yield "                        ";
                    } elseif ((((($context["itemtype"] ?? null) == "User") &&  !Session::canViewAllEntities()) &&  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasAccessToUserEntities((($__internal_compile_26 = $context["row"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["id"] ?? null) : null)))) {
                        // line 117
                        yield "                        ";
                    } elseif ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBTM") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 117)) &&  !Session::haveAccessToEntity((($__internal_compile_27 = $context["row"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null)))) {
                        // line 118
                        yield "                        ";
                    } else {
                        // line 119
                        yield "                           ";
                        $context["row_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 119) &&  !(null === (($__internal_compile_28 = $context["row"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["TYPE"] ?? null) : null)))) ? ((($__internal_compile_29 = $context["row"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null)));
                        // line 120
                        yield "                           ";
                        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["row_itemtype"] ?? null) . "::isMassiveActionAllowed"), [(($__internal_compile_30 = $context["row"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null)])) {
                            // line 121
                            yield "                              ";
                            $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 121), (($__internal_compile_31 = $context["row"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null), [], "array", true, true, false, 121) &&  !(null === (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 121)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[(($__internal_compile_33 = $context["row"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)] ?? null) : null)))) ? ((($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 121)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[(($__internal_compile_35 = $context["row"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null)] ?? null) : null)) : (false));
                            // line 122
                            yield "                              <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                 value=\"1\" aria-label=\"\" ";
                            // line 123
                            if (($context["checked"] ?? null)) {
                                yield "checked=\"checked\"";
                            }
                            // line 124
                            yield "                                 name=\"item[";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 124) &&  !(null === (($__internal_compile_36 = $context["row"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["TYPE"] ?? null) : null)))) ? ((($__internal_compile_37 = $context["row"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null))), "html", null, true);
                            yield "][";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_38 = $context["row"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), "html", null, true);
                            yield "]\" />
                           ";
                        }
                        // line 126
                        yield "                        ";
                    }
                    // line 127
                    yield "                     </div>
                  </td>
                  ";
                }
                // line 130
                yield "
                  ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_39 = (($__internal_compile_40 = ($context["data"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["data"] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["cols"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 132
                    yield "                     ";
                    $context["colkey"] = (((($__internal_compile_41 = $context["col"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["itemtype"] ?? null) : null) . "_") . (($__internal_compile_42 = $context["col"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["id"] ?? null) : null));
                    // line 133
                    yield "                     ";
                    // line 134
                    yield "                     ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 134) && (($__internal_compile_43 = $context["col"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["meta"] ?? null) : null))) {
                        // line 135
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($__internal_compile_44 = (($__internal_compile_45 = $context["row"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[($context["colkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["displayname"] ?? null) : null), 0, 0);
                        yield "
                     ";
                    } else {
                        // line 137
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($__internal_compile_46 = (($__internal_compile_47 = $context["row"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[($context["colkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["displayname"] ?? null) : null), 0, 0, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::displayConfigItem", [($context["itemtype"] ?? null), (($__internal_compile_48 = $context["col"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["id"] ?? null) : null), $context["row"]]));
                        yield "
                     ";
                    }
                    // line 139
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "
                  ";
                // line 142
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 142)) {
                    // line 143
                    yield "                     <td>
                        ";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_49 = $context["row"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["TYPE"] ?? null) : null)), "html", null, true);
                    yield "
                     </td>
                  ";
                }
                // line 147
                yield "               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowkey'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "         ";
        }
        // line 150
        yield "      </tbody>
   </table>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/search/table.html.twig";
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
        return array (  416 => 150,  413 => 149,  406 => 147,  400 => 144,  397 => 143,  394 => 142,  391 => 140,  385 => 139,  379 => 137,  373 => 135,  370 => 134,  368 => 133,  365 => 132,  361 => 131,  358 => 130,  353 => 127,  350 => 126,  342 => 124,  338 => 123,  335 => 122,  332 => 121,  329 => 120,  326 => 119,  323 => 118,  320 => 117,  317 => 116,  314 => 115,  310 => 112,  308 => 111,  305 => 110,  300 => 109,  292 => 104,  287 => 102,  284 => 101,  282 => 100,  277 => 97,  271 => 94,  268 => 93,  265 => 92,  262 => 90,  247 => 88,  239 => 86,  237 => 85,  232 => 84,  230 => 83,  222 => 82,  212 => 81,  209 => 80,  206 => 79,  203 => 78,  200 => 77,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 71,  183 => 70,  181 => 69,  178 => 68,  175 => 67,  161 => 66,  158 => 65,  155 => 64,  152 => 63,  149 => 62,  131 => 61,  128 => 60,  125 => 59,  122 => 58,  119 => 57,  116 => 56,  113 => 55,  110 => 54,  108 => 53,  91 => 52,  88 => 51,  86 => 50,  83 => 49,  76 => 45,  72 => 44,  68 => 43,  64 => 41,  62 => 40,  56 => 39,  51 => 37,  47 => 36,  43 => 34,  41 => 33,  38 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/table.html.twig", "/var/www/glpi/templates/components/search/table.html.twig");
    }
}
