<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_6c114153c2ee5bf0732d74246a284c92368cf3b700c6d84c3a6ef77997da5c6e extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <form action="{{ path('sonata_user_profile_edit') }}" method="POST" class="form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <div class="form-actions">*/
/*         <button type="submit" name="submit"  class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
