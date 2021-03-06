<?php

/* AcmeDemoBundle:User:emptygallery.html.twig */
class __TwigTemplate_aea952f8770d8abc508d56fcdb6631d333e8fb627fb43329c86bd1bae6c8d89e extends Twig_Template
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
    <title>Free HTML5 Bootstrap Admin Template</title>
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


<!-- prompt  -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.ui.draggable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
                <!-- Core files -->
                <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.alerts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <link href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.alerts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!--  end -->

    <!-- jQuery -->
<!-- <script src=\"bower_components/jquery/jquery.min.js\"></script> -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>

    <![endif]-->

    <!-- The fav icon -->
    <!-- <link rel=\"shortcut icon\" href=\"img/favicon.ico\"> -->
    <link href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>
<script>
        function renameImage(\$imgId, \$id) {
            //alert(\$id);
            jPrompt('Type name for image:', 'Default value', 'Prompt Dialog', function(r) {
                if( r ){

                       \$.ajax({
                            url: \"/renameImage\",
                            type: \"post\",
                            data: { nameImage :r, imgId :\$imgId, id :\$id},
                            //dataType: \"json\",
                            success: function(response){
                                

                                //sk.exec(\"save-server\"); 
                                //alert('ajasuccess'); die;

                                \$(\".thumbnails\").html(response);
                         
                                //alert(data.name);
                                //jsonData = response;
                               // filePaths = response.filePaths;
                                //alert(jsonData.name);
                                      
                                
                            },
                            error:function(){
                                alert('ajafail'); die;
                                \$(\"#carousel-container\").html(response) ;

                            }
                        });
                    }
            });
        
        }
        function deleteImage(\$imgId, \$id) {
                jConfirm('Do you want to delete this image?','Confirmation Dialog', function(c) {
                    if (c == true) {
                         \$.ajax({
                            url: \"/deleteImage\",
                            type: \"post\",
                            data: {imgId :\$imgId, id :\$id},
                            //dataType: \"json\",
                            success: function(response){
                                

                                //sk.exec(\"save-server\"); 
                                //alert('ajasuccess'); die;

                                \$(\".thumbnails\").html(response);
                         
                                //alert(data.name);
                                //jsonData = response;
                               // filePaths = response.filePaths;
                                //alert(jsonData.name);
                                      
                                
                            },
                            error:function(){
                                jAlert('Delete fail!'); 
                                //\$(\"#carousel-container\").html(response) ;

                            }
                        });
                                            
                                           
                    } else {
                        //
                    }
                
                });
        
        }

        function sendImage(\$imgId, \$filePath) {
            //alert(\$filePath);
            jPrompt('Type email you want to send this image:', 'Default value', 'Prompt Dialog', function(r) {
                if( r ){

                       \$.ajax({
                            url: \"/sendImage\",
                            type: \"post\",
                            data: { email :r, imgId :\$imgId},
                            //dataType: \"json\",
                            success: function(response){
                                
                                jAlert('Send email success');
                                      
                                
                            },
                            error:function(){
                               jAlert('Send email fail');

                            }
                        });
                    }
            });
        
        }
  </script>      
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
            <a class=\"navbar-brand\" href=\"#\">
                <span>SketchApp</span></a>

            <!-- user dropdown starts -->
            <div class=\"btn-group pull-right\">
                <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-sm hidden-xs\">";
        // line 213
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
        // line 219
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\">Profile</a></li>
                    

                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("pnc_management_logout");
        echo "\">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <ul class=\"collapse navbar-collapse nav navbar-nav top-menu\">
                <li><a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\"><i class=\"glyphicon glyphicon-globe\"></i> Visit Site</a></li>
            </ul>

            

        </div>
    </div>
    <!-- topbar ends -->
<div class=\"ch-container\">
    <div class=\"row\">
        
        <!-- left menu starts -->
        <div class=\"col-sm-2 col-lg-2\">
            <div class=\"sidebar-nav\">
                <div class=\"nav-canvas\">
                    <div class=\"nav-sm nav nav-stacked\">
                    </div>
                    <ul class=\"nav nav-pills nav-stacked main-menu\">
                        <li class=\"nav-header\">Main</li>
                        <!--
                        ";
        // line 249
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 250
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_home");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>                       
                        ";
        } else {
            // line 253
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>
                        ";
        }
        // line 256
        echo "                        -->

                        <li><a class=\"ajax-link\" href=\"";
        // line 258
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\"><i
                                    class=\"glyphicon glyphicon-edit\"></i><span> Profile</span></a></li>
                        
                        ";
        // line 261
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            echo "            
                        <li><a class=\"ajax-link\" href=\"";
            // line 262
            echo $this->env->getExtension('routing')->getPath("admin_gallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>
                        ";
        } else {
            // line 265
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_usergallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>
                        ";
        }
        // line 268
        echo "
                        

                        ";
        // line 271
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 272
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                        ";
        }
        // line 275
        echo "
                                                                                                                                          
                        <li><a href=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("pnc_management_homepage");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Logout </span></a>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        

        <div id=\"content\" class=\"col-lg-10 col-sm-10\">
            <!-- content starts -->
                

    <div class=\"row\">
        <div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                    <h2><i class=\"glyphicon glyphicon-picture\"></i> Gallery</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    
                    <p style=\"font-style:italic\">The gallery is empty !</p>                 
                    
                </div>
            </div>
        </div>
        <!--/span-->

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
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<!-- <script src=\"js/jquery.cookie.js\"></script> -->
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

<!-- calender plugin -->
<!-- <script src='bower_components/moment/min/moment.min.js'></script> -->
<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<!-- <script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script> -->
<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<!-- data table plugin -->
<!-- <script src='js/jquery.dataTables.min.js'></script> -->
<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

<!-- select or dropdown enhancer -->
<!-- <script src=\"bower_components/chosen/chosen.jquery.min.js\"></script> -->
<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- plugin for gallery image view -->
<!-- <script src=\"bower_components/colorbox/jquery.colorbox-min.js\"></script> -->
<!--<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>-->

<!-- notification plugin -->
<!-- <script src=\"js/jquery.noty.js\"></script> -->
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

<!-- library for making tables responsive -->
<!-- <script src=\"bower_components/responsive-tables/responsive-tables.js\"></script> -->
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>

<!-- tour plugin -->
<!-- <script src=\"bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js\"></script> -->
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>

<!-- star rating plugin -->
<!-- <script src=\"js/jquery.raty.min.js\"></script> -->
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

<!-- for iOS style toggle switch -->
<!-- <script src=\"js/jquery.iphone.toggle.js\"></script> -->
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

<!-- autogrowing textarea plugin -->
<!-- <script src=\"js/jquery.autogrow-textarea.js\"></script> -->
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>

<!-- multiple file upload plugin -->
<!-- <script src=\"js/jquery.uploadify-3.1.min.js\"></script> -->
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

<!-- history.js for cross-browser state change on ajax -->
<!-- <script src=\"js/jquery.history.js\"></script> -->
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/jquery.history.js"), "html", null, true);
        echo "\"></script>

<!-- application script for Charisma demo -->
<!-- <script src=\"js/charisma.js\"></script> -->
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abctest/js/charisma.js"), "html", null, true);
        echo "\"></script>



</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:emptygallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 402,  575 => 398,  568 => 394,  561 => 390,  554 => 386,  547 => 382,  540 => 378,  533 => 374,  526 => 370,  519 => 366,  512 => 362,  505 => 358,  498 => 354,  493 => 352,  486 => 348,  479 => 344,  409 => 277,  405 => 275,  398 => 272,  396 => 271,  391 => 268,  384 => 265,  378 => 262,  374 => 261,  368 => 258,  364 => 256,  357 => 253,  350 => 250,  348 => 249,  325 => 229,  316 => 223,  309 => 219,  296 => 213,  172 => 92,  159 => 82,  151 => 77,  147 => 76,  141 => 73,  137 => 72,  130 => 68,  124 => 65,  118 => 62,  112 => 59,  106 => 56,  100 => 53,  94 => 50,  88 => 47,  82 => 44,  76 => 41,  70 => 38,  64 => 35,  58 => 32,  52 => 29,  46 => 26,  19 => 1,);
    }
}
