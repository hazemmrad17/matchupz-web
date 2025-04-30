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
class __TwigTemplate_3fa4fea8ca8042f8b42cebc5470af3ec extends Template
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
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-6 mb-4 order-0\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary\">Félicitations Cher Responsable Logistique ! 🎉</h5>
                                <p class=\"mb-4\">
                                    Vous avez ajouté <span class=\"fw-bold\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</span> matériels aujourd'hui. Consultez votre profil pour les mises à jour.
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profil</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"";
        // line 32
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
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
        yield "\"
                                    alt=\"Average per Type\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Type</span>
                        <h3 class=\"card-title mb-2\">";
        // line 56
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 56, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 56, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 56, $this->source); })()))), 1), "html", null, true)) : (0));
        yield "</h3>
                        <small class=\"text-muted\">Matériels par type</small>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 131
        yield "        <!-- Slack Notification Toast -->

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
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetScanner()\">Nouveau scan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"objectDetectionModal\" tabindex=\"-1\" aria-labelledby=\"objectDetectionModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"objectDetectionModalLabel\">Détecter Objet</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"nav nav-tabs\" id=\"detectionTabs\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"webcam-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#webcam-pane\" type=\"button\" role=\"tab\" aria-controls=\"webcam-pane\" aria-selected=\"true\">Webcam</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"upload-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#upload-pane\" type=\"button\" role=\"tab\" aria-controls=\"upload-pane\" aria-selected=\"false\">Upload Image</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"detectionTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"webcam-pane\" role=\"tabpanel\" aria-labelledby=\"webcam-tab\">
                                <div class=\"scanner-container\">
                                    <video id=\"webcam\" autoplay playsinline style=\"width: 100%; height: auto;\"></video>
                                    <canvas id=\"webcam-canvas\" style=\"position: absolute; top: 0; left: 0;\"></canvas>
                                </div>
                                <div id=\"detection-result\" class=\"mt-3\"></div>
                                <div id=\"captured-detections\" class=\"mt-3\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"upload-pane\" role=\"tabpanel\" aria-labelledby=\"upload-tab\">
                                <form id=\"upload-image-form\" enctype=\"multipart/form-data\">
                                    <div class=\"mb-3\">
                                        <label for=\"image-upload\" class=\"form-label\">Choisir une image</label>
                                        <input type=\"file\" class=\"form-control\" id=\"image-upload\" name=\"image\" accept=\"image/*\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary\">Analyser</button>
                                </form>
                                <div id=\"upload-result\" class=\"mt-3\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetDetection()\">Réinitialiser</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <form class=\"d-flex\" method=\"get\" action=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 223, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#barcodeScannerModal\">
                             <i class=\"bx bx-barcode me-1 fs-5\"></i> Scanner
                        </button>
                    </div>
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#objectDetectionModal\">
                            <i class=\"bx bx-camera me-1 fs-5\"></i> Détecter Objet
                        </button>
                    </div>
                    <div class=\"btn-group me-2\">
                        <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>
                    </div>
                    <div class=\"btn-group me-2\">
                        <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1 fs-5\"></i> Ajouter Matériel
                        </a>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1 fs-5\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_excel");
        yield "\">
                                <i class=\"bx bx-file me-1\"></i> Excel
                            </a>
                        </li>
                        <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_csv");
        yield "\">
                            <i class=\"bx bx-file me-1\"></i> CSV
                        </a>
                        </li>
                        <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 265
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
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 290, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 291
            yield "                            <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 291) == "ENDOMMAGE")) {
                yield "materiel-endommage";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 291) < 5)) {
                yield " low-stock blinking";
            }
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 291) < 5)) {
                yield " style=\"background-color: #ffb3b3 !important; color: #a30000 !important; animation: blink-pastel 1s linear infinite !important;\"";
            }
            yield ">
                                <td class=\"text-center align-middle\">
                                    ";
            // line 293
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 293)) {
                // line 294
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 294))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 294), "html", null, true);
                yield "\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            } else {
                // line 296
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-material.png"), "html", null, true);
                yield "\" alt=\"Image par défaut\" class=\"rounded-circle mx-auto d-block\" style=\"width: 45px; height: 45px; object-fit: cover;\">
                                    ";
            }
            // line 298
            yield "                                </td>
                                <td>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 299), "html", null, true);
            yield "</td>
                                <td>
                                    <i class=\"bx bx-category me-1\"></i>
                                    ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 302), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-package me-1\"></i>
                                    ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 306), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 309
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 309) == "NEUF")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 309) == "USÉ")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 309) < 5)) {
                yield " style=\"background: none !important; color: #a30000 !important; animation: none !important;\"";
            }
            yield ">
                                        <i class=\"bx ";
            // line 310
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 310) == "NEUF")) {
                yield "bx-check-circle";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 310) == "USÉ")) {
                yield "bx-time";
            } else {
                yield "bx-error-circle";
            }
            yield " me-1\"></i>
                                        ";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 311), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <i class=\"bx bx-euro me-1\"></i>
                                    ";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 316), 2, ",", " "), "html", null, true);
            yield " €
                                </td>
                                <td>
                                    <i class=\"bx bx-barcode me-1\"></i>
                                    ";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 320), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"bx bx-store me-1\"></i>
                                    ";
            // line 324
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 324)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 324), "nom", [], "any", false, false, false, 324), "html", null, true)) : ("N/A"));
            yield "
                                </td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 332)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 335)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            ";
            // line 338
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 338) < 5)) {
                // line 339
                yield "                                                <button type=\"button\" class=\"dropdown-item notify-slack\" data-material-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 339), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-bell me-1\"></i> Notifier Slack
                                                </button>
                                            ";
            }
            // line 343
            yield "                                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 343)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 344))), "html", null, true);
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
        // line 353
        if (!$context['_iterated']) {
            // line 354
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center\">Aucun matériel trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 365, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 365) > 1)) {
            // line 366
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 367, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 367) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                    <i class=\"bx bx-chevron-left\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 372
        yield "                        
                        ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 373, $this->source); })()), "getPageCount", [], "method", false, false, false, 373)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 374
            yield "                            <li class=\"page-item ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 374, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 374))) {
                yield "active";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 375
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
        // line 378
        yield "                        
                        ";
        // line 379
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 379, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 379) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 379, $this->source); })()), "getPageCount", [], "method", false, false, false, 379))) {
            // line 380
            yield "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 381, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 381) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                    <i class=\"bx bx-chevron-right\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 386
        yield "                    </ul>
                </nav>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
                        Page ";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 390, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 390), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 390, $this->source); })()), "getPageCount", [], "method", false, false, false, 390), "html", null, true);
        yield " |
                        Total Matériels : ";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 391, $this->source); })()), "totalItemCount", [], "any", false, false, false, 391), "html", null, true);
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

    // line 63
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

        // line 64
        yield "            <div class=\"row\">
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
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</h3>
                            <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                        </div>
                    </div>
                </div>
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
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 92, $this->source); })())), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Catégories de matériel</small>
                        </div>
                    </div>
                </div>
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
        // line 108
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "NEUF", [], "array", true, true, false, 108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 108, $this->source); })()), "NEUF", [], "array", false, false, false, 108)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 108, $this->source); })()), "NEUF", [], "array", false, false, false, 108), "html", null, true)) : (0));
        yield "</h3>
                            <small class=\"text-muted\">En parfait état</small>
                        </div>
                    </div>
                </div>
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
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 124, $this->source); })()), 2, ",", " "), "html", null, true);
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

    // line 400
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

        // line 401
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        console.log('AJAX search script loaded');
        const baseUrl = \"";
        // line 404
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
        // line 460
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

        // Slack notification handler - FIXED VERSION
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.notify-slack').forEach(button => {
            button.addEventListener('click', async function(e) {
            e.preventDefault();
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
    });
});

        const scannerModal = document.getElementById('barcodeScannerModal');
        scannerModal.addEventListener('shown.bs.modal', function () {
            initScanner('scanner-video', 'scanner-result');
        });
        scannerModal.addEventListener('hidden.bs.modal', function () {
            Quagga.stop();
            document.getElementById('scanner-result').innerHTML = '<div class=\"placeholder-text\"><i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre</div>';
        });

        let stream = null;
        const webcam = document.getElementById('webcam');
        const canvas = document.getElementById('webcam-canvas');
        const detectionResult = document.getElementById('detection-result');
        let detectionInterval = null;

        async function startWebcam() {
            try {
                stream = await navigator.mediaDevices.getUserMedia({ 
                    video: { 
                        width: { ideal: 640 }, 
                        height: { ideal: 480 } 
                    } 
                });
                webcam.srcObject = stream;
                await webcam.play();
                canvas.width = webcam.videoWidth;
                canvas.height = webcam.videoHeight;
                detectionInterval = setInterval(captureAndDetect, 3000);
            } catch (err) {
                console.error('Erreur d\\'accès à la webcam:', err);
                detectionResult.innerHTML = '<div class=\"alert alert-danger\">Erreur d\\'accès à la webcam</div>';
            }
        }

        async function captureAndDetect() {
            try {
                if (!webcam.videoWidth || !webcam.videoHeight) {
                    return;
                }

                const ctx = canvas.getContext('2d');
                ctx.drawImage(webcam, 0, 0, canvas.width, canvas.height);
                const imageData = canvas.toDataURL('image/jpeg', 0.5);

                detectionResult.innerHTML = '<div class=\"alert alert-info\">Analyse en cours...</div>';

                const formData = new FormData();
                formData.append('image', imageData);

                const response = await fetch('";
        // line 560
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_detect_object_webcam");
        yield "', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    const error = await response.json();
                    throw new Error(error.error || 'Erreur serveur');
                }

                const data = await response.json();
                drawBoundingBoxes(data.predictions);

                if (data.predictions.length > 0) {
                    const snapshot = canvas.toDataURL('image/jpeg', 0.5);
                    const detectionItem = document.createElement('div');
                    detectionItem.className = 'detection-item mb-3';
                    detectionItem.innerHTML = `
                        <div class=\"card\">
                            <img src=\"\${snapshot}\" class=\"card-img-top\" alt=\"Captured detection\" style=\"max-width: 200px;\" />
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled\">
                                    \${data.predictions.map(pred => `<li>\${pred.label} (\${(pred.confidence * 100).toFixed(2)}%)</li>`).join('')}
                                </ul>
                            </div>
                        </div>
                    `;
                    const capturedDetections = document.getElementById('captured-detections');
                    capturedDetections.prepend(detectionItem);

                    while (capturedDetections.children.length > 3) {
                        capturedDetections.removeChild(capturedDetections.lastChild);
                    }
                }

                detectionResult.innerHTML = `
                    <div class=\"alert alert-success\">
                        <ul>
                            \${data.predictions.length ? data.predictions.map(pred => `
                                <li>\${pred.label} (Confiance: \${(pred.confidence * 100).toFixed(2)}%)</li>
                            `).join('') : '<li>Aucun équipement détecté</li>'}
                        </ul>
                        \${data.suggestedType ? `
                            <a href=\"";
        // line 603
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "?suggestedType=\${data.suggestedType}\" 
                               class=\"btn btn-sm btn-primary mt-2\">
                                Créer matériel
                            </a>
                        ` : ''}
                    </div>
                `;
            } catch (error) {
                console.error('Detection error:', error);
                detectionResult.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Erreur lors de la détection: \${error.message}
                    </div>
                `;
            }
        }

        function drawBoundingBoxes(predictions) {
            const ctx = canvas.getContext('2d');
            ctx.drawImage(webcam, 0, 0, canvas.width, canvas.height);

            predictions.forEach(pred => {
                ctx.beginPath();
                ctx.rect(
                    pred.x - pred.width / 2,
                    pred.y - pred.height / 2,
                    pred.width,
                    pred.height
                );
                ctx.lineWidth = 2;
                ctx.strokeStyle = 'red';
                ctx.fillStyle = 'rgba(255, 0, 0, 0.2)';
                ctx.stroke();
                ctx.fill();

                ctx.font = '14px Arial';
                ctx.fillStyle = 'white';
                ctx.fillText(
                    `\${pred.label} (\${(pred.confidence * 100).toFixed(2)}%)`,
                    pred.x - pred.width / 2,
                    pred.y - pred.height / 2 - 10
                );
            });
        }

        function stopWebcam() {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                stream = null;
            }
            if (detectionInterval) {
                clearInterval(detectionInterval);
                detectionInterval = null;
            }
            if (webcam) {
                webcam.srcObject = null;
            }
            const ctx = canvas.getContext('2d');
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        document.getElementById('upload-image-form')?.addEventListener('submit', async function(e) {
            e.preventDefault();
            const uploadResult = document.getElementById('upload-result');
            const fileInput = document.getElementById('image-upload');
            const file = fileInput.files[0];

            if (!file) {
                uploadResult.innerHTML = '<div class=\"alert alert-danger\">Veuillez sélectionner une image</div>';
                return;
            }

            try {
                uploadResult.innerHTML = '<div class=\"alert alert-info\">Analyse en cours...</div>';

                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = async function() {
                    const base64Image = reader.result.split(',')[1];

                    const formData = new FormData();
                    formData.append('image', base64Image);

                    const response = await fetch('";
        // line 686
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_analyze_image");
        yield "', {
                        method: 'POST',
                        body: formData
                    });

                    if (!response.ok) {
                        const error = await response.json();
                        throw new Error(error.error || 'Erreur serveur');
                    }

                    const data = await response.json();

                    uploadResult.innerHTML = `
                        <div class=\"alert alert-success\">
                            <ul>
                                \${data.predictions.length ? data.predictions.map(pred => `
                                    <li>\${pred.label} (Confiance: \${(pred.confidence * 100).toFixed(2)}%)</li>
                                `).join('') : '<li>Aucun équipement détecté</li>'}
                            </ul>
                            \${data.suggestedType ? `
                                <a href=\"";
        // line 706
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "?suggestedType=\${data.suggestedType}\" 
                                   class=\"btn btn-sm btn-primary mt-2\">
                                    Créer matériel
                                </a>
                            ` : ''}
                        </div>
                    `;
                };
                reader.onerror = function() {
                    throw new Error('Erreur lors de la lecture du fichier');
                };
            } catch (error) {
                console.error('Upload detection error:', error);
                uploadResult.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Erreur lors de l'analyse: \${error.message}
                    </div>
                `;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const objectTab = document.getElementById('webcam-tab');
            if (objectTab) {
                objectTab.addEventListener('shown.bs.tab', startWebcam);
            }
            const objectDetectionModal = document.getElementById('objectDetectionModal');
            if (objectDetectionModal) {
                objectDetectionModal.addEventListener('shown.bs.modal', function() {
                    const activeTab = document.querySelector('#detectionTabs .nav-link.active');
                    if (activeTab && activeTab.id === 'webcam-tab') {
                        startWebcam();
                    }
                });
            }
        });

        document.getElementById('objectDetectionModal')?.addEventListener('hidden.bs.modal', () => {
            stopWebcam();
            detectionResult.innerHTML = '';
            document.getElementById('upload-result').innerHTML = '';
            document.getElementById('image-upload').value = '';
            document.getElementById('captured-detections').innerHTML = '';
        });

        function resetScanner() {
            Quagga.stop();
            document.getElementById('scanner-result').innerHTML = '<div class=\"placeholder-text\"><i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre</div>';
        }

        function resetDetection() {
            stopWebcam();
            detectionResult.innerHTML = '';
            document.getElementById('upload-result').innerHTML = '';
            document.getElementById('image-upload').value = '';
            document.getElementById('captured-detections').innerHTML = '';
            const activeTab = document.querySelector('#detectionTabs .nav-link.active');
            if (activeTab && activeTab.id === 'webcam-tab') {
                startWebcam();
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 770
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

        // line 771
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/low_quantity.css"), "html", null, true);
        yield "\">
    <style>
        @keyframes blink-pastel {
            0%, 100% { background-color: #ffb3b3; }
            50% { background-color: #ffdddd; }
        }
        tr.blinking, tr.blinking td {
            animation: blink-pastel 1s linear infinite !important;
        }
        .scanner-container {
            position: relative;
        }
        #webcam-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
        }
        .table#materielsTable th, .table#materielsTable td {
            width: auto;
        }
        .table#materielsTable th:first-child, .table#materielsTable td:first-child {
            width: 50px;
            text-align: center;
            padding: 2px;
            vertical-align: middle;
        }
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
        .table#materielsTable tbody tr:hover {
            background-color: rgba(0,0,0,.03);
            transition: background-color 0.2s ease;
        }
        .badge {
            padding: 0.5em 0.8em;
            font-weight: 500;
        }
        .btn-icon {
            padding: 0.25rem;
            line-height: 1;
        }
        @keyframes blinkRed {
            0% { background-color: #ffebee; border-color: #f44336; }
            50% { background-color: #f44336; border-color: #d32f2f; }
            100% { background-color: #ffebee; border-color: #f44336; }
        }
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
        return array (  1200 => 772,  1195 => 771,  1182 => 770,  1108 => 706,  1085 => 686,  999 => 603,  953 => 560,  811 => 460,  791 => 404,  784 => 401,  771 => 400,  753 => 124,  734 => 108,  715 => 92,  696 => 76,  682 => 64,  669 => 63,  650 => 391,  644 => 390,  638 => 386,  630 => 381,  627 => 380,  625 => 379,  622 => 378,  611 => 375,  604 => 374,  600 => 373,  597 => 372,  589 => 367,  586 => 366,  584 => 365,  575 => 358,  566 => 354,  564 => 353,  550 => 344,  545 => 343,  537 => 339,  535 => 338,  529 => 335,  523 => 332,  512 => 324,  505 => 320,  498 => 316,  490 => 311,  480 => 310,  466 => 309,  460 => 306,  453 => 302,  447 => 299,  444 => 298,  438 => 296,  430 => 294,  428 => 293,  413 => 291,  408 => 290,  380 => 265,  372 => 260,  364 => 255,  351 => 245,  343 => 240,  323 => 223,  317 => 220,  226 => 131,  224 => 63,  214 => 56,  204 => 49,  184 => 32,  173 => 24,  161 => 14,  148 => 13,  135 => 10,  130 => 9,  117 => 8,  94 => 7,  82 => 4,  69 => 3,  46 => 1,);
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
        <div class=\"row\">
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
            <div class=\"row\">
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
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetScanner()\">Nouveau scan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"objectDetectionModal\" tabindex=\"-1\" aria-labelledby=\"objectDetectionModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"objectDetectionModalLabel\">Détecter Objet</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"nav nav-tabs\" id=\"detectionTabs\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"webcam-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#webcam-pane\" type=\"button\" role=\"tab\" aria-controls=\"webcam-pane\" aria-selected=\"true\">Webcam</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"upload-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#upload-pane\" type=\"button\" role=\"tab\" aria-controls=\"upload-pane\" aria-selected=\"false\">Upload Image</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"detectionTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"webcam-pane\" role=\"tabpanel\" aria-labelledby=\"webcam-tab\">
                                <div class=\"scanner-container\">
                                    <video id=\"webcam\" autoplay playsinline style=\"width: 100%; height: auto;\"></video>
                                    <canvas id=\"webcam-canvas\" style=\"position: absolute; top: 0; left: 0;\"></canvas>
                                </div>
                                <div id=\"detection-result\" class=\"mt-3\"></div>
                                <div id=\"captured-detections\" class=\"mt-3\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"upload-pane\" role=\"tabpanel\" aria-labelledby=\"upload-tab\">
                                <form id=\"upload-image-form\" enctype=\"multipart/form-data\">
                                    <div class=\"mb-3\">
                                        <label for=\"image-upload\" class=\"form-label\">Choisir une image</label>
                                        <input type=\"file\" class=\"form-control\" id=\"image-upload\" name=\"image\" accept=\"image/*\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary\">Analyser</button>
                                </form>
                                <div id=\"upload-result\" class=\"mt-3\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"resetDetection()\">Réinitialiser</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <form class=\"d-flex\" method=\"get\" action=\"{{ path('app_materiel_index') }}\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, type, état...\" value=\"{{ searchTerm }}\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#barcodeScannerModal\">
                             <i class=\"bx bx-barcode me-1 fs-5\"></i> Scanner
                        </button>
                    </div>
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#objectDetectionModal\">
                            <i class=\"bx bx-camera me-1 fs-5\"></i> Détecter Objet
                        </button>
                    </div>
                    <div class=\"btn-group me-2\">
                        <a href=\"{{ path('app_materiel_statistics') }}\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>
                    </div>
                    <div class=\"btn-group me-2\">
                        <a href=\"{{ path('app_materiel_new') }}\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1 fs-5\"></i> Ajouter Matériel
                        </a>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1 fs-5\"></i> Exporter
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
                                                <button type=\"button\" class=\"dropdown-item notify-slack\" data-material-id=\"{{ materiel.id }}\">
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

        // Slack notification handler - FIXED VERSION
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.notify-slack').forEach(button => {
            button.addEventListener('click', async function(e) {
            e.preventDefault();
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
    });
});

        const scannerModal = document.getElementById('barcodeScannerModal');
        scannerModal.addEventListener('shown.bs.modal', function () {
            initScanner('scanner-video', 'scanner-result');
        });
        scannerModal.addEventListener('hidden.bs.modal', function () {
            Quagga.stop();
            document.getElementById('scanner-result').innerHTML = '<div class=\"placeholder-text\"><i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre</div>';
        });

        let stream = null;
        const webcam = document.getElementById('webcam');
        const canvas = document.getElementById('webcam-canvas');
        const detectionResult = document.getElementById('detection-result');
        let detectionInterval = null;

        async function startWebcam() {
            try {
                stream = await navigator.mediaDevices.getUserMedia({ 
                    video: { 
                        width: { ideal: 640 }, 
                        height: { ideal: 480 } 
                    } 
                });
                webcam.srcObject = stream;
                await webcam.play();
                canvas.width = webcam.videoWidth;
                canvas.height = webcam.videoHeight;
                detectionInterval = setInterval(captureAndDetect, 3000);
            } catch (err) {
                console.error('Erreur d\\'accès à la webcam:', err);
                detectionResult.innerHTML = '<div class=\"alert alert-danger\">Erreur d\\'accès à la webcam</div>';
            }
        }

        async function captureAndDetect() {
            try {
                if (!webcam.videoWidth || !webcam.videoHeight) {
                    return;
                }

                const ctx = canvas.getContext('2d');
                ctx.drawImage(webcam, 0, 0, canvas.width, canvas.height);
                const imageData = canvas.toDataURL('image/jpeg', 0.5);

                detectionResult.innerHTML = '<div class=\"alert alert-info\">Analyse en cours...</div>';

                const formData = new FormData();
                formData.append('image', imageData);

                const response = await fetch('{{ path('app_materiel_detect_object_webcam') }}', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    const error = await response.json();
                    throw new Error(error.error || 'Erreur serveur');
                }

                const data = await response.json();
                drawBoundingBoxes(data.predictions);

                if (data.predictions.length > 0) {
                    const snapshot = canvas.toDataURL('image/jpeg', 0.5);
                    const detectionItem = document.createElement('div');
                    detectionItem.className = 'detection-item mb-3';
                    detectionItem.innerHTML = `
                        <div class=\"card\">
                            <img src=\"\${snapshot}\" class=\"card-img-top\" alt=\"Captured detection\" style=\"max-width: 200px;\" />
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled\">
                                    \${data.predictions.map(pred => `<li>\${pred.label} (\${(pred.confidence * 100).toFixed(2)}%)</li>`).join('')}
                                </ul>
                            </div>
                        </div>
                    `;
                    const capturedDetections = document.getElementById('captured-detections');
                    capturedDetections.prepend(detectionItem);

                    while (capturedDetections.children.length > 3) {
                        capturedDetections.removeChild(capturedDetections.lastChild);
                    }
                }

                detectionResult.innerHTML = `
                    <div class=\"alert alert-success\">
                        <ul>
                            \${data.predictions.length ? data.predictions.map(pred => `
                                <li>\${pred.label} (Confiance: \${(pred.confidence * 100).toFixed(2)}%)</li>
                            `).join('') : '<li>Aucun équipement détecté</li>'}
                        </ul>
                        \${data.suggestedType ? `
                            <a href=\"{{ path('app_materiel_new') }}?suggestedType=\${data.suggestedType}\" 
                               class=\"btn btn-sm btn-primary mt-2\">
                                Créer matériel
                            </a>
                        ` : ''}
                    </div>
                `;
            } catch (error) {
                console.error('Detection error:', error);
                detectionResult.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Erreur lors de la détection: \${error.message}
                    </div>
                `;
            }
        }

        function drawBoundingBoxes(predictions) {
            const ctx = canvas.getContext('2d');
            ctx.drawImage(webcam, 0, 0, canvas.width, canvas.height);

            predictions.forEach(pred => {
                ctx.beginPath();
                ctx.rect(
                    pred.x - pred.width / 2,
                    pred.y - pred.height / 2,
                    pred.width,
                    pred.height
                );
                ctx.lineWidth = 2;
                ctx.strokeStyle = 'red';
                ctx.fillStyle = 'rgba(255, 0, 0, 0.2)';
                ctx.stroke();
                ctx.fill();

                ctx.font = '14px Arial';
                ctx.fillStyle = 'white';
                ctx.fillText(
                    `\${pred.label} (\${(pred.confidence * 100).toFixed(2)}%)`,
                    pred.x - pred.width / 2,
                    pred.y - pred.height / 2 - 10
                );
            });
        }

        function stopWebcam() {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                stream = null;
            }
            if (detectionInterval) {
                clearInterval(detectionInterval);
                detectionInterval = null;
            }
            if (webcam) {
                webcam.srcObject = null;
            }
            const ctx = canvas.getContext('2d');
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        document.getElementById('upload-image-form')?.addEventListener('submit', async function(e) {
            e.preventDefault();
            const uploadResult = document.getElementById('upload-result');
            const fileInput = document.getElementById('image-upload');
            const file = fileInput.files[0];

            if (!file) {
                uploadResult.innerHTML = '<div class=\"alert alert-danger\">Veuillez sélectionner une image</div>';
                return;
            }

            try {
                uploadResult.innerHTML = '<div class=\"alert alert-info\">Analyse en cours...</div>';

                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = async function() {
                    const base64Image = reader.result.split(',')[1];

                    const formData = new FormData();
                    formData.append('image', base64Image);

                    const response = await fetch('{{ path('app_materiel_analyze_image') }}', {
                        method: 'POST',
                        body: formData
                    });

                    if (!response.ok) {
                        const error = await response.json();
                        throw new Error(error.error || 'Erreur serveur');
                    }

                    const data = await response.json();

                    uploadResult.innerHTML = `
                        <div class=\"alert alert-success\">
                            <ul>
                                \${data.predictions.length ? data.predictions.map(pred => `
                                    <li>\${pred.label} (Confiance: \${(pred.confidence * 100).toFixed(2)}%)</li>
                                `).join('') : '<li>Aucun équipement détecté</li>'}
                            </ul>
                            \${data.suggestedType ? `
                                <a href=\"{{ path('app_materiel_new') }}?suggestedType=\${data.suggestedType}\" 
                                   class=\"btn btn-sm btn-primary mt-2\">
                                    Créer matériel
                                </a>
                            ` : ''}
                        </div>
                    `;
                };
                reader.onerror = function() {
                    throw new Error('Erreur lors de la lecture du fichier');
                };
            } catch (error) {
                console.error('Upload detection error:', error);
                uploadResult.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Erreur lors de l'analyse: \${error.message}
                    </div>
                `;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const objectTab = document.getElementById('webcam-tab');
            if (objectTab) {
                objectTab.addEventListener('shown.bs.tab', startWebcam);
            }
            const objectDetectionModal = document.getElementById('objectDetectionModal');
            if (objectDetectionModal) {
                objectDetectionModal.addEventListener('shown.bs.modal', function() {
                    const activeTab = document.querySelector('#detectionTabs .nav-link.active');
                    if (activeTab && activeTab.id === 'webcam-tab') {
                        startWebcam();
                    }
                });
            }
        });

        document.getElementById('objectDetectionModal')?.addEventListener('hidden.bs.modal', () => {
            stopWebcam();
            detectionResult.innerHTML = '';
            document.getElementById('upload-result').innerHTML = '';
            document.getElementById('image-upload').value = '';
            document.getElementById('captured-detections').innerHTML = '';
        });

        function resetScanner() {
            Quagga.stop();
            document.getElementById('scanner-result').innerHTML = '<div class=\"placeholder-text\"><i class=\"bx bx-barcode\"></i> Positionnez le code-barres dans le cadre</div>';
        }

        function resetDetection() {
            stopWebcam();
            detectionResult.innerHTML = '';
            document.getElementById('upload-result').innerHTML = '';
            document.getElementById('image-upload').value = '';
            document.getElementById('captured-detections').innerHTML = '';
            const activeTab = document.querySelector('#detectionTabs .nav-link.active');
            if (activeTab && activeTab.id === 'webcam-tab') {
                startWebcam();
            }
        }
    </script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/low_quantity.css') }}\">
    <style>
        @keyframes blink-pastel {
            0%, 100% { background-color: #ffb3b3; }
            50% { background-color: #ffdddd; }
        }
        tr.blinking, tr.blinking td {
            animation: blink-pastel 1s linear infinite !important;
        }
        .scanner-container {
            position: relative;
        }
        #webcam-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
        }
        .table#materielsTable th, .table#materielsTable td {
            width: auto;
        }
        .table#materielsTable th:first-child, .table#materielsTable td:first-child {
            width: 50px;
            text-align: center;
            padding: 2px;
            vertical-align: middle;
        }
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
        .table#materielsTable tbody tr:hover {
            background-color: rgba(0,0,0,.03);
            transition: background-color 0.2s ease;
        }
        .badge {
            padding: 0.5em 0.8em;
            font-weight: 500;
        }
        .btn-icon {
            padding: 0.25rem;
            line-height: 1;
        }
        @keyframes blinkRed {
            0% { background-color: #ffebee; border-color: #f44336; }
            50% { background-color: #f44336; border-color: #d32f2f; }
            100% { background-color: #ffebee; border-color: #f44336; }
        }
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
        .notify-slack {
            color: #e01e5a;
            transition: all 0.3s;
        }
        .notify-slack:hover {
            background-color: #f8f1f4;
            transform: scale(1.02);
        }
    </style>
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\materiel\\index.html.twig");
    }
}
