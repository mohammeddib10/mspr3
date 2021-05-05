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

/* Common/Footer.html.twig */
class __TwigTemplate_1f15b7f69b2a5f1a7afaeb98b3619a26273032ce4ecec924c86f5d782b1cf97c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/Footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/Footer.html.twig"));

        // line 1
        echo "<!--Footer-->
<footer class=\"page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn\">

    <!--Call to action-->
    <div class=\"pt-4\">
        <a class=\"btn btn-outline-white\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\"
           role=\"button\">Demo
            <i class=\"fas fa-download ml-2\"></i>
        </a>
        <a class=\"btn btn-outline-white\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\" role=\"button\">Demo Online
            <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class=\"my-4\">

    <!-- Social icons -->
    <div class=\"pb-4\">
        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-facebook-f mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-twitter mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-youtube mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-google-plus mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-dribbble mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-pinterest mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-github mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-codepen mr-3\"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
        © 2021 Copyright:
        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\"> Project MSPR 3 </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/Footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer class=\"page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn\">

    <!--Call to action-->
    <div class=\"pt-4\">
        <a class=\"btn btn-outline-white\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\"
           role=\"button\">Demo
            <i class=\"fas fa-download ml-2\"></i>
        </a>
        <a class=\"btn btn-outline-white\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\" role=\"button\">Demo Online
            <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class=\"my-4\">

    <!-- Social icons -->
    <div class=\"pb-4\">
        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-facebook-f mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-twitter mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-youtube mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-google-plus mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-dribbble mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-pinterest mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-github mr-3\"></i>
        </a>

        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <i class=\"fab fa-codepen mr-3\"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
        © 2021 Copyright:
        <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\"> Project MSPR 3 </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->", "Common/Footer.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\Common\\Footer.html.twig");
    }
}
