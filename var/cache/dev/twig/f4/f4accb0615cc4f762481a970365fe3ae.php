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

/* user/registerF.html.twig */
class __TwigTemplate_41b3711b8633f5223de7312aaac5d51f extends Template
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
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registerF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registerF.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "user/registerF.html.twig", 1);
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

        yield "Register to MatchupZ";
        
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
        yield "    <div class=\"container-fluid py-5\">
        <!-- Add flash messages here -->
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-md-10 col-sm-12\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 800px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Register to MatchupZ</h2>
                        <p class=\"text-center mb-4\">Create your account to get started!</p>

                        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["id" => "formAuthentication", "class" => "mb-3", "enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        yield "

                        <!-- Affichage des erreurs globales -->
                        ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0)) {
            // line 32
            yield "                            <div class=\"alert alert-danger\">
                                <ul>
                                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 35
                yield "                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
                yield "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "                                </ul>
                            </div>
                        ";
        }
        // line 40
        yield "
                        <div class=\"row\">
                            <!-- Left Column -->
                            <div class=\"col-md-6\">
                                <!-- Nom -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "\" class=\"form-label\">Nom*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'widget');
        yield "
                                    </div>
                                    ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 54
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                                        </div>
                                    ";
        }
        // line 58
        yield "                                </div>

                                <!-- Prénom -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        yield "\" class=\"form-label\">Prénom*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-user-circle\"></i></span>
                                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65), 'widget');
        yield "
                                    </div>
                                    ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prenom", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 70
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 70), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                                        </div>
                                    ";
        }
        // line 74
        yield "                                </div>

                                <!-- Email -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        yield "\" class=\"form-label\">Email*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'widget');
        yield "
                                    </div>
                                    ";
        // line 83
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83)) > 0)) {
            // line 84
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 86
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 86), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                                        </div>
                                    ";
        }
        // line 90
        yield "                                </div>

                                <!-- Password -->
                                <div class=\"mb-3 form-password-toggle\">
                                    <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\" class=\"form-label\">Mot de passe*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "password", [], "any", false, false, false, 97), 'widget');
        yield "
                                        <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                    </div>
                                    ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 103
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 103), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                                        </div>
                                    ";
        }
        // line 107
        yield "                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class=\"col-md-6\">
                                <!-- Numéro de téléphone -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "num_telephone", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "\" class=\"form-label\">Téléphone</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                        ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "num_telephone", [], "any", false, false, false, 117), 'widget');
        yield "
                                    </div>
                                    ";
        // line 119
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "num_telephone", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "errors", [], "any", false, false, false, 119)) > 0)) {
            // line 120
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "num_telephone", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 122
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 122), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                        </div>
                                    ";
        }
        // line 126
        yield "                                </div>

                                <!-- Date de naissance -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130), "html", null, true);
        yield "\" class=\"form-label\">Date de naissance</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 133), 'widget');
        yield "
                                    </div>
                                    ";
        // line 135
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135)) > 0)) {
            // line 136
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 138
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 138), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                                        </div>
                                    ";
        }
        // line 142
        yield "                                </div>

                                <!-- Genre -->
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Genre*</label>
                                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "genre", [], "any", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 148
            yield "                                        <div class=\"form-check\">
                                            ";
            // line 149
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                            <label class=\"form-check-label\" for=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-";
            // line 151
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 151), "label", [], "any", false, false, false, 151) == "Homme")) ? ("male") : ("female"));
            yield "\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 151), "label", [], "any", false, false, false, 151), "html", null, true);
            yield "
                                            </label>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "genre", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "errors", [], "any", false, false, false, 155)) > 0)) {
            // line 156
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "genre", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "errors", [], "any", false, false, false, 157));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 158
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 158), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                                        </div>
                                    ";
        }
        // line 162
        yield "                                </div>

                                <!-- Image -->
                                <div class=\"mb-3\">
                                    <label for=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "image", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true);
        yield "\" class=\"form-label\">Image</label>
                                    ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "image", [], "any", false, false, false, 167), 'widget');
        yield "
                                    ";
        // line 168
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "image", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "errors", [], "any", false, false, false, 168)) > 0)) {
            // line 169
            yield "                                        <div class=\"text-danger\">
                                            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "image", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "errors", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 171
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 171), "html", null, true);
                yield "<br>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "                                        </div>
                                    ";
        }
        // line 175
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Conditions -->
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "terms", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "terms", [], "any", false, false, false, 183), "vars", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183), "html", null, true);
        yield "\">
                                    J'accepte la <a href=\"#\" class=\"text-danger\">politique de confidentialité et les termes</a>
                                </label>
                            </div>
                            ";
        // line 187
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "terms", [], "any", false, false, false, 187), "vars", [], "any", false, false, false, 187), "errors", [], "any", false, false, false, 187)) > 0)) {
            // line 188
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "terms", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "errors", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 190
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 190), "html", null, true);
                yield "<br>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                                </div>
                            ";
        }
        // line 194
        yield "                        </div>

                        <!-- Rôle (caché, fixé à \"Utilisateur\") -->
                        ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "role", [], "any", false, false, false, 197), 'widget');
        yield "

                        <button type=\"submit\" class=\"btn btn-danger d-grid w-100\">S'inscrire</button>
                        ";
        // line 200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'form_end');
        yield "

                        <p class=\"text-center\">
                            <span>Déjà un compte ?</span>
                            <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-danger\">
                                <span>Se connecter</span>
                            </a>
                        </p>
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

    // line 215
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

        // line 216
        yield "    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 226
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

        // line 227
        yield "    <!-- Call parent block to include the spinner fallback -->
    ";
        // line 228
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <!-- Helpers -->
    <script src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>

    <!-- Core JS -->
    <script src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Toggle Password Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.getElementById('password');
                const icon = togglePassword.querySelector('i');
                
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
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
        return "user/registerF.html.twig";
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
        return array (  690 => 242,  684 => 239,  680 => 238,  676 => 237,  672 => 236,  668 => 235,  662 => 232,  658 => 231,  652 => 228,  649 => 227,  636 => 226,  623 => 223,  617 => 220,  611 => 217,  608 => 216,  595 => 215,  574 => 204,  567 => 200,  561 => 197,  556 => 194,  552 => 192,  543 => 190,  539 => 189,  536 => 188,  534 => 187,  527 => 183,  523 => 182,  514 => 175,  510 => 173,  501 => 171,  497 => 170,  494 => 169,  492 => 168,  488 => 167,  484 => 166,  478 => 162,  474 => 160,  465 => 158,  461 => 157,  458 => 156,  455 => 155,  443 => 151,  439 => 150,  435 => 149,  432 => 148,  428 => 147,  421 => 142,  417 => 140,  408 => 138,  404 => 137,  401 => 136,  399 => 135,  394 => 133,  388 => 130,  382 => 126,  378 => 124,  369 => 122,  365 => 121,  362 => 120,  360 => 119,  355 => 117,  349 => 114,  340 => 107,  336 => 105,  327 => 103,  323 => 102,  320 => 101,  318 => 100,  312 => 97,  306 => 94,  300 => 90,  296 => 88,  287 => 86,  283 => 85,  280 => 84,  278 => 83,  273 => 81,  267 => 78,  261 => 74,  257 => 72,  248 => 70,  244 => 69,  241 => 68,  239 => 67,  234 => 65,  228 => 62,  222 => 58,  218 => 56,  209 => 54,  205 => 53,  202 => 52,  200 => 51,  195 => 49,  189 => 46,  181 => 40,  176 => 37,  167 => 35,  163 => 34,  159 => 32,  157 => 31,  151 => 28,  141 => 20,  131 => 16,  128 => 15,  123 => 14,  113 => 10,  110 => 9,  106 => 8,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Register to MatchupZ{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <!-- Add flash messages here -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-md-10 col-sm-12\">
                    <div class=\"card p-4 shadow-sm\" style=\"max-width: 800px; margin: 0 auto;\">
                        <h2 class=\"text-center mb-4\">Register to MatchupZ</h2>
                        <p class=\"text-center mb-4\">Create your account to get started!</p>

                        {{ form_start(form, {'attr': {'id': 'formAuthentication', 'class': 'mb-3', 'enctype': 'multipart/form-data', 'novalidate': 'novalidate'}}) }}

                        <!-- Affichage des erreurs globales -->
                        {% if form.vars.errors|length > 0 %}
                            <div class=\"alert alert-danger\">
                                <ul>
                                    {% for error in form.vars.errors %}
                                        <li>{{ error.message }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        <div class=\"row\">
                            <!-- Left Column -->
                            <div class=\"col-md-6\">
                                <!-- Nom -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.nom.vars.id }}\" class=\"form-label\">Nom*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                        {{ form_widget(form.nom) }}
                                    </div>
                                    {% if form.nom.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.nom.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Prénom -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.prenom.vars.id }}\" class=\"form-label\">Prénom*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-user-circle\"></i></span>
                                        {{ form_widget(form.prenom) }}
                                    </div>
                                    {% if form.prenom.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.prenom.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Email -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.email.vars.id }}\" class=\"form-label\">Email*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                        {{ form_widget(form.email) }}
                                    </div>
                                    {% if form.email.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.email.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Password -->
                                <div class=\"mb-3 form-password-toggle\">
                                    <label for=\"{{ form.password.vars.id }}\" class=\"form-label\">Mot de passe*</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                        {{ form_widget(form.password) }}
                                        <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                                    </div>
                                    {% if form.password.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.password.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class=\"col-md-6\">
                                <!-- Numéro de téléphone -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.num_telephone.vars.id }}\" class=\"form-label\">Téléphone</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                        {{ form_widget(form.num_telephone) }}
                                    </div>
                                    {% if form.num_telephone.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.num_telephone.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Date de naissance -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.date_de_naissance.vars.id }}\" class=\"form-label\">Date de naissance</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                        {{ form_widget(form.date_de_naissance) }}
                                    </div>
                                    {% if form.date_de_naissance.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.date_de_naissance.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Genre -->
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Genre*</label>
                                    {% for choice in form.genre %}
                                        <div class=\"form-check\">
                                            {{ form_widget(choice, {'attr': {'class': 'form-check-input'}}) }}
                                            <label class=\"form-check-label\" for=\"{{ choice.vars.id }}\">
                                                <i class=\"bx bx-{{ choice.vars.label == 'Homme' ? 'male' : 'female' }}\"></i> {{ choice.vars.label }}
                                            </label>
                                        </div>
                                    {% endfor %}
                                    {% if form.genre.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.genre.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>

                                <!-- Image -->
                                <div class=\"mb-3\">
                                    <label for=\"{{ form.image.vars.id }}\" class=\"form-label\">Image</label>
                                    {{ form_widget(form.image) }}
                                    {% if form.image.vars.errors|length > 0 %}
                                        <div class=\"text-danger\">
                                            {% for error in form.image.vars.errors %}
                                                {{ error.message }}<br>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Conditions -->
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                {{ form_widget(form.terms, {'attr': {'class': 'form-check-input'}}) }}
                                <label class=\"form-check-label\" for=\"{{ form.terms.vars.id }}\">
                                    J'accepte la <a href=\"#\" class=\"text-danger\">politique de confidentialité et les termes</a>
                                </label>
                            </div>
                            {% if form.terms.vars.errors|length > 0 %}
                                <div class=\"text-danger\">
                                    {% for error in form.terms.vars.errors %}
                                        {{ error.message }}<br>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>

                        <!-- Rôle (caché, fixé à \"Utilisateur\") -->
                        {{ form_widget(form.role) }}

                        <button type=\"submit\" class=\"btn btn-danger d-grid w-100\">S'inscrire</button>
                        {{ form_end(form) }}

                        <p class=\"text-center\">
                            <span>Déjà un compte ?</span>
                            <a href=\"{{ path('app_login') }}\" class=\"text-danger\">
                                <span>Se connecter</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\" />
{% endblock %}

{% block javascripts %}
    <!-- Call parent block to include the spinner fallback -->
    {{ parent() }}

    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>

    <!-- Core JS -->
    <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <!-- Toggle Password Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            if (togglePassword) {
                const passwordInput = document.getElementById('password');
                const icon = togglePassword.querySelector('i');
                
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
        });
    </script>
{% endblock %}", "user/registerF.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\user\\registerF.html.twig");
    }
}
