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
class __TwigTemplate_0c85e1190ac618eb94a20e0e8f62b149 extends Template
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

        /* Sponsor image carousel styles */
        .sponsor-image-carousel {
            padding: 20px 0;
        }

        .sponsor-image-carousel .owl-item {
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .sponsor-image-carousel .sponsor-img {
            text-align: center;
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sponsor-image-carousel .sponsor-img img {
            width: 250px;
            height: 200px;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .sponsor-image-carousel .sponsor-img img:hover {
            transform: scale(1.05);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
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
        // line 244
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
        // line 256
        if ((null === (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 256, $this->source); })()))) {
            // line 257
            yield "                <div class=\"text-center text-white\">
                    <h3>Aucun horaire disponible pour le moment.</h3>
                    <p>Revenez plus tard pour voir les matchs en cours ou les vidéos récentes.</p>
                </div>
            ";
        } else {
            // line 262
            yield "                <div class=\"row g-5\">
                    <!-- Video Section -->
                    <div class=\"col-lg-7 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100 video-container-wrapper\">
                            <div class=\"video-placeholder\">
                                ";
            // line 267
            if (((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 267, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 267, $this->source); })()), "streamURL", [], "any", false, false, false, 267)))) {
                // line 268
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 268, $this->source); })()), "streamURL", [], "any", false, false, false, 268);
                yield "?autoplay=1&mute=1\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La diffusion en direct n'a pas pu être chargée.
                                    </div>
                                ";
            } elseif (( !            // line 272
(isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 272, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 272, $this->source); })()), "URL", [], "any", false, false, false, 272)))) {
                // line 273
                yield "                                    <iframe src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 273, $this->source); })()), "URL", [], "any", false, false, false, 273);
                yield "?controls=1\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    <div class=\"video-placeholder-text video-fallback\">
                                        La vidéo n'a pas pu être chargée.
                                    </div>
                                ";
            } else {
                // line 278
                yield "                                    <div class=\"video-placeholder-text\">
                                        Aucune vidéo disponible pour ce match.
                                    </div>
                                ";
            }
            // line 282
            yield "                            </div>
                        </div>
                    </div>

                    <!-- Schedule Details Section -->
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">
                                ";
            // line 290
            if ((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 290, $this->source); })())) {
                // line 291
                yield "                                    Match en cours
                                ";
            } else {
                // line 293
                yield "                                    Dernier match
                                ";
            }
            // line 295
            yield "                            </h4>
                            <h1 class=\"display-4 mb-4\">
                                ";
            // line 297
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 297, $this->source); })()), "matchEntity", [], "any", false, false, false, 297)) {
                // line 298
                yield "                                    <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 298, $this->source); })()), "matchEntity", [], "any", false, false, false, 298), "c1", [], "any", false, false, false, 298), "html", null, true);
                yield "</span> contre <span class=\"vibrant-team\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 298, $this->source); })()), "matchEntity", [], "any", false, false, false, 298), "c2", [], "any", false, false, false, 298), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 300
                yield "                                    Match à déterminer
                                ";
            }
            // line 302
            yield "                            </h1>
                            <div class=\"goal-item d-flex p-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-1.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Date et heure</h4>
                                    <p class=\"text-white mb-0\">
                                        ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 312, $this->source); })()), "dateMatch", [], "any", false, false, false, 312), "Y-m-d"), "html", null, true);
            yield " de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 312, $this->source); })()), "startTime", [], "any", false, false, false, 312), "H:i"), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 312, $this->source); })()), "endTime", [], "any", false, false, false, 312), "H:i"), "html", null, true);
            yield "
                                    </p>
                                </div>
                            </div>
                            <div class=\"goal-item d-flex p-4 mb-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-6.png"), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Lieu et sport</h4>
                                    <p class=\"text-white mb-0\">
                                        <strong>Lieu :</strong> ";
            // line 325
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 325, $this->source); })()), "espaceSportif", [], "any", false, false, false, 325)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 325, $this->source); })()), "espaceSportif", [], "any", false, false, false, 325), "nomEspace", [], "any", false, false, false, 325), "html", null, true)) : ("N/A"));
            yield "<br>
                                        ";
            // line 326
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 326, $this->source); })()), "matchEntity", [], "any", false, false, false, 326) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 326, $this->source); })()), "matchEntity", [], "any", false, false, false, 326), "sportType", [], "any", false, false, false, 326))) {
                // line 327
                yield "                                            <strong>Sport :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 327, $this->source); })()), "matchEntity", [], "any", false, false, false, 327), "sportType", [], "any", false, false, false, 327), "html", null, true);
                yield "
                                        ";
            }
            // line 329
            yield "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 336
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
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("espaces_description", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 346, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            ";
        // line 350
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 351
        yield "
            ";
        // line 352
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 352, $this->source); })())) > 0)) {
            // line 353
            yield "                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 354, $this->source); })()));
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
                // line 355
                yield "                        ";
                $context["espace"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "espace", [], "any", false, false, false, 355);
                // line 356
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 356) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 358, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 358) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 358, $this->source); })()))), [], "array", false, false, false, 358))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 361, $this->source); })()), "nom_espace", [], "any", false, false, false, 361), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 362, $this->source); })()), "adresse", [], "any", false, false, false, 362), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 363, $this->source); })()), "categorie", [], "any", false, false, false, 363), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 364, $this->source); })()), "capacite", [], "any", false, false, false, 364), "html", null, true);
                yield " personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\"
                                   data-lat=\"";
                // line 367
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", true, true, false, 367) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 367)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 367), "html", null, true)) : (""));
                yield "\"
                                   data-lng=\"";
                // line 368
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", true, true, false, 368) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 368)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 368), "html", null, true)) : (""));
                yield "\"
                                   data-nom=\"";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 369, $this->source); })()), "nom_espace", [], "any", false, false, false, 369), "html", null, true);
                yield "\"
                                   data-weather-temp=\"";
                // line 370
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 370), "temp", [], "any", true, true, false, 370) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 370), "temp", [], "any", false, false, false, 370)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 370), "temp", [], "any", false, false, false, 370), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-humidity=\"";
                // line 371
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 371), "humidity", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 371), "humidity", [], "any", false, false, false, 371)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 371), "humidity", [], "any", false, false, false, 371), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-clouds=\"";
                // line 372
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 372), "cloud_pct", [], "any", true, true, false, 372) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 372), "cloud_pct", [], "any", false, false, false, 372)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 372), "cloud_pct", [], "any", false, false, false, 372), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-condition=\"";
                // line 373
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 373), "condition", [], "any", true, true, false, 373) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 373), "condition", [], "any", false, false, false, 373)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 373), "condition", [], "any", false, false, false, 373), "html", null, true)) : ("cloudy"));
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
            // line 379
            yield "                </div>
            ";
        } else {
            // line 381
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            ";
        }
        // line 385
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>

    <!-- Map and Weather Modal -->
    <div class=\"modal fade\" id=\"mapModal\" tabindex endere=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Sponsors</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Valued Partners</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>

            <!-- START: Sponsor Image Carousel Section -->
            <div class=\"sponsor-image-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("sponsors", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 408, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 409
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 409)) {
                // line 410
                yield "                        <div class=\"sponsor-img wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 410) * 0.2)), "html", null, true);
                yield "s\">
                            <a href=\"#\">
                                <img src=\"";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/sponsor_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 412))), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 412), "html", null, true);
                yield "\">
                            </a>
                        </div>
                    ";
            }
            // line 416
            yield "                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 417
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun sponsor trouvé.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "            </div>
            <!-- END: Sponsor Image Carousel Section -->

            <!-- START: Blog Cards Section -->
            <div class=\"row\">
                ";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("blogs", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 426, $this->source); })()), [["image" => "feature-4.jpg", "title" => "Full Body Home Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-3.jpg", "title" => "31-Day Fitness Calendar", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-2.jpg", "title" => "At Home Ab Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-1.jpg", "title" => "Full Body Home Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."]])) : ([["image" => "feature-4.jpg", "title" => "Full Body Home Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-3.jpg", "title" => "31-Day Fitness Calendar", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-2.jpg", "title" => "At Home Ab Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."], ["image" => "feature-1.jpg", "title" => "Full Body Home Workout", "author" => "Martin.C", "date" => "30 Dec 2025", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium."]])));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 432
            yield "                    <div class=\"col-md-6 col-lg-3 mb-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 432) * 0.2)), "html", null, true);
            yield "s\">
                        <div class=\"blog-item\">
                            <div class=\"blog-img p-4 pb-0\">
                                <a href=\"#\">
                                    <img src=\"";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 436))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 436), "html", null, true);
            yield "\">
                                </a>
                            </div>
                            <div class=\"blog-content p-4\">
                                <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                    <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 441), "html", null, true);
            yield "</div>
                                    <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "date", [], "any", false, false, false, 442), "html", null, true);
            yield "</div>
                                </div>
                                <a href=\"#\" class=\"h4 d-inline-block mb-3\">";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 444), "html", null, true);
            yield "</a>
                                <p class=\"mb-3\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 445), "html", null, true);
            yield "</p>
                                <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 450
        if (!$context['_iterated']) {
            // line 451
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun blog trouvé.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['blog'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "            </div>
            <!-- END: Blog Cards Section -->
        </div>
    </div>
    <!-- Blog End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 462
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

        // line 463
        yield "    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>
    <script>
        \$(document).ready(function() {
            // Initialize Espace Carousel
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    576: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            // Initialize Sponsor Image Carousel
            \$(\".sponsor-image-carousel\").owlCarousel({
                items: 4,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 }
                }
            });

            // Map Modal Logic
            \$('#mapModal').on('shown.bs.modal', function (event) {
                var button = \$(event.relatedTarget);
                var lat = parseFloat(button.data('lat'));
                var lng = parseFloat(button.data('lng'));
                var nom = button.data('nom');
                var temp = button.data('weather-temp');
                var humidity = button.data('weather-humidity');
                var clouds = button.data('weather-clouds');
                var condition = button.data('weather-condition');

                \$('#mapModalLabel').text('Localisation de ' + nom);
                \$('#weather-temp').text(temp !== 'N/A' ? temp : 'N/A');
                \$('#weather-humidity').text(humidity !== 'N/A' ? humidity : 'N/A');
                \$('#weather-clouds').text(clouds !== 'N/A' ? clouds : 'N/A');

                var iconUrl = '';
                switch (condition.toLowerCase()) {
                    case 'clear': iconUrl = '";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/weather/clear.png"), "html", null, true);
        yield "'; break;
                    case 'clouds': iconUrl = '";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/weather/clouds.png"), "html", null, true);
        yield "'; break;
                    case 'rain': iconUrl = '";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/weather/rain.png"), "html", null, true);
        yield "'; break;
                    case 'snow': iconUrl = '";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/weather/snow.png"), "html", null, true);
        yield "'; break;
                    default: iconUrl = '";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/weather/cloudy.png"), "html", null, true);
        yield "';
                }
                \$('#weather-icon').attr('src', iconUrl);

                mapboxgl.accessToken = 'pk.eyJ1IjoibWFydGludmVyc2FsbCIsImEiOiJjbTA5c3cwcjMwM2s3anBvb2N2NXR4M3QzIn0._Mfs0ZFRBPLG--yNglH0-A';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 12
                });

                map.on('load', function () {
                    new mapboxgl.Marker()
                        .setLngLat([lng, lat])
                        .setPopup(new mapboxgl.Popup().setHTML('<h6>' + nom + '</h6>'))
                        .addTo(map);
                });
            });

            \$('#mapModal').on('hidden.bs.modal', function () {
                \$('#map').empty();
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
        return array (  923 => 524,  919 => 523,  915 => 522,  911 => 521,  907 => 520,  848 => 463,  835 => 462,  819 => 455,  810 => 451,  808 => 450,  790 => 445,  786 => 444,  781 => 442,  777 => 441,  767 => 436,  759 => 432,  741 => 426,  734 => 421,  725 => 417,  712 => 416,  703 => 412,  697 => 410,  694 => 409,  676 => 408,  651 => 385,  645 => 381,  641 => 379,  621 => 373,  617 => 372,  613 => 371,  609 => 370,  605 => 369,  601 => 368,  597 => 367,  591 => 364,  587 => 363,  583 => 362,  579 => 361,  573 => 358,  567 => 356,  564 => 355,  547 => 354,  544 => 353,  542 => 352,  539 => 351,  537 => 350,  530 => 346,  518 => 336,  509 => 329,  503 => 327,  501 => 326,  497 => 325,  488 => 319,  474 => 312,  465 => 306,  459 => 302,  455 => 300,  447 => 298,  445 => 297,  441 => 295,  437 => 293,  433 => 291,  431 => 290,  421 => 282,  415 => 278,  406 => 273,  404 => 272,  396 => 268,  394 => 267,  387 => 262,  380 => 257,  378 => 256,  363 => 244,  232 => 115,  219 => 114,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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

        /* Sponsor image carousel styles */
        .sponsor-image-carousel {
            padding: 20px 0;
        }

        .sponsor-image-carousel .owl-item {
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .sponsor-image-carousel .sponsor-img {
            text-align: center;
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sponsor-image-carousel .sponsor-img img {
            width: 250px;
            height: 200px;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .sponsor-image-carousel .sponsor-img img:hover {
            transform: scale(1.05);
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
    <div class=\"modal fade\" id=\"mapModal\" tabindex endere=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <div class=\"container-fluid blog py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Our Sponsors</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Valued Partners</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>

            <!-- START: Sponsor Image Carousel Section -->
            <div class=\"sponsor-image-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                {% for sponsor in sponsors|default([]) %}
                    {% if sponsor.sponsorPicture %}
                        <div class=\"sponsor-img wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                            <a href=\"#\">
                                <img src=\"{{ asset('Uploads/sponsor_pictures/' ~ sponsor.sponsorPicture) }}\" class=\"img-fluid\" alt=\"{{ sponsor.nom }}\">
                            </a>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun sponsor trouvé.</p>
                    </div>
                {% endfor %}
            </div>
            <!-- END: Sponsor Image Carousel Section -->

            <!-- START: Blog Cards Section -->
            <div class=\"row\">
                {% for blog in blogs|default([
                    {'image': 'feature-4.jpg', 'title': 'Full Body Home Workout', 'author': 'Martin.C', 'date': '30 Dec 2025', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.'},
                    {'image': 'feature-3.jpg', 'title': '31-Day Fitness Calendar', 'author': 'Martin.C', 'date': '30 Dec 2025', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.'},
                    {'image': 'feature-2.jpg', 'title': 'At Home Ab Workout', 'author': 'Martin.C', 'date': '30 Dec 2025', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.'},
                    {'image': 'feature-1.jpg', 'title': 'Full Body Home Workout', 'author': 'Martin.C', 'date': '30 Dec 2025', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.'}
                ]) %}
                    <div class=\"col-md-6 col-lg-3 mb-4 wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                        <div class=\"blog-item\">
                            <div class=\"blog-img p-4 pb-0\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/' ~ blog.image) }}\" class=\"img-fluid w-100\" alt=\"{{ blog.title }}\">
                                </a>
                            </div>
                            <div class=\"blog-content p-4\">
                                <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                    <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>{{ blog.author }}</div>
                                    <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>{{ blog.date }}</div>
                                </div>
                                <a href=\"#\" class=\"h4 d-inline-block mb-3\">{{ blog.title }}</a>
                                <p class=\"mb-3\">{{ blog.description }}</p>
                                <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun blog trouvé.</p>
                    </div>
                {% endfor %}
            </div>
            <!-- END: Blog Cards Section -->
        </div>
    </div>
    <!-- Blog End -->
{% endblock %}

{% block javascripts %}
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>
    <script>
        \$(document).ready(function() {
            // Initialize Espace Carousel
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    576: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            // Initialize Sponsor Image Carousel
            \$(\".sponsor-image-carousel\").owlCarousel({
                items: 4,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 }
                }
            });

            // Map Modal Logic
            \$('#mapModal').on('shown.bs.modal', function (event) {
                var button = \$(event.relatedTarget);
                var lat = parseFloat(button.data('lat'));
                var lng = parseFloat(button.data('lng'));
                var nom = button.data('nom');
                var temp = button.data('weather-temp');
                var humidity = button.data('weather-humidity');
                var clouds = button.data('weather-clouds');
                var condition = button.data('weather-condition');

                \$('#mapModalLabel').text('Localisation de ' + nom);
                \$('#weather-temp').text(temp !== 'N/A' ? temp : 'N/A');
                \$('#weather-humidity').text(humidity !== 'N/A' ? humidity : 'N/A');
                \$('#weather-clouds').text(clouds !== 'N/A' ? clouds : 'N/A');

                var iconUrl = '';
                switch (condition.toLowerCase()) {
                    case 'clear': iconUrl = '{{ asset(\"img/weather/clear.png\") }}'; break;
                    case 'clouds': iconUrl = '{{ asset(\"img/weather/clouds.png\") }}'; break;
                    case 'rain': iconUrl = '{{ asset(\"img/weather/rain.png\") }}'; break;
                    case 'snow': iconUrl = '{{ asset(\"img/weather/snow.png\") }}'; break;
                    default: iconUrl = '{{ asset(\"img/weather/cloudy.png\") }}';
                }
                \$('#weather-icon').attr('src', iconUrl);

                mapboxgl.accessToken = 'pk.eyJ1IjoibWFydGludmVyc2FsbCIsImEiOiJjbTA5c3cwcjMwM2s3anBvb2N2NXR4M3QzIn0._Mfs0ZFRBPLG--yNglH0-A';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 12
                });

                map.on('load', function () {
                    new mapboxgl.Marker()
                        .setLngLat([lng, lat])
                        .setPopup(new mapboxgl.Popup().setHTML('<h6>' + nom + '</h6>'))
                        .addTo(map);
                });
            });

            \$('#mapModal').on('hidden.bs.modal', function () {
                \$('#map').empty();
            });
        });
    </script>
{% endblock %}", "Home.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\Home.html.twig");
    }
}
