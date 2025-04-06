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

/* historique_club/index.html.twig */
class __TwigTemplate_e6e0635676f176e67185411cdf346dcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique_club/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "historique_club/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Historique des Clubs";
        
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
        // line 16
        yield "            
            ";
        // line 18
        yield "            <div class=\"row mb-4\">
                ";
        // line 20
        yield "                <div class=\"col-md-12 mb-4\">
                    <div class=\"card\">
                        <h5 class=\"card-header\">Répartition des Joueurs par Club</h5>
                        <div class=\"card-body\">
                            <canvas id=\"clubDistributionChart\" height=\"100\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 31
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Historique des Clubs
                    <div>
                        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_stats");
        yield "\" class=\"btn btn-info me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_new");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvel Historique
                        </a>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Joueur</th>
                                <th>Club</th>
                                <th>Saison Début</th>
                                <th>Saison Fin</th>
                                <th>Durée</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historique_clubs"]) || array_key_exists("historique_clubs", $context) ? $context["historique_clubs"] : (function () { throw new RuntimeError('Variable "historique_clubs" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 57
            yield "                                <tr>
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "joueur", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "joueur", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "nomClub", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                                    <td>";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonDebut", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonDebut", [], "any", false, false, false, 63), "m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 64
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonFin", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonFin", [], "any", false, false, false, 64), "m/Y"), "html", null, true)) : ("Actuel"));
            yield "</td>
                                    <td>
                                        ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonFin", [], "any", false, false, false, 66)) {
                // line 67
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonDebut", [], "any", false, false, false, 67), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonFin", [], "any", false, false, false, 67)], "method", false, false, false, 67), "%y ans, %m mois"), "html", null, true);
                yield "
                                        ";
            } else {
                // line 69
                yield "                                            En cours (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "saisonDebut", [], "any", false, false, false, 69), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 69), "%y ans, %m mois"), "html", null, true);
                yield ")
                                        ";
            }
            // line 71
            yield "                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_show", ["idHistorique" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_edit", ["idHistorique" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_delete", ["idHistorique" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 85))), "html", null, true);
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
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucun historique trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['historique'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 107
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Club Distribution Chart - Example
            const clubCtx = document.getElementById('clubDistributionChart').getContext('2d');
            
            // You would need to pass these variables from your controller
            const clubData = {
                labels: ";
        // line 114
        yield json_encode(((array_key_exists("clubNames", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["clubNames"]) || array_key_exists("clubNames", $context) ? $context["clubNames"] : (function () { throw new RuntimeError('Variable "clubNames" does not exist.', 114, $this->source); })()), [])) : ([])));
        yield ",
                datasets: [{
                    data: ";
        // line 116
        yield json_encode(((array_key_exists("playerCounts", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["playerCounts"]) || array_key_exists("playerCounts", $context) ? $context["playerCounts"] : (function () { throw new RuntimeError('Variable "playerCounts" does not exist.', 116, $this->source); })()), [])) : ([])));
        yield ",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
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
        // line 14
        yield "                ";
        // line 15
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
        return "historique_club/index.html.twig";
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
        return array (  355 => 15,  353 => 14,  351 => 13,  338 => 12,  301 => 116,  296 => 114,  287 => 107,  278 => 99,  269 => 95,  267 => 94,  253 => 85,  249 => 84,  243 => 81,  237 => 78,  228 => 71,  222 => 69,  216 => 67,  214 => 66,  209 => 64,  205 => 63,  201 => 62,  194 => 60,  189 => 57,  184 => 56,  163 => 38,  157 => 35,  151 => 31,  139 => 20,  136 => 18,  133 => 16,  131 => 12,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Historique des Clubs{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% block widgets %}
                {# You can create a specific widgets file for HistoriqueClub if needed #}
                {# {% include 'historique_club/historique_widgets.html.twig' %} #}
            {% endblock %}
            
            {# Statistics Section - Optional #}
            <div class=\"row mb-4\">
                {# Club Distribution Chart - Example #}
                <div class=\"col-md-12 mb-4\">
                    <div class=\"card\">
                        <h5 class=\"card-header\">Répartition des Joueurs par Club</h5>
                        <div class=\"card-body\">
                            <canvas id=\"clubDistributionChart\" height=\"100\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {# Historique Table #}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Historique des Clubs
                    <div>
                        <a href=\"{{ path('app_historique_club_stats') }}\" class=\"btn btn-info me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <a href=\"{{ path('app_historique_club_new') }}\" class=\"btn btn-primary\">
                            <i class=\"bx bx-plus\"></i> Nouvel Historique
                        </a>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Joueur</th>
                                <th>Club</th>
                                <th>Saison Début</th>
                                <th>Saison Fin</th>
                                <th>Durée</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for historique in historique_clubs %}
                                <tr>
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ historique.joueur.nom }} {{ historique.joueur.prenom }}</strong>
                                    </td>
                                    <td>{{ historique.nomClub }}</td>
                                    <td>{{ historique.saisonDebut ? historique.saisonDebut|date('m/Y') : 'N/A' }}</td>
                                    <td>{{ historique.saisonFin ? historique.saisonFin|date('m/Y') : 'Actuel' }}</td>
                                    <td>
                                        {% if historique.saisonFin %}
                                            {{ historique.saisonDebut.diff(historique.saisonFin)|date('%y ans, %m mois') }}
                                        {% else %}
                                            En cours ({{ historique.saisonDebut.diff(date())|date('%y ans, %m mois') }})
                                        {% endif %}
                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_historique_club_show', {'idHistorique': historique.idHistorique}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_historique_club_edit', {'idHistorique': historique.idHistorique}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('app_historique_club_delete', {'idHistorique': historique.idHistorique}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ historique.idHistorique) }}\">
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
                                    <td colspan=\"6\" class=\"text-center\">Aucun historique trouvé</td>
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
            // Club Distribution Chart - Example
            const clubCtx = document.getElementById('clubDistributionChart').getContext('2d');
            
            // You would need to pass these variables from your controller
            const clubData = {
                labels: {{ clubNames|default([])|json_encode|raw }},
                datasets: [{
                    data: {{ playerCounts|default([])|json_encode|raw }},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
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
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "historique_club/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace\\templates\\historique_club\\index.html.twig");
    }
}
