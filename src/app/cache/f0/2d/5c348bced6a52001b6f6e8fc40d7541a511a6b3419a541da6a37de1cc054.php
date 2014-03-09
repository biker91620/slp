<?php

/* ::Errors:Exception */
class __TwigTemplate_f02d5c348bced6a52001b6f6e8fc40d7541a511a6b3419a541da6a37de1cc054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Default:base");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Default:base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"message\">
\t\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "getMessage", array(), "method"), "html", null, true);
        echo "
\t</div>
\t<div class=\"debug\">
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "getTrace", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["trace"]) {
            // line 9
            echo "    \t\t<div class=\"stack\">
    \t\t\t<div class=\"number\">#";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"file\">File => ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"line\">Line => ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"call\">Call => ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "class", array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "type"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"args\">Arguments => ";
            // line 14
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "args"), " => "), "html", null, true);
            echo "</div>
    \t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "::Errors:Exception";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  65 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
