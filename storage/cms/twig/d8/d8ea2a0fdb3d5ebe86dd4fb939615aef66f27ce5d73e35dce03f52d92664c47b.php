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
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "practice_name", [], "any", false, false, false, 10)) {
                // line 11
                echo "            <p><em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "practice_name", [], "any", false, false, false, 11), "html", null, true);
                echo "</em></p>
        ";
            }
            // line 13
            echo "    
        ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_1", [], "any", false, false, false, 14), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_2", [], "any", false, false, false, 14)) {
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address_2", [], "any", false, false, false, 14), "html", null, true);
            }
            echo ",<br />
        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "city", [], "any", false, false, false, 15), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "country", [], "any", false, false, false, 15), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 15), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "postcode", [], "any", false, false, false, 15), "html", null, true);
            echo "
        
        ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 17) || twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 17))) {
                // line 18
                echo "            <ul class=\"directory detailed\">
                <li>
                    <ul>
                    ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                        <li class=\"icon phone\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", [], "any", false, false, false, 22), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 23
                echo "    
                    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                        <li class=\"icon fax show{tag_show fax number}\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "fax", [], "any", false, false, false, 25), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 27
                echo "                    </ul>
                </li>
            </ul>
        ";
            }
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "email", [], "any", false, false, false, 31) || twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "website", [], "any", false, false, false, 31))) {
                // line 32
                echo "            <div class=\"linkButtons row pt-3\">
            ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "email", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                <div class=\"col-xs-6 email\"><a href=\"mailto:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" class=\"button\">Email</a></div>
            ";
                }
                // line 36
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "website", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                <div class=\"col-xs-6 website\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "website", [], "any", false, false, false, 37), "html", null, true);
                    echo "\" target=\"_blank\" class=\"button\">Website</a></div>
            ";
                }
                // line 39
                echo "            </div>
        ";
            }
            // line 41
            echo "
        <div class=\"goBack hidden-xs\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>
        <button onclick=\"goBack()\">Go Back</button>

    </div>
    
    <div class=\"col-sm-8\">
        <p>{module_webappsmap id=\"33152\" filter=\"item\" googlekey=\"AIzaSyB_pPFF55x8Z-b1K9PjsrXX0BM0vXyKGHc\" itemId=\"{tag_itemid}\"}</p>
    </div>

    <div class=\"col-xs-12 goBack mobile hidden-sm hidden-md hidden-lg\" style=\"margin-top: 20px;\"><p><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["go_back"] ?? null), "html", null, true);
            echo "\">Go Back</a></p></div>

</div>
    
    
    
    
    
";
        } else {
            // line 60
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
        return array (  170 => 60,  158 => 51,  146 => 41,  142 => 39,  136 => 37,  133 => 36,  127 => 34,  125 => 33,  122 => 32,  119 => 31,  113 => 27,  107 => 25,  105 => 24,  102 => 23,  96 => 22,  94 => 21,  89 => 18,  87 => 17,  76 => 15,  68 => 14,  65 => 13,  59 => 11,  57 => 10,  53 => 9,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
        {% if record.practice_name %}
            <p><em>{{ record.practice_name }}</em></p>
        {% endif %}
    
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
        {% if (record.email or record.website) %}
            <div class=\"linkButtons row pt-3\">
            {% if record.email %}
                <div class=\"col-xs-6 email\"><a href=\"mailto:{{ record.email }}\" class=\"button\">Email</a></div>
            {% endif %}
            {% if record.website %}
                <div class=\"col-xs-6 website\"><a href=\"{{ record.website }}\" target=\"_blank\" class=\"button\">Website</a></div>
            {% endif %}
            </div>
        {% endif %}

        <div class=\"goBack hidden-xs\" style=\"margin-top: 20px;\"><p>{module_goback,Go Back}</p></div>
        <button onclick=\"goBack()\">Go Back</button>

    </div>
    
    <div class=\"col-sm-8\">
        <p>{module_webappsmap id=\"33152\" filter=\"item\" googlekey=\"AIzaSyB_pPFF55x8Z-b1K9PjsrXX0BM0vXyKGHc\" itemId=\"{tag_itemid}\"}</p>
    </div>

    <div class=\"col-xs-12 goBack mobile hidden-sm hidden-md hidden-lg\" style=\"margin-top: 20px;\"><p><a href=\"{{ go_back }}\">Go Back</a></p></div>

</div>
    
    
    
    
    
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/themes/sports-doctors/pages/directory.htm", "");
    }
}
