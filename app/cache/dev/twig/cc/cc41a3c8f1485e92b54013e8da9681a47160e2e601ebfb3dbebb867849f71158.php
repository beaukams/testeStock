<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0ba3ec9cfb9232cb306acb26eb6ab2485c709d9fb38019d88a2f0c7c4b726687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e91a1dc7a5dc4e9b6346d4514e9d1a57b418e07ef5cc381e570a5d842d31d2e1 = $this->env->getExtension("native_profiler");
        $__internal_e91a1dc7a5dc4e9b6346d4514e9d1a57b418e07ef5cc381e570a5d842d31d2e1->enter($__internal_e91a1dc7a5dc4e9b6346d4514e9d1a57b418e07ef5cc381e570a5d842d31d2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e91a1dc7a5dc4e9b6346d4514e9d1a57b418e07ef5cc381e570a5d842d31d2e1->leave($__internal_e91a1dc7a5dc4e9b6346d4514e9d1a57b418e07ef5cc381e570a5d842d31d2e1_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_786a9aff7eb7acb3d1890ce6f3f00521c6f9dd1ed7feb5412e0043e53421ddb8 = $this->env->getExtension("native_profiler");
        $__internal_786a9aff7eb7acb3d1890ce6f3f00521c6f9dd1ed7feb5412e0043e53421ddb8->enter($__internal_786a9aff7eb7acb3d1890ce6f3f00521c6f9dd1ed7feb5412e0043e53421ddb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_786a9aff7eb7acb3d1890ce6f3f00521c6f9dd1ed7feb5412e0043e53421ddb8->leave($__internal_786a9aff7eb7acb3d1890ce6f3f00521c6f9dd1ed7feb5412e0043e53421ddb8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f8b8274dffe9a1ea359603e01856b7fd258aaa191273737683a8ef51fbdfd7b4 = $this->env->getExtension("native_profiler");
        $__internal_f8b8274dffe9a1ea359603e01856b7fd258aaa191273737683a8ef51fbdfd7b4->enter($__internal_f8b8274dffe9a1ea359603e01856b7fd258aaa191273737683a8ef51fbdfd7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f8b8274dffe9a1ea359603e01856b7fd258aaa191273737683a8ef51fbdfd7b4->leave($__internal_f8b8274dffe9a1ea359603e01856b7fd258aaa191273737683a8ef51fbdfd7b4_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5ae584af54dca65f3a1732979f32d9faa625e284ba12517faeb43103405eef45 = $this->env->getExtension("native_profiler");
        $__internal_5ae584af54dca65f3a1732979f32d9faa625e284ba12517faeb43103405eef45->enter($__internal_5ae584af54dca65f3a1732979f32d9faa625e284ba12517faeb43103405eef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ae584af54dca65f3a1732979f32d9faa625e284ba12517faeb43103405eef45->leave($__internal_5ae584af54dca65f3a1732979f32d9faa625e284ba12517faeb43103405eef45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
