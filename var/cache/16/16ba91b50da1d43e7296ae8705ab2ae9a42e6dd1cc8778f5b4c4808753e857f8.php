<?php

/* relatorios/servicos_codificados.html.twig */
class __TwigTemplate_d455ce8ae2203f817c73afed1b19582dd83b04f82cdfc07a5ea95e7909f77f69 extends Twig_Template
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
            echo gettext("Serviço");
            echo "</th>
            <th>";
            // line 10
            echo gettext("Total");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 14
            $context["total"] = 0;
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dado"], "servicos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 16
                echo "        <tr>
            <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nome", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "total", array()), "html", null, true);
                echo "</td>
            ";
                // line 19
                $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute($context["s"], "total", array()));
                // line 20
                echo "        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td>
                <strong>Total: ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
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
        return "relatorios/servicos_codificados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  76 => 22,  69 => 20,  67 => 19,  63 => 18,  59 => 17,  56 => 16,  51 => 15,  49 => 14,  42 => 10,  38 => 9,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
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
/*             <th>{% trans %}Serviço{% endtrans %}</th>*/
/*             <th>{% trans %}Total{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% set total = 0 %}*/
/*         {% for s in dado.servicos %}*/
/*         <tr>*/
/*             <td>{{ s.nome }}</td>*/
/*             <td>{{ s.total }}</td>*/
/*             {% set total = total + s.total %}*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td>*/
/*                 <strong>Total: {{ total }}</strong>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
/* {% endfor %}*/
