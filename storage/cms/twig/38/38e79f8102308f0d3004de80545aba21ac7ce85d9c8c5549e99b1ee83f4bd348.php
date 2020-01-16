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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footer.htm */
class __TwigTemplate_1bfe22b4fb49f767659a2a917bf72e5e404fcdc4f6716907dded5114e61558ad extends \Twig\Template
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
        echo "<footer>
    
    <div class=\"dgrey\">
        <div class=\"container\"> 
            <p><a href=\"http://www.sportsdoctors.com.au\" title=\"Back to HOME page\">home</a>  |  <a href=\"http://www.sportsdoctors.com.au/find-a-sports-doctor\" title=\"Search for a Sports Doctor\">find a sports doctor</a>  |  <a href=\"mailto:members@sma.org.au\">contact</a></p>
        </div>
    </div>
    
    <div class=\"green\">
        <div class=\"container\">
            <p>COMPREHENSIVE CARE FOR THE SPORTING COMMUNITY</p>
            
            <span>©copyright 2016 Sports Doctors Australia</span>
            
        </div>
    </div>
    
</footer>

<div class=\"websiteByWSG\" onclick=\"Javascript:window.open('http://www.websiteglobal.com.au');\"><a style=\"display: none;\" href=\"http://websiteglobal.com.au\">Website Global</a></div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    
    <div class=\"dgrey\">
        <div class=\"container\"> 
            <p><a href=\"http://www.sportsdoctors.com.au\" title=\"Back to HOME page\">home</a>  |  <a href=\"http://www.sportsdoctors.com.au/find-a-sports-doctor\" title=\"Search for a Sports Doctor\">find a sports doctor</a>  |  <a href=\"mailto:members@sma.org.au\">contact</a></p>
        </div>
    </div>
    
    <div class=\"green\">
        <div class=\"container\">
            <p>COMPREHENSIVE CARE FOR THE SPORTING COMMUNITY</p>
            
            <span>©copyright 2016 Sports Doctors Australia</span>
            
        </div>
    </div>
    
</footer>

<div class=\"websiteByWSG\" onclick=\"Javascript:window.open('http://www.websiteglobal.com.au');\"><a style=\"display: none;\" href=\"http://websiteglobal.com.au\">Website Global</a></div>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/footer.htm", "");
    }
}
