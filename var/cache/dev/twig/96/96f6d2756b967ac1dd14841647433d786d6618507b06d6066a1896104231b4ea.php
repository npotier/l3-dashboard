<?php

/* fiche/new.html.twig */
class __TwigTemplate_918f9df6cabf87280cae6125ad9f0f3187bcd405f604440f753743c269642a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/new.html.twig", 1);
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
        $__internal_26600a4c5f29388505d5fc6b4ea10fe0ce16e011bff1e3341e0dbb7d793df690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26600a4c5f29388505d5fc6b4ea10fe0ce16e011bff1e3341e0dbb7d793df690->enter($__internal_26600a4c5f29388505d5fc6b4ea10fe0ce16e011bff1e3341e0dbb7d793df690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $__internal_269d67ae4dad7848ab817bf5a3a86928991bc7663bcda21285c18eb2578b3cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269d67ae4dad7848ab817bf5a3a86928991bc7663bcda21285c18eb2578b3cec->enter($__internal_269d67ae4dad7848ab817bf5a3a86928991bc7663bcda21285c18eb2578b3cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26600a4c5f29388505d5fc6b4ea10fe0ce16e011bff1e3341e0dbb7d793df690->leave($__internal_26600a4c5f29388505d5fc6b4ea10fe0ce16e011bff1e3341e0dbb7d793df690_prof);

        
        $__internal_269d67ae4dad7848ab817bf5a3a86928991bc7663bcda21285c18eb2578b3cec->leave($__internal_269d67ae4dad7848ab817bf5a3a86928991bc7663bcda21285c18eb2578b3cec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdcfdd444293de02cd80254dd47f0dd613dbd5975ef11838ee1297f98facc955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcfdd444293de02cd80254dd47f0dd613dbd5975ef11838ee1297f98facc955->enter($__internal_cdcfdd444293de02cd80254dd47f0dd613dbd5975ef11838ee1297f98facc955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02c761eab2d6a3e4bcb24435cedeb98916e504bc3ca5399a0ffc80a062633548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c761eab2d6a3e4bcb24435cedeb98916e504bc3ca5399a0ffc80a062633548->enter($__internal_02c761eab2d6a3e4bcb24435cedeb98916e504bc3ca5399a0ffc80a062633548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_02c761eab2d6a3e4bcb24435cedeb98916e504bc3ca5399a0ffc80a062633548->leave($__internal_02c761eab2d6a3e4bcb24435cedeb98916e504bc3ca5399a0ffc80a062633548_prof);

        
        $__internal_cdcfdd444293de02cd80254dd47f0dd613dbd5975ef11838ee1297f98facc955->leave($__internal_cdcfdd444293de02cd80254dd47f0dd613dbd5975ef11838ee1297f98facc955_prof);

    }

    public function getTemplateName()
    {
        return "fiche/new.html.twig";
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
    <h1>Fiche creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fiche/new.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/fiche/new.html.twig");
    }
}
