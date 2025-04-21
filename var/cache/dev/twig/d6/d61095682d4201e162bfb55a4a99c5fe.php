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

/* user/edit_profile_front.html.twig */
class __TwigTemplate_08bf0377bd0374dcda01c2b21365ec0c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile_front.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "user/edit_profile_front.html.twig", 1);
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

        yield "Edit Profile - Fitness";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        .edit-profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .edit-profile-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .edit-profile-header h2 {
            font-size: 2rem;
            color: #333;
            font-weight: bold;
        }
        .form-section {
            margin-bottom: 30px;
        }
        .form-section h3 {
            font-size: 1.5rem;
            color: #555;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
            width: 200px;
            display: inline-block;
            font-size: 1.1rem;
        }
        .form-group input,
        .form-group select {
            width: 350px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: #007bff;
            outline: none;
        }
        .form-group input[type=\"file\"] {
            padding: 3px; /* Adjust padding for file input */
        }
        .form-group .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .form-group .radio-group label {
            width: auto;
            font-weight: normal;
            margin-left: 5px;
        }
        .current-image {
            margin-top: 10px;
            margin-left: 200px;
        }
        .current-image img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
        .form-buttons {
            text-align: center;
            margin-top: 40px;
        }
        .btn-submit, .btn-cancel {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
            margin: 0 15px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #5a6268;
        }
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
            margin-left: 200px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
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

        // line 124
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"edit-profile-container\">
                <div class=\"edit-profile-header\">
                    <h2>Edit Profile</h2>
                </div>

                ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-section\">
                    <h3>Personal Information</h3>
                    <div class=\"form-group\">
                        <label for=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "nom", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
        yield "\">Last Name:</label>
                        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "nom", [], "any", false, false, false, 136), 'widget');
        yield "
                        ";
        // line 137
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "nom", [], "any", false, false, false, 137), 'errors')) {
            // line 138
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "nom", [], "any", false, false, false, 138), 'errors');
            yield "</div>
                        ";
        }
        // line 140
        yield "                    </div>

                    <div class=\"form-group\">
                        <label for=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "prenom", [], "any", false, false, false, 143), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        yield "\">First Name:</label>
                        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "prenom", [], "any", false, false, false, 144), 'widget');
        yield "
                        ";
        // line 145
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "prenom", [], "any", false, false, false, 145), 'errors')) {
            // line 146
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "prenom", [], "any", false, false, false, 146), 'errors');
            yield "</div>
                        ";
        }
        // line 148
        yield "                    </div>

                    <div class=\"form-group\">
                        <label for=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "\">Date of Birth:</label>
                        ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 152), 'widget');
        yield "
                        ";
        // line 153
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 153), 'errors')) {
            // line 154
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 154), 'errors');
            yield "</div>
                        ";
        }
        // line 156
        yield "                    </div>

                    <div class=\"form-group\">
                        <label for=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "genre", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159), "html", null, true);
        yield "\">Gender:</label>
                        <div class=\"radio-group\">
                            ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "genre", [], "any", false, false, false, 161), 'widget');
        yield "
                        </div>
                        ";
        // line 163
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "genre", [], "any", false, false, false, 163), 'errors')) {
            // line 164
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "genre", [], "any", false, false, false, 164), 'errors');
            yield "</div>
                        ";
        }
        // line 166
        yield "                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Contact Information</h3>
                    <div class=\"form-group\">
                        <label for=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "email", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172), "html", null, true);
        yield "\">Email:</label>
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "email", [], "any", false, false, false, 173), 'widget');
        yield "
                        ";
        // line 174
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "email", [], "any", false, false, false, 174), 'errors')) {
            // line 175
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "email", [], "any", false, false, false, 175), 'errors');
            yield "</div>
                        ";
        }
        // line 177
        yield "                    </div>

                    <div class=\"form-group\">
                        <label for=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "num_telephone", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
        yield "\">Phone Number:</label>
                        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "num_telephone", [], "any", false, false, false, 181), 'widget');
        yield "
                        ";
        // line 182
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "num_telephone", [], "any", false, false, false, 182), 'errors')) {
            // line 183
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "num_telephone", [], "any", false, false, false, 183), 'errors');
            yield "</div>
                        ";
        }
        // line 185
        yield "                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Account Information</h3>
                    <div class=\"form-group\">
                        <label for=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "password", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191), "html", null, true);
        yield "\">Password:</label>
                        ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "password", [], "any", false, false, false, 192), 'widget');
        yield "
                        ";
        // line 193
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "password", [], "any", false, false, false, 193), 'errors')) {
            // line 194
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "password", [], "any", false, false, false, 194), 'errors');
            yield "</div>
                        ";
        }
        // line 196
        yield "                    </div>

                    <div class=\"form-group\">
                        <label for=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "role", [], "any", false, false, false, 199), "vars", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
        yield "\">Role:</label>
                        ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "role", [], "any", false, false, false, 200), 'widget');
        yield "
                        ";
        // line 201
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "role", [], "any", false, false, false, 201), 'errors')) {
            // line 202
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "role", [], "any", false, false, false, 202), 'errors');
            yield "</div>
                        ";
        }
        // line 204
        yield "                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Profile Image</h3>
                    <div class=\"form-group\">
                        <label for=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "image", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "id", [], "any", false, false, false, 210), "html", null, true);
        yield "\">Upload Image:</label>
                        ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "image", [], "any", false, false, false, 211), 'widget');
        yield "
                        ";
        // line 212
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "image", [], "any", false, false, false, 212), 'errors')) {
            // line 213
            yield "                            <div class=\"error-message\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "image", [], "any", false, false, false, 213), 'errors');
            yield "</div>
                        ";
        }
        // line 215
        yield "                    </div>
                    ";
        // line 216
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "image", [], "any", false, false, false, 216)) {
            // line 217
            yield "                        <div class=\"current-image\">
                            <p>Current Image:</p>
                            <img src=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "image", [], "any", false, false, false, 219))), "html", null, true);
            yield "\" alt=\"Current Profile Image\">
                        </div>
                    ";
        }
        // line 222
        yield "                </div>

                <div class=\"form-buttons\">
                    <button type=\"submit\" class=\"btn-submit\">Save Changes</button>
                    <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile_front");
        yield "\" class=\"btn-cancel\">Cancel</a>
                </div>
                ";
        // line 228
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), 'form_end');
        yield "
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
        return "user/edit_profile_front.html.twig";
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
        return array (  477 => 228,  472 => 226,  466 => 222,  460 => 219,  456 => 217,  454 => 216,  451 => 215,  445 => 213,  443 => 212,  439 => 211,  435 => 210,  427 => 204,  421 => 202,  419 => 201,  415 => 200,  411 => 199,  406 => 196,  400 => 194,  398 => 193,  394 => 192,  390 => 191,  382 => 185,  376 => 183,  374 => 182,  370 => 181,  366 => 180,  361 => 177,  355 => 175,  353 => 174,  349 => 173,  345 => 172,  337 => 166,  331 => 164,  329 => 163,  324 => 161,  319 => 159,  314 => 156,  308 => 154,  306 => 153,  302 => 152,  298 => 151,  293 => 148,  287 => 146,  285 => 145,  281 => 144,  277 => 143,  272 => 140,  266 => 138,  264 => 137,  260 => 136,  256 => 135,  249 => 131,  240 => 124,  227 => 123,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Edit Profile - Fitness{% endblock %}

{% block stylesheets %}
    <style>
        .edit-profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .edit-profile-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .edit-profile-header h2 {
            font-size: 2rem;
            color: #333;
            font-weight: bold;
        }
        .form-section {
            margin-bottom: 30px;
        }
        .form-section h3 {
            font-size: 1.5rem;
            color: #555;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
            width: 200px;
            display: inline-block;
            font-size: 1.1rem;
        }
        .form-group input,
        .form-group select {
            width: 350px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: #007bff;
            outline: none;
        }
        .form-group input[type=\"file\"] {
            padding: 3px; /* Adjust padding for file input */
        }
        .form-group .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .form-group .radio-group label {
            width: auto;
            font-weight: normal;
            margin-left: 5px;
        }
        .current-image {
            margin-top: 10px;
            margin-left: 200px;
        }
        .current-image img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
        .form-buttons {
            text-align: center;
            margin-top: 40px;
        }
        .btn-submit, .btn-cancel {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
            margin: 0 15px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #5a6268;
        }
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
            margin-left: 200px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"edit-profile-container\">
                <div class=\"edit-profile-header\">
                    <h2>Edit Profile</h2>
                </div>

                {{ form_start(form) }}
                <div class=\"form-section\">
                    <h3>Personal Information</h3>
                    <div class=\"form-group\">
                        <label for=\"{{ form.nom.vars.id }}\">Last Name:</label>
                        {{ form_widget(form.nom) }}
                        {% if form_errors(form.nom) %}
                            <div class=\"error-message\">{{ form_errors(form.nom) }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"{{ form.prenom.vars.id }}\">First Name:</label>
                        {{ form_widget(form.prenom) }}
                        {% if form_errors(form.prenom) %}
                            <div class=\"error-message\">{{ form_errors(form.prenom) }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"{{ form.date_de_naissance.vars.id }}\">Date of Birth:</label>
                        {{ form_widget(form.date_de_naissance) }}
                        {% if form_errors(form.date_de_naissance) %}
                            <div class=\"error-message\">{{ form_errors(form.date_de_naissance) }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"{{ form.genre.vars.id }}\">Gender:</label>
                        <div class=\"radio-group\">
                            {{ form_widget(form.genre) }}
                        </div>
                        {% if form_errors(form.genre) %}
                            <div class=\"error-message\">{{ form_errors(form.genre) }}</div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Contact Information</h3>
                    <div class=\"form-group\">
                        <label for=\"{{ form.email.vars.id }}\">Email:</label>
                        {{ form_widget(form.email) }}
                        {% if form_errors(form.email) %}
                            <div class=\"error-message\">{{ form_errors(form.email) }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"{{ form.num_telephone.vars.id }}\">Phone Number:</label>
                        {{ form_widget(form.num_telephone) }}
                        {% if form_errors(form.num_telephone) %}
                            <div class=\"error-message\">{{ form_errors(form.num_telephone) }}</div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Account Information</h3>
                    <div class=\"form-group\">
                        <label for=\"{{ form.password.vars.id }}\">Password:</label>
                        {{ form_widget(form.password) }}
                        {% if form_errors(form.password) %}
                            <div class=\"error-message\">{{ form_errors(form.password) }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"{{ form.role.vars.id }}\">Role:</label>
                        {{ form_widget(form.role) }}
                        {% if form_errors(form.role) %}
                            <div class=\"error-message\">{{ form_errors(form.role) }}</div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"form-section\">
                    <h3>Profile Image</h3>
                    <div class=\"form-group\">
                        <label for=\"{{ form.image.vars.id }}\">Upload Image:</label>
                        {{ form_widget(form.image) }}
                        {% if form_errors(form.image) %}
                            <div class=\"error-message\">{{ form_errors(form.image) }}</div>
                        {% endif %}
                    </div>
                    {% if user.image %}
                        <div class=\"current-image\">
                            <p>Current Image:</p>
                            <img src=\"{{ asset('Uploads/users/' ~ user.image) }}\" alt=\"Current Profile Image\">
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-buttons\">
                    <button type=\"submit\" class=\"btn-submit\">Save Changes</button>
                    <a href=\"{{ path('app_user_profile_front') }}\" class=\"btn-cancel\">Cancel</a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "user/edit_profile_front.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\edit_profile_front.html.twig");
    }
}
