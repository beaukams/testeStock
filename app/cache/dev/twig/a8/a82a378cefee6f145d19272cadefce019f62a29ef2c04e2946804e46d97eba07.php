<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8876f75b0a69930eae7992d7e6c05df467aa19ca417e8fd39e96cdd5cfd12b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072785442b523ff412f0ad0d79cc3386c80353a96acbf95da6db07215fdee01d = $this->env->getExtension("native_profiler");
        $__internal_072785442b523ff412f0ad0d79cc3386c80353a96acbf95da6db07215fdee01d->enter($__internal_072785442b523ff412f0ad0d79cc3386c80353a96acbf95da6db07215fdee01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072785442b523ff412f0ad0d79cc3386c80353a96acbf95da6db07215fdee01d->leave($__internal_072785442b523ff412f0ad0d79cc3386c80353a96acbf95da6db07215fdee01d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f714d956a982cdb5caf8584e6fd2986f608f5ab78a23f0f7a5874240a01089bd = $this->env->getExtension("native_profiler");
        $__internal_f714d956a982cdb5caf8584e6fd2986f608f5ab78a23f0f7a5874240a01089bd->enter($__internal_f714d956a982cdb5caf8584e6fd2986f608f5ab78a23f0f7a5874240a01089bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f714d956a982cdb5caf8584e6fd2986f608f5ab78a23f0f7a5874240a01089bd->leave($__internal_f714d956a982cdb5caf8584e6fd2986f608f5ab78a23f0f7a5874240a01089bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_838807d2a493906f551294617ddbdb3c4a7b4e9d183c861fa9d946bc67d1d848 = $this->env->getExtension("native_profiler");
        $__internal_838807d2a493906f551294617ddbdb3c4a7b4e9d183c861fa9d946bc67d1d848->enter($__internal_838807d2a493906f551294617ddbdb3c4a7b4e9d183c861fa9d946bc67d1d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_838807d2a493906f551294617ddbdb3c4a7b4e9d183c861fa9d946bc67d1d848->leave($__internal_838807d2a493906f551294617ddbdb3c4a7b4e9d183c861fa9d946bc67d1d848_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_836c5b60f57841d25b6546065a31e39fbfb07051dfda233912b294ebae4ae1db = $this->env->getExtension("native_profiler");
        $__internal_836c5b60f57841d25b6546065a31e39fbfb07051dfda233912b294ebae4ae1db->enter($__internal_836c5b60f57841d25b6546065a31e39fbfb07051dfda233912b294ebae4ae1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_836c5b60f57841d25b6546065a31e39fbfb07051dfda233912b294ebae4ae1db->leave($__internal_836c5b60f57841d25b6546065a31e39fbfb07051dfda233912b294ebae4ae1db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
