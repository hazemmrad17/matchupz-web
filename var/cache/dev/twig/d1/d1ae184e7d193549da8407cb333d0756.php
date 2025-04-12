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
class __TwigTemplate_a341acd2f8ff250358079b7069541538 extends Template
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
        <svg
          width=\"25\"
          viewBox=\"0 0 25 42\"
          version=\"1.1\"
          xmlns=\"http://www.w3.org/2000/svg\"
          xmlns:xlink=\"http://www.w3.org/1999/xlink\"
        >
          <!-- SVG content remains unchanged -->
          <defs>
            <path d=\"...\" id=\"path-1\"></path>
            <path d=\"...\" id=\"path-3\"></path>
            <path d=\"...\" id=\"path-4\"></path>
            <path d=\"...\" id=\"path-5\"></path>
          </defs>
          <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
              <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                  <mask id=\"mask-2\" fill=\"white\">
                    <use xlink:href=\"#path-1\"></use>
                  </mask>
                  <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                  <g id=\"Path-3\" mask=\"url(#mask-2)\">
                    <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                  </g>
                  <g id=\"Path-4\" mask=\"url(#mask-2)\">
                    <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                  </g>
                </g>
                <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000)\">
                  <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                  <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </span>
      <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Sneat</span>
    </a>
    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
      <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
    </a>
  </div>

  <div class=\"menu-inner-shadow\"></div>

  <ul class=\"menu-inner py-1\">
    <!-- Dashboard -->
    <li class=\"menu-item ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56) == "app_dashboard")) {
            yield "active";
        }
        yield "\">
      <a href=\"";
        // line 57
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
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68) == "app_users")) {
            yield "active";
        }
        yield "\">
      <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div data-i18n=\"Users\">Users</div>
      </a>
    </li>

    <!-- Under Team Management section -->
    <li class=\"menu-item ";
        // line 76
        if ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76)) && is_string($_v1 = "joueur_") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76)) && is_string($_v3 = "sport_") && str_starts_with($_v2, $_v3))) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76)) && is_string($_v5 = "club_") && str_starts_with($_v4, $_v5)))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-group\"></i>
        <div data-i18n=\"Equipes\">Equipes</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "joueur_main")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Joueurs\">Joueurs</div>
          </a>
        </li>
        <li class=\"menu-item\">
          <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"EvaluationPhysique\">Evaluation Physique</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 92
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", ["_route"], "method", false, false, false, 92)) && is_string($_v7 = "club_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Club\">Club</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 97
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", ["_route"], "method", false, false, false, 97)) && is_string($_v9 = "sport_") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sport_index");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Sport\">Sport</div>
          </a>
        </li>
        <li class=\"menu-item\">
          <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"PerformanceJoueur\">Performance Joueur</div>
          </a>
        </li>
        <li class=\"menu-item\">
          <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"HistoriqueClub\">Historique Club</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Spacer: Match Management -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Match Management</span>
    </li>
    <!-- Matchs (Scrollable with 2 items) -->
    <li class=\"menu-item ";
        // line 120
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "attributes", [], "any", false, false, false, 120), "get", ["_route"], "method", false, false, false, 120)) && is_string($_v11 = "app_matchs_") && str_starts_with($_v10, $_v11))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-football\"></i>
        <div data-i18n=\"Matchs\">Matchs</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 126
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126) == "app_matchs_upcoming")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Upcoming\">Upcoming</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "attributes", [], "any", false, false, false, 131), "get", ["_route"], "method", false, false, false, 131) == "app_matchs_past")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 132
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
    <!-- Logistique (Scrollable with 2 items) -->
    <li class=\"menu-item ";
        // line 144
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "attributes", [], "any", false, false, false, 144), "get", ["_route"], "method", false, false, false, 144)) && is_string($_v13 = "app_logistique_") && str_starts_with($_v12, $_v13))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-truck\"></i>
        <div data-i18n=\"Logistique\">Logistique</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 150
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "attributes", [], "any", false, false, false, 150), "get", ["_route"], "method", false, false, false, 150) == "app_logistique_transport")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Transport\">Transport</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "attributes", [], "any", false, false, false, 155), "get", ["_route"], "method", false, false, false, 155) == "app_logistique_equipment")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 156
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
    <!-- Sponsoring (Scrollable with 2 items) -->
    <li class=\"menu-item ";
        // line 168
        if ((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "request", [], "any", false, false, false, 168), "attributes", [], "any", false, false, false, 168), "get", ["_route"], "method", false, false, false, 168)) && is_string($_v15 = "app_sponsoring_") && str_starts_with($_v14, $_v15))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-money\"></i>
        <div data-i18n=\"Sponsoring\">Sponsoring</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 174
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "request", [], "any", false, false, false, 174), "attributes", [], "any", false, false, false, 174), "get", ["_route"], "method", false, false, false, 174) == "app_sponsoring_partners")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Partners\">Partners</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 179
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "request", [], "any", false, false, false, 179), "attributes", [], "any", false, false, false, 179), "get", ["_route"], "method", false, false, false, 179) == "app_sponsoring_contracts")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Contracts\">Contracts</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Spacer: Sports Space -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Sports Space</span>
    </li>
    <!-- Espace Sportif (Scrollable with 2 items) -->
    <li class=\"menu-item ";
        // line 192
        if ((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "request", [], "any", false, false, false, 192), "attributes", [], "any", false, false, false, 192), "get", ["_route"], "method", false, false, false, 192)) && is_string($_v17 = "app_espace_") && str_starts_with($_v16, $_v17))) {
            yield "active open";
        }
        yield "\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-stadium\"></i>
        <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item ";
        // line 198
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "attributes", [], "any", false, false, false, 198), "get", ["_route"], "method", false, false, false, 198) == "app_espace_facilities")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Facilities\">Facilities</div>
          </a>
        </li>
        <li class=\"menu-item ";
        // line 203
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "request", [], "any", false, false, false, 203), "attributes", [], "any", false, false, false, 203), "get", ["_route"], "method", false, false, false, 203) == "app_espace_events")) {
            yield "active";
        }
        yield "\">
          <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"menu-link\">
            <div data-i18n=\"Events\">Events</div>
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
        return array (  391 => 204,  385 => 203,  378 => 199,  372 => 198,  361 => 192,  346 => 180,  340 => 179,  333 => 175,  327 => 174,  316 => 168,  301 => 156,  295 => 155,  288 => 151,  282 => 150,  271 => 144,  256 => 132,  250 => 131,  243 => 127,  237 => 126,  226 => 120,  211 => 108,  203 => 103,  195 => 98,  189 => 97,  182 => 93,  176 => 92,  169 => 88,  161 => 83,  155 => 82,  144 => 76,  134 => 69,  128 => 68,  114 => 57,  108 => 56,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
  <div class=\"app-brand demo\">
    <a href=\"{{ path('joueur_main') }}\" class=\"app-brand-link\">
      <span class=\"app-brand-logo demo\">
        <svg
          width=\"25\"
          viewBox=\"0 0 25 42\"
          version=\"1.1\"
          xmlns=\"http://www.w3.org/2000/svg\"
          xmlns:xlink=\"http://www.w3.org/1999/xlink\"
        >
          <!-- SVG content remains unchanged -->
          <defs>
            <path d=\"...\" id=\"path-1\"></path>
            <path d=\"...\" id=\"path-3\"></path>
            <path d=\"...\" id=\"path-4\"></path>
            <path d=\"...\" id=\"path-5\"></path>
          </defs>
          <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
              <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                  <mask id=\"mask-2\" fill=\"white\">
                    <use xlink:href=\"#path-1\"></use>
                  </mask>
                  <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                  <g id=\"Path-3\" mask=\"url(#mask-2)\">
                    <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                  </g>
                  <g id=\"Path-4\" mask=\"url(#mask-2)\">
                    <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                  </g>
                </g>
                <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000)\">
                  <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                  <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </span>
      <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Sneat</span>
    </a>
    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
      <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
    </a>
  </div>

  <div class=\"menu-inner-shadow\"></div>

  <ul class=\"menu-inner py-1\">
    <!-- Dashboard -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_dashboard' %}active{% endif %}\">
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
    <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_users' %}active{% endif %}\">
      <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div data-i18n=\"Users\">Users</div>
      </a>
    </li>

    <!-- Under Team Management section -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'joueur_' or app.request.attributes.get('_route') starts with 'sport_' or app.request.attributes.get('_route') starts with 'club_' %}active open{% endif %}\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-group\"></i>
        <div data-i18n=\"Equipes\">Equipes</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'joueur_main' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Joueurs\">Joueurs</div>
          </a>
        </li>
        <li class=\"menu-item\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"EvaluationPhysique\">Evaluation Physique</div>
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
        <li class=\"menu-item\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"PerformanceJoueur\">Performance Joueur</div>
          </a>
        </li>
        <li class=\"menu-item\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"HistoriqueClub\">Historique Club</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Spacer: Match Management -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Match Management</span>
    </li>
    <!-- Matchs (Scrollable with 2 items) -->
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
    <!-- Logistique (Scrollable with 2 items) -->
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
    <!-- Sponsoring (Scrollable with 2 items) -->
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

    <!-- Spacer: Sports Space -->
    <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Sports Space</span>
    </li>
    <!-- Espace Sportif (Scrollable with 2 items) -->
    <li class=\"menu-item {% if app.request.attributes.get('_route') starts with 'app_espace_' %}active open{% endif %}\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon tf-icons bx bx-stadium\"></i>
        <div data-i18n=\"EspaceSportif\">Espace Sportif</div>
      </a>
      <ul class=\"menu-sub\">
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_espace_facilities' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Facilities\">Facilities</div>
          </a>
        </li>
        <li class=\"menu-item {% if app.request.attributes.get('_route') == 'app_espace_events' %}active{% endif %}\">
          <a href=\"{{ path('joueur_main') }}\" class=\"menu-link\">
            <div data-i18n=\"Events\">Events</div>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside>", "navbar.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-0\\matchupz-web-0\\templates\\navbar.html.twig");
    }
}
