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

/* reservation/index.html.twig */
class __TwigTemplate_634973acd54118b3c992ea76347885f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "reservation/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Réservations";
        
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
        yield from $this->loadTemplate("reservation/reservation_widgets.html.twig", "reservation/index.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Réservations</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher une réservation...\"
                                    aria-label=\"Rechercher une réservation...\"
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        yield "\" class=\"btn btn-primary me-2\">Ajouter une Réservation</a>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"reservationsTable\">
                        <thead>
                            <tr>
                                <th>Lieu Sportif</th>
                                <th>Date Réservée</th>
                                <th>Motif</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\" id=\"reservationsTableBody\">
                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 141, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 142
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espacesportif", [], "any", false, false, false, 145), "nom_espace", [], "any", false, false, false, 145), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservee", [], "any", false, false, false, 147), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "motif", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                                    <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 162)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 163))), "html", null, true);
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
        // line 172
        if (!$context['_iterated']) {
            // line 173
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer\" id=\"paginationContainer\">
                    ";
        // line 181
        yield from $this->loadTemplate("reservation/_pagination.html.twig", "reservation/index.html.twig", 181)->unwrap()->yield(CoreExtension::merge($context, ["reservations" => (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 181, $this->source); })()), "searchTerm" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 181, $this->source); })())]));
        // line 182
        yield "                </div>
            </div>

            <h5 class=\"mt-4\">Réservations Confirmées à Venir</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_reservations"]) || array_key_exists("upcoming_reservations", $context) ? $context["upcoming_reservations"] : (function () { throw new RuntimeError('Variable "upcoming_reservations" does not exist.', 189, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 190
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Reservation\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espacesportif", [], "any", false, false, false, 196), "nom_espace", [], "any", false, false, false, 196), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservee", [], "any", false, false, false, 197), "d/m/Y H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "motif", [], "any", false, false, false, 197), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 200), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 204
        if (!$context['_iterated']) {
            // line 205
            yield "                            <li>Aucune réservation confirmée à venir.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const reservationsTableBody = document.getElementById('reservationsTableBody');
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
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "?search=\${encodeURIComponent(searchTerm)}&page=\${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update table body
                    reservationsTableBody.innerHTML = '';
                    if (data.reservations.length === 0) {
                        reservationsTableBody.innerHTML = `
                            <tr>
                                <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée</td>
                            </tr>
                        `;
                    } else {
                        data.reservations.forEach(reservation => {
                            const row = document.createElement('tr');
                            row.className = 'table-default';
                            row.innerHTML = `
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>\${reservation.nom_espace}</strong>
                                </td>
                                <td>\${reservation.date_reservee}</td>
                                <td>\${reservation.motif}</td>
                                <td>\${reservation.status}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/reservation/\${reservation.id_reservation}\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/reservation/\${reservation.id_reservation}/edit\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"/reservation/\${reservation.id_reservation}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"\${generateCsrfToken('delete' + reservation.id_reservation)}\">
                                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                                <button class=\"dropdown-item\" type=\"submit\">
                                                    <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            `;
                            reservationsTableBody.appendChild(row);
                        });
                    }

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Reattach event listeners to new pagination links
                    attachPaginationListeners();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    reservationsTableBody.innerHTML = `
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Erreur lors du chargement des données</td>
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
        return "reservation/index.html.twig";
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
        return array (  486 => 230,  461 => 207,  454 => 205,  452 => 204,  443 => 200,  435 => 197,  431 => 196,  424 => 192,  420 => 190,  415 => 189,  406 => 182,  404 => 181,  398 => 177,  389 => 173,  387 => 172,  373 => 163,  369 => 162,  363 => 159,  357 => 156,  347 => 149,  343 => 148,  339 => 147,  334 => 145,  329 => 142,  324 => 141,  304 => 124,  300 => 123,  296 => 122,  287 => 116,  278 => 110,  263 => 97,  261 => 96,  258 => 95,  249 => 93,  244 => 92,  235 => 90,  231 => 89,  227 => 87,  214 => 86,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Réservations{% endblock %}

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

            {% include 'reservation/reservation_widgets.html.twig' %}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Réservations</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher une réservation...\"
                                    aria-label=\"Rechercher une réservation...\"
                                    value=\"{{ searchTerm|default('') }}\"
                                />
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('reservation_new') }}\" class=\"btn btn-primary me-2\">Ajouter une Réservation</a>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('reservation_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('reservation_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('reservation_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"reservationsTable\">
                        <thead>
                            <tr>
                                <th>Lieu Sportif</th>
                                <th>Date Réservée</th>
                                <th>Motif</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\" id=\"reservationsTableBody\">
                            {% for reservation in reservations %}
                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ reservation.espacesportif.nom_espace }}</strong>
                                    </td>
                                    <td>{{ reservation.dateReservee|date('d/m/Y H:i') }}</td>
                                    <td>{{ reservation.motif }}</td>
                                    <td>{{ reservation.status }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('reservation_show', {'id_reservation': reservation.idReservation}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('reservation_edit', {'id_reservation': reservation.idReservation}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('reservation_delete', {'id_reservation': reservation.idReservation}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.idReservation) }}\">
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
                                    <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer\" id=\"paginationContainer\">
                    {% include 'reservation/_pagination.html.twig' with {'reservations': reservations, 'searchTerm': searchTerm} %}
                </div>
            </div>

            <h5 class=\"mt-4\">Réservations Confirmées à Venir</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        {% for reservation in upcoming_reservations %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/chart.png') }}\" alt=\"Reservation\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ reservation.espacesportif.nom_espace }}</h6>
                                        <small class=\"text-muted\">{{ reservation.dateReservee|date('d/m/Y H:i') }} - {{ reservation.motif }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">{{ reservation.status }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucune réservation confirmée à venir.</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const reservationsTableBody = document.getElementById('reservationsTableBody');
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
                fetch(`{{ path('reservation_index') }}?search=\${encodeURIComponent(searchTerm)}&page=\${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update table body
                    reservationsTableBody.innerHTML = '';
                    if (data.reservations.length === 0) {
                        reservationsTableBody.innerHTML = `
                            <tr>
                                <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée</td>
                            </tr>
                        `;
                    } else {
                        data.reservations.forEach(reservation => {
                            const row = document.createElement('tr');
                            row.className = 'table-default';
                            row.innerHTML = `
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>\${reservation.nom_espace}</strong>
                                </td>
                                <td>\${reservation.date_reservee}</td>
                                <td>\${reservation.motif}</td>
                                <td>\${reservation.status}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/reservation/\${reservation.id_reservation}\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/reservation/\${reservation.id_reservation}/edit\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"/reservation/\${reservation.id_reservation}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"\${generateCsrfToken('delete' + reservation.id_reservation)}\">
                                                <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                                <button class=\"dropdown-item\" type=\"submit\">
                                                    <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            `;
                            reservationsTableBody.appendChild(row);
                        });
                    }

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Reattach event listeners to new pagination links
                    attachPaginationListeners();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    reservationsTableBody.innerHTML = `
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Erreur lors du chargement des données</td>
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
{% endblock %}", "reservation/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\reservation\\index.html.twig");
    }
}
