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

/* espace/index.html.twig */
class __TwigTemplate_0ea680d277d2b5a682a179cc6969cf4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "espace/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Espaces Sportifs";
        
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
        yield from $this->loadTemplate("espace/espacesportif_widgets.html.twig", "espace/index.html.twig", 98)->unwrap()->yield(CoreExtension::merge($context, ["totalEspaces" =>         // line 99
(isset($context["totalEspaces"]) || array_key_exists("totalEspaces", $context) ? $context["totalEspaces"] : (function () { throw new RuntimeError('Variable "totalEspaces" does not exist.', 99, $this->source); })()), "espacesWithReservations" =>         // line 100
(isset($context["espacesWithReservations"]) || array_key_exists("espacesWithReservations", $context) ? $context["espacesWithReservations"] : (function () { throw new RuntimeError('Variable "espacesWithReservations" does not exist.', 100, $this->source); })())]));
        // line 102
        yield "
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Espaces Sportifs</span>
                        <!-- Search Bar -->
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <form method=\"get\" action=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index");
        yield "\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un espace...\"
                                        aria-label=\"Rechercher un espace...\"
                                        value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 119, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_new");
        yield "\" class=\"btn btn-primary me-2\">Ajouter un Espace</a>
                        <!-- Export Dropdown -->
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Catégorie</th>
                                <th>Capacité</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 152, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 153
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom_espace", [], "any", false, false, false, 156), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
                                    <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                                    <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_show", ["id_lieu" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "idLieu", [], "any", false, false, false, 167)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_edit", ["id_lieu" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "idLieu", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_delete", ["id_lieu" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "idLieu", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "idLieu", [], "any", false, false, false, 174))), "html", null, true);
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
        // line 183
        if (!$context['_iterated']) {
            // line 184
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun espace sportif trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 195, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 195) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 196, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 196) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 196, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 201, $this->source); })()), "pageCount", [], "any", false, false, false, 201)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 202
            yield "                                <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 202, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 202) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index", ["page" => $context["i"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 203, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                            
                            <li class=\"page-item ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 207, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 207) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 207, $this->source); })()), "pageCount", [], "any", false, false, false, 207))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 208, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 208) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 208, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <h5 class=\"mt-4\">Top Espaces par Capacité</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_capacite"]) || array_key_exists("top_capacite", $context) ? $context["top_capacite"] : (function () { throw new RuntimeError('Variable "top_capacite" does not exist.', 221, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 222
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
            yield "\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom_espace", [], "any", false, false, false, 228), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 229), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 229), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">Capacité: ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 232), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 236
        if (!$context['_iterated']) {
            // line 237
            yield "                            <li>Aucun espace sportif trouvé.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
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
        return "espace/index.html.twig";
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
        return array (  521 => 239,  514 => 237,  512 => 236,  503 => 232,  495 => 229,  491 => 228,  484 => 224,  480 => 222,  475 => 221,  459 => 208,  455 => 207,  452 => 206,  441 => 203,  436 => 202,  432 => 201,  424 => 196,  420 => 195,  411 => 188,  402 => 184,  400 => 183,  386 => 174,  382 => 173,  376 => 170,  370 => 167,  360 => 160,  356 => 159,  352 => 158,  347 => 156,  342 => 153,  337 => 152,  317 => 135,  313 => 134,  309 => 133,  299 => 126,  289 => 119,  278 => 111,  267 => 102,  265 => 100,  264 => 99,  263 => 98,  260 => 97,  251 => 95,  246 => 94,  237 => 92,  233 => 91,  229 => 89,  216 => 88,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Espaces Sportifs{% endblock %}

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

            {% include 'espace/espacesportif_widgets.html.twig' with {
                'totalEspaces': totalEspaces,
                'espacesWithReservations': espacesWithReservations
            } %}

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Espaces Sportifs</span>
                        <!-- Search Bar -->
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <form method=\"get\" action=\"{{ path('espace_index') }}\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un espace...\"
                                        aria-label=\"Rechercher un espace...\"
                                        value=\"{{ searchTerm|default('') }}\"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('espace_new') }}\" class=\"btn btn-primary me-2\">Ajouter un Espace</a>
                        <!-- Export Dropdown -->
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('espace_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('espace_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('espace_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Catégorie</th>
                                <th>Capacité</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for espace in espaces %}
                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ espace.nom_espace }}</strong>
                                    </td>
                                    <td>{{ espace.adresse }}</td>
                                    <td>{{ espace.categorie }}</td>
                                    <td>{{ espace.capacite }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('espace_show', {'id_lieu': espace.idLieu}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('espace_edit', {'id_lieu': espace.idLieu}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('espace_delete', {'id_lieu': espace.idLieu}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ espace.idLieu) }}\">
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
                                    <td colspan=\"5\" class=\"text-center\">Aucun espace sportif trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ espaces.currentPageNumber == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('espace_index', {'page': espaces.currentPageNumber - 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            {% for i in 1..espaces.pageCount %}
                                <li class=\"page-item {{ espaces.currentPageNumber == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('espace_index', {'page': i, 'search': searchTerm|default('')}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            
                            <li class=\"page-item {{ espaces.currentPageNumber == espaces.pageCount ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('espace_index', {'page': espaces.currentPageNumber + 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <h5 class=\"mt-4\">Top Espaces par Capacité</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        {% for espace in top_capacite %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ espace.nom_espace }}</h6>
                                        <small class=\"text-muted\">{{ espace.categorie }} - {{ espace.adresse }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">Capacité: {{ espace.capacite }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucun espace sportif trouvé.</li>
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
{% endblock %}", "espace/index.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\espace\\index.html.twig");
    }
}
