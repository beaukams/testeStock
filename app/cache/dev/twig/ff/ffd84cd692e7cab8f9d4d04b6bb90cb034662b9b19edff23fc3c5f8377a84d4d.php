<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ec5815f6d579289f02fb4eca536e118a03937b64c213d3dacb2806cc61b15e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e28ab2f179676142648259e6d06a8e6d58d13f61a90c3ff6e1f3b84a6058c7 = $this->env->getExtension("native_profiler");
        $__internal_49e28ab2f179676142648259e6d06a8e6d58d13f61a90c3ff6e1f3b84a6058c7->enter($__internal_49e28ab2f179676142648259e6d06a8e6d58d13f61a90c3ff6e1f3b84a6058c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_49e28ab2f179676142648259e6d06a8e6d58d13f61a90c3ff6e1f3b84a6058c7->leave($__internal_49e28ab2f179676142648259e6d06a8e6d58d13f61a90c3ff6e1f3b84a6058c7_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33a23f6a61c942289f80c16ffd12f29cad96a8ed9674e3ad2bbc813d9a9c15d3 = $this->env->getExtension("native_profiler");
        $__internal_33a23f6a61c942289f80c16ffd12f29cad96a8ed9674e3ad2bbc813d9a9c15d3->enter($__internal_33a23f6a61c942289f80c16ffd12f29cad96a8ed9674e3ad2bbc813d9a9c15d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_33a23f6a61c942289f80c16ffd12f29cad96a8ed9674e3ad2bbc813d9a9c15d3->leave($__internal_33a23f6a61c942289f80c16ffd12f29cad96a8ed9674e3ad2bbc813d9a9c15d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
