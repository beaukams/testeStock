<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fd4815064cecac3f13bf20b2bbee046ebd1b3e573f6003cd596426d143585be7 extends Twig_Template
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
        $__internal_530448df7d83fa3cfc75c78a05ed10aeb79cc2e23d68f6efc454cccdc91acd7b = $this->env->getExtension("native_profiler");
        $__internal_530448df7d83fa3cfc75c78a05ed10aeb79cc2e23d68f6efc454cccdc91acd7b->enter($__internal_530448df7d83fa3cfc75c78a05ed10aeb79cc2e23d68f6efc454cccdc91acd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_530448df7d83fa3cfc75c78a05ed10aeb79cc2e23d68f6efc454cccdc91acd7b->leave($__internal_530448df7d83fa3cfc75c78a05ed10aeb79cc2e23d68f6efc454cccdc91acd7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
