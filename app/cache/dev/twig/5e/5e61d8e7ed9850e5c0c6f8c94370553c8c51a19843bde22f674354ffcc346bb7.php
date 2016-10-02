<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_d6ddf5ecdbdb094076c6cbfafff4b80e68525080f311a29561961b6ffa93a8f6 extends Twig_Template
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
        $__internal_bd8f6f2c8fa3de9c6f2cee2515a8cd7a5642ed67ac6e1bc8e5fa8e418ccde84b = $this->env->getExtension("native_profiler");
        $__internal_bd8f6f2c8fa3de9c6f2cee2515a8cd7a5642ed67ac6e1bc8e5fa8e418ccde84b->enter($__internal_bd8f6f2c8fa3de9c6f2cee2515a8cd7a5642ed67ac6e1bc8e5fa8e418ccde84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>";
        
        $__internal_bd8f6f2c8fa3de9c6f2cee2515a8cd7a5642ed67ac6e1bc8e5fa8e418ccde84b->leave($__internal_bd8f6f2c8fa3de9c6f2cee2515a8cd7a5642ed67ac6e1bc8e5fa8e418ccde84b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <a class="btn btn-link btn-flat" href="{{ action.url }}">*/
/*     <i class="fa fa-{{ action.icon }}"></i>*/
/*     {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}*/
/* </a>*/
