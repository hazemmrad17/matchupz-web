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

/* fournisseur/statistics.html.twig */
class __TwigTemplate_5c3142b12f1b419555d9bad20fdb5bf1 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/statistics.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Material Statistics";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div class=\"container-fluid\">
        <h1 class=\"mb-4\">Material Statistics</h1>

        ";
        // line 10
        if (((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 10, $this->source); })()) == 0)) {
            // line 11
            yield "            <div class=\"alert alert-info\" role=\"alert\">
                No materials found in the inventory.
            </div>
        ";
        } else {
            // line 15
            yield "            <!-- Summary Cards -->
            <div class=\"row mb-4\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Total Materials</h5>
                            <p class=\"card-text display-4\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Inventory Value</h5>
                            <p class=\"card-text display-4\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 29, $this->source); })()), 2), "html", null, true);
            yield " €</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Unique Types</h5>
                            <p class=\"card-text display-4\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 37, $this->source); })())), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class=\"row\">
                <!-- Type Distribution Chart -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Type Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"typeDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>

                <!-- State Distribution Chart -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>State Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"stateDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Tables -->
            <div class=\"row\">
                <!-- Type Distribution Table -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Type Breakdown</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Count</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["type"] => $context["count"]) {
                // line 89
                yield "                                        <tr>
                                            <td>";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "</td>
                                            <td>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                                            <td>";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["count"] / (isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 92, $this->source); })())) * 100), 2), "html", null, true);
                yield "%</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- State Distribution Table -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>State Breakdown</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Count</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["state"] => $context["count"]) {
                // line 118
                yield "                                        <tr>
                                            <td>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
                yield "</td>
                                            <td>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                                            <td>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["count"] / (isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 121, $this->source); })())) * 100), 2), "html", null, true);
                yield "%</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['state'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 131
        yield "    </div>

    ";
        // line 133
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 134
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        ";
        // line 135
        if (((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 135, $this->source); })()) > 0)) {
            // line 136
            yield "            <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
            <script>
                // Type Distribution Chart
                const typeCtx = document.getElementById('typeDistributionChart').getContext('2d');
                new Chart(typeCtx, {
                    type: 'pie',
                    data: {
                        labels: [";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 143, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "',";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                        datasets: [{
                            data: [";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF',
                                '#FF9F40', '#C9CBCF', '#7BC225'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' }
                        }
                    }
                });

                // State Distribution Chart
                const stateCtx = document.getElementById('stateDistributionChart').getContext('2d');
                new Chart(stateCtx, {
                    type: 'pie',
                    data: {
                        labels: [";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 165, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
                yield "',";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['state'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                        datasets: [{
                            data: [";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 167, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' }
                        }
                    }
                });
            </script>
        ";
        }
        // line 182
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fournisseur/statistics.html.twig";
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
        return array (  407 => 182,  381 => 167,  367 => 165,  336 => 145,  322 => 143,  313 => 136,  311 => 135,  306 => 134,  283 => 133,  279 => 131,  270 => 124,  261 => 121,  257 => 120,  253 => 119,  250 => 118,  246 => 117,  222 => 95,  213 => 92,  209 => 91,  205 => 90,  202 => 89,  198 => 88,  144 => 37,  133 => 29,  122 => 21,  114 => 15,  108 => 11,  106 => 10,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/materiel/statistics.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Material Statistics{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"mb-4\">Material Statistics</h1>

        {% if totalMateriels == 0 %}
            <div class=\"alert alert-info\" role=\"alert\">
                No materials found in the inventory.
            </div>
        {% else %}
            <!-- Summary Cards -->
            <div class=\"row mb-4\">
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Total Materials</h5>
                            <p class=\"card-text display-4\">{{ totalMateriels }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Inventory Value</h5>
                            <p class=\"card-text display-4\">{{ inventoryValue|number_format(2) }} €</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Unique Types</h5>
                            <p class=\"card-text display-4\">{{ typeDistribution|length }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class=\"row\">
                <!-- Type Distribution Chart -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Type Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"typeDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>

                <!-- State Distribution Chart -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>State Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"stateDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Tables -->
            <div class=\"row\">
                <!-- Type Distribution Table -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Type Breakdown</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Count</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for type, count in typeDistribution %}
                                        <tr>
                                            <td>{{ type }}</td>
                                            <td>{{ count }}</td>
                                            <td>{{ (count / totalMateriels * 100)|number_format(2) }}%</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- State Distribution Table -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>State Breakdown</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Count</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for state, count in stateDistribution %}
                                        <tr>
                                            <td>{{ state }}</td>
                                            <td>{{ count }}</td>
                                            <td>{{ (count / totalMateriels * 100)|number_format(2) }}%</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

    {% block javascripts %}
        {{ parent() }}
        {% if totalMateriels > 0 %}
            <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
            <script>
                // Type Distribution Chart
                const typeCtx = document.getElementById('typeDistributionChart').getContext('2d');
                new Chart(typeCtx, {
                    type: 'pie',
                    data: {
                        labels: [{% for type in typeDistribution|keys %}'{{ type }}',{% endfor %}],
                        datasets: [{
                            data: [{% for count in typeDistribution %}{{ count }},{% endfor %}],
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF',
                                '#FF9F40', '#C9CBCF', '#7BC225'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' }
                        }
                    }
                });

                // State Distribution Chart
                const stateCtx = document.getElementById('stateDistributionChart').getContext('2d');
                new Chart(stateCtx, {
                    type: 'pie',
                    data: {
                        labels: [{% for state in stateDistribution|keys %}'{{ state }}',{% endfor %}],
                        datasets: [{
                            data: [{% for count in stateDistribution %}{{ count }},{% endfor %}],
                            backgroundColor: [
                                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' }
                        }
                    }
                });
            </script>
        {% endif %}
    {% endblock %}
{% endblock %}", "fournisseur/statistics.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\fournisseur\\statistics.html.twig");
    }
}
