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

/* joueur/main.html.twig */
class __TwigTemplate_0073bd7091878f93c23833961806b00e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/main.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/main.html.twig", 3)->unwrap()->yield($context);
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

        yield "Liste des Joueurs";
        
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
                        Liste des Joueurs
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_new");
        yield "\" class=\"btn btn-primary\">Ajouter un Joueur</a>
                    </h5>
                    <div class=\"table-responsive text-nowrap\">
                        <table class=\"table\">
                            <thead>
                                <tr>
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
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\">
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 40
            yield "                                    <tr class=\"table-default\">
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 43), "html", null, true);
            yield "</strong>
                                        </td>
                                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                        <td>";
            // line 46
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 46), "nomSport", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 46), "nomSport", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 46), "nomSport", [], "any", false, false, false, 46), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 48
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 48), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 49), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 50), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 51
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 51)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 51), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 52
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 52), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>";
            // line 53
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 53)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 53), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
                                            ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 55)) {
                // line 56
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 56), "html", null, true);
                yield "\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 30px; height: 30px;\">
                                            ";
            } else {
                // line 58
                yield "                                                N/A
                                            ";
            }
            // line 60
            yield "                                        </td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                </button>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-show me-1\"></i> Voir
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                    </a>
                                                    <form method=\"post\" action=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 74))), "html", null, true);
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
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                                    <tr>
                                        <td colspan=\"12\" class=\"text-center\">Aucun joueur trouvé</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        yield "                ";
        yield from $this->loadTemplate("joueur/widgets.html.twig", "joueur/main.html.twig", 13)->unwrap()->yield($context);
        // line 14
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
        return "joueur/main.html.twig";
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
        return array (  313 => 14,  310 => 13,  297 => 12,  279 => 88,  270 => 84,  268 => 83,  254 => 74,  250 => 73,  244 => 70,  238 => 67,  229 => 60,  225 => 58,  219 => 56,  217 => 55,  212 => 53,  208 => 52,  204 => 51,  200 => 50,  196 => 49,  192 => 48,  188 => 47,  184 => 46,  180 => 45,  175 => 43,  170 => 40,  165 => 39,  141 => 18,  136 => 15,  134 => 12,  129 => 9,  116 => 8,  93 => 6,  82 => 4,  79 => 3,  66 => 2,  43 => 1,);
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
            {% block widgets %}
                {% include 'joueur/widgets.html.twig' %}
            {% endblock %}
                <div class=\"card\">
                    <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                        Liste des Joueurs
                        <a href=\"{{ path('joueur_new') }}\" class=\"btn btn-primary\">Ajouter un Joueur</a>
                    </h5>
                    <div class=\"table-responsive text-nowrap\">
                        <table class=\"table\">
                            <thead>
                                <tr>
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
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"table-border-bottom-0\">
                                {% for joueur in joueurs %}
                                    <tr class=\"table-default\">
                                        <td>
                                            <i class=\"fab fa-sketch fa-lg text-warning me-3\"></i>
                                            <strong>{{ joueur.nom }}</strong>
                                        </td>
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
                                            {% if joueur.profilePictureUrl %}
                                                <img src=\"{{ joueur.profilePictureUrl }}\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 30px; height: 30px;\">
                                            {% else %}
                                                N/A
                                            {% endif %}
                                        </td>
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
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "joueur/main.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace\\templates\\joueur\\main.html.twig");
    }
}
