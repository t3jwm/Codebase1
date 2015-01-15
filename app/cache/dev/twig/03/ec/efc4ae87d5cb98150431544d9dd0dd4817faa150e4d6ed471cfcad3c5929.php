<?php

/* AcmeDemoBundle::Baselayout.html.twig */
class __TwigTemplate_03ecefc4ae87d5cb98150431544d9dd0dd4817faa150e4d6ed471cfcad3c5929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'linkPlus' => array($this, 'block_linkPlus'),
            'CSSForm' => array($this, 'block_CSSForm'),
            'Javascript' => array($this, 'block_Javascript'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'addJava' => array($this, 'block_addJava'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "\t";
        $this->displayBlock('linkPlus', $context, $blocks);
        // line 36
        echo "\t<style>
";
        // line 37
        $this->displayBlock('CSSForm', $context, $blocks);
        // line 39
        echo "\t</style>
\t<script>
";
        // line 41
        $this->displayBlock('Javascript', $context, $blocks);
        // line 43
        echo "\t</script>
</head>
<body>
";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "
</body>
";
        // line 121
        $this->displayBlock('addJava', $context, $blocks);
        // line 123
        echo "</html>







";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "   
    
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
    
    
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
           
    
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap-theme.css.map"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap.css.map"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.2.0-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/basepage.css"), "html", null, true);
        echo "\" /> 
    
    
  
    
         
          

\t";
    }

    // line 33
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 34
        echo "\t
\t";
    }

    // line 37
    public function block_CSSForm($context, array $blocks = array())
    {
    }

    // line 41
    public function block_Javascript($context, array $blocks = array())
    {
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        // line 47
        echo "\t<div class=\"row\" style='margin-top:10px ; margin-bottom: 10px; ' >
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-2\">
\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/panner.jpg"), "html", null, true);
        echo "\" style=\"width:100%; height: 100px; \" />\t
\t\t</div>
\t\t<div class=\"col-xs-6\" style='background-color: #3A77C0; height: 100px;'>
\t\t
\t\t\t<div class=\"row\">
\t\t\t\t <div class=\"nav navbar-nav navbar-right\" style='margin: 0;margin-right: 14px; margin-top: 10px;'>
\t\t\t    &nbsp;
\t\t\t     \t";
        // line 57
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            // line 58
            echo "\t\t\t      \t\t<span style ='color: white; font-size: 18px;'>Hi, ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</span></br>
\t\t\t      \t\t
\t\t\t      \t";
        }
        // line 61
        echo "\t\t\t     \t
\t\t\t     \t 
\t\t\t     \t\t
\t\t\t\t\t\t\t\t        
\t\t\t     </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\"  style='margin: 0;' >
\t\t\t        <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("page_1");
        echo "\">HOME</a></li>
\t\t\t        <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\"> APP</a></li>
\t\t\t        <li><a href=\"#\"> GET STARTED</a></li>
\t\t\t      \t<li><a href=\"#\">  FAQS</a></li>
\t\t\t      \t<li><a href=\"#\">  CONTACT US</a></li>
\t\t\t      \t";
        // line 75
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 76
            echo "\t\t\t      \t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >Login</a></li>
\t\t\t      \t\t";
        } else {
            // line 78
            echo "\t\t\t      \t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" >Logout</a></li> 
\t\t\t      \t\t";
        }
        // line 80
        echo "\t\t\t     </ul>
\t\t\t</div> 
\t\t\t
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t
";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "
";
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "   <div class=\"row\" style='margin-top:10px ;'>
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\">
\t\t\t<nav class=\"navbar navbar-inverse\" role=\"navigation\">
\t\t\t  <div class=\"container-fluid\" id='footer'style=''>
\t\t\t
\t\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t   
\t\t\t   
\t\t\t  
\t\t\t    
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t        <li><a href=\"#\">Terms of Service </a></li>
\t\t\t        <li><a href=\"#\">●  Privacy Policy </a></li>
\t\t\t      \t<li><a href=\"#\">●  About </a></li>
\t\t\t      \t<li><a href=\"#\">●  Follow </a></li>
\t\t\t      \t<li><a href=\"#\">© 2014 Green Mountain Apps LLC. All rights reserved. </a></li>
\t\t\t      \t 
\t\t\t     </ul>
\t\t\t
\t\t\t  </div><!-- /.container-fluid -->
\t\t\t<nav>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
";
    }

    // line 121
    public function block_addJava($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::Baselayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  286 => 121,  257 => 93,  254 => 92,  249 => 90,  246 => 89,  234 => 80,  228 => 78,  222 => 76,  220 => 75,  213 => 71,  209 => 70,  198 => 61,  191 => 58,  189 => 57,  179 => 50,  174 => 47,  171 => 46,  166 => 41,  161 => 37,  156 => 34,  153 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  109 => 14,  105 => 13,  99 => 10,  95 => 9,  91 => 8,  87 => 7,  83 => 6,  79 => 4,  76 => 3,  64 => 123,  62 => 121,  58 => 119,  56 => 92,  54 => 89,  52 => 46,  47 => 43,  45 => 41,  41 => 39,  39 => 37,  36 => 36,  33 => 33,  31 => 3,  27 => 1,);
    }
}
