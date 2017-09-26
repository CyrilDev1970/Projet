<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_ca629d178aa386a71217318b30781d497bd3d23fc8256f6ddb9512fed7499288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca629d178aa386a71217318b30781d497bd3d23fc8256f6ddb9512fed7499288->enter($__internal_ca629d178aa386a71217318b30781d497bd3d23fc8256f6ddb9512fed7499288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7878f2e7cf15ac7ea53aec2d49fe52a9dfcb5ca91f1d8ecffa9bfdf785a57f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7878f2e7cf15ac7ea53aec2d49fe52a9dfcb5ca91f1d8ecffa9bfdf785a57f3b->enter($__internal_7878f2e7cf15ac7ea53aec2d49fe52a9dfcb5ca91f1d8ecffa9bfdf785a57f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ca629d178aa386a71217318b30781d497bd3d23fc8256f6ddb9512fed7499288->leave($__internal_ca629d178aa386a71217318b30781d497bd3d23fc8256f6ddb9512fed7499288_prof);

        
        $__internal_7878f2e7cf15ac7ea53aec2d49fe52a9dfcb5ca91f1d8ecffa9bfdf785a57f3b->leave($__internal_7878f2e7cf15ac7ea53aec2d49fe52a9dfcb5ca91f1d8ecffa9bfdf785a57f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
