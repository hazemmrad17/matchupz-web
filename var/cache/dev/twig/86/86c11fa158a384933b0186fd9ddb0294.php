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

/* schedule/showF.html.twig */
class __TwigTemplate_395c08103e42ebefec063904fe0a8fb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/showF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/showF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "schedule/showF.html.twig", 1);
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

        yield "Matchupz - Détails de l'horaire";
        
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
        .vibrant-team {
            font-weight: bold;
            background: linear-gradient(45deg, #dc3545, #ff6b6b); /* Vibrant red gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            animation: flow-glow 2s ease-in-out infinite; /* Flowing animation */
        }
        @keyframes flow-glow {
            0% {
                filter: brightness(100%) drop-shadow(0 0 5px rgba(220, 53, 69, 0.5));
            }
            50% {
                filter: brightness(120%) drop-shadow(0 0 10px rgba(220, 53, 69, 0.8));
            }
            100% {
                filter: brightness(100%) drop-shadow(0 0 5px rgba(220, 53, 69, 0.5));
            }
        }
        .video-placeholder {
            position: relative;
            background: #000;
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            border-radius: 12px;
            overflow: hidden;
            transform: scale(1.1); /* Slightly larger scale */
            margin: 20px 0; /* Extra spacing */
        }
        .video-placeholder::before {
            content: '\\25B6'; /* Play button Unicode */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px; /* Larger play button */
            color: #fff;
            opacity: 0.8;
            text-shadow: 0 0 12px rgba(0, 0, 0, 0.6);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Détails de l'horaire</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_mainF");
        yield "\">Horaires</a></li>
                <li class=\"breadcrumb-item active text-primary\">Détails</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedule Details Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"goal-content\">
                        <h4 class=\"text-primary\">Détails du match</h4>
                        <h1 class=\"display-4 mb-4\">
                            ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 73, $this->source); })()), "matchEntity", [], "any", false, false, false, 73)) {
            // line 74
            yield "                                <span class=\"vibrant-team\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 74, $this->source); })()), "matchEntity", [], "any", false, false, false, 74), "c1", [], "any", false, false, false, 74), "html", null, true);
            yield "</span> contre <span class=\"vibrant-team\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 74, $this->source); })()), "matchEntity", [], "any", false, false, false, 74), "c2", [], "any", false, false, false, 74), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 76
            yield "                                Match à déterminer
                            ";
        }
        // line 78
        yield "                        </h1>
                        <div class=\"goal-item d-flex p-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Date et heure</h4>
                                <p class=\"text-white mb-0\">
                                    ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 88, $this->source); })()), "dateMatch", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true);
        yield " de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 88, $this->source); })()), "startTime", [], "any", false, false, false, 88), "H:i"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 88, $this->source); })()), "endTime", [], "any", false, false, false, 88), "H:i"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"goal-item d-flex p-4 mb-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Lieu et sport</h4>
                                <p class=\"text-white mb-0\">
                                    <strong>Lieu :</strong> ";
        // line 101
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 101, $this->source); })()), "espaceSportif", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 101, $this->source); })()), "espaceSportif", [], "any", false, false, false, 101), "nomEspace", [], "any", false, false, false, 101), "html", null, true)) : ("N/A"));
        yield "<br>
                                    ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 102, $this->source); })()), "matchEntity", [], "any", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 102, $this->source); })()), "matchEntity", [], "any", false, false, false, 102), "sportType", [], "any", false, false, false, 102))) {
            // line 103
            yield "                                        <strong>Sport :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 103, $this->source); })()), "matchEntity", [], "any", false, false, false, 103), "sportType", [], "any", false, false, false, 103), "html", null, true);
            yield "
                                    ";
        }
        // line 105
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"ms-1\">
                            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_mainF");
        yield "\" class=\"btn btn-primary py-3 px-5 ms-2\">
                                <span>Retour aux horaires</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <div class=\"video-placeholder\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Schedule Details End -->
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
        return "schedule/showF.html.twig";
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
        return array (  266 => 109,  260 => 105,  254 => 103,  252 => 102,  248 => 101,  239 => 95,  225 => 88,  216 => 82,  210 => 78,  206 => 76,  198 => 74,  196 => 73,  178 => 58,  170 => 52,  157 => 51,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Détails de l'horaire{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .vibrant-team {
            font-weight: bold;
            background: linear-gradient(45deg, #dc3545, #ff6b6b); /* Vibrant red gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            animation: flow-glow 2s ease-in-out infinite; /* Flowing animation */
        }
        @keyframes flow-glow {
            0% {
                filter: brightness(100%) drop-shadow(0 0 5px rgba(220, 53, 69, 0.5));
            }
            50% {
                filter: brightness(120%) drop-shadow(0 0 10px rgba(220, 53, 69, 0.8));
            }
            100% {
                filter: brightness(100%) drop-shadow(0 0 5px rgba(220, 53, 69, 0.5));
            }
        }
        .video-placeholder {
            position: relative;
            background: #000;
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            border-radius: 12px;
            overflow: hidden;
            transform: scale(1.1); /* Slightly larger scale */
            margin: 20px 0; /* Extra spacing */
        }
        .video-placeholder::before {
            content: '\\25B6'; /* Play button Unicode */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px; /* Larger play button */
            color: #fff;
            opacity: 0.8;
            text-shadow: 0 0 12px rgba(0, 0, 0, 0.6);
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Détails de l'horaire</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('schedule_mainF') }}\">Horaires</a></li>
                <li class=\"breadcrumb-item active text-primary\">Détails</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedule Details Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"goal-content\">
                        <h4 class=\"text-primary\">Détails du match</h4>
                        <h1 class=\"display-4 mb-4\">
                            {% if schedule.matchEntity %}
                                <span class=\"vibrant-team\">{{ schedule.matchEntity.c1 }}</span> contre <span class=\"vibrant-team\">{{ schedule.matchEntity.c2 }}</span>
                            {% else %}
                                Match à déterminer
                            {% endif %}
                        </h1>
                        <div class=\"goal-item d-flex p-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"{{ asset('img/icon-1.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Date et heure</h4>
                                <p class=\"text-white mb-0\">
                                    {{ schedule.dateMatch|date('Y-m-d') }} de {{ schedule.startTime|date('H:i') }} à {{ schedule.endTime|date('H:i') }}
                                </p>
                            </div>
                        </div>
                        <div class=\"goal-item d-flex p-4 mb-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"{{ asset('img/icon-6.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Lieu et sport</h4>
                                <p class=\"text-white mb-0\">
                                    <strong>Lieu :</strong> {{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}<br>
                                    {% if schedule.matchEntity and schedule.matchEntity.sportType %}
                                        <strong>Sport :</strong> {{ schedule.matchEntity.sportType }}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                        <div class=\"ms-1\">
                            <a href=\"{{ path('schedule_mainF') }}\" class=\"btn btn-primary py-3 px-5 ms-2\">
                                <span>Retour aux horaires</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <div class=\"video-placeholder\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Schedule Details End -->
{% endblock %}", "schedule/showF.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\schedule\\showF.html.twig");
    }
}
