<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_d005eb85fa06d429baa307ac7e237ebee9394fa67ca1f8cbd7bfd8672bffd9e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d5611a628cd96d0cd0b362ae5877d554df1a6280153af97f8133f27761cfe2 = $this->env->getExtension("native_profiler");
        $__internal_b5d5611a628cd96d0cd0b362ae5877d554df1a6280153af97f8133f27761cfe2->enter($__internal_b5d5611a628cd96d0cd0b362ae5877d554df1a6280153af97f8133f27761cfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_b5d5611a628cd96d0cd0b362ae5877d554df1a6280153af97f8133f27761cfe2->leave($__internal_b5d5611a628cd96d0cd0b362ae5877d554df1a6280153af97f8133f27761cfe2_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_1723e4895e6e59c99bc1c86e0cf062ff9af5539074009a5f1eef370beb46589c = $this->env->getExtension("native_profiler");
        $__internal_1723e4895e6e59c99bc1c86e0cf062ff9af5539074009a5f1eef370beb46589c->enter($__internal_1723e4895e6e59c99bc1c86e0cf062ff9af5539074009a5f1eef370beb46589c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1723e4895e6e59c99bc1c86e0cf062ff9af5539074009a5f1eef370beb46589c->leave($__internal_1723e4895e6e59c99bc1c86e0cf062ff9af5539074009a5f1eef370beb46589c_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
