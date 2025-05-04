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

/* sponsor/_pagination.html.twig */
class __TwigTemplate_d7085610b9321e63d8c91c161cb83001 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/_pagination.html.twig"));

        // line 1
        if ((array_key_exists("sponsors", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 4, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 4) == 1)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link\" href=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 5, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 5) - 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 5, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 5, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-left\"></i></a>
            </li>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 7, $this->source); })()), "getPageCount", [], "method", false, false, false, 7)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 8
                yield "                <li class=\"page-item ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 8, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 8))) {
                    yield "active";
                }
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => $context["page"], "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 9, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 9, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "            <li class=\"page-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 12, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 12) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 12, $this->source); })()), "getPageCount", [], "method", false, false, false, 12))) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link\" href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 13, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 13) + 1), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 13, $this->source); })()), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 13, $this->source); })())]), "html", null, true);
            yield "\"><i class=\"bx bx-chevron-right\"></i></a>
            </li>
        </ul>
    </nav>
    <div class=\"text-center\">
        <small>
            Page ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsors"] ?? null), "currentPageNumber", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 19, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 19), 1)) : (1)), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsors"] ?? null), "getPageCount", [], "method", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 19, $this->source); })()), "getPageCount", [], "method", false, false, false, 19), 1)) : (1)), "html", null, true);
            yield "
        </small>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sponsor/_pagination.html.twig";
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
        return array (  103 => 19,  94 => 13,  87 => 12,  76 => 9,  69 => 8,  65 => 7,  60 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sponsors is defined and sponsors is not empty %}
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item {% if sponsors.currentPageNumber == 1 %}disabled{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber - 1, 'search': searchTerm, 'filter': filter}) }}\"><i class=\"bx bx-chevron-left\"></i></a>
            </li>
            {% for page in 1..sponsors.getPageCount() %}
                <li class=\"page-item {% if page == sponsors.currentPageNumber %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': page, 'search': searchTerm, 'filter': filter}) }}\">{{ page }}</a>
                </li>
            {% endfor %}
            <li class=\"page-item {% if sponsors.currentPageNumber == sponsors.getPageCount() %}disabled{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('sponsor_main', {'page': sponsors.currentPageNumber + 1, 'search': searchTerm, 'filter': filter}) }}\"><i class=\"bx bx-chevron-right\"></i></a>
            </li>
        </ul>
    </nav>
    <div class=\"text-center\">
        <small>
            Page {{ sponsors.currentPageNumber|default(1) }} sur {{ sponsors.getPageCount()|default(1) }}
        </small>
    </div>
{% endif %}", "sponsor/_pagination.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\_pagination.html.twig");
    }
}
