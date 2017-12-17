<?php

/* manager/index.html.twig */
class __TwigTemplate_588c7f208bcee9102def422890f45c9830464d5b2e81cd4f4244bf7f1a1e31ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "manager/index.html.twig", 1);
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
        $__internal_3964b857e48b24cbcc6b0e0823250edd4d64cc0e7e2eadd7dcd81cc6a8cb19cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3964b857e48b24cbcc6b0e0823250edd4d64cc0e7e2eadd7dcd81cc6a8cb19cd->enter($__internal_3964b857e48b24cbcc6b0e0823250edd4d64cc0e7e2eadd7dcd81cc6a8cb19cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $__internal_a3b9b0abb140077489dbe87cf03ef35a7b2a557db803cd11d9602606e8618e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b9b0abb140077489dbe87cf03ef35a7b2a557db803cd11d9602606e8618e88->enter($__internal_a3b9b0abb140077489dbe87cf03ef35a7b2a557db803cd11d9602606e8618e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3964b857e48b24cbcc6b0e0823250edd4d64cc0e7e2eadd7dcd81cc6a8cb19cd->leave($__internal_3964b857e48b24cbcc6b0e0823250edd4d64cc0e7e2eadd7dcd81cc6a8cb19cd_prof);

        
        $__internal_a3b9b0abb140077489dbe87cf03ef35a7b2a557db803cd11d9602606e8618e88->leave($__internal_a3b9b0abb140077489dbe87cf03ef35a7b2a557db803cd11d9602606e8618e88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f6f7a50f642ba43120633e05a37355f4fb860eadec3a057bc90ef4e8522b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f6f7a50f642ba43120633e05a37355f4fb860eadec3a057bc90ef4e8522b28->enter($__internal_69f6f7a50f642ba43120633e05a37355f4fb860eadec3a057bc90ef4e8522b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c427c6083026a32517f0ee35e3c1cda2a5e67cd4beafe04e157625d359a65d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c427c6083026a32517f0ee35e3c1cda2a5e67cd4beafe04e157625d359a65d9f->enter($__internal_c427c6083026a32517f0ee35e3c1cda2a5e67cd4beafe04e157625d359a65d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Managers list</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Title</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["managers"]) ? $context["managers"] : $this->getContext($context, "managers")));
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_show", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "firstName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_show", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_edit", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_new");
        echo "\">Create a new manager</a>
        </li>
    </ul>
";
        
        $__internal_c427c6083026a32517f0ee35e3c1cda2a5e67cd4beafe04e157625d359a65d9f->leave($__internal_c427c6083026a32517f0ee35e3c1cda2a5e67cd4beafe04e157625d359a65d9f_prof);

        
        $__internal_69f6f7a50f642ba43120633e05a37355f4fb860eadec3a057bc90ef4e8522b28->leave($__internal_69f6f7a50f642ba43120633e05a37355f4fb860eadec3a057bc90ef4e8522b28_prof);

    }

    public function getTemplateName()
    {
        return "manager/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Managers list</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Title</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for manager in managers %}
            <tr>
                <td><a href=\"{{ path('manager_show', { 'id': manager.id }) }}\">{{ manager.firstName }}</a></td>
                <td>{{ manager.lastName }}</td>
                <td>{{ manager.title }}</td>
                <td>{{ manager.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('manager_show', { 'id': manager.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('manager_edit', { 'id': manager.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('manager_new') }}\">Create a new manager</a>
        </li>
    </ul>
{% endblock %}
", "manager/index.html.twig", "/var/www/html/Symfony/app/Resources/views/manager/index.html.twig");
    }
}
