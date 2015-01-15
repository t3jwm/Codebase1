<?php

/* AcmeDemoBundle:User:table.html.twig */
class __TwigTemplate_571310ae1d5eed9dc4370b3fc2b3b54b9a22bbf8b534cbf92f29033288294a91 extends Twig_Template
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
                        <li><a class=\"ajax-link\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_home");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Dashboard</span></a>
                        </li>                       
                        -->
                        <li><a class=\"ajax-link\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pnc_management_userprofile");
        echo "\"><i
                                    class=\"glyphicon glyphicon-edit\"></i><span> Profile</span></a></li>
                        
                        <li><a class=\"ajax-link\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i><span> Gallery</span></a>
                        </li>

                        
                        ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "isAdmin"), "method") == 1)) {
            // line 27
            echo "                        <li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_table");
            echo "\"><i
                                    class=\"glyphicon glyphicon-align-justify\"></i><span> Users Table </span></a></li>
                        ";
        }
        // line 30
        echo "
                                                                                                                                          
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("pnc_management_homepage");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i><span> Logout </span></a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"row\">
    <div class=\"box col-md-12\">
    <div class=\"box-inner\">
    <div class=\"box-header well\" data-original-title=\"\">
        <h2><i class=\"glyphicon glyphicon-user\"></i> Datatable + Responsive</h2>

        <div class=\"box-icon\">
            <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i class=\"glyphicon glyphicon-cog\"></i></a>
            <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                    class=\"glyphicon glyphicon-chevron-up\"></i></a>
            <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i class=\"glyphicon glyphicon-remove\"></i></a>
        </div>
    </div>
    <div class=\"box-content\">
    
    
    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <!--<th>Password</th>-->
        <th>LastName</th>
        <th>FirstName</th>
        <th>Language</th>
        <th>IsAdmin</th>
        
    </tr>
    </thead>
    <tbody>
    
    
        ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 77
            echo "        <tr>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td class=\"center\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userName"), "html", null, true);
            echo "</td>
            <td class=\"center\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
            <!--<td class=\"center\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
            echo "</td>-->
            <td class=\"center\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName"), "html", null, true);
            echo "</td>
            <td class=\"center\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName"), "html", null, true);
            echo "</td>
            <td class=\"center\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "language"), "html", null, true);
            echo "</td>
            <td class=\"center\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isAdmin"), "html", null, true);
            echo "</td>
                              
            <td class=\"center\">
            <!--<a class=\"btn btn-success\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>
            View
            </a>-->
            <a class=\"btn btn-info\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-edit icon-white\"></i>
            Edit
            </a>
            <a class=\"btn btn-danger\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" 
             onclick=\"return confirm('Are you sure you want to delete this user ?')\" >
            <i class=\"glyphicon glyphicon-trash icon-white\"></i>
            Delete
            </a>
            <a class=\"btn btn-success\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_manageGallery", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-picture\"></i>
            View Imgs
            </a>
            </td>


        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
    </tbody>
    </table>
            <a class=\"btn btn-primary\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("admin_new");
        echo "\">           
            <i class=\"glyphicon glyphicon-user\"></i>
            Create
            </a>
    </div>
    </div>
    </div>
    

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 113,  202 => 110,  187 => 101,  179 => 96,  172 => 92,  165 => 88,  159 => 85,  155 => 84,  151 => 83,  147 => 82,  143 => 81,  139 => 80,  135 => 79,  131 => 78,  128 => 77,  124 => 76,  89 => 43,  86 => 42,  74 => 32,  70 => 30,  63 => 27,  61 => 26,  54 => 22,  48 => 19,  42 => 16,  32 => 8,  29 => 7,);
    }
}
