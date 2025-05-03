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

/* historique_club/edit.html.twig */
class __TwigTemplate_6f1bae6720ca8b0c70c04d43585e349f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique_club/edit.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "historique_club/edit.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Modifier Historique Club";
        
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
                <span class=\"text-muted fw-light\">Historique Club /</span> Modifier
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier l'Historique</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "joueur", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                <div class=\"input-group input-group-merge ";
        // line 26
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "joueur", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) ? ("is-invalid") : (""));
        yield "\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "joueur", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "joueur", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "                                    <div class=\"form-error-message invalid-feedback\">
                                        ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "joueur", [], "any", false, false, false, 32), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 35
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nomClub", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                <div class=\"input-group input-group-merge ";
        // line 39
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nomClub", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) ? ("is-invalid") : (""));
        yield "\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-group\"></i></span>
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nomClub", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du club"]]);
        yield "
                                </div>
                                ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nomClub", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "                                    <div class=\"form-error-message invalid-feedback\">
                                        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nomClub", [], "any", false, false, false, 45), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 48
        yield "                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "saisonDebut", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    <div class=\"input-group input-group-merge ";
        // line 53
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "saisonDebut", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) ? ("is-invalid") : (""));
        yield "\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "saisonDebut", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "AAAA-MM-JJ"]]);
        yield "
                                    </div>
                                    ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "saisonDebut", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "errors", [], "any", false, false, false, 57)) > 0)) {
            // line 58
            yield "                                        <div class=\"form-error-message invalid-feedback\">
                                            ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "saisonDebut", [], "any", false, false, false, 59), 'errors');
            yield "
                                        </div>
                                    ";
        }
        // line 62
        yield "                                    <small class=\"text-muted\">Format: AAAA-MM-JJ (ex. 1990-01-01)</small>
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "saisonFin", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    <div class=\"input-group input-group-merge ";
        // line 66
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "saisonFin", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66)) > 0)) ? ("is-invalid") : (""));
        yield "\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "saisonFin", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "AAAA-MM-JJ"]]);
        yield "
                                    </div>
                                    ";
        // line 70
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "saisonFin", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) {
            // line 71
            yield "                                        <div class=\"form-error-message invalid-feedback\">
                                            ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "saisonFin", [], "any", false, false, false, 72), 'errors');
            yield "
                                        </div>
                                    ";
        }
        // line 75
        yield "                                    <small class=\"text-muted\">Format: AAAA-MM-JJ, laissez vide si toujours actif</small>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour
                                </a>
                            </div>
                        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
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

    // line 95
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

        // line 96
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#historique_club_saisonDebut', {
                dateFormat: 'Y-m-d',
                allowInput: true,
            });
            flatpickr('#historique_club_saisonFin', {
                dateFormat: 'Y-m-d',
                allowInput: true,
                minDate: document.getElementById('historique_club_saisonDebut').value || null,
            });
            document.getElementById('historique_club_saisonDebut').addEventListener('change', function () {
                flatpickr('#historique_club_saisonFin').set('minDate', this.value || null);
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
        return "historique_club/edit.html.twig";
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
        return array (  311 => 96,  298 => 95,  280 => 87,  273 => 83,  263 => 75,  257 => 72,  254 => 71,  252 => 70,  247 => 68,  242 => 66,  238 => 65,  233 => 62,  227 => 59,  224 => 58,  222 => 57,  217 => 55,  212 => 53,  208 => 52,  202 => 48,  196 => 45,  193 => 44,  191 => 43,  186 => 41,  181 => 39,  177 => 38,  172 => 35,  166 => 32,  163 => 31,  161 => 30,  156 => 28,  151 => 26,  147 => 25,  142 => 23,  127 => 10,  114 => 9,  91 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Modifier Historique Club{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Historique Club /</span> Modifier
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier l'Historique</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                {{ form_label(form.joueur, null, {'label_attr': {'class': 'form-label'}}) }}
                                <div class=\"input-group input-group-merge {{ form.joueur.vars.errors|length > 0 ? 'is-invalid' : '' }}\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.joueur, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {% if form.joueur.vars.errors|length > 0 %}
                                    <div class=\"form-error-message invalid-feedback\">
                                        {{ form_errors(form.joueur) }}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                {{ form_label(form.nomClub, null, {'label_attr': {'class': 'form-label'}}) }}
                                <div class=\"input-group input-group-merge {{ form.nomClub.vars.errors|length > 0 ? 'is-invalid' : '' }}\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-group\"></i></span>
                                    {{ form_widget(form.nomClub, {'attr': {'class': 'form-control', 'placeholder': 'Nom du club'}}) }}
                                </div>
                                {% if form.nomClub.vars.errors|length > 0 %}
                                    <div class=\"form-error-message invalid-feedback\">
                                        {{ form_errors(form.nomClub) }}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    {{ form_label(form.saisonDebut, null, {'label_attr': {'class': 'form-label'}}) }}
                                    <div class=\"input-group input-group-merge {{ form.saisonDebut.vars.errors|length > 0 ? 'is-invalid' : '' }}\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        {{ form_widget(form.saisonDebut, {'attr': {'class': 'form-control', 'placeholder': 'AAAA-MM-JJ'}}) }}
                                    </div>
                                    {% if form.saisonDebut.vars.errors|length > 0 %}
                                        <div class=\"form-error-message invalid-feedback\">
                                            {{ form_errors(form.saisonDebut) }}
                                        </div>
                                    {% endif %}
                                    <small class=\"text-muted\">Format: AAAA-MM-JJ (ex. 1990-01-01)</small>
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_label(form.saisonFin, null, {'label_attr': {'class': 'form-label'}}) }}
                                    <div class=\"input-group input-group-merge {{ form.saisonFin.vars.errors|length > 0 ? 'is-invalid' : '' }}\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        {{ form_widget(form.saisonFin, {'attr': {'class': 'form-control', 'placeholder': 'AAAA-MM-JJ'}}) }}
                                    </div>
                                    {% if form.saisonFin.vars.errors|length > 0 %}
                                        <div class=\"form-error-message invalid-feedback\">
                                            {{ form_errors(form.saisonFin) }}
                                        </div>
                                    {% endif %}
                                    <small class=\"text-muted\">Format: AAAA-MM-JJ, laissez vide si toujours actif</small>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex justify-content-between\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"bx bx-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"{{ path('app_historique_club_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"bx bx-arrow-back me-1\"></i> Retour
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#historique_club_saisonDebut', {
                dateFormat: 'Y-m-d',
                allowInput: true,
            });
            flatpickr('#historique_club_saisonFin', {
                dateFormat: 'Y-m-d',
                allowInput: true,
                minDate: document.getElementById('historique_club_saisonDebut').value || null,
            });
            document.getElementById('historique_club_saisonDebut').addEventListener('change', function () {
                flatpickr('#historique_club_saisonFin').set('minDate', this.value || null);
            });
        });
    </script>
{% endblock %}", "historique_club/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\historique_club\\edit.html.twig");
    }
}
