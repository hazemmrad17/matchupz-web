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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/stripe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/stripe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/stripe.html.twig", 1);
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

        yield "Stripe Payment";
        
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
        yield "<div class=\"container mt-5\" style=\"max-width: 500px;\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "        <div 
            style=\"color: green;
                   border: 2px green solid;
                   text-align: center;
                   padding: 10px;
                   margin-bottom: 15px;
                   border-radius: 4px;\">
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
    <form id=\"payment-form\" method=\"post\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        yield "\">
        <label for=\"card-element\" class=\"form-label mb-2\">Card Details</label>
        <div id=\"card-element\" style=\"padding: 10px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px;\"></div>
        
        <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id\">
        <input type=\"hidden\" id=\"contractTitle\" name=\"contractTitle\" value=\"\">
        <input type=\"hidden\" id=\"amount\" name=\"amount\" value=\"\">

        <button id=\"submit\" class=\"btn btn-primary w-100\">Submit Payment</button>
        <div id=\"error-message\" class=\"mt-2\" style=\"color: red;\"></div>
    </form>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe(\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        submitButton.disabled = true;

        try {
            const {token, error} = await stripe.createToken(cardElement);
            if (error) {
                errorMessage.textContent = error.message;
                submitButton.disabled = false;
                return;
            }

            document.getElementById(\"stripe-token-id\").value = token.id;
            form.submit();
        } catch (err) {
            errorMessage.textContent = err.message;
            submitButton.disabled = false;
        }
    });

    function setContractDetails(title, amount) {
        document.getElementById('contractTitle').value = title;
        document.getElementById('amount').value = amount;
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
        return array (  146 => 34,  128 => 19,  125 => 18,  116 => 15,  107 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stripe Payment{% endblock %}

{% block body %}
<div class=\"container mt-5\" style=\"max-width: 500px;\">
    {% for message in app.flashes('success') %}
        <div 
            style=\"color: green;
                   border: 2px green solid;
                   text-align: center;
                   padding: 10px;
                   margin-bottom: 15px;
                   border-radius: 4px;\">
            {{ message }}
        </div>
    {% endfor %}

    <form id=\"payment-form\" method=\"post\" action=\"{{ path('app_stripe_charge') }}\">
        <label for=\"card-element\" class=\"form-label mb-2\">Card Details</label>
        <div id=\"card-element\" style=\"padding: 10px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px;\"></div>
        
        <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id\">
        <input type=\"hidden\" id=\"contractTitle\" name=\"contractTitle\" value=\"\">
        <input type=\"hidden\" id=\"amount\" name=\"amount\" value=\"\">

        <button id=\"submit\" class=\"btn btn-primary w-100\">Submit Payment</button>
        <div id=\"error-message\" class=\"mt-2\" style=\"color: red;\"></div>
    </form>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe(\"{{ stripe_key }}\");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        submitButton.disabled = true;

        try {
            const {token, error} = await stripe.createToken(cardElement);
            if (error) {
                errorMessage.textContent = error.message;
                submitButton.disabled = false;
                return;
            }

            document.getElementById(\"stripe-token-id\").value = token.id;
            form.submit();
        } catch (err) {
            errorMessage.textContent = err.message;
            submitButton.disabled = false;
        }
    });

    function setContractDetails(title, amount) {
        document.getElementById('contractTitle').value = title;
        document.getElementById('amount').value = amount;
    }
</script>
{% endblock %}
", "stripe/stripe.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\stripe\\stripe.html.twig");
    }
}
