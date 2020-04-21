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

/* layout.html.twig */
class __TwigTemplate_e2fdb58a2af19778b8ffabd5018060a9393c47b3e7e6654a33b571aeecb2e5b3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Caviste - ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <main>
            ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "        </main>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  59 => 4,  53 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Caviste - {% block title%}{% endblock %}</title>
    </head>
    <body>
        <main>
            {% block content %}{% endblock %}
        </main>
    </body>
</html>", "layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/caviste/caviste/src/Templates/layout.html.twig");
    }
}
