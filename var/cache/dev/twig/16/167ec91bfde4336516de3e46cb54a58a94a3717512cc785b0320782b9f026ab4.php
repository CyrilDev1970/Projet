<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8dc97cf982de83ce712e19fd38c1cd014de31b89068b9fd68a467092345ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d27ee987f838fde0bcc4204cee558d7e204f346bd469550fb17e63ca767cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d27ee987f838fde0bcc4204cee558d7e204f346bd469550fb17e63ca767cec->enter($__internal_77d27ee987f838fde0bcc4204cee558d7e204f346bd469550fb17e63ca767cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9d310e26258796410e9fb15470dedb618826769d3e98f740306d943972477ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d310e26258796410e9fb15470dedb618826769d3e98f740306d943972477ba6->enter($__internal_9d310e26258796410e9fb15470dedb618826769d3e98f740306d943972477ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d27ee987f838fde0bcc4204cee558d7e204f346bd469550fb17e63ca767cec->leave($__internal_77d27ee987f838fde0bcc4204cee558d7e204f346bd469550fb17e63ca767cec_prof);

        
        $__internal_9d310e26258796410e9fb15470dedb618826769d3e98f740306d943972477ba6->leave($__internal_9d310e26258796410e9fb15470dedb618826769d3e98f740306d943972477ba6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34191be079bfb68ea294a9af522d455a6894ba4081788779721e930e3d8aa7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34191be079bfb68ea294a9af522d455a6894ba4081788779721e930e3d8aa7d3->enter($__internal_34191be079bfb68ea294a9af522d455a6894ba4081788779721e930e3d8aa7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26b0171d80d8e4f57b57cbcb788a088aa657bef86d0797c0be1b4b7c349a3ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b0171d80d8e4f57b57cbcb788a088aa657bef86d0797c0be1b4b7c349a3ce3->enter($__internal_26b0171d80d8e4f57b57cbcb788a088aa657bef86d0797c0be1b4b7c349a3ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_26b0171d80d8e4f57b57cbcb788a088aa657bef86d0797c0be1b4b7c349a3ce3->leave($__internal_26b0171d80d8e4f57b57cbcb788a088aa657bef86d0797c0be1b4b7c349a3ce3_prof);

        
        $__internal_34191be079bfb68ea294a9af522d455a6894ba4081788779721e930e3d8aa7d3->leave($__internal_34191be079bfb68ea294a9af522d455a6894ba4081788779721e930e3d8aa7d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
