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
            top: -90px; /* Position above the News button (button height + spacing) */
            right: 0;
            width: 80px; /* Keep size as-is */
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
            background-color: rgb(255, 55, 55); /* Primary color to match the theme */
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .filter-container .dropdown-toggle:hover {
            background-color: rgb(200, 2, 2); /* Darker shade on hover */
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
        /* Button container to align buttons on opposite sides */
        .button-container {
            display: flex;
            justify-content: space-between; /* Push buttons to opposite sides */
            align-items: center; /* Vertically center the buttons */
            margin-top: 10px; /* Space above the buttons */
            width: 100%; /* Ensure it takes full width */
        }
        /* Container for News button and Live GIF */
        .news-container {
            position: relative; /* Positioning context for the Live GIF */
            display: inline-block; /* Ensure it wraps tightly around the News button */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 82
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

            <!-- Define valid sport types -->
            ";
        // line 94
        $context["validSportTypes"] = ["Football", "Basketball", "Tennis", "Handball", "Volleyball", "Rugby", "Padel"];
        // line 95
        yield "
            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                ";
        // line 100
        yield "                ";
        $context["allOngoingSportTypes"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 100, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 100, $this->source); })()), "matchEntity", [], "any", false, false, false, 100) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 100, $this->source); })()), "matchEntity", [], "any", false, false, false, 100), "sportType", [], "any", false, false, false, 100)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 100, $this->source); })()), "matchEntity", [], "any", false, false, false, 100), "sportType", [], "any", false, false, false, 100), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 100, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 100, $this->source); })()), "matchEntity", [], "any", false, false, false, 100), "sportType", [], "any", false, false, false, 100)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 100, $this->source); })()) != "Unknown"); }));
        // line 101
        yield "                ";
        // line 102
        yield "                ";
        $context["ongoingSportTypes"] = [];
        // line 103
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allOngoingSportTypes"]) || array_key_exists("allOngoingSportTypes", $context) ? $context["allOngoingSportTypes"] : (function () { throw new RuntimeError('Variable "allOngoingSportTypes" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 104
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 104, $this->source); })()))) {
                // line 105
                yield "                        ";
                $context["ongoingSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 105, $this->source); })()), [$context["sportType"]]);
                // line 106
                yield "                    ";
            }
            // line 107
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 108, $this->source); })())) > 0)) {
            // line 109
            yield "                    <div class=\"filter-container\">
                        <label for=\"ongoing-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"ongoing-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"ongoing-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 118
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
            // line 120
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 120, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 120, $this->source); })()), "matchEntity", [], "any", false, false, false, 120) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 120, $this->source); })()), "matchEntity", [], "any", false, false, false, 120), "sportType", [], "any", false, false, false, 120)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 120, $this->source); })()), "matchEntity", [], "any", false, false, false, 120), "sportType", [], "any", false, false, false, 120), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 120, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 120, $this->source); })()), "matchEntity", [], "any", false, false, false, 120), "sportType", [], "any", false, false, false, 120)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 120, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 121
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                ";
            }
            // line 123
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 127
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 127, $this->source); })())) > 0)) {
            // line 128
            yield "                    <div class=\"row gy-4 gx-0 justify-content-center\" id=\"ongoing-schedules\">
                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 129, $this->source); })()));
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
                // line 130
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 130) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 130), "sportType", [], "any", false, false, false, 130)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 130), "sportType", [], "any", false, false, false, 130), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 130, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 130), "sportType", [], "any", false, false, false, 130), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 135) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 135), "sportType", [], "any", false, false, false, 135))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 135), "sportType", [], "any", false, false, false, 135)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 135), "sportType", [], "any", true, true, false, 135) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 135), "sportType", [], "any", false, false, false, 135)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 135), "sportType", [], "any", false, false, false, 135), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 139), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 140), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 140), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 145
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 145)) {
                    // line 146
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 146), "c1", [], "any", false, false, false, 146), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 146), "c2", [], "any", false, false, false, 146), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 148
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 150
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 152
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 152)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 152), "nomEspace", [], "any", false, false, false, 152), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 153
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 153) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 153), "sportType", [], "any", false, false, false, 153))) {
                    // line 154
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 154), "sportType", [], "any", false, false, false, 154), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 156
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 158
                yield "                                        </p>
                                        ";
                // line 160
                yield "                                        <div class=\"button-container\">
                                            <a href=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 161)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                                <span>Voir les détails</span>
                                            </a>
                                            <div class=\"news-container\">
                                                <img src=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/live.gif"), "html", null, true);
                yield "\" alt=\"Live Indicator\" class=\"live-gif\">
                                                ";
                // line 166
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 166) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 166), "c1", [], "any", false, false, false, 166)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 166), "c2", [], "any", false, false, false, 166))) {
                    // line 167
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_news", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 167)]), "html", null, true);
                    yield "\" class=\"btn btn-primary py-2 px-4\">News</a>
                                                ";
                } else {
                    // line 169
                    yield "                                                    <button class=\"btn btn-primary py-2 px-4\" disabled>News</button>
                                                ";
                }
                // line 171
                yield "                                            </div>
                                        </div>
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
            // line 177
            yield "                    </div>
                ";
        } else {
            // line 179
            yield "                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                ";
        }
        // line 181
        yield "            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                ";
        // line 186
        $context["ongoingIds"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 186, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 186, $this->source); })()), "idSchedule", [], "any", false, false, false, 186); }), ",");
        // line 187
        yield "                ";
        // line 188
        yield "                ";
        $context["allSportTypesRaw"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 188, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 188, $this->source); })()), "matchEntity", [], "any", false, false, false, 188) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 188, $this->source); })()), "matchEntity", [], "any", false, false, false, 188), "sportType", [], "any", false, false, false, 188)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 188, $this->source); })()), "matchEntity", [], "any", false, false, false, 188), "sportType", [], "any", false, false, false, 188), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 188, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 188, $this->source); })()), "matchEntity", [], "any", false, false, false, 188), "sportType", [], "any", false, false, false, 188)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 188, $this->source); })()) != "Unknown"); }));
        // line 189
        yield "                ";
        // line 190
        yield "                ";
        $context["allSportTypes"] = [];
        // line 191
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypesRaw"]) || array_key_exists("allSportTypesRaw", $context) ? $context["allSportTypesRaw"] : (function () { throw new RuntimeError('Variable "allSportTypesRaw" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 192
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 192, $this->source); })()))) {
                // line 193
                yield "                        ";
                $context["allSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 193, $this->source); })()), [$context["sportType"]]);
                // line 194
                yield "                    ";
            }
            // line 195
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 196, $this->source); })())) > 0)) {
            // line 197
            yield "                    <div class=\"filter-container\">
                        <label for=\"all-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"all-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"all-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 205, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 206
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
            // line 208
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 208, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 208, $this->source); })()), "matchEntity", [], "any", false, false, false, 208) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 208, $this->source); })()), "matchEntity", [], "any", false, false, false, 208), "sportType", [], "any", false, false, false, 208)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 208, $this->source); })()), "matchEntity", [], "any", false, false, false, 208), "sportType", [], "any", false, false, false, 208), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 208, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 208, $this->source); })()), "matchEntity", [], "any", false, false, false, 208), "sportType", [], "any", false, false, false, 208)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 208, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 209
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</li>
                                ";
            }
            // line 211
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 215
        yield "                ";
        $context["hasNonOngoingSchedules"] = false;
        // line 216
        yield "                <div class=\"row gy-4 gx-0 justify-content-center\" id=\"all-schedules\">
                    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 217, $this->source); })()));
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
            // line 218
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 218), (isset($context["ongoingIds"]) || array_key_exists("ongoingIds", $context) ? $context["ongoingIds"] : (function () { throw new RuntimeError('Variable "ongoingIds" does not exist.', 218, $this->source); })()))) {
                // line 219
                yield "                            ";
                $context["hasNonOngoingSchedules"] = true;
                // line 220
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 220) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220), "sportType", [], "any", false, false, false, 220)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220), "sportType", [], "any", false, false, false, 220), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 220, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 220), "sportType", [], "any", false, false, false, 220), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 225) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 225), "sportType", [], "any", false, false, false, 225))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 225), "sportType", [], "any", false, false, false, 225)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 225), "sportType", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 225), "sportType", [], "any", false, false, false, 225)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 225), "sportType", [], "any", false, false, false, 225), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 229), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 230), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 230), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 234)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 235
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 235)) {
                    // line 236
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 236), "c1", [], "any", false, false, false, 236), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 236), "c2", [], "any", false, false, false, 236), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 238
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 240
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 242
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 242)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 242), "nomEspace", [], "any", false, false, false, 242), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 243
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 243) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 243), "sportType", [], "any", false, false, false, 243))) {
                    // line 244
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 244), "sportType", [], "any", false, false, false, 244), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 246
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 248
                yield "                                        </p>
                                        ";
                // line 250
                yield "                                        <div class=\"button-container\">
                                            <a href=\"";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 251)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                                <span>Voir les détails</span>
                                            </a>
                                            <div class=\"news-container\">
                                                ";
                // line 255
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255), "c1", [], "any", false, false, false, 255)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255), "c2", [], "any", false, false, false, 255))) {
                    // line 256
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_news", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 256)]), "html", null, true);
                    yield "\" class=\"btn btn-primary py-2 px-4\">News</a>
                                                ";
                } else {
                    // line 258
                    yield "                                                    <button class=\"btn btn-primary py-2 px-4\" disabled>News</button>
                                                ";
                }
                // line 260
                yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 266
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
        // line 267
        yield "                </div>
                ";
        // line 268
        if ( !(isset($context["hasNonOngoingSchedules"]) || array_key_exists("hasNonOngoingSchedules", $context) ? $context["hasNonOngoingSchedules"] : (function () { throw new RuntimeError('Variable "hasNonOngoingSchedules" does not exist.', 268, $this->source); })())) {
            // line 269
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-white\">Aucun horaire disponible pour le moment (hors matchs en cours).</p>
                    </div>
                ";
        }
        // line 273
        yield "            </div>
        </div>
    </div>
    <!-- Schedules End -->

    <!-- JavaScript for Filtering -->
    ";
        // line 279
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

        // line 280
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
        return array (  714 => 280,  691 => 279,  683 => 273,  677 => 269,  675 => 268,  672 => 267,  658 => 266,  650 => 260,  646 => 258,  640 => 256,  638 => 255,  631 => 251,  628 => 250,  625 => 248,  621 => 246,  615 => 244,  613 => 243,  609 => 242,  605 => 240,  601 => 238,  593 => 236,  591 => 235,  587 => 234,  578 => 230,  574 => 229,  565 => 225,  554 => 220,  551 => 219,  548 => 218,  531 => 217,  528 => 216,  525 => 215,  519 => 211,  515 => 209,  512 => 208,  501 => 206,  497 => 205,  487 => 197,  484 => 196,  478 => 195,  475 => 194,  472 => 193,  469 => 192,  464 => 191,  461 => 190,  459 => 189,  456 => 188,  454 => 187,  452 => 186,  445 => 181,  441 => 179,  437 => 177,  418 => 171,  414 => 169,  408 => 167,  406 => 166,  402 => 165,  395 => 161,  392 => 160,  389 => 158,  385 => 156,  379 => 154,  377 => 153,  373 => 152,  369 => 150,  365 => 148,  357 => 146,  355 => 145,  351 => 144,  342 => 140,  338 => 139,  329 => 135,  318 => 130,  301 => 129,  298 => 128,  295 => 127,  289 => 123,  285 => 121,  282 => 120,  271 => 118,  267 => 117,  257 => 109,  254 => 108,  248 => 107,  245 => 106,  242 => 105,  239 => 104,  234 => 103,  231 => 102,  229 => 101,  226 => 100,  220 => 95,  218 => 94,  203 => 82,  196 => 77,  183 => 76,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
            top: -90px; /* Position above the News button (button height + spacing) */
            right: 0;
            width: 80px; /* Keep size as-is */
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
            background-color: rgb(255, 55, 55); /* Primary color to match the theme */
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .filter-container .dropdown-toggle:hover {
            background-color: rgb(200, 2, 2); /* Darker shade on hover */
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
        /* Button container to align buttons on opposite sides */
        .button-container {
            display: flex;
            justify-content: space-between; /* Push buttons to opposite sides */
            align-items: center; /* Vertically center the buttons */
            margin-top: 10px; /* Space above the buttons */
            width: 100%; /* Ensure it takes full width */
        }
        /* Container for News button and Live GIF */
        .news-container {
            position: relative; /* Positioning context for the Live GIF */
            display: inline-block; /* Ensure it wraps tightly around the News button */
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

            <!-- Define valid sport types -->
            {% set validSportTypes = ['Football', 'Basketball', 'Tennis', 'Handball', 'Volleyball', 'Rugby', 'Padel'] %}

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
                                        {# Button container to align buttons on opposite sides #}
                                        <div class=\"button-container\">
                                            <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                                <span>Voir les détails</span>
                                            </a>
                                            <div class=\"news-container\">
                                                <img src=\"{{ asset('img/live.gif') }}\" alt=\"Live Indicator\" class=\"live-gif\">
                                                {% if schedule.matchEntity and schedule.matchEntity.c1 and schedule.matchEntity.c2 %}
                                                    <a href=\"{{ path('schedule_news', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">News</a>
                                                {% else %}
                                                    <button class=\"btn btn-primary py-2 px-4\" disabled>News</button>
                                                {% endif %}
                                            </div>
                                        </div>
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
                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</li>
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
                                        {# Button container to align buttons on opposite sides #}
                                        <div class=\"button-container\">
                                            <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                                <span>Voir les détails</span>
                                            </a>
                                            <div class=\"news-container\">
                                                {% if schedule.matchEntity and schedule.matchEntity.c1 and schedule.matchEntity.c2 %}
                                                    <a href=\"{{ path('schedule_news', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">News</a>
                                                {% else %}
                                                    <button class=\"btn btn-primary py-2 px-4\" disabled>News</button>
                                                {% endif %}
                                            </div>
                                        </div>
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
