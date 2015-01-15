<?php

/* AcmeDemoBundle:User:new.html.twig */
class __TwigTemplate_44d8eeb3c334b5f1d1007226e13088788c6d3325171fd3014e76db3583bf7601 extends Twig_Template
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
                        <li><a class=\"ajax-link\" href=\"index.html\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>                       
                            -->                                                                
                        
                        <li><a class=\"ajax-link\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>

                        ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 21
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                        ";
        }
        // line 24
        echo "                                                                                                                                         
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pnc_management_homepage");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Logout </span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "        <div class=\"row\">
            <div class=\"box col-md-12\">
                <div class=\"box-inner\">
                    <div class=\"box-header well\" data-original-title=\"\">
                        <h2><i class=\"glyphicon glyphicon-star-empty\"></i> Blank</h2>

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
                        <!-- put your content here -->

                        <!-- START -->
                        
                        <div class=\"row\">
                            <div class=\"box col-md-6\">
                            <div class=\"box-inner\">
                            <div class=\"box-header well\" data-original-title=\"\">
                                <h2>User's Profile</h2>

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
                            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <table class=\"table table-striped\">                       
                                <tr>
                                    <th>Username</th>
                                    <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName"), 'errors');
        echo "</td>
                                    <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</td>
                                    <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "</td>
                                    <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'errors');
        echo "</td>
                                    <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'errors');
        echo "</td>
                                    <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Language</th>
                                    <td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language"), 'errors');
        echo "</td>
                                    <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>isAdmin</th>
                                    <td>";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAdmin"), 'errors');
        echo "</td>
                                    <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isAdmin"), 'widget');
        echo "</td>
                                </tr>
                                
                            </table>  
                            
                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "      
                            ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            <br>
                            ";
        // line 116
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 117
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\">
                                Back to the table</a>
                            ";
        } else {
            // line 120
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\">
                                Back to the home</a>
                            ";
        }
        // line 122
        echo " 

                            </div>
                            </div>
                            </div>
                            <!--/span-->
                        </div><!--/row-->

                        <!-- END -->

                    </div>
                </div>
            </div>
        </div>
        ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 122,  221 => 120,  214 => 117,  212 => 116,  207 => 114,  203 => 113,  195 => 108,  191 => 107,  184 => 103,  180 => 102,  173 => 98,  169 => 97,  162 => 93,  158 => 92,  151 => 88,  147 => 87,  140 => 83,  136 => 82,  129 => 78,  125 => 77,  118 => 73,  80 => 37,  77 => 36,  64 => 25,  61 => 24,  54 => 21,  52 => 20,  46 => 17,  32 => 5,  29 => 4,);
    }
}
