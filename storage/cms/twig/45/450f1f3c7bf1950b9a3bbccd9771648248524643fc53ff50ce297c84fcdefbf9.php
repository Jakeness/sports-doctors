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

/* /Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/plugins/websiteglobal/ausstorelocator/components/ausstorelocator/default.htm */
class __TwigTemplate_92e1f7a2e3e062877edc8b58b5c7861f67957b44bd1efba65c097ffe2f90590b extends \Twig\Template
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
        echo "
<iframe id=\"mapFrame\" src=\"/map-aus\" width=\"100%\" height=\"574px\" scrolling=no frameborder=no allowtransparency=\"true\"></iframe>
    <div>
         <label for=\"raddressInput\">Search location:</label>
         <input type=\"text\" id=\"addressInput\" size=\"15\"/>
        <label for=\"radiusSelect\">Radius:</label>
        <select id=\"radius\" label=\"Radius\">
          <option value=\"50\" selected>50 kms</option>
          <option value=\"30\">30 kms</option>
          <option value=\"20\">20 kms</option>
          <option value=\"10\">10 kms</option>
        </select>

        <input type=\"button\" id=\"searchButton\" value=\"Search\"/>
    </div>
    <div class=\"detail-wrap detail-wrap--updated\">
      <div id=\"locations\" class=\"three-cols\"></div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/plugins/websiteglobal/ausstorelocator/components/ausstorelocator/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<iframe id=\"mapFrame\" src=\"/map-aus\" width=\"100%\" height=\"574px\" scrolling=no frameborder=no allowtransparency=\"true\"></iframe>
    <div>
         <label for=\"raddressInput\">Search location:</label>
         <input type=\"text\" id=\"addressInput\" size=\"15\"/>
        <label for=\"radiusSelect\">Radius:</label>
        <select id=\"radius\" label=\"Radius\">
          <option value=\"50\" selected>50 kms</option>
          <option value=\"30\">30 kms</option>
          <option value=\"20\">20 kms</option>
          <option value=\"10\">10 kms</option>
        </select>

        <input type=\"button\" id=\"searchButton\" value=\"Search\"/>
    </div>
    <div class=\"detail-wrap detail-wrap--updated\">
      <div id=\"locations\" class=\"three-cols\"></div>
    </div>", "/Users/jakemcleod/Documents/Website Global/GIT/sports-doctors/plugins/websiteglobal/ausstorelocator/components/ausstorelocator/default.htm", "");
    }
}
