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

/* schedule/edit.html.twig */
class __TwigTemplate_d4f46dcc9fb4f37137797ae7304827ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/edit.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "schedule/edit.html.twig", 3)->unwrap()->yield($context);
        
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
                <span class=\"text-muted fw-light\">Plannings /</span> Modifier Planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier planning #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 16, $this->source); })()), "idSchedule", [], "any", false, false, false, 16), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
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
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_URL\">URL de la vidéo YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video\"></i></span>
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "URL", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_URL"]]);
        yield "
                                </div>
                                <small class=\"form-text text-muted\">";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "URL", [], "any", false, false, false, 77), 'help');
        yield "</small>
                                <div class=\"text-danger mt-1\" id=\"URLError\">
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "URL", [], "any", false, false, false, 79), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_streamURL\">URL de la diffusion en direct YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video-recording\"></i></span>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "streamURL", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_streamURL"]]);
        yield "
                                </div>
                                <small class=\"form-text text-muted\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "streamURL", [], "any", false, false, false, 88), 'help');
        yield "</small>
                                <div class=\"text-danger mt-1\" id=\"streamURLError\">
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "streamURL", [], "any", false, false, false, 90), 'errors');
        yield "
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à Jour</button>
                            <a href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_show", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 94, $this->source); })()), "idSchedule", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
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
            const URLInput = document.getElementById('schedule_URL');
            const streamURLInput = document.getElementById('schedule_streamURL');
            const dateMatchError = document.getElementById('dateMatchError');
            const startTimeError = document.getElementById('startTimeError');
            const endTimeError = document.getElementById('endTimeError');
            const matchEntityError = document.getElementById('matchEntityError');
            const espaceSportifError = document.getElementById('espaceSportifError');
            const URLError = document.getElementById('URLError');
            const streamURLError = document.getElementById('streamURLError');

            // Function to validate a single field (required fields)
            function validateField(input, errorElement, fieldName, isRequired = true) {
                let hasError = false;
                errorElement.textContent = errorElement.textContent || '';
                input.classList.remove('is-invalid');

                if (isRequired && !input.value.trim()) {
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

            // Function to validate URL (optional, must contain /embed/ if provided)
            function validateURL() {
                URLError.textContent = URLError.textContent || '';
                URLInput.classList.remove('is-invalid');

                if (URLInput.value.trim()) {
                    const embedPattern = /\\/embed\\//;
                    if (!embedPattern.test(URLInput.value)) {
                        URLError.textContent = \"L'URL doit être une URL YouTube au format embed (par exemple, https://www.youtube.com/embed/VIDEO_ID).\";
                        URLInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Function to validate streamURL (optional, must contain /embed/ if provided)
            function validateStreamURL() {
                streamURLError.textContent = streamURLError.textContent || '';
                streamURLInput.classList.remove('is-invalid');

                if (streamURLInput.value.trim()) {
                    const embedPattern = /\\/embed\\//;
                    if (!embedPattern.test(streamURLInput.value)) {
                        streamURLError.textContent = \"L'URL de diffusion en direct doit être une URL YouTube au format embed (par exemple, https://www.youtube.com/embed/VIDEO_ID).\";
                        streamURLInput.classList.add('is-invalid');
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

            URLInput.addEventListener('input', function () {
                validateField(URLInput, URLError, 'URL de la vidéo YouTube', false); // Not required
                validateURL();
            });

            streamURLInput.addEventListener('input', function () {
                validateField(streamURLInput, streamURLError, 'URL de la diffusion en direct YouTube', false); // Not required
                validateStreamURL();
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
                if (validateField(URLInput, URLError, 'URL de la vidéo YouTube', false)) {
                    hasError = true;
                }
                if (validateField(streamURLInput, streamURLError, 'URL de la diffusion en direct YouTube', false)) {
                    hasError = true;
                }
                if (validateDateMatch()) {
                    hasError = true;
                }
                if (validateTimeRange()) {
                    hasError = true;
                }
                if (validateURL()) {
                    hasError = true;
                }
                if (validateStreamURL()) {
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
        return "schedule/edit.html.twig";
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
        return array (  249 => 95,  245 => 94,  238 => 90,  233 => 88,  228 => 86,  218 => 79,  213 => 77,  208 => 75,  198 => 68,  192 => 65,  182 => 58,  176 => 55,  166 => 48,  160 => 45,  150 => 38,  144 => 35,  134 => 28,  128 => 25,  120 => 20,  113 => 16,  102 => 7,  89 => 6,  77 => 3,  64 => 2,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Plannings /</span> Modifier Planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier planning #{{ schedule.idSchedule }}</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
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
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_URL\">URL de la vidéo YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video\"></i></span>
                                    {{ form_widget(form.URL, {'attr': {'class': 'form-control', 'id': 'schedule_URL'}}) }}
                                </div>
                                <small class=\"form-text text-muted\">{{ form_help(form.URL) }}</small>
                                <div class=\"text-danger mt-1\" id=\"URLError\">
                                    {{ form_errors(form.URL) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_streamURL\">URL de la diffusion en direct YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video-recording\"></i></span>
                                    {{ form_widget(form.streamURL, {'attr': {'class': 'form-control', 'id': 'schedule_streamURL'}}) }}
                                </div>
                                <small class=\"form-text text-muted\">{{ form_help(form.streamURL) }}</small>
                                <div class=\"text-danger mt-1\" id=\"streamURLError\">
                                    {{ form_errors(form.streamURL) }}
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à Jour</button>
                            <a href=\"{{ path('schedule_show', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-secondary\">Annuler</a>
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
            const URLInput = document.getElementById('schedule_URL');
            const streamURLInput = document.getElementById('schedule_streamURL');
            const dateMatchError = document.getElementById('dateMatchError');
            const startTimeError = document.getElementById('startTimeError');
            const endTimeError = document.getElementById('endTimeError');
            const matchEntityError = document.getElementById('matchEntityError');
            const espaceSportifError = document.getElementById('espaceSportifError');
            const URLError = document.getElementById('URLError');
            const streamURLError = document.getElementById('streamURLError');

            // Function to validate a single field (required fields)
            function validateField(input, errorElement, fieldName, isRequired = true) {
                let hasError = false;
                errorElement.textContent = errorElement.textContent || '';
                input.classList.remove('is-invalid');

                if (isRequired && !input.value.trim()) {
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

            // Function to validate URL (optional, must contain /embed/ if provided)
            function validateURL() {
                URLError.textContent = URLError.textContent || '';
                URLInput.classList.remove('is-invalid');

                if (URLInput.value.trim()) {
                    const embedPattern = /\\/embed\\//;
                    if (!embedPattern.test(URLInput.value)) {
                        URLError.textContent = \"L'URL doit être une URL YouTube au format embed (par exemple, https://www.youtube.com/embed/VIDEO_ID).\";
                        URLInput.classList.add('is-invalid');
                        return true;
                    }
                }
                return false;
            }

            // Function to validate streamURL (optional, must contain /embed/ if provided)
            function validateStreamURL() {
                streamURLError.textContent = streamURLError.textContent || '';
                streamURLInput.classList.remove('is-invalid');

                if (streamURLInput.value.trim()) {
                    const embedPattern = /\\/embed\\//;
                    if (!embedPattern.test(streamURLInput.value)) {
                        streamURLError.textContent = \"L'URL de diffusion en direct doit être une URL YouTube au format embed (par exemple, https://www.youtube.com/embed/VIDEO_ID).\";
                        streamURLInput.classList.add('is-invalid');
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

            URLInput.addEventListener('input', function () {
                validateField(URLInput, URLError, 'URL de la vidéo YouTube', false); // Not required
                validateURL();
            });

            streamURLInput.addEventListener('input', function () {
                validateField(streamURLInput, streamURLError, 'URL de la diffusion en direct YouTube', false); // Not required
                validateStreamURL();
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
                if (validateField(URLInput, URLError, 'URL de la vidéo YouTube', false)) {
                    hasError = true;
                }
                if (validateField(streamURLInput, streamURLError, 'URL de la diffusion en direct YouTube', false)) {
                    hasError = true;
                }
                if (validateDateMatch()) {
                    hasError = true;
                }
                if (validateTimeRange()) {
                    hasError = true;
                }
                if (validateURL()) {
                    hasError = true;
                }
                if (validateStreamURL()) {
                    hasError = true;
                }

                if (hasError) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        });
    </script>
{% endblock %}", "schedule/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\schedule\\edit.html.twig");
    }
}
