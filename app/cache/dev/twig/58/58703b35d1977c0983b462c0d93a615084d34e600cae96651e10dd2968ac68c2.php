<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_578ce0a331281587bf7f562ca2c07d1aaedc9d07211cbce375f38dfa5106567d extends Twig_Template
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
        $__internal_493ac65f4a070b5a020ee7df63dd0f5b8a3259811ff1244ff89869012b0ba4f3 = $this->env->getExtension("native_profiler");
        $__internal_493ac65f4a070b5a020ee7df63dd0f5b8a3259811ff1244ff89869012b0ba4f3->enter($__internal_493ac65f4a070b5a020ee7df63dd0f5b8a3259811ff1244ff89869012b0ba4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_493ac65f4a070b5a020ee7df63dd0f5b8a3259811ff1244ff89869012b0ba4f3->leave($__internal_493ac65f4a070b5a020ee7df63dd0f5b8a3259811ff1244ff89869012b0ba4f3_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_18256463a9caea6fb2cd738b7330d40993a027f2ec7f7327bd38f361014479fe = $this->env->getExtension("native_profiler");
        $__internal_18256463a9caea6fb2cd738b7330d40993a027f2ec7f7327bd38f361014479fe->enter($__internal_18256463a9caea6fb2cd738b7330d40993a027f2ec7f7327bd38f361014479fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_18256463a9caea6fb2cd738b7330d40993a027f2ec7f7327bd38f361014479fe->leave($__internal_18256463a9caea6fb2cd738b7330d40993a027f2ec7f7327bd38f361014479fe_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9008e3e0e711316f7575c194b5bb5752a4ee88c4e25d813872462614a2a2e7be = $this->env->getExtension("native_profiler");
        $__internal_9008e3e0e711316f7575c194b5bb5752a4ee88c4e25d813872462614a2a2e7be->enter($__internal_9008e3e0e711316f7575c194b5bb5752a4ee88c4e25d813872462614a2a2e7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9008e3e0e711316f7575c194b5bb5752a4ee88c4e25d813872462614a2a2e7be->leave($__internal_9008e3e0e711316f7575c194b5bb5752a4ee88c4e25d813872462614a2a2e7be_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cafeb46cfb807acf050d864c4d058ce2184c6e2501d5272f76e160816f86a64f = $this->env->getExtension("native_profiler");
        $__internal_cafeb46cfb807acf050d864c4d058ce2184c6e2501d5272f76e160816f86a64f->enter($__internal_cafeb46cfb807acf050d864c4d058ce2184c6e2501d5272f76e160816f86a64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cafeb46cfb807acf050d864c4d058ce2184c6e2501d5272f76e160816f86a64f->leave($__internal_cafeb46cfb807acf050d864c4d058ce2184c6e2501d5272f76e160816f86a64f_prof);

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
