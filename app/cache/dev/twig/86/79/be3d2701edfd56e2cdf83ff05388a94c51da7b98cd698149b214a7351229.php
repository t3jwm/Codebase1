<?php

/* AcmeDemoBundle:User:index.html.twig */
class __TwigTemplate_8679be3d2701edfd56e2cdf83ff05388a94c51da7b98cd698149b214a7351229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::manage_layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::manage_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Index ";
    }

    // line 6
    public function block_leftmenu($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"col-sm-2 col-lg-2\">
        <div class=\"sidebar-nav\">
            <div class=\"nav-canvas\">
                <div class=\"nav-sm nav nav-stacked\">
                </div>
                <ul class=\"nav nav-pills nav-stacked main-menu\">
                    <li class=\"nav-header\">Main</li>

                    <!--
                    ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 17
            echo "                    <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_home");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                    </li>
                    ";
        } else {
            // line 20
            echo "                    <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                    </li>
                    ";
        }
        // line 23
        echo "                    -->
                    <li><a class=\"ajax-link\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\"><i
                                    class=\"glyphicon glyphicon-edit\"></i><span> Profile</span></a></li>
                                
                    ";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            echo "            
                    <li><a class=\"ajax-link\" href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("admin_gallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                    </li>
                    ";
        } else {
            // line 31
            echo "                    <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_usergallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                    </li>
                    ";
        }
        // line 34
        echo "
                    
                    ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 37
            echo "                    <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                    ";
        }
        // line 40
        echo "
                                                                                                                                      
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pnc_management_homepage");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Logout </span></a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "    <div class=\"row\">
        <div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\">
                    <h2><i class=\"glyphicon glyphicon-info-sign\"></i> Introduction</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content row\">
                    <div class=\"col-lg-7 col-md-12\">
                        <h1>Charisma <br>
                            <small>free, premium quality, responsive, multiple skin admin template.</small>
                        </h1>
                        <p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                            projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                            :)</p>

                        <p><b>All pages in the menu are functional, take a look at all, please share this with your
                                followers.</b></p>

                        <p class=\"center-block download-buttons\">
                            <a href=\"http://usman.it/free-responsive-admin-template/\" class=\"btn btn-primary btn-lg\"><i
                                    class=\"glyphicon glyphicon-chevron-left glyphicon-white\"></i> Back to article</a>
                            <a href=\"http://usman.it/free-responsive-admin-template/\" class=\"btn btn-default btn-lg\"><i
                                    class=\"glyphicon glyphicon-download-alt\"></i> Download Page</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  121 => 52,  109 => 42,  105 => 40,  98 => 37,  96 => 36,  92 => 34,  85 => 31,  79 => 28,  75 => 27,  69 => 24,  66 => 23,  59 => 20,  52 => 17,  50 => 16,  39 => 7,  36 => 6,  30 => 4,);
    }
}
