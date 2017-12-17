<?php

/* fiche1/show.html.twig */
class __TwigTemplate_4faabd7a73f7b97ff16f27e84c4f780e3d6111020e167ecbde5282fa1936affd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche1/show.html.twig", 1);
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
        $__internal_ac4f6786895814626c847eba36e43d8fb59651e425894e0e3762b4143fa61a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4f6786895814626c847eba36e43d8fb59651e425894e0e3762b4143fa61a48->enter($__internal_ac4f6786895814626c847eba36e43d8fb59651e425894e0e3762b4143fa61a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/show.html.twig"));

        $__internal_52712a13f8e7ae6e865ce4f723e819d14f990c5610fc03dbf794f413abf8b717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52712a13f8e7ae6e865ce4f723e819d14f990c5610fc03dbf794f413abf8b717->enter($__internal_52712a13f8e7ae6e865ce4f723e819d14f990c5610fc03dbf794f413abf8b717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4f6786895814626c847eba36e43d8fb59651e425894e0e3762b4143fa61a48->leave($__internal_ac4f6786895814626c847eba36e43d8fb59651e425894e0e3762b4143fa61a48_prof);

        
        $__internal_52712a13f8e7ae6e865ce4f723e819d14f990c5610fc03dbf794f413abf8b717->leave($__internal_52712a13f8e7ae6e865ce4f723e819d14f990c5610fc03dbf794f413abf8b717_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efb56f939a753ab98c27a3f4b013102670862d873b954decc1cdae560e0918d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb56f939a753ab98c27a3f4b013102670862d873b954decc1cdae560e0918d5->enter($__internal_efb56f939a753ab98c27a3f4b013102670862d873b954decc1cdae560e0918d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bce0db71f2a5a0fc0cb7afccc83a43e3800f7d2e20bc6ed1cba4cb02220f80ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce0db71f2a5a0fc0cb7afccc83a43e3800f7d2e20bc6ed1cba4cb02220f80ea->enter($__internal_bce0db71f2a5a0fc0cb7afccc83a43e3800f7d2e20bc6ed1cba4cb02220f80ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche1</h1>

    <table>
        <tbody>
            <tr>
                <th>Projectname</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "projectName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fichedate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "ficheDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "ficheDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nbdaydone</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "nbDayDone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbdaysold</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "nbDaySold", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Progression</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "progression", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creater</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "creater", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_edit", array("id" => $this->getAttribute((isset($context["fiche1"]) ? $context["fiche1"] : $this->getContext($context, "fiche1")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bce0db71f2a5a0fc0cb7afccc83a43e3800f7d2e20bc6ed1cba4cb02220f80ea->leave($__internal_bce0db71f2a5a0fc0cb7afccc83a43e3800f7d2e20bc6ed1cba4cb02220f80ea_prof);

        
        $__internal_efb56f939a753ab98c27a3f4b013102670862d873b954decc1cdae560e0918d5->leave($__internal_efb56f939a753ab98c27a3f4b013102670862d873b954decc1cdae560e0918d5_prof);

    }

    public function getTemplateName()
    {
        return "fiche1/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  130 => 51,  124 => 48,  118 => 45,  108 => 38,  101 => 34,  94 => 30,  87 => 26,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiche1</h1>

    <table>
        <tbody>
            <tr>
                <th>Projectname</th>
                <td>{{ fiche1.projectName }}</td>
            </tr>
            <tr>
                <th>Fichedate</th>
                <td>{% if fiche1.ficheDate %}{{ fiche1.ficheDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nbdaydone</th>
                <td>{{ fiche1.nbDayDone }}</td>
            </tr>
            <tr>
                <th>Nbdaysold</th>
                <td>{{ fiche1.nbDaySold }}</td>
            </tr>
            <tr>
                <th>Progression</th>
                <td>{{ fiche1.progression }}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ fiche1.comment }}</td>
            </tr>
            <tr>
                <th>Creater</th>
                <td>{{ fiche1.creater }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ fiche1.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche1_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fiche1_edit', { 'id': fiche1.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiche1/show.html.twig", "/var/www/html/Symfony/app/Resources/views/fiche1/show.html.twig");
    }
}
