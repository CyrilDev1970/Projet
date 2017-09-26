<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c8d6ea81cb8c5203800a38123efc76837a59dc5081f97ebd3ce548260dfb0ef extends Twig_Template
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
        $__internal_7ba7ce2d7ce82956216ac6f28f16aff5b41190146c0a96510f4b2205c8aedade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba7ce2d7ce82956216ac6f28f16aff5b41190146c0a96510f4b2205c8aedade->enter($__internal_7ba7ce2d7ce82956216ac6f28f16aff5b41190146c0a96510f4b2205c8aedade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_37a924bdf4e9e948a94fcd14733f9c40bf26b47d8b1a9cf2efcdbe10f0dc5ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a924bdf4e9e948a94fcd14733f9c40bf26b47d8b1a9cf2efcdbe10f0dc5ded->enter($__internal_37a924bdf4e9e948a94fcd14733f9c40bf26b47d8b1a9cf2efcdbe10f0dc5ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7ba7ce2d7ce82956216ac6f28f16aff5b41190146c0a96510f4b2205c8aedade->leave($__internal_7ba7ce2d7ce82956216ac6f28f16aff5b41190146c0a96510f4b2205c8aedade_prof);

        
        $__internal_37a924bdf4e9e948a94fcd14733f9c40bf26b47d8b1a9cf2efcdbe10f0dc5ded->leave($__internal_37a924bdf4e9e948a94fcd14733f9c40bf26b47d8b1a9cf2efcdbe10f0dc5ded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
