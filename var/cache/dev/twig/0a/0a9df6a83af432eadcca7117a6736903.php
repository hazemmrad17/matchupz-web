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

/* materiel/new.html.twig */
class __TwigTemplate_584b000e9820d38a3f8bfeb6327855f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/new.html.twig", 1);
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

        yield "Nouveau Matériel";
        
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
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Nouvel Équipement
        </h4>

        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Ajouter un Nouveau Matériel</h5>
                    <small class=\"text-muted float-end\">Remplir les détails</small>
                </div>
                <div class=\"card-body\">
                   ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du matériel"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "quantite", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "quantite", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Quantité en stock"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "etat", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prix unitaire"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "fournisseur", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "fournisseur", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
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
        return "materiel/new.html.twig";
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
        return array (  187 => 49,  183 => 48,  177 => 45,  173 => 44,  166 => 40,  160 => 37,  154 => 34,  150 => 33,  144 => 30,  140 => 29,  134 => 26,  130 => 25,  124 => 22,  120 => 21,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Matériel{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Nouvel Équipement
        </h4>

        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Ajouter un Nouveau Matériel</h5>
                    <small class=\"text-muted float-end\">Remplir les détails</small>
                </div>
                <div class=\"card-body\">
                   {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
                        <div class=\"mb-3\">
                            {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du matériel'}}) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.quantite, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Quantité en stock'}}) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.etat, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.etat, {'attr': {'class': 'form-select'}}) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.prix, null, {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix unitaire'}}) }}
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.fournisseur, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.fournisseur, {'attr': {'class': 'form-select'}}) }}
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "materiel/new.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\materiel\\new.html.twig");
    }
}
