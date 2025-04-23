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
class __TwigTemplate_e3259a5b407c009b31801c708065c8ab extends Template
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
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Matériels /</span> Tableau de Bord
            </h4>
            
            ";
        // line 16
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 91
        yield "
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Matériels</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un matériel...\"
                                    aria-label=\"Rechercher un matériel...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Matériel
                        </a>
                        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_statistics");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_csv");
        yield "\">CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_pdf");
        yield "\">PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_export_excel");
        yield "\">Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"materielsTable\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Quantité</th>
                                <th>État</th>
                                <th>Prix unitaire</th>
                                <th>Code-barres</th>
                                <th>Image</th>
                                <th>Fournisseur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 147
        if ((array_key_exists("pagination", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 147, $this->source); })())) > 0))) {
            // line 148
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 148, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 149
                yield "                                    <tr class=\"table-default\">
                                        <td><strong>#";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 150), "html", null, true);
                yield "</strong></td>
                                        <td><i class=\"bx bx-package fs-4 text-primary me-3\"></i><strong>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 151), "html", null, true);
                yield "</strong></td>
                                        <td>";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 152), "html", null, true);
                yield "</td>
                                        <td>";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 153), "html", null, true);
                yield "</td>
                                        <td>";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 154), "html", null, true);
                yield "</td>
                                        <td>";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 155), 2, ",", " "), "html", null, true);
                yield " €</td>
                                        <td>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 156), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 158
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 158)) {
                    // line 159
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 159))), "html", null, true);
                    yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                                            ";
                } else {
                    // line 161
                    yield "                                                <span class=\"text-muted\">N/A</span>
                                            ";
                }
                // line 163
                yield "                                        </td>
                                        <td>
                                            ";
                // line 165
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 165)) {
                    // line 166
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 166), "getIdFournisseur", [], "method", false, false, false, 166)]), "html", null, true);
                    yield "\">
                                                    ";
                    // line 167
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
                    yield "
                                                </a>
                                            ";
                } else {
                    // line 170
                    yield "                                                <span class=\"text-muted\">N/A</span>
                                            ";
                }
                // line 172
                yield "                                        </td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 185)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 186))), "html", null, true);
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "                            ";
        } else {
            // line 197
            yield "                                <tr>
                                    <td colspan=\"10\" class=\"text-center\">Aucun matériel trouvé</td>
                                </tr>
                            ";
        }
        // line 201
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 209
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 209, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 209) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 210, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 210) - 1)]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>

                            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 215, $this->source); })()), "pageCount", [], "any", false, false, false, 215)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 216
            yield "                                <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 216, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 216) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 217
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
        // line 220
        yield "
                            <li class=\"page-item ";
        // line 221
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 221, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 221) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 221, $this->source); })()), "pageCount", [], "any", false, false, false, 221))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 222, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 222) + 1)]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "                <div class=\"row\">
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
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 30, $this->source); })()), "html", null, true);
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
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 48, $this->source); })())), "html", null, true);
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
        // line 66
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stateDistribution"] ?? null), "NEUF", [], "array", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 66, $this->source); })()), "NEUF", [], "array", false, false, false, 66)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stateDistribution"]) || array_key_exists("stateDistribution", $context) ? $context["stateDistribution"] : (function () { throw new RuntimeError('Variable "stateDistribution" does not exist.', 66, $this->source); })()), "NEUF", [], "array", false, false, false, 66), "html", null, true)) : (0));
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
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["inventoryValue"]) || array_key_exists("inventoryValue", $context) ? $context["inventoryValue"] : (function () { throw new RuntimeError('Variable "inventoryValue" does not exist.', 84, $this->source); })()), 2, ",", " "), "html", null, true);
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

    // line 234
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

        // line 235
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('materielsTable');
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
        return array (  526 => 235,  513 => 234,  495 => 84,  474 => 66,  453 => 48,  432 => 30,  417 => 17,  404 => 16,  382 => 222,  378 => 221,  375 => 220,  364 => 217,  359 => 216,  355 => 215,  347 => 210,  343 => 209,  333 => 201,  327 => 197,  324 => 196,  308 => 186,  304 => 185,  298 => 182,  292 => 179,  283 => 172,  279 => 170,  273 => 167,  268 => 166,  266 => 165,  262 => 163,  258 => 161,  252 => 159,  250 => 158,  245 => 156,  241 => 155,  237 => 154,  233 => 153,  229 => 152,  225 => 151,  221 => 150,  218 => 149,  213 => 148,  211 => 147,  186 => 125,  182 => 124,  178 => 123,  167 => 115,  161 => 112,  138 => 91,  136 => 16,  128 => 10,  115 => 9,  92 => 7,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Matériels{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Matériels /</span> Tableau de Bord
            </h4>
            
            {% block widgets %}
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

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Matériels</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un matériel...\"
                                    aria-label=\"Rechercher un matériel...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <a href=\"{{ path('app_materiel_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Matériel
                        </a>
                        <a href=\"{{ path('app_materiel_statistics') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_csv') }}\">CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_pdf') }}\">PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_materiel_export_excel') }}\">Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"materielsTable\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Quantité</th>
                                <th>État</th>
                                <th>Prix unitaire</th>
                                <th>Code-barres</th>
                                <th>Image</th>
                                <th>Fournisseur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% if pagination is defined and pagination|length > 0 %}
                                {% for materiel in pagination %}
                                    <tr class=\"table-default\">
                                        <td><strong>#{{ materiel.id }}</strong></td>
                                        <td><i class=\"bx bx-package fs-4 text-primary me-3\"></i><strong>{{ materiel.nom }}</strong></td>
                                        <td>{{ materiel.type }}</td>
                                        <td>{{ materiel.quantite }}</td>
                                        <td>{{ materiel.etat }}</td>
                                        <td>{{ materiel.prix|number_format(2, ',', ' ') }} €</td>
                                        <td>{{ materiel.barcode }}</td>
                                        <td>
                                            {% if materiel.image %}
                                                <img src=\"{{ asset('uploads/materiels/' ~ materiel.image) }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Image matériel\">
                                            {% else %}
                                                <span class=\"text-muted\">N/A</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if materiel.fournisseur %}
                                                <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': materiel.fournisseur.getIdFournisseur()}) }}\">
                                                    {{ materiel.fournisseur.nom }}
                                                </a>
                                            {% else %}
                                                <span class=\"text-muted\">N/A</span>
                                            {% endif %}
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
                                                    <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% else %}
                                <tr>
                                    <td colspan=\"10\" class=\"text-center\">Aucun matériel trouvé</td>
                                </tr>
                            {% endif %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ pagination.currentPageNumber == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>

                            {% for i in 1..pagination.pageCount %}
                                <li class=\"page-item {{ pagination.currentPageNumber == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': i}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}

                            <li class=\"page-item {{ pagination.currentPageNumber == pagination.pageCount ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('app_materiel_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('materielsTable');
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
        });
    </script>
{% endblock %}", "materiel/index.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\materiel\\index.html.twig");
    }
}
