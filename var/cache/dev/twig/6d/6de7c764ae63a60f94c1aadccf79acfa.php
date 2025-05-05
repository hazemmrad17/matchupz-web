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

/* navbar.html.twig */
class __TwigTemplate_cebf4875b080eb90f6bcfa6643e411eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        yield "<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
    <div class=\"app-brand demo\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_white.svg"), "html", null, true);
        yield "\" alt=\"Your App Name\" width=\"200\" height=\"200\">
            </span>
        </a>
        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "maintenance")) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div data-i18n=\"Dashboard\">Dashboard</div>
            </a>
        </li>

        <!-- Spacer: Users Section -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Users Section</span>
        </li>
        <!-- Users -->
        <li class=\"menu-item ";
        // line 29
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v1 = "joueur_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div data-i18n=\"Users\">Users</div>
            </a>
        </li>

        <!-- Spacer: Players Section -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Section Staff Technique</span>
        </li>
        <!-- Team Management -->
        <li class=\"menu-item ";
        // line 41
        if (((((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v3 = "joueur_") && str_starts_with($_v2, $_v3)) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v5 = "sport_") && str_starts_with($_v4, $_v5))) || (is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v7 = "club_") && str_starts_with($_v6, $_v7))) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v9 = "performance_joueur_") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v11 = "app_historique_club_") && str_starts_with($_v10, $_v11))) || (is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v13 = "app_evaluation_physique_") && str_starts_with($_v12, $_v13)))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-group\"></i>
                <div data-i18n=\"Equipes\">Joueurs</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 47
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47)) && is_string($_v15 = "joueur_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"Joueurs\">Joueurs</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 52
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", ["_route"], "method", false, false, false, 52)) && is_string($_v17 = "club_") && str_starts_with($_v16, $_v17))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"Club\">Club</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 57
        if ((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57)) && is_string($_v19 = "sport_") && str_starts_with($_v18, $_v19))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sport_index");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"Sport\">Sport</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 62
        if ((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62)) && is_string($_v21 = "app_historique_club_") && str_starts_with($_v20, $_v21))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"HistoriqueClub\">Historique Transferts</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Match Management -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Match Management</span>
        </li>
        <!-- Matchs -->
        <li class=\"menu-item ";
        // line 75
        if ((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "attributes", [], "any", false, false, false, 75), "get", ["_route"], "method", false, false, false, 75)) && is_string($_v23 = "app_matchs_") && str_starts_with($_v22, $_v23))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-football\"></i>
                <div data-i18n=\"Matchs\">Matchs</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81) == "app_matchs_upcoming")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Upcoming\">Upcoming</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "attributes", [], "any", false, false, false, 86), "get", ["_route"], "method", false, false, false, 86) == "app_matchs_past")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Past\">Past</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Sports Space -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Section Espace</span>
        </li>
        <!-- Espace Sportif -->
        <li class=\"menu-item ";
        // line 99
        if (((is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99), "get", ["_route"], "method", false, false, false, 99)) && is_string($_v25 = "espace_") && str_starts_with($_v24, $_v25)) || (is_string($_v26 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99), "get", ["_route"], "method", false, false, false, 99)) && is_string($_v27 = "reservation_") && str_starts_with($_v26, $_v27)))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-building\"></i>
                <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 105
        if ((is_string($_v28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "attributes", [], "any", false, false, false, 105), "get", ["_route"], "method", false, false, false, 105)) && is_string($_v29 = "espace_") && str_starts_with($_v28, $_v29))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"Facilities\">Facilités</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 110
        if ((is_string($_v30 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "attributes", [], "any", false, false, false, 110), "get", ["_route"], "method", false, false, false, 110)) && is_string($_v31 = "reservation_") && str_starts_with($_v30, $_v31))) {
            yield "active";
        }
        yield "\">
                    <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"menu-link\">
                        <div data-i18n=\"Reservations\">Réservations</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Logistics -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Logistics</span>
        </li>
        <!-- Logistique -->
        <li class=\"menu-item ";
        // line 123
        if ((is_string($_v32 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123)) && is_string($_v33 = "app_logistique_") && str_starts_with($_v32, $_v33))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-package\"></i>
                <div data-i18n=\"Logistique\">Logistique</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", ["_route"], "method", false, false, false, 129) == "app_logistique_transport")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Transport\">Transport</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 134
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134) == "app_logistique_equipment")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Equipment\">Equipment</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Sponsorship -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Sponsorship</span>
        </li>
        <!-- Sponsoring -->
        <li class=\"menu-item ";
        // line 147
        if ((is_string($_v34 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "attributes", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147)) && is_string($_v35 = "app_sponsoring_") && str_starts_with($_v34, $_v35))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-money\"></i>
                <div data-i18n=\"Sponsoring\">Sponsoring</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "attributes", [], "any", false, false, false, 153), "get", ["_route"], "method", false, false, false, 153) == "app_sponsoring_partners")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Partners\">Partners</div>
                    </a>
                </li>
                <li class=\"menu-item ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "attributes", [], "any", false, false, false, 158), "get", ["_route"], "method", false, false, false, 158) == "app_sponsoring_contracts")) {
            yield "active";
        }
        yield "\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Contracts\">Contracts</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar.html.twig";
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
        return array (  327 => 158,  317 => 153,  306 => 147,  288 => 134,  278 => 129,  267 => 123,  252 => 111,  246 => 110,  239 => 106,  233 => 105,  222 => 99,  204 => 86,  194 => 81,  183 => 75,  168 => 63,  162 => 62,  155 => 58,  149 => 57,  142 => 53,  136 => 52,  129 => 48,  123 => 47,  112 => 41,  98 => 30,  92 => 29,  78 => 18,  72 => 17,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
    <div class=\"app-brand demo\">
        <a href=\"{{ path('maintenance') }}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <img src=\"{{ asset('img/logo_white.svg') }}\" alt=\"Your App Name\" width=\"200\" height=\"200\">
            </span>
        </a>
        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'maintenance' %}active{% endif %}\">
            <a href=\"{{ path('maintenance') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div data-i18n=\"Dashboard\">Dashboard</div>
            </a>
        </li>

        <!-- Spacer: Users Section -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Users Section</span>
        </li>
        <!-- Users -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'joueur_' %}active{% endif %}\">
            <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div data-i18n=\"Users\">Users</div>
            </a>
        </li>

        <!-- Spacer: Players Section -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Section Staff Technique</span>
        </li>
        <!-- Team Management -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'joueur_' or app.request.attributes.get('_route') starts with 'sport_' or app.request.attributes.get('_route') starts with 'club_' or app.request.attributes.get('_route') starts with 'performance_joueur_' or app.request.attributes.get('_route') starts with 'app_historique_club_' or app.request.attributes.get('_route') starts with 'app_evaluation_physique_' %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-group\"></i>
                <div data-i18n=\"Equipes\">Joueurs</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'joueur_' %}active{% endif %}\">
                    <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
                        <div data-i18n=\"Joueurs\">Joueurs</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'club_' %}active{% endif %}\">
                    <a href=\"{{ path('club_index') }}\" class=\"menu-link\">
                        <div data-i18n=\"Club\">Club</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'sport_' %}active{% endif %}\">
                    <a href=\"{{ path('sport_index') }}\" class=\"menu-link\">
                        <div data-i18n=\"Sport\">Sport</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_historique_club_' %}active{% endif %}\">
                    <a href=\"{{ path('app_historique_club_index') }}\" class=\"menu-link\">
                        <div data-i18n=\"HistoriqueClub\">Historique Transferts</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Match Management -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Match Management</span>
        </li>
        <!-- Matchs -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_matchs_' %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-football\"></i>
                <div data-i18n=\"Matchs\">Matchs</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_matchs_upcoming' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Upcoming\">Upcoming</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_matchs_past' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Past\">Past</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Sports Space -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Section Espace</span>
        </li>
        <!-- Espace Sportif -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'espace_' or app.request.attributes.get('_route') starts with 'reservation_' %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-building\"></i>
                <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'espace_' %}active{% endif %}\">
                    <a href=\"{{ path('espace_index') }}\" class=\"menu-link\">
                        <div data-i18n=\"Facilities\">Facilités</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'reservation_' %}active{% endif %}\">
                    <a href=\"{{ path('reservation_index') }}\" class=\"menu-link\">
                        <div data-i18n=\"Reservations\">Réservations</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Logistics -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Logistics</span>
        </li>
        <!-- Logistique -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_logistique_' %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-package\"></i>
                <div data-i18n=\"Logistique\">Logistique</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logistique_transport' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Transport\">Transport</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logistique_equipment' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Equipment\">Equipment</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Spacer: Sponsorship -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Sponsorship</span>
        </li>
        <!-- Sponsoring -->
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_sponsoring_' %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-money\"></i>
                <div data-i18n=\"Sponsoring\">Sponsoring</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_sponsoring_partners' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Partners\">Partners</div>
                    </a>
                </li>
                <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_sponsoring_contracts' %}active{% endif %}\">
                    <a class=\"menu-link\">
                        <div data-i18n=\"Contracts\">Contracts</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>", "navbar.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-integration - Copy - Copy\\templates\\navbar.html.twig");
    }
}
