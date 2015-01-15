<?php

/* AcmeDemoBundle:User:show.html.twig */
class __TwigTemplate_6dcb2f8cecafa1f907311214849730e6b0292f4048393d38669d148f0802df2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::manage_layout.html.twig");

        $this->blocks = array(
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
    public function block_leftmenu($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"col-sm-2 col-lg-2\">
            <div class=\"sidebar-nav\">
                <div class=\"nav-canvas\">
                    <div class=\"nav-sm nav nav-stacked\">
                    </div>
                    <ul class=\"nav nav-pills nav-stacked main-menu\">
                        <li class=\"nav-header\">Main</li>
                        
                        <!--
                        <li><a class=\"ajax-link\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_home");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>                       
                        -->
                        
                        <li><a class=\"ajax-link\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>

                        

                        ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 24
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                        ";
        }
        // line 27
        echo "
                                                                                                                                          
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pnc_management_homepage");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Login </span></a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t\t<div class=\"row\">
\t\t    <div class=\"box col-md-12\">
\t\t        <div class=\"box-inner\">
\t\t            <div class=\"box-header well\" data-original-title=\"\">
\t\t                <h2><i class=\"glyphicon glyphicon-star-empty\"></i> Blank</h2>

\t\t                <div class=\"box-icon\">
\t\t                    <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
\t\t                            class=\"glyphicon glyphicon-cog\"></i></a>
\t\t                    <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
\t\t                            class=\"glyphicon glyphicon-chevron-up\"></i></a>
\t\t                    <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
\t\t                            class=\"glyphicon glyphicon-remove\"></i></a>
\t\t                </div>
\t\t            </div>
\t\t            <div class=\"box-content\">
\t\t                <!-- put your content here -->

\t\t                    <!-- START -->
\t\t                    
\t\t                    <div class=\"row\">
\t\t                        <div class=\"box col-md-6\">
\t\t                        <div class=\"box-inner\">
\t\t                        <div class=\"box-header well\" data-original-title=\"\">
\t\t                            <h2>User's Profile</h2>

\t\t                            <div class=\"box-icon\">
\t\t                            <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
\t\t                                    class=\"glyphicon glyphicon-cog\"></i></a>
\t\t                            <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
\t\t                                    class=\"glyphicon glyphicon-chevron-up\"></i></a>
\t\t                            <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
\t\t                                    class=\"glyphicon glyphicon-remove\"></i></a>
\t\t                            </div>
\t\t                        </div>
\t\t                        <div class=\"box-content\">
\t\t                        
\t\t                        <table class=\"table table-striped\">                       
\t\t                            <tr>
\t\t                                <th>Username</th>
\t\t                                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userName"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>Email</th>
\t\t                                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>Password</th>
\t\t                                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>Lastname</th>
\t\t                                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>Firstname</th>
\t\t                                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>Language</th>
\t\t                                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "language"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                            <tr>
\t\t                                <th>isAdmin</th>
\t\t                                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isAdmin"), "html", null, true);
        echo "</td>
\t\t                            </tr>
\t\t                        </table>        
\t\t                        <ul>
\t\t                            <li>
\t\t                            <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
\t\t                            Edit
\t\t                            </a>
\t\t                            </li>
\t\t                            <li>";
        // line 112
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 113
            echo "\t\t                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\">
\t\t                                Back to the table</a>
\t\t                            ";
        } else {
            // line 116
            echo "\t\t                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\">
\t\t                                Back to the home</a>
\t\t                            ";
        }
        // line 118
        echo " 
\t\t                            </li>
\t\t                            
\t\t                        </ul>
\t\t                        </div>
\t\t                        </div>
\t\t                        </div>
\t\t                        <!--/span-->
\t\t                    </div><!--/row-->

\t\t                    <!-- END -->
\t\t                
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 118,  194 => 116,  187 => 113,  185 => 112,  178 => 108,  170 => 103,  163 => 99,  156 => 95,  149 => 91,  142 => 87,  135 => 83,  128 => 79,  86 => 39,  83 => 38,  71 => 29,  67 => 27,  60 => 24,  58 => 23,  50 => 18,  43 => 14,  32 => 5,  29 => 4,);
    }
}
