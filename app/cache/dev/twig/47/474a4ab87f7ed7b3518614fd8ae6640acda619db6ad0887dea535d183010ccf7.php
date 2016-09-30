<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ffd9218282cfb0341161b77c1e167ebd47758cb49b4735dc68cf704ea65272ef extends Twig_Template
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
        $__internal_8be0cb5ec2af0fca5466438528732869b34fd9155471436d363c17756ce5ed35 = $this->env->getExtension("native_profiler");
        $__internal_8be0cb5ec2af0fca5466438528732869b34fd9155471436d363c17756ce5ed35->enter($__internal_8be0cb5ec2af0fca5466438528732869b34fd9155471436d363c17756ce5ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8be0cb5ec2af0fca5466438528732869b34fd9155471436d363c17756ce5ed35->leave($__internal_8be0cb5ec2af0fca5466438528732869b34fd9155471436d363c17756ce5ed35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
