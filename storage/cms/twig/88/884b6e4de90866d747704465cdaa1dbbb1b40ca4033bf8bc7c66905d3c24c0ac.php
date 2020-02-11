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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footerScript.htm */
class __TwigTemplate_e9bafd5391b169939e06eee126dba32e52560df4a7a3435ab2c7ac0caf99a80d extends \Twig\Template
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
        echo "<script
  src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
  integrity=\"sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=\"
  crossorigin=\"anonymous\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>

<!-- MASTERSLIDER -->
<script>
    
    var slider = new MasterSlider();
        
            if (\$(window).width() < 767) {
                              
              slider.setup('masterslider', {
                layout: \"fullwidth\",
                
                height: 450,   
                autoplay: true,
        \t\tloop: true,
              });
            } else {
                
                slider.control('arrows' , {autohide:false});
                
              slider.setup('masterslider', {
                width:1200,    // slider standard width
        \t\theight:530,   // slider standard height
        \t\tspace:5,
                autoplay: true,
        \t\tloop: true,
        \t\tlayout: \"fullwidth\",
              });
            }   
    
    jQuery('.date').each(function() {    
\t\t\t\tvar data =jQuery(this).text();
\t\t\t\tvar arr = data.split('-');
\t\t\t\tjQuery(this).html('<div class=\"day\">'+arr[0] + '</div> <div class=\"month\">'+arr[1] + '</div> <div  class=\"year\">'+arr[2] + '</div>');
        });
    
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footerScript.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script
  src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
  integrity=\"sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=\"
  crossorigin=\"anonymous\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>

<!-- MASTERSLIDER -->
<script>
    
    var slider = new MasterSlider();
        
            if (\$(window).width() < 767) {
                              
              slider.setup('masterslider', {
                layout: \"fullwidth\",
                
                height: 450,   
                autoplay: true,
        \t\tloop: true,
              });
            } else {
                
                slider.control('arrows' , {autohide:false});
                
              slider.setup('masterslider', {
                width:1200,    // slider standard width
        \t\theight:530,   // slider standard height
        \t\tspace:5,
                autoplay: true,
        \t\tloop: true,
        \t\tlayout: \"fullwidth\",
              });
            }   
    
    jQuery('.date').each(function() {    
\t\t\t\tvar data =jQuery(this).text();
\t\t\t\tvar arr = data.split('-');
\t\t\t\tjQuery(this).html('<div class=\"day\">'+arr[0] + '</div> <div class=\"month\">'+arr[1] + '</div> <div  class=\"year\">'+arr[2] + '</div>');
        });
    
</script>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footerScript.htm", "");
    }
}
