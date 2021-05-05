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

/* base.html.twig */
class __TwigTemplate_f74c51ace42982e032c6336cd684906349f731d744206de9796837ab3fd3590f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Project MSPR 3 </title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        canvas {
            position: absolute;
        }
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>

";
        // line 49
        $this->loadTemplate("Common/NavBar.html.twig", "base.html.twig", 49)->display($context);
        // line 50
        echo "
<body class=\"grey lighten-3\">

";
        // line 53
        $this->loadTemplate("Common/Header.html.twig", "base.html.twig", 53)->display($context);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</body>

";
        // line 58
        $this->loadTemplate("Common/Footer.html.twig", "base.html.twig", 58)->display($context);
        // line 59
        echo "<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo " \"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo " \"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo " \"></script>
<!-- Initializations -->
<script type=\"text/javascript\">
    // Animations initialization
    new WOW().init();

</script>

<!-- Charts -->
<script>
    // Line
    var ctx = document.getElementById(\"myChart\").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [\"Red\", \"Blue\", \"Yellow\", \"Green\", \"Purple\", \"Orange\"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    //pie
    var ctxP = document.getElementById(\"pieChart\").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: [\"Red\", \"Green\", \"Yellow\", \"Grey\", \"Dark Grey\"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: [\"#F7464A\", \"#46BFBD\", \"#FDB45C\", \"#949FB1\", \"#4D5360\"],
                hoverBackgroundColor: [\"#FF5A5E\", \"#5AD3D1\", \"#FFC870\", \"#A8B3C5\", \"#616774\"]
            }]
        },
        options: {
            responsive: true,
            legend: false
        }
    });


    //line
    var ctxL = document.getElementById(\"lineChart\").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
            datasets: [{
                label: \"My First dataset\",
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2,
                data: [65, 59, 80, 81, 56, 55, 40]
            },
                {
                    label: \"My Second dataset\",
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        },
        options: {
            responsive: true
        }
    });


    //radar
    var ctxR = document.getElementById(\"radarChart\").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
        type: 'radar',
        data: {
            labels: [\"Eating\", \"Drinking\", \"Sleeping\", \"Designing\", \"Coding\", \"Cycling\", \"Running\"],
            datasets: [{
                label: \"My First dataset\",
                data: [65, 59, 90, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            }, {
                label: \"My Second dataset\",
                data: [28, 48, 40, 19, 96, 27, 100],
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true
        }
    });

    //doughnut
    var ctxD = document.getElementById(\"doughnutChart\").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: [\"Red\", \"Green\", \"Yellow\", \"Grey\", \"Dark Grey\"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: [\"#F7464A\", \"#46BFBD\", \"#FDB45C\", \"#949FB1\", \"#4D5360\"],
                hoverBackgroundColor: [\"#FF5A5E\", \"#5AD3D1\", \"#FFC870\", \"#A8B3C5\", \"#616774\"]
            }]
        },
        options: {
            responsive: true
        }
    });

</script>

<!--Google Maps-->
<script src=\"https://maps.google.com/maps/api/js\"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById(\"map-container\"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: \"New York\"
        });
    }

    new Chart(document.getElementById(\"horizontalBar\"), {
        \"type\": \"horizontalBar\",
        \"data\": {
            \"labels\": [\"Red\", \"Orange\", \"Yellow\", \"Green\", \"Blue\", \"Purple\", \"Grey\"],
            \"datasets\": [{
                \"label\": \"My First Dataset\",
                \"data\": [22, 33, 55, 12, 86, 23, 14],
                \"fill\": false,
                \"backgroundColor\": [\"rgba(255, 99, 132, 0.2)\", \"rgba(255, 159, 64, 0.2)\",
                    \"rgba(255, 205, 86, 0.2)\", \"rgba(75, 192, 192, 0.2)\",
                    \"rgba(54, 162, 235, 0.2)\",
                    \"rgba(153, 102, 255, 0.2)\", \"rgba(201, 203, 207, 0.2)\"
                ],
                \"borderColor\": [\"rgb(255, 99, 132)\", \"rgb(255, 159, 64)\", \"rgb(255, 205, 86)\",
                    \"rgb(75, 192, 192)\", \"rgb(54, 162, 235)\", \"rgb(153, 102, 255)\",
                    \"rgb(201, 203, 207)\"
                ],
                \"borderWidth\": 1
            }]
        },
        \"options\": {
            \"scales\": {
                \"xAxes\": [{
                    \"ticks\": {
                        \"beginAtZero\": true
                    }
                }]
            }
        }
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Project WorkShop 7 !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 55,  364 => 1,  144 => 67,  139 => 65,  134 => 63,  129 => 61,  125 => 59,  123 => 58,  119 => 56,  117 => 55,  114 => 54,  112 => 53,  107 => 50,  105 => 49,  68 => 15,  63 => 13,  58 => 11,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}Project WorkShop 7 !{% endblock %}


    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Project MSPR 3 </title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"{{ asset('css/mdb.min.css') }}\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"{{ asset('css/style.min.css') }}\" rel=\"stylesheet\">
    <style>

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        canvas {
            position: absolute;
        }
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>

{% include \"Common/NavBar.html.twig\" %}

<body class=\"grey lighten-3\">

{% include \"Common/Header.html.twig\" %}

{% block body %} {% endblock %}
</body>

{% include \"Common/Footer.html.twig\" %}
<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.4.1.min.js') }} \"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"{{ asset('js/popper.min.js') }} \"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }} \"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"{{ asset('js/mdb.min.js') }} \"></script>
<!-- Initializations -->
<script type=\"text/javascript\">
    // Animations initialization
    new WOW().init();

</script>

<!-- Charts -->
<script>
    // Line
    var ctx = document.getElementById(\"myChart\").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [\"Red\", \"Blue\", \"Yellow\", \"Green\", \"Purple\", \"Orange\"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    //pie
    var ctxP = document.getElementById(\"pieChart\").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: [\"Red\", \"Green\", \"Yellow\", \"Grey\", \"Dark Grey\"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: [\"#F7464A\", \"#46BFBD\", \"#FDB45C\", \"#949FB1\", \"#4D5360\"],
                hoverBackgroundColor: [\"#FF5A5E\", \"#5AD3D1\", \"#FFC870\", \"#A8B3C5\", \"#616774\"]
            }]
        },
        options: {
            responsive: true,
            legend: false
        }
    });


    //line
    var ctxL = document.getElementById(\"lineChart\").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
            datasets: [{
                label: \"My First dataset\",
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2,
                data: [65, 59, 80, 81, 56, 55, 40]
            },
                {
                    label: \"My Second dataset\",
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        },
        options: {
            responsive: true
        }
    });


    //radar
    var ctxR = document.getElementById(\"radarChart\").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
        type: 'radar',
        data: {
            labels: [\"Eating\", \"Drinking\", \"Sleeping\", \"Designing\", \"Coding\", \"Cycling\", \"Running\"],
            datasets: [{
                label: \"My First dataset\",
                data: [65, 59, 90, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            }, {
                label: \"My Second dataset\",
                data: [28, 48, 40, 19, 96, 27, 100],
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true
        }
    });

    //doughnut
    var ctxD = document.getElementById(\"doughnutChart\").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: [\"Red\", \"Green\", \"Yellow\", \"Grey\", \"Dark Grey\"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: [\"#F7464A\", \"#46BFBD\", \"#FDB45C\", \"#949FB1\", \"#4D5360\"],
                hoverBackgroundColor: [\"#FF5A5E\", \"#5AD3D1\", \"#FFC870\", \"#A8B3C5\", \"#616774\"]
            }]
        },
        options: {
            responsive: true
        }
    });

</script>

<!--Google Maps-->
<script src=\"https://maps.google.com/maps/api/js\"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById(\"map-container\"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: \"New York\"
        });
    }

    new Chart(document.getElementById(\"horizontalBar\"), {
        \"type\": \"horizontalBar\",
        \"data\": {
            \"labels\": [\"Red\", \"Orange\", \"Yellow\", \"Green\", \"Blue\", \"Purple\", \"Grey\"],
            \"datasets\": [{
                \"label\": \"My First Dataset\",
                \"data\": [22, 33, 55, 12, 86, 23, 14],
                \"fill\": false,
                \"backgroundColor\": [\"rgba(255, 99, 132, 0.2)\", \"rgba(255, 159, 64, 0.2)\",
                    \"rgba(255, 205, 86, 0.2)\", \"rgba(75, 192, 192, 0.2)\",
                    \"rgba(54, 162, 235, 0.2)\",
                    \"rgba(153, 102, 255, 0.2)\", \"rgba(201, 203, 207, 0.2)\"
                ],
                \"borderColor\": [\"rgb(255, 99, 132)\", \"rgb(255, 159, 64)\", \"rgb(255, 205, 86)\",
                    \"rgb(75, 192, 192)\", \"rgb(54, 162, 235)\", \"rgb(153, 102, 255)\",
                    \"rgb(201, 203, 207)\"
                ],
                \"borderWidth\": 1
            }]
        },
        \"options\": {
            \"scales\": {
                \"xAxes\": [{
                    \"ticks\": {
                        \"beginAtZero\": true
                    }
                }]
            }
        }
    });

</script>
", "base.html.twig", "C:\\Users\\moham\\Desktop\\mspr3_preudhomme\\templates\\base.html.twig");
    }
}
