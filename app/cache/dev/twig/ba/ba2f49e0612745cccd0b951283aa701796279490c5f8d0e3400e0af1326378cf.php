<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_b26185e49f97148067ae8b6a0fc24aaca72a896acc24587a23f297db875a9026 extends Twig_Template
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
        $__internal_b82fdc23795b348b5028c9b6dbb40ac1acc000b4793cae5ee93ae9a1c6a1d97f = $this->env->getExtension("native_profiler");
        $__internal_b82fdc23795b348b5028c9b6dbb40ac1acc000b4793cae5ee93ae9a1c6a1d97f->enter($__internal_b82fdc23795b348b5028c9b6dbb40ac1acc000b4793cae5ee93ae9a1c6a1d97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_b82fdc23795b348b5028c9b6dbb40ac1acc000b4793cae5ee93ae9a1c6a1d97f->leave($__internal_b82fdc23795b348b5028c9b6dbb40ac1acc000b4793cae5ee93ae9a1c6a1d97f_prof);

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
