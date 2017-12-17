<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d180a32bfa13f9e61c734866501950104f0f7f7fdff65653ef564c01a233e423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_11553198fdfd0453f63024d7dbb64c89eb51c28955d927bfc4cc9aef04fedfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11553198fdfd0453f63024d7dbb64c89eb51c28955d927bfc4cc9aef04fedfb1->enter($__internal_11553198fdfd0453f63024d7dbb64c89eb51c28955d927bfc4cc9aef04fedfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_54443a8ecf10ef9b994f3930250003945260e068a8f498f5550dfc1b41aafb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54443a8ecf10ef9b994f3930250003945260e068a8f498f5550dfc1b41aafb1d->enter($__internal_54443a8ecf10ef9b994f3930250003945260e068a8f498f5550dfc1b41aafb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11553198fdfd0453f63024d7dbb64c89eb51c28955d927bfc4cc9aef04fedfb1->leave($__internal_11553198fdfd0453f63024d7dbb64c89eb51c28955d927bfc4cc9aef04fedfb1_prof);

        
        $__internal_54443a8ecf10ef9b994f3930250003945260e068a8f498f5550dfc1b41aafb1d->leave($__internal_54443a8ecf10ef9b994f3930250003945260e068a8f498f5550dfc1b41aafb1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8125b30b0e3ed5afb052c3ea92b20f6c5522760039f01fe2bfa52bd7b50213e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8125b30b0e3ed5afb052c3ea92b20f6c5522760039f01fe2bfa52bd7b50213e6->enter($__internal_8125b30b0e3ed5afb052c3ea92b20f6c5522760039f01fe2bfa52bd7b50213e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e47d0e116c3bb7891b270ed434c018034cd4e575777c3d73ffd988db2395b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e47d0e116c3bb7891b270ed434c018034cd4e575777c3d73ffd988db2395b52->enter($__internal_4e47d0e116c3bb7891b270ed434c018034cd4e575777c3d73ffd988db2395b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e47d0e116c3bb7891b270ed434c018034cd4e575777c3d73ffd988db2395b52->leave($__internal_4e47d0e116c3bb7891b270ed434c018034cd4e575777c3d73ffd988db2395b52_prof);

        
        $__internal_8125b30b0e3ed5afb052c3ea92b20f6c5522760039f01fe2bfa52bd7b50213e6->leave($__internal_8125b30b0e3ed5afb052c3ea92b20f6c5522760039f01fe2bfa52bd7b50213e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8122370dc15f549cdda6dfa7134bcaf5f5105f9590409a5ef47598866366fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8122370dc15f549cdda6dfa7134bcaf5f5105f9590409a5ef47598866366fb5->enter($__internal_d8122370dc15f549cdda6dfa7134bcaf5f5105f9590409a5ef47598866366fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51f26896a9e65b3bb179fadcd5e371cc75308a19302feebd6afd0a4fdcd0b0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f26896a9e65b3bb179fadcd5e371cc75308a19302feebd6afd0a4fdcd0b0ac->enter($__internal_51f26896a9e65b3bb179fadcd5e371cc75308a19302feebd6afd0a4fdcd0b0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51f26896a9e65b3bb179fadcd5e371cc75308a19302feebd6afd0a4fdcd0b0ac->leave($__internal_51f26896a9e65b3bb179fadcd5e371cc75308a19302feebd6afd0a4fdcd0b0ac_prof);

        
        $__internal_d8122370dc15f549cdda6dfa7134bcaf5f5105f9590409a5ef47598866366fb5->leave($__internal_d8122370dc15f549cdda6dfa7134bcaf5f5105f9590409a5ef47598866366fb5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a261c94c8d3d130798b77cc83dff9f5b59c15bdcc51c24234a9c253a1b1ee3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a261c94c8d3d130798b77cc83dff9f5b59c15bdcc51c24234a9c253a1b1ee3f->enter($__internal_2a261c94c8d3d130798b77cc83dff9f5b59c15bdcc51c24234a9c253a1b1ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_88109b1dcd0e75fa8169cfc5c00f8159bb71137ab6b034c615a71c43c51aa650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88109b1dcd0e75fa8169cfc5c00f8159bb71137ab6b034c615a71c43c51aa650->enter($__internal_88109b1dcd0e75fa8169cfc5c00f8159bb71137ab6b034c615a71c43c51aa650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_88109b1dcd0e75fa8169cfc5c00f8159bb71137ab6b034c615a71c43c51aa650->leave($__internal_88109b1dcd0e75fa8169cfc5c00f8159bb71137ab6b034c615a71c43c51aa650_prof);

        
        $__internal_2a261c94c8d3d130798b77cc83dff9f5b59c15bdcc51c24234a9c253a1b1ee3f->leave($__internal_2a261c94c8d3d130798b77cc83dff9f5b59c15bdcc51c24234a9c253a1b1ee3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
