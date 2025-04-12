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

/* contrat/main.html.twig */
class __TwigTemplate_204de554da522ea1341d5b05d912ffdf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/main.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "contrat/main.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Contrats";
        
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
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 15
        yield "
            ";
        // line 17
        yield "            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        ";
        // line 21
        yield "                        <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher titre, sponsor ou montant...\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 24, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                            </div>
                        </form>
                    </div>

                    <div class=\"d-flex align-items-center\">
                        ";
        // line 31
        yield "                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Filtrer
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "titre"]);
        yield "\">Par Titre</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datedebut"]);
        yield "\">Par Date de Début</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datefin"]);
        yield "\">Par Date de Fin</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "montant"]);
        yield "\">Par Montant</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "sponsor"]);
        yield "\">Par Sponsor</a></li>
                            </ul>
                        </div>

                        ";
        // line 45
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>

                        ";
        // line 50
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        yield "\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1\"></i> Ajouter Contrat
                        </a>

                        ";
        // line 55
        yield "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-download me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "xlsx"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "csv"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "pdf"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "sql"]);
        yield "\">
                                        <i class=\"bx bx-data me-1\"></i> SQL (.sql)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 99
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 102), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 104), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 105), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                                    <td>";
            // line 107
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 107)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>
                                        ";
            // line 109
            if (CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 109)) {
                // line 110
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 110)), "html", null, true);
                yield "\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        ";
            } else {
                // line 112
                yield "                                            No Signature
                                        ";
            }
            // line 114
            yield "                                    </td>
                                    <td>
                                        ";
            // line 116
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 116))) {
                // line 117
                yield "                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_show", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 122)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_edit", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 125)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 129))), "html", null, true);
                yield "\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 137
                yield "                                            <span class=\"text-muted\">Actions non disponibles</span>
                                        ";
            }
            // line 139
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 141
        if (!$context['_iterated']) {
            // line 142
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                        </tbody>
                    </table>
                </div>

                ";
        // line 151
        yield "                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 154
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 154, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 154) == 1)) {
            yield "disabled";
        }
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 155, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 155) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 155, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 155, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\">Previous</a>
                            </li>
                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 157, $this->source); })()), "getPageCount", [], "method", false, false, false, 157)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 158
            yield "                                <li class=\"page-item ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 158, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 158))) {
                yield "active";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => $context["page"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 159, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 159, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "                            <li class=\"page-item ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 162, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 162) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 162, $this->source); })()), "getPageCount", [], "method", false, false, false, 162))) {
            yield "disabled";
        }
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 163, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 163) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 163, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 163, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"text-center\">
                        <small>
                            Page ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 169, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 169), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 169, $this->source); })()), "getPageCount", [], "method", false, false, false, 169), "html", null, true);
        yield " |
                            Total Contrats : ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 170, $this->source); })()), "totalItemCount", [], "any", false, false, false, 170), "html", null, true);
        yield "
                        </small>
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

    // line 12
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

        // line 13
        yield "                ";
        yield from $this->loadTemplate("/contrat/widgets.html.twig", "contrat/main.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["recentContracts" => (isset($context["recentContracts"]) || array_key_exists("recentContracts", $context) ? $context["recentContracts"] : (function () { throw new RuntimeError('Variable "recentContracts" does not exist.', 13, $this->source); })())]));
        // line 14
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
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

        // line 180
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Placeholder for chart rendering if needed
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
        return "contrat/main.html.twig";
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
        return array (  491 => 180,  478 => 179,  467 => 14,  464 => 13,  451 => 12,  432 => 170,  426 => 169,  417 => 163,  410 => 162,  399 => 159,  392 => 158,  388 => 157,  383 => 155,  377 => 154,  372 => 151,  366 => 146,  357 => 142,  355 => 141,  349 => 139,  345 => 137,  334 => 129,  330 => 128,  324 => 125,  318 => 122,  311 => 117,  309 => 116,  305 => 114,  301 => 112,  295 => 110,  293 => 109,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  271 => 102,  266 => 99,  261 => 98,  236 => 76,  228 => 71,  220 => 66,  212 => 61,  204 => 55,  196 => 50,  188 => 45,  181 => 40,  177 => 39,  173 => 38,  169 => 37,  165 => 36,  158 => 31,  149 => 24,  142 => 21,  137 => 17,  134 => 15,  132 => 12,  128 => 10,  115 => 9,  92 => 7,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Contrats{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {% block widgets %}
                {% include '/contrat/widgets.html.twig' with {'recentContracts': recentContracts} %}
            {% endblock %}

            {# Main Contracts Table #}
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        {# Search Bar Left-Aligned #}
                        <form class=\"d-flex\" method=\"get\" action=\"{{ path('contrat_main') }}\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                                <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher titre, sponsor ou montant...\" value=\"{{ searchTerm|default('') }}\">
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
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'titre'}) }}\">Par Titre</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'datedebut'}) }}\">Par Date de Début</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'datefin'}) }}\">Par Date de Fin</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'montant'}) }}\">Par Montant</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'sponsor'}) }}\">Par Sponsor</a></li>
                            </ul>
                        </div>

                        {# Statistiques Button #}
                        <a href=\"{{ path('contrat_statistics') }}\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>

                        {# Ajouter Contrat Button #}
                        <a href=\"{{ path('contrat_new') }}\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1\"></i> Ajouter Contrat
                        </a>

                        {# Exporter Dropdown #}
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-download me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'xlsx'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'csv'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'pdf'}) }}\">
                                        <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'sql'}) }}\">
                                        <i class=\"bx bx-data me-1\"></i> SQL (.sql)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for contrat in contrats %}
                                <tr class=\"table-default\">
                                    <td>
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ contrat.Titre }}</strong>
                                    </td>
                                    <td>{{ contrat.DateDebut|date('Y-m-d') }}</td>
                                    <td>{{ contrat.DateFin|date('Y-m-d') }}</td>
                                    <td>{{ contrat.Montant }}</td>
                                    <td>{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}</td>
                                    <td>
                                        {% if contrat.Signature %}
                                            <img src=\"{{ asset(contrat.Signature) }}\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        {% else %}
                                            No Signature
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if contrat.idContrat is not null %}
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_show', {'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_edit', {'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('contrat_delete', {'idContrat': contrat.idContrat}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.idContrat) }}\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        {% else %}
                                            <span class=\"text-muted\">Actions non disponibles</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {# Pagination #}
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {% if contrats.currentPageNumber == 1 %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber - 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\">Previous</a>
                            </li>
                            {% for page in 1..contrats.getPageCount() %}
                                <li class=\"page-item {% if page == contrats.currentPageNumber %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': page, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\">{{ page }}</a>
                                </li>
                            {% endfor %}
                            <li class=\"page-item {% if contrats.currentPageNumber == contrats.getPageCount() %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber + 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"text-center\">
                        <small>
                            Page {{ contrats.currentPageNumber }} sur {{ contrats.getPageCount() }} |
                            Total Contrats : {{ contrats.totalItemCount }}
                        </small>
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
            // Placeholder for chart rendering if needed
        });
    </script>
{% endblock %}", "contrat/main.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-0\\matchupz-web-0\\templates\\contrat\\main.html.twig");
    }
}
