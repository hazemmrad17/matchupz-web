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

/* materiel/statistics.html.twig */
class __TwigTemplate_93c620568f4c633828be3d9135bd466c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/statistics.html.twig", 1);
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

        yield "Statistiques des Matériels";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://unpkg.com/@iconscout/unicons@4.0.8/css/line.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Matériels</h4>

<div class=\"row\">
    <!-- Total Matériels -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-box text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                <h3 class=\"card-title mb-2\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Matériels enregistrés</small>
            </div>
        </div>
    </div>

    <!-- Types Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-grid text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Types Uniques</span>
                <h3 class=\"card-title mb-2\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typesCount"]) || array_key_exists("typesCount", $context) ? $context["typesCount"] : (function () { throw new RuntimeError('Variable "typesCount" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Types de matériels distincts</small>
            </div>
        </div>
    </div>

    <!-- Couverture Barcode -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-barcode text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Couverture Barcode</span>
                <h3 class=\"card-title mb-2\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["materialsWithBarcode"]) || array_key_exists("materialsWithBarcode", $context) ? $context["materialsWithBarcode"] : (function () { throw new RuntimeError('Variable "materialsWithBarcode" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["barcodeCoverage"]) || array_key_exists("barcodeCoverage", $context) ? $context["barcodeCoverage"] : (function () { throw new RuntimeError('Variable "barcodeCoverage" does not exist.', 57, $this->source); })()), 1), "html", null, true);
        yield "% Couverture</small>
            </div>
        </div>
    </div>

    <!-- Valeur de l'Inventaire -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-wallet text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Valeur de l'Inventaire</span>
                <h3 class=\"card-title mb-2\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 72, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " €</h3>
                <small class=\"text-muted\">Valeur totale de l'inventaire</small>
            </div>
        </div>
    </div>

    <!-- Longueur Moyenne Nom -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
        <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-text text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Longueur Moyenne Nom</span>
                <h3 class=\"card-title mb-2\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageNameLength"]) || array_key_exists("averageNameLength", $context) ? $context["averageNameLength"] : (function () { throw new RuntimeError('Variable "averageNameLength" does not exist.', 88, $this->source); })()), 1), "html", null, true);
        yield " chars</h3>
                <small class=\"text-muted\">Basé sur les noms des matériels</small>
            </div>
        </div>
    </div>

    <!-- Matériels avec État -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-check text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Matériels avec État</span>
                <h3 class=\"card-title mb-2\">
                    ";
        // line 105
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 105, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 105, $this->source); })()) - (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "", [], "array", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 105, $this->source); })()), "", [], "array", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 105, $this->source); })()), "", [], "array", false, false, false, 105)) : (0))), "html", null, true)) : (0));
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "
                </h3>
                <small class=\"text-success fw-semibold\">
                    ";
        // line 108
        yield ((((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 108, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 108, $this->source); })()) - (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "", [], "array", true, true, false, 108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 108, $this->source); })()), "", [], "array", false, false, false, 108)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 108, $this->source); })()), "", [], "array", false, false, false, 108)) : (0))) / (isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 108, $this->source); })())) * 100), 1), "html", null, true)) : (0));
        yield "% Couverture
                </small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Type Distribution Chart (Chart.js) -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Types</h5></div>
            <div class=\"card-body\">
                <canvas id=\"typeChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas>
                ";
        // line 122
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 122, $this->source); })())) > 0)) {
            // line 123
            yield "                ";
        } else {
            // line 124
            yield "                <p class=\"text-muted\">Aucune donnée disponible.</p>
                ";
        }
        // line 126
        yield "            </div>
        </div>
    </div>

    <!-- State Distribution Chart (Chart.js) -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des États</h5></div>
            <div class=\"card-body\">
                <canvas id=\"stateChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas>
                ";
        // line 136
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 136, $this->source); })())) > 0)) {
            // line 137
            yield "                ";
        } else {
            // line 138
            yield "                <p class=\"text-muted\">Aucune donnée disponible.</p>
                ";
        }
        // line 140
        yield "            </div>
        </div>
    </div>

    <!-- Top Matériels par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Matériels par Longueur de Nom</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Matériel</th>
                                <th>Longueur Nom</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMaterialsByNameLength"]) || array_key_exists("topMaterialsByNameLength", $context) ? $context["topMaterialsByNameLength"] : (function () { throw new RuntimeError('Variable "topMaterialsByNameLength" does not exist.', 159, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 160
            yield "                                <tr>
                                    <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nom", [], "array", false, false, false, 161), "html", null, true);
            yield "</td>
                                    <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nameLength", [], "array", false, false, false, 162), "html", null, true);
            yield " chars</td>
                                    <td>
                                        <a href=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_showF", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["material"], "id", [], "array", false, false, false, 164)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-outline-primary\">Voir</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun matériel disponible.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['material'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Matériels avec Barcode Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Matériels avec Barcode</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Matériel</th>
                                <th>Barcode</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materialsWithBarcodeList"]) || array_key_exists("materialsWithBarcodeList", $context) ? $context["materialsWithBarcodeList"] : (function () { throw new RuntimeError('Variable "materialsWithBarcodeList" does not exist.', 195, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 196
            yield "                                <tr>
                                    <td>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nom", [], "any", false, false, false, 197), "html", null, true);
            yield "</td>
                                    <td>";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "barcode", [], "any", false, false, false, 198), "html", null, true);
            yield "</td>
                                    <td>";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", false, false, false, 199), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 201
        if (!$context['_iterated']) {
            // line 202
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun matériel avec barcode.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['material'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
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

    // line 215
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

        // line 216
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
    // Couleurs d'état (vert, orange, rouge, gris)
    const statePalette = [
        '#71dd37', // neuf/success
        '#ffab00', // use/warning
        '#ff3e1d', // endommagé/danger
        '#8592a3'  // autre/secondary
    ];

            const typeData = ";
        // line 242
        yield json_encode((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 242, $this->source); })()));
        yield ";
            if (Object.keys(typeData).length) {
                // Génère les couleurs pour chaque label
                const typeLabels = Object.keys(typeData);
                const typeColors = typeLabels.map((_, i) => sneatColors[i % sneatColors.length]);
                const typeBorderColors = typeLabels.map((_, i) => sneatColors[i % sneatColors.length]);
                const ctxType = document.getElementById('typeChartCanvas').getContext('2d');
                new Chart(ctxType, {
                    type: 'bar',
                    data: {
                        labels: typeLabels,
                        datasets: [{
                            label: 'Nombre',
                            data: Object.values(typeData),
                            backgroundColor: typeColors,
                            borderColor: typeBorderColors,
                            borderWidth: 1
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
                });
            }

            const stateData = ";
        // line 265
        yield json_encode((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 265, $this->source); })()));
        yield ";
            if (Object.keys(stateData).length) {
                // Génère les couleurs pour chaque label
                const stateLabels = Object.keys(stateData);
                const stateColors = stateLabels.map((_, i) => statePalette[i % statePalette.length]);
                const stateBorderColors = stateLabels.map((_, i) => statePalette[i % statePalette.length]);
                const ctxState = document.getElementById('stateChartCanvas').getContext('2d');
                new Chart(ctxState, {
                    type: 'bar',
                    data: {
                        labels: stateLabels,
                        datasets: [{
                            label: 'Nombre',
                            data: Object.values(stateData),
                            backgroundColor: stateColors,
                            borderColor: stateBorderColors,
                            borderWidth: 1
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
                });
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
        return "materiel/statistics.html.twig";
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
        return array (  504 => 265,  478 => 242,  448 => 216,  435 => 215,  417 => 206,  408 => 202,  406 => 201,  399 => 199,  395 => 198,  391 => 197,  388 => 196,  383 => 195,  359 => 173,  350 => 169,  348 => 168,  339 => 164,  334 => 162,  330 => 161,  327 => 160,  322 => 159,  301 => 140,  297 => 138,  294 => 137,  292 => 136,  280 => 126,  276 => 124,  273 => 123,  271 => 122,  254 => 108,  246 => 105,  226 => 88,  207 => 72,  189 => 57,  183 => 56,  164 => 40,  145 => 24,  130 => 11,  117 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Matériels{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/@iconscout/unicons@4.0.8/css/line.min.css\">
{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Matériels</h4>

<div class=\"row\">
    <!-- Total Matériels -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-box text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                <h3 class=\"card-title mb-2\">{{ totalMateriels }}</h3>
                <small class=\"text-muted\">Matériels enregistrés</small>
            </div>
        </div>
    </div>

    <!-- Types Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-grid text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Types Uniques</span>
                <h3 class=\"card-title mb-2\">{{ typesCount }}</h3>
                <small class=\"text-muted\">Types de matériels distincts</small>
            </div>
        </div>
    </div>

    <!-- Couverture Barcode -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-barcode text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Couverture Barcode</span>
                <h3 class=\"card-title mb-2\">{{ materialsWithBarcode }}/{{ totalMateriels }}</h3>
                <small class=\"text-success fw-semibold\">{{ barcodeCoverage|round(1) }}% Couverture</small>
            </div>
        </div>
    </div>

    <!-- Valeur de l'Inventaire -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-wallet text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Valeur de l'Inventaire</span>
                <h3 class=\"card-title mb-2\">{{ inventoryValue|number_format(2, '.', ',') }} €</h3>
                <small class=\"text-muted\">Valeur totale de l'inventaire</small>
            </div>
        </div>
    </div>

    <!-- Longueur Moyenne Nom -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
        <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-text text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Longueur Moyenne Nom</span>
                <h3 class=\"card-title mb-2\">{{ averageNameLength|round(1) }} chars</h3>
                <small class=\"text-muted\">Basé sur les noms des matériels</small>
            </div>
        </div>
    </div>

    <!-- Matériels avec État -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <i class=\"uil uil-check text-primary\" style=\"font-size: 2rem;\"></i>
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Matériels avec État</span>
                <h3 class=\"card-title mb-2\">
                    {{ stateDistribution|length ? (totalMateriels - (stateDistribution[''] ?? 0)) : 0 }}/{{ totalMateriels }}
                </h3>
                <small class=\"text-success fw-semibold\">
                    {{ totalMateriels > 0 ? (((totalMateriels - (stateDistribution[''] ?? 0)) / totalMateriels) * 100)|round(1) : 0 }}% Couverture
                </small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Type Distribution Chart (Chart.js) -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Types</h5></div>
            <div class=\"card-body\">
                <canvas id=\"typeChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas>
                {% if typeDistribution|length > 0 %}
                {% else %}
                <p class=\"text-muted\">Aucune donnée disponible.</p>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- State Distribution Chart (Chart.js) -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des États</h5></div>
            <div class=\"card-body\">
                <canvas id=\"stateChartCanvas\" class=\"w-100\" style=\"max-height:300px;\"></canvas>
                {% if stateDistribution|length > 0 %}
                {% else %}
                <p class=\"text-muted\">Aucune donnée disponible.</p>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Top Matériels par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Matériels par Longueur de Nom</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Matériel</th>
                                <th>Longueur Nom</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for material in topMaterialsByNameLength %}
                                <tr>
                                    <td>{{ material['nom'] }}</td>
                                    <td>{{ material['nameLength'] }} chars</td>
                                    <td>
                                        <a href=\"{{ path('app_materiel_showF', {'id': material['id']}) }}\"
                                           class=\"btn btn-sm btn-outline-primary\">Voir</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">Aucun matériel disponible.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Matériels avec Barcode Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Matériels avec Barcode</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Matériel</th>
                                <th>Barcode</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for material in materialsWithBarcodeList %}
                                <tr>
                                    <td>{{ material.nom }}</td>
                                    <td>{{ material.barcode }}</td>
                                    <td>{{ material.type|default('N/A') }}</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">Aucun matériel avec barcode.</td>
                                </tr>
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
    // Couleurs d'état (vert, orange, rouge, gris)
    const statePalette = [
        '#71dd37', // neuf/success
        '#ffab00', // use/warning
        '#ff3e1d', // endommagé/danger
        '#8592a3'  // autre/secondary
    ];

            const typeData = {{ typeDistribution|json_encode|raw }};
            if (Object.keys(typeData).length) {
                // Génère les couleurs pour chaque label
                const typeLabels = Object.keys(typeData);
                const typeColors = typeLabels.map((_, i) => sneatColors[i % sneatColors.length]);
                const typeBorderColors = typeLabels.map((_, i) => sneatColors[i % sneatColors.length]);
                const ctxType = document.getElementById('typeChartCanvas').getContext('2d');
                new Chart(ctxType, {
                    type: 'bar',
                    data: {
                        labels: typeLabels,
                        datasets: [{
                            label: 'Nombre',
                            data: Object.values(typeData),
                            backgroundColor: typeColors,
                            borderColor: typeBorderColors,
                            borderWidth: 1
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
                });
            }

            const stateData = {{ stateDistribution|json_encode|raw }};
            if (Object.keys(stateData).length) {
                // Génère les couleurs pour chaque label
                const stateLabels = Object.keys(stateData);
                const stateColors = stateLabels.map((_, i) => statePalette[i % statePalette.length]);
                const stateBorderColors = stateLabels.map((_, i) => statePalette[i % statePalette.length]);
                const ctxState = document.getElementById('stateChartCanvas').getContext('2d');
                new Chart(ctxState, {
                    type: 'bar',
                    data: {
                        labels: stateLabels,
                        datasets: [{
                            label: 'Nombre',
                            data: Object.values(stateData),
                            backgroundColor: stateColors,
                            borderColor: stateBorderColors,
                            borderWidth: 1
                        }]
                    },
                    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
                });
            }
        });
    </script>
{% endblock %}", "materiel/statistics.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\statistics.html.twig");
    }
}
