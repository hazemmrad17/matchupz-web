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

/* dashboard.html.twig */
class __TwigTemplate_d5f3680f7bd3f5474c9f9289dc8b8fcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard.html.twig", 1);
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

        yield "Dashboard";
        
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
        yield from $this->loadTemplate("searchbar.html.twig", "dashboard.html.twig", 6)->unwrap()->yield($context);
        
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
            <!-- Header -->
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Dashboard /</span> Overview
            </h4>

            <!-- Users Section -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Users Section</h5>
                    <div class=\"row\">
                        <!-- Users Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-user widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Total Users</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 42), "total", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "users", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Active: ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 43), "active", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "users", [], "any", false, false, false, 43), "active", [], "any", false, false, false, 43), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Staff Technique (Joueurs) -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Section Staff Technique</h5>
                    <div class=\"row\">
                        <!-- Joueurs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-success\">
                                                <i class=\"bx bx-group widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Joueurs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "joueurs", [], "any", false, true, false, 76), "total", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 76, $this->source); })()), "joueurs", [], "any", false, false, false, 76), "total", [], "any", false, false, false, 76), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Clubs: ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "joueurs", [], "any", false, true, false, 77), "clubs", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 77, $this->source); })()), "joueurs", [], "any", false, false, false, 77), "clubs", [], "any", false, false, false, 77), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                        <!-- Clubs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-info\">
                                                <i class=\"bx bx-building widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Clubs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clubs", [], "any", false, true, false, 101), "total", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 101, $this->source); })()), "clubs", [], "any", false, false, false, 101), "total", [], "any", false, false, false, 101), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Active: ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clubs", [], "any", false, true, false, 102), "active", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 102, $this->source); })()), "clubs", [], "any", false, false, false, 102), "active", [], "any", false, false, false, 102), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                        <!-- Historique Transferts Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-warning\">
                                                <i class=\"bx bx-transfer widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Historique Transferts</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "historique", [], "any", false, true, false, 126), "total", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "historique", [], "any", false, false, false, 126), "total", [], "any", false, false, false, 126), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Recent: ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "historique", [], "any", false, true, false, 127), "recent", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 127, $this->source); })()), "historique", [], "any", false, false, false, 127), "recent", [], "any", false, false, false, 127), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Match Management -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Match Management</h5>
                    <div class=\"row\">
                        <!-- Matchs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-danger\">
                                                <i class=\"bx bx-football widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\">View Upcoming</a>
                                                <a class=\"dropdown-item\">View Past</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Matchs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "matchs", [], "any", false, true, false, 161), "total", [], "any", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 161, $this->source); })()), "matchs", [], "any", false, false, false, 161), "total", [], "any", false, false, false, 161), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Upcoming: ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "matchs", [], "any", false, true, false, 162), "upcoming", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 162, $this->source); })()), "matchs", [], "any", false, false, false, 162), "upcoming", [], "any", false, false, false, 162), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Espace -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Section Espace</h5>
                    <div class=\"row\">
                        <!-- Espace Sportif Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-stadium widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index");
        yield "\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Espace Sportif</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "espace", [], "any", false, true, false, 195), "total", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 195, $this->source); })()), "espace", [], "any", false, false, false, 195), "total", [], "any", false, false, false, 195), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Réservations: ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "espace", [], "any", false, true, false, 196), "reservations", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 196, $this->source); })()), "espace", [], "any", false, false, false, 196), "reservations", [], "any", false, false, false, 196), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logistics -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Logistics</h5>
                    <div class=\"row\">
                        <!-- Logistique Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-success\">
                                                <i class=\"bx bx-truck widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item \">View Transport</a>
                                                <a class=\"dropdown-item\">View Equipment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Logistique</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "logistique", [], "any", false, true, false, 230), "total", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 230, $this->source); })()), "logistique", [], "any", false, false, false, 230), "total", [], "any", false, false, false, 230), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Equipment: ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "logistique", [], "any", false, true, false, 231), "equipment", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 231, $this->source); })()), "logistique", [], "any", false, false, false, 231), "equipment", [], "any", false, false, false, 231), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsorship -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Sponsorship</h5>
                    <div class=\"row\">
                        <!-- Sponsoring Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-warning\">
                                                <i class=\"bx bx-money widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\">View Partners</a>
                                                <a class=\"dropdown-item\">View Contracts</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Sponsoring</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "sponsoring", [], "any", false, true, false, 265), "total", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "sponsoring", [], "any", false, false, false, 265), "total", [], "any", false, false, false, 265), 0)) : (0)), "html", null, true);
        yield "</h3>
                                    <small class=\"text-muted\">Contracts: ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "sponsoring", [], "any", false, true, false, 266), "contracts", [], "any", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "sponsoring", [], "any", false, false, false, 266), "contracts", [], "any", false, false, false, 266), 0)) : (0)), "html", null, true);
        yield "</small>
                                </div>
                            </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.html.twig";
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
        return array (  444 => 266,  440 => 265,  403 => 231,  399 => 230,  362 => 196,  358 => 195,  350 => 190,  319 => 162,  315 => 161,  278 => 127,  274 => 126,  266 => 121,  244 => 102,  240 => 101,  232 => 96,  210 => 77,  206 => 76,  198 => 71,  167 => 43,  163 => 42,  155 => 37,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <!-- Header -->
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Dashboard /</span> Overview
            </h4>

            <!-- Users Section -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Users Section</h5>
                    <div class=\"row\">
                        <!-- Users Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-user widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_main') }}\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Total Users</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.users.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Active: {{ stats.users.active|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Staff Technique (Joueurs) -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Section Staff Technique</h5>
                    <div class=\"row\">
                        <!-- Joueurs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-success\">
                                                <i class=\"bx bx-group widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_main') }}\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Joueurs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.joueurs.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Clubs: {{ stats.joueurs.clubs|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                        <!-- Clubs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-info\">
                                                <i class=\"bx bx-building widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"{{ path('club_index') }}\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Clubs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.clubs.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Active: {{ stats.clubs.active|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                        <!-- Historique Transferts Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-warning\">
                                                <i class=\"bx bx-transfer widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_historique_club_index') }}\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Historique Transferts</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.historique.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Recent: {{ stats.historique.recent|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Match Management -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Match Management</h5>
                    <div class=\"row\">
                        <!-- Matchs Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-danger\">
                                                <i class=\"bx bx-football widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\">View Upcoming</a>
                                                <a class=\"dropdown-item\">View Past</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Matchs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.matchs.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Upcoming: {{ stats.matchs.upcoming|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Espace -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Section Espace</h5>
                    <div class=\"row\">
                        <!-- Espace Sportif Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-stadium widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"{{ path('espace_index') }}\">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Espace Sportif</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.espace.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Réservations: {{ stats.espace.reservations|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logistics -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Logistics</h5>
                    <div class=\"row\">
                        <!-- Logistique Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-success\">
                                                <i class=\"bx bx-truck widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item \">View Transport</a>
                                                <a class=\"dropdown-item\">View Equipment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Logistique</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.logistique.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Equipment: {{ stats.logistique.equipment|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsorship -->
            <div class=\"row mb-5\">
                <div class=\"col-12\">
                    <h5 class=\"menu-header-text text-uppercase small mb-3\">Sponsorship</h5>
                    <div class=\"row\">
                        <!-- Sponsoring Widget -->
                        <div class=\"col-md-6 col-lg-4 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <span class=\"avatar-initial rounded bg-label-warning\">
                                                <i class=\"bx bx-money widget-icon\"></i>
                                            </span>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\">View Partners</a>
                                                <a class=\"dropdown-item\">View Contracts</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Sponsoring</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">{{ stats.sponsoring.total|default(0) }}</h3>
                                    <small class=\"text-muted\">Contracts: {{ stats.sponsoring.contracts|default(0) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "dashboard.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\dashboard.html.twig");
    }
}
