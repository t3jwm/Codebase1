<?php

/* AcmeDemoBundle:User:edit.html.twig */
class __TwigTemplate_e744518baf01003349bd9e6e80a63e918c5c574925aff7439789052b38d65778 extends Twig_Template
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

    // line 7
    public function block_leftmenu($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"col-sm-2 col-lg-2\">
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
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_home");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>
                        ";
        } else {
            // line 20
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>
                        ";
        }
        // line 22
        echo "                       
                        -->

                        <li><a class=\"ajax-link\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\"><i
                                    class=\"glyphicon glyphicon-edit\"></i><span> Profile</span></a></li>
                        
                        ";
        // line 28
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            echo "            
                        <li><a class=\"ajax-link\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("admin_gallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>
                        ";
        } else {
            // line 32
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_usergallery");
            echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>
                        ";
        }
        // line 35
        echo "
                        

                        ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 39
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                        ";
        }
        // line 42
        echo "
                                                                                                                                         
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pnc_management_logout");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Logout </span></a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
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
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                            <table class=\"table table-striped\">                       
                                <tr hidden>
                                    <th>Username</th>
                                    ";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 96
            echo "                                    <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userName"), 'errors');
            echo "</td>
                                    <td>";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userName"), 'widget');
            echo "</td>
                                    ";
        } else {
            // line 99
            echo "                                    <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userName"), 'errors');
            echo "</td>
                                    <td>";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userName"), 'widget', array("attr" => array("hidden" => true)));
            echo "</td>
                                    ";
        }
        // line 102
        echo "
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td></td>
                                    <td><input type=\"text\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userName"), "html", null, true);
        echo "\"  disabled  /></td>
                                </tr>
                                <tr hidden>
                                    <th>Email</th>
                                    <td>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'errors');
        echo "</td>
                                    <td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td></td>
                                    <td><input type=\"text\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "\"  disabled  /></td>
                                </tr>
                                <tr hidden>
                                    <th>Password</th>
                                    <td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), 'errors');
        echo "</td>
                                    <td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), 'widget', array("value" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password")));
        echo "</td>
                                </tr>
                                
                                <tr hidden>
                                    <th>Password</th>
                                    <td></td>
                                    <td><input type=\"password\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
        echo "\"  disabled  /></td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName"), 'errors');
        echo "</td>
                                    <td>";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName"), 'errors');
        echo "</td>
                                    <td>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName"), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Language</th>
                                    <td>";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language"), 'errors');
        echo "</td>
                                    <td>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "language"), 'widget');
        echo "</td>
                                </tr>
                                <tr hidden>
                                    <th>isAdmin</th>
                                    ";
        // line 147
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 148
            echo "                                    <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isAdmin"), 'errors');
            echo "</td>
                                    <td>";
            // line 149
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isAdmin"), 'widget');
            echo "</td> 
                                    ";
        } else {
            // line 151
            echo "                                    <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isAdmin"), 'errors');
            echo "</td>
                                    <td>";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isAdmin"), 'widget', array("attr" => array("hidden" => true)));
            echo "</td>           
                                    ";
        }
        // line 154
        echo "                                </tr>
                            </table>                              
                            <br>           
                            ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary btn-mn active btnRegister")));
        echo "      
                            ";
        // line 158
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                            <br>
                            ";
        // line 161
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 162
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\">
                                Back to the table</a>
                            ";
        } else {
            // line 165
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pnc_management_userhome");
            echo "\">
                                Back to the home</a>
                            ";
        }
        // line 167
        echo " 
                            <br>
                            
                            
                            </div>
                            </div>
                            </div>
                            <!--/span-->





                            <div class=\"box col-md-6\">
                            <div class=\"box-inner\">
                            <div class=\"box-header well\" data-original-title=\"\">
                                <h2>Change your password</h2>

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

                            
                            <form method=\"POST\" action=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mana_change_password", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                            
                       
                            <table class=\"table table-striped\"> 
                            <tr>
                                    <th>Password</th>
                                    <td><input type=\"password\" placeholder=\"Password\" required=\"\" id=\"password\" name =\"password\"/></td>
                                    <td style = \"color :red\">
                                        ";
        // line 205
        if (array_key_exists("errorLength", $context)) {
            // line 206
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["errorLength"]) ? $context["errorLength"] : $this->getContext($context, "errorLength")), "html", null, true);
            echo "
                                        ";
        }
        // line 208
        echo "
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Confirm</th>
                                    <td><input type=\"password\" placeholder=\"Password\" required=\"\" id=\"confirm\" name =\"confirm\"/></td>
                                    <td style = \"color :red\">
                                        ";
        // line 216
        if (array_key_exists("errorSame", $context)) {
            // line 217
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["errorSame"]) ? $context["errorSame"] : $this->getContext($context, "errorSame")), "html", null, true);
            echo "
                                        ";
        }
        // line 219
        echo "                                    </td>
                                </tr>
                                ";
        // line 221
        if (array_key_exists("msg", $context)) {
            // line 222
            echo "                                <tr>
                                    <td></td>
                                    <td style = \"color :green\">
                                        
                                            ";
            // line 226
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
                                        
                                    </td>
                                </tr>
                                ";
        }
        // line 231
        echo "                            </table> 
                            <div id = \"btnLogin\">
                                <!--<input type=\"submit\" value=\"Submit\" style=\" margin-bottom: 5px;  margin-top: 10px;\"/>-->
                                <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary btn-mn active btnRegister\"/>
                            </div>
                        </form><!-- form -->    
                         

                            <br>
                            
                            
                            
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
        return "AcmeDemoBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 231,  407 => 226,  401 => 222,  399 => 221,  395 => 219,  389 => 217,  387 => 216,  377 => 208,  371 => 206,  369 => 205,  358 => 197,  326 => 167,  319 => 165,  312 => 162,  310 => 161,  304 => 158,  300 => 157,  295 => 154,  290 => 152,  285 => 151,  280 => 149,  275 => 148,  273 => 147,  266 => 143,  262 => 142,  255 => 138,  251 => 137,  244 => 133,  240 => 132,  233 => 128,  224 => 122,  220 => 121,  213 => 117,  205 => 112,  201 => 111,  194 => 107,  187 => 102,  182 => 100,  177 => 99,  172 => 97,  167 => 96,  165 => 95,  158 => 91,  119 => 54,  116 => 53,  104 => 44,  100 => 42,  93 => 39,  91 => 38,  86 => 35,  79 => 32,  73 => 29,  69 => 28,  63 => 25,  58 => 22,  51 => 20,  44 => 17,  42 => 16,  32 => 8,  29 => 7,);
    }
}
