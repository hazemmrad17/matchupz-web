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

    /* Sponsor image carousel styles */
    .sponsor-image-carousel {
        padding: 20px 0;
    }

    .sponsor-image-carousel .owl-item {
        padding: 15px;
        display: flex;
        justify-content: center;
    }

    .sponsor-image-carousel .sponsor-img {
        text-align: center;
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sponsor-image-carousel .sponsor-img img {
        width: 250px;
        height: 200px;
        object-fit: contain;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .sponsor-image-carousel .sponsor-img img:hover {
        transform: scale(1.05);
    }

    /* Vue.js credit card form styles */
    .wrapper {
        display: flex;
        padding: 20px 15px;
    }

    .card-form {
        max-width: 570px;
        margin: auto;
        width: 100%;
    }

    .card-form__inner {
        background: #fff;
        box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
        border-radius: 10px;
        padding: 35px;
        padding-top: 180px;
    }

    .card-form__row {
        display: flex;
        align-items: flex-start;
    }

    .card-form__col {
        flex: auto;
        margin-right: 35px;
    }

    .card-form__col:last-child {
        margin-right: 0;
    }

    .card-form__col.-cvv {
        max-width: 150px;
    }

    .card-form__group {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .card-form__group .card-input__input {
        flex: 1;
        margin-right: 15px;
    }

    .card-form__group .card-input__input:last-child {
        margin-right: 0;
    }

    .card-form__button {
        width: 100%;
        height: 55px;
        background: #2364d2;
        border: none;
        border-radius: 5px;
        font-size: 22px;
        font-weight: 500;
        font-family: \"Source Sans Pro\", sans-serif;
        box-shadow: 3px 10px 20px 0px rgba(35, 100, 210, 0.3);
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }

    .card-item {
        max-width: 430px;
        height: 270px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;
        width: 100%;
    }

    .card-item.-active .card-item__side.-front {
        transform: perspective(1000px) rotateY(180deg) rotateX(0deg) rotateZ(0deg);
    }

    .card-item.-active .card-item__side.-back {
        transform: perspective(1000px) rotateY(0) rotateX(0deg) rotateZ(0deg);
    }

    .card-item__focus {
        position: absolute;
        z-index: 3;
        border-radius: 5px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transition: all 0.35s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        opacity: 0;
        pointer-events: none;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.65);
    }

    .card-item__focus.-active {
        opacity: 1;
    }

    .card-item__side {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 60px 0 rgba(14, 42, 90, 0.55);
        transform: perspective(2000px) rotateY(0deg) rotateX(0deg) rotate(0deg);
        transform-style: preserve-3d;
        transition: all 0.8s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        backface-visibility: hidden;
        height: 100%;
    }

    .card-item__side.-back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        transform: perspective(2000px) rotateY(-180deg) rotateX(0deg) rotate(0deg);
        z-index: 2;
        padding: 0;
        height: 100%;
    }

    .card-item__side.-back .card-item__cover {
        transform: rotateY(-180deg);
    }

    .card-item__bg {
        max-width: 100%;
        display: block;
        max-height: 100%;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .card-item__cover {
        height: 100%;
        background-color: #1c1d27;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        border-radius: 15px;
        overflow: hidden;
    }

    .card-item__cover:after {
        content: \"\";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(6, 2, 29, 0.45);
    }

    .card-item__top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 40px;
        padding: 0 10px;
    }

    .card-item__chip {
        width: 60px;
    }

    .card-item__type {
        height: 45px;
        position: relative;
        display: flex;
        justify-content: flex-end;
        max-width: 100px;
        margin-left: auto;
        width: 100%;
    }

    .card-item__typeImg {
        max-width: 100%;
        object-fit: contain;
        max-height: 100%;
        object-position: top right;
    }

    .card-item__info {
        color: #fff;
        width: 100%;
        max-width: calc(100% - 85px);
        padding: 10px 15px;
        font-weight: 500;
        display: block;
        cursor: pointer;
    }

    .card-item__holder {
        opacity: 0.7;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .card-item__wrapper {
        font-family: \"Source Code Pro\", monospace;
        padding: 25px 15px;
        position: relative;
        z-index: 4;
        height: 100%;
        text-shadow: 7px 6px 10px rgba(14, 42, 90, 0.8);
        user-select: none;
    }

    .card-item__name {
        font-size: 18px;
        line-height: 1;
        white-space: nowrap;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }

    .card-item__nameItem {
        display: inline-block;
        min-width: 8px;
        position: relative;
    }

    .card-item__number {
        font-weight: 500;
        line-height: 1;
        color: #fff;
        font-size: 27px;
        margin-bottom: 35px;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }

    .card-item__numberItem {
        width: 16px;
        display: inline-block;
    }

    .card-item__numberItem.-active {
        width: 30px;
    }

    .card-item__content {
        color: #fff;
        display: flex;
        align-items: flex-start;
    }

    .card-item__date {
        flex-wrap: wrap;
        font-size: 18px;
        margin-left: auto;
        padding: 10px;
        display: inline-flex;
        width: 80px;
        white-space: nowrap;
        flex-shrink: 0;
        cursor: pointer;
    }

    .card-item__dateItem {
        position: relative;
    }

    .card-item__dateItem span {
        width: 22px;
        display: inline-block;
    }

    .card-item__dateTitle {
        opacity: 0.7;
        font-size: 13px;
        padding-bottom: 6px;
        width: 100%;
    }

    .card-item__band {
        background: rgba(0, 0, 19, 0.8);
        width: 100%;
        height: 50px;
        margin-top: 30px;
        position: relative;
        z-index: 2;
    }

    .card-item__cvv {
        text-align: right;
        position: relative;
        z-index: 2;
        padding: 15px;
    }

    .card-item__cvv .card-item__type {
        opacity: 0.7;
    }

    .card-item__cvvTitle {
        padding-right: 10px;
        font-size: 15px;
        font-weight: 500;
        color: #fff;
        margin-bottom: 5px;
    }

    .card-item__cvvBand {
        height: 45px;
        background: #fff;
        margin-bottom: 30px;
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 10px;
        color: #1a3b5d;
        font-size: 18px;
        border-radius: 4px;
        box-shadow: 0px 10px 20px -7px rgba(32, 56, 117, 0.35);
    }

    .card-list {
        margin-bottom: -130px;
    }

    .card-input {
        margin-bottom: 20px;
    }

    .card-input__label {
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 500;
        color: #1a3b5d;
        width: 100%;
        display: block;
        user-select: none;
    }

    .card-input__input {
        width: 100%;
        height: 50px;
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ced6e0;
        transition: all 0.3s ease-in-out;
        font-size: 18px;
        padding: 5px 15px;
        background: none;
        color: #1a3b5d;
        font-family: \"Source Sans Pro\", sans-serif;
    }

    .card-input__input:hover,
    .card-input__input:focus {
        border-color: #3d9cff;
    }

    .card-input__input:focus {
        box-shadow: 0px 10px 20px -13px rgba(32, 56, 117, 0.35);
    }

    .card-input__input.-select {
        -webkit-appearance: none;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUxJREFUeNrM1sEJwkAQBdCsngXPHsQO9O5FS7AAMVYgdqAd2IGCDWgFnryLFQiCZ8EGnJUNimiyM/tnk4HNEAg/8y6ZmMRVqz9eUJvRaSbvutCZ347bXVJy/ZnvTmdJ862Me+hAbZCTs6GHpyUi1tTSvPnqTpoWZPUa7W7ncT3vK4h4zVejy8QzM3WhVUO8ykI6jOxoGA4ig3BLHcNFSCGqGAkig2yqgpEiMsjSfY9LxYQg7L6r0X6wS29YJiYQYecemY+wHrXD1+bklGhpAhBDeu/JfIVGxaAQ9sb8CI+CQSJ+QmJg0Ii/EE2MBiIXooHRQhRCkBhNhBcEhLkwf05ZCG8ICCOpk0MULmvDSY2M8UawIRExLIQIEgHDRoghihgRIgiigBEjgiFATBACAgFgghEwSAAGgoBCBBgYAg5hYKAIFYgHBo6w9RRgAFfy160QuV8NAAAAAElFTkSuQmCC');
        background-size: 12px;
        background-position: 90% center;
        background-repeat: no-repeat;
        padding-right: 30px;
    }

    .slide-fade-up-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-up-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-up-enter {
        opacity: 0;
        transform: translateY(15px);
        pointer-events: none;
    }

    .slide-fade-up-leave-to {
        opacity: 0;
        transform: translateY(-15px);
        pointer-events: none;
    }

    .slide-fade-right-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-right-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-right-enter {
        opacity: 0;
        transform: translateX(10px) rotate(45deg);
        pointer-events: none;
    }

    .slide-fade-right-leave-to {
        opacity: 0;
        transform: translateX(-10px) rotate(45deg);
        pointer-events: none;
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
    <h2 class=\"sponsor-title wow fadeInUp\" data-wow-delay=\"0.2s\">Nos Partenaires</h2>

    <!-- START: Sponsor Image Carousel Section -->
    <div class=\"sponsor-image-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
        ";
        // line 673
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 673, $this->source); })()));
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
            // line 674
            yield "            <div class=\"sponsor-img wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 674) * 0.2)), "html", null, true);
            yield "s\">
                <img src=\"";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/sponsor_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorPicture", [], "any", false, false, false, 675))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 675), "html", null, true);
            yield "\">
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
        // line 677
        if (!$context['_iterated']) {
            // line 678
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune image de sponsor trouvée.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 682
        yield "    </div>
    <!-- END: Sponsor Image Carousel Section -->

    <!-- START: Sponsor Cards Section -->
    <div class=\"row\">
        ";
        // line 687
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 687, $this->source); })()));
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
            // line 688
            yield "            ";
            $context["pack"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 688));
            // line 689
            yield "            <div class=\"col-md-6 col-lg-4 mb-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 689) * 0.2)), "html", null, true);
            yield "s\">
                <div class=\"flip-card\" data-id=\"flip-";
            // line 690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 690), "html", null, true);
            yield "\">
                    <button class=\"flip-btn\" title=\"Flip Card\">
                        <i class=\"fa fa-sync-alt\"></i>
                    </button>
                    <div class=\"flip-card-inner\">
                        <div class=\"flip-card-front sponsor-card 
                            ";
            // line 696
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 696, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 697
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 697, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 698
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 698, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 699
            yield "\">

                            ";
            // line 701
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 701, $this->source); })()) == "gold")) {
                // line 702
                yield "                                <div class=\"floating-stars\">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                            ";
            }
            // line 709
            yield "
                            <div class=\"sponsor-content\">
                                <div class=\"blog-comment d-flex justify-content-between py-1 px-2 mb-2\">
                                    <div class=\"small\">
                                        <span class=\"fa fa-user text-primary me-2\"></span> ";
            // line 713
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 713), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"small\">
                                        <span class=\"fa fa-box text-primary me-2\"></span> ";
            // line 716
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 716), "html", null, true);
            yield "
                                    </div>
                                </div>

                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-handshake fa-lg text-primary me-2\"></i>
                                    <a href=\"#\" class=\"h5 d-inline-block mb-0\">";
            // line 722
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 722), "html", null, true);
            yield "</a>
                                </div>

                                <p class=\"mb-2\" style=\"font-size: 0.9rem;\"><strong>Contact:</strong> ";
            // line 725
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 725), "html", null, true);
            yield "</p>

                                <!-- Payment Form -->
                                <form id=\"checkout-form-";
            // line 728
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 728), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_stripe_charge", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 728)]), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"stripeToken\" id=\"stripe-token-id-";
            // line 729
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 729), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 730
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("stripe_payment_" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 730))), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"customerName\" id=\"customer-name-";
            // line 731
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 731), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 731), "html", null, true);
            yield "\">

                                    <!-- Contract Selection -->
                                    <div class=\"mb-3\">
                                        <label for=\"contract-";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 735), "html", null, true);
            yield "\" class=\"form-label\">Sélectionner un Contrat</label>
                                        <select id=\"contract-";
            // line 736
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 736), "html", null, true);
            yield "\" name=\"contractId\" class=\"form-select\" required>
                                            <option value=\"\" disabled selected>Choisir un contrat</option>
                                            ";
            // line 738
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contrats", [], "any", false, false, false, 738));
            foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
                // line 739
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Id_Contrat", [], "any", false, false, false, 739), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Titre", [], "any", false, false, false, 739), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Montant", [], "any", false, false, false, 739), 2, ".", ","), "html", null, true);
                yield " \$)</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 741
            yield "                                        </select>
                                    </div>

                                    <!-- Pay Button to Open Modal -->
                                    <button 
                                        type=\"button\"
                                        class=\"btn btn-success mt-2\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#paymentModal\"
                                        onclick=\"openPaymentModal(";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "Id_sponsor", [], "any", false, false, false, 750), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 750), "html", null, true);
            yield "')\"
                                        ";
            // line 751
            if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contrats", [], "any", false, false, false, 751))) {
                yield "disabled";
            }
            // line 752
            yield "                                    >
                                        <i class=\"fa fa-credit-card me-1\"></i> Payer
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"flip-card-back 
                            ";
            // line 760
            if (((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 760, $this->source); })()) == "gold")) {
                yield "sponsor-border-gold
                            ";
            } elseif ((            // line 761
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 761, $this->source); })()) == "silver")) {
                yield "sponsor-border-silver
                            ";
            } elseif ((            // line 762
(isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 762, $this->source); })()) == "bronze")) {
                yield "sponsor-border-bronze
                            ";
            }
            // line 763
            yield "\">
                            <p style=\"font-size: 0.95rem;\">Merci à ";
            // line 764
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 764), "html", null, true);
            yield " pour leur soutien précieux en tant que sponsor ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 764)), "html", null, true);
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
        // line 769
        if (!$context['_iterated']) {
            // line 770
            yield "            <div class=\"text-center\">
                <p>Aucun sponsor trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        yield "    </div>
    <!-- END: Sponsor Cards Section -->

    <!-- Payment Modal -->
    <div class=\"modal fade\" id=\"paymentModal\" tabindex=\"-1\" aria-labelledby=\"paymentModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"paymentModalLabel\">Paiement par Carte</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 944
        yield "
                    <div class=\"wrapper\" id=\"app\">
                        <div class=\"card-form\">
                            <div class=\"card-list\">
                                <div class=\"card-item\" v-bind:class=\"{ '-active' : isCardFlipped }\">
                                    <div class=\"card-item__side -front\">
                                        <div class=\"card-item__focus\" v-bind:class=\"{'-active' : focusElementStyle }\" v-bind:style=\"focusElementStyle\" ref=\"focusElement\"></div>
                                        <div class=\"card-item__cover\">
                                            <img
                                                v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'\"
                                                class=\"card-item__bg\">
                                        </div>
                                        <div class=\"card-item__wrapper\">
                                            <div class=\"card-item__top\">
                                                <img src=\"https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png\" class=\"card-item__chip\">
                                                <div class=\"card-item__type\">
                                                    <transition name=\"slide-fade-up\">
                                                        <img
                                                            v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'\"
                                                            v-if=\"getCardType\"
                                                            v-bind:key=\"getCardType\"
                                                            alt=\"\"
                                                            class=\"card-item__typeImg\">
                                                    </transition>
                                                </div>
                                            </div>
                                            <label for=\"card-element\" class=\"card-item__number\" ref=\"cardNumber\">
                                                <template v-if=\"getCardType === 'amex'\">
                                                    <span v-for=\"(n, \$index) in amexCardMask\" :key=\"\$index\">
                                                        <transition name=\"slide-fade-up\">
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                v-if=\"\$index > 4 && \$index < 14 && cardNumber.length > \$index && n.trim() !== ''\"
                                                            >*</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                :key=\"\$index\"
                                                                v-else-if=\"cardNumber.length > \$index\"
                                                            >{{cardNumber[\$index]}}</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                v-else
                                                                :key=\"\$index + 1\"
                                                            >{{n}}</div>
                                                        </transition>
                                                    </span>
                                                </template>
                                                <template v-else>
                                                    <span v-for=\"(n, \$index) in otherCardMask\" :key=\"\$index\">
                                                        <transition name=\"slide-fade-up\">
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                v-if=\"\$index > 4 && \$index < 15 && cardNumber.length > \$index && n.trim() !== ''\"
                                                            >*</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                :key=\"\$index\"
                                                                v-else-if=\"cardNumber.length > \$index\"
                                                            >{{cardNumber[\$index]}}</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                v-else
                                                                :key=\"\$index + 1\"
                                                            >{{n}}</div>
                                                        </transition>
                                                    </span>
                                                </template>
                                            </label>
                                            <div class=\"card-item__content\">
                                                <label for=\"cardName\" class=\"card-item__info\" ref=\"cardName\">
                                                    <div class=\"card-item__holder\">Card Holder</div>
                                                    <transition name=\"slide-fade-up\">
                                                        <div class=\"card-item__name\" v-if=\"cardName.length\" key=\"1\">
                                                            <transition-group name=\"slide-fade-right\">
                                                                <span
                                                                    class=\"card-item__nameItem\"
                                                                    v-for=\"(n, \$index) in cardName.replace(/\\s\\s+/g, ' ')\"
                                                                    v-if=\"\$index === \$index\"
                                                                    v-bind:key=\"\$index + 1\"
                                                                >{{n}}</span>
                                                            </transition-group>
                                                        </div>
                                                        <div class=\"card-item__name\" v-else key=\"2\">Full Name</div>
                                                    </transition>
                                                </label>
                                                <div class=\"card-item__date\" ref=\"cardDate\">
                                                    <label for=\"cardMonth\" class=\"card-item__dateTitle\">Expires</label>
                                                    <label for=\"cardMonth\" class=\"card-item__dateItem\">
                                                        <transition name=\"slide-fade-up\">
                                                            <span v-if=\"cardMonth\" v-bind:key=\"cardMonth\">{{cardMonth}}</span>
                                                            <span v-else key=\"2\">MM</span>
                                                        </transition>
                                                    </label>
                                                    /
                                                    <label for=\"cardYear\" class=\"card-item__dateItem\">
                                                        <transition name=\"slide-fade-up\">
                                                            <span v-if=\"cardYear\" v-bind:key=\"cardYear\">{{String(cardYear).slice(2,4)}}</span>
                                                            <span v-else key=\"2\">YY</span>
                                                        </transition>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card-item__side -back\">
                                        <div class=\"card-item__cover\">
                                            <img
                                                v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'\"
                                                class=\"card-item__bg\">
                                        </div>
                                        <div class=\"card-item__band\"></div>
                                        <div class=\"card-item__cvv\">
                                            <div class=\"card-item__cvvTitle\">CVV</div>
                                            <div class=\"card-item__cvvBand\">
                                                <span v-for=\"(n, \$index) in cardCvv\" :key=\"\$index\">*</span>
                                            </div>
                                            <div class=\"card-item__type\">
                                                <img
                                                    v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'\"
                                                    v-if=\"getCardType\"
                                                    class=\"card-item__typeImg\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-form__inner\">
                                <div class=\"card-input\">
                                    <label for=\"cardName\" class=\"card-input__label\">Card Holder</label>
                                    <input
                                        type=\"text\"
                                        id=\"cardName\"
                                        class=\"card-input__input\"
                                        v-model=\"cardName\"
                                        v-on:focus=\"focusInput\"
                                        v-on:blur=\"blurInput\"
                                        data-ref=\"cardName\"
                                        autocomplete=\"off\">
                                </div>
                                <div class=\"card-input\">
                                    <label for=\"card-element\" class=\"card-input__label\">Card Details</label>
                                    <div id=\"card-element\" class=\"card-input__input\"></div>
                                </div>
                                <button
                                    class=\"card-form__button\"
                                    type=\"button\"
                                    :disabled=\"isProcessing\"
                                    @click=\"submitPayment\"
                                >
                                    {{ isProcessing ? 'Processing...' : 'Submit' }}
                                </button>
                            </div>
                        </div>
                    </div>
                    ";
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>
<script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue-the-mask@0.11.1/dist/vue-the-mask.min.js\"></script>
<script>
    Vue.use(VueTheMask);

    let currentSponsorId = null;
    let currentSponsorName = '';

    // Initialize Stripe
    const stripe = Stripe(\"";
        // line 966
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 966, $this->source); })()), "html", null, true);
        yield "\");
    const elements = stripe.elements();
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontSize: '18px',
                color: '#1a3b5d',
                '::placeholder': { color: '#aab7c4' },
            },
            invalid: { color: '#fa755a' },
        },
    });

    // Vue App
    new Vue({
        el: \"#app\",
        data() {
            return {
                currentCardBackground: Math.floor(Math.random() * 25 + 1),
                cardName: \"\",
                cardNumber: \"\",
                cardMonth: \"\",
                cardYear: \"\",
                cardCvv: \"\",
                minCardYear: new Date().getFullYear(),
                amexCardMask: \"#### ###### #####\",
                otherCardMask: \"#### #### #### ####\",
                cardNumberTemp: \"\",
                isCardFlipped: false,
                focusElementStyle: null,
                isInputFocused: false,
                isProcessing: false,
            };
        },
        mounted() {
            this.cardNumberTemp = this.otherCardMask;
            cardElement.mount('#card-element');
        },
        computed: {
            getCardType() {
                let number = this.cardNumber;
                let re = new RegExp(\"^4\");
                if (number.match(re) != null) return \"visa\";
                re = new RegExp(\"^(34|37)\");
                if (number.match(re) != null) return \"amex\";
                re = new RegExp(\"^5[1-5]\");
                if (number.match(re) != null) return \"mastercard\";
                re = new RegExp(\"^6011\");
                if (number.match(re) != null) return \"discover\";
                re = new RegExp('^9792');
                if (number.match(re) != null) return \"troy\";
                return \"visa\";
            },
            generateCardNumberMask() {
                return this.getCardType === \"amex\" ? this.amexCardMask : this.otherCardMask;
            },
            minCardMonth() {
                if (this.cardYear === this.minCardYear) return new Date().getMonth() + 1;
                return 1;
            },
        },
        watch: {
            cardYear() {
                if (this.cardMonth < this.minCardMonth) {
                    this.cardMonth = \"\";
                }
            },
        },
        methods: {
            flipCard(status) {
                this.isCardFlipped = status;
            },
            focusInput(e) {
                this.isInputFocused = true;
                let targetRef = e.target.dataset.ref;
                let target = this.\$refs[targetRef];
                this.focusElementStyle = {
                    width: `\${target.offsetWidth}px`,
                    height: `\${target.offsetHeight}px`,
                    transform: `translateX(\${target.offsetLeft}px) translateY(\${target.offsetTop}px)`,
                };
            },
            blurInput() {
                let vm = this;
                setTimeout(() => {
                    if (!vm.isInputFocused) {
                        vm.focusElementStyle = null;
                    }
                }, 300);
                vm.isInputFocused = false;
            },
            async submitPayment() {
                if (!currentSponsorId) {
                    alert('No sponsor selected.');
                    return;
                }

                const contractSelect = document.getElementById(`contract-\${currentSponsorId}`);
                if (!contractSelect || !contractSelect.value) {
                    alert('Veuillez sélectionner un contrat.');
                    return;
                }

                this.isProcessing = true;

                try {
                    const { token, error } = await stripe.createToken(cardElement, {
                        name: this.cardName,
                    });

                    if (error) {
                        alert(error.message);
                        this.isProcessing = false;
                        return;
                    }

                    const form = document.getElementById(`checkout-form-\${currentSponsorId}`);
                    const tokenInput = document.getElementById(`stripe-token-id-\${currentSponsorId}`);
                    const nameInput = document.getElementById(`customer-name-\${currentSponsorId}`);

                    if (!form || !tokenInput || !nameInput) {
                        throw new Error('Form elements not found.');
                    }

                    tokenInput.value = token.id;
                    nameInput.value = this.cardName || currentSponsorName;
                    form.submit();
                } catch (error) {
                    console.error('Payment error:', error.message);
                    alert('Une erreur est survenue lors du paiement.');
                    this.isProcessing = false;
                }
            },
        },
    });

    // Open payment modal and set sponsor data
    function openPaymentModal(sponsorId, sponsorName) {
        currentSponsorId = sponsorId;
        currentSponsorName = sponsorName;
        cardElement.clear();
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Owl Carousel
        const owl = \$(\".sponsor-image-carousel\").owlCarousel({
            items: 4,
            margin: 30,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            dots: true,
            nav: false,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                768: { items: 3 },
                992: { items: 4 },
            },
        });

        // Handle card flipping and carousel pausing
        document.querySelectorAll('.flip-card').forEach(card => {
            const flipBtn = card.querySelector('.flip-btn');
            const form = card.querySelector('form');
            const select = card.querySelector('select');
            const payBtn = card.querySelector('.btn-success');

            // Show flip button on hover
            card.addEventListener('mouseenter', () => {
                flipBtn.style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => {
                if (!card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '0';
                }
            });

            // Show flip button on touch
            card.addEventListener('touchstart', () => {
                card.classList.add('touched');
            });

            // Handle flip button click
            flipBtn.addEventListener('click', () => {
                card.classList.toggle('flipped');
                if (card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '1';
                }
            });

            // Pause carousel when interacting
            const pauseCarousel = () => {
                owl.trigger('stop.owl.autoplay');
                console.log('Carousel paused');
            };

            // Resume carousel
            const resumeCarousel = () => {
                owl.trigger('play.owl.autoplay');
                console.log('Carousel resumed');
            };

            // Pause on card click
            card.addEventListener('click', (e) => {
                if (e.target === flipBtn || flipBtn.contains(e.target)) {
                    return;
                }
                pauseCarousel();
            });

            // Pause on form element focus
            if (select) {
                select.addEventListener('focus', pauseCarousel);
            }
            if (payBtn) {
                payBtn.addEventListener('click', pauseCarousel);
            }

            // Resume on modal close
            document.getElementById('paymentModal').addEventListener('hidden.bs.modal', () => {
                resumeCarousel();
                currentSponsorId = null;
                currentSponsorName = '';
            });

            // Resume when clicking outside
            document.addEventListener('click', (e) => {
                if (!card.contains(e.target) && !card.classList.contains('flipped') && !document.getElementById('paymentModal').contains(e.target)) {
                    resumeCarousel();
                }
            });

            // Resume on form element blur
            if (form) {
                form.querySelectorAll('select').forEach(element => {
                    element.addEventListener('blur', () => {
                        setTimeout(() => {
                            if (!form.contains(document.activeElement) && !document.getElementById('paymentModal').contains(document.activeElement)) {
                                resumeCarousel();
                            }
                        }, 100);
                    });
                });
            }
        });

        // Initialize WOW.js
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
        return array (  1250 => 966,  1067 => 944,  1053 => 774,  1044 => 770,  1042 => 769,  1022 => 764,  1019 => 763,  1014 => 762,  1010 => 761,  1006 => 760,  996 => 752,  992 => 751,  986 => 750,  975 => 741,  962 => 739,  958 => 738,  953 => 736,  949 => 735,  940 => 731,  936 => 730,  932 => 729,  926 => 728,  920 => 725,  914 => 722,  905 => 716,  899 => 713,  893 => 709,  884 => 702,  882 => 701,  878 => 699,  873 => 698,  869 => 697,  865 => 696,  856 => 690,  851 => 689,  848 => 688,  830 => 687,  823 => 682,  814 => 678,  812 => 677,  795 => 675,  790 => 674,  772 => 673,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    /* Sponsor image carousel styles */
    .sponsor-image-carousel {
        padding: 20px 0;
    }

    .sponsor-image-carousel .owl-item {
        padding: 15px;
        display: flex;
        justify-content: center;
    }

    .sponsor-image-carousel .sponsor-img {
        text-align: center;
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sponsor-image-carousel .sponsor-img img {
        width: 250px;
        height: 200px;
        object-fit: contain;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .sponsor-image-carousel .sponsor-img img:hover {
        transform: scale(1.05);
    }

    /* Vue.js credit card form styles */
    .wrapper {
        display: flex;
        padding: 20px 15px;
    }

    .card-form {
        max-width: 570px;
        margin: auto;
        width: 100%;
    }

    .card-form__inner {
        background: #fff;
        box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
        border-radius: 10px;
        padding: 35px;
        padding-top: 180px;
    }

    .card-form__row {
        display: flex;
        align-items: flex-start;
    }

    .card-form__col {
        flex: auto;
        margin-right: 35px;
    }

    .card-form__col:last-child {
        margin-right: 0;
    }

    .card-form__col.-cvv {
        max-width: 150px;
    }

    .card-form__group {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .card-form__group .card-input__input {
        flex: 1;
        margin-right: 15px;
    }

    .card-form__group .card-input__input:last-child {
        margin-right: 0;
    }

    .card-form__button {
        width: 100%;
        height: 55px;
        background: #2364d2;
        border: none;
        border-radius: 5px;
        font-size: 22px;
        font-weight: 500;
        font-family: \"Source Sans Pro\", sans-serif;
        box-shadow: 3px 10px 20px 0px rgba(35, 100, 210, 0.3);
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }

    .card-item {
        max-width: 430px;
        height: 270px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;
        width: 100%;
    }

    .card-item.-active .card-item__side.-front {
        transform: perspective(1000px) rotateY(180deg) rotateX(0deg) rotateZ(0deg);
    }

    .card-item.-active .card-item__side.-back {
        transform: perspective(1000px) rotateY(0) rotateX(0deg) rotateZ(0deg);
    }

    .card-item__focus {
        position: absolute;
        z-index: 3;
        border-radius: 5px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transition: all 0.35s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        opacity: 0;
        pointer-events: none;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.65);
    }

    .card-item__focus.-active {
        opacity: 1;
    }

    .card-item__side {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 60px 0 rgba(14, 42, 90, 0.55);
        transform: perspective(2000px) rotateY(0deg) rotateX(0deg) rotate(0deg);
        transform-style: preserve-3d;
        transition: all 0.8s cubic-bezier(0.71, 0.03, 0.56, 0.85);
        backface-visibility: hidden;
        height: 100%;
    }

    .card-item__side.-back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        transform: perspective(2000px) rotateY(-180deg) rotateX(0deg) rotate(0deg);
        z-index: 2;
        padding: 0;
        height: 100%;
    }

    .card-item__side.-back .card-item__cover {
        transform: rotateY(-180deg);
    }

    .card-item__bg {
        max-width: 100%;
        display: block;
        max-height: 100%;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .card-item__cover {
        height: 100%;
        background-color: #1c1d27;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        border-radius: 15px;
        overflow: hidden;
    }

    .card-item__cover:after {
        content: \"\";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(6, 2, 29, 0.45);
    }

    .card-item__top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 40px;
        padding: 0 10px;
    }

    .card-item__chip {
        width: 60px;
    }

    .card-item__type {
        height: 45px;
        position: relative;
        display: flex;
        justify-content: flex-end;
        max-width: 100px;
        margin-left: auto;
        width: 100%;
    }

    .card-item__typeImg {
        max-width: 100%;
        object-fit: contain;
        max-height: 100%;
        object-position: top right;
    }

    .card-item__info {
        color: #fff;
        width: 100%;
        max-width: calc(100% - 85px);
        padding: 10px 15px;
        font-weight: 500;
        display: block;
        cursor: pointer;
    }

    .card-item__holder {
        opacity: 0.7;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .card-item__wrapper {
        font-family: \"Source Code Pro\", monospace;
        padding: 25px 15px;
        position: relative;
        z-index: 4;
        height: 100%;
        text-shadow: 7px 6px 10px rgba(14, 42, 90, 0.8);
        user-select: none;
    }

    .card-item__name {
        font-size: 18px;
        line-height: 1;
        white-space: nowrap;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }

    .card-item__nameItem {
        display: inline-block;
        min-width: 8px;
        position: relative;
    }

    .card-item__number {
        font-weight: 500;
        line-height: 1;
        color: #fff;
        font-size: 27px;
        margin-bottom: 35px;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }

    .card-item__numberItem {
        width: 16px;
        display: inline-block;
    }

    .card-item__numberItem.-active {
        width: 30px;
    }

    .card-item__content {
        color: #fff;
        display: flex;
        align-items: flex-start;
    }

    .card-item__date {
        flex-wrap: wrap;
        font-size: 18px;
        margin-left: auto;
        padding: 10px;
        display: inline-flex;
        width: 80px;
        white-space: nowrap;
        flex-shrink: 0;
        cursor: pointer;
    }

    .card-item__dateItem {
        position: relative;
    }

    .card-item__dateItem span {
        width: 22px;
        display: inline-block;
    }

    .card-item__dateTitle {
        opacity: 0.7;
        font-size: 13px;
        padding-bottom: 6px;
        width: 100%;
    }

    .card-item__band {
        background: rgba(0, 0, 19, 0.8);
        width: 100%;
        height: 50px;
        margin-top: 30px;
        position: relative;
        z-index: 2;
    }

    .card-item__cvv {
        text-align: right;
        position: relative;
        z-index: 2;
        padding: 15px;
    }

    .card-item__cvv .card-item__type {
        opacity: 0.7;
    }

    .card-item__cvvTitle {
        padding-right: 10px;
        font-size: 15px;
        font-weight: 500;
        color: #fff;
        margin-bottom: 5px;
    }

    .card-item__cvvBand {
        height: 45px;
        background: #fff;
        margin-bottom: 30px;
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 10px;
        color: #1a3b5d;
        font-size: 18px;
        border-radius: 4px;
        box-shadow: 0px 10px 20px -7px rgba(32, 56, 117, 0.35);
    }

    .card-list {
        margin-bottom: -130px;
    }

    .card-input {
        margin-bottom: 20px;
    }

    .card-input__label {
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: 500;
        color: #1a3b5d;
        width: 100%;
        display: block;
        user-select: none;
    }

    .card-input__input {
        width: 100%;
        height: 50px;
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ced6e0;
        transition: all 0.3s ease-in-out;
        font-size: 18px;
        padding: 5px 15px;
        background: none;
        color: #1a3b5d;
        font-family: \"Source Sans Pro\", sans-serif;
    }

    .card-input__input:hover,
    .card-input__input:focus {
        border-color: #3d9cff;
    }

    .card-input__input:focus {
        box-shadow: 0px 10px 20px -13px rgba(32, 56, 117, 0.35);
    }

    .card-input__input.-select {
        -webkit-appearance: none;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUxJREFUeNrM1sEJwkAQBdCsngXPHsQO9O5FS7AAMVYgdqAd2IGCDWgFnryLFQiCZ8EGnJUNimiyM/tnk4HNEAg/8y6ZmMRVqz9eUJvRaSbvutCZ347bXVJy/ZnvTmdJ862Me+hAbZCTs6GHpyUi1tTSvPnqTpoWZPUa7W7ncT3vK4h4zVejy8QzM3WhVUO8ykI6jOxoGA4ig3BLHcNFSCGqGAkig2yqgpEiMsjSfY9LxYQg7L6r0X6wS29YJiYQYecemY+wHrXD1+bklGhpAhBDeu/JfIVGxaAQ9sb8CI+CQSJ+QmJg0Ii/EE2MBiIXooHRQhRCkBhNhBcEhLkwf05ZCG8ICCOpk0MULmvDSY2M8UawIRExLIQIEgHDRoghihgRIgiigBEjgiFATBACAgFgghEwSAAGgoBCBBgYAg5hYKAIFYgHBo6w9RRgAFfy160QuV8NAAAAAElFTkSuQmCC');
        background-size: 12px;
        background-position: 90% center;
        background-repeat: no-repeat;
        padding-right: 30px;
    }

    .slide-fade-up-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-up-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-up-enter {
        opacity: 0;
        transform: translateY(15px);
        pointer-events: none;
    }

    .slide-fade-up-leave-to {
        opacity: 0;
        transform: translateY(-15px);
        pointer-events: none;
    }

    .slide-fade-right-enter-active {
        transition: all 0.25s ease-in-out;
        transition-delay: 0.1s;
        position: relative;
    }

    .slide-fade-right-leave-active {
        transition: all 0.25s ease-in-out;
        position: absolute;
    }

    .slide-fade-right-enter {
        opacity: 0;
        transform: translateX(10px) rotate(45deg);
        pointer-events: none;
    }

    .slide-fade-right-leave-to {
        opacity: 0;
        transform: translateX(-10px) rotate(45deg);
        pointer-events: none;
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
    <h2 class=\"sponsor-title wow fadeInUp\" data-wow-delay=\"0.2s\">Nos Partenaires</h2>

    <!-- START: Sponsor Image Carousel Section -->
    <div class=\"sponsor-image-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
        {% for sponsor in sponsors %}
            <div class=\"sponsor-img wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                <img src=\"{{ asset('Uploads/sponsor_pictures/' ~ sponsor.sponsorPicture) }}\" class=\"img-fluid\" alt=\"{{ sponsor.nom }}\">
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune image de sponsor trouvée.</p>
            </div>
        {% endfor %}
    </div>
    <!-- END: Sponsor Image Carousel Section -->

    <!-- START: Sponsor Cards Section -->
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
                                    <input type=\"hidden\" name=\"customerName\" id=\"customer-name-{{ sponsor.Id_sponsor }}\" value=\"{{ sponsor.nom }}\">

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

                                    <!-- Pay Button to Open Modal -->
                                    <button 
                                        type=\"button\"
                                        class=\"btn btn-success mt-2\"
                                        data-bs-toggle=\"modal\"
                                        data-bs-target=\"#paymentModal\"
                                        onclick=\"openPaymentModal({{ sponsor.Id_sponsor }}, '{{ sponsor.nom }}')\"
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
    <!-- END: Sponsor Cards Section -->

    <!-- Payment Modal -->
    <div class=\"modal fade\" id=\"paymentModal\" tabindex=\"-1\" aria-labelledby=\"paymentModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"paymentModalLabel\">Paiement par Carte</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    {% verbatim %}
                    <div class=\"wrapper\" id=\"app\">
                        <div class=\"card-form\">
                            <div class=\"card-list\">
                                <div class=\"card-item\" v-bind:class=\"{ '-active' : isCardFlipped }\">
                                    <div class=\"card-item__side -front\">
                                        <div class=\"card-item__focus\" v-bind:class=\"{'-active' : focusElementStyle }\" v-bind:style=\"focusElementStyle\" ref=\"focusElement\"></div>
                                        <div class=\"card-item__cover\">
                                            <img
                                                v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'\"
                                                class=\"card-item__bg\">
                                        </div>
                                        <div class=\"card-item__wrapper\">
                                            <div class=\"card-item__top\">
                                                <img src=\"https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png\" class=\"card-item__chip\">
                                                <div class=\"card-item__type\">
                                                    <transition name=\"slide-fade-up\">
                                                        <img
                                                            v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'\"
                                                            v-if=\"getCardType\"
                                                            v-bind:key=\"getCardType\"
                                                            alt=\"\"
                                                            class=\"card-item__typeImg\">
                                                    </transition>
                                                </div>
                                            </div>
                                            <label for=\"card-element\" class=\"card-item__number\" ref=\"cardNumber\">
                                                <template v-if=\"getCardType === 'amex'\">
                                                    <span v-for=\"(n, \$index) in amexCardMask\" :key=\"\$index\">
                                                        <transition name=\"slide-fade-up\">
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                v-if=\"\$index > 4 && \$index < 14 && cardNumber.length > \$index && n.trim() !== ''\"
                                                            >*</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                :key=\"\$index\"
                                                                v-else-if=\"cardNumber.length > \$index\"
                                                            >{{cardNumber[\$index]}}</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                v-else
                                                                :key=\"\$index + 1\"
                                                            >{{n}}</div>
                                                        </transition>
                                                    </span>
                                                </template>
                                                <template v-else>
                                                    <span v-for=\"(n, \$index) in otherCardMask\" :key=\"\$index\">
                                                        <transition name=\"slide-fade-up\">
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                v-if=\"\$index > 4 && \$index < 15 && cardNumber.length > \$index && n.trim() !== ''\"
                                                            >*</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                :key=\"\$index\"
                                                                v-else-if=\"cardNumber.length > \$index\"
                                                            >{{cardNumber[\$index]}}</div>
                                                            <div
                                                                class=\"card-item__numberItem\"
                                                                :class=\"{ '-active' : n.trim() === '' }\"
                                                                v-else
                                                                :key=\"\$index + 1\"
                                                            >{{n}}</div>
                                                        </transition>
                                                    </span>
                                                </template>
                                            </label>
                                            <div class=\"card-item__content\">
                                                <label for=\"cardName\" class=\"card-item__info\" ref=\"cardName\">
                                                    <div class=\"card-item__holder\">Card Holder</div>
                                                    <transition name=\"slide-fade-up\">
                                                        <div class=\"card-item__name\" v-if=\"cardName.length\" key=\"1\">
                                                            <transition-group name=\"slide-fade-right\">
                                                                <span
                                                                    class=\"card-item__nameItem\"
                                                                    v-for=\"(n, \$index) in cardName.replace(/\\s\\s+/g, ' ')\"
                                                                    v-if=\"\$index === \$index\"
                                                                    v-bind:key=\"\$index + 1\"
                                                                >{{n}}</span>
                                                            </transition-group>
                                                        </div>
                                                        <div class=\"card-item__name\" v-else key=\"2\">Full Name</div>
                                                    </transition>
                                                </label>
                                                <div class=\"card-item__date\" ref=\"cardDate\">
                                                    <label for=\"cardMonth\" class=\"card-item__dateTitle\">Expires</label>
                                                    <label for=\"cardMonth\" class=\"card-item__dateItem\">
                                                        <transition name=\"slide-fade-up\">
                                                            <span v-if=\"cardMonth\" v-bind:key=\"cardMonth\">{{cardMonth}}</span>
                                                            <span v-else key=\"2\">MM</span>
                                                        </transition>
                                                    </label>
                                                    /
                                                    <label for=\"cardYear\" class=\"card-item__dateItem\">
                                                        <transition name=\"slide-fade-up\">
                                                            <span v-if=\"cardYear\" v-bind:key=\"cardYear\">{{String(cardYear).slice(2,4)}}</span>
                                                            <span v-else key=\"2\">YY</span>
                                                        </transition>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card-item__side -back\">
                                        <div class=\"card-item__cover\">
                                            <img
                                                v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'\"
                                                class=\"card-item__bg\">
                                        </div>
                                        <div class=\"card-item__band\"></div>
                                        <div class=\"card-item__cvv\">
                                            <div class=\"card-item__cvvTitle\">CVV</div>
                                            <div class=\"card-item__cvvBand\">
                                                <span v-for=\"(n, \$index) in cardCvv\" :key=\"\$index\">*</span>
                                            </div>
                                            <div class=\"card-item__type\">
                                                <img
                                                    v-bind:src=\"'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'\"
                                                    v-if=\"getCardType\"
                                                    class=\"card-item__typeImg\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-form__inner\">
                                <div class=\"card-input\">
                                    <label for=\"cardName\" class=\"card-input__label\">Card Holder</label>
                                    <input
                                        type=\"text\"
                                        id=\"cardName\"
                                        class=\"card-input__input\"
                                        v-model=\"cardName\"
                                        v-on:focus=\"focusInput\"
                                        v-on:blur=\"blurInput\"
                                        data-ref=\"cardName\"
                                        autocomplete=\"off\">
                                </div>
                                <div class=\"card-input\">
                                    <label for=\"card-element\" class=\"card-input__label\">Card Details</label>
                                    <div id=\"card-element\" class=\"card-input__input\"></div>
                                </div>
                                <button
                                    class=\"card-form__button\"
                                    type=\"button\"
                                    :disabled=\"isProcessing\"
                                    @click=\"submitPayment\"
                                >
                                    {{ isProcessing ? 'Processing...' : 'Submit' }}
                                </button>
                            </div>
                        </div>
                    </div>
                    {% endverbatim %}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>
<script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue-the-mask@0.11.1/dist/vue-the-mask.min.js\"></script>
<script>
    Vue.use(VueTheMask);

    let currentSponsorId = null;
    let currentSponsorName = '';

    // Initialize Stripe
    const stripe = Stripe(\"{{ stripe_public_key }}\");
    const elements = stripe.elements();
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontSize: '18px',
                color: '#1a3b5d',
                '::placeholder': { color: '#aab7c4' },
            },
            invalid: { color: '#fa755a' },
        },
    });

    // Vue App
    new Vue({
        el: \"#app\",
        data() {
            return {
                currentCardBackground: Math.floor(Math.random() * 25 + 1),
                cardName: \"\",
                cardNumber: \"\",
                cardMonth: \"\",
                cardYear: \"\",
                cardCvv: \"\",
                minCardYear: new Date().getFullYear(),
                amexCardMask: \"#### ###### #####\",
                otherCardMask: \"#### #### #### ####\",
                cardNumberTemp: \"\",
                isCardFlipped: false,
                focusElementStyle: null,
                isInputFocused: false,
                isProcessing: false,
            };
        },
        mounted() {
            this.cardNumberTemp = this.otherCardMask;
            cardElement.mount('#card-element');
        },
        computed: {
            getCardType() {
                let number = this.cardNumber;
                let re = new RegExp(\"^4\");
                if (number.match(re) != null) return \"visa\";
                re = new RegExp(\"^(34|37)\");
                if (number.match(re) != null) return \"amex\";
                re = new RegExp(\"^5[1-5]\");
                if (number.match(re) != null) return \"mastercard\";
                re = new RegExp(\"^6011\");
                if (number.match(re) != null) return \"discover\";
                re = new RegExp('^9792');
                if (number.match(re) != null) return \"troy\";
                return \"visa\";
            },
            generateCardNumberMask() {
                return this.getCardType === \"amex\" ? this.amexCardMask : this.otherCardMask;
            },
            minCardMonth() {
                if (this.cardYear === this.minCardYear) return new Date().getMonth() + 1;
                return 1;
            },
        },
        watch: {
            cardYear() {
                if (this.cardMonth < this.minCardMonth) {
                    this.cardMonth = \"\";
                }
            },
        },
        methods: {
            flipCard(status) {
                this.isCardFlipped = status;
            },
            focusInput(e) {
                this.isInputFocused = true;
                let targetRef = e.target.dataset.ref;
                let target = this.\$refs[targetRef];
                this.focusElementStyle = {
                    width: `\${target.offsetWidth}px`,
                    height: `\${target.offsetHeight}px`,
                    transform: `translateX(\${target.offsetLeft}px) translateY(\${target.offsetTop}px)`,
                };
            },
            blurInput() {
                let vm = this;
                setTimeout(() => {
                    if (!vm.isInputFocused) {
                        vm.focusElementStyle = null;
                    }
                }, 300);
                vm.isInputFocused = false;
            },
            async submitPayment() {
                if (!currentSponsorId) {
                    alert('No sponsor selected.');
                    return;
                }

                const contractSelect = document.getElementById(`contract-\${currentSponsorId}`);
                if (!contractSelect || !contractSelect.value) {
                    alert('Veuillez sélectionner un contrat.');
                    return;
                }

                this.isProcessing = true;

                try {
                    const { token, error } = await stripe.createToken(cardElement, {
                        name: this.cardName,
                    });

                    if (error) {
                        alert(error.message);
                        this.isProcessing = false;
                        return;
                    }

                    const form = document.getElementById(`checkout-form-\${currentSponsorId}`);
                    const tokenInput = document.getElementById(`stripe-token-id-\${currentSponsorId}`);
                    const nameInput = document.getElementById(`customer-name-\${currentSponsorId}`);

                    if (!form || !tokenInput || !nameInput) {
                        throw new Error('Form elements not found.');
                    }

                    tokenInput.value = token.id;
                    nameInput.value = this.cardName || currentSponsorName;
                    form.submit();
                } catch (error) {
                    console.error('Payment error:', error.message);
                    alert('Une erreur est survenue lors du paiement.');
                    this.isProcessing = false;
                }
            },
        },
    });

    // Open payment modal and set sponsor data
    function openPaymentModal(sponsorId, sponsorName) {
        currentSponsorId = sponsorId;
        currentSponsorName = sponsorName;
        cardElement.clear();
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Owl Carousel
        const owl = \$(\".sponsor-image-carousel\").owlCarousel({
            items: 4,
            margin: 30,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            dots: true,
            nav: false,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                768: { items: 3 },
                992: { items: 4 },
            },
        });

        // Handle card flipping and carousel pausing
        document.querySelectorAll('.flip-card').forEach(card => {
            const flipBtn = card.querySelector('.flip-btn');
            const form = card.querySelector('form');
            const select = card.querySelector('select');
            const payBtn = card.querySelector('.btn-success');

            // Show flip button on hover
            card.addEventListener('mouseenter', () => {
                flipBtn.style.opacity = '1';
            });
            card.addEventListener('mouseleave', () => {
                if (!card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '0';
                }
            });

            // Show flip button on touch
            card.addEventListener('touchstart', () => {
                card.classList.add('touched');
            });

            // Handle flip button click
            flipBtn.addEventListener('click', () => {
                card.classList.toggle('flipped');
                if (card.classList.contains('flipped')) {
                    flipBtn.style.opacity = '1';
                }
            });

            // Pause carousel when interacting
            const pauseCarousel = () => {
                owl.trigger('stop.owl.autoplay');
                console.log('Carousel paused');
            };

            // Resume carousel
            const resumeCarousel = () => {
                owl.trigger('play.owl.autoplay');
                console.log('Carousel resumed');
            };

            // Pause on card click
            card.addEventListener('click', (e) => {
                if (e.target === flipBtn || flipBtn.contains(e.target)) {
                    return;
                }
                pauseCarousel();
            });

            // Pause on form element focus
            if (select) {
                select.addEventListener('focus', pauseCarousel);
            }
            if (payBtn) {
                payBtn.addEventListener('click', pauseCarousel);
            }

            // Resume on modal close
            document.getElementById('paymentModal').addEventListener('hidden.bs.modal', () => {
                resumeCarousel();
                currentSponsorId = null;
                currentSponsorName = '';
            });

            // Resume when clicking outside
            document.addEventListener('click', (e) => {
                if (!card.contains(e.target) && !card.classList.contains('flipped') && !document.getElementById('paymentModal').contains(e.target)) {
                    resumeCarousel();
                }
            });

            // Resume on form element blur
            if (form) {
                form.querySelectorAll('select').forEach(element => {
                    element.addEventListener('blur', () => {
                        setTimeout(() => {
                            if (!form.contains(document.activeElement) && !document.getElementById('paymentModal').contains(document.activeElement)) {
                                resumeCarousel();
                            }
                        }, 100);
                    });
                });
            }
        });

        // Initialize WOW.js
        new WOW().init();
    });
</script>
{% endblock %}", "sponsor/sponsor_front.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\sponsor_front.html.twig");
    }
}
