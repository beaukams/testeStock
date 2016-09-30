<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_4370ccd2aed8eb2e6f98acdc6de958796cdb1b62eaefe9e3850a4e93dd494451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_845d6fff39578f9f5d9c0c7aafbbcd987da505c81f5ade456b3e5d1701b33471 = $this->env->getExtension("native_profiler");
        $__internal_845d6fff39578f9f5d9c0c7aafbbcd987da505c81f5ade456b3e5d1701b33471->enter($__internal_845d6fff39578f9f5d9c0c7aafbbcd987da505c81f5ade456b3e5d1701b33471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845d6fff39578f9f5d9c0c7aafbbcd987da505c81f5ade456b3e5d1701b33471->leave($__internal_845d6fff39578f9f5d9c0c7aafbbcd987da505c81f5ade456b3e5d1701b33471_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a183a658b56aadb5adfbc991cdb602ccf068a52d35a4b562777ee95c8aa3a9de = $this->env->getExtension("native_profiler");
        $__internal_a183a658b56aadb5adfbc991cdb602ccf068a52d35a4b562777ee95c8aa3a9de->enter($__internal_a183a658b56aadb5adfbc991cdb602ccf068a52d35a4b562777ee95c8aa3a9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a183a658b56aadb5adfbc991cdb602ccf068a52d35a4b562777ee95c8aa3a9de->leave($__internal_a183a658b56aadb5adfbc991cdb602ccf068a52d35a4b562777ee95c8aa3a9de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
