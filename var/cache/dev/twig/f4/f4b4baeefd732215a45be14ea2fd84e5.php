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
class __TwigTemplate_11e261c2b26a6dd30ed648d9d48b1d51 extends Template
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
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "schedule/new.html.twig", 3)->unwrap()->yield($context);
        
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
                <span class=\"text-muted fw-light\">Plannings /</span> Nouveau planning
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
                            ";
        // line 22
        yield "                            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors')) {
            // line 23
            yield "                                <div class=\"alert alert-danger\" role=\"alert\">
                                    ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 27
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_dateMatch\">Date du Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateMatch", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_dateMatch"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"dateMatchError\">
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateMatch", [], "any", false, false, false, 35), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_startTime\">Heure de Début</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "startTime", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_startTime"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"startTimeError\">
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "startTime", [], "any", false, false, false, 45), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_endTime\">Heure de Fin</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "endTime", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_endTime"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"endTimeError\">
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "endTime", [], "any", false, false, false, 55), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_matchEntity\">Match</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "matchEntity", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_matchEntity"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"matchEntityError\">
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "matchEntity", [], "any", false, false, false, 65), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_espaceSportif\">Espace Sportif</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "espaceSportif", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_espaceSportif"]]);
        yield "
                                </div>
                                <div class=\"text-danger mt-1\" id=\"espaceSportifError\">
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "espaceSportif", [], "any", false, false, false, 75), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_URL\">URL de la vidéo YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video\"></i></span>
                                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "URL", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_URL"]]);
        yield "
                                </div>
                                <small class=\"form-text text-muted\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "URL", [], "any", false, false, false, 84), 'help');
        yield "</small>
                                <div class=\"text-danger mt-1\" id=\"URLError\">
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "URL", [], "any", false, false, false, 86), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"schedule_streamURL\">URL de la diffusion en direct YouTube (embed)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-video-recording\"></i></span>
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "streamURL", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "id" => "schedule_streamURL"]]);
        yield "
                                </div>
                                <small class=\"form-text text-muted\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "streamURL", [], "any", false, false, false, 95), 'help');
        yield "</small>
                                <div class=\"text-danger mt-1\" id=\"streamURLError\">
                                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "streamURL", [], "any", false, false, false, 97), 'errors');
        yield "
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 110
        yield "    <script>
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
        return array (  271 => 110,  261 => 102,  257 => 101,  250 => 97,  245 => 95,  240 => 93,  230 => 86,  225 => 84,  220 => 82,  210 => 75,  204 => 72,  194 => 65,  188 => 62,  178 => 55,  172 => 52,  162 => 45,  156 => 42,  146 => 35,  140 => 32,  133 => 27,  127 => 24,  124 => 23,  121 => 22,  117 => 20,  102 => 7,  89 => 6,  77 => 3,  64 => 2,  41 => 1,);
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
                <span class=\"text-muted fw-light\">Plannings /</span> Nouveau planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau planning</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'id': 'scheduleForm', 'novalidate': 'novalidate'}) }}
                            {# Display form-level errors #}
                            {% if form_errors(form) %}
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    {{ form_errors(form) }}
                                </div>
                            {% endif %}

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
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('schedule_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Existing JavaScript remains unchanged #}
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
{% endblock %}", "schedule/new.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\schedule\\new.html.twig");
    }
}
