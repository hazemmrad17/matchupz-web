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

/* historique_club/new.html.twig */
class __TwigTemplate_7fb9f897f2f6dd7dc3915d1bc7a49fd8 extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique_club/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "historique_club/new.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Historique Club /</span> 
                ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "current_route", [], "any", false, false, false, 12) == "app_historique_club_new")) {
            // line 13
            yield "                    Nouvel Historique
                ";
        } else {
            // line 15
            yield "                    Modifier Historique
                ";
        }
        // line 17
        yield "            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "current_route", [], "any", false, false, false, 23) == "app_historique_club_new")) {
            // line 24
            yield "                                Ajouter un Nouvel Historique
                            ";
        } else {
            // line 26
            yield "                                Modifier l'Historique
                            ";
        }
        // line 28
        yield "                        </h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "joueur", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"nomClub\">Nom du Club</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-group\"></i></span>
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nomClub", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du club"]]);
        yield "
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\" for=\"saisonDebut\">Saison Début</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "saisonDebut", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\" for=\"saisonFin\">Saison Fin (optionnel)</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "saisonFin", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    <small class=\"text-muted\">Laissez vide si toujours en cours</small>
                                </div>
                            </div>
                            
                            <div class=\"d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i>
                                    ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "current_route", [], "any", false, false, false, 70) == "app_historique_club_new")) {
            // line 71
            yield "                                        Créer
                                    ";
        } else {
            // line 73
            yield "                                        Mettre à jour
                                    ";
        }
        // line 75
        yield "                                </button>
                                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\" class=\"btn btn-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                                </a>
                            </div>
                        ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
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
        return "historique_club/new.html.twig";
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
        return array (  215 => 80,  208 => 76,  205 => 75,  201 => 73,  197 => 71,  195 => 70,  183 => 61,  173 => 54,  161 => 45,  150 => 37,  142 => 32,  136 => 28,  132 => 26,  128 => 24,  126 => 23,  118 => 17,  114 => 15,  110 => 13,  108 => 12,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Historique Club /</span> 
                {% if app.current_route == 'app_historique_club_new' %}
                    Nouvel Historique
                {% else %}
                    Modifier Historique
                {% endif %}
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            {% if app.current_route == 'app_historique_club_new' %}
                                Ajouter un Nouvel Historique
                            {% else %}
                                Modifier l'Historique
                            {% endif %}
                        </h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.joueur, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"nomClub\">Nom du Club</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-group\"></i></span>
                                    {{ form_widget(form.nomClub, {'attr': {'class': 'form-control', 'placeholder': 'Nom du club'}}) }}
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\" for=\"saisonDebut\">Saison Début</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        {{ form_widget(form.saisonDebut, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\" for=\"saisonFin\">Saison Fin (optionnel)</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        {{ form_widget(form.saisonFin, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <small class=\"text-muted\">Laissez vide si toujours en cours</small>
                                </div>
                            </div>
                            
                            <div class=\"d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i>
                                    {% if app.current_route == 'app_historique_club_new' %}
                                        Créer
                                    {% else %}
                                        Mettre à jour
                                    {% endif %}
                                </button>
                                <a href=\"{{ path('app_historique_club_index') }}\" class=\"btn btn-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "historique_club/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\historique_club\\new.html.twig");
    }
}
