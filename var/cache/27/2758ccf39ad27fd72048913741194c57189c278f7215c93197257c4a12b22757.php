<?php

/* relatorios/lotacoes.html.twig */
class __TwigTemplate_b68b82a10bfa212ba0efdc53e786b79156c47d55be97983389cc4a4184e2651f extends Twig_Template
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
            echo gettext("Usuário");
            echo "</th>
            <th>";
            // line 9
            echo gettext("Nome");
            echo "</th>
            <th>";
            // line 10
            echo gettext("Cargo");
            echo "</th>
            <th>";
            // line 11
            echo gettext("Grupo");
            echo "</th>
            <th>";
            // line 12
            echo gettext("Serviços");
            echo "</th>
            <th>";
            // line 13
            echo gettext("Status");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dado"], "lotacoes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lotacao"]) {
                // line 18
                echo "        <tr>
            <td class=\"strong\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lotacao"], "usuario", array()), "login", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lotacao"], "usuario", array()), "nomeCompleto", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lotacao"], "cargo", array()), "nome", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lotacao"], "grupo", array()), "nome", array()), "html", null, true);
                echo "</td>
            <td>
                <ul>
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["dado"], "servicos", array()), $this->getAttribute($this->getAttribute($context["lotacao"], "usuario", array()), "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                    // line 26
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                </ul>
            </td>
            <td class=\"w75 center\">
                ";
                // line 31
                if (($this->getAttribute($this->getAttribute($context["lotacao"], "usuario", array()), "status", array()) == 1)) {
                    // line 32
                    echo "                    <span class=\"status-active\">";
                    echo gettext("Ativo");
                    echo "</span>
                ";
                } else {
                    // line 34
                    echo "                    <span class=\"status-inactive\">";
                    echo gettext("Inativo");
                    echo "</span>
                ";
                }
                // line 36
                echo "            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lotacao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
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
        return "relatorios/lotacoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  118 => 36,  112 => 34,  106 => 32,  104 => 31,  99 => 28,  90 => 26,  86 => 25,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for dado in relatorio.dados %}*/
/* <div class="header">*/
/*     <h2>{{ dado.unidade }}</h2>*/
/* </div>*/
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Usuário{% endtrans %}</th>*/
/*             <th>{% trans %}Nome{% endtrans %}</th>*/
/*             <th>{% trans %}Cargo{% endtrans %}</th>*/
/*             <th>{% trans %}Grupo{% endtrans %}</th>*/
/*             <th>{% trans %}Serviços{% endtrans %}</th>*/
/*             <th>{% trans %}Status{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for lotacao in dado.lotacoes %}*/
/*         <tr>*/
/*             <td class="strong">{{ lotacao.usuario.login }}</td>*/
/*             <td>{{ lotacao.usuario.nomeCompleto }}</td>*/
/*             <td>{{ lotacao.cargo.nome }}</td>*/
/*             <td>{{ lotacao.grupo.nome }}</td>*/
/*             <td>*/
/*                 <ul>*/
/*                 {% for su in dado.servicos[lotacao.usuario.id] %}*/
/*                     <li>{{ su.servico.nome }}</li>*/
/*                 {% endfor %}*/
/*                 </ul>*/
/*             </td>*/
/*             <td class="w75 center">*/
/*                 {% if lotacao.usuario.status == 1 %}*/
/*                     <span class="status-active">{% trans %}Ativo{% endtrans %}</span>*/
/*                 {% else %}*/
/*                     <span class="status-inactive">{% trans %}Inativo{% endtrans %}</span>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* {% endfor %}*/
