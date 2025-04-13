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
class __TwigTemplate_990e156ec6b59c843106d483d43da20a extends Template
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
                    ";
        // line 17
        yield "                    <form class=\"d-flex\" method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main");
        yield "\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, contact ou pack...\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">
                    ";
        // line 27
        yield "                    <div class=\"btn-group me-2\">
                        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Filtrer
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "nom"]);
        yield "\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "contact"]);
        yield "\">Par Contact</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["filter" => "pack"]);
        yield "\">Par Pack</a></li>
                        </ul>
                    </div>

                    ";
        // line 39
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_statistics");
        yield "\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    ";
        // line 44
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_new");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Sponsor
                    </a>

                    ";
        // line 49
        yield "                    <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"bx bx-download me-1\"></i> Exporter
    </button>
    <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
        <li>
            <a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "xlsx"]);
        yield "\">
                <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "csv"]);
        yield "\">
                <i class=\"bx bx-file me-1\"></i> CSV (.csv)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "pdf"]);
        yield "\">
                <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_export", ["format" => "sql"]);
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
                            <th>Nom</th>
                            <th>Contact</th>
                            <th>Pack</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 92
            yield "                            <tr class=\"table-default\">
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "</strong>
                                </td>
                                <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 112))), "html", null, true);
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
        // line 121
        if (!$context['_iterated']) {
            // line 122
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Aucun sponsor trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                    </tbody>
                </table>
            </div>

            ";
        // line 131
        yield "            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item ";
        // line 134
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 134, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 134) == 1)) {
            yield "disabled";
        }
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 135, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 135) - 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 135, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 135, $this->source); })())]), "html", null, true);
        yield "\">Previous</a>
                        </li>
                        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 137, $this->source); })()), "getPageCount", [], "method", false, false, false, 137)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 138
            yield "                            <li class=\"page-item ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 138, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 138))) {
                yield "active";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => $context["page"], "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 139, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 139, $this->source); })())]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                        <li class=\"page-item ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 142, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 142) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 142, $this->source); })()), "getPageCount", [], "method", false, false, false, 142))) {
            yield "disabled";
        }
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 143, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 143) + 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 143, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 143, $this->source); })())]), "html", null, true);
        yield "\">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class=\"text-center\">
                    <small>
                        Page ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 149, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 149), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 149, $this->source); })()), "getPageCount", [], "method", false, false, false, 149), "html", null, true);
        yield " |
                        Total Sponsors : ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 150, $this->source); })()), "totalItemCount", [], "any", false, false, false, 150), "html", null, true);
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

    // line 158
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

        // line 159
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield " ";
        // line 160
        yield "<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
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
        return array (  423 => 160,  420 => 159,  407 => 158,  396 => 11,  393 => 10,  380 => 9,  361 => 150,  355 => 149,  346 => 143,  339 => 142,  328 => 139,  321 => 138,  317 => 137,  312 => 135,  306 => 134,  301 => 131,  295 => 126,  286 => 122,  284 => 121,  270 => 112,  266 => 111,  260 => 108,  254 => 105,  244 => 98,  240 => 97,  235 => 95,  230 => 92,  225 => 91,  201 => 70,  193 => 65,  185 => 60,  177 => 55,  169 => 49,  161 => 44,  153 => 39,  146 => 34,  142 => 33,  138 => 32,  131 => 27,  122 => 20,  115 => 17,  109 => 12,  107 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
                    {# Search Bar Left-Aligned #}
                    <form class=\"d-flex\" method=\"get\" action=\"{{ path('sponsor_main') }}\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher nom, contact ou pack...\" value=\"{{ searchTerm }}\">
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
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'nom'}) }}\">Par Nom</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'contact'}) }}\">Par Contact</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('sponsor_main', {'filter': 'pack'}) }}\">Par Pack</a></li>
                        </ul>
                    </div>

                    {# Statistiques Button #}
                    <a href=\"{{ path('sponsor_statistics') }}\" class=\"btn btn-dark me-2\">
                        <i class=\"bx bx-bar-chart-alt-2 me-1\"></i> Statistiques
                    </a>

                    {# Ajouter Sponsor Button #}
                    <a href=\"{{ path('sponsor_new') }}\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter Sponsor
                    </a>

                    {# Exporter Button #}
                    <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"bx bx-download me-1\"></i> Exporter
    </button>
    <ul class=\"dropdown-menu dropdown-menu-end\" style=\"max-height: 200px; overflow-y: auto;\">
        <li>
            <a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'xlsx'}) }}\">
                <i class=\"bx bx-file me-1\"></i> Excel (.xlsx)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'csv'}) }}\">
                <i class=\"bx bx-file me-1\"></i> CSV (.csv)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'pdf'}) }}\">
                <i class=\"bx bx-file me-1\"></i> PDF (.pdf)
            </a>
        </li>
        <li>
            <a class=\"dropdown-item\" href=\"{{ path('sponsor_export', {'format': 'sql'}) }}\">
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
                            <th>Nom</th>
                            <th>Contact</th>
                            <th>Pack</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% for sponsor in sponsors %}
                            <tr class=\"table-default\">
                                <td>
                                    <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                    <strong>{{ sponsor.nom }}</strong>
                                </td>
                                <td>{{ sponsor.contact }}</td>
                                <td>{{ sponsor.pack }}</td>
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
                                <td colspan=\"4\" class=\"text-center\">Aucun sponsor trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {# Pagination #}
            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item {% if sponsors.currentPageNumber == 1 %}disabled{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber - 1, 'search': searchTerm, 'filter': filter}) }}\">Previous</a>
                        </li>
                        {% for page in 1..sponsors.getPageCount() %}
                            <li class=\"page-item {% if page == sponsors.currentPageNumber %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': page, 'search': searchTerm, 'filter': filter}) }}\">{{ page }}</a>
                            </li>
                        {% endfor %}
                        <li class=\"page-item {% if sponsors.currentPageNumber == sponsors.getPageCount() %}disabled{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber + 1, 'search': searchTerm, 'filter': filter}) }}\">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class=\"text-center\">
                    <small>
                        Page {{ sponsors.currentPageNumber }} sur {{ sponsors.getPageCount() }} |
                        Total Sponsors : {{ sponsors.totalItemCount }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }} {# keep existing JS from base layout #}
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
    });
</script>
{% endblock %}", "sponsor/main.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\sponsor\\main.html.twig");
    }
}
