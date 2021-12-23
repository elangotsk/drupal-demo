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

/* @netflix/partial/header.html.twig */
class __TwigTemplate_dc6e22a6d93e274f7316cc4afd5591d1ec951fb2f9e569dd517cbbab3eec75d3 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
   <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
      <meta charSet=\"utf-8\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    
      <title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
    
     <script type=\"text/javascript\" charSet=\"UTF-8\" crossorigin=\"anonymous\" data-domain-script=\"87b6a5c0-0104-4e96-a291-092c11350111\" src=\"../js/otsdkstub.js\"></script>
      <meta content=\"watch movies, movies online, watch TV, TV online, TV shows online, watch TV shows, stream movies, stream tv, instant streaming, watch online, movies, watch movies Nigeria, watch TV online, no download, full length movies\" name=\"keywords\"/>
      <meta content=\"Watch Netflix movies &amp; TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.\" name=\"description\"/>
      <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\"/>
      <meta name=\"format-detection\" content=\"telephone=no\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://codex.nflxext.com/%5E3.0.0/truthBundle/webui/1.22.5-shakti-css-vc995a1c8/css/css/less%7Ccore%7Cerror-page.less/1/auCwJ4HvFo9BGI/none/true/none\" data-uia=\"botLink\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://codex.nflxext.com/%5E3.0.0/truthBundle/webui/1.22.5-shakti-css-vc995a1c8/css/css/less%7Cpages%7Chome%7CourStory%7Cfuji%7Cfuji.less/1/auCwJ4HvFo9BGI/none/true/none\" data-uia=\"botLink\"/>
      <link rel=\"shortcut icon\" href=\"../favicon.ico\"/>
      <link rel=\"apple-touch-icon\" href=\"../png/nficon2016.png\"/>
    
      
   </head>

    <body>
      <div id=\"appMountPoint\">
         <div class=\"basicLayout\">
            <div class=\"\">
               <div class=\"our-story-desktop-framework\">
                  <div>
                     <div class=\"our-story-container our-story-container--legacy\" dir=\"ltr\">
                        <div class=\"our-story-header-wrapper\">
                           <div class=\"our-story-header\" data-uia-our-story=\"our-story-header\">
                              <span class=\"svg-nfLogo our-story-logo nfLogo\" data-uia=\"netflix-header-svg-logo-noclick\">
                                 <svg viewBox=\"0 0 111 30\" class=\"svg-icon svg-icon-netflix-logo\" focusable=\"false\">
                                    <g id=\"netflix-logo\">
                                       <path d=\"M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z\" id=\"Fill-14\"></path>
                                    </g>
                                 </svg>
                                 <span class=\"screen-reader-text\">Netflix</span>
                              </span>
                              <a href=\"login.html\" class=\"authLinks redButton\" data-uia=\"header-login-link\">Sign In</a>
                           </div>
                        </div>";
    }

    public function getTemplateName()
    {
        return "@netflix/partial/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
   <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
      <meta charSet=\"utf-8\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    
      <title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
    
     <script type=\"text/javascript\" charSet=\"UTF-8\" crossorigin=\"anonymous\" data-domain-script=\"87b6a5c0-0104-4e96-a291-092c11350111\" src=\"../js/otsdkstub.js\"></script>
      <meta content=\"watch movies, movies online, watch TV, TV online, TV shows online, watch TV shows, stream movies, stream tv, instant streaming, watch online, movies, watch movies Nigeria, watch TV online, no download, full length movies\" name=\"keywords\"/>
      <meta content=\"Watch Netflix movies &amp; TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.\" name=\"description\"/>
      <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\"/>
      <meta name=\"format-detection\" content=\"telephone=no\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://codex.nflxext.com/%5E3.0.0/truthBundle/webui/1.22.5-shakti-css-vc995a1c8/css/css/less%7Ccore%7Cerror-page.less/1/auCwJ4HvFo9BGI/none/true/none\" data-uia=\"botLink\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://codex.nflxext.com/%5E3.0.0/truthBundle/webui/1.22.5-shakti-css-vc995a1c8/css/css/less%7Cpages%7Chome%7CourStory%7Cfuji%7Cfuji.less/1/auCwJ4HvFo9BGI/none/true/none\" data-uia=\"botLink\"/>
      <link rel=\"shortcut icon\" href=\"../favicon.ico\"/>
      <link rel=\"apple-touch-icon\" href=\"../png/nficon2016.png\"/>
    
      
   </head>

    <body>
      <div id=\"appMountPoint\">
         <div class=\"basicLayout\">
            <div class=\"\">
               <div class=\"our-story-desktop-framework\">
                  <div>
                     <div class=\"our-story-container our-story-container--legacy\" dir=\"ltr\">
                        <div class=\"our-story-header-wrapper\">
                           <div class=\"our-story-header\" data-uia-our-story=\"our-story-header\">
                              <span class=\"svg-nfLogo our-story-logo nfLogo\" data-uia=\"netflix-header-svg-logo-noclick\">
                                 <svg viewBox=\"0 0 111 30\" class=\"svg-icon svg-icon-netflix-logo\" focusable=\"false\">
                                    <g id=\"netflix-logo\">
                                       <path d=\"M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z\" id=\"Fill-14\"></path>
                                    </g>
                                 </svg>
                                 <span class=\"screen-reader-text\">Netflix</span>
                              </span>
                              <a href=\"login.html\" class=\"authLinks redButton\" data-uia=\"header-login-link\">Sign In</a>
                           </div>
                        </div>", "@netflix/partial/header.html.twig", "D:\\projects\\htdocs\\2021\\drupal-9.2.7\\themes\\custom\\netflix\\templates\\partial\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
