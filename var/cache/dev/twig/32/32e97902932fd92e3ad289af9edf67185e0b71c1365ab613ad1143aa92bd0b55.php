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

/* client/show.html.twig */
class __TwigTemplate_7e2c5811c41f7141012051d589fd59cbff1178ad2e9242267fccd89c57dbeca3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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

        echo "Client index";
        
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
                        <div class=\"card-header\">Clients </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <h1>Client</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Turnover</th>
                                    <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 69, $this->source); })()), "turnover", [], "any", false, false, false, 69), "html", null, true);
        echo "€</td>
                                </tr>
                                <tr>
                                    <th>Payroll</th>
                                    <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 73, $this->source); })()), "payroll", [], "any", false, false, false, 73), "html", null, true);
        echo "€</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 77, $this->source); })()), "address", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Codepostal</th>
                                    <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 81, $this->source); })()), "codepostal", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 85, $this->source); })()), "ville", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 89, $this->source); })()), "pays", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">back to list</a>

                            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">edit</a>

                            ";
        // line 98
        echo twig_include($this->env, $context, "client/_delete_form.html.twig");
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
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 98,  206 => 96,  201 => 94,  193 => 89,  186 => 85,  179 => 81,  172 => 77,  165 => 73,  158 => 69,  151 => 65,  144 => 61,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client index{% endblock %}


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
                        <div class=\"card-header\">Clients </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <h1>Client</h1>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ client.id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ client.name }}</td>
                                </tr>
                                <tr>
                                    <th>Turnover</th>
                                    <td>{{ client.turnover }}€</td>
                                </tr>
                                <tr>
                                    <th>Payroll</th>
                                    <td>{{ client.payroll }}€</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ client.address }}</td>
                                </tr>
                                <tr>
                                    <th>Codepostal</th>
                                    <td>{{ client.codepostal }}</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>{{ client.ville }}</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>{{ client.pays }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <a href=\"{{ path('client_index') }}\">back to list</a>

                            <a href=\"{{ path('client_edit', {'id': client.id}) }}\">edit</a>

                            {{ include('client/_delete_form.html.twig') }}

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


{% endblock %}", "client/show.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\client\\show.html.twig");
    }
}
