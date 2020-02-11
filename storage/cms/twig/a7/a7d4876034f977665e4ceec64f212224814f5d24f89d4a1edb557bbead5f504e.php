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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/masterslider.htm */
class __TwigTemplate_83cd8d3922a01a1a5d9d54e1425789a4eea4bf6891a91ae302db054a4dd45cff extends \Twig\Template
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
        echo "<!-- masterslider -->
<div class=\"master-slider ms-skin-default\" id=\"masterslider\">
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/masterslider/blank.png");
        echo "\" data-src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/slide1_football.jpg");
        echo "\" alt=\"lorem ipsum dolor sit\"/>     
         
         
    </div>
    <!-- end of slide -->
     
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/masterslider/blank.png");
        echo "\" data-src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/slide2_cricket.jpg");
        echo "\" alt=\"lorem ipsum dolor sit\"/>     
         
         
        <!-- linked slide -->
        <a href=\"http://codecanyon.net/user/averta\">Averta</a>
         
    </div>
    <!-- end of slide -->
     
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/masterslider/blank.png");
        echo "\" data-src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/slide3_kick.jpg");
        echo "\" alt=\"lorem ipsum dolor sit\"/>     
        
         
    </div>
    <!-- end of slide -->
 
</div>
<!-- end of masterslider -->";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/masterslider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  60 => 17,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- masterslider -->
<div class=\"master-slider ms-skin-default\" id=\"masterslider\">
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"{{ 'assets/masterslider/blank.png'|theme }}\" data-src=\"{{ 'assets/images/slider/slide1_football.jpg'|theme }}\" alt=\"lorem ipsum dolor sit\"/>     
         
         
    </div>
    <!-- end of slide -->
     
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"{{ 'assets/masterslider/blank.png'|theme }}\" data-src=\"{{ 'assets/images/slider/slide2_cricket.jpg'|theme }}\" alt=\"lorem ipsum dolor sit\"/>     
         
         
        <!-- linked slide -->
        <a href=\"http://codecanyon.net/user/averta\">Averta</a>
         
    </div>
    <!-- end of slide -->
     
    <!-- new slide -->
    <div class=\"ms-slide\">
         
        <!-- slide background -->
        <img src=\"{{ 'assets/masterslider/blank.png'|theme }}\" data-src=\"{{ 'assets/images/slider/slide3_kick.jpg'|theme }}\" alt=\"lorem ipsum dolor sit\"/>     
        
         
    </div>
    <!-- end of slide -->
 
</div>
<!-- end of masterslider -->", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/masterslider.htm", "");
    }
}
