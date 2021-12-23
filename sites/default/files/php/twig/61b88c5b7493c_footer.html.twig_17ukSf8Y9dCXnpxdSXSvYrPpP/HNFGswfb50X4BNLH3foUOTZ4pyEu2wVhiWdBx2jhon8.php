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

/* @netflix/partial/footer.html.twig */
class __TwigTemplate_82b57c12ee1833ceb1e0d7709b737a033e9b3bedfd84c2112528691652b19799 extends \Twig\Template
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
        echo "<div class=\"our-story-card card-contents footer-card our-story-card-no-border\" style=\"position:relative\" data-uia-our-story=\"footer\" data-uia=\"our-story-card\">
                              <div class=\"site-footer-wrapper centered dark\">
                                 <div class=\"footer-divider\"></div>
                                 <div class=\"site-footer\">
                                    <p class=\"footer-top\"><a class=\"footer-top-a\" href=\"https://help.netflix.com/contactus\">Questions? Contact us.</a></p>
                                    <ul class=\"footer-links structural\">
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_faq_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/support/412\" placeholder=\"footer_responsive_link_faq\"><span id=\"\" data-uia=\"data-uia-footer-label\">FAQ</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_help_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/\" placeholder=\"footer_responsive_link_help\"><span id=\"\" data-uia=\"data-uia-footer-label\">Help Center</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_account_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"logind785.html\" placeholder=\"footer_responsive_link_account\"><span id=\"\" data-uia=\"data-uia-footer-label\">Account</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_media_center_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://media.netflix.com/\" placeholder=\"footer_responsive_link_media_center\"><span id=\"\" data-uia=\"data-uia-footer-label\">Media Center</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_relations_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"http://ir.netflix.com/\" placeholder=\"footer_responsive_link_relations\"><span id=\"\" data-uia=\"data-uia-footer-label\">Investor Relations</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_jobs_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://jobs.netflix.com/jobs\" placeholder=\"footer_responsive_link_jobs\"><span id=\"\" data-uia=\"data-uia-footer-label\">Jobs</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_waysToWatch_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://devices.netflix.com/\" placeholder=\"footer_responsive_link_waysToWatch\"><span id=\"\" data-uia=\"data-uia-footer-label\">Ways to Watch</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_terms_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/termsofuse\" placeholder=\"footer_responsive_link_terms\"><span id=\"\" data-uia=\"data-uia-footer-label\">Terms of Use</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_privacy_separate_link_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/privacy\" placeholder=\"footer_responsive_link_privacy_separate_link\"><span id=\"\" data-uia=\"data-uia-footer-label\">Privacy</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_cookies_separate_link_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"#\" placeholder=\"footer_responsive_link_cookies_separate_link\"><span id=\"\" data-uia=\"data-uia-footer-label\">Cookie Preferences</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_corporate_information_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/corpinfo\" placeholder=\"footer_responsive_link_corporate_information\"><span id=\"\" data-uia=\"data-uia-footer-label\">Corporate Information</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_contact_us_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/contactus\" placeholder=\"footer_responsive_link_contact_us\"><span id=\"\" data-uia=\"data-uia-footer-label\">Contact Us</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_speed_test_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://fast.com/\" placeholder=\"footer_responsive_link_speed_test\"><span id=\"\" data-uia=\"data-uia-footer-label\">Speed Test</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_legal_notices_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/notices\" placeholder=\"footer_responsive_link_legal_notices\"><span id=\"\" data-uia=\"data-uia-footer-label\">Legal Notices</span></a></li>
                                       <li class=\"footer-link-item originals-link\" placeholder=\"footer_responsive_link_netflix_originals_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"839338.html\" placeholder=\"footer_responsive_link_netflix_originals\"><span id=\"\" data-uia=\"data-uia-footer-label\">Netflix Originals</span></a></li>
                                    </ul>
                                    <p class=\"footer-country\">Netflix Nigeria</p>
                                 </div>
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <script src=\"../js/index.js\"></script>
      
   </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@netflix/partial/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"our-story-card card-contents footer-card our-story-card-no-border\" style=\"position:relative\" data-uia-our-story=\"footer\" data-uia=\"our-story-card\">
                              <div class=\"site-footer-wrapper centered dark\">
                                 <div class=\"footer-divider\"></div>
                                 <div class=\"site-footer\">
                                    <p class=\"footer-top\"><a class=\"footer-top-a\" href=\"https://help.netflix.com/contactus\">Questions? Contact us.</a></p>
                                    <ul class=\"footer-links structural\">
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_faq_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/support/412\" placeholder=\"footer_responsive_link_faq\"><span id=\"\" data-uia=\"data-uia-footer-label\">FAQ</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_help_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/\" placeholder=\"footer_responsive_link_help\"><span id=\"\" data-uia=\"data-uia-footer-label\">Help Center</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_account_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"logind785.html\" placeholder=\"footer_responsive_link_account\"><span id=\"\" data-uia=\"data-uia-footer-label\">Account</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_media_center_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://media.netflix.com/\" placeholder=\"footer_responsive_link_media_center\"><span id=\"\" data-uia=\"data-uia-footer-label\">Media Center</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_relations_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"http://ir.netflix.com/\" placeholder=\"footer_responsive_link_relations\"><span id=\"\" data-uia=\"data-uia-footer-label\">Investor Relations</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_jobs_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://jobs.netflix.com/jobs\" placeholder=\"footer_responsive_link_jobs\"><span id=\"\" data-uia=\"data-uia-footer-label\">Jobs</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_waysToWatch_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://devices.netflix.com/\" placeholder=\"footer_responsive_link_waysToWatch\"><span id=\"\" data-uia=\"data-uia-footer-label\">Ways to Watch</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_terms_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/termsofuse\" placeholder=\"footer_responsive_link_terms\"><span id=\"\" data-uia=\"data-uia-footer-label\">Terms of Use</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_privacy_separate_link_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/privacy\" placeholder=\"footer_responsive_link_privacy_separate_link\"><span id=\"\" data-uia=\"data-uia-footer-label\">Privacy</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_cookies_separate_link_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"#\" placeholder=\"footer_responsive_link_cookies_separate_link\"><span id=\"\" data-uia=\"data-uia-footer-label\">Cookie Preferences</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_corporate_information_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/corpinfo\" placeholder=\"footer_responsive_link_corporate_information\"><span id=\"\" data-uia=\"data-uia-footer-label\">Corporate Information</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_contact_us_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/contactus\" placeholder=\"footer_responsive_link_contact_us\"><span id=\"\" data-uia=\"data-uia-footer-label\">Contact Us</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_speed_test_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://fast.com/\" placeholder=\"footer_responsive_link_speed_test\"><span id=\"\" data-uia=\"data-uia-footer-label\">Speed Test</span></a></li>
                                       <li class=\"footer-link-item\" placeholder=\"footer_responsive_link_legal_notices_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"https://help.netflix.com/legal/notices\" placeholder=\"footer_responsive_link_legal_notices\"><span id=\"\" data-uia=\"data-uia-footer-label\">Legal Notices</span></a></li>
                                       <li class=\"footer-link-item originals-link\" placeholder=\"footer_responsive_link_netflix_originals_item\"><a class=\"footer-link\" data-uia=\"footer-link\" href=\"839338.html\" placeholder=\"footer_responsive_link_netflix_originals\"><span id=\"\" data-uia=\"data-uia-footer-label\">Netflix Originals</span></a></li>
                                    </ul>
                                    <p class=\"footer-country\">Netflix Nigeria</p>
                                 </div>
                              </div>
                              <div class=\"center-pixel\" style=\"position:absolute\"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <script src=\"../js/index.js\"></script>
      
   </body>
</html>", "@netflix/partial/footer.html.twig", "D:\\projects\\htdocs\\2021\\drupal-9.2.7\\themes\\custom\\netflix\\templates\\partial\\footer.html.twig");
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
