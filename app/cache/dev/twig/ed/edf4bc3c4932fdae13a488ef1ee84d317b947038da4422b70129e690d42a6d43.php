<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_629c260bb29d63cc8e57442fb1337469083368a201a65163f9d8b837da85228d extends Twig_Template
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
        $__internal_9dfd0b2390deb912160463756c08acf5e3631af869116d9188a7be18aea85365 = $this->env->getExtension("native_profiler");
        $__internal_9dfd0b2390deb912160463756c08acf5e3631af869116d9188a7be18aea85365->enter($__internal_9dfd0b2390deb912160463756c08acf5e3631af869116d9188a7be18aea85365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9dfd0b2390deb912160463756c08acf5e3631af869116d9188a7be18aea85365->leave($__internal_9dfd0b2390deb912160463756c08acf5e3631af869116d9188a7be18aea85365_prof);

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
