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

/* dashboard/expenses.html.twig */
class __TwigTemplate_d6fbadfb20b5bb097ba102be0a859526 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/expenses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/expenses.html.twig", 1);
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

        yield "Expenses";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Liste des dépenses</h1>
    
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Montant</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expenses"]) || array_key_exists("expenses", $context) ? $context["expenses"] : (function () { throw new RuntimeError('Variable "expenses" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["expense"]) {
            // line 26
            yield "                    <tr>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["expense"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["expense"], "description", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"amount-display\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["expense"], "montant", [], "any", false, false, false, 30), "html", null, true);
            yield " €</span>
                            <form class=\"amount-form d-none\">
                                <div class=\"input-group input-group-sm\">
                                    <input type=\"number\" class=\"form-control\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["expense"], "montant", [], "any", false, false, false, 33), "html", null, true);
            yield "\" step=\"0.01\" required>
                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">✓</button>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm cancel-edit\">✗</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button class=\"btn btn-sm btn-primary edit-amount\">Éditer</button>
                            <a href=\"#\" class=\"btn btn-sm btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucune dépense trouvée</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['expense'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/expense-handler.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.edit-amount').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    row.querySelector('.amount-display').classList.add('d-none');
                    row.querySelector('.amount-form').classList.remove('d-none');
                });
            });

            document.querySelectorAll('.cancel-edit').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    row.querySelector('.amount-display').classList.remove('d-none');
                    row.querySelector('.amount-form').classList.add('d-none');
                });
            });

            document.querySelectorAll('.amount-form').forEach(form => {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const row = this.closest('tr');
                    const id = row.querySelector('td').textContent;
                    const amount = this.querySelector('input').value;

                    if (await handleExpenseUpdate(id, parseFloat(amount))) {
                        row.querySelector('.amount-display').textContent = amount + ' €';
                        row.querySelector('.amount-display').classList.remove('d-none');
                        row.querySelector('.amount-form').classList.add('d-none');
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
        return "dashboard/expenses.html.twig";
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
        return array (  202 => 58,  196 => 56,  186 => 55,  174 => 49,  165 => 45,  148 => 33,  142 => 30,  137 => 28,  133 => 27,  130 => 26,  125 => 25,  109 => 11,  99 => 10,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Expenses{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Liste des dépenses</h1>
    
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Montant</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for expense in expenses %}
                    <tr>
                        <td>{{ expense.id }}</td>
                        <td>{{ expense.description }}</td>
                        <td>
                            <span class=\"amount-display\">{{ expense.montant }} €</span>
                            <form class=\"amount-form d-none\">
                                <div class=\"input-group input-group-sm\">
                                    <input type=\"number\" class=\"form-control\" value=\"{{ expense.montant }}\" step=\"0.01\" required>
                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">✓</button>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm cancel-edit\">✗</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button class=\"btn btn-sm btn-primary edit-amount\">Éditer</button>
                            <a href=\"#\" class=\"btn btn-sm btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucune dépense trouvée</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"{{ asset('js/expense-handler.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.edit-amount').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    row.querySelector('.amount-display').classList.add('d-none');
                    row.querySelector('.amount-form').classList.remove('d-none');
                });
            });

            document.querySelectorAll('.cancel-edit').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    row.querySelector('.amount-display').classList.remove('d-none');
                    row.querySelector('.amount-form').classList.add('d-none');
                });
            });

            document.querySelectorAll('.amount-form').forEach(form => {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const row = this.closest('tr');
                    const id = row.querySelector('td').textContent;
                    const amount = this.querySelector('input').value;

                    if (await handleExpenseUpdate(id, parseFloat(amount))) {
                        row.querySelector('.amount-display').textContent = amount + ' €';
                        row.querySelector('.amount-display').classList.remove('d-none');
                        row.querySelector('.amount-form').classList.add('d-none');
                    }
                });
            });
        });
    </script>
{% endblock %}
", "dashboard/expenses.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\dashboard\\expenses.html.twig");
    }
}
