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

/* _partials/_hours.html.twig */
class __TwigTemplate_42b905be875134b0ee9e2ff6c83ac680 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_hours.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_hours.html.twig"));

        // line 1
        echo "
<ul class=\"nav flex-column\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["openings"]) || array_key_exists("openings", $context) ? $context["openings"] : (function () { throw new RuntimeError('Variable "openings" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            // line 4
            echo "        ";
            if ((((twig_get_attribute($this->env, $this->source, $context["opening"], "amOpening", [], "any", false, false, false, 4) == "Fermé") || ((twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 4) == "Fermé") && (twig_get_attribute($this->env, $this->source, $context["opening"], "pmOpening", [], "any", false, false, false, 4) == "Fermé"))) || (twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 4) == "Fermé"))) {
                // line 5
                echo "            <li class=\"nav-item mb-2\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "day", [], "any", false, false, false, 5)), "html", null, true);
                echo " : Fermé</li>
        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 6
$context["opening"], "pmOpening", [], "any", false, false, false, 6) == "Fermé") || (twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 6) == "Fermé"))) {
                // line 7
                echo "            <li class=\"nav-item mb-2\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "day", [], "any", false, false, false, 7)), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amOpening", [], "any", false, false, false, 7), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 7), "html", null, true);
                echo " / Fermé</li>
        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 8
$context["opening"], "amOpening", [], "any", false, false, false, 8) == "Fermé") || (twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 8) == "Fermé"))) {
                // line 9
                echo "            <li class=\"nav-item mb-2\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "day", [], "any", false, false, false, 9)), "html", null, true);
                echo " : Fermé / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmOpening", [], "any", false, false, false, 9), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 9), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 11
                echo "            <li class=\"nav-item mb-2\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "day", [], "any", false, false, false, 11)), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amOpening", [], "any", false, false, false, 11), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 11), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmOpening", [], "any", false, false, false, 11), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 11), "html", null, true);
                echo "</li>
        ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  96 => 13,  82 => 11,  72 => 9,  70 => 8,  61 => 7,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<ul class=\"nav flex-column\">
    {% for opening in openings %}
        {% if opening.amOpening == 'Fermé' or opening.amClosing == 'Fermé' and opening.pmOpening == 'Fermé' or opening.pmClosing == 'Fermé'  %}
            <li class=\"nav-item mb-2\">{{opening.day|title}} : Fermé</li>
        {% elseif opening.pmOpening == 'Fermé' or opening.pmClosing == 'Fermé' %}
            <li class=\"nav-item mb-2\">{{opening.day|title}} : {{opening.amOpening}} -  {{opening.amClosing}} / Fermé</li>
        {% elseif opening.amOpening == 'Fermé' or opening.amClosing == 'Fermé' %}
            <li class=\"nav-item mb-2\">{{opening.day|title}} : Fermé / {{opening.pmOpening}} -  {{opening.pmClosing}}</li>
        {% else %}
            <li class=\"nav-item mb-2\">{{opening.day|title}} : {{opening.amOpening}} -  {{opening.amClosing}} / {{opening.pmOpening}} -  {{opening.pmClosing}}</li>
        {% endif %}
    {% endfor %}
</ul>



", "_partials/_hours.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\_partials\\_hours.html.twig");
    }
}
