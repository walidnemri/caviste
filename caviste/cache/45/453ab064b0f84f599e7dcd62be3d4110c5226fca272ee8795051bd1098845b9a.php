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

/* catalogue.twig */
class __TwigTemplate_c794975fef8db5e702d1bbf44de8fdb96759d2ff7e2031799e21bfc20bd8b82b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "catalogue.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "liste des vins";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- Start Top Bar -->

    <!-- End Top Bar -->

    <div class=\"top-bar\">
      <div class=\"top-bar-left\">
        <ul class=\"dropdown menu\" data-dropdown-menu>
          <li class=\"menu-text\">Sort</li>
          <li class=\"mega-menu\">
            <a data-toggle=\"mega-menu\" href=\"#\">by</a>
            <div class=\"dropdown-pane bottom\" id=\"mega-menu\" data-dropdown data-options=\"closeOnClick:true; hover: true; hoverPane: true; vOffset:11\">
              <div class=\"row expanded\">
                <div class=\"column\">
                  <ul class=\"menu vertical\">
                    <li><a href=\"/sort/name\">name</a></li>
                    <li><a href=\"/sort/year\">year</a></li>
                    <li><a href=\"/\">no sort</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class=\"menu-text\">filter</li>
          <li class=\"mega-menu\">
            <a data-toggle=\"mega-menu2\" href=\"#\">by</a>
            <div class=\"dropdown-pane bottom\" id=\"mega-menu2\" data-dropdown data-options=\"closeOnClick:true; hover: true; hoverPane: true; vOffset:11\">
              <div class=\"row expanded\">
                <div class=\"column\">
                  <ul class=\"menu vertical\">
                    <li><a href=\"/\">no filter</a></li>
                    <li>
                      <a href=\"#\">country</a>
                      <ul class=\"menu\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["country"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 38
            echo "                         <li><a href=\"/filter/";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"top-bar-right\">
        <ul class=\"menu\">
          <li><input id='searchVal' type=\"search\" placeholder=\"Search\"></li>
          <li><button id='searchButton' type=\"button\" class=\"button\">Search</button></li>
        </ul>
      </div>
    </div>


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
        // line 77
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
      <hr>
    </div>

    <div class=\"row small-up-2 large-up-4\">
      ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
            // line 83
            echo "      <div class=\"column\">
        <img   data-id=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"thumbnail\" src=\"http://localhost:8080/pics/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "picture", [], "any", false, false, false, 84), "html", null, true);
            echo "\">
        <h5>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</h5>
        <p>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "grapes", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>
        <button data-id=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vin"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\">buy</button>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
    ";
    }

    // line 106
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "    <script>
      \$( function() {
        const searchButton = document.getElementById('searchButton');
        const searchVal = document.getElementById('searchVal');

        searchButton.addEventListener('click', () => {
          const keyword = searchVal.value;
          window.location.href = \"/search/\"+keyword;
        })

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

          \$.getJSON('http://localhost:8080/api/wines/'+id, function(data){
            console.log(img);
            img.src = `http://localhost:8080/pics/generic.jpg`;

            if (data[0].picture) img.src = `http://localhost:8080/pics/\${data[0].picture}`;

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
  ";
    }

    public function getTemplateName()
    {
        return "catalogue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 107,  205 => 106,  186 => 90,  177 => 87,  173 => 86,  169 => 85,  163 => 84,  160 => 83,  156 => 82,  148 => 77,  109 => 40,  98 => 38,  94 => 37,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}liste des vins{% endblock %}
{% block content %}
    <!-- Start Top Bar -->

    <!-- End Top Bar -->

    <div class=\"top-bar\">
      <div class=\"top-bar-left\">
        <ul class=\"dropdown menu\" data-dropdown-menu>
          <li class=\"menu-text\">Sort</li>
          <li class=\"mega-menu\">
            <a data-toggle=\"mega-menu\" href=\"#\">by</a>
            <div class=\"dropdown-pane bottom\" id=\"mega-menu\" data-dropdown data-options=\"closeOnClick:true; hover: true; hoverPane: true; vOffset:11\">
              <div class=\"row expanded\">
                <div class=\"column\">
                  <ul class=\"menu vertical\">
                    <li><a href=\"/sort/name\">name</a></li>
                    <li><a href=\"/sort/year\">year</a></li>
                    <li><a href=\"/\">no sort</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class=\"menu-text\">filter</li>
          <li class=\"mega-menu\">
            <a data-toggle=\"mega-menu2\" href=\"#\">by</a>
            <div class=\"dropdown-pane bottom\" id=\"mega-menu2\" data-dropdown data-options=\"closeOnClick:true; hover: true; hoverPane: true; vOffset:11\">
              <div class=\"row expanded\">
                <div class=\"column\">
                  <ul class=\"menu vertical\">
                    <li><a href=\"/\">no filter</a></li>
                    <li>
                      <a href=\"#\">country</a>
                      <ul class=\"menu\">
                        {% for c in country  %}
                         <li><a href=\"/filter/{{c}}\">{{c}}</a></li>
                        {% endfor %}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"top-bar-right\">
        <ul class=\"menu\">
          <li><input id='searchVal' type=\"search\" placeholder=\"Search\"></li>
          <li><button id='searchButton' type=\"button\" class=\"button\">Search</button></li>
        </ul>
      </div>
    </div>


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
        <img   data-id=\"{{vin.id}}\" class=\"thumbnail\" src=\"http://localhost:8080/pics/{{ vin.picture }}\">
        <h5>{{ vin.name }}</h5>
        <p>{{ vin.grapes }}</p>
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
    {% endblock %}
    {% block javascript %}
    <script>
      \$( function() {
        const searchButton = document.getElementById('searchButton');
        const searchVal = document.getElementById('searchVal');

        searchButton.addEventListener('click', () => {
          const keyword = searchVal.value;
          window.location.href = \"/search/\"+keyword;
        })

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

          \$.getJSON('http://localhost:8080/api/wines/'+id, function(data){
            console.log(img);
            img.src = `http://localhost:8080/pics/generic.jpg`;

            if (data[0].picture) img.src = `http://localhost:8080/pics/\${data[0].picture}`;

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
  {% endblock %}", "catalogue.twig", "/Applications/XAMPP/xamppfiles/htdocs/caviste/caviste/src/Templates/catalogue.twig");
    }
}
