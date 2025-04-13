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

/* fournisseur/index.html.twig */
class __TwigTemplate_0f3462dd1ab1e11497bf8a16f222a0ef extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
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

        yield "Fournisseur Statistics";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<h4 class=\"fw-bold py-3 mb-4\">Fournisseur Statistics</h4>

<div class=\"row\">
   <!-- Total Suppliers Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-primary p-2\">
                            <i class=\"bx bx-store-alt fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Suppliers</span>
                <h3 class=\"card-title mb-2\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Categories Count Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-info p-2\">
                            <i class=\"bx bx-category fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Unique Categories</span>
                <h3 class=\"card-title mb-2\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Product types</small>
            </div>
        </div>
    </div>

    <!-- Email Coverage Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-success p-2\">
                            <i class=\"bx bx-mail-send fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Email Coverage</span>
                <h3 class=\"card-title mb-2\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "%</h3>
                <small class=\"text-muted\">Valid contact emails</small>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row - Adjusted Sizes -->
<div class=\"row\">
    <!-- Category Distribution Chart (Smaller) -->
    <div class=\"col-lg-6 col-md-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0\">Category Distribution</h5>
            </div>
            <div class=\"card-body pt-0\">
                <div id=\"categoryDistributionChart\" style=\"min-height: 250px;\"></div>
            </div>
        </div>
    </div>

    <!-- Top Locations Chart -->
    <div class=\"col-lg-6 col-md-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0\">Top Locations</h5>
            </div>
            <div class=\"card-body pt-0\">
                <div id=\"locationChart\" style=\"min-height: 250px;\"></div>
            </div>
        </div>
    </div>
</div>

    <!-- All Suppliers List -->
    <div class=\"col-12 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0 me-2\">All Suppliers</h5>
                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                    <i class=\"bx bx-plus\"></i> Add New
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSuppliers"]) || array_key_exists("allSuppliers", $context) ? $context["allSuppliers"] : (function () { throw new RuntimeError('Variable "allSuppliers" does not exist.', 113, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 114
            yield "                        <tr>
                            <td><strong>#";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 115), "html", null, true);
            yield "</strong></td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-2\">
                                        <span class=\"avatar-initial rounded bg-label-primary\">
                                            ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 120))), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                    <span>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 123), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"text-truncate d-block\" style=\"max-width: 200px;\">
                                    <i class=\"bx bx-map me-1\"></i>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 129), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <span class=\"badge bg-label-";
            // line 133
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 134
$context["fournisseur"], "categorie_produit", [], "any", false, false, false, 134) == "EQUIPEMENT_SPORTIF")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 135
$context["fournisseur"], "categorie_produit", [], "any", false, false, false, 135) == "ACCESSOIRE_ENTRAINEMENT")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 136
$context["fournisseur"], "categorie_produit", [], "any", false, false, false, 136) == "MATERIEL_JEU")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 137
$context["fournisseur"], "categorie_produit", [], "any", false, false, false, 137) == "TENUE_SPORTIVE")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["fournisseur"], "categorie_produit", [], "any", false, false, false, 138) == "EQUIPEMENT_PROTECTION")) ? ("danger") : ("secondary"))))))))));
            // line 139
            yield "\">
                                    ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 140), ["_" => " "])), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\">
                                            <i class=\"bx bx-show me-1\"></i> View
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_edit", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\">
                                            <i class=\"bx bx-edit me-1\"></i> Edit
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 156))), "html", null, true);
            yield "\">
                                            <button class=\"dropdown-item\" onclick=\"return confirm('Are you sure?')\">
                                                <i class=\"bx bx-trash me-1\"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 165
        if (!$context['_iterated']) {
            // line 166
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">
                                <div class=\"d-flex flex-column align-items-center\">
                                    <img src=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/no-data.png"), "html", null, true);
            yield "\" alt=\"No data\" height=\"100\" class=\"mb-3\">
                                    <h5 class=\"text-muted\">No suppliers found</h5>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 183
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

        // line 184
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category Distribution Chart (smaller)
    new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), {
        chart: {
            type: 'donut',
            height: 250,
            width: '100%'
        },
        series: [";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["cat"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cat'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
        labels: [";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 195, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
        colors: ['#696cff', '#8592a3', '#71dd37', '#ff3e1d', '#ffab00'],
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%'
                }
            }
        }
    }).render();

    // Location Chart
    new ApexCharts(document.querySelector(\"#locationChart\"), {
        chart: {
            type: 'bar',
            height: 250,
            width: '100%'
        },
        series: [{
            name: \"Suppliers\",
            data: [";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["loc"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['loc'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
        }],
        colors: ['#7367f0'],
        xaxis: {
            categories: [";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 222, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
        }
    }).render();
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
        return "fournisseur/index.html.twig";
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
        return array (  439 => 222,  424 => 218,  389 => 195,  377 => 194,  364 => 184,  351 => 183,  334 => 175,  322 => 169,  317 => 166,  315 => 165,  301 => 156,  297 => 155,  291 => 152,  285 => 149,  273 => 140,  270 => 139,  268 => 138,  267 => 137,  266 => 136,  265 => 135,  264 => 134,  263 => 133,  256 => 129,  250 => 126,  244 => 123,  238 => 120,  230 => 115,  227 => 114,  222 => 113,  202 => 96,  160 => 57,  139 => 39,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fournisseur Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Fournisseur Statistics</h4>

<div class=\"row\">
   <!-- Total Suppliers Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-primary p-2\">
                            <i class=\"bx bx-store-alt fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Suppliers</span>
                <h3 class=\"card-title mb-2\">{{ totalSuppliers }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Categories Count Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-info p-2\">
                            <i class=\"bx bx-category fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Unique Categories</span>
                <h3 class=\"card-title mb-2\">{{ categoriesCount }}</h3>
                <small class=\"text-muted\">Product types</small>
            </div>
        </div>
    </div>

    <!-- Email Coverage Widget -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <span class=\"avatar-initial rounded bg-label-success p-2\">
                            <i class=\"bx bx-mail-send fs-4\"></i>
                        </span>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Email Coverage</span>
                <h3 class=\"card-title mb-2\">{{ emailCoverage }}%</h3>
                <small class=\"text-muted\">Valid contact emails</small>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row - Adjusted Sizes -->
<div class=\"row\">
    <!-- Category Distribution Chart (Smaller) -->
    <div class=\"col-lg-6 col-md-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0\">Category Distribution</h5>
            </div>
            <div class=\"card-body pt-0\">
                <div id=\"categoryDistributionChart\" style=\"min-height: 250px;\"></div>
            </div>
        </div>
    </div>

    <!-- Top Locations Chart -->
    <div class=\"col-lg-6 col-md-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0\">Top Locations</h5>
            </div>
            <div class=\"card-body pt-0\">
                <div id=\"locationChart\" style=\"min-height: 250px;\"></div>
            </div>
        </div>
    </div>
</div>

    <!-- All Suppliers List -->
    <div class=\"col-12 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title m-0 me-2\">All Suppliers</h5>
                <a href=\"{{ path('app_fournisseur_new') }}\" class=\"btn btn-sm btn-primary\">
                    <i class=\"bx bx-plus\"></i> Add New
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% for fournisseur in allSuppliers %}
                        <tr>
                            <td><strong>#{{ fournisseur.id_fournisseur }}</strong></td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-2\">
                                        <span class=\"avatar-initial rounded bg-label-primary\">
                                            {{ fournisseur.nom|first|upper }}
                                        </span>
                                    </div>
                                    <span>{{ fournisseur.nom }}</span>
                                </div>
                            </td>
                            <td>{{ fournisseur.email }}</td>
                            <td>
                                <span class=\"text-truncate d-block\" style=\"max-width: 200px;\">
                                    <i class=\"bx bx-map me-1\"></i>{{ fournisseur.adresse }}
                                </span>
                            </td>
                            <td>
                                <span class=\"badge bg-label-{{ 
                                    fournisseur.categorie_produit == 'EQUIPEMENT_SPORTIF' ? 'primary' : 
                                    (fournisseur.categorie_produit == 'ACCESSOIRE_ENTRAINEMENT' ? 'info' :
                                    (fournisseur.categorie_produit == 'MATERIEL_JEU' ? 'warning' :
                                    (fournisseur.categorie_produit == 'TENUE_SPORTIVE' ? 'success' :
                                    (fournisseur.categorie_produit == 'EQUIPEMENT_PROTECTION' ? 'danger' : 'secondary')))) 
                                }}\">
                                    {{ fournisseur.categorie_produit|replace({'_': ' '})|title }}
                                </span>
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_show', {'id_fournisseur': fournisseur.id_fournisseur}) }}\">
                                            <i class=\"bx bx-show me-1\"></i> View
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_edit', {'id_fournisseur': fournisseur.id_fournisseur}) }}\">
                                            <i class=\"bx bx-edit me-1\"></i> Edit
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_fournisseur_delete', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id_fournisseur) }}\">
                                            <button class=\"dropdown-item\" onclick=\"return confirm('Are you sure?')\">
                                                <i class=\"bx bx-trash me-1\"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">
                                <div class=\"d-flex flex-column align-items-center\">
                                    <img src=\"{{ asset('assets/img/illustrations/no-data.png') }}\" alt=\"No data\" height=\"100\" class=\"mb-3\">
                                    <h5 class=\"text-muted\">No suppliers found</h5>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category Distribution Chart (smaller)
    new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), {
        chart: {
            type: 'donut',
            height: 250,
            width: '100%'
        },
        series: [{% for cat, count in categoryDistribution %}{{ count }},{% endfor %}],
        labels: [{% for cat in categoryDistribution|keys %}'{{ cat }}',{% endfor %}],
        colors: ['#696cff', '#8592a3', '#71dd37', '#ff3e1d', '#ffab00'],
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%'
                }
            }
        }
    }).render();

    // Location Chart
    new ApexCharts(document.querySelector(\"#locationChart\"), {
        chart: {
            type: 'bar',
            height: 250,
            width: '100%'
        },
        series: [{
            name: \"Suppliers\",
            data: [{% for loc, count in locationDistribution %}{{ count }},{% endfor %}]
        }],
        colors: ['#7367f0'],
        xaxis: {
            categories: [{% for loc in locationDistribution|keys %}'{{ loc }}',{% endfor %}]
        }
    }).render();
});
</script>
{% endblock %}", "fournisseur/index.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\fournisseur\\index.html.twig");
    }
}
