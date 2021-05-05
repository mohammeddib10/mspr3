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

/* client/_form.html.twig */
class __TwigTemplate_f82e688e7c45eae781e4ecdbaf96cbbd78345dae88dc97bab9ed1d43d406cd08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"form-row\">
    <div class=\"col-md-6 mb-3\">
        <label for=\"name\">name : </label>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "id" => "name"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"turnover\">turnover : </label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "turnover", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "id" => "turnover"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"payroll\">payroll : </label>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "payroll", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "id" => "payroll"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"address\">address : </label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "address", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "browser-default custom-select", "id" => "address"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"codepostal\">codepostal  : </label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "codepostal", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "id" => "codepostal"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"ville\">ville  : </label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "ville", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "id" => "ville"]]);
        echo "
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"pays\">pays  : </label>
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "pays", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "id" => "pays"]]);
        echo "
    </div>
</div>

<br>

<div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitButton\">Submit</button>
</div>

";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"form-row\">
    <div class=\"col-md-6 mb-3\">
        <label for=\"name\">name : </label>
        {{ form_widget(form.name, { 'attr': {'class': 'form-control', 'id': 'name'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"turnover\">turnover : </label>
        {{ form_widget(form.turnover, { 'attr': {'class': 'form-control', 'id': 'turnover'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"payroll\">payroll : </label>
        {{ form_widget(form.payroll, { 'attr': {'class': 'form-control', 'id': 'payroll'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"address\">address : </label>
        {{ form_widget(form.address, { 'attr': {'class': 'browser-default custom-select' , 'id': 'address'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"codepostal\">codepostal  : </label>
        {{ form_widget(form.codepostal, { 'attr': {'class': 'form-control', 'id': 'codepostal'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"ville\">ville  : </label>
        {{ form_widget(form.ville, { 'attr': {'class': 'form-control', 'id': 'ville'} }) }}
    </div>
    <div class=\"col-md-6 mb-3\">
        <label for=\"pays\">pays  : </label>
        {{ form_widget(form.pays, { 'attr': {'class': 'form-control', 'id': 'pays'} }) }}
    </div>
</div>

<br>

<div class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitButton\">Submit</button>
</div>

{{ form_end(form) }}


", "client/_form.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\client\\_form.html.twig");
    }
}
