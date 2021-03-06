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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/headerScript.htm */
class __TwigTemplate_c3e03cddc597ee59a8b006c6ad3f0a2d4a45f009b4a80f5187656f34a3d1ad66 extends \Twig\Template
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
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- STYLES -->
<link --mime-type='text/css' href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/styles.css", 1 => "assets/css/bootstrap.min.css", 2 => "assets/masterslider/style/masterslider.css", 3 => "assets/masterslider/skins/default/style.css"]);
        // line 11
        echo "\" rel=\"stylesheet\">
<!-- <link href=\"http://websiteglobal.com.au/2015/css/websiteBy.css\" rel=\"stylesheet\"> -->

<!-- GOOGLE FONT -->
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
 
<!-- Latest version of jQuery from Google CDN -->
<!-- You can remove it if jQuery is already included. -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
 
<!-- MasterSlider main JS file -->
<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/masterslider/masterslider.min.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/headerScript.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  46 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- STYLES -->
<link --mime-type='text/css' href=\"{{ [
    'assets/css/styles.css',
    'assets/css/bootstrap.min.css',
    'assets/masterslider/style/masterslider.css',
    'assets/masterslider/skins/default/style.css'
]|theme }}\" rel=\"stylesheet\">
<!-- <link href=\"http://websiteglobal.com.au/2015/css/websiteBy.css\" rel=\"stylesheet\"> -->

<!-- GOOGLE FONT -->
<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,700\" rel=\"stylesheet\">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
 
<!-- Latest version of jQuery from Google CDN -->
<!-- You can remove it if jQuery is already included. -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
 
<!-- MasterSlider main JS file -->
<script src=\"{{ 'assets/masterslider/masterslider.min.js'|theme }}\"></script>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/headerScript.htm", "");
    }
}
