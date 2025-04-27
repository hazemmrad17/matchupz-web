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
class __TwigTemplate_48978ab8bd31d05ba0f0a56957f118c6 extends Template
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
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher titre, sponsor ou montant...\"
                                    aria-label=\"Rechercher titre, sponsor ou montant...\"
                                    value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 29, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                />
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex align-items-center\">
                        ";
        // line 37
        yield "                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Filtrer
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "titre"]);
        yield "\">Par Titre</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datedebut"]);
        yield "\">Par Date de Début</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "datefin"]);
        yield "\">Par Date de Fin</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "montant"]);
        yield "\">Par Montant</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "sponsor"]);
        yield "\">Par Sponsor</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["filter" => "article"]);
        yield "\">Par Article</a></li>
                            </ul>
                        </div>

                        ";
        // line 52
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                            <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                        </a>

                        ";
        // line 57
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_new");
        yield "\" class=\"btn btn-success me-2\">
                            <i class=\"bx bx-plus me-1\"></i> Ajouter Contrat
                        </a>

                        ";
        // line 62
        yield "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-download me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "xlsx"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "csv"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> CSV (.csv)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "pdf"]);
        yield "\">
                                        <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
        // line 83
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
                    <table class=\"table modern-table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Article</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 107
            yield "                                <tr class=\"table-default contrat-row\">
                                    <td data-full-description=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 108), "N/A")) : ("N/A")), "html", null, true);
            yield "\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 110), "N/A")) : ("N/A")), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td data-full-description=\"";
            // line 112
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 112), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 112), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 113
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 113)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 113), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 113), "Y-m-d"), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 114), "N/A")) : ("N/A")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 114), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                                    <td data-full-description=\"";
            // line 115
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true)) : ("N/A"));
            yield "\">";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td data-full-description=\"";
            // line 116
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 116)) ? ("Signature disponible") : ("No Signature"));
            yield "\">
                                        ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 117)) {
                // line 118
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 118)), "html", null, true);
                yield "\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        ";
            } else {
                // line 120
                yield "                                            No Signature
                                        ";
            }
            // line 122
            yield "                                    </td>
                                    <td data-full-description=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 123), "N/A")) : ("N/A")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 123), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 123)) > 50)) ? ("...") : (""))), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 125
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 125))) {
                // line 126
                yield "                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_show", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_edit", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_export", ["format" => "pdf", "idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-file me-1\"></i> Exporter PDF
                                                    </a>
                                                    <form method=\"post\" action=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 140)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 141))), "html", null, true);
                yield "\">
                                                        <button class=\"dropdown-item\" type=\"submit\">
                                                            <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 149
                yield "                                            <span class=\"text-muted\">Actions non disponibles</span>
                                        ";
            }
            // line 151
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "                                <tr>
                                    <td colspan=\"8\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                        </tbody>
                    </table>
                </div>

                ";
        // line 163
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 163, $this->source); })()))) {
            // line 164
            yield "                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 167, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 167) == 1)) {
                yield "disabled";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 168, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 168) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 168, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 168, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-left\"></i></a>
                                </li>
                                ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 170, $this->source); })()), "getPageCount", [], "method", false, false, false, 170)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 171
                yield "                                    <li class=\"page-item ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 171, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 171))) {
                    yield "active";
                }
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => $context["page"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 172, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 172, $this->source); })()), "")) : (""))]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "                                <li class=\"page-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 175, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 175) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 175, $this->source); })()), "getPageCount", [], "method", false, false, false, 175))) {
                yield "disabled";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 176, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 176) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 176, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 176, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-right\"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"text-center\">
                            <small>
                                Page ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 182, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 182), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 182, $this->source); })()), "getPageCount", [], "method", false, false, false, 182), "html", null, true);
            yield " |
                                Total Contrats : ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 183, $this->source); })()), "totalItemCount", [], "any", false, false, false, 183), "html", null, true);
            yield "
                            </small>
                        </div>
                    </div>
                ";
        }
        // line 188
        yield "            </div>
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

    // line 193
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

        // line 194
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3786755132717331\"
     crossorigin=\"anonymous\"></script> 
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.contrat-row') : [];

            // Recherche dynamique
            if (searchInput && rows.length) {
                searchInput.addEventListener('input', () => {
                    const searchTerm = searchInput.value.toLowerCase();

                    rows.forEach(row => {
                        const cells = row.querySelectorAll('td');
                        let match = false;

                        cells.forEach(cell => {
                            const text = cell.getAttribute('data-full-description') || cell.textContent;
                            if (text.toLowerCase().includes(searchTerm)) {
                                match = true;
                            }
                        });

                        row.style.display = match ? '' : 'none';
                    });
                });
            }
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
        return array (  531 => 194,  518 => 193,  507 => 14,  504 => 13,  491 => 12,  477 => 188,  469 => 183,  463 => 182,  454 => 176,  447 => 175,  436 => 172,  429 => 171,  425 => 170,  420 => 168,  414 => 167,  409 => 164,  406 => 163,  400 => 158,  391 => 154,  389 => 153,  383 => 151,  379 => 149,  368 => 141,  364 => 140,  358 => 137,  352 => 134,  346 => 131,  339 => 126,  337 => 125,  330 => 123,  327 => 122,  323 => 120,  317 => 118,  315 => 117,  311 => 116,  305 => 115,  299 => 114,  293 => 113,  287 => 112,  282 => 110,  277 => 108,  274 => 107,  269 => 106,  243 => 83,  235 => 78,  227 => 73,  219 => 68,  211 => 62,  203 => 57,  195 => 52,  188 => 47,  184 => 46,  180 => 45,  176 => 44,  172 => 43,  168 => 42,  161 => 37,  151 => 29,  137 => 17,  134 => 15,  132 => 12,  128 => 10,  115 => 9,  92 => 7,  80 => 4,  67 => 3,  44 => 1,);
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
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    id=\"searchInput\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher titre, sponsor ou montant...\"
                                    aria-label=\"Rechercher titre, sponsor ou montant...\"
                                    value=\"{{ searchTerm|default('') }}\"
                                />
                            </div>
                        </div>
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
                                <li><a class=\"dropdown-item\" href=\"{{ path('contrat_main', {'filter': 'article'}) }}\">Par Article</a></li>
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
                    <table class=\"table modern-table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de Début</th>
                                <th>Date de Fin</th>
                                <th>Montant</th>
                                <th>Sponsor</th>
                                <th>Signature</th>
                                <th>Article</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for contrat in contrats %}
                                <tr class=\"table-default contrat-row\">
                                    <td data-full-description=\"{{ contrat.Titre|default('N/A') }}\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ contrat.Titre|default('N/A') }}</strong>
                                    </td>
                                    <td data-full-description=\"{{ contrat.DateDebut ? contrat.DateDebut|date('Y-m-d') : 'N/A' }}\">{{ contrat.DateDebut|date('Y-m-d') }}</td>
                                    <td data-full-description=\"{{ contrat.DateFin ? contrat.DateFin|date('Y-m-d') : 'N/A' }}\">{{ contrat.DateFin|date('Y-m-d') }}</td>
                                    <td data-full-description=\"{{ contrat.Montant|default('N/A') }}\">{{ contrat.Montant|default('N/A') }}</td>
                                    <td data-full-description=\"{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}\">{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}</td>
                                    <td data-full-description=\"{{ contrat.Signature ? 'Signature disponible' : 'No Signature' }}\">
                                        {% if contrat.Signature %}
                                            <img src=\"{{ asset(contrat.Signature) }}\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                        {% else %}
                                            No Signature
                                        {% endif %}
                                    </td>
                                    <td data-full-description=\"{{ contrat.article|default('N/A') }}\">{{ contrat.article|slice(0, 50) ~ (contrat.article|length > 50 ? '...' : '') }}</td>
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
                                                    <a class=\"dropdown-item\" href=\"{{ path('contrat_export', {'format': 'pdf', 'idContrat': contrat.idContrat}) }}\">
                                                        <i class=\"bx bx-file me-1\"></i> Exporter PDF
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
                                    <td colspan=\"8\" class=\"text-center\">Aucun contrat trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {# Conditionally hide pagination when searchTerm is not empty #}
                {% if searchTerm is empty %}
                    <div class=\"card-footer\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item {% if contrats.currentPageNumber == 1 %}disabled{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber - 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\"><i class=\"bx bx-chevron-left\"></i></a>
                                </li>
                                {% for page in 1..contrats.getPageCount() %}
                                    <li class=\"page-item {% if page == contrats.currentPageNumber %}active{% endif %}\">
                                        <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': page, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\">{{ page }}</a>
                                    </li>
                                {% endfor %}
                                <li class=\"page-item {% if contrats.currentPageNumber == contrats.getPageCount() %}disabled{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('contrat_main', {'page': contrats.currentPageNumber + 1, 'search': searchTerm|default(''), 'filter': filter|default('')}) }}\"><i class=\"bx bx-chevron-right\"></i></a>
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
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3786755132717331\"
     crossorigin=\"anonymous\"></script> 
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.contrat-row') : [];

            // Recherche dynamique
            if (searchInput && rows.length) {
                searchInput.addEventListener('input', () => {
                    const searchTerm = searchInput.value.toLowerCase();

                    rows.forEach(row => {
                        const cells = row.querySelectorAll('td');
                        let match = false;

                        cells.forEach(cell => {
                            const text = cell.getAttribute('data-full-description') || cell.textContent;
                            if (text.toLowerCase().includes(searchTerm)) {
                                match = true;
                            }
                        });

                        row.style.display = match ? '' : 'none';
                    });
                });
            }
        });
    </script>
{% endblock %}", "contrat/main.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\main.html.twig");
    }
}
