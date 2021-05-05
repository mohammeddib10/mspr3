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

/* employer/show.html.twig */
class __TwigTemplate_a803e1d3c6c0e9dd0ab0684809166c3ff26c9b1f26cb13d52c82df261420952c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employer/show.html.twig", 1);
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

        echo "Personne index";
        
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
                        <div class=\"card-header\">Employer </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <h1>Employer</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Firsname</th>
                                    <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 65, $this->source); })()), "firsname", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 69, $this->source); })()), "lastname", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Birthdaydate</th>
                                    <td>";
        // line 73
        ((twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 73, $this->source); })()), "birthdaydate", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 73, $this->source); })()), "birthdaydate", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Salary</th>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 77, $this->source); })()), "salary", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Entreprise</th>
                                    <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 81, $this->source); })()), "entreprise", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_index");
        echo "\">Retour à la liste</a>

                            <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employer"]) || array_key_exists("employer", $context) ? $context["employer"] : (function () { throw new RuntimeError('Variable "employer" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\">Éditer</a>

                            ";
        // line 90
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
        return "employer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 90,  192 => 88,  187 => 86,  179 => 81,  172 => 77,  165 => 73,  158 => 69,  151 => 65,  144 => 61,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personne index{% endblock %}


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
                        <div class=\"card-header\">Employer </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <h1>Employer</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ employer.id }}</td>
                                </tr>
                                <tr>
                                    <th>Firsname</th>
                                    <td>{{ employer.firsname }}</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>{{ employer.lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Birthdaydate</th>
                                    <td>{{ employer.birthdaydate ? employer.birthdaydate|date('Y-m-d') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Salary</th>
                                    <td>{{ employer.salary }}</td>
                                </tr>
                                <tr>
                                    <th>Entreprise</th>
                                    <td>{{ employer.entreprise.name }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"{{ path('employer_index') }}\">Retour à la liste</a>

                            <a href=\"{{ path('employer_edit', {'id': employer.id}) }}\">Éditer</a>

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













", "employer/show.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\employer\\show.html.twig");
    }
}
