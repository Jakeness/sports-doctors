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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/MapSearch.htm */
class __TwigTemplate_67abc5022b2edca7b92888fbdaabd74f4040ee6ad62f28da46ed00b7f7382452 extends \Twig\Template
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
        echo "<html>

   <head>

       ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("headerScript"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
    </head>

    <body>


        <!-- HEADER -->
\t\t";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
        <!-- MASTERSLIDER -->

        <section class=\"inner heroSlider\" style=\"background-image: url(";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/template/innerBanner_soccer.jpg");
        echo ");\">

        </section>


        <section class=\"pageContent\">
            <div class=\"container-fluid\">
                <div class=\"col-xs-12\">
                    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "                    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ausStoreLocator"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "                </div>
            </div>


        </section>


        <div classs=\"clear\"></div>

        
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "        

        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footerScript"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/MapSearch.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  107 => 40,  100 => 38,  88 => 28,  83 => 27,  80 => 26,  76 => 25,  65 => 17,  60 => 14,  56 => 13,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>

   <head>

       {% partial \"headerScript\" %}

    </head>

    <body>


        <!-- HEADER -->
\t\t{% partial \"header\" %}

        <!-- MASTERSLIDER -->

        <section class=\"inner heroSlider\" style=\"background-image: url({{ 'assets/images/template/innerBanner_soccer.jpg'|theme }});\">

        </section>


        <section class=\"pageContent\">
            <div class=\"container-fluid\">
                <div class=\"col-xs-12\">
                    {% component 'staticPage' %}
                    {% page %}
                    {% component 'ausStoreLocator' %}
                </div>
            </div>


        </section>


        <div classs=\"clear\"></div>

        
        {% partial \"footer\" %}        

        {% partial \"footerScript\" %}

    </body>

</html>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/MapSearch.htm", "");
    }
}
