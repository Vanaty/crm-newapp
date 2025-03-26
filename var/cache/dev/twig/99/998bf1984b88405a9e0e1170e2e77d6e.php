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

/* dashboard/leads.html.twig */
class __TwigTemplate_3e231f7d4793f4b58218bf4aa5c633fd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/leads.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/leads.html.twig", 1);
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

        yield "Leads";
        
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
        .status-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
            text-transform: uppercase;
        }
        .status-new { background-color: #28a745; color: white; }
        .status-in-progress { background-color: #007bff; color: white; }
        .status-converted { background-color: #6c757d; color: white; }
        .status-lost { background-color: #dc3545; color: white; }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            cursor: pointer;
        }
        
        .lead-name {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .action-buttons {
            white-space: nowrap;
        }
        
        .search-box {
            max-width: 300px;
        }

        .budget-warning {
            background-color: rgba(220, 53, 69, 0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Leads</h1>
        <div class=\"search-box\">
            <input type=\"text\" id=\"leadSearch\" class=\"form-control\" placeholder=\"Rechercher un lead...\">
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Lead</th>
                            <th>Téléphone</th>
                            <th>Statut</th>
                            <th>Employé</th>
                            <th>Client</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 69
            yield "                            <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 69), "html", null, true);
            yield "\">
                                <td>
                                    <span class=\"lead-name\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "name", [], "any", false, false, false, 71), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "phone", [], "any", false, false, false, 74)) {
                // line 75
                yield "                                        <a href=\"tel:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "phone", [], "any", false, false, false, 75), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                            <i class=\"fas fa-phone-alt me-1\"></i>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "phone", [], "any", false, false, false, 76), "html", null, true);
                yield "
                                        </a>
                                    ";
            }
            // line 79
            yield "                                </td>
                                <td>
                                    <span class=\"status-badge status-";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "status", [], "any", false, false, false, 81)), [" " => "-"]), "html", null, true);
            yield "\">
                                        ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "status", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <i class=\"fas fa-user me-1\"></i>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "employee", [], "any", false, false, false, 86), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <i class=\"fas fa-building me-1\"></i>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "customer", [], "any", false, false, false, 89), "html", null, true);
            yield "
                                </td>
                                <td class=\"text-end action-buttons\">
                                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_expenses", ["ticketId" => 0, "leadId" => CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 92)]), "html", null, true);
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
            // line 102
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <div class=\"text-muted\">
                                        <i class=\"fas fa-user-tie fa-2x mb-3\"></i>
                                        <p>Aucun lead trouvé</p>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lead'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
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

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('leadSearch');
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
                const leadId = row.dataset.id;

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
                        const response = await fetch(`/dashboard/lead/\${leadId}`, {
                            method: 'DELETE'
                        });
                        const data = await response.json();

                        if (data.status === 'success') {
                            row.remove();
                            Swal.fire(
                                'Supprimé !',
                                'Le lead a été supprimé avec succès.',
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
        return "dashboard/leads.html.twig";
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
        return array (  278 => 120,  268 => 119,  254 => 111,  240 => 102,  225 => 92,  219 => 89,  213 => 86,  206 => 82,  202 => 81,  198 => 79,  192 => 76,  187 => 75,  185 => 74,  179 => 71,  173 => 69,  168 => 68,  143 => 45,  133 => 44,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leads{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .status-badge {
            padding: 0.35em 0.65em;
            border-radius: 0.25rem;
            font-weight: 600;
            font-size: 0.75em;
            text-transform: uppercase;
        }
        .status-new { background-color: #28a745; color: white; }
        .status-in-progress { background-color: #007bff; color: white; }
        .status-converted { background-color: #6c757d; color: white; }
        .status-lost { background-color: #dc3545; color: white; }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            cursor: pointer;
        }
        
        .lead-name {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .action-buttons {
            white-space: nowrap;
        }
        
        .search-box {
            max-width: 300px;
        }

        .budget-warning {
            background-color: rgba(220, 53, 69, 0.1);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Leads</h1>
        <div class=\"search-box\">
            <input type=\"text\" id=\"leadSearch\" class=\"form-control\" placeholder=\"Rechercher un lead...\">
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Lead</th>
                            <th>Téléphone</th>
                            <th>Statut</th>
                            <th>Employé</th>
                            <th>Client</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for lead in leads %}
                            <tr data-id=\"{{ lead.id }}\">
                                <td>
                                    <span class=\"lead-name\">{{ lead.name }}</span>
                                </td>
                                <td>
                                    {% if lead.phone %}
                                        <a href=\"tel:{{ lead.phone }}\" class=\"text-decoration-none\">
                                            <i class=\"fas fa-phone-alt me-1\"></i>{{ lead.phone }}
                                        </a>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"status-badge status-{{ lead.status|lower|replace({' ': '-'}) }}\">
                                        {{ lead.status }}
                                    </span>
                                </td>
                                <td>
                                    <i class=\"fas fa-user me-1\"></i>{{ lead.employee }}
                                </td>
                                <td>
                                    <i class=\"fas fa-building me-1\"></i>{{ lead.customer }}
                                </td>
                                <td class=\"text-end action-buttons\">
                                    <a href=\"{{ path('app_expenses', {'ticketId': 0, 'leadId': lead.id}) }}\" 
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
                                        <i class=\"fas fa-user-tie fa-2x mb-3\"></i>
                                        <p>Aucun lead trouvé</p>
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('leadSearch');
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
                const leadId = row.dataset.id;

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
                        const response = await fetch(`/dashboard/lead/\${leadId}`, {
                            method: 'DELETE'
                        });
                        const data = await response.json();

                        if (data.status === 'success') {
                            row.remove();
                            Swal.fire(
                                'Supprimé !',
                                'Le lead a été supprimé avec succès.',
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
", "dashboard/leads.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\dashboard\\leads.html.twig");
    }
}
