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

/* evaluation_physique/index.html.twig */
class __TwigTemplate_73c545d251aedf3fb74ec22ecdfa3bf6 extends Template
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
            'widgets' => [$this, 'block_widgets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "evaluation_physique/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Évaluations Physiques";
        
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
            ";
        // line 12
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 15
        yield "            
            ";
        // line 17
        yield "            <div class=\"row mb-4\">
                ";
        // line 19
        yield "                <div class=\"col-md-12 mb-4\">
                    <div class=\"card\">
                        <h5 class=\"card-header\">Comparaison des Joueurs</h5>
                        <div class=\"card-body\">
                            <canvas id=\"performanceTrendChart\" height=\"100\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 30
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Liste des Évaluations
                    <div>
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_stats");
        yield "\" class=\"btn btn-info me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_new");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Joueur</th>
                                <th>Date</th>
                                <th>Endurance</th>
                                <th>Force</th>
                                <th>Vitesse</th>
                                <th>Blessure</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluation_physiques"]) || array_key_exists("evaluation_physiques", $context) ? $context["evaluation_physiques"] : (function () { throw new RuntimeError('Variable "evaluation_physiques" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 57
            yield "                                <tr>
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "joueur", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "joueur", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 62
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 63
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 63), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 64
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 64), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 65
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 65), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 66
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 66)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 66), "html", null, true)) : ("Aucune"));
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_show", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_delete", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                                    <button class=\"dropdown-item\" type=\"submit\">
                                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucune évaluation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 102
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Performance Trend Chart
            const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
            new Chart(trendCtx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 109
        yield json_encode((isset($context["playerNames"]) || array_key_exists("playerNames", $context) ? $context["playerNames"] : (function () { throw new RuntimeError('Variable "playerNames" does not exist.', 109, $this->source); })()));
        yield ",
                    datasets: [
                        {
                            label: 'Endurance',
                            data: ";
        // line 113
        yield json_encode((isset($context["enduranceScores"]) || array_key_exists("enduranceScores", $context) ? $context["enduranceScores"] : (function () { throw new RuntimeError('Variable "enduranceScores" does not exist.', 113, $this->source); })()));
        yield ",
                            backgroundColor: 'rgba(54, 162, 235, 0.7)'
                        },
                        {
                            label: 'Force',
                            data: ";
        // line 118
        yield json_encode((isset($context["forceScores"]) || array_key_exists("forceScores", $context) ? $context["forceScores"] : (function () { throw new RuntimeError('Variable "forceScores" does not exist.', 118, $this->source); })()));
        yield ",
                            backgroundColor: 'rgba(255, 99, 132, 0.7)'
                        },
                        {
                            label: 'Vitesse',
                            data: ";
        // line 123
        yield json_encode((isset($context["vitesseScores"]) || array_key_exists("vitesseScores", $context) ? $context["vitesseScores"] : (function () { throw new RuntimeError('Variable "vitesseScores" does not exist.', 123, $this->source); })()));
        yield ",
                            backgroundColor: 'rgba(75, 192, 192, 0.7)'
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

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widgets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 13
        yield "                ";
        yield from $this->loadTemplate("evaluation_physique/evaluation_widgets.html.twig", "evaluation_physique/index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "evaluation_physique/index.html.twig";
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
        return array (  355 => 14,  352 => 13,  339 => 12,  310 => 123,  302 => 118,  294 => 113,  287 => 109,  278 => 102,  269 => 94,  260 => 90,  258 => 89,  244 => 80,  240 => 79,  234 => 76,  228 => 73,  218 => 66,  214 => 65,  210 => 64,  206 => 63,  202 => 62,  195 => 60,  190 => 57,  185 => 56,  163 => 37,  157 => 34,  151 => 30,  139 => 19,  136 => 17,  133 => 15,  131 => 12,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Évaluations Physiques{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% block widgets %}
                {% include 'evaluation_physique/evaluation_widgets.html.twig' %}
            {% endblock %}
            
            {# Statistics Section #}
            <div class=\"row mb-4\">
                {# Performance Trends Chart #}
                <div class=\"col-md-12 mb-4\">
                    <div class=\"card\">
                        <h5 class=\"card-header\">Comparaison des Joueurs</h5>
                        <div class=\"card-body\">
                            <canvas id=\"performanceTrendChart\" height=\"100\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {# Evaluations Table #}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Liste des Évaluations
                    <div>
                        <a href=\"{{ path('app_evaluation_physique_stats') }}\" class=\"btn btn-info me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <a href=\"{{ path('app_evaluation_physique_new') }}\" class=\"btn btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Joueur</th>
                                <th>Date</th>
                                <th>Endurance</th>
                                <th>Force</th>
                                <th>Vitesse</th>
                                <th>Blessure</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for evaluation in evaluation_physiques %}
                                <tr>
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ evaluation.joueur.nom }} {{ evaluation.joueur.prenom }}</strong>
                                    </td>
                                    <td>{{ evaluation.dateEvaluation ? evaluation.dateEvaluation|date('d/m/Y') : 'N/A' }}</td>
                                    <td>{{ evaluation.niveauEndurance ?? 'N/A' }}</td>
                                    <td>{{ evaluation.forcePhysique ?? 'N/A' }}</td>
                                    <td>{{ evaluation.vitesse ?? 'N/A' }}</td>
                                    <td>{{ evaluation.etatBlessure ?? 'Aucune' }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_show', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_edit', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('app_evaluation_physique_delete', {'idEvaluation': evaluation.idEvaluation}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evaluation.idEvaluation) }}\">
                                                    <button class=\"dropdown-item\" type=\"submit\">
                                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucune évaluation trouvée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {# ChartJS Script #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Performance Trend Chart
            const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
            new Chart(trendCtx, {
                type: 'bar',
                data: {
                    labels: {{ playerNames|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Endurance',
                            data: {{ enduranceScores|json_encode|raw }},
                            backgroundColor: 'rgba(54, 162, 235, 0.7)'
                        },
                        {
                            label: 'Force',
                            data: {{ forceScores|json_encode|raw }},
                            backgroundColor: 'rgba(255, 99, 132, 0.7)'
                        },
                        {
                            label: 'Vitesse',
                            data: {{ vitesseScores|json_encode|raw }},
                            backgroundColor: 'rgba(75, 192, 192, 0.7)'
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
{% endblock %}", "evaluation_physique/index.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\evaluation_physique\\index.html.twig");
    }
}
