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

/* __string_template__34f6a825a3619f41661ce59042d27a01145e9bec040946d632cfb1ea4c8179fe */
class __TwigTemplate_e9b31acbd3923558f194406b0a1ba6780e771135b8baf5e02fcfac6cc136e8c3 extends \Twig\Template
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
        echo "  
                        <div class=\"our-story-cards\" data-uia-our-story=\"our-story-cards\">
                           <div class=\"our-story-card hero-card hero_fuji vlv\" data-uia-our-story=\"hero_fuji\" data-uia=\"our-story-card\">
                              <div class=\"our-story-card-background\">
                                 <div class=\"concord-img-wrapper\" data-uia=\"concord-img-wrapper\">
                                    <img class=\"concord-img vlv-creative\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_home_background_image"] ?? null), 6, $this->source), "html", null, true);
        echo "\" alt=\"\"/>
                                    <div class=\"concord-img-gradient\"></div>
                                 </div>
                              </div>
                              <div class=\"our-story-card-text\">
                                 <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"hero-title\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_home_main_title"] ?? null), 11, $this->source), "html", null, true);
        echo "</h1>
                                 <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_home_sub_title"] ?? null), 12, $this->source), "html", null, true);
        echo "</h2>
                                 <div class=\"cta-link-wrapper\">
                                    <form class=\"cta-form\" action=\"https://www.netflix.com/getstarted\" method=\"GET\" id=\"formstart\">
                                       <input type=\"hidden\" name=\"locale\" value=\"en-NG\"/><input type=\"hidden\" name=\"action\" value=\"registerAndSelectPlan\"/>
                                       <button class=\"btn btn-red nmhp-cta nmhp-cta-extra-large btn-submit btn-custom\" type=\"submit\" autoComplete=\"off\" tabindex=\"0\" role=\"link\" data-uia=\"our-story-cta-hero_fuji\">
                                          <span id=\"\" class=\"cta-btn-txt\" data-uia=\"\">Get Started</span>
                                          <span id=\"\" class=\"chevron-right-arrow\" data-uia=\"\">
                                             <svg viewBox=\"0 0 6 12\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <desc>chevron</desc>
                                                <path d=\"M.61 1.312l.78-.624L5.64 6l-4.25 5.312-.78-.624L4.36 6z\" fill=\"none\" fill-rule=\"evenodd\"></path>
                                             </svg>
                                          </span>
                                       </button>
                                    </form>
                                 </div>
                                 <h3 id=\"\" class=\"our-story-card-disclaimer\" data-uia=\"our-story-card-disclaimer\"></h3>
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__34f6a825a3619f41661ce59042d27a01145e9bec040946d632cfb1ea4c8179fe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 11,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}  
                        <div class=\"our-story-cards\" data-uia-our-story=\"our-story-cards\">
                           <div class=\"our-story-card hero-card hero_fuji vlv\" data-uia-our-story=\"hero_fuji\" data-uia=\"our-story-card\">
                              <div class=\"our-story-card-background\">
                                 <div class=\"concord-img-wrapper\" data-uia=\"concord-img-wrapper\">
                                    <img class=\"concord-img vlv-creative\" src=\"{{ field_home_background_image }}\" alt=\"\"/>
                                    <div class=\"concord-img-gradient\"></div>
                                 </div>
                              </div>
                              <div class=\"our-story-card-text\">
                                 <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"hero-title\">{{ field_home_main_title }}</h1>
                                 <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">{{ field_home_sub_title }}</h2>
                                 <div class=\"cta-link-wrapper\">
                                    <form class=\"cta-form\" action=\"https://www.netflix.com/getstarted\" method=\"GET\" id=\"formstart\">
                                       <input type=\"hidden\" name=\"locale\" value=\"en-NG\"/><input type=\"hidden\" name=\"action\" value=\"registerAndSelectPlan\"/>
                                       <button class=\"btn btn-red nmhp-cta nmhp-cta-extra-large btn-submit btn-custom\" type=\"submit\" autoComplete=\"off\" tabindex=\"0\" role=\"link\" data-uia=\"our-story-cta-hero_fuji\">
                                          <span id=\"\" class=\"cta-btn-txt\" data-uia=\"\">Get Started</span>
                                          <span id=\"\" class=\"chevron-right-arrow\" data-uia=\"\">
                                             <svg viewBox=\"0 0 6 12\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <desc>chevron</desc>
                                                <path d=\"M.61 1.312l.78-.624L5.64 6l-4.25 5.312-.78-.624L4.36 6z\" fill=\"none\" fill-rule=\"evenodd\"></path>
                                             </svg>
                                          </span>
                                       </button>
                                    </form>
                                 </div>
                                 <h3 id=\"\" class=\"our-story-card-disclaimer\" data-uia=\"our-story-card-disclaimer\"></h3>
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>", "__string_template__34f6a825a3619f41661ce59042d27a01145e9bec040946d632cfb1ea4c8179fe", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
