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

/* searchbar.html.twig */
class __TwigTemplate_31807d03aea181a48afba9191dfa2247 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchbar.html.twig"));

        // line 1
        yield "<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                <i class=\"bx bx-menu bx-sm\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center\">
                <div class=\"nav-item d-flex align-items-center\">
                  <i class=\"bx bx-search fs-4 lh-0\"></i>
                  <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" aria-label=\"Search...\">
                </div>
              </div>
              <!-- /Search -->

              <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                <!-- Place this tag where you want the button to render. -->
                <li class=\"nav-item lh-1 me-3\">
                  <span></span>
                </li>

                <!-- User -->
                <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
        yield "\" alt/img/avatars/1.png\" alt=\"\" class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <div class=\"d-flex\">
                          <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
                              <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/1.png"), "html", null, true);
        yield "\" alt/img/avatars/1.png\" alt=\"\" class=\"w-px-40 h-auto rounded-circle\">
                            </div>
                          </div>
                          <div class=\"flex-grow-1\">
                            <span class=\"fw-semibold d-block\">John Doe</span>
                            <small class=\"text-muted\">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bx bx-user me-2\"></i>
                        <span class=\"align-middle\">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bx bx-cog me-2\"></i>
                        <span class=\"align-middle\">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"auth-login-basic.html\">
                        <i class=\"bx bx-power-off me-2\"></i>
                        <span class=\"align-middle\">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "searchbar.html.twig";
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
        return array (  89 => 37,  77 => 28,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
              <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                <i class=\"bx bx-menu bx-sm\"></i>
              </a>
            </div>

            <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center\">
                <div class=\"nav-item d-flex align-items-center\">
                  <i class=\"bx bx-search fs-4 lh-0\"></i>
                  <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" aria-label=\"Search...\">
                </div>
              </div>
              <!-- /Search -->

              <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                <!-- Place this tag where you want the button to render. -->
                <li class=\"nav-item lh-1 me-3\">
                  <span></span>
                </li>

                <!-- User -->
                <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"{{ asset('/img/avatars/1.png') }}\" alt/img/avatars/1.png\" alt=\"\" class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <div class=\"d-flex\">
                          <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
                              <img src=\"{{ asset('/img/avatars/1.png') }}\" alt/img/avatars/1.png\" alt=\"\" class=\"w-px-40 h-auto rounded-circle\">
                            </div>
                          </div>
                          <div class=\"flex-grow-1\">
                            <span class=\"fw-semibold d-block\">John Doe</span>
                            <small class=\"text-muted\">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bx bx-user me-2\"></i>
                        <span class=\"align-middle\">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bx bx-cog me-2\"></i>
                        <span class=\"align-middle\">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"#\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"auth-login-basic.html\">
                        <i class=\"bx bx-power-off me-2\"></i>
                        <span class=\"align-middle\">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>", "searchbar.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-0\\matchupz-web-0\\templates\\searchbar.html.twig");
    }
}
