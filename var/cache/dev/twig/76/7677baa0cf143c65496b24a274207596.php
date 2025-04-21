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

/* user/new.html.twig */
class __TwigTemplate_0c0288d14a8d1acda8f69c31451dbcbd extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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

        yield "Nouvel Utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        // line 6
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "user/new.html.twig", 6)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Nouvel Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Utilisateur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 24
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) {
            // line 25
            yield "                            <div class=\"alert alert-danger\">
                                <ul>
                                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                yield "                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 28), "html", null, true);
                yield "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                                </ul>
                            </div>
                        ";
        }
        // line 33
        yield "
                        ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "userForm", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_nom\">Nom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'utilisateur"]]);
        yield "
                                </div>
                                ";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 44
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 44), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                                    </div>
                                ";
        }
        // line 48
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_prenom\">Prénom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "prenom", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom de l'utilisateur"]]);
        yield "
                                </div>
                                ";
        // line 56
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) {
            // line 57
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 59
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 59), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "                                    </div>
                                ";
        }
        // line 63
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_email\">Email*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@gmail.com"]]);
        yield "
                                </div>
                                ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 74
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 74), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "                                    </div>
                                ";
        }
        // line 78
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_password\">Mot de passe*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "password", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe sécurisé"]]);
        // line 87
        yield "
                                </div>
                                ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 92
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 92), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                                    </div>
                                ";
        }
        // line 96
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_num_telephone\">Téléphone*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "num_telephone", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "12345678"]]);
        // line 105
        yield "
                                </div>
                                ";
        // line 107
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "num_telephone", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107)) > 0)) {
            // line 108
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "num_telephone", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "errors", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 110
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 110), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                    </div>
                                ";
        }
        // line 114
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_date_de_naissance\">Date de naissance*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 122
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "errors", [], "any", false, false, false, 122)) > 0)) {
            // line 123
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "errors", [], "any", false, false, false, 124));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 125
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 125), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                                    </div>
                                ";
        }
        // line 129
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Genre*</label>
                                <div class=\"d-flex gap-4\">
                                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "genre", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 135
            yield "                                        <div class=\"form-check\">
                                            ";
            // line 136
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                            ";
            // line 137
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "                                </div>
                                ";
        // line 141
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "genre", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "any", false, false, false, 141)) > 0)) {
            // line 142
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "genre", [], "any", false, false, false, 143), "vars", [], "any", false, false, false, 143), "errors", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 144
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 144), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "                                    </div>
                                ";
        }
        // line 148
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_role\">Rôle*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-cog\"></i></span>
                                    ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "role", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 156
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "role", [], "any", false, false, false, 156), "vars", [], "any", false, false, false, 156), "errors", [], "any", false, false, false, 156)) > 0)) {
            // line 157
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "role", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "errors", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 159
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 159), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "                                    </div>
                                ";
        }
        // line 163
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_image\">Photo de profil</label>
                                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "image", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
                                ";
        // line 169
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "image", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169), "errors", [], "any", false, false, false, 169)) > 0)) {
            // line 170
            yield "                                    <div class=\"text-danger\">
                                        ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "image", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "errors", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 172
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 172), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            yield "                                    </div>
                                ";
        }
        // line 176
        yield "                            </div>
                            
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'form_end');
        yield "
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/new.html.twig";
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
        return array (  510 => 180,  506 => 179,  501 => 176,  497 => 174,  488 => 172,  484 => 171,  481 => 170,  479 => 169,  474 => 167,  468 => 163,  464 => 161,  455 => 159,  451 => 158,  448 => 157,  446 => 156,  441 => 154,  433 => 148,  429 => 146,  420 => 144,  416 => 143,  413 => 142,  411 => 141,  408 => 140,  399 => 137,  395 => 136,  392 => 135,  388 => 134,  381 => 129,  377 => 127,  368 => 125,  364 => 124,  361 => 123,  359 => 122,  354 => 120,  346 => 114,  342 => 112,  333 => 110,  329 => 109,  326 => 108,  324 => 107,  320 => 105,  318 => 102,  310 => 96,  306 => 94,  297 => 92,  293 => 91,  290 => 90,  288 => 89,  284 => 87,  282 => 84,  274 => 78,  270 => 76,  261 => 74,  257 => 73,  254 => 72,  252 => 71,  247 => 69,  239 => 63,  235 => 61,  226 => 59,  222 => 58,  219 => 57,  217 => 56,  212 => 54,  204 => 48,  200 => 46,  191 => 44,  187 => 43,  184 => 42,  182 => 41,  177 => 39,  169 => 34,  166 => 33,  161 => 30,  152 => 28,  148 => 27,  144 => 25,  141 => 24,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Utilisateur{% endblock %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Utilisateurs /</span> Nouvel Utilisateur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouvel Utilisateur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        {# Affichage des erreurs globales #}
                        {% if form.vars.errors|length > 0 %}
                            <div class=\"alert alert-danger\">
                                <ul>
                                    {% for error in form.vars.errors %}
                                        <li>{{ error.message }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'userForm', 'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_nom\">Nom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom de l\\'utilisateur'}}) }}
                                </div>
                                {% if form.nom.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.nom.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_prenom\">Prénom*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom de l\\'utilisateur'}}) }}
                                </div>
                                {% if form.prenom.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.prenom.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_email\">Email*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'email@gmail.com'}}) }}
                                </div>
                                {% if form.email.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.email.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_password\">Mot de passe*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                    {{ form_widget(form.password, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Mot de passe sécurisé'
                                    }}) }}
                                </div>
                                {% if form.password.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.password.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_num_telephone\">Téléphone*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.num_telephone, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': '12345678'
                                    }}) }}
                                </div>
                                {% if form.num_telephone.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.num_telephone.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_date_de_naissance\">Date de naissance*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {% if form.date_de_naissance.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.date_de_naissance.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Genre*</label>
                                <div class=\"d-flex gap-4\">
                                    {% for child in form.genre %}
                                        <div class=\"form-check\">
                                            {{ form_widget(child, {'attr': {'class': 'form-check-input'}}) }}
                                            {{ form_label(child, null, {'label_attr': {'class': 'form-check-label'}}) }}
                                        </div>
                                    {% endfor %}
                                </div>
                                {% if form.genre.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.genre.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_role\">Rôle*</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-cog\"></i></span>
                                    {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {% if form.role.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.role.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"user_image\">Photo de profil</label>
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
                                {% if form.image.vars.errors|length > 0 %}
                                    <div class=\"text-danger\">
                                        {% for error in form.image.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                            </div>
                            
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user/new.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\new.html.twig");
    }
}
