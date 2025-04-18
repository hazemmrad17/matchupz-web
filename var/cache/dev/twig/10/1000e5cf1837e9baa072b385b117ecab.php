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

/* /front/index.html.twig */
class __TwigTemplate_cb378e03c0e5017941098fa883488664 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "/front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/front/index.html.twig"));

        $this->parent = $this->loadTemplate("/front/base.html.twig", "/front/index.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Navbar & Hero Start -->
    <div class=\"container-fluid header-top\">
        <div class=\"nav-shaps-2\"></div>
        <div class=\"container d-flex align-items-center\">
            <div class=\"d-flex align-items-center h-100\">
                <a href=\"";
        // line 11
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
                                    <a href=# class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                    <a href=# class=\"text-body me-3\"> Register</a>
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
                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <!-- Wrap the links in a new container -->
                                <div class=\"nav-links-container\">
                                    <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">About</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Matches</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Venue</a>
                                    <div class=\"nav-item dropdown\">
                                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                            <span class=\"dropdown-toggle\">Team</span>
                                        </a>
                                        <div class=\"dropdown-menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Our Features</a>
                                            <a href=\"#\" class=\"dropdown-item\">Our Team</a>
                                            <a href=\"#\" class=\"dropdown-item\">Testimonial</a>
                                            <a href=\"#\" class=\"dropdown-item\">404 Page</a>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"nav-item nav-link\">Logistics</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Sponsor</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Contact</a>
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

    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("carousel_slides", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["carousel_slides"]) || array_key_exists("carousel_slides", $context) ? $context["carousel_slides"] : (function () { throw new RuntimeError('Variable "carousel_slides" does not exist.', 109, $this->source); })()), [["title" => "The best gym center is now in your city", "subtitle" => "Welcome to our fitness Center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "bg_class" => "hero-bg-half-1"], ["title" => "Stay healthy by exercising at the best gym center", "subtitle" => "Welcome to our fitness Center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "bg_class" => "hero-bg-half-2"]])) : ([["title" => "The best gym center is now in your city", "subtitle" => "Welcome to our fitness Center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "bg_class" => "hero-bg-half-1"], ["title" => "Stay healthy by exercising at the best gym center", "subtitle" => "Welcome to our fitness Center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "bg_class" => "hero-bg-half-2"]])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 123
            yield "            <div class=\"header-carousel-item hero-section\">
                <div class=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "bg_class", [], "any", false, false, false, 124), "html", null, true);
            yield "\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-lg-7 animated fadeInLeft\">
                                <div class=\"text-sm-center text-md-start\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 130), "html", null, true);
            yield "</h4>
                                    <h1 class=\"display-";
            // line 131
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 131) == 1)) ? ("1") : ("2"));
            yield " text-white mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 131), "html", null, true);
            yield "</h1>
                                    <p class=\"mb-5 fs-5\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
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
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "    </div>
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
                                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["id" => "tab-1", "title" => "Our Mission", "active" => true], ["id" => "tab-2", "title" => "Our Vision", "active" => false], ["id" => "tab-3", "title" => "Our Goal", "active" => false]]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 163
            yield "                                    <li class=\"nav-item mb-3\">
                                        <a class=\"d-flex py-2 ";
            // line 164
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 164)) ? ("active") : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164) != 1)) ? ("mx-3") : (""));
            yield "\" data-bs-toggle=\"pill\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield "\">
                                            <span style=\"width: 150px;\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 165), "html", null, true);
            yield "</span>
                                        </a>
                                    </li>
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
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["id" => "tab-1", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has", "active" => true], ["id" => "tab-2", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has", "active" => false], ["id" => "tab-3", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has", "active" => false]]);
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 176
            yield "                                    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 176), "html", null, true);
            yield "\" class=\"tab-pane fade show p-0 ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 176)) ? ("active") : (""));
            yield "\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                    <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                    <p class=\"mb-0\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 181), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "                            </div>
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
                                        <a href=\"tel:+01234567890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
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
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about-2.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fitness Goal Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"goal-content\">
                        <h4 class=\"text-primary\">Fitness Goal</h4>
                        <h1 class=\"display-4 mb-4\">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                        ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Free Fitness Training", "icon" => "icon-1.png", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"], ["title" => "Cardio and Strength", "icon" => "icon-6.png", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"]]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 234
            yield "                            <div class=\"goal-item d-flex p-4 ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 234)) ? ("mb-4") : (""));
            yield "\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "icon", [], "any", false, false, false, 237))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "title", [], "any", false, false, false, 241), "html", null, true);
            yield "</h4>
                                    <p class=\"text-white mb-0\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["goal"], "description", [], "any", false, false, false, 242), "html", null, true);
            yield "</p>
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
        unset($context['_seq'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        yield "                        <div class=\"ms-1\">
                            <a href=\"#\" class=\"btn btn-primary py-3 px-5 ms-2\"> <span>Read Details</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <img src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fitness-goal-banner.png"), "html", null, true);
        yield "\" class=\"img-fluid h-100\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fitness Goal End -->

    <!-- Features Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\"> Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Out Our Highlights Below</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit...</p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Work Your Butt Off", "image" => "feature-1.jpg", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.2s"], ["title" => "Get In The groove", "image" => "feature-2.jpg", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.4s"], ["title" => "It's more Than A Game", "image" => "feature-3.jpg", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.6s"], ["title" => "Get Fit Don't Quit", "image" => "feature-4.jpg", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.8s"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 276
            yield "                    <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "delay", [], "any", false, false, false, 276), "html", null, true);
            yield "\">
                        <div class=\"feature-img\">
                            <img src=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 278))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </div>
                        <div class=\"feature-content p-4\">
                            <h4 class=\"mb-3\">";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 281), "html", null, true);
            yield "</h4>
                            <p class=\"mb-4\">";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 282), "html", null, true);
            yield "</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        yield "            </div>
            <div class=\"feature-shaps\"></div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Courses Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\"> Our Courses</h4>
                <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit...</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Gym Fitness Class", "icon" => "icon-1.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.2s"], ["title" => "Power Lifting Class", "icon" => "icon-2.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.4s"], ["title" => "Body Building Class", "icon" => "icon-3.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.6s"], ["title" => "Aerobics & Skipping Class", "icon" => "icon-4.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.2s"], ["title" => "Boxing Class", "icon" => "icon-5.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.4s"], ["title" => "Cardio Class", "icon" => "icon-6.png", "trainer" => "Paul Flavius", "image" => "testimonial-3.jpg", "delay" => "0.6s"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 310
            yield "                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "delay", [], "any", false, false, false, 310), "html", null, true);
            yield "\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "icon", [], "any", false, false, false, 315))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 320))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "trainer", [], "any", false, false, false, 322), "html", null, true);
            yield "</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> ";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 330), "html", null, true);
            yield "</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "        <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
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
                <h4 class=\"text-primary\"> Our Blogs</h4>
                <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Full Body Home Workout", "image" => "feature-4.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "delay" => "0.2s"], ["title" => "31-Day Fitness Calendar", "image" => "feature-3.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "delay" => "0.4s"], ["title" => "At Home Ab Workout", "image" => "feature-2.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "delay" => "0.6s"], ["title" => "Full Body Home Workout", "image" => "feature-1.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "delay" => "0.8s"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 360
            yield "                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "delay", [], "any", false, false, false, 360), "html", null, true);
            yield "\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 363))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 368), "html", null, true);
            yield "</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> ";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "date", [], "any", false, false, false, 369), "html", null, true);
            yield "</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 371), "html", null, true);
            yield "</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['blog'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "            </div>
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
                <h4 class=\"text-primary\">Our Trainer</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Amazing Team</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["image" => "team-1.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.2s"], ["image" => "team-2.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.4s"], ["image" => "team-3.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.6s"], ["image" => "team-4.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.8s"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["trainer"]) {
            // line 406
            yield "                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainer"], "delay", [], "any", false, false, false, 406), "html", null, true);
            yield "\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["trainer"], "image", [], "any", false, false, false, 409))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                                <div class=\"team-icon\">
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainer"], "name", [], "any", false, false, false, 418), "html", null, true);
            yield "</h4>
                                <p class=\"mb-0\">";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainer"], "profession", [], "any", false, false, false, 419), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trainer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        yield "            </div>
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
                ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["image" => "testimonial-1.jpg", "name" => "Client Name", "profession" => "Profession", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?"], ["image" => "testimonial-2.jpg", "name" => "Client Name", "profession" => "Profession", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?"], ["image" => "testimonial-3.jpg", "name" => "Client Name", "profession" => "Profession", "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 442
            yield "                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 445))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "text", [], "any", false, false, false, 447), "html", null, true);
            yield "</p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 449), "html", null, true);
            yield "</h4>
                            <p class=\"m-0 pb-3\">";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "profession", [], "any", false, false, false, 450), "html", null, true);
            yield "</p>
                            <div class=\"d-flex\">
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-white\"></i>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        yield "            </div>
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
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                        <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        <a href=#> Home</a>
                        <a href=#> About us</a>
                        <a href=#> Our Courses</a>
                        <a href=#> Our Features</a>
                        <a href=#> Our Blog & news</a>
                        <a href=#> Testimonial</a>
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
                            ";
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["work-9.jpg", "work-10.jpg", "work-11.jpg", "work-12.jpg", "work-1.jpg", "work-2.jpg", "work-3.jpg", "work-4.jpg", "work-5.jpg", "work-6.jpg", "work-7.jpg", "work-8.jpg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 546
            yield "                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"";
            // line 548
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . $context["work"])), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['work'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
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
        return "/front/index.html.twig";
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
        return array (  874 => 552,  864 => 548,  860 => 546,  856 => 541,  774 => 461,  757 => 450,  753 => 449,  748 => 447,  743 => 445,  738 => 442,  734 => 437,  719 => 424,  708 => 419,  704 => 418,  692 => 409,  685 => 406,  681 => 400,  656 => 377,  644 => 371,  639 => 369,  635 => 368,  627 => 363,  620 => 360,  616 => 354,  597 => 337,  584 => 330,  573 => 322,  568 => 320,  560 => 315,  551 => 310,  547 => 302,  530 => 287,  519 => 282,  515 => 281,  509 => 278,  503 => 276,  499 => 270,  479 => 253,  470 => 246,  452 => 242,  448 => 241,  441 => 237,  434 => 234,  417 => 230,  397 => 213,  369 => 187,  357 => 181,  346 => 176,  342 => 171,  338 => 169,  320 => 165,  312 => 164,  309 => 163,  292 => 158,  276 => 144,  250 => 132,  244 => 131,  240 => 130,  231 => 124,  228 => 123,  211 => 109,  145 => 46,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '/front/base.html.twig' %}

{% block title %}Fitness - Home{% endblock %}

{% block body %}
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
                                    <a href=# class=\"login-btn text-body me-3 pe-3\"> <span>Login</span></a>
                                    <a href=# class=\"text-body me-3\"> Register</a>
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
                        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand-2\">
                            <h1 class=\"text-primary mb-0\"><i class=\"fas fa-hand-rock me-2\"></i> Fitness</h1>
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-0 mx-lg-auto\">
                                <!-- Wrap the links in a new container -->
                                <div class=\"nav-links-container\">
                                    <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">About</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Matches</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Venue</a>
                                    <div class=\"nav-item dropdown\">
                                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                                            <span class=\"dropdown-toggle\">Team</span>
                                        </a>
                                        <div class=\"dropdown-menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Our Features</a>
                                            <a href=\"#\" class=\"dropdown-item\">Our Team</a>
                                            <a href=\"#\" class=\"dropdown-item\">Testimonial</a>
                                            <a href=\"#\" class=\"dropdown-item\">404 Page</a>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"nav-item nav-link\">Logistics</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Sponsor</a>
                                    <a href=\"#\" class=\"nav-item nav-link\">Contact</a>
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

    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        {% for slide in carousel_slides|default([
            {
                title: 'The best gym center is now in your city',
                subtitle: 'Welcome to our fitness Center',
                description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy...',
                bg_class: 'hero-bg-half-1'
            },
            {
                title: 'Stay healthy by exercising at the best gym center',
                subtitle: 'Welcome to our fitness Center',
                description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy...',
                bg_class: 'hero-bg-half-2'
            }
        ]) %}
            <div class=\"header-carousel-item hero-section\">
                <div class=\"{{ slide.bg_class }}\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-lg-7 animated fadeInLeft\">
                                <div class=\"text-sm-center text-md-start\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">{{ slide.subtitle }}</h4>
                                    <h1 class=\"display-{{ loop.index == 1 ? '1' : '2' }} text-white mb-4\">{{ slide.title }}</h1>
                                    <p class=\"mb-5 fs-5\">{{ slide.description }}</p>
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
        {% endfor %}
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
                                {% for tab in [
                                    { id: 'tab-1', title: 'Our Mission', active: true },
                                    { id: 'tab-2', title: 'Our Vision', active: false },
                                    { id: 'tab-3', title: 'Our Goal', active: false }
                                ] %}
                                    <li class=\"nav-item mb-3\">
                                        <a class=\"d-flex py-2 {{ tab.active ? 'active' : '' }} {{ loop.index != 1 ? 'mx-3' : '' }}\" data-bs-toggle=\"pill\" href=\"#{{ tab.id }}\">
                                            <span style=\"width: 150px;\">{{ tab.title }}</span>
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for tab in [
                                    { id: 'tab-1', content: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', active: true },
                                    { id: 'tab-2', content: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', active: false },
                                    { id: 'tab-3', content: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', active: false }
                                ] %}
                                    <div id=\"{{ tab.id }}\" class=\"tab-pane fade show p-0 {{ tab.active ? 'active' : '' }}\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                    <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                    <p class=\"mb-0\">{{ tab.content }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
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
                                        <a href=\"tel:+01234567890\"><span class=\"text-white\">Free: + 0123 456 7890</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"about-img h-100\">
                        <div class=\"about-img-inner d-flex h-100\">
                            <img src=\"{{ asset('images/about-2.png') }}\" class=\"img-fluid w-100\" style=\"object-fit: cover;\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fitness Goal Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"goal-content\">
                        <h4 class=\"text-primary\">Fitness Goal</h4>
                        <h1 class=\"display-4 mb-4\">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                        {% for goal in [
                            { title: 'Free Fitness Training', icon: 'icon-1.png', description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum' },
                            { title: 'Cardio and Strength', icon: 'icon-6.png', description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum' }
                        ] %}
                            <div class=\"goal-item d-flex p-4 {{ loop.last ? 'mb-4' : '' }}\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"{{ asset('images/' ~ goal.icon) }}\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>{{ goal.title }}</h4>
                                    <p class=\"text-white mb-0\">{{ goal.description }}</p>
                                </div>
                            </div>
                        {% endfor %}
                        <div class=\"ms-1\">
                            <a href=\"#\" class=\"btn btn-primary py-3 px-5 ms-2\"> <span>Read Details</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <img src=\"{{ asset('images/fitness-goal-banner.png') }}\" class=\"img-fluid h-100\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fitness Goal End -->

    <!-- Features Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\"> Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Out Our Highlights Below</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit...</p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                {% for feature in [
                    { title: 'Work Your Butt Off', image: 'feature-1.jpg', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', delay: '0.2s' },
                    { title: 'Get In The groove', image: 'feature-2.jpg', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', delay: '0.4s' },
                    { title: 'It\\'s more Than A Game', image: 'feature-3.jpg', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', delay: '0.6s' },
                    { title: 'Get Fit Don\\'t Quit', image: 'feature-4.jpg', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', delay: '0.8s' }
                ] %}
                    <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ feature.delay }}\">
                        <div class=\"feature-img\">
                            <img src=\"{{ asset('images/' ~ feature.image) }}\" class=\"img-fluid w-100\" alt=\"\">
                        </div>
                        <div class=\"feature-content p-4\">
                            <h4 class=\"mb-3\">{{ feature.title }}</h4>
                            <p class=\"mb-4\">{{ feature.description }}</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"feature-shaps\"></div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Courses Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\"> Our Courses</h4>
                <h1 class=\"display-4 text-white mb-4\">Out Our Highlights Below</h1>
                <p class=\"text-white mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit...</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                {% for course in [
                    { title: 'Gym Fitness Class', icon: 'icon-1.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.2s' },
                    { title: 'Power Lifting Class', icon: 'icon-2.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.4s' },
                    { title: 'Body Building Class', icon: 'icon-3.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.6s' },
                    { title: 'Aerobics & Skipping Class', icon: 'icon-4.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.2s' },
                    { title: 'Boxing Class', icon: 'icon-5.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.4s' },
                    { title: 'Cardio Class', icon: 'icon-6.png', trainer: 'Paul Flavius', image: 'testimonial-3.jpg', delay: '0.6s' }
                ] %}
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"{{ course.delay }}\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"{{ asset('images/' ~ course.icon) }}\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"{{ asset('images/' ~ course.image) }}\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">{{ course.trainer }}</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: Saturday</p>
                                            <p class=\"mb-0\">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\"> {{ course.title }}</a>
                                <p class=\"mb-4\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
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
                <h4 class=\"text-primary\"> Our Blogs</h4>
                <h1 class=\"display-4 mb-4\">Check out our latest stories</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                {% for blog in [
                    { title: 'Full Body Home Workout', image: 'feature-4.jpg', author: 'Martin.C', date: '30 Dec 2025', delay: '0.2s' },
                    { title: '31-Day Fitness Calendar', image: 'feature-3.jpg', author: 'Martin.C', date: '30 Dec 2025', delay: '0.4s' },
                    { title: 'At Home Ab Workout', image: 'feature-2.jpg', author: 'Martin.C', date: '30 Dec 2025', delay: '0.6s' },
                    { title: 'Full Body Home Workout', image: 'feature-1.jpg', author: 'Martin.C', date: '30 Dec 2025', delay: '0.8s' }
                ] %}
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"{{ blog.delay }}\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"{{ asset('images/' ~ blog.image) }}\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span> {{ blog.author }}</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span> {{ blog.date }}</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">{{ blog.title }}</a>
                            <p class=\"mb-3\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                {% endfor %}
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
                <h4 class=\"text-primary\">Our Trainer</h4>
                <h1 class=\"display-4 mb-4\">Meet Our Amazing Team</h1>
                <p class=\"mb-0\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                {% for trainer in [
                    { image: 'team-1.jpg', name: 'Trainer Name', profession: 'Profession', delay: '0.2s' },
                    { image: 'team-2.jpg', name: 'Trainer Name', profession: 'Profession', delay: '0.4s' },
                    { image: 'team-3.jpg', name: 'Trainer Name', profession: 'Profession', delay: '0.6s' },
                    { image: 'team-4.jpg', name: 'Trainer Name', profession: 'Profession', delay: '0.8s' }
                ] %}
                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"{{ trainer.delay }}\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"{{ asset('images/' ~ trainer.image) }}\" class=\"img-fluid w-100\" alt=\"Image\">
                                <div class=\"team-icon\">
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-instagram\"></i></a>
                                    <a href=\"#\" class=\"btn btn-primary btn-sm-square\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>{{ trainer.name }}</h4>
                                <p class=\"mb-0\">{{ trainer.profession }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
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
                {% for testimonial in [
                    { image: 'testimonial-1.jpg', name: 'Client Name', profession: 'Profession', text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?' },
                    { image: 'testimonial-2.jpg', name: 'Client Name', profession: 'Profession', text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?' },
                    { image: 'testimonial-3.jpg', name: 'Client Name', profession: 'Profession', text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?' }
                ] %}
                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"{{ asset('images/' ~ testimonial.image) }}\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">{{ testimonial.text }}</p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">{{ testimonial.name }}</h4>
                            <p class=\"m-0 pb-3\">{{ testimonial.profession }}</p>
                            <div class=\"d-flex\">
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-primary\"></i>
                                <i class=\"fas fa-star text-white\"></i>
                            </div>
                        </div>
                    </div>
                {% endfor %}
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
                        <h4 class=\"text-white mb-4\"><i class=\"fas fa-hand-rock text-primary me-2\"></i> Fitness</h4>
                        <p class=\"mb-0\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Quick Links</h4>
                        <a href=#> Home</a>
                        <a href=#> About us</a>
                        <a href=#> Our Courses</a>
                        <a href=#> Our Features</a>
                        <a href=#> Our Blog & news</a>
                        <a href=#> Testimonial</a>
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
                            {% for work in [
                                'work-9.jpg', 'work-10.jpg', 'work-11.jpg', 'work-12.jpg',
                                'work-1.jpg', 'work-2.jpg', 'work-3.jpg', 'work-4.jpg',
                                'work-5.jpg', 'work-6.jpg', 'work-7.jpg', 'work-8.jpg'
                            ] %}
                                <div class=\"col-3\">
                                    <div class=\"footer-item-img\">
                                        <a href=\"#\"><img src=\"{{ asset('images/' ~ work) }}\" class=\"img-fluid\" alt=\"\"></a>
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
{% endblock %}", "/front/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\front\\index.html.twig");
    }
}
