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

/* joueur/tracking.html.twig */
class __TwigTemplate_2e168df49f72fbf9b962ffaa86d78430 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/tracking.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/tracking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/tracking.html.twig", 1);
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

        yield "Football Analysis - Matchupz";
        
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
        yield "<div class=\"card\">
    <h5 class=\"card-header\">Football Video Analysis</h5>
    <div class=\"card-body\">
        <p>Upload a football match video to analyze player movements, ball possession, and more.</p>

        <!-- Video Upload Form -->
        <form method=\"post\" enctype=\"multipart/form-data\" id=\"videoForm\">
            <div class=\"mb-3\">
                <label for=\"video\" class=\"form-label\">Select Video File</label>
                <input type=\"file\" class=\"form-control\" id=\"video\" name=\"video\" accept=\"video/*\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"analyzeBtn\">Analyze Video</button>
            <button type=\"button\" class=\"btn btn-danger\" id=\"stopBtn\" style=\"display: none;\">Stop Processing</button>
        </form>

        <!-- Error Message -->
        ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "            <div class=\"alert alert-danger mt-3\" role=\"alert\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 27
        yield "
        <!-- Tracking Data Analysis -->
        ";
        // line 29
        if ((((isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 29, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["tracking_data"] ?? null), "frames", [], "any", true, true, false, 29)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 29, $this->source); })()), "frames", [], "any", false, false, false, 29)) > 0))) {
            // line 30
            yield "            <div class=\"mt-4\">
                <h6>Tracking Analysis</h6>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>Frame Statistics</h5>
                        <p><strong>Total Frames Analyzed:</strong> ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 35, $this->source); })()), "frames", [], "any", false, false, false, 35)), "html", null, true);
            yield "</p>
                        <p><strong>Video FPS:</strong> ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 36, $this->source); })()), "fps", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                        <p><strong>Duration Analyzed:</strong> 
                            ";
            // line 38
            $context["lastFrame"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 38, $this->source); })()), "frames", [], "any", false, false, false, 38));
            // line 39
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastFrame"]) || array_key_exists("lastFrame", $context) ? $context["lastFrame"] : (function () { throw new RuntimeError('Variable "lastFrame" does not exist.', 39, $this->source); })()), "timestamp", [], "any", false, false, false, 39), 2), "html", null, true);
            yield " seconds
                        </p>
                    </div>
                </div>

                <!-- Charts -->
                <div class=\"mt-4\">
                    <h6>Visual Analysis</h6>
                    <div class=\"row\">
                        <!-- Frame Count Over Time Line Chart -->
                        <div class=\"col-md-6\">
                            <canvas id=\"frameTimeChart\" height=\"200\"></canvas>
                        </div>
                        <!-- Frame Processing Density Line Chart -->
                        <div class=\"col-md-6\">
                            <canvas id=\"frameDensityChart\" height=\"200\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 60
            yield "            <div class=\"mt-4\">
                <p>No tracking data available. Please process a video to view analysis.</p>
            </div>
        ";
        }
        // line 64
        yield "
        <!-- Output Video -->
        <div class=\"mt-4\" id=\"resultSection\">
            <h6>Analysis Result</h6>
            <div id=\"videoContainer\">
                ";
        // line 69
        if ((isset($context["output_video_url"]) || array_key_exists("output_video_url", $context) ? $context["output_video_url"] : (function () { throw new RuntimeError('Variable "output_video_url" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "                    <video controls class=\"w-100\" style=\"max-height: 500px;\" autoplay>
                        <source src=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["output_video_url"]) || array_key_exists("output_video_url", $context) ? $context["output_video_url"] : (function () { throw new RuntimeError('Variable "output_video_url" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "\" type=\"video/mp4\">
                        Your browser does not support the video tag, or the video file is inaccessible. Check the URL: <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["output_video_url"]) || array_key_exists("output_video_url", $context) ? $context["output_video_url"] : (function () { throw new RuntimeError('Variable "output_video_url" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["output_video_url"]) || array_key_exists("output_video_url", $context) ? $context["output_video_url"] : (function () { throw new RuntimeError('Variable "output_video_url" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "</a>
                    </video>
                ";
        } else {
            // line 75
            yield "                    <p>No video with supported format and MIME type found.</p>
                ";
        }
        // line 77
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 84
        yield "    <style>
        .card-body {
            padding: 1.5rem;
        }
        .form-control {
            max-width: 500px;
        }
        #resultSection {
            display: block;
        }
        .table {
            margin-bottom: 1.5rem;
        }
        .table-sm th, .table-sm td {
            padding: 0.5rem;
            font-size: 0.9rem;
        }
        canvas {
            max-width: 100%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
    <script>
        document.getElementById('videoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);
            document.getElementById('analyzeBtn').style.display = 'none';
            document.getElementById('stopBtn').style.display = 'inline-block';
            document.getElementById('videoContainer').innerHTML = '<p>Processing...</p>';

            fetch('";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_analysis");
        yield "', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newVideoContainer = doc.querySelector('#videoContainer').innerHTML;
                document.getElementById('videoContainer').innerHTML = newVideoContainer;
                const errorAlert = doc.querySelector('.alert-danger');
                if (errorAlert) {
                    document.querySelector('.card-body').insertBefore(errorAlert, document.getElementById('resultSection'));
                }
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
                location.reload();
            })
            .catch(error => {
                console.error('Error during processing:', error);
                document.getElementById('videoContainer').innerHTML = '<p>Error occurred during processing.</p>';
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
            });
        });

        document.getElementById('stopBtn').addEventListener('click', function() {
            fetch('";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_analysis");
        yield "', {
                method: 'POST',
                body: new FormData(document.createElement('form')).append('action', 'stop')
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'stopped') {
                    document.getElementById('analyzeBtn').style.display = 'inline-block';
                    document.getElementById('stopBtn').style.display = 'none';
                    const videoContainer = document.getElementById('videoContainer');
                    if (data.output_video_url) {
                        videoContainer.innerHTML = `
                            <video controls class=\"w-100\" style=\"max-height: 500px;\" autoplay>
                                <source src=\"\${data.output_video_url}\" type=\"video/mp4\">
                                Your browser does not support the video tag, or the video file is inaccessible. Check the URL: <a href=\"\${data.output_video_url}\">\${data.output_video_url}</a>
                            </video>
                        `;
                    } else {
                        videoContainer.innerHTML = '<p>No video with supported format and MIME type found.</p>';
                    }
                }
            })
            .catch(error => {
                console.error('Error stopping process:', error);
                document.getElementById('videoContainer').innerHTML = '<p>Error occurred while stopping the process.</p>';
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
            });
        });

        // Chart.js initialization
        ";
        // line 177
        if ((((isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 177, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["tracking_data"] ?? null), "frames", [], "any", true, true, false, 177)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 177, $this->source); })()), "frames", [], "any", false, false, false, 177)) > 0))) {
            // line 178
            yield "            // Frame Count Over Time Line Chart
            const frameTimeCtx = document.getElementById('frameTimeChart').getContext('2d');
            new Chart(frameTimeCtx, {
                type: 'line',
                data: {
                    labels: [";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 183, $this->source); })()), "frames", [], "any", false, false, false, 183));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["frame"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["frame"], "timestamp", [], "any", false, false, false, 183), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 183)) {
                    yield ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['frame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                    datasets: [{
                        label: 'Frame Number',
                        data: [";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 186, $this->source); })()), "frames", [], "any", false, false, false, 186));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["frame"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["frame"], "frame_number", [], "any", false, false, false, 186), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 186)) {
                    yield ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['frame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: false,
                        tension: 0.1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Frame Progression Over Time'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Time (seconds)'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Frame Number'
                            },
                            beginAtZero: false
                        }
                    }
                }
            });

            // Frame Processing Density Line Chart
            const frameDensityCtx = document.getElementById('frameDensityChart').getContext('2d');
            // Calculate time bins (e.g., 0.5-second intervals)
            const timestamps = [";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tracking_data"]) || array_key_exists("tracking_data", $context) ? $context["tracking_data"] : (function () { throw new RuntimeError('Variable "tracking_data" does not exist.', 221, $this->source); })()), "frames", [], "any", false, false, false, 221));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["frame"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["frame"], "timestamp", [], "any", false, false, false, 221), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 221)) {
                    yield ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['frame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "];
            const binSize = 0.5; // 0.5 seconds per bin
            const maxTime = Math.max(...timestamps);
            const bins = Array(Math.ceil(maxTime / binSize)).fill(0);
            timestamps.forEach(ts => {
                const binIndex = Math.floor(ts / binSize);
                if (binIndex < bins.length) bins[binIndex]++;
            });
            new Chart(frameDensityCtx, {
                type: 'line',
                data: {
                    labels: Array.from({length: bins.length}, (_, i) => (i * binSize).toFixed(1)),
                    datasets: [{
                        label: 'Frames Processed',
                        data: bins,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Frame Processing Density Over Time'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Time (seconds)'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Number of Frames'
                            },
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        ";
        } else {
            // line 270
            yield "            // Display placeholder for no data
            document.querySelectorAll('canvas').forEach(canvas => {
                canvas.getContext('2d').font = '16px Arial';
                canvas.getContext('2d').fillText('No data available', 50, 100);
            });
        ";
        }
        // line 276
        yield "    </script>
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
        return "joueur/tracking.html.twig";
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
        return array (  570 => 276,  562 => 270,  479 => 221,  410 => 186,  373 => 183,  366 => 178,  364 => 177,  330 => 146,  300 => 119,  287 => 108,  274 => 107,  242 => 84,  229 => 83,  214 => 77,  210 => 75,  202 => 72,  198 => 71,  195 => 70,  193 => 69,  186 => 64,  180 => 60,  155 => 39,  153 => 38,  148 => 36,  144 => 35,  137 => 30,  135 => 29,  131 => 27,  125 => 24,  122 => 23,  120 => 22,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Football Analysis - Matchupz{% endblock %}

{% block body %}
<div class=\"card\">
    <h5 class=\"card-header\">Football Video Analysis</h5>
    <div class=\"card-body\">
        <p>Upload a football match video to analyze player movements, ball possession, and more.</p>

        <!-- Video Upload Form -->
        <form method=\"post\" enctype=\"multipart/form-data\" id=\"videoForm\">
            <div class=\"mb-3\">
                <label for=\"video\" class=\"form-label\">Select Video File</label>
                <input type=\"file\" class=\"form-control\" id=\"video\" name=\"video\" accept=\"video/*\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"analyzeBtn\">Analyze Video</button>
            <button type=\"button\" class=\"btn btn-danger\" id=\"stopBtn\" style=\"display: none;\">Stop Processing</button>
        </form>

        <!-- Error Message -->
        {% if error %}
            <div class=\"alert alert-danger mt-3\" role=\"alert\">
                {{ error }}
            </div>
        {% endif %}

        <!-- Tracking Data Analysis -->
        {% if tracking_data and tracking_data.frames is defined and tracking_data.frames|length > 0 %}
            <div class=\"mt-4\">
                <h6>Tracking Analysis</h6>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>Frame Statistics</h5>
                        <p><strong>Total Frames Analyzed:</strong> {{ tracking_data.frames|length }}</p>
                        <p><strong>Video FPS:</strong> {{ tracking_data.fps }}</p>
                        <p><strong>Duration Analyzed:</strong> 
                            {% set lastFrame = tracking_data.frames|last %}
                            {{ lastFrame.timestamp|round(2) }} seconds
                        </p>
                    </div>
                </div>

                <!-- Charts -->
                <div class=\"mt-4\">
                    <h6>Visual Analysis</h6>
                    <div class=\"row\">
                        <!-- Frame Count Over Time Line Chart -->
                        <div class=\"col-md-6\">
                            <canvas id=\"frameTimeChart\" height=\"200\"></canvas>
                        </div>
                        <!-- Frame Processing Density Line Chart -->
                        <div class=\"col-md-6\">
                            <canvas id=\"frameDensityChart\" height=\"200\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"mt-4\">
                <p>No tracking data available. Please process a video to view analysis.</p>
            </div>
        {% endif %}

        <!-- Output Video -->
        <div class=\"mt-4\" id=\"resultSection\">
            <h6>Analysis Result</h6>
            <div id=\"videoContainer\">
                {% if output_video_url %}
                    <video controls class=\"w-100\" style=\"max-height: 500px;\" autoplay>
                        <source src=\"{{ output_video_url }}\" type=\"video/mp4\">
                        Your browser does not support the video tag, or the video file is inaccessible. Check the URL: <a href=\"{{ output_video_url }}\">{{ output_video_url }}</a>
                    </video>
                {% else %}
                    <p>No video with supported format and MIME type found.</p>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
    <style>
        .card-body {
            padding: 1.5rem;
        }
        .form-control {
            max-width: 500px;
        }
        #resultSection {
            display: block;
        }
        .table {
            margin-bottom: 1.5rem;
        }
        .table-sm th, .table-sm td {
            padding: 0.5rem;
            font-size: 0.9rem;
        }
        canvas {
            max-width: 100%;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>
    <script>
        document.getElementById('videoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);
            document.getElementById('analyzeBtn').style.display = 'none';
            document.getElementById('stopBtn').style.display = 'inline-block';
            document.getElementById('videoContainer').innerHTML = '<p>Processing...</p>';

            fetch('{{ path('football_analysis') }}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newVideoContainer = doc.querySelector('#videoContainer').innerHTML;
                document.getElementById('videoContainer').innerHTML = newVideoContainer;
                const errorAlert = doc.querySelector('.alert-danger');
                if (errorAlert) {
                    document.querySelector('.card-body').insertBefore(errorAlert, document.getElementById('resultSection'));
                }
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
                location.reload();
            })
            .catch(error => {
                console.error('Error during processing:', error);
                document.getElementById('videoContainer').innerHTML = '<p>Error occurred during processing.</p>';
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
            });
        });

        document.getElementById('stopBtn').addEventListener('click', function() {
            fetch('{{ path('football_analysis') }}', {
                method: 'POST',
                body: new FormData(document.createElement('form')).append('action', 'stop')
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'stopped') {
                    document.getElementById('analyzeBtn').style.display = 'inline-block';
                    document.getElementById('stopBtn').style.display = 'none';
                    const videoContainer = document.getElementById('videoContainer');
                    if (data.output_video_url) {
                        videoContainer.innerHTML = `
                            <video controls class=\"w-100\" style=\"max-height: 500px;\" autoplay>
                                <source src=\"\${data.output_video_url}\" type=\"video/mp4\">
                                Your browser does not support the video tag, or the video file is inaccessible. Check the URL: <a href=\"\${data.output_video_url}\">\${data.output_video_url}</a>
                            </video>
                        `;
                    } else {
                        videoContainer.innerHTML = '<p>No video with supported format and MIME type found.</p>';
                    }
                }
            })
            .catch(error => {
                console.error('Error stopping process:', error);
                document.getElementById('videoContainer').innerHTML = '<p>Error occurred while stopping the process.</p>';
                document.getElementById('analyzeBtn').style.display = 'inline-block';
                document.getElementById('stopBtn').style.display = 'none';
            });
        });

        // Chart.js initialization
        {% if tracking_data and tracking_data.frames is defined and tracking_data.frames|length > 0 %}
            // Frame Count Over Time Line Chart
            const frameTimeCtx = document.getElementById('frameTimeChart').getContext('2d');
            new Chart(frameTimeCtx, {
                type: 'line',
                data: {
                    labels: [{% for frame in tracking_data.frames %}{{ frame.timestamp }}{% if not loop.last %},{% endif %}{% endfor %}],
                    datasets: [{
                        label: 'Frame Number',
                        data: [{% for frame in tracking_data.frames %}{{ frame.frame_number }}{% if not loop.last %},{% endif %}{% endfor %}],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: false,
                        tension: 0.1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Frame Progression Over Time'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Time (seconds)'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Frame Number'
                            },
                            beginAtZero: false
                        }
                    }
                }
            });

            // Frame Processing Density Line Chart
            const frameDensityCtx = document.getElementById('frameDensityChart').getContext('2d');
            // Calculate time bins (e.g., 0.5-second intervals)
            const timestamps = [{% for frame in tracking_data.frames %}{{ frame.timestamp }}{% if not loop.last %},{% endif %}{% endfor %}];
            const binSize = 0.5; // 0.5 seconds per bin
            const maxTime = Math.max(...timestamps);
            const bins = Array(Math.ceil(maxTime / binSize)).fill(0);
            timestamps.forEach(ts => {
                const binIndex = Math.floor(ts / binSize);
                if (binIndex < bins.length) bins[binIndex]++;
            });
            new Chart(frameDensityCtx, {
                type: 'line',
                data: {
                    labels: Array.from({length: bins.length}, (_, i) => (i * binSize).toFixed(1)),
                    datasets: [{
                        label: 'Frames Processed',
                        data: bins,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Frame Processing Density Over Time'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Time (seconds)'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Number of Frames'
                            },
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        {% else %}
            // Display placeholder for no data
            document.querySelectorAll('canvas').forEach(canvas => {
                canvas.getContext('2d').font = '16px Arial';
                canvas.getContext('2d').fillText('No data available', 50, 100);
            });
        {% endif %}
    </script>
{% endblock %}", "joueur/tracking.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\tracking.html.twig");
    }
}
