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

/* indexTest.twig */
class __TwigTemplate_398ecf8557274c5c0c39ef2be94634760a0a07d456a620a1721964ea021b61a8 extends \Twig\Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Foundation | Welcome</title>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
  </head>
  <body>

    <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"top-bar-left\">
        <ul class=\"menu\">
          <li class=\"menu-text\">Marketing Site</li>
          <li><a href=\"#\">One</a></li>
          <li><a href=\"#\">Two</a></li>
        </ul>
      </div>
      <div class=\"top-bar-right\">
        <ul class=\"menu\">
          <li><a href=\"#\">Three</a></li>
          <li><a href=\"#\">Four</a></li>
          <li><a href=\"#\">Five</a></li>
          <li><a href=\"#\">Six</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->


    <div class=\"orbit\" role=\"region\" aria-label=\"Favorite Space Pictures\" data-orbit>
      <ul class=\"orbit-container\">
        <button class=\"orbit-previous\" aria-label=\"previous\"><span class=\"show-for-sr\">Previous Slide</span>&#9664;</button>
        <button class=\"orbit-next\" aria-label=\"next\"><span class=\"show-for-sr\">Next Slide</span>&#9654;</button>
        <li class=\"orbit-slide is-active\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
      </ul>
    </div>

    <div class=\"row column text-center\">
      <h2>";
        // line 53
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
      <hr>
    </div>

    <div class=\"row small-up-2 large-up-4\">
      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
            // line 59
            echo "      <div class=\"column\">
        <img   data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\" class=\"thumbnail\" src=\"pics/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "picture", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
        <h5>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</h5>
        <p>\$400</p>
        <button data-id=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">buy</button>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
    <div id=\"dialog\" title=\"Basic dialog\">
      <div style=\"float: left\">
          <img class=\"picture-wine\" src=\"\" alt=\"\">
      </div>
      <div id=\"wine-description\">
          <p id='test' data-id=\"country\"><strong>Country:</strong> <span></span></p>
          <p data-id=\"region\"><strong>Region:</strong> <span></span></p>
          <p data-id=\"grapes\"><strong>Grapes:</strong> <span></span></p>
          <p data-id=\"year\"><strong>Year:</strong> <span></span></p>
          <p data-id=\"description\"><strong>Description:</strong> <span></span></p>
      </div>
    </div>

    <hr>
    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
    <script>
      \$(document).foundation();
      \$( function() {
        dialog = \$( \"#dialog\" ).dialog({
          autoOpen: false,
          height: 400,
          width: 550,
          modal: true,
        });

        //console.log(document.querySelectorAll('.detail'));
        \$( \"img.thumbnail\" ).on( \"click\", function() {
          console.log(\$(this).data('id'));
          const id = \$(this).data('id');
          console.log('children',document.getElementById(\"wine-description\").children);
          const p = document.querySelectorAll(\"#wine-description > p\");
          const img = document.querySelector(\".picture-wine\");

          \$.getJSON('api/wines/'+id, function(data){
            console.log(img);
            img.src = `pics/\${data[0].picture}`;
            for (elem of p) {
                console.log('elem',elem);
                if (data[0][elem.getAttribute('data-id')]) {
                    const attr = elem.getAttribute('data-id')
                    elem.innerHTML = `<strong>\${attr}</strong> : \${data[0][elem.getAttribute('data-id')]}`
                }
            }
          })
          dialog.dialog( \"open\" );
        });
      } );
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "indexTest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  117 => 63,  112 => 61,  106 => 60,  103 => 59,  99 => 58,  91 => 53,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Foundation | Welcome</title>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
  </head>
  <body>

    <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"top-bar-left\">
        <ul class=\"menu\">
          <li class=\"menu-text\">Marketing Site</li>
          <li><a href=\"#\">One</a></li>
          <li><a href=\"#\">Two</a></li>
        </ul>
      </div>
      <div class=\"top-bar-right\">
        <ul class=\"menu\">
          <li><a href=\"#\">Three</a></li>
          <li><a href=\"#\">Four</a></li>
          <li><a href=\"#\">Five</a></li>
          <li><a href=\"#\">Six</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->


    <div class=\"orbit\" role=\"region\" aria-label=\"Favorite Space Pictures\" data-orbit>
      <ul class=\"orbit-container\">
        <button class=\"orbit-previous\" aria-label=\"previous\"><span class=\"show-for-sr\">Previous Slide</span>&#9664;</button>
        <button class=\"orbit-next\" aria-label=\"next\"><span class=\"show-for-sr\">Next Slide</span>&#9654;</button>
        <li class=\"orbit-slide is-active\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
        <li class=\"orbit-slide\">
          <img src=\"https://placehold.it/2000x750\">
        </li>
      </ul>
    </div>

    <div class=\"row column text-center\">
      <h2>{{title}}</h2>
      <hr>
    </div>

    <div class=\"row small-up-2 large-up-4\">
      {% for vin in vins  %}
      <div class=\"column\">
        <img   data-id=\"{{vin.id}}\" class=\"thumbnail\" src=\"pics/{{ vin.picture }}\">
        <h5>{{ vin.name }}</h5>
        <p>\$400</p>
        <button data-id=\"{{vin.id}}\">buy</button>
      </div>
      {% endfor %}
    </div>
    <div id=\"dialog\" title=\"Basic dialog\">
      <div style=\"float: left\">
          <img class=\"picture-wine\" src=\"\" alt=\"\">
      </div>
      <div id=\"wine-description\">
          <p id='test' data-id=\"country\"><strong>Country:</strong> <span></span></p>
          <p data-id=\"region\"><strong>Region:</strong> <span></span></p>
          <p data-id=\"grapes\"><strong>Grapes:</strong> <span></span></p>
          <p data-id=\"year\"><strong>Year:</strong> <span></span></p>
          <p data-id=\"description\"><strong>Description:</strong> <span></span></p>
      </div>
    </div>

    <hr>
    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
    <script>
      \$(document).foundation();
      \$( function() {
        dialog = \$( \"#dialog\" ).dialog({
          autoOpen: false,
          height: 400,
          width: 550,
          modal: true,
        });

        //console.log(document.querySelectorAll('.detail'));
        \$( \"img.thumbnail\" ).on( \"click\", function() {
          console.log(\$(this).data('id'));
          const id = \$(this).data('id');
          console.log('children',document.getElementById(\"wine-description\").children);
          const p = document.querySelectorAll(\"#wine-description > p\");
          const img = document.querySelector(\".picture-wine\");

          \$.getJSON('api/wines/'+id, function(data){
            console.log(img);
            img.src = `pics/\${data[0].picture}`;
            for (elem of p) {
                console.log('elem',elem);
                if (data[0][elem.getAttribute('data-id')]) {
                    const attr = elem.getAttribute('data-id')
                    elem.innerHTML = `<strong>\${attr}</strong> : \${data[0][elem.getAttribute('data-id')]}`
                }
            }
          })
          dialog.dialog( \"open\" );
        });
      } );
    </script>
  </body>
</html>", "indexTest.twig", "/Applications/XAMPP/xamppfiles/htdocs/caviste/caviste/src/Templates/indexTest.twig");
    }
}
