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

/* partial_steps.phtml */
class __TwigTemplate_4c4f35738aef4ee990e4459c7e24ae57d3c3b121b98721ec5deb96616ae53b2b extends \Twig\Template
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
        echo "<div class=\"steps\">

<div class=\"grid_4 alpha";
        // line 3
        if ((($context["selected"] ?? null) == 1)) {
            echo " selected";
        }
        echo "\">
    <span>1</span>
    <p>";
        // line 5
        echo gettext("Select product");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 8
        if ((($context["selected"] ?? null) == 2)) {
            echo " selected";
        }
        echo "\">
    <span>2</span>
    <p>";
        // line 10
        echo gettext("Configure");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 13
        if ((($context["selected"] ?? null) == 3)) {
            echo " selected";
        }
        echo "\">
    <span>3</span>
    <p>";
        // line 15
        echo gettext("Confirm");
        echo "</p>
</div>

<div class=\"grid_4 omega";
        // line 18
        if ((($context["selected"] ?? null) == 4)) {
            echo " selected";
        }
        echo "\">
    <span>4</span>
    <p>";
        // line 20
        echo gettext("Checkout");
        echo "</p>
</div>

<div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partial_steps.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  80 => 18,  74 => 15,  67 => 13,  61 => 10,  54 => 8,  48 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"steps\">

<div class=\"grid_4 alpha{% if selected == 1 %} selected{% endif %}\">
    <span>1</span>
    <p>{% trans 'Select product' %}</p>
</div>

<div class=\"grid_4{% if selected == 2 %} selected{% endif %}\">
    <span>2</span>
    <p>{% trans 'Configure' %}</p>
</div>

<div class=\"grid_4{% if selected == 3 %} selected{% endif %}\">
    <span>3</span>
    <p>{% trans 'Confirm' %}</p>
</div>

<div class=\"grid_4 omega{% if selected == 4 %} selected{% endif %}\">
    <span>4</span>
    <p>{% trans 'Checkout' %}</p>
</div>

<div class=\"clear\"></div>
</div>", "partial_steps.phtml", "/var/www/localhost/htdocs/bb-themes/boxbilling/html/partial_steps.phtml");
    }
}
