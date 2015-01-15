<?php

/* AcmeDemoBundle::Baselayout.html.twig */
class __TwigTemplate_d4c5da32f39425e8c711ff1f2a5c7a97ad7b663f513224e0535e81d2048c5988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'linkPlus' => array($this, 'block_linkPlus'),
            'head' => array($this, 'block_head'),
            'CSSForm' => array($this, 'block_CSSForm'),
            'Javascript' => array($this, 'block_Javascript'),
            'CssPlus' => array($this, 'block_CssPlus'),
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
<link rel=\"shortcut icon\" type=\"image/ico\" href=\"#\" />
";
        // line 4
        $this->displayBlock('linkPlus', $context, $blocks);
        // line 7
        echo "\t";
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "\t
\t<style>
";
        // line 39
        $this->displayBlock('CSSForm', $context, $blocks);
        // line 41
        echo "\t</style>
\t<script>
";
        // line 43
        $this->displayBlock('Javascript', $context, $blocks);
        // line 45
        echo "\t</script>
\t
";
        // line 47
        $this->displayBlock('CssPlus', $context, $blocks);
        // line 50
        echo "</head>
<body>
";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 149
        echo "
</body>
";
        // line 151
        $this->displayBlock('addJava', $context, $blocks);
        // line 165
        echo "</html>








";
    }

    // line 4
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 5
        echo "\t
\t";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "   
    
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">

\t    <title>Patent That</title>

\t    <!-- Bootstrap Core CSS -->
\t    
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t    <!-- Custom CSS -->
\t    
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/landing-page.css"), "html", null, true);
        echo "\" />
\t    <!-- Custom Fonts -->
\t    
\t    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/font-awesome-4.2.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t   
\t    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
\t         
\t    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/basepage.css?432"), "html", null, true);
        echo "\" />      
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/full-slider.css"), "html", null, true);
        echo "\" />   
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/agency.css"), "html", null, true);
        echo "\">

\t";
    }

    // line 39
    public function block_CSSForm($context, array $blocks = array())
    {
    }

    // line 43
    public function block_Javascript($context, array $blocks = array())
    {
    }

    // line 47
    public function block_CssPlus($context, array $blocks = array())
    {
        // line 48
        echo "\t
";
    }

    // line 52
    public function block_header($context, array $blocks = array())
    {
        // line 53
        echo "<header class=\"page-header\" style= \"display: inline;\">
  <div class=\"row\" id =\"rowNarbar\" >
\t\t\t<!-- navbar navbar-default -->
\t\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t\t\t
\t\t\t\t<!-- navbar-header -->
\t\t\t\t<div class=\"navbar-header\" style =\"background-color: #2b65a9;\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\" style =\"padding-left: 40px; padding-top: 15px;\">
        \t\t\t\t<p style= \"font-size: 50px; color: white;\" ><b>℗</b></p> 
      \t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div><!-- /navbar-header -->
\t\t\t\t
\t\t\t\t<!-- navbar -->
\t\t\t\t<div class=\"navbar-collapse collapse\" style =\"background-color: #2b65a9;\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" style =\"padding-top: 0px; padding-right: 20px;\">
\t\t\t\t\t\t<li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\">HOME</a></li>
\t                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\"> GET STARTED</a></li>
\t                    <li><a href=\"#\">  FAQS</a></li>
\t           
\t                    <li><a href=\"#\">  CONTACT US</a></li>
\t                    ";
        // line 84
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 85
            echo "                        \t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" style = \"margin-right: 280px;\">LOGIN</a></li>
                        ";
        } else {
            // line 87
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" style = \"margin-right: 280px;\">LOGOUT</a></li> 
                        ";
        }
        // line 89
        echo "
                     
         
\t\t\t\t\t
                   \t \t
                   \t \t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
              \t\t\t</li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                   \t \t
\t\t\t\t\t
                   \t \t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div><!-- /navbar -->
\t\t\t\t
\t\t\t</div><!-- /navbar navbar-default -->
\t</div>\t


</header>
\t
\t
";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
        echo "
";
    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
        // line 119
        echo "   \t<footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Terms of Service </a>
                        </li>
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Privacy Policy </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>About </a>
                        </li>
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Follow </a>
                        </li>
                        
                    </ul>
                </div>
                <div class=\"col-md-4\" >
                    
                    <span class=\"copyright\" style='color: white; font-size: 13px;'>&copy 2014 Green Mountain Apps LLC. All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>
   \t
    
";
    }

    // line 151
    public function block_addJava($context, array $blocks = array())
    {
        // line 152
        echo "<!-- jQuery -->
     \t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
       <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::Baselayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 156,  299 => 153,  296 => 152,  293 => 151,  260 => 119,  257 => 118,  252 => 116,  249 => 115,  220 => 89,  214 => 87,  208 => 85,  206 => 84,  199 => 80,  195 => 79,  167 => 53,  164 => 52,  159 => 48,  156 => 47,  151 => 43,  146 => 39,  139 => 34,  134 => 32,  129 => 30,  122 => 26,  116 => 23,  110 => 20,  96 => 8,  93 => 7,  88 => 5,  85 => 4,  72 => 165,  70 => 151,  66 => 149,  64 => 118,  60 => 52,  54 => 47,  48 => 43,  44 => 41,  42 => 39,  38 => 37,  35 => 7,  33 => 4,  198 => 153,  179 => 137,  152 => 113,  124 => 88,  62 => 115,  56 => 50,  50 => 45,  31 => 6,  28 => 1,);
    }
}
