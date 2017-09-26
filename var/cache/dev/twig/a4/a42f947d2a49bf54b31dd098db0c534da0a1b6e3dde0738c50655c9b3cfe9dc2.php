<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_5a7d1c7d26a2533450d95e4a4a69db3263669a4fdba22c947a416109cfb5ee3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7d1c7d26a2533450d95e4a4a69db3263669a4fdba22c947a416109cfb5ee3e->enter($__internal_5a7d1c7d26a2533450d95e4a4a69db3263669a4fdba22c947a416109cfb5ee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_75d5a2d6d74e63a6101c20cd49d32b596d7c3c26f7c4ee26e2d0a15ec720cf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d5a2d6d74e63a6101c20cd49d32b596d7c3c26f7c4ee26e2d0a15ec720cf01->enter($__internal_75d5a2d6d74e63a6101c20cd49d32b596d7c3c26f7c4ee26e2d0a15ec720cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5a7d1c7d26a2533450d95e4a4a69db3263669a4fdba22c947a416109cfb5ee3e->leave($__internal_5a7d1c7d26a2533450d95e4a4a69db3263669a4fdba22c947a416109cfb5ee3e_prof);

        
        $__internal_75d5a2d6d74e63a6101c20cd49d32b596d7c3c26f7c4ee26e2d0a15ec720cf01->leave($__internal_75d5a2d6d74e63a6101c20cd49d32b596d7c3c26f7c4ee26e2d0a15ec720cf01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
