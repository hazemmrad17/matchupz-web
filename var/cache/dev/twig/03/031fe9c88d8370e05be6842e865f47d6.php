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

/* Home.html.twig */
class __TwigTemplate_22d6d2380c6710af201bb205fed0cff7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "Home.html.twig", 1);
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

        yield "Fitness - Home";
        
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
        yield "    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
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
        yield "    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        <div class=\"header-carousel-item hero-section\">
            <div class=\"hero-bg-half-1\"></div>
            <div class=\"carousel-caption\">
                <div class=\"container\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-lg-7 animated fadeInLeft\">
                            <div class=\"text-sm-center text-md-start\">
                                <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Welcome to our Fitness Center</h4>
                                <h1 class=\"display-1 text-white mb-4\">The best gym center is now in your city</h1>
                                <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                                <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                    <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"#\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                    <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"#\"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-carousel-item hero-section\">
            <div class=\"hero-bg-half-2\"></div>
            <div class=\"carousel-caption\">
                <div class=\"container\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-lg-7 animated fadeInLeft\">
                            <div class=\"text-sm-center text-md-start\">
                                <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Welcome to our Fitness Center</h4>
                                <h1 class=\"display-2 text-white mb-4\">Stay healthy by exercising at the best gym center</h1>
                                <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                                <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                    <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"#\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                    <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"#\"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=\"container-fluid about pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-xl-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"about-content h-100\">
                        <h4 class=\"text-primary\">About Fitness Center</h4>
                        <h1 class=\"display-4 text-white mb-4\">We are the best at fulfilling your potential and achieving your goals.</h1>
                        <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.</p>
                        <div class=\"tab-class pb-4\">
                            <ul class=\"nav d-flex mb-2\">
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2 active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span style=\"width: 150px;\">Our Mission</span>
                                    </a>
                                </li>
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2 mx-3\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span style=\"width: 150px;\">Our Vision</span>
                                    </a>
                                </li>
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span style=\"width: 150px;\">Our Goal</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-sm-6\">
                                <a href=\"#\" class=\"btn btn-primary py-3 px-5\"> <span>Make Appointment</span></a>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex flex-shrink-0 ps-4\">
                                    <a href=\"#\" class=\"btn btn-light btn-lg-square position-relative wow tada\" data-wow-delay=\".9s\">
                                        <i class=\"fa fa-phone-alt fa-2x\"></i>
                                        <div class=\"position-absolute\" style=\"top: 5px; right: 5px;\">
                                            <span><i class=\"fa fa-comment-dots text-dark\"></i></span>
                                        </div>
                                    </a>
                                    <div class=\"d-flex flex-column ms-3\">
                                        <span>Call to Our Experts</span>
                                        <a href=\"tel:+01234567890\"><span class=\"text-white\">Free: +0123 456 7890</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"about-img h-100\">
                        <div class=\"about-img-inner d-flex h-100\">
                            <img src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-2.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fitness Goal Start (Replaced with Dashboard Content) -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            ";
        // line 223
        if ((null === (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 223, $this->source); })()))) {
            // line 224
            yield "                <div class=\"text-center text-white\">
                    <h3>Aucun horaire disponible pour le moment.</h3>
                    <p>Revenez plus tard pour voir les matchs en cours ou les vidéos récentes.</p>
                </div>
            ";
        } else {
            // line 229
            yield "                <div class=\"row g-5\">
                    <!-- Video Section -->
                    <div class=\"col-lg-7 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100 video-container-wrapper\">
                            <div class=\"video-placeholder\">
                                ";
            // line 234
            if (((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 234, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 234, $this->source); })()), "streamURL", [], "any", false, false, false, 234)))) {
                // line 235
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 235, $this->source); })()), "streamURL", [], "any", false, false, false, 235);
                yield "?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La diffusion en direct n'a pas pu être chargée.
                                    </div>
                                ";
            } elseif (( !            // line 239
(isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 239, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 239, $this->source); })()), "URL", [], "any", false, false, false, 239)))) {
                // line 240
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 240, $this->source); })()), "URL", [], "any", false, false, false, 240);
                yield "?controls=1\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La vidéo n'a pas pu être chargée.
                                    </div>
                                ";
            } else {
                // line 245
                yield "                                    <div class=\"video-placeholder-text\">
                                        Aucune vidéo disponible pour ce match.
                                    </div>
                                ";
            }
            // line 249
            yield "                            </div>
                        </div>
                    </div>

                    <!-- Schedule Details Section -->
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">
                                ";
            // line 257
            if ((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 257, $this->source); })())) {
                // line 258
                yield "                                    Match en cours
                                ";
            } else {
                // line 260
                yield "                                    Dernier match
                                ";
            }
            // line 262
            yield "                            </h4>
                            <h1 class=\"display-4 mb-4\">
                                ";
            // line 264
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 264, $this->source); })()), "matchEntity", [], "any", false, false, false, 264)) {
                // line 265
                yield "                                    <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 265, $this->source); })()), "matchEntity", [], "any", false, false, false, 265), "c1", [], "any", false, false, false, 265), "html", null, true);
                yield "</span> contre <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 265, $this->source); })()), "matchEntity", [], "any", false, false, false, 265), "c2", [], "any", false, false, false, 265), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 267
                yield "                                    Match à déterminer
                                ";
            }
            // line 269
            yield "                            </h1>
                            <div class=\"goal-item d-flex p-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Date et heure</h4>
                                    <p class=\"text-white mb-0\">
                                        ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 279, $this->source); })()), "dateMatch", [], "any", false, false, false, 279), "Y-m-d"), "html", null, true);
            yield " de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 279, $this->source); })()), "startTime", [], "any", false, false, false, 279), "H:i"), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 279, $this->source); })()), "endTime", [], "any", false, false, false, 279), "H:i"), "html", null, true);
            yield "
                                    </p>
                                </div>
                            </div>
                            <div class=\"goal-item d-flex p-4 mb-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Lieu et sport</h4>
                                    <p class=\"text-white mb-0\">
                                        <strong>Lieu :</strong> ";
            // line 292
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 292, $this->source); })()), "espaceSportif", [], "any", false, false, false, 292)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 292, $this->source); })()), "espaceSportif", [], "any", false, false, false, 292), "nomEspace", [], "any", false, false, false, 292), "html", null, true)) : ("N/A"));
            yield "<br>
                                        ";
            // line 293
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 293, $this->source); })()), "matchEntity", [], "any", false, false, false, 293) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 293, $this->source); })()), "matchEntity", [], "any", false, false, false, 293), "sportType", [], "any", false, false, false, 293))) {
                // line 294
                yield "                                            <strong>Sport :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 294, $this->source); })()), "matchEntity", [], "any", false, false, false, 294), "sportType", [], "any", false, false, false, 294), "html", null, true);
                yield "
                                        ";
            }
            // line 296
            yield "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 303
        yield "        </div>
    </div>
    <!-- Fitness Goal End -->

    <!-- All Espaces Sportifs Carousel -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("espaces_description", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 313, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            ";
        // line 317
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 318
        yield "
            ";
        // line 319
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 319, $this->source); })())) > 0)) {
            // line 320
            yield "                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 321, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 322
                yield "                        ";
                $context["espace"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "espace", [], "any", false, false, false, 322);
                // line 323
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 323) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 325, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 325) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 325, $this->source); })()))), [], "array", false, false, false, 325))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 328, $this->source); })()), "nom_espace", [], "any", false, false, false, 328), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 329, $this->source); })()), "adresse", [], "any", false, false, false, 329), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 330, $this->source); })()), "categorie", [], "any", false, false, false, 330), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 331, $this->source); })()), "capacite", [], "any", false, false, false, 331), "html", null, true);
                yield " personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\"
                                   data-lat=\"";
                // line 334
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", true, true, false, 334) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 334)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 334), "html", null, true)) : (""));
                yield "\"
                                   data-lng=\"";
                // line 335
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", true, true, false, 335) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 335)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 335), "html", null, true)) : (""));
                yield "\"
                                   data-nom=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 336, $this->source); })()), "nom_espace", [], "any", false, false, false, 336), "html", null, true);
                yield "\"
                                   data-weather-temp=\"";
                // line 337
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 337), "temp", [], "any", true, true, false, 337) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 337), "temp", [], "any", false, false, false, 337)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 337), "temp", [], "any", false, false, false, 337), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-humidity=\"";
                // line 338
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 338), "humidity", [], "any", true, true, false, 338) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 338), "humidity", [], "any", false, false, false, 338)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 338), "humidity", [], "any", false, false, false, 338), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-clouds=\"";
                // line 339
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 339), "cloud_pct", [], "any", true, true, false, 339) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 339), "cloud_pct", [], "any", false, false, false, 339)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 339), "cloud_pct", [], "any", false, false, false, 339), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-condition=\"";
                // line 340
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 340), "condition", [], "any", true, true, false, 340) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 340), "condition", [], "any", false, false, false, 340)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 340), "condition", [], "any", false, false, false, 340), "html", null, true)) : ("cloudy"));
                yield "\"
                                   data-toggle=\"modal\"
                                   data-target=\"#mapModal\"><span>En savoir plus</span></a>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            yield "                </div>
            ";
        } else {
            // line 348
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            ";
        }
        // line 352
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>

    <!-- Map and Weather Modal -->
    <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mapModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"mapModalLabel\">Localisation et Météo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body d-flex flex-row\">
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <div id=\"weather-info\" class=\"p-4 d-flex flex-column justify-content-center align-items-center\" style=\"width: 25%; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 1px solid #dee2e6; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\">
                        <img id=\"weather-icon\" src=\"\" alt=\"Weather Icon\" class=\"weather-icon\" style=\"width: 120px; height: 120px; border-radius: 10%; box-shadow: 0 4px 8px rgba(223, 217, 217, 0.1); transition: transform 0.3s ease;\">
                        <h6 class=\"mb-4 text-uppercase font-weight-bold text-primary\" style=\"letter-spacing: 1px;\">Météo Actuelle</h6>
                        <div class=\"weather-data w-100\">
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-thermometer-half me-3 text-danger\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Température:</strong> <span id=\"weather-temp\"></span>°C</span>
                            </p>
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-tint me-3 text-primary\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Humidité:</strong> <span id=\"weather-humidity\"></span>%</span>
                            </p>
                            <p class=\"mb-0 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-cloud me-3 text-muted\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Nuages:</strong> <span id=\"weather-clouds\"></span>%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Espaces Sportifs Carousel End -->

    <!-- Courses Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Courses</h4>
                <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Gym Fitness Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-2.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Power Lifting Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-3.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Body Building Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner technology p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-4.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Aerobics & Skipping Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-5.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Boxing Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Cardio Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <a href=\"#\" class=\"btn btn-primary py-3 px-5\"> <span>More Courses</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Blogs</h4>
                <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">31-Day Fitness Calendar</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">At Home Ab Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Explore Fitness Start -->
    <div class=\"container-fluid explore py-5 wow zoomIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5 text-center\">
            <h1 class=\"display-1 text-white mb-0\">Explore Fitness Center</h1>
            <a class=\"btn btn-primary py-3 px-4 px-md-5 me-2\" href=\"https://www.youtube.com/embed/DWRcNpR6Kdc\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
        </div>
    </div>
    <!-- Explore Fitness End -->

    <!-- Team Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Team</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Amazing Team</h1>
                <p class=\"mb-0\">MatchUpz's passionate team drives the ultimate sports experience, managing sponsorships, venues, matches, logistics, and player connections with expertise. Meet the innovators elevating every game!</p>
            </div>
            <div class=\"row gy-5 gx-4\">
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Amine Mokhtar</h4>
                            <p class=\"mb-0\">Responsable Gestion Sponsor</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Feriel Khamlia</h4>
                            <p class=\"mb-0\">Responsable Gestion Utilisateur</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Ismail Ismail</h4>
                            <p class=\"mb-0\">Responsable Gestion Espaces Sportifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Louay Tlili</h4>
                            <p class=\"mb-0\">Responsable Gestion Matchs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-5.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Ibtissem Ben Amara</h4>
                            <p class=\"mb-0\">Responsable Gestion Logistique</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"";
        // line 753
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Hazem Mrad</h4>
                            <p class=\"mb-0\">Responsable Gestion Joueurs et Equipes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class=\"container-fluid testimonial bg-dark py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Témoignage</h4>
                <h1 class=\"display-4 text-white\">Ce que nos clients disent de nous....</h1>
            </div>
            <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Grâce à MatchUPz, la gestion de notre club est devenue beaucoup plus simple. Planning, communication et réservations ... tout est centralisé !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Ameni</h4>
                        <p class=\"m-0 pb-3\">Coach de football</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Une plateforme intuitive qui nous a permis de mieux organiser nos matchs et d'améliorer la participation de nos membres. On a gagné en efficacité !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Yasmine T</h4>
                        <p class=\"m-0 pb-3\">Directrice d’une académie sportive</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Avant MatchUPz, gérer les infrastructures était un cauchemar. Aujourd’hui, tout se fait en quelques clics. Un vrai changement pour notre équipe !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Sami B</h4>
                        <p class=\"m-0 pb-3\">Responsable d'infrastructure</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 840
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

        // line 841
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>
    <script>
        \$(document).ready(function() {
            // Initialize Owl Carousel
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: false,
                autoplay: false,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                mapboxgl.accessToken = accessToken;
                if (map) {
                    map.remove();
                }
                map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 15
                });
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup();
            }

            \$('.show-map-btn').on('click', function(e) {
                e.preventDefault();
                const lat = parseFloat(\$(this).data('lat'));
                const lng = parseFloat(\$(this).data('lng'));
                const nom = \$(this).data('nom');
                const temp = \$(this).data('weather-temp');
                const humidity = \$(this).data('weather-humidity');
                const clouds = \$(this).data('weather-clouds');
                const condition = \$(this).data('weather-condition');

                if (lat && lng && !isNaN(lat) && !isNaN(lng)) {
                    initializeMap(lat, lng, nom);
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);
                    let iconSrc = condition === 'sunny' ? '";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "' :
                                  condition === 'rainy' ? '";
        // line 897
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rain_weather.png"), "html", null, true);
        yield "' :
                                  '";
        // line 898
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "';
                    \$('#weather-icon').attr('src', iconSrc);
                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200);
                }
            });

            \$('#weather-icon').hover(
                function() { \$(this).css('transform', 'scale(1.1)'); },
                function() { \$(this).css('transform', 'scale(1)'); }
            );
            \$('.weather-item').hover(
                function() { \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)'); },
                function() { \$(this).css('background-color', 'transparent'); }
            );

            // JavaScript for Video Handling (from dashboard.html.twig)
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
        return "Home.html.twig";
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
        return array (  1270 => 898,  1266 => 897,  1262 => 896,  1203 => 841,  1190 => 840,  1159 => 819,  1138 => 801,  1117 => 783,  1084 => 753,  1064 => 736,  1044 => 719,  1024 => 702,  1004 => 685,  984 => 668,  942 => 629,  923 => 613,  904 => 597,  885 => 581,  846 => 545,  838 => 540,  814 => 519,  806 => 514,  782 => 493,  774 => 488,  750 => 467,  742 => 462,  718 => 441,  710 => 436,  686 => 415,  678 => 410,  618 => 352,  612 => 348,  608 => 346,  588 => 340,  584 => 339,  580 => 338,  576 => 337,  572 => 336,  568 => 335,  564 => 334,  558 => 331,  554 => 330,  550 => 329,  546 => 328,  540 => 325,  534 => 323,  531 => 322,  514 => 321,  511 => 320,  509 => 319,  506 => 318,  504 => 317,  497 => 313,  485 => 303,  476 => 296,  470 => 294,  468 => 293,  464 => 292,  455 => 286,  441 => 279,  432 => 273,  426 => 269,  422 => 267,  414 => 265,  412 => 264,  408 => 262,  404 => 260,  400 => 258,  398 => 257,  388 => 249,  382 => 245,  373 => 240,  371 => 239,  363 => 235,  361 => 234,  354 => 229,  347 => 224,  345 => 223,  330 => 211,  199 => 82,  186 => 81,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Fitness - Home{% endblock %}

{% block stylesheets %}
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
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
    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        <div class=\"header-carousel-item hero-section\">
            <div class=\"hero-bg-half-1\"></div>
            <div class=\"carousel-caption\">
                <div class=\"container\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-lg-7 animated fadeInLeft\">
                            <div class=\"text-sm-center text-md-start\">
                                <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Welcome to our Fitness Center</h4>
                                <h1 class=\"display-1 text-white mb-4\">The best gym center is now in your city</h1>
                                <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                                <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                    <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"#\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                    <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"#\"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-carousel-item hero-section\">
            <div class=\"hero-bg-half-2\"></div>
            <div class=\"carousel-caption\">
                <div class=\"container\">
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-lg-7 animated fadeInLeft\">
                            <div class=\"text-sm-center text-md-start\">
                                <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Welcome to our Fitness Center</h4>
                                <h1 class=\"display-2 text-white mb-4\">Stay healthy by exercising at the best gym center</h1>
                                <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                                <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                    <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"#\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                    <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"#\"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=\"container-fluid about pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-xl-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"about-content h-100\">
                        <h4 class=\"text-primary\">About Fitness Center</h4>
                        <h1 class=\"display-4 text-white mb-4\">We are the best at fulfilling your potential and achieving your goals.</h1>
                        <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.</p>
                        <div class=\"tab-class pb-4\">
                            <ul class=\"nav d-flex mb-2\">
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2 active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span style=\"width: 150px;\">Our Mission</span>
                                    </a>
                                </li>
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2 mx-3\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span style=\"width: 150px;\">Our Vision</span>
                                    </a>
                                </li>
                                <li class=\"nav-item mb-3\">
                                    <a class=\"d-flex py-2\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span style=\"width: 150px;\">Our Goal</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-sm-6\">
                                <a href=\"#\" class=\"btn btn-primary py-3 px-5\"> <span>Make Appointment</span></a>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex flex-shrink-0 ps-4\">
                                    <a href=\"#\" class=\"btn btn-light btn-lg-square position-relative wow tada\" data-wow-delay=\".9s\">
                                        <i class=\"fa fa-phone-alt fa-2x\"></i>
                                        <div class=\"position-absolute\" style=\"top: 5px; right: 5px;\">
                                            <span><i class=\"fa fa-comment-dots text-dark\"></i></span>
                                        </div>
                                    </a>
                                    <div class=\"d-flex flex-column ms-3\">
                                        <span>Call to Our Experts</span>
                                        <a href=\"tel:+01234567890\"><span class=\"text-white\">Free: +0123 456 7890</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"about-img h-100\">
                        <div class=\"about-img-inner d-flex h-100\">
                            <img src=\"{{ asset('img/about-2.png') }}\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fitness Goal Start (Replaced with Dashboard Content) -->
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
    <!-- Fitness Goal End -->

    <!-- All Espaces Sportifs Carousel -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">{{ espaces_description|default('') }}</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            {% set images = ['stadium1.jpg', 'stadium2.jpg', 'stadium3.jpg', 'stadium4.jpg', 'stadium5.jpg'] %}

            {% if espacesWithCoords|length > 0 %}
                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    {% for item in espacesWithCoords %}
                        {% set espace = item.espace %}
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                            <div class=\"feature-img\">
                                <img src=\"{{ asset('img/' ~ images[loop.index0 % images|length]) }}\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">{{ espace.nom_espace }}</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> {{ espace.adresse }}</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> {{ espace.categorie }}</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> {{ espace.capacite }} personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\"
                                   data-lat=\"{{ item.latitude ?? '' }}\"
                                   data-lng=\"{{ item.longitude ?? '' }}\"
                                   data-nom=\"{{ espace.nom_espace }}\"
                                   data-weather-temp=\"{{ item.weather.temp ?? 'N/A' }}\"
                                   data-weather-humidity=\"{{ item.weather.humidity ?? 'N/A' }}\"
                                   data-weather-clouds=\"{{ item.weather.cloud_pct ?? 'N/A' }}\"
                                   data-weather-condition=\"{{ item.weather.condition ?? 'cloudy' }}\"
                                   data-toggle=\"modal\"
                                   data-target=\"#mapModal\"><span>En savoir plus</span></a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            {% endif %}

            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>

    <!-- Map and Weather Modal -->
    <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mapModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"mapModalLabel\">Localisation et Météo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body d-flex flex-row\">
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <div id=\"weather-info\" class=\"p-4 d-flex flex-column justify-content-center align-items-center\" style=\"width: 25%; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 1px solid #dee2e6; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\">
                        <img id=\"weather-icon\" src=\"\" alt=\"Weather Icon\" class=\"weather-icon\" style=\"width: 120px; height: 120px; border-radius: 10%; box-shadow: 0 4px 8px rgba(223, 217, 217, 0.1); transition: transform 0.3s ease;\">
                        <h6 class=\"mb-4 text-uppercase font-weight-bold text-primary\" style=\"letter-spacing: 1px;\">Météo Actuelle</h6>
                        <div class=\"weather-data w-100\">
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-thermometer-half me-3 text-danger\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Température:</strong> <span id=\"weather-temp\"></span>°C</span>
                            </p>
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-tint me-3 text-primary\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Humidité:</strong> <span id=\"weather-humidity\"></span>%</span>
                            </p>
                            <p class=\"mb-0 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-cloud me-3 text-muted\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Nuages:</strong> <span id=\"weather-clouds\"></span>%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Espaces Sportifs Carousel End -->

    <!-- Courses Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Courses</h4>
                <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-1.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Gym Fitness Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-2.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Power Lifting Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-3.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Body Building Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner technology p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-4.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Aerobics & Skipping Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-5.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Boxing Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"courses-item\">
                        <div class=\"courses-item-inner p-4\">
                            <div class=\"d-flex justify-content-between mb-4\">
                                <div class=\"courses-icon-img p-3\">
                                    <img src=\"{{ asset('img/icon-6.png') }}\" class=\"img-fluid\" alt=\"\">
                                </div>
                                <div class=\"data-info d-flex flex-column\">
                                    <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                        <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                            <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <p class=\"mb-0\">Paul Flavius</p>
                                    </div>
                                    <div class=\"courses-date\">
                                        <p class=\"mb-1\">Date: Saturday</p>
                                        <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"d-inline-block h4 mb-3\">Cardio Class</a>
                            <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <a href=\"#\" class=\"btn btn-primary py-3 px-5\"> <span>More Courses</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Blogs</h4>
                <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"{{ asset('img/feature-4.jpg') }}\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"{{ asset('img/feature-3.jpg') }}\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">31-Day Fitness Calendar</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"{{ asset('img/feature-2.jpg') }}\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">At Home Ab Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
                <div class=\"blog-item\">
                    <div class=\"blog-img p-4 pb-0\">
                        <a href=\"#\">
                            <img src=\"{{ asset('img/feature-1.jpg') }}\" class=\"img-fluid w-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"blog-content p-4\">
                        <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                            <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>Martin.C</div>
                            <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>30 Dec 2025</div>
                        </div>
                        <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                        <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Explore Fitness Start -->
    <div class=\"container-fluid explore py-5 wow zoomIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5 text-center\">
            <h1 class=\"display-1 text-white mb-0\">Explore Fitness Center</h1>
            <a class=\"btn btn-primary py-3 px-4 px-md-5 me-2\" href=\"https://www.youtube.com/embed/DWRcNpR6Kdc\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
        </div>
    </div>
    <!-- Explore Fitness End -->

    <!-- Team Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Team</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Amazing Team</h1>
                <p class=\"mb-0\">MatchUpz's passionate team drives the ultimate sports experience, managing sponsorships, venues, matches, logistics, and player connections with expertise. Meet the innovators elevating every game!</p>
            </div>
            <div class=\"row gy-5 gx-4\">
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-1.png') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Amine Mokhtar</h4>
                            <p class=\"mb-0\">Responsable Gestion Sponsor</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-3.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Feriel Khamlia</h4>
                            <p class=\"mb-0\">Responsable Gestion Utilisateur</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-2.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Ismail Ismail</h4>
                            <p class=\"mb-0\">Responsable Gestion Espaces Sportifs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-4.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Louay Tlili</h4>
                            <p class=\"mb-0\">Responsable Gestion Matchs</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-5.jpeg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Ibtissem Ben Amara</h4>
                            <p class=\"mb-0\">Responsable Gestion Logistique</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"team-item\">
                        <div class=\"team-img\">
                            <img src=\"{{ asset('img/team-6.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
                            <div class=\"team-icon\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                        <div class=\"team-content\">
                            <h4>Hazem Mrad</h4>
                            <p class=\"mb-0\">Responsable Gestion Joueurs et Equipes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class=\"container-fluid testimonial bg-dark py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Témoignage</h4>
                <h1 class=\"display-4 text-white\">Ce que nos clients disent de nous....</h1>
            </div>
            <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"{{ asset('img/testimonial-1.jpg') }}\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Grâce à MatchUPz, la gestion de notre club est devenue beaucoup plus simple. Planning, communication et réservations ... tout est centralisé !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Ameni</h4>
                        <p class=\"m-0 pb-3\">Coach de football</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"{{ asset('img/testimonial-2.jpg') }}\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Une plateforme intuitive qui nous a permis de mieux organiser nos matchs et d'améliorer la participation de nos membres. On a gagné en efficacité !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Yasmine T</h4>
                        <p class=\"m-0 pb-3\">Directrice d’une académie sportive</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                    <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                    <div class=\"testimonial-img mb-4\">
                        <img src=\"{{ asset('img/testimonial-3.jpg') }}\" class=\"img-fluid\" alt=\"Image\">
                    </div>
                    <p class=\"fs-4 text-white mb-4\">Avant MatchUPz, gérer les infrastructures était un cauchemar. Aujourd’hui, tout se fait en quelques clics. Un vrai changement pour notre équipe !</p>
                    <div class=\"d-block\">
                        <h4 class=\"text-white\">Sami B</h4>
                        <p class=\"m-0 pb-3\">Responsable d'infrastructure</p>
                        <div class=\"d-flex\">
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-primary\"></i>
                            <i class=\"fas fa-star text-white\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>
    <script>
        \$(document).ready(function() {
            // Initialize Owl Carousel
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: false,
                autoplay: false,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                mapboxgl.accessToken = accessToken;
                if (map) {
                    map.remove();
                }
                map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 15
                });
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup();
            }

            \$('.show-map-btn').on('click', function(e) {
                e.preventDefault();
                const lat = parseFloat(\$(this).data('lat'));
                const lng = parseFloat(\$(this).data('lng'));
                const nom = \$(this).data('nom');
                const temp = \$(this).data('weather-temp');
                const humidity = \$(this).data('weather-humidity');
                const clouds = \$(this).data('weather-clouds');
                const condition = \$(this).data('weather-condition');

                if (lat && lng && !isNaN(lat) && !isNaN(lng)) {
                    initializeMap(lat, lng, nom);
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);
                    let iconSrc = condition === 'sunny' ? '{{ asset('img/clouds_sun_weather.png') }}' :
                                  condition === 'rainy' ? '{{ asset('img/rain_weather.png') }}' :
                                  '{{ asset('img/clouds_sun_weather.png') }}';
                    \$('#weather-icon').attr('src', iconSrc);
                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200);
                }
            });

            \$('#weather-icon').hover(
                function() { \$(this).css('transform', 'scale(1.1)'); },
                function() { \$(this).css('transform', 'scale(1)'); }
            );
            \$('.weather-item').hover(
                function() { \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)'); },
                function() { \$(this).css('background-color', 'transparent'); }
            );

            // JavaScript for Video Handling (from dashboard.html.twig)
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
{% endblock %}", "Home.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\Home.html.twig");
    }
}
