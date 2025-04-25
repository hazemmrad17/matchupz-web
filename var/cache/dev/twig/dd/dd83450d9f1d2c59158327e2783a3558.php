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
            position: relative; /* Positioning context for the GIF and News button */
        }
        .live-gif {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right */
            width: 80px; /* Adjust size as needed */
            height: 80px;
            z-index: 10; /* Ensure it’s above other content */
        }
        .news-button {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right, same as live-gif */
            z-index: 10; /* Ensure it’s above other content */
            background-color: #007bff; /* Primary color to match theme */
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .news-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .news-button:disabled {
            background-color: #6c757d; /* Grayed out when disabled */
            cursor: not-allowed;
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 90
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
        // line 102
        $context["validSportTypes"] = ["Football", "Basketball", "Tennis", "Handball", "Volleyball", "Rugby", "Padel"];
        // line 103
        yield "
            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                ";
        // line 108
        yield "                ";
        $context["allOngoingSportTypes"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 108, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 108, $this->source); })()), "matchEntity", [], "any", false, false, false, 108) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 108, $this->source); })()), "matchEntity", [], "any", false, false, false, 108), "sportType", [], "any", false, false, false, 108)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 108, $this->source); })()), "matchEntity", [], "any", false, false, false, 108), "sportType", [], "any", false, false, false, 108), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 108, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 108, $this->source); })()), "matchEntity", [], "any", false, false, false, 108), "sportType", [], "any", false, false, false, 108)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 108, $this->source); })()) != "Unknown"); }));
        // line 109
        yield "                ";
        // line 110
        yield "                ";
        $context["ongoingSportTypes"] = [];
        // line 111
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allOngoingSportTypes"]) || array_key_exists("allOngoingSportTypes", $context) ? $context["allOngoingSportTypes"] : (function () { throw new RuntimeError('Variable "allOngoingSportTypes" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 112
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 112, $this->source); })()))) {
                // line 113
                yield "                        ";
                $context["ongoingSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 113, $this->source); })()), [$context["sportType"]]);
                // line 114
                yield "                    ";
            }
            // line 115
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 116, $this->source); })())) > 0)) {
            // line 117
            yield "                    <div class=\"filter-container\">
                        <label for=\"ongoing-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"ongoing-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"ongoing-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSportTypes"]) || array_key_exists("ongoingSportTypes", $context) ? $context["ongoingSportTypes"] : (function () { throw new RuntimeError('Variable "ongoingSportTypes" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 126
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
            // line 128
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 128, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "matchEntity", [], "any", false, false, false, 128) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "matchEntity", [], "any", false, false, false, 128), "sportType", [], "any", false, false, false, 128)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "matchEntity", [], "any", false, false, false, 128), "sportType", [], "any", false, false, false, 128), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 128, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "matchEntity", [], "any", false, false, false, 128), "sportType", [], "any", false, false, false, 128)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 128, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 129
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</a></li>
                                ";
            }
            // line 131
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 135
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 135, $this->source); })())) > 0)) {
            // line 136
            yield "                    <div class=\"row gy-4 gx-0 justify-content-center\" id=\"ongoing-schedules\">
                        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 137, $this->source); })()));
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
                // line 138
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 138) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 138) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 138), "sportType", [], "any", false, false, false, 138)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 138), "sportType", [], "any", false, false, false, 138), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 138, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 138), "sportType", [], "any", false, false, false, 138), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 143) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 143), "sportType", [], "any", false, false, false, 143))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 143), "sportType", [], "any", false, false, false, 143)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 143), "sportType", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 143), "sportType", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 143), "sportType", [], "any", false, false, false, 143), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 147), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 148), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 148), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 153
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 153)) {
                    // line 154
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 154), "c1", [], "any", false, false, false, 154), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 154), "c2", [], "any", false, false, false, 154), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 156
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 158
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 160
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 160), "nomEspace", [], "any", false, false, false, 160), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 161) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 161), "sportType", [], "any", false, false, false, 161))) {
                    // line 162
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 162), "sportType", [], "any", false, false, false, 162), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 164
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 166
                yield "                                        </p>
                                        <a href=\"";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 167)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        <img src=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/live.gif"), "html", null, true);
                yield "\" alt=\"Live Indicator\" class=\"live-gif\">
                                        ";
                // line 171
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 171) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 171), "c1", [], "any", false, false, false, 171)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 171), "c2", [], "any", false, false, false, 171))) {
                    // line 172
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_news", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 172)]), "html", null, true);
                    yield "\" class=\"news-button\">News</a>
                                        ";
                } else {
                    // line 174
                    yield "                                            <button class=\"news-button\" disabled>News</button>
                                        ";
                }
                // line 176
                yield "                                    </div>
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
            // line 180
            yield "                    </div>
                ";
        } else {
            // line 182
            yield "                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                ";
        }
        // line 184
        yield "            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                ";
        // line 189
        $context["ongoingIds"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 189, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 189, $this->source); })()), "idSchedule", [], "any", false, false, false, 189); }), ",");
        // line 190
        yield "                ";
        // line 191
        yield "                ";
        $context["allSportTypesRaw"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 191, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 191, $this->source); })()), "matchEntity", [], "any", false, false, false, 191) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 191, $this->source); })()), "matchEntity", [], "any", false, false, false, 191), "sportType", [], "any", false, false, false, 191)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 191, $this->source); })()), "matchEntity", [], "any", false, false, false, 191), "sportType", [], "any", false, false, false, 191), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 191, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 191, $this->source); })()), "matchEntity", [], "any", false, false, false, 191), "sportType", [], "any", false, false, false, 191)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 191, $this->source); })()) != "Unknown"); }));
        // line 192
        yield "                ";
        // line 193
        yield "                ";
        $context["allSportTypes"] = [];
        // line 194
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypesRaw"]) || array_key_exists("allSportTypesRaw", $context) ? $context["allSportTypesRaw"] : (function () { throw new RuntimeError('Variable "allSportTypesRaw" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
            // line 195
            yield "                    ";
            if (!CoreExtension::inFilter($context["sportType"], (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 195, $this->source); })()))) {
                // line 196
                yield "                        ";
                $context["allSportTypes"] = Twig\Extension\CoreExtension::merge((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 196, $this->source); })()), [$context["sportType"]]);
                // line 197
                yield "                    ";
            }
            // line 198
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sportType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 199, $this->source); })())) > 0)) {
            // line 200
            yield "                    <div class=\"filter-container\">
                        <label for=\"all-sport-filter\">Filtrer par sport :</label>
                        <div class=\"dropdown\">
                            <button class=\"btn dropdown-toggle\" type=\"button\" id=\"all-sport-filter\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Tous
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"all-sport-filter\">
                                <li><a class=\"dropdown-item\" href=\"#\" data-value=\"all\">Tous</a></li>
                                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSportTypes"]) || array_key_exists("allSportTypes", $context) ? $context["allSportTypes"] : (function () { throw new RuntimeError('Variable "allSportTypes" does not exist.', 208, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sportType"]) {
                // line 209
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
            // line 211
            yield "                                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 211, $this->source); })()), function ($__schedule__) use ($context, $macros) { $context["schedule"] = $__schedule__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 211, $this->source); })()), "matchEntity", [], "any", false, false, false, 211) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 211, $this->source); })()), "matchEntity", [], "any", false, false, false, 211), "sportType", [], "any", false, false, false, 211)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 211, $this->source); })()), "matchEntity", [], "any", false, false, false, 211), "sportType", [], "any", false, false, false, 211), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 211, $this->source); })())))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 211, $this->source); })()), "matchEntity", [], "any", false, false, false, 211), "sportType", [], "any", false, false, false, 211)) : ("Unknown")); }), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 211, $this->source); })()) == "Unknown"); })) > 0)) {
                // line 212
                yield "                                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"Unknown\">Inconnu</li>
                                ";
            }
            // line 214
            yield "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 218
        yield "                ";
        $context["hasNonOngoingSchedules"] = false;
        // line 219
        yield "                <div class=\"row gy-4 gx-0 justify-content-center\" id=\"all-schedules\">
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 220, $this->source); })()));
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
            // line 221
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 221), (isset($context["ongoingIds"]) || array_key_exists("ongoingIds", $context) ? $context["ongoingIds"] : (function () { throw new RuntimeError('Variable "ongoingIds" does not exist.', 221, $this->source); })()))) {
                // line 222
                yield "                            ";
                $context["hasNonOngoingSchedules"] = true;
                // line 223
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp schedule-card\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 223) % 3) * 0.2)), "html", null, true);
                yield "s\" data-sport-type=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 223) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 223), "sportType", [], "any", false, false, false, 223)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 223), "sportType", [], "any", false, false, false, 223), (isset($context["validSportTypes"]) || array_key_exists("validSportTypes", $context) ? $context["validSportTypes"] : (function () { throw new RuntimeError('Variable "validSportTypes" does not exist.', 223, $this->source); })())))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 223), "sportType", [], "any", false, false, false, 223), "html", null, true)) : ("Unknown"));
                yield "\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228), "sportType", [], "any", false, false, false, 228))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228), "sportType", [], "any", false, false, false, 228)) : ("default"))) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, true, false, 228), "sportType", [], "any", true, true, false, 228) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228), "sportType", [], "any", false, false, false, 228)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 228), "sportType", [], "any", false, false, false, 228), "html", null, true)) : ("Default"));
                yield " icon\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 232), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 233), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 233), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 237)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 238
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 238)) {
                    // line 239
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 239), "c1", [], "any", false, false, false, 239), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 239), "c2", [], "any", false, false, false, 239), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 241
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 243
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 245
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 245)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 245), "nomEspace", [], "any", false, false, false, 245), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 246
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 246) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 246), "sportType", [], "any", false, false, false, 246))) {
                    // line 247
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 247), "sportType", [], "any", false, false, false, 247), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 249
                    yield "                                                <strong>Sport :</strong> Inconnu
                                            ";
                }
                // line 251
                yield "                                        </p>
                                        <a href=\"";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 252)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        ";
                // line 255
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255), "c1", [], "any", false, false, false, 255)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 255), "c2", [], "any", false, false, false, 255))) {
                    // line 256
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_news", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 256)]), "html", null, true);
                    yield "\" class=\"news-button\">News</a>
                                        ";
                } else {
                    // line 258
                    yield "                                            <button class=\"news-button\" disabled>News</button>
                                        ";
                }
                // line 260
                yield "                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 264
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
        // line 265
        yield "                </div>
                ";
        // line 266
        if ( !(isset($context["hasNonOngoingSchedules"]) || array_key_exists("hasNonOngoingSchedules", $context) ? $context["hasNonOngoingSchedules"] : (function () { throw new RuntimeError('Variable "hasNonOngoingSchedules" does not exist.', 266, $this->source); })())) {
            // line 267
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-white\">Aucun horaire disponible pour le moment (hors matchs en cours).</p>
                    </div>
                ";
        }
        // line 271
        yield "            </div>
        </div>
    </div>
    <!-- Schedules End -->

    <!-- JavaScript for Filtering -->
    ";
        // line 277
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

        // line 278
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
        return array (  710 => 278,  687 => 277,  679 => 271,  673 => 267,  671 => 266,  668 => 265,  654 => 264,  648 => 260,  644 => 258,  638 => 256,  636 => 255,  630 => 252,  627 => 251,  623 => 249,  617 => 247,  615 => 246,  611 => 245,  607 => 243,  603 => 241,  595 => 239,  593 => 238,  589 => 237,  580 => 233,  576 => 232,  567 => 228,  556 => 223,  553 => 222,  550 => 221,  533 => 220,  530 => 219,  527 => 218,  521 => 214,  517 => 212,  514 => 211,  503 => 209,  499 => 208,  489 => 200,  486 => 199,  480 => 198,  477 => 197,  474 => 196,  471 => 195,  466 => 194,  463 => 193,  461 => 192,  458 => 191,  456 => 190,  454 => 189,  447 => 184,  443 => 182,  439 => 180,  422 => 176,  418 => 174,  412 => 172,  410 => 171,  406 => 170,  400 => 167,  397 => 166,  393 => 164,  387 => 162,  385 => 161,  381 => 160,  377 => 158,  373 => 156,  365 => 154,  363 => 153,  359 => 152,  350 => 148,  346 => 147,  337 => 143,  326 => 138,  309 => 137,  306 => 136,  303 => 135,  297 => 131,  293 => 129,  290 => 128,  279 => 126,  275 => 125,  265 => 117,  262 => 116,  256 => 115,  253 => 114,  250 => 113,  247 => 112,  242 => 111,  239 => 110,  237 => 109,  234 => 108,  228 => 103,  226 => 102,  211 => 90,  204 => 85,  191 => 84,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Horaires{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .courses-item-inner {
            position: relative; /* Positioning context for the GIF and News button */
        }
        .live-gif {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right */
            width: 80px; /* Adjust size as needed */
            height: 80px;
            z-index: 10; /* Ensure it’s above other content */
        }
        .news-button {
            position: absolute;
            bottom: 10px; /* Distance from the bottom */
            right: 10px; /* Distance from the right, same as live-gif */
            z-index: 10; /* Ensure it’s above other content */
            background-color: #007bff; /* Primary color to match theme */
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .news-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .news-button:disabled {
            background-color: #6c757d; /* Grayed out when disabled */
            cursor: not-allowed;
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
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        <img src=\"{{ asset('img/live.gif') }}\" alt=\"Live Indicator\" class=\"live-gif\">
                                        {% if schedule.matchEntity and schedule.matchEntity.c1 and schedule.matchEntity.c2 %}
                                            <a href=\"{{ path('schedule_news', {'idSchedule': schedule.idSchedule}) }}\" class=\"news-button\">News</a>
                                        {% else %}
                                            <button class=\"news-button\" disabled>News</button>
                                        {% endif %}
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
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                        {% if schedule.matchEntity and schedule.matchEntity.c1 and schedule.matchEntity.c2 %}
                                            <a href=\"{{ path('schedule_news', {'idSchedule': schedule.idSchedule}) }}\" class=\"news-button\">News</a>
                                        {% else %}
                                            <button class=\"news-button\" disabled>News</button>
                                        {% endif %}
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
