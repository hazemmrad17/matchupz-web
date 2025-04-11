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
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'navbar' => [$this, 'block_navbar'],
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
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />

    <!-- Helpers -->
    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 43
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
        ";
        // line 69
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 72
        yield "
        <!-- Layout page -->
        <div class=\"layout-page\">
          <!-- Navbar -->
          ";
        // line 76
        yield from $this->unwrap()->yieldBlock('searchbar', $context, $blocks);
        // line 79
        yield "
          <!-- Content wrapper -->
          ";
        // line 81
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 88
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

      <!-- Buy Now Button -->
      <div class=\"buy-now\">
        <a
          href=\"https://themeselection.com/products/sneat-bootstrap-html-admin-template/\"
          target=\"_blank\"
          class=\"btn btn-danger btn-buy-now\"
        >Upgrade to Pro</a>
      </div>
    </div>
    
    <!-- Core JS -->
    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page-specific JS -->
    ";
        // line 138
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 141
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

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 70
        yield "          ";
        yield from $this->loadTemplate("navbar.html.twig", "base.html.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "            ";
        yield from $this->loadTemplate("searchbar.html.twig", "base.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "            <div class=\"content-wrapper\">
              <div class=\"container-xxl flex-grow-1 container-p-y\">
                ";
        // line 84
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 85
        yield "              </div>
            </div>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

    // line 138
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

        // line 139
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
        return array (  381 => 139,  368 => 138,  346 => 84,  333 => 85,  331 => 84,  327 => 82,  314 => 81,  303 => 78,  300 => 77,  287 => 76,  276 => 71,  273 => 70,  260 => 69,  244 => 141,  242 => 138,  236 => 135,  230 => 132,  224 => 129,  220 => 128,  216 => 127,  212 => 126,  208 => 125,  169 => 88,  167 => 81,  163 => 79,  161 => 76,  155 => 72,  153 => 69,  124 => 43,  120 => 42,  114 => 39,  110 => 38,  104 => 35,  100 => 34,  96 => 33,  90 => 30,  76 => 19,  61 => 7,  53 => 1,);
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
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/fonts/boxicons.css') }}\" />

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
        {% block navbar %}
          {% include('navbar.html.twig') %}
        {% endblock %}

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

      <!-- Buy Now Button -->
      <div class=\"buy-now\">
        <a
          href=\"https://themeselection.com/products/sneat-bootstrap-html-admin-template/\"
          target=\"_blank\"
          class=\"btn btn-danger btn-buy-now\"
        >Upgrade to Pro</a>
      </div>
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
</html>", "base.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\base.html.twig");
    }
}
