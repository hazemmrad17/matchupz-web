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
class __TwigTemplate_f3fe978a6db70d232ab150e8e7d93b29 extends Template
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
        // line 2
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/indexF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "fournisseur/indexF.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
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

        // line 7
        yield "<style>
    .fournisseur-bg {
        background: url(\"../../assets/img/fournisseur-bg.jpg\") no-repeat center center/cover;
        background-size: cover;
        padding: 5rem 0;
        position: relative;
        color: white;
    }
    .fournisseur-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
    }
    .fournisseur-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
        background: white;
    }
    .fournisseur-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .card-icon {
        font-size: 2.5rem;
        color: #0d6efd;
        margin-bottom: 1rem;
    }
    .category-badge {
        background: #0d6efd;
        color: white;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .position-relative {
        position: relative;
    }
    .z-index-1 {
        position: relative;
        z-index: 1;
    }
</style>

<!-- Hero Section with Background Image -->
<div class=\"fournisseur-bg\">
    <div class=\"container position-relative z-index-1 text-center\">
        <h1 class=\"display-4 fw-bold mb-4\">Nos Partenaires Fournisseurs</h1>
        <p class=\"lead mb-0\">Découvrez nos fournisseurs de qualité qui contribuent à votre expérience fitness</p>
    </div>
</div>

<!-- Fournisseur Cards Section -->
<div class=\"container py-5\">
    <div class=\"row g-4\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 72
            yield "        <div class=\"col-md-6 col-lg-4\">
            <div class=\"fournisseur-card card h-100 p-4\">
                <div class=\"card-body text-center\">
                    <div class=\"card-icon\">
                        <i class=\"fas fa-truck\"></i>
                    </div>
                    <span class=\"category-badge\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorieProduit", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                    <h3 class=\"card-title\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</h3>
                    
                    <div class=\"text-start mt-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-map-marker-alt text-primary me-3\"></i>
                            <p class=\"mb-0\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-envelope text-primary me-3\"></i>
                            <p class=\"mb-0\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    
                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" 
                       class=\"btn btn-outline-primary mt-3 stretched-link\">
                       Voir détails <i class=\"fas fa-arrow-right ms-2\"></i>
                    </a>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 99
        if (!$context['_iterated']) {
            // line 100
            yield "        <div class=\"col-12 text-center py-5\">
            <div class=\"alert alert-info\">
                Aucun fournisseur disponible pour le moment
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "    </div>
</div>
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
        return array (  230 => 106,  219 => 100,  217 => 99,  205 => 92,  198 => 88,  191 => 84,  183 => 79,  179 => 78,  171 => 72,  166 => 71,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'baseM.html.twig' %}

{% block title %}Nos Fournisseurs - Fitness Center{% endblock %}

{% block body %}
<style>
    .fournisseur-bg {
        background: url(\"../../assets/img/fournisseur-bg.jpg\") no-repeat center center/cover;
        background-size: cover;
        padding: 5rem 0;
        position: relative;
        color: white;
    }
    .fournisseur-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
    }
    .fournisseur-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
        background: white;
    }
    .fournisseur-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .card-icon {
        font-size: 2.5rem;
        color: #0d6efd;
        margin-bottom: 1rem;
    }
    .category-badge {
        background: #0d6efd;
        color: white;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .position-relative {
        position: relative;
    }
    .z-index-1 {
        position: relative;
        z-index: 1;
    }
</style>

<!-- Hero Section with Background Image -->
<div class=\"fournisseur-bg\">
    <div class=\"container position-relative z-index-1 text-center\">
        <h1 class=\"display-4 fw-bold mb-4\">Nos Partenaires Fournisseurs</h1>
        <p class=\"lead mb-0\">Découvrez nos fournisseurs de qualité qui contribuent à votre expérience fitness</p>
    </div>
</div>

<!-- Fournisseur Cards Section -->
<div class=\"container py-5\">
    <div class=\"row g-4\">
        {% for fournisseur in pagination %}
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"fournisseur-card card h-100 p-4\">
                <div class=\"card-body text-center\">
                    <div class=\"card-icon\">
                        <i class=\"fas fa-truck\"></i>
                    </div>
                    <span class=\"category-badge\">{{ fournisseur.categorieProduit }}</span>
                    <h3 class=\"card-title\">{{ fournisseur.nom }}</h3>
                    
                    <div class=\"text-start mt-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-map-marker-alt text-primary me-3\"></i>
                            <p class=\"mb-0\">{{ fournisseur.adresse }}</p>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <i class=\"fas fa-envelope text-primary me-3\"></i>
                            <p class=\"mb-0\">{{ fournisseur.email }}</p>
                        </div>
                    </div>
                    
                    <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" 
                       class=\"btn btn-outline-primary mt-3 stretched-link\">
                       Voir détails <i class=\"fas fa-arrow-right ms-2\"></i>
                    </a>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12 text-center py-5\">
            <div class=\"alert alert-info\">
                Aucun fournisseur disponible pour le moment
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "fournisseur/indexF.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\fournisseur\\indexF.html.twig");
    }
}
