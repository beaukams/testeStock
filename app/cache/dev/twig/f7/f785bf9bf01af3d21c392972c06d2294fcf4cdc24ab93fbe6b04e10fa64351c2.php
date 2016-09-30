<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_a8f51e62ffc6890a444dd15831463fa6f492fbab558f674f72c24fa4399db13f extends Twig_Template
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
        $__internal_d445b426e458a17d9799fc464779d0a8e58775ee54dc091c6a6f41ea4674fa17 = $this->env->getExtension("native_profiler");
        $__internal_d445b426e458a17d9799fc464779d0a8e58775ee54dc091c6a6f41ea4674fa17->enter($__internal_d445b426e458a17d9799fc464779d0a8e58775ee54dc091c6a6f41ea4674fa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d445b426e458a17d9799fc464779d0a8e58775ee54dc091c6a6f41ea4674fa17->leave($__internal_d445b426e458a17d9799fc464779d0a8e58775ee54dc091c6a6f41ea4674fa17_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_14e77543ee0ac006a55dd4188a5fcb6f981e5a3c4de9056d4420863081b0d143 = $this->env->getExtension("native_profiler");
        $__internal_14e77543ee0ac006a55dd4188a5fcb6f981e5a3c4de9056d4420863081b0d143->enter($__internal_14e77543ee0ac006a55dd4188a5fcb6f981e5a3c4de9056d4420863081b0d143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_14e77543ee0ac006a55dd4188a5fcb6f981e5a3c4de9056d4420863081b0d143->leave($__internal_14e77543ee0ac006a55dd4188a5fcb6f981e5a3c4de9056d4420863081b0d143_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_5fe2e8628fb20ce8d0f2ebcc597a0c26b1ec0c921e072e0faa8ae881602268f5 = $this->env->getExtension("native_profiler");
        $__internal_5fe2e8628fb20ce8d0f2ebcc597a0c26b1ec0c921e072e0faa8ae881602268f5->enter($__internal_5fe2e8628fb20ce8d0f2ebcc597a0c26b1ec0c921e072e0faa8ae881602268f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_5fe2e8628fb20ce8d0f2ebcc597a0c26b1ec0c921e072e0faa8ae881602268f5->leave($__internal_5fe2e8628fb20ce8d0f2ebcc597a0c26b1ec0c921e072e0faa8ae881602268f5_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3d9a82710ab323602b0e8f7a02098b763e66d37da8a2892867ed784f453e6984 = $this->env->getExtension("native_profiler");
        $__internal_3d9a82710ab323602b0e8f7a02098b763e66d37da8a2892867ed784f453e6984->enter($__internal_3d9a82710ab323602b0e8f7a02098b763e66d37da8a2892867ed784f453e6984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3d9a82710ab323602b0e8f7a02098b763e66d37da8a2892867ed784f453e6984->leave($__internal_3d9a82710ab323602b0e8f7a02098b763e66d37da8a2892867ed784f453e6984_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_9da5c7dcadf1a6497fe09a7d5c2ecd0a54856fbcb2063370b4cdc6cd514c09fe = $this->env->getExtension("native_profiler");
        $__internal_9da5c7dcadf1a6497fe09a7d5c2ecd0a54856fbcb2063370b4cdc6cd514c09fe->enter($__internal_9da5c7dcadf1a6497fe09a7d5c2ecd0a54856fbcb2063370b4cdc6cd514c09fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_9da5c7dcadf1a6497fe09a7d5c2ecd0a54856fbcb2063370b4cdc6cd514c09fe->leave($__internal_9da5c7dcadf1a6497fe09a7d5c2ecd0a54856fbcb2063370b4cdc6cd514c09fe_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_df78c875288047c8eeb9677aeef562f2fa7a883b3b75240ba8281dfde97894e3 = $this->env->getExtension("native_profiler");
        $__internal_df78c875288047c8eeb9677aeef562f2fa7a883b3b75240ba8281dfde97894e3->enter($__internal_df78c875288047c8eeb9677aeef562f2fa7a883b3b75240ba8281dfde97894e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_df78c875288047c8eeb9677aeef562f2fa7a883b3b75240ba8281dfde97894e3->leave($__internal_df78c875288047c8eeb9677aeef562f2fa7a883b3b75240ba8281dfde97894e3_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_468e9804f111a73b3b2c14c9a8484e8b7cd35d9a08e387f813bb0fc773a007e1 = $this->env->getExtension("native_profiler");
        $__internal_468e9804f111a73b3b2c14c9a8484e8b7cd35d9a08e387f813bb0fc773a007e1->enter($__internal_468e9804f111a73b3b2c14c9a8484e8b7cd35d9a08e387f813bb0fc773a007e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

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
        
        $__internal_468e9804f111a73b3b2c14c9a8484e8b7cd35d9a08e387f813bb0fc773a007e1->leave($__internal_468e9804f111a73b3b2c14c9a8484e8b7cd35d9a08e387f813bb0fc773a007e1_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_b7a38ef562f2aef3ae685d25340594f186665ef8e1b39e34a0c9310314e61399 = $this->env->getExtension("native_profiler");
        $__internal_b7a38ef562f2aef3ae685d25340594f186665ef8e1b39e34a0c9310314e61399->enter($__internal_b7a38ef562f2aef3ae685d25340594f186665ef8e1b39e34a0c9310314e61399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

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
        
        $__internal_b7a38ef562f2aef3ae685d25340594f186665ef8e1b39e34a0c9310314e61399->leave($__internal_b7a38ef562f2aef3ae685d25340594f186665ef8e1b39e34a0c9310314e61399_prof);

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
