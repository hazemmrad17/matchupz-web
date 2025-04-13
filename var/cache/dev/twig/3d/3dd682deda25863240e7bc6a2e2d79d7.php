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

/* joueur/feature.html.twig */
class __TwigTemplate_27ad2556b8122d372de901997f72b0ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/feature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/feature.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "joueur/feature.html.twig", 1);
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

        yield "Matchupz - Our Features";
        
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
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Our Features</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Features</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Features Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why Choose Matchupz?</h4>
                <h1 class=\"display-4 mb-4\">Discover Our Cutting-Edge Tools for Club Success</h1>
                <p class=\"mb-0\">
                    Matchupz empowers sports clubs with advanced player management, AI-driven tracking, and detailed statistics to optimize performance and strategy.
                </p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"feature-img\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-player-management.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Player Management\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">Player Management</h4>
                        <p class=\"mb-4\">
                            Seamlessly manage your roster with our intuitive CRUD system. Add, update, and organize player profiles, including personal details, contracts, and performance records, all in one place.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"feature-img\">
                        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-ai-tracking.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"AI Player Tracking\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">AI Player Tracking</h4>
                        <p class=\"mb-4\">
                            Leverage AI to track players on the field in real-time. Analyze movement patterns, positioning, and workload to enhance training and game strategies with precision.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"feature-img\">
                        <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/feature-statistics.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Player Statistics\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">Player Statistics</h4>
                        <p class=\"mb-4\">
                            Unlock deep insights with comprehensive player stats. Track goals, assists, fitness metrics, and more to make data-driven decisions for your team’s success.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
            </div>
            <div class=\"feature-shaps\"></div>
        </div>
    </div>
    <!-- Features End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function(){
            \$(\".feature-carousel\").owlCarousel({
                items: 3,
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
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
        return "joueur/feature.html.twig";
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
        return array (  199 => 74,  186 => 73,  159 => 56,  144 => 44,  129 => 32,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Our Features{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Our Features</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Features</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Features Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why Choose Matchupz?</h4>
                <h1 class=\"display-4 mb-4\">Discover Our Cutting-Edge Tools for Club Success</h1>
                <p class=\"mb-0\">
                    Matchupz empowers sports clubs with advanced player management, AI-driven tracking, and detailed statistics to optimize performance and strategy.
                </p>
            </div>
            <div class=\"feature-carousel owl-carousel\">
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"feature-img\">
                        <img src=\"{{ asset('img/feature-player-management.jpg') }}\" class=\"img-fluid w-100\" alt=\"Player Management\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">Player Management</h4>
                        <p class=\"mb-4\">
                            Seamlessly manage your roster with our intuitive CRUD system. Add, update, and organize player profiles, including personal details, contracts, and performance records, all in one place.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.4s\">
                    <div class=\"feature-img\">
                        <img src=\"{{ asset('img/feature-ai-tracking.jpg') }}\" class=\"img-fluid w-100\" alt=\"AI Player Tracking\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">AI Player Tracking</h4>
                        <p class=\"mb-4\">
                            Leverage AI to track players on the field in real-time. Analyze movement patterns, positioning, and workload to enhance training and game strategies with precision.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
                <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <div class=\"feature-img\">
                        <img src=\"{{ asset('img/feature-statistics.jpg') }}\" class=\"img-fluid w-100\" alt=\"Player Statistics\">
                    </div>
                    <div class=\"feature-content p-4\">
                        <h4 class=\"mb-3\">Player Statistics</h4>
                        <p class=\"mb-4\">
                            Unlock deep insights with comprehensive player stats. Track goals, assists, fitness metrics, and more to make data-driven decisions for your team’s success.
                        </p>
                        <a href=\"#\" class=\"btn btn-primary py-2 px-4\"><span>Learn More</span></a>
                    </div>
                </div>
            </div>
            <div class=\"feature-shaps\"></div>
        </div>
    </div>
    <!-- Features End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function(){
            \$(\".feature-carousel\").owlCarousel({
                items: 3,
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
        });
    </script>
{% endblock %}", "joueur/feature.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\joueur\\feature.html.twig");
    }
}
