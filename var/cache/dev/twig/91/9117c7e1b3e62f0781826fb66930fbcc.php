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
class __TwigTemplate_4711f1eb478f5e665ac183233ebddcd4 extends Template
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
            margin: 0; /* Remove default margins */
        }
        .card-footer .pagination .page-item {
            margin: 0 8px; /* Increase spacing between buttons for clarity */
        }
        .card-footer .pagination .page-link {
            border-radius: 10px; /* More pronounced rounded corners */
            padding: 12px 18px; /* Larger padding for bigger buttons */
            color: #1a3c34; /* Dark teal for better contrast */
            background-color: #ffffff; /* White background for inactive buttons */
            border: 1px solid #ced4da; /* Slightly darker border for definition */
            font-size: 16px; /* Larger font for readability */
            font-weight: 500; /* Medium font weight for clarity */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
            transition: all 0.3s ease; /* Smooth transition for hover effects */
        }
        .card-footer .pagination .page-item.active .page-link {
            background-color: #1a3c34; /* Dark teal for active button */
            border-color: #1a3c34; /* Match border to background */
            color: #ffffff; /* White text for active button */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Slightly stronger shadow for active state */
        }
        .card-footer .pagination .page-item .page-link:hover:not(.active) {
            background-color: #f1f3f5; /* Light gray background on hover for inactive buttons */
            color: #14532d; /* Slightly darker teal on hover */
            border-color: #b0b8bf; /* Slightly darker border on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Lift effect on hover */
        }
        .card-footer .pagination .page-item.disabled .page-link {
            color: #adb5bd; /* Lighter gray for disabled buttons */
            background-color: #f8f9fa; /* Very light gray background */
            border-color: #ced4da; /* Match inactive border */
            box-shadow: none; /* No shadow for disabled state */
            pointer-events: none; /* Disable interaction */
        }
        /* Style for the search bar */
        .navbar-nav .nav-item {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-item i {
            font-size: 1.5rem; /* Size of the search icon */
            color: #6c757d; /* Gray color for the icon */
            margin-right: 8px;
        }
        .navbar-nav .nav-item input[type=\"text\"] {
            border: 0; /* Remove default border */
            box-shadow: none; /* Remove default shadow */
            padding: 8px 12px;
            font-size: 14px;
            width: 200px; /* Adjust width as needed */
            background-color: #f8f9fa; /* Light background to match card */
            border-radius: 5px; /* Slight rounding */
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-item input[type=\"text\"]:focus {
            outline: none; /* Remove default outline */
            background-color: #ffffff; /* White background on focus */
        }
        .navbar-nav .nav-item input[type=\"text\"]::placeholder {
            color: #adb5bd; /* Placeholder color */
        }
        /* Style for the export button */
        .btn-yellow {
            background-color: #eab700; /* Yellow background */
            border-color: #eab700;
            color: #1a1a1a; /* Dark text for contrast */
        }
        .btn-yellow:hover {
            background-color: #d4a600; /* Darker yellow on hover */
            border-color: #d4a600;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["success"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["error"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 95
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
            ";
        // line 98
        yield from $this->loadTemplate("reservation/reservation_widgets.html.twig", "reservation/index.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Réservations</span>
                        <!-- Search Bar -->
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <form method=\"get\" action=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher une réservation...\"
                                        aria-label=\"Rechercher une réservation...\"
                                        value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 115, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        yield "\" class=\"btn btn-primary me-2\">Ajouter une Réservation</a>
                        <!-- Export Dropdown -->
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Lieu Sportif</th>
                                <th>Date Réservée</th>
                                <th>Motif</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 148, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 149
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espacesportif", [], "any", false, false, false, 152), "nom_espace", [], "any", false, false, false, 152), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservee", [], "any", false, false, false, 154), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "motif", [], "any", false, false, false, 155), "html", null, true);
            yield "</td>
                                    <td>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 156), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 170))), "html", null, true);
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
        // line 179
        if (!$context['_iterated']) {
            // line 180
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 191
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 191, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 191) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 192, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 192) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 192, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 197, $this->source); })()), "pageCount", [], "any", false, false, false, 197)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 198
            yield "                                <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 198, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 198) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => $context["i"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 199, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                            
                            <li class=\"page-item ";
        // line 203
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 203, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 203) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 203, $this->source); })()), "pageCount", [], "any", false, false, false, 203))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 204, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 204) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 204, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <h5 class=\"mt-4\">Réservations Confirmées à Venir</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_reservations"]) || array_key_exists("upcoming_reservations", $context) ? $context["upcoming_reservations"] : (function () { throw new RuntimeError('Variable "upcoming_reservations" does not exist.', 217, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 218
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Reservation\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espacesportif", [], "any", false, false, false, 224), "nom_espace", [], "any", false, false, false, 224), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservee", [], "any", false, false, false, 225), "d/m/Y H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "motif", [], "any", false, false, false, 225), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 228), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 232
        if (!$context['_iterated']) {
            // line 233
            yield "                            <li>Aucune réservation confirmée à venir.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for dynamic search -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.getElementById('searchForm');

            // Debounce function to limit how often the form is submitted
            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            // Submit the form when the user types (debounced)
            searchInput.addEventListener('input', debounce(function () {
                searchForm.submit();
            }, 300)); // Wait 300ms after the last keystroke before submitting
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
        return array (  518 => 235,  511 => 233,  509 => 232,  500 => 228,  492 => 225,  488 => 224,  481 => 220,  477 => 218,  472 => 217,  456 => 204,  452 => 203,  449 => 202,  438 => 199,  433 => 198,  429 => 197,  421 => 192,  417 => 191,  408 => 184,  399 => 180,  397 => 179,  383 => 170,  379 => 169,  373 => 166,  367 => 163,  357 => 156,  353 => 155,  349 => 154,  344 => 152,  339 => 149,  334 => 148,  314 => 131,  310 => 130,  306 => 129,  296 => 122,  286 => 115,  275 => 107,  265 => 99,  263 => 98,  260 => 97,  251 => 95,  246 => 94,  237 => 92,  233 => 91,  229 => 89,  216 => 88,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
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
            margin: 0; /* Remove default margins */
        }
        .card-footer .pagination .page-item {
            margin: 0 8px; /* Increase spacing between buttons for clarity */
        }
        .card-footer .pagination .page-link {
            border-radius: 10px; /* More pronounced rounded corners */
            padding: 12px 18px; /* Larger padding for bigger buttons */
            color: #1a3c34; /* Dark teal for better contrast */
            background-color: #ffffff; /* White background for inactive buttons */
            border: 1px solid #ced4da; /* Slightly darker border for definition */
            font-size: 16px; /* Larger font for readability */
            font-weight: 500; /* Medium font weight for clarity */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
            transition: all 0.3s ease; /* Smooth transition for hover effects */
        }
        .card-footer .pagination .page-item.active .page-link {
            background-color: #1a3c34; /* Dark teal for active button */
            border-color: #1a3c34; /* Match border to background */
            color: #ffffff; /* White text for active button */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Slightly stronger shadow for active state */
        }
        .card-footer .pagination .page-item .page-link:hover:not(.active) {
            background-color: #f1f3f5; /* Light gray background on hover for inactive buttons */
            color: #14532d; /* Slightly darker teal on hover */
            border-color: #b0b8bf; /* Slightly darker border on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Lift effect on hover */
        }
        .card-footer .pagination .page-item.disabled .page-link {
            color: #adb5bd; /* Lighter gray for disabled buttons */
            background-color: #f8f9fa; /* Very light gray background */
            border-color: #ced4da; /* Match inactive border */
            box-shadow: none; /* No shadow for disabled state */
            pointer-events: none; /* Disable interaction */
        }
        /* Style for the search bar */
        .navbar-nav .nav-item {
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-item i {
            font-size: 1.5rem; /* Size of the search icon */
            color: #6c757d; /* Gray color for the icon */
            margin-right: 8px;
        }
        .navbar-nav .nav-item input[type=\"text\"] {
            border: 0; /* Remove default border */
            box-shadow: none; /* Remove default shadow */
            padding: 8px 12px;
            font-size: 14px;
            width: 200px; /* Adjust width as needed */
            background-color: #f8f9fa; /* Light background to match card */
            border-radius: 5px; /* Slight rounding */
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-item input[type=\"text\"]:focus {
            outline: none; /* Remove default outline */
            background-color: #ffffff; /* White background on focus */
        }
        .navbar-nav .nav-item input[type=\"text\"]::placeholder {
            color: #adb5bd; /* Placeholder color */
        }
        /* Style for the export button */
        .btn-yellow {
            background-color: #eab700; /* Yellow background */
            border-color: #eab700;
            color: #1a1a1a; /* Dark text for contrast */
        }
        .btn-yellow:hover {
            background-color: #d4a600; /* Darker yellow on hover */
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
                        <!-- Search Bar -->
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <form method=\"get\" action=\"{{ path('reservation_index') }}\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher une réservation...\"
                                        aria-label=\"Rechercher une réservation...\"
                                        value=\"{{ searchTerm|default('') }}\"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('reservation_new') }}\" class=\"btn btn-primary me-2\">Ajouter une Réservation</a>
                        <!-- Export Dropdown -->
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
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Lieu Sportif</th>
                                <th>Date Réservée</th>
                                <th>Motif</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
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
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ reservations.currentPageNumber == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': reservations.currentPageNumber - 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            {% for i in 1..reservations.pageCount %}
                                <li class=\"page-item {{ reservations.currentPageNumber == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': i, 'search': searchTerm|default('')}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            
                            <li class=\"page-item {{ reservations.currentPageNumber == reservations.pageCount ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': reservations.currentPageNumber + 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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

    <!-- JavaScript for dynamic search -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.getElementById('searchForm');

            // Debounce function to limit how often the form is submitted
            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            // Submit the form when the user types (debounced)
            searchInput.addEventListener('input', debounce(function () {
                searchForm.submit();
            }, 300)); // Wait 300ms after the last keystroke before submitting
        });
    </script>
{% endblock %}", "reservation/index.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\reservation\\index.html.twig");
    }
}
