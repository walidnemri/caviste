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

/* show.twig */
class __TwigTemplate_11937f2ac4c9765478564fdd73d4f5a9e247e677924b3bbe9c2974422860007a extends \Twig\Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vin"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ vin.name }}</p>", "show.twig", "/Applications/XAMPP/xamppfiles/htdocs/caviste/caviste/src/Templates/show.twig");
    }
}
