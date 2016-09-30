<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_874e8cee2e90931dfc0f9bc0f919fb9757b3841e18097933bcb684379843d83f extends Twig_Template
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
        $__internal_722886e8f0ce90f84db613788cba9e80c902ba05d4c1c4fced9fa2520589ba72 = $this->env->getExtension("native_profiler");
        $__internal_722886e8f0ce90f84db613788cba9e80c902ba05d4c1c4fced9fa2520589ba72->enter($__internal_722886e8f0ce90f84db613788cba9e80c902ba05d4c1c4fced9fa2520589ba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_722886e8f0ce90f84db613788cba9e80c902ba05d4c1c4fced9fa2520589ba72->leave($__internal_722886e8f0ce90f84db613788cba9e80c902ba05d4c1c4fced9fa2520589ba72_prof);

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
