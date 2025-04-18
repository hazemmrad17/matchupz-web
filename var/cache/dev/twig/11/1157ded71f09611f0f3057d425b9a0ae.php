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

/* schedule/main.html.twig */
class __TwigTemplate_7465286823f2d4840b0e4d8e22b5358b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/main.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "schedule/main.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Liste des planning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <style>
        .row-ongoing {
            animation: greenFlow 3s ease-in-out infinite;
            background: linear-gradient(270deg, #b0f2b6, #72c72b, #b0f2b6);
            background-size: 400% 100%;
            transition: background 1s ease-in-out;
        }

        @keyframes greenFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .table-scrollable {
            max-height: 265px;
            overflow-y: auto;
        }
    </style>

    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Liste des plannings
                <div>
                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_new");
        yield "\" class=\"btn btn-primary\">Ajouter un planning</a>
                </h5>
                </a>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par compétiteurs ou lieu sportif...\" value=\"\">
                        </div>
                    </div>

                    <div class=\"table-responsive text-nowrap table-scrollable\">
                        <table class=\"table\" id=\"schedulesTable\">
                            <thead>
                                <tr>
                                    <th>Date du Match</th>
                                    <th>Heure de Début</th>
                                    <th>Heure de Fin</th>
                                    <th>Match</th>
                                    <th>Lieu sportif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\" id=\"schedulesTableBody\">
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 60
            yield "                                    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 61
            yield "                                    ";
            $context["dateMatch"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 61), "U");
            // line 62
            yield "                                    ";
            $context["startTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 62), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 62), "H:i:s")), "U");
            // line 63
            yield "                                    ";
            $context["endTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 63), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 63), "H:i:s")), "U");
            // line 64
            yield "
                                    ";
            // line 65
            $context["isOngoing"] = (((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 65, $this->source); })()) >= (isset($context["startTime"]) || array_key_exists("startTime", $context) ? $context["startTime"] : (function () { throw new RuntimeError('Variable "startTime" does not exist.', 65, $this->source); })())) && ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 65, $this->source); })()) <= (isset($context["endTime"]) || array_key_exists("endTime", $context) ? $context["endTime"] : (function () { throw new RuntimeError('Variable "endTime" does not exist.', 65, $this->source); })())));
            // line 66
            yield "                                    ";
            $context["isPast"] = (((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 66, $this->source); })()) > (isset($context["endTime"]) || array_key_exists("endTime", $context) ? $context["endTime"] : (function () { throw new RuntimeError('Variable "endTime" does not exist.', 66, $this->source); })())) || ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 66, $this->source); })()) > (isset($context["dateMatch"]) || array_key_exists("dateMatch", $context) ? $context["dateMatch"] : (function () { throw new RuntimeError('Variable "dateMatch" does not exist.', 66, $this->source); })())));
            // line 67
            yield "
                                    <tr class=\"";
            // line 68
            if ((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 68, $this->source); })())) {
                yield "row-ongoing";
            } elseif ((isset($context["isPast"]) || array_key_exists("isPast", $context) ? $context["isPast"] : (function () { throw new RuntimeError('Variable "isPast" does not exist.', 68, $this->source); })())) {
                yield "table-danger";
            } else {
                yield "table-default";
            }
            yield "\">
                                        <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 69), "m-d-Y"), "html", null, true);
            yield "</strong></td>
                                        <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 70), "H:i"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 71), "H:i"), "html", null, true);
            yield "</td>
                                        <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>";
            // line 72
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 72), "c1", [], "any", false, false, false, 72) . " vs ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 72), "c2", [], "any", false, false, false, 72)), "html", null, true)) : ("N/A"));
            yield "</strong></td>
                                        <td>";
            // line 73
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 73)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 73), "nom_espace", [], "any", false, false, false, 73), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_show", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_edit", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_delete", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 87))), "html", null, true);
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
        // line 96
        if (!$context['_iterated']) {
            // line 97
            yield "                                    <tr><td colspan=\"6\" class=\"text-center\">Aucun schedule trouvé</td></tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const schedulesTableBody = document.getElementById('schedulesTableBody');

            function formatTime(timeString) {
                return timeString.substring(0, 5);
            }

            function getRowClass(dateMatch, startTime, endTime) {
                const now = Math.floor(Date.now() / 1000);
                const dateMatchTimestamp = Math.floor(new Date(dateMatch).getTime() / 1000);
                const startDateTime = new Date(`\${dateMatch}T\${startTime}`).getTime() / 1000;
                const endDateTime = new Date(`\${dateMatch}T\${endTime}`).getTime() / 1000;
                const isOngoing = now >= startDateTime && now <= endDateTime;
                const isPast = now > endDateTime || now > dateMatchTimestamp;
                if (isOngoing) return 'row-ongoing';
                if (isPast) return 'table-danger';
                return 'table-default';
            }

            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            const performSearch = debounce(async function (query) {
                try {
                    const response = await fetch(`";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_search");
        yield "?q=\${encodeURIComponent(query)}`);
                    if (!response.ok) throw new Error('Network response was not ok');

                    const schedules = await response.json();
                    schedulesTableBody.innerHTML = '';

                    if (schedules.length === 0) {
                        schedulesTableBody.innerHTML = `<tr><td colspan=\"6\" class=\"text-center\">Aucun schedule trouvé</td></tr>`;
                        return;
                    }

                    schedules.forEach(schedule => {
                        console.log('Processing schedule:', schedule);
                        console.log('CSRF Token for schedule:', schedule.csrfToken);

                        const rowClass = getRowClass(schedule.dateMatch, schedule.startTime, schedule.endTime);
                        const row = document.createElement('tr');
                        row.className = rowClass;

                        const espaceSportifName = schedule.espaceSportif && schedule.espaceSportif.nom_espace ? schedule.espaceSportif.nom_espace : 'N/A';
                        const baseUrl = '/schedule';
                        const showUrl = `\${baseUrl}/\${schedule.idSchedule}`;
                        const editUrl = `\${baseUrl}/\${schedule.idSchedule}/edit`;
                        const deleteUrl = `\${baseUrl}/\${schedule.idSchedule}/delete`;

                        row.innerHTML = `
                            <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>\${schedule.dateMatch}</strong></td>
                            <td>\${formatTime(schedule.startTime)}</td>
                            <td>\${formatTime(schedule.endTime)}</td>
                            <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>\${schedule.match ? schedule.match.c1 + ' vs ' + schedule.match.c2 : 'N/A'}</strong></td>
                            <td>\${espaceSportifName}</td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"\${showUrl}\">
                                            <i class=\"bx bx-show me-1\"></i> Voir
                                        </a>
                                        <a class=\"dropdown-item\" href=\"\${editUrl}\">
                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                        </a>
                                        <form method=\"post\" action=\"\${deleteUrl}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"\${schedule.csrfToken}\">
                                            <button class=\"dropdown-item\" type=\"submit\">
                                                <i class=\"bx bx-trash me-1\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        `;
                        schedulesTableBody.appendChild(row);
                    });
                } catch (error) {
                    console.error('Erreur recherche :', error);
                    schedulesTableBody.innerHTML = `<tr><td colspan=\"6\" class=\"text-center\">Erreur lors de la recherche</td></tr>`;
                }
            }, 300);

            searchInput.addEventListener('input', function () {
                performSearch(this.value.trim());
            });

            performSearch('');
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
        return "schedule/main.html.twig";
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
        return array (  325 => 138,  284 => 99,  277 => 97,  275 => 96,  261 => 87,  257 => 86,  251 => 83,  245 => 80,  235 => 73,  231 => 72,  227 => 71,  223 => 70,  219 => 69,  209 => 68,  206 => 67,  203 => 66,  201 => 65,  198 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  181 => 59,  154 => 35,  126 => 9,  113 => 8,  90 => 6,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des planning{% endblock %}

{% block content %}
    <style>
        .row-ongoing {
            animation: greenFlow 3s ease-in-out infinite;
            background: linear-gradient(270deg, #b0f2b6, #72c72b, #b0f2b6);
            background-size: 400% 100%;
            transition: background 1s ease-in-out;
        }

        @keyframes greenFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .table-scrollable {
            max-height: 265px;
            overflow-y: auto;
        }
    </style>

    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Liste des plannings
                <div>
                    <a href=\"{{ path('schedule_new') }}\" class=\"btn btn-primary\">Ajouter un planning</a>
                </h5>
                </a>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par compétiteurs ou lieu sportif...\" value=\"\">
                        </div>
                    </div>

                    <div class=\"table-responsive text-nowrap table-scrollable\">
                        <table class=\"table\" id=\"schedulesTable\">
                            <thead>
                                <tr>
                                    <th>Date du Match</th>
                                    <th>Heure de Début</th>
                                    <th>Heure de Fin</th>
                                    <th>Match</th>
                                    <th>Lieu sportif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\" id=\"schedulesTableBody\">
                                {% for schedule in schedules %}
                                    {% set now = \"now\"|date(\"U\") %}
                                    {% set dateMatch = schedule.dateMatch|date(\"U\") %}
                                    {% set startTime = schedule.dateMatch|date_modify(schedule.startTime|date(\"H:i:s\"))|date(\"U\") %}
                                    {% set endTime = schedule.dateMatch|date_modify(schedule.endTime|date(\"H:i:s\"))|date(\"U\") %}

                                    {% set isOngoing = (now >= startTime and now <= endTime) %}
                                    {% set isPast = (now > endTime or now > dateMatch) %}

                                    <tr class=\"{% if isOngoing %}row-ongoing{% elseif isPast %}table-danger{% else %}table-default{% endif %}\">
                                        <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>{{ schedule.dateMatch|date('m-d-Y') }}</strong></td>
                                        <td>{{ schedule.startTime|date('H:i') }}</td>
                                        <td>{{ schedule.endTime|date('H:i') }}</td>
                                        <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>{{ schedule.matchEntity ? schedule.matchEntity.c1 ~ ' vs ' ~ schedule.matchEntity.c2 : 'N/A' }}</strong></td>
                                        <td>{{ schedule.espaceSportif ? schedule.espaceSportif.nom_espace : 'N/A' }}</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('schedule_show', {'idSchedule': schedule.idSchedule}) }}\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('schedule_edit', {'idSchedule': schedule.idSchedule}) }}\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('schedule_delete', {'idSchedule': schedule.idSchedule}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ schedule.idSchedule) }}\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr><td colspan=\"6\" class=\"text-center\">Aucun schedule trouvé</td></tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const schedulesTableBody = document.getElementById('schedulesTableBody');

            function formatTime(timeString) {
                return timeString.substring(0, 5);
            }

            function getRowClass(dateMatch, startTime, endTime) {
                const now = Math.floor(Date.now() / 1000);
                const dateMatchTimestamp = Math.floor(new Date(dateMatch).getTime() / 1000);
                const startDateTime = new Date(`\${dateMatch}T\${startTime}`).getTime() / 1000;
                const endDateTime = new Date(`\${dateMatch}T\${endTime}`).getTime() / 1000;
                const isOngoing = now >= startDateTime && now <= endDateTime;
                const isPast = now > endDateTime || now > dateMatchTimestamp;
                if (isOngoing) return 'row-ongoing';
                if (isPast) return 'table-danger';
                return 'table-default';
            }

            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            const performSearch = debounce(async function (query) {
                try {
                    const response = await fetch(`{{ path('schedule_search') }}?q=\${encodeURIComponent(query)}`);
                    if (!response.ok) throw new Error('Network response was not ok');

                    const schedules = await response.json();
                    schedulesTableBody.innerHTML = '';

                    if (schedules.length === 0) {
                        schedulesTableBody.innerHTML = `<tr><td colspan=\"6\" class=\"text-center\">Aucun schedule trouvé</td></tr>`;
                        return;
                    }

                    schedules.forEach(schedule => {
                        console.log('Processing schedule:', schedule);
                        console.log('CSRF Token for schedule:', schedule.csrfToken);

                        const rowClass = getRowClass(schedule.dateMatch, schedule.startTime, schedule.endTime);
                        const row = document.createElement('tr');
                        row.className = rowClass;

                        const espaceSportifName = schedule.espaceSportif && schedule.espaceSportif.nom_espace ? schedule.espaceSportif.nom_espace : 'N/A';
                        const baseUrl = '/schedule';
                        const showUrl = `\${baseUrl}/\${schedule.idSchedule}`;
                        const editUrl = `\${baseUrl}/\${schedule.idSchedule}/edit`;
                        const deleteUrl = `\${baseUrl}/\${schedule.idSchedule}/delete`;

                        row.innerHTML = `
                            <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>\${schedule.dateMatch}</strong></td>
                            <td>\${formatTime(schedule.startTime)}</td>
                            <td>\${formatTime(schedule.endTime)}</td>
                            <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>\${schedule.match ? schedule.match.c1 + ' vs ' + schedule.match.c2 : 'N/A'}</strong></td>
                            <td>\${espaceSportifName}</td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"\${showUrl}\">
                                            <i class=\"bx bx-show me-1\"></i> Voir
                                        </a>
                                        <a class=\"dropdown-item\" href=\"\${editUrl}\">
                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                        </a>
                                        <form method=\"post\" action=\"\${deleteUrl}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"\${schedule.csrfToken}\">
                                            <button class=\"dropdown-item\" type=\"submit\">
                                                <i class=\"bx bx-trash me-1\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        `;
                        schedulesTableBody.appendChild(row);
                    });
                } catch (error) {
                    console.error('Erreur recherche :', error);
                    schedulesTableBody.innerHTML = `<tr><td colspan=\"6\" class=\"text-center\">Erreur lors de la recherche</td></tr>`;
                }
            }, 300);

            searchInput.addEventListener('input', function () {
                performSearch(this.value.trim());
            });

            performSearch('');
        });
    </script>
{% endblock %}", "schedule/main.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\schedule\\main.html.twig");
    }
}
