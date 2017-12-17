<?php

/* user/index.html.twig */
class __TwigTemplate_936d7c3f7858cac9f6cd8e6bd7b419706308f3c8bf917358f7414075119a13f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_b3b82cd672e9dacaa0b2ccbe5c0769cde720b9c8dea9b0a99967e4e174daf806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b82cd672e9dacaa0b2ccbe5c0769cde720b9c8dea9b0a99967e4e174daf806->enter($__internal_b3b82cd672e9dacaa0b2ccbe5c0769cde720b9c8dea9b0a99967e4e174daf806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_d10ad36d6f3c0cb4525356f67ce5a4b3ac44f49fe5660a467ee07706119d7ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10ad36d6f3c0cb4525356f67ce5a4b3ac44f49fe5660a467ee07706119d7ece->enter($__internal_d10ad36d6f3c0cb4525356f67ce5a4b3ac44f49fe5660a467ee07706119d7ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b82cd672e9dacaa0b2ccbe5c0769cde720b9c8dea9b0a99967e4e174daf806->leave($__internal_b3b82cd672e9dacaa0b2ccbe5c0769cde720b9c8dea9b0a99967e4e174daf806_prof);

        
        $__internal_d10ad36d6f3c0cb4525356f67ce5a4b3ac44f49fe5660a467ee07706119d7ece->leave($__internal_d10ad36d6f3c0cb4525356f67ce5a4b3ac44f49fe5660a467ee07706119d7ece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_970b1ee45c5bf096adf1aca0f7d29c79945f0732e3de5d9aa70c35a56171b4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970b1ee45c5bf096adf1aca0f7d29c79945f0732e3de5d9aa70c35a56171b4c3->enter($__internal_970b1ee45c5bf096adf1aca0f7d29c79945f0732e3de5d9aa70c35a56171b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75268f05a316f11ececd0573463b4a8bed907c8c48782efbe6a8fd62a40c336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75268f05a316f11ececd0573463b4a8bed907c8c48782efbe6a8fd62a40c336c->enter($__internal_75268f05a316f11ececd0573463b4a8bed907c8c48782efbe6a8fd62a40c336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_75268f05a316f11ececd0573463b4a8bed907c8c48782efbe6a8fd62a40c336c->leave($__internal_75268f05a316f11ececd0573463b4a8bed907c8c48782efbe6a8fd62a40c336c_prof);

        
        $__internal_970b1ee45c5bf096adf1aca0f7d29c79945f0732e3de5d9aa70c35a56171b4c3->leave($__internal_970b1ee45c5bf096adf1aca0f7d29c79945f0732e3de5d9aa70c35a56171b4c3_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a></td>
                <td>{{ user.password }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/var/www/html/Symfony/app/Resources/views/user/index.html.twig");
    }
}
