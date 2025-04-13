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

/* schedule/new.html.twig */
class __TwigTemplate_de5211328fdd0d83d8864877bcd7aa52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/new.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "schedule/new.html.twig", 3)->unwrap()->yield($context);
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
                <span class=\"text-muted fw-light\">Schedules /</span> Nouveau planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau planning</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["id" => "scheduleForm", "novalidate" => "novalidate"]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_dateMatch\">Date du Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateMatch", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_dateMatch"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"dateMatchError\">
                                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateMatch", [], "any", false, false, false, 28), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_startTime\">Heure de Début</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "startTime", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_startTime"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"startTimeError\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "startTime", [], "any", false, false, false, 38), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_endTime\">Heure de Fin</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "endTime", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_endTime"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"endTimeError\">
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "endTime", [], "any", false, false, false, 48), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_matchEntity\">Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "matchEntity", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_matchEntity"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"matchEntityError\">
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "matchEntity", [], "any", false, false, false, 58), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_espaceSportif\">Espace Sportif</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "espaceSportif", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_espaceSportif"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"espaceSportifError\">
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "espaceSportif", [], "any", false, false, false, 68), 'errors');
        yield "
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('scheduleForm');
            const dateMatchInput = document.getElementById('schedule_dateMatch');
            const startTimeInput = document.getElementById('schedule_startTime');
            const endTimeInput = document.getElementById('schedule_endTime');
            const matchEntityInput = document.getElementById('schedule_matchEntity');
            const espaceSportifInput = document.getElementById('schedule_espaceSportif');
            const dateMatchError = document.getElementById('dateMatchError');
            const startTimeError = document.getElementById('startTimeError');
            const endTimeError = document.getElementById('endTimeError');
            const matchEntityError = document.getElementById('matchEntityError');
            const espaceSportifError = document.getElementById('espaceSportifError');

            // Function to validate a single field (required fields)
            function validateField(input, errorElement, fieldName) {
                let hasError = false;
                errorElement.textContent = errorElement.textContent || '';
                input.classList.remove('is-invalid');

                if (!input.value.trim()) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas être vide.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                }
                return hasError;
            }

            // Function to validate dateMatch (not in the past)
            function validateDateMatch() {
                dateMatchError.textContent = dateMatchError.textContent || '';
                dateMatchInput.classList.remove('is-invalid');

                if (dateMatchInput.value) {
                    const selectedDate = new Date(dateMatchInput.value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0); // Reset time to midnight for comparison

                    if (selectedDate < today) {
                        dateMatchError.textContent = \"La date du match ne peut pas être dans le passé.\";
                        dateMatchInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Function to validate startTime and endTime
            function validateTimeRange() {
                endTimeError.textContent = endTimeError.textContent || '';
                endTimeInput.classList.remove('is-invalid');

                if (startTimeInput.value && endTimeInput.value) {
                    const startTime = new Date(`1970-01-01T\${startTimeInput.value}:00`);
                    const endTime = new Date(`1970-01-01T\${endTimeInput.value}:00`);

                    if (endTime <= startTime) {
                        endTimeError.textContent = \"L'heure de fin doit être après l'heure de début.\";
                        endTimeInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Real-time validation on input/change
            dateMatchInput.addEventListener('input', function () {
                validateField(dateMatchInput, dateMatchError, 'Date du Match');
                validateDateMatch();
            });

            startTimeInput.addEventListener('input', function () {
                validateField(startTimeInput, startTimeError, 'Heure de Début');
                validateTimeRange();
            });

            endTimeInput.addEventListener('input', function () {
                validateField(endTimeInput, endTimeError, 'Heure de Fin');
                validateTimeRange();
            });

            matchEntityInput.addEventListener('change', function () {
                validateField(matchEntityInput, matchEntityError, 'Match');
            });

            espaceSportifInput.addEventListener('change', function () {
                validateField(espaceSportifInput, espaceSportifError, 'Espace Sportif');
            });

            // Validate on form submission
            form.addEventListener('submit', function (event) {
                let hasError = false;

                // Validate all fields
                if (validateField(dateMatchInput, dateMatchError, 'Date du Match')) {
                    hasError = true;
                }
                if (validateField(startTimeInput, startTimeError, 'Heure de Début')) {
                    hasError = true;
                }
                if (validateField(endTimeInput, endTimeError, 'Heure de Fin')) {
                    hasError = true;
                }
                if (validateField(matchEntityInput, matchEntityError, 'Match')) {
                    hasError = true;
                }
                if (validateField(espaceSportifInput, espaceSportifError, 'Espace Sportif')) {
                    hasError = true;
                }
                if (validateDateMatch()) {
                    hasError = true;
                }
                if (validateTimeRange()) {
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
        return "schedule/new.html.twig";
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
        return array (  208 => 73,  204 => 72,  197 => 68,  191 => 65,  181 => 58,  175 => 55,  165 => 48,  159 => 45,  149 => 38,  143 => 35,  133 => 28,  127 => 25,  119 => 20,  104 => 7,  91 => 6,  80 => 4,  77 => 3,  64 => 2,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Schedules /</span> Nouveau planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau planning</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'id': 'scheduleForm', 'novalidate': 'novalidate'}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_dateMatch\">Date du Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateMatch, {'attr': {'class': 'form-control', 'id': 'schedule_dateMatch'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"dateMatchError\">
                                    {{ form_errors(form.dateMatch) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_startTime\">Heure de Début</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    {{ form_widget(form.startTime, {'attr': {'class': 'form-control', 'id': 'schedule_startTime'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"startTimeError\">
                                    {{ form_errors(form.startTime) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_endTime\">Heure de Fin</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    {{ form_widget(form.endTime, {'attr': {'class': 'form-control', 'id': 'schedule_endTime'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"endTimeError\">
                                    {{ form_errors(form.endTime) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_matchEntity\">Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    {{ form_widget(form.matchEntity, {'attr': {'class': 'form-control', 'id': 'schedule_matchEntity'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"matchEntityError\">
                                    {{ form_errors(form.matchEntity) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_espaceSportif\">Espace Sportif</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    {{ form_widget(form.espaceSportif, {'attr': {'class': 'form-control', 'id': 'schedule_espaceSportif'}}) }}
                                </div>
                                <div class=\"text-danger mt-1\" id=\"espaceSportifError\">
                                    {{ form_errors(form.espaceSportif) }}
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('schedule_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('scheduleForm');
            const dateMatchInput = document.getElementById('schedule_dateMatch');
            const startTimeInput = document.getElementById('schedule_startTime');
            const endTimeInput = document.getElementById('schedule_endTime');
            const matchEntityInput = document.getElementById('schedule_matchEntity');
            const espaceSportifInput = document.getElementById('schedule_espaceSportif');
            const dateMatchError = document.getElementById('dateMatchError');
            const startTimeError = document.getElementById('startTimeError');
            const endTimeError = document.getElementById('endTimeError');
            const matchEntityError = document.getElementById('matchEntityError');
            const espaceSportifError = document.getElementById('espaceSportifError');

            // Function to validate a single field (required fields)
            function validateField(input, errorElement, fieldName) {
                let hasError = false;
                errorElement.textContent = errorElement.textContent || '';
                input.classList.remove('is-invalid');

                if (!input.value.trim()) {
                    errorElement.textContent = `Le champ \${fieldName} ne peut pas être vide.`;
                    input.classList.add('is-invalid');
                    hasError = true;
                }
                return hasError;
            }

            // Function to validate dateMatch (not in the past)
            function validateDateMatch() {
                dateMatchError.textContent = dateMatchError.textContent || '';
                dateMatchInput.classList.remove('is-invalid');

                if (dateMatchInput.value) {
                    const selectedDate = new Date(dateMatchInput.value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0); // Reset time to midnight for comparison

                    if (selectedDate < today) {
                        dateMatchError.textContent = \"La date du match ne peut pas être dans le passé.\";
                        dateMatchInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Function to validate startTime and endTime
            function validateTimeRange() {
                endTimeError.textContent = endTimeError.textContent || '';
                endTimeInput.classList.remove('is-invalid');

                if (startTimeInput.value && endTimeInput.value) {
                    const startTime = new Date(`1970-01-01T\${startTimeInput.value}:00`);
                    const endTime = new Date(`1970-01-01T\${endTimeInput.value}:00`);

                    if (endTime <= startTime) {
                        endTimeError.textContent = \"L'heure de fin doit être après l'heure de début.\";
                        endTimeInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Real-time validation on input/change
            dateMatchInput.addEventListener('input', function () {
                validateField(dateMatchInput, dateMatchError, 'Date du Match');
                validateDateMatch();
            });

            startTimeInput.addEventListener('input', function () {
                validateField(startTimeInput, startTimeError, 'Heure de Début');
                validateTimeRange();
            });

            endTimeInput.addEventListener('input', function () {
                validateField(endTimeInput, endTimeError, 'Heure de Fin');
                validateTimeRange();
            });

            matchEntityInput.addEventListener('change', function () {
                validateField(matchEntityInput, matchEntityError, 'Match');
            });

            espaceSportifInput.addEventListener('change', function () {
                validateField(espaceSportifInput, espaceSportifError, 'Espace Sportif');
            });

            // Validate on form submission
            form.addEventListener('submit', function (event) {
                let hasError = false;

                // Validate all fields
                if (validateField(dateMatchInput, dateMatchError, 'Date du Match')) {
                    hasError = true;
                }
                if (validateField(startTimeInput, startTimeError, 'Heure de Début')) {
                    hasError = true;
                }
                if (validateField(endTimeInput, endTimeError, 'Heure de Fin')) {
                    hasError = true;
                }
                if (validateField(matchEntityInput, matchEntityError, 'Match')) {
                    hasError = true;
                }
                if (validateField(espaceSportifInput, espaceSportifError, 'Espace Sportif')) {
                    hasError = true;
                }
                if (validateDateMatch()) {
                    hasError = true;
                }
                if (validateTimeRange()) {
                    hasError = true;
                }

                if (hasError) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        });
    </script>
{% endblock %}", "schedule/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\schedule\\new.html.twig");
    }
}
