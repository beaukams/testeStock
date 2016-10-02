<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_3be6e300e53a1c04cf543463f98c3e36cd562b603ff1fc5bce5e81693084c29b extends Twig_Template
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
        $__internal_4c9c6a1e3cdd326ace1998c39634fd8ed7eee97908ff3153848ba21f6709cfcb = $this->env->getExtension("native_profiler");
        $__internal_4c9c6a1e3cdd326ace1998c39634fd8ed7eee97908ff3153848ba21f6709cfcb->enter($__internal_4c9c6a1e3cdd326ace1998c39634fd8ed7eee97908ff3153848ba21f6709cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9c6a1e3cdd326ace1998c39634fd8ed7eee97908ff3153848ba21f6709cfcb->leave($__internal_4c9c6a1e3cdd326ace1998c39634fd8ed7eee97908ff3153848ba21f6709cfcb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87a3b3e5f23bafada2fe9896b1e0ed0c43715bbb55df1f3ef315778debbc2682 = $this->env->getExtension("native_profiler");
        $__internal_87a3b3e5f23bafada2fe9896b1e0ed0c43715bbb55df1f3ef315778debbc2682->enter($__internal_87a3b3e5f23bafada2fe9896b1e0ed0c43715bbb55df1f3ef315778debbc2682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_87a3b3e5f23bafada2fe9896b1e0ed0c43715bbb55df1f3ef315778debbc2682->leave($__internal_87a3b3e5f23bafada2fe9896b1e0ed0c43715bbb55df1f3ef315778debbc2682_prof);

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
