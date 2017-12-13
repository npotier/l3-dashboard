<?php

/* default/admin.html.twig */
class __TwigTemplate_a9a310d5ece7068ddf8cd7d7272fea34c19fb9ad923dc22db8bad866f6812580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00f237d0930fdfc8f2b500ee0d36f9572b2473651dce2ee2749f6d98f651e69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f237d0930fdfc8f2b500ee0d36f9572b2473651dce2ee2749f6d98f651e69b->enter($__internal_00f237d0930fdfc8f2b500ee0d36f9572b2473651dce2ee2749f6d98f651e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_19c87f2625a0bce7357722654df90336c24cc3c4924018fe41334d7216709657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c87f2625a0bce7357722654df90336c24cc3c4924018fe41334d7216709657->enter($__internal_19c87f2625a0bce7357722654df90336c24cc3c4924018fe41334d7216709657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f237d0930fdfc8f2b500ee0d36f9572b2473651dce2ee2749f6d98f651e69b->leave($__internal_00f237d0930fdfc8f2b500ee0d36f9572b2473651dce2ee2749f6d98f651e69b_prof);

        
        $__internal_19c87f2625a0bce7357722654df90336c24cc3c4924018fe41334d7216709657->leave($__internal_19c87f2625a0bce7357722654df90336c24cc3c4924018fe41334d7216709657_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15622ed1516b690a77fb7a213b8525e4a2a7d4a05b304857ee735ae57b2de9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15622ed1516b690a77fb7a213b8525e4a2a7d4a05b304857ee735ae57b2de9d5->enter($__internal_15622ed1516b690a77fb7a213b8525e4a2a7d4a05b304857ee735ae57b2de9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48be65d0c983616fb33b837deca15013c29c16fe6b898341e637f7d8558b6f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48be65d0c983616fb33b837deca15013c29c16fe6b898341e637f7d8558b6f11->enter($__internal_48be65d0c983616fb33b837deca15013c29c16fe6b898341e637f7d8558b6f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 21
        echo "
    <button type=\"submit\">login</button>
</form>

";
        
        $__internal_48be65d0c983616fb33b837deca15013c29c16fe6b898341e637f7d8558b6f11->leave($__internal_48be65d0c983616fb33b837deca15013c29c16fe6b898341e637f7d8558b6f11_prof);

        
        $__internal_15622ed1516b690a77fb7a213b8525e4a2a7d4a05b304857ee735ae57b2de9d5->leave($__internal_15622ed1516b690a77fb7a213b8525e4a2a7d4a05b304857ee735ae57b2de9d5_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  65 => 11,  60 => 9,  57 => 8,  51 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% block body %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>

{% endblock %}", "default/admin.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/default/admin.html.twig");
    }
}
