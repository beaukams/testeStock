<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8c6960948f5ac7f0f50102dace12a47eaaebad8ca2b6b77314bb3d78128199fa extends Twig_Template
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
        $__internal_725c74c4a95e189b3d77bbbfe6811a259997ca1a7ea4a6c5cd7781dda941f7dd = $this->env->getExtension("native_profiler");
        $__internal_725c74c4a95e189b3d77bbbfe6811a259997ca1a7ea4a6c5cd7781dda941f7dd->enter($__internal_725c74c4a95e189b3d77bbbfe6811a259997ca1a7ea4a6c5cd7781dda941f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_725c74c4a95e189b3d77bbbfe6811a259997ca1a7ea4a6c5cd7781dda941f7dd->leave($__internal_725c74c4a95e189b3d77bbbfe6811a259997ca1a7ea4a6c5cd7781dda941f7dd_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88f05fb7acaff6f3ee5cc1d9d1783601810f2b057b9764840f24e7f88974305b = $this->env->getExtension("native_profiler");
        $__internal_88f05fb7acaff6f3ee5cc1d9d1783601810f2b057b9764840f24e7f88974305b->enter($__internal_88f05fb7acaff6f3ee5cc1d9d1783601810f2b057b9764840f24e7f88974305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_88f05fb7acaff6f3ee5cc1d9d1783601810f2b057b9764840f24e7f88974305b->leave($__internal_88f05fb7acaff6f3ee5cc1d9d1783601810f2b057b9764840f24e7f88974305b_prof);

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
