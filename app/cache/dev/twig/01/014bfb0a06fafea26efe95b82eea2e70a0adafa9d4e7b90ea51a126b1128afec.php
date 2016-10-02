<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48253fbf3f4f1466067a016d3d5ccc8e2ca40d48adb7b1d869f27dc7a5402675 extends Twig_Template
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
        $__internal_d3dec7184b7a562278a2fb651ac5d9460fcba8509ba441d28d0629118fa18d85 = $this->env->getExtension("native_profiler");
        $__internal_d3dec7184b7a562278a2fb651ac5d9460fcba8509ba441d28d0629118fa18d85->enter($__internal_d3dec7184b7a562278a2fb651ac5d9460fcba8509ba441d28d0629118fa18d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d3dec7184b7a562278a2fb651ac5d9460fcba8509ba441d28d0629118fa18d85->leave($__internal_d3dec7184b7a562278a2fb651ac5d9460fcba8509ba441d28d0629118fa18d85_prof);

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
