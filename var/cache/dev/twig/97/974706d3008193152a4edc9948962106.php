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
class __TwigTemplate_60ca20b6319050bddae128112d175786 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>Fitness - Fitness Website Template</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap\" rel=\"stylesheet\">

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link rel=\"stylesheet\" href=\"lib/animate/animate.min.css\"/>
        <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

        <!-- Mapbox GL JS CSS -->
        <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"css/style.css\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle filters-none w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid header-top\">
            <div class=\"nav-shaps-2\"></div>
            <div class=\"container d-flex align-items-center\">
                <div class=\"d-flex align-items-center h-100\">
                    <a href=\"#\" class=\"navbar-brand\" style=\"height: 125px;\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                    </a>
                </div>
                <div class=\"w-100 h-100\">
                    <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                        <div class=\"row gx-0 align-items-center\">
                            <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                                <div class=\"d-flex flex-wrap\">
                                    <div class=\"pe-4\">
                                        <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>example@gmail.com</a>
                                    </div>
                                    <div class=\"pe-0\">
                                        <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 text-center text-lg-end\">
                                <div class=\"d-flex justify-content-end\">
                                    <div class=\"d-flex align-items-center small\">
                                        <a href=\"#\" class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                        <a href=\"#\" class=\"text-body me-3\"> Register</a>
                                    </div>
                                    <div class=\"d-flex pe-3\">
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        <a class=\"btn p-0 text-primary me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                        <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                            <a href=\"#\" class=\"navbar-brand-2\">
                                <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                            </a> 
                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                                    <a href=\"course.html\" class=\"nav-item nav-link\">Matches</a>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Venue</a>
                                    <div class=\"nav-item dropdown\">
                                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                            <span class=\"dropdown-toggle\">Team</span>
                                        </a>
                                        <div class=\"dropdown-menu\">
                                            <a href=\"feature.html\" class=\"dropdown-item\">Our Features</a>
                                            <a href=\"team.html\" class=\"dropdown-item\">Our team</a>
                                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                            <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                        </div>
                                    </div>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Logistics</a>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Sponsor</a>
                                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                                    <div class=\"nav-btn ps-3\">
                                        <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                        <a href=\"#\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"> <span>Get Quote</span></a>
                                    </div>
                                    <div class=\"nav-shaps-1\"></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

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
                                    <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                    </p>
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
                                    <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                    </p>
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
                                            <a href=\"tel:+ 0123 456 7890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"about-img h-100\">
                            <div class=\"about-img-inner d-flex h-100\">
                                <img src=\"img/about-2.png\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fitness Goal start -->
        <div class=\"container-fluid goal pt-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">Fitness Goal</h4>
                            <h1 class=\"display-4 mb-4\">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                            <div class=\"goal-item d-flex p-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"img/icon-1.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Free Fitness Training</h4>
                                    <p class=\"text-white mb-0\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class=\"goal-item d-flex p-4 mb-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"img/icon-6.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Cardio and Strength</h4>
                                    <p class=\"text-white mb-0\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class=\"ms-1\">
                                <a href=\"#\" class=\"btn btn-primary py-3 px-5 ms-2\"> <span>Read Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100\">
                            <img src=\"img/fitness-goal-banner.png\" class=\"img-fluid h-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- All Espaces Sportifs Carousel -->
        <div class=\"container-fluid feature bg-light py-5\">
            <div class=\"container py-5 position-relative\">
                <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                    <h4 class=\"text-primary\">Why choose us?</h4>
                    <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                    <p class=\"mb-3\">";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 334, $this->source); })()), "html", null, true);
        yield "</p>
                    <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
                </div>

                ";
        // line 338
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 339
        yield "
                ";
        // line 340
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 340, $this->source); })())) > 0)) {
            // line 341
            yield "                    <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                        ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 342, $this->source); })()));
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
                // line 343
                yield "                            ";
                $context["espace"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "espace", [], "any", false, false, false, 343);
                // line 344
                yield "                            <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 344) * 0.2)), "html", null, true);
                yield "s\">
                                <div class=\"feature-img\">
                                    <img src=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 346, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 346) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 346, $this->source); })()))), [], "array", false, false, false, 346))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                                </div>
                                <div class=\"feature-content p-4\">
                                    <h4 class=\"mb-3\">";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 349, $this->source); })()), "nom_espace", [], "any", false, false, false, 349), "html", null, true);
                yield "</h4>
                                    <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 350, $this->source); })()), "adresse", [], "any", false, false, false, 350), "html", null, true);
                yield "</p>
                                    <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 351, $this->source); })()), "categorie", [], "any", false, false, false, 351), "html", null, true);
                yield "</p>
                                    <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 352, $this->source); })()), "capacite", [], "any", false, false, false, 352), "html", null, true);
                yield " personnes</p>
                                    <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                    <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                       data-lat=\"";
                // line 355
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", true, true, false, 355) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 355)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 355), "html", null, true)) : (""));
                yield "\" 
                                       data-lng=\"";
                // line 356
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", true, true, false, 356) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 356)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 356), "html", null, true)) : (""));
                yield "\" 
                                       data-nom=\"";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 357, $this->source); })()), "nom_espace", [], "any", false, false, false, 357), "html", null, true);
                yield "\"
                                       data-weather-temp=\"";
                // line 358
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 358), "temp", [], "any", true, true, false, 358) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 358), "temp", [], "any", false, false, false, 358)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 358), "temp", [], "any", false, false, false, 358), "html", null, true)) : ("N/A"));
                yield "\"
                                       data-weather-humidity=\"";
                // line 359
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 359), "humidity", [], "any", true, true, false, 359) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 359), "humidity", [], "any", false, false, false, 359)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 359), "humidity", [], "any", false, false, false, 359), "html", null, true)) : ("N/A"));
                yield "\"
                                       data-weather-clouds=\"";
                // line 360
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 360), "cloud_pct", [], "any", true, true, false, 360) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 360), "cloud_pct", [], "any", false, false, false, 360)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 360), "cloud_pct", [], "any", false, false, false, 360), "html", null, true)) : ("N/A"));
                yield "\"
                                       data-weather-condition=\"";
                // line 361
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 361), "condition", [], "any", true, true, false, 361) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 361), "condition", [], "any", false, false, false, 361)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 361), "condition", [], "any", false, false, false, 361), "html", null, true)) : ("cloudy"));
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
            // line 367
            yield "                    </div>
                ";
        } else {
            // line 369
            yield "                    <div class=\"col-12 text-center\">
                        <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                    </div>
                ";
        }
        // line 373
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
                            <span aria-hidden=\"true\">&times;</span>
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
                    <h4 class=\"text-primary\"> Our Courses</h4>
                    <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                    <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class=\"row gy-4 gx-0 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-1.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Gym Fitness Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-2.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Power Lifting Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-3.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Body Building Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner technology p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-4.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Aerobics & Skipping Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-5.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Boxing Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-6.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Cardio Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
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
                    <h4 class=\"text-primary\">  Our Blogs</h4>
                    <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                    <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class=\"blog-carousel owl-carousel\">
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-4.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-3.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">31-Day Fitness Calendar</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-2.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">At Home Ab Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-1.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Explore Fitness Start -->
        <div class=\"container-fluid explore py-5 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5 text-center\">
                <h1 class=\"display-1 text-white mb-0\"> Explore Fitness Center</h1>
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
                                <img src=\"img/team-1.png\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-3.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-2.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-4.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-5.jpeg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-6.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                    <h4 class=\"text-primary\">Testimonial</h4>
                    <h1 class=\"display-4 text-white\">What Our Customers Are Saying</h1>
                </div>
                <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"img/testimonial-1.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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
                            <img src=\"img/testimonial-2.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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
                            <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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

        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5\">
                <div class=\"row g-5 mb-5 align-items-center\">
                    <div class=\"col-lg-7\">
                        <div class=\"position-relative d-flex\" style=\"transform: skew(18deg);\">
                            <input class=\"form-control border-0 w-100 py-3 pe-5\" type=\"text\" placeholder=\"Email address to Subscribe\">
                            <button type=\"button\" class=\"btn-primary py-2 px-4 ms-3\"> <span>Subscribe</span></button>
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex align-items-center justify-content-center justify-content-lg-end\">
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-0\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                            <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Quick Links</h4>
                            <a href=\"#\"> Home</a>
                            <a href=\"#\"> About us</a>
                            <a href=\"#\"> Our Courses</a>
                            <a href=\"#\"> Our Features</a>
                            <a href=\"#\"> Our Blog & news</a>
                            <a href=\"#\"> Testimonial</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\"> Contact Info</h4>
                            <div class=\"row g-2\">
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fas fa-map-marker-alt text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Address</h5>
                                            <p class=\"mb-0\">123 street New York</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fas fa-envelope text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Mail Us</h5>
                                            <p class=\"mb-0\">info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Telephone</h5>
                                            <p class=\"mb-0\">(+012) 3456 7890 123</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Recent Work</h4>
                            <div class=\"row g-2\">
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-9.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-10.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-11.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-12.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-4.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-5.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-6.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-7.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-8.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class=\"container-fluid copyright py-4\">
            <div class=\"container\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-md-6 text-center text-md-start mb-md-0\">
                        <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end text-body\">
                        Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        Distributed By <a href=\"https://themewagon.com/\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <div class=\"back-to-top\">
            <a href=\"#\" class=\"btn\"><i class=\"fa fa-arrow-up\"></i></a>  
        </div> 

        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"lib/wow/wow.min.js\"></script>
        <script src=\"lib/easing/easing.min.js\"></script>
        <script src=\"lib/waypoints/waypoints.min.js\"></script>
        <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
        <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

        <!-- Template Javascript -->
        <script src=\"js/main.js\"></script>

        <!-- Map and Modal JavaScript -->
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
        // line 1101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "' :
                                      condition === 'rainy' ? '";
        // line 1102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rain_weather.png"), "html", null, true);
        yield "' :
                                      '";
        // line 1103
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
            });
        </script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  1242 => 1103,  1238 => 1102,  1234 => 1101,  504 => 373,  498 => 369,  494 => 367,  474 => 361,  470 => 360,  466 => 359,  462 => 358,  458 => 357,  454 => 356,  450 => 355,  444 => 352,  440 => 351,  436 => 350,  432 => 349,  426 => 346,  420 => 344,  417 => 343,  400 => 342,  397 => 341,  395 => 340,  392 => 339,  390 => 338,  383 => 334,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>Fitness - Fitness Website Template</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap\" rel=\"stylesheet\">

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link rel=\"stylesheet\" href=\"lib/animate/animate.min.css\"/>
        <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

        <!-- Mapbox GL JS CSS -->
        <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"css/style.css\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle filters-none w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid header-top\">
            <div class=\"nav-shaps-2\"></div>
            <div class=\"container d-flex align-items-center\">
                <div class=\"d-flex align-items-center h-100\">
                    <a href=\"#\" class=\"navbar-brand\" style=\"height: 125px;\">
                        <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                    </a>
                </div>
                <div class=\"w-100 h-100\">
                    <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                        <div class=\"row gx-0 align-items-center\">
                            <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                                <div class=\"d-flex flex-wrap\">
                                    <div class=\"pe-4\">
                                        <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>example@gmail.com</a>
                                    </div>
                                    <div class=\"pe-0\">
                                        <a href=\"mailto:example@gmail.com\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 text-center text-lg-end\">
                                <div class=\"d-flex justify-content-end\">
                                    <div class=\"d-flex align-items-center small\">
                                        <a href=\"#\" class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                        <a href=\"#\" class=\"text-body me-3\"> Register</a>
                                    </div>
                                    <div class=\"d-flex pe-3\">
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"btn p-0 text-primary me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                        <a class=\"btn p-0 text-primary me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                        <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                            <a href=\"#\" class=\"navbar-brand-2\">
                                <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                            </a> 
                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                                    <a href=\"course.html\" class=\"nav-item nav-link\">Matches</a>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Venue</a>
                                    <div class=\"nav-item dropdown\">
                                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                            <span class=\"dropdown-toggle\">Team</span>
                                        </a>
                                        <div class=\"dropdown-menu\">
                                            <a href=\"feature.html\" class=\"dropdown-item\">Our Features</a>
                                            <a href=\"team.html\" class=\"dropdown-item\">Our team</a>
                                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                            <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                                        </div>
                                    </div>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Logistics</a>
                                    <a href=\"blog.html\" class=\"nav-item nav-link\">Sponsor</a>
                                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                                    <div class=\"nav-btn ps-3\">
                                        <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                        <a href=\"#\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"> <span>Get Quote</span></a>
                                    </div>
                                    <div class=\"nav-shaps-1\"></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center bg-primary\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"btn bg-light border nput-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

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
                                    <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                    </p>
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
                                    <p class=\"mb-5 fs-5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                    </p>
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
                                            <a href=\"tel:+ 0123 456 7890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"about-img h-100\">
                            <div class=\"about-img-inner d-flex h-100\">
                                <img src=\"img/about-2.png\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fitness Goal start -->
        <div class=\"container-fluid goal pt-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                        <div class=\"goal-content\">
                            <h4 class=\"text-primary\">Fitness Goal</h4>
                            <h1 class=\"display-4 mb-4\">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                            <div class=\"goal-item d-flex p-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"img/icon-1.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Free Fitness Training</h4>
                                    <p class=\"text-white mb-0\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class=\"goal-item d-flex p-4 mb-4\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"img/icon-6.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>Cardio and Strength</h4>
                                    <p class=\"text-white mb-0\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class=\"ms-1\">
                                <a href=\"#\" class=\"btn btn-primary py-3 px-5 ms-2\"> <span>Read Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                        <div class=\"h-100\">
                            <img src=\"img/fitness-goal-banner.png\" class=\"img-fluid h-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- All Espaces Sportifs Carousel -->
        <div class=\"container-fluid feature bg-light py-5\">
            <div class=\"container py-5 position-relative\">
                <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                    <h4 class=\"text-primary\">Why choose us?</h4>
                    <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                    <p class=\"mb-3\">{{ espaces_description }}</p>
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
                            <span aria-hidden=\"true\">&times;</span>
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
                    <h4 class=\"text-primary\"> Our Courses</h4>
                    <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                    <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class=\"row gy-4 gx-0 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-1.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Gym Fitness Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-2.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Power Lifting Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-3.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Body Building Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner technology p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-4.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Aerobics & Skipping Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-5.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Boxing Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"img/icon-6.png\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">Paul Flavius</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> Cardio Class</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
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
                    <h4 class=\"text-primary\">  Our Blogs</h4>
                    <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                    <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class=\"blog-carousel owl-carousel\">
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-4.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-3.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">31-Day Fitness Calendar</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-2.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">At Home Ab Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"img/feature-1.jpg\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> Martin.C</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> 30 Dec 2025</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">Full Body Home Workout</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span>  <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Explore Fitness Start -->
        <div class=\"container-fluid explore py-5 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5 text-center\">
                <h1 class=\"display-1 text-white mb-0\"> Explore Fitness Center</h1>
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
                                <img src=\"img/team-1.png\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-3.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-2.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-4.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-5.jpeg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                                <img src=\"img/team-6.jpg\" class=\"img-fluid w-100\" alt=\"Image\">
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
                    <h4 class=\"text-primary\">Testimonial</h4>
                    <h1 class=\"display-4 text-white\">What Our Customers Are Saying</h1>
                </div>
                <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"img/testimonial-1.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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
                            <img src=\"img/testimonial-2.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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
                            <img src=\"img/testimonial-3.jpg\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">Client Name</h4>
                            <p class=\"m-0 pb-3\">Profession</p>
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

        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5\">
                <div class=\"row g-5 mb-5 align-items-center\">
                    <div class=\"col-lg-7\">
                        <div class=\"position-relative d-flex\" style=\"transform: skew(18deg);\">
                            <input class=\"form-control border-0 w-100 py-3 pe-5\" type=\"text\" placeholder=\"Email address to Subscribe\">
                            <button type=\"button\" class=\"btn-primary py-2 px-4 ms-3\"> <span>Subscribe</span></button>
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex align-items-center justify-content-center justify-content-lg-end\">
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-primary btn-md-square me-0\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                            <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Quick Links</h4>
                            <a href=\"#\"> Home</a>
                            <a href=\"#\"> About us</a>
                            <a href=\"#\"> Our Courses</a>
                            <a href=\"#\"> Our Features</a>
                            <a href=\"#\"> Our Blog & news</a>
                            <a href=\"#\"> Testimonial</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\"> Contact Info</h4>
                            <div class=\"row g-2\">
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fas fa-map-marker-alt text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Address</h5>
                                            <p class=\"mb-0\">123 street New York</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fas fa-envelope text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Mail Us</h5>
                                            <p class=\"mb-0\">info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"d-flex\">
                                        <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                        <div>
                                            <h5 class=\"text-white mb-2\">Telephone</h5>
                                            <p class=\"mb-0\">(+012) 3456 7890 123</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Recent Work</h4>
                            <div class=\"row g-2\">
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-9.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-10.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-11.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-12.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-4.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-5.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-6.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-7.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"img/work-8.jpg\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class=\"container-fluid copyright py-4\">
            <div class=\"container\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-md-6 text-center text-md-start mb-md-0\">
                        <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end text-body\">
                        Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        Distributed By <a href=\"https://themewagon.com/\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <div class=\"back-to-top\">
            <a href=\"#\" class=\"btn\"><i class=\"fa fa-arrow-up\"></i></a>  
        </div> 

        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\"lib/wow/wow.min.js\"></script>
        <script src=\"lib/easing/easing.min.js\"></script>
        <script src=\"lib/waypoints/waypoints.min.js\"></script>
        <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
        <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

        <!-- Template Javascript -->
        <script src=\"js/main.js\"></script>

        <!-- Map and Modal JavaScript -->
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
            });
        </script>
    </body>
</html>", "Home.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\Home.html.twig");
    }
}
