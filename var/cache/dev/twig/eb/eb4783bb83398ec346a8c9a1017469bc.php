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

/* contrat/stripe.html.twig */
class __TwigTemplate_0f09936942fbcff987128f0ef480d5a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/stripe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/stripe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/stripe.html.twig", 1);
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

        yield "Paiement via Stripe";
        
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
                <h5 class=\"card-header\">Paiement du Contrat #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 9, $this->source); })()), "idContrat", [], "any", false, false, false, 9), "html", null, true);
        yield "</h5>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <p><strong>Titre :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 12, $this->source); })()), "Titre", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                        <p><strong>Montant à payer :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 13, $this->source); })()), "Montant", [], "any", false, false, false, 13), 2, ".", ","), "html", null, true);
        yield " TND</p>
                    </div>

                    ";
        // line 17
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 18
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible\" role=\"alert\">
                                ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
                    ";
        // line 27
        yield "                    <form id=\"payment-form\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_pay", ["idContrat" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 27, $this->source); })()), "idContrat", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" method=\"POST\">
                        <div id=\"card-element\" class=\"form-control\">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <div id=\"card-errors\" role=\"alert\" class=\"text-danger mt-2\"></div>
                        <button type=\"submit\" class=\"btn btn-primary mt-3\">Payer ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 32, $this->source); })()), "Montant", [], "any", false, false, false, 32), 2, ".", ","), "html", null, true);
        yield " TND</button>
                    </form>

                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_main");
        yield "\" class=\"btn btn-secondary mt-3\">Annuler</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Include Stripe.js -->
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Stripe with your publishable key
            const stripe = Stripe('";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "'); // Replace with your Stripe public key
            const elements = stripe.elements();

            // Create a card element
            const card = elements.create('card', {
                style: {
                    base: {
                        fontSize: '16px',
                        color: '#32325d',
                        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                        '::placeholder': {
                            color: '#aab7c4',
                        },
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a',
                    },
                },
            });

            // Mount the card element to the DOM
            card.mount('#card-element');

            // Handle real-time validation errors
            card.on('change', function (event) {
                const displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission
            const form = document.getElementById('payment-form');
            form.addEventListener('submit', async function (event) {
                event.preventDefault();

                const { paymentIntent, error } = await stripe.createPaymentMethod({
                    type: 'card',
                    card: card,
                    billing_details: {
                        // Add billing details if needed (e.g., name, email)
                    },
                });

                if (error) {
                    // Display error to the user
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Submit the form with the payment method ID
                    const hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentIntent.id);
                    form.appendChild(hiddenInput);
                    form.submit();
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
        return "contrat/stripe.html.twig";
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
        return array (  211 => 49,  201 => 43,  188 => 42,  171 => 35,  165 => 32,  156 => 27,  153 => 25,  147 => 24,  137 => 20,  132 => 19,  127 => 18,  122 => 17,  116 => 13,  112 => 12,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement via Stripe{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header\">Paiement du Contrat #{{ contrat.idContrat }}</h5>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <p><strong>Titre :</strong> {{ contrat.Titre }}</p>
                        <p><strong>Montant à payer :</strong> {{ contrat.Montant|number_format(2, '.', ',') }} TND</p>
                    </div>

                    {# Flash Messages #}
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} alert-dismissible\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {# Stripe Payment Form #}
                    <form id=\"payment-form\" action=\"{{ path('contrat_pay', {'idContrat': contrat.idContrat}) }}\" method=\"POST\">
                        <div id=\"card-element\" class=\"form-control\">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <div id=\"card-errors\" role=\"alert\" class=\"text-danger mt-2\"></div>
                        <button type=\"submit\" class=\"btn btn-primary mt-3\">Payer {{ contrat.Montant|number_format(2, '.', ',') }} TND</button>
                    </form>

                    <a href=\"{{ path('contrat_main') }}\" class=\"btn btn-secondary mt-3\">Annuler</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Include Stripe.js -->
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Stripe with your publishable key
            const stripe = Stripe('{{ stripe_public_key }}'); // Replace with your Stripe public key
            const elements = stripe.elements();

            // Create a card element
            const card = elements.create('card', {
                style: {
                    base: {
                        fontSize: '16px',
                        color: '#32325d',
                        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                        '::placeholder': {
                            color: '#aab7c4',
                        },
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a',
                    },
                },
            });

            // Mount the card element to the DOM
            card.mount('#card-element');

            // Handle real-time validation errors
            card.on('change', function (event) {
                const displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission
            const form = document.getElementById('payment-form');
            form.addEventListener('submit', async function (event) {
                event.preventDefault();

                const { paymentIntent, error } = await stripe.createPaymentMethod({
                    type: 'card',
                    card: card,
                    billing_details: {
                        // Add billing details if needed (e.g., name, email)
                    },
                });

                if (error) {
                    // Display error to the user
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Submit the form with the payment method ID
                    const hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentIntent.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
{% endblock %}", "contrat/stripe.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\stripe.html.twig");
    }
}
