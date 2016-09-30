<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f380451c7a6ddd88c0f683413285e0af5257da38a5bb6af73232582cadcec4de extends Twig_Template
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
        $__internal_16a6c0dc192b2a03ee0261863d7c9ad81be7c1fbedd04591a2ba0d5994bef868 = $this->env->getExtension("native_profiler");
        $__internal_16a6c0dc192b2a03ee0261863d7c9ad81be7c1fbedd04591a2ba0d5994bef868->enter($__internal_16a6c0dc192b2a03ee0261863d7c9ad81be7c1fbedd04591a2ba0d5994bef868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_16a6c0dc192b2a03ee0261863d7c9ad81be7c1fbedd04591a2ba0d5994bef868->leave($__internal_16a6c0dc192b2a03ee0261863d7c9ad81be7c1fbedd04591a2ba0d5994bef868_prof);

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
