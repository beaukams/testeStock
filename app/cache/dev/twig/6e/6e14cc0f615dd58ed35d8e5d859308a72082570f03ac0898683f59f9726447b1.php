<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_c0124aa50e6781699384c412739c57a2be0df5ed0669922425a7200cb4138f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba0168954ff241611e7c4dfd2bc96b834bb1cc5231d5c1ee133c3235c82918bb = $this->env->getExtension("native_profiler");
        $__internal_ba0168954ff241611e7c4dfd2bc96b834bb1cc5231d5c1ee133c3235c82918bb->enter($__internal_ba0168954ff241611e7c4dfd2bc96b834bb1cc5231d5c1ee133c3235c82918bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0168954ff241611e7c4dfd2bc96b834bb1cc5231d5c1ee133c3235c82918bb->leave($__internal_ba0168954ff241611e7c4dfd2bc96b834bb1cc5231d5c1ee133c3235c82918bb_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c4cb50dfcdd695675ce83d7233215c0a94ebd6a8802ceeb08fecec8c2a76225 = $this->env->getExtension("native_profiler");
        $__internal_4c4cb50dfcdd695675ce83d7233215c0a94ebd6a8802ceeb08fecec8c2a76225->enter($__internal_4c4cb50dfcdd695675ce83d7233215c0a94ebd6a8802ceeb08fecec8c2a76225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 74
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 76
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 79
        echo "        </div>
    </div>
";
        
        $__internal_4c4cb50dfcdd695675ce83d7233215c0a94ebd6a8802ceeb08fecec8c2a76225->leave($__internal_4c4cb50dfcdd695675ce83d7233215c0a94ebd6a8802ceeb08fecec8c2a76225_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_7f772b10fd9af6472dc63c6e3a627ec34fbb207ebc876b8c1054fbecbeeecd7a = $this->env->getExtension("native_profiler");
        $__internal_7f772b10fd9af6472dc63c6e3a627ec34fbb207ebc876b8c1054fbecbeeecd7a->enter($__internal_7f772b10fd9af6472dc63c6e3a627ec34fbb207ebc876b8c1054fbecbeeecd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 31
        echo "
                    ";
        // line 32
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 71
        echo "                </div>
            </div>
            ";
        
        $__internal_7f772b10fd9af6472dc63c6e3a627ec34fbb207ebc876b8c1054fbecbeeecd7a->leave($__internal_7f772b10fd9af6472dc63c6e3a627ec34fbb207ebc876b8c1054fbecbeeecd7a_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_6ee75bffe8f1cd8c3a382f5cf7b9b14f52e29d9f830b4c22d1fb05a64a0a3451 = $this->env->getExtension("native_profiler");
        $__internal_6ee75bffe8f1cd8c3a382f5cf7b9b14f52e29d9f830b4c22d1fb05a64a0a3451->enter($__internal_6ee75bffe8f1cd8c3a382f5cf7b9b14f52e29d9f830b4c22d1fb05a64a0a3451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 27
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 30
        echo "                    ";
        
        $__internal_6ee75bffe8f1cd8c3a382f5cf7b9b14f52e29d9f830b4c22d1fb05a64a0a3451->leave($__internal_6ee75bffe8f1cd8c3a382f5cf7b9b14f52e29d9f830b4c22d1fb05a64a0a3451_prof);

    }

    // line 32
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_c98770cad4c1cc957d532f8d694b39dbeed1d4e97eb4bcf122ee57adf6f753aa = $this->env->getExtension("native_profiler");
        $__internal_c98770cad4c1cc957d532f8d694b39dbeed1d4e97eb4bcf122ee57adf6f753aa->enter($__internal_c98770cad4c1cc957d532f8d694b39dbeed1d4e97eb4bcf122ee57adf6f753aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 33
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
        
        $__internal_c98770cad4c1cc957d532f8d694b39dbeed1d4e97eb4bcf122ee57adf6f753aa->leave($__internal_c98770cad4c1cc957d532f8d694b39dbeed1d4e97eb4bcf122ee57adf6f753aa_prof);

    }

    // line 76
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_524ace75157f1879bd5a06a89c5c21334e6dd50c0824633855ee71054ae9e07f = $this->env->getExtension("native_profiler");
        $__internal_524ace75157f1879bd5a06a89c5c21334e6dd50c0824633855ee71054ae9e07f->enter($__internal_524ace75157f1879bd5a06a89c5c21334e6dd50c0824633855ee71054ae9e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 77
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 78
        echo "            ";
        
        $__internal_524ace75157f1879bd5a06a89c5c21334e6dd50c0824633855ee71054ae9e07f->leave($__internal_524ace75157f1879bd5a06a89c5c21334e6dd50c0824633855ee71054ae9e07f_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 78,  203 => 77,  197 => 76,  185 => 66,  174 => 60,  163 => 52,  151 => 43,  143 => 38,  139 => 37,  133 => 34,  128 => 33,  122 => 32,  115 => 30,  109 => 28,  106 => 27,  100 => 26,  91 => 71,  89 => 32,  86 => 31,  84 => 26,  76 => 21,  71 => 18,  65 => 17,  56 => 79,  54 => 76,  50 => 74,  48 => 17,  44 => 15,  38 => 14,  11 => 12,);
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
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             {% block sonata_user_login %}*/
/*                 <div class="panel panel-info">*/
/* */
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/* */
/*                     {% block sonata_user_login_error %}*/
/*                         {% if error %}*/
/*                             <div class="alert alert-danger alert-error">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                         {% endif %}*/
/*                     {% endblock %}*/
/* */
/*                     {% block sonata_user_login_form %}*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post" role="form" class="form-horizontal">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label for="username" class="col-sm-4 control-label">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                 <div class="col-sm-8"><input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"/></div>*/
/*                             </div>*/
/* */
/* */
/*                             <div class="form-group control-group">*/
/*                                 <label for="password" class="col-sm-4 control-label">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                 <div class="col-sm-8"><input type="password" class="form-control" id="password" name="_password" required="required"/></div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-4 col-sm-8">*/
/*                                     <div class="checkbox control-group">*/
/*                                         <label for="remember_me">*/
/*                                             <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                             {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                         </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group control-group">*/
/*                                 <div class="controls col-sm-offset-4 col-sm-8">*/
/*                                     <a href="{{ path('fos_user_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-4 col-sm-8">*/
/*                                     <input type="submit" id="_submit" name="_submit" class="btn btn-primary" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             {% block sonata_user_registration %}*/
/*                 {% render controller("SonataUserBundle:RegistrationFOSUser1:register") %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
