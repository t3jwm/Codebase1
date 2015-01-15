<?php

/* AcmeDemoBundle:Account:show.html.twig */
class __TwigTemplate_982b63f23de72ec8ae92c0bf0c402356f88639294e5b2f914ac8734e7953a08b extends Twig_Template
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
        echo " ";
        if (array_key_exists("filePaths", $context)) {
            // line 2
            echo " ";
            if (((isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage")) >= 0)) {
                // line 3
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 4
                    echo "
<div class=\"img\">
\t\t<img width=\"100\" height=\"100\" onclick = \"editImage('";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo ".json')\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array")), "html", null, true);
                    echo ".jpeg?";
                    echo twig_escape_filter($this->env, twig_random($this->env, 1000), "html", null, true);
                    echo " \" />
\t <div class=\"desc\">";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nameImages"]) ? $context["nameImages"] : $this->getContext($context, "nameImages")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo " </div>
</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Account:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  41 => 7,  33 => 6,  29 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
