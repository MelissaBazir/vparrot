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

/* opening/index.html.twig */
class __TwigTemplate_24a4f866f275e3a905d77a8d2445b888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opening/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opening/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opening/index.html.twig", 1);
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

        echo "Garage V. PARROT - Horaires";
        
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
";
        // line 7
        $this->loadTemplate("profile/profile/admin.html.twig", "opening/index.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"col-8\">
        <h1 class=\"mb-4\">Gestion des horaires d'ouverture</h1>

        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_new");
        echo "\" class=\"btn btn-outline-secondary\">Ajouter un nouvel horaire</a>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Jour de la semaine</th>
                    <th>Ouverture - Matin</th>
                    <th>Fermeture - Matin</th>
                    <th>Ouverture - Après-midi</th>
                    <th>Fermeture - Après-midi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["openings"]) || array_key_exists("openings", $context) ? $context["openings"] : (function () { throw new RuntimeError('Variable "openings" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "day", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>

                    <td>";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["opening"], "amOpening", [], "any", false, false, false, 28) == "Fermé")) {
                echo "Fermé ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amOpening", [], "any", false, false, false, 28), "html", null, true);
                echo "
                        ";
            }
            // line 30
            echo "                    </td>
                    <td>";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 31) == "Fermé")) {
                echo "Fermé ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "amClosing", [], "any", false, false, false, 31), "html", null, true);
                echo "
                        ";
            }
            // line 33
            echo "                    </td>
                    <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["opening"], "pmOpening", [], "any", false, false, false, 34) == "Fermé")) {
                echo "Fermé ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmOpening", [], "any", false, false, false, 34), "html", null, true);
                echo "
                        ";
            }
            // line 36
            echo "                    </td>
                    <td>";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 37) == "Fermé")) {
                echo "Fermé ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "pmClosing", [], "any", false, false, false, 37), "html", null, true);
                echo "
                        ";
            }
            // line 39
            echo "                    </td>

                
                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"8\">Il n'y a aucun horaire défini actuellement</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "opening/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 51,  187 => 47,  178 => 43,  172 => 39,  163 => 37,  160 => 36,  151 => 34,  148 => 33,  139 => 31,  136 => 30,  127 => 28,  122 => 26,  119 => 25,  114 => 24,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Garage V. PARROT - Horaires{% endblock %}

{% block body %}
<div class=\"container d-flex\">
{% include \"profile/profile/admin.html.twig\" %}
    <div class=\"col-8\">
        <h1 class=\"mb-4\">Gestion des horaires d'ouverture</h1>

        <a href=\"{{ path('app_opening_new') }}\" class=\"btn btn-outline-secondary\">Ajouter un nouvel horaire</a>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Jour de la semaine</th>
                    <th>Ouverture - Matin</th>
                    <th>Fermeture - Matin</th>
                    <th>Ouverture - Après-midi</th>
                    <th>Fermeture - Après-midi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            {% for opening in openings %}
                <tr>
                    <td>{{ opening.day }}</td>

                    <td>{% if opening.amOpening == 'Fermé' %}Fermé {% else %} {{opening.amOpening}}
                        {% endif %}
                    </td>
                    <td>{% if opening.amClosing == 'Fermé' %}Fermé {% else %} {{opening.amClosing}}
                        {% endif %}
                    </td>
                    <td>{% if opening.pmOpening == 'Fermé' %}Fermé {% else %} {{opening.pmOpening}}
                        {% endif %}
                    </td>
                    <td>{% if opening.pmClosing == 'Fermé' %}Fermé {% else %} {{opening.pmClosing}}
                        {% endif %}
                    </td>

                
                    <td>
                        <a href=\"{{ path('app_opening_edit', {'id': opening.id}) }}\">Modifier</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">Il n'y a aucun horaire défini actuellement</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "opening/index.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\opening\\index.html.twig");
    }
}
