<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_32cf86bb335f1b40f413fe5f95040dbdf15b18e5f5236fa7488c9942e1c8bd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cf86bb335f1b40f413fe5f95040dbdf15b18e5f5236fa7488c9942e1c8bd6e->enter($__internal_32cf86bb335f1b40f413fe5f95040dbdf15b18e5f5236fa7488c9942e1c8bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_617d68d3d3952e4446e797e8750258df26b5e204d6118d3dcedeaa709f78aae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617d68d3d3952e4446e797e8750258df26b5e204d6118d3dcedeaa709f78aae9->enter($__internal_617d68d3d3952e4446e797e8750258df26b5e204d6118d3dcedeaa709f78aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_32cf86bb335f1b40f413fe5f95040dbdf15b18e5f5236fa7488c9942e1c8bd6e->leave($__internal_32cf86bb335f1b40f413fe5f95040dbdf15b18e5f5236fa7488c9942e1c8bd6e_prof);

        
        $__internal_617d68d3d3952e4446e797e8750258df26b5e204d6118d3dcedeaa709f78aae9->leave($__internal_617d68d3d3952e4446e797e8750258df26b5e204d6118d3dcedeaa709f78aae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
