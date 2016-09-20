<?php

/* relatorios/servicos_disponiveis_unidades.html.twig */
class __TwigTemplate_4f4833bc963483c58aef3da90bffc2caf74afd41625fcdb3297477967585e483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 2
            echo "<div class=\"header\">
    <h2>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["dado"], "unidade", array()), "html", null, true);
            echo "</h2>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
            // line 8
            echo gettext("Sigla");
            echo "</th>
            <th>";
            // line 9
            echo gettext("Serviço");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dado"], "servicos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 14
                echo "        <tr>
            <td class=\"w25 center\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "sigla", array()), "html", null, true);
                echo "</td>
            <td class=\"strong\">
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
                echo "
                ";
                // line 18
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "subServicos", array()))) {
                    // line 19
                    echo "                    <ul>
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["su"], "servico", array()), "subServicos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subServico"]) {
                        // line 21
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subServico"], "nome", array()), "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subServico'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                    </ul>
                ";
                }
                // line 25
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </tbody>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "relatorios/servicos_disponiveis_unidades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  83 => 25,  79 => 23,  70 => 21,  66 => 20,  63 => 19,  61 => 18,  57 => 17,  52 => 15,  49 => 14,  45 => 13,  38 => 9,  34 => 8,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for dado in relatorio.dados %}*/
/* <div class="header">*/
/*     <h2>{{ dado.unidade }}</h2>*/
/* </div>*/
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Sigla{% endtrans %}</th>*/
/*             <th>{% trans %}Serviço{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for su in dado.servicos %}*/
/*         <tr>*/
/*             <td class="w25 center">{{ su.sigla }}</td>*/
/*             <td class="strong">*/
/*                 {{ su.servico.nome }}*/
/*                 {% if su.servico.subServicos|length %}*/
/*                     <ul>*/
/*                         {% for subServico in su.servico.subServicos %}*/
/*                             <li>{{ subServico.nome }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* {% endfor %}*/
