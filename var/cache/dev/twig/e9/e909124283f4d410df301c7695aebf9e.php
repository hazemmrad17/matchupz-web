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

/* fournisseur/index.html.twig */
class __TwigTemplate_7bbcb4120f058b6e633482523485e730 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "fournisseur/index.html.twig", 5)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        yield "Liste des Fournisseurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Tableau de Bord
            </h4>

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Fournisseurs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un fournisseur...\"
                                    aria-label=\"Rechercher un fournisseur...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div>
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Fournisseur
                        </a>
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_stats");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"fournisseursTable\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Catégorie Produit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 63
            yield "                                <tr class=\"table-default\">
                                    <td><i class=\"bx bx-store fa-lg text-warning me-3\"></i><strong>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 64), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 65
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 65), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 66), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 67
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 67), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_edit", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 81))), "html", null, true);
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
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun fournisseur trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 103
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 103) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 104) - 1)]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 108, $this->source); })()), "pageCount", [], "any", false, false, false, 108)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            yield "                                <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 109, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 109) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                            <li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 113) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "pageCount", [], "any", false, false, false, 113))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 114, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 114) + 1)]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Statistics Section -->
            <div class=\"row mt-4\">
                <!-- Summary Cards -->
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Total Suppliers</h5>
                            <p class=\"card-text display-4\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Unique Categories</h5>
                            <p class=\"card-text display-4\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 138, $this->source); })()), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Email Coverage</h5>
                            <p class=\"card-text display-4\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "%</p>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Category Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"categoryDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Top 5 Locations</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"locationDistributionChart\"></canvas>
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

    // line 177
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

        // line 178
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('fournisseursTable');
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
                    row.style.display = match ? '' : 'none';
                }
            });

            // Category Distribution Chart
            const categoryCtx = document.getElementById('categoryDistributionChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'pie',
                data: {
                    labels: [";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 209, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    datasets: [{
                        data: [";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Location Distribution Chart
            const locationCtx = document.getElementById('locationDistributionChart').getContext('2d');
            new Chart(locationCtx, {
                type: 'bar',
                data: {
                    labels: [";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 228, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["location"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    datasets: [{
                        label: 'Suppliers',
                        data: [";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                        backgroundColor: '#36A2EB'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: { display: true, text: 'Number of Suppliers' }
                        },
                        x: {
                            title: { display: true, text: 'City' }
                        }
                    },
                    plugins: {
                        legend: { display: false }
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
        return "fournisseur/index.html.twig";
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
        return array (  490 => 231,  475 => 228,  447 => 211,  433 => 209,  398 => 178,  385 => 177,  344 => 146,  333 => 138,  322 => 130,  303 => 114,  298 => 113,  287 => 110,  282 => 109,  278 => 108,  271 => 104,  267 => 103,  257 => 95,  248 => 91,  246 => 90,  232 => 81,  228 => 80,  222 => 77,  216 => 74,  206 => 67,  202 => 66,  198 => 65,  194 => 64,  191 => 63,  186 => 62,  161 => 40,  155 => 37,  127 => 11,  114 => 10,  91 => 8,  79 => 5,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/fournisseur/index.html.twig #}
{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Fournisseurs{% endblock %}

{% block body %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Tableau de Bord
            </h4>

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Fournisseurs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un fournisseur...\"
                                    aria-label=\"Rechercher un fournisseur...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div>
                        <a href=\"{{ path('app_fournisseur_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Fournisseur
                        </a>
                        <a href=\"{{ path('app_fournisseur_stats') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"fournisseursTable\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Catégorie Produit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for fournisseur in pagination %}
                                <tr class=\"table-default\">
                                    <td><i class=\"bx bx-store fa-lg text-warning me-3\"></i><strong>{{ fournisseur.nom }}</strong></td>
                                    <td>{{ fournisseur.email ?: 'N/A' }}</td>
                                    <td>{{ fournisseur.adresse ?: 'N/A' }}</td>
                                    <td>{{ fournisseur.categorie_produit ?: 'N/A' }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_show', {'id_fournisseur': fournisseur.id_fournisseur}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_edit', {'id_fournisseur': fournisseur.id_fournisseur}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('app_fournisseur_delete', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id_fournisseur) }}\">
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
                                    <td colspan=\"5\" class=\"text-center\">Aucun fournisseur trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ pagination.currentPageNumber == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            {% for i in 1..pagination.pageCount %}
                                <li class=\"page-item {{ pagination.currentPageNumber == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': i}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            <li class=\"page-item {{ pagination.currentPageNumber == pagination.pageCount ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Statistics Section -->
            <div class=\"row mt-4\">
                <!-- Summary Cards -->
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Total Suppliers</h5>
                            <p class=\"card-text display-4\">{{ totalSuppliers }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Unique Categories</h5>
                            <p class=\"card-text display-4\">{{ categoriesCount }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Email Coverage</h5>
                            <p class=\"card-text display-4\">{{ emailCoverage }}%</p>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Category Distribution</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"categoryDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>Top 5 Locations</h5>
                        </div>
                        <div class=\"card-body\">
                            <canvas id=\"locationDistributionChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('fournisseursTable');
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
                    row.style.display = match ? '' : 'none';
                }
            });

            // Category Distribution Chart
            const categoryCtx = document.getElementById('categoryDistributionChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'pie',
                data: {
                    labels: [{% for category in categoryDistribution|keys %}'{{ category }}',{% endfor %}],
                    datasets: [{
                        data: [{% for count in categoryDistribution %}{{ count }},{% endfor %}],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Location Distribution Chart
            const locationCtx = document.getElementById('locationDistributionChart').getContext('2d');
            new Chart(locationCtx, {
                type: 'bar',
                data: {
                    labels: [{% for location in locationDistribution|keys %}'{{ location }}',{% endfor %}],
                    datasets: [{
                        label: 'Suppliers',
                        data: [{% for count in locationDistribution %}{{ count }},{% endfor %}],
                        backgroundColor: '#36A2EB'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: { display: true, text: 'Number of Suppliers' }
                        },
                        x: {
                            title: { display: true, text: 'City' }
                        }
                    },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        });
    </script>
{% endblock %}", "fournisseur/index.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\fournisseur\\index.html.twig");
    }
}
