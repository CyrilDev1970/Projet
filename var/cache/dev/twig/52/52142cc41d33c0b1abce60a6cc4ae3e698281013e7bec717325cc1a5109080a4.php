<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_aa41bb30fd678ccf42cc4fa435a270200e3c455cfbdb40fd0d395cf4d8971814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa41bb30fd678ccf42cc4fa435a270200e3c455cfbdb40fd0d395cf4d8971814->enter($__internal_aa41bb30fd678ccf42cc4fa435a270200e3c455cfbdb40fd0d395cf4d8971814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_896ffe1552d4afaf9c761c359a104d17830ce4ea1254ce647712304dacda6a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ffe1552d4afaf9c761c359a104d17830ce4ea1254ce647712304dacda6a7a->enter($__internal_896ffe1552d4afaf9c761c359a104d17830ce4ea1254ce647712304dacda6a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_aa41bb30fd678ccf42cc4fa435a270200e3c455cfbdb40fd0d395cf4d8971814->leave($__internal_aa41bb30fd678ccf42cc4fa435a270200e3c455cfbdb40fd0d395cf4d8971814_prof);

        
        $__internal_896ffe1552d4afaf9c761c359a104d17830ce4ea1254ce647712304dacda6a7a->leave($__internal_896ffe1552d4afaf9c761c359a104d17830ce4ea1254ce647712304dacda6a7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
