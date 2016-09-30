<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e728dd704dbbf37ff2fe0a65b14a66aad3ae28c3eb971ebf1d09207619ae77c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3448adcb48402de2dd4511024a107b3219931fa509e64a89e463a282ae9e1a4 = $this->env->getExtension("native_profiler");
        $__internal_a3448adcb48402de2dd4511024a107b3219931fa509e64a89e463a282ae9e1a4->enter($__internal_a3448adcb48402de2dd4511024a107b3219931fa509e64a89e463a282ae9e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3448adcb48402de2dd4511024a107b3219931fa509e64a89e463a282ae9e1a4->leave($__internal_a3448adcb48402de2dd4511024a107b3219931fa509e64a89e463a282ae9e1a4_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_c8e5f78bf2220f33a0c54ee37c080449129b021cd85dcb6d4c990c6872447cc7 = $this->env->getExtension("native_profiler");
        $__internal_c8e5f78bf2220f33a0c54ee37c080449129b021cd85dcb6d4c990c6872447cc7->enter($__internal_c8e5f78bf2220f33a0c54ee37c080449129b021cd85dcb6d4c990c6872447cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_c8e5f78bf2220f33a0c54ee37c080449129b021cd85dcb6d4c990c6872447cc7->leave($__internal_c8e5f78bf2220f33a0c54ee37c080449129b021cd85dcb6d4c990c6872447cc7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c7d131212dac6d2f88a2f96ef0263ca7650a7809f03a686f2c6a5cc329b53dd = $this->env->getExtension("native_profiler");
        $__internal_6c7d131212dac6d2f88a2f96ef0263ca7650a7809f03a686f2c6a5cc329b53dd->enter($__internal_6c7d131212dac6d2f88a2f96ef0263ca7650a7809f03a686f2c6a5cc329b53dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_6c7d131212dac6d2f88a2f96ef0263ca7650a7809f03a686f2c6a5cc329b53dd->leave($__internal_6c7d131212dac6d2f88a2f96ef0263ca7650a7809f03a686f2c6a5cc329b53dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_edit_password" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% block fos_user_content %}*/
/*                 {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock sonata_profile_content %}*/
/* */
