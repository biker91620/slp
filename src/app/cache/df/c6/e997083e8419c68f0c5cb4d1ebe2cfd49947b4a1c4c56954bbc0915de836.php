<?php

/* ::Default:base */
class __TwigTemplate_dfc6e997083e8419c68f0c5cb4d1ebe2cfd49947b4a1c4c56954bbc0915de836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>SLP</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"css/style.css\">
    \t
    \t";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b143ca2_0"
            $context["asset_url"] = "compiled/css/all_style_1.css";
            echo " 
    \t\t<link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
    \t";
        } else {
            // asset "b143ca2"
            $context["asset_url"] = "compiled/css/all.css";
            // line 10
            echo " 
    \t\t<link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
    \t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    \t
    \t
    \t<script src=\"js/jquery-1.11.0.js\"></script>
    \t<script src=\"js/bootstrap.min.js\"></script>
    \t
    \t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e6a96ea_0"
            $context["asset_url"] = "compiled/js/all_part_1_bootstrap.min_1.js";
            // line 19
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "e6a96ea_1"
            $context["asset_url"] = "compiled/js/all_part_1_jquery-1.11.0_2.js";
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "e6a96ea"
            $context["asset_url"] = "compiled/js/all.js";
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 21
        echo "  </head>
  <body>
   

    <div class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a href=\"../\" class=\"navbar-brand\">SLP</a>
          <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        </div>
        <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"/doc\" id=\"themes\">Documentation </a>
          
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\">Download <span class=\"caret\"></span></a>
              
\t               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"/slp-source.tar.gz\">Source</a></li>
\t\t\t\t    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"/slp-docs.tar.gz\">Docs</a></li>
\t\t\t\t  </ul>
              
            </li>
          </ul>

                 </div>
      </div>
    </div>


    <div class=\"container\">

      <div class=\"page-header\" id=\"banner\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <h1>Simple Light PHP</h1>
            <p class=\"lead\">A friendly light php framework</p>
          </div>
        </div>
        \t<div>Remote: ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["container"]) ? $context["container"] : null), "get", array(0 => "request"), "method"), "remote"), "html", null, true);
        echo "</div>
        \t";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "      </div>

         <footer>
        <div class=\"row\">
          <div class=\"col-lg-12\">

            <ul class=\"list-unstyled\">
              <li class=\"pull-right\"><a href=\"#top\">Back to top</a></li>
              <li><a href=\"http://www.marc-pepin.fr\" onclick=\"pageTracker._link(this.href); return false;\">Marc PEPIN</a></li>
              <li>
\t              <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
\t\t\t\t\t<input type=\"hidden\" name=\"encrypted\" value=\"-----BEGIN PKCS7-----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-----END PKCS7-----
\t\t\t\t\t\">
\t\t\t\t\t<input type=\"image\" src=\"https://www.paypalobjects.com/fr_XC/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
\t\t\t\t\t<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
\t\t\t\t</form>

              </li>
            </ul>

          </div>
        </div>

      </footer>


    </div>
  </body>
</html>
";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "        \t\tContent
        \t";
    }

    public function getTemplateName()
    {
        return "::Default:base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 68,  171 => 67,  137 => 70,  135 => 67,  131 => 66,  84 => 21,  64 => 19,  60 => 18,  53 => 13,  37 => 11,  20 => 1,  74 => 17,  65 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 11,  44 => 10,  40 => 8,  34 => 5,  31 => 10,  28 => 3,);
    }
}
