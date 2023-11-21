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

/* profile/profile/user.html.twig */
class __TwigTemplate_93673a123ef2a77060f83f4ac7b21193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile/user.html.twig", 1);
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

        echo "Garage V. PARROT - Gestion du site";
        
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
        echo "<div class=\"container d-flex\">
<div class=\"col-md-2 col\">
    <div class=\"d-flex flex-column flex-shrink-0 p-1 border rounded\" style=\"width: 9em;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
        <span class=\"fs-4 hidden\">Tableau <br> de bord</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column m-auto\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14) == ["ROLE_ADMIN", "ROLE_USER"])) {
            // line 15
            echo "        
        <li class=\"nav-item\">
        <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-user me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Employés</span>
        </a>
        </li>
        <li>
        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_index");
            echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-building me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Sociétés</span>
        </a>
        </li>
        <li>
        <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_index");
            echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-clock me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Horaires</span>
        </a>
        </li>
        <li>
        <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
            echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-solid fa-screwdriver-wrench me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Services</span>
        </a>
        </li>
        <hr>
        ";
        }
        // line 42
        echo "    <li>
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-star me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Avis</span>
        </a>
        </li>
        <li>
        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_index");
        echo "\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-solid fa-car me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Annonces</span>
        </a>
        </li>
    </ul>
    <hr>
    <div class=\"dropdown\">
        <a href=\"#\" class=\"d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"fa-solid fa-right-from-bracket\" style=\"color: #d92332;\"></i>
        </a>
        <ul class=\"dropdown-menu text-small shadow\">
        <li><a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a></li>
        </ul>
    </div>
    </div>
</div>
<h1 class=\"col-md-8 m-auto\">Bienvenue sur la gestion du site</h1>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 61,  153 => 49,  144 => 43,  141 => 42,  131 => 35,  122 => 29,  113 => 23,  104 => 17,  100 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Garage V. PARROT - Gestion du site{% endblock %}

{% block body %}
<div class=\"container d-flex\">
<div class=\"col-md-2 col\">
    <div class=\"d-flex flex-column flex-shrink-0 p-1 border rounded\" style=\"width: 9em;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
        <span class=\"fs-4 hidden\">Tableau <br> de bord</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column m-auto\">
        {% if app.user.roles == [\"ROLE_ADMIN\",\"ROLE_USER\"] %}
        
        <li class=\"nav-item\">
        <a href=\"{{ path('admin_user_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-user me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Employés</span>
        </a>
        </li>
        <li>
        <a href=\"{{ path('app_company_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-building me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Sociétés</span>
        </a>
        </li>
        <li>
        <a href=\"{{ path('app_opening_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-clock me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Horaires</span>
        </a>
        </li>
        <li>
        <a href=\"{{ path('app_service_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-solid fa-screwdriver-wrench me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Services</span>
        </a>
        </li>
        <hr>
        {% endif %}
    <li>
        <a href=\"{{ path('app_review_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-regular fa-star me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Avis</span>
        </a>
        </li>
        <li>
        <a href=\"{{ path('app_car_index') }}\" class=\"nav-link link-body-emphasis\">
            <i class=\"fa-solid fa-car me-2\" style=\"color: #d92332;\"></i>
            <span class=\"hidden\">Annonces</span>
        </a>
        </li>
    </ul>
    <hr>
    <div class=\"dropdown\">
        <a href=\"#\" class=\"d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"fa-solid fa-right-from-bracket\" style=\"color: #d92332;\"></i>
        </a>
        <ul class=\"dropdown-menu text-small shadow\">
        <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
        </ul>
    </div>
    </div>
</div>
<h1 class=\"col-md-8 m-auto\">Bienvenue sur la gestion du site</h1>
</div>

{% endblock %}
", "profile/profile/user.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\profile\\profile\\user.html.twig");
    }
}
