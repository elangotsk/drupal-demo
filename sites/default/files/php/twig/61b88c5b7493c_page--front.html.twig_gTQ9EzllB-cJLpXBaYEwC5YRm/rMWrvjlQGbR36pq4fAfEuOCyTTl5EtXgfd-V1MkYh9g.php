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

/* themes/custom/netflix/templates/pages/page--front.html.twig */
class __TwigTemplate_cb6ba74d2537b65e2dc095384322b5a02550a7914238b8cb381526306252cbdc extends \Twig\Template
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
        $this->loadTemplate("@netflix/partial/header.html.twig", "themes/custom/netflix/templates/pages/page--front.html.twig", 1)->display($context);
        // line 2
        echo "  
                        ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepage", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
                           <div class=\"our-story-card animation-card watchOnTv\" data-uia-our-story=\"watchOnTv\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Enjoy on your TV.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../png/tv.png\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <video class=\"our-story-card-video\" autoplay=\"\" playsinline=\"\" muted=\"\" loop=\"\">
                                             <source src=\"../media/video-tv-0819.m4v\" type=\"video/mp4\"/>
                                          </video>
                                          <div class=\"our-story-card-animation-text\"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card animation-card downloadAndWatch flipped\" data-uia-our-story=\"downloadAndWatch\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Download your shows to watch offline.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Save your favorites easily and always have something to watch.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../jpg/mobile-0819.jpg\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <div class=\"our-story-card-animation-image\"><img alt=\"\" src=\"../png/boxshot.png\"/></div>
                                          <div class=\"our-story-card-animation-text\">
                                             <div id=\"\" class=\"text-0\" data-uia=\"\">Stranger Things</div>
                                             <div id=\"\" class=\"text-1\" data-uia=\"\">Downloading...</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card animation-card watchOnDevice\" data-uia-our-story=\"watchOnDevice\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Watch everywhere.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../png/device-pile.png\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <video class=\"our-story-card-video\" autoplay=\"\" playsinline=\"\" muted=\"\" loop=\"\">
                                             <source src=\"../media/video-devices.m4v\" type=\"video/mp4\"/>
                                          </video>
                                          <div class=\"our-story-card-animation-text\"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card faq-card\" data-uia-our-story=\"faq\" data-uia=\"our-story-card\" id=\"faq\">
                              <div class=\"our-story-card-text\">
                                 <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"faq-title\">Frequently Asked Questions</h1>
                                 <ul class=\"faq-list\">
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"what_is_netflix\">
                                       <button class=\"faq-question\">
                                          What is Netflix?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.<br/><br/>You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"cost\">
                                       <button class=\"faq-question\">
                                          How much does Netflix cost?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from ₦2,900 to ₦4,400 a month. No extra costs, no contracts.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"where_to_watch\">
                                       <button class=\"faq-question\">
                                          Where can I watch?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.<br/><br/>You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"cancel\">
                                       <button class=\"faq-question\">
                                          How do I cancel?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"what_to_watch_nft\">
                                       <button class=\"faq-question\">
                                          What can I watch on Netflix?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.</span></div>
                                    </li>
                                 </ul>
                                 <div class=\"cta-link-wrapper\">
                                    <form class=\"cta-form\" action=\"https://www.netflix.com/getstarted\" method=\"GET\" id=\"formstart\">
                                       <input type=\"hidden\" name=\"locale\" value=\"en-NG\"/><input type=\"hidden\" name=\"action\" value=\"registerAndSelectPlan\"/>
                                       <button class=\"btn btn-red nmhp-cta nmhp-cta-extra-large btn-submit btn-custom\" type=\"submit\" autoComplete=\"off\" tabindex=\"0\" role=\"link\" data-uia=\"our-story-cta-faq\">
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
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>
                           ";
        // line 132
        $this->loadTemplate("@netflix/partial/footer.html.twig", "themes/custom/netflix/templates/pages/page--front.html.twig", 132)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/netflix/templates/pages/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 132,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@netflix/partial/header.html.twig\" %}
  
                        {{ page.homepage }}
                           <div class=\"our-story-card animation-card watchOnTv\" data-uia-our-story=\"watchOnTv\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Enjoy on your TV.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../png/tv.png\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <video class=\"our-story-card-video\" autoplay=\"\" playsinline=\"\" muted=\"\" loop=\"\">
                                             <source src=\"../media/video-tv-0819.m4v\" type=\"video/mp4\"/>
                                          </video>
                                          <div class=\"our-story-card-animation-text\"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card animation-card downloadAndWatch flipped\" data-uia-our-story=\"downloadAndWatch\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Download your shows to watch offline.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Save your favorites easily and always have something to watch.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../jpg/mobile-0819.jpg\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <div class=\"our-story-card-animation-image\"><img alt=\"\" src=\"../png/boxshot.png\"/></div>
                                          <div class=\"our-story-card-animation-text\">
                                             <div id=\"\" class=\"text-0\" data-uia=\"\">Stranger Things</div>
                                             <div id=\"\" class=\"text-1\" data-uia=\"\">Downloading...</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card animation-card watchOnDevice\" data-uia-our-story=\"watchOnDevice\" data-uia=\"our-story-card\">
                              <div class=\"animation-card-container\">
                                 <div class=\"our-story-card-text\">
                                    <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"animation-card-title\">Watch everywhere.</h1>
                                    <h2 id=\"\" class=\"our-story-card-subtitle\" data-uia=\"our-story-card-subtitle\">Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</h2>
                                 </div>
                                 <div class=\"our-story-card-img-container\">
                                    <div class=\"our-story-card-animation-container\">
                                       <img alt=\"\" class=\"our-story-card-img\" src=\"../png/device-pile.png\" data-uia=\"our-story-card-img\"/>
                                       <div class=\"our-story-card-animation\">
                                          <video class=\"our-story-card-video\" autoplay=\"\" playsinline=\"\" muted=\"\" loop=\"\">
                                             <source src=\"../media/video-devices.m4v\" type=\"video/mp4\"/>
                                          </video>
                                          <div class=\"our-story-card-animation-text\"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"center-pixel\" style=\"position:absolute\"></div>
                              </div>
                           </div>
                           <div class=\"our-story-card faq-card\" data-uia-our-story=\"faq\" data-uia=\"our-story-card\" id=\"faq\">
                              <div class=\"our-story-card-text\">
                                 <h1 id=\"\" class=\"our-story-card-title\" data-uia=\"faq-title\">Frequently Asked Questions</h1>
                                 <ul class=\"faq-list\">
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"what_is_netflix\">
                                       <button class=\"faq-question\">
                                          What is Netflix?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.<br/><br/>You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"cost\">
                                       <button class=\"faq-question\">
                                          How much does Netflix cost?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from ₦2,900 to ₦4,400 a month. No extra costs, no contracts.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"where_to_watch\">
                                       <button class=\"faq-question\">
                                          Where can I watch?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.<br/><br/>You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"cancel\">
                                       <button class=\"faq-question\">
                                          How do I cancel?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</span></div>
                                    </li>
                                    <li class=\"faq-list-item\" data-uia-our-story=\"faq-list-item\" data-uia-faq=\"what_to_watch_nft\">
                                       <button class=\"faq-question\">
                                          What can I watch on Netflix?
                                          <svg id=\"thin-x\" viewBox=\"0 0 26 26\" class=\"svg-icon svg-icon-thin-x svg-closed\" focusable=\"true\">
                                             <path d=\"M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z\"></path>
                                          </svg>
                                       </button>
                                       <div class=\"faq-answer closed\"><span id=\"\" data-uia=\"\">Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.</span></div>
                                    </li>
                                 </ul>
                                 <div class=\"cta-link-wrapper\">
                                    <form class=\"cta-form\" action=\"https://www.netflix.com/getstarted\" method=\"GET\" id=\"formstart\">
                                       <input type=\"hidden\" name=\"locale\" value=\"en-NG\"/><input type=\"hidden\" name=\"action\" value=\"registerAndSelectPlan\"/>
                                       <button class=\"btn btn-red nmhp-cta nmhp-cta-extra-large btn-submit btn-custom\" type=\"submit\" autoComplete=\"off\" tabindex=\"0\" role=\"link\" data-uia=\"our-story-cta-faq\">
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
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>
                           {% include \"@netflix/partial/footer.html.twig\" %}
", "themes/custom/netflix/templates/pages/page--front.html.twig", "D:\\projects\\htdocs\\2021\\drupal-9.2.7\\themes\\custom\\netflix\\templates\\pages\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
