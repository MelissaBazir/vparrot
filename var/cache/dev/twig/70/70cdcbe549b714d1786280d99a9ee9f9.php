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

/* car/_card.html.twig */
class __TwigTemplate_49feefd9baab0cf75b1c8ba879cd7edf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_card.html.twig"));

        // line 1
        echo "
<div class=\"card m-3 col-4 text-center\" style=\"width: 18rem;\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"photo #{car.image}\">
        

    <div class=\"card-body\">
        <h5 class=\"card-title fw-bold\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h5>
        <p class=\"card-title fw-bold fs-5 text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 8, $this->source); })()), "price", [], "any", false, false, false, 8), 0, ",", " "), "html", null, true);
        echo " €</p>
        <p class=\"card-text text-muted fw-bold\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 9, $this->source); })()), "year", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p class=\"card-text text-muted fw-bold\">";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 10, $this->source); })()), "mileage", [], "any", false, false, false, 10), 0, ",", " "), "html", null, true);
        echo " km</p>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("occasions_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Détails</a>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "car/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card m-3 col-4 text-center\" style=\"width: 18rem;\">
    <img src=\"{{ asset('images/uploads/'~ car.image) }}\" class=\"card-img-top\" alt=\"photo #{car.image}\">
        

    <div class=\"card-body\">
        <h5 class=\"card-title fw-bold\">{{car.title}}</h5>
        <p class=\"card-title fw-bold fs-5 text-primary\">{{car.price | number_format(0, ',', ' ')}} €</p>
        <p class=\"card-text text-muted fw-bold\">{{car.year}}</p>
        <p class=\"card-text text-muted fw-bold\">{{car.mileage | number_format(0, ',', ' ')}} km</p>
        <a href=\"{{ path('occasions_details', {'slug': car.slug}) }}\" class=\"btn btn-primary\">Détails</a>
    </div>
</div>
", "car/_card.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\car\\_card.html.twig");
    }
}
