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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/new.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "fournisseur/new.html.twig", 5)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span>
                ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "id_fournisseur", [], "any", false, false, false, 13)) {
            yield "Modifier Fournisseur";
        } else {
            yield "Nouveau Fournisseur";
        }
        // line 14
        yield "            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id_fournisseur", [], "any", false, false, false, 20)) {
            // line 21
            yield "                                Modifier le Fournisseur
                            ";
        } else {
            // line 23
            yield "                                Ajouter un Nouveau Fournisseur
                            ";
        }
        // line 25
        yield "                        </h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "fournisseurForm", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_nom\">Nom du Fournisseur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: SportPlus Inc."]]);
        yield "
                                </div>
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "contact@fournisseur.com"]]);
        yield "
                                </div>
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_adresse\">Adresse Complète</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adresse", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse, Ville, Code Postal"]]);
        yield "
                                </div>
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_categorie_produit\">Catégorie de Produits</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-category\"></i></span>
                                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "categorie_produit", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "categorie_produit", [], "any", false, false, false, 66), 'errors');
        yield "
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "id_fournisseur", [], "any", false, false, false, 70)) {
            yield "Mettre à jour";
        } else {
            yield "Créer";
        }
        // line 71
        yield "                            </button>
                            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('fournisseurForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('fournisseur_nom')?.value.trim() || '';
            const email = document.getElementById('fournisseur_email')?.value.trim() || '';
            const adresse = document.getElementById('fournisseur_adresse')?.value.trim() || '';
            const categorieProduit = document.getElementById('fournisseur_categorie_produit')?.value || '';

            // Validation for Nom
            if (!nom) {
                addToast('Erreur Nom', 'Le champ nom est vide.');
            } else if (nom.length > 100) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 100 caractères.');
            }

            // Validation for Email
            if (!email) {
                addToast('Erreur Email', 'Le champ email est vide.');
            } else if (!isValidEmail(email)) {
                addToast('Erreur Email', 'Veuillez entrer un email valide.');
            } else if (email.length > 100) {
                addToast('Erreur Email', \"L'email ne doit pas dépasser 100 caractères.\");
            }

            // Validation for Adresse
            if (!adresse) {
                addToast('Erreur Adresse', 'Le champ adresse est vide.');
            } else if (adresse.length > 255) {
                addToast('Erreur Adresse', \"L'adresse ne doit pas dépasser 255 caractères.\");
            }

            // Validation for Categorie Produit
            if (!categorieProduit) {
                addToast('Erreur Catégorie', 'Le champ catégorie de produits est vide.');
            } else if (![
                'EQUIPEMENT_SPORTIF',
                'ACCESSOIRE_ENTRAINEMENT',
                'MATERIEL_JEU',
                'TENUE_SPORTIVE',
                'EQUIPEMENT_PROTECTION',
                'INFRASTRUCTURE'
            ].includes(categorieProduit)) {
                addToast('Erreur Catégorie', 'Veuillez sélectionner une catégorie valide.');
            }

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }
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
        return array (  219 => 73,  215 => 72,  212 => 71,  206 => 70,  199 => 66,  194 => 64,  184 => 57,  179 => 55,  169 => 48,  164 => 46,  154 => 39,  149 => 37,  141 => 32,  132 => 25,  128 => 23,  124 => 21,  122 => 20,  114 => 14,  108 => 13,  102 => 9,  89 => 8,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/fournisseur/new.html.twig #}
{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span>
                {% if form.vars.value.id_fournisseur %}Modifier Fournisseur{% else %}Nouveau Fournisseur{% endif %}
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
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'fournisseurForm', 'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_nom\">Nom du Fournisseur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: SportPlus Inc.'}}) }}
                                </div>
                                {{ form_errors(form.nom) }}
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'contact@fournisseur.com'}}) }}
                                </div>
                                {{ form_errors(form.email) }}
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_adresse\">Adresse Complète</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse, Ville, Code Postal'}}) }}
                                </div>
                                {{ form_errors(form.adresse) }}
                            </div>

                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"fournisseur_categorie_produit\">Catégorie de Produits</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-category\"></i></span>
                                    {{ form_widget(form.categorie_produit, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.categorie_produit) }}
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">
                                {% if form.vars.value.id_fournisseur %}Mettre à jour{% else %}Créer{% endif %}
                            </button>
                            <a href=\"{{ path('app_fournisseur_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('fournisseurForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('fournisseur_nom')?.value.trim() || '';
            const email = document.getElementById('fournisseur_email')?.value.trim() || '';
            const adresse = document.getElementById('fournisseur_adresse')?.value.trim() || '';
            const categorieProduit = document.getElementById('fournisseur_categorie_produit')?.value || '';

            // Validation for Nom
            if (!nom) {
                addToast('Erreur Nom', 'Le champ nom est vide.');
            } else if (nom.length > 100) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 100 caractères.');
            }

            // Validation for Email
            if (!email) {
                addToast('Erreur Email', 'Le champ email est vide.');
            } else if (!isValidEmail(email)) {
                addToast('Erreur Email', 'Veuillez entrer un email valide.');
            } else if (email.length > 100) {
                addToast('Erreur Email', \"L'email ne doit pas dépasser 100 caractères.\");
            }

            // Validation for Adresse
            if (!adresse) {
                addToast('Erreur Adresse', 'Le champ adresse est vide.');
            } else if (adresse.length > 255) {
                addToast('Erreur Adresse', \"L'adresse ne doit pas dépasser 255 caractères.\");
            }

            // Validation for Categorie Produit
            if (!categorieProduit) {
                addToast('Erreur Catégorie', 'Le champ catégorie de produits est vide.');
            } else if (![
                'EQUIPEMENT_SPORTIF',
                'ACCESSOIRE_ENTRAINEMENT',
                'MATERIEL_JEU',
                'TENUE_SPORTIVE',
                'EQUIPEMENT_PROTECTION',
                'INFRASTRUCTURE'
            ].includes(categorieProduit)) {
                addToast('Erreur Catégorie', 'Veuillez sélectionner une catégorie valide.');
            }

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }
    </script>
{% endblock %}", "fournisseur/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\fournisseur\\new.html.twig");
    }
}
