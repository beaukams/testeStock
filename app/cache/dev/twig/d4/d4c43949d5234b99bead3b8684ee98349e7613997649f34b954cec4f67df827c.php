<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c6fd1dd8ab53758c3410d41913a74ea947694d3570fff1c4808a0c367d7b6979 extends Twig_Template
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
        $__internal_33e2a8426859c2cd306b9050ccb9a9c9ade34b9ae0bdbe55f451fe89edbef0cb = $this->env->getExtension("native_profiler");
        $__internal_33e2a8426859c2cd306b9050ccb9a9c9ade34b9ae0bdbe55f451fe89edbef0cb->enter($__internal_33e2a8426859c2cd306b9050ccb9a9c9ade34b9ae0bdbe55f451fe89edbef0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_33e2a8426859c2cd306b9050ccb9a9c9ade34b9ae0bdbe55f451fe89edbef0cb->leave($__internal_33e2a8426859c2cd306b9050ccb9a9c9ade34b9ae0bdbe55f451fe89edbef0cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
