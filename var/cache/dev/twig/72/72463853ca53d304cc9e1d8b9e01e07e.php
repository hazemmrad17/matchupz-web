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

/* user/edit.html.twig */
class __TwigTemplate_967c3ffa42b589e4f0844d543782502b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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

        yield "Modifier Utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "user/edit.html.twig", 6)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Modifier Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier l'Utilisateur</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        ";
        // line 27
        yield "                        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_form.html.twig", ["button_label" => "Mettre à jour", "form" =>         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })())]);
        // line 30
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('userForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values
            const nom = document.getElementById('user_nom')?.value.trim() || '';
            const prenom = document.getElementById('user_prenom')?.value.trim() || '';
            const email = document.getElementById('user_email')?.value.trim() || '';
            const password = document.getElementById('user_password')?.value || '';
            const telephone = document.getElementById('user_num_telephone')?.value.trim() || '';
            const dateNaissance = document.getElementById('user_date_de_naissance')?.value || '';
            const genre = document.querySelector('input[name=\"user[genre]\"]:checked')?.value || '';
            const role = document.getElementById('user_role')?.value || '';
            const image = document.getElementById('user_image')?.files[0];

            // Validation des champs obligatoires
            if (!nom) {
                addToast('Erreur Nom', 'Veuillez entrer le nom.');
            } else if (!/^[a-zA-Z\\s-]+\$/.test(nom)) {
                addToast('Erreur Nom', 'Le nom ne doit contenir que des lettres.');
            }

            if (!prenom) {
                addToast('Erreur Prénom', 'Veuillez entrer le prénom.');
            } else if (!/^[a-zA-Z\\s-]+\$/.test(prenom)) {
                addToast('Erreur Prénom', 'Le prénom ne doit contenir que des lettres.');
            }

            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer un email.');
            } else if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(email)) {
                addToast('Erreur Email', 'Format email invalide (ex: nom@gmail.com).');
            }

            if (password && password.length < 6) {
                addToast('Erreur Mot de passe', 'Le mot de passe doit contenir au moins 6 caractères.');
            }

            if (telephone) {
                if (!/^\\d{8}\$/.test(telephone)) {
                    addToast('Erreur Téléphone', 'Le téléphone doit contenir exactement 8 chiffres.');
                }
            }

            if (dateNaissance) {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                const minAgeDate = new Date();
                minAgeDate.setFullYear(today.getFullYear() - 18);

                if (birthDate > today) {
                    addToast('Erreur Date', 'La date ne peut pas être dans le futur.');
                } else if (birthDate > minAgeDate) {
                    addToast('Erreur Date', 'L\\'utilisateur doit avoir au moins 18 ans.');
                }
            }

            if (!role) {
                addToast('Erreur Rôle', 'Veuillez sélectionner un rôle.');
            }

            if (image) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(image.type)) {
                    addToast('Erreur Image', 'L\\'image doit être au format JPG ou PNG.');
                }
                if (image.size > 2 * 1024 * 1024) {
                    addToast('Erreur Image', 'L\\'image ne doit pas dépasser 2Mo.');
                }
            }

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        // Fonction pour ajouter un toast
        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
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
        return "user/edit.html.twig";
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
        return array (  148 => 30,  146 => 29,  144 => 27,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Utilisateur{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Modifier Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier l'Utilisateur</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        {# Inclusion du formulaire sans modifier le FormView #}
                        {{ include('user/_form.html.twig', {
                            'button_label': 'Mettre à jour',
                            'form': form
                        }) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('userForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values
            const nom = document.getElementById('user_nom')?.value.trim() || '';
            const prenom = document.getElementById('user_prenom')?.value.trim() || '';
            const email = document.getElementById('user_email')?.value.trim() || '';
            const password = document.getElementById('user_password')?.value || '';
            const telephone = document.getElementById('user_num_telephone')?.value.trim() || '';
            const dateNaissance = document.getElementById('user_date_de_naissance')?.value || '';
            const genre = document.querySelector('input[name=\"user[genre]\"]:checked')?.value || '';
            const role = document.getElementById('user_role')?.value || '';
            const image = document.getElementById('user_image')?.files[0];

            // Validation des champs obligatoires
            if (!nom) {
                addToast('Erreur Nom', 'Veuillez entrer le nom.');
            } else if (!/^[a-zA-Z\\s-]+\$/.test(nom)) {
                addToast('Erreur Nom', 'Le nom ne doit contenir que des lettres.');
            }

            if (!prenom) {
                addToast('Erreur Prénom', 'Veuillez entrer le prénom.');
            } else if (!/^[a-zA-Z\\s-]+\$/.test(prenom)) {
                addToast('Erreur Prénom', 'Le prénom ne doit contenir que des lettres.');
            }

            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer un email.');
            } else if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(email)) {
                addToast('Erreur Email', 'Format email invalide (ex: nom@gmail.com).');
            }

            if (password && password.length < 6) {
                addToast('Erreur Mot de passe', 'Le mot de passe doit contenir au moins 6 caractères.');
            }

            if (telephone) {
                if (!/^\\d{8}\$/.test(telephone)) {
                    addToast('Erreur Téléphone', 'Le téléphone doit contenir exactement 8 chiffres.');
                }
            }

            if (dateNaissance) {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                const minAgeDate = new Date();
                minAgeDate.setFullYear(today.getFullYear() - 18);

                if (birthDate > today) {
                    addToast('Erreur Date', 'La date ne peut pas être dans le futur.');
                } else if (birthDate > minAgeDate) {
                    addToast('Erreur Date', 'L\\'utilisateur doit avoir au moins 18 ans.');
                }
            }

            if (!role) {
                addToast('Erreur Rôle', 'Veuillez sélectionner un rôle.');
            }

            if (image) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(image.type)) {
                    addToast('Erreur Image', 'L\\'image doit être au format JPG ou PNG.');
                }
                if (image.size > 2 * 1024 * 1024) {
                    addToast('Erreur Image', 'L\\'image ne doit pas dépasser 2Mo.');
                }
            }

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        // Fonction pour ajouter un toast
        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }
    </script>
{% endblock %}", "user/edit.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\edit.html.twig");
    }
}
