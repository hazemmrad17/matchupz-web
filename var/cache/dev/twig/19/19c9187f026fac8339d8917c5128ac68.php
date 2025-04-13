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
class __TwigTemplate_cd2b68f534bf46cec4a44af9227393f2 extends Template
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
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Titre", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 20
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Titre", [], "any", false, false, false, 20), 'errors')) {
            // line 21
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Titre", [], "any", false, false, false, 21), 'errors');
            yield "</div>
                            ";
        }
        // line 23
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "DateDebut", [], "any", false, false, false, 25), 'label');
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "DateDebut", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 27
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "DateDebut", [], "any", false, false, false, 27), 'errors')) {
            // line 28
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "DateDebut", [], "any", false, false, false, 28), 'errors');
            yield "</div>
                            ";
        }
        // line 30
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "DateFin", [], "any", false, false, false, 32), 'label');
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "DateFin", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "DateFin", [], "any", false, false, false, 34), 'errors')) {
            // line 35
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "DateFin", [], "any", false, false, false, 35), 'errors');
            yield "</div>
                            ";
        }
        // line 37
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Montant", [], "any", false, false, false, 39), 'label');
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Montant", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 41
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Montant", [], "any", false, false, false, 41), 'errors')) {
            // line 42
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Montant", [], "any", false, false, false, 42), 'errors');
            yield "</div>
                            ";
        }
        // line 44
        yield "                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "sponsor", [], "any", false, false, false, 46), 'label');
        yield "
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "sponsor", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        yield "
                            ";
        // line 48
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sponsor", [], "any", false, false, false, 48), 'errors')) {
            // line 49
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "sponsor", [], "any", false, false, false, 49), 'errors');
            yield "</div>
                            ";
        }
        // line 51
        yield "                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Signature</label>
                            <canvas id=\"signatureCanvas\" class=\"form-control\" width=\"300\" height=\"80\" style=\"width: 300px; height: 80px; background-color: #ffffff;\"></canvas>
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "signature", [], "any", false, false, false, 55), 'widget', ["attr" => ["id" => "signatureInput", "class" => "d-none"]]);
        yield "
                            <!-- Fallback hidden input in case form.signature doesn't render -->
                            <input type=\"hidden\" id=\"signatureInput\" name=\"contrat[signature]\" class=\"d-none\" value=\"\">
                            ";
        // line 58
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "signature", [], "any", false, false, false, 58), 'errors')) {
            // line 59
            yield "                                <div class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "signature", [], "any", false, false, false, 59), 'errors');
            yield "</div>
                            ";
        }
        // line 61
        yield "                            <button type=\"button\" id=\"clearCanvas\" class=\"btn btn-outline-secondary mt-2\">Effacer</button>
                        </div>
                        <div class=\"mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Créer</button>
                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        </div>
                    ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
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

    // line 74
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

        // line 75
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
        return array (  283 => 75,  270 => 74,  253 => 67,  248 => 65,  242 => 61,  236 => 59,  234 => 58,  228 => 55,  222 => 51,  216 => 49,  214 => 48,  210 => 47,  206 => 46,  202 => 44,  196 => 42,  194 => 41,  190 => 40,  186 => 39,  182 => 37,  176 => 35,  174 => 34,  170 => 33,  166 => 32,  162 => 30,  156 => 28,  154 => 27,  150 => 26,  146 => 25,  142 => 23,  136 => 21,  134 => 20,  130 => 19,  126 => 18,  123 => 17,  117 => 14,  114 => 13,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                            {{ form_widget(form.Titre, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.Titre) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Titre) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateDebut) }}
                            {{ form_widget(form.DateDebut, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.DateDebut) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateDebut) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.DateFin) }}
                            {{ form_widget(form.DateFin, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.DateFin) %}
                                <div class=\"text-danger small\">{{ form_errors(form.DateFin) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.Montant) }}
                            {{ form_widget(form.Montant, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.Montant) %}
                                <div class=\"text-danger small\">{{ form_errors(form.Montant) }}</div>
                            {% endif %}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(form.sponsor) }}
                            {{ form_widget(form.sponsor, {'attr': {'class': 'form-control w-50'}}) }}
                            {% if form_errors(form.sponsor) %}
                                <div class=\"text-danger small\">{{ form_errors(form.sponsor) }}</div>
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
{% endblock %}", "contrat/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\contrat\\new.html.twig");
    }
}
