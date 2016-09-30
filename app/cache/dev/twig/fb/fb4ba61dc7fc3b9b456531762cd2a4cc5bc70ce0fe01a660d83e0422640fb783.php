<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_de24b861584cb6f7294c96202a751c48c1cc9dfeed8f711fdbbf0c3ec57473fb extends Twig_Template
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
        $__internal_91a3e1e5e1fd4961e85a95eef5680cee1ca5670e20645f17618467b777e805f3 = $this->env->getExtension("native_profiler");
        $__internal_91a3e1e5e1fd4961e85a95eef5680cee1ca5670e20645f17618467b777e805f3->enter($__internal_91a3e1e5e1fd4961e85a95eef5680cee1ca5670e20645f17618467b777e805f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a3e1e5e1fd4961e85a95eef5680cee1ca5670e20645f17618467b777e805f3->leave($__internal_91a3e1e5e1fd4961e85a95eef5680cee1ca5670e20645f17618467b777e805f3_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4030b3324eb942985c7474378c8ef6d8a8e9bda2fab61b7a265adf17a9ad9f5a = $this->env->getExtension("native_profiler");
        $__internal_4030b3324eb942985c7474378c8ef6d8a8e9bda2fab61b7a265adf17a9ad9f5a->enter($__internal_4030b3324eb942985c7474378c8ef6d8a8e9bda2fab61b7a265adf17a9ad9f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_4030b3324eb942985c7474378c8ef6d8a8e9bda2fab61b7a265adf17a9ad9f5a->leave($__internal_4030b3324eb942985c7474378c8ef6d8a8e9bda2fab61b7a265adf17a9ad9f5a_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ddbc434dac011eea320875285b377fee6cbd727cd8f237bc2ab9c8030681d96f = $this->env->getExtension("native_profiler");
        $__internal_ddbc434dac011eea320875285b377fee6cbd727cd8f237bc2ab9c8030681d96f->enter($__internal_ddbc434dac011eea320875285b377fee6cbd727cd8f237bc2ab9c8030681d96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_ddbc434dac011eea320875285b377fee6cbd727cd8f237bc2ab9c8030681d96f->leave($__internal_ddbc434dac011eea320875285b377fee6cbd727cd8f237bc2ab9c8030681d96f_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c936140f1b5f4c714eb93af37fa541d8ab2990bf2d612f11f940d34bc6789ee7 = $this->env->getExtension("native_profiler");
        $__internal_c936140f1b5f4c714eb93af37fa541d8ab2990bf2d612f11f940d34bc6789ee7->enter($__internal_c936140f1b5f4c714eb93af37fa541d8ab2990bf2d612f11f940d34bc6789ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c936140f1b5f4c714eb93af37fa541d8ab2990bf2d612f11f940d34bc6789ee7->leave($__internal_c936140f1b5f4c714eb93af37fa541d8ab2990bf2d612f11f940d34bc6789ee7_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f754c31f875b7f0cca24a6910bc3de776177320c9db0ef7f85196fd926169207 = $this->env->getExtension("native_profiler");
        $__internal_f754c31f875b7f0cca24a6910bc3de776177320c9db0ef7f85196fd926169207->enter($__internal_f754c31f875b7f0cca24a6910bc3de776177320c9db0ef7f85196fd926169207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f754c31f875b7f0cca24a6910bc3de776177320c9db0ef7f85196fd926169207->leave($__internal_f754c31f875b7f0cca24a6910bc3de776177320c9db0ef7f85196fd926169207_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9f8075f3a9681d94e20c653fd9d8b4a2857baf9e81e45eaab58420d598013a6d = $this->env->getExtension("native_profiler");
        $__internal_9f8075f3a9681d94e20c653fd9d8b4a2857baf9e81e45eaab58420d598013a6d->enter($__internal_9f8075f3a9681d94e20c653fd9d8b4a2857baf9e81e45eaab58420d598013a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_9f8075f3a9681d94e20c653fd9d8b4a2857baf9e81e45eaab58420d598013a6d->leave($__internal_9f8075f3a9681d94e20c653fd9d8b4a2857baf9e81e45eaab58420d598013a6d_prof);

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
