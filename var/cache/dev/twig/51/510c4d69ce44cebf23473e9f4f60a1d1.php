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
class __TwigTemplate_a491b30f51facc10b8275406a0cb5903 extends Template
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
            margin: 30px 0; /* Increased margin to account for scaling */
            z-index: 1; /* Ensure the placeholder is not overlapped */
            transform: scale(1.1); /* Slightly enlarge the video by 10% */
            transform-origin: center; /* Scale from the center */
        }
        .video-placeholder iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            z-index: 2; /* Ensure the iframe is clickable */
        }
        .video-placeholder-text {
            position: absolute;
            top: 50%; /* Center vertically */
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            opacity: 0.9;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
            padding: 0 20px;
            display: none; /* Hidden by default, shown via JS if video fails */
            z-index: 3; /* Ensure the text is visible if shown */
        }
        /* Fix interaction issues and style the Disqus section */
        .row .col-12 #disqus_thread {
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #e0e0e0; /* Distinct light-gray background */
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd; /* Subtle border to separate it */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            position: relative;
            z-index: 1000; /* Ensure Disqus is above other elements */
            pointer-events: auto; /* Ensure clicks are registered */
        }
        /* Fix potential overlap from parent containers */
        .container-fluid.goal,
        .row {
            overflow: visible;
        }
        /* Disable pointer events on potential overlapping pseudo-elements */
        .container-fluid.goal::before,
        .container-fluid.goal::after,
        .bg-breadcrumb::before,
        .bg-breadcrumb::after {
            pointer-events: none; /* Prevent background pseudo-elements from blocking clicks */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
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

        // line 92
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Détails de l'horaire</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 98
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
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 113, $this->source); })()), "matchEntity", [], "any", false, false, false, 113)) {
            // line 114
            yield "                                <span class=\"vibrant-team\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114), "c1", [], "any", false, false, false, 114), "html", null, true);
            yield "</span> contre <span class=\"vibrant-team\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "matchEntity", [], "any", false, false, false, 114), "c2", [], "any", false, false, false, 114), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 116
            yield "                                Match à déterminer
                            ";
        }
        // line 118
        yield "                        </h1>
                        <div class=\"goal-item d-flex p-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Date et heure</h4>
                                <p class=\"text-white mb-0\">
                                    ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "dateMatch", [], "any", false, false, false, 128), "Y-m-d"), "html", null, true);
        yield " de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "startTime", [], "any", false, false, false, 128), "H:i"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 128, $this->source); })()), "endTime", [], "any", false, false, false, 128), "H:i"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"goal-item d-flex p-4 mb-4\">
                            <div class=\"d-flex me-4\">
                                <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                    <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                            </div>
                            <div>
                                <h4>Lieu et sport</h4>
                                <p class=\"text-white mb-0\">
                                    <strong>Lieu :</strong> ";
        // line 141
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 141, $this->source); })()), "espaceSportif", [], "any", false, false, false, 141)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 141, $this->source); })()), "espaceSportif", [], "any", false, false, false, 141), "nomEspace", [], "any", false, false, false, 141), "html", null, true)) : ("N/A"));
        yield "<br>
                                    ";
        // line 142
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 142, $this->source); })()), "matchEntity", [], "any", false, false, false, 142) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 142, $this->source); })()), "matchEntity", [], "any", false, false, false, 142), "sportType", [], "any", false, false, false, 142))) {
            // line 143
            yield "                                        <strong>Sport :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 143, $this->source); })()), "matchEntity", [], "any", false, false, false, 143), "sportType", [], "any", false, false, false, 143), "html", null, true);
            yield "
                                    ";
        }
        // line 145
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"ms-1\">
                            <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_mainF");
        yield "\" class=\"btn btn-primary py-3 px-5 ms-2\">
                                <span>Retour aux horaires</span>
                            </a>
                            ";
        // line 152
        if ((isset($context["isFutureMatch"]) || array_key_exists("isFutureMatch", $context) ? $context["isFutureMatch"] : (function () { throw new RuntimeError('Variable "isFutureMatch" does not exist.', 152, $this->source); })())) {
            // line 153
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_add_to_google_calendar", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 153, $this->source); })()), "idSchedule", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\" class=\"btn btn-primary py-3 px-5 ms-2\">
                                    <span>Sauvegarder dans Google Calendar</span>
                                </a>
                            ";
        }
        // line 157
        yield "                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <div class=\"video-placeholder\">
                            ";
        // line 163
        if ((isset($context["isFutureMatch"]) || array_key_exists("isFutureMatch", $context) ? $context["isFutureMatch"] : (function () { throw new RuntimeError('Variable "isFutureMatch" does not exist.', 163, $this->source); })())) {
            // line 164
            yield "                                <div class=\"video-placeholder-text\">
                                    Le match n'a pas encore commencé, vous pouvez être rappelé lorsqu'il aura lieu via Google Calendar.
                                </div>
                            ";
        } elseif ((        // line 167
(isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 167, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 167, $this->source); })()), "streamURL", [], "any", false, false, false, 167)))) {
            // line 168
            yield "                                <iframe src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 168, $this->source); })()), "streamURL", [], "any", false, false, false, 168);
            yield "?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div class=\"video-placeholder-text video-fallback\">
                                    La diffusion en direct n'a pas pu être chargée.
                                </div>
                            ";
        } elseif ((( !        // line 172
(isset($context["isFutureMatch"]) || array_key_exists("isFutureMatch", $context) ? $context["isFutureMatch"] : (function () { throw new RuntimeError('Variable "isFutureMatch" does not exist.', 172, $this->source); })()) &&  !(isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 172, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 172, $this->source); })()), "URL", [], "any", false, false, false, 172)))) {
            // line 173
            yield "                                <iframe src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 173, $this->source); })()), "URL", [], "any", false, false, false, 173);
            yield "?controls=1\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div class=\"video-placeholder-text video-fallback\">
                                    La vidéo n'a pas pu être chargée.
                                </div>
                            ";
        } else {
            // line 178
            yield "                                <div class=\"video-placeholder-text\">
                                    Aucune vidéo disponible pour ce match.
                                </div>
                            ";
        }
        // line 182
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Section Start -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div id=\"disqus_thread\"></div>
                </div>
            </div>
            <!-- Comment Section End -->
        </div>
    </div>
    <!-- Schedule Details End -->

    ";
        // line 198
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

        // line 199
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <!-- Disqus Embed Code -->
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
             */
            var disqus_config = function () {
                this.page.url = window.location.href;  // Dynamically set to the current page URL
                this.page.identifier = 'schedule-";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 208, $this->source); })()), "idSchedule", [], "any", false, false, false, 208), "html", null, true);
        yield "';  // Unique identifier for each schedule
                console.log('Disqus URL:', window.location.href);
                console.log('Disqus identifier:', 'schedule-";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 210, $this->source); })()), "idSchedule", [], "any", false, false, false, 210), "html", null, true);
        yield "');
            };

            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://matchupz.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

        <!-- Existing Video Debugging Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const iframes = document.querySelectorAll('.video-placeholder iframe');
                iframes.forEach(iframe => {
                    console.log('YouTube iframe URL:', iframe.src);

                    iframe.addEventListener('click', function (e) {
                        console.log('Iframe clicked at coordinates:', e.clientX, e.clientY, '- attempting to interact with video');
                    });

                    iframe.addEventListener('error', function (e) {
                        console.error('Error loading YouTube video:', e);
                        const fallback = iframe.parentElement.querySelector('.video-fallback');
                        if (fallback) {
                            iframe.style.display = 'none';
                            fallback.style.display = 'block';
                        }
                    });

                    setTimeout(() => {
                        if (iframe.clientHeight < 50) {
                            console.warn('Video likely unavailable (iframe height too small)');
                            const fallback = iframe.parentElement.querySelector('.video-fallback');
                            if (fallback) {
                                iframe.style.display = 'none';
                                fallback.style.display = 'block';
                            }
                        }
                    }, 3000);

                    console.log('Iframe parent elements:', iframe.parentElement);
                });

                const placeholder = document.querySelector('.video-placeholder');
                if (placeholder) {
                    const computedStyle = window.getComputedStyle(placeholder);
                    console.log('Video placeholder z-index:', computedStyle.zIndex);
                    console.log('Video placeholder pointer-events:', computedStyle.pointerEvents);
                }
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
        return array (  427 => 210,  422 => 208,  409 => 199,  386 => 198,  368 => 182,  362 => 178,  353 => 173,  351 => 172,  343 => 168,  341 => 167,  336 => 164,  334 => 163,  326 => 157,  318 => 153,  316 => 152,  310 => 149,  304 => 145,  298 => 143,  296 => 142,  292 => 141,  283 => 135,  269 => 128,  260 => 122,  254 => 118,  250 => 116,  242 => 114,  240 => 113,  222 => 98,  218 => 97,  211 => 92,  198 => 91,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
            margin: 30px 0; /* Increased margin to account for scaling */
            z-index: 1; /* Ensure the placeholder is not overlapped */
            transform: scale(1.1); /* Slightly enlarge the video by 10% */
            transform-origin: center; /* Scale from the center */
        }
        .video-placeholder iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            z-index: 2; /* Ensure the iframe is clickable */
        }
        .video-placeholder-text {
            position: absolute;
            top: 50%; /* Center vertically */
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            opacity: 0.9;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
            padding: 0 20px;
            display: none; /* Hidden by default, shown via JS if video fails */
            z-index: 3; /* Ensure the text is visible if shown */
        }
        /* Fix interaction issues and style the Disqus section */
        .row .col-12 #disqus_thread {
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #e0e0e0; /* Distinct light-gray background */
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd; /* Subtle border to separate it */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            position: relative;
            z-index: 1000; /* Ensure Disqus is above other elements */
            pointer-events: auto; /* Ensure clicks are registered */
        }
        /* Fix potential overlap from parent containers */
        .container-fluid.goal,
        .row {
            overflow: visible;
        }
        /* Disable pointer events on potential overlapping pseudo-elements */
        .container-fluid.goal::before,
        .container-fluid.goal::after,
        .bg-breadcrumb::before,
        .bg-breadcrumb::after {
            pointer-events: none; /* Prevent background pseudo-elements from blocking clicks */
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Détails de l'horaire</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
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
                            {% if isFutureMatch %}
                                <a href=\"{{ path('schedule_add_to_google_calendar', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-3 px-5 ms-2\">
                                    <span>Sauvegarder dans Google Calendar</span>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <div class=\"video-placeholder\">
                            {% if isFutureMatch %}
                                <div class=\"video-placeholder-text\">
                                    Le match n'a pas encore commencé, vous pouvez être rappelé lorsqu'il aura lieu via Google Calendar.
                                </div>
                            {% elseif isOngoing and schedule.streamURL is not null %}
                                <iframe src=\"{{ schedule.streamURL|raw }}?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div class=\"video-placeholder-text video-fallback\">
                                    La diffusion en direct n'a pas pu être chargée.
                                </div>
                            {% elseif not isFutureMatch and not isOngoing and schedule.URL is not null %}
                                <iframe src=\"{{ schedule.URL|raw }}?controls=1\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                <div class=\"video-placeholder-text video-fallback\">
                                    La vidéo n'a pas pu être chargée.
                                </div>
                            {% else %}
                                <div class=\"video-placeholder-text\">
                                    Aucune vidéo disponible pour ce match.
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Section Start -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div id=\"disqus_thread\"></div>
                </div>
            </div>
            <!-- Comment Section End -->
        </div>
    </div>
    <!-- Schedule Details End -->

    {% block javascripts %}
        {{ parent() }}
        <!-- Disqus Embed Code -->
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
             */
            var disqus_config = function () {
                this.page.url = window.location.href;  // Dynamically set to the current page URL
                this.page.identifier = 'schedule-{{ schedule.idSchedule }}';  // Unique identifier for each schedule
                console.log('Disqus URL:', window.location.href);
                console.log('Disqus identifier:', 'schedule-{{ schedule.idSchedule }}');
            };

            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://matchupz.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

        <!-- Existing Video Debugging Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const iframes = document.querySelectorAll('.video-placeholder iframe');
                iframes.forEach(iframe => {
                    console.log('YouTube iframe URL:', iframe.src);

                    iframe.addEventListener('click', function (e) {
                        console.log('Iframe clicked at coordinates:', e.clientX, e.clientY, '- attempting to interact with video');
                    });

                    iframe.addEventListener('error', function (e) {
                        console.error('Error loading YouTube video:', e);
                        const fallback = iframe.parentElement.querySelector('.video-fallback');
                        if (fallback) {
                            iframe.style.display = 'none';
                            fallback.style.display = 'block';
                        }
                    });

                    setTimeout(() => {
                        if (iframe.clientHeight < 50) {
                            console.warn('Video likely unavailable (iframe height too small)');
                            const fallback = iframe.parentElement.querySelector('.video-fallback');
                            if (fallback) {
                                iframe.style.display = 'none';
                                fallback.style.display = 'block';
                            }
                        }
                    }, 3000);

                    console.log('Iframe parent elements:', iframe.parentElement);
                });

                const placeholder = document.querySelector('.video-placeholder');
                if (placeholder) {
                    const computedStyle = window.getComputedStyle(placeholder);
                    console.log('Video placeholder z-index:', computedStyle.zIndex);
                    console.log('Video placeholder pointer-events:', computedStyle.pointerEvents);
                }
            });
        </script>
    {% endblock %}
{% endblock %}", "schedule/showF.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\schedule\\showF.html.twig");
    }
}
