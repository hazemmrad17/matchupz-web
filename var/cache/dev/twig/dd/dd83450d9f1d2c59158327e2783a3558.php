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
use Twig\TemplateWrapper;

/* schedule/mainF.html.twig */
class __TwigTemplate_0d6589f72c08fcc65963356b34d82efd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/mainF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/mainF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "schedule/mainF.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Matchupz - Horaires";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .courses-item-inner {
            position: relative; /* Positioning context for the GIF */
        }
        .live-gif {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right */
            width: 80px; /* Adjust size as needed */
            height: 80px;
            z-index: 10; /* Ensure it’s above other content */
        }
        .hidden {
            display: none; /* Hide cards that don’t match the filter */
        }
        .filter-container {
            margin-bottom: 20px;
            display: inline-block;
        }
        .filter-container label {
            color: #fff;
            margin-right: 10px;
            font-weight: 500;
        }
        .filter-container .dropdown-toggle {
            color: #fff;
            background-color:rgb(255, 55, 55); /* Primary color to match the theme */
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .filter-container .dropdown-toggle:hover {
            background-color:rgb(200, 2, 2); /* Darker shade on hover */
        }
        .filter-container .dropdown-menu {
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.15);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
            border-radius: 0.25rem;
            min-width: 150px;
        }
        .filter-container .dropdown-item {
            color: #212529;
            padding: 0.25rem 1.5rem;
            font-size: 1rem;
        }
        .filter-container .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #007bff; /* Primary color on hover */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Horaires</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedules Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos horaires</h4>
                <h1 class=\"display-4 text-white mb-4\">Matchs à venir et en cours</h1>
                <p class=\"text-white mb-0\">
                    Restez informé de tous les matchs programmés. Les matchs en cours sont listés ci-dessous.
                </p>
            </div>

            <!-- Define valid sport types -->
            ";
        // line 88
        $context["validSportTypes"] = ["Football", "Basketball", "Tennis", "Handball", "Volleyball", "Rugby", "Paddle"];
        // line 89
        yield "
            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                ";
        // line 94
        yield "                ";
        $context["allOngoingSportTypes"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 94, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 94, $this->source); })()), "matchEntity", [], "any", false, false, false, 94) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 94, $this->source); })()), "matchEntity", [], "any", false, false, false, 94), "sportType", [], "any", false, false, false, 94)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 94, $this->source); })()), "matchEntity", [], "any", false, false, false, 94), "sportType", [], "any", false, false, false, 94), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 94, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 94, $this->source); })()), "matchEntity", [], "any", false, false, false, 94), "sportType", [], "any", false, false, false, 94)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 94, $this->source); })()) != "Unknown"); }));
        // line 95
        yield "                ";
        // line 96
        yield "                ";
        $context["ongoingSportTypes"] = [];
        // line 97
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allOngoingSportTypes"]) || array_key_exists("allOngoingSportTypes", $context) ? $context["allOngoingSportTypes"] : (function () { throw new RuntimeError('Variable "allOngoingSportTypes" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 98
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 98, $this->source); })()))) {
                // line 99
                yield "                        ";
                $context["ongoingSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 99, $this->source); })()), [$context["sportType"]]);
                // line 100
                yield "                    ";
            }
            // line 101
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 102, $this->source); })())) > 0)) {
            // line 103
            yield "                    <div class=\"filter-container\">
                        <label for=\"ongoing-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"ongoing-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"ongoing-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 111, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 112
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sportType"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sportType"], "html", null, true);
                yield "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 114, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114), "sportType", [], "any", false, false, false, 114)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114), "sportType", [], "any", false, false, false, 114), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 114, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114), "sportType", [], "any", false, false, false, 114)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 114, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 115
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                ";
            }
            // line 117
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 121
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 121, $this->source); })())) > 0)) {
            // line 122
            yield "                    <div class=\"row gy-4 gx-0 justify-content-center\" id=\"ongoing-schedules\">
                        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 123, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 124
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 124) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 124), "sportType", [], "any", false, false, false, 124)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 124), "sportType", [], "any", false, false, false, 124), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 124, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 124), "sportType", [], "any", false, false, false, 124), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 129) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 129), "sportType", [], "any", false, false, false, 129))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 129), "sportType", [], "any", false, false, false, 129)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 129), "sportType", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 129), "sportType", [], "any", false, false, false, 129)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 129), "sportType", [], "any", false, false, false, 129), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 133), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 134), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 134), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 139
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 139)) {
                    // line 140
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 140), "c1", [], "any", false, false, false, 140), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 140), "c2", [], "any", false, false, false, 140), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 142
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 144
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 146
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 146)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 146), "nomEspace", [], "any", false, false, false, 146), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 147
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 147) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 147), "sportType", [], "any", false, false, false, 147))) {
                    // line 148
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 148), "sportType", [], "any", false, false, false, 148), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 150
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 152
                yield "                                        </p>
                                        <a href=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 153)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        <img src=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/live.gif"), "html", null, true);
                yield "\" alt=\"Live Indicator\" class=\"live-gif\">
                                    </div>
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "                    </div>
                ";
        } else {
            // line 163
            yield "                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                ";
        }
        // line 165
        yield "            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                ";
        // line 170
        $context["ongoingIds"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 170, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 170, $this->source); })()), "idSchedule", [], "any", false, false, false, 170); }), ",");
        // line 171
        yield "                ";
        // line 172
        yield "                ";
        $context["allSportTypesRaw"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 172, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 172, $this->source); })()), "matchEntity", [], "any", false, false, false, 172) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 172, $this->source); })()), "matchEntity", [], "any", false, false, false, 172), "sportType", [], "any", false, false, false, 172)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 172, $this->source); })()), "matchEntity", [], "any", false, false, false, 172), "sportType", [], "any", false, false, false, 172), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 172, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 172, $this->source); })()), "matchEntity", [], "any", false, false, false, 172), "sportType", [], "any", false, false, false, 172)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 172, $this->source); })()) != "Unknown"); }));
        // line 173
        yield "                ";
        // line 174
        yield "                ";
        $context["allSportTypes"] = [];
        // line 175
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypesRaw"]) || array_key_exists("allSportTypesRaw", $context) ? $context["allSportTypesRaw"] : (function () { throw new RuntimeError('Variable "allSportTypesRaw" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 176
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 176, $this->source); })()))) {
                // line 177
                yield "                        ";
                $context["allSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 177, $this->source); })()), [$context["sportType"]]);
                // line 178
                yield "                    ";
            }
            // line 179
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 180, $this->source); })())) > 0)) {
            // line 181
            yield "                    <div class=\"filter-container\">
                        <label for=\"all-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"all-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"all-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 189, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 190
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sportType"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sportType"], "html", null, true);
                yield "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 192, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 192, $this->source); })()), "matchEntity", [], "any", false, false, false, 192) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 192, $this->source); })()), "matchEntity", [], "any", false, false, false, 192), "sportType", [], "any", false, false, false, 192)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 192, $this->source); })()), "matchEntity", [], "any", false, false, false, 192), "sportType", [], "any", false, false, false, 192), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 192, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 192, $this->source); })()), "matchEntity", [], "any", false, false, false, 192), "sportType", [], "any", false, false, false, 192)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 192, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 193
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                ";
            }
            // line 195
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 199
        yield "                ";
        $context["hasNonOngoingSchedules"] = false;
        // line 200
        yield "                <div class=\"row gy-4 gx-0 justify-content-center\" id=\"all-schedules\">
                    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 201, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 202
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 202), (isset($context["ongoingIds"]) || array_key_exists("ongoingIds", $context) ? $context["ongoingIds"] : (function () { throw new RuntimeError('Variable "ongoingIds" does not exist.', 202, $this->source); })()))) {
                // line 203
                yield "                            ";
                $context["hasNonOngoingSchedules"] = true;
                // line 204
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 204) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 204) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 204), "sportType", [], "any", false, false, false, 204)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 204), "sportType", [], "any", false, false, false, 204), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 204, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 204), "sportType", [], "any", false, false, false, 204), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 209) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 209), "sportType", [], "any", false, false, false, 209))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 209), "sportType", [], "any", false, false, false, 209)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 209), "sportType", [], "any", true, true, false, 209) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 209), "sportType", [], "any", false, false, false, 209)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 209), "sportType", [], "any", false, false, false, 209), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 213), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 214), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 214), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 218)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 219
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 219)) {
                    // line 220
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220), "c1", [], "any", false, false, false, 220), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220), "c2", [], "any", false, false, false, 220), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 222
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 224
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 226
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 226)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 226), "nomEspace", [], "any", false, false, false, 226), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 227
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 227) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 227), "sportType", [], "any", false, false, false, 227))) {
                    // line 228
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228), "sportType", [], "any", false, false, false, 228), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 230
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 232
                yield "                                        </p>
                                        <a href=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 233)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 240
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                </div>
                ";
        // line 242
        if ( !(isset($context["hasNonOngoingSchedules"]) || array_key_exists("hasNonOngoingSchedules", $context) ? $context["hasNonOngoingSchedules"] : (function () { throw new RuntimeError('Variable "hasNonOngoingSchedules" does not exist.', 242, $this->source); })())) {
            // line 243
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-white\">Aucun horaire disponible pour le moment (hors matchs en cours).</p>
                    </div>
                ";
        }
        // line 247
        yield "            </div>
        </div>
    </div>
    <!-- Schedules End -->

    <!-- JavaScript for Filtering -->
    ";
        // line 253
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <script>
            // Filter for Ongoing Matches
            document.querySelectorAll('#ongoing-sport-filter + .dropdown-menu .dropdown-item').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const selectedSport = this.getAttribute('data-value');
                    const dropdownButton = document.getElementById('ongoing-sport-filter');
                    dropdownButton.textContent = this.textContent; // Update button text to selected option

                    const cards = document.querySelectorAll('#ongoing-schedules .schedule-card');
                    cards.forEach(card => {
                        const sportType = card.getAttribute('data-sport-type');
                        if (selectedSport === 'all' || sportType === selectedSport) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    // Move the selected sport to the top of the dropdown
                    const dropdownMenu = this.closest('.dropdown-menu');
                    const items = Array.from(dropdownMenu.querySelectorAll('.dropdown-item'));
                    const selectedItem = items.find(item => item.getAttribute('data-value') === selectedSport);
                    if (selectedItem && selectedSport !== 'all') {
                        dropdownMenu.removeChild(selectedItem);
                        dropdownMenu.insertBefore(selectedItem, items[1]); // After \"Tous\"
                    }
                });
            });

            // Filter for All Schedules
            document.querySelectorAll('#all-sport-filter + .dropdown-menu .dropdown-item').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const selectedSport = this.getAttribute('data-value');
                    const dropdownButton = document.getElementById('all-sport-filter');
                    dropdownButton.textContent = this.textContent; // Update button text to selected option

                    const cards = document.querySelectorAll('#all-schedules .schedule-card');
                    cards.forEach(card => {
                        const sportType = card.getAttribute('data-sport-type');
                        if (selectedSport === 'all' || sportType === selectedSport) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    // Move the selected sport to the top of the dropdown
                    const dropdownMenu = this.closest('.dropdown-menu');
                    const items = Array.from(dropdownMenu.querySelectorAll('.dropdown-item'));
                    const selectedItem = items.find(item => item.getAttribute('data-value') === selectedSport);
                    if (selectedItem && selectedSport !== 'all') {
                        dropdownMenu.removeChild(selectedItem);
                        dropdownMenu.insertBefore(selectedItem, items[1]); // After \"Tous\"
                    }
                });
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "schedule/mainF.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  668 => 254,  645 => 253,  637 => 247,  631 => 243,  629 => 242,  626 => 241,  612 => 240,  602 => 233,  599 => 232,  595 => 230,  589 => 228,  587 => 227,  583 => 226,  579 => 224,  575 => 222,  567 => 220,  565 => 219,  561 => 218,  552 => 214,  548 => 213,  539 => 209,  528 => 204,  525 => 203,  522 => 202,  505 => 201,  502 => 200,  499 => 199,  493 => 195,  489 => 193,  486 => 192,  475 => 190,  471 => 189,  461 => 181,  458 => 180,  452 => 179,  449 => 178,  446 => 177,  443 => 176,  438 => 175,  435 => 174,  433 => 173,  430 => 172,  428 => 171,  426 => 170,  419 => 165,  415 => 163,  411 => 161,  392 => 156,  386 => 153,  383 => 152,  379 => 150,  373 => 148,  371 => 147,  367 => 146,  363 => 144,  359 => 142,  351 => 140,  349 => 139,  345 => 138,  336 => 134,  332 => 133,  323 => 129,  312 => 124,  295 => 123,  292 => 122,  289 => 121,  283 => 117,  279 => 115,  276 => 114,  265 => 112,  261 => 111,  251 => 103,  248 => 102,  242 => 101,  239 => 100,  236 => 99,  233 => 98,  228 => 97,  225 => 96,  223 => 95,  220 => 94,  214 => 89,  212 => 88,  190 => 69,  183 => 64,  170 => 63,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Horaires{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .courses-item-inner {
            position: relative; /* Positioning context for the GIF */
        }
        .live-gif {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right */
            width: 80px; /* Adjust size as needed */
            height: 80px;
            z-index: 10; /* Ensure it’s above other content */
        }
        .hidden {
            display: none; /* Hide cards that don’t match the filter */
        }
        .filter-container {
            margin-bottom: 20px;
            display: inline-block;
        }
        .filter-container label {
            color: #fff;
            margin-right: 10px;
            font-weight: 500;
        }
        .filter-container .dropdown-toggle {
            color: #fff;
            background-color:rgb(255, 55, 55); /* Primary color to match the theme */
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .filter-container .dropdown-toggle:hover {
            background-color:rgb(200, 2, 2); /* Darker shade on hover */
        }
        .filter-container .dropdown-menu {
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.15);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
            border-radius: 0.25rem;
            min-width: 150px;
        }
        .filter-container .dropdown-item {
            color: #212529;
            padding: 0.25rem 1.5rem;
            font-size: 1rem;
        }
        .filter-container .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #007bff; /* Primary color on hover */
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Horaires</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedules Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos horaires</h4>
                <h1 class=\"display-4 text-white mb-4\">Matchs à venir et en cours</h1>
                <p class=\"text-white mb-0\">
                    Restez informé de tous les matchs programmés. Les matchs en cours sont listés ci-dessous.
                </p>
            </div>

            <!-- Define valid sport types -->
            {% set validSportTypes = ['Football', 'Basketball', 'Tennis', 'Handball', 'Volleyball', 'Rugby', 'Paddle'] %}

            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                {# Extract all sport types from ongoingSchedules #}
                {% set allOngoingSportTypes = ongoingSchedules|map(schedule => schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown')|filter(v => v != 'Unknown')|sort %}
                {# Manually remove duplicates #}
                {% set ongoingSportTypes = [] %}
                {% for sportType in allOngoingSportTypes %}
                    {% if sportType not in ongoingSportTypes %}
                        {% set ongoingSportTypes = ongoingSportTypes|merge([sportType]) %}
                    {% endif %}
                {% endfor %}
                {% if ongoingSportTypes|length > 0 %}
                    <div class=\"filter-container\">
                        <label for=\"ongoing-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"ongoing-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"ongoing-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                {% for sportType in ongoingSportTypes %}
                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"{{ sportType }}\">{{ sportType }}</a></li>
                                {% endfor %}
                                {% if ongoingSchedules|map(schedule => schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown')|filter(v => v == 'Unknown')|length > 0 %}
                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                {% endif %}
                {% if ongoingSchedules|length > 0 %}
                    <div class=\"row gy-4 gx-0 justify-content-center\" id=\"ongoing-schedules\">
                        {% for schedule in ongoingSchedules %}
                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"{{ 0.2 + (loop.index0 % 3) * 0.2 }}s\" data-sport-type=\"{{ schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown' }}\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"{{ asset('img/' ~ (schedule.matchEntity and schedule.matchEntity.sportType ? schedule.matchEntity.sportType : 'default') ~ '.png') }}\" class=\"img-fluid\" alt=\"{{ schedule.matchEntity.sportType ?? 'Default' }} icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : {{ schedule.dateMatch|date('Y-m-d') }}</p>
                                                    <p class=\"mb-0\">Heure : {{ schedule.startTime|date('H:i') }} - {{ schedule.endTime|date('H:i') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"d-inline-block h4 mb-3\">
                                            {% if schedule.matchEntity %}
                                                {{ schedule.matchEntity.c1 }} contre {{ schedule.matchEntity.c2 }}
                                            {% else %}
                                                Match à déterminer
                                            {% endif %}
                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> {{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}<br>
                                            {% if schedule.matchEntity and schedule.matchEntity.sportType %}
                                                <strong>Sport :</strong> {{ schedule.matchEntity.sportType }}
                                            {% else %}
                                                <strong>Sport :</strong> Inconnu
                                            {% endif %}
                                        </p>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        <img src=\"{{ asset('img/live.gif') }}\" alt=\"Live Indicator\" class=\"live-gif\">
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% else %}
                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                {% endif %}
            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                {% set ongoingIds = ongoingSchedules|map(schedule => schedule.idSchedule)|join(',') %}
                {# Extract all sport types from schedules #}
                {% set allSportTypesRaw = schedules|map(schedule => schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown')|filter(v => v != 'Unknown')|sort %}
                {# Manually remove duplicates #}
                {% set allSportTypes = [] %}
                {% for sportType in allSportTypesRaw %}
                    {% if sportType not in allSportTypes %}
                        {% set allSportTypes = allSportTypes|merge([sportType]) %}
                    {% endif %}
                {% endfor %}
                {% if allSportTypes|length > 0 %}
                    <div class=\"filter-container\">
                        <label for=\"all-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"all-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"all-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                {% for sportType in allSportTypes %}
                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"{{ sportType }}\">{{ sportType }}</a></li>
                                {% endfor %}
                                {% if schedules|map(schedule => schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown')|filter(v => v == 'Unknown')|length > 0 %}
                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                {% endif %}
                {% set hasNonOngoingSchedules = false %}
                <div class=\"row gy-4 gx-0 justify-content-center\" id=\"all-schedules\">
                    {% for schedule in schedules %}
                        {% if schedule.idSchedule not in ongoingIds %}
                            {% set hasNonOngoingSchedules = true %}
                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"{{ 0.2 + (loop.index0 % 3) * 0.2 }}s\" data-sport-type=\"{{ schedule.matchEntity and schedule.matchEntity.sportType and schedule.matchEntity.sportType in validSportTypes ? schedule.matchEntity.sportType : 'Unknown' }}\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"{{ asset('img/' ~ (schedule.matchEntity and schedule.matchEntity.sportType ? schedule.matchEntity.sportType : 'default') ~ '.png') }}\" class=\"img-fluid\" alt=\"{{ schedule.matchEntity.sportType ?? 'Default' }} icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : {{ schedule.dateMatch|date('Y-m-d') }}</p>
                                                    <p class=\"mb-0\">Heure : {{ schedule.startTime|date('H:i') }} - {{ schedule.endTime|date('H:i') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"d-inline-block h4 mb-3\">
                                            {% if schedule.matchEntity %}
                                                {{ schedule.matchEntity.c1 }} contre {{ schedule.matchEntity.c2 }}
                                            {% else %}
                                                Match à déterminer
                                            {% endif %}
                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> {{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}<br>
                                            {% if schedule.matchEntity and schedule.matchEntity.sportType %}
                                                <strong>Sport :</strong> {{ schedule.matchEntity.sportType }}
                                            {% else %}
                                                <strong>Sport :</strong> Inconnu
                                            {% endif %}
                                        </p>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
                {% if not hasNonOngoingSchedules %}
                    <div class=\"col-12 text-center\">
                        <p class=\"text-white\">Aucun horaire disponible pour le moment (hors matchs en cours).</p>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    <!-- Schedules End -->

    <!-- JavaScript for Filtering -->
    {% block javascripts %}
        {{ parent() }}
        <script>
            // Filter for Ongoing Matches
            document.querySelectorAll('#ongoing-sport-filter + .dropdown-menu .dropdown-item').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const selectedSport = this.getAttribute('data-value');
                    const dropdownButton = document.getElementById('ongoing-sport-filter');
                    dropdownButton.textContent = this.textContent; // Update button text to selected option

                    const cards = document.querySelectorAll('#ongoing-schedules .schedule-card');
                    cards.forEach(card => {
                        const sportType = card.getAttribute('data-sport-type');
                        if (selectedSport === 'all' || sportType === selectedSport) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    // Move the selected sport to the top of the dropdown
                    const dropdownMenu = this.closest('.dropdown-menu');
                    const items = Array.from(dropdownMenu.querySelectorAll('.dropdown-item'));
                    const selectedItem = items.find(item => item.getAttribute('data-value') === selectedSport);
                    if (selectedItem && selectedSport !== 'all') {
                        dropdownMenu.removeChild(selectedItem);
                        dropdownMenu.insertBefore(selectedItem, items[1]); // After \"Tous\"
                    }
                });
            });

            // Filter for All Schedules
            document.querySelectorAll('#all-sport-filter + .dropdown-menu .dropdown-item').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const selectedSport = this.getAttribute('data-value');
                    const dropdownButton = document.getElementById('all-sport-filter');
                    dropdownButton.textContent = this.textContent; // Update button text to selected option

                    const cards = document.querySelectorAll('#all-schedules .schedule-card');
                    cards.forEach(card => {
                        const sportType = card.getAttribute('data-sport-type');
                        if (selectedSport === 'all' || sportType === selectedSport) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    // Move the selected sport to the top of the dropdown
                    const dropdownMenu = this.closest('.dropdown-menu');
                    const items = Array.from(dropdownMenu.querySelectorAll('.dropdown-item'));
                    const selectedItem = items.find(item => item.getAttribute('data-value') === selectedSport);
                    if (selectedItem && selectedSport !== 'all') {
                        dropdownMenu.removeChild(selectedItem);
                        dropdownMenu.insertBefore(selectedItem, items[1]); // After \"Tous\"
                    }
                });
            });
        </script>
    {% endblock %}
{% endblock %}", "schedule/mainF.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\schedule\\mainF.html.twig");
    }
}
