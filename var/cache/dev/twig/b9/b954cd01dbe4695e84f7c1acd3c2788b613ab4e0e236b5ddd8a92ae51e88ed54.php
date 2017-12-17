<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34e121b3ad8c217b47a6565552a2db11de10c34f038973525ddcb0506f3d00cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e663092af32ed2be494738c4268eed8a7f901dc75c15374ca9de9626998ed97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e663092af32ed2be494738c4268eed8a7f901dc75c15374ca9de9626998ed97->enter($__internal_0e663092af32ed2be494738c4268eed8a7f901dc75c15374ca9de9626998ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_221cc0529cb65726478058540cf03610d2207bfc4fd905a7855c6e6d3712fc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221cc0529cb65726478058540cf03610d2207bfc4fd905a7855c6e6d3712fc8f->enter($__internal_221cc0529cb65726478058540cf03610d2207bfc4fd905a7855c6e6d3712fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e663092af32ed2be494738c4268eed8a7f901dc75c15374ca9de9626998ed97->leave($__internal_0e663092af32ed2be494738c4268eed8a7f901dc75c15374ca9de9626998ed97_prof);

        
        $__internal_221cc0529cb65726478058540cf03610d2207bfc4fd905a7855c6e6d3712fc8f->leave($__internal_221cc0529cb65726478058540cf03610d2207bfc4fd905a7855c6e6d3712fc8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09462de6f9df9aedc4c4cb98dcbd133209c3434d791c54a35ff76fb4b7c0a6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09462de6f9df9aedc4c4cb98dcbd133209c3434d791c54a35ff76fb4b7c0a6cf->enter($__internal_09462de6f9df9aedc4c4cb98dcbd133209c3434d791c54a35ff76fb4b7c0a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_99bb3a850a2eea5c7a49199aeebe3058c7ce4e10d2382ef0294bff1775f35f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bb3a850a2eea5c7a49199aeebe3058c7ce4e10d2382ef0294bff1775f35f5a->enter($__internal_99bb3a850a2eea5c7a49199aeebe3058c7ce4e10d2382ef0294bff1775f35f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99bb3a850a2eea5c7a49199aeebe3058c7ce4e10d2382ef0294bff1775f35f5a->leave($__internal_99bb3a850a2eea5c7a49199aeebe3058c7ce4e10d2382ef0294bff1775f35f5a_prof);

        
        $__internal_09462de6f9df9aedc4c4cb98dcbd133209c3434d791c54a35ff76fb4b7c0a6cf->leave($__internal_09462de6f9df9aedc4c4cb98dcbd133209c3434d791c54a35ff76fb4b7c0a6cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37bd1e9d265cd812216ff733306e9e5116a4645ea164542b6ea5c7f9ccf78608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bd1e9d265cd812216ff733306e9e5116a4645ea164542b6ea5c7f9ccf78608->enter($__internal_37bd1e9d265cd812216ff733306e9e5116a4645ea164542b6ea5c7f9ccf78608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c355a5c610281dfdcc8967af1739553073f124fe78dc0392357818be7500a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c355a5c610281dfdcc8967af1739553073f124fe78dc0392357818be7500a1c->enter($__internal_5c355a5c610281dfdcc8967af1739553073f124fe78dc0392357818be7500a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c355a5c610281dfdcc8967af1739553073f124fe78dc0392357818be7500a1c->leave($__internal_5c355a5c610281dfdcc8967af1739553073f124fe78dc0392357818be7500a1c_prof);

        
        $__internal_37bd1e9d265cd812216ff733306e9e5116a4645ea164542b6ea5c7f9ccf78608->leave($__internal_37bd1e9d265cd812216ff733306e9e5116a4645ea164542b6ea5c7f9ccf78608_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57e97438898679fd6cb57b193acdbf24a42400f4840fe470863d8edc7dc70671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e97438898679fd6cb57b193acdbf24a42400f4840fe470863d8edc7dc70671->enter($__internal_57e97438898679fd6cb57b193acdbf24a42400f4840fe470863d8edc7dc70671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a5a9fd01bb7ab1739767c894908a524dc5a9707b2f3e8aebefd9ae50a662358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5a9fd01bb7ab1739767c894908a524dc5a9707b2f3e8aebefd9ae50a662358->enter($__internal_5a5a9fd01bb7ab1739767c894908a524dc5a9707b2f3e8aebefd9ae50a662358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a5a9fd01bb7ab1739767c894908a524dc5a9707b2f3e8aebefd9ae50a662358->leave($__internal_5a5a9fd01bb7ab1739767c894908a524dc5a9707b2f3e8aebefd9ae50a662358_prof);

        
        $__internal_57e97438898679fd6cb57b193acdbf24a42400f4840fe470863d8edc7dc70671->leave($__internal_57e97438898679fd6cb57b193acdbf24a42400f4840fe470863d8edc7dc70671_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
