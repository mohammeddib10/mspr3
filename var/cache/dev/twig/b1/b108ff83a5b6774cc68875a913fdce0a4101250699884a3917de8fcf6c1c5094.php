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

/* employer/index.html.twig */
class __TwigTemplate_27a9eaeb9dad3f35b59725d785b9a02f43b2d0590b807adff66b05ccce6bb5b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employer/index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!--Main layout-->
    <main class=\"pt-5 mx-lg-5\">
        <div class=\"container-fluid mt-5\">


            ";
        // line 11
        $this->loadTemplate("Common/Heading.html.twig", "employer/index.html.twig", 11)->display($context);
        // line 12
        echo "

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-12 col-md-12 mb-4\">

                    <!--Card-->
                    <div class=\"card\">

                        <!-- Card header -->
                        <div class=\"card-header\">Personnes </div>

                        <!--Card content-->
                        <div class=\"card-body\">


                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Firsname</th>
                                    <th>Lastname</th>
                                    <th>Birthdaydate</th>
                                    <th>Entreprise</th>
                                    <th>Salary</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employers"]) || array_key_exists("employers", $context) ? $context["employers"] : (function () { throw new RuntimeError('Variable "employers" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employer"]) {
            // line 44
            echo "                                    <tr>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "firsname", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "lastname", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["employer"], "birthdaydate", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "birthdaydate", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employer"], "entreprise", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "salary", [], "any", false, false, false, 50), "html", null, true);
            echo "€</td>
                                        <td>
                                            <a class=\"btn btn-info\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["employer"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">show</a>
                                            <a class=\"btn btn-secondary\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employer"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">edit</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                                    <tr>
                                        <td colspan=\"6\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>
                            </table>

                            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employer_new");
        echo "\">Create new Employer</a>

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
        return "employer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 64,  186 => 61,  177 => 57,  168 => 53,  164 => 52,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  136 => 44,  131 => 43,  98 => 12,  96 => 11,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personne index{% endblock %}
{% block body %}

    <!--Main layout-->
    <main class=\"pt-5 mx-lg-5\">
        <div class=\"container-fluid mt-5\">


            {% include \"Common/Heading.html.twig\" %}


            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-12 col-md-12 mb-4\">

                    <!--Card-->
                    <div class=\"card\">

                        <!-- Card header -->
                        <div class=\"card-header\">Personnes </div>

                        <!--Card content-->
                        <div class=\"card-body\">


                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Firsname</th>
                                    <th>Lastname</th>
                                    <th>Birthdaydate</th>
                                    <th>Entreprise</th>
                                    <th>Salary</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for employer in employers %}
                                    <tr>
                                        <td>{{ employer.id }}</td>
                                        <td>{{ employer.firsname }}</td>
                                        <td>{{ employer.lastname }}</td>
                                        <td>{{ employer.birthdaydate ? employer.birthdaydate|date('Y-m-d') : '' }}</td>
                                        <td>{{ employer.entreprise.name }}</td>
                                        <td>{{ employer.salary }}€</td>
                                        <td>
                                            <a class=\"btn btn-info\" href=\"{{ path('employer_show', {'id': employer.id}) }}\">show</a>
                                            <a class=\"btn btn-secondary\" href=\"{{ path('employer_edit', {'id': employer.id}) }}\">edit</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                            <a href=\"{{ path('employer_new') }}\">Create new Employer</a>

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



", "employer/index.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\employer\\index.html.twig");
    }
}
