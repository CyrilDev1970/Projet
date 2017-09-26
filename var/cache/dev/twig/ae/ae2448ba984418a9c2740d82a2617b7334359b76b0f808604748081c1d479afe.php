<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_bd40affdfde21c0beaf73fb33205f9bcb835888c1d6643ce52855782e7347487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd40affdfde21c0beaf73fb33205f9bcb835888c1d6643ce52855782e7347487->enter($__internal_bd40affdfde21c0beaf73fb33205f9bcb835888c1d6643ce52855782e7347487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fb959dcd0ae96527350320466b7416e646df1cdc8f98b8ec7dc07278736c4750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb959dcd0ae96527350320466b7416e646df1cdc8f98b8ec7dc07278736c4750->enter($__internal_fb959dcd0ae96527350320466b7416e646df1cdc8f98b8ec7dc07278736c4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bd40affdfde21c0beaf73fb33205f9bcb835888c1d6643ce52855782e7347487->leave($__internal_bd40affdfde21c0beaf73fb33205f9bcb835888c1d6643ce52855782e7347487_prof);

        
        $__internal_fb959dcd0ae96527350320466b7416e646df1cdc8f98b8ec7dc07278736c4750->leave($__internal_fb959dcd0ae96527350320466b7416e646df1cdc8f98b8ec7dc07278736c4750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
