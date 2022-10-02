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

/* modules/custom/ayoba_rdf_feed/templates/ayoba-rdf-feed.html.twig */
class __TwigTemplate_40b70ba3f09efd1726f7c888cf55e4b50f8503d8939f6937e4a53bdcb002b8de extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"feed-content\">
    <ul class=\"feed-list\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["feeds"] ?? null), "item", [], "any", false, false, true, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
            <li><small>Title: </small><strong>";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "</strong></li>
            <li><small>Description: </small>";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "</li>
            <li><small>Author: </small>";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 7)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 7)) : (twig_get_attribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, true, 7))), "html", null, true);
            echo "\" target=\"_blank\">Read more &gt;</a></li>
            ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 8), "url", [], "any", false, false, true, 8) != "")) {
                // line 9
                echo "                <li><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 9), "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 9), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" height=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 9), "height", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" width=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 9), "width", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" /></li>
            ";
            }
            // line 11
            echo "            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ayoba_rdf_feed/templates/ayoba-rdf-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  79 => 11,  67 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ayoba_rdf_feed/templates/ayoba-rdf-feed.html.twig", "/Applications/MAMP/htdocs/Ayoba/ayoba_project/web/modules/custom/ayoba_rdf_feed/templates/ayoba-rdf-feed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 8);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
