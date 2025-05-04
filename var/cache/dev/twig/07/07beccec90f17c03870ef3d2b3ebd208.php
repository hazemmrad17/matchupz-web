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

/* contrat/main.html.twig */
class __TwigTemplate_48978ab8bd31d05ba0f0a56957f118c6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/main.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "contrat/main.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Contrats";
        
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
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            yield "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            yield "                <div class=\"alert alert-warning\" role=\"alert\">
                    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 26
        yield "
            ";
        // line 28
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher titre, sponsor ou montant...\"
                                    aria-label=\"Rechercher titre, sponsor ou montant...\"
                                    value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 40, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                />
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex align-items-center\">
                        ";
        // line 48
        yield "                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Filtrer
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "titre"]);
        yield "\">Par Titre</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datedebut"]);
        yield "\">Par Date de Début</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datefin"]);
        yield "\">Par Date de Fin</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "montant"]);
        yield "\">Par Montant</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "sponsor"]);
        yield "\">Par Sponsor</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "article"]);
        yield "\">Par Article</a></li>
                            </ul>
                        </div>

                        ";
        // line 63
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>

                        ";
        // line 68
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        yield "\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1\"></i> Ajouter Contrat
                        </a>

                        ";
        // line 73
        yield "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-download me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "xlsx"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "csv"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "pdf"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "sql"]);
        yield "\">
                                        <i class=\"bx bx-data me-1\"></i> SQL (.sql)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table modern-table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Article</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 118
            yield "                                <tr class=\"table-default contrat-row";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 118), (isset($context["expiringContractIds"]) || array_key_exists("expiringContractIds", $context) ? $context["expiringContractIds"] : (function () { throw new RuntimeError('Variable "expiringContractIds" does not exist.', 118, $this->source); })()))) {
                yield " contrat-expiring low-stock blinking";
            }
            yield "\"
                                    ";
            // line 119
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 119), (isset($context["expiringContractIds"]) || array_key_exists("expiringContractIds", $context) ? $context["expiringContractIds"] : (function () { throw new RuntimeError('Variable "expiringContractIds" does not exist.', 119, $this->source); })()))) {
                // line 120
                yield "                                        style=\"background-color: #ffb3b3 !important; color: #a30000 !important; animation: blink-pastel 1s linear infinite !important;\"
                                    ";
            }
            // line 121
            yield ">
                                    <td data-full-description=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 122), "N/A")) : ("N/A")), "html", null, true);
            yield "\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 124), "N/A")) : ("N/A")), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td data-full-description=\"";
            // line 126
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 126), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 126), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 127
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 127), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 127), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 128), "N/A")) : ("N/A")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 128), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 129
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 129), "nom", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
            yield "\">";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 129), "nom", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td data-full-description=\"";
            // line 130
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 130)) ? ("Signature disponible") : ("No Signature"));
            yield "\">
                                        ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 131)) {
                // line 132
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 132)), "html", null, true);
                yield "\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        ";
            } else {
                // line 134
                yield "                                            No Signature
                                        ";
            }
            // line 136
            yield "                                    </td>
                                    <td data-full-description=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 137), "N/A")) : ("N/A")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 137), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 137)) > 50)) ? ("...") : (""))), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 139
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 139))) {
                // line 140
                yield "                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_show", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 145)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_edit", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "pdf", "idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-file me-1\"></i> Exporter PDF
                                                    </a>
                                                    <form method=\"post\" action=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 155))), "html", null, true);
                yield "\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 163
                yield "                                            <span class=\"text-muted\">Actions non disponibles</span>
                                        ";
            }
            // line 165
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "                                <tr>
                                    <td colspan=\"8\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "                        </tbody>
                    </table>
                </div>

                ";
        // line 177
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 177, $this->source); })()))) {
            // line 178
            yield "                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item ";
            // line 181
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 181, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 181) == 1)) {
                yield "disabled";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 182, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 182) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 182, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 182, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-left\"></i></a>
                                </li>
                                ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 184, $this->source); })()), "getPageCount", [], "method", false, false, false, 184)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 185
                yield "                                    <li class=\"page-item ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 185, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 185))) {
                    yield "active";
                }
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => $context["page"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 186, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 186, $this->source); })()), "")) : (""))]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "                                <li class=\"page-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 189, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 189) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 189, $this->source); })()), "getPageCount", [], "method", false, false, false, 189))) {
                yield "disabled";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 190, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 190) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 190, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 190, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-right\"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"text-center\">
                            <small>
                                Page ";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 196, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 196), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 196, $this->source); })()), "getPageCount", [], "method", false, false, false, 196), "html", null, true);
            yield " |
                                Total Contrats : ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 197, $this->source); })()), "totalItemCount", [], "any", false, false, false, 197), "html", null, true);
            yield "
                            </small>
                        </div>
                    </div>
                ";
        }
        // line 202
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "                ";
        yield from $this->loadTemplate("/contrat/widgets.html.twig", "contrat/main.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["recentContracts" => (isset($context["recentContracts"]) || array_key_exists("recentContracts", $context) ? $context["recentContracts"] : (function () { throw new RuntimeError('Variable "recentContracts" does not exist.', 24, $this->source); })())]));
        // line 25
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 207
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

        // line 208
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Blinking animation for expiring contracts */
        @keyframes blink-pastel {
            0% { background-color: #ffb3b3; }
            50% { background-color: #ffcccc; }
            100% { background-color: #ffb3b3; }
        }
        .contrat-expiring {
            font-weight: bold;
        }
        .low-stock.blinking {
            animation: blink-pastel 1s linear infinite;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 225
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

        // line 226
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3786755132717331\"
     crossorigin=\"anonymous\"></script> 
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.contrat-row') : [];

            // Recherche dynamique
            if (searchInput && rows.length) {
                searchInput.addEventListener('input', () => {
                    const searchTerm = searchInput.value.toLowerCase();

                    rows.forEach(row => {
                        const cells = row.querySelectorAll('td');
                        let match = false;

                        cells.forEach(cell => {
                            const text = cell.getAttribute('data-full-description') || cell.textContent;
                            if (text.toLowerCase().includes(searchTerm)) {
                                match = true;
                            }
                        });

                        row.style.display = match ? '' : 'none';
                    });
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
        return "contrat/main.html.twig";
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
        return array (  622 => 226,  609 => 225,  581 => 208,  568 => 207,  557 => 25,  554 => 24,  541 => 23,  527 => 202,  519 => 197,  513 => 196,  504 => 190,  497 => 189,  486 => 186,  479 => 185,  475 => 184,  470 => 182,  464 => 181,  459 => 178,  456 => 177,  450 => 172,  441 => 168,  439 => 167,  433 => 165,  429 => 163,  418 => 155,  414 => 154,  408 => 151,  402 => 148,  396 => 145,  389 => 140,  387 => 139,  380 => 137,  377 => 136,  373 => 134,  367 => 132,  365 => 131,  361 => 130,  355 => 129,  349 => 128,  343 => 127,  337 => 126,  332 => 124,  327 => 122,  324 => 121,  320 => 120,  318 => 119,  311 => 118,  306 => 117,  280 => 94,  272 => 89,  264 => 84,  256 => 79,  248 => 73,  240 => 68,  232 => 63,  225 => 58,  221 => 57,  217 => 56,  213 => 55,  209 => 54,  205 => 53,  198 => 48,  188 => 40,  174 => 28,  171 => 26,  169 => 23,  166 => 22,  157 => 19,  154 => 18,  149 => 17,  140 => 14,  137 => 13,  133 => 12,  129 => 10,  116 => 9,  93 => 7,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Contrats{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% for flashMessage in app.flashes('success') %}
                <div class=\"alert alert-success\" role=\"alert\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            {% for flashMessage in app.flashes('warning') %}
                <div class=\"alert alert-warning\" role=\"alert\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            {% block widgets %}
                {% include '/contrat/widgets.html.twig' with {'recentContracts': recentContracts} %}
            {% endblock %}

            {# Main Contracts Table #}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher titre, sponsor ou montant...\"
                                    aria-label=\"Rechercher titre, sponsor ou montant...\"
                                    value=\"{{ searchTerm|default('') }}\"
                                />
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex align-items-center\">
                        {# Filtrer Dropdown #}
                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Filtrer
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'titre'}) }}\">Par Titre</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'datedebut'}) }}\">Par Date de Début</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'datefin'}) }}\">Par Date de Fin</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'montant'}) }}\">Par Montant</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'sponsor'}) }}\">Par Sponsor</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'article'}) }}\">Par Article</a></li>
                            </ul>
                        </div>

                        {# Statistiques Button #}
                        <a href=\"{{ path('contrat_statistics') }}\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>

                        {# Ajouter Contrat Button #}
                        <a href=\"{{ path('contrat_new') }}\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1\"></i> Ajouter Contrat
                        </a>

                        {# Exporter Dropdown #}
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-download me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'xlsx'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'csv'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'pdf'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'sql'}) }}\">
                                        <i class=\"bx bx-data me-1\"></i> SQL (.sql)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table modern-table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Article</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for contrat in contrats %}
                                <tr class=\"table-default contrat-row{% if contrat.idContrat in expiringContractIds %} contrat-expiring low-stock blinking{% endif %}\"
                                    {% if contrat.idContrat in expiringContractIds %}
                                        style=\"background-color: #ffb3b3 !important; color: #a30000 !important; animation: blink-pastel 1s linear infinite !important;\"
                                    {% endif %}>
                                    <td data-full-description=\"{{ contrat.Titre|default('N/A') }}\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ contrat.Titre|default('N/A') }}</strong>
                                    </td>
                                    <td data-full-description=\"{{ contrat.DateDebut ? contrat.DateDebut|date('Y-m-d') : 'N/A' }}\">{{ contrat.DateDebut|date('Y-m-d') }}</td>
                                    <td data-full-description=\"{{ contrat.DateFin ? contrat.DateFin|date('Y-m-d') : 'N/A' }}\">{{ contrat.DateFin|date('Y-m-d') }}</td>
                                    <td data-full-description=\"{{ contrat.Montant|default('N/A') }}\">{{ contrat.Montant|default('N/A') }}</td>
                                    <td data-full-description=\"{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}\">{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}</td>
                                    <td data-full-description=\"{{ contrat.Signature ? 'Signature disponible' : 'No Signature' }}\">
                                        {% if contrat.Signature %}
                                            <img src=\"{{ asset(contrat.Signature) }}\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        {% else %}
                                            No Signature
                                        {% endif %}
                                    </td>
                                    <td data-full-description=\"{{ contrat.article|default('N/A') }}\">{{ contrat.article|slice(0, 50) ~ (contrat.article|length > 50 ? '...' : '') }}</td>
                                    <td>
                                        {% if contrat.idContrat is not null %}
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_show', {'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_edit', {'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'pdf', 'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-file me-1\"></i> Exporter PDF
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('contrat_delete', {'idContrat': contrat.idContrat}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.idContrat) }}\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        {% else %}
                                            <span class=\"text-muted\">Actions non disponibles</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"8\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {# Conditionally hide pagination when searchTerm is not empty #}
                {% if searchTerm is empty %}
                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item {% if contrats.currentPageNumber == 1 %}disabled{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber - 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\"><i class=\"bx bx-chevron-left\"></i></a>
                                </li>
                                {% for page in 1..contrats.getPageCount() %}
                                    <li class=\"page-item {% if page == contrats.currentPageNumber %}active{% endif %}\">
                                        <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': page, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\">{{ page }}</a>
                                    </li>
                                {% endfor %}
                                <li class=\"page-item {% if contrats.currentPageNumber == contrats.getPageCount() %}disabled{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber + 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\"><i class=\"bx bx-chevron-right\"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"text-center\">
                            <small>
                                Page {{ contrats.currentPageNumber }} sur {{ contrats.getPageCount() }} |
                                Total Contrats : {{ contrats.totalItemCount }}
                            </small>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Blinking animation for expiring contracts */
        @keyframes blink-pastel {
            0% { background-color: #ffb3b3; }
            50% { background-color: #ffcccc; }
            100% { background-color: #ffb3b3; }
        }
        .contrat-expiring {
            font-weight: bold;
        }
        .low-stock.blinking {
            animation: blink-pastel 1s linear infinite;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3786755132717331\"
     crossorigin=\"anonymous\"></script> 
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.contrat-row') : [];

            // Recherche dynamique
            if (searchInput && rows.length) {
                searchInput.addEventListener('input', () => {
                    const searchTerm = searchInput.value.toLowerCase();

                    rows.forEach(row => {
                        const cells = row.querySelectorAll('td');
                        let match = false;

                        cells.forEach(cell => {
                            const text = cell.getAttribute('data-full-description') || cell.textContent;
                            if (text.toLowerCase().includes(searchTerm)) {
                                match = true;
                            }
                        });

                        row.style.display = match ? '' : 'none';
                    });
                });
            }
        });
    </script>
{% endblock %}", "contrat/main.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\main.html.twig");
    }
}
