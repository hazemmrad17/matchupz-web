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

/* user/auth.html.twig */
class __TwigTemplate_db8530c395fbf790ab1d1f08f6f85c91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/auth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/auth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"/assets/\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Connexion à MatchupZ</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />

    <!-- Helpers -->
    <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>

    <style>
      .is-invalid {
        border-color: #ff3e1d !important;
      }
    </style>
  </head>

  <body>
    <!-- Content -->
    <div class=\"container-xxl\">
      <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
          <!-- Login Card -->
          <div class=\"card\">
            <div class=\"card-body\">
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_auth");
        yield "\" class=\"app-brand-link gap-2\">
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
                          d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
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
              <h4 class=\"mb-2\">Bienvenue sur MatchupZ ! 👋</h4>
              <p class=\"mb-4\">Connectez-vous pour commencer l'aventure</p>

              <!-- Affichage des messages flash -->
              ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "flashes", [], "any", false, false, false, 130));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 131
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 132
                yield "                  <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "
              <form id=\"formAuthentication\" class=\"mb-3\" action=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_user");
        yield "\" method=\"POST\" novalidate>
                <div class=\"mb-3\">
                  <label for=\"username\" class=\"form-label\">Email*</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                    <input 
                      type=\"text\" 
                      name=\"_username\" 
                      id=\"username\" 
                      class=\"form-control\" 
                      placeholder=\"Entrez votre email\" 
                      autofocus
                      value=\"";
        // line 151
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_username", [], "any", false, true, false, 151), "vars", [], "any", false, true, false, 151), "data", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "_username", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "data", [], "any", false, false, false, 151)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "_username", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "data", [], "any", false, false, false, 151), "html", null, true)) : (""));
        yield "\"
                    >
                  </div>
                </div>
                <div class=\"mb-3 form-password-toggle\">
                  <div class=\"d-flex justify-content-between\">
                    <label class=\"form-label\" for=\"password\">Mot de passe*</label>
                    <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_passwordB");
        yield "\">
                      <small>Mot de passe oublié ?</small>
                    </a>
                  </div>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                    <input
                      type=\"password\"
                      id=\"password\"
                      class=\"form-control\"
                      name=\"_password\"
                      placeholder=\"············\"
                      value=\"";
        // line 170
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_password", [], "any", false, true, false, 170), "vars", [], "any", false, true, false, 170), "data", [], "any", true, true, false, 170) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "_password", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "data", [], "any", false, false, false, 170)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "_password", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "data", [], "any", false, false, false, 170), "html", null, true)) : (""));
        yield "\"
                    />
                    <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                  </div>
                </div>
                <div class=\"mb-3\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" name=\"remember-me\" />
                    <label class=\"form-check-label\" for=\"remember-me\"> Se souvenir de moi </label>
                  </div>
                </div>
                <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
              </form>

              <p class=\"text-center\">
                <span>Nouveau sur la plateforme ?</span>
                <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        yield "\">
                  <span>Créer un compte</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Login Card -->
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
    <script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Password Toggle Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Gestion du toggle password
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');
        if (togglePassword) {
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
        return "user/auth.html.twig";
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
        return array (  347 => 214,  341 => 211,  337 => 210,  333 => 209,  329 => 208,  325 => 207,  301 => 186,  282 => 170,  267 => 158,  257 => 151,  242 => 139,  239 => 138,  233 => 137,  223 => 133,  218 => 132,  213 => 131,  209 => 130,  142 => 66,  120 => 47,  116 => 46,  110 => 43,  104 => 40,  98 => 37,  94 => 36,  90 => 35,  84 => 32,  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"/assets/\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Connexion à MatchupZ</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\" />

    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>

    <style>
      .is-invalid {
        border-color: #ff3e1d !important;
      }
    </style>
  </head>

  <body>
    <!-- Content -->
    <div class=\"container-xxl\">
      <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
          <!-- Login Card -->
          <div class=\"card\">
            <div class=\"card-body\">
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"{{ path('app_user_auth') }}\" class=\"app-brand-link gap-2\">
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
                          d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
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
              <h4 class=\"mb-2\">Bienvenue sur MatchupZ ! 👋</h4>
              <p class=\"mb-4\">Connectez-vous pour commencer l'aventure</p>

              <!-- Affichage des messages flash -->
              {% for label, messages in app.flashes %}
                {% for message in messages %}
                  <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                  </div>
                {% endfor %}
              {% endfor %}

              <form id=\"formAuthentication\" class=\"mb-3\" action=\"{{ path('app_verif_user') }}\" method=\"POST\" novalidate>
                <div class=\"mb-3\">
                  <label for=\"username\" class=\"form-label\">Email*</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                    <input 
                      type=\"text\" 
                      name=\"_username\" 
                      id=\"username\" 
                      class=\"form-control\" 
                      placeholder=\"Entrez votre email\" 
                      autofocus
                      value=\"{{ form._username.vars.data ?? '' }}\"
                    >
                  </div>
                </div>
                <div class=\"mb-3 form-password-toggle\">
                  <div class=\"d-flex justify-content-between\">
                    <label class=\"form-label\" for=\"password\">Mot de passe*</label>
                    <a href=\"{{ path('app_forgot_passwordB') }}\">
                      <small>Mot de passe oublié ?</small>
                    </a>
                  </div>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                    <input
                      type=\"password\"
                      id=\"password\"
                      class=\"form-control\"
                      name=\"_password\"
                      placeholder=\"············\"
                      value=\"{{ form._password.vars.data ?? '' }}\"
                    />
                    <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                  </div>
                </div>
                <div class=\"mb-3\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" name=\"remember-me\" />
                    <label class=\"form-check-label\" for=\"remember-me\"> Se souvenir de moi </label>
                  </div>
                </div>
                <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
              </form>

              <p class=\"text-center\">
                <span>Nouveau sur la plateforme ?</span>
                <a href=\"{{ path('app_user_register') }}\">
                  <span>Créer un compte</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Login Card -->
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
    <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <!-- Password Toggle Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Gestion du toggle password
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');
        if (togglePassword) {
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
</html>", "user/auth.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\auth.html.twig");
    }
}
