<?php

/* AcmeDemoBundle::Baselayout2.html.twig */
class __TwigTemplate_13c0293a41419c5e9543e4ebbbc4962a1bf3b73841b71426ac29b0354e1f5b2e extends Twig_Template
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
        // line 40
        echo "\t";
        $this->displayBlock('linkPlus', $context, $blocks);
        // line 43
        echo "\t<style>
";
        // line 44
        $this->displayBlock('CSSForm', $context, $blocks);
        // line 46
        echo "\t</style>
\t<script>
";
        // line 48
        $this->displayBlock('Javascript', $context, $blocks);
        // line 50
        echo "\t</script>
</head>
<body>
";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 106
        $this->displayBlock('footer', $context, $blocks);
        // line 136
        echo "
</body>
";
        // line 138
        $this->displayBlock('addJava', $context, $blocks);
        // line 152
        echo "</html>








";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "   
    
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"\">

\t    <title>Landing Page - Start Bootstrap Theme</title>

\t    <!-- Bootstrap Core CSS -->
\t    
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t    <!-- Custom CSS -->
\t    
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/landing-page.css"), "html", null, true);
        echo "\" />
\t    <!-- Custom Fonts -->
\t    
\t    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/font-awesome-4.2.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t   
\t    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

\t    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t         
\t    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/basepage.css"), "html", null, true);
        echo "\" />      
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/full-slider.css"), "html", null, true);
        echo "\" />   
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/agency.css"), "html", null, true);
        echo "\">

\t";
    }

    // line 40
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 41
        echo "\t
\t";
    }

    // line 44
    public function block_CSSForm($context, array $blocks = array())
    {
    }

    // line 48
    public function block_Javascript($context, array $blocks = array())
    {
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "  <div class=\"row\" style=\"margin-bottom: 105px;\">
\t\t\t<!-- navbar navbar-default -->
\t\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t\t\t
\t\t\t\t<!-- navbar-header -->
\t\t\t\t<div class=\"navbar-header\" style =\"background-color: #2b65a9; height:100px;\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\" style =\"padding-left: 0px; padding-top: 0px;\">
        \t\t\t\t<img alt=\"Brand\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/panner.jpg"), "html", null, true);
        echo "\" style=\"width: 100%; height: 100px;\">
      \t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div><!-- /navbar-header -->
\t\t\t\t
\t\t\t\t<!-- navbar -->
\t\t\t\t<div class=\"navbar-collapse collapse\" style =\"background-color: #2b65a9;\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\" style =\"padding-top: 20px; padding-right: 20px;\">
\t\t\t\t\t\t<li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("page_1");
        echo "\">HOME</a></li>
\t                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\"> APP</a></li>
\t                    <li><a href=\"#\"> GET STARTED</a></li>
\t                    <li><a href=\"#\">  FAQS</a></li>
\t                    <li><a href=\"#\">  CONTACT US</a></li>
\t                    ";
        // line 83
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 84
            echo "                        \t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >Login</a></li>
                        ";
        } else {
            // line 86
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" >Logout</a></li> 
                        ";
        }
        // line 88
        echo "
                         ";
        // line 89
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            // line 90
            echo "                        \t<li><a style ='color: white; font-size: 12px;'>Hi, ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
                   \t \t";
        }
        // line 92
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /navbar -->
\t\t\t\t
\t\t\t</div><!-- /navbar navbar-default -->
\t\t\t</div>\t



\t
\t
";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        // line 104
        echo "
";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        // line 107
        echo "   \t
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\">
                        <li><a href=\"#\">Terms of Service </a>
                        </li>
                        <li><a href=\"#\">Privacy Policy </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\">
                        <li><a href=\"#\">About </a>
                        </li>
                        <li><a href=\"#\">Follow </a>
                        </li>
                        
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    
                    <span class=\"copyright\" style='color: white;'>&copy 2014 Green Mountain Apps LLC. All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>
";
    }

    // line 138
    public function block_addJava($context, array $blocks = array())
    {
        // line 139
        echo "<!-- jQuery -->
     \t<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 143
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
        return "AcmeDemoBundle::Baselayout2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  292 => 143,  286 => 140,  283 => 139,  280 => 138,  248 => 107,  245 => 106,  240 => 104,  237 => 103,  223 => 92,  217 => 90,  215 => 89,  212 => 88,  206 => 86,  200 => 84,  198 => 83,  191 => 79,  187 => 78,  174 => 68,  158 => 54,  155 => 53,  150 => 48,  145 => 44,  140 => 41,  137 => 40,  130 => 37,  125 => 35,  120 => 33,  106 => 22,  100 => 19,  94 => 16,  80 => 4,  77 => 3,  64 => 152,  62 => 138,  58 => 136,  56 => 106,  54 => 103,  52 => 53,  47 => 50,  45 => 48,  41 => 46,  39 => 44,  36 => 43,  33 => 40,  31 => 3,  27 => 1,);
    }
}
