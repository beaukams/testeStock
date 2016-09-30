<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_339910ac48779023ddad5d2c79213790367dd2a13059cd5ec49291bb4943f412 extends Twig_Template
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
        $__internal_d71c9d7a65dc00a6c937841d514d57217b85ccd823d6efd99e9061b7b0e12afc = $this->env->getExtension("native_profiler");
        $__internal_d71c9d7a65dc00a6c937841d514d57217b85ccd823d6efd99e9061b7b0e12afc->enter($__internal_d71c9d7a65dc00a6c937841d514d57217b85ccd823d6efd99e9061b7b0e12afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d71c9d7a65dc00a6c937841d514d57217b85ccd823d6efd99e9061b7b0e12afc->leave($__internal_d71c9d7a65dc00a6c937841d514d57217b85ccd823d6efd99e9061b7b0e12afc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
