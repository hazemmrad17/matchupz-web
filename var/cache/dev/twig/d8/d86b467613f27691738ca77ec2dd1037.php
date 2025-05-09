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

/* club/index.html.twig */
class __TwigTemplate_c6d2e28146cbfb8af029f7dd3512e6bc extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Liste des Clubs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            ";
        // line 8
        yield from $this->loadTemplate("club/club_widgets.html.twig", "club/index.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["clubs" => (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 8, $this->source); })()), "clubs_with_photos" => (isset($context["clubs_with_photos"]) || array_key_exists("clubs_with_photos", $context) ? $context["clubs_with_photos"] : (function () { throw new RuntimeError('Variable "clubs_with_photos" does not exist.', 8, $this->source); })())]));
        // line 9
        yield "
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Clubs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un club...\"
                                    aria-label=\"Rechercher un club...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <!-- New Club Button -->
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Club
                        </a>
                        <!-- Statistics Button -->
                        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_statistics");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <!-- Export Button (Yellow) -->
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"clubsTable\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 62
            yield "                                <tr>
                                    <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nomClub", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, $context["club"], "photoUrl", [], "any", false, false, false, 65)) {
                // line 66
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "photoUrl", [], "any", false, false, false, 66)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nomClub", [], "any", false, false, false, 66), "html", null, true);
                yield "\" style=\"max-width: 100px;\" onerror=\"this.onerror=null;this.src='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default_club.png"), "html", null, true);
                yield "';\">
                                        ";
            } else {
                // line 68
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default_club.png"), "html", null, true);
                yield "\" alt=\"Default Club\" style=\"max-width: 100px;\">
                                        ";
            }
            // line 70
            yield "                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show", ["idClub" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "idClub", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", ["idClub" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "idClub", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_delete", ["idClub" => CoreExtension::getAttribute($this->env, $this->source, $context["club"], "idClub", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce club ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["club"], "idClub", [], "any", false, false, false, 84))), "html", null, true);
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
        // line 93
        if (!$context['_iterated']) {
            // line 94
            yield "                                <tr>
                                    <td colspan=\"3\" class=\"text-center\">Aucun club trouvé.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['club'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "                        </tbody>
                    </table>
                    <!-- Pagination -->
                    ";
        // line 101
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 101, $this->source); })()) > 1)) {
            // line 102
            yield "                        <nav aria-label=\"Page navigation\" class=\"mt-3\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item ";
            // line 104
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 104, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index", ["page" => 1]);
            yield "\" aria-label=\"First\">
                                        <i class=\"tf-icon bx bx-chevrons-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item ";
            // line 109
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 109, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 110, $this->source); })()) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                        <i class=\"tf-icon bx bx-chevron-left\"></i>
                                    </a>
                                </li>
                                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 114, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                yield "                                    <li class=\"page-item ";
                yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 115, $this->source); })()) == $context["i"])) ? ("active") : (""));
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index", ["page" => $context["i"]]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "                                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 119, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 119, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 120, $this->source); })()) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                        <i class=\"tf-icon bx bx-chevron-right\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item ";
            // line 124
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 124, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 124, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index", ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 125, $this->source); })())]), "html", null, true);
            yield "\" aria-label=\"Last\">
                                        <i class=\"tf-icon bx bx-chevrons-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    ";
        }
        // line 132
        yield "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('clubsTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.toLowerCase();

                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cells = row.getElementsByTagName('td');
                    let match = false;

                    for (let j = 0; j < cells.length; j++) {
                        const cellText = cells[j].textContent.toLowerCase();
                        if (cellText.includes(searchText)) {
                            match = true;
                            break;
                        }
                    }

                    if (match) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
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
        return "club/index.html.twig";
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
        return array (  364 => 139,  351 => 138,  336 => 132,  326 => 125,  322 => 124,  315 => 120,  310 => 119,  299 => 116,  294 => 115,  290 => 114,  283 => 110,  279 => 109,  272 => 105,  268 => 104,  264 => 102,  262 => 101,  257 => 98,  248 => 94,  246 => 93,  232 => 84,  228 => 83,  222 => 80,  216 => 77,  207 => 70,  201 => 68,  191 => 66,  189 => 65,  184 => 63,  181 => 62,  176 => 61,  158 => 46,  154 => 45,  150 => 44,  138 => 35,  131 => 31,  107 => 9,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Clubs{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% include 'club/club_widgets.html.twig' with {'clubs': clubs, 'clubs_with_photos': clubs_with_photos} %}

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Clubs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un club...\"
                                    aria-label=\"Rechercher un club...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <!-- New Club Button -->
                        <a href=\"{{ path('club_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Club
                        </a>
                        <!-- Statistics Button -->
                        <a href=\"{{ path('club_statistics') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <!-- Export Button (Yellow) -->
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('club_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('club_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('club_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"clubsTable\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for club in clubs %}
                                <tr>
                                    <td>{{ club.nomClub }}</td>
                                    <td>
                                        {% if club.photoUrl %}
                                            <img src=\"{{ asset(club.photoUrl) }}\" alt=\"{{ club.nomClub }}\" style=\"max-width: 100px;\" onerror=\"this.onerror=null;this.src='{{ asset('img/default_club.png') }}';\">
                                        {% else %}
                                            <img src=\"{{ asset('img/default_club.png') }}\" alt=\"Default Club\" style=\"max-width: 100px;\">
                                        {% endif %}
                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('club_show', {'idClub': club.idClub}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('club_edit', {'idClub': club.idClub}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('club_delete', {'idClub': club.idClub}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce club ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ club.idClub) }}\">
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
                                    <td colspan=\"3\" class=\"text-center\">Aucun club trouvé.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    {% if totalPages > 1 %}
                        <nav aria-label=\"Page navigation\" class=\"mt-3\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('club_index', {'page': 1}) }}\" aria-label=\"First\">
                                        <i class=\"tf-icon bx bx-chevrons-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('club_index', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                        <i class=\"tf-icon bx bx-chevron-left\"></i>
                                    </a>
                                </li>
                                {% for i in 1..totalPages %}
                                    <li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
                                        <a class=\"page-link\" href=\"{{ path('club_index', {'page': i}) }}\">{{ i }}</a>
                                    </li>
                                {% endfor %}
                                <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('club_index', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                        <i class=\"tf-icon bx bx-chevron-right\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('club_index', {'page': totalPages}) }}\" aria-label=\"Last\">
                                        <i class=\"tf-icon bx bx-chevrons-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('clubsTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.toLowerCase();

                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cells = row.getElementsByTagName('td');
                    let match = false;

                    for (let j = 0; j < cells.length; j++) {
                        const cellText = cells[j].textContent.toLowerCase();
                        if (cellText.includes(searchText)) {
                            match = true;
                            break;
                        }
                    }

                    if (match) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });
    </script>
{% endblock %}", "club/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\club\\index.html.twig");
    }
}
