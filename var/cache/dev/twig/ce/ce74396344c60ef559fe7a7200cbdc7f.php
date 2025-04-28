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

/* joueur/edit.html.twig */
class __TwigTemplate_eadf397e5772fd8efeed98a5da2787b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/edit.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Modifier Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container for flash messages -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\">
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "                                    <div id=\"toast-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"bs-toast toast fade bg-";
                yield ((($context["label"] == "success")) ? ("success") : ("danger"));
                yield "\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                                        <div class=\"toast-header\">
                                            <i class=\"bx bx-bell me-2\"></i>
                                            <div class=\"me-auto fw-semibold\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</div>
                                            <small>Maintenant</small>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"toast-body\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                                    </div>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </div>

                        ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "playerForm", "novalidate" => "novalidate"]]);
        yield "
                            <!-- Display current profile picture -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Photo actuelle</label>
                                <div>
                                    <img
                                        src=\"";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 44, $this->source); })()), "profilePicture", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 44, $this->source); })()), "profilePicture", [], "any", false, false, false, 44))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/default-player.png"), "html", null, true)));
        yield "\"
                                        alt=\"Avatar du joueur\"
                                        class=\"d-block rounded\"
                                        height=\"100\"
                                        width=\"100\"
                                        id=\"uploadedAvatar\"
                                    />
                                </div>
                            </div>

                            <!-- Joueur Fields -->
                            <div class=\"mb-3\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "nom", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Dupont", "maxlength" => "50"]]);
        yield "
                                </div>
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Jean", "maxlength" => "50"]]);
        yield "
                                </div>
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "prenom", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "dateNaissance", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Naissance"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "dateNaissance", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "dateNaissance", [], "any", false, false, false, 79), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "poste", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poste"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "poste", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "poste", [], "any", false, false, false, 88), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "taille", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (m)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "taille", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 1.85", "step" => "0.01", "min" => "0", "max" => "3"]]);
        yield "
                                </div>
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "taille", [], "any", false, false, false, 97), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "poids", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poids (kg)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "poids", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 75", "step" => "0.1", "min" => "0", "max" => "500"]]);
        yield "
                                </div>
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "poids", [], "any", false, false, false, 106), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "email", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: email@exemple.com", "maxlength" => "100"]]);
        yield "
                                </div>
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "telephone", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "telephone", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "ex: +33 6 12 34 56 78", "maxlength" => "20"]]);
        yield "
                                </div>
                                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "telephone", [], "any", false, false, false, 124), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "statut", [], "any", false, false, false, 128), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "statut", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "statut", [], "any", false, false, false, 133), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "profilePicture", [], "any", false, false, false, 137), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Photo de Profil"]);
        yield "
                                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "profilePicture", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/jpeg,image/png"]]);
        yield "
                                <small class=\"form-text text-muted\">Formats acceptés : JPEG, PNG (max 2Mo)</small>
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "profilePicture", [], "any", false, false, false, 140), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Evaluation Physique Fields -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 146), "dateEvaluation", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d'Évaluation"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 149), "dateEvaluation", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 151), "dateEvaluation", [], "any", false, false, false, 151), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 155), "niveauEndurance", [], "any", false, false, false, 155), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Niveau d'Endurance (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 158), "niveauEndurance", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 8.5", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 160), "niveauEndurance", [], "any", false, false, false, 160), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 164), "forcePhysique", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Force Physique (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 167), "forcePhysique", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 7.0", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 169), "forcePhysique", [], "any", false, false, false, 169), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 173), "vitesse", [], "any", false, false, false, 173), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vitesse (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 176), "vitesse", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 9.0", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 178), "vitesse", [], "any", false, false, false, 178), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 182), "etatBlessure", [], "any", false, false, false, 182), 'label', ["label_attr" => ["class" => "form-label"], "label" => "État de Blessure"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 185), "etatBlessure", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Aucun", "maxlength" => "255"]]);
        yield "
                                </div>
                                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 187), "etatBlessure", [], "any", false, false, false, 187), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Performance Joueur Fields -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 193), "saison", [], "any", false, false, false, 193), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Saison"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 196), "saison", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2023-2024", "maxlength" => "9"]]);
        yield "
                                </div>
                                ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 198), "saison", [], "any", false, false, false, 198), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 202), "nombreMatches", [], "any", false, false, false, 202), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de Matches"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 205), "nombreMatches", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 10", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 207), "nombreMatches", [], "any", false, false, false, 207), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 211), "minutesJouees", [], "any", false, false, false, 211), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Minutes Jouées"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 214), "minutesJouees", [], "any", false, false, false, 214), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 900", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 216), "minutesJouees", [], "any", false, false, false, 216), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 220), "butsMarques", [], "any", false, false, false, 220), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Buts Marqués"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 223), "butsMarques", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 5", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 225), "butsMarques", [], "any", false, false, false, 225), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 229), "passesDecisives", [], "any", false, false, false, 229), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Passes Décisives"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 232), "passesDecisives", [], "any", false, false, false, 232), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 3", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 234), "passesDecisives", [], "any", false, false, false, 234), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 238), "cartonsJaunes", [], "any", false, false, false, 238), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cartons Jaunes"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 241), "cartonsJaunes", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 243), "cartonsJaunes", [], "any", false, false, false, 243), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 247), "cartonsRouges", [], "any", false, false, false, 247), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cartons Rouges"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 250), "cartonsRouges", [], "any", false, false, false, 250), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 0", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 252), "cartonsRouges", [], "any", false, false, false, 252), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Form Buttons -->
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 258
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation Script -->
    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Joueur Fields
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Evaluation Physique Fields
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';

            // Performance Joueur Fields
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Validation for Joueur Fields
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Validation for Evaluation Physique Fields
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est requis.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est requis.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est requis.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est requis.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est requis.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Validation for Performance Joueur Fields
            if (!saison) addToast('Erreur Saison', 'Le champ saison est requis.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');
            else if (!/^\\d{4}-\\d{4}\$/.test(saison)) addToast('Erreur Saison', 'La saison doit être au format AAAA-AAAA (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est requis.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif ou zéro.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est requis.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif ou zéro.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est requis.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif ou zéro.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est requis.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif ou zéro.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est requis.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif ou zéro.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est requis.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif ou zéro.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }

        // Initialize toasts on page load
        document.addEventListener('DOMContentLoaded', function() {
            const toastElements = document.querySelectorAll('.toast');
            toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
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
        return "joueur/edit.html.twig";
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
        return array (  616 => 258,  612 => 257,  604 => 252,  599 => 250,  593 => 247,  586 => 243,  581 => 241,  575 => 238,  568 => 234,  563 => 232,  557 => 229,  550 => 225,  545 => 223,  539 => 220,  532 => 216,  527 => 214,  521 => 211,  514 => 207,  509 => 205,  503 => 202,  496 => 198,  491 => 196,  485 => 193,  476 => 187,  471 => 185,  465 => 182,  458 => 178,  453 => 176,  447 => 173,  440 => 169,  435 => 167,  429 => 164,  422 => 160,  417 => 158,  411 => 155,  404 => 151,  399 => 149,  393 => 146,  384 => 140,  379 => 138,  375 => 137,  368 => 133,  363 => 131,  357 => 128,  350 => 124,  345 => 122,  339 => 119,  332 => 115,  327 => 113,  321 => 110,  314 => 106,  309 => 104,  303 => 101,  296 => 97,  291 => 95,  285 => 92,  278 => 88,  273 => 86,  267 => 83,  260 => 79,  255 => 77,  249 => 74,  242 => 70,  237 => 68,  231 => 65,  224 => 61,  219 => 59,  213 => 56,  198 => 44,  189 => 38,  185 => 36,  179 => 35,  162 => 32,  155 => 28,  146 => 25,  128 => 24,  124 => 23,  113 => 17,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Modifier Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Modifier {{ joueur.prenom }} {{ joueur.nom }}</h5>
                        <small class=\"text-muted float-end\">Mettre à jour les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container for flash messages -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\">
                            {% for label, messages in app.flashes %}
                                {% for message in messages %}
                                    <div id=\"toast-{{ loop.index0 }}\" class=\"bs-toast toast fade bg-{{ label == 'success' ? 'success' : 'danger' }}\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                                        <div class=\"toast-header\">
                                            <i class=\"bx bx-bell me-2\"></i>
                                            <div class=\"me-auto fw-semibold\">{{ label|capitalize }}</div>
                                            <small>Maintenant</small>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"toast-body\">{{ message }}</div>
                                    </div>
                                {% endfor %}
                            {% endfor %}
                        </div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'playerForm', 'novalidate': 'novalidate'}}) }}
                            <!-- Display current profile picture -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Photo actuelle</label>
                                <div>
                                    <img
                                        src=\"{{ joueur.profilePicture ? asset('/uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/img/avatars/default-player.png') }}\"
                                        alt=\"Avatar du joueur\"
                                        class=\"d-block rounded\"
                                        height=\"100\"
                                        width=\"100\"
                                        id=\"uploadedAvatar\"
                                    />
                                </div>
                            </div>

                            <!-- Joueur Fields -->
                            <div class=\"mb-3\">
                                {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'ex: Dupont', 'maxlength': '50'}}) }}
                                </div>
                                {{ form_errors(form.nom, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'ex: Jean', 'maxlength': '50'}}) }}
                                </div>
                                {{ form_errors(form.prenom, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.dateNaissance, 'Date de Naissance', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateNaissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.dateNaissance, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.poste, 'Poste', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.poste, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.taille, 'Taille (m)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    {{ form_widget(form.taille, {'attr': {'class': 'form-control', 'placeholder': 'ex: 1.85', 'step': '0.01', 'min': '0', 'max': '3'}}) }}
                                </div>
                                {{ form_errors(form.taille, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.poids, 'Poids (kg)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    {{ form_widget(form.poids, {'attr': {'class': 'form-control', 'placeholder': 'ex: 75', 'step': '0.1', 'min': '0', 'max': '500'}}) }}
                                </div>
                                {{ form_errors(form.poids, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'ex: email@exemple.com', 'maxlength': '100'}}) }}
                                </div>
                                {{ form_errors(form.email, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control phone-mask', 'placeholder': 'ex: +33 6 12 34 56 78', 'maxlength': '20'}}) }}
                                </div>
                                {{ form_errors(form.telephone, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.statut, 'Statut', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.statut, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.profilePicture, 'Photo de Profil', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.profilePicture, {'attr': {'class': 'form-control', 'accept': 'image/jpeg,image/png'}}) }}
                                <small class=\"form-text text-muted\">Formats acceptés : JPEG, PNG (max 2Mo)</small>
                                {{ form_errors(form.profilePicture, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Evaluation Physique Fields -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.dateEvaluation, 'Date d\\'Évaluation', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.dateEvaluation, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.dateEvaluation, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.niveauEndurance, 'Niveau d\\'Endurance (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.niveauEndurance, {'attr': {'class': 'form-control', 'placeholder': 'ex: 8.5', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.niveauEndurance, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.forcePhysique, 'Force Physique (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.forcePhysique, {'attr': {'class': 'form-control', 'placeholder': 'ex: 7.0', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.forcePhysique, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.vitesse, 'Vitesse (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.vitesse, {'attr': {'class': 'form-control', 'placeholder': 'ex: 9.0', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.vitesse, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.etatBlessure, 'État de Blessure', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.etatBlessure, {'attr': {'class': 'form-control', 'placeholder': 'ex: Aucun', 'maxlength': '255'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.etatBlessure, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Performance Joueur Fields -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.saison, 'Saison', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.performanceJoueur.saison, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2023-2024', 'maxlength': '9'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.saison, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.nombreMatches, 'Nombre de Matches', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    {{ form_widget(form.performanceJoueur.nombreMatches, {'attr': {'class': 'form-control', 'placeholder': 'ex: 10', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.nombreMatches, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.minutesJouees, 'Minutes Jouées', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    {{ form_widget(form.performanceJoueur.minutesJouees, {'attr': {'class': 'form-control', 'placeholder': 'ex: 900', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.minutesJouees, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.butsMarques, 'Buts Marqués', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.butsMarques, {'attr': {'class': 'form-control', 'placeholder': 'ex: 5', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.butsMarques, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.passesDecisives, 'Passes Décisives', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.passesDecisives, {'attr': {'class': 'form-control', 'placeholder': 'ex: 3', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.passesDecisives, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.cartonsJaunes, 'Cartons Jaunes', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsJaunes, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.cartonsJaunes, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.cartonsRouges, 'Cartons Rouges', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsRouges, {'attr': {'class': 'form-control', 'placeholder': 'ex: 0', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.cartonsRouges, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Form Buttons -->
                            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            <a href=\"{{ path('joueur_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation Script -->
    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Joueur Fields
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Evaluation Physique Fields
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';

            // Performance Joueur Fields
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Validation for Joueur Fields
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Validation for Evaluation Physique Fields
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est requis.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est requis.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est requis.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est requis.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est requis.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Validation for Performance Joueur Fields
            if (!saison) addToast('Erreur Saison', 'Le champ saison est requis.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');
            else if (!/^\\d{4}-\\d{4}\$/.test(saison)) addToast('Erreur Saison', 'La saison doit être au format AAAA-AAAA (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est requis.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif ou zéro.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est requis.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif ou zéro.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est requis.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif ou zéro.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est requis.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif ou zéro.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est requis.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif ou zéro.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est requis.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif ou zéro.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }

        // Initialize toasts on page load
        document.addEventListener('DOMContentLoaded', function() {
            const toastElements = document.querySelectorAll('.toast');
            toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
        });
    </script>
{% endblock %}", "joueur/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\edit.html.twig");
    }
}
