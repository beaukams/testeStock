<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_960a0f269eafebdde5e03b134d641c3cae0ae319f5377d05e8e7af6f02a7fcbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f363323bc7c6bafb7385c3d2980673de94848533de82156b3ee05673ecde09d4 = $this->env->getExtension("native_profiler");
        $__internal_f363323bc7c6bafb7385c3d2980673de94848533de82156b3ee05673ecde09d4->enter($__internal_f363323bc7c6bafb7385c3d2980673de94848533de82156b3ee05673ecde09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f363323bc7c6bafb7385c3d2980673de94848533de82156b3ee05673ecde09d4->leave($__internal_f363323bc7c6bafb7385c3d2980673de94848533de82156b3ee05673ecde09d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_455d3d7f4905d0b40da25c385cca56cca2cd8c99b20b328c1295062728643e68 = $this->env->getExtension("native_profiler");
        $__internal_455d3d7f4905d0b40da25c385cca56cca2cd8c99b20b328c1295062728643e68->enter($__internal_455d3d7f4905d0b40da25c385cca56cca2cd8c99b20b328c1295062728643e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_455d3d7f4905d0b40da25c385cca56cca2cd8c99b20b328c1295062728643e68->leave($__internal_455d3d7f4905d0b40da25c385cca56cca2cd8c99b20b328c1295062728643e68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
