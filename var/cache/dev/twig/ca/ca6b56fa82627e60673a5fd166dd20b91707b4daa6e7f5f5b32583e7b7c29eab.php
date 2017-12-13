<?php

/* manager/show.html.twig */
class __TwigTemplate_2729647dd673a16afafafbb442b3d4f63ce5532913bc96f7598a2f8879b2ade0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "manager/show.html.twig", 1);
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
        $__internal_8e95ebca635ba16e8ab21d119b411c571b5517d9a7812f97e5cabe7b86e625ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e95ebca635ba16e8ab21d119b411c571b5517d9a7812f97e5cabe7b86e625ad->enter($__internal_8e95ebca635ba16e8ab21d119b411c571b5517d9a7812f97e5cabe7b86e625ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/show.html.twig"));

        $__internal_e1bd932dde0f2b9bf577e1e25b75c0e494d5ce52af7076f5fb19b9c950ba326e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bd932dde0f2b9bf577e1e25b75c0e494d5ce52af7076f5fb19b9c950ba326e->enter($__internal_e1bd932dde0f2b9bf577e1e25b75c0e494d5ce52af7076f5fb19b9c950ba326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e95ebca635ba16e8ab21d119b411c571b5517d9a7812f97e5cabe7b86e625ad->leave($__internal_8e95ebca635ba16e8ab21d119b411c571b5517d9a7812f97e5cabe7b86e625ad_prof);

        
        $__internal_e1bd932dde0f2b9bf577e1e25b75c0e494d5ce52af7076f5fb19b9c950ba326e->leave($__internal_e1bd932dde0f2b9bf577e1e25b75c0e494d5ce52af7076f5fb19b9c950ba326e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bc10c801cb42be63d7cd6ce2bcfb5bc76b218708b44c4779ffc5cf89520e88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc10c801cb42be63d7cd6ce2bcfb5bc76b218708b44c4779ffc5cf89520e88d->enter($__internal_5bc10c801cb42be63d7cd6ce2bcfb5bc76b218708b44c4779ffc5cf89520e88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70919332aa16607c124ed46ee20975fbe9226d39f585b575ac21e0c73a752687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70919332aa16607c124ed46ee20975fbe9226d39f585b575ac21e0c73a752687->enter($__internal_70919332aa16607c124ed46ee20975fbe9226d39f585b575ac21e0c73a752687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Manager</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["manager"] ?? $this->getContext($context, "manager")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["manager"] ?? $this->getContext($context, "manager")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["manager"] ?? $this->getContext($context, "manager")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["manager"] ?? $this->getContext($context, "manager")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_edit", array("id" => $this->getAttribute(($context["manager"] ?? $this->getContext($context, "manager")), "id", array()))), "html", null, true);
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
        
        $__internal_70919332aa16607c124ed46ee20975fbe9226d39f585b575ac21e0c73a752687->leave($__internal_70919332aa16607c124ed46ee20975fbe9226d39f585b575ac21e0c73a752687_prof);

        
        $__internal_5bc10c801cb42be63d7cd6ce2bcfb5bc76b218708b44c4779ffc5cf89520e88d->leave($__internal_5bc10c801cb42be63d7cd6ce2bcfb5bc76b218708b44c4779ffc5cf89520e88d_prof);

    }

    public function getTemplateName()
    {
        return "manager/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Manager</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ manager.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ manager.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ manager.lastName }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ manager.title }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('manager_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('manager_edit', { 'id': manager.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "manager/show.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/manager/show.html.twig");
    }
}
