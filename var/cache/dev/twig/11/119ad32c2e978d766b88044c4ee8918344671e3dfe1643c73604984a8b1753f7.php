<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_5d6121db0fa7cddd2a4e9b973d674615bd89715955571e0e918116d1cdd5a8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6121db0fa7cddd2a4e9b973d674615bd89715955571e0e918116d1cdd5a8fb->enter($__internal_5d6121db0fa7cddd2a4e9b973d674615bd89715955571e0e918116d1cdd5a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_aa3e6445b8653528cdd6d4a7da08c1cdb1902458f44ca41bb15812e7641ad349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3e6445b8653528cdd6d4a7da08c1cdb1902458f44ca41bb15812e7641ad349->enter($__internal_aa3e6445b8653528cdd6d4a7da08c1cdb1902458f44ca41bb15812e7641ad349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d6121db0fa7cddd2a4e9b973d674615bd89715955571e0e918116d1cdd5a8fb->leave($__internal_5d6121db0fa7cddd2a4e9b973d674615bd89715955571e0e918116d1cdd5a8fb_prof);

        
        $__internal_aa3e6445b8653528cdd6d4a7da08c1cdb1902458f44ca41bb15812e7641ad349->leave($__internal_aa3e6445b8653528cdd6d4a7da08c1cdb1902458f44ca41bb15812e7641ad349_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46f1a1e028fb171e603e1ee91bff10f9f54e81562f577820e6c9c325d93062f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f1a1e028fb171e603e1ee91bff10f9f54e81562f577820e6c9c325d93062f0->enter($__internal_46f1a1e028fb171e603e1ee91bff10f9f54e81562f577820e6c9c325d93062f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26cae287fd7a91fbbcb986073e4bd5b11f77e7aa478231752277250308b16eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cae287fd7a91fbbcb986073e4bd5b11f77e7aa478231752277250308b16eab->enter($__internal_26cae287fd7a91fbbcb986073e4bd5b11f77e7aa478231752277250308b16eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_26cae287fd7a91fbbcb986073e4bd5b11f77e7aa478231752277250308b16eab->leave($__internal_26cae287fd7a91fbbcb986073e4bd5b11f77e7aa478231752277250308b16eab_prof);

        
        $__internal_46f1a1e028fb171e603e1ee91bff10f9f54e81562f577820e6c9c325d93062f0->leave($__internal_46f1a1e028fb171e603e1ee91bff10f9f54e81562f577820e6c9c325d93062f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
