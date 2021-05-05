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

/* Common/NavBar.html.twig */
class __TwigTemplate_c665409a6a82c7389d87c5bd4fdf59be267bb28784f0b5d82ca98325ea2eb065 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/NavBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/NavBar.html.twig"));

        // line 1
        echo "<!-- Navbar -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar\">
    <div class=\"container-fluid\">

        <!-- Brand -->
        <a class=\"navbar-brand waves-effect\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <strong class=\"blue-text\">Project MSPR 3 </strong>
        </a>

        <!-- Collapse -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <!-- Left -->
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">About US</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class=\"navbar-nav nav-flex-icons\">
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link waves-effect\" target=\"_blank\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link waves-effect\" target=\"_blank\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link border border-light rounded waves-effect\"
                       target=\"_blank\">
                        <i class=\"fab fa-github mr-2\"></i>Project MSPR 3
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/NavBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar\">
    <div class=\"container-fluid\">

        <!-- Brand -->
        <a class=\"navbar-brand waves-effect\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">
            <strong class=\"blue-text\">Project MSPR 3 </strong>
        </a>

        <!-- Collapse -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <!-- Left -->
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect\" href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" target=\"_blank\">About US</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class=\"navbar-nav nav-flex-icons\">
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link waves-effect\" target=\"_blank\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link waves-effect\" target=\"_blank\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"https://gitlab.com/issam_lammri/mspr3_preudhomme\" class=\"nav-link border border-light rounded waves-effect\"
                       target=\"_blank\">
                        <i class=\"fab fa-github mr-2\"></i>Project MSPR 3
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->", "Common/NavBar.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\Common\\NavBar.html.twig");
    }
}
