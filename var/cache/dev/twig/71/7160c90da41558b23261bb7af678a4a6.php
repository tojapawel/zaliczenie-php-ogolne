<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* zgloszenie.html.twig */
class __TwigTemplate_2058edd00ef78ee462642fba893c6e4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zgloszenie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zgloszenie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "zgloszenie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
            id:
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "<br/><br/>

            kategoria:
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 9, $this->source); })()), "getKategoria", [], "any", false, false, false, 9), "nazwa", [], "any", false, false, false, 9), "html", null, true);
        echo "<br/><br/>

            dodane przez:
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 12, $this->source); })()), "getDodanePrzez", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "<br/><br/>

            nazwa:
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 15, $this->source); })()), "nazwa", [], "any", false, false, false, 15), "html", null, true);
        echo "<br/><br/>

            czas dodania:
            ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 18, $this->source); })()), "getCzasDodania", [], "any", false, false, false, 18), "Y-m-d H:i:s"), "html", null, true);
        echo "<br/><br/>

            opis:
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 21, $this->source); })()), "opis", [], "any", false, false, false, 21), "html", null, true);
        echo "<br/><br/>

            status:
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["zgloszenie"]) || array_key_exists("zgloszenie", $context) ? $context["zgloszenie"] : (function () { throw new RuntimeError('Variable "zgloszenie" does not exist.', 24, $this->source); })()), "getStatus", [], "any", false, false, false, 24), "html", null, true);
        echo "<br/><br/>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "zgloszenie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  102 => 21,  96 => 18,  90 => 15,  84 => 12,  78 => 9,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

            id:
            {{ zgloszenie.id }}<br/><br/>

            kategoria:
            {{ zgloszenie.getKategoria.nazwa }}<br/><br/>

            dodane przez:
            {{ zgloszenie.getDodanePrzez.email }}<br/><br/>

            nazwa:
            {{ zgloszenie.nazwa }}<br/><br/>

            czas dodania:
            {{ zgloszenie.getCzasDodania|date('Y-m-d H:i:s') }}<br/><br/>

            opis:
            {{ zgloszenie.opis }}<br/><br/>

            status:
            {{ zgloszenie.getStatus }}<br/><br/>

{% endblock %}", "zgloszenie.html.twig", "/var/www/symfony/templates/zgloszenie.html.twig");
    }
}
