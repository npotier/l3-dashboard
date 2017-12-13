<?php

/* projet/index.html.twig */
class __TwigTemplate_9615453d069f35df74ff259248f471245ae0d010a5cb7cab50e838a75ffbc591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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
        $__internal_3e59005c9edc1dc22922df81feadf11c50ee008dc39b15110a47397b536dc314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e59005c9edc1dc22922df81feadf11c50ee008dc39b15110a47397b536dc314->enter($__internal_3e59005c9edc1dc22922df81feadf11c50ee008dc39b15110a47397b536dc314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_93b903d6e2ae50b675818bf372d9ac3d9614ab793979dbb433ec929b3e6568e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b903d6e2ae50b675818bf372d9ac3d9614ab793979dbb433ec929b3e6568e8->enter($__internal_93b903d6e2ae50b675818bf372d9ac3d9614ab793979dbb433ec929b3e6568e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e59005c9edc1dc22922df81feadf11c50ee008dc39b15110a47397b536dc314->leave($__internal_3e59005c9edc1dc22922df81feadf11c50ee008dc39b15110a47397b536dc314_prof);

        
        $__internal_93b903d6e2ae50b675818bf372d9ac3d9614ab793979dbb433ec929b3e6568e8->leave($__internal_93b903d6e2ae50b675818bf372d9ac3d9614ab793979dbb433ec929b3e6568e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28b3fddbb912f8876a89f562dfd50e4d431e79abc6db578ace31aed05460a52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b3fddbb912f8876a89f562dfd50e4d431e79abc6db578ace31aed05460a52a->enter($__internal_28b3fddbb912f8876a89f562dfd50e4d431e79abc6db578ace31aed05460a52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddbd13d24ef26b543e0edd6fcdec203b28cd1f62c5a4ba3d4bdd35273abea5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbd13d24ef26b543e0edd6fcdec203b28cd1f62c5a4ba3d4bdd35273abea5b6->enter($__internal_ddbd13d24ef26b543e0edd6fcdec203b28cd1f62c5a4ba3d4bdd35273abea5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projets"] ?? $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "projectName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["projet"], "dateBegin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateBegin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["projet"], "dateEnd", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateEnd", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new projet</a>
        </li>
    </ul>
";
        
        $__internal_ddbd13d24ef26b543e0edd6fcdec203b28cd1f62c5a4ba3d4bdd35273abea5b6->leave($__internal_ddbd13d24ef26b543e0edd6fcdec203b28cd1f62c5a4ba3d4bdd35273abea5b6_prof);

        
        $__internal_28b3fddbb912f8876a89f562dfd50e4d431e79abc6db578ace31aed05460a52a->leave($__internal_28b3fddbb912f8876a89f562dfd50e4d431e79abc6db578ace31aed05460a52a_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  114 => 35,  102 => 29,  96 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                <td>{{ projet.projectName }}</td>
                <td>{% if projet.dateBegin %}{{ projet.dateBegin|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if projet.dateEnd %}{{ projet.dateEnd|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
    </ul>
{% endblock %}
", "projet/index.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/projet/index.html.twig");
    }
}
