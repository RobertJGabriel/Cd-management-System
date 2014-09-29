<?php

/* ::base.html.twig */
class __TwigTemplate_18fc026641e18ee2ea5822f2c060ab629f0b6b43dccb38621322f79018a118dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />



    </head>
    <body>
    <div id=\"header\">   ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        echo " </div>

<div id=\"nav\"><ul id=\"menu\">";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        echo "</ul> </div>

    <div id=\"wrapper\">
        <div id=\"class\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
        </div>
    </div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "










    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  95 => 20,  92 => 19,  86 => 15,  80 => 13,  74 => 5,  68 => 36,  66 => 35,  61 => 32,  59 => 19,  52 => 15,  47 => 13,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}