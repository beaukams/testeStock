<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_328f9c2cfba146900004c3edf6a99cb507183845357af6c976ab1365349199c1 extends Twig_Template
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
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42a4211e45f7a307d39ecd2e5617b41f9d53897b3ec5ef729162dd5ca268dfe = $this->env->getExtension("native_profiler");
        $__internal_c42a4211e45f7a307d39ecd2e5617b41f9d53897b3ec5ef729162dd5ca268dfe->enter($__internal_c42a4211e45f7a307d39ecd2e5617b41f9d53897b3ec5ef729162dd5ca268dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42a4211e45f7a307d39ecd2e5617b41f9d53897b3ec5ef729162dd5ca268dfe->leave($__internal_c42a4211e45f7a307d39ecd2e5617b41f9d53897b3ec5ef729162dd5ca268dfe_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d82c9d37d2167eaa45bb2d99c6ca9cbee94fd70f848d169cf3d8a76fbe9d0095 = $this->env->getExtension("native_profiler");
        $__internal_d82c9d37d2167eaa45bb2d99c6ca9cbee94fd70f848d169cf3d8a76fbe9d0095->enter($__internal_d82c9d37d2167eaa45bb2d99c6ca9cbee94fd70f848d169cf3d8a76fbe9d0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d82c9d37d2167eaa45bb2d99c6ca9cbee94fd70f848d169cf3d8a76fbe9d0095->leave($__internal_d82c9d37d2167eaa45bb2d99c6ca9cbee94fd70f848d169cf3d8a76fbe9d0095_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_63db004db35217f7860b2bc1a5aa26693aafff09f3e47356f73806daad05aab4 = $this->env->getExtension("native_profiler");
        $__internal_63db004db35217f7860b2bc1a5aa26693aafff09f3e47356f73806daad05aab4->enter($__internal_63db004db35217f7860b2bc1a5aa26693aafff09f3e47356f73806daad05aab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_63db004db35217f7860b2bc1a5aa26693aafff09f3e47356f73806daad05aab4->leave($__internal_63db004db35217f7860b2bc1a5aa26693aafff09f3e47356f73806daad05aab4_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_94abca944d45fb105473106d72dd038cf057c711a7f112f534ac2d55521a6dd4 = $this->env->getExtension("native_profiler");
        $__internal_94abca944d45fb105473106d72dd038cf057c711a7f112f534ac2d55521a6dd4->enter($__internal_94abca944d45fb105473106d72dd038cf057c711a7f112f534ac2d55521a6dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_94abca944d45fb105473106d72dd038cf057c711a7f112f534ac2d55521a6dd4->leave($__internal_94abca944d45fb105473106d72dd038cf057c711a7f112f534ac2d55521a6dd4_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1262fe7aa6dc272d7c2e32217b81c473a1d8782f0622f236b22a3749f1b2785c = $this->env->getExtension("native_profiler");
        $__internal_1262fe7aa6dc272d7c2e32217b81c473a1d8782f0622f236b22a3749f1b2785c->enter($__internal_1262fe7aa6dc272d7c2e32217b81c473a1d8782f0622f236b22a3749f1b2785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_1262fe7aa6dc272d7c2e32217b81c473a1d8782f0622f236b22a3749f1b2785c->leave($__internal_1262fe7aa6dc272d7c2e32217b81c473a1d8782f0622f236b22a3749f1b2785c_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_58858918f01505c9b5183226f04f9e876e588f2fa347afd96283b2c83976ee64 = $this->env->getExtension("native_profiler");
        $__internal_58858918f01505c9b5183226f04f9e876e588f2fa347afd96283b2c83976ee64->enter($__internal_58858918f01505c9b5183226f04f9e876e588f2fa347afd96283b2c83976ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 24
        echo "                ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 25
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 30
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 68
        echo "        </div>
    </div>

";
        
        $__internal_58858918f01505c9b5183226f04f9e876e588f2fa347afd96283b2c83976ee64->leave($__internal_58858918f01505c9b5183226f04f9e876e588f2fa347afd96283b2c83976ee64_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_1fbee5637cf79931a88511e48c3dd015f9f71577df62af940d6418ac0e043204 = $this->env->getExtension("native_profiler");
        $__internal_1fbee5637cf79931a88511e48c3dd015f9f71577df62af940d6418ac0e043204->enter($__internal_1fbee5637cf79931a88511e48c3dd015f9f71577df62af940d6418ac0e043204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 31
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 36
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 66
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) ? $context["reset_route"] : $this->getContext($context, "reset_route")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_1fbee5637cf79931a88511e48c3dd015f9f71577df62af940d6418ac0e043204->leave($__internal_1fbee5637cf79931a88511e48c3dd015f9f71577df62af940d6418ac0e043204_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_5ed40349ccd8179d0f1bd89e70c5ac197478d9b125a0fdb9c0c306d05153c386 = $this->env->getExtension("native_profiler");
        $__internal_5ed40349ccd8179d0f1bd89e70c5ac197478d9b125a0fdb9c0c306d05153c386->enter($__internal_5ed40349ccd8179d0f1bd89e70c5ac197478d9b125a0fdb9c0c306d05153c386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 32
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 35
        echo "                ";
        
        $__internal_5ed40349ccd8179d0f1bd89e70c5ac197478d9b125a0fdb9c0c306d05153c386->leave($__internal_5ed40349ccd8179d0f1bd89e70c5ac197478d9b125a0fdb9c0c306d05153c386_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 35,  221 => 33,  218 => 32,  212 => 31,  200 => 66,  192 => 60,  184 => 55,  172 => 46,  162 => 41,  156 => 38,  152 => 37,  147 => 36,  144 => 31,  138 => 30,  128 => 68,  126 => 30,  121 => 27,  115 => 25,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
/*                 {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                     <div>*/
/*                         <img style="width:64px;" src="{{ asset(sonata_admin.adminPool.titlelogo) }}" alt="{{ sonata_admin.adminPool.title }}">*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                     <span>{{ sonata_admin.adminPool.title }}</span>*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="login-box-body">*/
/*             {% block sonata_user_login_form %}*/
/*                 {% block sonata_user_login_error %}*/
/*                     {% if error %}*/
/*                         <div class="alert alert-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 <p class="login-box-msg">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>*/
/*                 <form action="{{ path("sonata_user_admin_security_check") }}" method="post" role="form">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                     <div class="form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="username"  name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="form-group has-feedback">*/
/*                         <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-8">*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                     {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/* */
/*                 {#<a href="{{ path('sonata_user_admin_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}*/
/*                 <a href="{{ reset_route }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
