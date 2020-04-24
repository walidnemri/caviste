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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>Caviste - ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
        <style>
            .mega-menu .dropdown-pane {
                width: 100%;
                max-width: 85rem;
                margin: 0 auto !important;
                left: 0% !important;
                right: 0% !important;
            }

            .mega-menu .menu {
                background: none;
            }

            .mega-menu > a::after {
                display: block;
                width: 0;
                height: 0;
                border: inset 6px;
                content: '';
                border-bottom-width: 0;
                border-top-style: solid;
                border-color: #1779ba transparent transparent;
                margin-left: 10px;
                margin-top: 11%;
            }
        </style>
    </head>
    <body>
        <main>
            ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        </main>
         <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
        <script>
             \$(document).foundation();
        </script>
         ";
        // line 46
        $this->displayBlock('javascript', $context, $blocks);
        // line 47
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  106 => 38,  100 => 6,  95 => 47,  93 => 46,  84 => 39,  82 => 38,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>Caviste - {% block title%}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
        <style>
            .mega-menu .dropdown-pane {
                width: 100%;
                max-width: 85rem;
                margin: 0 auto !important;
                left: 0% !important;
                right: 0% !important;
            }

            .mega-menu .menu {
                background: none;
            }

            .mega-menu > a::after {
                display: block;
                width: 0;
                height: 0;
                border: inset 6px;
                content: '';
                border-bottom-width: 0;
                border-top-style: solid;
                border-color: #1779ba transparent transparent;
                margin-left: 10px;
                margin-top: 11%;
            }
        </style>
    </head>
    <body>
        <main>
            {% block content %}{% endblock %}
        </main>
         <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
        <script>
             \$(document).foundation();
        </script>
         {% block javascript %}{% endblock %}
    </body>
</html>", "layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/caviste/caviste/src/Templates/layout.html.twig");
    }
}
