<?php

/* AcmeDemoBundle::Baselayout.html.twig */
class __TwigTemplate_5afdf4154ef7be2592f15279f76ad3563e2771b9a4da85bfcea0f94e46aca46e extends Twig_Template
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
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "
</body>
";
        // line 135
        $this->displayBlock('addJava', $context, $blocks);
        // line 149
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
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\">
\t\t\t\t\t\t<img src=\"/bundles/landing_page/img/patentthat-logo.png\">
\t\t\t\t\t</a>
\t\t\t\t</div><!-- /navbar-header -->
\t\t\t\t<!-- navbar -->
\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\">Home</a></li>
\t\t\t\t\t\t";
        // line 76
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 77
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" class=\"nav-login\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("page_app");
            echo "\">Get Started</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("FAQS");
            echo "\">  FAQS</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("contact_US");
            echo "\">Contact Us</a></li>
\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("page_app");
            echo "\">Sketch</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("FAQS");
            echo "\">  FAQS</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("contact_US");
            echo "\">Contact Us</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("pnc_management_usergallery");
            echo "\">Dashboard</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" class=\"nav-login\" >Logout</a></li> 
\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t<li><a href=\"https://twitter.com/greenmtnapps\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/pages/Patent-That/113577415642650\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/9488294\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /navbar -->
\t\t\t</div><!-- /navbar navbar-default -->
\t\t</div>\t
</header>
\t
\t
";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        // line 100
        echo "
";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "   \t<footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("Terms_of_Service");
        echo "\" style='color: white; font-size: 13px;'>Terms of Service </a>
                        </li>
                        <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("Privacy_Policy");
        echo "\" style='color: white; font-size: 13px;'>Privacy Policy </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>About </a>
                        </li>
                        <li><a href=\"https://twitter.com/greenmtnapps\" style='color: white; font-size: 13px;'>Follow </a>
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

    // line 135
    public function block_addJava($context, array $blocks = array())
    {
        // line 136
        echo "<!-- jQuery -->
     \t<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
       <script>
    \$('.carousel').carousel({
        interval: 6000 //changes the speed
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
        return array (  316 => 140,  310 => 137,  307 => 136,  304 => 135,  277 => 110,  272 => 108,  265 => 103,  262 => 102,  257 => 100,  254 => 99,  240 => 88,  235 => 86,  231 => 85,  227 => 84,  223 => 83,  218 => 82,  213 => 80,  209 => 79,  205 => 78,  200 => 77,  198 => 76,  194 => 75,  183 => 67,  167 => 53,  164 => 52,  159 => 48,  156 => 47,  151 => 43,  146 => 39,  139 => 34,  134 => 32,  129 => 30,  122 => 26,  116 => 23,  110 => 20,  96 => 8,  93 => 7,  88 => 5,  85 => 4,  70 => 135,  64 => 102,  62 => 99,  60 => 52,  56 => 50,  54 => 47,  50 => 45,  48 => 43,  44 => 41,  42 => 39,  38 => 37,  35 => 7,  28 => 1,  101 => 41,  98 => 40,  94 => 71,  92 => 40,  82 => 33,  75 => 29,  72 => 149,  68 => 26,  66 => 133,  51 => 13,  43 => 7,  40 => 6,  33 => 4,  30 => 2,);
    }
}
