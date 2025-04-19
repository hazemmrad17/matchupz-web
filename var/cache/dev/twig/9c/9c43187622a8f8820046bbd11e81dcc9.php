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

/* joueur/index.html.twig */
class __TwigTemplate_ea011fb47094d70ef7824d14778c175e extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'widgets' => [$this, 'block_widgets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/index.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Joueurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Tableau de Bord
            </h4>
            ";
        // line 14
        yield from $this->unwrap()->yieldBlock('widgets', $context, $blocks);
        // line 17
        yield "
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Joueurs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un joueur...\"
                                    aria-label=\"Rechercher un joueur...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_new");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Joueur
                        </a>
                        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_statistics");
        yield "\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_csv");
        yield "\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_pdf");
        yield "\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_export_excel");
        yield "\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"joueursTable\">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sport</th>
                                <th>Date de Naissance</th>
                                <th>Poste</th>
                                <th>Taille (m)</th>
                                <th>Poids (kg)</th>
                                <th>Statut</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 76
            yield "                                <tr class=\"table-default\">
                                    <td>
                                        ";
            // line 78
            if (CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 78)) {
                // line 79
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 79), "html", null, true);
                yield "\" alt=\"Photo de profil de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 79), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 79), "html", null, true);
                yield "\" class=\"rounded-circle\" style=\"width: 40px; height: 40px; object-fit: cover;\" onerror=\"this.src='/path/to/default-image.jpg';\">
                                        ";
            } else {
                // line 81
                yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
            }
            // line 83
            yield "                                    </td>
                                    <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 84), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                    <td>";
            // line 86
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 86), "nomSport", [], "any", true, true, false, 86) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 86), "nomSport", [], "any", false, false, false, 86)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 86), "nomSport", [], "any", false, false, false, 86), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 87
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 87)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 88
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", true, true, false, 88) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 88)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 88), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 89
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 89), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 90
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poids", [], "any", false, false, false, 90), 2, ".", ","), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", true, true, false, 91) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 91)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 91), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 92)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "email", [], "any", false, false, false, 92), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 93
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", true, true, false, 93) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 93)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "telephone", [], "any", false, false, false, 93), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 107))), "html", null, true);
            yield "\">
                                                    <button class=\"dropdown-item\" type=\"submit\">
                                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 116
        if (!$context['_iterated']) {
            // line 117
            yield "                                <tr>
                                    <td colspan=\"12\" class=\"text-center\">Aucun joueur trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item ";
        // line 129
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 129, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 130, $this->source); })()) - 1)]), "html", null, true);
        yield "\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">&laquo;</span>
                                </a>
                            </li>
                            
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 135, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 136
            yield "                                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 136, $this->source); })()) == $context["i"])) ? ("active") : (""));
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => $context["i"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "                            
                            <li class=\"page-item ";
        // line 141
        yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 141, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 141, $this->source); })()))) ? ("disabled") : (""));
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 142, $this->source); })()) + 1)]), "html", null, true);
        yield "\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widgets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 15
        yield "                ";
        yield from $this->loadTemplate("joueur/widgets.html.twig", "joueur/index.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
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

        // line 155
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('joueursTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.toLowerCase();
                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cells = row.getElementsByTagName('td');
                    let match = false;
                    for (let j = 0; j < cells.length; j++) {
                        const cellText = cells[j].textContent.toLowerCase();
                        if (cellText.includes(searchText)) {
                            match = true;
                            break;
                        }
                    }
                    row.style.display = match ? '' : 'none';
                }
            });

            // Player Distribution Chart
            var distributionOptions = {
                chart: {
                    type: 'bar',
                    height: 300
                },
                series: [{
                    name: 'Avg Score',
                    data: ";
        // line 188
        yield json_encode((isset($context["sport_distribution"]) || array_key_exists("sport_distribution", $context) ? $context["sport_distribution"] : (function () { throw new RuntimeError('Variable "sport_distribution" does not exist.', 188, $this->source); })()));
        yield "
                }],
                xaxis: {
                    categories: ";
        // line 191
        yield json_encode((isset($context["sport_names"]) || array_key_exists("sport_names", $context) ? $context["sport_names"] : (function () { throw new RuntimeError('Variable "sport_names" does not exist.', 191, $this->source); })()));
        yield "
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" / 100\"
                        }
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) {
                        return val.toFixed(1)
                    }
                },
                yaxis: {
                    max: 100,
                    title: {
                        text: 'Average Performance Score'
                    }
                }
            };
            var distributionChart = new ApexCharts(document.querySelector(\"#totalRevenueChart\"), distributionOptions);
            distributionChart.render();

            // Physical Fitness Chart
            var physicalOptions = {
                chart: {
                    type: 'radar',
                    height: 200
                },
                series: [{
                    name: 'Physical Stats',
                    data: ";
        // line 231
        yield json_encode((isset($context["physical_data"]) || array_key_exists("physical_data", $context) ? $context["physical_data"] : (function () { throw new RuntimeError('Variable "physical_data" does not exist.', 231, $this->source); })()));
        yield "
                }],
                labels: ['Endurance', 'Strength', 'Speed'],
                plotOptions: {
                    radar: {
                        size: 80,
                        polygons: {
                            strokeColors: '#e9ecef',
                            fill: {
                                colors: ['#f8f9fa', '#fff']
                            }
                        }
                    }
                },
                yaxis: {
                    max: 10,
                    stepSize: 2
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" / 10\"
                        }
                    }
                }
            };
            var physicalChart = new ApexCharts(document.querySelector(\"#growthChart\"), physicalOptions);
            physicalChart.render();
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
        return "joueur/index.html.twig";
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
        return array (  524 => 231,  481 => 191,  475 => 188,  438 => 155,  425 => 154,  414 => 16,  411 => 15,  398 => 14,  376 => 142,  372 => 141,  369 => 140,  358 => 137,  353 => 136,  349 => 135,  341 => 130,  337 => 129,  327 => 121,  318 => 117,  316 => 116,  302 => 107,  298 => 106,  292 => 103,  286 => 100,  276 => 93,  272 => 92,  268 => 91,  264 => 90,  260 => 89,  256 => 88,  252 => 87,  248 => 86,  244 => 85,  240 => 84,  237 => 83,  233 => 81,  223 => 79,  221 => 78,  217 => 76,  212 => 75,  185 => 51,  181 => 50,  177 => 49,  166 => 41,  160 => 38,  137 => 17,  135 => 14,  128 => 9,  115 => 8,  92 => 6,  80 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Liste des Joueurs{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Tableau de Bord
            </h4>
            {% block widgets %}
                {% include 'joueur/widgets.html.twig' %}
            {% endblock %}

            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <!-- Title and Search Bar on the left -->
                    <div class=\"d-flex align-items-center\">
                        <span>Liste des Joueurs</span>
                        <div class=\"navbar-nav align-items-center ms-3\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher un joueur...\"
                                    aria-label=\"Rechercher un joueur...\"
                                    id=\"searchInput\"
                                />
                            </div>
                        </div>
                    </div>
                    <!-- Buttons on the right -->
                    <div>
                        <a href=\"{{ path('joueur_new') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-plus\"></i> Nouveau Joueur
                        </a>
                        <a href=\"{{ path('joueur_statistics') }}\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-stats\"></i> Statistiques
                        </a>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn dropdown-toggle btn-yellow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"bx bx-export me-1\"></i> Exporter
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_csv') }}\">Exporter en CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_pdf') }}\">Exporter en PDF</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('joueur_export_excel') }}\">Exporter en Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\" id=\"joueursTable\">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sport</th>
                                <th>Date de Naissance</th>
                                <th>Poste</th>
                                <th>Taille (m)</th>
                                <th>Poids (kg)</th>
                                <th>Statut</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% for joueur in joueurs %}
                                <tr class=\"table-default\">
                                    <td>
                                        {% if joueur.profilePictureUrl %}
                                            <img src=\"{{ joueur.profilePictureUrl }}\" alt=\"Photo de profil de {{ joueur.prenom }} {{ joueur.nom }}\" class=\"rounded-circle\" style=\"width: 40px; height: 40px; object-fit: cover;\" onerror=\"this.src='/path/to/default-image.jpg';\">
                                        {% else %}
                                            <span class=\"text-muted\">N/A</span>
                                        {% endif %}
                                    </td>
                                    <td><i class=\"fab fa-sketch fa-lg text-warning me-3\"></i><strong>{{ joueur.nom }}</strong></td>
                                    <td>{{ joueur.prenom }}</td>
                                    <td>{{ joueur.sport.nomSport ?? 'N/A' }}</td>
                                    <td>{{ joueur.dateNaissance ? joueur.dateNaissance|date('d/m/Y') : 'N/A' }}</td>
                                    <td>{{ joueur.poste ?? 'N/A' }}</td>
                                    <td>{{ joueur.taille ? joueur.taille|number_format(2, '.', ',') : 'N/A' }}</td>
                                    <td>{{ joueur.poids ? joueur.poids|number_format(2, '.', ',') : 'N/A' }}</td>
                                    <td>{{ joueur.statut ?? 'N/A' }}</td>
                                    <td>{{ joueur.email ?? 'N/A' }}</td>
                                    <td>{{ joueur.telephone ?? 'N/A' }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_show', {'id': joueur.idJoueur}) }}\">
                                                    <i class=\"bx bx-show me-1\"></i> Voir
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_edit', {'id': joueur.idJoueur}) }}\">
                                                    <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                </a>
                                                <form method=\"post\" action=\"{{ path('joueur_delete', {'id': joueur.idJoueur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ joueur.idJoueur) }}\">
                                                    <button class=\"dropdown-item\" type=\"submit\">
                                                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"12\" class=\"text-center\">Aucun joueur trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class=\"card-footer\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('joueur_main', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                    <span aria-hidden=\"true\">&laquo;</span>
                                </a>
                            </li>
                            
                            {% for i in 1..totalPages %}
                                <li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
                                    <a class=\"page-link\" href=\"{{ path('joueur_main', {'page': i}) }}\">{{ i }}</a>
                                </li>
                            {% endfor %}
                            
                            <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                                <a class=\"page-link\" href=\"{{ path('joueur_main', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('joueursTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.toLowerCase();
                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cells = row.getElementsByTagName('td');
                    let match = false;
                    for (let j = 0; j < cells.length; j++) {
                        const cellText = cells[j].textContent.toLowerCase();
                        if (cellText.includes(searchText)) {
                            match = true;
                            break;
                        }
                    }
                    row.style.display = match ? '' : 'none';
                }
            });

            // Player Distribution Chart
            var distributionOptions = {
                chart: {
                    type: 'bar',
                    height: 300
                },
                series: [{
                    name: 'Avg Score',
                    data: {{ sport_distribution|json_encode|raw }}
                }],
                xaxis: {
                    categories: {{ sport_names|json_encode|raw }}
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" / 100\"
                        }
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) {
                        return val.toFixed(1)
                    }
                },
                yaxis: {
                    max: 100,
                    title: {
                        text: 'Average Performance Score'
                    }
                }
            };
            var distributionChart = new ApexCharts(document.querySelector(\"#totalRevenueChart\"), distributionOptions);
            distributionChart.render();

            // Physical Fitness Chart
            var physicalOptions = {
                chart: {
                    type: 'radar',
                    height: 200
                },
                series: [{
                    name: 'Physical Stats',
                    data: {{ physical_data|json_encode|raw }}
                }],
                labels: ['Endurance', 'Strength', 'Speed'],
                plotOptions: {
                    radar: {
                        size: 80,
                        polygons: {
                            strokeColors: '#e9ecef',
                            fill: {
                                colors: ['#f8f9fa', '#fff']
                            }
                        }
                    }
                },
                yaxis: {
                    max: 10,
                    stepSize: 2
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" / 10\"
                        }
                    }
                }
            };
            var physicalChart = new ApexCharts(document.querySelector(\"#growthChart\"), physicalOptions);
            physicalChart.render();
        });
    </script>
{% endblock %}", "joueur/index.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\joueur\\index.html.twig");
    }
}
