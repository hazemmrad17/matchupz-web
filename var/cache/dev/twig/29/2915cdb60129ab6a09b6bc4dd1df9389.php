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

/* reservation/reservationF.html.twig */
class __TwigTemplate_0cfd8e150c67d882bef2ed44410fdfcd extends Template
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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservationF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservationF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "reservation/reservationF.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Fitness - Reservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 8
        yield "    <!-- Navbar & Hero Start -->
    <div class=\"container-fluid header-top\">
        <div class=\"nav-shaps-2\"></div>
        <div class=\"container d-flex align-items-center\">
            <div class=\"d-flex align-items-center h-100\">
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\" style=\"height: 125px;\">
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                </a>
            </div>
            <div class=\"w-100 h-100\">
                <div class=\"topbar px-0 py-2 d-none d-lg-block\" style=\"height: 45px;\">
                    <div class=\"row gx-0 align-items-center\">
                        <div class=\"col-lg-8 text-center text-lg-center mb-lg-0\">
                            <div class=\"d-flex flex-wrap\">
                                <div class=\"pe-4\">
                                    <a href=\"mailto:";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("contact_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 23, $this->source); })()), "example@gmail.com")) : ("example@gmail.com")), "html", null, true);
        yield "\" class=\"text-muted small\"><i class=\"fas fa-envelope text-primary me-2\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("contact_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 23, $this->source); })()), "example@gmail.com")) : ("example@gmail.com")), "html", null, true);
        yield "</a>
                                </div>
                                <div class=\"pe-0\">
                                    <a href=\"#\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("working_hours", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["working_hours"]) || array_key_exists("working_hours", $context) ? $context["working_hours"] : (function () { throw new RuntimeError('Variable "working_hours" does not exist.', 26, $this->source); })()), "Mon - Sat: 8.00 am-7.00 pm")) : ("Mon - Sat: 8.00 am-7.00 pm")), "html", null, true);
        yield "</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                                <div class=\"d-flex align-items-center small\">
                                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"login-btn text-body me-3 pe-3\"><span>Login</span></a>
                                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-body me-3\">Register</a>
                                </div>
                                <div class=\"d-flex pe-3\">
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("social_media", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["social_media"]) || array_key_exists("social_media", $context) ? $context["social_media"] : (function () { throw new RuntimeError('Variable "social_media" does not exist.', 37, $this->source); })()), [["url" => "#", "icon" => "fab fa-facebook-f"], ["url" => "#", "icon" => "fab fa-twitter"], ["url" => "#", "icon" => "fab fa-instagram"], ["url" => "#", "icon" => "fab fa-linkedin-in"]])) : ([["url" => "#", "icon" => "fab fa-facebook-f"], ["url" => "#", "icon" => "fab fa-twitter"], ["url" => "#", "icon" => "fab fa-instagram"], ["url" => "#", "icon" => "fab fa-linkedin-in"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 43
            yield "                                        <a class=\"btn p-0 text-primary me-3\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 43), "html", null, true);
            yield "\"><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 43), "html", null, true);
            yield "\"></i></a>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                    <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link\">Home</a>
                                <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-item nav-link\">About</a>
                                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_courses");
        yield "\" class=\"nav-item nav-link\">Courses</a>
                                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blogs");
        yield "\" class=\"nav-item nav-link\">Blogs</a>
                                <div class=\"nav-item dropdown active\">
                                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                        <span class=\"dropdown-toggle\">Pages</span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_sportifs");
        yield "\" class=\"dropdown-item\">Our Features</a>
                                        <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"dropdown-item active\">Reservations</a>
                                    </div>
                                </div>
                                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-btn ps-3\">
                                    <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quote");
        yield "\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"><span>Get Quote</span></a>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 92
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

        // line 93
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Reservations</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Reservations</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Reservations Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Réservez votre espace</h4>
                <h1 class=\"display-4 mb-4\">Planifiez votre séance</h1>
                <p class=\"mb-0\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("reservation_description", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reservation_description"]) || array_key_exists("reservation_description", $context) ? $context["reservation_description"] : (function () { throw new RuntimeError('Variable "reservation_description" does not exist.', 112, $this->source); })()), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")), "html", null, true);
        yield "</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                ";
        // line 115
        if (array_key_exists("reservation_form", $context)) {
            // line 116
            yield "                    <!-- Reservation Form -->
                    <div class=\"col-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        ";
            // line 118
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 118, $this->source); })()), 'form_start');
            yield "
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\">
                                    ";
            // line 121
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 121, $this->source); })()), "espace_sportif", [], "any", false, false, false, 121), 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"error\" style=\"color: red;\">";
            // line 122
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 122, $this->source); })()), "espace_sportif", [], "any", false, false, false, 122), 'errors');
            yield "</div>
                                </div>
                                <div class=\"col-md-6\">
                                    ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 125, $this->source); })()), "date", [], "any", false, false, false, 125), 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"error\" style=\"color: red;\">";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 126, $this->source); })()), "date", [], "any", false, false, false, 126), 'errors');
            yield "</div>
                                </div>
                                <div class=\"col-md-6\">
                                    ";
            // line 129
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 129, $this->source); })()), "duree", [], "any", false, false, false, 129), 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"error\" style=\"color: red;\">";
            // line 130
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 130, $this->source); })()), "duree", [], "any", false, false, false, 130), 'errors');
            yield "</div>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary py-2 px-4\">Confirmer la réservation</button>
                                </div>
                            </div>
                        ";
            // line 136
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservation_form"]) || array_key_exists("reservation_form", $context) ? $context["reservation_form"] : (function () { throw new RuntimeError('Variable "reservation_form" does not exist.', 136, $this->source); })()), 'form_end');
            yield "
                    </div>
                ";
        }
        // line 139
        yield "
                <!-- Existing Reservations -->
                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("reservations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 141, $this->source); })()), [])) : ([])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 142
            yield "                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142) * 0.2) + 0.2), "html", null, true);
            yield "s\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, true, false, 145), "image", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, false, false, 145), "image", [], "any", false, false, false, 145), (("img/team-" . ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145) % 4) + 1)) . ".jpg"))) : ((("img/team-" . ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145) % 4) + 1)) . ".jpg")))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, true, false, 145), "nom_espace", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, false, false, 145), "nom_espace", [], "any", false, false, false, 145), "Espace Sportif")) : ("Espace Sportif")), "html", null, true);
            yield "\">
                                <div class=\"team-icon\">
                                    ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, true, false, 147), "socials", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, false, false, 147), "socials", [], "any", false, false, false, 147), [["url" => "#", "icon" => "fab fa-facebook-f"], ["url" => "#", "icon" => "fab fa-twitter"], ["url" => "#", "icon" => "fab fa-instagram"], ["url" => "#", "icon" => "fab fa-linkedin-in"]])) : ([["url" => "#", "icon" => "fab fa-facebook-f"], ["url" => "#", "icon" => "fab fa-twitter"], ["url" => "#", "icon" => "fab fa-instagram"], ["url" => "#", "icon" => "fab fa-linkedin-in"]])));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 153
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 153), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm-square\"><i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 153), "html", null, true);
                yield "\"></i></a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, true, false, 158), "nom_espace", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espace_sportif", [], "any", false, false, false, 158), "nom_espace", [], "any", false, false, false, 158), "Espace Sportif")) : ("Espace Sportif")), "html", null, true);
            yield "</h4>
                                <p class=\"mb-0\">
                                    Date: ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 160), "d/m/Y H:i"), "html", null, true);
            yield "<br>
                                    Durée: ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "duree", [], "any", false, false, false, 161), "html", null, true);
            yield " heures
                                </p>
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
        // line 166
        if (!$context['_iterated']) {
            // line 167
            yield "                    <!-- Fallback Static Content -->
                    ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 169
                yield "                        <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] * 0.2), "html", null, true);
                yield "s\">
                            <div class=\"team-item\">
                                <div class=\"team-img\">
                                    <img src=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/team-" . $context["i"]) . ".jpg")), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Trainer ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                                    <div class=\"team-icon\">
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    </div>
                                </div>
                                <div class=\"team-content\">
                                    <h4>Trainer Name</h4>
                                    <p class=\"mb-0\">Profession</p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "            </div>
        </div>
    </div>
    <!-- Reservations End -->
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
        return "reservation/reservationF.html.twig";
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
        return array (  478 => 188,  472 => 187,  449 => 172,  442 => 169,  438 => 168,  435 => 167,  433 => 166,  415 => 161,  411 => 160,  406 => 158,  401 => 155,  390 => 153,  386 => 147,  379 => 145,  372 => 142,  354 => 141,  350 => 139,  344 => 136,  335 => 130,  331 => 129,  325 => 126,  321 => 125,  315 => 122,  311 => 121,  305 => 118,  301 => 116,  299 => 115,  293 => 112,  276 => 98,  269 => 93,  256 => 92,  233 => 79,  227 => 76,  221 => 73,  217 => 72,  213 => 71,  209 => 70,  205 => 69,  196 => 63,  192 => 62,  188 => 61,  184 => 60,  173 => 52,  164 => 45,  153 => 43,  149 => 37,  143 => 34,  139 => 33,  129 => 26,  121 => 23,  108 => 13,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reservationF.html.twig #}

{% extends 'baseM.html.twig' %}

{% block title %}Fitness - Reservations{% endblock %}

{% block navigation %}
    <!-- Navbar & Hero Start -->
    <div class=\"container-fluid header-top\">
        <div class=\"nav-shaps-2\"></div>
        <div class=\"container d-flex align-items-center\">
            <div class=\"d-flex align-items-center h-100\">
                <a href=\"{{ path('app_home') }}\" class=\"navbar-brand\" style=\"height: 125px;\">
                    <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
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
                                    <a href=\"#\" class=\"text-muted small\"><i class=\"fa fa-clock text-primary me-2\"></i>{{ working_hours|default('Mon - Sat: 8.00 am-7.00 pm') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 text-center text-lg-end\">
                            <div class=\"d-flex justify-content-end\">
                                <div class=\"d-flex align-items-center small\">
                                    <a href=\"{{ path('app_login') }}\" class=\"login-btn text-body me-3 pe-3\"><span>Login</span></a>
                                    <a href=\"{{ path('app_register') }}\" class=\"text-body me-3\">Register</a>
                                </div>
                                <div class=\"d-flex pe-3\">
                                    {% for social in social_media|default([
                                        {'url': '#', 'icon': 'fab fa-facebook-f'},
                                        {'url': '#', 'icon': 'fab fa-twitter'},
                                        {'url': '#', 'icon': 'fab fa-instagram'},
                                        {'url': '#', 'icon': 'fab fa-linkedin-in'}
                                    ]) %}
                                        <a class=\"btn p-0 text-primary me-3\" href=\"{{ social.url }}\"><i class=\"{{ social.icon }}\"></i></a>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"nav-bar px-0 py-lg-0\" style=\"height: 80px;\">
                    <nav class=\"navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end\">
                        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i>Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link\">Home</a>
                                <a href=\"{{ path('app_about') }}\" class=\"nav-item nav-link\">About</a>
                                <a href=\"{{ path('app_courses') }}\" class=\"nav-item nav-link\">Courses</a>
                                <a href=\"{{ path('app_blogs') }}\" class=\"nav-item nav-link\">Blogs</a>
                                <div class=\"nav-item dropdown active\">
                                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                        <span class=\"dropdown-toggle\">Pages</span>
                                    </a>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"{{ path('app_espace_sportifs') }}\" class=\"dropdown-item\">Our Features</a>
                                        <a href=\"{{ path('app_team') }}\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"{{ path('app_testimonial') }}\" class=\"dropdown-item\">Testimonial</a>
                                        <a href=\"{{ path('app_404') }}\" class=\"dropdown-item\">404 Page</a>
                                        <a href=\"{{ path('app_reservation') }}\" class=\"dropdown-item active\">Reservations</a>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
                                <div class=\"nav-btn ps-3\">
                                    <button class=\"btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
                                    <a href=\"{{ path('app_quote') }}\" class=\"btn btn-primary py-2 px-4 ms-0 ms-lg-3\"><span>Get Quote</span></a>
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
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Reservations</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Reservations</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Reservations Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Réservez votre espace</h4>
                <h1 class=\"display-4 mb-4\">Planifiez votre séance</h1>
                <p class=\"mb-0\">{{ reservation_description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.') }}</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                {% if reservation_form is defined %}
                    <!-- Reservation Form -->
                    <div class=\"col-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        {{ form_start(reservation_form) }}
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\">
                                    {{ form_row(reservation_form.espace_sportif, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"error\" style=\"color: red;\">{{ form_errors(reservation_form.espace_sportif) }}</div>
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(reservation_form.date, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"error\" style=\"color: red;\">{{ form_errors(reservation_form.date) }}</div>
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(reservation_form.duree, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"error\" style=\"color: red;\">{{ form_errors(reservation_form.duree) }}</div>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary py-2 px-4\">Confirmer la réservation</button>
                                </div>
                            </div>
                        {{ form_end(reservation_form) }}
                    </div>
                {% endif %}

                <!-- Existing Reservations -->
                {% for reservation in reservations|default([]) %}
                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"{{ loop.index0 * 0.2 + 0.2 }}s\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"{{ asset(reservation.espace_sportif.image|default('img/team-' ~ (loop.index % 4 + 1) ~ '.jpg')) }}\" class=\"img-fluid w-100\" alt=\"{{ reservation.espace_sportif.nom_espace|default('Espace Sportif') }}\">
                                <div class=\"team-icon\">
                                    {% for social in reservation.espace_sportif.socials|default([
                                        {'url': '#', 'icon': 'fab fa-facebook-f'},
                                        {'url': '#', 'icon': 'fab fa-twitter'},
                                        {'url': '#', 'icon': 'fab fa-instagram'},
                                        {'url': '#', 'icon': 'fab fa-linkedin-in'}
                                    ]) %}
                                        <a href=\"{{ social.url }}\" class=\"btn btn-primary btn-sm-square\"><i class=\"{{ social.icon }}\"></i></a>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>{{ reservation.espace_sportif.nom_espace|default('Espace Sportif') }}</h4>
                                <p class=\"mb-0\">
                                    Date: {{ reservation.date|date('d/m/Y H:i') }}<br>
                                    Durée: {{ reservation.duree }} heures
                                </p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <!-- Fallback Static Content -->
                    {% for i in 1..4 %}
                        <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"{{ i * 0.2 }}s\">
                            <div class=\"team-item\">
                                <div class=\"team-img\">
                                    <img src=\"{{ asset('img/team-' ~ i ~ '.jpg') }}\" class=\"img-fluid w-100\" alt=\"Trainer {{ i }}\">
                                    <div class=\"team-icon\">
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                        <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    </div>
                                </div>
                                <div class=\"team-content\">
                                    <h4>Trainer Name</h4>
                                    <p class=\"mb-0\">Profession</p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Reservations End -->
{% endblock %}", "reservation/reservationF.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\reservation\\reservationF.html.twig");
    }
}
