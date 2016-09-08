<?php

/* index.tpl */
class __TwigTemplate_cd071b58c4b6653ca263327df7ba81c77282371868ba6fa015fa245de65f0c20 extends Twig_Template
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
        echo "<DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"HappyHippyHippo\">
  </head>
  <body>
    ";
        // line 10
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </body>
</htm>";
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="description" content="{{ page.description }}">*/
/*     <meta name="keywords" content="{{ page.keywords }}">*/
/*     <meta name="author" content="HappyHippyHippo">*/
/*   </head>*/
/*   <body>*/
/*     {{ content|raw }}*/
/*   </body>*/
/* </htm>*/
