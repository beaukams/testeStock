<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_78343137b30593e853c924170cbc7f67b8b5f3fe7b27247d3f55a98769ed9114 extends Twig_Template
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
        $__internal_4c9e3d214466538a330c8918784f564355390def1b4937d6286bf9efc6d2fb0c = $this->env->getExtension("native_profiler");
        $__internal_4c9e3d214466538a330c8918784f564355390def1b4937d6286bf9efc6d2fb0c->enter($__internal_4c9e3d214466538a330c8918784f564355390def1b4937d6286bf9efc6d2fb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4c9e3d214466538a330c8918784f564355390def1b4937d6286bf9efc6d2fb0c->leave($__internal_4c9e3d214466538a330c8918784f564355390def1b4937d6286bf9efc6d2fb0c_prof);

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
