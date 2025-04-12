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

/* user/registerF.html.twig */
class __TwigTemplate_420bcf7e6c4015eae73fb48e5576e877 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registerF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registerF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "user/registerF.html.twig", 1);
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

        yield "Register to MatchupZ";
        
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
        yield "    <div class=\"container-fluid py-5\">
        <!-- Add flash messages here -->
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-md-10 col-sm-12\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 800px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Register to MatchupZ</h2>
                        <p class=\"text-center mb-4\">Create your account to get started!</p>

                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        <form id=\"formAuthentication\" class=\"mb-3\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerF");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <!-- Left Column -->
                                <div class=\"col-md-6\">
                                    <!-- Nom -->
                                    <div class=\"mb-3\">
                                        <label for=\"nom\" class=\"form-label\">Nom*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                            <input
                                                type=\"text\"
                                                class=\"form-control\"
                                                id=\"nom\"
                                                name=\"nom\"
                                                placeholder=\"Entrez votre nom\"
                                                autofocus
                                            />
                                        </div>
                                    </div>

                                    <!-- Prénom -->
                                    <div class=\"mb-3\">
                                        <label for=\"prenom\" class=\"form-label\">Prénom*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-user-circle\"></i></span>
                                            <input
                                                type=\"text\"
                                                class=\"form-control\"
                                                id=\"prenom\"
                                                name=\"prenom\"
                                                placeholder=\"Entrez votre prénom\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class=\"mb-3\">
                                        <label for=\"email\" class=\"form-label\">Email*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                            <input
                                                type=\"email\"
                                                class=\"form-control\"
                                                id=\"email\"
                                                name=\"email\"
                                                placeholder=\"Entrez votre email\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class=\"mb-3 form-password-toggle\">
                                        <label class=\"form-label\" for=\"password\">Mot de passe*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                            <input
                                                type=\"password\"
                                                id=\"password\"
                                                class=\"form-control\"
                                                name=\"password\"
                                                placeholder=\"············\"
                                                aria-describedby=\"password\"
                                            />
                                            <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class=\"col-md-6\">
                                    <!-- Numéro de téléphone -->
                                    <div class=\"mb-3\">
                                        <label for=\"num_telephone\" class=\"form-label\">Téléphone</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                            <input
                                                type=\"tel\"
                                                class=\"form-control\"
                                                id=\"num_telephone\"
                                                name=\"num_telephone\"
                                                placeholder=\"Entrez votre numéro\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Date de naissance -->
                                    <div class=\"mb-3\">
                                        <label for=\"date_de_naissance\" class=\"form-label\">Date de naissance</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                            <input
                                                type=\"date\"
                                                class=\"form-control\"
                                                id=\"date_de_naissance\"
                                                name=\"date_de_naissance\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Genre -->
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Genre*</label>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"homme\" value=\"Homme\" />
                                            <label class=\"form-check-label\" for=\"homme\">
                                                <i class=\"bx bx-male\"></i> Homme
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"femme\" value=\"Femme\" />
                                            <label class=\"form-check-label\" for=\"femme\">
                                                <i class=\"bx bx-female\"></i> Femme
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <div class=\"mb-3\">
                                        <label for=\"image\" class=\"form-label\">Image</label>
                                        <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                    </div>
                                </div>
                            </div>

                            <!-- Rôle (caché, fixé à \"Utilisateur\") -->
                            <input type=\"hidden\" name=\"role\" value=\"Utilisateur\">

                            <!-- Conditions -->
                            <div class=\"mb-3\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"terms-conditions\" name=\"terms\" />
                                    <label class=\"form-check-label\" for=\"terms-conditions\">
                                        J'accepte la <a href=\"#\" class=\"text-danger\">politique de confidentialité et les termes</a>
                                    </label>
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-danger d-grid w-100\">S'inscrire</button>
                        </form>

                        <p class=\"text-center\">
                            <span>Déjà un compte ?</span>
                            <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-danger\">
                                <span>Se connecter</span>
                            </a>
                        </p>
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

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 185
        yield "    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
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

        // line 196
        yield "    <!-- Call parent block to include the spinner fallback -->
    ";
        // line 197
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <!-- Helpers -->
    <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>

    <!-- Core JS -->
    <script src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Validation Script -->
    <script>
        document.getElementById('formAuthentication').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values
            const nom = document.getElementById('nom')?.value.trim() || '';
            const prenom = document.getElementById('prenom')?.value.trim() || '';
            const email = document.getElementById('email')?.value.trim() || '';
            const password = document.getElementById('password')?.value || '';
            const telephone = document.getElementById('num_telephone')?.value.trim() || '';
            const dateNaissance = document.getElementById('date_de_naissance')?.value || '';
            const genre = document.querySelector('input[name=\"genre\"]:checked')?.value || '';
            const image = document.getElementById('image')?.files[0];
            const terms = document.getElementById('terms-conditions')?.checked;

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

            if (!password) {
                addToast('Erreur Mot de passe', 'Veuillez entrer un mot de passe.');
            } else if (password.length < 6) {
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
                    addToast('Erreur Date', 'Vous devez avoir au moins 18 ans.');
                }
            }

            if (!genre) {
                addToast('Erreur Genre', 'Veuillez sélectionner un genre.');
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

            if (!terms) {
                addToast('Erreur Conditions', 'Veuillez accepter les conditions d\\'utilisation.');
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

        // Gestion du toggle password
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.getElementById('password');
                const icon = togglePassword.querySelector('i');
                
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
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
        return "user/registerF.html.twig";
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
        return array (  415 => 211,  409 => 208,  405 => 207,  401 => 206,  397 => 205,  393 => 204,  387 => 201,  383 => 200,  377 => 197,  374 => 196,  361 => 195,  348 => 192,  342 => 189,  336 => 186,  333 => 185,  320 => 184,  299 => 173,  154 => 31,  141 => 20,  131 => 16,  128 => 15,  123 => 14,  113 => 10,  110 => 9,  106 => 8,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Register to MatchupZ{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <!-- Add flash messages here -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-md-10 col-sm-12\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 800px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Register to MatchupZ</h2>
                        <p class=\"text-center mb-4\">Create your account to get started!</p>

                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        <form id=\"formAuthentication\" class=\"mb-3\" action=\"{{ path('app_registerF') }}\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"row\">
                                <!-- Left Column -->
                                <div class=\"col-md-6\">
                                    <!-- Nom -->
                                    <div class=\"mb-3\">
                                        <label for=\"nom\" class=\"form-label\">Nom*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                            <input
                                                type=\"text\"
                                                class=\"form-control\"
                                                id=\"nom\"
                                                name=\"nom\"
                                                placeholder=\"Entrez votre nom\"
                                                autofocus
                                            />
                                        </div>
                                    </div>

                                    <!-- Prénom -->
                                    <div class=\"mb-3\">
                                        <label for=\"prenom\" class=\"form-label\">Prénom*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-user-circle\"></i></span>
                                            <input
                                                type=\"text\"
                                                class=\"form-control\"
                                                id=\"prenom\"
                                                name=\"prenom\"
                                                placeholder=\"Entrez votre prénom\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class=\"mb-3\">
                                        <label for=\"email\" class=\"form-label\">Email*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                            <input
                                                type=\"email\"
                                                class=\"form-control\"
                                                id=\"email\"
                                                name=\"email\"
                                                placeholder=\"Entrez votre email\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class=\"mb-3 form-password-toggle\">
                                        <label class=\"form-label\" for=\"password\">Mot de passe*</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                            <input
                                                type=\"password\"
                                                id=\"password\"
                                                class=\"form-control\"
                                                name=\"password\"
                                                placeholder=\"············\"
                                                aria-describedby=\"password\"
                                            />
                                            <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class=\"col-md-6\">
                                    <!-- Numéro de téléphone -->
                                    <div class=\"mb-3\">
                                        <label for=\"num_telephone\" class=\"form-label\">Téléphone</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                            <input
                                                type=\"tel\"
                                                class=\"form-control\"
                                                id=\"num_telephone\"
                                                name=\"num_telephone\"
                                                placeholder=\"Entrez votre numéro\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Date de naissance -->
                                    <div class=\"mb-3\">
                                        <label for=\"date_de_naissance\" class=\"form-label\">Date de naissance</label>
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                            <input
                                                type=\"date\"
                                                class=\"form-control\"
                                                id=\"date_de_naissance\"
                                                name=\"date_de_naissance\"
                                            />
                                        </div>
                                    </div>

                                    <!-- Genre -->
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Genre*</label>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"homme\" value=\"Homme\" />
                                            <label class=\"form-check-label\" for=\"homme\">
                                                <i class=\"bx bx-male\"></i> Homme
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"genre\" id=\"femme\" value=\"Femme\" />
                                            <label class=\"form-check-label\" for=\"femme\">
                                                <i class=\"bx bx-female\"></i> Femme
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <div class=\"mb-3\">
                                        <label for=\"image\" class=\"form-label\">Image</label>
                                        <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                    </div>
                                </div>
                            </div>

                            <!-- Rôle (caché, fixé à \"Utilisateur\") -->
                            <input type=\"hidden\" name=\"role\" value=\"Utilisateur\">

                            <!-- Conditions -->
                            <div class=\"mb-3\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"terms-conditions\" name=\"terms\" />
                                    <label class=\"form-check-label\" for=\"terms-conditions\">
                                        J'accepte la <a href=\"#\" class=\"text-danger\">politique de confidentialité et les termes</a>
                                    </label>
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-danger d-grid w-100\">S'inscrire</button>
                        </form>

                        <p class=\"text-center\">
                            <span>Déjà un compte ?</span>
                            <a href=\"{{ path('app_login') }}\" class=\"text-danger\">
                                <span>Se connecter</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\" />
{% endblock %}

{% block javascripts %}
    <!-- Call parent block to include the spinner fallback -->
    {{ parent() }}

    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>

    <!-- Core JS -->
    <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <!-- Validation Script -->
    <script>
        document.getElementById('formAuthentication').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values
            const nom = document.getElementById('nom')?.value.trim() || '';
            const prenom = document.getElementById('prenom')?.value.trim() || '';
            const email = document.getElementById('email')?.value.trim() || '';
            const password = document.getElementById('password')?.value || '';
            const telephone = document.getElementById('num_telephone')?.value.trim() || '';
            const dateNaissance = document.getElementById('date_de_naissance')?.value || '';
            const genre = document.querySelector('input[name=\"genre\"]:checked')?.value || '';
            const image = document.getElementById('image')?.files[0];
            const terms = document.getElementById('terms-conditions')?.checked;

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

            if (!password) {
                addToast('Erreur Mot de passe', 'Veuillez entrer un mot de passe.');
            } else if (password.length < 6) {
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
                    addToast('Erreur Date', 'Vous devez avoir au moins 18 ans.');
                }
            }

            if (!genre) {
                addToast('Erreur Genre', 'Veuillez sélectionner un genre.');
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

            if (!terms) {
                addToast('Erreur Conditions', 'Veuillez accepter les conditions d\\'utilisation.');
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

        // Gestion du toggle password
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.getElementById('password');
                const icon = togglePassword.querySelector('i');
                
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
        });
    </script>
{% endblock %}", "user/registerF.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\registerF.html.twig");
    }
}
