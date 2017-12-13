<?php

/* projet/new.html.twig */
class __TwigTemplate_36cf24c97c4081a194eed3a186bb73822ba318f90e7ccbc1a8efbbc48a91330d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/new.html.twig", 1);
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
        $__internal_a27a169eb8f4247ae18131e0fbd5ff3f45a751daf808b4d0da934fe39e714c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27a169eb8f4247ae18131e0fbd5ff3f45a751daf808b4d0da934fe39e714c4c->enter($__internal_a27a169eb8f4247ae18131e0fbd5ff3f45a751daf808b4d0da934fe39e714c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/new.html.twig"));

        $__internal_49b4451e52d90a013599f798b34081f512c35886237f14ab3ae498d90b42fc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b4451e52d90a013599f798b34081f512c35886237f14ab3ae498d90b42fc15->enter($__internal_49b4451e52d90a013599f798b34081f512c35886237f14ab3ae498d90b42fc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27a169eb8f4247ae18131e0fbd5ff3f45a751daf808b4d0da934fe39e714c4c->leave($__internal_a27a169eb8f4247ae18131e0fbd5ff3f45a751daf808b4d0da934fe39e714c4c_prof);

        
        $__internal_49b4451e52d90a013599f798b34081f512c35886237f14ab3ae498d90b42fc15->leave($__internal_49b4451e52d90a013599f798b34081f512c35886237f14ab3ae498d90b42fc15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b96724e91b25357733ae91021866ac89d96e076b74cfd60fb2bd0b6dfb7e4ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96724e91b25357733ae91021866ac89d96e076b74cfd60fb2bd0b6dfb7e4ccb->enter($__internal_b96724e91b25357733ae91021866ac89d96e076b74cfd60fb2bd0b6dfb7e4ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af17fb44a294c5d4665f42aff8b961422c601df9af9e8788a7e3ad4089bc9345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af17fb44a294c5d4665f42aff8b961422c601df9af9e8788a7e3ad4089bc9345->enter($__internal_af17fb44a294c5d4665f42aff8b961422c601df9af9e8788a7e3ad4089bc9345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projet creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_af17fb44a294c5d4665f42aff8b961422c601df9af9e8788a7e3ad4089bc9345->leave($__internal_af17fb44a294c5d4665f42aff8b961422c601df9af9e8788a7e3ad4089bc9345_prof);

        
        $__internal_b96724e91b25357733ae91021866ac89d96e076b74cfd60fb2bd0b6dfb7e4ccb->leave($__internal_b96724e91b25357733ae91021866ac89d96e076b74cfd60fb2bd0b6dfb7e4ccb_prof);

    }

    public function getTemplateName()
    {
        return "projet/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Projet creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('projet_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "projet/new.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/projet/new.html.twig");
    }
}
