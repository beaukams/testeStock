<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_990f3716bccbb12abe819de8599fe22fd9ddbbbdafc637e5bfecb73be26f7750 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57fcf4a52f63c82c533a77b79be99eef263c5b883d339938960a1bf3a933a08d = $this->env->getExtension("native_profiler");
        $__internal_57fcf4a52f63c82c533a77b79be99eef263c5b883d339938960a1bf3a933a08d->enter($__internal_57fcf4a52f63c82c533a77b79be99eef263c5b883d339938960a1bf3a933a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57fcf4a52f63c82c533a77b79be99eef263c5b883d339938960a1bf3a933a08d->leave($__internal_57fcf4a52f63c82c533a77b79be99eef263c5b883d339938960a1bf3a933a08d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b107abe50406a8a3fecbf48140992f9b1316f02305f820d811373e1c876b4cad = $this->env->getExtension("native_profiler");
        $__internal_b107abe50406a8a3fecbf48140992f9b1316f02305f820d811373e1c876b4cad->enter($__internal_b107abe50406a8a3fecbf48140992f9b1316f02305f820d811373e1c876b4cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b107abe50406a8a3fecbf48140992f9b1316f02305f820d811373e1c876b4cad->leave($__internal_b107abe50406a8a3fecbf48140992f9b1316f02305f820d811373e1c876b4cad_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_341f247c1fbe2cbd3dda02581fb4a47c7efa5373bb26fd74257b693f53637e3b = $this->env->getExtension("native_profiler");
        $__internal_341f247c1fbe2cbd3dda02581fb4a47c7efa5373bb26fd74257b693f53637e3b->enter($__internal_341f247c1fbe2cbd3dda02581fb4a47c7efa5373bb26fd74257b693f53637e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_341f247c1fbe2cbd3dda02581fb4a47c7efa5373bb26fd74257b693f53637e3b->leave($__internal_341f247c1fbe2cbd3dda02581fb4a47c7efa5373bb26fd74257b693f53637e3b_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9acb86bc81266da995b63d0800ea2af40311f13ecad2ce9c21c84b13e1609fae = $this->env->getExtension("native_profiler");
        $__internal_9acb86bc81266da995b63d0800ea2af40311f13ecad2ce9c21c84b13e1609fae->enter($__internal_9acb86bc81266da995b63d0800ea2af40311f13ecad2ce9c21c84b13e1609fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9acb86bc81266da995b63d0800ea2af40311f13ecad2ce9c21c84b13e1609fae->leave($__internal_9acb86bc81266da995b63d0800ea2af40311f13ecad2ce9c21c84b13e1609fae_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a82613d1c37387838321fafda79c3ab7e4ac1a2d909ea9e0f955252f20858f1e = $this->env->getExtension("native_profiler");
        $__internal_a82613d1c37387838321fafda79c3ab7e4ac1a2d909ea9e0f955252f20858f1e->enter($__internal_a82613d1c37387838321fafda79c3ab7e4ac1a2d909ea9e0f955252f20858f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_a82613d1c37387838321fafda79c3ab7e4ac1a2d909ea9e0f955252f20858f1e->leave($__internal_a82613d1c37387838321fafda79c3ab7e4ac1a2d909ea9e0f955252f20858f1e_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_85ad5ad8e5894b0fd181c5e62e69032d5366d1174615fecabc88ee0a1ade6f06 = $this->env->getExtension("native_profiler");
        $__internal_85ad5ad8e5894b0fd181c5e62e69032d5366d1174615fecabc88ee0a1ade6f06->enter($__internal_85ad5ad8e5894b0fd181c5e62e69032d5366d1174615fecabc88ee0a1ade6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_85ad5ad8e5894b0fd181c5e62e69032d5366d1174615fecabc88ee0a1ade6f06->leave($__internal_85ad5ad8e5894b0fd181c5e62e69032d5366d1174615fecabc88ee0a1ade6f06_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_663392be2af37a54b89e8c3123c5332b389ad586756ffa797603e571cfbd7f63 = $this->env->getExtension("native_profiler");
        $__internal_663392be2af37a54b89e8c3123c5332b389ad586756ffa797603e571cfbd7f63->enter($__internal_663392be2af37a54b89e8c3123c5332b389ad586756ffa797603e571cfbd7f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_663392be2af37a54b89e8c3123c5332b389ad586756ffa797603e571cfbd7f63->leave($__internal_663392be2af37a54b89e8c3123c5332b389ad586756ffa797603e571cfbd7f63_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
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
/*             {% block sonata_user_reset_form %}*/
/*                 <p class="login-box-msg">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>*/
/*                 <form action="{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}" method="post" role="form">*/
/*                     <div class="form-group">*/
/*                         <input type="password" class="form-control" id="fos_user_resetting_form_new_first"  name="fos_user_resetting_form[new][first]" required="required" placeholder="{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="password" class="form-control" id="fos_user_resetting_form_new_second"  name="fos_user_resetting_form[new][second]" required="required" placeholder="{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                     </div>*/
/*                     {{ form_widget(form._token) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-12">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
