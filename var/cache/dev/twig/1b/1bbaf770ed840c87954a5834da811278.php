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
class __TwigTemplate_ee70a4ab491cef35f952e448e59baad4 extends Template
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

        // line 1
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
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "get", ["user"], "method", false, false, false, 28) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "get", ["user"], "method", false, false, false, 28), "image", [], "any", false, false, false, 28))) {
            // line 29
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", ["user"], "method", false, false, false, 29), "image", [], "any", false, false, false, 29))), "html", null, true);
            yield "\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                        ";
        } else {
            // line 31
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
            yield "\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                        ";
        }
        // line 33
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
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", ["user"], "method", false, false, false, 42) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", ["user"], "method", false, false, false, 42), "image", [], "any", false, false, false, 42))) {
            // line 43
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "get", ["user"], "method", false, false, false, 43), "image", [], "any", false, false, false, 43))), "html", null, true);
            yield "\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
                                        ";
        } else {
            // line 45
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
            yield "\" alt=\"Default Avatar\" class=\"avatar-img rounded-circle\">
                                        ";
        }
        // line 47
        yield "                                        <span class=\"avatar-status\"></span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">
                                        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "get", ["user"], "method", false, false, false, 52)) {
            // line 53
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["user"], "method", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["user"], "method", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "
                                        ";
        } else {
            // line 55
            yield "                                            John Doe
                                        ";
        }
        // line 57
        yield "                                    </span>
                                    <small class=\"text-muted\">
                                        ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", ["user"], "method", false, false, false, 59)) {
            // line 60
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 60), "get", ["user"], "method", false, true, false, 60), "role", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", ["user"], "method", false, false, false, 60), "role", [], "any", false, false, false, 60), "Admin")) : ("Admin")), "html", null, true);
            yield "
                                        ";
        } else {
            // line 62
            yield "                                            Admin
                                        ";
        }
        // line 64
        yield "                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    
                   
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 78
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
        return array (  169 => 78,  153 => 64,  149 => 62,  143 => 60,  141 => 59,  137 => 57,  133 => 55,  125 => 53,  123 => 52,  116 => 47,  110 => 45,  104 => 43,  102 => 42,  91 => 33,  85 => 31,  79 => 29,  77 => 28,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
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
                            <img src=\"{{ asset('uploads/users/' ~ app.session.get('user').image) }}\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
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
                                            <img src=\"{{ asset('uploads/users/' ~ app.session.get('user').image) }}\" alt=\"User Avatar\" class=\"avatar-img rounded-circle\">
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
</nav>", "searchbar.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\searchbar.html.twig");
    }
}
