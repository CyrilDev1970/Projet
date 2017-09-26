<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_02b840f9fb222344d47f6a27028bae3e23985682b8f7a0c18959ed06fe09c675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b840f9fb222344d47f6a27028bae3e23985682b8f7a0c18959ed06fe09c675->enter($__internal_02b840f9fb222344d47f6a27028bae3e23985682b8f7a0c18959ed06fe09c675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6a1ed9ac38f4f014db6dfd7c3916126203ff8ca465daa8299bcacfa95fa30c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ed9ac38f4f014db6dfd7c3916126203ff8ca465daa8299bcacfa95fa30c36->enter($__internal_6a1ed9ac38f4f014db6dfd7c3916126203ff8ca465daa8299bcacfa95fa30c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_02b840f9fb222344d47f6a27028bae3e23985682b8f7a0c18959ed06fe09c675->leave($__internal_02b840f9fb222344d47f6a27028bae3e23985682b8f7a0c18959ed06fe09c675_prof);

        
        $__internal_6a1ed9ac38f4f014db6dfd7c3916126203ff8ca465daa8299bcacfa95fa30c36->leave($__internal_6a1ed9ac38f4f014db6dfd7c3916126203ff8ca465daa8299bcacfa95fa30c36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
