<?php

/* index.html.twig */
class __TwigTemplate_6c90554255dd171e178236454c6b604d7fd6cd0f92025707c6b61d77902fe41c extends Twig_Template
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
    <th>";
        // line 4
        echo gettext("Macro");
        echo "</th>
    <th>";
        // line 5
        echo gettext("Status");
        echo "</th>
";
    }

    // line 7
    public function block_tbody($context, array $blocks = array())
    {
        // line 8
        echo "    <td>
        ";
        // line 9
        if ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mestre", array())) {
            // line 10
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome", array()), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome", array()), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </td>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mestre", array()), "nome", array()), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 17
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == 1)) {
            // line 18
            echo "        <span class=\"status-active\">";
            echo gettext("Ativo");
            echo "</span>
        ";
        } else {
            // line 20
            echo "        <span class=\"status-inactive\">";
            echo gettext("Inativo");
            echo "</span>
        ";
        }
        // line 22
        echo "    </td>
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
        return array (  89 => 22,  83 => 20,  77 => 18,  75 => 17,  70 => 15,  67 => 14,  61 => 12,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  41 => 5,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "crud/list.html.twig" %}*/
/* {% block thead %}*/
/*     <th>{% trans %}Nome{% endtrans %}</th>*/
/*     <th>{% trans %}Macro{% endtrans %}</th>*/
/*     <th>{% trans %}Status{% endtrans %}</th>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     <td>*/
/*         {% if not item.mestre %}*/
/*             <strong>{{ item.nome }}</strong>*/
/*         {% else %}*/
/*             {{ item.nome }}*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>{{ item.mestre.nome }}</td>*/
/*     <td>*/
/*         {% if item.status == 1 %}*/
/*         <span class="status-active">{% trans %}Ativo{% endtrans %}</span>*/
/*         {% else %}*/
/*         <span class="status-inactive">{% trans %}Inativo{% endtrans %}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* {% endblock %}*/
