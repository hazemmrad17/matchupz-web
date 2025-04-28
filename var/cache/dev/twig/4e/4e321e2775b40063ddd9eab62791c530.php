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

/* fournisseur/indexF.html.twig */
class __TwigTemplate_5f8904177aefc6d362fc887ff1fdb530 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/indexF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "fournisseur/indexF.html.twig", 1);
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

        yield "Nos Fournisseurs - Fitness Center";
        
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
        yield "    ";
        // line 7
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Fournisseurs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Fournisseurs</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Fournisseurs Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos Partenaires</h4>
                <h1 class=\"display-4 mb-4\">Découvrez Nos Fournisseurs de Qualité</h1>
                <p class=\"mb-3\">Nous collaborons avec des fournisseurs de confiance pour vous offrir les meilleurs équipements et services pour votre expérience fitness.</p>
                <p class=\"mb-0\">Explorez nos partenaires et découvrez comment ils contribuent à votre réussite sportive.</p>
            </div>

            ";
        // line 30
        $context["images"] = ["fournisseur1.jpg", "fournisseur2.jpg", "fournisseur3.jpg", "fournisseur4.jpg", "fournisseur5.jpg"];
        // line 31
        yield "
            ";
        // line 32
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            yield "                <div class=\"fournisseur-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
                // line 35
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 37, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 37) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 37, $this->source); })()))), [], "array", false, false, false, 37))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Fournisseur\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 41), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-envelope me-2 text-primary\"></i><strong>Email:</strong> ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorieProduit", [], "any", false, false, false, 43), "html", null, true);
                yield "</p>
                                <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "idFournisseur", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\"></a>
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
            unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                </div>
            ";
        } else {
            // line 50
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun fournisseur trouvé.</p>
                </div>
            ";
        }
        // line 54
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Fournisseurs Carousel End -->

    ";
        // line 61
        yield "    ";
        if ((isset($context["bestSupplier"]) || array_key_exists("bestSupplier", $context) ? $context["bestSupplier"] : (function () { throw new RuntimeError('Variable "bestSupplier" does not exist.', 61, $this->source); })())) {
            // line 62
            yield "        <div class=\"container pb-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-7 col-lg-6\">
                    <div class=\"card shadow-lg border-0 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"border-top: 5px solid #0d6efd; border-radius: 1.2rem;\">
                        <div class=\"card-body text-center py-4 px-4\">
                            <span class=\"badge bg-warning text-dark mb-2\" style=\"font-size: 1rem; letter-spacing: 1px;\"><i class=\"fas fa-crown text-warning me-2\" style=\"font-size:1.5rem;\"></i>Top Fournisseur</span>
                            <h2 class=\"text-primary mb-2\" style=\"font-family: 'Teko', sans-serif; letter-spacing: 1px;\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bestSupplier"]) || array_key_exists("bestSupplier", $context) ? $context["bestSupplier"] : (function () { throw new RuntimeError('Variable "bestSupplier" does not exist.', 68, $this->source); })()), "nom", [], "any", false, false, false, 68), "html", null, true);
            yield "</h2>
                            <div class=\"mb-2\">
                                <span class=\"badge bg-primary\" style=\"font-size: 1.1rem;\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bestSupplier"]) || array_key_exists("bestSupplier", $context) ? $context["bestSupplier"] : (function () { throw new RuntimeError('Variable "bestSupplier" does not exist.', 70, $this->source); })()), "materialCount", [], "any", false, false, false, 70), "html", null, true);
            yield " matériels fournis</span>
                            </div>
                            <p class=\"mb-0 text-muted\">Merci à notre meilleur partenaire pour sa contribution exceptionnelle !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".fournisseur-carousel\").owlCarousel({
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
        return "fournisseur/indexF.html.twig";
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
        return array (  269 => 82,  256 => 81,  235 => 70,  230 => 68,  222 => 62,  219 => 61,  211 => 54,  205 => 50,  201 => 48,  183 => 44,  179 => 43,  175 => 42,  171 => 41,  167 => 40,  161 => 37,  155 => 35,  138 => 34,  135 => 33,  133 => 32,  130 => 31,  128 => 30,  103 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Nos Fournisseurs - Fitness Center{% endblock %}

{% block body %}
    {# Recommandation du meilleur fournisseur #}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Fournisseurs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Fournisseurs</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Fournisseurs Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos Partenaires</h4>
                <h1 class=\"display-4 mb-4\">Découvrez Nos Fournisseurs de Qualité</h1>
                <p class=\"mb-3\">Nous collaborons avec des fournisseurs de confiance pour vous offrir les meilleurs équipements et services pour votre expérience fitness.</p>
                <p class=\"mb-0\">Explorez nos partenaires et découvrez comment ils contribuent à votre réussite sportive.</p>
            </div>

            {% set images = ['fournisseur1.jpg', 'fournisseur2.jpg', 'fournisseur3.jpg', 'fournisseur4.jpg', 'fournisseur5.jpg'] %}

            {% if pagination|length > 0 %}
                <div class=\"fournisseur-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    {% for fournisseur in pagination %}
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                            <div class=\"feature-img\">
                                <img src=\"{{ asset('img/' ~ images[loop.index0 % images|length]) }}\" class=\"img-fluid w-100\" alt=\"Fournisseur\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">{{ fournisseur.nom }}</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> {{ fournisseur.adresse }}</p>
                                <p class=\"mb-2\"><i class=\"fas fa-envelope me-2 text-primary\"></i><strong>Email:</strong> {{ fournisseur.email }}</p>
                                <p class=\"mb-3\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> {{ fournisseur.categorieProduit }}</p>
                                <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': fournisseur.idFournisseur}) }}\" class=\"btn btn-primary py-2 px-4\"></a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun fournisseur trouvé.</p>
                </div>
            {% endif %}

            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Fournisseurs Carousel End -->

    {# Recommandation du meilleur fournisseur sous la liste #}
    {% if bestSupplier %}
        <div class=\"container pb-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-7 col-lg-6\">
                    <div class=\"card shadow-lg border-0 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"border-top: 5px solid #0d6efd; border-radius: 1.2rem;\">
                        <div class=\"card-body text-center py-4 px-4\">
                            <span class=\"badge bg-warning text-dark mb-2\" style=\"font-size: 1rem; letter-spacing: 1px;\"><i class=\"fas fa-crown text-warning me-2\" style=\"font-size:1.5rem;\"></i>Top Fournisseur</span>
                            <h2 class=\"text-primary mb-2\" style=\"font-family: 'Teko', sans-serif; letter-spacing: 1px;\">{{ bestSupplier.nom }}</h2>
                            <div class=\"mb-2\">
                                <span class=\"badge bg-primary\" style=\"font-size: 1.1rem;\">{{ bestSupplier.materialCount }} matériels fournis</span>
                            </div>
                            <p class=\"mb-0 text-muted\">Merci à notre meilleur partenaire pour sa contribution exceptionnelle !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".fournisseur-carousel\").owlCarousel({
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
{% endblock %}", "fournisseur/indexF.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\fournisseur\\indexF.html.twig");
    }
}
