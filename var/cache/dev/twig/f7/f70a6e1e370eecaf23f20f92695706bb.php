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

/* @front/baseF.html.twig */
class __TwigTemplate_525933849407b780c24cabe88a797b1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@front/baseF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@front/baseF.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\"/>
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
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
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\" style=\"height: 125px;\">
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                </a>
            </div>
            <div class=\"w-100 h-100\">
                <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                    <div class=\"row gx-0 align-items-center\">
                        <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                            <div class=\"d-flex flex-wrap\">
                                <div class=\"pe-4\">
                                    <a href=\"mailto:";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("contact_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 57, $this->source); })()), "example@gmail.com")) : ("example@gmail.com")), "html", null, true);
        yield "\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("contact_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 57, $this->source); })()), "example@gmail.com")) : ("example@gmail.com")), "html", null, true);
        yield "</a>
                                </div>
                                <div class=\"pe-0\">
                                    <a href=\"mailto:";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("contact_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 60, $this->source); })()), "example@gmail.com")) : ("example@gmail.com")), "html", null, true);
        yield "\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("opening_hours", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["opening_hours"]) || array_key_exists("opening_hours", $context) ? $context["opening_hours"] : (function () { throw new RuntimeError('Variable "opening_hours" does not exist.', 60, $this->source); })()), "Mon - Sat: 8.00 am-7.00 pm")) : ("Mon - Sat: 8.00 am-7.00 pm")), "html", null, true);
        yield "</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                                <div class=\"d-flex align-items-center small\">
                                    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                    <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-body me-3\"> Register</a>
                                </div>
                                <div class=\"d-flex pe-3\">
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("social_links", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["social_links"]) || array_key_exists("social_links", $context) ? $context["social_links"] : (function () { throw new RuntimeError('Variable "social_links" does not exist.', 71, $this->source); })()), [["url" => "", "icon" => "fab fa-facebook-f"], ["url" => "", "icon" => "fab fa-twitter"], ["url" => "", "icon" => "fab fa-instagram"], ["url" => "", "icon" => "fab fa-linkedin-in"]])) : ([["url" => "", "icon" => "fab fa-facebook-f"], ["url" => "", "icon" => "fab fa-twitter"], ["url" => "", "icon" => "fab fa-instagram"], ["url" => "", "icon" => "fab fa-linkedin-in"]])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 77
            yield "                                        <a class=\"btn p-0 text-primary me-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77)) ? ("0") : ("3"));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 77), "html", null, true);
            yield "\"><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 77), "html", null, true);
            yield "\"></i></a>
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
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                    <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-item nav-link\">About</a>
                                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course");
        yield "\" class=\"nav-item nav-link\">Matches</a>
                                <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venue");
        yield "\" class=\"nav-item nav-link\">Venue</a>
                                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics");
        yield "\" class=\"nav-item nav-link\">Logistics</a>
                                <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor");
        yield "\" class=\"nav-item nav-link\">Sponsor</a>
                                <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                        <span class=\"dropdown-toggle\">Team</span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feature");
        yield "\" class=\"dropdown-item\">Our Features</a>
                                        <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"dropdown-item\">Our team</a>
                                        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                                    </div>
                                </div>
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
                        <span id=\"search-icon-1\" class=\"btn bg-light border input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Main Content -->
    ";
        // line 146
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 147
        yield "
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
                        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("footer_social_links", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["footer_social_links"]) || array_key_exists("footer_social_links", $context) ? $context["footer_social_links"] : (function () { throw new RuntimeError('Variable "footer_social_links" does not exist.', 160, $this->source); })()), [["icon" => "fab fa-facebook-f", "url" => ""], ["icon" => "fab fa-twitter", "url" => ""], ["icon" => "fab fa-instagram", "url" => ""], ["icon" => "fab fa-linkedin-in", "url" => ""]])) : ([["icon" => "fab fa-facebook-f", "url" => ""], ["icon" => "fab fa-twitter", "url" => ""], ["icon" => "fab fa-instagram", "url" => ""], ["icon" => "fab fa-linkedin-in", "url" => ""]])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 166
            yield "                            <a class=\"btn btn-primary btn-md-square me-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 166)) ? ("0") : ("3"));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 166), "html", null, true);
            yield "\"><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 166), "html", null, true);
            yield "\"></i></a>
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
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                        <p class=\"mb-0\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "about_text", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 175, $this->source); })()), "about_text", [], "any", false, false, false, 175), "Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.")) : ("Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.")), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "quick_links", [], "any", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 181, $this->source); })()), "quick_links", [], "any", false, false, false, 181), [["name" => "Home", "path" => "app_home"], ["name" => "About us", "path" => "app_about"], ["name" => "Our Courses", "path" => "app_course"], ["name" => "Our Features", "path" => "app_feature"], ["name" => "Our Blog & news", "path" => "app_blog"], ["name" => "Testimonial", "path" => "app_testimonial"]])) : ([["name" => "Home", "path" => "app_home"], ["name" => "About us", "path" => "app_about"], ["name" => "Our Courses", "path" => "app_course"], ["name" => "Our Features", "path" => "app_feature"], ["name" => "Our Blog & news", "path" => "app_blog"], ["name" => "Testimonial", "path" => "app_testimonial"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 189
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, false, 189));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 189), "html", null, true);
            yield "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "                    </div>
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
                                        <p class=\"mb-0\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "address", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 202, $this->source); })()), "address", [], "any", false, false, false, 202), "123 street New York")) : ("123 street New York")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"d-flex\">
                                    <i class=\"fas fa-envelope text-primary me-2\"></i>
                                    <div>
                                        <h5 class=\"text-white mb-2\">Mail Us</h5>
                                        <p class=\"mb-0\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "email", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 211, $this->source); })()), "email", [], "any", false, false, false, 211), "info@example.com")) : ("info@example.com")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"d-flex\">
                                    <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                    <div>
                                        <h5 class=\"text-white mb-2\">Telephone</h5>
                                        <p class=\"mb-0\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "phone", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 220, $this->source); })()), "phone", [], "any", false, false, false, 220), "(+012) 3456 7890 123")) : ("(+012) 3456 7890 123")), "html", null, true);
        yield "</p>
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
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "recent_works", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 231, $this->source); })()), "recent_works", [], "any", false, false, false, 231), ["work-9.jpg", "work-10.jpg", "work-11.jpg", "work-12.jpg", "work-1.jpg", "work-2.jpg", "work-3.jpg", "work-4.jpg", "work-5.jpg", "work-6.jpg", "work-7.jpg", "work-8.jpg"])) : (["work-9.jpg", "work-10.jpg", "work-11.jpg", "work-12.jpg", "work-1.jpg", "work-2.jpg", "work-3.jpg", "work-4.jpg", "work-5.jpg", "work-6.jpg", "work-7.jpg", "work-8.jpg"])));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 236
            yield "                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["work"])), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['work'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
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
                    <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 255, $this->source); })()), "Your Site Name")) : ("Your Site Name")), "html", null, true);
        yield "</a>, All right reserved.</span>
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
    <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 282
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 283
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

        yield "Fitness - Fitness Website Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

    // line 146
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 282
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@front/baseF.html.twig";
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
        return array (  602 => 282,  580 => 146,  558 => 30,  535 => 9,  523 => 283,  521 => 282,  516 => 280,  510 => 277,  506 => 276,  502 => 275,  498 => 274,  476 => 255,  461 => 242,  451 => 238,  447 => 236,  443 => 231,  429 => 220,  417 => 211,  405 => 202,  392 => 191,  381 => 189,  377 => 181,  368 => 175,  359 => 168,  338 => 166,  321 => 160,  306 => 147,  304 => 146,  264 => 109,  260 => 108,  256 => 107,  252 => 106,  243 => 100,  239 => 99,  235 => 98,  231 => 97,  227 => 96,  223 => 95,  219 => 94,  208 => 86,  199 => 79,  178 => 77,  161 => 71,  155 => 68,  151 => 67,  139 => 60,  131 => 57,  118 => 47,  100 => 31,  98 => 30,  93 => 28,  87 => 25,  81 => 22,  77 => 21,  62 => 9,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>{% block title %}Fitness - Fitness Website Template{% endblock %}</title>

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
                <a href=\"{{ path('app_home') }}\" class=\"navbar-brand\" style=\"height: 125px;\">
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                </a>
            </div>
            <div class=\"w-100 h-100\">
                <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                    <div class=\"row gx-0 align-items-center\">
                        <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                            <div class=\"d-flex flex-wrap\">
                                <div class=\"pe-4\">
                                    <a href=\"mailto:{{ contact_email|default('example@gmail.com') }}\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>{{ contact_email|default('example@gmail.com') }}</a>
                                </div>
                                <div class=\"pe-0\">
                                    <a href=\"mailto:{{ contact_email|default('example@gmail.com') }}\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>{{ opening_hours|default('Mon - Sat: 8.00 am-7.00 pm') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                                <div class=\"d-flex align-items-center small\">
                                    <a href=\"{{ path('app_login') }}\" class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                    <a href=\"{{ path('app_register') }}\" class=\"text-body me-3\"> Register</a>
                                </div>
                                <div class=\"d-flex pe-3\">
                                    {% for social in social_links|default([
                                        {'url': '', 'icon': 'fab fa-facebook-f'},
                                        {'url': '', 'icon': 'fab fa-twitter'},
                                        {'url': '', 'icon': 'fab fa-instagram'},
                                        {'url': '', 'icon': 'fab fa-linkedin-in'}
                                    ]) %}
                                        <a class=\"btn p-0 text-primary me-{{ loop.last ? '0' : '3' }}\" href=\"{{ social.url }}\"><i class=\"{{ social.icon }}\"></i></a>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                    <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
                                <a href=\"{{ path('app_about') }}\" class=\"nav-item nav-link\">About</a>
                                <a href=\"{{ path('app_course') }}\" class=\"nav-item nav-link\">Matches</a>
                                <a href=\"{{ path('app_venue') }}\" class=\"nav-item nav-link\">Venue</a>
                                <a href=\"{{ path('app_logistics') }}\" class=\"nav-item nav-link\">Logistics</a>
                                <a href=\"{{ path('app_sponsor') }}\" class=\"nav-item nav-link\">Sponsor</a>
                                <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                        <span class=\"dropdown-toggle\">Team</span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"{{ path('app_feature') }}\" class=\"dropdown-item\">Our Features</a>
                                        <a href=\"{{ path('app_team') }}\" class=\"dropdown-item\">Our team</a>
                                        <a href=\"{{ path('app_testimonial') }}\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"{{ path('app_404') }}\" class=\"dropdown-item\">404 Page</a>
                                    </div>
                                </div>
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
                        <span id=\"search-icon-1\" class=\"btn bg-light border input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Main Content -->
    {% block body %}{% endblock %}

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
                        {% for social in footer_social_links|default([
                            {'icon': 'fab fa-facebook-f', 'url': ''},
                            {'icon': 'fab fa-twitter', 'url': ''},
                            {'icon': 'fab fa-instagram', 'url': ''},
                            {'icon': 'fab fa-linkedin-in', 'url': ''}
                        ]) %}
                            <a class=\"btn btn-primary btn-md-square me-{{ loop.last ? '0' : '3' }}\" href=\"{{ social.url }}\"><i class=\"{{ social.icon }}\"></i></a>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                        <p class=\"mb-0\">{{ footer.about_text|default('Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.') }}</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        {% for link in footer.quick_links|default([
                            {'name': 'Home', 'path': 'app_home'},
                            {'name': 'About us', 'path': 'app_about'},
                            {'name': 'Our Courses', 'path': 'app_course'},
                            {'name': 'Our Features', 'path': 'app_feature'},
                            {'name': 'Our Blog & news', 'path': 'app_blog'},
                            {'name': 'Testimonial', 'path': 'app_testimonial'}
                        ]) %}
                            <a href=\"{{ path(link.path) }}\">{{ link.name }}</a>
                        {% endfor %}
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
                                        <p class=\"mb-0\">{{ footer.address|default('123 street New York') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"d-flex\">
                                    <i class=\"fas fa-envelope text-primary me-2\"></i>
                                    <div>
                                        <h5 class=\"text-white mb-2\">Mail Us</h5>
                                        <p class=\"mb-0\">{{ footer.email|default('info@example.com') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"d-flex\">
                                    <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                    <div>
                                        <h5 class=\"text-white mb-2\">Telephone</h5>
                                        <p class=\"mb-0\">{{ footer.phone|default('(+012) 3456 7890 123') }}</p>
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
                            {% for work in footer.recent_works|default([
                                'work-9.jpg', 'work-10.jpg', 'work-11.jpg', 'work-12.jpg',
                                'work-1.jpg', 'work-2.jpg', 'work-3.jpg', 'work-4.jpg',
                                'work-5.jpg', 'work-6.jpg', 'work-7.jpg', 'work-8.jpg'
                            ]) %}
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"{{ asset('img/' ~ work) }}\" class=\"img-fluid\" alt=\"\"></a>
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
                    <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>{{ site_name|default('Your Site Name') }}</a>, All right reserved.</span>
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
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>", "@front/baseF.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\front\\baseF.html.twig");
    }
}
