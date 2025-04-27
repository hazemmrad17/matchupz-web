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

/* contrat/check_expiring.html.twig */
class __TwigTemplate_41de75d0b0389441c522f358c00b6163 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/check_expiring.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/check_expiring.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/check_expiring.html.twig", 1);
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

        yield "Check Expiring Contracts";
        
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
                <h5 class=\"card-header\">Expiring Contracts Check</h5>
                <div class=\"card-body\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            yield "                        <div class=\"alert alert-success\" role=\"alert\">
                            ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            yield "                        <div class=\"alert alert-warning\" role=\"alert\">
                            ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
                    <h6>Summary</h6>
                    <p><strong>Successful SMS Sent:</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successCount"]) || array_key_exists("successCount", $context) ? $context["successCount"] : (function () { throw new RuntimeError('Variable "successCount" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</p>
                    <p><strong>Errors Encountered:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new RuntimeError('Variable "errorCount" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</p>

                    ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 26, $this->source); })())) > 0)) {
            // line 27
            yield "                        <h6>Detailed Results</h6>
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>Contract ID</th>
                                    <th>Status</th>
                                    <th>Message</th>
                                    <th>SID (if successful)</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 39
                yield "                                    <tr class=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, false, 39) == "success")) ? ("table-success") : ("table-danger"));
                yield "\">
                                        <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "contractId", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                                        <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, false, 41)), "html", null, true);
                yield "</td>
                                        <td>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "message", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
                                        <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sid", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sid", [], "any", false, false, false, 43), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                            </tbody>
                        </table>
                    ";
        } else {
            // line 49
            yield "                        <p>No contracts are expiring within the next 3 days.</p>
                    ";
        }
        // line 51
        yield "
                    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"btn btn-secondary mt-3\">Back to Contracts</a>
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
        return "contrat/check_expiring.html.twig";
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
        return array (  210 => 52,  207 => 51,  203 => 49,  198 => 46,  189 => 43,  185 => 42,  181 => 41,  177 => 40,  172 => 39,  168 => 38,  155 => 27,  153 => 26,  148 => 24,  144 => 23,  140 => 21,  131 => 18,  128 => 17,  123 => 16,  114 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Check Expiring Contracts{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header\">Expiring Contracts Check</h5>
                <div class=\"card-body\">
                    {% for flashMessage in app.flashes('success') %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            {{ flashMessage }}
                        </div>
                    {% endfor %}
                    {% for flashMessage in app.flashes('warning') %}
                        <div class=\"alert alert-warning\" role=\"alert\">
                            {{ flashMessage }}
                        </div>
                    {% endfor %}

                    <h6>Summary</h6>
                    <p><strong>Successful SMS Sent:</strong> {{ successCount }}</p>
                    <p><strong>Errors Encountered:</strong> {{ errorCount }}</p>

                    {% if results|length > 0 %}
                        <h6>Detailed Results</h6>
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>Contract ID</th>
                                    <th>Status</th>
                                    <th>Message</th>
                                    <th>SID (if successful)</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for result in results %}
                                    <tr class=\"{{ result.status == 'success' ? 'table-success' : 'table-danger' }}\">
                                        <td>{{ result.contractId }}</td>
                                        <td>{{ result.status|capitalize }}</td>
                                        <td>{{ result.message }}</td>
                                        <td>{{ result.sid|default('N/A') }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% else %}
                        <p>No contracts are expiring within the next 3 days.</p>
                    {% endif %}

                    <a href=\"{{ path('contrat_main') }}\" class=\"btn btn-secondary mt-3\">Back to Contracts</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "contrat/check_expiring.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\check_expiring.html.twig");
    }
}
