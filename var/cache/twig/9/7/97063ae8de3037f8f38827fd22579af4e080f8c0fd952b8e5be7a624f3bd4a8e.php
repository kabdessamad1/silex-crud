<?php

/* base.twig */
class __TwigTemplate_97063ae8de3037f8f38827fd22579af4e080f8c0fd952b8e5be7a624f3bd4a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog - ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("/assets/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("/assets/css/app.css")), "html", null, true);
        echo "\"/>

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
      
      <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      <div class=\"container\">
          ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "      </div>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("/assets/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 41,  87 => 8,  80 => 46,  74 => 42,  72 => 41,  39 => 11,  35 => 10,  30 => 8,  21 => 1,);
    }
}
