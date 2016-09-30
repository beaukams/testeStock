<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cf47690644369339a5a654b6f7745b7a96ecca0577981531b161b8e4e1a804d9 extends Twig_Template
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
        $__internal_5f12bf82c0ee70f816a3387961b59f1bc5bf239c9880cd484867e2fb8d4b58a9 = $this->env->getExtension("native_profiler");
        $__internal_5f12bf82c0ee70f816a3387961b59f1bc5bf239c9880cd484867e2fb8d4b58a9->enter($__internal_5f12bf82c0ee70f816a3387961b59f1bc5bf239c9880cd484867e2fb8d4b58a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5f12bf82c0ee70f816a3387961b59f1bc5bf239c9880cd484867e2fb8d4b58a9->leave($__internal_5f12bf82c0ee70f816a3387961b59f1bc5bf239c9880cd484867e2fb8d4b58a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
