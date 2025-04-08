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
class __TwigTemplate_14fb821bb1fbf8db67e77c8b02293502 extends Template
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "joueur_main")) {
            yield "active";
        }
        yield "\">
      <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29) == "joueur_main")) {
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

    <!-- Under Team Management section -->
    <li class=\"menu-item ";
        // line 42
        if (((((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v1 = "joueur_") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v3 = "sport_") && str_starts_with($_v2, $_v3))) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v5 = "club_") && str_starts_with($_v4, $_v5))) || (is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v7 = "performance_joueur_") && str_starts_with($_v6, $_v7))) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v9 = "app_historique_club_") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v11 = "app_evaluation_physique_") && str_starts_with($_v10, $_v11)))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-group\"></i>
        <div data-i18n=\"Equipes\">Joueurs</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "attributes", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "joueur_main")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Joueurs\">Joueurs</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 53
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", ["_route"], "method", false, false, false, 53)) && is_string($_v13 = "app_evaluation_physique_") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"EvaluationPhysique\">Evaluation Physique</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 58
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58)) && is_string($_v15 = "club_") && str_starts_with($_v14, $_v15))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Club偶\"Club\">Club</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 63
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "attributes", [], "any", false, false, false, 63), "get", ["_route"], "method", false, false, false, 63)) && is_string($_v17 = "sport_") && str_starts_with($_v16, $_v17))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sport_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Sport\">Sport</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 68
        if ((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68)) && is_string($_v19 = "performance_joueur_") && str_starts_with($_v18, $_v19))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"PerformanceJoueur\">Performance Joueur</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 73
        if ((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73)) && is_string($_v21 = "app_historique_club_") && str_starts_with($_v20, $_v21))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"HistoriqueClub\">Historique Transfères</div>
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
        // line 86
        if ((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "attributes", [], "any", false, false, false, 86), "get", ["_route"], "method", false, false, false, 86)) && is_string($_v23 = "app_matchs_") && str_starts_with($_v22, $_v23))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-football\"></i>
        <div data-i18n=\"Matchs\">Matchs</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", ["_route"], "method", false, false, false, 92) == "app_matchs_upcoming")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Upcoming\">Upcoming</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", ["_route"], "method", false, false, false, 97) == "app_matchs_past")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Past\">Past</div>
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
        // line 110
        if ((is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "attributes", [], "any", false, false, false, 110), "get", ["_route"], "method", false, false, false, 110)) && is_string($_v25 = "app_logistique_") && str_starts_with($_v24, $_v25))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-truck\"></i>
        <div data-i18n=\"Logistique\">Logistique</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116) == "app_logistique_transport")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Transport\">Transport</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "attributes", [], "any", false, false, false, 121), "get", ["_route"], "method", false, false, false, 121) == "app_logistique_equipment")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
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
        // line 134
        if ((is_string($_v26 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134)) && is_string($_v27 = "app_sponsoring_") && str_starts_with($_v26, $_v27))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-money\"></i>
        <div data-i18n=\"Sponsoring\">Sponsoring</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "attributes", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "app_sponsoring_partners")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Partners\">Partners</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "attributes", [], "any", false, false, false, 145), "get", ["_route"], "method", false, false, false, 145) == "app_sponsoring_contracts")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Contracts\">Contracts</div>
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
        // line 158
        if ((is_string($_v28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "request", [], "any", false, false, false, 158), "attributes", [], "any", false, false, false, 158), "get", ["_route"], "method", false, false, false, 158)) && is_string($_v29 = "espace_") && str_starts_with($_v28, $_v29))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-stadium\"></i>
        <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 164
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "attributes", [], "any", false, false, false, 164), "get", ["_route"], "method", false, false, false, 164) == "espace_index")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Facilities\">Facilités</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 169
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "attributes", [], "any", false, false, false, 169), "get", ["_route"], "method", false, false, false, 169) == "reservation_index")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Statistics\">Réservation</div>
          </a>
        </li>
      </ul>
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
        return array (  375 => 170,  369 => 169,  362 => 165,  356 => 164,  345 => 158,  330 => 146,  324 => 145,  317 => 141,  311 => 140,  300 => 134,  285 => 122,  279 => 121,  272 => 117,  266 => 116,  255 => 110,  240 => 98,  234 => 97,  227 => 93,  221 => 92,  210 => 86,  195 => 74,  189 => 73,  182 => 69,  176 => 68,  169 => 64,  163 => 63,  156 => 59,  150 => 58,  143 => 54,  137 => 53,  130 => 49,  124 => 48,  113 => 42,  98 => 30,  92 => 29,  78 => 18,  72 => 17,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
  <div class=\"app-brand demo\">
    <a href=\"{{ path('joueur_main') }}\" class=\"app-brand-link\">
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
    <li class=\"menu-item {% if app.request.attributes.get('_route') == 'joueur_main' %}active{% endif %}\">
      <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
        <div data-i18n=\"Dashboard\">Dashboard</div>
      </a>
    </li>

    <!-- Spacer: Users Section -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Users Section</span>
    </li>
    <!-- Users -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') == 'joueur_main' %}active{% endif %}\">
      <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div data-i18n=\"Users\">Users</div>
      </a>
    </li>

    <!-- Spacer: Players Section -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Section Staff Technique</span>
    </li>

    <!-- Under Team Management section -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'joueur_' or app.request.attributes.get('_route') starts with 'sport_' or app.request.attributes.get('_route') starts with 'club_' or app.request.attributes.get('_route') starts with 'performance_joueur_' or app.request.attributes.get('_route') starts with 'app_historique_club_' or app.request.attributes.get('_route') starts with 'app_evaluation_physique_' %}active open{% endif %}\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-group\"></i>
        <div data-i18n=\"Equipes\">Joueurs</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'joueur_main' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Joueurs\">Joueurs</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_evaluation_physique_' %}active{% endif %}\">
          <a href=\"{{ path('app_evaluation_physique_index') }}\" class=\"menu-link\">
            <div data-i18n=\"EvaluationPhysique\">Evaluation Physique</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'club_' %}active{% endif %}\">
          <a href=\"{{ path('club_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Club偶\"Club\">Club</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'sport_' %}active{% endif %}\">
          <a href=\"{{ path('sport_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Sport\">Sport</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'performance_joueur_' %}active{% endif %}\">
          <a href=\"{{ path('performance_joueur_index') }}\" class=\"menu-link\">
            <div data-i18n=\"PerformanceJoueur\">Performance Joueur</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_historique_club_' %}active{% endif %}\">
          <a href=\"{{ path('app_historique_club_index') }}\" class=\"menu-link\">
            <div data-i18n=\"HistoriqueClub\">Historique Transfères</div>
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
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Upcoming\">Upcoming</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_matchs_past' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Past\">Past</div>
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
        <i class=\"menu-icon tf-icons bx bx-truck\"></i>
        <div data-i18n=\"Logistique\">Logistique</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logistique_transport' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Transport\">Transport</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logistique_equipment' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
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
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Partners\">Partners</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_sponsoring_contracts' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Contracts\">Contracts</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Spacer: Sports Space -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Section Espace</span>
    </li>
    <!-- Espace Sportif -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'espace_' %}active open{% endif %}\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-stadium\"></i>
        <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'espace_index' %}active{% endif %}\">
          <a href=\"{{ path('espace_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Facilities\">Facilités</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'reservation_index' %}active{% endif %}\">
          <a href=\"{{ path('reservation_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Statistics\">Réservation</div>
          </a>
        </li>
      </ul>
  </ul>
</aside>", "navbar.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace - Copy (5)\\templates\\navbar.html.twig");
    }
}
