<?php

/* AcmeDemoBundle:Demo:app.html.twig */
class __TwigTemplate_6e8d93b00c1f7d99a344628d9a78ba03338d053537f1ff7e2a9ceb80742e09ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'linkPlus' => array($this, 'block_linkPlus'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- SketchAPI v3.5.7.13 -->
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/min/sketchapi.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/min/sketchapi.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t

\t<!-- SketchAPI CSS -->
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-iconfont.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-colorpalette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/sk-windows.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

\t<!-- Uploader -->
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/ui/uploader.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t

\t<!-- App -->
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/appContextmenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/appScene.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/libraryClipart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/js/libraryText.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<style>
\t\t.icon-close {
\t\twidth: 22px; 
\t\theight:22px; 
\t\tbackground: url(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/closebtn.png"), "html", null, true);
        echo "\");
\t\tbackground-size: 100% 100%; 
\t\tbackground-repeat: no-repeat;
\t\t
\t\t}
\t
\t\thtml, body {
\t\t\tbackground:#fff;
\t\t}
\t\t
\t</style>
\t";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "       <div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\">
\t\t\t<div class=\"sketchapi\" data-image=\"test.jpg\" style=\"width: 100%; height: 600px;\">
\t\t\t   <div id=\"sk-orientation\"></div>
\t\t\t   <div class=\"sk-toolset\" style=\"width: 100%; margin-top:0%;\">
\t\t\t\t <div style=\"float: left; width: 65px;\">
\t\t\t\t   <button id=\"tool-save\" class=\"sk-button icon-save\" title=\"Save file\" style='width: 30px; height:28px; background: url(\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/savebtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t   <button id=\"tool-open\" class=\"sk-button icon-folder\" title=\"Open file\"style='width: 30px; height:28px; background: url(\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/openbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t </div>
\t\t\t\t <div style=\"float: right;\">
\t\t\t\t   <button id=\"tool-select\" class=\"sk-button icon-select\" title=\"Select tool\" style='width: 30px; height:28px; background: url(\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/selectbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t   <button id=\"tool-text\" class=\"sk-button icon-text\" title=\"Text tool\" style='width: 30px; height:28px; background: url(\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/textbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t   <button id=\"tool-streamer\" class=\"sk-button icon-streamer\" title=\"Brush tool\" style='width: 30px; height:28px; background: url(\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/brushbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t   <button id=\"tool-star\" class=\"sk-button icon-star\" title=\"Star tool\" style='width: 30px; height:28px; background: url(\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/starbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;''></button>\t 
\t\t\t\t   <button id=\"tool-palette\" class=\"sk-button icon-palette\" title=\"Color Palette\" style='width: 30px; height:28px; background: url(\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/colorbtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t   <button id=\"tool-zoom\" class=\"sk-button icon-zoom\" title=\"Zoom tool\" style='width: 30px; height:28px; background: url(\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sketchpad/images/zoombtn.png"), "html", null, true);
        echo "\");background-size: 100% 100%; background-repeat: no-repeat;padding-left:0; padding-top: 0; margin-bottom: 0;'></button>
\t\t\t\t </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
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
        return array (  167 => 64,  163 => 63,  159 => 62,  155 => 61,  151 => 60,  147 => 59,  141 => 56,  137 => 55,  128 => 48,  125 => 47,  109 => 34,  101 => 29,  97 => 28,  93 => 27,  88 => 25,  84 => 24,  80 => 23,  72 => 18,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
