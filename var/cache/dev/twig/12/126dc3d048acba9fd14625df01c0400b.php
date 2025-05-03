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
class __TwigTemplate_84d66ada97396b2018c4bc3664cd1b28 extends Template
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

        yield "Tableau de Bord Principal";
        
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
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Accueil /</span> Tableau de Bord
            </h4>

            <!-- Summary Cards -->
            <div class=\"row\">
                <!-- Joueurs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/users.png"), "html", null, true);
        yield "\" alt=\"Joueurs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\">Voir les Joueurs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Joueurs</span>
                            <h3 class=\"card-title mb-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 36, $this->source); })()), "joueurs", [], "any", false, false, false, 36), "total", [], "any", false, false, false, 36), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "joueurs", [], "any", false, false, false, 38), "clubs", [], "any", false, false, false, 38), "html", null, true);
        yield " dans les clubs
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Clubs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
        yield "\" alt=\"Clubs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_main");
        yield "\">Voir les Clubs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Clubs</span>
                            <h3 class=\"card-title mb-2\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "clubs", [], "any", false, false, false, 62), "total", [], "any", false, false, false, 62), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 64, $this->source); })()), "clubs", [], "any", false, false, false, 64), "active", [], "any", false, false, false, 64), "html", null, true);
        yield " actifs
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Matchs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/soccer.png"), "html", null, true);
        yield "\" alt=\"Matchs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_main");
        yield "\">Voir les Matchs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Matchs</span>
                            <h3 class=\"card-title mb-2\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 88, $this->source); })()), "matchs", [], "any", false, false, false, 88), "total", [], "any", false, false, false, 88), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 90, $this->source); })()), "matchs", [], "any", false, false, false, 90), "upcoming", [], "any", false, false, false, 90), "html", null, true);
        yield " à venir
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Espace -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/stadium.png"), "html", null, true);
        yield "\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_main");
        yield "\">Voir les Espaces</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Espaces</span>
                            <h3 class=\"card-title mb-2\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 114, $this->source); })()), "espace", [], "any", false, false, false, 114), "total", [], "any", false, false, false, 114), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 116, $this->source); })()), "espace", [], "any", false, false, false, 116), "reservations", [], "any", false, false, false, 116), "html", null, true);
        yield " réservations
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Logistique -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/truck.png"), "html", null, true);
        yield "\" alt=\"Logistique\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logistique_main");
        yield "\">Voir la Logistique</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Logistique</span>
                            <h3 class=\"card-title mb-2\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 140, $this->source); })()), "logistique", [], "any", false, false, false, 140), "total", [], "any", false, false, false, 140), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 142, $this->source); })()), "logistique", [], "any", false, false, false, 142), "equipment", [], "any", false, false, false, 142), "html", null, true);
        yield " équipements
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Sponsoring -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/handshake.png"), "html", null, true);
        yield "\" alt=\"Sponsoring\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsoring_main");
        yield "\">Voir le Sponsoring</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Sponsoring</span>
                            <h3 class=\"card-title mb-2\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 166, $this->source); })()), "sponsoring", [], "any", false, false, false, 166), "total", [], "any", false, false, false, 166), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 168, $this->source); })()), "sponsoring", [], "any", false, false, false, 168), "contracts", [], "any", false, false, false, 168), "html", null, true);
        yield " contrats
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class=\"row\">
                <!-- Entity Distribution Chart -->
                <div class=\"col-lg-8 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title m-0\">Répartition des Entités</h5>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"entityDistributionChart\" style=\"min-height: 300px;\"></div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class=\"col-lg-4 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                            <h5 class=\"card-title m  m-0 me-2\">Activité Récente</h5>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique_main");
        yield "\">Voir l'Historique</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"p-0 m-0\">
                                ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 205, $this->source); })()), "historique", [], "any", false, false, false, 205), "recent", [], "any", false, false, false, 205));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 206
            yield "                                    <li class=\"d-flex mb-3\">
                                        <div class=\"avatar flex-shrink-0 me-3\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-history\"></i>
                                            </span>
                                        </div>
                                        <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                            <div class=\"me-2\">
                                                <small class=\"text-muted d-block mb-1\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 214), "html", null, true);
            yield "</small>
                                                <h6 class=\"mb-0\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 215), "html", null, true);
            yield "</h6>
                                            </div>
                                            <small class=\"text-muted\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 217), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                        </div>
                                    </li>
                                ";
            $context['_iterated'] = true;
        }
        // line 220
        if (!$context['_iterated']) {
            // line 221
            yield "                                    <li class=\"text-center text-muted\">Aucune activité récente.</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Charts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.entityChart) {
                return;
            }

            // Entity Distribution Chart (Donut)
            if (document.querySelector(\"#entityDistributionChart\")) {
                var entityOptions = {
                    chart: {
                        type: 'donut',
                        height: 300,
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    },
                    series: [
                        ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 251, $this->source); })()), "joueurs", [], "any", false, false, false, 251), "total", [], "any", false, false, false, 251), "html", null, true);
        yield ",
                        ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 252, $this->source); })()), "clubs", [], "any", false, false, false, 252), "total", [], "any", false, false, false, 252), "html", null, true);
        yield ",
                        ";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 253, $this->source); })()), "matchs", [], "any", false, false, false, 253), "total", [], "any", false, false, false, 253), "html", null, true);
        yield ",
                        ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 254, $this->source); })()), "espace", [], "any", false, false, false, 254), "total", [], "any", false, false, false, 254), "html", null, true);
        yield ",
                        ";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 255, $this->source); })()), "logistique", [], "any", false, false, false, 255), "total", [], "any", false, false, false, 255), "html", null, true);
        yield ",
                        ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 256, $this->source); })()), "sponsoring", [], "any", false, false, false, 256), "total", [], "any", false, false, false, 256), "html", null, true);
        yield "
                    ],
                    labels: ['Joueurs', 'Clubs', 'Matchs', 'Espaces', 'Logistique', 'Sponsoring'],
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '65%'
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        formatter: function (val, opts) {
                            return opts.w.config.series[opts.seriesIndex];
                        }
                    },
                    legend: {
                        position: 'bottom'
                    },
                    colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A']
                };
                window.entityChart = new ApexCharts(document.querySelector(\"#entityDistributionChart\"), entityOptions);
                window.entityChart.render();
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
        return array (  489 => 256,  485 => 255,  481 => 254,  477 => 253,  473 => 252,  469 => 251,  439 => 223,  432 => 221,  430 => 220,  422 => 217,  417 => 215,  413 => 214,  403 => 206,  398 => 205,  389 => 199,  355 => 168,  350 => 166,  342 => 161,  332 => 154,  317 => 142,  312 => 140,  304 => 135,  294 => 128,  279 => 116,  274 => 114,  266 => 109,  256 => 102,  241 => 90,  236 => 88,  228 => 83,  218 => 76,  203 => 64,  198 => 62,  190 => 57,  180 => 50,  165 => 38,  160 => 36,  152 => 31,  142 => 24,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord Principal{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Accueil /</span> Tableau de Bord
            </h4>

            <!-- Summary Cards -->
            <div class=\"row\">
                <!-- Joueurs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/users.png') }}\" alt=\"Joueurs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('joueur_main') }}\">Voir les Joueurs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Joueurs</span>
                            <h3 class=\"card-title mb-2\">{{ stats.joueurs.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.joueurs.clubs }} dans les clubs
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Clubs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"Clubs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('club_main') }}\">Voir les Clubs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Clubs</span>
                            <h3 class=\"card-title mb-2\">{{ stats.clubs.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.clubs.active }} actifs
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Matchs -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/soccer.png') }}\" alt=\"Matchs\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('match_main') }}\">Voir les Matchs</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Matchs</span>
                            <h3 class=\"card-title mb-2\">{{ stats.matchs.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.matchs.upcoming }} à venir
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Espace -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/stadium.png') }}\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('espace_main') }}\">Voir les Espaces</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Espaces</span>
                            <h3 class=\"card-title mb-2\">{{ stats.espace.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.espace.reservations }} réservations
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Logistique -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/truck.png') }}\" alt=\"Logistique\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('logistique_main') }}\">Voir la Logistique</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Logistique</span>
                            <h3 class=\"card-title mb-2\">{{ stats.logistique.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.logistique.equipment }} équipements
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Sponsoring -->
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <img src=\"{{ asset('img/icons/unicons/handshake.png') }}\" alt=\"Sponsoring\" class=\"rounded\" />
                                </div>
                                <div class=\"dropdown\">
                                    <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('sponsoring_main') }}\">Voir le Sponsoring</a>
                                    </div>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Sponsoring</span>
                            <h3 class=\"card-title mb-2\">{{ stats.sponsoring.total }}</h3>
                            <small class=\"text-success fw-semibold\">
                                <i class=\"bx bx-up-arrow-alt\"></i> {{ stats.sponsoring.contracts }} contrats
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class=\"row\">
                <!-- Entity Distribution Chart -->
                <div class=\"col-lg-8 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title m-0\">Répartition des Entités</h5>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"entityDistributionChart\" style=\"min-height: 300px;\"></div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class=\"col-lg-4 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                            <h5 class=\"card-title m  m-0 me-2\">Activité Récente</h5>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"{{ path('historique_main') }}\">Voir l'Historique</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"p-0 m-0\">
                                {% for activity in stats.historique.recent %}
                                    <li class=\"d-flex mb-3\">
                                        <div class=\"avatar flex-shrink-0 me-3\">
                                            <span class=\"avatar-initial rounded bg-label-primary\">
                                                <i class=\"bx bx-history\"></i>
                                            </span>
                                        </div>
                                        <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                            <div class=\"me-2\">
                                                <small class=\"text-muted d-block mb-1\">{{ activity.type }}</small>
                                                <h6 class=\"mb-0\">{{ activity.description }}</h6>
                                            </div>
                                            <small class=\"text-muted\">{{ activity.date|date('d/m/Y H:i') }}</small>
                                        </div>
                                    </li>
                                {% else %}
                                    <li class=\"text-center text-muted\">Aucune activité récente.</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Charts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.entityChart) {
                return;
            }

            // Entity Distribution Chart (Donut)
            if (document.querySelector(\"#entityDistributionChart\")) {
                var entityOptions = {
                    chart: {
                        type: 'donut',
                        height: 300,
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    },
                    series: [
                        {{ stats.joueurs.total }},
                        {{ stats.clubs.total }},
                        {{ stats.matchs.total }},
                        {{ stats.espace.total }},
                        {{ stats.logistique.total }},
                        {{ stats.sponsoring.total }}
                    ],
                    labels: ['Joueurs', 'Clubs', 'Matchs', 'Espaces', 'Logistique', 'Sponsoring'],
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '65%'
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        formatter: function (val, opts) {
                            return opts.w.config.series[opts.seriesIndex];
                        }
                    },
                    legend: {
                        position: 'bottom'
                    },
                    colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A']
                };
                window.entityChart = new ApexCharts(document.querySelector(\"#entityDistributionChart\"), entityOptions);
                window.entityChart.render();
            }
        });
    </script>
{% endblock %}", "dashboard.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\dashboard.html.twig");
    }
}
