<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_74c40c856dd6e3c76d86806a74f50aff6b797b83e9705659d1e1d9785ae863f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aabc173694418fa105db50262f501cc8551132d9103fdb5750ff18d1d4a971e = $this->env->getExtension("native_profiler");
        $__internal_3aabc173694418fa105db50262f501cc8551132d9103fdb5750ff18d1d4a971e->enter($__internal_3aabc173694418fa105db50262f501cc8551132d9103fdb5750ff18d1d4a971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_3aabc173694418fa105db50262f501cc8551132d9103fdb5750ff18d1d4a971e->leave($__internal_3aabc173694418fa105db50262f501cc8551132d9103fdb5750ff18d1d4a971e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_8e24cdb54225320b5b2f56ea2bf8e6de69cf396aa3cdc81d09fc49a5e281a1fd = $this->env->getExtension("native_profiler");
        $__internal_8e24cdb54225320b5b2f56ea2bf8e6de69cf396aa3cdc81d09fc49a5e281a1fd->enter($__internal_8e24cdb54225320b5b2f56ea2bf8e6de69cf396aa3cdc81d09fc49a5e281a1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_8e24cdb54225320b5b2f56ea2bf8e6de69cf396aa3cdc81d09fc49a5e281a1fd->leave($__internal_8e24cdb54225320b5b2f56ea2bf8e6de69cf396aa3cdc81d09fc49a5e281a1fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
