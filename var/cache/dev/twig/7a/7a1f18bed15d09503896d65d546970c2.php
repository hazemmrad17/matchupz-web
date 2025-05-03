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

/* match/main.html.twig */
class __TwigTemplate_71bbfeaf652a35bf68f9e839aefd72cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "match/main.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "        ";
        yield from $this->loadTemplate("searchbar.html.twig", "match/main.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Liste des Matchs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
                ";
        // line 12
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 15
        yield "                <div class=\"card\">
                    <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                        Liste des Matchs
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_new");
        yield "\" class=\"btn btn-primary\">Ajouter un match</a>
                    </h5>
                    <div class=\"table-responsive text-nowrap\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Compétiteur 1</th>
                                    <th>Compétiteur 2</th>
                                    <th>Type du sport</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 32
            yield "                                    <tr class=\"table-default\">
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "c1", [], "any", false, false, false, 35), "html", null, true);
            yield "</strong>
                                        </td>
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "c2", [], "any", false, false, false, 39), "html", null, true);
            yield "</strong>
                                        </td>
                                        <td>";
            // line 41
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "sportType", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "sportType", [], "any", false, false, false, 41)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "sportType", [], "any", false, false, false, 41), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "idMatch", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "idMatch", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "idMatch", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["match"], "idMatch", [], "any", false, false, false, 55))), "html", null, true);
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
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\">Aucun match trouvé</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                            </tbody>
                        </table>
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
        yield "                          ";
        yield from $this->loadTemplate("match/widgets.html.twig", "match/main.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "match/main.html.twig";
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
        return array (  264 => 14,  261 => 13,  248 => 12,  230 => 69,  221 => 65,  219 => 64,  205 => 55,  201 => 54,  195 => 51,  189 => 48,  179 => 41,  174 => 39,  167 => 35,  162 => 32,  157 => 31,  141 => 18,  136 => 15,  134 => 12,  129 => 9,  116 => 8,  93 => 6,  82 => 4,  79 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
    {% block searchbar %}
        {% include 'searchbar.html.twig' %}
    {% endblock %}

{% block title %}Liste des Matchs{% endblock %}

{% block content %}

    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
                {% block widgets %}
                          {% include 'match/widgets.html.twig' %}
                {% endblock %}
                <div class=\"card\">
                    <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                        Liste des Matchs
                        <a href=\"{{ path('match_new') }}\" class=\"btn btn-primary\">Ajouter un match</a>
                    </h5>
                    <div class=\"table-responsive text-nowrap\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Compétiteur 1</th>
                                    <th>Compétiteur 2</th>
                                    <th>Type du sport</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\">
                                {% for match in matches %}
                                    <tr class=\"table-default\">
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>{{ match.c1 }}</strong>
                                        </td>
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>{{ match.c2 }}</strong>
                                        </td>
                                        <td>{{ match.sportType ?? 'N/A' }}</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('match_show', {'id': match.idMatch}) }}\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('match_edit', {'id': match.idMatch}) }}\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('match_delete', {'id': match.idMatch}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ match.idMatch) }}\">
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
                                        <td colspan=\"4\" class=\"text-center\">Aucun match trouvé</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "match/main.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\match\\main.html.twig");
    }
}
