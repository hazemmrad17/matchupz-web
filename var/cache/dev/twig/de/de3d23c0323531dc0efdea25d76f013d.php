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

/* contrat/edit.html.twig */
class __TwigTemplate_98be0b25f9f5350b8fddda5c178737ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/edit.html.twig", 1);
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

        yield "Modifier Contrat";
        
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
                <h5 class=\"card-header\">Modifier le Contrat</h5>
                <div class=\"card-body\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "                        <div class=\"alert alert-success\" role=\"alert\">
                            ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
                    ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-horizontal", "id" => "contratForm"]]);
        yield "
                        ";
        // line 23
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors')) {
            // line 24
            yield "                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 28
        yield "                        <div class=\"mb-3\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Titre", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Titre", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 31
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "Titre", [], "any", false, false, false, 31), 'errors')) {
            // line 32
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Titre", [], "any", false, false, false, 32), 'errors');
            yield "</div>
                            ";
        }
        // line 34
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "DateDebut", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "DateDebut", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 38
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "DateDebut", [], "any", false, false, false, 38), 'errors')) {
            // line 39
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "DateDebut", [], "any", false, false, false, 39), 'errors');
            yield "</div>
                            ";
        }
        // line 41
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "DateFin", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "DateFin", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 45
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "DateFin", [], "any", false, false, false, 45), 'errors')) {
            // line 46
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "DateFin", [], "any", false, false, false, 46), 'errors');
            yield "</div>
                            ";
        }
        // line 48
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Montant", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Montant", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 52
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Montant", [], "any", false, false, false, 52), 'errors')) {
            // line 53
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Montant", [], "any", false, false, false, 53), 'errors');
            yield "</div>
                            ";
        }
        // line 55
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "sponsor", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "sponsor", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 59
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "sponsor", [], "any", false, false, false, 59), 'errors')) {
            // line 60
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "sponsor", [], "any", false, false, false, 60), 'errors');
            yield "</div>
                            ";
        }
        // line 62
        yield "                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Signature</label>
                            ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 65, $this->source); })()), "signature", [], "any", false, false, false, 65)) {
            // line 66
            yield "                                <div class=\"mb-2\">
                                    <img src=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 67, $this->source); })()), "signature", [], "any", false, false, false, 67)), "html", null, true);
            yield "\" alt=\"Signature actuelle\" class=\"img-fluid\" style=\"max-width: 300px;\">
                                </div>
                            ";
        }
        // line 70
        yield "                            <canvas id=\"signatureCanvas\" class=\"form-control\" width=\"300\" height=\"80\" style=\"width: 300px; height: 80px; background-color: #ffffff;\"></canvas>
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "signature", [], "any", false, false, false, 71), 'widget', ["attr" => ["id" => "signatureInput", "class" => "d-none"]]);
        yield "
                            <!-- Fallback hidden input in case form.signature doesn't render -->
                            <input type=\"hidden\" id=\"signatureInput\" name=\"contrat[signature]\" class=\"d-none\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["contrat"] ?? null), "signature", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 73, $this->source); })()), "signature", [], "any", false, false, false, 73), "")) : ("")), "html", null, true);
        yield "\">
                            ";
        // line 74
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "signature", [], "any", false, false, false, 74), 'errors')) {
            // line 75
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "signature", [], "any", false, false, false, 75), 'errors');
            yield "</div>
                            ";
        }
        // line 77
        yield "                            <button type=\"button\" id=\"clearCanvas\" class=\"btn btn-outline-secondary mt-2\">Effacer</button>
                        </div>
                        <div class=\"mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Mettre à jour</button>
                            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        </div>
                    ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
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

    // line 90
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

        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
        return "contrat/edit.html.twig";
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
        return array (  335 => 91,  322 => 90,  305 => 83,  300 => 81,  294 => 77,  288 => 75,  286 => 74,  282 => 73,  277 => 71,  274 => 70,  268 => 67,  265 => 66,  263 => 65,  258 => 62,  252 => 60,  250 => 59,  246 => 58,  242 => 57,  238 => 55,  232 => 53,  230 => 52,  226 => 51,  222 => 50,  218 => 48,  212 => 46,  210 => 45,  206 => 44,  202 => 43,  198 => 41,  192 => 39,  190 => 38,  186 => 37,  182 => 36,  178 => 34,  172 => 32,  170 => 31,  166 => 30,  162 => 29,  159 => 28,  153 => 25,  150 => 24,  148 => 23,  144 => 22,  141 => 21,  132 => 18,  129 => 17,  124 => 16,  115 => 13,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Contrat{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header\">Modifier le Contrat</h5>
                <div class=\"card-body\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}

                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'form-horizontal', 'id': 'contratForm'}}) }}
                        {% if form_errors(form) %}
                            <div class=\"alert alert-danger\" role=\"alert\">
                                {{ form_errors(form) }}
                            </div>
                        {% endif %}
                        <div class=\"mb-3\">
                            {{ form_label(form.Titre, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.Titre, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.Titre) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Titre) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateDebut, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.DateDebut, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.DateDebut) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateDebut) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateFin, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.DateFin, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.DateFin) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateFin) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.Montant, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.Montant, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.Montant) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Montant) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.sponsor, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.sponsor, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.sponsor) %}
                                <div class=\"text-danger small\">{{ form_errors(form.sponsor) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Signature</label>
                            {% if contrat.signature %}
                                <div class=\"mb-2\">
                                    <img src=\"{{ asset(contrat.signature) }}\" alt=\"Signature actuelle\" class=\"img-fluid\" style=\"max-width: 300px;\">
                                </div>
                            {% endif %}
                            <canvas id=\"signatureCanvas\" class=\"form-control\" width=\"300\" height=\"80\" style=\"width: 300px; height: 80px; background-color: #ffffff;\"></canvas>
                            {{ form_widget(form.signature, {'attr': {'id': 'signatureInput', 'class': 'd-none'}}) }}
                            <!-- Fallback hidden input in case form.signature doesn't render -->
                            <input type=\"hidden\" id=\"signatureInput\" name=\"contrat[signature]\" class=\"d-none\" value=\"{{ contrat.signature|default('') }}\">
                            {% if form_errors(form.signature) %}
                                <div class=\"text-danger small\">{{ form_errors(form.signature) }}</div>
                            {% endif %}
                            <button type=\"button\" id=\"clearCanvas\" class=\"btn btn-outline-secondary mt-2\">Effacer</button>
                        </div>
                        <div class=\"mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Mettre à jour</button>
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
{% endblock %}", "contrat/edit.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\edit.html.twig");
    }
}
