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

/* user/register.html.twig */
class __TwigTemplate_58c3fb31a48eb9735f82bb9fb30d9de1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"../assets/\"
  data-template=\"vertical-menu-template-free\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Register to MatchupZ</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"../assets/img/favicon/favicon.ico\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/fonts/boxicons.css\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/core.css\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"../assets/css/demo.css\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/pages/page-auth.css\" />

    <!-- Helpers -->
    <script src=\"../assets/vendor/js/helpers.js\"></script>
    <script src=\"../assets/js/config.js\"></script>
  </head>

  <body>
    <!-- Content -->
    <div class=\"container-fluid py-5\">
      <!-- Add flash messages here -->
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
          ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", ["error"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            yield "        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
          ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-8 col-md-10 col-sm-12\">
            <div class=\"card p-4 shadow-sm\" style=\"max-width: 800px; margin: 0 auto;\">
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg
                      width=\"25\"
                      viewBox=\"0 0 25 42\"
                      version=\"1.1\"
                      xmlns=\"http://www.w3.org/2000/svg\"
                      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                    >
                      <defs>
                        <path
                          d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                          id=\"path-1\"
                        ></path>
                        <path
                          d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                          id=\"path-3\"
                        ></path>
                        <path
                          d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                          id=\"path-4\"
                        ></path>
                        <path
                          d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                          id=\"path-5\"
                        ></path>
                      </defs>
                      <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                          <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                              <mask id=\"mask-2\" fill=\"white\">
                                <use xlink:href=\"#path-1\"></use>
                              </mask>
                              <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                              <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                              </g>
                              <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                              </g>
                            </g>
                            <g
                              id=\"Triangle\"
                              transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                            >
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class=\"app-brand-text demo text-body fw-bolder\">MatchupZ</span>
                </a>
              </div>
              <!-- /Logo -->
              <h2 class=\"text-center mb-4\">Register to MatchupZ</h2>
              <p class=\"text-center mb-4\">Create your account to get started!</p>

              ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_start', ["attr" => ["id" => "formAuthentication", "class" => "mb-3", "enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        yield "

              <!-- Affichage des erreurs globales -->
              ";
        // line 140
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "vars", [], "any", false, false, false, 140), "errors", [], "any", false, false, false, 140)) > 0)) {
            // line 141
            yield "                <div class=\"alert alert-danger\">
                  <ul>
                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "errors", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 144
                yield "                      <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 144), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "                  </ul>
                </div>
              ";
        }
        // line 149
        yield "
              <div class=\"row\">
                <!-- Left Column -->
                <div class=\"col-md-6\">
                  <!-- Nom -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "nom", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
        yield "\" class=\"form-label\">Nom*</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                      ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "nom", [], "any", false, false, false, 158), 'widget');
        yield "
                    </div>
                    ";
        // line 160
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "nom", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "errors", [], "any", false, false, false, 160)) > 0)) {
            // line 161
            yield "                      <div class=\"text-danger\">
                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "nom", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "errors", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 163
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 163), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                      </div>
                    ";
        }
        // line 167
        yield "                  </div>

                  <!-- Prénom -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "prenom", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
        yield "\" class=\"form-label\">Prénom*</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-user-circle\"></i></span>
                      ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "prenom", [], "any", false, false, false, 174), 'widget');
        yield "
                    </div>
                    ";
        // line 176
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "prenom", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "errors", [], "any", false, false, false, 176)) > 0)) {
            // line 177
            yield "                      <div class=\"text-danger\">
                        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "prenom", [], "any", false, false, false, 178), "vars", [], "any", false, false, false, 178), "errors", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 179), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "                      </div>
                    ";
        }
        // line 183
        yield "                  </div>

                  <!-- Email -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "email", [], "any", false, false, false, 187), "vars", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187), "html", null, true);
        yield "\" class=\"form-label\">Email*</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                      ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "email", [], "any", false, false, false, 190), 'widget');
        yield "
                    </div>
                    ";
        // line 192
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "email", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "errors", [], "any", false, false, false, 192)) > 0)) {
            // line 193
            yield "                      <div class=\"text-danger\">
                        ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "email", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "any", false, false, false, 194));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 195
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 195), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "                      </div>
                    ";
        }
        // line 199
        yield "                  </div>

                  <!-- Password -->
                  <div class=\"mb-3 form-password-toggle\">
                    <label for=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "password", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
        yield "\" class=\"form-label\">Mot de passe*</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                      ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "password", [], "any", false, false, false, 206), 'widget');
        yield "
                      <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                    </div>
                    ";
        // line 209
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "password", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "errors", [], "any", false, false, false, 209)) > 0)) {
            // line 210
            yield "                      <div class=\"text-danger\">
                        ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "password", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "errors", [], "any", false, false, false, 211));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 212
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 212), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            yield "                      </div>
                    ";
        }
        // line 216
        yield "                  </div>
                </div>

                <!-- Right Column -->
                <div class=\"col-md-6\">
                  <!-- Numéro de téléphone -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "num_telephone", [], "any", false, false, false, 223), "vars", [], "any", false, false, false, 223), "id", [], "any", false, false, false, 223), "html", null, true);
        yield "\" class=\"form-label\">Téléphone</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                      ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "num_telephone", [], "any", false, false, false, 226), 'widget');
        yield "
                    </div>
                    ";
        // line 228
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "num_telephone", [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "errors", [], "any", false, false, false, 228)) > 0)) {
            // line 229
            yield "                      <div class=\"text-danger\">
                        ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "num_telephone", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "errors", [], "any", false, false, false, 230));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 231
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 231), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "                      </div>
                    ";
        }
        // line 235
        yield "                  </div>

                  <!-- Date de naissance -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 239), "vars", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239), "html", null, true);
        yield "\" class=\"form-label\">Date de naissance</label>
                    <div class=\"input-group input-group-merge\">
                      <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                      ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 242), 'widget');
        yield "
                    </div>
                    ";
        // line 244
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 244), "vars", [], "any", false, false, false, 244), "errors", [], "any", false, false, false, 244)) > 0)) {
            // line 245
            yield "                      <div class=\"text-danger\">
                        ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 246), "vars", [], "any", false, false, false, 246), "errors", [], "any", false, false, false, 246));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 247
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 247), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            yield "                      </div>
                    ";
        }
        // line 251
        yield "                  </div>

                  <!-- Genre -->
                  <div class=\"mb-3\">
                    <label class=\"form-label\">Genre*</label>
                    ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "genre", [], "any", false, false, false, 256));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 257
            yield "                      <div class=\"form-check\">
                        ";
            // line 258
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                        <label class=\"form-check-label\" for=\"";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 259), "id", [], "any", false, false, false, 259), "html", null, true);
            yield "\">
                          <i class=\"bx bx-";
            // line 260
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 260), "label", [], "any", false, false, false, 260) == "Homme")) ? ("male") : ("female"));
            yield "\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 260), "label", [], "any", false, false, false, 260), "html", null, true);
            yield "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "genre", [], "any", false, false, false, 264), "vars", [], "any", false, false, false, 264), "errors", [], "any", false, false, false, 264)) > 0)) {
            // line 265
            yield "                      <div class=\"text-danger\">
                        ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "genre", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "errors", [], "any", false, false, false, 266));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 267
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 267), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            yield "                      </div>
                    ";
        }
        // line 271
        yield "                  </div>

                  <!-- Image -->
                  <div class=\"mb-3\">
                    <label for=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "image", [], "any", false, false, false, 275), "vars", [], "any", false, false, false, 275), "id", [], "any", false, false, false, 275), "html", null, true);
        yield "\" class=\"form-label\">Image</label>
                    ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "image", [], "any", false, false, false, 276), 'widget');
        yield "
                    ";
        // line 277
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "image", [], "any", false, false, false, 277), "vars", [], "any", false, false, false, 277), "errors", [], "any", false, false, false, 277)) > 0)) {
            // line 278
            yield "                      <div class=\"text-danger\">
                        ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "image", [], "any", false, false, false, 279), "vars", [], "any", false, false, false, 279), "errors", [], "any", false, false, false, 279));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 280
                yield "                          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 280), "html", null, true);
                yield "<br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            yield "                      </div>
                    ";
        }
        // line 284
        yield "                  </div>
                </div>
              </div>

              <!-- Conditions -->
              <div class=\"mb-3\">
                <div class=\"form-check\">
                  ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "terms", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                  <label class=\"form-check-label\" for=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "terms", [], "any", false, false, false, 292), "vars", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292), "html", null, true);
        yield "\">
                    J'accepte la <a href=\"javascript:void(0);\" class=\"text-danger\">politique de confidentialité et les termes</a>
                  </label>
                </div>
                ";
        // line 296
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "terms", [], "any", false, false, false, 296), "vars", [], "any", false, false, false, 296), "errors", [], "any", false, false, false, 296)) > 0)) {
            // line 297
            yield "                  <div class=\"text-danger\">
                    ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "terms", [], "any", false, false, false, 298), "vars", [], "any", false, false, false, 298), "errors", [], "any", false, false, false, 298));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 299
                yield "                      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 299), "html", null, true);
                yield "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            yield "                  </div>
                ";
        }
        // line 303
        yield "              </div>

              <!-- Rôle (caché, fixé à \"Utilisateur\") -->
              ";
        // line 306
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "role", [], "any", false, false, false, 306), 'widget');
        yield "

              <button type=\"submit\" class=\"btn btn-danger d-grid w-100\">S'inscrire</button>
              ";
        // line 309
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), 'form_end');
        yield "

              <p class=\"text-center\">
                <span>Déjà un compte ?</span>
                <a href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_auth");
        yield "\" class=\"text-danger\">
                  <span>Se connecter</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Content -->

    <div class=\"buy-now\">
      <a
        href=\"https://themeselection.com/products/sneat-bootstrap-html-admin-template/\"
        target=\"_blank\"
        class=\"btn btn-danger btn-buy-now\"
      >Upgrade to Pro</a>
    </div>

    <!-- Core JS -->
    <script src=\"../assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"../assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"../assets/vendor/js/bootstrap.js\"></script>
    <script src=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"../assets/vendor/js/menu.js\"></script>

    <!-- Main JS -->
    <script src=\"../assets/js/main.js\"></script>

    <!-- GitHub Buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

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
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/register.html.twig";
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
        return array (  634 => 313,  627 => 309,  621 => 306,  616 => 303,  612 => 301,  603 => 299,  599 => 298,  596 => 297,  594 => 296,  587 => 292,  583 => 291,  574 => 284,  570 => 282,  561 => 280,  557 => 279,  554 => 278,  552 => 277,  548 => 276,  544 => 275,  538 => 271,  534 => 269,  525 => 267,  521 => 266,  518 => 265,  515 => 264,  503 => 260,  499 => 259,  495 => 258,  492 => 257,  488 => 256,  481 => 251,  477 => 249,  468 => 247,  464 => 246,  461 => 245,  459 => 244,  454 => 242,  448 => 239,  442 => 235,  438 => 233,  429 => 231,  425 => 230,  422 => 229,  420 => 228,  415 => 226,  409 => 223,  400 => 216,  396 => 214,  387 => 212,  383 => 211,  380 => 210,  378 => 209,  372 => 206,  366 => 203,  360 => 199,  356 => 197,  347 => 195,  343 => 194,  340 => 193,  338 => 192,  333 => 190,  327 => 187,  321 => 183,  317 => 181,  308 => 179,  304 => 178,  301 => 177,  299 => 176,  294 => 174,  288 => 171,  282 => 167,  278 => 165,  269 => 163,  265 => 162,  262 => 161,  260 => 160,  255 => 158,  249 => 155,  241 => 149,  236 => 146,  227 => 144,  223 => 143,  219 => 141,  217 => 140,  211 => 137,  139 => 67,  129 => 63,  126 => 62,  121 => 61,  111 => 57,  108 => 56,  104 => 55,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"../assets/\"
  data-template=\"vertical-menu-template-free\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Register to MatchupZ</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"../assets/img/favicon/favicon.ico\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/fonts/boxicons.css\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/core.css\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"../assets/css/demo.css\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"../assets/vendor/css/pages/page-auth.css\" />

    <!-- Helpers -->
    <script src=\"../assets/vendor/js/helpers.js\"></script>
    <script src=\"../assets/js/config.js\"></script>
  </head>

  <body>
    <!-- Content -->
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
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg
                      width=\"25\"
                      viewBox=\"0 0 25 42\"
                      version=\"1.1\"
                      xmlns=\"http://www.w3.org/2000/svg\"
                      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                    >
                      <defs>
                        <path
                          d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                          id=\"path-1\"
                        ></path>
                        <path
                          d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                          id=\"path-3\"
                        ></path>
                        <path
                          d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                          id=\"path-4\"
                        ></path>
                        <path
                          d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                          id=\"path-5\"
                        ></path>
                      </defs>
                      <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                          <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                              <mask id=\"mask-2\" fill=\"white\">
                                <use xlink:href=\"#path-1\"></use>
                              </mask>
                              <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                              <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                              </g>
                              <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                              </g>
                            </g>
                            <g
                              id=\"Triangle\"
                              transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                            >
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class=\"app-brand-text demo text-body fw-bolder\">MatchupZ</span>
                </a>
              </div>
              <!-- /Logo -->
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
                    J'accepte la <a href=\"javascript:void(0);\" class=\"text-danger\">politique de confidentialité et les termes</a>
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
                <a href=\"{{ path('app_user_auth') }}\" class=\"text-danger\">
                  <span>Se connecter</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Content -->

    <div class=\"buy-now\">
      <a
        href=\"https://themeselection.com/products/sneat-bootstrap-html-admin-template/\"
        target=\"_blank\"
        class=\"btn btn-danger btn-buy-now\"
      >Upgrade to Pro</a>
    </div>

    <!-- Core JS -->
    <script src=\"../assets/vendor/libs/jquery/jquery.js\"></script>
    <script src=\"../assets/vendor/libs/popper/popper.js\"></script>
    <script src=\"../assets/vendor/js/bootstrap.js\"></script>
    <script src=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"../assets/vendor/js/menu.js\"></script>

    <!-- Main JS -->
    <script src=\"../assets/js/main.js\"></script>

    <!-- GitHub Buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

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
  </body>
</html>", "user/register.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\user\\register.html.twig");
    }
}
