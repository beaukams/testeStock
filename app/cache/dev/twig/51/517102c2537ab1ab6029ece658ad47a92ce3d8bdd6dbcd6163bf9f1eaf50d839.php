<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_2f03acbae72f4126ec35760ef9525a75fa261357b04eddeaa92aab73bd8e5347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50e5c161f1f371e5ddae3090f6327911ccad889086f1797fae6133a1589a73f1 = $this->env->getExtension("native_profiler");
        $__internal_50e5c161f1f371e5ddae3090f6327911ccad889086f1797fae6133a1589a73f1->enter($__internal_50e5c161f1f371e5ddae3090f6327911ccad889086f1797fae6133a1589a73f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e5c161f1f371e5ddae3090f6327911ccad889086f1797fae6133a1589a73f1->leave($__internal_50e5c161f1f371e5ddae3090f6327911ccad889086f1797fae6133a1589a73f1_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c0b669f3af0bff2ba4a70bb7beecbe10c635fad4453362c1b731be53c0e4fad6 = $this->env->getExtension("native_profiler");
        $__internal_c0b669f3af0bff2ba4a70bb7beecbe10c635fad4453362c1b731be53c0e4fad6->enter($__internal_c0b669f3af0bff2ba4a70bb7beecbe10c635fad4453362c1b731be53c0e4fad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c0b669f3af0bff2ba4a70bb7beecbe10c635fad4453362c1b731be53c0e4fad6->leave($__internal_c0b669f3af0bff2ba4a70bb7beecbe10c635fad4453362c1b731be53c0e4fad6_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e09ea5e15cc08225bb55ec6d5cc122185ad3c52407d84ee0e78a175ab5fb752c = $this->env->getExtension("native_profiler");
        $__internal_e09ea5e15cc08225bb55ec6d5cc122185ad3c52407d84ee0e78a175ab5fb752c->enter($__internal_e09ea5e15cc08225bb55ec6d5cc122185ad3c52407d84ee0e78a175ab5fb752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_e09ea5e15cc08225bb55ec6d5cc122185ad3c52407d84ee0e78a175ab5fb752c->leave($__internal_e09ea5e15cc08225bb55ec6d5cc122185ad3c52407d84ee0e78a175ab5fb752c_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ba0951d031014527d287b4bba56965e88ea0144a4344622100b782703bf40835 = $this->env->getExtension("native_profiler");
        $__internal_ba0951d031014527d287b4bba56965e88ea0144a4344622100b782703bf40835->enter($__internal_ba0951d031014527d287b4bba56965e88ea0144a4344622100b782703bf40835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ba0951d031014527d287b4bba56965e88ea0144a4344622100b782703bf40835->leave($__internal_ba0951d031014527d287b4bba56965e88ea0144a4344622100b782703bf40835_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_79d783d66f9816826909f0d889c0b2983c36caa23154c095cb7e3fb75c6be5bc = $this->env->getExtension("native_profiler");
        $__internal_79d783d66f9816826909f0d889c0b2983c36caa23154c095cb7e3fb75c6be5bc->enter($__internal_79d783d66f9816826909f0d889c0b2983c36caa23154c095cb7e3fb75c6be5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_79d783d66f9816826909f0d889c0b2983c36caa23154c095cb7e3fb75c6be5bc->leave($__internal_79d783d66f9816826909f0d889c0b2983c36caa23154c095cb7e3fb75c6be5bc_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_838a764a890f3041d8edd8d437aadb4d1370f844363a08cd100e8b89a33c8fca = $this->env->getExtension("native_profiler");
        $__internal_838a764a890f3041d8edd8d437aadb4d1370f844363a08cd100e8b89a33c8fca->enter($__internal_838a764a890f3041d8edd8d437aadb4d1370f844363a08cd100e8b89a33c8fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_838a764a890f3041d8edd8d437aadb4d1370f844363a08cd100e8b89a33c8fca->leave($__internal_838a764a890f3041d8edd8d437aadb4d1370f844363a08cd100e8b89a33c8fca_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
    }
}
/* {% extends base_template %}*/
/* */
/* {% block sonata_nav %}*/
/* {% endblock sonata_nav %}*/
/* */
/* {% block logo %}*/
/* {% endblock logo %}*/
/* */
/* {% block sonata_left_side %}*/
/* {% endblock sonata_left_side %}*/
/* */
/* {% block body_attributes %}class="sonata-bc login-page"{% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="{{ path('sonata_admin_dashboard') }}">*/
/*                 {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                     <span>{{ admin_pool.title }}</span>*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="login-box-body">*/
/*             <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/*             <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
