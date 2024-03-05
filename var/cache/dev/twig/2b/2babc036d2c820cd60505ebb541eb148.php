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

/* car/_filter.html.twig */
class __TwigTemplate_5e13ac2250aa791f3290d60d53cabb95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/_filter.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "filter js-filter-form"]]);
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "q", [], "any", false, false, false, 2), 'row');
        echo "

    <h4>Prix</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "minPrice", [], "any", false, false, false, 7), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "maxPrice", [], "any", false, false, false, 10), 'row');
        echo "
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"price-slider\" data-min-price=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" data-max-price=\"";
        echo twig_escape_filter($this->env, (isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\"></div>

    ";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 15, $this->source); })()), (isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 15, $this->source); })()));
        echo "

    <h4>Année</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "minYear", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "maxYear", [], "any", false, false, false, 23), 'row');
        echo "
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"year-slider\"></div>

    <h4>Kilométrage</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "minMileage", [], "any", false, false, false, 31), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "maxMileage", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"mileage-slider\"></div>

<button type=\"submit\" class=\"btn btn-outline-primary w-100 my-3\">Appliquer le filtre</button>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "car/_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  105 => 34,  99 => 31,  88 => 23,  82 => 20,  74 => 15,  67 => 13,  61 => 10,  55 => 7,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {attr: {class: 'filter js-filter-form'}}) }}
    {{ form_row(form.q) }}

    <h4>Prix</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.minPrice) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.maxPrice) }}
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"price-slider\" data-min-price=\"{{ minPrice }}\" data-max-price=\"{{ maxPrice }}\"></div>

    {{ dump(minPrice,maxPrice) }}

    <h4>Année</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.minYear) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.maxYear) }}
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"year-slider\"></div>

    <h4>Kilométrage</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.minMileage) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.maxMileage) }}
        </div>
    </div>
    <div class=\"mb-3 slider-styled\" id=\"mileage-slider\"></div>

<button type=\"submit\" class=\"btn btn-outline-primary w-100 my-3\">Appliquer le filtre</button>
{{ form_end(form) }}", "car/_filter.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\car\\_filter.html.twig");
    }
}
