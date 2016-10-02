<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_4f852d9188ecda6ce735afce9a8b83b660661b6c3d12e2f6f4f851bfe17c40ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db8755d23965dfe49f8c592c9e2fdc4e47e48766b0f00df3e546ab2883af5b07 = $this->env->getExtension("native_profiler");
        $__internal_db8755d23965dfe49f8c592c9e2fdc4e47e48766b0f00df3e546ab2883af5b07->enter($__internal_db8755d23965dfe49f8c592c9e2fdc4e47e48766b0f00df3e546ab2883af5b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8755d23965dfe49f8c592c9e2fdc4e47e48766b0f00df3e546ab2883af5b07->leave($__internal_db8755d23965dfe49f8c592c9e2fdc4e47e48766b0f00df3e546ab2883af5b07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
