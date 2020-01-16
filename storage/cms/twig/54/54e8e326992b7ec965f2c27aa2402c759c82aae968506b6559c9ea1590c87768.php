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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/header.htm */
class __TwigTemplate_f96206dc64bc89fa3fe9bfb051f6698fe6ebd0fdb21ad148e11617c6065293ad extends \Twig\Template
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
        echo "<header>

    <section class=\"menuBar\">
        <div class=\"container\">
            <div class=\"row\">
                
                <div class=\"col-xs-5 col-sm-3 col-lg-2 logo\">
                    <img src=\"/themes/sports-doctors/assets/images/template/vector_logo.png\">
                </div>
                <div class=\"col-xs-7 col-sm-9 col-lg-10 topNav\">
                    
                    
                    <div class=\"hidden-xs\">
                        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mainNav"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "                    </div>
                    
                    <div class=\"hidden-lg hidden-md hidden-sm\">
<div role=\"navigation\" class=\"navbar navbar-default navbar-static\">
<div class=\"navbar-header\">

<div class=\"row\">
    
    
    
<div class=\"col-xs-12 noPad\">
<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"sr-only\">Toggle navigation</span>
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
</button>
</div>
    </div>
    
</div>

    
    
</div>
</div>
                    
                    
                    
                    
                </div>
                
                
                
            </div>
            
            <div class=\"row\">
                <div class=\"hidden-lg hidden-md hidden-sm\">
                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["mobileNav"] ?? null), "menuItems", [], "any", false, false, false, 53)) {
            // line 54
            echo "    <div id=\"wsgMob\" class=\"navbar-collapse collapse\">
    <ul class=\"nav navbar-nav\">
        ";
            // line 56
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["mobileNav"] ?? null), "menuItems", [], "any", false, false, false, 56)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["mobileNav"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 57
            echo "    </ul>
    </div>
";
        }
        // line 60
        echo "                </div>
            </div>
            
        </div>
    </section>
    
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 60,  107 => 57,  102 => 56,  98 => 54,  96 => 53,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>

    <section class=\"menuBar\">
        <div class=\"container\">
            <div class=\"row\">
                
                <div class=\"col-xs-5 col-sm-3 col-lg-2 logo\">
                    <img src=\"/themes/sports-doctors/assets/images/template/vector_logo.png\">
                </div>
                <div class=\"col-xs-7 col-sm-9 col-lg-10 topNav\">
                    
                    
                    <div class=\"hidden-xs\">
                        {% component 'mainNav' %}
                    </div>
                    
                    <div class=\"hidden-lg hidden-md hidden-sm\">
<div role=\"navigation\" class=\"navbar navbar-default navbar-static\">
<div class=\"navbar-header\">

<div class=\"row\">
    
    
    
<div class=\"col-xs-12 noPad\">
<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"sr-only\">Toggle navigation</span>
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
</button>
</div>
    </div>
    
</div>

    
    
</div>
</div>
                    
                    
                    
                    
                </div>
                
                
                
            </div>
            
            <div class=\"row\">
                <div class=\"hidden-lg hidden-md hidden-sm\">
                    {% if mobileNav.menuItems %}
    <div id=\"wsgMob\" class=\"navbar-collapse collapse\">
    <ul class=\"nav navbar-nav\">
        {% partial mobileNav ~ \"::items\" items=mobileNav.menuItems %}
    </ul>
    </div>
{% endif %}
                </div>
            </div>
            
        </div>
    </section>
    
</header>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/partials/header.htm", "");
    }
}
