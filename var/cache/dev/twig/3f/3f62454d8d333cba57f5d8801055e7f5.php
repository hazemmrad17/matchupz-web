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

/* contrat/new.html.twig */
class __TwigTemplate_0c38e35e4cb191dd8e1998d5a07256ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/new.html.twig", 1);
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

        yield "Ajouter un Contrat";
        
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
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header\">Ajouter un Nouveau Contrat</h5>
                <div class=\"card-body\">
                    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-horizontal", "id" => "contratForm"]]);
        yield "
                        ";
        // line 12
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors')) {
            // line 13
            yield "                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 17
        yield "                        <div class=\"mb-3\">
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Titre", [], "any", false, false, false, 18), 'label');
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Titre", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeTitre\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 25
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Titre", [], "any", false, false, false, 25), 'errors')) {
            // line 26
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Titre", [], "any", false, false, false, 26), 'errors');
            yield "</div>
                            ";
        }
        // line 28
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "DateDebut", [], "any", false, false, false, 30), 'label');
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "DateDebut", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeDateDebut\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 37
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "DateDebut", [], "any", false, false, false, 37), 'errors')) {
            // line 38
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "DateDebut", [], "any", false, false, false, 38), 'errors');
            yield "</div>
                            ";
        }
        // line 40
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "DateFin", [], "any", false, false, false, 42), 'label');
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "DateFin", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeDateFin\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 49
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "DateFin", [], "any", false, false, false, 49), 'errors')) {
            // line 50
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "DateFin", [], "any", false, false, false, 50), 'errors');
            yield "</div>
                            ";
        }
        // line 52
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Montant", [], "any", false, false, false, 54), 'label');
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Montant", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeMontant\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 61
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Montant", [], "any", false, false, false, 61), 'errors')) {
            // line 62
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Montant", [], "any", false, false, false, 62), 'errors');
            yield "</div>
                            ";
        }
        // line 64
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "sponsor", [], "any", false, false, false, 66), 'label');
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "sponsor", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeSponsor\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 73
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "sponsor", [], "any", false, false, false, 73), 'errors')) {
            // line 74
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "sponsor", [], "any", false, false, false, 74), 'errors');
            yield "</div>
                            ";
        }
        // line 76
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "article", [], "any", false, false, false, 78), 'label', ["label" => "Article du contrat"]);
        yield "
                            <div class=\"input-group w-50\">
                                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "article", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        yield "
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeArticle\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            ";
        // line 85
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "article", [], "any", false, false, false, 85), 'errors')) {
            // line 86
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "article", [], "any", false, false, false, 86), 'errors');
            yield "</div>
                            ";
        }
        // line 88
        yield "                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Signature</label>
                            <canvas id=\"signatureCanvas\" class=\"form-control\" width=\"300\" height=\"80\" style=\"width: 300px; height: 80px; background-color: #ffffff;\"></canvas>
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "signature", [], "any", false, false, false, 92), 'widget', ["attr" => ["id" => "signatureInput", "class" => "d-none"]]);
        yield "
                            <!-- Fallback hidden input in case form.signature doesn't render -->
                            <input type=\"hidden\" id=\"signatureInput\" name=\"contrat[signature]\" class=\"d-none\" value=\"\">
                            ";
        // line 95
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "signature", [], "any", false, false, false, 95), 'errors')) {
            // line 96
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "signature", [], "any", false, false, false, 96), 'errors');
            yield "</div>
                            ";
        }
        // line 98
        yield "                            <button type=\"button\" id=\"clearCanvas\" class=\"btn btn-outline-secondary mt-2\">Effacer</button>
                        </div>
                        <div class=\"mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Créer</button>
                            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        </div>
                    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 111
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

        // line 112
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Speech Recognition Setup
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
            if (!SpeechRecognition) {
                console.error('SpeechRecognition API is not supported in this browser.');
                alert('Speech recognition is not supported in your browser. Please use a modern browser like Chrome.');
                return;
            }

            const recognition = new SpeechRecognition();
            recognition.lang = 'fr-FR'; // Set language to French
            recognition.interimResults = false; // Only get final results
            recognition.maxAlternatives = 1;

            // Elements for transcription
            const titreInput = document.querySelector('#contrat_Titre');
            const dateDebutInput = document.querySelector('#contrat_DateDebut');
            const dateFinInput = document.querySelector('#contrat_DateFin');
            const montantInput = document.querySelector('#contrat_Montant');
            const sponsorInput = document.querySelector('#contrat_sponsor');
            const articleInput = document.querySelector('#contrat_article');
            const transcribeTitreBtn = document.querySelector('#transcribeTitre');
            const transcribeDateDebutBtn = document.querySelector('#transcribeDateDebut');
            const transcribeDateFinBtn = document.querySelector('#transcribeDateFin');
            const transcribeMontantBtn = document.querySelector('#transcribeMontant');
            const transcribeSponsorBtn = document.querySelector('#transcribeSponsor');
            const transcribeArticleBtn = document.querySelector('#transcribeArticle');

            // Log elements for debugging
            console.log('Titre Input:', titreInput);
            console.log('DateDebut Input:', dateDebutInput);
            console.log('DateFin Input:', dateFinInput);
            console.log('Montant Input:', montantInput);
            console.log('Sponsor Input:', sponsorInput);
            console.log('Article Input:', articleInput);
            console.log('Transcribe Titre Button:', transcribeTitreBtn);
            console.log('Transcribe DateDebut Button:', transcribeDateDebutBtn);
            console.log('Transcribe DateFin Button:', transcribeDateFinBtn);
            console.log('Transcribe Montant Button:', transcribeMontantBtn);
            console.log('Transcribe Sponsor Button:', transcribeSponsorBtn);
            console.log('Transcribe Article Button:', transcribeArticleBtn);

            // Custom function to match spoken date to YYYY-MM-DD format
            function matchDate(transcript) {
                transcript = transcript.toLowerCase().trim();
                console.log('Processing date transcript:', transcript);

                // Map French month names to numbers
                const months = {
                    'janvier': '01', 'février': '02', 'mars': '03', 'avril': '04',
                    'mai': '05', 'juin': '06', 'juillet': '07', 'août': '08',
                    'septembre': '09', 'octobre': '10', 'novembre': '11', 'décembre': '12'
                };

                // Map French day words to numbers
                const dayWords = {
                    'premier': '01', '1er': '01', 'deux': '02', 'trois': '03', 'quatre': '04', 'cinq': '05',
                    'six': '06', 'sept': '07', 'huit': '08', 'neuf': '09', 'dix': '10',
                    'onze': '11', 'douze': '12', 'treize': '13', 'quatorze': '14', 'quinze': '15',
                    'seize': '16', 'dix-sept': '17', 'dix-huit': '18', 'dix-neuf': '19', 'vingt': '20',
                    'vingt-et-un': '21', 'vingt-deux': '22', 'vingt-trois': '23', 'vingt-quatre': '24',
                    'vingt-cinq': '25', 'vingt-six': '26', 'vingt-sept': '27', 'vingt-huit': '28',
                    'vingt-neuf': '29', 'trente': '30', 'trente-et-un': '31'
                };

                // Replace common prefixes like \"le\" or \"la\"
                transcript = transcript.replace(/\\ble\\b|\\bla\\b/g, '').trim();

                // Extract day, month, and year
                let day = null, month = null, year = null;

                // Look for day
                for (const [word, num] of Object.entries(dayWords)) {
                    if (transcript.includes(word)) {
                        day = num;
                        transcript = transcript.replace(word, '').trim();
                        break;
                    }
                }
                // If day not found in words, look for numeric day (e.g., \"15\")
                if (!day) {
                    const dayMatch = transcript.match(/\\b(\\d{1,2})\\b/);
                    if (dayMatch) {
                        day = dayMatch[1].padStart(2, '0');
                        transcript = transcript.replace(dayMatch[1], '').trim();
                    }
                }

                // Look for month
                for (const [word, num] of Object.entries(months)) {
                    if (transcript.includes(word)) {
                        month = num;
                        transcript = transcript.replace(word, '').trim();
                        break;
                    }
                }

                // Look for year (e.g., \"2025\")
                const yearMatch = transcript.match(/\\b(20\\d{2})\\b/);
                if (yearMatch) {
                    year = yearMatch[1];
                    transcript = transcript.replace(yearMatch[1], '').trim();
                }

                // Validate extracted parts
                if (day && month && year) {
                    // Ensure day is valid for the month
                    const daysInMonth = new Date(parseInt(year), parseInt(month), 0).getDate();
                    if (parseInt(day) > daysInMonth) {
                        console.warn(`Invalid day \${day} for month \${month} in year \${year}`);
                        return null;
                    }
                    const formattedDate = `\${year}-\${month}-\${day}`;
                    console.log('Matched date:', formattedDate);
                    return formattedDate;
                } else {
                    console.warn('Could not parse date from transcript:', transcript);
                    return null;
                }
            }

            // Custom function to match spoken sponsor name to dropdown option
            function matchSponsor(transcript, sponsorSelect) {
                if (!sponsorSelect || sponsorSelect.tagName !== 'SELECT') {
                    console.error('Sponsor input is not a <select> element:', sponsorSelect);
                    return transcript;
                }

                const options = Array.from(sponsorSelect.options);
                console.log('Available sponsor options:', options.map(opt => ({ text: opt.text, value: opt.value })));

                const transcriptLower = transcript.toLowerCase().trim();

                let matchedOption = options.find(option => option.text.toLowerCase() === transcriptLower);
                if (matchedOption) {
                    console.log('Exact match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                matchedOption = options.find(option => option.text.toLowerCase().includes(transcriptLower));
                if (matchedOption) {
                    console.log('Partial match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                const transcriptWords = transcriptLower.split(/\\s+/);
                matchedOption = options.find(option => {
                    const optionWords = option.text.toLowerCase().split(/\\s+/);
                    return transcriptWords.some(word => optionWords.includes(word));
                });
                if (matchedOption) {
                    console.log('Word-based match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                console.warn('No match found for sponsor:', transcript);
                return null;
            }

            // Function to parse spoken numbers (e.g., \"mille\" to \"1000\")
            function parseSpokenNumber(transcript) {
                transcript = transcript.toLowerCase().trim();
                const numberWords = {
                    'zéro': '0', 'un': '1', 'deux': '2', 'trois': '3', 'quatre': '4',
                    'cinq': '5', 'six': '6', 'sept': '7', 'huit': '8', 'neuf': '9',
                    'dix': '10', 'onze': '11', 'douze': '12', 'treize': '13', 'quatorze': '14',
                    'quinze': '15', 'seize': '16', 'dix-sept': '17', 'dix-huit': '18', 'dix-neuf': '19',
                    'vingt': '20', 'trente': '30', 'quarante': '40', 'cinquante': '50',
                    'soixante': '60', 'soixante-dix': '70', 'quatre-vingt': '80', 'quatre-vingt-dix': '90',
                    'cent': '100', 'mille': '1000', 'million': '1000000'
                };

                let result = transcript;
                for (const [word, num] of Object.entries(numberWords)) {
                    result = result.replace(new RegExp(`\\\\b\${word}\\\\b`, 'g'), num);
                }
                result = result.replace(/(\\d+)\\s+et\\s+(\\d+)/g, (match, p1, p2) => parseInt(p1) + parseInt(p2));

                try {
                    const num = eval(result);
                    if (!isNaN(num)) {
                        return num.toString();
                    }
                } catch (e) {
                    console.warn('Could not parse number from transcript:', transcript);
                }
                return result;
            }

            // Function to start transcription
            function startTranscription(inputField, isDateField = false, isSponsorField = false, parseFunction = null) {
                if (!inputField) {
                    console.error('Input field not found for transcription.');
                    return;
                }

                recognition.start();
                console.log('Speech recognition started for:', inputField.id);

                recognition.onstart = function () {
                    inputField.placeholder = 'Écoute en cours...';
                    console.log('Recognition started');
                };

                recognition.onresult = function (event) {
                    let transcript = event.results[0][0].transcript;
                    console.log('Transcription result:', transcript);

                    if (isDateField) {
                        const matchedDate = matchDate(transcript);
                        if (matchedDate) {
                            inputField.value = matchedDate;
                            console.log('Date field updated with:', matchedDate);
                        } else {
                            inputField.value = '';
                            inputField.placeholder = 'Date non reconnue';
                            alert('Impossible de reconnaître la date: ' + transcript);
                        }
                    } else if (isSponsorField) {
                        const matchedValue = matchSponsor(transcript, inputField);
                        if (matchedValue !== null) {
                            inputField.value = matchedValue;
                            console.log('Sponsor selected with value:', matchedValue);
                        } else {
                            inputField.value = '';
                            inputField.placeholder = 'Sponsor non trouvé';
                            alert('Aucun sponsor correspondant trouvé pour: ' + transcript);
                        }
                    } else {
                        if (parseFunction) {
                            transcript = parseFunction(transcript);
                            console.log('Parsed result:', transcript);
                        }
                        inputField.value = transcript;
                        inputField.placeholder = '';
                    }
                };

                recognition.onerror = function (event) {
                    console.error('Speech recognition error:', event.error);
                    inputField.placeholder = 'Erreur: ' + event.error;
                    alert('Erreur lors de la reconnaissance vocale: ' + event.error);
                };

                recognition.onend = function () {
                    console.log('Speech recognition ended');
                    if (inputField.placeholder !== 'Date non reconnue' && inputField.placeholder !== 'Sponsor non trouvé') {
                        inputField.placeholder = '';
                    }
                };
            }

            // Event listeners for transcription buttons
            transcribeTitreBtn.addEventListener('click', function () {
                startTranscription(titreInput);
            });

            transcribeDateDebutBtn.addEventListener('click', function () {
                startTranscription(dateDebutInput, true);
            });

            transcribeDateFinBtn.addEventListener('click', function () {
                startTranscription(dateFinInput, true);
            });

            transcribeMontantBtn.addEventListener('click', function () {
                startTranscription(montantInput, false, false, parseSpokenNumber);
            });

            transcribeSponsorBtn.addEventListener('click', function () {
                startTranscription(sponsorInput, false, true);
            });

            transcribeArticleBtn.addEventListener('click', function () {
                startTranscription(articleInput);
            });

            // Existing canvas signature code
            const canvas = document.getElementById('signatureCanvas');
            const ctx = canvas.getContext('2d');
            const signatureInput = document.getElementById('signatureInput');
            const clearButton = document.getElementById('clearCanvas');
            const form = document.getElementById('contratForm');
            let isDrawing = false;

            // Log to verify elements are found
            console.log('Canvas:', canvas);
            console.log('Signature Input:', signatureInput);
            console.log('Clear Button:', clearButton);
            console.log('Form:', form);

            // Check if signatureInput exists
            if (!signatureInput) {
                console.error('Signature input element not found! Check the form rendering.');
                return;
            }

            // Initialize canvas
            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.strokeStyle = '#000000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';

            // Drawing events
            canvas.addEventListener('mousedown', startDrawing);
            canvas.addEventListener('mousemove', draw);
            canvas.addEventListener('mouseup', stopDrawing);
            canvas.addEventListener('mouseout', stopDrawing);
            canvas.addEventListener('touchstart', startTouch);
            canvas.addEventListener('touchmove', drawTouch);
            canvas.addEventListener('touchend', stopDrawing);

            function startDrawing(e) {
                isDrawing = true;
                ctx.beginPath();
                draw(e);
                console.log('Started drawing');
            }

            function draw(e) {
                if (!isDrawing) return;
                e.preventDefault();
                const rect = canvas.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                ctx.lineTo(x, y);
                ctx.stroke();
                console.log('Drawing at:', x, y);
            }

            function stopDrawing() {
                if (isDrawing) {
                    isDrawing = false;
                    ctx.closePath();
                    console.log('Stopped drawing');
                }
            }

            function startTouch(e) {
                e.preventDefault();
                isDrawing = true;
                ctx.beginPath();
                drawTouch(e);
                console.log('Started touch drawing');
            }

            function drawTouch(e) {
                if (!isDrawing) return;
                e.preventDefault();
                const rect = canvas.getBoundingClientRect();
                const touch = e.touches[0];
                const x = touch.clientX - rect.left;
                const y = touch.clientY - rect.top;
                ctx.lineTo(x, y);
                ctx.stroke();
                console.log('Touch drawing at:', x, y);
            }

            // Clear canvas
            clearButton.addEventListener('click', function () {
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                if (signatureInput) {
                    signatureInput.value = 'signatures/signature_contrat_1741119108385.png';
                    console.log('Canvas cleared, signature input set to default:', signatureInput.value);
                } else {
                    console.error('Signature input not found when clearing canvas');
                }
            });

            // Form submission
            form.addEventListener('submit', function (e) {
                console.log('Form submission triggered');
                const isEmpty = isCanvasEmpty(canvas);
                console.log('Is canvas empty?', isEmpty);
                if (signatureInput) {
                    if (isEmpty) {
                        signatureInput.value = 'signatures/signature_contrat_1741119108385.png';
                        console.log('Canvas is empty, signature input set to default:', signatureInput.value);
                    } else {
                        const dataUrl = canvas.toDataURL('image/png');
                        signatureInput.value = dataUrl;
                        console.log('Signature data URL:', dataUrl.substring(0, 50) + '...');
                        console.log('Signature input value set to:', signatureInput.value.substring(0, 50) + '...');
                    }
                } else {
                    console.error('Signature input not found during form submission');
                    e.preventDefault();
                }
            });

            // Check if canvas is empty
            function isCanvasEmpty(canvas) {
                const context = canvas.getContext('2d');
                const pixelData = context.getImageData(0, 0, canvas.width, canvas.height).data;
                for (let i = 0; i < pixelData.length; i += 4) {
                    if (pixelData[i + 3] !== 0) { // Check alpha channel
                        console.log('Non-transparent pixel found, canvas is not empty');
                        return false;
                    }
                }
                console.log('All pixels are transparent, canvas is empty');
                return true;
            }
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
        return "contrat/new.html.twig";
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
        return array (  333 => 112,  320 => 111,  303 => 104,  298 => 102,  292 => 98,  286 => 96,  284 => 95,  278 => 92,  272 => 88,  266 => 86,  264 => 85,  256 => 80,  251 => 78,  247 => 76,  241 => 74,  239 => 73,  231 => 68,  226 => 66,  222 => 64,  216 => 62,  214 => 61,  206 => 56,  201 => 54,  197 => 52,  191 => 50,  189 => 49,  181 => 44,  176 => 42,  172 => 40,  166 => 38,  164 => 37,  156 => 32,  151 => 30,  147 => 28,  141 => 26,  139 => 25,  131 => 20,  126 => 18,  123 => 17,  117 => 14,  114 => 13,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un Contrat{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header\">Ajouter un Nouveau Contrat</h5>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'form-horizontal', 'id': 'contratForm'}}) }}
                        {% if form_errors(form) %}
                            <div class=\"alert alert-danger\" role=\"alert\">
                                {{ form_errors(form) }}
                            </div>
                        {% endif %}
                        <div class=\"mb-3\">
                            {{ form_label(form.Titre) }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.Titre, {'attr': {'class': 'form-control'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeTitre\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.Titre) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Titre) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateDebut) }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.DateDebut, {'attr': {'class': 'form-control'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeDateDebut\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.DateDebut) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateDebut) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateFin) }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.DateFin, {'attr': {'class': 'form-control'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeDateFin\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.DateFin) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateFin) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.Montant) }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.Montant, {'attr': {'class': 'form-control'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeMontant\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.Montant) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Montant) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.sponsor) }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.sponsor, {'attr': {'class': 'form-control'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeSponsor\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.sponsor) %}
                                <div class=\"text-danger small\">{{ form_errors(form.sponsor) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.article, 'Article du contrat') }}
                            <div class=\"input-group w-50\">
                                {{ form_widget(form.article, {'attr': {'class': 'form-control', 'rows': '5'}}) }}
                                <button type=\"button\" class=\"btn btn-outline-primary\" id=\"transcribeArticle\">
                                    <i class=\"bx bx-microphone\"></i>
                                </button>
                            </div>
                            {% if form_errors(form.article) %}
                                <div class=\"text-danger small\">{{ form_errors(form.article) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Signature</label>
                            <canvas id=\"signatureCanvas\" class=\"form-control\" width=\"300\" height=\"80\" style=\"width: 300px; height: 80px; background-color: #ffffff;\"></canvas>
                            {{ form_widget(form.signature, {'attr': {'id': 'signatureInput', 'class': 'd-none'}}) }}
                            <!-- Fallback hidden input in case form.signature doesn't render -->
                            <input type=\"hidden\" id=\"signatureInput\" name=\"contrat[signature]\" class=\"d-none\" value=\"\">
                            {% if form_errors(form.signature) %}
                                <div class=\"text-danger small\">{{ form_errors(form.signature) }}</div>
                            {% endif %}
                            <button type=\"button\" id=\"clearCanvas\" class=\"btn btn-outline-secondary mt-2\">Effacer</button>
                        </div>
                        <div class=\"mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Créer</button>
                            <a href=\"{{ path('contrat_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Speech Recognition Setup
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
            if (!SpeechRecognition) {
                console.error('SpeechRecognition API is not supported in this browser.');
                alert('Speech recognition is not supported in your browser. Please use a modern browser like Chrome.');
                return;
            }

            const recognition = new SpeechRecognition();
            recognition.lang = 'fr-FR'; // Set language to French
            recognition.interimResults = false; // Only get final results
            recognition.maxAlternatives = 1;

            // Elements for transcription
            const titreInput = document.querySelector('#contrat_Titre');
            const dateDebutInput = document.querySelector('#contrat_DateDebut');
            const dateFinInput = document.querySelector('#contrat_DateFin');
            const montantInput = document.querySelector('#contrat_Montant');
            const sponsorInput = document.querySelector('#contrat_sponsor');
            const articleInput = document.querySelector('#contrat_article');
            const transcribeTitreBtn = document.querySelector('#transcribeTitre');
            const transcribeDateDebutBtn = document.querySelector('#transcribeDateDebut');
            const transcribeDateFinBtn = document.querySelector('#transcribeDateFin');
            const transcribeMontantBtn = document.querySelector('#transcribeMontant');
            const transcribeSponsorBtn = document.querySelector('#transcribeSponsor');
            const transcribeArticleBtn = document.querySelector('#transcribeArticle');

            // Log elements for debugging
            console.log('Titre Input:', titreInput);
            console.log('DateDebut Input:', dateDebutInput);
            console.log('DateFin Input:', dateFinInput);
            console.log('Montant Input:', montantInput);
            console.log('Sponsor Input:', sponsorInput);
            console.log('Article Input:', articleInput);
            console.log('Transcribe Titre Button:', transcribeTitreBtn);
            console.log('Transcribe DateDebut Button:', transcribeDateDebutBtn);
            console.log('Transcribe DateFin Button:', transcribeDateFinBtn);
            console.log('Transcribe Montant Button:', transcribeMontantBtn);
            console.log('Transcribe Sponsor Button:', transcribeSponsorBtn);
            console.log('Transcribe Article Button:', transcribeArticleBtn);

            // Custom function to match spoken date to YYYY-MM-DD format
            function matchDate(transcript) {
                transcript = transcript.toLowerCase().trim();
                console.log('Processing date transcript:', transcript);

                // Map French month names to numbers
                const months = {
                    'janvier': '01', 'février': '02', 'mars': '03', 'avril': '04',
                    'mai': '05', 'juin': '06', 'juillet': '07', 'août': '08',
                    'septembre': '09', 'octobre': '10', 'novembre': '11', 'décembre': '12'
                };

                // Map French day words to numbers
                const dayWords = {
                    'premier': '01', '1er': '01', 'deux': '02', 'trois': '03', 'quatre': '04', 'cinq': '05',
                    'six': '06', 'sept': '07', 'huit': '08', 'neuf': '09', 'dix': '10',
                    'onze': '11', 'douze': '12', 'treize': '13', 'quatorze': '14', 'quinze': '15',
                    'seize': '16', 'dix-sept': '17', 'dix-huit': '18', 'dix-neuf': '19', 'vingt': '20',
                    'vingt-et-un': '21', 'vingt-deux': '22', 'vingt-trois': '23', 'vingt-quatre': '24',
                    'vingt-cinq': '25', 'vingt-six': '26', 'vingt-sept': '27', 'vingt-huit': '28',
                    'vingt-neuf': '29', 'trente': '30', 'trente-et-un': '31'
                };

                // Replace common prefixes like \"le\" or \"la\"
                transcript = transcript.replace(/\\ble\\b|\\bla\\b/g, '').trim();

                // Extract day, month, and year
                let day = null, month = null, year = null;

                // Look for day
                for (const [word, num] of Object.entries(dayWords)) {
                    if (transcript.includes(word)) {
                        day = num;
                        transcript = transcript.replace(word, '').trim();
                        break;
                    }
                }
                // If day not found in words, look for numeric day (e.g., \"15\")
                if (!day) {
                    const dayMatch = transcript.match(/\\b(\\d{1,2})\\b/);
                    if (dayMatch) {
                        day = dayMatch[1].padStart(2, '0');
                        transcript = transcript.replace(dayMatch[1], '').trim();
                    }
                }

                // Look for month
                for (const [word, num] of Object.entries(months)) {
                    if (transcript.includes(word)) {
                        month = num;
                        transcript = transcript.replace(word, '').trim();
                        break;
                    }
                }

                // Look for year (e.g., \"2025\")
                const yearMatch = transcript.match(/\\b(20\\d{2})\\b/);
                if (yearMatch) {
                    year = yearMatch[1];
                    transcript = transcript.replace(yearMatch[1], '').trim();
                }

                // Validate extracted parts
                if (day && month && year) {
                    // Ensure day is valid for the month
                    const daysInMonth = new Date(parseInt(year), parseInt(month), 0).getDate();
                    if (parseInt(day) > daysInMonth) {
                        console.warn(`Invalid day \${day} for month \${month} in year \${year}`);
                        return null;
                    }
                    const formattedDate = `\${year}-\${month}-\${day}`;
                    console.log('Matched date:', formattedDate);
                    return formattedDate;
                } else {
                    console.warn('Could not parse date from transcript:', transcript);
                    return null;
                }
            }

            // Custom function to match spoken sponsor name to dropdown option
            function matchSponsor(transcript, sponsorSelect) {
                if (!sponsorSelect || sponsorSelect.tagName !== 'SELECT') {
                    console.error('Sponsor input is not a <select> element:', sponsorSelect);
                    return transcript;
                }

                const options = Array.from(sponsorSelect.options);
                console.log('Available sponsor options:', options.map(opt => ({ text: opt.text, value: opt.value })));

                const transcriptLower = transcript.toLowerCase().trim();

                let matchedOption = options.find(option => option.text.toLowerCase() === transcriptLower);
                if (matchedOption) {
                    console.log('Exact match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                matchedOption = options.find(option => option.text.toLowerCase().includes(transcriptLower));
                if (matchedOption) {
                    console.log('Partial match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                const transcriptWords = transcriptLower.split(/\\s+/);
                matchedOption = options.find(option => {
                    const optionWords = option.text.toLowerCase().split(/\\s+/);
                    return transcriptWords.some(word => optionWords.includes(word));
                });
                if (matchedOption) {
                    console.log('Word-based match found for sponsor:', matchedOption.text);
                    return matchedOption.value;
                }

                console.warn('No match found for sponsor:', transcript);
                return null;
            }

            // Function to parse spoken numbers (e.g., \"mille\" to \"1000\")
            function parseSpokenNumber(transcript) {
                transcript = transcript.toLowerCase().trim();
                const numberWords = {
                    'zéro': '0', 'un': '1', 'deux': '2', 'trois': '3', 'quatre': '4',
                    'cinq': '5', 'six': '6', 'sept': '7', 'huit': '8', 'neuf': '9',
                    'dix': '10', 'onze': '11', 'douze': '12', 'treize': '13', 'quatorze': '14',
                    'quinze': '15', 'seize': '16', 'dix-sept': '17', 'dix-huit': '18', 'dix-neuf': '19',
                    'vingt': '20', 'trente': '30', 'quarante': '40', 'cinquante': '50',
                    'soixante': '60', 'soixante-dix': '70', 'quatre-vingt': '80', 'quatre-vingt-dix': '90',
                    'cent': '100', 'mille': '1000', 'million': '1000000'
                };

                let result = transcript;
                for (const [word, num] of Object.entries(numberWords)) {
                    result = result.replace(new RegExp(`\\\\b\${word}\\\\b`, 'g'), num);
                }
                result = result.replace(/(\\d+)\\s+et\\s+(\\d+)/g, (match, p1, p2) => parseInt(p1) + parseInt(p2));

                try {
                    const num = eval(result);
                    if (!isNaN(num)) {
                        return num.toString();
                    }
                } catch (e) {
                    console.warn('Could not parse number from transcript:', transcript);
                }
                return result;
            }

            // Function to start transcription
            function startTranscription(inputField, isDateField = false, isSponsorField = false, parseFunction = null) {
                if (!inputField) {
                    console.error('Input field not found for transcription.');
                    return;
                }

                recognition.start();
                console.log('Speech recognition started for:', inputField.id);

                recognition.onstart = function () {
                    inputField.placeholder = 'Écoute en cours...';
                    console.log('Recognition started');
                };

                recognition.onresult = function (event) {
                    let transcript = event.results[0][0].transcript;
                    console.log('Transcription result:', transcript);

                    if (isDateField) {
                        const matchedDate = matchDate(transcript);
                        if (matchedDate) {
                            inputField.value = matchedDate;
                            console.log('Date field updated with:', matchedDate);
                        } else {
                            inputField.value = '';
                            inputField.placeholder = 'Date non reconnue';
                            alert('Impossible de reconnaître la date: ' + transcript);
                        }
                    } else if (isSponsorField) {
                        const matchedValue = matchSponsor(transcript, inputField);
                        if (matchedValue !== null) {
                            inputField.value = matchedValue;
                            console.log('Sponsor selected with value:', matchedValue);
                        } else {
                            inputField.value = '';
                            inputField.placeholder = 'Sponsor non trouvé';
                            alert('Aucun sponsor correspondant trouvé pour: ' + transcript);
                        }
                    } else {
                        if (parseFunction) {
                            transcript = parseFunction(transcript);
                            console.log('Parsed result:', transcript);
                        }
                        inputField.value = transcript;
                        inputField.placeholder = '';
                    }
                };

                recognition.onerror = function (event) {
                    console.error('Speech recognition error:', event.error);
                    inputField.placeholder = 'Erreur: ' + event.error;
                    alert('Erreur lors de la reconnaissance vocale: ' + event.error);
                };

                recognition.onend = function () {
                    console.log('Speech recognition ended');
                    if (inputField.placeholder !== 'Date non reconnue' && inputField.placeholder !== 'Sponsor non trouvé') {
                        inputField.placeholder = '';
                    }
                };
            }

            // Event listeners for transcription buttons
            transcribeTitreBtn.addEventListener('click', function () {
                startTranscription(titreInput);
            });

            transcribeDateDebutBtn.addEventListener('click', function () {
                startTranscription(dateDebutInput, true);
            });

            transcribeDateFinBtn.addEventListener('click', function () {
                startTranscription(dateFinInput, true);
            });

            transcribeMontantBtn.addEventListener('click', function () {
                startTranscription(montantInput, false, false, parseSpokenNumber);
            });

            transcribeSponsorBtn.addEventListener('click', function () {
                startTranscription(sponsorInput, false, true);
            });

            transcribeArticleBtn.addEventListener('click', function () {
                startTranscription(articleInput);
            });

            // Existing canvas signature code
            const canvas = document.getElementById('signatureCanvas');
            const ctx = canvas.getContext('2d');
            const signatureInput = document.getElementById('signatureInput');
            const clearButton = document.getElementById('clearCanvas');
            const form = document.getElementById('contratForm');
            let isDrawing = false;

            // Log to verify elements are found
            console.log('Canvas:', canvas);
            console.log('Signature Input:', signatureInput);
            console.log('Clear Button:', clearButton);
            console.log('Form:', form);

            // Check if signatureInput exists
            if (!signatureInput) {
                console.error('Signature input element not found! Check the form rendering.');
                return;
            }

            // Initialize canvas
            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.strokeStyle = '#000000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';

            // Drawing events
            canvas.addEventListener('mousedown', startDrawing);
            canvas.addEventListener('mousemove', draw);
            canvas.addEventListener('mouseup', stopDrawing);
            canvas.addEventListener('mouseout', stopDrawing);
            canvas.addEventListener('touchstart', startTouch);
            canvas.addEventListener('touchmove', drawTouch);
            canvas.addEventListener('touchend', stopDrawing);

            function startDrawing(e) {
                isDrawing = true;
                ctx.beginPath();
                draw(e);
                console.log('Started drawing');
            }

            function draw(e) {
                if (!isDrawing) return;
                e.preventDefault();
                const rect = canvas.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                ctx.lineTo(x, y);
                ctx.stroke();
                console.log('Drawing at:', x, y);
            }

            function stopDrawing() {
                if (isDrawing) {
                    isDrawing = false;
                    ctx.closePath();
                    console.log('Stopped drawing');
                }
            }

            function startTouch(e) {
                e.preventDefault();
                isDrawing = true;
                ctx.beginPath();
                drawTouch(e);
                console.log('Started touch drawing');
            }

            function drawTouch(e) {
                if (!isDrawing) return;
                e.preventDefault();
                const rect = canvas.getBoundingClientRect();
                const touch = e.touches[0];
                const x = touch.clientX - rect.left;
                const y = touch.clientY - rect.top;
                ctx.lineTo(x, y);
                ctx.stroke();
                console.log('Touch drawing at:', x, y);
            }

            // Clear canvas
            clearButton.addEventListener('click', function () {
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                if (signatureInput) {
                    signatureInput.value = 'signatures/signature_contrat_1741119108385.png';
                    console.log('Canvas cleared, signature input set to default:', signatureInput.value);
                } else {
                    console.error('Signature input not found when clearing canvas');
                }
            });

            // Form submission
            form.addEventListener('submit', function (e) {
                console.log('Form submission triggered');
                const isEmpty = isCanvasEmpty(canvas);
                console.log('Is canvas empty?', isEmpty);
                if (signatureInput) {
                    if (isEmpty) {
                        signatureInput.value = 'signatures/signature_contrat_1741119108385.png';
                        console.log('Canvas is empty, signature input set to default:', signatureInput.value);
                    } else {
                        const dataUrl = canvas.toDataURL('image/png');
                        signatureInput.value = dataUrl;
                        console.log('Signature data URL:', dataUrl.substring(0, 50) + '...');
                        console.log('Signature input value set to:', signatureInput.value.substring(0, 50) + '...');
                    }
                } else {
                    console.error('Signature input not found during form submission');
                    e.preventDefault();
                }
            });

            // Check if canvas is empty
            function isCanvasEmpty(canvas) {
                const context = canvas.getContext('2d');
                const pixelData = context.getImageData(0, 0, canvas.width, canvas.height).data;
                for (let i = 0; i < pixelData.length; i += 4) {
                    if (pixelData[i + 3] !== 0) { // Check alpha channel
                        console.log('Non-transparent pixel found, canvas is not empty');
                        return false;
                    }
                }
                console.log('All pixels are transparent, canvas is empty');
                return true;
            }
        });
    </script>
{% endblock %}", "contrat/new.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\contrat\\new.html.twig");
    }
}
