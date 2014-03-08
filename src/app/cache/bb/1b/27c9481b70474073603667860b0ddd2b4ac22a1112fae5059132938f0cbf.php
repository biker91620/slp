<?php

/* Exception.tpl.php */
class __TwigTemplate_bb1b27c9481b70474073603667860b0ddd2b4ac22a1112fae5059132938f0cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>SLP</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"../bower_components/html5shiv/dist/html5shiv.js\"></script>
      <script src=\"../bower_components/respond/dest/respond.min.js\"></script>
    <![endif]-->
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', \"bootswatch.com\"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
    <style>
    \t.message {
\t    \ttext-align: center;
\t    \tfont-weight: bold;
\t    \tfont-size: 20px;\t
    \t}
    \t
    \t.stack {
\t    \t
    \t\tborder: 1px solid gray;
    \t\tmargin-top: 10px;
    \t}
    \t.debug {
    \t\tmargin: 50px;
\t    \tfont-weight: bold;
    \t}
    \t.debug .number {
\t    \tcolor: #cfb8b8;
    \t}
    \t
    \t.debug .line {
\t    \tcolor: grey;
    \t}
    \t
    \t.debug .call {
    \t\tfont-size: 15px;
\t    \tcolor: grey;
    \t}
    </style>
  </head>
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
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"/doc\" id=\"themes\">Documentation <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"themes\">
              </ul>
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"download\">Download <span class=\"caret\"></span></a>
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
        \t<div class=\"message\">
        \t\t";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "getMessage", array(), "method"), "html", null, true);
        echo "
        \t</div>
        \t";
        // line 108
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["error"]) ? $context["error"] : null)), "html", null, true);
        echo "
        \t<div class=\"debug\">
        \t\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "getTrace", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 111
            echo "\t        \t\t<div class=\"stack\">
\t        \t\t\t<div class=\"number\">#";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"file\">File => ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file "), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"line\">Line => ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"call\">Call => ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "class"), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function "), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"args\">Arguments => ";
            // line 116
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "args"), " => "), "html", null, true);
            echo "</div>
\t        \t\t</div>
        \t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        \t</div>
      </div>

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


    <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"../assets/js/bootswatch.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Exception.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 119,  174 => 116,  168 => 115,  164 => 114,  160 => 113,  156 => 112,  153 => 111,  136 => 110,  131 => 108,  126 => 106,  19 => 1,);
    }
}
