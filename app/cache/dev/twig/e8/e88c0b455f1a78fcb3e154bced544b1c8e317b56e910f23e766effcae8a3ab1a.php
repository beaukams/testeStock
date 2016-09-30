<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_611e10fea68f34c5c68328176c62b737d3a4e18a95cb2816d53b7d51a02bb49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac224e332fa0d0e942267e5fed3a745dc600e4ef5d31c4e2d2e861d420298cd7 = $this->env->getExtension("native_profiler");
        $__internal_ac224e332fa0d0e942267e5fed3a745dc600e4ef5d31c4e2d2e861d420298cd7->enter($__internal_ac224e332fa0d0e942267e5fed3a745dc600e4ef5d31c4e2d2e861d420298cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac224e332fa0d0e942267e5fed3a745dc600e4ef5d31c4e2d2e861d420298cd7->leave($__internal_ac224e332fa0d0e942267e5fed3a745dc600e4ef5d31c4e2d2e861d420298cd7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_452e0197cc2fd6a53b05ce0cfba9c65fd8d13e3bb7356aa771fe1683ad780687 = $this->env->getExtension("native_profiler");
        $__internal_452e0197cc2fd6a53b05ce0cfba9c65fd8d13e3bb7356aa771fe1683ad780687->enter($__internal_452e0197cc2fd6a53b05ce0cfba9c65fd8d13e3bb7356aa771fe1683ad780687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_452e0197cc2fd6a53b05ce0cfba9c65fd8d13e3bb7356aa771fe1683ad780687->leave($__internal_452e0197cc2fd6a53b05ce0cfba9c65fd8d13e3bb7356aa771fe1683ad780687_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
