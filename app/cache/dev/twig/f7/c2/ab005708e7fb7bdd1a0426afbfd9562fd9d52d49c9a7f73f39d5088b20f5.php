<?php

/* AcmeDemoBundle::Baselayout.html.twig */
class __TwigTemplate_f7c2ab005708e7fb7bdd1a0426afbfd9562fd9d52d49c9a7f73f39d5088b20f5 extends Twig_Template
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
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "
</body>
";
        // line 127
        $this->displayBlock('addJava', $context, $blocks);
        // line 129
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/page1.css"), "html", null, true);
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
        echo "\t<div class=\"row\" style='margin-top:10px ;'>
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-2\">
\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/panner.jpg"), "html", null, true);
        echo "\" />\t
\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t\t<nav class=\"navbar navbar-inverse\" role=\"navigation\" id='navbar-nav_head'>
\t\t\t  <div class=\"container-fluid\">
\t\t\t
\t\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t   
\t\t\t    <div style='clear: both; height:50%;padding-top:4%;padding-right:3%;'>
\t\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t\t    
\t\t\t     \t";
        // line 61
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            // line 62
            echo "\t\t\t      \t\t<span style ='color: white; font-size: 18px;'>Hi, ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</span></br>
\t\t\t      \t\t
\t\t\t      \t";
        }
        // line 65
        echo "\t\t\t     \t
\t\t\t     \t 
\t\t\t     \t\t
\t\t\t\t\t\t\t\t        
\t\t\t     </ul>
\t\t\t     </div>
\t\t\t    <div style = 'clear:both;'>
\t\t\t     <ul class=\"nav navbar-nav navbar-right\" >
\t\t\t        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("page_1");
        echo "\">HOME</a></li>
\t\t\t        <li><a href=\"#\">●  GET STARTED</a></li>
\t\t\t      \t<li><a href=\"#\">●  FAQS</a></li>
\t\t\t      \t<li><a href=\"#\">●  CONTACT US</a></li>
\t\t\t      \t";
        // line 77
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 78
            echo "\t\t\t      \t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >Login</a></li>
\t\t\t      \t\t";
        } else {
            // line 80
            echo "\t\t\t      \t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" >Logout</a></li> 
\t\t\t      \t\t";
        }
        // line 82
        echo "\t\t\t     </ul>
\t\t\t     </div>
\t\t\t     
\t\t\t      
\t\t\t 
\t\t\t  </div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t
";
    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        // line 96
        echo "
";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
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

    // line 127
    public function block_addJava($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::Baselayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 127,  260 => 99,  257 => 98,  252 => 96,  249 => 95,  233 => 82,  227 => 80,  219 => 77,  212 => 73,  202 => 65,  193 => 61,  179 => 50,  174 => 47,  171 => 46,  166 => 41,  161 => 37,  156 => 34,  153 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  109 => 14,  105 => 13,  99 => 10,  95 => 9,  91 => 8,  87 => 7,  83 => 6,  79 => 4,  76 => 3,  64 => 129,  62 => 127,  58 => 125,  56 => 98,  54 => 95,  52 => 46,  45 => 41,  41 => 39,  36 => 36,  33 => 33,  27 => 1,  315 => 211,  312 => 210,  306 => 208,  304 => 207,  300 => 206,  296 => 205,  286 => 198,  282 => 197,  270 => 188,  266 => 187,  255 => 179,  251 => 178,  240 => 170,  236 => 169,  225 => 161,  221 => 78,  210 => 152,  206 => 151,  195 => 62,  191 => 142,  185 => 139,  176 => 132,  173 => 131,  50 => 11,  47 => 43,  42 => 7,  39 => 37,  34 => 4,  31 => 3,);
    }
}
