<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_dd3fe401b2561ad8c56f832170eea20864ef883c500cc848d3887d6b88ded146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3fe401b2561ad8c56f832170eea20864ef883c500cc848d3887d6b88ded146->enter($__internal_dd3fe401b2561ad8c56f832170eea20864ef883c500cc848d3887d6b88ded146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f3cfcd314c5178f083f6d2f8f8948940381cb57a8ce490d4c266dd10469186e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cfcd314c5178f083f6d2f8f8948940381cb57a8ce490d4c266dd10469186e0->enter($__internal_f3cfcd314c5178f083f6d2f8f8948940381cb57a8ce490d4c266dd10469186e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dd3fe401b2561ad8c56f832170eea20864ef883c500cc848d3887d6b88ded146->leave($__internal_dd3fe401b2561ad8c56f832170eea20864ef883c500cc848d3887d6b88ded146_prof);

        
        $__internal_f3cfcd314c5178f083f6d2f8f8948940381cb57a8ce490d4c266dd10469186e0->leave($__internal_f3cfcd314c5178f083f6d2f8f8948940381cb57a8ce490d4c266dd10469186e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
