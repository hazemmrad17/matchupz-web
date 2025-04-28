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

/* reservation/show.html.twig */
class __TwigTemplate_e5ecde17d34146366de831d22ebe3cee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Réservations /</span> Détails de la Réservation
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Réservation #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "idReservation", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
                    <div>
                        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "idReservation", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        ";
        // line 15
        if ((isset($context["isSyncedWithGoogleCalendar"]) || array_key_exists("isSyncedWithGoogleCalendar", $context) ? $context["isSyncedWithGoogleCalendar"] : (function () { throw new RuntimeError('Variable "isSyncedWithGoogleCalendar" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "                            <button class=\"btn btn-sm btn-success\" disabled>Ajouté à Google Calendar</button>
                        ";
        } else {
            // line 18
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_add_to_google_calendar", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 18, $this->source); })()), "idReservation", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">Ajouter à Google Calendar</a>
                        ";
        }
        // line 20
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                        <form method=\"post\" action=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "idReservation", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce sport ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "idReservation", [], "any", false, false, false, 22))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Lieu Sportif</h6>
                            <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "espacesportif", [], "any", false, false, false, 34), "nom_espace", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Date Réservée</h6>
                            <p>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "dateReservee", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Motif</h6>
                            <p>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "motif", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Statut</h6>
                            <p>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    <!-- Add the Google Calendar embed below the reservation details -->
                    <div class=\"row mt-4\">
                        <div class=\"col-12\">
                            <h6>Calendrier des Réservations</h6>
                            ";
        // line 54
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["google_access_token"], "method", false, false, false, 54)) {
            // line 55
            yield "                                <div class=\"alert alert-info mb-3\" role=\"alert\">
                                    Veuillez vous connecter à votre compte Google pour afficher le calendrier.
                                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("google_auth", ["redirect_to" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "idReservation", [], "any", false, false, false, 57)])]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary ms-2\">
                                        Se connecter à Google
                                    </a>
                                </div>
                            ";
        }
        // line 62
        yield "                            <iframe src=\"https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Africa%2FTunis&showPrint=0&src=Y29udGFjdC5yZWVmaW5pdHlAZ21haWwuY29t&src=ZW4udG4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043\" style=\"border:solid 1px #777; width: 100%; max-width: 1200px;\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
                            <p class=\"text-muted mt-2\">Si le calendrier ne s'affiche pas, assurez-vous d'être connecté à votre compte Google ou contactez l'administrateur pour obtenir les permissions nécessaires.</p>
                        </div>
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
        return "reservation/show.html.twig";
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
        return array (  177 => 62,  169 => 57,  165 => 55,  163 => 54,  152 => 46,  145 => 42,  138 => 38,  131 => 34,  116 => 22,  112 => 21,  107 => 20,  101 => 18,  97 => 16,  95 => 15,  91 => 14,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Réservations /</span> Détails de la Réservation
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Réservation #{{ reservation.idReservation }}</h5>
                    <div>
                        <a href=\"{{ path('reservation_edit', {'id_reservation': reservation.idReservation}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        {% if isSyncedWithGoogleCalendar %}
                            <button class=\"btn btn-sm btn-success\" disabled>Ajouté à Google Calendar</button>
                        {% else %}
                            <a href=\"{{ path('reservation_add_to_google_calendar', {'id_reservation': reservation.idReservation}) }}\" class=\"btn btn-sm btn-success\">Ajouter à Google Calendar</a>
                        {% endif %}
                        <a href=\"{{ path('reservation_index') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                        <form method=\"post\" action=\"{{ path('reservation_delete', {'id_reservation': reservation.idReservation}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce sport ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.idReservation) }}\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Lieu Sportif</h6>
                            <p>{{ reservation.espacesportif.nom_espace }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Date Réservée</h6>
                            <p>{{ reservation.dateReservee|date('d/m/Y H:i') }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Motif</h6>
                            <p>{{ reservation.motif }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Statut</h6>
                            <p>{{ reservation.status }}</p>
                        </div>
                    </div>

                    <!-- Add the Google Calendar embed below the reservation details -->
                    <div class=\"row mt-4\">
                        <div class=\"col-12\">
                            <h6>Calendrier des Réservations</h6>
                            {% if not app.session.get('google_access_token') %}
                                <div class=\"alert alert-info mb-3\" role=\"alert\">
                                    Veuillez vous connecter à votre compte Google pour afficher le calendrier.
                                    <a href=\"{{ path('google_auth', {'redirect_to': path('reservation_show', {'id_reservation': reservation.idReservation}) }) }}\" class=\"btn btn-sm btn-primary ms-2\">
                                        Se connecter à Google
                                    </a>
                                </div>
                            {% endif %}
                            <iframe src=\"https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Africa%2FTunis&showPrint=0&src=Y29udGFjdC5yZWVmaW5pdHlAZ21haWwuY29t&src=ZW4udG4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043\" style=\"border:solid 1px #777; width: 100%; max-width: 1200px;\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
                            <p class=\"text-muted mt-2\">Si le calendrier ne s'affiche pas, assurez-vous d'être connecté à votre compte Google ou contactez l'administrateur pour obtenir les permissions nécessaires.</p>
                        </div>
                    </div>
                </div>
            </div>                                                      
        </div>
    </div>
{% endblock %}", "reservation/show.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\reservation\\show.html.twig");
    }
}
