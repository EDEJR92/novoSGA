<?php

/* index.html.twig */
class __TwigTemplate_e0c022a7c58a41be8079f52eaa7bfc3e02227abc44a36e8c270a8ebf599bde68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crud/list.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'thead' => array($this, 'block_thead'),
            'tbody' => array($this, 'block_tbody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_thead($context, array $blocks = array())
    {
        // line 3
        echo "    <th>";
        echo gettext("Nome");
        echo "</th>
";
    }

    // line 5
    public function block_tbody($context, array $blocks = array())
    {
        // line 6
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome", array()), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "crud/list.html.twig" %}*/
/* {% block thead %}*/
/*     <th>{% trans %}Nome{% endtrans %}</th>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     <td>{{ item.nome }}</td>*/
/* {% endblock %}*/
