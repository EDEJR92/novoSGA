<?php

/* relatorios/atendimentos_status.html.twig */
class __TwigTemplate_8d544cb788ab48a6fd061d6ed5709763c72b02faf1d255988248dd282284fe8f extends Twig_Template
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
    <p>";
            // line 4
            echo strtr(gettext("Período de %dataInicial% a %dataFinal%"), array("%dataInicial%" => (isset($context["dataInicial"]) ? $context["dataInicial"] : null), "%dataFinal%" => (isset($context["dataFinal"]) ? $context["dataFinal"] : null), ));
            echo "</p>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
            // line 9
            echo gettext("Senha|Bilhete");
            echo "</th>
            <th>";
            // line 10
            echo gettext("Cliente");
            echo "</th>
            <th>";
            // line 11
            echo gettext("Data");
            echo "</th>
            <th title=\"";
            // line 12
            echo gettext("Hora de Chamada");
            echo "\">";
            echo gettext("Chamada");
            echo "</th>
            <th title=\"";
            // line 13
            echo gettext("Hora do Início do atendimento");
            echo "\">";
            echo gettext("Início");
            echo "</th>
            <th title=\"";
            // line 14
            echo gettext("Hora do Fim do atendimento");
            echo "\">";
            echo gettext("Fim");
            echo "</th>
            <th title=\"";
            // line 15
            echo gettext("Serviço escolhido na triagem");
            echo "\">";
            echo gettext("Serviço Triado");
            echo "</th>
            <th>";
            // line 16
            echo gettext("Status");
            echo "</th>
            <th>";
            // line 17
            echo gettext("Atendente");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dado"], "atendimentos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "siglaSenha", array()), "html", null, true);
                if ((isset($context["isNumeracaoServico"]) ? $context["isNumeracaoServico"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "numeroSenhaServico", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "numeroSenha", array()), "html", null, true);
                }
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nomeCliente", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dataChegada", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dataChamada", array()), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dataInicio", array()), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "dataFim", array()), "H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "servico", array()), "nome", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nomeStatus", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "usuario", array()), "login", array()), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"9\">
                <strong>Total: ";
            // line 38
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["dado"], "atendimentos", array())), "html", null, true);
            echo "</strong>
            </td>
        </tr>
    </tfoot>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "relatorios/atendimentos_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  138 => 34,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  92 => 23,  89 => 22,  85 => 21,  78 => 17,  74 => 16,  68 => 15,  62 => 14,  56 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for dado in relatorio.dados %}*/
/* <div class="header">*/
/*     <h2>{{ dado.unidade }}</h2>*/
/*     <p>{% trans %}Período de {{ dataInicial }} a {{ dataFinal }}{% endtrans %}</p>*/
/* </div>*/
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Senha|Bilhete{% endtrans %}</th>*/
/*             <th>{% trans %}Cliente{% endtrans %}</th>*/
/*             <th>{% trans %}Data{% endtrans %}</th>*/
/*             <th title="{% trans %}Hora de Chamada{% endtrans %}">{% trans %}Chamada{% endtrans %}</th>*/
/*             <th title="{% trans %}Hora do Início do atendimento{% endtrans %}">{% trans %}Início{% endtrans %}</th>*/
/*             <th title="{% trans %}Hora do Fim do atendimento{% endtrans %}">{% trans %}Fim{% endtrans %}</th>*/
/*             <th title="{% trans %}Serviço escolhido na triagem{% endtrans %}">{% trans %}Serviço Triado{% endtrans %}</th>*/
/*             <th>{% trans %}Status{% endtrans %}</th>*/
/*             <th>{% trans %}Atendente{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for a in dado.atendimentos %}*/
/*         <tr>*/
/*             <td>{{ a.siglaSenha }}{% if isNumeracaoServico %}{{ a.numeroSenhaServico }}{% else %}{{ a.numeroSenha }}{% endif %}</td>*/
/*             <td>{{ a.nomeCliente }}</td>*/
/*             <td>{{ a.dataChegada|date('d/m/Y') }}</td>*/
/*             <td>{{ a.dataChamada|date('H:i:s') }}</td>*/
/*             <td>{{ a.dataInicio|date('H:i:s') }}</td>*/
/*             <td>{{ a.dataFim|date('H:i:s') }}</td>*/
/*             <td>{{ a.servico.nome }}</td>*/
/*             <td>{{ a.nomeStatus }}</td>*/
/*             <td>{{ a.usuario.login }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td colspan="9">*/
/*                 <strong>Total: {{ dado.atendimentos|length }}</strong>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
/* {% endfor %}*/
