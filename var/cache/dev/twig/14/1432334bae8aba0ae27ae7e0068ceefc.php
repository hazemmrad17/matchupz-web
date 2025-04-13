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

/* espace/espaceF.html.twig */
class __TwigTemplate_2de6d1165f42c8a4e0a6a29eb6f77ab8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/espaceF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/espaceF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "espace/espaceF.html.twig", 1);
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

        yield "Fitness - Nos Espaces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Espaces</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Feature</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Espaces Sportifs Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            ";
        // line 33
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 34
        yield "
            ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            yield "                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 37, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
                // line 38
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 38) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 40, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 40, $this->source); })()))), [], "array", false, false, false, 40))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom_espace", [], "any", false, false, false, 43), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 45), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 46), "html", null, true);
                yield " personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_show", ["id_lieu" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "id_lieu", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\"><span>En savoir plus</span></a>
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
            unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                </div>
            ";
        } else {
            // line 54
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            ";
        }
        // line 58
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Espaces Sportifs Carousel End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

        // line 66
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3500,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0:{ items:1 },
                    768:{ items:2 },
                    992:{ items:3 }
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
        return "espace/espaceF.html.twig";
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
        return array (  267 => 66,  254 => 65,  238 => 58,  232 => 54,  228 => 52,  210 => 48,  205 => 46,  201 => 45,  197 => 44,  193 => 43,  187 => 40,  181 => 38,  164 => 37,  161 => 36,  159 => 35,  156 => 34,  154 => 33,  147 => 29,  126 => 10,  113 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Fitness - Nos Espaces{% endblock %}

{% block navigation %}
    {# Navigation block remains unchanged — omitted for brevity #}
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Espaces</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Feature</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Espaces Sportifs Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">{{ espaces_description }}</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            {% set images = ['stadium1.jpg', 'stadium2.jpg', 'stadium3.jpg', 'stadium4.jpg', 'stadium5.jpg'] %}

            {% if espaces|length > 0 %}
                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    {% for espace in espaces %}
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
                                <a href=\"{{ path('espace_show', {'id_lieu': espace.id_lieu}) }}\" class=\"btn btn-primary py-2 px-4\"><span>En savoir plus</span></a>
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
    <!-- Espaces Sportifs Carousel End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3500,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0:{ items:1 },
                    768:{ items:2 },
                    992:{ items:3 }
                }
            });
        });
    </script>
{% endblock %}
", "espace/espaceF.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\espace\\espaceF.html.twig");
    }
}
