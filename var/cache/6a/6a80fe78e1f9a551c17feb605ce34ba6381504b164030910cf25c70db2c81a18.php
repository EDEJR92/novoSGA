<?php

/* relatorios/cargos.html.twig */
class __TwigTemplate_95b7aa5a6f85fd2acb0626308a48050273a9382368bc189352eb1b031e8d3e7e extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["dado"], "cargo", array()), "html", null, true);
            echo "</h2>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
            // line 8
            echo gettext("Módulos");
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dado"], "permissoes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
                // line 13
                echo "        <tr>
            <td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["permissao"], "modulo", array()), "nome", array()), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
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
        return "relatorios/cargos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 14,  45 => 13,  41 => 12,  34 => 8,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for dado in relatorio.dados %}*/
/* <div class="header">*/
/*     <h2>{{ dado.cargo }}</h2>*/
/* </div>*/
/* <table class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans %}Módulos{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for permissao in dado.permissoes %}*/
/*         <tr>*/
/*             <td>{{ permissao.modulo.nome }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* {% endfor %}*/
