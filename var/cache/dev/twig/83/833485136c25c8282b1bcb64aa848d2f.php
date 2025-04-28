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

/* evaluation_physique/show.html.twig */
class __TwigTemplate_280a0cb65f3353de1d161fe5a673af60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/show.html.twig", 1);
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

        yield "Évaluations Physiques de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 3, $this->source); })()), "prenom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield from $this->loadTemplate("searchbar.html.twig", "evaluation_physique/show.html.twig", 6)->unwrap()->yield($context);
        
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
                <span class=\"text-muted fw-light\">Évaluations /</span> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h4>

            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Évaluations Physiques</h5>
                    <div>
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_index");
        yield "\" class=\"btn btn-sm btn-secondary\">
                            Retour à la liste
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 29, $this->source); })())) > 0)) {
            // line 30
            yield "                        <div class=\"table-responsive text-nowrap\">
                            <table class=\"table table-hover\" id=\"evaluationsTable\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Endurance</th>
                                        <th>Force</th>
                                        <th>Vitesse</th>
                                        <th>État de Blessure</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 44
                yield "                                        <tr>
                                            <td>";
                // line 45
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 46
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 46), "html", null, true)) : ("Non évalué"));
                yield "</td>
                                            <td>";
                // line 47
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 47)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 47), "html", null, true)) : ("Non évalué"));
                yield "</td>
                                            <td>";
                // line 48
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 48), "html", null, true)) : ("Non évalué"));
                yield "</td>
                                            <td>";
                // line 49
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 49)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 49), "html", null, true)) : ("Aucune blessure"));
                yield "</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_show", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-show me-1\"></i> Détails
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                        </a>
                                                        <form method=\"post\" action=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_delete", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 63))), "html", null, true);
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 77
            yield "                        <p class=\"text-muted\">Aucune évaluation physique trouvée pour ce joueur.</p>
                    ";
        }
        // line 79
        yield "                </div>
            </div>

            ";
        // line 82
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 82, $this->source); })())) > 0)) {
            // line 83
            yield "                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Tendances de Performance</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"performanceTrendsChart\"></div>
                    </div>
                </div>
            ";
        }
        // line 92
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Performance Trends Chart
            if (document.querySelector(\"#performanceTrendsChart\")) {
                var options = {
                    chart: {
                        type: 'line',
                        height: 350,
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    },
                    series: [
                        {
                            name: 'Endurance',
                            data: ";
        // line 116
        yield json_encode((isset($context["endurance_trend"]) || array_key_exists("endurance_trend", $context) ? $context["endurance_trend"] : (function () { throw new RuntimeError('Variable "endurance_trend" does not exist.', 116, $this->source); })()));
        yield "
                        },
                        {
                            name: 'Force',
                            data: ";
        // line 120
        yield json_encode((isset($context["force_trend"]) || array_key_exists("force_trend", $context) ? $context["force_trend"] : (function () { throw new RuntimeError('Variable "force_trend" does not exist.', 120, $this->source); })()));
        yield "
                        },
                        {
                            name: 'Vitesse',
                            data: ";
        // line 124
        yield json_encode((isset($context["vitesse_trend"]) || array_key_exists("vitesse_trend", $context) ? $context["vitesse_trend"] : (function () { throw new RuntimeError('Variable "vitesse_trend" does not exist.', 124, $this->source); })()));
        yield "
                        }
                    ],
                    xaxis: {
                        categories: ";
        // line 128
        yield json_encode((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 128, $this->source); })()));
        yield ",
                        title: {
                            text: 'Date d\\'Évaluation'
                        }
                    },
                    yaxis: {
                        min: 0,
                        max: 10,
                        title: {
                            text: 'Score (0-10)'
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val.toFixed(1) + \" / 10\"
                            }
                        }
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    markers: {
                        size: 4
                    }
                };

                var chart = new ApexCharts(document.querySelector(\"#performanceTrendsChart\"), options);
                chart.render();
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
        return "evaluation_physique/show.html.twig";
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
        return array (  342 => 128,  335 => 124,  328 => 120,  321 => 116,  298 => 97,  285 => 96,  272 => 92,  261 => 83,  259 => 82,  254 => 79,  250 => 77,  244 => 73,  228 => 63,  224 => 62,  218 => 59,  212 => 56,  202 => 49,  198 => 48,  194 => 47,  190 => 46,  186 => 45,  183 => 44,  179 => 43,  164 => 30,  162 => 29,  153 => 23,  147 => 20,  135 => 13,  130 => 10,  117 => 9,  105 => 6,  92 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Évaluations Physiques de {{ joueur.prenom }} {{ joueur.nom }}{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Évaluations /</span> {{ joueur.prenom }} {{ joueur.nom }}
            </h4>

            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Évaluations Physiques</h5>
                    <div>
                        <a href=\"{{ path('app_evaluation_physique_new') }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                        <a href=\"{{ path('app_evaluation_physique_index') }}\" class=\"btn btn-sm btn-secondary\">
                            Retour à la liste
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    {% if evaluations|length > 0 %}
                        <div class=\"table-responsive text-nowrap\">
                            <table class=\"table table-hover\" id=\"evaluationsTable\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Endurance</th>
                                        <th>Force</th>
                                        <th>Vitesse</th>
                                        <th>État de Blessure</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for evaluation in evaluations %}
                                        <tr>
                                            <td>{{ evaluation.dateEvaluation ? evaluation.dateEvaluation|date('d/m/Y') : 'N/A' }}</td>
                                            <td>{{ evaluation.niveauEndurance ?? 'Non évalué' }}</td>
                                            <td>{{ evaluation.forcePhysique ?? 'Non évalué' }}</td>
                                            <td>{{ evaluation.vitesse ?? 'Non évalué' }}</td>
                                            <td>{{ evaluation.etatBlessure ?? 'Aucune blessure' }}</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_show', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                            <i class=\"bx bx-show me-1\"></i> Détails
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_edit', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                        </a>
                                                        <form method=\"post\" action=\"{{ path('app_evaluation_physique_delete', {'idEvaluation': evaluation.idEvaluation}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evaluation.idEvaluation) }}\">
                                                            <button class=\"dropdown-item\" type=\"submit\">
                                                                <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <p class=\"text-muted\">Aucune évaluation physique trouvée pour ce joueur.</p>
                    {% endif %}
                </div>
            </div>

            {% if evaluations|length > 0 %}
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Tendances de Performance</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"performanceTrendsChart\"></div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Performance Trends Chart
            if (document.querySelector(\"#performanceTrendsChart\")) {
                var options = {
                    chart: {
                        type: 'line',
                        height: 350,
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    },
                    series: [
                        {
                            name: 'Endurance',
                            data: {{ endurance_trend|json_encode|raw }}
                        },
                        {
                            name: 'Force',
                            data: {{ force_trend|json_encode|raw }}
                        },
                        {
                            name: 'Vitesse',
                            data: {{ vitesse_trend|json_encode|raw }}
                        }
                    ],
                    xaxis: {
                        categories: {{ dates|json_encode|raw }},
                        title: {
                            text: 'Date d\\'Évaluation'
                        }
                    },
                    yaxis: {
                        min: 0,
                        max: 10,
                        title: {
                            text: 'Score (0-10)'
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val.toFixed(1) + \" / 10\"
                            }
                        }
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    markers: {
                        size: 4
                    }
                };

                var chart = new ApexCharts(document.querySelector(\"#performanceTrendsChart\"), options);
                chart.render();
            }
        });
    </script>
{% endblock %}", "evaluation_physique/show.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\evaluation_physique\\show.html.twig");
    }
}
