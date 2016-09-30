<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_699081a34b2e262df8ff3c617b06f1ee7dd9e0fd5eb99395072246aeeb585917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b01e34687d9b6f00821686fcaf7f3ce5e524aebb2b193149fe9093d467a7e0d = $this->env->getExtension("native_profiler");
        $__internal_5b01e34687d9b6f00821686fcaf7f3ce5e524aebb2b193149fe9093d467a7e0d->enter($__internal_5b01e34687d9b6f00821686fcaf7f3ce5e524aebb2b193149fe9093d467a7e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_5b01e34687d9b6f00821686fcaf7f3ce5e524aebb2b193149fe9093d467a7e0d->leave($__internal_5b01e34687d9b6f00821686fcaf7f3ce5e524aebb2b193149fe9093d467a7e0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
