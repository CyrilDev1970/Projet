<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_548be8e808d8c9de5ac7120c076f499e1b830de1332848a143a2da8b7ec91fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548be8e808d8c9de5ac7120c076f499e1b830de1332848a143a2da8b7ec91fc9->enter($__internal_548be8e808d8c9de5ac7120c076f499e1b830de1332848a143a2da8b7ec91fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_332e3fabbf77f2b336c0ec8eda18003bb929de1aff1227f5b19353562ba80a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332e3fabbf77f2b336c0ec8eda18003bb929de1aff1227f5b19353562ba80a0f->enter($__internal_332e3fabbf77f2b336c0ec8eda18003bb929de1aff1227f5b19353562ba80a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548be8e808d8c9de5ac7120c076f499e1b830de1332848a143a2da8b7ec91fc9->leave($__internal_548be8e808d8c9de5ac7120c076f499e1b830de1332848a143a2da8b7ec91fc9_prof);

        
        $__internal_332e3fabbf77f2b336c0ec8eda18003bb929de1aff1227f5b19353562ba80a0f->leave($__internal_332e3fabbf77f2b336c0ec8eda18003bb929de1aff1227f5b19353562ba80a0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39ddc3695d3e1abc56fab528f2054422586f29c0c7c826e0ebd3fc3119187549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ddc3695d3e1abc56fab528f2054422586f29c0c7c826e0ebd3fc3119187549->enter($__internal_39ddc3695d3e1abc56fab528f2054422586f29c0c7c826e0ebd3fc3119187549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66e30736797b69a484a000b271bc1c3128e36620271ca678b2f0961a026b767c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e30736797b69a484a000b271bc1c3128e36620271ca678b2f0961a026b767c->enter($__internal_66e30736797b69a484a000b271bc1c3128e36620271ca678b2f0961a026b767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_66e30736797b69a484a000b271bc1c3128e36620271ca678b2f0961a026b767c->leave($__internal_66e30736797b69a484a000b271bc1c3128e36620271ca678b2f0961a026b767c_prof);

        
        $__internal_39ddc3695d3e1abc56fab528f2054422586f29c0c7c826e0ebd3fc3119187549->leave($__internal_39ddc3695d3e1abc56fab528f2054422586f29c0c7c826e0ebd3fc3119187549_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
