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

/* joueur/edit.html.twig */
class __TwigTemplate_ece3ff2acf33ebd47b5e87ac2c9e598a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Modifier Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier Joueur #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 13, $this->source); })()), "idJoueur", [], "any", false, false, false, 13), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "playerForm", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_nom\">Nom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du joueur"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_prenom\">Prénom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom du joueur"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_dateNaissance\">Date de Naissance</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateNaissance", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_sport\">Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "sport", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poste\">Poste</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "poste", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_taille\">Taille (m)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "taille", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 1.85"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poids\">Poids (kg)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "poids", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 75"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@exemple.com"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_telephone\">Téléphone</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "telephone", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "Numéro de téléphone"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_statut\">Statut</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_profilePicture\">Photo de Profil</label>
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "profilePicture", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 94, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 94)) {
            // line 95
            yield "                                    <div class=\"mt-2\">
                                        <img src=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 96, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 96), "html", null, true);
            yield "\" alt=\"Photo actuelle\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                        <p class=\"form-text\">Sélectionnez une nouvelle image pour remplacer l'actuelle (optionnel)</p>
                                    </div>
                                ";
        }
        // line 100
        yield "                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            <a href=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 102, $this->source); })()), "idJoueur", [], "any", false, false, false, 102)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values with error handling
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const sport = document.getElementById('joueur_sport')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Validation with custom toast messages - All fields except profilePicture are required
            if (!nom) {
                addToast('Erreur Nom', 'Veuillez entrer le nom du joueur.');
            } else if (nom.length > 50) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');
            }

            if (!prenom) {
                addToast('Erreur Prénom', 'Veuillez entrer le prénom du joueur.');
            } else if (prenom.length > 50) {
                addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');
            }

            if (!dateNaissance) {
                addToast('Erreur Date', 'Veuillez sélectionner une date de naissance.');
            } else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) {
                    addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
                }
            }

            if (!sport) {
                addToast('Erreur Sport', 'Veuillez sélectionner un sport.');
            }

            if (!poste) {
                addToast('Erreur Poste', 'Veuillez sélectionner un poste.');
            } else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) {
                addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');
            }

            if (!taille) {
                addToast('Erreur Taille', 'Veuillez entrer la taille du joueur.');
            } else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) {
                    addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                } else if (tailleNum > 3) {
                    addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
                }
            }

            if (!poids) {
                addToast('Erreur Poids', 'Veuillez entrer le poids du joueur.');
            } else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) {
                    addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                } else if (poidsNum > 500) {
                    addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
                }
            }

            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer l\\'email du joueur.');
            } else if (!isValidEmail(email)) {
                addToast('Erreur Email', 'Veuillez entrer un email valide.');
            } else if (email.length > 100) {
                addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');
            }

            if (!telephone) {
                addToast('Erreur Téléphone', 'Veuillez entrer le numéro de téléphone du joueur.');
            } else if (!isValidPhone(telephone)) {
                addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            } else if (telephone.length > 20) {
                addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');
            }

            if (!statut) {
                addToast('Erreur Statut', 'Veuillez sélectionner un statut.');
            } else if (!['Actif','Blessé','Suspendu',''].includes(statut)) {
                addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');
            }

            // Profile picture is optional in edit mode - only validate if a new file is selected
            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) {
                    addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                }
                if (profilePicture.size > 2 * 1024 * 1024) {
                    addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
                }
            }

            // If no toasts, submit the form
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                // Initialize Bootstrap toasts
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now(); // Unique ID for each toast
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">
                        \${message}
                    </div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
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
        return "joueur/edit.html.twig";
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
        return array (  227 => 103,  223 => 102,  219 => 100,  212 => 96,  209 => 95,  207 => 94,  203 => 93,  195 => 88,  185 => 81,  175 => 74,  165 => 67,  155 => 60,  145 => 53,  135 => 46,  125 => 39,  115 => 32,  105 => 25,  97 => 20,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Modifier Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier Joueur #{{ joueur.idJoueur }}</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'playerForm', 'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_nom\">Nom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du joueur'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_prenom\">Prénom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom du joueur'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_dateNaissance\">Date de Naissance</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateNaissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_sport\">Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.sport, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poste\">Poste</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_taille\">Taille (m)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    {{ form_widget(form.taille, {'attr': {'class': 'form-control', 'placeholder': 'ex: 1.85'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poids\">Poids (kg)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    {{ form_widget(form.poids, {'attr': {'class': 'form-control', 'placeholder': 'ex: 75'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'email@exemple.com'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_telephone\">Téléphone</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control phone-mask', 'placeholder': 'Numéro de téléphone'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_statut\">Statut</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_profilePicture\">Photo de Profil</label>
                                {{ form_widget(form.profilePicture, {'attr': {'class': 'form-control'}}) }}
                                {% if joueur.profilePictureUrl %}
                                    <div class=\"mt-2\">
                                        <img src=\"{{ joueur.profilePictureUrl }}\" alt=\"Photo actuelle\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                        <p class=\"form-text\">Sélectionnez une nouvelle image pour remplacer l'actuelle (optionnel)</p>
                                    </div>
                                {% endif %}
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            <a href=\"{{ path('joueur_show', {'id': joueur.idJoueur}) }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values with error handling
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const sport = document.getElementById('joueur_sport')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Validation with custom toast messages - All fields except profilePicture are required
            if (!nom) {
                addToast('Erreur Nom', 'Veuillez entrer le nom du joueur.');
            } else if (nom.length > 50) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');
            }

            if (!prenom) {
                addToast('Erreur Prénom', 'Veuillez entrer le prénom du joueur.');
            } else if (prenom.length > 50) {
                addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');
            }

            if (!dateNaissance) {
                addToast('Erreur Date', 'Veuillez sélectionner une date de naissance.');
            } else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) {
                    addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
                }
            }

            if (!sport) {
                addToast('Erreur Sport', 'Veuillez sélectionner un sport.');
            }

            if (!poste) {
                addToast('Erreur Poste', 'Veuillez sélectionner un poste.');
            } else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) {
                addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');
            }

            if (!taille) {
                addToast('Erreur Taille', 'Veuillez entrer la taille du joueur.');
            } else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) {
                    addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                } else if (tailleNum > 3) {
                    addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
                }
            }

            if (!poids) {
                addToast('Erreur Poids', 'Veuillez entrer le poids du joueur.');
            } else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) {
                    addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                } else if (poidsNum > 500) {
                    addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
                }
            }

            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer l\\'email du joueur.');
            } else if (!isValidEmail(email)) {
                addToast('Erreur Email', 'Veuillez entrer un email valide.');
            } else if (email.length > 100) {
                addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');
            }

            if (!telephone) {
                addToast('Erreur Téléphone', 'Veuillez entrer le numéro de téléphone du joueur.');
            } else if (!isValidPhone(telephone)) {
                addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            } else if (telephone.length > 20) {
                addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');
            }

            if (!statut) {
                addToast('Erreur Statut', 'Veuillez sélectionner un statut.');
            } else if (!['Actif','Blessé','Suspendu',''].includes(statut)) {
                addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');
            }

            // Profile picture is optional in edit mode - only validate if a new file is selected
            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) {
                    addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                }
                if (profilePicture.size > 2 * 1024 * 1024) {
                    addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
                }
            }

            // If no toasts, submit the form
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                // Initialize Bootstrap toasts
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now(); // Unique ID for each toast
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">
                        \${message}
                    </div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }
    </script>
{% endblock %}", "joueur/edit.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\joueur\\edit.html.twig");
    }
}
