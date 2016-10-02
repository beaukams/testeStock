<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_185661b448afd2045ff8c30bfedfa60aa48d297d69a1fb579a14aae4c90db46e extends Twig_Template
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
        $__internal_1da43dcbcbf0db72407f8f3a913c4da5056eba965f2eafdb90766af1a5ee75be = $this->env->getExtension("native_profiler");
        $__internal_1da43dcbcbf0db72407f8f3a913c4da5056eba965f2eafdb90766af1a5ee75be->enter($__internal_1da43dcbcbf0db72407f8f3a913c4da5056eba965f2eafdb90766af1a5ee75be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1da43dcbcbf0db72407f8f3a913c4da5056eba965f2eafdb90766af1a5ee75be->leave($__internal_1da43dcbcbf0db72407f8f3a913c4da5056eba965f2eafdb90766af1a5ee75be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
