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

/* abonnement/new.html.twig */
class __TwigTemplate_b6dd0c8b3a0e009814b66d19d943e32a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/new.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "abonnement/new.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Abonnements /</span> Nouvel Abonnement
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Abonnement</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
        yield "

                        ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"club\">Club</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "club", [], "any", false, false, false, 32), 'widget');
        yield "
                                </div>
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "club", [], "any", false, false, false, 34), 'errors');
        yield "
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"typeAbonnement\">Type d'Abonnement</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-list-ul\"></i></span>
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "typeAbonnement", [], "any", false, false, false, 40), 'widget');
        yield "
                                </div>
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "typeAbonnement", [], "any", false, false, false, 42), 'errors');
        yield "
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateDebut\">Date de Début</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateDebut", [], "any", false, false, false, 48), 'widget');
        yield "
                                </div>
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateDebut", [], "any", false, false, false, 50), 'errors');
        yield "
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateFin\">Date de Fin</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "dateFin", [], "any", false, false, false, 56), 'widget');
        yield "
                                </div>
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dateFin", [], "any", false, false, false, 58), 'errors');
        yield "
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"tarif\">Tarif</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dollar\"></i></span>
                                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "tarif", [], "any", false, false, false, 64), 'widget');
        yield "
                                </div>
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "tarif", [], "any", false, false, false, 66), 'errors');
        yield "
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"etat\">État</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "etat", [], "any", false, false, false, 72), 'widget');
        yield "
                                </div>
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "etat", [], "any", false, false, false, 74), 'errors');
        yield "
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
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
        return "abonnement/new.html.twig";
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
        return array (  231 => 78,  227 => 77,  221 => 74,  216 => 72,  207 => 66,  202 => 64,  193 => 58,  188 => 56,  179 => 50,  174 => 48,  165 => 42,  160 => 40,  151 => 34,  146 => 32,  138 => 27,  133 => 25,  130 => 24,  121 => 22,  117 => 21,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Abonnements /</span> Nouvel Abonnement
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Abonnement</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger\">{{ message }}</div>
                        {% endfor %}

                        {{ form_errors(form) }}

                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"club\">Club</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                    {{ form_widget(form.club) }}
                                </div>
                                {{ form_errors(form.club) }}
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"typeAbonnement\">Type d'Abonnement</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-list-ul\"></i></span>
                                    {{ form_widget(form.typeAbonnement) }}
                                </div>
                                {{ form_errors(form.typeAbonnement) }}
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateDebut\">Date de Début</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateDebut) }}
                                </div>
                                {{ form_errors(form.dateDebut) }}
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"dateFin\">Date de Fin</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateFin) }}
                                </div>
                                {{ form_errors(form.dateFin) }}
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"tarif\">Tarif</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dollar\"></i></span>
                                    {{ form_widget(form.tarif) }}
                                </div>
                                {{ form_errors(form.tarif) }}
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"etat\">État</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                    {{ form_widget(form.etat) }}
                                </div>
                                {{ form_errors(form.etat) }}
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            <a href=\"{{ path('abonnement_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "abonnement/new.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\abonnement\\new.html.twig");
    }
}
