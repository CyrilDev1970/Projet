<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_081152cd1c3c0bada16160ff87e5da5c52e1b6ec98179dbe3db1c4007762537c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081152cd1c3c0bada16160ff87e5da5c52e1b6ec98179dbe3db1c4007762537c->enter($__internal_081152cd1c3c0bada16160ff87e5da5c52e1b6ec98179dbe3db1c4007762537c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_67139373570dcd0bad892d8f1f33be0fb927a30c2fc3e2629127a2cfd3706068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67139373570dcd0bad892d8f1f33be0fb927a30c2fc3e2629127a2cfd3706068->enter($__internal_67139373570dcd0bad892d8f1f33be0fb927a30c2fc3e2629127a2cfd3706068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081152cd1c3c0bada16160ff87e5da5c52e1b6ec98179dbe3db1c4007762537c->leave($__internal_081152cd1c3c0bada16160ff87e5da5c52e1b6ec98179dbe3db1c4007762537c_prof);

        
        $__internal_67139373570dcd0bad892d8f1f33be0fb927a30c2fc3e2629127a2cfd3706068->leave($__internal_67139373570dcd0bad892d8f1f33be0fb927a30c2fc3e2629127a2cfd3706068_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0529241662d94d10849531dfe408ccd001963738f62542a670e94f4ef24c7a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0529241662d94d10849531dfe408ccd001963738f62542a670e94f4ef24c7a62->enter($__internal_0529241662d94d10849531dfe408ccd001963738f62542a670e94f4ef24c7a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0acea0794cbaaaa421dc83968ecaa32e242040ddf569c52b0331aa41c5f2f92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acea0794cbaaaa421dc83968ecaa32e242040ddf569c52b0331aa41c5f2f92e->enter($__internal_0acea0794cbaaaa421dc83968ecaa32e242040ddf569c52b0331aa41c5f2f92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0acea0794cbaaaa421dc83968ecaa32e242040ddf569c52b0331aa41c5f2f92e->leave($__internal_0acea0794cbaaaa421dc83968ecaa32e242040ddf569c52b0331aa41c5f2f92e_prof);

        
        $__internal_0529241662d94d10849531dfe408ccd001963738f62542a670e94f4ef24c7a62->leave($__internal_0529241662d94d10849531dfe408ccd001963738f62542a670e94f4ef24c7a62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
