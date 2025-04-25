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
class __TwigTemplate_8a343a44601c68e081c748e7336279a5 extends Template
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
                            <th>Image Du Matériel</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>État</th>
                            <th>Prix</th>
                            <th>Code-barres</th>
                            <th>Fournisseur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 264, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 265
            yield "                            <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 265) == "ENDOMMAGE")) {
                yield "materiel-endommage";
            }
            yield "\">
                                <td class=\"text-center align-middle\">
                                    ";
            // line 267
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 267)) {
                // line 268
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 268))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 268), "html", null, true);
                yield "\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            } else {
                // line 270
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-material.png"), "html", null, true);
                yield "\" alt=\"Image par défaut\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            }
            // line 272
            yield "                                </td>
                                <td>";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 273), "html", null, true);
            yield "</td>
                                <td>
                                    <i class=\"bx bx-category me-1\"></i>
                                    ";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 276), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-package me-1\"></i>
                                    ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 280), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 283
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 283) == "NEUF")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 283) == "USÉ")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                        <i class=\"bx ";
            // line 284
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 284) == "NEUF")) {
                yield "bx-check-circle";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 284) == "USÉ")) {
                yield "bx-time";
            } else {
                yield "bx-error-circle";
            }
            yield " me-1\"></i>
                                        ";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 285), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <i class=\"bx bx-euro me-1\"></i>
                                    ";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 290), 2, ",", " "), "html", null, true);
            yield " €
                                </td>
                                <td>
                                    <i class=\"bx bx-barcode me-1\"></i>
                                    ";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 294), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-store me-1\"></i>
                                    ";
            // line 298
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 298)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 298), "nom", [], "any", false, false, false, 298), "html", null, true)) : ("N/A"));
            yield "
                                </td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 306)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 313))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"dropdown-item text-danger\">
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
        // line 322
        if (!$context['_iterated']) {
            // line 323
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 332
        yield "            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        ";
        // line 335
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 335, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 335) > 1)) {
            // line 336
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 337, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 337) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                    <i class=\"bx bx-chevron-left\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 342
        yield "                        
                        ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 343, $this->source); })()), "getPageCount", [], "method", false, false, false, 343)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 344
            yield "                            <li class=\"page-item ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 344, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 344))) {
                yield "active";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "                        
                        ";
        // line 349
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 349, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 349) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 349, $this->source); })()), "getPageCount", [], "method", false, false, false, 349))) {
            // line 350
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 351, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 351) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                    <i class=\"bx bx-chevron-right\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 356
        yield "                    </ul>
                </nav>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
                        Page ";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 360, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 360), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 360, $this->source); })()), "getPageCount", [], "method", false, false, false, 360), "html", null, true);
        yield " |
                        Total Matériels : ";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 361, $this->source); })()), "totalItemCount", [], "any", false, false, false, 361), "html", null, true);
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

    // line 370
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

        // line 371
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    console.log('AJAX search script loaded');
    const baseUrl = \"";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_search");
        yield "\";
    console.log('Base search URL:', baseUrl);
    const input = document.querySelector('input[name=\"search\"]');
    const tbody = document.querySelector('#materielsTable tbody');
    if (input && tbody) {
      let timeout;
      input.addEventListener('input', e => {
        clearTimeout(timeout);
        timeout = setTimeout(async () => {
          const term = e.target.value.trim();
          console.log('Recherche AJAX:', term);
          try {
            const res = await fetch(baseUrl + \"?term=\" + encodeURIComponent(term), {
              headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
            });
            if (!res.ok) throw new Error(`HTTP status \${res.status}`);
            const data = await res.json();
            tbody.innerHTML = data.length
              ? data.map(m => `
                  <tr>
                    <td class=\"text-center align-middle\">
                      <img src=\"\${m.image?'/uploads/materiels/'+m.image:'/img/default-material.png'}\" class=\"rounded-circle mx-auto d-block\" style=\"width:45px;height:45px;object-fill:cover;\">
                    </td>
                    <td>\${m.nom}</td>
                    <td><i class=\"bx bx-category me-1\"></i>\${m.type}</td>
                    <td><i class=\"bx bx-package me-1\"></i>\${m.quantite}</td>
                    <td><span class=\"badge \${m.etat==='NEUF'?'bg-success':m.etat==='USÉ'?'bg-warning':'bg-danger'}\"><i class=\"bx \${m.etat==='NEUF'?'bx-check-circle':m.etat==='USÉ'?'bx-time':'bx-error-circle'} me-1\"></i>\${m.etat}</span></td>
                    <td><i class=\"bx bx-euro me-1\"></i>\${parseFloat(m.prix).toFixed(2)} €</td>
                    <td><i class=\"bx bx-barcode me-1\"></i>\${m.barcode}</td>
                    <td><i class=\"bx bx-store me-1\"></i>\${m.fournisseur||'N/A'}</td>
                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/materiel/\${m.id}\">
                                    <i class=\"bx bx-show me-1\"></i> Voir
                                </a>
                                <a class=\"dropdown-item\" href=\"/materiel/\${m.id}/edit\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"/materiel/\${m.id}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"\${m._token}\">
                                    <button type=\"submit\" class=\"dropdown-item text-danger\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                  </tr>
                `).join('')
              : `<tr><td colspan=\"9\" class=\"text-center\">Aucun résultat</td></tr>`;
          } catch (err) {
            console.error('Erreur AJAX:', err);
          }
        }, 300);
      });
    }
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 437
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

        // line 438
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/low_quantity.css"), "html", null, true);
        yield "\">
    <style>
        /* Fallback inline CSS */
        .table#materielsTable th, .table#materielsTable td {
            width: auto;
        }
        .table#materielsTable th:first-child, .table#materielsTable td:first-child {
            width: 50px;
            text-align: center;
            padding: 2px;
            vertical-align: middle;
        }
        
        /* Style pour les matériels endommagés */
        .materiel-endommage {
            background-color: #ffebee !important;
            animation: blinkRed 1s infinite;
        }
        
        .materiel-endommage td {
            background-color: #ffebee !important;
            border: 2px solid #f44336 !important;
        }
        
        .materiel-endommage:hover {
            background-color: #ffcdd2 !important;
        }
        
        .materiel-endommage:hover td {
            background-color: #ffcdd2 !important;
        }
        
        /* Effet de survol sur les lignes */
        .table#materielsTable tbody tr:hover {
            background-color: rgba(0,0,0,.03);
            transition: background-color 0.2s ease;
        }
        
        /* Style pour les badges */
        .badge {
            padding: 0.5em 0.8em;
            font-weight: 500;
        }
        
        /* Style pour le bouton d'actions */
        .btn-icon {
            padding: 0.25rem;
            line-height: 1;
        }
        
        /* Blinking animation */
        @keyframes blinkRed {
            0% {
                background-color: #ffebee;
                border-color: #f44336;
            }
            50% {
                background-color: #f44336;
                border-color: #d32f2f;
            }
            100% {
                background-color: #ffebee;
                border-color: #f44336;
            }
        }
        
        /* Style pour la pagination */
        .pagination {
            margin: 1rem 0;
        }
        
        .pagination .page-item .page-link {
            color: #566a7f;
            border: 1px solid #d9dee3;
            padding: 0.5rem 0.75rem;
            margin: 0 2px;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            background-color: #fff;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #696cff;
            border-color: #696cff;
            color: #fff;
            box-shadow: 0 2px 4px rgba(105, 108, 255, 0.2);
        }
        
        .pagination .page-item .page-link:hover {
            background-color: #f5f5f9;
            border-color: #696cff;
            color: #696cff;
            transform: translateY(-1px);
        }
        
        .pagination .page-item.disabled .page-link {
            color: #a3a4cc;
            pointer-events: none;
            background-color: #fff;
            border-color: #d9dee3;
        }
        
        .card-footer {
            background-color: #fff;
            border-top: 1px solid #d9dee3;
            padding: 1rem;
        }
        
        .card-footer .text-center small {
            color: #566a7f;
            font-size: 0.875rem;
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
        return array (  820 => 439,  815 => 438,  802 => 437,  729 => 374,  722 => 371,  709 => 370,  691 => 131,  670 => 113,  649 => 95,  628 => 77,  612 => 63,  599 => 62,  580 => 361,  574 => 360,  568 => 356,  560 => 351,  557 => 350,  555 => 349,  552 => 348,  541 => 345,  534 => 344,  530 => 343,  527 => 342,  519 => 337,  516 => 336,  514 => 335,  509 => 332,  503 => 327,  494 => 323,  492 => 322,  478 => 313,  474 => 312,  468 => 309,  462 => 306,  451 => 298,  444 => 294,  437 => 290,  429 => 285,  419 => 284,  409 => 283,  403 => 280,  396 => 276,  390 => 273,  387 => 272,  381 => 270,  373 => 268,  371 => 267,  363 => 265,  358 => 264,  330 => 239,  322 => 234,  314 => 229,  306 => 223,  298 => 218,  290 => 213,  283 => 208,  279 => 207,  275 => 206,  268 => 201,  263 => 197,  254 => 190,  247 => 187,  197 => 138,  195 => 62,  185 => 55,  175 => 48,  154 => 30,  143 => 22,  129 => 10,  116 => 9,  93 => 7,  81 => 4,  68 => 3,  45 => 1,);
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
                            <th>Image Du Matériel</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>État</th>
                            <th>Prix</th>
                            <th>Code-barres</th>
                            <th>Fournisseur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for materiel in pagination %}
                            <tr class=\"{% if materiel.etat == 'ENDOMMAGE' %}materiel-endommage{% endif %}\">
                                <td class=\"text-center align-middle\">
                                    {% if materiel.image %}
                                        <img src=\"{{ asset('uploads/materiels/' ~ materiel.image) }}\" alt=\"{{ materiel.nom }}\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    {% else %}
                                        <img src=\"{{ asset('img/default-material.png') }}\" alt=\"Image par défaut\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    {% endif %}
                                </td>
                                <td>{{ materiel.nom }}</td>
                                <td>
                                    <i class=\"bx bx-category me-1\"></i>
                                    {{ materiel.type }}
                                </td>
                                <td>
                                    <i class=\"bx bx-package me-1\"></i>
                                    {{ materiel.quantite }}
                                </td>
                                <td>
                                    <span class=\"badge {% if materiel.etat == 'NEUF' %}bg-success{% elseif materiel.etat == 'USÉ' %}bg-warning{% else %}bg-danger{% endif %}\">
                                        <i class=\"bx {% if materiel.etat == 'NEUF' %}bx-check-circle{% elseif materiel.etat == 'USÉ' %}bx-time{% else %}bx-error-circle{% endif %} me-1\"></i>
                                        {{ materiel.etat }}
                                    </span>
                                </td>
                                <td>
                                    <i class=\"bx bx-euro me-1\"></i>
                                    {{ materiel.prix|number_format(2, ',', ' ') }} €
                                </td>
                                <td>
                                    <i class=\"bx bx-barcode me-1\"></i>
                                    {{ materiel.barcode }}
                                </td>
                                <td>
                                    <i class=\"bx bx-store me-1\"></i>
                                    {{ materiel.fournisseur ? materiel.fournisseur.nom : 'N/A' }}
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
                                            <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
                                                <button type=\"submit\" class=\"dropdown-item text-danger\">
                                                    <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {# Pagination #}
            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        {% if pagination.currentPageNumber > 1 %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                                    <i class=\"bx bx-chevron-left\"></i>
                                </a>
                            </li>
                        {% endif %}
                        
                        {% for i in 1..pagination.getPageCount() %}
                            <li class=\"page-item {% if i == pagination.currentPageNumber %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': i}) }}\">{{ i }}</a>
                            </li>
                        {% endfor %}
                        
                        {% if pagination.currentPageNumber < pagination.getPageCount() %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                                    <i class=\"bx bx-chevron-right\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
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
    console.log('AJAX search script loaded');
    const baseUrl = \"{{ path('app_materiel_search') }}\";
    console.log('Base search URL:', baseUrl);
    const input = document.querySelector('input[name=\"search\"]');
    const tbody = document.querySelector('#materielsTable tbody');
    if (input && tbody) {
      let timeout;
      input.addEventListener('input', e => {
        clearTimeout(timeout);
        timeout = setTimeout(async () => {
          const term = e.target.value.trim();
          console.log('Recherche AJAX:', term);
          try {
            const res = await fetch(baseUrl + \"?term=\" + encodeURIComponent(term), {
              headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
            });
            if (!res.ok) throw new Error(`HTTP status \${res.status}`);
            const data = await res.json();
            tbody.innerHTML = data.length
              ? data.map(m => `
                  <tr>
                    <td class=\"text-center align-middle\">
                      <img src=\"\${m.image?'/uploads/materiels/'+m.image:'/img/default-material.png'}\" class=\"rounded-circle mx-auto d-block\" style=\"width:45px;height:45px;object-fill:cover;\">
                    </td>
                    <td>\${m.nom}</td>
                    <td><i class=\"bx bx-category me-1\"></i>\${m.type}</td>
                    <td><i class=\"bx bx-package me-1\"></i>\${m.quantite}</td>
                    <td><span class=\"badge \${m.etat==='NEUF'?'bg-success':m.etat==='USÉ'?'bg-warning':'bg-danger'}\"><i class=\"bx \${m.etat==='NEUF'?'bx-check-circle':m.etat==='USÉ'?'bx-time':'bx-error-circle'} me-1\"></i>\${m.etat}</span></td>
                    <td><i class=\"bx bx-euro me-1\"></i>\${parseFloat(m.prix).toFixed(2)} €</td>
                    <td><i class=\"bx bx-barcode me-1\"></i>\${m.barcode}</td>
                    <td><i class=\"bx bx-store me-1\"></i>\${m.fournisseur||'N/A'}</td>
                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/materiel/\${m.id}\">
                                    <i class=\"bx bx-show me-1\"></i> Voir
                                </a>
                                <a class=\"dropdown-item\" href=\"/materiel/\${m.id}/edit\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"/materiel/\${m.id}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"\${m._token}\">
                                    <button type=\"submit\" class=\"dropdown-item text-danger\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                  </tr>
                `).join('')
              : `<tr><td colspan=\"9\" class=\"text-center\">Aucun résultat</td></tr>`;
          } catch (err) {
            console.error('Erreur AJAX:', err);
          }
        }, 300);
      });
    }
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
            width: 50px;
            text-align: center;
            padding: 2px;
            vertical-align: middle;
        }
        
        /* Style pour les matériels endommagés */
        .materiel-endommage {
            background-color: #ffebee !important;
            animation: blinkRed 1s infinite;
        }
        
        .materiel-endommage td {
            background-color: #ffebee !important;
            border: 2px solid #f44336 !important;
        }
        
        .materiel-endommage:hover {
            background-color: #ffcdd2 !important;
        }
        
        .materiel-endommage:hover td {
            background-color: #ffcdd2 !important;
        }
        
        /* Effet de survol sur les lignes */
        .table#materielsTable tbody tr:hover {
            background-color: rgba(0,0,0,.03);
            transition: background-color 0.2s ease;
        }
        
        /* Style pour les badges */
        .badge {
            padding: 0.5em 0.8em;
            font-weight: 500;
        }
        
        /* Style pour le bouton d'actions */
        .btn-icon {
            padding: 0.25rem;
            line-height: 1;
        }
        
        /* Blinking animation */
        @keyframes blinkRed {
            0% {
                background-color: #ffebee;
                border-color: #f44336;
            }
            50% {
                background-color: #f44336;
                border-color: #d32f2f;
            }
            100% {
                background-color: #ffebee;
                border-color: #f44336;
            }
        }
        
        /* Style pour la pagination */
        .pagination {
            margin: 1rem 0;
        }
        
        .pagination .page-item .page-link {
            color: #566a7f;
            border: 1px solid #d9dee3;
            padding: 0.5rem 0.75rem;
            margin: 0 2px;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            background-color: #fff;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #696cff;
            border-color: #696cff;
            color: #fff;
            box-shadow: 0 2px 4px rgba(105, 108, 255, 0.2);
        }
        
        .pagination .page-item .page-link:hover {
            background-color: #f5f5f9;
            border-color: #696cff;
            color: #696cff;
            transform: translateY(-1px);
        }
        
        .pagination .page-item.disabled .page-link {
            color: #a3a4cc;
            pointer-events: none;
            background-color: #fff;
            border-color: #d9dee3;
        }
        
        .card-footer {
            background-color: #fff;
            border-top: 1px solid #d9dee3;
            padding: 1rem;
        }
        
        .card-footer .text-center small {
            color: #566a7f;
            font-size: 0.875rem;
        }
    </style>
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\index.html.twig");
    }
}
