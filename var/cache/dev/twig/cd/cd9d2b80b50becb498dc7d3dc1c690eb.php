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

/* base.html.twig */
class __TwigTemplate_14456eb2a79074cceb2f979f3c2c4a7b extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template-free\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />
    <title>Matchupz Dashboard</title>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/favicon/icon.svg"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />

    <!-- Helpers -->
    <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/config.js"), "html", null, true);
        yield "\"></script>
    <style>
      /* Ensure proper footer placement */
      html, body {
        height: 100%;
      }
      .layout-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      .content-wrapper {
        flex: 1;
      }
      /* Your original footer styles */
      .footer {
        background-color: #f8f9fa !important;
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Menu -->
        

        <!-- Layout page -->
        <div class=\"layout-page\">
          <!-- Navbar -->
          ";
        // line 75
        yield from $this->unwrap()->yieldBlock('searchbar', $context, $blocks);
        // line 78
        yield "
          <!-- Content wrapper -->
          ";
        // line 80
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 87
        yield "        </div>
      </div>

      <!-- Your exact footer code -->
      <footer class=\"footer bg-light\">
        <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
          <div>
            <a href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/\" target=\"_blank\" class=\"footer-text fw-bolder\">Sneat</a>
            ©
          </div>
          <div>
            <div class=\"dropdown dropup footer-link me-3\">
              <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Language
              </button>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-dollar\"></i> Francais</a>
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-euro\"></i> English</a>
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-pound\"></i> Espanol</a>
              </div>
            </div>
            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-danger\"><i class=\"bx bx-log-out-circle\"></i> Logout</a>
          </div>
        </div>
      </footer>
    </div>
    
    <!-- Core JS -->
    <script src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page-specific JS -->
    ";
        // line 128
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 131
        yield "
    <!-- GitHub Buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "            ";
        yield from $this->loadTemplate("searchbar.html.twig", "base.html.twig", 76)->unwrap()->yield($context);
        // line 77
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "            <div class=\"content-wrapper\">
              <div class=\"container-xxl flex-grow-1 container-p-y\">
                ";
        // line 83
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 84
        yield "              </div>
            </div>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        // line 129
        yield "      <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>
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
        return "base.html.twig";
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
        return array (  342 => 129,  329 => 128,  307 => 83,  294 => 84,  292 => 83,  288 => 81,  275 => 80,  264 => 77,  261 => 76,  248 => 75,  232 => 131,  230 => 128,  224 => 125,  218 => 122,  212 => 119,  208 => 118,  204 => 117,  200 => 116,  196 => 115,  166 => 87,  164 => 80,  160 => 78,  158 => 75,  124 => 44,  120 => 43,  114 => 40,  110 => 39,  104 => 36,  100 => 35,  96 => 34,  90 => 31,  75 => 19,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"{{ asset('assets/') }}\"
  data-template=\"vertical-menu-template-free\"
>
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />
    <title>Matchupz Dashboard</title>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/img/favicon/icon.svg') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link href=\"{{ asset('vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/libs/apex-charts/apex-charts.css') }}\" />

    <!-- Helpers -->
    <script src=\"{{ asset('/vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('/js/config.js') }}\"></script>
    <style>
      /* Ensure proper footer placement */
      html, body {
        height: 100%;
      }
      .layout-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      .content-wrapper {
        flex: 1;
      }
      /* Your original footer styles */
      .footer {
        background-color: #f8f9fa !important;
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Menu -->
        

        <!-- Layout page -->
        <div class=\"layout-page\">
          <!-- Navbar -->
          {% block searchbar %}
            {% include('searchbar.html.twig') %}
          {% endblock %}

          <!-- Content wrapper -->
          {% block content %}
            <div class=\"content-wrapper\">
              <div class=\"container-xxl flex-grow-1 container-p-y\">
                {% block body %}{% endblock %}
              </div>
            </div>
          {% endblock %}
        </div>
      </div>

      <!-- Your exact footer code -->
      <footer class=\"footer bg-light\">
        <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
          <div>
            <a href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/\" target=\"_blank\" class=\"footer-text fw-bolder\">Sneat</a>
            ©
          </div>
          <div>
            <div class=\"dropdown dropup footer-link me-3\">
              <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Language
              </button>
              <div class=\"dropdown-menu dropdown-menu-end\">
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-dollar\"></i> Francais</a>
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-euro\"></i> English</a>
                <a class=\"dropdown-item\" href=\"javascript:void(0);\"><i class=\"bx bx-pound\"></i> Espanol</a>
              </div>
            </div>
            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-danger\"><i class=\"bx bx-log-out-circle\"></i> Logout</a>
          </div>
        </div>
      </footer>
    </div>
    
    <!-- Core JS -->
    <script src=\"{{ asset('/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('/vendor/js/menu.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('/vendor/libs/apex-charts/apexcharts.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('/js/main.js') }}\"></script>

    <!-- Page-specific JS -->
    {% block javascripts %}
      <script src=\"{{ asset('/js/dashboards-analytics.js') }}\"></script>
    {% endblock %}

    <!-- GitHub Buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  </body>
</html>", "base.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\base.html.twig");
    }
}
