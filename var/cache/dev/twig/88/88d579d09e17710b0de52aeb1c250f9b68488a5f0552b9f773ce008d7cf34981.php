<?php

/* fiche1/index.html.twig */
class __TwigTemplate_600729446daadb5e72834abaa2ccee008a46dfe1680fd92e1bf78664aadf3a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche1/index.html.twig", 1);
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
        $__internal_3a95fe2b86edd5b5805c0bdb70915aaad39aecb9a927d02d6f7ccc3b5369c625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a95fe2b86edd5b5805c0bdb70915aaad39aecb9a927d02d6f7ccc3b5369c625->enter($__internal_3a95fe2b86edd5b5805c0bdb70915aaad39aecb9a927d02d6f7ccc3b5369c625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/index.html.twig"));

        $__internal_2e5dddb4167253341e96f2bb363698dd068ffa41baca8d712be987351ed47abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5dddb4167253341e96f2bb363698dd068ffa41baca8d712be987351ed47abf->enter($__internal_2e5dddb4167253341e96f2bb363698dd068ffa41baca8d712be987351ed47abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a95fe2b86edd5b5805c0bdb70915aaad39aecb9a927d02d6f7ccc3b5369c625->leave($__internal_3a95fe2b86edd5b5805c0bdb70915aaad39aecb9a927d02d6f7ccc3b5369c625_prof);

        
        $__internal_2e5dddb4167253341e96f2bb363698dd068ffa41baca8d712be987351ed47abf->leave($__internal_2e5dddb4167253341e96f2bb363698dd068ffa41baca8d712be987351ed47abf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1e84624abbf97978957639ec48c97bfa1b6ee838f994ed0197977406cc25b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e84624abbf97978957639ec48c97bfa1b6ee838f994ed0197977406cc25b2->enter($__internal_6b1e84624abbf97978957639ec48c97bfa1b6ee838f994ed0197977406cc25b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6dcf9f4499024c3d71e3cae07d5a1d6351f420dc0dd3d767c5bd800dbb58c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6dcf9f4499024c3d71e3cae07d5a1d6351f420dc0dd3d767c5bd800dbb58c62->enter($__internal_c6dcf9f4499024c3d71e3cae07d5a1d6351f420dc0dd3d767c5bd800dbb58c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche1s list</h1>

    <table>
        <thead>
            <tr>
                <th>Projectname</th>
                <th>Fichedate</th>
                <th>Nbdaydone</th>
                <th>Nbdaysold</th>
                <th>Progression</th>
                <th>Comment</th>
                <th>Creater</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiche1s"]) ? $context["fiche1s"] : $this->getContext($context, "fiche1s")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche1"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_show", array("id" => $this->getAttribute($context["fiche1"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "projectName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            if ($this->getAttribute($context["fiche1"], "ficheDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche1"], "ficheDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "nbDayDone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "nbDaySold", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "progression", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "comment", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "creater", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche1"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_show", array("id" => $this->getAttribute($context["fiche1"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_edit", array("id" => $this->getAttribute($context["fiche1"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_new");
        echo "\">Create a new fiche1</a>
        </li>
    </ul>
";
        
        $__internal_c6dcf9f4499024c3d71e3cae07d5a1d6351f420dc0dd3d767c5bd800dbb58c62->leave($__internal_c6dcf9f4499024c3d71e3cae07d5a1d6351f420dc0dd3d767c5bd800dbb58c62_prof);

        
        $__internal_6b1e84624abbf97978957639ec48c97bfa1b6ee838f994ed0197977406cc25b2->leave($__internal_6b1e84624abbf97978957639ec48c97bfa1b6ee838f994ed0197977406cc25b2_prof);

    }

    public function getTemplateName()
    {
        return "fiche1/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  132 => 43,  120 => 37,  114 => 34,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiche1s list</h1>

    <table>
        <thead>
            <tr>
                <th>Projectname</th>
                <th>Fichedate</th>
                <th>Nbdaydone</th>
                <th>Nbdaysold</th>
                <th>Progression</th>
                <th>Comment</th>
                <th>Creater</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche1 in fiche1s %}
            <tr>
                <td><a href=\"{{ path('fiche1_show', { 'id': fiche1.id }) }}\">{{ fiche1.projectName }}</a></td>
                <td>{% if fiche1.ficheDate %}{{ fiche1.ficheDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ fiche1.nbDayDone }}</td>
                <td>{{ fiche1.nbDaySold }}</td>
                <td>{{ fiche1.progression }}</td>
                <td>{{ fiche1.comment }}</td>
                <td>{{ fiche1.creater }}</td>
                <td>{{ fiche1.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche1_show', { 'id': fiche1.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche1_edit', { 'id': fiche1.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche1_new') }}\">Create a new fiche1</a>
        </li>
    </ul>
{% endblock %}
", "fiche1/index.html.twig", "/var/www/html/Symfony/app/Resources/views/fiche1/index.html.twig");
    }
}
