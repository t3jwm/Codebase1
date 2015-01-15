<?php

/* AcmeDemoBundle::Baselayout.html.twig */
class __TwigTemplate_b6332b569931e956cdca1f3b041363b1bfcfb8db78ef86cfdbfc2ef229e770ec extends Twig_Template
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
        // line 44
        echo "\t
\t<style>
";
        // line 46
        $this->displayBlock('CSSForm', $context, $blocks);
        // line 48
        echo "\t</style>
\t<script>
";
        // line 50
        $this->displayBlock('Javascript', $context, $blocks);
        // line 52
        echo "\t</script>
\t
";
        // line 54
        $this->displayBlock('CssPlus', $context, $blocks);
        // line 57
        echo "</head>
<body>
";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 111
        $this->displayBlock('footer', $context, $blocks);
        // line 148
        echo "
</body>
";
        // line 150
        $this->displayBlock('addJava', $context, $blocks);
        // line 164
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

\t    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t         
\t    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/basepage.css"), "html", null, true);
        echo "\" />      
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/full-slider.css"), "html", null, true);
        echo "\" />   
\t    
\t    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/agency.css"), "html", null, true);
        echo "\">

\t";
    }

    // line 46
    public function block_CSSForm($context, array $blocks = array())
    {
    }

    // line 50
    public function block_Javascript($context, array $blocks = array())
    {
    }

    // line 54
    public function block_CssPlus($context, array $blocks = array())
    {
        // line 55
        echo "\t
";
    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        // line 60
        echo "  <div class=\"row\" id =\"rowNarbar\" >
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
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\" style =\"padding-left: 0px; padding-top: 0px;\">
        \t\t\t\t<img id= \"brandImage\" alt=\"Brand\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/panner.jpg"), "html", null, true);
        echo "\" >
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
        // line 84
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\">HOME</a></li>
\t                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\"> GET STARTED</a></li>
\t                    <li><a href=\"#\">  FAQS</a></li>
\t                    <li><a href=\"#\">  CONTACT US</a></li>
\t                    ";
        // line 88
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 89
            echo "                        \t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >LOGIN</a></li>
                        ";
        } else {
            // line 91
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" >LOGOUT</a></li> 
                        ";
        }
        // line 93
        echo "
                         ";
        // line 94
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != "")) {
            // line 95
            echo "                        \t<li><a style ='color: white; font-size: 16px;'>Hi, ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
                   \t \t";
        }
        // line 97
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /navbar -->
\t\t\t\t
\t\t\t</div><!-- /navbar navbar-default -->
\t\t\t</div>\t



\t
\t
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "
";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "   \t<footer>
     
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style =\"margin-left: 0px;\">
                        <li><a href=\"#\" style=\"font-size: 35px;\"><b>℗</b></a>
                        </li>
                    </ul>
                </div>
                
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style =\"margin-left: 0px;\">
                        <li><a href=\"#\">Get Started</a>
                        </li>
                        <li><a href=\"#\">◎ &nbspQuestions</a>
                        </li>
                        <li><a href=\"#\">◎ &nbspContact us</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style =\"margin-left: 0px;\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
      
    </footer>
   \t
    
";
    }

    // line 150
    public function block_addJava($context, array $blocks = array())
    {
        // line 151
        echo "<!-- jQuery -->
     \t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 155
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
        return array (  314 => 155,  308 => 152,  305 => 151,  302 => 150,  263 => 112,  260 => 111,  255 => 109,  252 => 108,  238 => 97,  232 => 95,  230 => 94,  227 => 93,  221 => 91,  215 => 89,  213 => 88,  207 => 85,  203 => 84,  190 => 74,  174 => 60,  171 => 59,  166 => 55,  163 => 54,  158 => 50,  153 => 46,  146 => 41,  141 => 39,  136 => 37,  122 => 26,  116 => 23,  110 => 20,  96 => 8,  93 => 7,  88 => 5,  85 => 4,  72 => 164,  70 => 150,  66 => 148,  64 => 111,  62 => 108,  60 => 59,  56 => 57,  54 => 54,  48 => 50,  44 => 48,  38 => 44,  35 => 7,  33 => 4,  28 => 1,  81 => 33,  74 => 29,  71 => 28,  67 => 26,  65 => 25,  50 => 52,  42 => 46,  39 => 6,  32 => 3,  29 => 2,);
    }
}
