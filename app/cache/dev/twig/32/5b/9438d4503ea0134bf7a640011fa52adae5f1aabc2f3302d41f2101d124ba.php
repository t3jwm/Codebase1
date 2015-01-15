<?php

/* AcmeDemoBundle:Account:loginadmin.html.twig */
class __TwigTemplate_325b9438d4503ea0134bf7a640011fa52adae5f1aabc2f3302d41f2101d124ba extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset=\"utf-8\">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
    <meta name=\"author\" content=\"Muhammad Usman\">

    <!-- The styles -->
<!--<link id=\"bs-css\" href=\"bundles/abctest/css/bootstrap-cerulean.min.css\" rel=\"stylesheet\">-->
<link id=\"bs-css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" />

<!-- <link href=\"css/charisma-app.css\" rel=\"stylesheet\"> -->
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'> -->
<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'> -->
<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media='print' />

<!-- <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'> -->
<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'> -->
<link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/jquery.noty.css' rel='stylesheet'> -->
<link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/jquery.noty.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/noty_theme_default.css' rel='stylesheet'> -->
<link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/noty_theme_default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/elfinder.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/elfinder.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/elfinder.theme.css' rel='stylesheet'> -->
<link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/elfinder.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/jquery.iphone.toggle.css' rel='stylesheet'> -->
<link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/uploadify.css' rel='stylesheet'> -->
<link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/uploadify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/animate.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- jQuery -->
<!-- <script src=\"bower_components/jquery/jquery.min.js\"></script> -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>

    <![endif]-->

    <!-- The fav icon -->
    <!-- <link rel=\"shortcut icon\" href=\"img/favicon.ico\"> -->
    <link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>


    <!-- jQuery -->
    <script src=\"bower_components/jquery/jquery.min.js\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

</head>

<body>
<div class=\"ch-container\">
    <div class=\"row\">
       
    <div class=\"row\">
        <div class=\"col-md-12 center login-header\">
            <h2>Welcome to Charisma</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class=\"row\">
        <div class=\"well col-md-5 center login-box\">
        \t";
        // line 112
        if (((isset($context["isLoginSuccess"]) ? $context["isLoginSuccess"] : $this->getContext($context, "isLoginSuccess")) != "")) {
            // line 113
            echo "            <div class=\"alert alert-info\">
                Please login with your Username and Password.
            </div>
            ";
        }
        // line 117
        echo "            
            <form method=\"POST\" class=\"form-horizontal\" action=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("admin_login");
        echo "\">
                <fieldset>
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name = \"userName\">
                    </div>
                    <div class=\"clearfix\"></div><br>

                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name =\"password\">
                    </div>
                    <div class=\"clearfix\"></div>

                    <div class=\"input-prepend\">
                        <label class=\"remember\" for=\"remember\"><input type=\"checkbox\" id=\"remember\"> Remember me</label>
                    </div>
                    <div class=\"clearfix\"></div>

                    <p class=\"center col-md-5\">
                        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src=\"bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>

<!-- library for cookie management -->
<script src=\"js/jquery.cookie.js\"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src=\"bower_components/chosen/chosen.jquery.min.js\"></script>
<!-- plugin for gallery image view -->
<script src=\"bower_components/colorbox/jquery.colorbox-min.js\"></script>
<!-- notification plugin -->
<script src=\"js/jquery.noty.js\"></script>
<!-- library for making tables responsive -->
<script src=\"bower_components/responsive-tables/responsive-tables.js\"></script>
<!-- tour plugin -->
<script src=\"bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js\"></script>
<!-- star rating plugin -->
<script src=\"js/jquery.raty.min.js\"></script>
<!-- for iOS style toggle switch -->
<script src=\"js/jquery.iphone.toggle.js\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"js/jquery.autogrow-textarea.js\"></script>
<!-- multiple file upload plugin -->
<script src=\"js/jquery.uploadify-3.1.min.js\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"js/jquery.history.js\"></script>
<!-- application script for Charisma demo -->
<script src=\"js/charisma.js\"></script>


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Account:loginadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 118,  191 => 117,  185 => 113,  183 => 112,  151 => 83,  138 => 73,  131 => 69,  125 => 66,  119 => 63,  113 => 60,  107 => 57,  101 => 54,  95 => 51,  89 => 48,  83 => 45,  77 => 42,  71 => 39,  65 => 36,  59 => 33,  53 => 30,  47 => 27,  19 => 1,);
    }
}
