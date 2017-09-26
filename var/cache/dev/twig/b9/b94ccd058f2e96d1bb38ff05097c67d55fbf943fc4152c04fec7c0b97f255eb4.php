<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3a50f34589a8ea9ad3c38c303a22b444ac0723d7b4183d25a102887305c1cd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a50f34589a8ea9ad3c38c303a22b444ac0723d7b4183d25a102887305c1cd6a->enter($__internal_3a50f34589a8ea9ad3c38c303a22b444ac0723d7b4183d25a102887305c1cd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9930bcf311e0d537674952b4c038ca75c77506ef9773d707e44037d7b81ac865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9930bcf311e0d537674952b4c038ca75c77506ef9773d707e44037d7b81ac865->enter($__internal_9930bcf311e0d537674952b4c038ca75c77506ef9773d707e44037d7b81ac865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a50f34589a8ea9ad3c38c303a22b444ac0723d7b4183d25a102887305c1cd6a->leave($__internal_3a50f34589a8ea9ad3c38c303a22b444ac0723d7b4183d25a102887305c1cd6a_prof);

        
        $__internal_9930bcf311e0d537674952b4c038ca75c77506ef9773d707e44037d7b81ac865->leave($__internal_9930bcf311e0d537674952b4c038ca75c77506ef9773d707e44037d7b81ac865_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bc1261c659c78e9f23d5bc7602ae40b9dc9ca635fea7a26593c40254173b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc1261c659c78e9f23d5bc7602ae40b9dc9ca635fea7a26593c40254173b2de->enter($__internal_1bc1261c659c78e9f23d5bc7602ae40b9dc9ca635fea7a26593c40254173b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c218b85bc37faab9731e166e06374b1066ed353cc3f35f0a1dd03f8d7020278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c218b85bc37faab9731e166e06374b1066ed353cc3f35f0a1dd03f8d7020278->enter($__internal_0c218b85bc37faab9731e166e06374b1066ed353cc3f35f0a1dd03f8d7020278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0c218b85bc37faab9731e166e06374b1066ed353cc3f35f0a1dd03f8d7020278->leave($__internal_0c218b85bc37faab9731e166e06374b1066ed353cc3f35f0a1dd03f8d7020278_prof);

        
        $__internal_1bc1261c659c78e9f23d5bc7602ae40b9dc9ca635fea7a26593c40254173b2de->leave($__internal_1bc1261c659c78e9f23d5bc7602ae40b9dc9ca635fea7a26593c40254173b2de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
