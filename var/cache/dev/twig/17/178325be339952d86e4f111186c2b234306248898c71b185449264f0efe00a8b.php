<?php

/* projet/show.html.twig */
class __TwigTemplate_702f1f71d0b39390b967376b37ce3b3c740a551b930ea663b3f495bdc323ed2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/show.html.twig", 1);
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
        $__internal_848e1051f41e5e7c452658faf700f21b5553e69979c5c0e581b6723116f3f22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848e1051f41e5e7c452658faf700f21b5553e69979c5c0e581b6723116f3f22b->enter($__internal_848e1051f41e5e7c452658faf700f21b5553e69979c5c0e581b6723116f3f22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $__internal_72701b672e807ca46cead22092a319b365263ccc32414a616de7faf0fda8d337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72701b672e807ca46cead22092a319b365263ccc32414a616de7faf0fda8d337->enter($__internal_72701b672e807ca46cead22092a319b365263ccc32414a616de7faf0fda8d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848e1051f41e5e7c452658faf700f21b5553e69979c5c0e581b6723116f3f22b->leave($__internal_848e1051f41e5e7c452658faf700f21b5553e69979c5c0e581b6723116f3f22b_prof);

        
        $__internal_72701b672e807ca46cead22092a319b365263ccc32414a616de7faf0fda8d337->leave($__internal_72701b672e807ca46cead22092a319b365263ccc32414a616de7faf0fda8d337_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d4debc5df89ea238147264cbc8719e441d925f033ee7cdab82bb9cd8214eba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4debc5df89ea238147264cbc8719e441d925f033ee7cdab82bb9cd8214eba1->enter($__internal_8d4debc5df89ea238147264cbc8719e441d925f033ee7cdab82bb9cd8214eba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3a8c19e4e1fb085228417a8f1f1933e8d5d490709cc3563bfdf4233dd42188a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a8c19e4e1fb085228417a8f1f1933e8d5d490709cc3563bfdf4233dd42188a->enter($__internal_c3a8c19e4e1fb085228417a8f1f1933e8d5d490709cc3563bfdf4233dd42188a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projet</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Projectname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "projectName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datebegin</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "dateBegin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "dateBegin", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Dateend</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "dateEnd", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "dateEnd", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute(($context["projet"] ?? $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c3a8c19e4e1fb085228417a8f1f1933e8d5d490709cc3563bfdf4233dd42188a->leave($__internal_c3a8c19e4e1fb085228417a8f1f1933e8d5d490709cc3563bfdf4233dd42188a_prof);

        
        $__internal_8d4debc5df89ea238147264cbc8719e441d925f033ee7cdab82bb9cd8214eba1->leave($__internal_8d4debc5df89ea238147264cbc8719e441d925f033ee7cdab82bb9cd8214eba1_prof);

    }

    public function getTemplateName()
    {
        return "projet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 35,  98 => 32,  92 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Projet</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ projet.id }}</td>
            </tr>
            <tr>
                <th>Projectname</th>
                <td>{{ projet.projectName }}</td>
            </tr>
            <tr>
                <th>Datebegin</th>
                <td>{% if projet.dateBegin %}{{ projet.dateBegin|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Dateend</th>
                <td>{% if projet.dateEnd %}{{ projet.dateEnd|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "projet/show.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/projet/show.html.twig");
    }
}
