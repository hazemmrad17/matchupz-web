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

/* searchbar.html.twig */
class __TwigTemplate_4abfc58a3ca721312734e816f1451b52 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchbar.html.twig"));

        // line 2
        yield "<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>
        <!-- /Search -->

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Place this tag where you want the button to render. -->
            <li class=\"nav-item lh-1 me-3\">
                <span></span>
            </li>

            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online position-relative\">
                        ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["user"], "method", false, false, false, 29) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["user"], "method", false, false, false, 29), "image", [], "any", false, false, false, 29))) {
            // line 30
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "session", [], "any", false, false, false, 30), "get", ["user"], "method", false, false, false, 30), "image", [], "any", false, false, false, 30))), "html", null, true);
            yield "\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                        ";
        } else {
            // line 32
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
            yield "\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                        ";
        }
        // line 34
        yield "                        <span class=\"avatar-status\"></span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online position-relative\">
                                        ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "get", ["user"], "method", false, false, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "get", ["user"], "method", false, false, false, 43), "image", [], "any", false, false, false, 43))) {
            // line 44
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", ["user"], "method", false, false, false, 44), "image", [], "any", false, false, false, 44))), "html", null, true);
            yield "\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                                        ";
        } else {
            // line 46
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
            yield "\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                                        ";
        }
        // line 48
        yield "                                        <span class=\"avatar-status\"></span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">
                                        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["user"], "method", false, false, false, 53)) {
            // line 54
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["user"], "method", false, false, false, 54), "prenom", [], "any", false, false, false, 54), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["user"], "method", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "
                                        ";
        } else {
            // line 56
            yield "                                            John Doe
                                        ";
        }
        // line 58
        yield "                                    </span>
                                    <small class=\"text-muted\">
                                        ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", ["user"], "method", false, false, false, 60)) {
            // line 61
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 61), "get", ["user"], "method", false, true, false, 61), "role", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", ["user"], "method", false, false, false, 61), "role", [], "any", false, false, false, 61), "Admin")) : ("Admin")), "html", null, true);
            yield "
                                        ";
        } else {
            // line 63
            yield "                                            Admin
                                        ";
        }
        // line 65
        yield "                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
        yield "\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <style>
        /* Styles pour l'avatar */
        .avatar-img {
            width: 40px;
            height: 40px;
            object-fit: cover; /* Assure que l'image remplit le cercle sans déformation */
        }
        .position-relative {
            position: relative;
        }
        .avatar-status {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 14px;
            height: 14px;
            background-color: #28a745; /* Vert pour le statut en ligne */
            border: 2px solid #fff; /* Bordure blanche pour contraste */
            border-radius: 50%;
        }
    </style>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "searchbar.html.twig";
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
        return array (  176 => 83,  164 => 74,  153 => 65,  149 => 63,  143 => 61,  141 => 60,  137 => 58,  133 => 56,  125 => 54,  123 => 53,  116 => 48,  110 => 46,  104 => 44,  102 => 43,  91 => 34,  85 => 32,  79 => 30,  77 => 29,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/searchbar.html.twig #}
<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>
        <!-- /Search -->

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Place this tag where you want the button to render. -->
            <li class=\"nav-item lh-1 me-3\">
                <span></span>
            </li>

            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online position-relative\">
                        {% if app.session.get('user') and app.session.get('user').image %}
                            <img src=\"{{ asset('Uploads/users/' ~ app.session.get('user').image) }}\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                        {% else %}
                            <img src=\"{{ asset('/img/avatars/1.png') }}\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                        {% endif %}
                        <span class=\"avatar-status\"></span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online position-relative\">
                                        {% if app.session.get('user') and app.session.get('user').image %}
                                            <img src=\"{{ asset('Uploads/users/' ~ app.session.get('user').image) }}\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                                        {% else %}
                                            <img src=\"{{ asset('/img/avatars/1.png') }}\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                                        {% endif %}
                                        <span class=\"avatar-status\"></span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">
                                        {% if app.session.get('user') %}
                                            {{ app.session.get('user').prenom }} {{ app.session.get('user').nom }}
                                        {% else %}
                                            John Doe
                                        {% endif %}
                                    </span>
                                    <small class=\"text-muted\">
                                        {% if app.session.get('user') %}
                                            {{ app.session.get('user').role|default('Admin') }}
                                        {% else %}
                                            Admin
                                        {% endif %}
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_logout') }}\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <style>
        /* Styles pour l'avatar */
        .avatar-img {
            width: 40px;
            height: 40px;
            object-fit: cover; /* Assure que l'image remplit le cercle sans déformation */
        }
        .position-relative {
            position: relative;
        }
        .avatar-status {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 14px;
            height: 14px;
            background-color: #28a745; /* Vert pour le statut en ligne */
            border: 2px solid #fff; /* Bordure blanche pour contraste */
            border-radius: 50%;
        }
    </style>
</nav>", "searchbar.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\searchbar.html.twig");
    }
}
