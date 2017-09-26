<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_be0aa7e7a0315f18d3e7f22eeeb57bb70b4eca9d61fc3afe5719585cec57d55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0aa7e7a0315f18d3e7f22eeeb57bb70b4eca9d61fc3afe5719585cec57d55a->enter($__internal_be0aa7e7a0315f18d3e7f22eeeb57bb70b4eca9d61fc3afe5719585cec57d55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f8c1c2e6d7a68d4b564232e733721e17d62a8fb496a604ccc9b814327731d68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c1c2e6d7a68d4b564232e733721e17d62a8fb496a604ccc9b814327731d68f->enter($__internal_f8c1c2e6d7a68d4b564232e733721e17d62a8fb496a604ccc9b814327731d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_be0aa7e7a0315f18d3e7f22eeeb57bb70b4eca9d61fc3afe5719585cec57d55a->leave($__internal_be0aa7e7a0315f18d3e7f22eeeb57bb70b4eca9d61fc3afe5719585cec57d55a_prof);

        
        $__internal_f8c1c2e6d7a68d4b564232e733721e17d62a8fb496a604ccc9b814327731d68f->leave($__internal_f8c1c2e6d7a68d4b564232e733721e17d62a8fb496a604ccc9b814327731d68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
