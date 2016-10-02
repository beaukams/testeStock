<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_4d4c8acfebad0fcfa73dc0b5fcd84471af8b540c5b92b39f9cc151b685b494e1 extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66865140865b986ed2c442dbb83202913b2588c16b35e54d7f42988b0c5e4b86 = $this->env->getExtension("native_profiler");
        $__internal_66865140865b986ed2c442dbb83202913b2588c16b35e54d7f42988b0c5e4b86->enter($__internal_66865140865b986ed2c442dbb83202913b2588c16b35e54d7f42988b0c5e4b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66865140865b986ed2c442dbb83202913b2588c16b35e54d7f42988b0c5e4b86->leave($__internal_66865140865b986ed2c442dbb83202913b2588c16b35e54d7f42988b0c5e4b86_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_16f3cbbf78f28c0b362b067b8190d6f0b160099baf90a76437c801eae2ba8b29 = $this->env->getExtension("native_profiler");
        $__internal_16f3cbbf78f28c0b362b067b8190d6f0b160099baf90a76437c801eae2ba8b29->enter($__internal_16f3cbbf78f28c0b362b067b8190d6f0b160099baf90a76437c801eae2ba8b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_16f3cbbf78f28c0b362b067b8190d6f0b160099baf90a76437c801eae2ba8b29->leave($__internal_16f3cbbf78f28c0b362b067b8190d6f0b160099baf90a76437c801eae2ba8b29_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3fd57661933c9b7c6d9bd5470c471c35c7187d2a818ab678224807fe22d3c380 = $this->env->getExtension("native_profiler");
        $__internal_3fd57661933c9b7c6d9bd5470c471c35c7187d2a818ab678224807fe22d3c380->enter($__internal_3fd57661933c9b7c6d9bd5470c471c35c7187d2a818ab678224807fe22d3c380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3fd57661933c9b7c6d9bd5470c471c35c7187d2a818ab678224807fe22d3c380->leave($__internal_3fd57661933c9b7c6d9bd5470c471c35c7187d2a818ab678224807fe22d3c380_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a644c7b4cc5d0df3f1c45b5584891453c62586f5b71a612c91ffbad4d472f60a = $this->env->getExtension("native_profiler");
        $__internal_a644c7b4cc5d0df3f1c45b5584891453c62586f5b71a612c91ffbad4d472f60a->enter($__internal_a644c7b4cc5d0df3f1c45b5584891453c62586f5b71a612c91ffbad4d472f60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a644c7b4cc5d0df3f1c45b5584891453c62586f5b71a612c91ffbad4d472f60a->leave($__internal_a644c7b4cc5d0df3f1c45b5584891453c62586f5b71a612c91ffbad4d472f60a_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_4955a53bea978a972b93abb986c53568bf5984496b0f6f8eaeccb888890a0461 = $this->env->getExtension("native_profiler");
        $__internal_4955a53bea978a972b93abb986c53568bf5984496b0f6f8eaeccb888890a0461->enter($__internal_4955a53bea978a972b93abb986c53568bf5984496b0f6f8eaeccb888890a0461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_4955a53bea978a972b93abb986c53568bf5984496b0f6f8eaeccb888890a0461->leave($__internal_4955a53bea978a972b93abb986c53568bf5984496b0f6f8eaeccb888890a0461_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_6c3c76bc9e443e0dac6d5a030eb9bfe55cf90f7e9ae341ed7395f4559343134b = $this->env->getExtension("native_profiler");
        $__internal_6c3c76bc9e443e0dac6d5a030eb9bfe55cf90f7e9ae341ed7395f4559343134b->enter($__internal_6c3c76bc9e443e0dac6d5a030eb9bfe55cf90f7e9ae341ed7395f4559343134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_6c3c76bc9e443e0dac6d5a030eb9bfe55cf90f7e9ae341ed7395f4559343134b->leave($__internal_6c3c76bc9e443e0dac6d5a030eb9bfe55cf90f7e9ae341ed7395f4559343134b_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_5ade4a8e0ee420b85010b46c98f7d81cd0f9b4cd00455a7da9fbb5e7a62a6537 = $this->env->getExtension("native_profiler");
        $__internal_5ade4a8e0ee420b85010b46c98f7d81cd0f9b4cd00455a7da9fbb5e7a62a6537->enter($__internal_5ade4a8e0ee420b85010b46c98f7d81cd0f9b4cd00455a7da9fbb5e7a62a6537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_5ade4a8e0ee420b85010b46c98f7d81cd0f9b4cd00455a7da9fbb5e7a62a6537->leave($__internal_5ade4a8e0ee420b85010b46c98f7d81cd0f9b4cd00455a7da9fbb5e7a62a6537_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_f7fd20bf84e330b51a3534d56de3209216ab95ee16b2967b82248cfa7aec2415 = $this->env->getExtension("native_profiler");
        $__internal_f7fd20bf84e330b51a3534d56de3209216ab95ee16b2967b82248cfa7aec2415->enter($__internal_f7fd20bf84e330b51a3534d56de3209216ab95ee16b2967b82248cfa7aec2415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_f7fd20bf84e330b51a3534d56de3209216ab95ee16b2967b82248cfa7aec2415->leave($__internal_f7fd20bf84e330b51a3534d56de3209216ab95ee16b2967b82248cfa7aec2415_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
/*             {% block sonata_user_reset_request_form %}*/
/*                 {% block sonata_user_reset_request_error %}*/
/*                     {% if invalid_username is defined %}*/
/*                         <div class="alert alert-danger">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 <p class="login-box-msg">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>*/
/*                 <form action="{{ path('sonata_user_admin_resetting_send_email') }}" method="post" role="form">*/
/*                     <div class="form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="username"  name="username" required="required" placeholder="{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                         <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-12">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/* */
/*                 <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
