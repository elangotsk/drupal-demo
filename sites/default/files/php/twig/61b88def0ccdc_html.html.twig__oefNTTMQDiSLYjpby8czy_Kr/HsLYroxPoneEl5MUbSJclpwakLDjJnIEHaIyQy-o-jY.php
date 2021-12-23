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

/* themes/custom/netflix/templates/html.html.twig */
class __TwigTemplate_ca993cff082f02ae785737db60968a26def93ae189c7a937a0afc53ae26eede2 extends \Twig\Template
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
        // line 2
        $context["body_classes"] = [0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 4, $this->source))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 5, $this->source)))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 9
        echo "
<!DOCTYPE html>
<html";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 11, $this->source), "html", null, true);
        echo ">
    <head>
      <head-placeholder token=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 13, $this->source), "html", null, true);
        echo "\">
      <title> ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 14, $this->source), " | "));
        echo "</title>
      <css-placeholder token=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 15, $this->source), "html", null, true);
        echo "\">
      <js-placeholder token=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 16, $this->source), "html", null, true);
        echo "\"> 

    <head>

    <body";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo " >
         <a href=\"#main-conent\" class=\"visually-hidden focusable skip-link\">
         ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
         </a>

         ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 25, $this->source), "html", null, true);
        echo "
         ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 26, $this->source), "html", null, true);
        echo "
         ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 27, $this->source), "html", null, true);
        echo "

        <js-bottom-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source), "html", null, true);
        echo "\">

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/netflix/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  92 => 27,  88 => 26,  84 => 25,  78 => 22,  73 => 20,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  45 => 9,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
set body_classes = [
  logged_in ? 'user-logged-in',
  not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
  node_type ? 'page-node-type-' ~ node_type|clean_class,
  db_offline ? 'db-offline',  
]
%}

<!DOCTYPE html>
<html{{ html_attributes }}>
    <head>
      <head-placeholder token=\"{{ placeholder_token }}\">
      <title> {{ head_title|safe_join(' | ') }}</title>
      <css-placeholder token=\"{{ placeholder_token }}\">
      <js-placeholder token=\"{{ placeholder_token}}\"> 

    <head>

    <body{{ attribute.addClass(body_classes) }} >
         <a href=\"#main-conent\" class=\"visually-hidden focusable skip-link\">
         {{ 'Skip to main content'|t }}
         </a>

         {{ page_top }}
         {{ page }}
         {{ page_bottom }}

        <js-bottom-placeholder token=\"{{ placeholder_token }}\">

    </body>
</html>", "themes/custom/netflix/templates/html.html.twig", "D:\\projects\\htdocs\\2021\\drupal-9.2.7\\themes\\custom\\netflix\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("clean_class" => 4, "escape" => 11, "safe_join" => 14, "t" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
