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
            'head' => [$this, 'block_head'],
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

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <meta name=\"csrf-token\" content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("slack_notify"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
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
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</span> matériels aujourd'hui. Consultez votre profil pour les mises à jour.
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profil</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"";
        // line 34
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
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
        yield "\"
                                    alt=\"Average per Type\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Type</span>
                        <h3 class=\"card-title mb-2\">";
        // line 59
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 59, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 59, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 59, $this->source); })()))), 1), "html", null, true)) : (0));
        yield "</h3>
                        <small class=\"text-muted\">Matériels par type</small>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 66
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 142
        yield "
        <!-- Slack Notification Toast -->
        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\">
            <div id=\"slackNotificationToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"5000\">
                <div class=\"toast-header bg-success text-white\">
                    <i class=\"bx bx-check-circle me-2\"></i>
                    <strong class=\"me-auto\">Notification envoyée</strong>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    La notification Slack a été envoyée avec succès !
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
        // line 190
        yield "                    <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 193, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    ";
        // line 200
        yield "                    <button type=\"button\" class=\"btn btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#barcodeScannerModal\">
                        <i class=\"bx bx-barcode me-1\"></i> Scanner
                    </button>
                    ";
        // line 204
        yield "                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "type"]);
        yield "\">Par Type</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["filter" => "etat"]);
        yield "\">Par État</a></li>
                        </ul>
                    </div>

                    ";
        // line 216
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    ";
        // line 221
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Matériel
                    </a>

                    ";
        // line 226
        yield "                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_excel");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> Excel
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_csv");
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> CSV
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 242
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
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 267, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 268
            yield "                            <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 268) == "ENDOMMAGE")) {
                yield "materiel-endommage";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 268) < 5)) {
                yield " low-stock blinking";
            }
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 268) < 5)) {
                yield " style=\"background-color: #ffb3b3 !important; color: #a30000 !important; animation: blink-pastel 1s linear infinite !important;\"";
            }
            yield ">
                                <td class=\"text-center align-middle\">
                                    ";
            // line 270
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 270)) {
                // line 271
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 271))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 271), "html", null, true);
                yield "\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            } else {
                // line 273
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-material.png"), "html", null, true);
                yield "\" alt=\"Image par défaut\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            }
            // line 275
            yield "                                </td>
                                <td>";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 276), "html", null, true);
            yield "</td>
                                <td>
                                    <i class=\"bx bx-category me-1\"></i>
                                    ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 279), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-package me-1\"></i>
                                    ";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 283), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 286
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 286) == "NEUF")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 286) == "USÉ")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 286) < 5)) {
                yield " style=\"background: none !important; color: #a30000 !important; animation: none !important;\"";
            }
            yield ">
                                        <i class=\"bx ";
            // line 287
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 287) == "NEUF")) {
                yield "bx-check-circle";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 287) == "USÉ")) {
                yield "bx-time";
            } else {
                yield "bx-error-circle";
            }
            yield " me-1\"></i>
                                        ";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 288), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <i class=\"bx bx-euro me-1\"></i>
                                    ";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 293), 2, ",", " "), "html", null, true);
            yield " €
                                </td>
                                <td>
                                    <i class=\"bx bx-barcode me-1\"></i>
                                    ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 297), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-store me-1\"></i>
                                    ";
            // line 301
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 301)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 301), "nom", [], "any", false, false, false, 301), "html", null, true)) : ("N/A"));
            yield "
                                </td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            ";
            // line 315
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 315) < 5)) {
                // line 316
                yield "                                                <button class=\"dropdown-item notify-slack\" data-material-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 316), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-bell me-1\"></i> Notifier Slack
                                                </button>
                                            ";
            }
            // line 320
            yield "                                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 320)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 321))), "html", null, true);
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
        // line 330
        if (!$context['_iterated']) {
            // line 331
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 340
        yield "            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        ";
        // line 343
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 343, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 343) > 1)) {
            // line 344
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 345, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 345) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                    <i class=\"bx bx-chevron-left\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 350
        yield "                        
                        ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 351, $this->source); })()), "getPageCount", [], "method", false, false, false, 351)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 352
            yield "                            <li class=\"page-item ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 352, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 352))) {
                yield "active";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 353
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
        // line 356
        yield "                        
                        ";
        // line 357
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 357, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 357) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 357, $this->source); })()), "getPageCount", [], "method", false, false, false, 357))) {
            // line 358
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 359, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 359) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                    <i class=\"bx bx-chevron-right\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 364
        yield "                    </ul>
                </nav>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
                        Page ";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 368, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 368), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 368, $this->source); })()), "getPageCount", [], "method", false, false, false, 368), "html", null, true);
        yield " |
                        Total Matériels : ";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 369, $this->source); })()), "totalItemCount", [], "any", false, false, false, 369), "html", null, true);
        yield "
                    </div>
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

    // line 66
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

        // line 67
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
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 81, $this->source); })()), "html", null, true);
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
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 99, $this->source); })())), "html", null, true);
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
        // line 117
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "NEUF", [], "array", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 117, $this->source); })()), "NEUF", [], "array", false, false, false, 117)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 117, $this->source); })()), "NEUF", [], "array", false, false, false, 117), "html", null, true)) : (0));
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
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 135, $this->source); })()), 2, ",", " "), "html", null, true);
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

    // line 378
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

        // line 379
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        console.log('AJAX search script loaded');
        const baseUrl = \"";
        // line 382
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
                        ";
        // line 438
        yield "
                        tbody.innerHTML = data.length
                            ? data.map(m => `
                                <tr class=\"\${m.etat === 'ENDOMMAGE' ? 'materiel-endommage' : ''} \${m.quantite < 5 ? 'low-stock' : ''}\">
                                    <td class=\"text-center align-middle\">
                                        <img src=\"\${m.image ? '/Uploads/materiels/' + m.image : '/img/default-material.png'}\" alt=\"\${m.nom}\" class=\"rounded-circle mx-auto d-block\" style=\"width:45px;height:45px;object-fit:cover;\">
                                    </td>
                                    <td>\${m.nom}</td>
                                    <td><i class=\"bx bx-category me-1\"></i>\${m.type}</td>
                                    <td><i class=\"bx bx-package me-1\"></i>\${m.quantite}</td>
                                    <td><span class=\"badge \${m.etat === 'NEUF' ? 'bg-success' : m.etat === 'USÉ' ? 'bg-warning' : 'bg-danger'}\"><i class=\"bx \${m.etat === 'NEUF' ? 'bx-check-circle' : m.etat === 'USÉ' ? 'bx-time' : 'bx-error-circle'} me-1\"></i>\${m.etat}</span></td>
                                    <td><i class=\"bx bx-euro me-1\"></i>\${parseFloat(m.prix).toFixed(2)} €</td>
                                    <td><i class=\"bx bx-barcode me-1\"></i>\${m.barcode}</td>
                                    <td><i class=\"bx bx-store me-1\"></i>\${m.fournisseur || 'N/A'}</td>
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
                                                \${m.quantite < 5 ? `<button class=\"dropdown-item notify-slack\" data-material-id=\"\${m.id}\"><i class=\"bx bx-bell me-1\"></i> Notifier Slack</button>` : ''}
                                                <form method=\"post\" action=\"/materiel/\${m.id}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"\${m.deleteToken}\">
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
                        ";
        yield "
                    } catch (err) {
                        console.error('Erreur AJAX:', err);
                        tbody.innerHTML = `<tr><td colspan=\"9\" class=\"text-center\">Erreur lors de la recherche</td></tr>`;
                    }
                }, 300);
            });
        }

        // Slack notification handler
document.querySelectorAll('.notify-slack').forEach(button => {
    button.addEventListener('click', async function() {
        const materialId = this.dataset.materialId;
        const toast = new bootstrap.Toast(document.getElementById('slackNotificationToast'));
        const csrfTokenElement = document.querySelector('meta[name=\"csrf-token\"]');

        if (!csrfTokenElement) {
            console.error('CSRF token meta tag is missing');
            alert('Error: Missing CSRF token. Please reload the page.');
            return;
        }

        try {
            const response = await fetch(`/materiel/\${materialId}/notify-slack`, {
                method: 'POST',
                headers: {
                    'X-CSRF-Token': csrfTokenElement.content,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (!response.ok) {
                console.error('Slack notification failed:', data);
                alert(`Error: \${data.message || 'Unknown error'}`);
                return;
            }
            
            toast.show();
        } catch (error) {
            console.error('Network error:', error);
            alert('Network error while sending notification');
        }
    });
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

    // line 497
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

        // line 498
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/low_quantity.css"), "html", null, true);
        yield "\">
    <style>
        /* Blinking pastel red animation for low stock */
        @keyframes blink-pastel {
            0%, 100% { background-color: #ffb3b3; }
            50% { background-color: #ffdddd; }
        }
        tr.blinking, tr.blinking td {
            animation: blink-pastel 1s linear infinite !important;
        }
    </style>
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
        
        /* Low stock styling */
        .low-stock {
            background-color: #fff0f0 !important;
            animation: pulseWarning 2s infinite;
        }
        
        .low-stock:hover {
            background-color: #ffe0e0 !important;
        }
        
        @keyframes pulseWarning {
            0% { background-color: #fff0f0; }
            50% { background-color: #ffd0d0; }
            100% { background-color: #fff0f0; }
        }
        
        /* Slack notification button */
        .notify-slack {
            color: #e01e5a;
            transition: all 0.3s;
        }
        
        .notify-slack:hover {
            background-color: #f8f1f4;
            transform: scale(1.02);
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
        return array (  928 => 499,  923 => 498,  910 => 497,  802 => 438,  782 => 382,  775 => 379,  762 => 378,  744 => 135,  723 => 117,  702 => 99,  681 => 81,  665 => 67,  652 => 66,  633 => 369,  627 => 368,  621 => 364,  613 => 359,  610 => 358,  608 => 357,  605 => 356,  594 => 353,  587 => 352,  583 => 351,  580 => 350,  572 => 345,  569 => 344,  567 => 343,  562 => 340,  556 => 335,  547 => 331,  545 => 330,  531 => 321,  526 => 320,  518 => 316,  516 => 315,  510 => 312,  504 => 309,  493 => 301,  486 => 297,  479 => 293,  471 => 288,  461 => 287,  447 => 286,  441 => 283,  434 => 279,  428 => 276,  425 => 275,  419 => 273,  411 => 271,  409 => 270,  394 => 268,  389 => 267,  361 => 242,  353 => 237,  345 => 232,  337 => 226,  329 => 221,  321 => 216,  314 => 211,  310 => 210,  306 => 209,  299 => 204,  294 => 200,  285 => 193,  278 => 190,  229 => 142,  227 => 66,  217 => 59,  207 => 52,  186 => 34,  175 => 26,  161 => 14,  148 => 13,  135 => 10,  130 => 9,  117 => 8,  94 => 7,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Matériels{% endblock %}
{% block head %}
    {{ parent() }}
    <meta name=\"csrf-token\" content=\"{{ csrf_token('slack_notify') }}\">
{% endblock %}

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

        <!-- Slack Notification Toast -->
        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\">
            <div id=\"slackNotificationToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"5000\">
                <div class=\"toast-header bg-success text-white\">
                    <i class=\"bx bx-check-circle me-2\"></i>
                    <strong class=\"me-auto\">Notification envoyée</strong>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    La notification Slack a été envoyée avec succès !
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
                            <tr class=\"{% if materiel.etat == 'ENDOMMAGE' %}materiel-endommage{% endif %}{% if materiel.quantite < 5 %} low-stock blinking{% endif %}\"{% if materiel.quantite < 5 %} style=\"background-color: #ffb3b3 !important; color: #a30000 !important; animation: blink-pastel 1s linear infinite !important;\"{% endif %}>
                                <td class=\"text-center align-middle\">
                                    {% if materiel.image %}
                                        <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" alt=\"{{ materiel.nom }}\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
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
                                    <span class=\"badge {% if materiel.etat == 'NEUF' %}bg-success{% elseif materiel.etat == 'USÉ' %}bg-warning{% else %}bg-danger{% endif %}\"{% if materiel.quantite < 5 %} style=\"background: none !important; color: #a30000 !important; animation: none !important;\"{% endif %}>
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
                                            {% if materiel.quantite < 5 %}
                                                <button class=\"dropdown-item notify-slack\" data-material-id=\"{{ materiel.id }}\">
                                                    <i class=\"bx bx-bell me-1\"></i> Notifier Slack
                                                </button>
                                            {% endif %}
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
                    </div>
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
                        {% verbatim %}
                        tbody.innerHTML = data.length
                            ? data.map(m => `
                                <tr class=\"\${m.etat === 'ENDOMMAGE' ? 'materiel-endommage' : ''} \${m.quantite < 5 ? 'low-stock' : ''}\">
                                    <td class=\"text-center align-middle\">
                                        <img src=\"\${m.image ? '/Uploads/materiels/' + m.image : '/img/default-material.png'}\" alt=\"\${m.nom}\" class=\"rounded-circle mx-auto d-block\" style=\"width:45px;height:45px;object-fit:cover;\">
                                    </td>
                                    <td>\${m.nom}</td>
                                    <td><i class=\"bx bx-category me-1\"></i>\${m.type}</td>
                                    <td><i class=\"bx bx-package me-1\"></i>\${m.quantite}</td>
                                    <td><span class=\"badge \${m.etat === 'NEUF' ? 'bg-success' : m.etat === 'USÉ' ? 'bg-warning' : 'bg-danger'}\"><i class=\"bx \${m.etat === 'NEUF' ? 'bx-check-circle' : m.etat === 'USÉ' ? 'bx-time' : 'bx-error-circle'} me-1\"></i>\${m.etat}</span></td>
                                    <td><i class=\"bx bx-euro me-1\"></i>\${parseFloat(m.prix).toFixed(2)} €</td>
                                    <td><i class=\"bx bx-barcode me-1\"></i>\${m.barcode}</td>
                                    <td><i class=\"bx bx-store me-1\"></i>\${m.fournisseur || 'N/A'}</td>
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
                                                \${m.quantite < 5 ? `<button class=\"dropdown-item notify-slack\" data-material-id=\"\${m.id}\"><i class=\"bx bx-bell me-1\"></i> Notifier Slack</button>` : ''}
                                                <form method=\"post\" action=\"/materiel/\${m.id}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"\${m.deleteToken}\">
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
                        {% endverbatim %}
                    } catch (err) {
                        console.error('Erreur AJAX:', err);
                        tbody.innerHTML = `<tr><td colspan=\"9\" class=\"text-center\">Erreur lors de la recherche</td></tr>`;
                    }
                }, 300);
            });
        }

        // Slack notification handler
document.querySelectorAll('.notify-slack').forEach(button => {
    button.addEventListener('click', async function() {
        const materialId = this.dataset.materialId;
        const toast = new bootstrap.Toast(document.getElementById('slackNotificationToast'));
        const csrfTokenElement = document.querySelector('meta[name=\"csrf-token\"]');

        if (!csrfTokenElement) {
            console.error('CSRF token meta tag is missing');
            alert('Error: Missing CSRF token. Please reload the page.');
            return;
        }

        try {
            const response = await fetch(`/materiel/\${materialId}/notify-slack`, {
                method: 'POST',
                headers: {
                    'X-CSRF-Token': csrfTokenElement.content,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (!response.ok) {
                console.error('Slack notification failed:', data);
                alert(`Error: \${data.message || 'Unknown error'}`);
                return;
            }
            
            toast.show();
        } catch (error) {
            console.error('Network error:', error);
            alert('Network error while sending notification');
        }
    });
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
        /* Blinking pastel red animation for low stock */
        @keyframes blink-pastel {
            0%, 100% { background-color: #ffb3b3; }
            50% { background-color: #ffdddd; }
        }
        tr.blinking, tr.blinking td {
            animation: blink-pastel 1s linear infinite !important;
        }
    </style>
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
        
        /* Low stock styling */
        .low-stock {
            background-color: #fff0f0 !important;
            animation: pulseWarning 2s infinite;
        }
        
        .low-stock:hover {
            background-color: #ffe0e0 !important;
        }
        
        @keyframes pulseWarning {
            0% { background-color: #fff0f0; }
            50% { background-color: #ffd0d0; }
            100% { background-color: #fff0f0; }
        }
        
        /* Slack notification button */
        .notify-slack {
            color: #e01e5a;
            transition: all 0.3s;
        }
        
        .notify-slack:hover {
            background-color: #f8f1f4;
            transform: scale(1.02);
        }
    </style>
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\index.html.twig");
    }
}
