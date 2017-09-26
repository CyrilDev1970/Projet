<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e785fd4fd785e5520ae603179a9554951ca485b56c3a0ba83809997c686fc636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e785fd4fd785e5520ae603179a9554951ca485b56c3a0ba83809997c686fc636->enter($__internal_e785fd4fd785e5520ae603179a9554951ca485b56c3a0ba83809997c686fc636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9b2da13256ebc9a80e80e8f3826c6f561b0f5971b9ca0d814be162338ffdfe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2da13256ebc9a80e80e8f3826c6f561b0f5971b9ca0d814be162338ffdfe43->enter($__internal_9b2da13256ebc9a80e80e8f3826c6f561b0f5971b9ca0d814be162338ffdfe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e785fd4fd785e5520ae603179a9554951ca485b56c3a0ba83809997c686fc636->leave($__internal_e785fd4fd785e5520ae603179a9554951ca485b56c3a0ba83809997c686fc636_prof);

        
        $__internal_9b2da13256ebc9a80e80e8f3826c6f561b0f5971b9ca0d814be162338ffdfe43->leave($__internal_9b2da13256ebc9a80e80e8f3826c6f561b0f5971b9ca0d814be162338ffdfe43_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8866ef7c6da5a14d3dd715e0737cb092ea62ac1bb0d9127bb845a77e529d6daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8866ef7c6da5a14d3dd715e0737cb092ea62ac1bb0d9127bb845a77e529d6daf->enter($__internal_8866ef7c6da5a14d3dd715e0737cb092ea62ac1bb0d9127bb845a77e529d6daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ae2e44eb3433a9817b881fb140a828fcc9dbc284dc03e344f720b95e80832f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e44eb3433a9817b881fb140a828fcc9dbc284dc03e344f720b95e80832f8a->enter($__internal_ae2e44eb3433a9817b881fb140a828fcc9dbc284dc03e344f720b95e80832f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ae2e44eb3433a9817b881fb140a828fcc9dbc284dc03e344f720b95e80832f8a->leave($__internal_ae2e44eb3433a9817b881fb140a828fcc9dbc284dc03e344f720b95e80832f8a_prof);

        
        $__internal_8866ef7c6da5a14d3dd715e0737cb092ea62ac1bb0d9127bb845a77e529d6daf->leave($__internal_8866ef7c6da5a14d3dd715e0737cb092ea62ac1bb0d9127bb845a77e529d6daf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93170b9b0aeefb9f85acee95a6c126559c1c51792d077b33466fd2e116a25de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93170b9b0aeefb9f85acee95a6c126559c1c51792d077b33466fd2e116a25de3->enter($__internal_93170b9b0aeefb9f85acee95a6c126559c1c51792d077b33466fd2e116a25de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d06028d86322f5ef0097cc1fbb2ba625c627c9440fd113a5ce5cd5f3797b296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d06028d86322f5ef0097cc1fbb2ba625c627c9440fd113a5ce5cd5f3797b296->enter($__internal_6d06028d86322f5ef0097cc1fbb2ba625c627c9440fd113a5ce5cd5f3797b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6d06028d86322f5ef0097cc1fbb2ba625c627c9440fd113a5ce5cd5f3797b296->leave($__internal_6d06028d86322f5ef0097cc1fbb2ba625c627c9440fd113a5ce5cd5f3797b296_prof);

        
        $__internal_93170b9b0aeefb9f85acee95a6c126559c1c51792d077b33466fd2e116a25de3->leave($__internal_93170b9b0aeefb9f85acee95a6c126559c1c51792d077b33466fd2e116a25de3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
