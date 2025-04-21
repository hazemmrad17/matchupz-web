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

/* user/profile.html.twig */
class __TwigTemplate_a8cec15f434c48e2c493799c9baf57f3 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 2);
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

        yield "Mon Profil";
        
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
        yield "    <div class=\"container py-5\">
        <!-- Back Arrow -->
        <div class=\"mb-4\">
            <a href=\"javascript:history.back()\" class=\"btn btn-outline-secondary btn-sm shadow-sm\">
                <i class=\"bx bx-arrow-back bx-md\"></i> Retour
            </a>
        </div>

        <!-- User Profile Card -->
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 col-md-9\">
                <div class=\"card shadow-sm border-0 rounded-3\">
                    <!-- Header with Image and Name -->
                    <div class=\"card-header bg-primary text-white text-center py-4 border-0\">
                        <div class=\"mb-3\">
                            ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22)) {
            // line 23
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" 
                                     class=\"img-fluid shadow-sm square-img\" 
                                     alt=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "\"
                                     style=\"width: 150px; height: 150px; object-fit: cover;\">
                            ";
        } else {
            // line 28
            yield "                                <div class=\"bg-light d-flex align-items-center justify-content-center shadow-sm square-img\"
                                     style=\"width: 150px; height: 150px;\">
                                    <i class=\"fas fa-user fa-3x text-muted\"></i>
                                </div>
                            ";
        }
        // line 33
        yield "                        </div>
                        <h3 class=\"card-title fw-bold mb-1\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
        yield "</h3>
                        <p class=\"text-white-50 mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "role", [], "any", false, false, false, 35), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield "</p>
                    </div>

                    <!-- User Details -->
                    <div class=\"card-body p-4\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-id-card me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">ID</small>
                                        <p class=\"mb-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-envelope me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Email</small>
                                        <p class=\"mb-0\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-user me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Nom</small>
                                        <p class=\"mb-0\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-user me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Prénom</small>
                                        <p class=\"mb-0\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "prenom", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-male-female me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Genre</small>
                                        <p class=\"mb-0\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "genre", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "genre", [], "any", false, false, false, 82), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-shield me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Rôle</small>
                                        <p class=\"mb-0\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91), "Utilisateur")) : ("Utilisateur")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-calendar me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Date de Naissance</small>
                                        <p class=\"mb-0\">
                                            ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "date_de_naissance", [], "any", true, true, false, 101) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 101))) {
            // line 102
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 104
            yield "                                                Non défini
                                            ";
        }
        // line 106
        yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-cake me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Âge</small>
                                        <p class=\"mb-0\">
                                            ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "date_de_naissance", [], "any", true, true, false, 116) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 116))) {
            // line 117
            yield "                                                ";
            $context["birthYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 117), "Y");
            // line 118
            yield "                                                ";
            $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
            // line 119
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 119, $this->source); })()) - (isset($context["birthYear"]) || array_key_exists("birthYear", $context) ? $context["birthYear"] : (function () { throw new RuntimeError('Variable "birthYear" does not exist.', 119, $this->source); })())), "html", null, true);
            yield " ans
                                            ";
        } else {
            // line 121
            yield "                                                Non défini
                                            ";
        }
        // line 123
        yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-phone me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Téléphone</small>
                                        <p class=\"mb-0\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "num_telephone", [], "any", true, true, false, 132)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "num_telephone", [], "any", false, false, false, 132), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modifier Button -->
                    <div class=\"card-footer bg-white border-top-0 p-4 d-flex justify-content-end\">
                        <a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id_user" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-primary px-4 py-2 shadow-sm\">
                            <i class=\"bx bx-edit-alt me-2\"></i> Modifier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Card Styling */
        .card {
            border-radius: 8px;
            transition: box-shadow 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .bg-primary {
            background-color: #00b7eb;
            border-radius: 8px 8px 0 0;
        }

        /* Square Image */
        .square-img {
            border-radius: 8px; /* Slightly rounded corners */
            margin: 0 auto;
            display: block;
        }

        /* Details */
        .bg-light {
            background-color: #f8f9fa !important;
        }
        .text-primary {
            color: #00b7eb !important;
        }
        .d-flex {
            transition: background-color 0.2s ease;
        }
        .d-flex:hover {
            background-color: #e9ecef;
        }

        /* Buttons */
        .btn-primary {
            background-color: #00b7eb;
            border-color: #00b7eb;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0099cc;
            border-color: #0099cc;
            transform: scale(1.05);
        }
        .btn-outline-secondary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-outline-secondary:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 767px) {
            .square-img {
                width: 120px !important;
                height: 120px !important;
            }
            .card-body, .card-header {
                padding: 2rem 1.5rem;
            }
            .col-md-6 {
                margin-bottom: 0.5rem;
            }
        }
    </style>
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
        return "user/profile.html.twig";
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
        return array (  301 => 141,  289 => 132,  278 => 123,  274 => 121,  268 => 119,  265 => 118,  262 => 117,  260 => 116,  248 => 106,  244 => 104,  238 => 102,  236 => 101,  223 => 91,  211 => 82,  199 => 73,  187 => 64,  175 => 55,  163 => 46,  149 => 35,  143 => 34,  140 => 33,  133 => 28,  125 => 25,  119 => 23,  117 => 22,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/profile.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <!-- Back Arrow -->
        <div class=\"mb-4\">
            <a href=\"javascript:history.back()\" class=\"btn btn-outline-secondary btn-sm shadow-sm\">
                <i class=\"bx bx-arrow-back bx-md\"></i> Retour
            </a>
        </div>

        <!-- User Profile Card -->
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 col-md-9\">
                <div class=\"card shadow-sm border-0 rounded-3\">
                    <!-- Header with Image and Name -->
                    <div class=\"card-header bg-primary text-white text-center py-4 border-0\">
                        <div class=\"mb-3\">
                            {% if user.image %}
                                <img src=\"{{ asset('Uploads/users/' ~ user.image) }}\" 
                                     class=\"img-fluid shadow-sm square-img\" 
                                     alt=\"{{ user.prenom }} {{ user.nom }}\"
                                     style=\"width: 150px; height: 150px; object-fit: cover;\">
                            {% else %}
                                <div class=\"bg-light d-flex align-items-center justify-content-center shadow-sm square-img\"
                                     style=\"width: 150px; height: 150px;\">
                                    <i class=\"fas fa-user fa-3x text-muted\"></i>
                                </div>
                            {% endif %}
                        </div>
                        <h3 class=\"card-title fw-bold mb-1\">{{ user.prenom }} {{ user.nom }}</h3>
                        <p class=\"text-white-50 mb-0\">{{ user.role|default('Utilisateur') }}</p>
                    </div>

                    <!-- User Details -->
                    <div class=\"card-body p-4\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-id-card me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">ID</small>
                                        <p class=\"mb-0\">{{ user.id }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-envelope me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Email</small>
                                        <p class=\"mb-0\">{{ user.email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-user me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Nom</small>
                                        <p class=\"mb-0\">{{ user.nom }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-user me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Prénom</small>
                                        <p class=\"mb-0\">{{ user.prenom }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-male-female me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Genre</small>
                                        <p class=\"mb-0\">{{ user.genre|default('Non défini') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-shield me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Rôle</small>
                                        <p class=\"mb-0\">{{ user.role|default('Utilisateur') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-calendar me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Date de Naissance</small>
                                        <p class=\"mb-0\">
                                            {% if user.date_de_naissance is defined and user.date_de_naissance %}
                                                {{ user.date_de_naissance|date('d/m/Y') }}
                                            {% else %}
                                                Non défini
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-cake me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Âge</small>
                                        <p class=\"mb-0\">
                                            {% if user.date_de_naissance is defined and user.date_de_naissance %}
                                                {% set birthYear = user.date_de_naissance|date('Y') %}
                                                {% set currentYear = \"now\"|date('Y') %}
                                                {{ currentYear - birthYear }} ans
                                            {% else %}
                                                Non défini
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center p-2 bg-light rounded-2\">
                                    <i class=\"bx bx-phone me-3 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Téléphone</small>
                                        <p class=\"mb-0\">{{ user.num_telephone|default('Non défini') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modifier Button -->
                    <div class=\"card-footer bg-white border-top-0 p-4 d-flex justify-content-end\">
                        <a href=\"{{ path('app_user_edit', {'id_user': user.id}) }}\" 
                           class=\"btn btn-primary px-4 py-2 shadow-sm\">
                            <i class=\"bx bx-edit-alt me-2\"></i> Modifier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Card Styling */
        .card {
            border-radius: 8px;
            transition: box-shadow 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .bg-primary {
            background-color: #00b7eb;
            border-radius: 8px 8px 0 0;
        }

        /* Square Image */
        .square-img {
            border-radius: 8px; /* Slightly rounded corners */
            margin: 0 auto;
            display: block;
        }

        /* Details */
        .bg-light {
            background-color: #f8f9fa !important;
        }
        .text-primary {
            color: #00b7eb !important;
        }
        .d-flex {
            transition: background-color 0.2s ease;
        }
        .d-flex:hover {
            background-color: #e9ecef;
        }

        /* Buttons */
        .btn-primary {
            background-color: #00b7eb;
            border-color: #00b7eb;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0099cc;
            border-color: #0099cc;
            transform: scale(1.05);
        }
        .btn-outline-secondary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-outline-secondary:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 767px) {
            .square-img {
                width: 120px !important;
                height: 120px !important;
            }
            .card-body, .card-header {
                padding: 2rem 1.5rem;
            }
            .col-md-6 {
                margin-bottom: 0.5rem;
            }
        }
    </style>
{% endblock %}", "user/profile.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\profile.html.twig");
    }
}
