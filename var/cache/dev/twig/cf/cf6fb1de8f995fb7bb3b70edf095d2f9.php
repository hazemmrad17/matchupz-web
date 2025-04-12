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

/* historique_club/show.html.twig */
class __TwigTemplate_fef9c398f56b6671cb35fb7e3ec054d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique_club/show.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "historique_club/show.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Détails Historique Club";
        
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
                <span class=\"text-muted fw-light\">Historique Club /</span> Détails
            </h4>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Informations</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Joueur</h6>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-3\">
                                        <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28))), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28))), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                    <div>
                                        <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 32, $this->source); })()), "joueur", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 32, $this->source); })()), "joueur", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Club</h6>
                                <span class=\"badge bg-label-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 39, $this->source); })()), "nomClub", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Saison Début</h6>
                                    <p>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 45, $this->source); })()), "saisonDebut", [], "any", false, false, false, 45), "m/Y"), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Saison Fin</h6>
                                    <p>
                                        ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 50, $this->source); })()), "saisonFin", [], "any", false, false, false, 50)) {
            // line 51
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 51, $this->source); })()), "saisonFin", [], "any", false, false, false, 51), "m/Y"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 53
            yield "                                            <span class=\"badge bg-success\">Actuel</span>
                                        ";
        }
        // line 55
        yield "                                    </p>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Durée</h6>
                                <p>
                                    ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 62, $this->source); })()), "saisonFin", [], "any", false, false, false, 62)) {
            // line 63
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 63, $this->source); })()), "saisonDebut", [], "any", false, false, false, 63), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 63, $this->source); })()), "saisonFin", [], "any", false, false, false, 63)], "method", false, false, false, 63), "%y ans, %m mois"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 65
            yield "                                        En cours (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 65, $this->source); })()), "saisonDebut", [], "any", false, false, false, 65), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 65), "%y ans, %m mois"), "html", null, true);
            yield ")
                                    ";
        }
        // line 67
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Actions</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_edit", ["idHistorique" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 80, $this->source); })()), "idHistorique", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_delete", ["idHistorique" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 84, $this->source); })()), "idHistorique", [], "any", false, false, false, 84)]), "html", null, true);
        yield "\" 
                                      onsubmit=\"return confirm('Confirmer la suppression?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["historique_club"]) || array_key_exists("historique_club", $context) ? $context["historique_club"] : (function () { throw new RuntimeError('Variable "historique_club" does not exist.', 86, $this->source); })()), "idHistorique", [], "any", false, false, false, 86))), "html", null, true);
        yield "\">
                                    <button class=\"btn btn-outline-danger w-100\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                                <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour à la liste
                                </a>
                            </div>
                        </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "historique_club/show.html.twig";
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
        return array (  253 => 91,  245 => 86,  240 => 84,  233 => 80,  218 => 67,  212 => 65,  206 => 63,  204 => 62,  195 => 55,  191 => 53,  185 => 51,  183 => 50,  175 => 45,  166 => 39,  154 => 32,  146 => 28,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Détails Historique Club{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Historique Club /</span> Détails
            </h4>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Informations</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Joueur</h6>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-3\">
                                        <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                            {{ historique_club.joueur.nom|first|upper }}{{ historique_club.joueur.prenom|first|upper }}
                                        </span>
                                    </div>
                                    <div>
                                        <strong>{{ historique_club.joueur.nom }} {{ historique_club.joueur.prenom }}</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Club</h6>
                                <span class=\"badge bg-label-primary\">{{ historique_club.nomClub }}</span>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Saison Début</h6>
                                    <p>{{ historique_club.saisonDebut|date('m/Y') }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Saison Fin</h6>
                                    <p>
                                        {% if historique_club.saisonFin %}
                                            {{ historique_club.saisonFin|date('m/Y') }}
                                        {% else %}
                                            <span class=\"badge bg-success\">Actuel</span>
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Durée</h6>
                                <p>
                                    {% if historique_club.saisonFin %}
                                        {{ historique_club.saisonDebut.diff(historique_club.saisonFin)|date('%y ans, %m mois') }}
                                    {% else %}
                                        En cours ({{ historique_club.saisonDebut.diff(date())|date('%y ans, %m mois') }})
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Actions</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-grid gap-2\">
                                <a href=\"{{ path('app_historique_club_edit', {'idHistorique': historique_club.idHistorique}) }}\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('app_historique_club_delete', {'idHistorique': historique_club.idHistorique}) }}\" 
                                      onsubmit=\"return confirm('Confirmer la suppression?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ historique_club.idHistorique) }}\">
                                    <button class=\"btn btn-outline-danger w-100\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                                <a href=\"{{ path('app_historique_club_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour à la liste
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "historique_club/show.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\historique_club\\show.html.twig");
    }
}
