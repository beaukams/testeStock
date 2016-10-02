<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6144e1951afc1cd0c69d48f888b6c59b36b89c7b004396d8c9c8f4530e00c5cc extends Twig_Template
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
        $__internal_2f42157848c0f70527efb1b09bcdf8b7a930d5a62492e7e5c3c73c71f5c19359 = $this->env->getExtension("native_profiler");
        $__internal_2f42157848c0f70527efb1b09bcdf8b7a930d5a62492e7e5c3c73c71f5c19359->enter($__internal_2f42157848c0f70527efb1b09bcdf8b7a930d5a62492e7e5c3c73c71f5c19359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2f42157848c0f70527efb1b09bcdf8b7a930d5a62492e7e5c3c73c71f5c19359->leave($__internal_2f42157848c0f70527efb1b09bcdf8b7a930d5a62492e7e5c3c73c71f5c19359_prof);

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
