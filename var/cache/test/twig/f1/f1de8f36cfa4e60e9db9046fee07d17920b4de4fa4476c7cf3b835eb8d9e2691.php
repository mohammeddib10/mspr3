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

/* Common/Header.html.twig */
class __TwigTemplate_a707eb8ae3b57d90ab2334d303fcc073ddc1578468a01fd556705d57f3f312eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/Header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/Header.html.twig"));

        // line 1
        echo "<!--Main Navigation-->
<header>

    <!-- Sidebar -->
    <div class=\"sidebar-fixed position-fixed\">

        ";
        // line 7
        $context["_template"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "_controller"], "method", false, false, false, 7), "::");
        // line 8
        echo "        ";
        $context["bundle"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_template"]) || array_key_exists("_template", $context) ? $context["_template"] : (function () { throw new RuntimeError('Variable "_template" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8), "\\");
        // line 9
        echo "        <a class=\"logo-wrapper waves-effect\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logoey.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
        </a>

        <div class=\"list-group list-group-flush\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" class=\"list-group-item ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 14, $this->source); })()), 2, [], "array", false, false, false, 14), "DashboardController"))) {
            echo " active ";
        }
        echo " list-group-item-action waves-effect\">
                <i class=\"fas fa-globe-europe mr-3\"></i>Acceuil
            </a>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\" class=\"list-group-item ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 17, $this->source); })()), 2, [], "array", false, false, false, 17), "ClientController"))) {
            echo " active ";
        }
        echo " list-group-item-action waves-effect\">
                <i class=\"fas fa-user-friends mr-3\"></i>Clients
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_index");
        echo "\" class=\"list-group-item ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 20, $this->source); })()), 2, [], "array", false, false, false, 20), "EmployerController"))) {
            echo " active ";
        }
        echo " list-group-item-action waves-effect\">
                <i class=\"fas fa-city mr-3\"></i>Employees</a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  76 => 17,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Main Navigation-->
<header>

    <!-- Sidebar -->
    <div class=\"sidebar-fixed position-fixed\">

        {% set _template = app.request.get('_controller')|split('::') %}
        {% set bundle = _template[0]|split('\\\\') %}
        <a class=\"logo-wrapper waves-effect\">
            <img src=\"{{ asset('build/images/logoey.png')}}\" class=\"img-fluid\" alt=\"\">
        </a>

        <div class=\"list-group list-group-flush\">
            <a href=\"{{ path('dashboard') }}\" class=\"list-group-item {% if bundle[2] == 'DashboardController' %} active {% endif %} list-group-item-action waves-effect\">
                <i class=\"fas fa-globe-europe mr-3\"></i>Acceuil
            </a>
            <a href=\"{{ path('client_index') }}\" class=\"list-group-item {% if bundle[2] == 'ClientController' %} active {% endif %} list-group-item-action waves-effect\">
                <i class=\"fas fa-user-friends mr-3\"></i>Clients
            </a>
            <a href=\"{{ path('employer_index') }}\" class=\"list-group-item {% if bundle[2] == 'EmployerController' %} active {% endif %} list-group-item-action waves-effect\">
                <i class=\"fas fa-city mr-3\"></i>Employees</a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->", "Common/Header.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\Common\\Header.html.twig");
    }
}
