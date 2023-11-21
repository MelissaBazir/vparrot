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

/* _partials/_header.html.twig */
class __TwigTemplate_fb6eaf8332edf59bba9fbc7a4d4b7d4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg\" >
  <div class=\"container-fluid d-flex align-items-start\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_garage.png"), "html", null, true);
        echo "\" alt=\"logo garage\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link link-primary active\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("occasions_list");
        echo "\" class=\"nav-link link-primary\">Nos véhicules d'occasion</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_list");
        echo "\" class=\"nav-link link-primary\">Avis</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        echo "\" class=\"nav-link link-primary\">Contact</a></li>
      </ul>
      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
      
        ";
        // line 23
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "          <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
            echo "\" class=\"nav-link link-primary\">Gestion du site</a></li>
          <li class=\"nav-item\"><a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link link-primary\">Me déconnecter</a></li>
        ";
        } else {
            // line 27
            echo "        <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Espace sécurisé</a></li>
        ";
        }
        // line 29
        echo "      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  97 => 27,  92 => 25,  87 => 24,  84 => 23,  77 => 18,  73 => 17,  69 => 16,  62 => 12,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg\" >
  <div class=\"container-fluid d-flex align-items-start\">
    <a class=\"navbar-brand\" href=\"{{ path('main') }}\">
      <img src=\"{{ asset('images/logo_garage.png') }}\" alt=\"logo garage\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link link-primary active\" href=\"{{ path('main') }}\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\"><a href=\"{{ path('occasions_list') }}\" class=\"nav-link link-primary\">Nos véhicules d'occasion</a></li>
        <li class=\"nav-item\"><a href=\"{{ path('app_review_list') }}\" class=\"nav-link link-primary\">Avis</a></li>
        <li class=\"nav-item\"><a href=\"{{ path('contact_index') }}\" class=\"nav-link link-primary\">Contact</a></li>
      </ul>
      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
      
        {# if i'm connected only #}
        {% if app.user %}
          <li class=\"nav-item\"><a href=\"{{ path('app_review_index') }}\" class=\"nav-link link-primary\">Gestion du site</a></li>
          <li class=\"nav-item\"><a href=\"{{ path('app_logout') }}\" class=\"nav-link link-primary\">Me déconnecter</a></li>
        {% else %}
        <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link\">Espace sécurisé</a></li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>", "_partials/_header.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\_partials\\_header.html.twig");
    }
}
