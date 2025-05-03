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

/* @front/index.html.twig */
class __TwigTemplate_9fc93da1c84d9297f609e6f185c9846c extends Template
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
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@front/index.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "@front/index.html.twig", 1);
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
        yield "    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("carousel_slides", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["carousel_slides"]) || array_key_exists("carousel_slides", $context) ? $context["carousel_slides"] : (function () { throw new RuntimeError('Variable "carousel_slides" does not exist.', 8, $this->source); })()), [["welcome_text" => "Wellcome to our fitness Center", "title" => "The best gym center is now in your city", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "video_link" => "", "learn_more_link" => ""], ["welcome_text" => "Wellcome to our fitness Center", "title" => "Stay healthy by exercising at the best gym center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "video_link" => "", "learn_more_link" => ""]])) : ([["welcome_text" => "Wellcome to our fitness Center", "title" => "The best gym center is now in your city", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "video_link" => "", "learn_more_link" => ""], ["welcome_text" => "Wellcome to our fitness Center", "title" => "Stay healthy by exercising at the best gym center", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...", "video_link" => "", "learn_more_link" => ""]])));
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
            // line 24
            yield "            <div class=\"header-carousel-item hero-section\">
                <div class=\"hero-bg-half-";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            yield "\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-lg-7 animated fadeInLeft\">
                                <div class=\"text-sm-center text-md-start\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "welcome_text", [], "any", false, false, false, 31), "html", null, true);
            yield "</h4>
                                    <h1 class=\"display-";
            // line 32
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32) == 1)) ? ("1") : ("2"));
            yield " text-white mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "</h1>
                                    <p class=\"mb-5 fs-5\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                                    <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                        <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "video_link", [], "any", false, false, false, 35), "html", null, true);
            yield "\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                        <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "learn_more_link", [], "any", false, false, false, 36), "html", null, true);
            yield "\"><span>Learn More</span></a>
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
        // line 45
        yield "    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=\"container-fluid about pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-xl-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"about-content h-100\">
                        <h4 class=\"text-primary\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "section_title", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 54, $this->source); })()), "section_title", [], "any", false, false, false, 54), "About Fitness Center")) : ("About Fitness Center")), "html", null, true);
        yield "</h4>
                        <h1 class=\"display-4 text-white mb-4\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "title", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "We are the best at fulfilling your potential and achieving your goals.")) : ("We are the best at fulfilling your potential and achieving your goals.")), "html", null, true);
        yield "</h1>
                        <p class=\"mb-4\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "description", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.")), "html", null, true);
        yield "</p>
                        <div class=\"tab-class pb-4\">
                            <ul class=\"nav d-flex mb-2\">
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "tabs", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 59, $this->source); })()), "tabs", [], "any", false, false, false, 59), [["id" => "tab-1", "title" => "Our Mission", "active" => true], ["id" => "tab-2", "title" => "Our Vision"], ["id" => "tab-3", "title" => "Our Goal"]])) : ([["id" => "tab-1", "title" => "Our Mission", "active" => true], ["id" => "tab-2", "title" => "Our Vision"], ["id" => "tab-3", "title" => "Our Goal"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 64
            yield "                                    <li class=\"nav-item mb-3\">
                                        <a class=\"d-flex py-2 ";
            // line 65
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 65)) ? ("active") : ("mx-3"));
            yield "\" data-bs-toggle=\"pill\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
                                            <span style=\"width: 150px;\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "tabs", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 72, $this->source); })()), "tabs", [], "any", false, false, false, 72), [["id" => "tab-1", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has", "active" => true], ["id" => "tab-2", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"], ["id" => "tab-3", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"]])) : ([["id" => "tab-1", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has", "active" => true], ["id" => "tab-2", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"], ["id" => "tab-3", "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 77
            yield "                                    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\" class=\"tab-pane fade show p-0 ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 77)) ? ("active") : (""));
            yield "\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"d-flex align-items-center border-top border-bottom py-4\">
                                                    <span class=\"fas fa-rocket text-white fa-4x me-4\"></span>
                                                    <p class=\"mb-0\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 82), "html", null, true);
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
        // line 88
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
                                        <a href=\"tel:";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "phone", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 104, $this->source); })()), "phone", [], "any", false, false, false, 104), "+ 0123 456 7890")) : ("+ 0123 456 7890")), "html", null, true);
        yield "\"><span class=\"text-white\">Free: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["about"] ?? null), "phone", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 104, $this->source); })()), "phone", [], "any", false, false, false, 104), "+ 0123 456 7890")) : ("+ 0123 456 7890")), "html", null, true);
        yield "</span></a>
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
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-2.png"), "html", null, true);
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
                        <h4 class=\"text-primary\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["goals"] ?? null), "section_title", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 129, $this->source); })()), "section_title", [], "any", false, false, false, 129), "Fitness Goal")) : ("Fitness Goal")), "html", null, true);
        yield "</h4>
                        <h1 class=\"display-4 mb-4\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["goals"] ?? null), "title", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 130, $this->source); })()), "title", [], "any", false, false, false, 130), "Complete your possibilities, Achieve Your Fitness Goals.")) : ("Complete your possibilities, Achieve Your Fitness Goals.")), "html", null, true);
        yield "</h1>
                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["goals"] ?? null), "items", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 131, $this->source); })()), "items", [], "any", false, false, false, 131), [["icon" => "icon-1.png", "title" => "Free Fitness Training", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"], ["icon" => "icon-6.png", "title" => "Cardio and Strength", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"]])) : ([["icon" => "icon-1.png", "title" => "Free Fitness Training", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"], ["icon" => "icon-6.png", "title" => "Cardio and Strength", "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum"]])));
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
            // line 135
            yield "                            <div class=\"goal-item d-flex p-4 ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 135)) ? ("mb-4") : (""));
            yield "\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 138))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 142), "html", null, true);
            yield "</h4>
                                    <p class=\"text-white mb-0\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 143), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "                        <div class=\"ms-1\">
                            <a href=\"#\" class=\"btn btn-primary py-3 px-5 ms-2\"> <span>Read Details</span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInRight\" data-wow-delay=\"0.2s\">
                    <div class=\"h-100\">
                        <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fitness-goal-banner.png"), "html", null, true);
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
                <h4 class=\"text-primary\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["features"] ?? null), "section_title", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 166, $this->source); })()), "section_title", [], "any", false, false, false, 166), "Why choose us?")) : ("Why choose us?")), "html", null, true);
        yield "</h4>
                <h1 class=\"display-4 mb-4\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["features"] ?? null), "title", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 167, $this->source); })()), "title", [], "any", false, false, false, 167), "Out Our Highlights Below")) : ("Out Our Highlights Below")), "html", null, true);
        yield "</h1>
                <p class=\"mb-0\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["features"] ?? null), "description", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 168, $this->source); })()), "description", [], "any", false, false, false, 168), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")), "html", null, true);
        yield "</p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["features"] ?? null), "items", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 171, $this->source); })()), "items", [], "any", false, false, false, 171), [["image" => "feature-1.jpg", "title" => "Work Your Butt Off", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.2s"], ["image" => "feature-2.jpg", "title" => "Get In The groove", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.4s"], ["image" => "feature-3.jpg", "title" => "It's more Than A Game", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.6s"], ["image" => "feature-4.jpg", "title" => "Get Fit Don't Quit", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.2s"]])) : ([["image" => "feature-1.jpg", "title" => "Work Your Butt Off", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.2s"], ["image" => "feature-2.jpg", "title" => "Get In The groove", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.4s"], ["image" => "feature-3.jpg", "title" => "It's more Than A Game", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.6s"], ["image" => "feature-4.jpg", "title" => "Get Fit Don't Quit", "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,", "delay" => "0.2s"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 177
            yield "                    <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "delay", [], "any", false, false, false, 177), "html", null, true);
            yield "\">
                        <div class=\"feature-img\">
                            <img src=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 179))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"\">
                        </div>
                        <div class=\"feature-content p-4\">
                            <h4 class=\"mb-3\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 182), "html", null, true);
            yield "</h4>
                            <p class=\"mb-4\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 183), "html", null, true);
            yield "</p>
                            <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "            </div>
            <div class=\"feature-shaps\"></div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Courses Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["courses"] ?? null), "section_title", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 198, $this->source); })()), "section_title", [], "any", false, false, false, 198), "Our Courses")) : ("Our Courses")), "html", null, true);
        yield "</h4>
                <h1 class=\"display-4 text-white mb-4\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["courses"] ?? null), "title", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 199, $this->source); })()), "title", [], "any", false, false, false, 199), "Out Our Highlights Below")) : ("Out Our Highlights Below")), "html", null, true);
        yield "</h1>
                <p class=\"text-white mb-0\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["courses"] ?? null), "description", [], "any", true, true, false, 200)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 200, $this->source); })()), "description", [], "any", false, false, false, 200), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")), "html", null, true);
        yield "</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["courses"] ?? null), "items", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 203, $this->source); })()), "items", [], "any", false, false, false, 203), [["icon" => "icon-1.png", "title" => "Gym Fitness Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.2s"], ["icon" => "icon-2.png", "title" => "Power Lifting Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.4s"], ["icon" => "icon-3.png", "title" => "Body Building Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.6s"], ["icon" => "icon-4.png", "title" => "Aerobics & Skipping Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.2s"], ["icon" => "icon-5.png", "title" => "Boxing Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.4s"], ["icon" => "icon-6.png", "title" => "Cardio Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.6s"]])) : ([["icon" => "icon-1.png", "title" => "Gym Fitness Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.2s"], ["icon" => "icon-2.png", "title" => "Power Lifting Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.4s"], ["icon" => "icon-3.png", "title" => "Body Building Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.6s"], ["icon" => "icon-4.png", "title" => "Aerobics & Skipping Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.2s"], ["icon" => "icon-5.png", "title" => "Boxing Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.4s"], ["icon" => "icon-6.png", "title" => "Cardio Class", "trainer" => "Paul Flavius", "trainer_img" => "testimonial-3.jpg", "date" => "Saturday", "time" => "06.00 - 07.00", "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.", "delay" => "0.6s"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 211
            yield "                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "delay", [], "any", false, false, false, 211), "html", null, true);
            yield "\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "icon", [], "any", false, false, false, 216))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "trainer_img", [], "any", false, false, false, 221))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "trainer", [], "any", false, false, false, 223), "html", null, true);
            yield "</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "date", [], "any", false, false, false, 226), "html", null, true);
            yield "</p>
                                            <p class=\"mb-0\">Time: ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "time", [], "any", false, false, false, 227), "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 231), "html", null, true);
            yield "</a>
                                <p class=\"mb-4\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 232), "html", null, true);
            yield "</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4\"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "                <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
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
                <h4 class=\"text-primary\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["blog"] ?? null), "section_title", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 250, $this->source); })()), "section_title", [], "any", false, false, false, 250), "Our Blogs")) : ("Our Blogs")), "html", null, true);
        yield "</h4>
                <h1 class=\"display-4 mb-4\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 251, $this->source); })()), "title", [], "any", false, false, false, 251), "Check out our latest stories")) : ("Check out our latest stories")), "html", null, true);
        yield "</h1>
                <p class=\"mb-0\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["blog"] ?? null), "description", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 252, $this->source); })()), "description", [], "any", false, false, false, 252), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")), "html", null, true);
        yield "</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["blog"] ?? null), "posts", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 255, $this->source); })()), "posts", [], "any", false, false, false, 255), [["image" => "feature-4.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "Full Body Home Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.2s"], ["image" => "feature-3.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "31-Day Fitness Calendar", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.4s"], ["image" => "feature-2.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "At Home Ab Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.6s"], ["image" => "feature-1.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "Full Body Home Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.2s"]])) : ([["image" => "feature-4.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "Full Body Home Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.2s"], ["image" => "feature-3.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "31-Day Fitness Calendar", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.4s"], ["image" => "feature-2.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "At Home Ab Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.6s"], ["image" => "feature-1.jpg", "author" => "Martin.C", "date" => "30 Dec 2025", "title" => "Full Body Home Workout", "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.", "delay" => "0.2s"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 261
            yield "                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "delay", [], "any", false, false, false, 261), "html", null, true);
            yield "\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 264))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 269), "html", null, true);
            yield "</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 270), "html", null, true);
            yield "</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 272), "html", null, true);
            yield "</a>
                            <p class=\"mb-3\">";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 273), "html", null, true);
            yield "</p>
                            <a href=\"#\" class=\"btn btn-dark py-2 px-4 ms-2\"> <span class=\"me-2\">Read More</span> <i class=\"fa fa-arrow-right\"></i></a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Explore Fitness Start -->
    <div class=\"container-fluid explore py-5 wow zoomIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5 text-center\">
            <h1 class=\"display-1 text-white mb-0\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["explore"] ?? null), "title", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["explore"]) || array_key_exists("explore", $context) ? $context["explore"] : (function () { throw new RuntimeError('Variable "explore" does not exist.', 286, $this->source); })()), "title", [], "any", false, false, false, 286), "Explore Fitness Center")) : ("Explore Fitness Center")), "html", null, true);
        yield "</h1>
            <a class=\"btn btn-primary py-3 px-4 px-md-5 me-2\" href=\"https://www.youtube.com/embed/DWRcNpR6Kdc\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
        </div>
    </div>
    <!-- Explore Fitness End -->

    <!-- Team Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "section_title", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 296, $this->source); })()), "section_title", [], "any", false, false, false, 296), "Our Trainer")) : ("Our Trainer")), "html", null, true);
        yield "</h4>
                <h1 class=\"display-4 mb-4\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "title", [], "any", true, true, false, 297)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 297, $this->source); })()), "title", [], "any", false, false, false, 297), "Meet Our Amazing Team")) : ("Meet Our Amazing Team")), "html", null, true);
        yield "</h1>
                <p class=\"mb-0\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "description", [], "any", true, true, false, 298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 298, $this->source); })()), "description", [], "any", false, false, false, 298), "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")) : ("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.")), "html", null, true);
        yield "</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 301, $this->source); })()), "members", [], "any", false, false, false, 301), [["image" => "team-1.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.2s"], ["image" => "team-2.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.4s"], ["image" => "team-3.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.6s"], ["image" => "team-4.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.8s"]])) : ([["image" => "team-1.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.2s"], ["image" => "team-2.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.4s"], ["image" => "team-3.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.6s"], ["image" => "team-4.jpg", "name" => "Trainer Name", "profession" => "Profession", "delay" => "0.8s"]])));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 307
            yield "                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "delay", [], "any", false, false, false, 307), "html", null, true);
            yield "\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["member"], "image", [], "any", false, false, false, 310))), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                                <div class=\"team-icon\">
                                    ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, $context["member"], "social_links", [], "any", true, true, false, 312)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "social_links", [], "any", false, false, false, 312), [["icon" => "fab fa-facebook-f", "url" => ""], ["icon" => "fab fa-twitter", "url" => ""], ["icon" => "fab fa-instagram", "url" => ""], ["icon" => "fab fa-linkedin-in", "url" => ""]])) : ([["icon" => "fab fa-facebook-f", "url" => ""], ["icon" => "fab fa-twitter", "url" => ""], ["icon" => "fab fa-instagram", "url" => ""], ["icon" => "fab fa-linkedin-in", "url" => ""]])));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 318
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 318), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm-square\"><i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 318), "html", null, true);
                yield "\"></i></a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            yield "                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 323), "html", null, true);
            yield "</h4>
                                <p class=\"mb-0\">";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "profession", [], "any", false, false, false, 324), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        yield "            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class=\"container-fluid testimonial bg-dark py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["testimonials"] ?? null), "section_title", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 338, $this->source); })()), "section_title", [], "any", false, false, false, 338), "Testimonial")) : ("Testimonial")), "html", null, true);
        yield "</h4>
                <h1 class=\"display-4 text-white\">";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["testimonials"] ?? null), "title", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 339, $this->source); })()), "title", [], "any", false, false, false, 339), "What Our Customers Are Saying")) : ("What Our Customers Are Saying")), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["testimonials"] ?? null), "items", [], "any", true, true, false, 342)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 342, $this->source); })()), "items", [], "any", false, false, false, 342), [["image" => "testimonial-1.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4], ["image" => "testimonial-2.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4], ["image" => "testimonial-3.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4]])) : ([["image" => "testimonial-1.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4], ["image" => "testimonial-2.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4], ["image" => "testimonial-3.jpg", "name" => "Client Name", "profession" => "Profession", "quote" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?", "rating" => 4]])));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 347
            yield "                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 350))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "quote", [], "any", false, false, false, 352), "html", null, true);
            yield "</p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 354), "html", null, true);
            yield "</h4>
                            <p class=\"m-0 pb-3\">";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "profession", [], "any", false, false, false, 355), "html", null, true);
            yield "</p>
                            <div class=\"d-flex\">
                                ";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 358
                yield "                                    <i class=\"fas fa-star ";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "rating", [], "any", false, false, false, 358))) ? ("text-primary") : ("text-white"));
                yield "\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        yield "            </div>
        </div>
    </div>
    <!-- Testimonial End -->
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
        return "@front/index.html.twig";
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
        return array (  750 => 364,  741 => 360,  732 => 358,  728 => 357,  723 => 355,  719 => 354,  714 => 352,  709 => 350,  704 => 347,  700 => 342,  694 => 339,  690 => 338,  679 => 329,  668 => 324,  664 => 323,  659 => 320,  648 => 318,  644 => 312,  639 => 310,  632 => 307,  628 => 301,  622 => 298,  618 => 297,  614 => 296,  601 => 286,  591 => 278,  580 => 273,  576 => 272,  571 => 270,  567 => 269,  559 => 264,  552 => 261,  548 => 255,  542 => 252,  538 => 251,  534 => 250,  520 => 238,  508 => 232,  504 => 231,  497 => 227,  493 => 226,  487 => 223,  482 => 221,  474 => 216,  465 => 211,  461 => 203,  455 => 200,  451 => 199,  447 => 198,  435 => 188,  424 => 183,  420 => 182,  414 => 179,  408 => 177,  404 => 171,  398 => 168,  394 => 167,  390 => 166,  375 => 154,  366 => 147,  348 => 143,  344 => 142,  337 => 138,  330 => 135,  313 => 131,  309 => 130,  305 => 129,  287 => 114,  272 => 104,  254 => 88,  242 => 82,  231 => 77,  227 => 72,  223 => 70,  213 => 66,  207 => 65,  204 => 64,  200 => 59,  194 => 56,  190 => 55,  186 => 54,  175 => 45,  152 => 36,  148 => 35,  143 => 33,  137 => 32,  133 => 31,  124 => 25,  121 => 24,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Fitness - Home{% endblock %}

{% block body %}
    <!-- Carousel Start -->
    <div class=\"header-carousel owl-carousel overflow-hidden bg-dark\">
        {% for slide in carousel_slides|default([
            {
                'welcome_text': 'Wellcome to our fitness Center',
                'title': 'The best gym center is now in your city',
                'description': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy...',
                'video_link': '',
                'learn_more_link': ''
            },
            {
                'welcome_text': 'Wellcome to our fitness Center',
                'title': 'Stay healthy by exercising at the best gym center',
                'description': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy...',
                'video_link': '',
                'learn_more_link': ''
            }
        ]) %}
            <div class=\"header-carousel-item hero-section\">
                <div class=\"hero-bg-half-{{ loop.index }}\"></div>
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row g-4 align-items-center\">
                            <div class=\"col-lg-7 animated fadeInLeft\">
                                <div class=\"text-sm-center text-md-start\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">{{ slide.welcome_text }}</h4>
                                    <h1 class=\"display-{{ loop.index == 1 ? '1' : '2' }} text-white mb-4\">{{ slide.title }}</h1>
                                    <p class=\"mb-5 fs-5\">{{ slide.description }}</p>
                                    <div class=\"d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4\">
                                        <a class=\"btn btn-dark py-3 px-4 px-md-5 me-2\" href=\"{{ slide.video_link }}\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
                                        <a class=\"btn btn-primary py-3 px-4 px-md-5 ms-2\" href=\"{{ slide.learn_more_link }}\"><span>Learn More</span></a>
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
                        <h4 class=\"text-primary\">{{ about.section_title|default('About Fitness Center') }}</h4>
                        <h1 class=\"display-4 text-white mb-4\">{{ about.title|default('We are the best at fulfilling your potential and achieving your goals.') }}</h1>
                        <p class=\"mb-4\">{{ about.description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.') }}</p>
                        <div class=\"tab-class pb-4\">
                            <ul class=\"nav d-flex mb-2\">
                                {% for tab in about.tabs|default([
                                    {'id': 'tab-1', 'title': 'Our Mission', 'active': true},
                                    {'id': 'tab-2', 'title': 'Our Vision'},
                                    {'id': 'tab-3', 'title': 'Our Goal'}
                                ]) %}
                                    <li class=\"nav-item mb-3\">
                                        <a class=\"d-flex py-2 {{ tab.active ? 'active' : 'mx-3' }}\" data-bs-toggle=\"pill\" href=\"#{{ tab.id }}\">
                                            <span style=\"width: 150px;\">{{ tab.title }}</span>
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for tab in about.tabs|default([
                                    {'id': 'tab-1', 'content': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', 'active': true},
                                    {'id': 'tab-2', 'content': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has'},
                                    {'id': 'tab-3', 'content': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has'}
                                ]) %}
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
                                        <a href=\"tel:{{ about.phone|default('+ 0123 456 7890') }}\"><span class=\"text-white\">Free: {{ about.phone|default('+ 0123 456 7890') }}</span></a>
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

    <!-- Fitness Goal Start -->
    <div class=\"container-fluid goal pt-5\">
        <div class=\"container pt-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <div class=\"goal-content\">
                        <h4 class=\"text-primary\">{{ goals.section_title|default('Fitness Goal') }}</h4>
                        <h1 class=\"display-4 mb-4\">{{ goals.title|default('Complete your possibilities, Achieve Your Fitness Goals.') }}</h1>
                        {% for item in goals.items|default([
                            {'icon': 'icon-1.png', 'title': 'Free Fitness Training', 'description': 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum'},
                            {'icon': 'icon-6.png', 'title': 'Cardio and Strength', 'description': 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum'}
                        ]) %}
                            <div class=\"goal-item d-flex p-4 {{ loop.last ? 'mb-4' : '' }}\">
                                <div class=\"d-flex me-4\">
                                    <div class=\"bg-primary d-inline p-3\" style=\"width: 80px; height: 80px;\">
                                        <img src=\"{{ asset('img/' ~ item.icon) }}\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                </div>
                                <div>
                                    <h4>{{ item.title }}</h4>
                                    <p class=\"text-white mb-0\">{{ item.description }}</p>
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
                        <img src=\"{{ asset('img/fitness-goal-banner.png') }}\" class=\"img-fluid h-100\" style=\"object-fit: cover;\" alt=\"\">
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
                <h4 class=\"text-primary\">{{ features.section_title|default('Why choose us?') }}</h4>
                <h1 class=\"display-4 mb-4\">{{ features.title|default('Out Our Highlights Below') }}</h1>
                <p class=\"mb-0\">{{ features.description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.') }}</p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                {% for feature in features.items|default([
                    {'image': 'feature-1.jpg', 'title': 'Work Your Butt Off', 'description': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', 'delay': '0.2s'},
                    {'image': 'feature-2.jpg', 'title': 'Get In The groove', 'description': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', 'delay': '0.4s'},
                    {'image': 'feature-3.jpg', 'title': 'It\\'s more Than A Game', 'description': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', 'delay': '0.6s'},
                    {'image': 'feature-4.jpg', 'title': 'Get Fit Don\\'t Quit', 'description': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,', 'delay': '0.2s'}
                ]) %}
                    <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ feature.delay }}\">
                        <div class=\"feature-img\">
                            <img src=\"{{ asset('img/' ~ feature.image) }}\" class=\"img-fluid w-100\" alt=\"\">
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
                <h4 class=\"text-primary\">{{ courses.section_title|default('Our Courses') }}</h4>
                <h1 class=\"display-4 text-white mb-4\">{{ courses.title|default('Out Our Highlights Below') }}</h1>
                <p class=\"text-white mb-0\">{{ courses.description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.') }}</p>
            </div>
            <div class=\"row gy-4 gx-0 justify-content-center\">
                {% for course in courses.items|default([
                    {'icon': 'icon-1.png', 'title': 'Gym Fitness Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.2s'},
                    {'icon': 'icon-2.png', 'title': 'Power Lifting Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.4s'},
                    {'icon': 'icon-3.png', 'title': 'Body Building Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.6s'},
                    {'icon': 'icon-4.png', 'title': 'Aerobics & Skipping Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.2s'},
                    {'icon': 'icon-5.png', 'title': 'Boxing Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.4s'},
                    {'icon': 'icon-6.png', 'title': 'Cardio Class', 'trainer': 'Paul Flavius', 'trainer_img': 'testimonial-3.jpg', 'date': 'Saturday', 'time': '06.00 - 07.00', 'description': 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.', 'delay': '0.6s'}
                ]) %}
                    <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"{{ course.delay }}\">
                        <div class=\"courses-item\">
                            <div class=\"courses-item-inner p-4\">
                                <div class=\"d-flex justify-content-between mb-4\">
                                    <div class=\"courses-icon-img p-3\">
                                        <img src=\"{{ asset('img/' ~ course.icon) }}\" class=\"img-fluid\" alt=\"\">
                                    </div>
                                    <div class=\"data-info d-flex flex-column\">
                                        <div class=\"courses-trainer d-flex align-items-center mb-1\">
                                            <div class=\"me-2\" style=\"width: 25px; height: 25px;\">
                                                <img src=\"{{ asset('img/' ~ course.trainer_img) }}\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <p class=\"mb-0\">{{ course.trainer }}</p>
                                        </div>
                                        <div class=\"courses-date\">
                                            <p class=\"mb-1\">Date: {{ course.date }}</p>
                                            <p class=\"mb-0\">Time: {{ course.time }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"d-inline-block h4 mb-3\">{{ course.title }}</a>
                                <p class=\"mb-4\">{{ course.description }}</p>
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
                <h4 class=\"text-primary\">{{ blog.section_title|default('Our Blogs') }}</h4>
                <h1 class=\"display-4 mb-4\">{{ blog.title|default('Check out our latest stories') }}</h1>
                <p class=\"mb-0\">{{ blog.description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.') }}</p>
            </div>
            <div class=\"blog-carousel owl-carousel\">
                {% for post in blog.posts|default([
                    {'image': 'feature-4.jpg', 'author': 'Martin.C', 'date': '30 Dec 2025', 'title': 'Full Body Home Workout', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.', 'delay': '0.2s'},
                    {'image': 'feature-3.jpg', 'author': 'Martin.C', 'date': '30 Dec 2025', 'title': '31-Day Fitness Calendar', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.', 'delay': '0.4s'},
                    {'image': 'feature-2.jpg', 'author': 'Martin.C', 'date': '30 Dec 2025', 'title': 'At Home Ab Workout', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.', 'delay': '0.6s'},
                    {'image': 'feature-1.jpg', 'author': 'Martin.C', 'date': '30 Dec 2025', 'title': 'Full Body Home Workout', 'description': 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.', 'delay': '0.2s'}
                ]) %}
                    <div class=\"blog-item wow fadeInUp\" data-wow-delay=\"{{ post.delay }}\">
                        <div class=\"blog-img p-4 pb-0\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/' ~ post.image) }}\" class=\"img-fluid w-100\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"blog-content p-4\">
                            <div class=\"blog-comment d-flex justify-content-between py-2 px-3 mb-4\">
                                <div class=\"small\"><span class=\"fa fa-user text-primary me-2\"></span>{{ post.author }}</div>
                                <div class=\"small\"><span class=\"fa fa-calendar text-primary me-2\"></span>{{ post.date }}</div>
                            </div>
                            <a href=\"#\" class=\"h4 d-inline-block mb-3\">{{ post.title }}</a>
                            <p class=\"mb-3\">{{ post.description }}</p>
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
            <h1 class=\"display-1 text-white mb-0\">{{ explore.title|default('Explore Fitness Center') }}</h1>
            <a class=\"btn btn-primary py-3 px-4 px-md-5 me-2\" href=\"https://www.youtube.com/embed/DWRcNpR6Kdc\"><i class=\"fas fa-play-circle me-2\"></i> <span>Watch Video</span></a>
        </div>
    </div>
    <!-- Explore Fitness End -->

    <!-- Team Start -->
    <div class=\"container-fluid team py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">{{ team.section_title|default('Our Trainer') }}</h4>
                <h1 class=\"display-4 mb-4\">{{ team.title|default('Meet Our Amazing Team') }}</h1>
                <p class=\"mb-0\">{{ team.description|default('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.') }}</p>
            </div>
            <div class=\"row gy-5 gy-lg-4 gx-4\">
                {% for member in team.members|default([
                    {'image': 'team-1.jpg', 'name': 'Trainer Name', 'profession': 'Profession', 'delay': '0.2s'},
                    {'image': 'team-2.jpg', 'name': 'Trainer Name', 'profession': 'Profession', 'delay': '0.4s'},
                    {'image': 'team-3.jpg', 'name': 'Trainer Name', 'profession': 'Profession', 'delay': '0.6s'},
                    {'image': 'team-4.jpg', 'name': 'Trainer Name', 'profession': 'Profession', 'delay': '0.8s'}
                ]) %}
                    <div class=\"col-md-6 col-lg-3 wow fadeInUp\" data-wow-delay=\"{{ member.delay }}\">
                        <div class=\"team-item\">
                            <div class=\"team-img\">
                                <img src=\"{{ asset('img/' ~ member.image) }}\" class=\"img-fluid w-100\" alt=\"Image\">
                                <div class=\"team-icon\">
                                    {% for social in member.social_links|default([
                                        {'icon': 'fab fa-facebook-f', 'url': ''},
                                        {'icon': 'fab fa-twitter', 'url': ''},
                                        {'icon': 'fab fa-instagram', 'url': ''},
                                        {'icon': 'fab fa-linkedin-in', 'url': ''}
                                    ]) %}
                                        <a href=\"{{ social.url }}\" class=\"btn btn-primary btn-sm-square\"><i class=\"{{ social.icon }}\"></i></a>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"team-content\">
                                <h4>{{ member.name }}</h4>
                                <p class=\"mb-0\">{{ member.profession }}</p>
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
                <h4 class=\"text-primary\">{{ testimonials.section_title|default('Testimonial') }}</h4>
                <h1 class=\"display-4 text-white\">{{ testimonials.title|default('What Our Customers Are Saying') }}</h1>
            </div>
            <div class=\"testimonial-carousel owl-carousel wow fadeInUp\" data-wow-delay=\"0.2s\">
                {% for testimonial in testimonials.items|default([
                    {'image': 'testimonial-1.jpg', 'name': 'Client Name', 'profession': 'Profession', 'quote': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?', 'rating': 4},
                    {'image': 'testimonial-2.jpg', 'name': 'Client Name', 'profession': 'Profession', 'quote': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?', 'rating': 4},
                    {'image': 'testimonial-3.jpg', 'name': 'Client Name', 'profession': 'Profession', 'quote': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?', 'rating': 4}
                ]) %}
                    <div class=\"testimonial-item mx-auto\" style=\"max-width: 900px;\">
                        <span class=\"fa fa-quote-left fa-3x quote-icon\"></span>
                        <div class=\"testimonial-img mb-4\">
                            <img src=\"{{ asset('img/' ~ testimonial.image) }}\" class=\"img-fluid\" alt=\"Image\">
                        </div>
                        <p class=\"fs-4 text-white mb-4\">{{ testimonial.quote }}</p>
                        <div class=\"d-block\">
                            <h4 class=\"text-white\">{{ testimonial.name }}</h4>
                            <p class=\"m-0 pb-3\">{{ testimonial.profession }}</p>
                            <div class=\"d-flex\">
                                {% for i in 1..5 %}
                                    <i class=\"fas fa-star {{ i <= testimonial.rating ? 'text-primary' : 'text-white' }}\"></i>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
{% endblock %}", "@front/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\front\\index.html.twig");
    }
}
