<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4f59bb411bf08e47a2b47008f757a48f67e5e529f28980527914954ca778905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2185169c076548051fe907e7820b799b79a30fc341eda79cc9e430a88d00baed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2185169c076548051fe907e7820b799b79a30fc341eda79cc9e430a88d00baed->enter($__internal_2185169c076548051fe907e7820b799b79a30fc341eda79cc9e430a88d00baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_461443ebb57333cdcbcb19cfb566fd94483e0425f97f44ec974c0853ea8e924e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461443ebb57333cdcbcb19cfb566fd94483e0425f97f44ec974c0853ea8e924e->enter($__internal_461443ebb57333cdcbcb19cfb566fd94483e0425f97f44ec974c0853ea8e924e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2185169c076548051fe907e7820b799b79a30fc341eda79cc9e430a88d00baed->leave($__internal_2185169c076548051fe907e7820b799b79a30fc341eda79cc9e430a88d00baed_prof);

        
        $__internal_461443ebb57333cdcbcb19cfb566fd94483e0425f97f44ec974c0853ea8e924e->leave($__internal_461443ebb57333cdcbcb19cfb566fd94483e0425f97f44ec974c0853ea8e924e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f9f9021ae77f4e03a6a8f24566f5e33726cd3b66cbe95c670d574287c626483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9f9021ae77f4e03a6a8f24566f5e33726cd3b66cbe95c670d574287c626483->enter($__internal_3f9f9021ae77f4e03a6a8f24566f5e33726cd3b66cbe95c670d574287c626483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8db496180e50ae980f65da096476dac7c7ba0fb26c18112888302c1968abdae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db496180e50ae980f65da096476dac7c7ba0fb26c18112888302c1968abdae4->enter($__internal_8db496180e50ae980f65da096476dac7c7ba0fb26c18112888302c1968abdae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8db496180e50ae980f65da096476dac7c7ba0fb26c18112888302c1968abdae4->leave($__internal_8db496180e50ae980f65da096476dac7c7ba0fb26c18112888302c1968abdae4_prof);

        
        $__internal_3f9f9021ae77f4e03a6a8f24566f5e33726cd3b66cbe95c670d574287c626483->leave($__internal_3f9f9021ae77f4e03a6a8f24566f5e33726cd3b66cbe95c670d574287c626483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
