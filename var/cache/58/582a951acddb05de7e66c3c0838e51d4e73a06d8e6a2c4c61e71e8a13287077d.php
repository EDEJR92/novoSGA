<?php

/* index.html.twig */
class __TwigTemplate_404de2b2300ec3bbb23d159387869041cfad32bacae6675486cba07d5fd0c6ed extends Twig_Template
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
        echo "    <td>
        <span style=\"padding-left: ";
        // line 7
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) * 25), "html", null, true);
        echo "px\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome", array()), "html", null, true);
        echo "
        </span>
    </td>
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
        return array (  49 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "crud/list.html.twig" %}*/
/* {% block thead %}*/
/*     <th>{% trans %}Nome{% endtrans %}</th>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     <td>*/
/*         <span style="padding-left: {{ item.level * 25 }}px">*/
/*             {{ item.nome }}*/
/*         </span>*/
/*     </td>*/
/* {% endblock %}*/
