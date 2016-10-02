<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e03a93812dcf88cec3bbd9107f57a525b6f4bead71e0be145691dde9f9deb7d6 extends Twig_Template
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
        $__internal_5c2a950bd20f324f40aef0a24cd285a36de104f9e652de8bfbee08c4f4d4f51a = $this->env->getExtension("native_profiler");
        $__internal_5c2a950bd20f324f40aef0a24cd285a36de104f9e652de8bfbee08c4f4d4f51a->enter($__internal_5c2a950bd20f324f40aef0a24cd285a36de104f9e652de8bfbee08c4f4d4f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5c2a950bd20f324f40aef0a24cd285a36de104f9e652de8bfbee08c4f4d4f51a->leave($__internal_5c2a950bd20f324f40aef0a24cd285a36de104f9e652de8bfbee08c4f4d4f51a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_89eaf748312691389238a0bd0bf8ac13e9c325c8719c50491518de1d4ffe8ca8 = $this->env->getExtension("native_profiler");
        $__internal_89eaf748312691389238a0bd0bf8ac13e9c325c8719c50491518de1d4ffe8ca8->enter($__internal_89eaf748312691389238a0bd0bf8ac13e9c325c8719c50491518de1d4ffe8ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_89eaf748312691389238a0bd0bf8ac13e9c325c8719c50491518de1d4ffe8ca8->leave($__internal_89eaf748312691389238a0bd0bf8ac13e9c325c8719c50491518de1d4ffe8ca8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1d42184fa525424332e9b41be045d339a8091a835b10f52df7684ee9bec09e40 = $this->env->getExtension("native_profiler");
        $__internal_1d42184fa525424332e9b41be045d339a8091a835b10f52df7684ee9bec09e40->enter($__internal_1d42184fa525424332e9b41be045d339a8091a835b10f52df7684ee9bec09e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1d42184fa525424332e9b41be045d339a8091a835b10f52df7684ee9bec09e40->leave($__internal_1d42184fa525424332e9b41be045d339a8091a835b10f52df7684ee9bec09e40_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_26e12960dc2268bdf4acef5db5f4050e52df1dece2b63f164a68af6d17fdae68 = $this->env->getExtension("native_profiler");
        $__internal_26e12960dc2268bdf4acef5db5f4050e52df1dece2b63f164a68af6d17fdae68->enter($__internal_26e12960dc2268bdf4acef5db5f4050e52df1dece2b63f164a68af6d17fdae68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_26e12960dc2268bdf4acef5db5f4050e52df1dece2b63f164a68af6d17fdae68->leave($__internal_26e12960dc2268bdf4acef5db5f4050e52df1dece2b63f164a68af6d17fdae68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
