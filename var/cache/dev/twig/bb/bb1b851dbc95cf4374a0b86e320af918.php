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

/* _partials/_contactDetails.html.twig */
class __TwigTemplate_cba483b8963399fe4b36dd9acb0047e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_contactDetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_contactDetails.html.twig"));

        // line 1
        echo "<ul class=\"nav flex-column\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 3
            echo "        <li class=\"nav-item mb-2\">Garage ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 3), "html", null, true);
            echo "</li>
        <a href=\"";
            // line 4
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
            echo "\" class=\"link-primary\"><li class=\"nav-item mb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "email", [], "any", false, false, false, 4), "html", null, true);
            echo "</li></a>
        <li class=\"nav-item mb-2\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "telephone", [], "any", false, false, false, 5), "html", null, true);
            echo "</li>
        <li class=\"nav-item mb-2\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "address", [], "any", false, false, false, 6), "html", null, true);
            echo "</li>
        <li class=\"nav-item mb-2\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "zipcode", [], "any", false, false, false, 7), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "city", [], "any", false, false, false, 7), "html", null, true);
            echo "</li>
        <li class=\"nav-item mb-2\"></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_contactDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  69 => 7,  65 => 6,  61 => 5,  55 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav flex-column\">
    {% for company in companies %}
        <li class=\"nav-item mb-2\">Garage {{company.name}}</li>
        <a href=\"{{ path('contact_index') }}\" class=\"link-primary\"><li class=\"nav-item mb-2\">{{company.email}}</li></a>
        <li class=\"nav-item mb-2\">{{company.telephone}}</li>
        <li class=\"nav-item mb-2\">{{company.address}}</li>
        <li class=\"nav-item mb-2\">{{company.zipcode}} {{company.city}}</li>
        <li class=\"nav-item mb-2\"></li>
    {% endfor %}
</ul>
", "_partials/_contactDetails.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\_partials\\_contactDetails.html.twig");
    }
}
