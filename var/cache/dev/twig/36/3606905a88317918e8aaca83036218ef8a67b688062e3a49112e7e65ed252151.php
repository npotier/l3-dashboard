<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_2f45f570993f90bee37361922ab2d95268936e976a2e31af9e4a3f9b63d22bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f45f570993f90bee37361922ab2d95268936e976a2e31af9e4a3f9b63d22bf1->enter($__internal_2f45f570993f90bee37361922ab2d95268936e976a2e31af9e4a3f9b63d22bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b078a258cb3582d116282bf7355d157315615493b97322675eec9ea0c06fcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b078a258cb3582d116282bf7355d157315615493b97322675eec9ea0c06fcc5->enter($__internal_3b078a258cb3582d116282bf7355d157315615493b97322675eec9ea0c06fcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f45f570993f90bee37361922ab2d95268936e976a2e31af9e4a3f9b63d22bf1->leave($__internal_2f45f570993f90bee37361922ab2d95268936e976a2e31af9e4a3f9b63d22bf1_prof);

        
        $__internal_3b078a258cb3582d116282bf7355d157315615493b97322675eec9ea0c06fcc5->leave($__internal_3b078a258cb3582d116282bf7355d157315615493b97322675eec9ea0c06fcc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa7ba8ceee56b1c613d9b512af89e3c4749a652ce045103f093df2e1070545b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7ba8ceee56b1c613d9b512af89e3c4749a652ce045103f093df2e1070545b2->enter($__internal_aa7ba8ceee56b1c613d9b512af89e3c4749a652ce045103f093df2e1070545b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_292d6093ac84447af29202781664f70d96c00476f3888719e5bdebe14317e59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292d6093ac84447af29202781664f70d96c00476f3888719e5bdebe14317e59f->enter($__internal_292d6093ac84447af29202781664f70d96c00476f3888719e5bdebe14317e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_292d6093ac84447af29202781664f70d96c00476f3888719e5bdebe14317e59f->leave($__internal_292d6093ac84447af29202781664f70d96c00476f3888719e5bdebe14317e59f_prof);

        
        $__internal_aa7ba8ceee56b1c613d9b512af89e3c4749a652ce045103f093df2e1070545b2->leave($__internal_aa7ba8ceee56b1c613d9b512af89e3c4749a652ce045103f093df2e1070545b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e8cf6ff3138b29eb140188044853ced41d7985f2c3f401e1cb1ca2da0f3ebbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8cf6ff3138b29eb140188044853ced41d7985f2c3f401e1cb1ca2da0f3ebbe->enter($__internal_9e8cf6ff3138b29eb140188044853ced41d7985f2c3f401e1cb1ca2da0f3ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18c6e8e6840150f2312549c9399c0743ea0566219639c6743f4521915c9a8db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c6e8e6840150f2312549c9399c0743ea0566219639c6743f4521915c9a8db2->enter($__internal_18c6e8e6840150f2312549c9399c0743ea0566219639c6743f4521915c9a8db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_18c6e8e6840150f2312549c9399c0743ea0566219639c6743f4521915c9a8db2->leave($__internal_18c6e8e6840150f2312549c9399c0743ea0566219639c6743f4521915c9a8db2_prof);

        
        $__internal_9e8cf6ff3138b29eb140188044853ced41d7985f2c3f401e1cb1ca2da0f3ebbe->leave($__internal_9e8cf6ff3138b29eb140188044853ced41d7985f2c3f401e1cb1ca2da0f3ebbe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebfa02d68db0ce1fa8bac54487d19600da14ffb61708d56c360e27825865bbde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfa02d68db0ce1fa8bac54487d19600da14ffb61708d56c360e27825865bbde->enter($__internal_ebfa02d68db0ce1fa8bac54487d19600da14ffb61708d56c360e27825865bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_986c56929733653be5a362589e51b85ba7fe8215dac9a15f05921805263f676f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986c56929733653be5a362589e51b85ba7fe8215dac9a15f05921805263f676f->enter($__internal_986c56929733653be5a362589e51b85ba7fe8215dac9a15f05921805263f676f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_986c56929733653be5a362589e51b85ba7fe8215dac9a15f05921805263f676f->leave($__internal_986c56929733653be5a362589e51b85ba7fe8215dac9a15f05921805263f676f_prof);

        
        $__internal_ebfa02d68db0ce1fa8bac54487d19600da14ffb61708d56c360e27825865bbde->leave($__internal_ebfa02d68db0ce1fa8bac54487d19600da14ffb61708d56c360e27825865bbde_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
