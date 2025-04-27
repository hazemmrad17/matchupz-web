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

/* stripe/stripe.html.twig */
class __TwigTemplate_89de90a9b6d843819d1acde7fcca7c44 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/stripe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/stripe.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "stripe/stripe.html.twig", 1);
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

        yield "Stripe Payment Gateway";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "                        <div 
                            style=\"color: green; border: 2px solid green; text-align: center; padding: 5px; margin-bottom: 10px;\">
                            ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
                    <form id=\"checkout-form\" method=\"post\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        yield "\">
                        <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id\">

                        <!-- New Customer Name field -->
                        <div class=\"mb-3\">
                            <label for=\"customer-name\" class=\"form-label\">Customer Name</label>
                            <input type=\"text\" id=\"customer-name\" name=\"customerName\" class=\"form-control\" required>
                        </div>

                        <label for=\"card-element\" class=\"form-label mb-3\">Card Details</label>
                        <div id=\"card-element\" class=\"form-control mb-4\" style=\"padding: 12px;\"></div>

                        <button 
                            id=\"pay-btn\"
                            class=\"btn btn-success w-100\"
                            type=\"button\"
                            onclick=\"createToken()\">
                            PAY \$5
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe(\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "\");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    function createToken() {
        document.getElementById(\"pay-btn\").disabled = true;

        stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
                document.getElementById(\"pay-btn\").disabled = false;
                alert(result.error.message);
            } else if (result.token) {
                document.getElementById(\"stripe-token-id\").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }
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
        return "stripe/stripe.html.twig";
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
        return array (  158 => 46,  127 => 18,  124 => 17,  115 => 14,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Stripe Payment Gateway{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    {% for message in app.flashes('success') %}
                        <div 
                            style=\"color: green; border: 2px solid green; text-align: center; padding: 5px; margin-bottom: 10px;\">
                            {{ message }}
                        </div>
                    {% endfor %}

                    <form id=\"checkout-form\" method=\"post\" action=\"{{ path('app_stripe_charge') }}\">
                        <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id\">

                        <!-- New Customer Name field -->
                        <div class=\"mb-3\">
                            <label for=\"customer-name\" class=\"form-label\">Customer Name</label>
                            <input type=\"text\" id=\"customer-name\" name=\"customerName\" class=\"form-control\" required>
                        </div>

                        <label for=\"card-element\" class=\"form-label mb-3\">Card Details</label>
                        <div id=\"card-element\" class=\"form-control mb-4\" style=\"padding: 12px;\"></div>

                        <button 
                            id=\"pay-btn\"
                            class=\"btn btn-success w-100\"
                            type=\"button\"
                            onclick=\"createToken()\">
                            PAY \$5
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe(\"{{ stripe_key }}\");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    function createToken() {
        document.getElementById(\"pay-btn\").disabled = true;

        stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
                document.getElementById(\"pay-btn\").disabled = false;
                alert(result.error.message);
            } else if (result.token) {
                document.getElementById(\"stripe-token-id\").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }
</script>
{% endblock %}
", "stripe/stripe.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\stripe\\stripe.html.twig");
    }
}
