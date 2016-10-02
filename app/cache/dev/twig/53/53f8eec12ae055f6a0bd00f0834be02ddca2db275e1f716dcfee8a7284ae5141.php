<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_a5bc93fe8bacc522c194e5912f8149f9bd5c5c6e0fdfa5aa176b705c59aca621 extends Twig_Template
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
        $__internal_22a1b0875a6db98d5ded5839f4a9e183d7bf3befde6d5df6c0f0ade9906bcc6d = $this->env->getExtension("native_profiler");
        $__internal_22a1b0875a6db98d5ded5839f4a9e183d7bf3befde6d5df6c0f0ade9906bcc6d->enter($__internal_22a1b0875a6db98d5ded5839f4a9e183d7bf3befde6d5df6c0f0ade9906bcc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_22a1b0875a6db98d5ded5839f4a9e183d7bf3befde6d5df6c0f0ade9906bcc6d->leave($__internal_22a1b0875a6db98d5ded5839f4a9e183d7bf3befde6d5df6c0f0ade9906bcc6d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {{ revision.timestamp|date }}*/
/* */
