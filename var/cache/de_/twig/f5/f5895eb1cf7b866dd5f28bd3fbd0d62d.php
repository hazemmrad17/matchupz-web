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

/* detection/index.html.twig */
class __TwigTemplate_c37e1306b07dd7e8b26761b129d8eb9f extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detection/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detection/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detection/index.html.twig", 1);
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

        yield "Object Detection";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Object Detection</h4>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Upload Image</h5>
                <div class=\"card-body\">
                    <form id=\"uploadForm\" class=\"dropzone\">
                        <div class=\"dz-message needsclick\">
                            Drop files here or click to upload<br>
                            <small class=\"text-muted\">(Supported formats: JPG, PNG)</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Original Image</h5>
                <div class=\"card-body\">
                    <div id=\"originalImage\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Detection Results</h5>
                <div class=\"card-body\">
                    <div id=\"detectionResults\"></div>
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

    // line 46
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

        // line 47
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

<script>
Dropzone.autoDiscover = false;

document.addEventListener('DOMContentLoaded', function() {
    const uploadForm = new Dropzone(\"#uploadForm\", {
        url: \"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detection_process");
        yield "\",
        acceptedFiles: \"image/*\",
        maxFiles: 1,
        init: function() {
            this.on(\"success\", function(file, response) {
                if (response.success) {
                    // Display original image
                    const originalImage = document.getElementById('originalImage');
                    originalImage.innerHTML = `<img src=\"\${URL.createObjectURL(file)}\" class=\"img-fluid\" alt=\"Original Image\">`;

                    // Display detection results
                    const detectionResults = document.getElementById('detectionResults');
                    let resultsHtml = '<div class=\"table-responsive\"><table class=\"table table-bordered\">';
                    resultsHtml += '<thead><tr><th>Class</th><th>Confidence</th><th>Location</th></tr></thead><tbody>';
                    
                    response.predictions.forEach(pred => {
                        resultsHtml += `
                            <tr>
                                <td>\${pred.class}</td>
                                <td>\${(pred.confidence * 100).toFixed(2)}%</td>
                                <td>x: \${pred.x}, y: \${pred.y}<br>w: \${pred.width}, h: \${pred.height}</td>
                            </tr>
                        `;
                    });
                    
                    resultsHtml += '</tbody></table></div>';
                    detectionResults.innerHTML = resultsHtml;
                } else {
                    alert('Error processing image: ' + response.error);
                }
            });

            this.on(\"error\", function(file, errorMessage) {
                alert('Error uploading file: ' + errorMessage);
            });
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
        return "detection/index.html.twig";
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
        return array (  175 => 56,  163 => 47,  150 => 46,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Object Detection{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Object Detection</h4>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Upload Image</h5>
                <div class=\"card-body\">
                    <form id=\"uploadForm\" class=\"dropzone\">
                        <div class=\"dz-message needsclick\">
                            Drop files here or click to upload<br>
                            <small class=\"text-muted\">(Supported formats: JPG, PNG)</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Original Image</h5>
                <div class=\"card-body\">
                    <div id=\"originalImage\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Detection Results</h5>
                <div class=\"card-body\">
                    <div id=\"detectionResults\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

<script>
Dropzone.autoDiscover = false;

document.addEventListener('DOMContentLoaded', function() {
    const uploadForm = new Dropzone(\"#uploadForm\", {
        url: \"{{ path('app_detection_process') }}\",
        acceptedFiles: \"image/*\",
        maxFiles: 1,
        init: function() {
            this.on(\"success\", function(file, response) {
                if (response.success) {
                    // Display original image
                    const originalImage = document.getElementById('originalImage');
                    originalImage.innerHTML = `<img src=\"\${URL.createObjectURL(file)}\" class=\"img-fluid\" alt=\"Original Image\">`;

                    // Display detection results
                    const detectionResults = document.getElementById('detectionResults');
                    let resultsHtml = '<div class=\"table-responsive\"><table class=\"table table-bordered\">';
                    resultsHtml += '<thead><tr><th>Class</th><th>Confidence</th><th>Location</th></tr></thead><tbody>';
                    
                    response.predictions.forEach(pred => {
                        resultsHtml += `
                            <tr>
                                <td>\${pred.class}</td>
                                <td>\${(pred.confidence * 100).toFixed(2)}%</td>
                                <td>x: \${pred.x}, y: \${pred.y}<br>w: \${pred.width}, h: \${pred.height}</td>
                            </tr>
                        `;
                    });
                    
                    resultsHtml += '</tbody></table></div>';
                    detectionResults.innerHTML = resultsHtml;
                } else {
                    alert('Error processing image: ' + response.error);
                }
            });

            this.on(\"error\", function(file, errorMessage) {
                alert('Error uploading file: ' + errorMessage);
            });
        }
    });
});
</script>
{% endblock %} ", "detection/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\detection\\index.html.twig");
    }
}
