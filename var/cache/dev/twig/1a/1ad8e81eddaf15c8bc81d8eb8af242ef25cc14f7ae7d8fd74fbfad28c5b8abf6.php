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

/* employer/_form.html.twig */
class __TwigTemplate_442b8bc0cc230f446ebc700ea7e6860e1ea11ecf9c48f8a37505d987738fd8d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employer/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"form-row\">
    <div class=\"col-md-6 mb-3\">
        <label for=\"firsname\">Prénom : </label>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "firsname", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "id" => "firsname"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"lastname\">Nom : </label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "lastname", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "id" => "lastname"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"birthdaydate\">Date de naissance</label>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "birthdaydate", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "id" => "birthdaydate"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"salary\">Salaire : </label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "salary", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "browser-default custom-select", "id" => "salary"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"entreprise\">Entreprise  : </label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "entreprise", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "id" => "entreprise"]]);
        echo "
    </div>
</div>

<br>

<div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitButton\">Submit</button>
</div>

";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employer/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  78 => 21,  71 => 17,  64 => 13,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"form-row\">
    <div class=\"col-md-6 mb-3\">
        <label for=\"firsname\">Prénom : </label>
        {{ form_widget(form.firsname, { 'attr': {'class': 'form-control', 'id': 'firsname'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"lastname\">Nom : </label>
        {{ form_widget(form.lastname, { 'attr': {'class': 'form-control', 'id': 'lastname'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"birthdaydate\">Date de naissance</label>
        {{ form_widget(form.birthdaydate, { 'attr': {'class': 'form-control', 'id': 'birthdaydate'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"salary\">Salaire : </label>
        {{ form_widget(form.salary, { 'attr': {'class': 'browser-default custom-select' , 'id': 'salary'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"entreprise\">Entreprise  : </label>
        {{ form_widget(form.entreprise, { 'attr': {'class': 'form-control', 'id': 'entreprise'} }) }}
    </div>
</div>

<br>

<div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitButton\">Submit</button>
</div>

{{ form_end(form) }}


", "employer/_form.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\employer\\_form.html.twig");
    }
}
