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

/* user/new.html.twig */
class __TwigTemplate_0c0288d14a8d1acda8f69c31451dbcbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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

        yield "Nouvel Utilisateur";
        
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
        yield from $this->loadTemplate("searchbar.html.twig", "user/new.html.twig", 6)->unwrap()->yield($context);
        
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
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Nouvel Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Utilisateur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "userForm", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_nom\">Nom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'utilisateur"]]);
        yield "
                                </div>
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_prenom\">Prénom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom de l'utilisateur"]]);
        yield "
                                </div>
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_email\">Email*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@gmail.com"]]);
        yield "
                                </div>
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_password\">Mot de passe*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe sécurisé", "type" => "password"]]);
        // line 62
        yield "
                                    <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                        <i class=\"bx bx-hide\"></i>
                                    </button>
                                </div>
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_num_telephone\">Téléphone*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "num_telephone", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "12345678"]]);
        // line 77
        yield "
                                </div>
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "num_telephone", [], "any", false, false, false, 79), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_date_de_naissance\">Date de naissance*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 88), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Genre*</label>
                                <div class=\"d-flex gap-4\">
                                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "genre", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 95
            yield "                                        <div class=\"form-check\">
                                            ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                            ";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                                </div>
                                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "genre", [], "any", false, false, false, 101), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_role\">Rôle*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-cog\"></i></span>
                                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "role", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "role", [], "any", false, false, false, 110), 'errors');
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_image\">Photo de profil</label>
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "image", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
                                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "image", [], "any", false, false, false, 117), 'errors');
        yield "
                            </div>
                            
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Gestion du toggle password
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.querySelector('#user_password');
                const icon = togglePassword.querySelector('i');
                
                // Configuration initiale - mot de passe masqué
                passwordInput.setAttribute('type', 'password');
                icon.classList.add('bx-hide');
                icon.classList.remove('bx-show');
                icon.setAttribute('title', 'Afficher le mot de passe');
                
                // Gestion du clic sur l'icône
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    
                    // Changer l'icône
                    if (isPassword) {
                        icon.classList.replace('bx-hide', 'bx-show');
                        icon.setAttribute('title', 'Masquer le mot de passe');
                    } else {
                        icon.classList.replace('bx-show', 'bx-hide');
                        icon.setAttribute('title', 'Afficher le mot de passe');
                    }
                });
                
                // Style pour le bouton
                togglePassword.style.cursor = 'pointer';
                togglePassword.style.transition = 'background-color 0.3s ease';
                togglePassword.addEventListener('mouseover', function() {
                    this.style.backgroundColor = 'rgba(0,0,0,0.05)';
                });
                togglePassword.addEventListener('mouseout', function() {
                    this.style.backgroundColor = '';
                });
            }

            // Validation du formulaire
            document.getElementById('userForm').addEventListener('submit', function(e) {
                const toastContainer = document.getElementById('toast-container');
                toastContainer.innerHTML = ''; // Clear previous toasts

                // Vérification des champs
                let isValid = true;

                // Validation du nom
                const nom = document.getElementById('user_nom').value.trim();
                if (!nom) {
                    addToast('Erreur', 'Le nom est obligatoire');
                    isValid = false;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nom)) {
                    addToast('Erreur', 'Le nom ne doit contenir que des lettres');
                    isValid = false;
                }

                // Validation du prénom
                const prenom = document.getElementById('user_prenom').value.trim();
                if (!prenom) {
                    addToast('Erreur', 'Le prénom est obligatoire');
                    isValid = false;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(prenom)) {
                    addToast('Erreur', 'Le prénom ne doit contenir que des lettres');
                    isValid = false;
                }

                // Validation de l'email
                const email = document.getElementById('user_email').value.trim();
                if (!email) {
                    addToast('Erreur', 'L\\'email est obligatoire');
                    isValid = false;
                } else if (!/^[^\\s@]+@gmail\\.com\$/i.test(email)) {
                    addToast('Erreur', 'L\\'email doit être un @gmail.com valide');
                    isValid = false;
                }

                // Validation du mot de passe
                const password = document.getElementById('user_password').value;
                if (!password) {
                    addToast('Erreur', 'Le mot de passe est obligatoire');
                    isValid = false;
                } else if (password.length < 8) {
                    addToast('Erreur', 'Le mot de passe doit contenir au moins 8 caractères');
                    isValid = false;
                } else if (!/\\d/.test(password) || !/[a-zA-Z]/.test(password)) {
                    addToast('Erreur', 'Le mot de passe doit contenir des lettres et des chiffres');
                    isValid = false;
                }

                // Validation du téléphone
                const telephone = document.getElementById('user_num_telephone').value.trim();
                if (!telephone) {
                    addToast('Erreur', 'Le téléphone est obligatoire');
                    isValid = false;
                } else if (!/^\\d{8}\$/.test(telephone)) {
                    addToast('Erreur', 'Le téléphone doit contenir exactement 8 chiffres');
                    isValid = false;
                }

                // Validation de la date de naissance
                const dateNaissance = document.getElementById('user_date_de_naissance').value;
                if (!dateNaissance) {
                    addToast('Erreur', 'La date de naissance est obligatoire');
                    isValid = false;
                } else {
                    const birthDate = new Date(dateNaissance);
                    const today = new Date();
                    const minAgeDate = new Date();
                    minAgeDate.setFullYear(today.getFullYear() - 18);

                    if (birthDate > today) {
                        addToast('Erreur', 'La date de naissance ne peut pas être dans le futur');
                        isValid = false;
                    } else if (birthDate > minAgeDate) {
                        addToast('Erreur', 'L\\'utilisateur doit avoir au moins 18 ans');
                        isValid = false;
                    }
                }

                // Validation du genre
                const genre = document.querySelector('input[name=\"user[genre]\"]:checked');
                if (!genre) {
                    addToast('Erreur', 'Le genre est obligatoire');
                    isValid = false;
                }

                // Validation du rôle
                const role = document.getElementById('user_role').value;
                if (!role) {
                    addToast('Erreur', 'Le rôle est obligatoire');
                    isValid = false;
                }

                // Validation de l'image
                const image = document.getElementById('user_image').files[0];
                if (image) {
                    const validTypes = ['image/jpeg', 'image/png'];
                    if (!validTypes.includes(image.type)) {
                        addToast('Erreur', 'L\\'image doit être au format JPG ou PNG');
                        isValid = false;
                    }
                    if (image.size > 2 * 1024 * 1024) {
                        addToast('Erreur', 'L\\'image ne doit pas dépasser 2Mo');
                        isValid = false;
                    }
                }

                if (!isValid) {
                    e.preventDefault();
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
        return "user/new.html.twig";
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
        return array (  308 => 122,  304 => 121,  297 => 117,  292 => 115,  284 => 110,  279 => 108,  269 => 101,  266 => 100,  257 => 97,  253 => 96,  250 => 95,  246 => 94,  237 => 88,  232 => 86,  222 => 79,  218 => 77,  216 => 74,  206 => 67,  199 => 62,  197 => 58,  187 => 51,  182 => 49,  172 => 42,  167 => 40,  157 => 33,  152 => 31,  144 => 26,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Utilisateur{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Nouvel Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Utilisateur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'userForm', 'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_nom\">Nom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom de l\\'utilisateur'}}) }}
                                </div>
                                {{ form_errors(form.nom) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_prenom\">Prénom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom de l\\'utilisateur'}}) }}
                                </div>
                                {{ form_errors(form.prenom) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_email\">Email*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'email@gmail.com'}}) }}
                                </div>
                                {{ form_errors(form.email) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_password\">Mot de passe*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    {{ form_widget(form.password, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Mot de passe sécurisé',
                                        'type': 'password'
                                    }}) }}
                                    <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\">
                                        <i class=\"bx bx-hide\"></i>
                                    </button>
                                </div>
                                {{ form_errors(form.password) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_num_telephone\">Téléphone*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.num_telephone, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': '12345678'
                                    }}) }}
                                </div>
                                {{ form_errors(form.num_telephone) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_date_de_naissance\">Date de naissance*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.date_de_naissance) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Genre*</label>
                                <div class=\"d-flex gap-4\">
                                    {% for child in form.genre %}
                                        <div class=\"form-check\">
                                            {{ form_widget(child, {'attr': {'class': 'form-check-input'}}) }}
                                            {{ form_label(child, null, {'label_attr': {'class': 'form-check-label'}}) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                {{ form_errors(form.genre) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_role\">Rôle*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-cog\"></i></span>
                                    {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.role) }}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_image\">Photo de profil</label>
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
                                {{ form_errors(form.image) }}
                            </div>
                            
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Gestion du toggle password
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.querySelector('#user_password');
                const icon = togglePassword.querySelector('i');
                
                // Configuration initiale - mot de passe masqué
                passwordInput.setAttribute('type', 'password');
                icon.classList.add('bx-hide');
                icon.classList.remove('bx-show');
                icon.setAttribute('title', 'Afficher le mot de passe');
                
                // Gestion du clic sur l'icône
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    
                    // Changer l'icône
                    if (isPassword) {
                        icon.classList.replace('bx-hide', 'bx-show');
                        icon.setAttribute('title', 'Masquer le mot de passe');
                    } else {
                        icon.classList.replace('bx-show', 'bx-hide');
                        icon.setAttribute('title', 'Afficher le mot de passe');
                    }
                });
                
                // Style pour le bouton
                togglePassword.style.cursor = 'pointer';
                togglePassword.style.transition = 'background-color 0.3s ease';
                togglePassword.addEventListener('mouseover', function() {
                    this.style.backgroundColor = 'rgba(0,0,0,0.05)';
                });
                togglePassword.addEventListener('mouseout', function() {
                    this.style.backgroundColor = '';
                });
            }

            // Validation du formulaire
            document.getElementById('userForm').addEventListener('submit', function(e) {
                const toastContainer = document.getElementById('toast-container');
                toastContainer.innerHTML = ''; // Clear previous toasts

                // Vérification des champs
                let isValid = true;

                // Validation du nom
                const nom = document.getElementById('user_nom').value.trim();
                if (!nom) {
                    addToast('Erreur', 'Le nom est obligatoire');
                    isValid = false;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nom)) {
                    addToast('Erreur', 'Le nom ne doit contenir que des lettres');
                    isValid = false;
                }

                // Validation du prénom
                const prenom = document.getElementById('user_prenom').value.trim();
                if (!prenom) {
                    addToast('Erreur', 'Le prénom est obligatoire');
                    isValid = false;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(prenom)) {
                    addToast('Erreur', 'Le prénom ne doit contenir que des lettres');
                    isValid = false;
                }

                // Validation de l'email
                const email = document.getElementById('user_email').value.trim();
                if (!email) {
                    addToast('Erreur', 'L\\'email est obligatoire');
                    isValid = false;
                } else if (!/^[^\\s@]+@gmail\\.com\$/i.test(email)) {
                    addToast('Erreur', 'L\\'email doit être un @gmail.com valide');
                    isValid = false;
                }

                // Validation du mot de passe
                const password = document.getElementById('user_password').value;
                if (!password) {
                    addToast('Erreur', 'Le mot de passe est obligatoire');
                    isValid = false;
                } else if (password.length < 8) {
                    addToast('Erreur', 'Le mot de passe doit contenir au moins 8 caractères');
                    isValid = false;
                } else if (!/\\d/.test(password) || !/[a-zA-Z]/.test(password)) {
                    addToast('Erreur', 'Le mot de passe doit contenir des lettres et des chiffres');
                    isValid = false;
                }

                // Validation du téléphone
                const telephone = document.getElementById('user_num_telephone').value.trim();
                if (!telephone) {
                    addToast('Erreur', 'Le téléphone est obligatoire');
                    isValid = false;
                } else if (!/^\\d{8}\$/.test(telephone)) {
                    addToast('Erreur', 'Le téléphone doit contenir exactement 8 chiffres');
                    isValid = false;
                }

                // Validation de la date de naissance
                const dateNaissance = document.getElementById('user_date_de_naissance').value;
                if (!dateNaissance) {
                    addToast('Erreur', 'La date de naissance est obligatoire');
                    isValid = false;
                } else {
                    const birthDate = new Date(dateNaissance);
                    const today = new Date();
                    const minAgeDate = new Date();
                    minAgeDate.setFullYear(today.getFullYear() - 18);

                    if (birthDate > today) {
                        addToast('Erreur', 'La date de naissance ne peut pas être dans le futur');
                        isValid = false;
                    } else if (birthDate > minAgeDate) {
                        addToast('Erreur', 'L\\'utilisateur doit avoir au moins 18 ans');
                        isValid = false;
                    }
                }

                // Validation du genre
                const genre = document.querySelector('input[name=\"user[genre]\"]:checked');
                if (!genre) {
                    addToast('Erreur', 'Le genre est obligatoire');
                    isValid = false;
                }

                // Validation du rôle
                const role = document.getElementById('user_role').value;
                if (!role) {
                    addToast('Erreur', 'Le rôle est obligatoire');
                    isValid = false;
                }

                // Validation de l'image
                const image = document.getElementById('user_image').files[0];
                if (image) {
                    const validTypes = ['image/jpeg', 'image/png'];
                    if (!validTypes.includes(image.type)) {
                        addToast('Erreur', 'L\\'image doit être au format JPG ou PNG');
                        isValid = false;
                    }
                    if (image.size > 2 * 1024 * 1024) {
                        addToast('Erreur', 'L\\'image ne doit pas dépasser 2Mo');
                        isValid = false;
                    }
                }

                if (!isValid) {
                    e.preventDefault();
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
        });
    </script>
{% endblock %}", "user/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\new.html.twig");
    }
}
