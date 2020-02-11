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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/pages/directory.htm */
class __TwigTemplate_a3ea3f95064cf7a06abb7064f298ebc66d51c0c45f881615343f291a4c02ea59 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["directoryDetailListing"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["directoryDetailListing"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["directoryDetailListing"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "disable", [], "any", false, false, false, 5)) {
            echo "    
<div class=\"directoryLargeLayout row\">

    <div class=\"col-sm-4\">
        <h2>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "doctor_name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h2>
        <p><em>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "practice_name", [], "any", false, false, false, 10), "html", null, true);
            echo "</em></p>
    
        ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_1", [], "any", false, false, false, 12), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_2", [], "any", false, false, false, 12)) {
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_2", [], "any", false, false, false, 12), "html", null, true);
            }
            echo ",<br />
        ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "city", [], "any", false, false, false, 13), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "country", [], "any", false, false, false, 13), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 13), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "postcode", [], "any", false, false, false, 13), "html", null, true);
            echo "
        
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 15) || twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 15))) {
                // line 16
                echo "            <ul class=\"directory detailed\">
                <li>
                    <ul>
                    ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                        <li class=\"icon phone\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 20), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 21
                echo "    
                    ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                        <li class=\"icon fax show{tag_show fax number}\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 23), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 25
                echo "                    </ul>
                </li>
            </ul>
        ";
            }
            // line 29
            echo "        <div class=\"linkButtons row pt-3\">
            <div class=\"col-xs-6 email show{tag_show email}\"><a href=\"mailto:{tag_email}\" class=\"button\">Email</a></div>
            <div class=\"col-xs-6 website show{tag_show webaite}\"><a href=\"http://{tag_website (ie www.)}\" target=\"_blank\" class=\"button\">Website</a></div>
        </div>

        <div class=\"goBack hidden-xs\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>

    </div>
    
    <div class=\"col-sm-8\">
        <p>{module_webappsmap id=\"33152\" filter=\"item\" googlekey=\"AIzaSyB_pPFF55x8Z-b1K9PjsrXX0BM0vXyKGHc\" itemId=\"{tag_itemid}\"}</p>
    </div>

    <div class=\"col-xs-12 goBack mobile hidden-sm hidden-md hidden-lg\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>

</div>
    
    
    
    
    
";
        } else {
            // line 51
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/pages/directory.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  113 => 29,  107 => 25,  101 => 23,  99 => 22,  96 => 21,  90 => 20,  88 => 19,  83 => 16,  81 => 15,  70 => 13,  62 => 12,  57 => 10,  53 => 9,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = directoryDetailListing.record %}
{% set displayColumn = directoryDetailListing.displayColumn %}
{% set notFoundMessage = directoryDetailListing.notFoundMessage %}

{% if not record.disable %}    
<div class=\"directoryLargeLayout row\">

    <div class=\"col-sm-4\">
        <h2>{{ record.doctor_name }}</h2>
        <p><em>{{ record.practice_name }}</em></p>
    
        {{ record.address_1 }}{% if record.address_2 %} / {{ record.address_2 }}{% endif %},<br />
        {{ record.city }}, {{ record.country }}, {{ record.state }},{{ record.postcode }}
        
        {% if (record.phone or record.fax) %}
            <ul class=\"directory detailed\">
                <li>
                    <ul>
                    {% if record.phone %}
                        <li class=\"icon phone\">{{ record.phone }}</li>
                    {% endif %}    
                    {% if record.fax %}
                        <li class=\"icon fax show{tag_show fax number}\">{{ record.fax }}</li>
                    {% endif %}
                    </ul>
                </li>
            </ul>
        {% endif %}
        <div class=\"linkButtons row pt-3\">
            <div class=\"col-xs-6 email show{tag_show email}\"><a href=\"mailto:{tag_email}\" class=\"button\">Email</a></div>
            <div class=\"col-xs-6 website show{tag_show webaite}\"><a href=\"http://{tag_website (ie www.)}\" target=\"_blank\" class=\"button\">Website</a></div>
        </div>

        <div class=\"goBack hidden-xs\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>

    </div>
    
    <div class=\"col-sm-8\">
        <p>{module_webappsmap id=\"33152\" filter=\"item\" googlekey=\"AIzaSyB_pPFF55x8Z-b1K9PjsrXX0BM0vXyKGHc\" itemId=\"{tag_itemid}\"}</p>
    </div>

    <div class=\"col-xs-12 goBack mobile hidden-sm hidden-md hidden-lg\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>

</div>
    
    
    
    
    
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/pages/directory.htm", "");
    }
}
