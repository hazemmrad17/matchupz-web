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
class __TwigTemplate_84d109dd5458f75c4e7a91df5c95b74e extends Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
            ";
        // line 19
        yield from $this->loadTemplate("abonnement/abonnement_widgets.html.twig", "abonnement/index.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Abonnements</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <form method=\"get\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index");
        yield "\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un abonnement...\"
                                        aria-label=\"Rechercher un abonnement...\"
                                        value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_new");
        yield "\" class=\"btn btn-primary me-2\">Ajouter un Abonnement</a>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
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
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 70
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "club", [], "any", false, false, false, 73), "nomClub", [], "any", false, false, false, 73), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "typeAbonnement", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                                    <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateFin", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "tarif", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                    <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_show", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_edit", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_delete", ["idAbonnement" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "idAbonnement", [], "any", false, false, false, 93))), "html", null, true);
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
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucun abonnement trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 113
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 113, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 113) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 114, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 114) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 114, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 118, $this->source); })()), "pageCount", [], "any", false, false, false, 118)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            yield "                                <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 119, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 119) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => $context["i"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 120, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                            <li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 123, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 123) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 123, $this->source); })()), "pageCount", [], "any", false, false, false, 123))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 124, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 124) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 124, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <h5 class=\"mt-4\">Abonnements Actifs</h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_abonnements"]) || array_key_exists("active_abonnements", $context) ? $context["active_abonnements"] : (function () { throw new RuntimeError('Variable "active_abonnements" does not exist.', 137, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 138
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Abonnement\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "club", [], "any", false, false, false, 144), "nomClub", [], "any", false, false, false, 144), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "typeAbonnement", [], "any", false, false, false, 145), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 148), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                            <li>Aucun abonnement actif.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.getElementById('searchForm');

            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            searchInput.addEventListener('input', debounce(function () {
                searchForm.submit();
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
        return array (  419 => 155,  412 => 153,  410 => 152,  401 => 148,  393 => 145,  389 => 144,  382 => 140,  378 => 138,  373 => 137,  357 => 124,  352 => 123,  341 => 120,  336 => 119,  332 => 118,  325 => 114,  321 => 113,  313 => 107,  304 => 103,  302 => 102,  288 => 93,  284 => 92,  278 => 89,  272 => 86,  262 => 79,  258 => 78,  254 => 77,  250 => 76,  246 => 75,  241 => 73,  236 => 70,  231 => 69,  209 => 50,  205 => 49,  201 => 48,  192 => 42,  182 => 35,  171 => 27,  162 => 20,  160 => 19,  157 => 18,  148 => 16,  143 => 15,  134 => 13,  130 => 12,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Abonnements{% endblock %}

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
                                <form method=\"get\" action=\"{{ path('abonnement_index') }}\" id=\"searchForm\">
                                    <input
                                        type=\"text\"
                                        name=\"search\"
                                        id=\"searchInput\"
                                        class=\"form-control border-0 shadow-none\"
                                        placeholder=\"Rechercher un abonnement...\"
                                        aria-label=\"Rechercher un abonnement...\"
                                        value=\"{{ searchTerm|default('') }}\"
                                    />
                                </form>
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
                    <table class=\"table\">
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
                        <tbody class=\"table-border-bottom-0\">
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
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ abonnements.currentPageNumber == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': abonnements.currentPageNumber - 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">«</span>
                                </a>
                            </li>
                            {% for i in 1..abonnements.pageCount %}
                                <li class=\"page-item {{ abonnements.currentPageNumber == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': i, 'search': searchTerm|default('')}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            <li class=\"page-item {{ abonnements.currentPageNumber == abonnements.pageCount ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': abonnements.currentPageNumber + 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
            const searchForm = document.getElementById('searchForm');

            function debounce(func, wait) {
                let timeout;
                return function (...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }

            searchInput.addEventListener('input', debounce(function () {
                searchForm.submit();
            }, 300));
        });
    </script>
{% endblock %}", "abonnement/index.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\abonnement\\index.html.twig");
    }
}
