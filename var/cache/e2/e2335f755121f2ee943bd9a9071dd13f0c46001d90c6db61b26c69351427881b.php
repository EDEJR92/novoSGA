<?php

/* relatorios/tempo_medio_atendentes.html.twig */
class __TwigTemplate_722fd6356ecff1c5be5097c4be9d00a292e0c221223a8fe85a69908a7f7f8ab4 extends Twig_Template
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
        echo "<div class=\"header\">
    <p>";
        // line 2
        echo strtr(gettext("Período de %dataInicial% a %dataFinal%"), array("%dataInicial%" => (isset($context["dataInicial"]) ? $context["dataInicial"] : null), "%dataFinal%" => (isset($context["dataFinal"]) ? $context["dataFinal"] : null), ));
        echo "</p>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 7
        echo gettext("Usuário");
        echo "</th>
            <th>";
        // line 8
        echo gettext("Atendimentos");
        echo "</th>
            <th title=\"";
        // line 9
        echo gettext("Tempo médio de espera");
        echo "\">";
        echo gettext("TME");
        echo "</th>
            <th title=\"";
        // line 10
        echo gettext("Tempo médio de deslocamento");
        echo "\">";
        echo gettext("TMD");
        echo "</th>
            <th title=\"";
        // line 11
        echo gettext("Tempo médio de atendimento");
        echo "\">";
        echo gettext("TMA");
        echo "</th>
            <th>";
        // line 12
        echo gettext("Tempo total");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "dados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 17
            echo "        <tr>
            <td class=\"strong\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["dado"], "atendente", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["dado"], "total", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute($context["dado"], "espera", array()))), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute($context["dado"], "deslocamento", array()))), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute($context["dado"], "atendimento", array()))), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute($context["dado"], "tempoTotal", array()))), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
<div>
    <h4>";
        // line 29
        echo gettext("Legenda");
        echo "</h4>
    <ul>
        <li><strong>";
        // line 31
        echo gettext("TME");
        echo "</strong>: ";
        echo gettext("Tempo médio de espera");
        echo "</li>
        <li><strong>";
        // line 32
        echo gettext("TMD");
        echo "</strong>: ";
        echo gettext("Tempo médio de deslocamento");
        echo "</li>
        <li><strong>";
        // line 33
        echo gettext("TMA");
        echo "</strong>: ";
        echo gettext("Tempo médio de atendimento");
        echo "</li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "relatorios/tempo_medio_atendentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  115 => 32,  109 => 31,  104 => 29,  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  56 => 12,  50 => 11,  44 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <div class="header">*/
/*     <p>{% trans %}Período de {{ dataInicial }} a {{ dataFinal }}{% endtrans %}</p>*/
/* </div>*/
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Usuário{% endtrans %}</th>*/
/*             <th>{% trans %}Atendimentos{% endtrans %}</th>*/
/*             <th title="{% trans %}Tempo médio de espera{% endtrans %}">{% trans %}TME{% endtrans %}</th>*/
/*             <th title="{% trans %}Tempo médio de deslocamento{% endtrans %}">{% trans %}TMD{% endtrans %}</th>*/
/*             <th title="{% trans %}Tempo médio de atendimento{% endtrans %}">{% trans %}TMA{% endtrans %}</th>*/
/*             <th>{% trans %}Tempo total{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for dado in relatorio.dados %}*/
/*         <tr>*/
/*             <td class="strong">{{ dado.atendente }}</td>*/
/*             <td>{{ dado.total }}</td>*/
/*             <td>{{ dado.espera|secFormat }}</td>*/
/*             <td>{{ dado.deslocamento|secFormat }}</td>*/
/*             <td>{{ dado.atendimento|secFormat }}</td>*/
/*             <td>{{ dado.tempoTotal|secFormat }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* <div>*/
/*     <h4>{% trans %}Legenda{% endtrans %}</h4>*/
/*     <ul>*/
/*         <li><strong>{% trans %}TME{% endtrans %}</strong>: {% trans %}Tempo médio de espera{% endtrans %}</li>*/
/*         <li><strong>{% trans %}TMD{% endtrans %}</strong>: {% trans %}Tempo médio de deslocamento{% endtrans %}</li>*/
/*         <li><strong>{% trans %}TMA{% endtrans %}</strong>: {% trans %}Tempo médio de atendimento{% endtrans %}</li>*/
/*     </ul>*/
/* </div>*/
