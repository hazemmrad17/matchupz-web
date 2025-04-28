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

/* abonnement/_pagination.html.twig */
class __TwigTemplate_104d168655283e38e98ff99067f28571 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_pagination.html.twig"));

        // line 1
        yield "<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item ";
        // line 3
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 3, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 3) == 1)) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 4, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 4) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 4, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">«</span>
            </a>
        </li>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 8, $this->source); })()), "pageCount", [], "any", false, false, false, 8)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            yield "            <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 9, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 9) == $context["i"])) ? ("active") : (""));
            yield "\">
                <a class=\"page-link\" href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => $context["i"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 10, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "        <li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 13, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 13) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 13, $this->source); })()), "pageCount", [], "any", false, false, false, 13))) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 14, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 14) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 14, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Next\">
                <span aria-hidden=\"true\">»</span>
            </a>
        </li>
    </ul>
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
        return "abonnement/_pagination.html.twig";
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
        return array (  88 => 14,  83 => 13,  72 => 10,  67 => 9,  63 => 8,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item {{ abonnements.currentPageNumber == 1 ? 'disabled' : '' }}\">
            <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': abonnements.currentPageNumber - 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">«</span>
            </a>
        </li>
        {% for i in 1..abonnements.pageCount %}
            <li class=\"page-item {{ abonnements.currentPageNumber == i ? 'active' : '' }}\">
                <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': i, 'search': searchTerm|default('')}) }}\">{{ i }}</a>
            </li>
        {% endfor %}
        <li class=\"page-item {{ abonnements.currentPageNumber == abonnements.pageCount ? 'disabled' : '' }}\">
            <a class=\"page-link\" href=\"{{ path('abonnement_index', {'page': abonnements.currentPageNumber + 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Next\">
                <span aria-hidden=\"true\">»</span>
            </a>
        </li>
    </ul>
</nav>", "abonnement/_pagination.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\abonnement\\_pagination.html.twig");
    }
}
