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

/* _partials/_footer.html.twig */
class __TwigTemplate_ec51e69c65537ffc2eb3266cd7df5e49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<div class='container-fluid'>
    <footer class=\"border-top shadow-top pt-5\">
    <div class=\"d-flex justify-content-between\">
      <div class=\"col-6 col-md-3 mb-3 ps-1\">
        <h5 class=\"fw-bold text-primary\">Nos coordonnées</h5>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FooterController::contactDetails"));
        echo "
        <a class=\"link-primary\" href=\"https://maps.app.goo.gl/L3iVpTjkumoR2JSu8\" target=\"blank\">Venir nous voir</a>
      </div>
      <div class=\"col-6 col-md-3 mb-3\">  
        <h5 class=\"fw-bold text-primary\">Nos horaires d'ouverture</h5>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FooterController::hours"));
        echo "  
      </div>
    </div>

      

    <div class=\"d-flex flex-column flex-sm-row justify-content-center py-4 mt-4\">
      <p>© 2024 Garage V. Parrot, SAS Tous droits réservés.</p>
    </div>
  </footer>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='container-fluid'>
    <footer class=\"border-top shadow-top pt-5\">
    <div class=\"d-flex justify-content-between\">
      <div class=\"col-6 col-md-3 mb-3 ps-1\">
        <h5 class=\"fw-bold text-primary\">Nos coordonnées</h5>
        {{ render(controller('App\\\\Controller\\\\FooterController::contactDetails')) }}
        <a class=\"link-primary\" href=\"https://maps.app.goo.gl/L3iVpTjkumoR2JSu8\" target=\"blank\">Venir nous voir</a>
      </div>
      <div class=\"col-6 col-md-3 mb-3\">  
        <h5 class=\"fw-bold text-primary\">Nos horaires d'ouverture</h5>
        {{ render(controller('App\\\\Controller\\\\FooterController::hours')) }}  
      </div>
    </div>

      

    <div class=\"d-flex flex-column flex-sm-row justify-content-center py-4 mt-4\">
      <p>© 2024 Garage V. Parrot, SAS Tous droits réservés.</p>
    </div>
  </footer>
</div>", "_partials/_footer.html.twig", "C:\\wamp64\\www\\symfony\\vparrot\\templates\\_partials\\_footer.html.twig");
    }
}
