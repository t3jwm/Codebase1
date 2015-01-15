<?php

/* AcmeDemoBundle::manage_layout.html.twig */
class __TwigTemplate_c99db8e7c7cd6f98442c4230043c2bd31fc93bcd7445c41a5be10ad8cd215740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
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
    <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
    <meta name=\"author\" content=\"Muhammad Usman\">

    <!-- The styles -->
<!--<link id=\"bs-css\" href=\"bundles/abctest/css/bootstrap-cerulean.min.css\" rel=\"stylesheet\">-->
<link id=\"bs-css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" />

<!-- <link href=\"css/charisma-app.css\" rel=\"stylesheet\"> -->
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'> -->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'> -->
<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media='print' />

<!-- <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'> -->
<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'> -->
<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/jquery.noty.css' rel='stylesheet'> -->
<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/jquery.noty.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/noty_theme_default.css' rel='stylesheet'> -->
<link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/noty_theme_default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/elfinder.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/elfinder.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/elfinder.theme.css' rel='stylesheet'> -->
<link href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/elfinder.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/jquery.iphone.toggle.css' rel='stylesheet'> -->
<link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/uploadify.css' rel='stylesheet'> -->
<link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/uploadify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- <link href='css/animate.min.css' rel='stylesheet'> -->
<link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- jQuery -->
<!-- <script src=\"bower_components/jquery/jquery.min.js\"></script> -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>

    <![endif]-->

    <!-- The fav icon -->
    <!-- <link rel=\"shortcut icon\" href=\"img/favicon.ico\"> -->
    <link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>

</head>

<body>

    <!-- topbar starts -->
    <div class=\"navbar navbar-default\" role=\"navigation\">

        <div class=\"navbar-inner\">
            <button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">
                <span> SketchApp </span></a>

            <!-- user dropdown starts -->
            <div class=\"btn-group pull-right\">
                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-sm hidden-xs\">";
        // line 104
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            echo " Admin ";
        } else {
            echo " User ";
        }
        echo "</span>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\">Profile</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("pnc_management_logout");
        echo "\">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <ul class=\"collapse navbar-collapse nav navbar-nav top-menu\">
                <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\"><i class=\"glyphicon glyphicon-globe\"></i> Visit Site</a></li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->

<div class=\"ch-container\">
    <div class=\"row\">
        <!-- left menu starts -->
        ";
        // line 126
        $this->displayBlock('leftmenu', $context, $blocks);
        // line 129
        echo "        <!-- left menu ends -->
        <noscript>
            <div class=\"alert alert-block col-md-12\">
                <h4 class=\"alert-heading\">Warning!</h4>

                <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id=\"content\" class=\"col-lg-10 col-sm-10\">
            <!-- content starts -->
            ";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "   
        </div><!--/row-->
                    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>

    <footer class=\"row\">
        <p class=\"col-md-9 col-sm-9 col-xs-12 copyright\">&copy; <a href=\"http://usman.it\" target=\"_blank\">Muhammad
                Usman</a> 2012 - 2014</p>

        <p class=\"col-md-3 col-sm-3 col-xs-12 powered-by\">Powered by: <a
                href=\"http://usman.it/free-responsive-admin-template\">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<!-- <script src=\"bower_components/bootstrap/dist/js/bootstrap.min.js\"></script> -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<!-- <script src=\"js/jquery.cookie.js\"></script> -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

<!-- calender plugin -->
<!-- <script src='bower_components/moment/min/moment.min.js'></script> -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<!-- <script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script> -->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<!-- data table plugin -->
<!-- <script src='js/jquery.dataTables.min.js'></script> -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

<!-- select or dropdown enhancer -->
<!-- <script src=\"bower_components/chosen/chosen.jquery.min.js\"></script> -->
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- plugin for gallery image view -->
<!-- <script src=\"bower_components/colorbox/jquery.colorbox-min.js\"></script> -->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>

<!-- notification plugin -->
<!-- <script src=\"js/jquery.noty.js\"></script> -->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

<!-- library for making tables responsive -->
<!-- <script src=\"bower_components/responsive-tables/responsive-tables.js\"></script> -->
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>

<!-- tour plugin -->
<!-- <script src=\"bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js\"></script> -->
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>

<!-- star rating plugin -->
<!-- <script src=\"js/jquery.raty.min.js\"></script> -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

<!-- for iOS style toggle switch -->
<!-- <script src=\"js/jquery.iphone.toggle.js\"></script> -->
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

<!-- autogrowing textarea plugin -->
<!-- <script src=\"js/jquery.autogrow-textarea.js\"></script> -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>

<!-- multiple file upload plugin -->
<!-- <script src=\"js/jquery.uploadify-3.1.min.js\"></script> -->
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

<!-- history.js for cross-browser state change on ajax -->
<!-- <script src=\"js/jquery.history.js\"></script> -->
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.history.js"), "html", null, true);
        echo "\"></script>

<!-- application script for Charisma demo -->
<!-- <script src=\"js/charisma.js\"></script> -->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/charisma.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "Free HTML5 Bootstrap Admin Template";
    }

    // line 126
    public function block_leftmenu($context, array $blocks = array())
    {
        // line 127
        echo "       
        ";
    }

    // line 141
    public function block_content($context, array $blocks = array())
    {
        // line 142
        echo "                
            ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::manage_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 142,  389 => 141,  384 => 127,  381 => 126,  375 => 19,  365 => 224,  358 => 220,  351 => 216,  344 => 212,  337 => 208,  330 => 204,  323 => 200,  316 => 196,  309 => 192,  302 => 188,  295 => 184,  288 => 180,  281 => 176,  276 => 174,  269 => 170,  262 => 166,  237 => 143,  235 => 141,  221 => 129,  219 => 126,  206 => 116,  197 => 110,  192 => 108,  181 => 104,  156 => 82,  143 => 72,  136 => 68,  130 => 65,  124 => 62,  118 => 59,  112 => 56,  106 => 53,  100 => 50,  94 => 47,  88 => 44,  82 => 41,  76 => 38,  70 => 35,  64 => 32,  58 => 29,  52 => 26,  42 => 19,  22 => 1,);
    }
}
