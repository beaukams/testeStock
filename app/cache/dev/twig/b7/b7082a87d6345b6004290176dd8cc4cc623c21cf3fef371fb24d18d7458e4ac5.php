<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e6b85f1309fb58c518016a9ba40aa2e19d4555479fa774b8382ecddd92511106 extends Twig_Template
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
        $__internal_d4bea38aee9a2b665c2f8096bdb4057762955ef8f790ba4e911d671bb29f6599 = $this->env->getExtension("native_profiler");
        $__internal_d4bea38aee9a2b665c2f8096bdb4057762955ef8f790ba4e911d671bb29f6599->enter($__internal_d4bea38aee9a2b665c2f8096bdb4057762955ef8f790ba4e911d671bb29f6599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4bea38aee9a2b665c2f8096bdb4057762955ef8f790ba4e911d671bb29f6599->leave($__internal_d4bea38aee9a2b665c2f8096bdb4057762955ef8f790ba4e911d671bb29f6599_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c877906d5f172f2ad11a638fbf1d4ce7bffe277a7029446e9a714ee780c513b = $this->env->getExtension("native_profiler");
        $__internal_0c877906d5f172f2ad11a638fbf1d4ce7bffe277a7029446e9a714ee780c513b->enter($__internal_0c877906d5f172f2ad11a638fbf1d4ce7bffe277a7029446e9a714ee780c513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c877906d5f172f2ad11a638fbf1d4ce7bffe277a7029446e9a714ee780c513b->leave($__internal_0c877906d5f172f2ad11a638fbf1d4ce7bffe277a7029446e9a714ee780c513b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abc94be2d3c5413df2898fff484c77f633d5aea2c77e89f75925d45eec3351b1 = $this->env->getExtension("native_profiler");
        $__internal_abc94be2d3c5413df2898fff484c77f633d5aea2c77e89f75925d45eec3351b1->enter($__internal_abc94be2d3c5413df2898fff484c77f633d5aea2c77e89f75925d45eec3351b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abc94be2d3c5413df2898fff484c77f633d5aea2c77e89f75925d45eec3351b1->leave($__internal_abc94be2d3c5413df2898fff484c77f633d5aea2c77e89f75925d45eec3351b1_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9803d4ae3e44effcf000cca3c807626ca0895ccbc53eb7ef1dd861187149d4fe = $this->env->getExtension("native_profiler");
        $__internal_9803d4ae3e44effcf000cca3c807626ca0895ccbc53eb7ef1dd861187149d4fe->enter($__internal_9803d4ae3e44effcf000cca3c807626ca0895ccbc53eb7ef1dd861187149d4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9803d4ae3e44effcf000cca3c807626ca0895ccbc53eb7ef1dd861187149d4fe->leave($__internal_9803d4ae3e44effcf000cca3c807626ca0895ccbc53eb7ef1dd861187149d4fe_prof);

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
