<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_0cdd2014b9d8a0a6a3bd318c006a0a7b6b0f63374de3190993326a114be04fac extends Twig_Template
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
        $__internal_d19eec55f3cccb6f9a674166e52138e3486e7013746200cf36608511b42be4d8 = $this->env->getExtension("native_profiler");
        $__internal_d19eec55f3cccb6f9a674166e52138e3486e7013746200cf36608511b42be4d8->enter($__internal_d19eec55f3cccb6f9a674166e52138e3486e7013746200cf36608511b42be4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19eec55f3cccb6f9a674166e52138e3486e7013746200cf36608511b42be4d8->leave($__internal_d19eec55f3cccb6f9a674166e52138e3486e7013746200cf36608511b42be4d8_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_10a4d88f4d593e3c3aaf27a44cfe78c9af7fa14aec2d4395ae6b25aea2e94e02 = $this->env->getExtension("native_profiler");
        $__internal_10a4d88f4d593e3c3aaf27a44cfe78c9af7fa14aec2d4395ae6b25aea2e94e02->enter($__internal_10a4d88f4d593e3c3aaf27a44cfe78c9af7fa14aec2d4395ae6b25aea2e94e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_10a4d88f4d593e3c3aaf27a44cfe78c9af7fa14aec2d4395ae6b25aea2e94e02->leave($__internal_10a4d88f4d593e3c3aaf27a44cfe78c9af7fa14aec2d4395ae6b25aea2e94e02_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0635d9adb0b7d3d570c6520f8525e43c5c99185e0778de7b50ac77957fa8d5ee = $this->env->getExtension("native_profiler");
        $__internal_0635d9adb0b7d3d570c6520f8525e43c5c99185e0778de7b50ac77957fa8d5ee->enter($__internal_0635d9adb0b7d3d570c6520f8525e43c5c99185e0778de7b50ac77957fa8d5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_0635d9adb0b7d3d570c6520f8525e43c5c99185e0778de7b50ac77957fa8d5ee->leave($__internal_0635d9adb0b7d3d570c6520f8525e43c5c99185e0778de7b50ac77957fa8d5ee_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_272d38abafc181a3f5615fe565badd4aff402859cdff4db145ab2c9d4125a669 = $this->env->getExtension("native_profiler");
        $__internal_272d38abafc181a3f5615fe565badd4aff402859cdff4db145ab2c9d4125a669->enter($__internal_272d38abafc181a3f5615fe565badd4aff402859cdff4db145ab2c9d4125a669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_272d38abafc181a3f5615fe565badd4aff402859cdff4db145ab2c9d4125a669->leave($__internal_272d38abafc181a3f5615fe565badd4aff402859cdff4db145ab2c9d4125a669_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f88d470615c0385474a54a6071db86e36e9f0b994af906c2332ef90dba237686 = $this->env->getExtension("native_profiler");
        $__internal_f88d470615c0385474a54a6071db86e36e9f0b994af906c2332ef90dba237686->enter($__internal_f88d470615c0385474a54a6071db86e36e9f0b994af906c2332ef90dba237686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f88d470615c0385474a54a6071db86e36e9f0b994af906c2332ef90dba237686->leave($__internal_f88d470615c0385474a54a6071db86e36e9f0b994af906c2332ef90dba237686_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b74b5381b9ff62355747a59d1adf19059237af568b08e06044b5f32a2c2a9ebb = $this->env->getExtension("native_profiler");
        $__internal_b74b5381b9ff62355747a59d1adf19059237af568b08e06044b5f32a2c2a9ebb->enter($__internal_b74b5381b9ff62355747a59d1adf19059237af568b08e06044b5f32a2c2a9ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_b74b5381b9ff62355747a59d1adf19059237af568b08e06044b5f32a2c2a9ebb->leave($__internal_b74b5381b9ff62355747a59d1adf19059237af568b08e06044b5f32a2c2a9ebb_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_762311c00d6ce7e87073dd864f3ff5517d88013b6053171cda3fa0b67163e9c4 = $this->env->getExtension("native_profiler");
        $__internal_762311c00d6ce7e87073dd864f3ff5517d88013b6053171cda3fa0b67163e9c4->enter($__internal_762311c00d6ce7e87073dd864f3ff5517d88013b6053171cda3fa0b67163e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_762311c00d6ce7e87073dd864f3ff5517d88013b6053171cda3fa0b67163e9c4->leave($__internal_762311c00d6ce7e87073dd864f3ff5517d88013b6053171cda3fa0b67163e9c4_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_d156897efef062a785e103fa84c0e982832ea86571f53b7097bb70d6c10e2e5e = $this->env->getExtension("native_profiler");
        $__internal_d156897efef062a785e103fa84c0e982832ea86571f53b7097bb70d6c10e2e5e->enter($__internal_d156897efef062a785e103fa84c0e982832ea86571f53b7097bb70d6c10e2e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_d156897efef062a785e103fa84c0e982832ea86571f53b7097bb70d6c10e2e5e->leave($__internal_d156897efef062a785e103fa84c0e982832ea86571f53b7097bb70d6c10e2e5e_prof);

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
