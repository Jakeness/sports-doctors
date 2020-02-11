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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Home.htm */
class __TwigTemplate_8b494b87fbba07e41683d32dab99132a58856d92194fe75c0a0a046cbb033442 extends \Twig\Template
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

        <section class=\"heroSlider\">
        \t";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("masterslider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "        </section>

        <div class=\"container slideShad\">
            <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/template/slider-shad.png");
        echo "\">
        </div>

        <section class=\"homeFindDocSearch\">
            
            <div class=\"container\">
                <div class=\"boxBorder\">
                    <div class=\"col-sm-12 col-md-6 col-lg-4 box\">
                        <form name=\"catcustomcontentform52505\" id=\"directory\" method=\"post\" onsubmit=\"return checkWholeForm52505(this)\" action=\"/map-test\">
                        <div class=\"webform row\">
            
                            <div class=\"col-sm-5 col-md-12\">
                                <div class=\"slogLine1\">Injured while playing</div>
                                <div class=\"slogLine2\">sport?</div>
                            </div>
            
            
                            <div class=\"col-sm-7 col-md-12\">
                                <h4 style=\"margin-top: 0;\">Find the nearest Sports Doctor</h4>
                            </div>
                                
                                <div class=\"col-sm-7 col-md-12\">
                                    <input type=\"text\" maxlength=\"255\" placeholder=\"Enter your Postcode\" name=\"Postcode_33152\" id=\"Postcode_33152\" class=\"cat_textbox\" /><br />
                                </div>
                                <div class=\"col-xs-8 col-sm-5 col-md-7 col-lg-8\">
                                    <input type=\"hidden\" id=\"Country_33152\" name=\"Country_33152\" value=\"AU\" />
                                    <select name=\"Distance_33152\" id=\"Distance_33152\" class=\"cat_dropdown\">
                                    <option value=\"5\">within 5 km</option>
                                    <option value=\"10\">within 10 km</option>
                                    <option value=\"20\" selected=\"selected\">within 20 km</option>
                                    <option value=\"50\">within 50 km</option>
                                    <option value=\"100\">within 100 km</option>
                                    </select>
                                </div>
            
                            <div class=\"hidden\">
                                <div class=\"col-sm-6\">
                                    <label for=\"CAT_Custom_6\">Doctor Name</label><br />
                                    <input type=\"text\" maxlength=\"255\" name=\"CAT_Custom_6\" id=\"CAT_Custom_6\" class=\"cat_textbox\" />
                                </div>
                                <div class=\"col-sm-6\">
                                    <label for=\"CAT_Custom_1\">Company Name</label><br />
                                    <input type=\"text\" maxlength=\"255\" name=\"CAT_Custom_1\" id=\"CAT_Custom_1\" class=\"cat_textbox\" />
                                </div>
                            </div>
            
                                <div class=\"col-xs-4 col-sm-2 col-md-5 col-lg-4\">
                                    <input class=\"cat_button\" id=\"searchMap\" type=\"submit\" value=\"Search\" />
                                </div>
            
                        </div>
                    
                        </form>
                    
                        <script type=\"text/javascript\" src=\"/CatalystScripts/ValidationFunctions.js?vs=b2050.r494698-phase1\"></script>
                        <script type=\"text/javascript\">function checkWholeForm52505(theForm){var why = \"\";if (why != \"\"){alert(why);return false;}return true;}</script>
                    </div>
                </div>
            </div>
            
        </section>

        <section class=\"pageContent\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 87
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 88
        echo "                    
                </div>
            </div>
        </section>
        
        <section class=\"pageContent memBen grey\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <h2>Membership Benefits</h2>
                    </div>
                    
                    <div class=\"col-sm-6 left\">
                        <p><img src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/template/member card.png");
        echo "\"></p>
                    </div>
                    <div class=\"col-sm-6 right\">
                        <ul>
                            <li>A professional association that provides for all the needs of the medical practitioner in sports medicine</li>
                            <li>A discipline stream in SMA that provides a meeting place for members and contributes to the planning of annual scientific meetings of SMA</li>
                            <li>A website for news, views, journal links and abstracts, reviews of latest developments in sports medicine</li>
                            <li>Programs for continuing medical education in sports medicine that fulfil requirements for QA/CE</li>
                            <li>Promotion and facilitation of research by members in all fields of sports</li>
                        </ul>
                        <p><a href=\"/members\" class=\"button\">More Info</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"pageContent\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-lg-6\">

    <h2>What do we do?</h2>

    <p>SDrA is an association of likeminded doctors. As an organisation, we aim to:</p>

    <ul>
        <li>Promote high standards of care to the public, irrespective of position, standard</li>
        <li>Promote education to our members and dotors in general</li>
        <li>Promote education to the community</li>
        <li>Promote research into injury prevention, assessment and management</li>
        <li>Promote the use of evidence based medicine</li>
        <li>Read further about our organisation...</li>
    </ul>

    <p><a href=\"/about\" class=\"button\">Read more about our organisation...</a></p>

</div>

<div class=\"col-sm-4 col-lg-6\">

<div class=\"feedgrabbr_widget\" id=\"fgid_f6de9778f6cd2f864e297ec0c\"></div>
<script> if (typeof(fg_widgets)===\"undefined\") fg_widgets = new Array();fg_widgets.push(\"fgid_f6de9778f6cd2f864e297ec0c\");</script>
<script src=\"https://www.feedgrabbr.com/widget/fgwidget.js\"></script>

</div>
                </div>
            </div>
        </section>
        
        
        ";
        // line 152
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "        

        ";
        // line 154
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footerScript"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 155
        echo "
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 155,  223 => 154,  216 => 152,  163 => 102,  147 => 88,  143 => 87,  75 => 22,  70 => 19,  66 => 18,  60 => 14,  56 => 13,  47 => 6,  43 => 5,  37 => 1,);
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

        <section class=\"heroSlider\">
        \t{% partial \"masterslider\" %}
        </section>

        <div class=\"container slideShad\">
            <img src=\"{{ 'assets/images/template/slider-shad.png'|theme }}\">
        </div>

        <section class=\"homeFindDocSearch\">
            
            <div class=\"container\">
                <div class=\"boxBorder\">
                    <div class=\"col-sm-12 col-md-6 col-lg-4 box\">
                        <form name=\"catcustomcontentform52505\" id=\"directory\" method=\"post\" onsubmit=\"return checkWholeForm52505(this)\" action=\"/map-test\">
                        <div class=\"webform row\">
            
                            <div class=\"col-sm-5 col-md-12\">
                                <div class=\"slogLine1\">Injured while playing</div>
                                <div class=\"slogLine2\">sport?</div>
                            </div>
            
            
                            <div class=\"col-sm-7 col-md-12\">
                                <h4 style=\"margin-top: 0;\">Find the nearest Sports Doctor</h4>
                            </div>
                                
                                <div class=\"col-sm-7 col-md-12\">
                                    <input type=\"text\" maxlength=\"255\" placeholder=\"Enter your Postcode\" name=\"Postcode_33152\" id=\"Postcode_33152\" class=\"cat_textbox\" /><br />
                                </div>
                                <div class=\"col-xs-8 col-sm-5 col-md-7 col-lg-8\">
                                    <input type=\"hidden\" id=\"Country_33152\" name=\"Country_33152\" value=\"AU\" />
                                    <select name=\"Distance_33152\" id=\"Distance_33152\" class=\"cat_dropdown\">
                                    <option value=\"5\">within 5 km</option>
                                    <option value=\"10\">within 10 km</option>
                                    <option value=\"20\" selected=\"selected\">within 20 km</option>
                                    <option value=\"50\">within 50 km</option>
                                    <option value=\"100\">within 100 km</option>
                                    </select>
                                </div>
            
                            <div class=\"hidden\">
                                <div class=\"col-sm-6\">
                                    <label for=\"CAT_Custom_6\">Doctor Name</label><br />
                                    <input type=\"text\" maxlength=\"255\" name=\"CAT_Custom_6\" id=\"CAT_Custom_6\" class=\"cat_textbox\" />
                                </div>
                                <div class=\"col-sm-6\">
                                    <label for=\"CAT_Custom_1\">Company Name</label><br />
                                    <input type=\"text\" maxlength=\"255\" name=\"CAT_Custom_1\" id=\"CAT_Custom_1\" class=\"cat_textbox\" />
                                </div>
                            </div>
            
                                <div class=\"col-xs-4 col-sm-2 col-md-5 col-lg-4\">
                                    <input class=\"cat_button\" id=\"searchMap\" type=\"submit\" value=\"Search\" />
                                </div>
            
                        </div>
                    
                        </form>
                    
                        <script type=\"text/javascript\" src=\"/CatalystScripts/ValidationFunctions.js?vs=b2050.r494698-phase1\"></script>
                        <script type=\"text/javascript\">function checkWholeForm52505(theForm){var why = \"\";if (why != \"\"){alert(why);return false;}return true;}</script>
                    </div>
                </div>
            </div>
            
        </section>

        <section class=\"pageContent\">
            <div class=\"container\">
                <div class=\"row\">
                    {% component 'staticPage' %}
                    
                </div>
            </div>
        </section>
        
        <section class=\"pageContent memBen grey\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <div class=\"col-xs-12\">
                        <h2>Membership Benefits</h2>
                    </div>
                    
                    <div class=\"col-sm-6 left\">
                        <p><img src=\"{{ 'assets/images/template/member card.png'|theme }}\"></p>
                    </div>
                    <div class=\"col-sm-6 right\">
                        <ul>
                            <li>A professional association that provides for all the needs of the medical practitioner in sports medicine</li>
                            <li>A discipline stream in SMA that provides a meeting place for members and contributes to the planning of annual scientific meetings of SMA</li>
                            <li>A website for news, views, journal links and abstracts, reviews of latest developments in sports medicine</li>
                            <li>Programs for continuing medical education in sports medicine that fulfil requirements for QA/CE</li>
                            <li>Promotion and facilitation of research by members in all fields of sports</li>
                        </ul>
                        <p><a href=\"/members\" class=\"button\">More Info</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"pageContent\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 col-lg-6\">

    <h2>What do we do?</h2>

    <p>SDrA is an association of likeminded doctors. As an organisation, we aim to:</p>

    <ul>
        <li>Promote high standards of care to the public, irrespective of position, standard</li>
        <li>Promote education to our members and dotors in general</li>
        <li>Promote education to the community</li>
        <li>Promote research into injury prevention, assessment and management</li>
        <li>Promote the use of evidence based medicine</li>
        <li>Read further about our organisation...</li>
    </ul>

    <p><a href=\"/about\" class=\"button\">Read more about our organisation...</a></p>

</div>

<div class=\"col-sm-4 col-lg-6\">

<div class=\"feedgrabbr_widget\" id=\"fgid_f6de9778f6cd2f864e297ec0c\"></div>
<script> if (typeof(fg_widgets)===\"undefined\") fg_widgets = new Array();fg_widgets.push(\"fgid_f6de9778f6cd2f864e297ec0c\");</script>
<script src=\"https://www.feedgrabbr.com/widget/fgwidget.js\"></script>

</div>
                </div>
            </div>
        </section>
        
        
        {% partial \"footer\" %}        

        {% partial \"footerScript\" %}

    </body>

</html>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/layouts/Home.htm", "");
    }
}
