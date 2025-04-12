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

/* performance_joueur/show.html.twig */
class __TwigTemplate_00f39e54abd07032de6a08cc985e8b75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performance_joueur/show.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "performance_joueur/show.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Détails Performance Joueur";
        
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
                <span class=\"text-muted fw-light\">Performance Joueur /</span> Détails
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28))), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28))), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                    <div>
                                        <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 32, $this->source); })()), "joueur", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 32, $this->source); })()), "joueur", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Saison</h6>
                                <span class=\"badge bg-label-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 39, $this->source); })()), "saison", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Matches Joués</h6>
                                    <p>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "nombreMatches", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 45, $this->source); })()), "nombreMatches", [], "any", false, false, false, 45), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Minutes Jouées</h6>
                                    <p>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "minutesJouees", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 49, $this->source); })()), "minutesJouees", [], "any", false, false, false, 49), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Buts Marqués</h6>
                                    <p>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "butsMarques", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 56, $this->source); })()), "butsMarques", [], "any", false, false, false, 56), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Passes Décisives</h6>
                                    <p>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "passesDecisives", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 60, $this->source); })()), "passesDecisives", [], "any", false, false, false, 60), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Cartons Jaunes</h6>
                                    <p>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "cartonsJaunes", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 67, $this->source); })()), "cartonsJaunes", [], "any", false, false, false, 67), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Cartons Rouges</h6>
                                    <p>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["performance_joueur"] ?? null), "cartonsRouges", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 71, $this->source); })()), "cartonsRouges", [], "any", false, false, false, 71), "0")) : ("0")), "html", null, true);
        yield "</p>
                                </div>
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
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_edit", ["idPerformance" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 85, $this->source); })()), "idPerformance", [], "any", false, false, false, 85)]), "html", null, true);
        yield "\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_delete", ["idPerformance" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 89, $this->source); })()), "idPerformance", [], "any", false, false, false, 89)]), "html", null, true);
        yield "\" 
                                      onsubmit=\"return confirm('Confirmer la suppression?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["performance_joueur"]) || array_key_exists("performance_joueur", $context) ? $context["performance_joueur"] : (function () { throw new RuntimeError('Variable "performance_joueur" does not exist.', 91, $this->source); })()), "idPerformance", [], "any", false, false, false, 91))), "html", null, true);
        yield "\">
                                    <button class=\"btn btn-outline-danger w-100\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_index");
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
        return "performance_joueur/show.html.twig";
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
        return array (  253 => 96,  245 => 91,  240 => 89,  233 => 85,  216 => 71,  209 => 67,  199 => 60,  192 => 56,  182 => 49,  175 => 45,  166 => 39,  154 => 32,  146 => 28,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Détails Performance Joueur{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Performance Joueur /</span> Détails
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
                                            {{ performance_joueur.joueur.nom|first|upper }}{{ performance_joueur.joueur.prenom|first|upper }}
                                        </span>
                                    </div>
                                    <div>
                                        <strong>{{ performance_joueur.joueur.nom }} {{ performance_joueur.joueur.prenom }}</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"form-label\">Saison</h6>
                                <span class=\"badge bg-label-primary\">{{ performance_joueur.saison }}</span>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Matches Joués</h6>
                                    <p>{{ performance_joueur.nombreMatches|default('0') }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Minutes Jouées</h6>
                                    <p>{{ performance_joueur.minutesJouees|default('0') }}</p>
                                </div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Buts Marqués</h6>
                                    <p>{{ performance_joueur.butsMarques|default('0') }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Passes Décisives</h6>
                                    <p>{{ performance_joueur.passesDecisives|default('0') }}</p>
                                </div>
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Cartons Jaunes</h6>
                                    <p>{{ performance_joueur.cartonsJaunes|default('0') }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6 class=\"form-label\">Cartons Rouges</h6>
                                    <p>{{ performance_joueur.cartonsRouges|default('0') }}</p>
                                </div>
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
                                <a href=\"{{ path('performance_joueur_edit', {'idPerformance': performance_joueur.idPerformance}) }}\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('performance_joueur_delete', {'idPerformance': performance_joueur.idPerformance}) }}\" 
                                      onsubmit=\"return confirm('Confirmer la suppression?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ performance_joueur.idPerformance) }}\">
                                    <button class=\"btn btn-outline-danger w-100\">
                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                    </button>
                                </form>
                                <a href=\"{{ path('performance_joueur_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour à la liste
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "performance_joueur/show.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\performance_joueur\\show.html.twig");
    }
}
