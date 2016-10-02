<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fc8f56e2211790b6c656c4d3979b450f95c0eb4c241d74700b5fc0276eea81af extends Twig_Template
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
        $__internal_d1fca68dd97afe25104e913d109c84ef71edb288825141be4dce2bb030c0829a = $this->env->getExtension("native_profiler");
        $__internal_d1fca68dd97afe25104e913d109c84ef71edb288825141be4dce2bb030c0829a->enter($__internal_d1fca68dd97afe25104e913d109c84ef71edb288825141be4dce2bb030c0829a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d1fca68dd97afe25104e913d109c84ef71edb288825141be4dce2bb030c0829a->leave($__internal_d1fca68dd97afe25104e913d109c84ef71edb288825141be4dce2bb030c0829a_prof);

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
