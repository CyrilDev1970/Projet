<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffab92275824e73ac33adcd297be5b98e43b623c6007dcbde585b2925ecca0d1 extends Twig_Template
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
        $__internal_887630141c311ab9360066def1c4e18a01d1bc37ed6008a1ed3bacab52a67c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887630141c311ab9360066def1c4e18a01d1bc37ed6008a1ed3bacab52a67c77->enter($__internal_887630141c311ab9360066def1c4e18a01d1bc37ed6008a1ed3bacab52a67c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2c07e390541e79763e9d1c8aab6a95d4b16f5f9cd7b4c2e52c6ce02450c96eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c07e390541e79763e9d1c8aab6a95d4b16f5f9cd7b4c2e52c6ce02450c96eb2->enter($__internal_2c07e390541e79763e9d1c8aab6a95d4b16f5f9cd7b4c2e52c6ce02450c96eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_887630141c311ab9360066def1c4e18a01d1bc37ed6008a1ed3bacab52a67c77->leave($__internal_887630141c311ab9360066def1c4e18a01d1bc37ed6008a1ed3bacab52a67c77_prof);

        
        $__internal_2c07e390541e79763e9d1c8aab6a95d4b16f5f9cd7b4c2e52c6ce02450c96eb2->leave($__internal_2c07e390541e79763e9d1c8aab6a95d4b16f5f9cd7b4c2e52c6ce02450c96eb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
