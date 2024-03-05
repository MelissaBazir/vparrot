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

/* main/index.html.twig */
class __TwigTemplate_d1d051a777c35820ac1765c039ee0165 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Garage V. PARROT - Accueil ";
        
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
        echo "    <div class=\"container col-xxl-8 px-4 py-5\">
    <div class=\"row flex-lg-row-reverse align-items-center g-5 py-5 h-100\">
        <div class=\"col-10 col-sm-8 col-lg-4 mt-0\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo_mécanicien.jpg"), "html", null, true);
        echo "\" class=\"d-block w-75\" alt=\"photo mécanicien\">
        </div>
        <div class=\"col-lg-8 mt-0\">
            <h1 class=\" fw-bold text-body-emphasis h-1 mb-3\">Bienvenue au Garage V. Parrot</h1>
            <p class=\"\">Installé à Toulouse depuis 2021, notre garage est à votre service dans nos nombreux domaines d'expertise</p>
            <div class=\"d-grid gap-2 d-md-flex justify-content-md-start\">
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("occasions_list");
        echo "\" class=\"btn btn-outline-primary btn px-4 me-md-2\">Voir nos véhicules d'occasion</a>
            </div>
            <h4 class=\"mt-4\">Toute une gamme de services professionnels</h4>
            <ul>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 20
            echo "            <div class=\"d-flex my-2\">
                <i class=\"fa-solid fa-screwdriver-wrench\" style=\"color: #d92332;\"></i>
                <li class=\"ps-4\"> ";
            // line 22
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 22)), "html", null, true);
            echo " </li>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 25,  117 => 22,  113 => 20,  109 => 19,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Garage V. PARROT - Accueil {% endblock %}

{% block body %}
    <div class=\"container col-xxl-8 px-4 py-5\">
    <div class=\"row flex-lg-row-reverse align-items-center g-5 py-5 h-100\">
        <div class=\"col-10 col-sm-8 col-lg-4 mt-0\">
            <img src=\"{{ asset('images/photo_mécanicien.jpg') }}\" class=\"d-block w-75\" alt=\"photo mécanicien\">
        </div>
        <div class=\"col-lg-8 mt-0\">
            <h1 class=\" fw-bold text-body-emphasis h-1 mb-3\">Bienvenue au Garage V. Parrot</h1>
            <p class=\"\">Installé à Toulouse depuis 2021, notre garage est à votre service dans nos nombreux domaines d'expertise</p>
            <div class=\"d-grid gap-2 d-md-flex justify-content-md-start\">
                <a href=\"{{ path('occasions_list') }}\" class=\"btn btn-outline-primary btn px-4 me-md-2\">Voir nos véhicules d'occasion</a>
            </div>
            <h4 class=\"mt-4\">Toute une gamme de services professionnels</h4>
            <ul>
            {% for service in services %}
            <div class=\"d-flex my-2\">
                <i class=\"fa-solid fa-screwdriver-wrench\" style=\"color: #d92332;\"></i>
                <li class=\"ps-4\"> {{service.title|title}} </li>
            </div>
            {% endfor %}
            </ul>
        </div>
    </div>
    </div>
{% endblock %}
", "main/index.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\main\\index.html.twig");
    }
}
