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

/* sponsor/sponsor_front.html.twig */
class __TwigTemplate_ad0c86e6cc616f58e069a880dc4bd363 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/sponsor_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/sponsor_front.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "sponsor/sponsor_front.html.twig", 1);
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

        yield "Sponsors";
        
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
        yield "<style>
    .sponsor-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url(\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sponsor-bg.jpg"), "html", null, true);
        yield "\");
        background-size: cover;
        background-position: center;
        padding: 6rem 0;
        color: white;
        text-align: center;
    }

    .sponsor-title {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 3rem;
        font-family: 'Georgia', serif;
        color: #333;
        position: relative;
    }

    .sponsor-title::after {
        content: '';
        width: 60px;
        height: 4px;
        background-color: #007bff;
        display: block;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    /* Smaller Flip Card */
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 260px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card.dblclick .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 15px;
        backface-visibility: hidden;
        top: 0;
        left: 0;
    }

    .flip-card-front {
        z-index: 2;
    }

    .flip-card-back {
        background: #f7f7f7;
        transform: rotateY(180deg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        font-size: 1rem;
        text-align: center;
    }

    .sponsor-card {
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        height: 100%;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    .sponsor-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .sponsor-content {
        padding: 1rem;
    }

    .sponsor-content .h5 {
        font-size: 1.05rem;
    }

    .sponsor-border-gold {
        border: 3px solid #FFD700;
    }

    .sponsor-border-silver {
        border: 3px solid #C0C0C0;
    }

    .sponsor-border-bronze {
        border: 3px solid #CD7F32;
    }

    /* Floating Stars */
    .floating-stars {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .floating-stars span {
        position: absolute;
        color: #FFD700;
        font-size: 1.2rem;
        opacity: 0.9;
        text-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
        animation: floatStar 6s infinite ease-in-out;
    }

    .floating-stars span:nth-child(1) { top: 20%; left: 25%; animation-delay: 0s; }
    .floating-stars span:nth-child(2) { top: 60%; left: 70%; animation-delay: 1s; }
    .floating-stars span:nth-child(3) { top: 75%; left: 15%; animation-delay: 2s; }
    .floating-stars span:nth-child(4) { top: 40%; left: 80%; animation-delay: 0.5s; }

    @keyframes floatStar {
        0%   { transform: translateY(0) scale(1);   opacity: 0.8; }
        50%  { transform: translateY(-20px) scale(1.3); opacity: 1; }
        100% { transform: translateY(0) scale(1);   opacity: 0.8; }
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Sponsors</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <!-- Breadcrumb content can be added here if needed -->
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row\">
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 159, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 160
            yield "            ";
            $context["pack"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 160));
            // line 161
            yield "            <div class=\"col-md-6 col-lg-4 mb-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 161) * 0.2)), "html", null, true);
            yield "s\">
                <div class=\"flip-card\" data-id=\"flip-";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 162), "html", null, true);
            yield "\">
                    <div class=\"flip-card-inner\">
                        <div class=\"flip-card-front sponsor-card 
                            ";
            // line 165
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 165, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 166
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 166, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 167
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 167, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 168
            yield "\">

                            ";
            // line 170
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 170, $this->source); })()) == "gold")) {
                // line 171
                yield "                                <div class=\"floating-stars\">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                            ";
            }
            // line 178
            yield "
                            <div class=\"sponsor-content\">
                                <div class=\"blog-comment d-flex justify-content-between py-1 px-2 mb-2\">
                                    <div class=\"small\">
                                        <span class=\"fa fa-user text-primary me-2\"></span> ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 182), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"small\">
                                        <span class=\"fa fa-box text-primary me-2\"></span> ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 185), "html", null, true);
            yield "
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-handshake fa-lg text-primary me-2\"></i>
                                    <a href=\"#\" class=\"h5 d-inline-block mb-0\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 191), "html", null, true);
            yield "</a>
                                </div>

                                <p class=\"mb-2\" style=\"font-size: 0.9rem;\"><strong>Contact:</strong> ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 194), "html", null, true);
            yield "</p>

                                <!-- Add the \"Payer\" button and Stripe form -->
                                <form id=\"payment-form-";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 197), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
            yield "\">
                                    <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id-";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 198), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" id=\"contractTitle-";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 199), "html", null, true);
            yield "\" name=\"contractTitle\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 199), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" id=\"amount-";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 200), "html", null, true);
            yield "\" name=\"amount\" value=\"1000\">  <!-- Replace 1000 with dynamic amount if needed -->

                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fa fa-credit-card me-1\"></i> Payer
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"flip-card-back 
                            ";
            // line 210
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 210, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 211
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 211, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 212
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 212, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 213
            yield "\">
                            <p style=\"font-size: 0.95rem;\">Merci à ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 214), "html", null, true);
            yield " pour leur soutien précieux en tant que sponsor ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 214)), "html", null, true);
            yield " !</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 219
        if (!$context['_iterated']) {
            // line 220
            yield "            <div class=\"text-center\">
                <p>Aucun sponsor trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>

<script>

    // Crée un élément de carte pour chaque sponsor
    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 233, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 234
            yield "        const cardElement";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 234), "html", null, true);
            yield " = elements.create('card');
        cardElement";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 235), "html", null, true);
            yield ".mount('#card-element-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 235), "html", null, true);
            yield "');

        const form";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 237), "html", null, true);
            yield " = document.getElementById('payment-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 237), "html", null, true);
            yield "');
        const submitButton";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 238), "html", null, true);
            yield " = form";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 238), "html", null, true);
            yield ".querySelector('button');
        const errorMessage";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 239), "html", null, true);
            yield " = form";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 239), "html", null, true);
            yield ".querySelector('.error-message');

    
    const stripe = Stripe(\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 242, $this->source); })()), "html", null, true);
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
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        yield "</script>


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
        return "sponsor/sponsor_front.html.twig";
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
        return array (  509 => 271,  474 => 242,  466 => 239,  460 => 238,  454 => 237,  447 => 235,  442 => 234,  438 => 233,  427 => 224,  418 => 220,  416 => 219,  396 => 214,  393 => 213,  388 => 212,  384 => 211,  380 => 210,  367 => 200,  361 => 199,  357 => 198,  351 => 197,  345 => 194,  339 => 191,  330 => 185,  324 => 182,  318 => 178,  309 => 171,  307 => 170,  303 => 168,  298 => 167,  294 => 166,  290 => 165,  284 => 162,  279 => 161,  276 => 160,  258 => 159,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Sponsors{% endblock %}

{% block body %}
<style>
    .sponsor-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url(\"{{ asset('assets/img/sponsor-bg.jpg') }}\");
        background-size: cover;
        background-position: center;
        padding: 6rem 0;
        color: white;
        text-align: center;
    }

    .sponsor-title {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 3rem;
        font-family: 'Georgia', serif;
        color: #333;
        position: relative;
    }

    .sponsor-title::after {
        content: '';
        width: 60px;
        height: 4px;
        background-color: #007bff;
        display: block;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    /* Smaller Flip Card */
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 260px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card.dblclick .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 15px;
        backface-visibility: hidden;
        top: 0;
        left: 0;
    }

    .flip-card-front {
        z-index: 2;
    }

    .flip-card-back {
        background: #f7f7f7;
        transform: rotateY(180deg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        font-size: 1rem;
        text-align: center;
    }

    .sponsor-card {
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        height: 100%;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    .sponsor-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .sponsor-content {
        padding: 1rem;
    }

    .sponsor-content .h5 {
        font-size: 1.05rem;
    }

    .sponsor-border-gold {
        border: 3px solid #FFD700;
    }

    .sponsor-border-silver {
        border: 3px solid #C0C0C0;
    }

    .sponsor-border-bronze {
        border: 3px solid #CD7F32;
    }

    /* Floating Stars */
    .floating-stars {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .floating-stars span {
        position: absolute;
        color: #FFD700;
        font-size: 1.2rem;
        opacity: 0.9;
        text-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
        animation: floatStar 6s infinite ease-in-out;
    }

    .floating-stars span:nth-child(1) { top: 20%; left: 25%; animation-delay: 0s; }
    .floating-stars span:nth-child(2) { top: 60%; left: 70%; animation-delay: 1s; }
    .floating-stars span:nth-child(3) { top: 75%; left: 15%; animation-delay: 2s; }
    .floating-stars span:nth-child(4) { top: 40%; left: 80%; animation-delay: 0.5s; }

    @keyframes floatStar {
        0%   { transform: translateY(0) scale(1);   opacity: 0.8; }
        50%  { transform: translateY(-20px) scale(1.3); opacity: 1; }
        100% { transform: translateY(0) scale(1);   opacity: 0.8; }
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Sponsors</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <!-- Breadcrumb content can be added here if needed -->
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row\">
        {% for sponsor in sponsors %}
            {% set pack = sponsor.pack|lower %}
            <div class=\"col-md-6 col-lg-4 mb-4 wow fadeInUp\" data-wow-delay=\"{{ 0.2 + loop.index0 * 0.2 }}s\">
                <div class=\"flip-card\" data-id=\"flip-{{ sponsor.Id_sponsor }}\">
                    <div class=\"flip-card-inner\">
                        <div class=\"flip-card-front sponsor-card 
                            {% if pack == 'gold' %}sponsor-border-gold
                            {% elseif pack == 'silver' %}sponsor-border-silver
                            {% elseif pack == 'bronze' %}sponsor-border-bronze
                            {% endif %}\">

                            {% if pack == 'gold' %}
                                <div class=\"floating-stars\">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                            {% endif %}

                            <div class=\"sponsor-content\">
                                <div class=\"blog-comment d-flex justify-content-between py-1 px-2 mb-2\">
                                    <div class=\"small\">
                                        <span class=\"fa fa-user text-primary me-2\"></span> {{ sponsor.nom }}
                                    </div>
                                    <div class=\"small\">
                                        <span class=\"fa fa-box text-primary me-2\"></span> {{ sponsor.pack }}
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-handshake fa-lg text-primary me-2\"></i>
                                    <a href=\"#\" class=\"h5 d-inline-block mb-0\">{{ sponsor.nom }}</a>
                                </div>

                                <p class=\"mb-2\" style=\"font-size: 0.9rem;\"><strong>Contact:</strong> {{ sponsor.contact }}</p>

                                <!-- Add the \"Payer\" button and Stripe form -->
                                <form id=\"payment-form-{{ sponsor.Id_sponsor }}\" method=\"post\" action=\"{{ path('app_stripe_charge') }}\">
                                    <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id-{{ sponsor.Id_sponsor }}\">
                                    <input type=\"hidden\" id=\"contractTitle-{{ sponsor.Id_sponsor }}\" name=\"contractTitle\" value=\"{{ sponsor.nom }}\">
                                    <input type=\"hidden\" id=\"amount-{{ sponsor.Id_sponsor }}\" name=\"amount\" value=\"1000\">  <!-- Replace 1000 with dynamic amount if needed -->

                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fa fa-credit-card me-1\"></i> Payer
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"flip-card-back 
                            {% if pack == 'gold' %}sponsor-border-gold
                            {% elseif pack == 'silver' %}sponsor-border-silver
                            {% elseif pack == 'bronze' %}sponsor-border-bronze
                            {% endif %}\">
                            <p style=\"font-size: 0.95rem;\">Merci à {{ sponsor.nom }} pour leur soutien précieux en tant que sponsor {{ sponsor.pack|capitalize }} !</p>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"text-center\">
                <p>Aucun sponsor trouvé.</p>
            </div>
        {% endfor %}
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>

<script>

    // Crée un élément de carte pour chaque sponsor
    {% for sponsor in sponsors %}
        const cardElement{{ sponsor.Id_sponsor }} = elements.create('card');
        cardElement{{ sponsor.Id_sponsor }}.mount('#card-element-{{ sponsor.Id_sponsor }}');

        const form{{ sponsor.Id_sponsor }} = document.getElementById('payment-form-{{ sponsor.Id_sponsor }}');
        const submitButton{{ sponsor.Id_sponsor }} = form{{ sponsor.Id_sponsor }}.querySelector('button');
        const errorMessage{{ sponsor.Id_sponsor }} = form{{ sponsor.Id_sponsor }}.querySelector('.error-message');

    
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
    {% endfor %}
</script>


{% endblock %}
", "sponsor/sponsor_front.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\sponsor_front.html.twig");
    }
}
