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
class __TwigTemplate_65d3b9bfa8e127d70918a4690ab2ec08 extends Template
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
            'widgets' => [$this, 'block_widgets'],
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

    // line 6
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

        // line 7
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">

        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 20
        yield "
        ";
        // line 22
        yield "        <div class=\"row mt-4\">
            <!-- Total Suppliers Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
        yield "\"
                                    alt=\"Total Suppliers\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                        <h3 class=\"card-title mb-2\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Nombre total de fournisseurs</small>
                    </div>
                </div>
            </div>

            <!-- Suppliers Added This Month Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/girl-doing-yoga-light.png"), "html", null, true);
        yield "\"
                                    alt=\"Suppliers This Month\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Ajoutés Ce Mois</span>
                        <h3 class=\"card-title mb-2\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("suppliersThisMonth", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["suppliersThisMonth"]) || array_key_exists("suppliersThisMonth", $context) ? $context["suppliersThisMonth"] : (function () { throw new RuntimeError('Variable "suppliersThisMonth" does not exist.', 57, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Fournisseurs ajoutés en ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F"), "html", null, true);
        yield "</small>
                    </div>
                </div>
            </div>

            <!-- Average Suppliers per Category Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
        yield "\"
                                    alt=\"Average per Category\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Catégorie</span>
                        <h3 class=\"card-title mb-2\">";
        // line 77
        yield ((((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 77, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 77, $this->source); })()) / (isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 77, $this->source); })())), 1), "html", null, true)) : (0));
        yield "</h3>
                        <small class=\"text-muted\">Fournisseurs par catégorie</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    ";
        // line 88
        yield "                    <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, email, adresse...\" value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    ";
        // line 98
        yield "                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["filter" => "email"]);
        yield "\">Par Email</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["filter" => "categorie_produit"]);
        yield "\">Par Catégorie</a></li>
                        </ul>
                    </div>

                    ";
        // line 110
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_stats");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    ";
        // line 115
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Fournisseur
                    </a>

                    ";
        // line 120
        yield "                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_export", ["format" => "xlsx"]);
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_export", ["format" => "csv"]);
        yield "\">
                                    <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"fournisseursTable\">
                    <thead>
                        <tr>
                            <th><a href=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["sort" => "nom", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 144, $this->source); })()) == "nom") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 144, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Nom</a></th>
                            <th><a href=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["sort" => "email", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 145, $this->source); })()) == "email") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 145, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Email</a></th>
                            <th><a href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["sort" => "adresse", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 146, $this->source); })()) == "adresse") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 146, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Adresse</a></th>
                            <th><a href=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["sort" => "categorie_produit", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 147, $this->source); })()) == "categorie_produit") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 147, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">Catégorie Produit</a></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 152, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 153
            yield "                            <tr class=\"table-default\">
                                <td>
                                    <i class=\"bx bx-store fa-lg text-warning me-3\"></i>
                                    <strong>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nom", [], "any", false, false, false, 156), "html", null, true);
            yield "</strong>
                                </td>
                                <td>";
            // line 158
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 158)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "email", [], "any", false, false, false, 158), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>";
            // line 159
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 159)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 159), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>";
            // line 160
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "categorie_produit", [], "any", false, false, false, 160), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 167)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_edit", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id_fournisseur", [], "any", false, false, false, 174))), "html", null, true);
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
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center\">Aucun fournisseur trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 193
        yield "            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item ";
        // line 196
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 196, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 196) == 1)) {
            yield "disabled";
        }
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 197, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 197) - 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 197, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 197, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 197, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 197, $this->source); })())]), "html", null, true);
        yield "\">Previous</a>
                        </li>
                        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 199, $this->source); })()), "getPageCount", [], "method", false, false, false, 199)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 200
            yield "                            <li class=\"page-item ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 200, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 200))) {
                yield "active";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => $context["page"], "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 201, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 201, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 201, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 201, $this->source); })())]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "                        <li class=\"page-item ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 204, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 204) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 204, $this->source); })()), "getPageCount", [], "method", false, false, false, 204))) {
            yield "disabled";
        }
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 205, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 205) + 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 205, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 205, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 205, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 205, $this->source); })())]), "html", null, true);
        yield "\">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class=\"text-center\">
                    <small>
                        Page ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 211, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 211), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 211, $this->source); })()), "getPageCount", [], "method", false, false, false, 211), "html", null, true);
        yield " |
                        Total Fournisseurs : ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 212, $this->source); })()), "totalItemCount", [], "any", false, false, false, 212), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>

        ";
        // line 219
        yield "        <div class=\"row mt-4\">
            <!-- Summary Cards -->
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Total Fournisseurs</h5>
                        <p class=\"card-text display-4\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuppliers"]) || array_key_exists("totalSuppliers", $context) ? $context["totalSuppliers"] : (function () { throw new RuntimeError('Variable "totalSuppliers" does not exist.', 225, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Catégories Uniques</h5>
                        <p class=\"card-text display-4\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoriesCount"]) || array_key_exists("categoriesCount", $context) ? $context["categoriesCount"] : (function () { throw new RuntimeError('Variable "categoriesCount" does not exist.', 233, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Couverture Email</h5>
                        <p class=\"card-text display-4\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 241, $this->source); })()), "html", null, true);
        yield "%</p>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Distribution des Catégories</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"categoryDistributionChart\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Top 5 Localisations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"locationDistributionChart\"></div>
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

    // line 10
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

        // line 11
        yield "            <!-- Widgets Section -->
            ";
        // line 12
        yield from $this->loadTemplate("fournisseur/widgets.html.twig", "fournisseur/index.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["fournisseurs" =>         // line 13
(isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 13, $this->source); })()), "emailCoverage" =>         // line 14
(isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 14, $this->source); })()), "suppliersWithEmail" =>         // line 15
(isset($context["suppliersWithEmail"]) || array_key_exists("suppliersWithEmail", $context) ? $context["suppliersWithEmail"] : (function () { throw new RuntimeError('Variable "suppliersWithEmail" does not exist.', 15, $this->source); })()), "categoryDistribution" =>         // line 16
(isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 16, $this->source); })()), "recentSuppliers" =>         // line 17
(isset($context["recentSuppliers"]) || array_key_exists("recentSuppliers", $context) ? $context["recentSuppliers"] : (function () { throw new RuntimeError('Variable "recentSuppliers" does not exist.', 17, $this->source); })())]));
        // line 19
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 272
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

        // line 273
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fournisseur Growth Bar Chart (Widget)
        var fournisseurGrowthOptions = {
            chart: {
                type: 'bar',
                height: 300,
                stacked: false
            },
            colors: ['#FF6B6B', '#4ECDC4'],
            series: [
                { name: '2024', data: [20, 15, 25, 30, 18, 22, 10] },
                { name: '2023', data: [10, 8, 12, 15, 5, 7, 3] }
            ],
            xaxis: {
                categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil']
            },
            plotOptions: {
                bar: {
                    columnWidth: '45%',
                    endingShape: 'rounded'
                }
            },
            legend: {
                position: 'top'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + \" fournisseurs\";
                    }
                }
            }
        };

        var fournisseurGrowthChart = new ApexCharts(document.querySelector(\"#fournisseurGrowthChart\"), fournisseurGrowthOptions);
        fournisseurGrowthChart.render();

        // Fournisseur Growth Radial Chart (Widget)
        var radialGrowthOptions = {
            series: [";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailCoverage"]) || array_key_exists("emailCoverage", $context) ? $context["emailCoverage"] : (function () { throw new RuntimeError('Variable "emailCoverage" does not exist.', 315, $this->source); })()), "html", null, true);
        yield "],
            chart: {
                type: 'radialBar',
                height: 120,
                sparkline: { enabled: true }
            },
            plotOptions: {
                radialBar: {
                    hollow: { size: '60%' },
                    dataLabels: {
                        name: { show: false },
                        value: {
                            fontSize: '22px',
                            fontWeight: 'bold',
                            formatter: function (val) {
                                return val + \"%\";
                            }
                        }
                    }
                }
            },
            colors: ['#FF6B6B']
        };

        var fournisseurRadialChart = new ApexCharts(document.querySelector(\"#fournisseurGrowthRadialChart\"), radialGrowthOptions);
        fournisseurRadialChart.render();

        // Category Distribution Chart
        var categoryOptions = {
            chart: {
                type: 'donut',
                height: 350
            },
            series: [";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 348, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
            labels: [";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["categoryDistribution"]) || array_key_exists("categoryDistribution", $context) ? $context["categoryDistribution"] : (function () { throw new RuntimeError('Variable "categoryDistribution" does not exist.', 349, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
            colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { height: 300 },
                    legend: { position: 'bottom' }
                }
            }]
        };

        var categoryChart = new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), categoryOptions);
        categoryChart.render();

        // Location Distribution Chart
        var locationOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Fournisseurs',
                data: [";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 374, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }],
            xaxis: {
                categories: [";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["locationDistribution"]) || array_key_exists("locationDistribution", $context) ? $context["locationDistribution"] : (function () { throw new RuntimeError('Variable "locationDistribution" does not exist.', 377, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["location"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                title: { text: 'Ville' }
            },
            yaxis: {
                title: { text: 'Nombre de Fournisseurs' }
            },
            colors: ['#36A2EB'],
            plotOptions: {
                bar: { columnWidth: '50%' }
            }
        };

        var locationChart = new ApexCharts(document.querySelector(\"#locationDistributionChart\"), locationOptions);
        locationChart.render();
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
        return array (  717 => 377,  703 => 374,  666 => 349,  654 => 348,  618 => 315,  573 => 273,  560 => 272,  549 => 19,  547 => 17,  546 => 16,  545 => 15,  544 => 14,  543 => 13,  542 => 12,  539 => 11,  526 => 10,  485 => 241,  474 => 233,  463 => 225,  455 => 219,  446 => 212,  440 => 211,  431 => 205,  424 => 204,  413 => 201,  406 => 200,  402 => 199,  397 => 197,  391 => 196,  386 => 193,  380 => 188,  371 => 184,  369 => 183,  355 => 174,  351 => 173,  345 => 170,  339 => 167,  329 => 160,  325 => 159,  321 => 158,  316 => 156,  311 => 153,  306 => 152,  298 => 147,  294 => 146,  290 => 145,  286 => 144,  270 => 131,  262 => 126,  254 => 120,  246 => 115,  238 => 110,  231 => 105,  227 => 104,  223 => 103,  216 => 98,  207 => 91,  200 => 88,  187 => 77,  177 => 70,  162 => 58,  158 => 57,  148 => 50,  132 => 37,  122 => 30,  112 => 22,  109 => 20,  107 => 10,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/fournisseur/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Liste des Fournisseurs{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">

        {% block widgets %}
            <!-- Widgets Section -->
            {% include 'fournisseur/widgets.html.twig' with {
                'fournisseurs': fournisseurs,
                'emailCoverage': emailCoverage,
                'suppliersWithEmail': suppliersWithEmail,
                'categoryDistribution': categoryDistribution,
                'recentSuppliers': recentSuppliers
            } %}
        {% endblock %}

        {# New Simple Widgets Above Table #}
        <div class=\"row mt-4\">
            <!-- Total Suppliers Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('img/icons/unicons/building.png') }}\"
                                    alt=\"Total Suppliers\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Fournisseurs</span>
                        <h3 class=\"card-title mb-2\">{{ totalSuppliers }}</h3>
                        <small class=\"text-muted\">Nombre total de fournisseurs</small>
                    </div>
                </div>
            </div>

            <!-- Suppliers Added This Month Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('img/illustrations/girl-doing-yoga-light.png') }}\"
                                    alt=\"Suppliers This Month\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Ajoutés Ce Mois</span>
                        <h3 class=\"card-title mb-2\">{{ suppliersThisMonth|default(0) }}</h3>
                        <small class=\"text-muted\">Fournisseurs ajoutés en {{ \"now\"|date(\"F\") }}</small>
                    </div>
                </div>
            </div>

            <!-- Average Suppliers per Category Widget -->
            <div class=\"col-md-4 col-lg-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start justify-content-between mb-3\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('img/icons/unicons/chart.png') }}\"
                                    alt=\"Average per Category\"
                                    class=\"rounded\"
                                />
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Moyenne par Catégorie</span>
                        <h3 class=\"card-title mb-2\">{{ categoriesCount > 0 ? (totalSuppliers / categoriesCount)|round(1) : 0 }}</h3>
                        <small class=\"text-muted\">Fournisseurs par catégorie</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    {# Search Bar Left-Aligned #}
                    <form class=\"d-flex\" method=\"get\" action=\"{{ path('app_fournisseur_index') }}\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, email, adresse...\" value=\"{{ searchTerm }}\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    {# Filtrer Dropdown #}
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_index', {'filter': 'nom'}) }}\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_index', {'filter': 'email'}) }}\">Par Email</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_index', {'filter': 'categorie_produit'}) }}\">Par Catégorie</a></li>
                        </ul>
                    </div>

                    {# Statistiques Button #}
                    <a href=\"{{ path('app_fournisseur_stats') }}\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    {# Ajouter Fournisseur Button #}
                    <a href=\"{{ path('app_fournisseur_new') }}\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Fournisseur
                    </a>

                    {# Exporter Button #}
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_export', {'format': 'xlsx'}) }}\">
                                    <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_export', {'format': 'csv'}) }}\">
                                    <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"fournisseursTable\">
                    <thead>
                        <tr>
                            <th><a href=\"{{ path('app_fournisseur_index', {'sort': 'nom', 'order': sort == 'nom' and order == 'asc' ? 'desc' : 'asc'}) }}\">Nom</a></th>
                            <th><a href=\"{{ path('app_fournisseur_index', {'sort': 'email', 'order': sort == 'email' and order == 'asc' ? 'desc' : 'asc'}) }}\">Email</a></th>
                            <th><a href=\"{{ path('app_fournisseur_index', {'sort': 'adresse', 'order': sort == 'adresse' and order == 'asc' ? 'desc' : 'asc'}) }}\">Adresse</a></th>
                            <th><a href=\"{{ path('app_fournisseur_index', {'sort': 'categorie_produit', 'order': sort == 'categorie_produit' and order == 'asc' ? 'desc' : 'asc'}) }}\">Catégorie Produit</a></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% for fournisseur in pagination %}
                            <tr class=\"table-default\">
                                <td>
                                    <i class=\"bx bx-store fa-lg text-warning me-3\"></i>
                                    <strong>{{ fournisseur.nom }}</strong>
                                </td>
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

            {# Pagination #}
            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item {% if pagination.currentPageNumber == 1 %}disabled{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': pagination.currentPageNumber - 1, 'search': searchTerm, 'filter': filter, 'sort': sort, 'order': order}) }}\">Previous</a>
                        </li>
                        {% for page in 1..pagination.getPageCount() %}
                            <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': page, 'search': searchTerm, 'filter': filter, 'sort': sort, 'order': order}) }}\">{{ page }}</a>
                            </li>
                        {% endfor %}
                        <li class=\"page-item {% if pagination.currentPageNumber == pagination.getPageCount() %}disabled{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_fournisseur_index', {'page': pagination.currentPageNumber + 1, 'search': searchTerm, 'filter': filter, 'sort': sort, 'order': order}) }}\">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class=\"text-center\">
                    <small>
                        Page {{ pagination.currentPageNumber }} sur {{ pagination.getPageCount() }} |
                        Total Fournisseurs : {{ pagination.totalItemCount }}
                    </small>
                </div>
            </div>
        </div>

        {# Statistics Section #}
        <div class=\"row mt-4\">
            <!-- Summary Cards -->
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Total Fournisseurs</h5>
                        <p class=\"card-text display-4\">{{ totalSuppliers }}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Catégories Uniques</h5>
                        <p class=\"card-text display-4\">{{ categoriesCount }}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Couverture Email</h5>
                        <p class=\"card-text display-4\">{{ emailCoverage }}%</p>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Distribution des Catégories</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"categoryDistributionChart\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Top 5 Localisations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"locationDistributionChart\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fournisseur Growth Bar Chart (Widget)
        var fournisseurGrowthOptions = {
            chart: {
                type: 'bar',
                height: 300,
                stacked: false
            },
            colors: ['#FF6B6B', '#4ECDC4'],
            series: [
                { name: '2024', data: [20, 15, 25, 30, 18, 22, 10] },
                { name: '2023', data: [10, 8, 12, 15, 5, 7, 3] }
            ],
            xaxis: {
                categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil']
            },
            plotOptions: {
                bar: {
                    columnWidth: '45%',
                    endingShape: 'rounded'
                }
            },
            legend: {
                position: 'top'
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + \" fournisseurs\";
                    }
                }
            }
        };

        var fournisseurGrowthChart = new ApexCharts(document.querySelector(\"#fournisseurGrowthChart\"), fournisseurGrowthOptions);
        fournisseurGrowthChart.render();

        // Fournisseur Growth Radial Chart (Widget)
        var radialGrowthOptions = {
            series: [{{ emailCoverage }}],
            chart: {
                type: 'radialBar',
                height: 120,
                sparkline: { enabled: true }
            },
            plotOptions: {
                radialBar: {
                    hollow: { size: '60%' },
                    dataLabels: {
                        name: { show: false },
                        value: {
                            fontSize: '22px',
                            fontWeight: 'bold',
                            formatter: function (val) {
                                return val + \"%\";
                            }
                        }
                    }
                }
            },
            colors: ['#FF6B6B']
        };

        var fournisseurRadialChart = new ApexCharts(document.querySelector(\"#fournisseurGrowthRadialChart\"), radialGrowthOptions);
        fournisseurRadialChart.render();

        // Category Distribution Chart
        var categoryOptions = {
            chart: {
                type: 'donut',
                height: 350
            },
            series: [{% for count in categoryDistribution %}{{ count }},{% endfor %}],
            labels: [{% for category in categoryDistribution|keys %}'{{ category }}',{% endfor %}],
            colors: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { height: 300 },
                    legend: { position: 'bottom' }
                }
            }]
        };

        var categoryChart = new ApexCharts(document.querySelector(\"#categoryDistributionChart\"), categoryOptions);
        categoryChart.render();

        // Location Distribution Chart
        var locationOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Fournisseurs',
                data: [{% for count in locationDistribution %}{{ count }},{% endfor %}]
            }],
            xaxis: {
                categories: [{% for location in locationDistribution|keys %}'{{ location }}',{% endfor %}],
                title: { text: 'Ville' }
            },
            yaxis: {
                title: { text: 'Nombre de Fournisseurs' }
            },
            colors: ['#36A2EB'],
            plotOptions: {
                bar: { columnWidth: '50%' }
            }
        };

        var locationChart = new ApexCharts(document.querySelector(\"#locationDistributionChart\"), locationOptions);
        locationChart.render();
    });
</script>
{% endblock %}", "fournisseur/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\fournisseur\\index.html.twig");
    }
}
