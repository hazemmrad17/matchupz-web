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

/* sponsor/main.html.twig */
class __TwigTemplate_dd335efdad54aa268aa91eca97005fce extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sponsor/main.html.twig", 1);
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

        yield "Liste des Sponsors";
        
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
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">

        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 12
        yield "
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
                                placeholder=\"Rechercher un sponsor...\"
                                aria-label=\"Rechercher un sponsor...\"
                                value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 25, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                            />
                        </div>
                    </div>
                </div>

                <div class=\"d-flex align-items-center\">
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "contact"]);
        yield "\">Par Contact</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "pack"]);
        yield "\">Par Pack</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "sponsorPicture"]);
        yield "\">Par Image</a></li>
                        </ul>
                    </div>

                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Sponsor
                    </a>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "xlsx"]);
        yield "\">Excel (.xlsx)</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "csv"]);
        yield "\">CSV (.csv)</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "pdf"]);
        yield "\">PDF (.pdf)</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "sql"]);
        yield "\">SQL (.sql)</a></li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table modern-table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Contact</th>
                            <th>Pack</th>
                            <th>Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 78
        if ((array_key_exists("sponsors", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 78, $this->source); })())))) {
            // line 79
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 79, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                // line 80
                yield "                                <tr class=\"table-default reservation-row\">
                                    <td data-full-description=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 81), "N/A")) : ("N/A")), "html", null, true);
                yield "\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 83), "N/A")) : ("N/A")), "html", null, true);
                yield "</strong>
                                    </td>
                                    <td data-full-description=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 85), "N/A")) : ("N/A")), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 85), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td data-full-description=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 86), "N/A")) : ("N/A")), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 86), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    <td data-full-description=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 87), "Aucune image")) : ("Aucune image")), "html", null, true);
                yield "\">
                                        ";
                // line 88
                if (CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 88)) {
                    // line 89
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/sponsor_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 89))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 89), "Sponsor")) : ("Sponsor")), "html", null, true);
                    yield "\" style=\"max-width: 100px; max-height: 100px;\" onerror=\"this.src='/path/to/fallback-image.png';\">
                                        ";
                } else {
                    // line 91
                    yield "                                            Aucune image
                                        ";
                }
                // line 93
                yield "                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 107))), "html", null, true);
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
            // line 116
            if (!$context['_iterated']) {
                // line 117
                yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun sponsor trouvé</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                        ";
        } else {
            // line 122
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center\">Erreur de chargement des sponsors</td>
                            </tr>
                        ";
        }
        // line 126
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 131
        yield "            ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 135, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 135) == 1)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 136, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 136) - 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 136, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 136, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-left\"></i></a>
                            </li>
                            ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 138, $this->source); })()), "getPageCount", [], "method", false, false, false, 138)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 139
                yield "                                <li class=\"page-item ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 139, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 139))) {
                    yield "active";
                }
                yield "\">
                                    <a class=\"page-link\" href=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => $context["page"], "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 140, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 140, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "                            <li class=\"page-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 143, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 143) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 143, $this->source); })()), "getPageCount", [], "method", false, false, false, 143))) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 144, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 144) + 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 144, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 144, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-right\"></i></a>
                                </li>
                        </ul>
                    </nav>
                    <div class=\"text-center\">
                        <small>
                            Page ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsors"] ?? null), "currentPageNumber", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 150, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 150), 1)) : (1)), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsors"] ?? null), "getPageCount", [], "method", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 150, $this->source); })()), "getPageCount", [], "method", false, false, false, 150), 1)) : (1)), "html", null, true);
            yield " |
                            Total Sponsors : ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalSponsors", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalSponsors"]) || array_key_exists("totalSponsors", $context) ? $context["totalSponsors"] : (function () { throw new RuntimeError('Variable "totalSponsors" does not exist.', 151, $this->source); })()), 0)) : (0)), "html", null, true);
            yield "
                        </small>
                    </div>
                </div>
            ";
        }
        // line 156
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "            ";
        yield from $this->loadTemplate("/sponsor/widgets.html.twig", "sponsor/main.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        // line 162
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sponsor Growth Bar Chart
            var sponsorGrowthOptions = {
                chart: {
                    type: 'bar',
                    height: 300,
                    stacked: false
                },
                colors: ['#7C3AED', '#00CFE8'],
                series: [
                    { name: '2021', data: [15, 5, 12, 28, 14, 10, 8] },
                    { name: '2020', data: [-10, -12, -7, -10, 0, -15, -13] }
                ],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
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
                            return val + \" sponsors\";
                        }
                    }
                }
            };

            var sponsorGrowthChart = new ApexCharts(document.querySelector(\"#sponsorGrowthChart\"), sponsorGrowthOptions);
            sponsorGrowthChart.render();

            // Sponsor Growth Radial Chart
            var radialGrowthOptions = {
                series: [78],
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
                colors: ['#7C3AED']
            };

            var sponsorRadialChart = new ApexCharts(document.querySelector(\"#sponsorGrowthRadialChart\"), radialGrowthOptions);
            sponsorRadialChart.render();

            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.reservation-row') : [];

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
        return "sponsor/main.html.twig";
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
        return array (  451 => 162,  438 => 161,  427 => 11,  424 => 10,  411 => 9,  397 => 156,  389 => 151,  383 => 150,  374 => 144,  367 => 143,  356 => 140,  349 => 139,  345 => 138,  340 => 136,  334 => 135,  329 => 132,  326 => 131,  320 => 126,  314 => 122,  311 => 121,  302 => 117,  300 => 116,  286 => 107,  282 => 106,  276 => 103,  270 => 100,  261 => 93,  257 => 91,  249 => 89,  247 => 88,  243 => 87,  237 => 86,  231 => 85,  226 => 83,  221 => 81,  218 => 80,  212 => 79,  210 => 78,  189 => 60,  185 => 59,  181 => 58,  177 => 57,  165 => 48,  158 => 44,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  124 => 25,  109 => 12,  107 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Sponsors{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">

        {% block widgets %}
            {% include '/sponsor/widgets.html.twig' %}
        {% endblock %}

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
                                placeholder=\"Rechercher un sponsor...\"
                                aria-label=\"Rechercher un sponsor...\"
                                value=\"{{ searchTerm|default('') }}\"
                            />
                        </div>
                    </div>
                </div>

                <div class=\"d-flex align-items-center\">
                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'nom'}) }}\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'contact'}) }}\">Par Contact</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'pack'}) }}\">Par Pack</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'sponsorPicture'}) }}\">Par Image</a></li>
                        </ul>
                    </div>

                    <a href=\"{{ path('sponsor_statistics') }}\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    <a href=\"{{ path('sponsor_new') }}\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Sponsor
                    </a>

                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bx bx-download me-1\"></i> Exporter
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'xlsx'}) }}\">Excel (.xlsx)</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'csv'}) }}\">CSV (.csv)</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'pdf'}) }}\">PDF (.pdf)</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'sql'}) }}\">SQL (.sql)</a></li>
                        </ul>
                    </div>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table modern-table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Contact</th>
                            <th>Pack</th>
                            <th>Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% if sponsors is defined and sponsors is not empty %}
                            {% for sponsor in sponsors %}
                                <tr class=\"table-default reservation-row\">
                                    <td data-full-description=\"{{ sponsor.nom|default('N/A') }}\">
                                        <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                        <strong>{{ sponsor.nom|default('N/A') }}</strong>
                                    </td>
                                    <td data-full-description=\"{{ sponsor.contact|default('N/A') }}\">{{ sponsor.contact|default('N/A') }}</td>
                                    <td data-full-description=\"{{ sponsor.pack|default('N/A') }}\">{{ sponsor.pack|default('N/A') }}</td>
                                    <td data-full-description=\"{{ sponsor.sponsorPicture|default('Aucune image') }}\">
                                        {% if sponsor.sponsorPicture %}
                                            <img src=\"{{ asset('Uploads/sponsor_pictures/' ~ sponsor.sponsorPicture) }}\" alt=\"{{ sponsor.nom|default('Sponsor') }}\" style=\"max-width: 100px; max-height: 100px;\" onerror=\"this.src='/path/to/fallback-image.png';\">
                                        {% else %}
                                            Aucune image
                                        {% endif %}
                                    </td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('sponsor_show', {'id': sponsor.idSponsor}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('sponsor_edit', {'id': sponsor.idSponsor}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('sponsor_delete', {'id': sponsor.idSponsor}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ sponsor.idSponsor) }}\">
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
                                    <td colspan=\"5\" class=\"text-center\">Aucun sponsor trouvé</td>
                                </tr>
                            {% endfor %}
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center\">Erreur de chargement des sponsors</td>
                            </tr>
                        {% endif %}
                    </tbody>
                </table>
            </div>

            {# Conditionally hide pagination when searchTerm is not empty #}
            {% if searchTerm is empty %}
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {% if sponsors.currentPageNumber == 1 %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber - 1, 'search': searchTerm, 'filter': filter}) }}\"><i class=\"bx bx-chevron-left\"></i></a>
                            </li>
                            {% for page in 1..sponsors.getPageCount() %}
                                <li class=\"page-item {% if page == sponsors.currentPageNumber %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': page, 'search': searchTerm, 'filter': filter}) }}\">{{ page }}</a>
                                </li>
                            {% endfor %}
                            <li class=\"page-item {% if sponsors.currentPageNumber == sponsors.getPageCount() %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber + 1, 'search': searchTerm, 'filter': filter}) }}\"><i class=\"bx bx-chevron-right\"></i></a>
                                </li>
                        </ul>
                    </nav>
                    <div class=\"text-center\">
                        <small>
                            Page {{ sponsors.currentPageNumber|default(1) }} sur {{ sponsors.getPageCount()|default(1) }} |
                            Total Sponsors : {{ totalSponsors|default(0) }}
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
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sponsor Growth Bar Chart
            var sponsorGrowthOptions = {
                chart: {
                    type: 'bar',
                    height: 300,
                    stacked: false
                },
                colors: ['#7C3AED', '#00CFE8'],
                series: [
                    { name: '2021', data: [15, 5, 12, 28, 14, 10, 8] },
                    { name: '2020', data: [-10, -12, -7, -10, 0, -15, -13] }
                ],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
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
                            return val + \" sponsors\";
                        }
                    }
                }
            };

            var sponsorGrowthChart = new ApexCharts(document.querySelector(\"#sponsorGrowthChart\"), sponsorGrowthOptions);
            sponsorGrowthChart.render();

            // Sponsor Growth Radial Chart
            var radialGrowthOptions = {
                series: [78],
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
                colors: ['#7C3AED']
            };

            var sponsorRadialChart = new ApexCharts(document.querySelector(\"#sponsorGrowthRadialChart\"), radialGrowthOptions);
            sponsorRadialChart.render();

            // Dynamic Search
            const searchInput = document.getElementById('searchInput');
            const table = document.querySelector('.modern-table');
            const tbody = table ? table.querySelector('tbody') : null;
            const rows = tbody ? tbody.querySelectorAll('tr.reservation-row') : [];

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
{% endblock %}", "sponsor/main.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\main.html.twig");
    }
}
