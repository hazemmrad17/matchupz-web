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

/* performance_joueur/edit.html.twig */
class __TwigTemplate_dd0c84edc23f4cf53d0a03e47b67f811 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performance_joueur/edit.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "performance_joueur/edit.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Modifier Performance Joueur";
        
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
                <span class=\"text-muted fw-light\">Performance Joueur /</span> Modifier
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier la Performance</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Saison</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "saison", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Nombre de Matches</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nombreMatches", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Minutes Jouées</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "minutesJouees", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Buts Marqués</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "butsMarques", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Passes Décisives</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-pass\"></i></span>
                                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "passesDecisives", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Cartons Jaunes</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-square\" style=\"color: yellow;\"></i></span>
                                        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "cartonsJaunes", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Cartons Rouges</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-square\" style=\"color: red;\"></i></span>
                                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "cartonsRouges", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour
                                </a>
                            </div>
                        ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
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
        return "performance_joueur/edit.html.twig";
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
        return array (  247 => 99,  240 => 95,  228 => 86,  218 => 79,  205 => 69,  195 => 62,  182 => 52,  172 => 45,  160 => 36,  149 => 28,  141 => 23,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Modifier Performance Joueur{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Performance Joueur /</span> Modifier
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier la Performance</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Joueur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.joueur, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Saison</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.saison, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Nombre de Matches</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                        {{ form_widget(form.nombreMatches, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Minutes Jouées</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                        {{ form_widget(form.minutesJouees, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Buts Marqués</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                        {{ form_widget(form.butsMarques, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Passes Décisives</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-pass\"></i></span>
                                        {{ form_widget(form.passesDecisives, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Cartons Jaunes</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-square\" style=\"color: yellow;\"></i></span>
                                        {{ form_widget(form.cartonsJaunes, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label\">Cartons Rouges</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-square\" style=\"color: red;\"></i></span>
                                        {{ form_widget(form.cartonsRouges, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"{{ path('performance_joueur_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "performance_joueur/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace\\templates\\performance_joueur\\edit.html.twig");
    }
}
