<?php

/* index.tpl */
class __TwigTemplate_3c5738ad75de904d215eea45a3140d1d65d52db8cc3bd875273a4d57153dbe33 extends Twig_Template
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
    <meta name=\"description\" content=\"HappyHippyHippo Homepage\">
    <meta name=\"keywords\" content=\"HappyHippyHippo\">
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
        return array (  30 => 10,  19 => 1,);
    }
}
/* <DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="description" content="HappyHippyHippo Homepage">*/
/*     <meta name="keywords" content="HappyHippyHippo">*/
/*     <meta name="author" content="HappyHippyHippo">*/
/*   </head>*/
/*   <body>*/
/*     {{ content|raw }}*/
/*   </body>*/
/* </htm>*/
