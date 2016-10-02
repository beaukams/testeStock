<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_ab5ebab48dbd7225d1c69dc75b58d9dda561ca77bb59cc040a680bc5681b298a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b4db524104d9974c261456bf213b29a2cf8ce2dddf7731fc13afbe5e58fc7e4 = $this->env->getExtension("native_profiler");
        $__internal_7b4db524104d9974c261456bf213b29a2cf8ce2dddf7731fc13afbe5e58fc7e4->enter($__internal_7b4db524104d9974c261456bf213b29a2cf8ce2dddf7731fc13afbe5e58fc7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b4db524104d9974c261456bf213b29a2cf8ce2dddf7731fc13afbe5e58fc7e4->leave($__internal_7b4db524104d9974c261456bf213b29a2cf8ce2dddf7731fc13afbe5e58fc7e4_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_35c5638ca760b5f065e106bef732d4e8a98e1a51d56e016afc102372dd366a72 = $this->env->getExtension("native_profiler");
        $__internal_35c5638ca760b5f065e106bef732d4e8a98e1a51d56e016afc102372dd366a72->enter($__internal_35c5638ca760b5f065e106bef732d4e8a98e1a51d56e016afc102372dd366a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_35c5638ca760b5f065e106bef732d4e8a98e1a51d56e016afc102372dd366a72->leave($__internal_35c5638ca760b5f065e106bef732d4e8a98e1a51d56e016afc102372dd366a72_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_76b4cac26e7e764abcfcf072766946664d9cfbd0daebbc80a7025e9c6b7a35b2 = $this->env->getExtension("native_profiler");
        $__internal_76b4cac26e7e764abcfcf072766946664d9cfbd0daebbc80a7025e9c6b7a35b2->enter($__internal_76b4cac26e7e764abcfcf072766946664d9cfbd0daebbc80a7025e9c6b7a35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_76b4cac26e7e764abcfcf072766946664d9cfbd0daebbc80a7025e9c6b7a35b2->leave($__internal_76b4cac26e7e764abcfcf072766946664d9cfbd0daebbc80a7025e9c6b7a35b2_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d0487921ff88ea79f96a6a5a0f1cd560d273e83ac122fc3cdb9943a380e54b5d = $this->env->getExtension("native_profiler");
        $__internal_d0487921ff88ea79f96a6a5a0f1cd560d273e83ac122fc3cdb9943a380e54b5d->enter($__internal_d0487921ff88ea79f96a6a5a0f1cd560d273e83ac122fc3cdb9943a380e54b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d0487921ff88ea79f96a6a5a0f1cd560d273e83ac122fc3cdb9943a380e54b5d->leave($__internal_d0487921ff88ea79f96a6a5a0f1cd560d273e83ac122fc3cdb9943a380e54b5d_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_99ddf3ccc0e4364cfab3a760f5d36bf4fdd169065918852e9fa58458c4c13e6a = $this->env->getExtension("native_profiler");
        $__internal_99ddf3ccc0e4364cfab3a760f5d36bf4fdd169065918852e9fa58458c4c13e6a->enter($__internal_99ddf3ccc0e4364cfab3a760f5d36bf4fdd169065918852e9fa58458c4c13e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_99ddf3ccc0e4364cfab3a760f5d36bf4fdd169065918852e9fa58458c4c13e6a->leave($__internal_99ddf3ccc0e4364cfab3a760f5d36bf4fdd169065918852e9fa58458c4c13e6a_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_80ff2ca13e7aba8ec437b380936253c5729da99c62801c6d91e2188c61e4eb14 = $this->env->getExtension("native_profiler");
        $__internal_80ff2ca13e7aba8ec437b380936253c5729da99c62801c6d91e2188c61e4eb14->enter($__internal_80ff2ca13e7aba8ec437b380936253c5729da99c62801c6d91e2188c61e4eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_80ff2ca13e7aba8ec437b380936253c5729da99c62801c6d91e2188c61e4eb14->leave($__internal_80ff2ca13e7aba8ec437b380936253c5729da99c62801c6d91e2188c61e4eb14_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
/*             <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>*/
/*             <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
