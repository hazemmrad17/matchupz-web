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
class __TwigTemplate_621520acd7e9de6ce35d49283f619a89 extends Template
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

        yield "Statistiques des Fournisseurs";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Fournisseurs</h4>

<div class=\"row\">
    <!-- Total Fournisseurs -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                <h3 class=\"card-title mb-2\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Enregistrés</small>
            </div>
        </div>
    </div>
    <!-- Catégories Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Catégories Uniques</span>
                <h3 class=\"card-title mb-2\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Types distincts</small>
            </div>
        </div>
    </div>
    <!-- Villes Distinctes -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Villes Distinctes</span>
                <h3 class=\"card-title mb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["citiesCount"]) || array_key_exists("citiesCount", $context) ? $context["citiesCount"] : (function () { throw new RuntimeError('Variable "citiesCount" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Localisations uniques</small>
            </div>
        </div>
    </div>
</div>

<!-- Advanced metrics row -->
<div class=\"row mt-4\">
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Domaines Email Uniques</span>
                <h3 class=\"card-title mb-2\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::keys((isset($context["emailDomainDistribution"]) || array_key_exists("emailDomainDistribution", $context) ? $context["emailDomainDistribution"] : (function () { throw new RuntimeError('Variable "emailDomainDistribution" does not exist.', 48, $this->source); })()))), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Domaines distincts</small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Moyenne Matériels / Fournisseur</span>
                <h3 class=\"card-title mb-2\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageMaterialsPerSupplier"]) || array_key_exists("averageMaterialsPerSupplier", $context) ? $context["averageMaterialsPerSupplier"] : (function () { throw new RuntimeError('Variable "averageMaterialsPerSupplier" does not exist.', 57, $this->source); })()), 2), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Matériels moyens</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Catégorie Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Catégories</h5></div>
            <div class=\"card-body\"><canvas id=\"categoryChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas></div>
        </div>
    </div>

    <!-- Localisation Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Localisation</h5></div>
            <div class=\"card-body\"><canvas id=\"locationChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas></div>
        </div>
    </div>
</div>

<!-- Top 5 fournisseurs par nombre de matériels -->
<div class=\"row mt-4\">
    <div class=\"col-12 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-light\"><h5 class=\"m-0\">Top 5 Fournisseurs par Nombre de Matériels</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                            <tr><th>Fournisseur</th><th>Matériels</th></tr>
                        </thead>
                        <tbody>
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topSuppliersByMaterialCount"]) || array_key_exists("topSuppliersByMaterialCount", $context) ? $context["topSuppliersByMaterialCount"] : (function () { throw new RuntimeError('Variable "topSuppliersByMaterialCount" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 95
            yield "                            <tr><td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "</td><td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "materialCount", [], "any", false, false, false, 95), "html", null, true);
            yield "</td></tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 96
        if (!$context['_iterated']) {
            // line 97
            yield "                            <tr><td colspan=\"2\">Aucun résultat</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                        </tbody>
                    </table>
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

    // line 109
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

        // line 110
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Couleurs Sneat Bootstrap 5
    const sneatColors = [
        '#696cff', // primary
        '#71dd37', // success
        '#ffab00', // warning
        '#ff3e1d', // danger
        '#03c3ec', // info
        '#8592a3', // secondary
        '#e7e7ff', // light
        '#233446', // dark
        '#ffb400', // orange
        '#6f42c1', // purple
        '#00bfa6'  // teal
    ];

    // Category Distribution Chart (Pie)
    const categoryData = ";
        // line 130
        yield json_encode((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 130, $this->source); })()));
        yield ";
    const categoryLabels = Object.keys(categoryData);
    const categoryCounts = Object.values(categoryData);
    const categoryColors = categoryLabels.map((_, i) => sneatColors[i % sneatColors.length]);
    const ctxCategory = document.getElementById('categoryChartCanvas').getContext('2d');
    new Chart(ctxCategory, {
        type: 'pie',
        data: {
            labels: categoryLabels,
            datasets: [{
                data: categoryCounts,
                backgroundColor: categoryColors,
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom' } } }
    });

    // Location Distribution Chart (Bar)
    const locationData = ";
        // line 150
        yield json_encode((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 150, $this->source); })()));
        yield ";
    const locationLabels = Object.keys(locationData);
    const locationCounts = Object.values(locationData);
    const locationColors = locationLabels.map((_, i) => sneatColors[i % sneatColors.length]);
    const ctxLocation = document.getElementById('locationChartCanvas').getContext('2d');
    new Chart(ctxLocation, {
        type: 'bar',
        data: {
            labels: locationLabels,
            datasets: [{
                label: 'Nombre de fournisseurs',
                data: locationCounts,
                backgroundColor: locationColors,
                borderColor: locationColors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { x: { ticks: { maxRotation: 45, minRotation: 45 } } }
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
        return array (  307 => 150,  284 => 130,  260 => 110,  247 => 109,  228 => 99,  221 => 97,  219 => 96,  210 => 95,  205 => 94,  165 => 57,  153 => 48,  137 => 35,  124 => 25,  111 => 15,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/fournisseur/statistics.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Statistiques des Fournisseurs{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Fournisseurs</h4>

<div class=\"row\">
    <!-- Total Fournisseurs -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                <h3 class=\"card-title mb-2\">{{ totalSuppliers }}</h3>
                <small class=\"text-muted\">Enregistrés</small>
            </div>
        </div>
    </div>
    <!-- Catégories Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Catégories Uniques</span>
                <h3 class=\"card-title mb-2\">{{ categoriesCount }}</h3>
                <small class=\"text-muted\">Types distincts</small>
            </div>
        </div>
    </div>
    <!-- Villes Distinctes -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Villes Distinctes</span>
                <h3 class=\"card-title mb-2\">{{ citiesCount }}</h3>
                <small class=\"text-muted\">Localisations uniques</small>
            </div>
        </div>
    </div>
</div>

<!-- Advanced metrics row -->
<div class=\"row mt-4\">
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Domaines Email Uniques</span>
                <h3 class=\"card-title mb-2\">{{ emailDomainDistribution|keys|length }}</h3>
                <small class=\"text-muted\">Domaines distincts</small>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card text-center shadow-sm\">
            <div class=\"card-body\">
                <span class=\"fw-semibold d-block mb-1\">Moyenne Matériels / Fournisseur</span>
                <h3 class=\"card-title mb-2\">{{ averageMaterialsPerSupplier|round(2) }}</h3>
                <small class=\"text-muted\">Matériels moyens</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Catégorie Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Catégories</h5></div>
            <div class=\"card-body\"><canvas id=\"categoryChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas></div>
        </div>
    </div>

    <!-- Localisation Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Localisation</h5></div>
            <div class=\"card-body\"><canvas id=\"locationChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas></div>
        </div>
    </div>
</div>

<!-- Top 5 fournisseurs par nombre de matériels -->
<div class=\"row mt-4\">
    <div class=\"col-12 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-light\"><h5 class=\"m-0\">Top 5 Fournisseurs par Nombre de Matériels</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                            <tr><th>Fournisseur</th><th>Matériels</th></tr>
                        </thead>
                        <tbody>
                            {% for supplier in topSuppliersByMaterialCount %}
                            <tr><td>{{ supplier.nom }}</td><td>{{ supplier.materialCount }}</td></tr>
                            {% else %}
                            <tr><td colspan=\"2\">Aucun résultat</td></tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Couleurs Sneat Bootstrap 5
    const sneatColors = [
        '#696cff', // primary
        '#71dd37', // success
        '#ffab00', // warning
        '#ff3e1d', // danger
        '#03c3ec', // info
        '#8592a3', // secondary
        '#e7e7ff', // light
        '#233446', // dark
        '#ffb400', // orange
        '#6f42c1', // purple
        '#00bfa6'  // teal
    ];

    // Category Distribution Chart (Pie)
    const categoryData = {{ categoryDistribution|json_encode|raw }};
    const categoryLabels = Object.keys(categoryData);
    const categoryCounts = Object.values(categoryData);
    const categoryColors = categoryLabels.map((_, i) => sneatColors[i % sneatColors.length]);
    const ctxCategory = document.getElementById('categoryChartCanvas').getContext('2d');
    new Chart(ctxCategory, {
        type: 'pie',
        data: {
            labels: categoryLabels,
            datasets: [{
                data: categoryCounts,
                backgroundColor: categoryColors,
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom' } } }
    });

    // Location Distribution Chart (Bar)
    const locationData = {{ locationDistribution|json_encode|raw }};
    const locationLabels = Object.keys(locationData);
    const locationCounts = Object.values(locationData);
    const locationColors = locationLabels.map((_, i) => sneatColors[i % sneatColors.length]);
    const ctxLocation = document.getElementById('locationChartCanvas').getContext('2d');
    new Chart(ctxLocation, {
        type: 'bar',
        data: {
            labels: locationLabels,
            datasets: [{
                label: 'Nombre de fournisseurs',
                data: locationCounts,
                backgroundColor: locationColors,
                borderColor: locationColors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { x: { ticks: { maxRotation: 45, minRotation: 45 } } }
        }
    });
});
</script>
{% endblock %}", "fournisseur/statistics.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\fournisseur\\statistics.html.twig");
    }
}
