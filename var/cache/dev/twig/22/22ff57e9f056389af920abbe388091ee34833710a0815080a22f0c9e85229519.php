<?php

/* manager/index.html.twig */
class __TwigTemplate_d286169d14b7d38ce7fbae6e3b7573955b9ee69d9209235ddb3b0503b642d016 extends Twig_Template
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
        $__internal_a0de68ef17cbf863a2b2f82ab0c79fb9d116d513d6f21380ed50542472a61e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0de68ef17cbf863a2b2f82ab0c79fb9d116d513d6f21380ed50542472a61e89->enter($__internal_a0de68ef17cbf863a2b2f82ab0c79fb9d116d513d6f21380ed50542472a61e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $__internal_52e5a367c6c1e41387d57a3beaf03f5ece97bc71650c21f7c7c90d90f620511e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e5a367c6c1e41387d57a3beaf03f5ece97bc71650c21f7c7c90d90f620511e->enter($__internal_52e5a367c6c1e41387d57a3beaf03f5ece97bc71650c21f7c7c90d90f620511e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0de68ef17cbf863a2b2f82ab0c79fb9d116d513d6f21380ed50542472a61e89->leave($__internal_a0de68ef17cbf863a2b2f82ab0c79fb9d116d513d6f21380ed50542472a61e89_prof);

        
        $__internal_52e5a367c6c1e41387d57a3beaf03f5ece97bc71650c21f7c7c90d90f620511e->leave($__internal_52e5a367c6c1e41387d57a3beaf03f5ece97bc71650c21f7c7c90d90f620511e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58f3c938ce9865d5a53f6e32f98f7a22c81f0a7bacb3c506388b9a1a0a5e5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58f3c938ce9865d5a53f6e32f98f7a22c81f0a7bacb3c506388b9a1a0a5e5fd->enter($__internal_b58f3c938ce9865d5a53f6e32f98f7a22c81f0a7bacb3c506388b9a1a0a5e5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5113e227018939afef88fe5509cd425d56615f71386f99bb80f0638ea605c527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5113e227018939afef88fe5509cd425d56615f71386f99bb80f0638ea605c527->enter($__internal_5113e227018939afef88fe5509cd425d56615f71386f99bb80f0638ea605c527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Managers list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["managers"] ?? $this->getContext($context, "managers")));
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_show", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "title", array()), "html", null, true);
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
        
        $__internal_5113e227018939afef88fe5509cd425d56615f71386f99bb80f0638ea605c527->leave($__internal_5113e227018939afef88fe5509cd425d56615f71386f99bb80f0638ea605c527_prof);

        
        $__internal_b58f3c938ce9865d5a53f6e32f98f7a22c81f0a7bacb3c506388b9a1a0a5e5fd->leave($__internal_b58f3c938ce9865d5a53f6e32f98f7a22c81f0a7bacb3c506388b9a1a0a5e5fd_prof);

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
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for manager in managers %}
            <tr>
                <td><a href=\"{{ path('manager_show', { 'id': manager.id }) }}\">{{ manager.id }}</a></td>
                <td>{{ manager.firstName }}</td>
                <td>{{ manager.lastName }}</td>
                <td>{{ manager.title }}</td>
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
", "manager/index.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/manager/index.html.twig");
    }
}
