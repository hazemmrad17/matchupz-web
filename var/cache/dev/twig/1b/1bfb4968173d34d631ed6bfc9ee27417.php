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

/* user/login.html.twig */
class __TwigTemplate_0e5f41fc77c9eaa18a196bb783dae8bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "user/login.html.twig", 1);
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

        yield "Login - MatchupZ";
        
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
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 400px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Login to MatchupZ</h2>

                        <!-- Affichage des messages flash -->
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "                                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                    ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        <form id=\"formAuthentication\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_userF");
        yield "\" method=\"post\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label for=\"username\" class=\"form-label\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    <input
                                        type=\"email\"
                                        id=\"username\"
                                        name=\"_username\"
                                        class=\"form-control\"
                                        placeholder=\"Entrez votre email\"
                                    />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class=\"mb-3 form-password-toggle\">
                                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    <input
                                        type=\"password\"
                                        id=\"password\"
                                        name=\"_password\"
                                        class=\"form-control\"
                                        placeholder=\"············\"
                                    />
                                    <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                <a href=\"#\" class=\"text-muted small\">Forgot Password?</a>
                            </div>
                        </form>
                        <div class=\"text-center\">
                            <p class=\"small\">Don't have an account? <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerF");
        yield "\">Register</a></p>
                        </div>
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

    // line 75
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

        // line 76
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Ensure Boxicons is included -->
    <link rel=\"stylesheet\" href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
";
        
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

    <!-- Core JS -->
    <script src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Validation Script -->
    <script>
        document.getElementById('formAuthentication').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Get form field values
            const email = document.getElementById('username')?.value.trim() || '';
            const password = document.getElementById('password')?.value || '';

            // Validation des champs
            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer un email.');
            } else if (!/^[^\\s@]+@gmail\\.com\$/.test(email)) {
                addToast('Erreur Email', 'L\\'email doit être de la forme nom@gmail.com.');
            }

            if (!password) {
                addToast('Erreur Mot de passe', 'Veuillez entrer un mot de passe.');
            } else if (password.length < 6) {
                addToast('Erreur Mot de passe', 'Le mot de passe doit contenir au moins 6 caractères.');
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
            const passwordInput = document.getElementById('password');
            const icon = togglePassword ? togglePassword.querySelector('i') : null;

            if (togglePassword && passwordInput && icon) {
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
        return "user/login.html.twig";
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
        return array (  287 => 92,  281 => 89,  277 => 88,  273 => 87,  269 => 86,  265 => 85,  258 => 82,  245 => 81,  232 => 78,  226 => 76,  213 => 75,  194 => 66,  183 => 58,  148 => 26,  142 => 22,  136 => 21,  126 => 17,  121 => 16,  116 => 15,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Login - MatchupZ{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-6 col-sm-8\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 400px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Login to MatchupZ</h2>

                        <!-- Affichage des messages flash -->
                        {% for label, messages in app.flashes %}
                            {% for message in messages %}
                                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endfor %}
                        {% endfor %}

                        <!-- Toast container -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        <form id=\"formAuthentication\" action=\"{{ path('app_verif_userF') }}\" method=\"post\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label for=\"username\" class=\"form-label\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    <input
                                        type=\"email\"
                                        id=\"username\"
                                        name=\"_username\"
                                        class=\"form-control\"
                                        placeholder=\"Entrez votre email\"
                                    />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class=\"mb-3 form-password-toggle\">
                                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    <input
                                        type=\"password\"
                                        id=\"password\"
                                        name=\"_password\"
                                        class=\"form-control\"
                                        placeholder=\"············\"
                                    />
                                    <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                <a href=\"#\" class=\"text-muted small\">Forgot Password?</a>
                            </div>
                        </form>
                        <div class=\"text-center\">
                            <p class=\"small\">Don't have an account? <a href=\"{{ path('app_registerF') }}\">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Ensure Boxicons is included -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}

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
            const email = document.getElementById('username')?.value.trim() || '';
            const password = document.getElementById('password')?.value || '';

            // Validation des champs
            if (!email) {
                addToast('Erreur Email', 'Veuillez entrer un email.');
            } else if (!/^[^\\s@]+@gmail\\.com\$/.test(email)) {
                addToast('Erreur Email', 'L\\'email doit être de la forme nom@gmail.com.');
            }

            if (!password) {
                addToast('Erreur Mot de passe', 'Veuillez entrer un mot de passe.');
            } else if (password.length < 6) {
                addToast('Erreur Mot de passe', 'Le mot de passe doit contenir au moins 6 caractères.');
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
            const passwordInput = document.getElementById('password');
            const icon = togglePassword ? togglePassword.querySelector('i') : null;

            if (togglePassword && passwordInput && icon) {
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
        });
    </script>
{% endblock %}", "user/login.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\login.html.twig");
    }
}
