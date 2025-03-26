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

/* settings/budget_alert.html.twig */
class __TwigTemplate_0712751bb8a18a8911fda3780d39f546 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/budget_alert.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "settings/budget_alert.html.twig", 1);
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

        yield "Paramètres d'alerte de budget";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h4 mb-0\">Configuration de l'alerte de budget</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 19
        yield "                    
                    ";
        // line 20
        if ((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "                        <div class=\"alert alert-success\">
                            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 25
        yield "
                    <form method=\"POST\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_budget_alert");
        yield "\">
                        <div class=\"mb-4\">
                            <label for=\"alert_value\" class=\"form-label\">Seuil d'alerte (en pourcentage)</label>
                            <div class=\"input-group\">
                                <input type=\"number\" 
                                       class=\"form-control\" 
                                       id=\"alert_value\" 
                                       name=\"alert_value\" 
                                       value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alert_value"]) || array_key_exists("alert_value", $context) ? $context["alert_value"] : (function () { throw new RuntimeError('Variable "alert_value" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\"
                                       min=\"0\"
                                       max=\"100\"
                                       step=\"1\"
                                       required>
                                <span class=\"input-group-text\">%</span>
                            </div>
                            <div class=\"form-text text-muted\">
                                Définissez le pourcentage du budget à partir duquel vous souhaitez recevoir une alerte.
                            </div>
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>Enregistrer
                            </button>
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "settings/budget_alert.html.twig";
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
        return array (  153 => 50,  134 => 34,  123 => 26,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  106 => 19,  100 => 16,  97 => 15,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres d'alerte de budget{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h4 mb-0\">Configuration de l'alerte de budget</h2>
                </div>
                <div class=\"card-body\">
                    {% if error %}
                        <div class=\"alert alert-danger\">
                            {{ error }}
                        </div>
                    {% endif %}
                    
                    {% if success %}
                        <div class=\"alert alert-success\">
                            {{ success }}
                        </div>
                    {% endif %}

                    <form method=\"POST\" action=\"{{ path('app_settings_budget_alert') }}\">
                        <div class=\"mb-4\">
                            <label for=\"alert_value\" class=\"form-label\">Seuil d'alerte (en pourcentage)</label>
                            <div class=\"input-group\">
                                <input type=\"number\" 
                                       class=\"form-control\" 
                                       id=\"alert_value\" 
                                       name=\"alert_value\" 
                                       value=\"{{ alert_value }}\"
                                       min=\"0\"
                                       max=\"100\"
                                       step=\"1\"
                                       required>
                                <span class=\"input-group-text\">%</span>
                            </div>
                            <div class=\"form-text text-muted\">
                                Définissez le pourcentage du budget à partir duquel vous souhaitez recevoir une alerte.
                            </div>
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>Enregistrer
                            </button>
                            <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "settings/budget_alert.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\settings\\budget_alert.html.twig");
    }
}
