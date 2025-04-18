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

/* evaluation_physique/statistics.html.twig */
class __TwigTemplate_334768302cc0fe4a0737bc3050074d0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/statistics.html.twig", 1);
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

        yield "Statistiques des Évaluations Physiques";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Évaluations Physiques</h4>
        
        <!-- Summary Cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-primary p-2 mb-2\">
                            <i class=\"bx bx-user-check fs-4\"></i>
                        </span>
                        <h5>Joueurs Évalués</h5>
                        <h3 class=\"mb-0\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["evaluated_players"]) || array_key_exists("evaluated_players", $context) ? $context["evaluated_players"] : (function () { throw new RuntimeError('Variable "evaluated_players" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_players"]) || array_key_exists("total_players", $context) ? $context["total_players"] : (function () { throw new RuntimeError('Variable "total_players" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                        <small class=\"text-success\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["evaluation_rate"]) || array_key_exists("evaluation_rate", $context) ? $context["evaluation_rate"] : (function () { throw new RuntimeError('Variable "evaluation_rate" does not exist.', 20, $this->source); })()), 1), "html", null, true);
        yield "% de couverture</small>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-success p-2 mb-2\">
                            <i class=\"bx bx-timer fs-4\"></i>
                        </span>
                        <h5>Endurance Moyenne</h5>
                        <h3 class=\"mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["average_scores"]) || array_key_exists("average_scores", $context) ? $context["average_scores"] : (function () { throw new RuntimeError('Variable "average_scores" does not exist.', 32, $this->source); })()), "niveauEndurance", [], "any", false, false, false, 32), 1), "html", null, true);
        yield "/10</h3>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-danger p-2 mb-2\">
                            <i class=\"bx bx-dumbbell fs-4\"></i>
                        </span>
                        <h5>Force Moyenne</h5>
                        <h3 class=\"mb-0\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["average_scores"]) || array_key_exists("average_scores", $context) ? $context["average_scores"] : (function () { throw new RuntimeError('Variable "average_scores" does not exist.', 44, $this->source); })()), "forcePhysique", [], "any", false, false, false, 44), 1), "html", null, true);
        yield "/10</h3>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-info p-2 mb-2\">
                            <i class=\"bx bx-run fs-4\"></i>
                        </span>
                        <h5>Vitesse Moyenne</h5>
                        <h3 class=\"mb-0\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["average_scores"]) || array_key_exists("average_scores", $context) ? $context["average_scores"] : (function () { throw new RuntimeError('Variable "average_scores" does not exist.', 56, $this->source); })()), "vitesse", [], "any", false, false, false, 56), 1), "html", null, true);
        yield "/10</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Performance Trends -->
        <div class=\"row mb-4\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <h5 class=\"card-header\">Évolution des Performances (6 derniers mois)</h5>
                    <div class=\"card-body\">
                        <canvas id=\"performanceTrendChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Player Rankings and Recent Evaluations -->
        <div class=\"row\">
            <!-- Top Players -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <h5 class=\"card-header\">Top 10 des Joueurs</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Joueur</th>
                                    <th>Score</th>
                                    <th>Détail</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_players"]) || array_key_exists("top_players", $context) ? $context["top_players"] : (function () { throw new RuntimeError('Variable "top_players" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 91
            yield "                                    <tr>
                                        <td>
                                            <strong>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "nom", [], "any", false, false, false, 93), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "prenom", [], "any", false, false, false, 93), "html", null, true);
            yield "</strong>
                                        </td>
                                        <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "score", [], "any", false, false, false, 95), 1), "html", null, true);
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_by_joueur", ["joueurId" => CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\"
                                            class=\"btn btn-sm btn-outline-primary\">
                                                Voir
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Recent Evaluations -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <h5 class=\"card-header\">Évaluations Récentes (30 derniers jours)</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Joueur</th>
                                    <th>Date</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_evaluations"]) || array_key_exists("recent_evaluations", $context) ? $context["recent_evaluations"] : (function () { throw new RuntimeError('Variable "recent_evaluations" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
            // line 125
            yield "                                <tr>
                                    <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "joueur", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "joueur", [], "any", false, false, false, 126), "prenom", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                                    <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "dateEvaluation", [], "any", false, false, false, 127), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 129
            $context["score"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "niveauEndurance", [], "any", false, false, false, 129) + CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "forcePhysique", [], "any", false, false, false, 129)) + CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "vitesse", [], "any", false, false, false, 129)) / 3);
            // line 130
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 130, $this->source); })()), 1), "html", null, true);
            yield "
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['eval'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Performance Trend Chart
    const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
    new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ";
        // line 150
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_trends"]) || array_key_exists("performance_trends", $context) ? $context["performance_trends"] : (function () { throw new RuntimeError('Variable "performance_trends" does not exist.', 150, $this->source); })()), "dates", [], "any", false, false, false, 150));
        yield ",
            datasets: [
                {
                    label: 'Endurance',
                    data: ";
        // line 154
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_trends"]) || array_key_exists("performance_trends", $context) ? $context["performance_trends"] : (function () { throw new RuntimeError('Variable "performance_trends" does not exist.', 154, $this->source); })()), "endurance", [], "any", false, false, false, 154));
        yield ",
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.1)',
                    tension: 0.3
                },
                {
                    label: 'Force',
                    data: ";
        // line 161
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_trends"]) || array_key_exists("performance_trends", $context) ? $context["performance_trends"] : (function () { throw new RuntimeError('Variable "performance_trends" does not exist.', 161, $this->source); })()), "force", [], "any", false, false, false, 161));
        yield ",
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.1)',
                    tension: 0.3
                },
                {
                    label: 'Vitesse',
                    data: ";
        // line 168
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_trends"]) || array_key_exists("performance_trends", $context) ? $context["performance_trends"] : (function () { throw new RuntimeError('Variable "performance_trends" does not exist.', 168, $this->source); })()), "vitesse", [], "any", false, false, false, 168));
        yield ",
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.1)',
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 10
                }
            }
        }
    });
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
        return "evaluation_physique/statistics.html.twig";
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
        return array (  334 => 168,  324 => 161,  314 => 154,  307 => 150,  289 => 134,  278 => 130,  276 => 129,  271 => 127,  265 => 126,  262 => 125,  258 => 124,  236 => 104,  223 => 97,  218 => 95,  211 => 93,  207 => 91,  203 => 90,  166 => 56,  151 => 44,  136 => 32,  121 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Évaluations Physiques{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Évaluations Physiques</h4>
        
        <!-- Summary Cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-primary p-2 mb-2\">
                            <i class=\"bx bx-user-check fs-4\"></i>
                        </span>
                        <h5>Joueurs Évalués</h5>
                        <h3 class=\"mb-0\">{{ evaluated_players }}/{{ total_players }}</h3>
                        <small class=\"text-success\">{{ evaluation_rate|round(1) }}% de couverture</small>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-success p-2 mb-2\">
                            <i class=\"bx bx-timer fs-4\"></i>
                        </span>
                        <h5>Endurance Moyenne</h5>
                        <h3 class=\"mb-0\">{{ average_scores.niveauEndurance|round(1) }}/10</h3>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-danger p-2 mb-2\">
                            <i class=\"bx bx-dumbbell fs-4\"></i>
                        </span>
                        <h5>Force Moyenne</h5>
                        <h3 class=\"mb-0\">{{ average_scores.forcePhysique|round(1) }}/10</h3>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-3 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-label-info p-2 mb-2\">
                            <i class=\"bx bx-run fs-4\"></i>
                        </span>
                        <h5>Vitesse Moyenne</h5>
                        <h3 class=\"mb-0\">{{ average_scores.vitesse|round(1) }}/10</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Performance Trends -->
        <div class=\"row mb-4\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <h5 class=\"card-header\">Évolution des Performances (6 derniers mois)</h5>
                    <div class=\"card-body\">
                        <canvas id=\"performanceTrendChart\" height=\"120\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Player Rankings and Recent Evaluations -->
        <div class=\"row\">
            <!-- Top Players -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <h5 class=\"card-header\">Top 10 des Joueurs</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Joueur</th>
                                    <th>Score</th>
                                    <th>Détail</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for player in top_players %}
                                    <tr>
                                        <td>
                                            <strong>{{ player.nom }} {{ player.prenom }}</strong>
                                        </td>
                                        <td>{{ player.score|round(1) }}</td>
                                        <td>
                                            <a href=\"{{ path('app_evaluation_physique_by_joueur', {'joueurId': player.id}) }}\"
                                            class=\"btn btn-sm btn-outline-primary\">
                                                Voir
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Recent Evaluations -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100\">
                    <h5 class=\"card-header\">Évaluations Récentes (30 derniers jours)</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Joueur</th>
                                    <th>Date</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for eval in recent_evaluations %}
                                <tr>
                                    <td>{{ eval.joueur.nom }} {{ eval.joueur.prenom }}</td>
                                    <td>{{ eval.dateEvaluation|date('d/m/Y') }}</td>
                                    <td>
                                        {% set score = (eval.niveauEndurance + eval.forcePhysique + eval.vitesse) / 3 %}
                                        {{ score|round(1) }}
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Performance Trend Chart
    const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
    new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: {{ performance_trends.dates|json_encode|raw }},
            datasets: [
                {
                    label: 'Endurance',
                    data: {{ performance_trends.endurance|json_encode|raw }},
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.1)',
                    tension: 0.3
                },
                {
                    label: 'Force',
                    data: {{ performance_trends.force|json_encode|raw }},
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.1)',
                    tension: 0.3
                },
                {
                    label: 'Vitesse',
                    data: {{ performance_trends.vitesse|json_encode|raw }},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.1)',
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 10
                }
            }
        }
    });
});
</script>
{% endblock %}", "evaluation_physique/statistics.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\evaluation_physique\\statistics.html.twig");
    }
}
