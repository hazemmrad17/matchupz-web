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
class __TwigTemplate_6d63758a47dc549a681b58faa2ddad53 extends Template
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
        yield "\" alt=\"Fournisseurs\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                <h3 class=\"card-title mb-2\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Fournisseurs enregistrés</small>
            </div>
        </div>
    </div>

    <!-- Catégories Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/category.png"), "html", null, true);
        yield "\" alt=\"Catégories\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Catégories Uniques</span>
                <h3 class=\"card-title mb-2\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Types de produits distincts</small>
            </div>
        </div>
    </div>

    <!-- Couverture Email -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/email.png"), "html", null, true);
        yield "\" alt=\"Email\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Couverture Email</span>
                <h3 class=\"card-title mb-2\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["suppliersWithEmail"]) || array_key_exists("suppliersWithEmail", $context) ? $context["suppliersWithEmail"] : (function () { throw new RuntimeError('Variable "suppliersWithEmail" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 54, $this->source); })()), 1), "html", null, true);
        yield "% Couverture</small>
            </div>
        </div>
    </div>

    <!-- Fournisseurs par Région -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/map.png"), "html", null, true);
        yield "\" alt=\"Régions\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Fournisseurs par Région</span>
                <h3 class=\"card-title mb-2\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["regionsCount"]) || array_key_exists("regionsCount", $context) ? $context["regionsCount"] : (function () { throw new RuntimeError('Variable "regionsCount" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Régions géographiques distinctes</small>
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
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/text.png"), "html", null, true);
        yield "\" alt=\"Nom\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Longueur Moyenne Nom</span>
                <h3 class=\"card-title mb-2\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageNameLength"]) || array_key_exists("averageNameLength", $context) ? $context["averageNameLength"] : (function () { throw new RuntimeError('Variable "averageNameLength" does not exist.', 85, $this->source); })()), 1), "html", null, true);
        yield " chars</h3>
                <small class=\"text-muted\">Basé sur les noms des fournisseurs</small>
            </div>
        </div>
    </div>

    <!-- Adresses Remplies -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/address.png"), "html", null, true);
        yield "\" alt=\"Adresse\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Adresses Remplies</span>
                <h3 class=\"card-title mb-2\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["suppliersWithAddress"]) || array_key_exists("suppliersWithAddress", $context) ? $context["suppliersWithAddress"] : (function () { throw new RuntimeError('Variable "suppliersWithAddress" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["addressCoverage"]) || array_key_exists("addressCoverage", $context) ? $context["addressCoverage"] : (function () { throw new RuntimeError('Variable "addressCoverage" does not exist.', 102, $this->source); })()), 1), "html", null, true);
        yield "% Couverture</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Catégorie Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Catégories</h5></div>
            <div class=\"card-body\"><div id=\"categoryDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Localisation Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Localisation</h5></div>
            <div class=\"card-body\"><div id=\"locationDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Top Fournisseurs par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Fournisseurs par Longueur de Nom</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Fournisseur</th>
                                <th>Longueur Nom</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topSuppliersByNameLength"]) || array_key_exists("topSuppliersByNameLength", $context) ? $context["topSuppliersByNameLength"] : (function () { throw new RuntimeError('Variable "topSuppliersByNameLength" does not exist.', 140, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 141
            yield "                                <tr>
                                    <td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                                    <td>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nameLength", [], "any", false, false, false, 143), "html", null, true);
            yield " chars</td>
                                    <td>
                                        <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-outline-primary\">Voir</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun fournisseur disponible.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Fournisseurs avec Email Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Fournisseurs avec Email</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Fournisseur</th>
                                <th>Email</th>
                                <th>Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliersWithEmailList"]) || array_key_exists("suppliersWithEmailList", $context) ? $context["suppliersWithEmailList"] : (function () { throw new RuntimeError('Variable "suppliersWithEmailList" does not exist.', 176, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 177
            yield "                                <tr>
                                    <td>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 178), "html", null, true);
            yield "</td>
                                    <td>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                                    <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 180), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 182
        if (!$context['_iterated']) {
            // line 183
            yield "                                <tr>
                                    <td colspan=\"3\">Aucun fournisseur avec email.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tous les Fournisseurs List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Fournisseurs</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSuppliers"]) || array_key_exists("allSuppliers", $context) ? $context["allSuppliers"] : (function () { throw new RuntimeError('Variable "allSuppliers" does not exist.', 200, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 201
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
            yield "\"
                                     alt=\"Fournisseur\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 208), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 209), "N/A")) : ("N/A")), "html", null, true);
            yield "</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 212
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 212)) ? ("Avec Email") : ("Sans Email"));
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 216
        if (!$context['_iterated']) {
            // line 217
            yield "                        <li>Aucun fournisseur trouvé.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
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

    // line 226
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

        // line 227
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Category Distribution Chart
            new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 234, $this->source); })()));
        foreach ($context['_seq'] as $context["category"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 235, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((true) ? (Twig\Extension\CoreExtension::default($context["category"], "Non défini")) : ("Non défini")), "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
            }).render();

            // Location Distribution Chart
            new ApexCharts(document.querySelector(\"#locationDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de fournisseurs\",
                    data: [";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["location"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['location'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 247, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((true) ? (Twig\Extension\CoreExtension::default($context["location"], "Non défini")) : ("Non défini")), "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
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
        return array (  524 => 247,  510 => 244,  489 => 235,  477 => 234,  466 => 227,  453 => 226,  437 => 219,  430 => 217,  428 => 216,  419 => 212,  413 => 209,  409 => 208,  401 => 203,  397 => 201,  392 => 200,  377 => 187,  368 => 183,  366 => 182,  359 => 180,  355 => 179,  351 => 178,  348 => 177,  343 => 176,  319 => 154,  310 => 150,  308 => 149,  299 => 145,  294 => 143,  290 => 142,  287 => 141,  282 => 140,  241 => 102,  235 => 101,  228 => 97,  213 => 85,  206 => 81,  191 => 69,  184 => 65,  170 => 54,  164 => 53,  157 => 49,  142 => 37,  135 => 33,  120 => 21,  113 => 17,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
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
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"Fournisseurs\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                <h3 class=\"card-title mb-2\">{{ totalSuppliers }}</h3>
                <small class=\"text-muted\">Fournisseurs enregistrés</small>
            </div>
        </div>
    </div>

    <!-- Catégories Uniques -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/category.png') }}\" alt=\"Catégories\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Catégories Uniques</span>
                <h3 class=\"card-title mb-2\">{{ categoriesCount }}</h3>
                <small class=\"text-muted\">Types de produits distincts</small>
            </div>
        </div>
    </div>

    <!-- Couverture Email -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/email.png') }}\" alt=\"Email\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Couverture Email</span>
                <h3 class=\"card-title mb-2\">{{ suppliersWithEmail }}/{{ totalSuppliers }}</h3>
                <small class=\"text-success fw-semibold\">{{ emailCoverage|round(1) }}% Couverture</small>
            </div>
        </div>
    </div>

    <!-- Fournisseurs par Région -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/map.png') }}\" alt=\"Régions\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Fournisseurs par Région</span>
                <h3 class=\"card-title mb-2\">{{ regionsCount }}</h3>
                <small class=\"text-muted\">Régions géographiques distinctes</small>
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
                <small class=\"text-muted\">Basé sur les noms des fournisseurs</small>
            </div>
        </div>
    </div>

    <!-- Adresses Remplies -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/address.png') }}\" alt=\"Adresse\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Adresses Remplies</span>
                <h3 class=\"card-title mb-2\">{{ suppliersWithAddress }}/{{ totalSuppliers }}</h3>
                <small class=\"text-success fw-semibold\">{{ addressCoverage|round(1) }}% Couverture</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Catégorie Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des Catégories</h5></div>
            <div class=\"card-body\"><div id=\"categoryDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Localisation Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Localisation</h5></div>
            <div class=\"card-body\"><div id=\"locationDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Top Fournisseurs par Nom Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Fournisseurs par Longueur de Nom</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Fournisseur</th>
                                <th>Longueur Nom</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for fournisseur in topSuppliersByNameLength %}
                                <tr>
                                    <td>{{ fournisseur.nom }}</td>
                                    <td>{{ fournisseur.nameLength }} chars</td>
                                    <td>
                                        <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': fournisseur.id_fournisseur}) }}\"
                                           class=\"btn btn-sm btn-outline-primary\">Voir</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">Aucun fournisseur disponible.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Fournisseurs avec Email Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Fournisseurs avec Email</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Fournisseur</th>
                                <th>Email</th>
                                <th>Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for fournisseur in suppliersWithEmailList %}
                                <tr>
                                    <td>{{ fournisseur.nom }}</td>
                                    <td>{{ fournisseur.email }}</td>
                                    <td>{{ fournisseur.categorie_produit|default('N/A') }}</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">Aucun fournisseur avec email.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tous les Fournisseurs List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Fournisseurs</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for fournisseur in allSuppliers %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ asset('img/icons/unicons/building.png') }}\"
                                     alt=\"Fournisseur\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ fournisseur.nom }}</h6>
                                    <small class=\"text-muted\">{{ fournisseur.categorie_produit|default('N/A') }}</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ fournisseur.email ? 'Avec Email' : 'Sans Email' }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>Aucun fournisseur trouvé.</li>
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
            // Category Distribution Chart
            new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for category, count in categoryDistribution %}{{ count }},{% endfor %}],
                labels: [{% for category in categoryDistribution|keys %}'{{ category|default('Non défini') }}',{% endfor %}],
                colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
            }).render();

            // Location Distribution Chart
            new ApexCharts(document.querySelector(\"#locationDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de fournisseurs\",
                    data: [{% for location, count in locationDistribution %}{{ count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for location in locationDistribution|keys %}'{{ location|default('Non défini') }}',{% endfor %}],
                    labels: { rotate: -45 }
                },
                colors: ['#36A2EB']
            }).render();
        });
    </script>
{% endblock %}", "fournisseur/statistics.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\fournisseur\\statistics.html.twig");
    }
}
