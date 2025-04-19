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

/* materiel/index.html.twig */
class __TwigTemplate_5c70b982ea033088af46b807352840cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "materiel/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Matériels";
        
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
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 88
        yield "
        ";
        // line 90
        yield "        <div class=\"row mt-4\">
            <!-- Total Materials Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/cube.png"), "html", null, true);
        yield "\"
                                    alt=\"Total Materials\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                        <h3 class=\"card-title mb-2\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Nombre total de matériels</small>
                    </div>
                </div>
            </div>

            <!-- Average Materials per Type Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
        yield "\"
                                    alt=\"Average per Type\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Type</span>
                        <h3 class=\"card-title mb-2\">";
        // line 125
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 125, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 125, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 125, $this->source); })()))), 1), "html", null, true)) : (0));
        yield "</h3>
                        <small class=\"text-muted\">Matériels par type</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    ";
        // line 136
        yield "                    <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 139, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    ";
        // line 146
        yield "                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "type"]);
        yield "\">Par Type</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "etat"]);
        yield "\">Par État</a></li>
                        </ul>
                    </div>

                    ";
        // line 158
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    ";
        // line 163
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Matériel
                    </a>

                    ";
        // line 168
        yield "                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_excel");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> Excel
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_csv");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> CSV
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_pdf");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> PDF
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
    <table class=\"table\" id=\"materielsTable\">
        <thead>
            <tr>
                <th>";
        // line 197
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 197, $this->source); })()), "ID", "m.id");
        yield "</th>
                <th>";
        // line 198
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 198, $this->source); })()), "Nom", "m.nom");
        yield "</th>
                <th>";
        // line 199
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 199, $this->source); })()), "Type", "m.type");
        yield "</th>
                <th>";
        // line 200
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 200, $this->source); })()), "Quantité", "m.quantite");
        yield "</th>
                <th>";
        // line 201
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 201, $this->source); })()), "État", "m.etat");
        yield "</th>
                <th>";
        // line 202
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 202, $this->source); })()), "Prix unitaire", "m.prix");
        yield "</th>
                <th>";
        // line 203
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 203, $this->source); })()), "Code-barres", "m.barcode");
        yield "</th>
                <th>Image</th>
                <th>Fournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=\"table-border-bottom-0\">
            ";
        // line 210
        if ((array_key_exists("pagination", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 210, $this->source); })())) > 0))) {
            // line 211
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 211, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 212
                yield "                    <tr class=\"table-default\">
                        <td><strong>#";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 213), "html", null, true);
                yield "</strong></td>
                        <td>
                            <i class=\"bx bx-package fa-lg text-primary me-3\"></i>
                            <strong>";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 216), "html", null, true);
                yield "</strong>
                        </td>
                        <td>";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 218), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                        <td>";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 219), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                        <td>";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 220), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                        <td>";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 221), 2, ",", " "), "N/A"), "html", null, true);
                yield " €</td>
                        <td>";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 222), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                        <td>
                            ";
                // line 224
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 224)) {
                    // line 225
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 225))), "html", null, true);
                    yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                            ";
                } else {
                    // line 227
                    yield "                                <span class=\"text-muted\">N/A</span>
                            ";
                }
                // line 229
                yield "                        </td>
                        <td>
                            ";
                // line 231
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 231)) {
                    // line 232
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 232), "id_fournisseur", [], "any", false, false, false, 232)]), "html", null, true);
                    yield "\">
                                    ";
                    // line 233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 233), "nom", [], "any", false, false, false, 233), "html", null, true);
                    yield "
                                </a>
                            ";
                } else {
                    // line 236
                    yield "                                <span class=\"text-muted\">N/A</span>
                            ";
                }
                // line 238
                yield "                        </td>
                        <td>
                            <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 245)]), "html", null, true);
                yield "\">
                                        <i class=\"bx bx-show me-1\"></i> Voir
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 248)]), "html", null, true);
                yield "\">
                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                    </a>
                                    <form method=\"post\" action=\"";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 251)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 252))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            yield "            ";
        } else {
            // line 263
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucun matériel trouvé</td>
                </tr>
            ";
        }
        // line 267
        yield "        </tbody>
    </table>
</div>

            ";
        // line 272
        yield "            <div class=\"card-footer\">
    ";
        // line 273
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 273, $this->source); })()));
        yield "
    <div class=\"text-center\">
        <small>
            Page ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 276, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 276), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 276, $this->source); })()), "getPageCount", [], "method", false, false, false, 276), "html", null, true);
        yield " |
            Total Matériels : ";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 277, $this->source); })()), "totalItemCount", [], "any", false, false, false, 277), "html", null, true);
        yield "
        </small>
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
        yield "            <!-- Existing Widgets Section -->
            <div class=\"row\">
                <!-- Total Materials Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-primary p-2\">
                                        <i class=\"bx bx-cube fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                            <h3 class=\"card-title mb-2\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                        </div>
                    </div>
                </div>

                <!-- Types Count Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-info p-2\">
                                        <i class=\"bx bx-category fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Types uniques</span>
                            <h3 class=\"card-title mb-2\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 45, $this->source); })())), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Catégories de matériel</small>
                        </div>
                    </div>
                </div>

                <!-- State Coverage Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-success p-2\">
                                        <i class=\"bx bx-check-circle fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Matériels neufs</span>
                            <h3 class=\"card-title mb-2\">";
        // line 63
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "NEUF", [], "array", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 63, $this->source); })()), "NEUF", [], "array", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 63, $this->source); })()), "NEUF", [], "array", false, false, false, 63), "html", null, true)) : (0));
        yield "</h3>
                            <small class=\"text-muted\">En parfait état</small>
                        </div>
                    </div>
                </div>

                <!-- Inventory Value Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-warning p-2\">
                                        <i class=\"bx bx-dollar fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Valeur totale</span>
                            <h3 class=\"card-title mb-2\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 81, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</h3>
                            <small class=\"text-muted\">Valeur du stock</small>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 286
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

        // line 287
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- No JavaScript needed for search since it's now server-side -->
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
        return "materiel/index.html.twig";
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
        return array (  612 => 287,  599 => 286,  581 => 81,  560 => 63,  539 => 45,  518 => 27,  502 => 13,  489 => 12,  470 => 277,  464 => 276,  458 => 273,  455 => 272,  449 => 267,  443 => 263,  440 => 262,  424 => 252,  420 => 251,  414 => 248,  408 => 245,  399 => 238,  395 => 236,  389 => 233,  384 => 232,  382 => 231,  378 => 229,  374 => 227,  368 => 225,  366 => 224,  361 => 222,  357 => 221,  353 => 220,  349 => 219,  345 => 218,  340 => 216,  334 => 213,  331 => 212,  326 => 211,  324 => 210,  314 => 203,  310 => 202,  306 => 201,  302 => 200,  298 => 199,  294 => 198,  290 => 197,  274 => 184,  266 => 179,  258 => 174,  250 => 168,  242 => 163,  234 => 158,  227 => 153,  223 => 152,  219 => 151,  212 => 146,  203 => 139,  196 => 136,  183 => 125,  173 => 118,  157 => 105,  147 => 98,  137 => 90,  134 => 88,  132 => 12,  128 => 10,  115 => 9,  92 => 7,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Matériels{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        {% block widgets %}
            <!-- Existing Widgets Section -->
            <div class=\"row\">
                <!-- Total Materials Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-primary p-2\">
                                        <i class=\"bx bx-cube fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                            <h3 class=\"card-title mb-2\">{{ totalMateriels }}</h3>
                            <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                        </div>
                    </div>
                </div>

                <!-- Types Count Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-info p-2\">
                                        <i class=\"bx bx-category fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Types uniques</span>
                            <h3 class=\"card-title mb-2\">{{ typeDistribution|length }}</h3>
                            <small class=\"text-muted\">Catégories de matériel</small>
                        </div>
                    </div>
                </div>

                <!-- State Coverage Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-success p-2\">
                                        <i class=\"bx bx-check-circle fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Matériels neufs</span>
                            <h3 class=\"card-title mb-2\">{{ stateDistribution['NEUF'] ?? 0 }}</h3>
                            <small class=\"text-muted\">En parfait état</small>
                        </div>
                    </div>
                </div>

                <!-- Inventory Value Widget -->
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-title d-flex align-items-start justify-content-between\">
                                <div class=\"avatar flex-shrink-0\">
                                    <span class=\"avatar-initial rounded bg-label-warning p-2\">
                                        <i class=\"bx bx-dollar fs-4\"></i>
                                    </span>
                                </div>
                            </div>
                            <span class=\"fw-semibold d-block mb-1\">Valeur totale</span>
                            <h3 class=\"card-title mb-2\">{{ inventoryValue|number_format(2, ',', ' ') }} €</h3>
                            <small class=\"text-muted\">Valeur du stock</small>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

        {# New Simple Widgets Above Table (Adapted for Materiel) #}
        <div class=\"row mt-4\">
            <!-- Total Materials Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('img/icons/unicons/cube.png') }}\"
                                    alt=\"Total Materials\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Matériels</span>
                        <h3 class=\"card-title mb-2\">{{ totalMateriels }}</h3>
                        <small class=\"text-muted\">Nombre total de matériels</small>
                    </div>
                </div>
            </div>

            <!-- Average Materials per Type Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('img/icons/unicons/chart.png') }}\"
                                    alt=\"Average per Type\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Type</span>
                        <h3 class=\"card-title mb-2\">{{ typeDistribution|length > 0 ? (totalMateriels / typeDistribution|length)|round(1) : 0 }}</h3>
                        <small class=\"text-muted\">Matériels par type</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    {# Search Bar Left-Aligned #}
                    <form class=\"d-flex\" method=\"get\" action=\"{{ path('app_materiel_index') }}\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"{{ searchTerm }}\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    {# Filtrer Dropdown #}
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_index', {'filter': 'nom'}) }}\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_index', {'filter': 'type'}) }}\">Par Type</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_index', {'filter': 'etat'}) }}\">Par État</a></li>
                        </ul>
                    </div>

                    {# Statistiques Button #}
                    <a href=\"{{ path('app_materiel_statistics') }}\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    {# Ajouter Matériel Button #}
                    <a href=\"{{ path('app_materiel_new') }}\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Matériel
                    </a>

                    {# Exporter Button #}
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_excel') }}\">
                                    <i class=\"bx bx-file me-1\"></i> Excel
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_csv') }}\">
                                    <i class=\"bx bx-file me-1\"></i> CSV
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_pdf') }}\">
                                    <i class=\"bx bx-file me-1\"></i> PDF
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
    <table class=\"table\" id=\"materielsTable\">
        <thead>
            <tr>
                <th>{{ knp_pagination_sortable(pagination, 'ID', 'm.id') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Nom', 'm.nom') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Type', 'm.type') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Quantité', 'm.quantite') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'État', 'm.etat') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Prix unitaire', 'm.prix') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Code-barres', 'm.barcode') }}</th>
                <th>Image</th>
                <th>Fournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=\"table-border-bottom-0\">
            {% if pagination is defined and pagination|length > 0 %}
                {% for materiel in pagination %}
                    <tr class=\"table-default\">
                        <td><strong>#{{ materiel.id }}</strong></td>
                        <td>
                            <i class=\"bx bx-package fa-lg text-primary me-3\"></i>
                            <strong>{{ materiel.nom }}</strong>
                        </td>
                        <td>{{ materiel.type|default('N/A') }}</td>
                        <td>{{ materiel.quantite|default('N/A') }}</td>
                        <td>{{ materiel.etat|default('N/A') }}</td>
                        <td>{{ materiel.prix|number_format(2, ',', ' ')|default('N/A') }} €</td>
                        <td>{{ materiel.barcode|default('N/A') }}</td>
                        <td>
                            {% if materiel.image %}
                                <img src=\"{{ asset('uploads/materiels/' ~ materiel.image) }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                            {% else %}
                                <span class=\"text-muted\">N/A</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if materiel.fournisseur %}
                                <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': materiel.fournisseur.id_fournisseur}) }}\">
                                    {{ materiel.fournisseur.nom }}
                                </a>
                            {% else %}
                                <span class=\"text-muted\">N/A</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ path('app_materiel_show', {'id': materiel.id}) }}\">
                                        <i class=\"bx bx-show me-1\"></i> Voir
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_materiel_edit', {'id': materiel.id}) }}\">
                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
                                        <button class=\"dropdown-item\" type=\"submit\">
                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucun matériel trouvé</td>
                </tr>
            {% endif %}
        </tbody>
    </table>
</div>

            {# Pagination #}
            <div class=\"card-footer\">
    {{ knp_pagination_render(pagination) }}
    <div class=\"text-center\">
        <small>
            Page {{ pagination.currentPageNumber }} sur {{ pagination.getPageCount() }} |
            Total Matériels : {{ pagination.totalItemCount }}
        </small>
    </div>
</div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- No JavaScript needed for search since it's now server-side -->
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\index.html.twig");
    }
}
