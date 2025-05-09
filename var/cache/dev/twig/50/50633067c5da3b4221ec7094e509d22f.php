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

/* baseM.html.twig */
class __TwigTemplate_e8d317b44ad2d18c1d9ffd0d11aabb09 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseM.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseM.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "    </title>
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
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\"/>
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 33
        yield "</head>
<body>
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
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
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                </a>
            </div>
            <div class=\"w-100 h-100\">
                <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                    <div class=\"row gx-0 align-items-center\">
                        <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                            <div class=\"d-flex flex-wrap\">
                                <div class=\"pe-4\">
                                    <a href=\"mailto:info@fitness.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>info@fitness.com</a>
                                </div>
                                <div class=\"pe-0\">
                                    <a href=\"#\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                             <div class=\"d-flex align-items-center small\">
  ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "get", ["user"], "method", false, false, false, 68)) {
            // line 69
            yield "    <!-- Utilisateur connecté : afficher l'image de profil et le menu déroulant -->
    <div class=\"dropdown d-flex align-items-start\">
        <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "session", [], "any", false, false, false, 72), "get", ["user"], "method", false, false, false, 72), "image", [], "any", false, false, false, 72)) {
                // line 73
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", ["user"], "method", false, false, false, 73), "image", [], "any", false, false, false, 73))), "html", null, true);
                yield "\" 
                     class=\"rounded-circle\" 
                     style=\"width: 40px; height: 40px; object-fit: cover;\" 
                     alt=\"Profile\">
            ";
            } else {
                // line 78
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-profile.png"), "html", null, true);
                yield "\" 
                     class=\"rounded-circle\" 
                     style=\"width: 40px; height: 40px; object-fit: cover;\" 
                     alt=\"Default Profile\">
            ";
            }
            // line 83
            yield "        </a>
        <ul class=\"dropdown-menu dropdown-menu-end\">
            <li class=\"dropdown-item-text fw-bold\">
                ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", ["user"], "method", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", ["user"], "method", false, false, false, 86), "prenom", [], "any", false, false, false, 86), "html", null, true);
            yield "
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
                <a class=\"dropdown-item\" href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile_front");
            yield "\">
                    <i class=\"fas fa-user\"></i> My Profile
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logoutF");
            yield "\">
                    <i class=\"fas fa-power-off\"></i> Log Out
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 102
            yield "    <!-- Utilisateur non connecté : afficher login et register -->
    <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"login-btn text-body me-3 pe-3\"><span>Login</span></a>
    <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerF");
            yield "\" class=\"text-body me-3\">Register</a>
";
        }
        // line 106
        yield "

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
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
                                <a href=\"#\" class=\"nav-item nav-link\">About</a>
                               
                                <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_mainF");
        yield "\" class=\"nav-item nav-link\">Matches</a>
                                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_sportifs");
        yield "\" class=\"nav-item nav-link\">Espaces</a>
                                <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_features");
        yield "\" class=\"nav-item nav-link\">Our Features</a>
                                 
                                
                                <!-- Menu Logistics -->
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                        Logistics
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                       <a class=\"dropdown-item\" href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_indexF");
        yield "\">Matériel</a>
        <a class=\"dropdown-item\" href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_indexF");
        yield "\">Fournisseurs</a>

                                    </div>
                                </div>
                                <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_front");
        yield "\" class=\"nav-item nav-link\">Sponsor</a>
                                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gemini_chat");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-btn ps-3\">
                                    <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                    <a href=\"#\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"><span>Get Quote</span></a>
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
                        <span id=\"search-icon-1\" class=\"btn bg-light border input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Main Content Area -->
    ";
        // line 184
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 193
        yield "
    <!-- Footer Start -->
    <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5\">
            <div class=\"row g-5 mb-5 align-items-center\">
                <div class=\"col-lg-7\">
                    <div class=\"position-relative d-flex\" style=\"transform: skew(18deg);\">
                        <input class=\"form-control border-0 w-100 py-3 pe-5\" type=\"text\" placeholder=\"Email address to Subscribe\">
                        <button type=\"button\" class=\"btn-primary py-2 px-4 ms-3\"><span>Subscribe</span></button>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-lg-end\">
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i>MatchupZ</h4>
                        <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        <a href=\"#\">Home</a>
                        <a href=\"#\">About us</a>
                        <a href=\"#\">Our Courses</a>
                        <a href=\"#\">Our Features</a>
                        <a href=\"#\">Our Blog & news</a>
                        <a href=\"#\">Testimonial</a>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Contact Info</h4>
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
                                        <p class=\"mb-0\"><a href=\"mailto:info@fitness.com\">info@fitness.com</a></p>
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
                            ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(9, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 270
            yield "                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/work-" . $context["i"]) . ".jpg")), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 277
            yield "                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/work-" . $context["i"]) . ".jpg")), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "                        </div>
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
                    <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Fitness</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 text-center text-md-end text-body\">
                    Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    Distributed By <a href=\"https://themewagon.com/\" class=\"border-bottom text-white\">ThemeWagon</a>
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
    <script src=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 323
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 331
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Fitness";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 184
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

        // line 185
        yield "        <!-- Default content if not overridden -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <h1>Welcome to MatchupZ</h1>
                <p>This is the default content of the base template. Override this in child templates.</p>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 323
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

        // line 324
        yield "        <script>
            // Fallback to hide spinner after 3 seconds
            setTimeout(function() {
                document.getElementById('spinner').classList.remove('show');
            }, 3000);
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
        return "baseM.html.twig";
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
        return array (  587 => 324,  574 => 323,  556 => 185,  543 => 184,  521 => 32,  498 => 7,  486 => 331,  484 => 323,  479 => 321,  473 => 318,  469 => 317,  465 => 316,  461 => 315,  427 => 283,  417 => 279,  413 => 277,  408 => 276,  398 => 272,  394 => 270,  390 => 269,  312 => 193,  310 => 184,  272 => 149,  268 => 148,  261 => 144,  257 => 143,  245 => 134,  241 => 133,  237 => 132,  209 => 106,  204 => 104,  200 => 103,  197 => 102,  187 => 95,  179 => 90,  170 => 86,  165 => 83,  156 => 78,  147 => 73,  145 => 72,  140 => 69,  138 => 68,  101 => 33,  99 => 32,  94 => 30,  88 => 27,  82 => 24,  78 => 23,  61 => 8,  59 => 7,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/baseM.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>
        {% block title %}Fitness{% endblock %}
    </title>
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
    <link rel=\"stylesheet\" href=\"{{ asset('lib/animate/animate.min.css') }}\"/>
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>
<body>
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
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
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                </a>
            </div>
            <div class=\"w-100 h-100\">
                <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                    <div class=\"row gx-0 align-items-center\">
                        <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                            <div class=\"d-flex flex-wrap\">
                                <div class=\"pe-4\">
                                    <a href=\"mailto:info@fitness.com\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>info@fitness.com</a>
                                </div>
                                <div class=\"pe-0\">
                                    <a href=\"#\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                             <div class=\"d-flex align-items-center small\">
  {% if app.session.get('user') %}
    <!-- Utilisateur connecté : afficher l'image de profil et le menu déroulant -->
    <div class=\"dropdown d-flex align-items-start\">
        <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {% if app.session.get('user').image %}
                <img src=\"{{ asset('uploads/users/' ~ app.session.get('user').image) }}\" 
                     class=\"rounded-circle\" 
                     style=\"width: 40px; height: 40px; object-fit: cover;\" 
                     alt=\"Profile\">
            {% else %}
                <img src=\"{{ asset('images/default-profile.png') }}\" 
                     class=\"rounded-circle\" 
                     style=\"width: 40px; height: 40px; object-fit: cover;\" 
                     alt=\"Default Profile\">
            {% endif %}
        </a>
        <ul class=\"dropdown-menu dropdown-menu-end\">
            <li class=\"dropdown-item-text fw-bold\">
                {{ app.session.get('user').nom }} {{ app.session.get('user').prenom }}
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
                <a class=\"dropdown-item\" href=\"{{ path('app_user_profile_front') }}\">
                    <i class=\"fas fa-user\"></i> My Profile
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"{{ path('app_user_logoutF') }}\">
                    <i class=\"fas fa-power-off\"></i> Log Out
                </a>
            </li>
        </ul>
    </div>
{% else %}
    <!-- Utilisateur non connecté : afficher login et register -->
    <a href=\"{{ path('app_login') }}\" class=\"login-btn text-body me-3 pe-3\"><span>Login</span></a>
    <a href=\"{{ path('app_registerF') }}\" class=\"text-body me-3\">Register</a>
{% endif %}


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
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
                                <a href=\"#\" class=\"nav-item nav-link\">About</a>
                               
                                <a href=\"{{ path('schedule_mainF') }}\" class=\"nav-item nav-link\">Matches</a>
                                <a href=\"{{ path('app_espace_sportifs') }}\" class=\"nav-item nav-link\">Espaces</a>
                                <a href=\"{{ path('app_features') }}\" class=\"nav-item nav-link\">Our Features</a>
                                 
                                
                                <!-- Menu Logistics -->
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                        Logistics
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                       <a class=\"dropdown-item\" href=\"{{ path('app_materiel_indexF') }}\">Matériel</a>
        <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_indexF') }}\">Fournisseurs</a>

                                    </div>
                                </div>
                                <a href=\"{{ path('sponsor_front') }}\" class=\"nav-item nav-link\">Sponsor</a>
                                <a href=\"{{ path('gemini_chat') }}\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-btn ps-3\">
                                    <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                    <a href=\"#\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"><span>Get Quote</span></a>
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
                        <span id=\"search-icon-1\" class=\"btn bg-light border input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Main Content Area -->
    {% block body %}
        <!-- Default content if not overridden -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <h1>Welcome to MatchupZ</h1>
                <p>This is the default content of the base template. Override this in child templates.</p>
            </div>
        </div>
    {% endblock %}

    <!-- Footer Start -->
    <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5\">
            <div class=\"row g-5 mb-5 align-items-center\">
                <div class=\"col-lg-7\">
                    <div class=\"position-relative d-flex\" style=\"transform: skew(18deg);\">
                        <input class=\"form-control border-0 w-100 py-3 pe-5\" type=\"text\" placeholder=\"Email address to Subscribe\">
                        <button type=\"button\" class=\"btn-primary py-2 px-4 ms-3\"><span>Subscribe</span></button>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-lg-end\">
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-3\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn btn-primary btn-md-square me-0\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i>MatchupZ</h4>
                        <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        <a href=\"#\">Home</a>
                        <a href=\"#\">About us</a>
                        <a href=\"#\">Our Courses</a>
                        <a href=\"#\">Our Features</a>
                        <a href=\"#\">Our Blog & news</a>
                        <a href=\"#\">Testimonial</a>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Contact Info</h4>
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
                                        <p class=\"mb-0\"><a href=\"mailto:info@fitness.com\">info@fitness.com</a></p>
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
                            {% for i in 9..12 %}
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"{{ asset('img/work-' ~ i ~ '.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            {% endfor %}
                            {% for i in 1..8 %}
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"{{ asset('img/work-' ~ i ~ '.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            {% endfor %}
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
                    <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Fitness</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 text-center text-md-end text-body\">
                    Designed By <a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    Distributed By <a href=\"https://themewagon.com/\" class=\"border-bottom text-white\">ThemeWagon</a>
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
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

    {% block javascripts %}
        <script>
            // Fallback to hide spinner after 3 seconds
            setTimeout(function() {
                document.getElementById('spinner').classList.remove('show');
            }, 3000);
        </script>
    {% endblock %}
</body>
</html>", "baseM.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\baseM.html.twig");
    }
}
