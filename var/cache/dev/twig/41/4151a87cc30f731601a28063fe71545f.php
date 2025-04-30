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

/* match/edit.html.twig */
class __TwigTemplate_32ad4c5a74d68b463914ea34eecdc3bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "match/edit.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "match/edit.html.twig", 3)->unwrap()->yield($context);
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
                <span class=\"text-muted fw-light\">Matchs /</span> Modifier Match
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier Match #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["id" => "matchForm", "novalidate" => "novalidate"]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_c1\">Competitor 1</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "c1", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "id" => "match_c1"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"c1Error\"></div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_c2\">Competitor 2</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "c2", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "id" => "match_c2"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"c2Error\"></div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_sportType\">Type de Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "sportType", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "id" => "match_sportType"]]);
        yield "
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à Jour</button>
                            <a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('matchForm');
            const c1Input = document.getElementById('match_c1');
            const c2Input = document.getElementById('match_c2');
            const c1Error = document.getElementById('c1Error');
            const c2Error = document.getElementById('c2Error');

            // Function to validate a single field
            function validateField(input, errorElement, fieldName) {
                let hasError = false;
                errorElement.textContent = '';
                input.classList.remove('is-invalid');

                if (!input.value.trim()) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas être vide.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                } else if (input.value.length > 15) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas dépasser 15 caractères.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                }
                return hasError;
            }

            // Real-time validation on input
            c1Input.addEventListener('input', function () {
                validateField(c1Input, c1Error, 'Competitor 1');
            });

            c2Input.addEventListener('input', function () {
                validateField(c2Input, c2Error, 'Competitor 2');
            });

            // Validate on form submission
            form.addEventListener('submit', function (event) {
                let hasError = false;

                // Validate both fields
                if (validateField(c1Input, c1Error, 'Competitor 1')) {
                    hasError = true;
                }
                if (validateField(c2Input, c2Error, 'Competitor 2')) {
                    hasError = true;
                }

                if (hasError) {
                    event.preventDefault();
                    event.stopPropagation();
                }
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
        return "match/edit.html.twig";
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
        return array (  163 => 46,  159 => 45,  152 => 41,  141 => 33,  130 => 25,  122 => 20,  115 => 16,  104 => 7,  91 => 6,  80 => 4,  77 => 3,  64 => 2,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Matchs /</span> Modifier Match
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier Match #{{ match.id }}</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'id': 'matchForm', 'novalidate': 'novalidate'}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_c1\">Competitor 1</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.c1, {'attr': {'class': 'form-control', 'id': 'match_c1'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"c1Error\"></div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_c2\">Competitor 2</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.c2, {'attr': {'class': 'form-control', 'id': 'match_c2'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"c2Error\"></div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"match_sportType\">Type de Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.sportType, {'attr': {'class': 'form-control', 'id': 'match_sportType'}}) }}
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à Jour</button>
                            <a href=\"{{ path('match_show', {'id': match.id}) }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('matchForm');
            const c1Input = document.getElementById('match_c1');
            const c2Input = document.getElementById('match_c2');
            const c1Error = document.getElementById('c1Error');
            const c2Error = document.getElementById('c2Error');

            // Function to validate a single field
            function validateField(input, errorElement, fieldName) {
                let hasError = false;
                errorElement.textContent = '';
                input.classList.remove('is-invalid');

                if (!input.value.trim()) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas être vide.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                } else if (input.value.length > 15) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas dépasser 15 caractères.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                }
                return hasError;
            }

            // Real-time validation on input
            c1Input.addEventListener('input', function () {
                validateField(c1Input, c1Error, 'Competitor 1');
            });

            c2Input.addEventListener('input', function () {
                validateField(c2Input, c2Error, 'Competitor 2');
            });

            // Validate on form submission
            form.addEventListener('submit', function (event) {
                let hasError = false;

                // Validate both fields
                if (validateField(c1Input, c1Error, 'Competitor 1')) {
                    hasError = true;
                }
                if (validateField(c2Input, c2Error, 'Competitor 2')) {
                    hasError = true;
                }

                if (hasError) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        });
    </script>
{% endblock %}", "match/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\match\\edit.html.twig");
    }
}
