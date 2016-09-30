<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6d95587beb8511ca8676d2ad4ff337491f30ba4ac42b33e02b4425473ce9faa7 extends Twig_Template
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
        $__internal_045b14883eced11ccc343eb401035d09fc2d60a107bf20e15f16fb056bbfc280 = $this->env->getExtension("native_profiler");
        $__internal_045b14883eced11ccc343eb401035d09fc2d60a107bf20e15f16fb056bbfc280->enter($__internal_045b14883eced11ccc343eb401035d09fc2d60a107bf20e15f16fb056bbfc280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_045b14883eced11ccc343eb401035d09fc2d60a107bf20e15f16fb056bbfc280->leave($__internal_045b14883eced11ccc343eb401035d09fc2d60a107bf20e15f16fb056bbfc280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
