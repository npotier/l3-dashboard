<?php

/* fiche/edit.html.twig */
class __TwigTemplate_4f871bda72ae54ec6363516a16cac592e4523cd7cdba875cf3b330a9b5c9e8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/edit.html.twig", 1);
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
        $__internal_2fe0367c0693459ac74b4d90033818846ba180a8487d805b9322863d88bee9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe0367c0693459ac74b4d90033818846ba180a8487d805b9322863d88bee9e2->enter($__internal_2fe0367c0693459ac74b4d90033818846ba180a8487d805b9322863d88bee9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/edit.html.twig"));

        $__internal_791146c5e958576d08f7924c5c96cd5db1dc39d54b1cfb02e1027f0ca9e230ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791146c5e958576d08f7924c5c96cd5db1dc39d54b1cfb02e1027f0ca9e230ff->enter($__internal_791146c5e958576d08f7924c5c96cd5db1dc39d54b1cfb02e1027f0ca9e230ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe0367c0693459ac74b4d90033818846ba180a8487d805b9322863d88bee9e2->leave($__internal_2fe0367c0693459ac74b4d90033818846ba180a8487d805b9322863d88bee9e2_prof);

        
        $__internal_791146c5e958576d08f7924c5c96cd5db1dc39d54b1cfb02e1027f0ca9e230ff->leave($__internal_791146c5e958576d08f7924c5c96cd5db1dc39d54b1cfb02e1027f0ca9e230ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aab5ce0ee46bac2a50f4902efa1865c32e5b3831b63539a5655dc809fc35b1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab5ce0ee46bac2a50f4902efa1865c32e5b3831b63539a5655dc809fc35b1ab->enter($__internal_aab5ce0ee46bac2a50f4902efa1865c32e5b3831b63539a5655dc809fc35b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_777787fa64cdd18ed9d5c4237feb4a1e942c8a1c96edf6d0e8a7cc6308673e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777787fa64cdd18ed9d5c4237feb4a1e942c8a1c96edf6d0e8a7cc6308673e2b->enter($__internal_777787fa64cdd18ed9d5c4237feb4a1e942c8a1c96edf6d0e8a7cc6308673e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_777787fa64cdd18ed9d5c4237feb4a1e942c8a1c96edf6d0e8a7cc6308673e2b->leave($__internal_777787fa64cdd18ed9d5c4237feb4a1e942c8a1c96edf6d0e8a7cc6308673e2b_prof);

        
        $__internal_aab5ce0ee46bac2a50f4902efa1865c32e5b3831b63539a5655dc809fc35b1ab->leave($__internal_aab5ce0ee46bac2a50f4902efa1865c32e5b3831b63539a5655dc809fc35b1ab_prof);

    }

    public function getTemplateName()
    {
        return "fiche/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiche edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiche/edit.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/fiche/edit.html.twig");
    }
}
