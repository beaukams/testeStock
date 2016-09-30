<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_abab9943e234e82fbba5943757daf4027e352ded17ab04bb470e0e34cb333b63 extends Twig_Template
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
        $__internal_85e426189ffc34fcc5782b12aa5efa7670dd68c0c8ff84e0ebd43333223abbfa = $this->env->getExtension("native_profiler");
        $__internal_85e426189ffc34fcc5782b12aa5efa7670dd68c0c8ff84e0ebd43333223abbfa->enter($__internal_85e426189ffc34fcc5782b12aa5efa7670dd68c0c8ff84e0ebd43333223abbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e426189ffc34fcc5782b12aa5efa7670dd68c0c8ff84e0ebd43333223abbfa->leave($__internal_85e426189ffc34fcc5782b12aa5efa7670dd68c0c8ff84e0ebd43333223abbfa_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d2b154e7d49fd2af0075c54fe745e5e6b0db742255bb7280fc2306ea4e0d1121 = $this->env->getExtension("native_profiler");
        $__internal_d2b154e7d49fd2af0075c54fe745e5e6b0db742255bb7280fc2306ea4e0d1121->enter($__internal_d2b154e7d49fd2af0075c54fe745e5e6b0db742255bb7280fc2306ea4e0d1121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d2b154e7d49fd2af0075c54fe745e5e6b0db742255bb7280fc2306ea4e0d1121->leave($__internal_d2b154e7d49fd2af0075c54fe745e5e6b0db742255bb7280fc2306ea4e0d1121_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3f6180a478a394e876df59db0b2eaed8ff2126682a7ee43f3b9e2f98eb4f4d2a = $this->env->getExtension("native_profiler");
        $__internal_3f6180a478a394e876df59db0b2eaed8ff2126682a7ee43f3b9e2f98eb4f4d2a->enter($__internal_3f6180a478a394e876df59db0b2eaed8ff2126682a7ee43f3b9e2f98eb4f4d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3f6180a478a394e876df59db0b2eaed8ff2126682a7ee43f3b9e2f98eb4f4d2a->leave($__internal_3f6180a478a394e876df59db0b2eaed8ff2126682a7ee43f3b9e2f98eb4f4d2a_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_32d01f822985019943e16dc7b738c8458f1750f727c24e4947f1d60c4f73fcf3 = $this->env->getExtension("native_profiler");
        $__internal_32d01f822985019943e16dc7b738c8458f1750f727c24e4947f1d60c4f73fcf3->enter($__internal_32d01f822985019943e16dc7b738c8458f1750f727c24e4947f1d60c4f73fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_32d01f822985019943e16dc7b738c8458f1750f727c24e4947f1d60c4f73fcf3->leave($__internal_32d01f822985019943e16dc7b738c8458f1750f727c24e4947f1d60c4f73fcf3_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_414cb277eda6b908991f423dc6f60f85d33bff8b48202145387d41519e0b047e = $this->env->getExtension("native_profiler");
        $__internal_414cb277eda6b908991f423dc6f60f85d33bff8b48202145387d41519e0b047e->enter($__internal_414cb277eda6b908991f423dc6f60f85d33bff8b48202145387d41519e0b047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_414cb277eda6b908991f423dc6f60f85d33bff8b48202145387d41519e0b047e->leave($__internal_414cb277eda6b908991f423dc6f60f85d33bff8b48202145387d41519e0b047e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_49a8ea03f54aaf062c20545a865dcc1c8ee838803e51fae4b4d7b5d39ab33506 = $this->env->getExtension("native_profiler");
        $__internal_49a8ea03f54aaf062c20545a865dcc1c8ee838803e51fae4b4d7b5d39ab33506->enter($__internal_49a8ea03f54aaf062c20545a865dcc1c8ee838803e51fae4b4d7b5d39ab33506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_49a8ea03f54aaf062c20545a865dcc1c8ee838803e51fae4b4d7b5d39ab33506->leave($__internal_49a8ea03f54aaf062c20545a865dcc1c8ee838803e51fae4b4d7b5d39ab33506_prof);

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
