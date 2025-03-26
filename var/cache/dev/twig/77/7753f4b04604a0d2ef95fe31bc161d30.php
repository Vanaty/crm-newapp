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

/* dashboard/tickets.html.twig */
class __TwigTemplate_beb4712c49188b80c709af27614dfa79 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/tickets.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/tickets.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tickets";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .priority-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
            text-transform: uppercase;
        }
        .priority-low { background-color: #28a745; color: white; }
        .priority-medium { background-color: #ffc107; color: black; }
        .priority-high { background-color: #fd7e14; color: white; }
        .priority-critical { background-color: #dc3545; color: white; }
        .priority-urgent { background-color: #9c27b0; color: white; }

        .status-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
        }
        .status-open { background-color: #17a2b8; color: white; }
        .status-in-progress { background-color: #007bff; color: white; }
        .status-closed { background-color: #6c757d; color: white; }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            cursor: pointer;
        }
        
        .ticket-subject {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .action-buttons {
            white-space: nowrap;
        }
        
        .search-box {
            max-width: 300px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Tickets</h1>
        <div class=\"search-box\">
            <input type=\"text\" id=\"ticketSearch\" class=\"form-control\" placeholder=\"Rechercher un ticket...\">
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Sujet</th>
                            <th>Priorité</th>
                            <th>Statut</th>
                            <th>Employé</th>
                            <th>Client</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 76
            yield "                            <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\">
                                <td>
                                    <span class=\"ticket-subject\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <span class=\"priority-badge priority-";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 81)), "html", null, true);
            yield "\">
                                        ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <span class=\"status-badge status-";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 86)), [" " => "-"]), "html", null, true);
            yield "\">
                                        ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 87), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "employee", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                                <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "customer", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                                <td class=\"text-end action-buttons\">
                                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_expenses", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 93), "leadId" => 0]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-money-bill\"></i> Dépenses
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-ticket-alt fa-2x mb-3\"></i>
                                        <p>Aucun ticket trouvé</p>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('ticketSearch');
        const rows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Delete functionality with SweetAlert2
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', async function(e) {
                e.preventDefault();
                const row = this.closest('tr');
                const ticketId = row.dataset.id;

                const result = await Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: \"Cette action ne peut pas être annulée !\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                });

                if (result.isConfirmed) {
                    try {
                        const response = await fetch(`/dashboard/tickets/\${ticketId}`, {
                            method: 'DELETE'
                        });
                        const data = await response.json();

                        if (data.success) {
                            row.remove();
                            Swal.fire(
                                'Supprimé !',
                                'Le ticket a été supprimé avec succès.',
                                'success'
                            );
                        } else {
                            throw new Error('Failed to delete');
                        }
                    } catch (error) {
                        Swal.fire(
                            'Erreur !',
                            'Une erreur est survenue lors de la suppression.',
                            'error'
                        );
                    }
                }
            });
        });
    });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/tickets.html.twig";
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
        return array (  275 => 121,  265 => 120,  251 => 112,  237 => 103,  222 => 93,  217 => 91,  213 => 90,  207 => 87,  203 => 86,  196 => 82,  192 => 81,  186 => 78,  180 => 76,  175 => 75,  150 => 52,  140 => 51,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tickets{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .priority-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
            text-transform: uppercase;
        }
        .priority-low { background-color: #28a745; color: white; }
        .priority-medium { background-color: #ffc107; color: black; }
        .priority-high { background-color: #fd7e14; color: white; }
        .priority-critical { background-color: #dc3545; color: white; }
        .priority-urgent { background-color: #9c27b0; color: white; }

        .status-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
        }
        .status-open { background-color: #17a2b8; color: white; }
        .status-in-progress { background-color: #007bff; color: white; }
        .status-closed { background-color: #6c757d; color: white; }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            cursor: pointer;
        }
        
        .ticket-subject {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .action-buttons {
            white-space: nowrap;
        }
        
        .search-box {
            max-width: 300px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Tickets</h1>
        <div class=\"search-box\">
            <input type=\"text\" id=\"ticketSearch\" class=\"form-control\" placeholder=\"Rechercher un ticket...\">
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Sujet</th>
                            <th>Priorité</th>
                            <th>Statut</th>
                            <th>Employé</th>
                            <th>Client</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for ticket in tickets %}
                            <tr data-id=\"{{ ticket.id }}\">
                                <td>
                                    <span class=\"ticket-subject\">{{ ticket.subject }}</span>
                                </td>
                                <td>
                                    <span class=\"priority-badge priority-{{ ticket.priority|lower }}\">
                                        {{ ticket.priority }}
                                    </span>
                                </td>
                                <td>
                                    <span class=\"status-badge status-{{ ticket.status|lower|replace({' ': '-'}) }}\">
                                        {{ ticket.status }}
                                    </span>
                                </td>
                                <td>{{ ticket.employee }}</td>
                                <td>{{ ticket.customer }}</td>
                                <td class=\"text-end action-buttons\">
                                    <a href=\"{{ path('app_expenses', {'ticketId': ticket.id, 'leadId': 0}) }}\" 
                                       class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-money-bill\"></i> Dépenses
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-btn\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-ticket-alt fa-2x mb-3\"></i>
                                        <p>Aucun ticket trouvé</p>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('ticketSearch');
        const rows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Delete functionality with SweetAlert2
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', async function(e) {
                e.preventDefault();
                const row = this.closest('tr');
                const ticketId = row.dataset.id;

                const result = await Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: \"Cette action ne peut pas être annulée !\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                });

                if (result.isConfirmed) {
                    try {
                        const response = await fetch(`/dashboard/tickets/\${ticketId}`, {
                            method: 'DELETE'
                        });
                        const data = await response.json();

                        if (data.success) {
                            row.remove();
                            Swal.fire(
                                'Supprimé !',
                                'Le ticket a été supprimé avec succès.',
                                'success'
                            );
                        } else {
                            throw new Error('Failed to delete');
                        }
                    } catch (error) {
                        Swal.fire(
                            'Erreur !',
                            'Une erreur est survenue lors de la suppression.',
                            'error'
                        );
                    }
                }
            });
        });
    });
    </script>
{% endblock %}
", "dashboard/tickets.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\dashboard\\tickets.html.twig");
    }
}
