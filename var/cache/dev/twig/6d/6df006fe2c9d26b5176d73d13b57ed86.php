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

/* evaluation_physique/new.html.twig */
class __TwigTemplate_d75049bec4fdc79212a9509ab3bae93a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/new.html.twig", 1);
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
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "evaluation_physique/new.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Évaluations /</span> Nouvelle Évaluation
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter une Nouvelle Évaluation</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "joueur", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateEvaluation\">Date d'Évaluation</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateEvaluation", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"niveauEndurance\">Endurance</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tachometer\"></i></span>
                                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "niveauEndurance", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"forcePhysique\">Force Physique</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "forcePhysique", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"vitesse\">Vitesse</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vitesse", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"etatBlessure\">État de Blessure</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-plus-medical\"></i></span>
                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "etatBlessure", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez l'état de blessure"]]);
        yield "
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "
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
        return "evaluation_physique/new.html.twig";
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
        return array (  188 => 67,  184 => 66,  177 => 62,  166 => 54,  156 => 47,  146 => 40,  135 => 32,  125 => 25,  117 => 20,  102 => 7,  89 => 6,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Évaluations /</span> Nouvelle Évaluation
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter une Nouvelle Évaluation</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.joueur, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateEvaluation\">Date d'Évaluation</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateEvaluation, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"niveauEndurance\">Endurance</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tachometer\"></i></span>
                                        {{ form_widget(form.niveauEndurance, {'attr': {'class': 'form-control', 'placeholder': '0-10'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"forcePhysique\">Force Physique</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                        {{ form_widget(form.forcePhysique, {'attr': {'class': 'form-control', 'placeholder': '0-10'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label\" for=\"vitesse\">Vitesse</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                        {{ form_widget(form.vitesse, {'attr': {'class': 'form-control', 'placeholder': '0-10'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"etatBlessure\">État de Blessure</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-plus-medical\"></i></span>
                                    {{ form_widget(form.etatBlessure, {'attr': {'class': 'form-control', 'placeholder': 'Décrivez l\\'état de blessure'}}) }}
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            <a href=\"{{ path('app_evaluation_physique_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "evaluation_physique/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\evaluation_physique\\new.html.twig");
    }
}
