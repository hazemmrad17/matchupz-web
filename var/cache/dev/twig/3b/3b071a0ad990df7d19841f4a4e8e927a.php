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

    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 340px;
        perspective: 1000px;
        position: relative;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card.flipped .flip-card-inner {
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

    #card-element {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #fff;
        margin-bottom: 10px;
    }

    .btn-success {
        width: 100%;
        padding: 10px;
        font-size: 0.9rem;
    }

    .btn-success:disabled {
        background-color: #6c757d;
        border-color: #6c757d;
        cursor: not-allowed;
    }

    .mb-3 {
        margin-bottom: 0.75rem !important;
    }

    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.25rem;
    }

    .form-control, .form-select {
        font-size: 0.9rem;
        padding: 8px;
    }

    .flip-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 123, 255, 0.8);
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 3;
        font-size: 0.9rem;
    }

    .flip-card:hover .flip-btn,
    .flip-card.touched .flip-btn {
        opacity: 1;
    }

    .flip-btn:hover {
        background-color: rgba(0, 123, 255, 1);
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Sponsors</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row\">
        ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 220, $this->source); })()));
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
            // line 221
            yield "            ";
            $context["pack"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 221));
            // line 222
            yield "            <div class=\"col-md-6 col-lg-4 mb-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 222) * 0.2)), "html", null, true);
            yield "s\">
                <div class=\"flip-card\" data-id=\"flip-";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 223), "html", null, true);
            yield "\">
                    <button class=\"flip-btn\" title=\"Flip Card\">
                        <i class=\"fa fa-sync-alt\"></i>
                    </button>
                    <div class=\"flip-card-inner\">
                        <div class=\"flip-card-front sponsor-card 
                            ";
            // line 229
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 229, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 230
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 230, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 231
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 231, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 232
            yield "\">

                            ";
            // line 234
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 234, $this->source); })()) == "gold")) {
                // line 235
                yield "                                <div class=\"floating-stars\">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                            ";
            }
            // line 242
            yield "
                            <div class=\"sponsor-content\">
                                <div class=\"blog-comment d-flex justify-content-between py-1 px-2 mb-2\">
                                    <div class=\"small\">
                                        <span class=\"fa fa-user text-primary me-2\"></span> ";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 246), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"small\">
                                        <span class=\"fa fa-box text-primary me-2\"></span> ";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 249), "html", null, true);
            yield "
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-handshake fa-lg text-primary me-2\"></i>
                                    <a href=\"#\" class=\"h5 d-inline-block mb-0\">";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 255), "html", null, true);
            yield "</a>
                                </div>

                                <p class=\"mb-2\" style=\"font-size: 0.9rem;\"><strong>Contact:</strong> ";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 258), "html", null, true);
            yield "</p>

                                <!-- Payment Form -->
                                <form id=\"checkout-form-";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 261), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_stripe_charge", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 261)]), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id-";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 262), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("stripe_payment_" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 263))), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"customerName\" value=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 264), "html", null, true);
            yield "\">

                                    <!-- Contract Selection -->
                                    <div class=\"mb-3\">
                                        <label for=\"contract-";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 268), "html", null, true);
            yield "\" class=\"form-label\">Sélectionner un Contrat</label>
                                        <select id=\"contract-";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 269), "html", null, true);
            yield "\" name=\"contractId\" class=\"form-select\" required>
                                            <option value=\"\" disabled selected>Choisir un contrat</option>
                                            ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contrats", [], "any", false, false, false, 271));
            foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
                // line 272
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Id_Contrat", [], "any", false, false, false, 272), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Titre", [], "any", false, false, false, 272), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Montant", [], "any", false, false, false, 272), 2, ".", ","), "html", null, true);
                yield " \$)</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "                                        </select>
                                    </div>

                                    <!-- Card Element -->
                                    <label for=\"card-element-";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 278), "html", null, true);
            yield "\" class=\"form-label\">Détails de la Carte</label>
                                    <div id=\"card-element-";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 279), "html", null, true);
            yield "\" class=\"form-control\"></div>

                                    <!-- Pay Button -->
                                    <button 
                                        id=\"pay-btn-";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 283), "html", null, true);
            yield "\"
                                        class=\"btn btn-success mt-2\"
                                        type=\"button\"
                                        onclick=\"createToken(";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 286), "html", null, true);
            yield ")\"
                                        ";
            // line 287
            if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contrats", [], "any", false, false, false, 287))) {
                yield "disabled";
            }
            // line 288
            yield "                                    >
                                        <i class=\"fa fa-credit-card me-1\"></i> Payer
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"flip-card-back 
                            ";
            // line 296
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 296, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 297
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 297, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 298
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 298, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 299
            yield "\">
                            <p style=\"font-size: 0.95rem;\">Merci à ";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 300), "html", null, true);
            yield " pour leur soutien précieux en tant que sponsor ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 300)), "html", null, true);
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
        // line 305
        if (!$context['_iterated']) {
            // line 306
            yield "            <div class=\"text-center\">
                <p>Aucun sponsor trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stripe = Stripe(\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 317, $this->source); })()), "html", null, true);
        yield "\");
        const elements = stripe.elements();

        // Object to store card elements for each sponsor
        const cardElements = {};

        // Initialize Stripe card elements for each sponsor
        ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 324, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 325
            yield "            try {
                console.log(`Initializing card element for sponsor \${ ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 326), "html", null, true);
            yield " }`);
                const cardElement = elements.create('card', {
                    style: {
                        base: {
                            fontSize: '14px',
                            color: '#32325d',
                            '::placeholder': { color: '#aab7c4' },
                        },
                        invalid: { color: '#fa755a' },
                    },
                });
                const cardElementContainer = document.getElementById('card-element-";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 337), "html", null, true);
            yield "');
                if (!cardElementContainer) {
                    throw new Error(`Card element container not found for sponsor \${ ";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 339), "html", null, true);
            yield " }`);
                }
                cardElement.mount('#card-element-";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 341), "html", null, true);
            yield "');
                cardElements[";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 342), "html", null, true);
            yield "] = cardElement;
                console.log(`Card element mounted for sponsor \${ ";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 343), "html", null, true);
            yield " }`);
            } catch (error) {
                console.error(`Error initializing card element for sponsor \${ ";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 345), "html", null, true);
            yield " }:`, error.message);
            }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "
        // Function to create token and submit form
        window.createToken = function(sponsorId) {
            try {
                console.log(`Creating token for sponsor \${sponsorId}`);
                const payBtn = document.getElementById(`pay-btn-\${sponsorId}`);
                const form = document.getElementById(`checkout-form-\${sponsorId}`);
                const contractSelect = document.getElementById(`contract-\${sponsorId}`);

                if (!payBtn || !form || !contractSelect) {
                    throw new Error(`Form elements not found for sponsor \${sponsorId}`);
                }

                if (!contractSelect.value) {
                    alert('Veuillez sélectionner un contrat.');
                    return;
                }

                const cardElement = cardElements[sponsorId];
                if (!cardElement) {
                    throw new Error(`Card element not found for sponsor \${sponsorId}`);
                }

                payBtn.disabled = true;

                stripe.createToken(cardElement).then(function(result) {
                    if (result.error) {
                        payBtn.disabled = false;
                        alert(result.error.message);
                    } else if (result.token) {
                        document.getElementById(`stripe-token-id-\${sponsorId}`).value = result.token.id;
                        form.submit();
                    }
                }).catch(function(error) {
                    payBtn.disabled = false;
                    console.error(`Error creating token for sponsor \${sponsorId}:`, error.message);
                    alert('Une erreur est survenue : ' + error.message);
                });
            } catch (error) {
                console.error(`Error in createToken for sponsor \${sponsorId}:`, error.message);
                alert('Une erreur est survenue lors de la soumission du paiement.');
            }
        };

        // Handle card flipping with flip button
        document.querySelectorAll('.flip-card').forEach(card => {
            const flipBtn = card.querySelector('.flip-btn');

            card.addEventListener('mouseenter', () => {
                flipBtn.style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => {
                if (!card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '0';
                }
            });

            card.addEventListener('touchstart', () => {
                card.classList.add('touched');
            });

            flipBtn.addEventListener('click', () => {
                card.classList.toggle('flipped');
                if (card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '1';
                }
            });
        });

        // Initialize WOW.js for animations
        new WOW().init();
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
        return array (  622 => 348,  613 => 345,  608 => 343,  604 => 342,  600 => 341,  595 => 339,  590 => 337,  576 => 326,  573 => 325,  569 => 324,  559 => 317,  550 => 310,  541 => 306,  539 => 305,  519 => 300,  516 => 299,  511 => 298,  507 => 297,  503 => 296,  493 => 288,  489 => 287,  485 => 286,  479 => 283,  472 => 279,  468 => 278,  462 => 274,  449 => 272,  445 => 271,  440 => 269,  436 => 268,  429 => 264,  425 => 263,  421 => 262,  415 => 261,  409 => 258,  403 => 255,  394 => 249,  388 => 246,  382 => 242,  373 => 235,  371 => 234,  367 => 232,  362 => 231,  358 => 230,  354 => 229,  345 => 223,  340 => 222,  337 => 221,  319 => 220,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 340px;
        perspective: 1000px;
        position: relative;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card.flipped .flip-card-inner {
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

    #card-element {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: #fff;
        margin-bottom: 10px;
    }

    .btn-success {
        width: 100%;
        padding: 10px;
        font-size: 0.9rem;
    }

    .btn-success:disabled {
        background-color: #6c757d;
        border-color: #6c757d;
        cursor: not-allowed;
    }

    .mb-3 {
        margin-bottom: 0.75rem !important;
    }

    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.25rem;
    }

    .form-control, .form-select {
        font-size: 0.9rem;
        padding: 8px;
    }

    .flip-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 123, 255, 0.8);
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 3;
        font-size: 0.9rem;
    }

    .flip-card:hover .flip-btn,
    .flip-card.touched .flip-btn {
        opacity: 1;
    }

    .flip-btn:hover {
        background-color: rgba(0, 123, 255, 1);
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Sponsors</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row\">
        {% for sponsor in sponsors %}
            {% set pack = sponsor.pack|lower %}
            <div class=\"col-md-6 col-lg-4 mb-4 wow fadeInUp\" data-wow-delay=\"{{ 0.2 + loop.index0 * 0.2 }}s\">
                <div class=\"flip-card\" data-id=\"flip-{{ sponsor.Id_sponsor }}\">
                    <button class=\"flip-btn\" title=\"Flip Card\">
                        <i class=\"fa fa-sync-alt\"></i>
                    </button>
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

                                <!-- Payment Form -->
                                <form id=\"checkout-form-{{ sponsor.Id_sponsor }}\" method=\"post\" action=\"{{ path('sponsor_stripe_charge', {'id': sponsor.Id_sponsor}) }}\">
                                    <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id-{{ sponsor.Id_sponsor }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('stripe_payment_' ~ sponsor.Id_sponsor) }}\">
                                    <input type=\"hidden\" name=\"customerName\" value=\"{{ sponsor.nom }}\">

                                    <!-- Contract Selection -->
                                    <div class=\"mb-3\">
                                        <label for=\"contract-{{ sponsor.Id_sponsor }}\" class=\"form-label\">Sélectionner un Contrat</label>
                                        <select id=\"contract-{{ sponsor.Id_sponsor }}\" name=\"contractId\" class=\"form-select\" required>
                                            <option value=\"\" disabled selected>Choisir un contrat</option>
                                            {% for contract in sponsor.contrats %}
                                                <option value=\"{{ contract.Id_Contrat }}\">{{ contract.Titre }} ({{ contract.Montant|number_format(2, '.', ',') }} \$)</option>
                                            {% endfor %}
                                        </select>
                                    </div>

                                    <!-- Card Element -->
                                    <label for=\"card-element-{{ sponsor.Id_sponsor }}\" class=\"form-label\">Détails de la Carte</label>
                                    <div id=\"card-element-{{ sponsor.Id_sponsor }}\" class=\"form-control\"></div>

                                    <!-- Pay Button -->
                                    <button 
                                        id=\"pay-btn-{{ sponsor.Id_sponsor }}\"
                                        class=\"btn btn-success mt-2\"
                                        type=\"button\"
                                        onclick=\"createToken({{ sponsor.Id_sponsor }})\"
                                        {% if not sponsor.contrats|length %}disabled{% endif %}
                                    >
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
    document.addEventListener('DOMContentLoaded', () => {
        const stripe = Stripe(\"{{ stripe_public_key }}\");
        const elements = stripe.elements();

        // Object to store card elements for each sponsor
        const cardElements = {};

        // Initialize Stripe card elements for each sponsor
        {% for sponsor in sponsors %}
            try {
                console.log(`Initializing card element for sponsor \${ {{ sponsor.Id_sponsor }} }`);
                const cardElement = elements.create('card', {
                    style: {
                        base: {
                            fontSize: '14px',
                            color: '#32325d',
                            '::placeholder': { color: '#aab7c4' },
                        },
                        invalid: { color: '#fa755a' },
                    },
                });
                const cardElementContainer = document.getElementById('card-element-{{ sponsor.Id_sponsor }}');
                if (!cardElementContainer) {
                    throw new Error(`Card element container not found for sponsor \${ {{ sponsor.Id_sponsor }} }`);
                }
                cardElement.mount('#card-element-{{ sponsor.Id_sponsor }}');
                cardElements[{{ sponsor.Id_sponsor }}] = cardElement;
                console.log(`Card element mounted for sponsor \${ {{ sponsor.Id_sponsor }} }`);
            } catch (error) {
                console.error(`Error initializing card element for sponsor \${ {{ sponsor.Id_sponsor }} }:`, error.message);
            }
        {% endfor %}

        // Function to create token and submit form
        window.createToken = function(sponsorId) {
            try {
                console.log(`Creating token for sponsor \${sponsorId}`);
                const payBtn = document.getElementById(`pay-btn-\${sponsorId}`);
                const form = document.getElementById(`checkout-form-\${sponsorId}`);
                const contractSelect = document.getElementById(`contract-\${sponsorId}`);

                if (!payBtn || !form || !contractSelect) {
                    throw new Error(`Form elements not found for sponsor \${sponsorId}`);
                }

                if (!contractSelect.value) {
                    alert('Veuillez sélectionner un contrat.');
                    return;
                }

                const cardElement = cardElements[sponsorId];
                if (!cardElement) {
                    throw new Error(`Card element not found for sponsor \${sponsorId}`);
                }

                payBtn.disabled = true;

                stripe.createToken(cardElement).then(function(result) {
                    if (result.error) {
                        payBtn.disabled = false;
                        alert(result.error.message);
                    } else if (result.token) {
                        document.getElementById(`stripe-token-id-\${sponsorId}`).value = result.token.id;
                        form.submit();
                    }
                }).catch(function(error) {
                    payBtn.disabled = false;
                    console.error(`Error creating token for sponsor \${sponsorId}:`, error.message);
                    alert('Une erreur est survenue : ' + error.message);
                });
            } catch (error) {
                console.error(`Error in createToken for sponsor \${sponsorId}:`, error.message);
                alert('Une erreur est survenue lors de la soumission du paiement.');
            }
        };

        // Handle card flipping with flip button
        document.querySelectorAll('.flip-card').forEach(card => {
            const flipBtn = card.querySelector('.flip-btn');

            card.addEventListener('mouseenter', () => {
                flipBtn.style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => {
                if (!card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '0';
                }
            });

            card.addEventListener('touchstart', () => {
                card.classList.add('touched');
            });

            flipBtn.addEventListener('click', () => {
                card.classList.toggle('flipped');
                if (card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '1';
                }
            });
        });

        // Initialize WOW.js for animations
        new WOW().init();
    });
</script>
{% endblock %}", "sponsor/sponsor_front.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\sponsor_front.html.twig");
    }
}
