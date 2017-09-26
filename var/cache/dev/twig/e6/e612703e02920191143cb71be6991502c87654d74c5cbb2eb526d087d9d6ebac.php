<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_869ca149709129680a2e8af7485ab8f93a38eef3ef083a72a8f1caa9a7904d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869ca149709129680a2e8af7485ab8f93a38eef3ef083a72a8f1caa9a7904d84->enter($__internal_869ca149709129680a2e8af7485ab8f93a38eef3ef083a72a8f1caa9a7904d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_51f1a40c8fbb70dc3917c6f232f0a88f8b2bf5ca7fd6640ff66fcf856c88e139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f1a40c8fbb70dc3917c6f232f0a88f8b2bf5ca7fd6640ff66fcf856c88e139->enter($__internal_51f1a40c8fbb70dc3917c6f232f0a88f8b2bf5ca7fd6640ff66fcf856c88e139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_869ca149709129680a2e8af7485ab8f93a38eef3ef083a72a8f1caa9a7904d84->leave($__internal_869ca149709129680a2e8af7485ab8f93a38eef3ef083a72a8f1caa9a7904d84_prof);

        
        $__internal_51f1a40c8fbb70dc3917c6f232f0a88f8b2bf5ca7fd6640ff66fcf856c88e139->leave($__internal_51f1a40c8fbb70dc3917c6f232f0a88f8b2bf5ca7fd6640ff66fcf856c88e139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
