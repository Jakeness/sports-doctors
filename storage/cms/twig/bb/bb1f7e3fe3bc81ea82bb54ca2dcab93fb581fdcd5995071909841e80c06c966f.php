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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Inner.htm */
class __TwigTemplate_4aa7a1c753e6f2ed23e0a508f1769404b7dee47b75fa98174e68f59025c9a5d0 extends \Twig\Template
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
            <div class=\"container\">
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
        echo "                </div>
            </div>


        </section>


        <div classs=\"clear\"></div>

        
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "        

        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footerScript"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Inner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  102 => 39,  95 => 37,  83 => 27,  80 => 26,  76 => 25,  65 => 17,  60 => 14,  56 => 13,  47 => 6,  43 => 5,  37 => 1,);
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
            <div class=\"container\">
                <div class=\"col-xs-12\">
                    {% component 'staticPage' %}
                    {% page %}
                </div>
            </div>


        </section>


        <div classs=\"clear\"></div>

        
        {% partial \"footer\" %}        

        {% partial \"footerScript\" %}

    </body>

</html>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Inner.htm", "");
    }
}
