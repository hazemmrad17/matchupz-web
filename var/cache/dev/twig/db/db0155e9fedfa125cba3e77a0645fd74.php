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

/* joueur/index.html.twig */
class __TwigTemplate_1eea37f2ea5de4392671536c38f8e727 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Joueurs";
        
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
                <span class=\"text-muted fw-light\">Joueurs /</span> Tableau de Bord
            </h4>
            ";
        // line 15
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 18
        yield "
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <form method=\"get\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\">
                            <div class=\"navbar-nav align-items-center ms-3\">
                                <div class=\"nav-item d-flex align-items-center\">
                                    <i class=\"bx bx-search fs-4 lh-0\"></i>
                                    <input
                                        type=\"text\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un joueur...\"
                                        aria-label=\"Rechercher un joueur...\"
                                        id=\"searchInput\"
                                        name=\"search\"
                                        value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchQuery", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 34, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <!-- Creation buttons -->
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Joueur
                        </a>
                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Performance
                        </a>
                        <!-- Other buttons -->
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_statistics");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"joueursTable\">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sport</th>
                                <th>Date de Naissance</th>
                                <th>Poste</th>
                                <th>Taille (m)</th>
                                <th>Poids (kg)</th>
                                <th>Statut</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 88
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        ";
            // line 90
            if (CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 90)) {
                // line 91
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 91), "html", null, true);
                yield "\" alt=\"Photo de profil de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 91), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 91), "html", null, true);
                yield "\" class=\"rounded-circle\" style=\"width: 40px; height: 40px; object-fit: cover;\" onerror=\"this.src='/path/to/default-image.jpg';\">
                                        ";
            } else {
                // line 93
                yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
            }
            // line 95
            yield "                                    </td>
                                    <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 96), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                                    <td>";
            // line 98
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 98), "nomSport", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 98), "nomSport", [], "any", false, false, false, 98)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 98), "nomSport", [], "any", false, false, false, 98), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 100
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 100)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 100), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 101
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 101)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 101), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 102), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 103
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", true, true, false, 103) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 103)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 103), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 104
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 104)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 104), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 105
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 105)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 105), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 119))), "html", null, true);
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
        // line 128
        if (!$context['_iterated']) {
            // line 129
            yield "                                <tr>
                                    <td colspan=\"12\" class=\"text-center\">Aucun joueur trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 141
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 141, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 142
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 142, $this->source); })()) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 142, $this->source); })()) - 1)]), "html", null, true)) : ("#"));
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 147, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 148
            yield "                                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 148, $this->source); })()) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                            
                            <li class=\"page-item ";
        // line 153
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 153, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 153, $this->source); })()))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 154
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 154, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 154, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 154, $this->source); })()) + 1)]), "html", null, true)) : ("#"));
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

    // line 15
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

        // line 16
        yield "                ";
        yield from $this->loadTemplate("joueur/widgets.html.twig", "joueur/index.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "joueur/index.html.twig";
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
        return array (  436 => 17,  433 => 16,  420 => 15,  398 => 154,  394 => 153,  391 => 152,  380 => 149,  375 => 148,  371 => 147,  363 => 142,  359 => 141,  349 => 133,  340 => 129,  338 => 128,  324 => 119,  320 => 118,  314 => 115,  308 => 112,  298 => 105,  294 => 104,  290 => 103,  286 => 102,  282 => 101,  278 => 100,  274 => 99,  270 => 98,  266 => 97,  262 => 96,  259 => 95,  255 => 93,  245 => 91,  243 => 90,  239 => 88,  234 => 87,  207 => 63,  203 => 62,  199 => 61,  188 => 53,  181 => 49,  175 => 46,  169 => 43,  157 => 34,  143 => 23,  136 => 18,  134 => 15,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Joueurs{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Tableau de Bord
            </h4>
            {% block widgets %}
                {% include 'joueur/widgets.html.twig' %}
            {% endblock %}

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <form method=\"get\" action=\"{{ path('joueur_main') }}\">
                            <div class=\"navbar-nav align-items-center ms-3\">
                                <div class=\"nav-item d-flex align-items-center\">
                                    <i class=\"bx bx-search fs-4 lh-0\"></i>
                                    <input
                                        type=\"text\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un joueur...\"
                                        aria-label=\"Rechercher un joueur...\"
                                        id=\"searchInput\"
                                        name=\"search\"
                                        value=\"{{ searchQuery|default('') }}\"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <!-- Creation buttons -->
                        <a href=\"{{ path('joueur_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Joueur
                        </a>
                        <a href=\"{{ path('app_evaluation_physique_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Évaluation
                        </a>
                        <a href=\"{{ path('performance_joueur_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouvelle Performance
                        </a>
                        <!-- Other buttons -->
                        <a href=\"{{ path('joueur_statistics') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"joueursTable\">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sport</th>
                                <th>Date de Naissance</th>
                                <th>Poste</th>
                                <th>Taille (m)</th>
                                <th>Poids (kg)</th>
                                <th>Statut</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for joueur in joueurs %}
                                <tr class=\"table-default\">
                                    <td>
                                        {% if joueur.profilePicture %}
                                            <img src=\"{{ joueur.profilePicture }}\" alt=\"Photo de profil de {{ joueur.prenom }} {{ joueur.nom }}\" class=\"rounded-circle\" style=\"width: 40px; height: 40px; object-fit: cover;\" onerror=\"this.src='/path/to/default-image.jpg';\">
                                        {% else %}
                                            <span class=\"text-muted\">N/A</span>
                                        {% endif %}
                                    </td>
                                    <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>{{ joueur.nom }}</strong></td>
                                    <td>{{ joueur.prenom }}</td>
                                    <td>{{ joueur.sport.nomSport ?? 'N/A' }}</td>
                                    <td>{{ joueur.dateNaissance ? joueur.dateNaissance|date('d/m/Y') : 'N/A' }}</td>
                                    <td>{{ joueur.poste ?? 'N/A' }}</td>
                                    <td>{{ joueur.taille ? joueur.taille|number_format(2, '.', ',') : 'N/A' }}</td>
                                    <td>{{ joueur.poids ? joueur.poids|number_format(2, '.', ',') : 'N/A' }}</td>
                                    <td>{{ joueur.statut ?? 'N/A' }}</td>
                                    <td>{{ joueur.email ?? 'N/A' }}</td>
                                    <td>{{ joueur.telephone ?? 'N/A' }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_show', {'id': joueur.idJoueur}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_edit', {'id': joueur.idJoueur}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('joueur_delete', {'id': joueur.idJoueur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ joueur.idJoueur) }}\">
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
                                    <td colspan=\"12\" class=\"text-center\">Aucun joueur trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ currentPage > 1 ? path('joueur_main', {'page': currentPage - 1}) : '#' }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            
                            {% for i in 1..totalPages %}
                                <li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('joueur_main', {'page': i}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            
                            <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ currentPage < totalPages ? path('joueur_main', {'page': currentPage + 1}) : '#' }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "joueur/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\index.html.twig");
    }
}
