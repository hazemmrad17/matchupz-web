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

/* sponsor/index.html.twig */
class __TwigTemplate_862f442989a83697b62256f8e536a9a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sponsor/index.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "sponsor/index.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Liste des Sponsors";
        
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
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Sponsors /</span> Tableau de Bord
        </h4>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <span>Liste des Sponsors</span>
                    <div class=\"navbar-nav align-items-center ms-3\">
                        <div class=\"nav-item d-flex align-items-center\">
                            <i class=\"bx bx-search fs-4 lh-0\"></i>
                            <input
                                type=\"text\"
                                class=\"form-control border-0 shadow-none\"
                                placeholder=\"Rechercher un sponsor...\"
                                aria-label=\"Rechercher un sponsor...\"
                                id=\"searchInput\"
                            />
                        </div>
                    </div>
                </div>
                <div>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_new");
        yield "\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus\"></i> Nouveau Sponsor
                    </a>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"sponsorsTable\">
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 52
            yield "                            <tr class=\"table-default\">
                                <td><strong>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</strong></td>
                                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-show me-1\"></i> Voir
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "idSponsor", [], "any", false, false, false, 69))), "html", null, true);
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
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Aucun sponsor trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item ";
        // line 90
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 90, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 91, $this->source); })()) - 1)]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 95, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 96
            yield "                            <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 96, $this->source); })()) == $context["i"])) ? ("active") : (""));
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_index", ["page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                        <li class=\"page-item ";
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 100, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 100, $this->source); })()))) ? ("disabled") : (""));
        yield "\">
                            <a class=\"page-link\" href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 101, $this->source); })()) + 1)]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
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

    // line 113
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

        // line 114
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('sponsorsTable');
            const rows = table.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function () {
                const value = this.value.toLowerCase();
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(value) ? '' : 'none';
                });
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
        return "sponsor/index.html.twig";
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
        return array (  320 => 114,  307 => 113,  285 => 101,  280 => 100,  269 => 97,  264 => 96,  260 => 95,  253 => 91,  249 => 90,  240 => 83,  231 => 79,  229 => 78,  215 => 69,  211 => 68,  205 => 65,  199 => 62,  189 => 55,  185 => 54,  181 => 53,  178 => 52,  173 => 51,  153 => 34,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Sponsors{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Sponsors /</span> Tableau de Bord
        </h4>

        <div class=\"card\">
            <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <span>Liste des Sponsors</span>
                    <div class=\"navbar-nav align-items-center ms-3\">
                        <div class=\"nav-item d-flex align-items-center\">
                            <i class=\"bx bx-search fs-4 lh-0\"></i>
                            <input
                                type=\"text\"
                                class=\"form-control border-0 shadow-none\"
                                placeholder=\"Rechercher un sponsor...\"
                                aria-label=\"Rechercher un sponsor...\"
                                id=\"searchInput\"
                            />
                        </div>
                    </div>
                </div>
                <div>
                    <a href=\"{{ path('sponsor_new') }}\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus\"></i> Nouveau Sponsor
                    </a>
                </div>
            </h5>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table\" id=\"sponsorsTable\">
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
                                <td><strong>{{ sponsor.nom }}</strong></td>
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
                                            <form method=\"post\" action=\"{{ path('sponsor_delete', {'id': sponsor.idSponsor}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
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

            <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination justify-content-center\">
                        <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('sponsor_index', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                        {% for i in 1..totalPages %}
                            <li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('sponsor_index', {'page': i}) }}\">{{ i }}</a>
                            </li>
                        {% endfor %}
                        <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('sponsor_index', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
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
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('sponsorsTable');
            const rows = table.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function () {
                const value = this.value.toLowerCase();
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(value) ? '' : 'none';
                });
            });
        });
    </script>
{% endblock %}
", "sponsor/index.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\sponsor\\index.html.twig");
    }
}
