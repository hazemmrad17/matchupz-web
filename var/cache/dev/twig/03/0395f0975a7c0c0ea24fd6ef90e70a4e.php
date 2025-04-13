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
class __TwigTemplate_94b1c52b89f716f08216cedbc11259fc extends Template
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
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
        if (((((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v1 = "joueur_") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v3 = "sport_") && str_starts_with($_v2, $_v3))) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v5 = "club_") && str_starts_with($_v4, $_v5))) || (is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v7 = "performance_joueur_") && str_starts_with($_v6, $_v7))) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v9 = "app_historique_club_") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v11 = "app_evaluation_physique_") && str_starts_with($_v10, $_v11)))) {
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
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47)) && is_string($_v13 = "joueur_") && str_starts_with($_v12, $_v13))) {
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
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", ["_route"], "method", false, false, false, 52)) && is_string($_v15 = "club_") && str_starts_with($_v14, $_v15))) {
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
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57)) && is_string($_v17 = "sport_") && str_starts_with($_v16, $_v17))) {
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
        if ((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62)) && is_string($_v19 = "app_historique_club_") && str_starts_with($_v18, $_v19))) {
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
        // line 74
        if ((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", ["_route"], "method", false, false, false, 74)) && is_string($_v21 = "app_matchs_") && str_starts_with($_v20, $_v21))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-football\"></i>
        <div data-i18n=\"Matchs\">Matchs</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", ["_route"], "method", false, false, false, 80) == "app_matchs_upcoming")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Upcoming\">Matches</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85) == "app_matchs_past")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Past\">Planning </div>
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
        // line 98
        if ((((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98)) && is_string($_v23 = "espace_") && str_starts_with($_v22, $_v23)) || (is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98)) && is_string($_v25 = "reservation_") && str_starts_with($_v24, $_v25))) || (is_string($_v26 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98)) && is_string($_v27 = "abonnement_") && str_starts_with($_v26, $_v27)))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-stadium\"></i>
        <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104) == "espace_index")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Facilities\">Facilités</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 109
        if ((is_string($_v28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "attributes", [], "any", false, false, false, 109), "get", ["_route"], "method", false, false, false, 109)) && is_string($_v29 = "reservation_") && str_starts_with($_v28, $_v29))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Statistics\">Réservation</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 114
        if ((is_string($_v30 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "attributes", [], "any", false, false, false, 114), "get", ["_route"], "method", false, false, false, 114)) && is_string($_v31 = "abonnement_") && str_starts_with($_v30, $_v31))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Abonnement\">Abonnement</div>
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
        // line 127
        if ((is_string($_v32 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "attributes", [], "any", false, false, false, 127), "get", ["_route"], "method", false, false, false, 127)) && is_string($_v33 = "app_logistique_") && str_starts_with($_v32, $_v33))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-truck\"></i>
        <div data-i18n=\"Logistique\">Logistique</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "attributes", [], "any", false, false, false, 133), "get", ["_route"], "method", false, false, false, 133) == "app_logistique_transport")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Fournisseur\">Fournisseur</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "attributes", [], "any", false, false, false, 138), "get", ["_route"], "method", false, false, false, 138) == "app_logistique_equipment")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"materiel\">Materiel</div>
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
        // line 151
        if ((is_string($_v34 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151)) && is_string($_v35 = "app_sponsoring_") && str_starts_with($_v34, $_v35))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-money\"></i>
        <div data-i18n=\"Sponsoring\">Sponsoring</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 157
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "attributes", [], "any", false, false, false, 157), "get", ["_route"], "method", false, false, false, 157) == "app_sponsoring_partners")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Partners\">Partners</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "attributes", [], "any", false, false, false, 162), "get", ["_route"], "method", false, false, false, 162) == "app_sponsoring_contracts")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"menu-link\">
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
        return array (  360 => 163,  354 => 162,  347 => 158,  341 => 157,  330 => 151,  315 => 139,  309 => 138,  302 => 134,  296 => 133,  285 => 127,  270 => 115,  264 => 114,  257 => 110,  251 => 109,  244 => 105,  238 => 104,  227 => 98,  212 => 86,  206 => 85,  199 => 81,  193 => 80,  182 => 74,  168 => 63,  162 => 62,  155 => 58,  149 => 57,  142 => 53,  136 => 52,  129 => 48,  123 => 47,  112 => 41,  98 => 30,  92 => 29,  78 => 18,  72 => 17,  57 => 5,  52 => 3,  48 => 1,);
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
      <a href=\"{{ path('app_user_index') }}\" class=\"menu-link\">
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
          <a href=\"{{ path('match_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Upcoming\">Matches</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_matchs_past' %}active{% endif %}\">
          <a href=\"{{ path('schedule_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Past\">Planning </div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Spacer: Sports Space -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Section Espace</span>
    </li>
    <!-- Espace Sportif -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'espace_' or app.request.attributes.get('_route') starts with 'reservation_' or app.request.attributes.get('_route') starts with 'abonnement_' %}active open{% endif %}\">
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
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'reservation_' %}active{% endif %}\">
          <a href=\"{{ path('reservation_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Statistics\">Réservation</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'abonnement_' %}active{% endif %}\">
          <a href=\"{{ path('abonnement_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Abonnement\">Abonnement</div>
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
          <a href=\"{{ path('app_fournisseur_index') }}\" class=\"menu-link\">
            <div data-i18n=\"Fournisseur\">Fournisseur</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_logistique_equipment' %}active{% endif %}\">
          <a href=\"{{ path('app_materiel_index') }}\" class=\"menu-link\">
            <div data-i18n=\"materiel\">Materiel</div>
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
          <a href=\"{{ path('sponsor_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Partners\">Partners</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_sponsoring_contracts' %}active{% endif %}\">
          <a href=\"{{ path('contrat_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Contracts\">Contracts</div>
          </a>
        </li>
      </ul>
    </li>


  </ul>
</aside>", "navbar.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\navbar.html.twig");
    }
}
