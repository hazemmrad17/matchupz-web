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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        <!-- Congratulatory and Moyenne par Type Widgets -->
        <div class=\"row\">
            <!-- Congratulatory Widget -->
            <div class=\"col-lg-8 col-md-6 mb-4 order-0\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary\">Félicitations Cher Responsable Logistique ! 🎉</h5>
                                <p class=\"mb-4\">
                                    Vous avez ajouté <span class=\"fw-bold\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</span> matériels aujourd'hui. Consultez votre profil pour les mises à jour.
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profil</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\"
                                    height=\"140\"
                                    alt=\"Illustration\"
                                    data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                                    data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Moyenne par Type Widget -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
        yield "\"
                                    alt=\"Average per Type\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Type</span>
                        <h3 class=\"card-title mb-2\">";
        // line 55
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 55, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 55, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 55, $this->source); })()))), 1), "html", null, true)) : (0));
        yield "</h3>
                        <small class=\"text-muted\">Matériels par type</small>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 138
        yield "
        <!-- Toast Notification for Low Quantity -->
        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\">
            <div id=\"lowQuantityToast\" class=\"toast hide bg-danger text-white\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"5000\">
                <div class=\"toast-header bg-danger text-white\">
                    <i class=\"bx bx-bell me-2\"></i>
                    <strong class=\"me-auto\">Alerte Stock</strong>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    La quantité de certains matériels est inférieure à 5. Veuillez commander de nouveaux matériaux.
                </div>
            </div>
        </div>

        <!-- Barcode Scanner Modal -->
        <div class=\"modal fade\" id=\"barcodeScannerModal\" tabindex=\"-1\" aria-labelledby=\"barcodeScannerModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"barcodeScannerModalLabel\">Scanner Code-barres</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <!-- Dans votre modal -->
<div class=\"modal-body\">
    <div class=\"scanner-container\">
        <div id=\"scanner-video\"></div>
        <div class=\"scanner-overlay\"></div>
    </div>
    <div id=\"scanner-result\">
        <div class=\"placeholder-text\">
            <i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre
        </div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
    <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetScanner()\">
        <i class=\"bx bx-refresh\"></i> Nouveau scan
    </button>
</div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    ";
        // line 187
        yield "                    <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 190, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    ";
        // line 197
        yield "                    <button type=\"button\" class=\"btn btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#barcodeScannerModal\">
                        <i class=\"bx bx-barcode me-1\"></i> Scanner
                    </button>
                    ";
        // line 201
        yield "                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "type"]);
        yield "\">Par Type</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "etat"]);
        yield "\">Par État</a></li>
                        </ul>
                    </div>

                    ";
        // line 213
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    ";
        // line 218
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Matériel
                    </a>

                    ";
        // line 223
        yield "                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_excel");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> Excel
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_csv");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> CSV
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 239
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
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>État</th>
                            <th>Prix unitaire</th>
                            <th>Code-barres</th>
                            <th>Fournisseur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 264
        if ((array_key_exists("pagination", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 264, $this->source); })())) > 0))) {
            // line 265
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 265, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 266
                yield "                                <tr class=\"table-default ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 266)) && (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 266) < 5))) {
                    yield "low-quantity";
                }
                yield "\" data-quantity=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 266), "N/A")) : ("N/A")), "html", null, true);
                yield "\">
                                    <td>
                                        ";
                // line 268
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 268)) {
                    // line 269
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 269))), "html", null, true);
                    yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                                        ";
                } else {
                    // line 271
                    yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
                }
                // line 273
                yield "                                    </td>
                                    <td>
                                        <i class=\"bx bx-package fa-lg text-primary me-3\"></i>
                                        <strong>";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 276), "html", null, true);
                yield "</strong>
                                    </td>
                                    <td>";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", true, true, false, 278)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 278), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td>";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", true, true, false, 279)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 279), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td>";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", true, true, false, 280)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 280), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td>";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 281), 2, ",", " "), "N/A"), "html", null, true);
                yield " €</td>
                                    <td>";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", true, true, false, 282)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 282), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 284
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 284)) {
                    // line 285
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 285), "id_fournisseur", [], "any", false, false, false, 285)]), "html", null, true);
                    yield "\">
                                                ";
                    // line 286
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 286), "nom", [], "any", false, false, false, 286), "html", null, true);
                    yield "
                                            </a>
                                        ";
                } else {
                    // line 289
                    yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
                }
                // line 291
                yield "                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 298)]), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 301)]), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 304)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 305))), "html", null, true);
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
            // line 315
            yield "                        ";
        } else {
            // line 316
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
                            </tr>
                        ";
        }
        // line 320
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 325
        yield "            <div class=\"card-footer\">
                ";
        // line 326
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 326, $this->source); })()));
        yield "
                <div class=\"text-center\">
                    <small>
                        Page ";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 329, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 329), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 329, $this->source); })()), "getPageCount", [], "method", false, false, false, 329), "html", null, true);
        yield " |
                        Total Matériels : ";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 330, $this->source); })()), "totalItemCount", [], "any", false, false, false, 330), "html", null, true);
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

    // line 62
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

        // line 63
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
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 77, $this->source); })()), "html", null, true);
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
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 95, $this->source); })())), "html", null, true);
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
        // line 113
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "NEUF", [], "array", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 113, $this->source); })()), "NEUF", [], "array", false, false, false, 113)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 113, $this->source); })()), "NEUF", [], "array", false, false, false, 113), "html", null, true)) : (0));
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
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 131, $this->source); })()), 2, ",", " "), "html", null, true);
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

    // line 339
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

        // line 340
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Debug: Log low quantity rows
            const lowQuantityRows = document.querySelectorAll('.low-quantity');
            console.log('Low quantity rows found:', lowQuantityRows.length);
            lowQuantityRows.forEach(row => {
                console.log('Row Name:', row.querySelector('td:nth-child(2)').textContent, 'Quantity:', row.getAttribute('data-quantity'));
            });

            // Show toast if low quantity rows exist
            if (lowQuantityRows.length > 0) {
                const toastElement = document.getElementById('lowQuantityToast');
                const toast = new bootstrap.Toast(toastElement);
                toast.show();
            }

            // Barcode scanner modal logic
            const scannerModal = document.getElementById('barcodeScannerModal');
            scannerModal.addEventListener('shown.bs.modal', function () {
                initScanner('scanner-video', 'scanner-result');
            });
            scannerModal.addEventListener('hidden.bs.modal', function () {
                Quagga.stop();
                document.getElementById('scanner-result').innerText = '';
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 370
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

        // line 371
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/low_quantity.css"), "html", null, true);
        yield "\">
    <style>
        /* Fallback inline CSS */
        .table#materielsTable th, .table#materielsTable td {
            width: auto;
        }
        .table#materielsTable th:first-child, .table#materielsTable td:first-child {
            width: 70px; /* Fixed width for image column */
            text-align: center;
        }
        .table#materielsTable tbody tr.low-quantity,
        .table#materielsTable tbody tr.low-quantity td {
            background-color: rgba(255, 0, 0, 0.2) !important;
            border: 2px solid red !important;
            animation: blink 1s infinite !important;
        }
        @keyframes blink {
            0% { background-color: rgba(255, 0, 0, 0.2); }
            50% { background-color: rgba(255, 0, 0, 0.5); }
            100% { background-color: rgba(255, 0, 0, 0.2); }
        }
    </style>
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
        return array (  707 => 372,  702 => 371,  689 => 370,  648 => 340,  635 => 339,  617 => 131,  596 => 113,  575 => 95,  554 => 77,  538 => 63,  525 => 62,  506 => 330,  500 => 329,  494 => 326,  491 => 325,  485 => 320,  479 => 316,  476 => 315,  460 => 305,  456 => 304,  450 => 301,  444 => 298,  435 => 291,  431 => 289,  425 => 286,  420 => 285,  418 => 284,  413 => 282,  409 => 281,  405 => 280,  401 => 279,  397 => 278,  392 => 276,  387 => 273,  383 => 271,  377 => 269,  375 => 268,  365 => 266,  360 => 265,  358 => 264,  330 => 239,  322 => 234,  314 => 229,  306 => 223,  298 => 218,  290 => 213,  283 => 208,  279 => 207,  275 => 206,  268 => 201,  263 => 197,  254 => 190,  247 => 187,  197 => 138,  195 => 62,  185 => 55,  175 => 48,  154 => 30,  143 => 22,  129 => 10,  116 => 9,  93 => 7,  81 => 4,  68 => 3,  45 => 1,);
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
        <!-- Congratulatory and Moyenne par Type Widgets -->
        <div class=\"row\">
            <!-- Congratulatory Widget -->
            <div class=\"col-lg-8 col-md-6 mb-4 order-0\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary\">Félicitations Cher Responsable Logistique ! 🎉</h5>
                                <p class=\"mb-4\">
                                    Vous avez ajouté <span class=\"fw-bold\">{{ totalMateriels }}</span> matériels aujourd'hui. Consultez votre profil pour les mises à jour.
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profil</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"{{ asset('img/illustrations/man-with-laptop-light.png') }}\"
                                    height=\"140\"
                                    alt=\"Illustration\"
                                    data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                                    data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Moyenne par Type Widget -->
            <div class=\"col-lg-4 col-md-6 mb-4\">
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

        <!-- Toast Notification for Low Quantity -->
        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\">
            <div id=\"lowQuantityToast\" class=\"toast hide bg-danger text-white\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"5000\">
                <div class=\"toast-header bg-danger text-white\">
                    <i class=\"bx bx-bell me-2\"></i>
                    <strong class=\"me-auto\">Alerte Stock</strong>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    La quantité de certains matériels est inférieure à 5. Veuillez commander de nouveaux matériaux.
                </div>
            </div>
        </div>

        <!-- Barcode Scanner Modal -->
        <div class=\"modal fade\" id=\"barcodeScannerModal\" tabindex=\"-1\" aria-labelledby=\"barcodeScannerModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"barcodeScannerModalLabel\">Scanner Code-barres</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <!-- Dans votre modal -->
<div class=\"modal-body\">
    <div class=\"scanner-container\">
        <div id=\"scanner-video\"></div>
        <div class=\"scanner-overlay\"></div>
    </div>
    <div id=\"scanner-result\">
        <div class=\"placeholder-text\">
            <i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre
        </div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
    <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetScanner()\">
        <i class=\"bx bx-refresh\"></i> Nouveau scan
    </button>
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
                    {# Scanner Button #}
                    <button type=\"button\" class=\"btn btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#barcodeScannerModal\">
                        <i class=\"bx bx-barcode me-1\"></i> Scanner
                    </button>
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
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>État</th>
                            <th>Prix unitaire</th>
                            <th>Code-barres</th>
                            <th>Fournisseur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% if pagination is defined and pagination|length > 0 %}
                            {% for materiel in pagination %}
                                <tr class=\"table-default {% if materiel.quantite is not null and materiel.quantite < 5 %}low-quantity{% endif %}\" data-quantity=\"{{ materiel.quantite|default('N/A') }}\">
                                    <td>
                                        {% if materiel.image %}
                                            <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                                        {% else %}
                                            <span class=\"text-muted\">N/A</span>
                                        {% endif %}
                                    </td>
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
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Debug: Log low quantity rows
            const lowQuantityRows = document.querySelectorAll('.low-quantity');
            console.log('Low quantity rows found:', lowQuantityRows.length);
            lowQuantityRows.forEach(row => {
                console.log('Row Name:', row.querySelector('td:nth-child(2)').textContent, 'Quantity:', row.getAttribute('data-quantity'));
            });

            // Show toast if low quantity rows exist
            if (lowQuantityRows.length > 0) {
                const toastElement = document.getElementById('lowQuantityToast');
                const toast = new bootstrap.Toast(toastElement);
                toast.show();
            }

            // Barcode scanner modal logic
            const scannerModal = document.getElementById('barcodeScannerModal');
            scannerModal.addEventListener('shown.bs.modal', function () {
                initScanner('scanner-video', 'scanner-result');
            });
            scannerModal.addEventListener('hidden.bs.modal', function () {
                Quagga.stop();
                document.getElementById('scanner-result').innerText = '';
            });
        });
    </script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/low_quantity.css') }}\">
    <style>
        /* Fallback inline CSS */
        .table#materielsTable th, .table#materielsTable td {
            width: auto;
        }
        .table#materielsTable th:first-child, .table#materielsTable td:first-child {
            width: 70px; /* Fixed width for image column */
            text-align: center;
        }
        .table#materielsTable tbody tr.low-quantity,
        .table#materielsTable tbody tr.low-quantity td {
            background-color: rgba(255, 0, 0, 0.2) !important;
            border: 2px solid red !important;
            animation: blink 1s infinite !important;
        }
        @keyframes blink {
            0% { background-color: rgba(255, 0, 0, 0.2); }
            50% { background-color: rgba(255, 0, 0, 0.5); }
            100% { background-color: rgba(255, 0, 0, 0.2); }
        }
    </style>
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\index.html.twig");
    }
}
