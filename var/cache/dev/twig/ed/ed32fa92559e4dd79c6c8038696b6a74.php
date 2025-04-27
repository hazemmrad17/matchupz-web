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

/* reservation/_pagination.html.twig */
class __TwigTemplate_31f4926c8a2c7bb3d48e597adaf697bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_pagination.html.twig"));

        // line 1
        yield "<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item ";
        // line 3
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 3, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 3) == 1)) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 4, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 4) - 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 4, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">«</span>
            </a>
        </li>
        
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 9, $this->source); })()), "pageCount", [], "any", false, false, false, 9)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            yield "            <li class=\"page-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 10, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 10) == $context["i"])) ? ("active") : (""));
            yield "\">
                <a class=\"page-link\" href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => $context["i"], "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 11, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        
        <li class=\"page-item ";
        // line 15
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 15, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 15) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 15, $this->source); })()), "pageCount", [], "any", false, false, false, 15))) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 16, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 16) + 1), "search" => ((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 16, $this->source); })()), "")) : (""))]), "html", null, true);
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
        return "reservation/_pagination.html.twig";
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
        return array (  91 => 16,  87 => 15,  84 => 14,  73 => 11,  68 => 10,  64 => 9,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item {{ reservations.currentPageNumber == 1 ? 'disabled' : '' }}\">
            <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': reservations.currentPageNumber - 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">«</span>
            </a>
        </li>
        
        {% for i in 1..reservations.pageCount %}
            <li class=\"page-item {{ reservations.currentPageNumber == i ? 'active' : '' }}\">
                <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': i, 'search': searchTerm|default('')}) }}\">{{ i }}</a>
            </li>
        {% endfor %}
        
        <li class=\"page-item {{ reservations.currentPageNumber == reservations.pageCount ? 'disabled' : '' }}\">
            <a class=\"page-link\" href=\"{{ path('reservation_index', {'page': reservations.currentPageNumber + 1, 'search': searchTerm|default('')}) }}\" aria-label=\"Next\">
                <span aria-hidden=\"true\">»</span>
            </a>
        </li>
    </ul>
</nav>", "reservation/_pagination.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\reservation\\_pagination.html.twig");
    }
}
