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

/* dashboard.html.twig */
class __TwigTemplate_d5f3680f7bd3f5474c9f9289dc8b8fcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "dashboard.html.twig", 1);
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

        yield "Matchupz - Tableau de bord";
        
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
        /* Vibrant team styling (from showF.html.twig) */
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

        /* Video placeholder styling (from showF.html.twig) */
        .video-placeholder {
            position: relative;
            background: #000;
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            border-radius: 12px;
            overflow: hidden;
            margin: 20px 0; /* Extra spacing */
            z-index: 1; /* Ensure the placeholder is not overlapped */
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
            font-size: 1.5rem; /* Slightly larger text for better visibility */
            font-weight: 500;
            text-align: center;
            opacity: 0.9;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
            padding: 0 20px;
            display: none; /* Hidden by default, shown via JS if video fails */
            z-index: 3; /* Ensure the text is visible if shown */
        }

        /* Ensure the goal section matches the styling from showF */
        .goal-content h1 {
            font-size: 2.5rem;
        }
        .goal-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        /* Adjust video container to be larger */
        .video-container-wrapper {
            max-width: 100%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Tableau de bord</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Tableau de bord</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Dashboard Content Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            ";
        // line 97
        if ((null === (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 97, $this->source); })()))) {
            // line 98
            yield "                <div class=\"text-center text-white\">
                    <h3>Aucun horaire disponible pour le moment.</h3>
                    <p>Revenez plus tard pour voir les matchs en cours ou les vidéos récentes.</p>
                </div>
            ";
        } else {
            // line 103
            yield "                <div class=\"row g-5\">
                    <!-- Video Section -->
                    <div class=\"col-lg-7 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100 video-container-wrapper\">
                            <div class=\"video-placeholder\">
                                ";
            // line 108
            if (((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 108, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 108, $this->source); })()), "streamURL", [], "any", false, false, false, 108)))) {
                // line 109
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 109, $this->source); })()), "streamURL", [], "any", false, false, false, 109);
                yield "?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La diffusion en direct n'a pas pu être chargée.
                                    </div>
                                ";
            } elseif (( !            // line 113
(isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 113, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 113, $this->source); })()), "URL", [], "any", false, false, false, 113)))) {
                // line 114
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 114, $this->source); })()), "URL", [], "any", false, false, false, 114);
                yield "?controls=1\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La vidéo n'a pas pu être chargée.
                                    </div>
                                ";
            } else {
                // line 119
                yield "                                    <div class=\"video-placeholder-text\">
                                        Aucune vidéo disponible pour ce match.
                                    </div>
                                ";
            }
            // line 123
            yield "                            </div>
                        </div>
                    </div>

                    <!-- Schedule Details Section -->
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">
                                ";
            // line 131
            if ((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 131, $this->source); })())) {
                // line 132
                yield "                                    Match en cours
                                ";
            } else {
                // line 134
                yield "                                    Dernier match
                                ";
            }
            // line 136
            yield "                            </h4>
                            <h1 class=\"display-4 mb-4\">
                                ";
            // line 138
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 138, $this->source); })()), "matchEntity", [], "any", false, false, false, 138)) {
                // line 139
                yield "                                    <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 139, $this->source); })()), "matchEntity", [], "any", false, false, false, 139), "c1", [], "any", false, false, false, 139), "html", null, true);
                yield "</span> contre <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 139, $this->source); })()), "matchEntity", [], "any", false, false, false, 139), "c2", [], "any", false, false, false, 139), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 141
                yield "                                    Match à déterminer
                                ";
            }
            // line 143
            yield "                            </h1>
                            <div class=\"goal-item d-flex p-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Date et heure</h4>
                                    <p class=\"text-white mb-0\">
                                        ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 153, $this->source); })()), "dateMatch", [], "any", false, false, false, 153), "Y-m-d"), "html", null, true);
            yield " de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 153, $this->source); })()), "startTime", [], "any", false, false, false, 153), "H:i"), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 153, $this->source); })()), "endTime", [], "any", false, false, false, 153), "H:i"), "html", null, true);
            yield "
                                    </p>
                                </div>
                            </div>
                            <div class=\"goal-item d-flex p-4 mb-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Lieu et sport</h4>
                                    <p class=\"text-white mb-0\">
                                        <strong>Lieu :</strong> ";
            // line 166
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 166, $this->source); })()), "espaceSportif", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 166, $this->source); })()), "espaceSportif", [], "any", false, false, false, 166), "nomEspace", [], "any", false, false, false, 166), "html", null, true)) : ("N/A"));
            yield "<br>
                                        ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 167, $this->source); })()), "matchEntity", [], "any", false, false, false, 167) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 167, $this->source); })()), "matchEntity", [], "any", false, false, false, 167), "sportType", [], "any", false, false, false, 167))) {
                // line 168
                yield "                                            <strong>Sport :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 168, $this->source); })()), "matchEntity", [], "any", false, false, false, 168), "sportType", [], "any", false, false, false, 168), "html", null, true);
                yield "
                                        ";
            }
            // line 170
            yield "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 177
        yield "        </div>
    </div>
    <!-- Dashboard Content End -->

    <!-- JavaScript for Video Handling (from showF.html.twig) -->
    ";
        // line 182
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

        // line 183
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const iframes = document.querySelectorAll('.video-placeholder iframe');
                iframes.forEach(iframe => {
                    // Log the URL for debugging
                    console.log('Video iframe URL:', iframe.src);

                    // Detect click events on the iframe
                    iframe.addEventListener('click', function (e) {
                        console.log('Iframe clicked at coordinates:', e.clientX, e.clientY, '- attempting to interact with video');
                    });

                    // Check for errors
                    iframe.addEventListener('error', function (e) {
                        console.error('Error loading video:', e);
                        const fallback = iframe.parentElement.querySelector('.video-fallback');
                        if (fallback) {
                            iframe.style.display = 'none';
                            fallback.style.display = 'block';
                        }
                    });

                    // Check if the video is unavailable by iframe height
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

                    // Log the DOM hierarchy to check for overlapping elements
                    console.log('Iframe parent elements:', iframe.parentElement);
                });

                // Check for overlapping elements
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
        return "dashboard.html.twig";
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
        return array (  391 => 183,  368 => 182,  361 => 177,  352 => 170,  346 => 168,  344 => 167,  340 => 166,  331 => 160,  317 => 153,  308 => 147,  302 => 143,  298 => 141,  290 => 139,  288 => 138,  284 => 136,  280 => 134,  276 => 132,  274 => 131,  264 => 123,  258 => 119,  249 => 114,  247 => 113,  239 => 109,  237 => 108,  230 => 103,  223 => 98,  221 => 97,  208 => 87,  201 => 82,  188 => 81,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Tableau de bord{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Vibrant team styling (from showF.html.twig) */
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

        /* Video placeholder styling (from showF.html.twig) */
        .video-placeholder {
            position: relative;
            background: #000;
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            border-radius: 12px;
            overflow: hidden;
            margin: 20px 0; /* Extra spacing */
            z-index: 1; /* Ensure the placeholder is not overlapped */
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
            font-size: 1.5rem; /* Slightly larger text for better visibility */
            font-weight: 500;
            text-align: center;
            opacity: 0.9;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
            padding: 0 20px;
            display: none; /* Hidden by default, shown via JS if video fails */
            z-index: 3; /* Ensure the text is visible if shown */
        }

        /* Ensure the goal section matches the styling from showF */
        .goal-content h1 {
            font-size: 2.5rem;
        }
        .goal-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        /* Adjust video container to be larger */
        .video-container-wrapper {
            max-width: 100%;
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Tableau de bord</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Tableau de bord</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Dashboard Content Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            {% if schedule is null %}
                <div class=\"text-center text-white\">
                    <h3>Aucun horaire disponible pour le moment.</h3>
                    <p>Revenez plus tard pour voir les matchs en cours ou les vidéos récentes.</p>
                </div>
            {% else %}
                <div class=\"row g-5\">
                    <!-- Video Section -->
                    <div class=\"col-lg-7 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100 video-container-wrapper\">
                            <div class=\"video-placeholder\">
                                {% if isOngoing and schedule.streamURL is not null %}
                                    <iframe src=\"{{ schedule.streamURL|raw }}?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La diffusion en direct n'a pas pu être chargée.
                                    </div>
                                {% elseif not isOngoing and schedule.URL is not null %}
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

                    <!-- Schedule Details Section -->
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">
                                {% if isOngoing %}
                                    Match en cours
                                {% else %}
                                    Dernier match
                                {% endif %}
                            </h4>
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
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
    <!-- Dashboard Content End -->

    <!-- JavaScript for Video Handling (from showF.html.twig) -->
    {% block javascripts %}
        {{ parent() }}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const iframes = document.querySelectorAll('.video-placeholder iframe');
                iframes.forEach(iframe => {
                    // Log the URL for debugging
                    console.log('Video iframe URL:', iframe.src);

                    // Detect click events on the iframe
                    iframe.addEventListener('click', function (e) {
                        console.log('Iframe clicked at coordinates:', e.clientX, e.clientY, '- attempting to interact with video');
                    });

                    // Check for errors
                    iframe.addEventListener('error', function (e) {
                        console.error('Error loading video:', e);
                        const fallback = iframe.parentElement.querySelector('.video-fallback');
                        if (fallback) {
                            iframe.style.display = 'none';
                            fallback.style.display = 'block';
                        }
                    });

                    // Check if the video is unavailable by iframe height
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

                    // Log the DOM hierarchy to check for overlapping elements
                    console.log('Iframe parent elements:', iframe.parentElement);
                });

                // Check for overlapping elements
                const placeholder = document.querySelector('.video-placeholder');
                if (placeholder) {
                    const computedStyle = window.getComputedStyle(placeholder);
                    console.log('Video placeholder z-index:', computedStyle.zIndex);
                    console.log('Video placeholder pointer-events:', computedStyle.pointerEvents);
                }
            });
        </script>
    {% endblock %}
{% endblock %}", "dashboard.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\dashboard.html.twig");
    }
}
