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

/* employer/edit.html.twig */
class __TwigTemplate_62bc0c69aa5f3831c60a12c523e47dd33090e8b01975611ec21844b1e7af543f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employer/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Employes index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <!--Main layout-->
    <main class=\"pt-5 mx-lg-5\">
        <div class=\"container-fluid mt-5\">

            <!-- Heading -->
            <div class=\"card mb-4 wow fadeIn\">

                <!--Card content-->
                <div class=\"card-body d-sm-flex justify-content-between\">

                    <h4 class=\"mb-2 mb-sm-0 pt-1\">
                        <a href=\"https://mdbootstrap.com/docs/jquery/\" target=\"_blank\">Home Page</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class=\"d-flex justify-content-center\">
                        <!-- Default input -->
                        <input type=\"search\" placeholder=\"Type your query\" aria-label=\"Search\" class=\"form-control\">
                        <button class=\"btn btn-primary btn-sm my-0 p\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>

                    </form>

                </div>

            </div>
            <!-- Heading -->



            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-12 col-md-12 mb-4\">

                    <!--Card-->
                    <div class=\"card\">

                        <!-- Card header -->
                        <div class=\"card-header\">Employees </div>

                        <!--Card content-->
                        <div class=\"card-body\">


                            <h1>Edit Employer</h1>

                            ";
        // line 58
        echo twig_include($this->env, $context, "employer/_form.html.twig", ["button_label" => "Update"]);
        echo "

                            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_index");
        echo "\">back to list</a>

                            ";
        // line 62
        echo twig_include($this->env, $context, "employer/_delete_form.html.twig");
        echo "

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->


            </div>
            <!--Grid row-->


        </div>
    </main>
    <!--Main layout-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 62,  146 => 60,  141 => 58,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employes index{% endblock %}


{% block body %}

    <!--Main layout-->
    <main class=\"pt-5 mx-lg-5\">
        <div class=\"container-fluid mt-5\">

            <!-- Heading -->
            <div class=\"card mb-4 wow fadeIn\">

                <!--Card content-->
                <div class=\"card-body d-sm-flex justify-content-between\">

                    <h4 class=\"mb-2 mb-sm-0 pt-1\">
                        <a href=\"https://mdbootstrap.com/docs/jquery/\" target=\"_blank\">Home Page</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class=\"d-flex justify-content-center\">
                        <!-- Default input -->
                        <input type=\"search\" placeholder=\"Type your query\" aria-label=\"Search\" class=\"form-control\">
                        <button class=\"btn btn-primary btn-sm my-0 p\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>

                    </form>

                </div>

            </div>
            <!-- Heading -->



            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-12 col-md-12 mb-4\">

                    <!--Card-->
                    <div class=\"card\">

                        <!-- Card header -->
                        <div class=\"card-header\">Employees </div>

                        <!--Card content-->
                        <div class=\"card-body\">


                            <h1>Edit Employer</h1>

                            {{ include('employer/_form.html.twig', {'button_label': 'Update'}) }}

                            <a href=\"{{ path('employer_index') }}\">back to list</a>

                            {{ include('employer/_delete_form.html.twig') }}

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->


            </div>
            <!--Grid row-->


        </div>
    </main>
    <!--Main layout-->


{% endblock %}


", "employer/edit.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\employer\\edit.html.twig");
    }
}
