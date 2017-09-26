<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_155bb75c6591691e1b1c93d4b22f21a6b447951ff2a572f8d5aa50f36dcdebe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155bb75c6591691e1b1c93d4b22f21a6b447951ff2a572f8d5aa50f36dcdebe7->enter($__internal_155bb75c6591691e1b1c93d4b22f21a6b447951ff2a572f8d5aa50f36dcdebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6f52dd8eaadd3efca7828c632ba5cf92b793cb535f8bb5c832befe73969ea1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f52dd8eaadd3efca7828c632ba5cf92b793cb535f8bb5c832befe73969ea1f1->enter($__internal_6f52dd8eaadd3efca7828c632ba5cf92b793cb535f8bb5c832befe73969ea1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_155bb75c6591691e1b1c93d4b22f21a6b447951ff2a572f8d5aa50f36dcdebe7->leave($__internal_155bb75c6591691e1b1c93d4b22f21a6b447951ff2a572f8d5aa50f36dcdebe7_prof);

        
        $__internal_6f52dd8eaadd3efca7828c632ba5cf92b793cb535f8bb5c832befe73969ea1f1->leave($__internal_6f52dd8eaadd3efca7828c632ba5cf92b793cb535f8bb5c832befe73969ea1f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8c8e5eca6a4b5886b7cb856491939d6276d157fb8d97010623fd240b0bf47c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c8e5eca6a4b5886b7cb856491939d6276d157fb8d97010623fd240b0bf47c2->enter($__internal_a8c8e5eca6a4b5886b7cb856491939d6276d157fb8d97010623fd240b0bf47c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36b4dd1993f3bebbceee89fb09b064f2420d98962f1df20c69312449c4eacf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b4dd1993f3bebbceee89fb09b064f2420d98962f1df20c69312449c4eacf2f->enter($__internal_36b4dd1993f3bebbceee89fb09b064f2420d98962f1df20c69312449c4eacf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_36b4dd1993f3bebbceee89fb09b064f2420d98962f1df20c69312449c4eacf2f->leave($__internal_36b4dd1993f3bebbceee89fb09b064f2420d98962f1df20c69312449c4eacf2f_prof);

        
        $__internal_a8c8e5eca6a4b5886b7cb856491939d6276d157fb8d97010623fd240b0bf47c2->leave($__internal_a8c8e5eca6a4b5886b7cb856491939d6276d157fb8d97010623fd240b0bf47c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
