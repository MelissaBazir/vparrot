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

/* car/details.html.twig */
class __TwigTemplate_6374fd6e90d7b6bba99a95a2c69f4f50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Garage V. PARROT - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"mb-4\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)), "html", null, true);
        echo " </h1>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("occasions_list");
        echo "\" class=\"btn btn-outline-secondary m-3\">Retour à la liste</a>

    <div class=\"row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg\">

    <div class=\"row flex-lg-row align-items-center g-5 my-5\">
        <div class=\"col-10 col-sm-8 col-lg-6\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"photo voiture\">
        </div>
        <div class=\"col-lg-6\">
        <div class=\"card my-5 text-center\" style=\"width: 18rem;\">
            <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), 0, ",", " "), "html", null, true);
        echo " €</h5>
            <h6 class=\"card-subtitle mb-2 text-body-secondary\">";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 19, $this->source); })()), "mileage", [], "any", false, false, false, 19), 0, ",", " "), "html", null, true);
        echo " km</h6>
            <p class=\"card-text\">Année de mise en circulation : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 20, $this->source); })()), "year", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
            <p class=\"card-text\">Annonce mise en ligne le : ";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</p>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
        </div>
    </div>
        </div>
    </div>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "car/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 22,  124 => 21,  120 => 20,  116 => 19,  112 => 18,  104 => 13,  95 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Garage V. PARROT - {{car.title}} {% endblock %}

{% block body %}
    <h1 class=\"mb-4\">{{car.title|title}} </h1>
    <a href=\"{{ path('occasions_list') }}\" class=\"btn btn-outline-secondary m-3\">Retour à la liste</a>

    <div class=\"row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg\">

    <div class=\"row flex-lg-row align-items-center g-5 my-5\">
        <div class=\"col-10 col-sm-8 col-lg-6\">
            <img src=\"{{ asset('images/uploads/' ~ car.image) }}\" class=\"d-block w-100\" alt=\"photo voiture\">
        </div>
        <div class=\"col-lg-6\">
        <div class=\"card my-5 text-center\" style=\"width: 18rem;\">
            <div class=\"card-body\">
            <h5 class=\"card-title\">{{ car.price | number_format(0, ',', ' ') }} €</h5>
            <h6 class=\"card-subtitle mb-2 text-body-secondary\">{{ car.mileage | number_format(0, ',', ' ') }} km</h6>
            <p class=\"card-text\">Année de mise en circulation : {{ car.year }}</p>
            <p class=\"card-text\">Annonce mise en ligne le : {{ car.createdAt ? car.createdAt|date('d/m/Y') : '' }}</p>
            <a href=\"{{ path('contact_index') }}\" class=\"btn btn-primary\">En savoir plus</a>
        </div>
    </div>
        </div>
    </div>

    
{% endblock %}
", "car/details.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\car\\details.html.twig");
    }
}
