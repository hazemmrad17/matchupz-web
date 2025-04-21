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

/* fournisseur/new.html.twig */
class __TwigTemplate_186cd628d26f31de99bfdf4256395ad3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/new.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "fournisseur/new.html.twig", 4)->unwrap()->yield($context);
        
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
                <span class=\"text-muted fw-light\">Fournisseurs /</span> 
                ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "id_fournisseur", [], "any", false, false, false, 12)) {
            yield "Modifier";
        } else {
            yield "Nouveau";
        }
        yield " Fournisseur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "id_fournisseur", [], "any", false, false, false, 19)) {
            // line 20
            yield "                                Modifier le Fournisseur
                            ";
        } else {
            // line 22
            yield "                                Ajouter un Nouveau Fournisseur
                            ";
        }
        // line 24
        yield "                        </h5>
                        <small class=\"text-muted float-end\">Tous les champs sont obligatoires</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                            <div class=\"row\">
                                <div class=\"mb-3 col-md-6\">
                                    <label class=\"form-label\" for=\"nom\">Nom du Fournisseur</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: SportPlus Inc."]]);
        // line 39
        yield "
                                    </div>
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3 col-md-6\">
                                    <label class=\"form-label\" for=\"email\">Email</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "contact@fournisseur.com"]]);
        // line 53
        yield "
                                    </div>
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"adresse\">Adresse Complète</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "adresse", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse, Ville, Code Postal"]]);
        // line 68
        yield "
                                </div>
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "adresse", [], "any", false, false, false, 70), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"categorie_produit\">Catégorie de Produits</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-category\"></i></span>
                                    <select name=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "categorie_produit", [], "any", false, false, false, 77)), "html", null, true);
        yield "\" class=\"form-select\">
                                        <option value=\"\">Sélectionnez une catégorie</option>
                                        <option value=\"EQUIPEMENT_SPORTIF\" ";
        // line 79
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79), "categorie_produit", [], "any", false, false, false, 79) == "EQUIPEMENT_SPORTIF")) {
            yield "selected";
        }
        yield ">Équipement Sportif</option>
                                        <option value=\"ACCESSOIRE_ENTRAINEMENT\" ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "categorie_produit", [], "any", false, false, false, 80) == "ACCESSOIRE_ENTRAINEMENT")) {
            yield "selected";
        }
        yield ">Accessoire d'Entraînement</option>
                                        <option value=\"MATERIEL_JEU\" ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "vars", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "categorie_produit", [], "any", false, false, false, 81) == "MATERIEL_JEU")) {
            yield "selected";
        }
        yield ">Matériel de Jeu</option>
                                        <option value=\"TENUE_SPORTIVE\" ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "categorie_produit", [], "any", false, false, false, 82) == "TENUE_SPORTIVE")) {
            yield "selected";
        }
        yield ">Tenue Sportive</option>
                                        <option value=\"EQUIPEMENT_PROTECTION\" ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "vars", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "categorie_produit", [], "any", false, false, false, 83) == "EQUIPEMENT_PROTECTION")) {
            yield "selected";
        }
        yield ">Équipement de Protection</option>
                                        <option value=\"INFRASTRUCTURE\" ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "categorie_produit", [], "any", false, false, false, 84) == "INFRASTRUCTURE")) {
            yield "selected";
        }
        yield ">Infrastructure</option>
                                    </select>
                                </div>
                                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "categorie_produit", [], "any", false, false, false, 87), 'errors');
        yield "
                            </div>

                            <div class=\"mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary me-2\">
                                    <i class=\"bx bx-save me-1\"></i>
                                    ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "id_fournisseur", [], "any", false, false, false, 93)) {
            yield "Mettre à jour";
        } else {
            yield "Créer";
        }
        // line 94
        yield "                                </button>
                                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i>
                                    Retour à la liste
                                </a>
                            </div>
                        ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
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
        return "fournisseur/new.html.twig";
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
        return array (  265 => 100,  257 => 95,  254 => 94,  248 => 93,  239 => 87,  231 => 84,  225 => 83,  219 => 82,  213 => 81,  207 => 80,  201 => 79,  196 => 77,  186 => 70,  182 => 68,  180 => 63,  169 => 55,  165 => 53,  163 => 48,  153 => 41,  149 => 39,  147 => 34,  138 => 28,  132 => 24,  128 => 22,  124 => 20,  122 => 19,  108 => 12,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Fournisseurs /</span> 
                {% if form.vars.value.id_fournisseur %}Modifier{% else %}Nouveau{% endif %} Fournisseur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            {% if form.vars.value.id_fournisseur %}
                                Modifier le Fournisseur
                            {% else %}
                                Ajouter un Nouveau Fournisseur
                            {% endif %}
                        </h5>
                        <small class=\"text-muted float-end\">Tous les champs sont obligatoires</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
                            <div class=\"row\">
                                <div class=\"mb-3 col-md-6\">
                                    <label class=\"form-label\" for=\"nom\">Nom du Fournisseur</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        {{ form_widget(form.nom, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: SportPlus Inc.'
                                            }
                                        }) }}
                                    </div>
                                    {{ form_errors(form.nom) }}
                                </div>

                                <div class=\"mb-3 col-md-6\">
                                    <label class=\"form-label\" for=\"email\">Email</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                        {{ form_widget(form.email, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'contact@fournisseur.com'
                                            }
                                        }) }}
                                    </div>
                                    {{ form_errors(form.email) }}
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"adresse\">Adresse Complète</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    {{ form_widget(form.adresse, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Adresse, Ville, Code Postal'
                                        }
                                    }) }}
                                </div>
                                {{ form_errors(form.adresse) }}
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"categorie_produit\">Catégorie de Produits</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-category\"></i></span>
                                    <select name=\"{{ field_name(form.categorie_produit) }}\" class=\"form-select\">
                                        <option value=\"\">Sélectionnez une catégorie</option>
                                        <option value=\"EQUIPEMENT_SPORTIF\" {% if form.vars.value.categorie_produit == 'EQUIPEMENT_SPORTIF' %}selected{% endif %}>Équipement Sportif</option>
                                        <option value=\"ACCESSOIRE_ENTRAINEMENT\" {% if form.vars.value.categorie_produit == 'ACCESSOIRE_ENTRAINEMENT' %}selected{% endif %}>Accessoire d'Entraînement</option>
                                        <option value=\"MATERIEL_JEU\" {% if form.vars.value.categorie_produit == 'MATERIEL_JEU' %}selected{% endif %}>Matériel de Jeu</option>
                                        <option value=\"TENUE_SPORTIVE\" {% if form.vars.value.categorie_produit == 'TENUE_SPORTIVE' %}selected{% endif %}>Tenue Sportive</option>
                                        <option value=\"EQUIPEMENT_PROTECTION\" {% if form.vars.value.categorie_produit == 'EQUIPEMENT_PROTECTION' %}selected{% endif %}>Équipement de Protection</option>
                                        <option value=\"INFRASTRUCTURE\" {% if form.vars.value.categorie_produit == 'INFRASTRUCTURE' %}selected{% endif %}>Infrastructure</option>
                                    </select>
                                </div>
                                {{ form_errors(form.categorie_produit) }}
                            </div>

                            <div class=\"mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary me-2\">
                                    <i class=\"bx bx-save me-1\"></i>
                                    {% if form.vars.value.id_fournisseur %}Mettre à jour{% else %}Créer{% endif %}
                                </button>
                                <a href=\"{{ path('app_fournisseur_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i>
                                    Retour à la liste
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "fournisseur/new.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\fournisseur\\new.html.twig");
    }
}
