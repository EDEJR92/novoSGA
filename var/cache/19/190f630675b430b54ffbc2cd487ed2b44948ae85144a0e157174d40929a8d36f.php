<?php

/* relatorios/servicos_disponiveis_global.html.twig */
class __TwigTemplate_12256afd922e3c29b24abbb43e9e573c5e823cac872268349940e39c06fd4592 extends Twig_Template
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
        echo "<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo gettext("Serviço");
        echo "</th>
            <th>";
        // line 5
        echo gettext("Situação");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["servico"]) {
            // line 10
            echo "        <tr>
            <td class=\"strong\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["servico"], "nome", array()), "html", null, true);
            echo "</td>
            <td class=\"w100 center\">
                ";
            // line 13
            if (($this->getAttribute($context["servico"], "status", array()) == 1)) {
                // line 14
                echo "                    <span class=\"status-active\">";
                echo gettext("Ativo");
                echo "</span>
                ";
            } else {
                // line 16
                echo "                    <span class=\"status-inactive\">";
                echo gettext("Inativo");
                echo "</span>
                ";
            }
            // line 18
            echo "            </td>
        </tr>
        ";
            // line 20
            if (twig_length_filter($this->env, $this->getAttribute($context["servico"], "subServicos", array()))) {
                // line 21
                echo "        <tr class=\"sub-table\">
            <td colspan=\"2\">
                <table class=\"table table-striped subservicos\">
                    <tbody>
                        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["servico"], "subServicos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subServico"]) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"nome\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subServico"], "nome", array()), "html", null, true);
                    echo "</td>
                            <td class=\"w100 center\">
                                ";
                    // line 29
                    if (($this->getAttribute($context["subServico"], "status", array()) == 1)) {
                        // line 30
                        echo "                                    <span class=\"status-active\">";
                        echo gettext("Ativo");
                        echo "</span>
                                ";
                    } else {
                        // line 32
                        echo "                                    <span class=\"status-inactive\">";
                        echo gettext("Inativo");
                        echo "</span>
                                ";
                    }
                    // line 34
                    echo "                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subServico'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    </tbody>
                </table>
            </td>
        </tr>
        ";
            }
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "relatorios/servicos_disponiveis_global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  114 => 42,  107 => 37,  99 => 34,  93 => 32,  87 => 30,  85 => 29,  80 => 27,  77 => 26,  73 => 25,  67 => 21,  65 => 20,  61 => 18,  55 => 16,  49 => 14,  47 => 13,  42 => 11,  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Serviço{% endtrans %}</th>*/
/*             <th>{% trans %}Situação{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for servico in relatorio.dados %}*/
/*         <tr>*/
/*             <td class="strong">{{ servico.nome }}</td>*/
/*             <td class="w100 center">*/
/*                 {% if servico.status == 1 %}*/
/*                     <span class="status-active">{% trans %}Ativo{% endtrans %}</span>*/
/*                 {% else %}*/
/*                     <span class="status-inactive">{% trans %}Inativo{% endtrans %}</span>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         {% if servico.subServicos|length %}*/
/*         <tr class="sub-table">*/
/*             <td colspan="2">*/
/*                 <table class="table table-striped subservicos">*/
/*                     <tbody>*/
/*                         {% for subServico in servico.subServicos %}*/
/*                         <tr>*/
/*                             <td class="nome">{{ subServico.nome }}</td>*/
/*                             <td class="w100 center">*/
/*                                 {% if subServico.status == 1 %}*/
/*                                     <span class="status-active">{% trans %}Ativo{% endtrans %}</span>*/
/*                                 {% else %}*/
/*                                     <span class="status-inactive">{% trans %}Inativo{% endtrans %}</span>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
