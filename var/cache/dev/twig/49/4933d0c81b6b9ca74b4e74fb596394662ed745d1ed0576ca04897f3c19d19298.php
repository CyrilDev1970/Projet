<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d2dea7177433e90868c4e3c5e90338cf5f67d3aa6fcf89fcce6b51c5a765566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2dea7177433e90868c4e3c5e90338cf5f67d3aa6fcf89fcce6b51c5a765566->enter($__internal_7d2dea7177433e90868c4e3c5e90338cf5f67d3aa6fcf89fcce6b51c5a765566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ae122c46bd5418de24a39378b38d9e69e65f99491d8c5c35e491a99aa9e2542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae122c46bd5418de24a39378b38d9e69e65f99491d8c5c35e491a99aa9e2542f->enter($__internal_ae122c46bd5418de24a39378b38d9e69e65f99491d8c5c35e491a99aa9e2542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2dea7177433e90868c4e3c5e90338cf5f67d3aa6fcf89fcce6b51c5a765566->leave($__internal_7d2dea7177433e90868c4e3c5e90338cf5f67d3aa6fcf89fcce6b51c5a765566_prof);

        
        $__internal_ae122c46bd5418de24a39378b38d9e69e65f99491d8c5c35e491a99aa9e2542f->leave($__internal_ae122c46bd5418de24a39378b38d9e69e65f99491d8c5c35e491a99aa9e2542f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae9c20ef808adfe2ce3d7b00e8e4b58b013bc627f0cf2947125c816796e65db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c20ef808adfe2ce3d7b00e8e4b58b013bc627f0cf2947125c816796e65db8->enter($__internal_ae9c20ef808adfe2ce3d7b00e8e4b58b013bc627f0cf2947125c816796e65db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2703b9659b3b0c154e67299e1acd277fd44ce09778c4c7bab9b339680a3c798b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2703b9659b3b0c154e67299e1acd277fd44ce09778c4c7bab9b339680a3c798b->enter($__internal_2703b9659b3b0c154e67299e1acd277fd44ce09778c4c7bab9b339680a3c798b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2703b9659b3b0c154e67299e1acd277fd44ce09778c4c7bab9b339680a3c798b->leave($__internal_2703b9659b3b0c154e67299e1acd277fd44ce09778c4c7bab9b339680a3c798b_prof);

        
        $__internal_ae9c20ef808adfe2ce3d7b00e8e4b58b013bc627f0cf2947125c816796e65db8->leave($__internal_ae9c20ef808adfe2ce3d7b00e8e4b58b013bc627f0cf2947125c816796e65db8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8406115146415b8cda337e4e252f4ed427be6fea4157a7048c5d4fa5442ad9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8406115146415b8cda337e4e252f4ed427be6fea4157a7048c5d4fa5442ad9fa->enter($__internal_8406115146415b8cda337e4e252f4ed427be6fea4157a7048c5d4fa5442ad9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3995eb6d044299bd34ecf7044ff1617bd618d7224632391dd060c1b27ae46868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3995eb6d044299bd34ecf7044ff1617bd618d7224632391dd060c1b27ae46868->enter($__internal_3995eb6d044299bd34ecf7044ff1617bd618d7224632391dd060c1b27ae46868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3995eb6d044299bd34ecf7044ff1617bd618d7224632391dd060c1b27ae46868->leave($__internal_3995eb6d044299bd34ecf7044ff1617bd618d7224632391dd060c1b27ae46868_prof);

        
        $__internal_8406115146415b8cda337e4e252f4ed427be6fea4157a7048c5d4fa5442ad9fa->leave($__internal_8406115146415b8cda337e4e252f4ed427be6fea4157a7048c5d4fa5442ad9fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
