<?php

/* index.html.twig */
class __TwigTemplate_78d7c8255e16c4054d429859a8ccd93371bf1aad360611d95ef76e5aa7518c84 extends Twig_Template
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
        echo gettext("Nome de usuário");
        echo "</th>
    <th>";
        // line 4
        echo gettext("Nome");
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
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "login", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nome", array()), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 11
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array())) {
            // line 12
            echo "        <span class=\"status-active\">";
            echo gettext("Ativo");
            echo "</span>
        ";
        } else {
            // line 14
            echo "        <span class=\"status-inactive\">";
            echo gettext("Inativo");
            echo "</span>
        ";
        }
        // line 16
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
        return array (  74 => 16,  68 => 14,  62 => 12,  60 => 11,  55 => 9,  50 => 8,  47 => 7,  41 => 5,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "crud/list.html.twig" %}*/
/* {% block thead %}*/
/*     <th>{% trans %}Nome de usuário{% endtrans %}</th>*/
/*     <th>{% trans %}Nome{% endtrans %}</th>*/
/*     <th>{% trans %}Status{% endtrans %}</th>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     <td>{{ item.login }}</td>*/
/*     <td>{{ item.nome }}</td>*/
/*     <td>*/
/*         {% if item.status %}*/
/*         <span class="status-active">{% trans %}Ativo{% endtrans %}</span>*/
/*         {% else %}*/
/*         <span class="status-inactive">{% trans %}Inativo{% endtrans %}</span>*/
/*         {% endif %}*/
/*     </td>*/
/* {% endblock %}*/
