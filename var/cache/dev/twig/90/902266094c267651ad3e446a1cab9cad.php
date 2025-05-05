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

/* abonnement/index.html.twig */
class __TwigTemplate_c06065a4c34b5c356237fb4adaa3f3ed extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "abonnement/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Abonnements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .card-footer .pagination {
            margin: 0;
        }
        .card-footer .pagination .page-item {
            margin: 0 8px;
        }
        .card-footer .pagination .page-link {
            border-radius: 10px;
            padding: 12px 18px;
            color: #1a3c34;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .card-footer .pagination .page-item.active .page-link {
            background-color: #1a3c34;
            border-color: #1a3c34;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-footer .pagination .page-item .page-link:hover:not(.active) {
            background-color: #f1f3f5;
            color: #14532d;
            border-color: #b0b8bf;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-footer .pagination .page-item.disabled .page-link {
            color: #adb5bd;
            background-color: #f8f9fa;
            border-color: #ced4da;
            box-shadow: none;
            pointer-events: none;
        }
        .navbar-nav .nav-item {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-item i {
            font-size: 1.5rem;
            color: #6c757d;
            margin-right: 8px;
        }
        .navbar-nav .nav-item input[type=\"text\"] {
            border: 0;
            box-shadow: none;
            padding: 8px 12px;
            font-size: 14px;
            width: 200px;
            background-color: #f8f9fa;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-item input[type=\"text\"]:focus {
            outline: none;
            background-color: #ffffff;
        }
        .navbar-nav .nav-item input[type=\"text\"]::placeholder {
            color: #adb5bd;
        }
        .btn-yellow {
            background-color: #eab700;
            border-color: #eab700;
            color: #1a1a1a;
        }
        .btn-yellow:hover {
            background-color: #d4a600;
            border-color: #d4a600;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["success"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", ["error"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "
            ";
        // line 96
        yield from $this->loadTemplate("abonnement/abonnement_widgets.html.twig", "abonnement/index.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Abonnements</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un abonnement...\"
                                    aria-label=\"Rechercher un abonnement...\"
                                    value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 110, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                />
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_new");
        yield "\" class=\"btn btn-primary me-2\">Ajouter un Abonnement</a>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"abonnementsTable\">
                        <thead>
                            <tr>
                                <th>Club</th>
                                <th>Type d'Abonnement</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Tarif</th>
                                <th>État</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\" id=\"abonnementsTableBody\">
                            ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 144
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "club", [], "any", false, false, false, 147), "nomClub", [], "any", false, false, false, 147), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "typeAbonnement", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                    <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 150), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateFin", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "tarif", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                                    <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_show", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 160)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_edit", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_delete", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 167))), "html", null, true);
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
            $context['_iterated'] = true;
        }
        // line 176
        if (!$context['_iterated']) {
            // line 177
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucun abonnement trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer\" id=\"paginationContainer\">
                    ";
        // line 185
        yield from $this->loadTemplate("abonnement/_pagination.html.twig", "abonnement/index.html.twig", 185)->unwrap()->yield(CoreExtension::merge($context, ["abonnements" => (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 185, $this->source); })()), "searchTerm" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 185, $this->source); })())]));
        // line 186
        yield "                </div>
            </div>

            <h5 class=\"mt-4\">Abonnements Actifs</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_abonnements"]) || array_key_exists("active_abonnements", $context) ? $context["active_abonnements"] : (function () { throw new RuntimeError('Variable "active_abonnements" does not exist.', 193, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 194
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Abonnement\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "club", [], "any", false, false, false, 200), "nomClub", [], "any", false, false, false, 200), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 201), "d/m/Y"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "typeAbonnement", [], "any", false, false, false, 201), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 204), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 208
        if (!$context['_iterated']) {
            // line 209
            yield "                            <li>Aucun abonnement actif.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const abonnementsTableBody = document.getElementById('abonnementsTableBody');
            const paginationContainer = document.getElementById('paginationContainer');

            // Debounce function to limit how often AJAX requests are sent
            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            // Function to fetch and update table content
            function updateTable(searchTerm = '', page = 1) {
                fetch(`";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index");
        yield "?search=\${encodeURIComponent(searchTerm)}&page=\${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update table body
                    abonnementsTableBody.innerHTML = '';
                    if (data.abonnements.length === 0) {
                        abonnementsTableBody.innerHTML = `
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">Aucun abonnement trouvé</td>
                            </tr>
                        `;
                    } else {
                        data.abonnements.forEach(abonnement => {
                            const row = document.createElement('tr');
                            row.className = 'table-default';
                            row.innerHTML = `
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>\${abonnement.nom_club}</strong>
                                </td>
                                <td>\${abonnement.type_abonnement}</td>
                                <td>\${abonnement.date_debut}</td>
                                <td>\${abonnement.date_fin}</td>
                                <td>\${abonnement.tarif}</td>
                                <td>\${abonnement.etat}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/abonnement/\${abonnement.id_abonnement}\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/abonnement/\${abonnement.id_abonnement}/edit\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"/abonnement/\${abonnement.id_abonnement}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"\${generateCsrfToken('delete' + abonnement.id_abonnement)}\">
                                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                                <button class=\"dropdown-item\" type=\"submit\">
                                                    <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            `;
                            abonnementsTableBody.appendChild(row);
                        });
                    }

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Reattach event listeners to new pagination links
                    attachPaginationListeners();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    abonnementsTableBody.innerHTML = `
                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Erreur lors du chargement des données</td>
                        </tr>
                    `;
                });
            }

            // Function to generate CSRF token (client-side placeholder)
            function generateCsrfToken(id) {
                // In a real application, this would need to be properly implemented
                return 'dummy-csrf-token-' + id;
            }

            // Function to handle pagination clicks
            function attachPaginationListeners() {
                const paginationLinks = document.querySelectorAll('#paginationContainer .page-link');
                paginationLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (!this.parentElement.classList.contains('disabled') && !this.parentElement.classList.contains('active')) {
                            const url = new URL(this.href);
                            const page = url.searchParams.get('page') || 1;
                            const search = url.searchParams.get('search') || '';
                            updateTable(search, page);
                        }
                    });
                });
            }

            // Initial attachment of pagination listeners
            attachPaginationListeners();

            // Search input handler (debounced)
            searchInput.addEventListener('input', debounce(function() {
                updateTable(this.value, 1);
            }, 300));
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
        return "abonnement/index.html.twig";
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
        return array (  496 => 234,  471 => 211,  464 => 209,  462 => 208,  453 => 204,  445 => 201,  441 => 200,  434 => 196,  430 => 194,  425 => 193,  416 => 186,  414 => 185,  408 => 181,  399 => 177,  397 => 176,  383 => 167,  379 => 166,  373 => 163,  367 => 160,  357 => 153,  353 => 152,  349 => 151,  345 => 150,  341 => 149,  336 => 147,  331 => 144,  326 => 143,  304 => 124,  300 => 123,  296 => 122,  287 => 116,  278 => 110,  263 => 97,  261 => 96,  258 => 95,  249 => 93,  244 => 92,  235 => 90,  231 => 89,  227 => 87,  214 => 86,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Abonnements{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card-footer .pagination {
            margin: 0;
        }
        .card-footer .pagination .page-item {
            margin: 0 8px;
        }
        .card-footer .pagination .page-link {
            border-radius: 10px;
            padding: 12px 18px;
            color: #1a3c34;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .card-footer .pagination .page-item.active .page-link {
            background-color: #1a3c34;
            border-color: #1a3c34;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-footer .pagination .page-item .page-link:hover:not(.active) {
            background-color: #f1f3f5;
            color: #14532d;
            border-color: #b0b8bf;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-footer .pagination .page-item.disabled .page-link {
            color: #adb5bd;
            background-color: #f8f9fa;
            border-color: #ced4da;
            box-shadow: none;
            pointer-events: none;
        }
        .navbar-nav .nav-item {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-item i {
            font-size: 1.5rem;
            color: #6c757d;
            margin-right: 8px;
        }
        .navbar-nav .nav-item input[type=\"text\"] {
            border: 0;
            box-shadow: none;
            padding: 8px 12px;
            font-size: 14px;
            width: 200px;
            background-color: #f8f9fa;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-item input[type=\"text\"]:focus {
            outline: none;
            background-color: #ffffff;
        }
        .navbar-nav .nav-item input[type=\"text\"]::placeholder {
            color: #adb5bd;
        }
        .btn-yellow {
            background-color: #eab700;
            border-color: #eab700;
            color: #1a1a1a;
        }
        .btn-yellow:hover {
            background-color: #d4a600;
            border-color: #d4a600;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">{{ message }}</div>
            {% endfor %}

            {% include 'abonnement/abonnement_widgets.html.twig' %}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Abonnements</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un abonnement...\"
                                    aria-label=\"Rechercher un abonnement...\"
                                    value=\"{{ searchTerm|default('') }}\"
                                />
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('abonnement_new') }}\" class=\"btn btn-primary me-2\">Ajouter un Abonnement</a>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('abonnement_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('abonnement_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('abonnement_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"abonnementsTable\">
                        <thead>
                            <tr>
                                <th>Club</th>
                                <th>Type d'Abonnement</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Tarif</th>
                                <th>État</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\" id=\"abonnementsTableBody\">
                            {% for abonnement in abonnements %}
                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ abonnement.club.nomClub }}</strong>
                                    </td>
                                    <td>{{ abonnement.typeAbonnement }}</td>
                                    <td>{{ abonnement.dateDebut|date('d/m/Y') }}</td>
                                    <td>{{ abonnement.dateFin|date('d/m/Y') }}</td>
                                    <td>{{ abonnement.tarif }}</td>
                                    <td>{{ abonnement.etat }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('abonnement_show', {'idAbonnement': abonnement.idAbonnement}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('abonnement_edit', {'idAbonnement': abonnement.idAbonnement}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('abonnement_delete', {'idAbonnement': abonnement.idAbonnement}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ abonnement.idAbonnement) }}\">
                                                    <button class=\"dropdown-item\" type=\"submit\">
                                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucun abonnement trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer\" id=\"paginationContainer\">
                    {% include 'abonnement/_pagination.html.twig' with {'abonnements': abonnements, 'searchTerm': searchTerm} %}
                </div>
            </div>

            <h5 class=\"mt-4\">Abonnements Actifs</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        {% for abonnement in active_abonnements %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/chart.png') }}\" alt=\"Abonnement\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ abonnement.club.nomClub }}</h6>
                                        <small class=\"text-muted\">{{ abonnement.dateDebut|date('d/m/Y') }} - {{ abonnement.typeAbonnement }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">{{ abonnement.etat }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucun abonnement actif.</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const abonnementsTableBody = document.getElementById('abonnementsTableBody');
            const paginationContainer = document.getElementById('paginationContainer');

            // Debounce function to limit how often AJAX requests are sent
            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            // Function to fetch and update table content
            function updateTable(searchTerm = '', page = 1) {
                fetch(`{{ path('abonnement_index') }}?search=\${encodeURIComponent(searchTerm)}&page=\${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update table body
                    abonnementsTableBody.innerHTML = '';
                    if (data.abonnements.length === 0) {
                        abonnementsTableBody.innerHTML = `
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">Aucun abonnement trouvé</td>
                            </tr>
                        `;
                    } else {
                        data.abonnements.forEach(abonnement => {
                            const row = document.createElement('tr');
                            row.className = 'table-default';
                            row.innerHTML = `
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>\${abonnement.nom_club}</strong>
                                </td>
                                <td>\${abonnement.type_abonnement}</td>
                                <td>\${abonnement.date_debut}</td>
                                <td>\${abonnement.date_fin}</td>
                                <td>\${abonnement.tarif}</td>
                                <td>\${abonnement.etat}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/abonnement/\${abonnement.id_abonnement}\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/abonnement/\${abonnement.id_abonnement}/edit\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"/abonnement/\${abonnement.id_abonnement}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"\${generateCsrfToken('delete' + abonnement.id_abonnement)}\">
                                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                                <button class=\"dropdown-item\" type=\"submit\">
                                                    <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            `;
                            abonnementsTableBody.appendChild(row);
                        });
                    }

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Reattach event listeners to new pagination links
                    attachPaginationListeners();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    abonnementsTableBody.innerHTML = `
                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Erreur lors du chargement des données</td>
                        </tr>
                    `;
                });
            }

            // Function to generate CSRF token (client-side placeholder)
            function generateCsrfToken(id) {
                // In a real application, this would need to be properly implemented
                return 'dummy-csrf-token-' + id;
            }

            // Function to handle pagination clicks
            function attachPaginationListeners() {
                const paginationLinks = document.querySelectorAll('#paginationContainer .page-link');
                paginationLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (!this.parentElement.classList.contains('disabled') && !this.parentElement.classList.contains('active')) {
                            const url = new URL(this.href);
                            const page = url.searchParams.get('page') || 1;
                            const search = url.searchParams.get('search') || '';
                            updateTable(search, page);
                        }
                    });
                });
            }

            // Initial attachment of pagination listeners
            attachPaginationListeners();

            // Search input handler (debounced)
            searchInput.addEventListener('input', debounce(function() {
                updateTable(this.value, 1);
            }, 300));
        });
    </script>
{% endblock %}", "abonnement/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\abonnement\\index.html.twig");
    }
}
