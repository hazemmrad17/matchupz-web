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

/* historique_club/statistics.html.twig */
class __TwigTemplate_7ae793446c4cd70db5b154f3685a559c extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique_club/statistics.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "historique_club/statistics.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        yield "Statistiques Historique Club";
        
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
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Statistiques des Historiques Club</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total des Entrées</h5>
                                    <p class=\"display-4\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_entries", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "total_entries", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Joueurs Actuels</h5>
                                    <p class=\"display-4\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "current_players", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 28, $this->source); })()), "current_players", [], "any", false, false, false, 28), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Joueurs Distincts</h5>
                                    <p class=\"display-4\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "distinct_players", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 36, $this->source); })()), "distinct_players", [], "any", false, false, false, 36), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Nouveaux Joueurs ce Mois</h5>
                                    <p class=\"display-4\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "new_players_this_month", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "new_players_this_month", [], "any", false, false, false, 44), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Clubs Actifs</h5>
                                    <p class=\"display-4\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_clubs", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "active_clubs", [], "any", false, false, false, 52), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Clubs avec Joueurs</h5>
                                    <p class=\"display-4\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clubs_with_players", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "clubs_with_players", [], "any", false, false, false, 60), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Durée Moyenne (jours)</h5>
                                    <p class=\"display-4\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "average_duration", [], "any", false, false, false, 68), 0, "floor"), 0), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Durée Maximale (jours)</h5>
                                    <p class=\"display-4\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "max_duration", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 76, $this->source); })()), "max_duration", [], "any", false, false, false, 76), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Mises à jour Récentes (7 jours)</h5>
                                    <p class=\"display-4\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "recent_updates", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 84, $this->source); })()), "recent_updates", [], "any", false, false, false, 84), 0)) : (0)), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 91
        yield "                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <h5 class=\"card-header\">Répartition des Joueurs par Club</h5>
                                <div class=\"card-body\">
                                    ";
        // line 96
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 96, $this->source); })()), "club_distribution", [], "any", false, false, false, 96)) > 0)) {
            // line 97
            yield "                                        <canvas id=\"clubDistributionChart\" height=\"100\"></canvas>
                                    ";
        } else {
            // line 99
            yield "                                        <p class=\"text-muted text-center\">Aucune donnée disponible pour la répartition des clubs.</p>
                                    ";
        }
        // line 101
        yield "                                </div>
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

    // line 111
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

        // line 112
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 114
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ";
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 117, $this->source); })()), "club_distribution", [], "any", false, false, false, 117)) > 0)) {
            // line 118
            yield "                const clubCtx = document.getElementById('clubDistributionChart').getContext('2d');
                
                const clubData = {
                    labels: [";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 121, $this->source); })()), "club_distribution", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "club", [], "any", false, false, false, 121), "js"), "html", null, true);
                yield "',";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['club'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                    datasets: [{
                        data: [";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 123, $this->source); })()), "club_distribution", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "playerCount", [], "any", false, false, false, 123), "html", null, true);
                yield ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['club'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            // Add more colors if needed
                        ]
                    }]
                };
                
                new Chart(clubCtx, {
                    type: 'pie',
                    data: clubData,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'right',
                            },
                            title: {
                                display: true,
                                text: 'Répartition des Joueurs par Club'
                            }
                        }
                    }
                });
            ";
        }
        // line 153
        yield "        });
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
        return "historique_club/statistics.html.twig";
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
        return array (  357 => 153,  316 => 123,  302 => 121,  297 => 118,  295 => 117,  290 => 114,  285 => 112,  272 => 111,  253 => 101,  249 => 99,  245 => 97,  243 => 96,  236 => 91,  227 => 84,  216 => 76,  205 => 68,  194 => 60,  183 => 52,  172 => 44,  161 => 36,  150 => 28,  139 => 20,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Statistiques Historique Club{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Statistiques des Historiques Club</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total des Entrées</h5>
                                    <p class=\"display-4\">{{ stats.total_entries|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Joueurs Actuels</h5>
                                    <p class=\"display-4\">{{ stats.current_players|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Joueurs Distincts</h5>
                                    <p class=\"display-4\">{{ stats.distinct_players|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Nouveaux Joueurs ce Mois</h5>
                                    <p class=\"display-4\">{{ stats.new_players_this_month|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Clubs Actifs</h5>
                                    <p class=\"display-4\">{{ stats.active_clubs|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Clubs avec Joueurs</h5>
                                    <p class=\"display-4\">{{ stats.clubs_with_players|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Durée Moyenne (jours)</h5>
                                    <p class=\"display-4\">{{ stats.average_duration|round(0, 'floor')|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Durée Maximale (jours)</h5>
                                    <p class=\"display-4\">{{ stats.max_duration|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Mises à jour Récentes (7 jours)</h5>
                                    <p class=\"display-4\">{{ stats.recent_updates|default(0) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Club Distribution Chart #}
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <h5 class=\"card-header\">Répartition des Joueurs par Club</h5>
                                <div class=\"card-body\">
                                    {% if stats.club_distribution|length > 0 %}
                                        <canvas id=\"clubDistributionChart\" height=\"100\"></canvas>
                                    {% else %}
                                        <p class=\"text-muted text-center\">Aucune donnée disponible pour la répartition des clubs.</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# ChartJS Script #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            {% if stats.club_distribution|length > 0 %}
                const clubCtx = document.getElementById('clubDistributionChart').getContext('2d');
                
                const clubData = {
                    labels: [{% for club in stats.club_distribution %}'{{ club.club|escape('js') }}',{% endfor %}],
                    datasets: [{
                        data: [{% for club in stats.club_distribution %}{{ club.playerCount }},{% endfor %}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            // Add more colors if needed
                        ]
                    }]
                };
                
                new Chart(clubCtx, {
                    type: 'pie',
                    data: clubData,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'right',
                            },
                            title: {
                                display: true,
                                text: 'Répartition des Joueurs par Club'
                            }
                        }
                    }
                });
            {% endif %}
        });
    </script>
{% endblock %}", "historique_club/statistics.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\historique_club\\statistics.html.twig");
    }
}
