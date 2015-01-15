<?php

/* AcmeDemoBundle:Demo:app.html.twig */
class __TwigTemplate_a824d005734ec69f89e714cdbf4814486c0cd4861958ca219f656cbb25593dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'linkPlus' => array($this, 'block_linkPlus'),
            'CssPlus' => array($this, 'block_CssPlus'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'addJava' => array($this, 'block_addJava'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::Baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 7
        echo "
\t";
    }

    // line 9
    public function block_CssPlus($context, array $blocks = array())
    {
        // line 10
        echo "\t<!-- dialog form  -->
    \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t\t<link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dialogForm/css/bootstrap-modal-carousel.min.css"), "html", null, true);
        echo "\">
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
    <!--  -->
    
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"viewport\" content=\"minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no\" />
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />

\t<!-- SketchAPI v3.6.7.39 -->
\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/min/sketchapi.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/min/sketchapi.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!-- JS-->
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/app/configure.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/lib/clipart.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/lib/text.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/lib/color.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/app/appGMA.js?789"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/js/app/appContextMenu.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>

\t<!-- CSS-->
\t<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpadNew/css/appGMA.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 \t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/basepage.css"), "html", null, true);
        echo "\" />      
\t    
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/full-slider.css"), "html", null, true);
        echo "\" />   
    
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/css/agency.css"), "html", null, true);
        echo "\">
    
    <!-- prompt  -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.ui.draggable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t
\t\t\t\t<!-- Core files -->
\t\t\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.alerts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t\t<link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jQuery Alert Dialogs_files/jquery.alerts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    <!--  end -->
    
\t<style>
\t.sk-sidebar {
\t\theight: 100%;
\t\tmargin-top: 92px;
\t}
\t.col-lg-12 {
\t\tpadding-left: 0;
\t\tpadding-right: 0;
\t}
\ta {
\t}
\t.nav .external {
\t\tmargin-top: 30px;
\t}
\t.row + .row,
\t.row-fluid + .row-fluid {
\t\tmargin-top: 20px;
\t}
\t.btn .glyphicon + span {
\t\tmargin-left: .5em;
\t}
\t@media (min-width: 768px) {
\t\th2:first-child, .h2:first-child, h3:first-child, .h3:first-child {
\t\t\tmargin-top: 0;
\t\t}
\t}
\t
\t.modal-content {\t\t\t\t
\t\twidth: 1100px;
\t\tposition: relative;\t\t\t
\t\tright: 250px;
\t\ttop: 150px;
\t}
\t
\t#popup_prompt {
\t\twidth: 200px;
\t\theight: 40px;
\t}
\t#popup_container {
\tmax-width: 500px;
\tmin-width: 500px;
\t
\t}
\t#popup_message {
\t\tfont-size: 20px;
\t}
\t#popup_ok {
\t\twidth: 60px;
\t\theight: 32px;
\t\t
\t}
\t#popup_cancel {
\t\twidth: 80px;
\t\theight: 32px;
\t\tmargin-left: 20px;
\t}
\t
\t
\t\t   
\t</style>
\t<style>
div.img {
    margin: 5px;
    padding: 5px;
    border: 2px solid #989082;
    height: auto;
    width: auto;
    float: left;
    text-align: center;
    background-color: #493D29;
}\t

div.img img {
    display: inline;
    margin: 5px;
    border: 1px solid #ffffff;
}

div.img:hover img {
    border: 1px solid #0000ff;
}

div.desc {
  text-align: center;
  font-weight: normal;
  width: 120px;
  margin: 5px;
  color: #D3EAEA;
  overflow:hidden;
}
.sk-sidebar {
\t
}
.sk-sidebar-active-left div.sk-content {
\t//position: initial;
}
.modal-title {
\tcolor: white;
}
.modal-header {
\tbackground-color: black;
}
.close {
\tcolor: white;
\tbackground-color: white;
}
\t
</style>
\t<script>
\t\tfunction saveImage() {
\t\t\tjPrompt('Type name for image:', 'Default value', 'Prompt Dialog', function(r) {
\t\t\t\tif( r ){

\t\t\t\t\t   \$.ajax({
\t\t\t\t\t        url: \"/download\",
\t\t\t\t\t        type: \"post\",
\t\t\t\t\t        data: { nameImage :r},
\t\t\t\t\t        //dataType: \"json\",
\t\t\t\t\t        success: function(response){
\t\t\t\t\t\t        

\t\t\t\t\t            sk.exec(\"save-server\"); 
\t\t\t\t\t            //alert(response);

\t\t\t\t\t            \$(\".content\").html(response);
\t\t\t\t\t     
\t\t\t\t\t            //alert(data.name);
\t\t\t\t\t            //jsonData = response;
\t\t\t\t\t           // filePaths = response.filePaths;
\t\t\t\t\t            //alert(jsonData.name);
\t\t\t\t\t            \t  
\t\t\t\t\t            
\t\t\t\t\t        },
\t\t\t\t\t        error:function(){
\t\t\t\t\t        \t\$(\"#carousel-container\").html(response) ;

\t\t\t\t\t        }
\t\t\t\t\t    });
\t\t\t\t\t}
\t\t\t});
\t\t
\t\t}
\t\t//-----------------
\t\tfunction openImage() {
\t\t\tjPrompt('Please enter the drawing name', 'Default value', 'Prompt Dialog', function(r) {
\t\t\t\tif( r ){

\t\t\t\t\t   \$.ajax({
\t\t\t\t\t        url: \"/uploadname\",
\t\t\t\t\t        type: \"post\",
\t\t\t\t\t        data: { nameImage :r},
\t\t\t\t\t        dataType: \"json\",
\t\t\t\t\t        success: function(data){

\t\t\t\t\t            if (data.existName == false) {//do all normal
\t\t\t\t\t            \tsk.exec(\"save-server\"); 
\t\t\t\t\t            \tsetTimeout(function (){

\t\t\t\t\t                    //something you want delayed
\t\t\t\t\t            \t\t\$.ajax({
\t\t\t\t\t\t\t\t\t        url: \"/download\",
\t\t\t\t\t\t\t\t\t        type: \"post\",
\t\t\t\t\t\t\t\t\t        data: { nameImage :r},
\t\t\t\t\t\t\t\t\t        //dataType: \"json\",
\t\t\t\t\t\t\t\t\t        success: function(response){
\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t            //sk.exec(\"save-server\"); 
\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t\t            \$(\".content\").html(response);
\t\t\t\t\t\t\t\t\t      
\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t        error:function(){
\t\t\t\t\t\t\t\t\t        \t//\$(\"#carousel-container\").html(response) ;

\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    });

\t\t\t\t\t                }, 1000); 
\t\t\t\t\t            \t
\t\t\t\t\t\t        } else {//existing nameImage
\t\t\t\t\t\t        \tjConfirm('The name has already existed. Would you like to update this drawing?', 'Confirmation Dialog', function(c) {
\t\t\t\t\t\t\t\t\t\tif (c == true) {
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tsk.exec(\"save-server\");
\t\t\t\t\t\t\t\t\t\t\tsetTimeout(function (){
\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t        url: \"/download\",
\t\t\t\t\t\t\t\t\t\t        type: \"post\",
\t\t\t\t\t\t\t\t\t\t        data: { nameImage :r},
\t\t\t\t\t\t\t\t\t\t        //dataType: \"json\",
\t\t\t\t\t\t\t\t\t\t        success: function(response){

\t\t\t\t\t\t\t\t\t\t            //sk.exec(\"save-server\"); 
\t\t\t\t\t\t\t\t\t\t         

\t\t\t\t\t\t\t\t\t\t            \$(\".content\").html(response);
\t\t\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t        error:function(){
\t\t\t\t\t\t\t\t\t\t        \t//\$(\"#carousel-container\").html(response) ;
\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t\t\t\t}, 1000); 
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t//
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t    }
\t\t\t\t\t            //jsonData = response;
\t\t\t\t\t           // filePaths = response.filePaths;
\t\t\t\t\t            //alert(jsonData.name);
\t\t\t\t\t            \t  
\t\t\t\t\t            
\t\t\t\t\t        },
\t\t\t\t\t        error:function(){
\t\t\t\t\t        \t//\$(\"#carousel-container\").html(response) ;

\t\t\t\t\t        }
\t\t\t\t\t    });
\t\t\t\t\t}
\t\t\t});
\t\t}

\t</script>
\t<script>
\tfunction editImage(\$path) {
\t\t//alert(\"/media/\"+\$path);
\t\t  

\t\t
\t\t\t\tjConfirm('The current drawing will be lost. Are you sure?', 'Confirmation Dialog', function(r) {
\t\t\t\t\tif (r == true) {
\t\t\t\t\t\tsk.open.json(\$path);
\t\t\t\t\t} 
\t\t\t\t
\t\t\t\t});
\t\t
\t\t
\t}
</script>
";
    }

    // line 301
    public function block_header($context, array $blocks = array())
    {
        // line 302
        echo "<header class=\"page-header\" style= \"display: inline;\">
  <div class=\"row\" id =\"rowNarbar\" style = \"margin-bottom : -25px;\">
\t\t\t<!-- navbar navbar-default -->
\t\t\t<div class=\"navbar navbar-inverse\" role=\"navigation\">
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
        // line 328
        echo $this->env->getExtension('routing')->getPath("page_landing");
        echo "\">HOME</a></li>
\t                    <li><a href=\"";
        // line 329
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\"> GET STARTED</a></li>
\t                    <li><a href=\"#\">  FAQS</a></li>
\t           
\t                    <li><a href=\"#\">  CONTACT US</a></li>
\t                    
    \t\t\t\t\t";
        // line 334
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "")) {
            // line 335
            echo "                        \t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" style = \"margin-right: 280px;\">LOGIN</a></li>
                        ";
        } else {
            // line 337
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_logout");
            echo "\" style = \"margin-right: 280px;\">LOGOUT</a></li> 
                        ";
        }
        // line 339
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

    // line 364
    public function block_body($context, array $blocks = array())
    {
        // line 365
        echo "
<div class =\"row\">
\t<div class=\"col-lg-12\" style= \"margin-top: 5px;\">
\t\t<div class=\"sketchapi\">
\t\t\t\t<div class=\"sk-sidebar sk-sidebar-left\">
\t\t\t\t\t<span class=\"tabs\"></span>
\t\t
\t\t\t\t\t<!--- CONFIGURE -->
\t\t\t\t\t<div id=\"sk-configure\" class=\"sk-pane\"></div>
\t\t
\t\t\t\t\t<!--- CONFIGURE: FILL -->
\t\t\t\t\t<div id=\"sk-configure-fill\" class=\"sk-pane\">
\t\t\t\t\t\t<div class=\"sk-row-head\"><span class=\"icon-left to-configure\"></span>fill</div>
\t\t\t\t\t\t<div class=\"sk-pane-content\"></div>
\t\t\t\t\t</div>
\t\t
\t\t\t\t\t<!--- CONFIGURE: STROKE -->
\t\t\t\t\t<div id=\"sk-configure-stroke\" class=\"sk-pane\">
\t\t\t\t\t\t<div class=\"sk-row-head\"><span class=\"icon-left to-configure\"></span>stroke</div>
\t\t\t\t\t\t<div class=\"sk-pane-content\"></div>
\t\t\t\t\t</div>
\t\t
\t\t\t\t\t<!--- LAYERS -->
\t\t\t\t\t<div id=\"sk-layers\" class=\"sk-pane\">
\t\t\t\t\t\t<div class=\"sk-row-head\">layers</div>\t\t
\t\t\t\t\t\t<ul class=\"sk-pane-content sk-tree\"></ul>
\t\t\t\t\t</div>
\t\t
\t\t\t\t\t<!--- DOCUMENT: HISTORY -->
\t\t\t\t\t<div id=\"sk-history\" class=\"sk-pane\">
\t\t\t\t\t\t<div class=\"sk-row-head\">History</div>
\t\t\t\t\t\t<ul class=\"sk-pane-content sk-tree\"></ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sk-toolset \">
\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t<button id=\"tool-menu\" class=\"sk-tool icon-menu\" title=\"menu\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t<button id=\"tool-select\" class=\"sk-tool icon-select\" title=\"select\"></button>
\t\t\t\t\t\t<button id=\"tool-pencil\" class=\"sk-brush-menu sk-tool icon-pencil\" title=\"brush\"></button>
\t\t\t\t\t\t<button id=\"tool-highlighter\" data-tool=\"type:highlighter;shortcut:paintbrush;fill:yellow;composite:multiply,destination-over;\" class=\"sk-tool icon-highlight\" title=\"Highlighter\"></button>
\t\t\t\t\t\t<button id=\"tool-arrow\" class=\"sk-tool icon-arrow\" title=\"arrow\"></button>
\t\t\t\t\t\t<button id=\"tool-rectangle\" class=\"sk-shape-menu sk-tool icon-square\" title=\"shape\"></button>
\t\t\t\t\t\t<button id=\"tool-text\" class=\"sk-tool icon-text\" title=\"text\"></button>
\t\t\t\t\t\t<button id=\"tool-attach\" class=\"sk-tool sk-icon icon-attachment\" title=\"attachment\" style=\"display: inline\"></button>
\t\t\t\t\t\t<button id=\"tool-new-confirm\" class=\"sk-tool icon-file\" title=\"new\"></button>
\t\t\t\t\t\t<button id=\"tool-download-pdf\" class=\"sk-tool icon-file-pdf\" title=\"Download PDF\"></button>
\t\t\t\t\t\t<button id=\"tool-print\" class=\"sk-tool icon-print\" title=\"Print\"></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"\" class=\"sk-tool icon-export glyphicon glyphicon-fullscreen\" title=\"\" data-toggle=\"modal\" data-target=\"#myModal\"></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"openImage\" onclick = openImage() class=\"sk-tool icon-save\" title=\"SaveH\"></button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sk-content\">
\t\t\t\t\t<div id=\"sk-orientation\"></div>
\t\t\t\t\t<div class=\"sk-disable sk-hide\"></div>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t\t\t\t
\t<div class=\"col-sm-9\">


\t\t<div class=\"modal fade   \" id=\"myModal\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close \" data-dismiss=\"modal\" aria-hidden=\"true\" style= \"color: white\">&times;</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">Choose Image to edit</h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<!-- <p>One fine body&hellip;</p> -->
\t\t\t\t\t\t\t\t\t\t<!-- start -->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t <div class=\"content\">
\t\t\t\t\t\t\t\t\t\t ";
        // line 453
        if (array_key_exists("filePaths", $context)) {
            // line 454
            echo "\t\t\t\t\t\t\t\t\t\t ";
            if (array_key_exists("numImage", $context)) {
                // line 455
                echo "\t\t\t\t\t\t\t\t\t\t  ";
                if (((isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage")) >= 0)) {
                    // line 456
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 457
                        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"100\" height=\"100\" onclick = \"editImage('";
                        // line 459
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                        echo ".json')\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array")), "html", null, true);
                        echo ".jpeg\" />
\t\t\t\t\t\t\t\t\t\t\t <div class=\"desc\">";
                        // line 460
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nameImages"]) ? $context["nameImages"] : $this->getContext($context, "nameImages")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                        echo " </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 463
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 464
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 465
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 466
        echo "\t        \t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->


\t</div>
</div>


";
    }

    // line 485
    public function block_footer($context, array $blocks = array())
    {
        // line 486
        echo "
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<script src=\"https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dialogForm/js/bootstrap-modal-carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dialogForm/js/demo.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t
";
    }

    // line 493
    public function block_addJava($context, array $blocks = array())
    {
        // line 494
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  651 => 494,  648 => 493,  641 => 490,  637 => 489,  632 => 486,  629 => 485,  608 => 466,  605 => 465,  602 => 464,  599 => 463,  590 => 460,  584 => 459,  580 => 457,  575 => 456,  572 => 455,  569 => 454,  567 => 453,  477 => 365,  474 => 364,  446 => 339,  440 => 337,  434 => 335,  432 => 334,  424 => 329,  420 => 328,  392 => 302,  389 => 301,  138 => 54,  134 => 53,  128 => 50,  124 => 49,  118 => 46,  113 => 44,  108 => 42,  104 => 41,  98 => 38,  94 => 37,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  72 => 30,  68 => 29,  50 => 14,  44 => 10,  41 => 9,  36 => 7,  33 => 6,);
    }
}
