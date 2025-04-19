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
class __TwigTemplate_c24800172dea5e776f0d719a2bd1bdd5 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Matériels</h4>

<div class=\"row\">

    <!-- Total Matériels -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/box.png"), "html", null, true);
        yield "\" alt=\"Matériels\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                <h3 class=\"card-title mb-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Matériels enregistrés</small>
            </div>
        </div>
    </div>

    <!-- Types Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/category.png"), "html", null, true);
        yield "\" alt=\"Types\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Types Uniques</span>
                <h3 class=\"card-title mb-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typesCount"]) || array_key_exists("typesCount", $context) ? $context["typesCount"] : (function () { throw new RuntimeError('Variable "typesCount" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Types de matériels distincts</small>
            </div>
        </div>
    </div>

    <!-- Couverture Barcode -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/barcode.png"), "html", null, true);
        yield "\" alt=\"Barcode\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Couverture Barcode</span>
                <h3 class=\"card-title mb-2\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["materialsWithBarcode"]) || array_key_exists("materialsWithBarcode", $context) ? $context["materialsWithBarcode"] : (function () { throw new RuntimeError('Variable "materialsWithBarcode" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["barcodeCoverage"]) || array_key_exists("barcodeCoverage", $context) ? $context["barcodeCoverage"] : (function () { throw new RuntimeError('Variable "barcodeCoverage" does not exist.', 53, $this->source); })()), 1), "html", null, true);
        yield "% Couverture</small>
            </div>
        </div>
    </div>

    <!-- Valeur de l'Inventaire -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/money.png"), "html", null, true);
        yield "\" alt=\"Valeur\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Valeur de l'Inventaire</span>
                <h3 class=\"card-title mb-2\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 68, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " €</h3>
                <small class=\"text-muted\">Valeur totale de l'inventaire</small>
            </div>
        </div>
    </div>

    <!-- Longueur Moyenne Nom -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/text.png"), "html", null, true);
        yield "\" alt=\"Nom\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Longueur Moyenne Nom</span>
                <h3 class=\"card-title mb-2\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageNameLength"]) || array_key_exists("averageNameLength", $context) ? $context["averageNameLength"] : (function () { throw new RuntimeError('Variable "averageNameLength" does not exist.', 84, $this->source); })()), 1), "html", null, true);
        yield " chars</h3>
                <small class=\"text-muted\">Basé sur les noms des matériels</small>
            </div>
        </div>
    </div>

    <!-- Matériels avec État -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/check.png"), "html", null, true);
        yield "\" alt=\"État\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Matériels avec État</span>
                <h3 class=\"card-title mb-2\">
                    ";
        // line 101
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 101, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 101, $this->source); })()) - (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "", [], "array", true, true, false, 101) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 101, $this->source); })()), "", [], "array", false, false, false, 101)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 101, $this->source); })()), "", [], "array", false, false, false, 101)) : (0))), "html", null, true)) : (0));
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "
                </h3>
                <small class=\"text-success fw-semibold\">
                    ";
        // line 104
        yield ((((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 104, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 104, $this->source); })()) - (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "", [], "array", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 104, $this->source); })()), "", [], "array", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 104, $this->source); })()), "", [], "array", false, false, false, 104)) : (0))) / (isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 104, $this->source); })())) * 100), 1), "html", null, true)) : (0));
        yield "% Couverture
                </small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Type Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Types</h5></div>
            <div class=\"card-body\"><div id=\"typeDistributionChart\"></div></div>
        </div>
    </div>

    <!-- State Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par État</h5></div>
            <div class=\"card-body\"><div id=\"stateDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Top Matériels par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
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
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMaterialsByNameLength"]) || array_key_exists("topMaterialsByNameLength", $context) ? $context["topMaterialsByNameLength"] : (function () { throw new RuntimeError('Variable "topMaterialsByNameLength" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 144
            yield "                                <tr>
                                    <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nom", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                                    <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nameLength", [], "any", false, false, false, 146), "html", null, true);
            yield " chars</td>
                                    <td>
                                        <a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_showF", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-outline-primary\">Voir</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun matériel disponible.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['material'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Matériels avec Barcode Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
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
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materialsWithBarcodeList"]) || array_key_exists("materialsWithBarcodeList", $context) ? $context["materialsWithBarcodeList"] : (function () { throw new RuntimeError('Variable "materialsWithBarcodeList" does not exist.', 179, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 180
            yield "                                <tr>
                                    <td>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nom", [], "any", false, false, false, 181), "html", null, true);
            yield "</td>
                                    <td>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "barcode", [], "any", false, false, false, 182), "html", null, true);
            yield "</td>
                                    <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", true, true, false, 183)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", false, false, false, 183), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 185
        if (!$context['_iterated']) {
            // line 186
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun matériel avec barcode.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['material'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tous les Matériels List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Matériels</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allMaterials"]) || array_key_exists("allMaterials", $context) ? $context["allMaterials"] : (function () { throw new RuntimeError('Variable "allMaterials" does not exist.', 203, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 204
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/box.png"), "html", null, true);
            yield "\"
                                     alt=\"Matériel\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "nom", [], "any", false, false, false, 211), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["material"], "type", [], "any", false, false, false, 212), "N/A")) : ("N/A")), "html", null, true);
            yield "</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 215
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["material"], "barcode", [], "any", false, false, false, 215)) ? ("Avec Barcode") : ("Sans Barcode"));
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 219
        if (!$context['_iterated']) {
            // line 220
            yield "                        <li>Aucun matériel trouvé.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['material'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        yield "                </ul>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 229
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

        // line 230
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Type Distribution Chart
            new ApexCharts(document.querySelector(\"#typeDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 238, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((true) ? (Twig\Extension\CoreExtension::default($context["type"], "Non défini")) : ("Non défini")), "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
            }).render();

            // State Distribution Chart
            new ApexCharts(document.querySelector(\"#stateDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de matériels\",
                    data: [";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 247, $this->source); })()));
        foreach ($context['_seq'] as $context["state"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['state'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 250, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((true) ? (Twig\Extension\CoreExtension::default($context["state"], "Non défini")) : ("Non défini")), "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['state'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    labels: { rotate: -45 }
                },
                colors: ['#36A2EB']
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
        return array (  528 => 250,  514 => 247,  493 => 238,  481 => 237,  470 => 230,  457 => 229,  441 => 222,  434 => 220,  432 => 219,  423 => 215,  417 => 212,  413 => 211,  405 => 206,  401 => 204,  396 => 203,  381 => 190,  372 => 186,  370 => 185,  363 => 183,  359 => 182,  355 => 181,  352 => 180,  347 => 179,  323 => 157,  314 => 153,  312 => 152,  303 => 148,  298 => 146,  294 => 145,  291 => 144,  286 => 143,  244 => 104,  236 => 101,  228 => 96,  213 => 84,  206 => 80,  191 => 68,  184 => 64,  170 => 53,  164 => 52,  157 => 48,  142 => 36,  135 => 32,  120 => 20,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Matériels{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Statistiques des Matériels</h4>

<div class=\"row\">

    <!-- Total Matériels -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/box.png') }}\" alt=\"Matériels\" class=\"rounded\" />
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/category.png') }}\" alt=\"Types\" class=\"rounded\" />
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/barcode.png') }}\" alt=\"Barcode\" class=\"rounded\" />
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/money.png') }}\" alt=\"Valeur\" class=\"rounded\" />
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/text.png') }}\" alt=\"Nom\" class=\"rounded\" />
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/check.png') }}\" alt=\"État\" class=\"rounded\" />
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
    <!-- Type Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Types</h5></div>
            <div class=\"card-body\"><div id=\"typeDistributionChart\"></div></div>
        </div>
    </div>

    <!-- State Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par État</h5></div>
            <div class=\"card-body\"><div id=\"stateDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Top Matériels par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
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
                                    <td>{{ material.nom }}</td>
                                    <td>{{ material.nameLength }} chars</td>
                                    <td>
                                        <a href=\"{{ path('app_materiel_showF', {'id': material.id}) }}\"
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
        <div class=\"card\">
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

    <!-- Tous les Matériels List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Matériels</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for material in allMaterials %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ asset('img/icons/unicons/box.png') }}\"
                                     alt=\"Matériel\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ material.nom }}</h6>
                                    <small class=\"text-muted\">{{ material.type|default('N/A') }}</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ material.barcode ? 'Avec Barcode' : 'Sans Barcode' }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>Aucun matériel trouvé.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Type Distribution Chart
            new ApexCharts(document.querySelector(\"#typeDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for type, count in typeDistribution %}{{ count }},{% endfor %}],
                labels: [{% for type in typeDistribution|keys %}'{{ type|default('Non défini') }}',{% endfor %}],
                colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
            }).render();

            // State Distribution Chart
            new ApexCharts(document.querySelector(\"#stateDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de matériels\",
                    data: [{% for state, count in stateDistribution %}{{ count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for state in stateDistribution|keys %}'{{ state|default('Non défini') }}',{% endfor %}],
                    labels: { rotate: -45 }
                },
                colors: ['#36A2EB']
            }).render();
        });
    </script>
{% endblock %}", "materiel/statistics.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\statistics.html.twig");
    }
}
