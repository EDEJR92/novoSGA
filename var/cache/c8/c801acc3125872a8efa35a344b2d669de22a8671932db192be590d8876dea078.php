<?php

/* index.html.twig */
class __TwigTemplate_61afab573846c89f73e77236546167eb0153fa8dd5aee7f1b799f757df10f30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'moduleContent' => array($this, 'block_moduleContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"monitor\">
    <form class=\"form-inline\" role=\"search\" onsubmit=\"return false\">
        <div class=\"form-group\">
            <input type=\"text\" id=\"buscar-senha\" class=\"form-search form-control\" placeholder=\"";
        // line 6
        echo gettext("buscar senha");
        echo "\" />
        </div>
        <button id=\"btn-open-consulta\" class=\"btn btn-primary\" onclick=\"SGA.Monitor.Senha.consulta()\">
            <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
            ";
        // line 10
        echo gettext("Consultar");
        // line 11
        echo "        </button>
    </form>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 14
            echo "    <div id=\"servico-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\" class=\"servico empty\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\">
        <span class=\"title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "sigla", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "</span>
        <ul class=\"fila\">
        </ul>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
        // line 23
        echo "<div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 28
        echo gettext("Busca");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                    <div class=\"form-group\">
                        <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
        // line 33
        echo gettext("Número");
        echo "\" />
                    </div>
                    <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Monitor.Senha.consultar()\">";
        // line 35
        echo gettext("Consultar");
        echo "</button>
                </form>
                <div class=\"result\">
                    <table id=\"result_table\" class=\"table\">
                        <thead>
                            <tr>
                                <th>";
        // line 41
        echo gettext("Número");
        echo "</th>
                                <th>";
        // line 42
        echo gettext("Serviço");
        echo "</th>
                                <th>";
        // line 43
        echo gettext("Data chegada");
        echo "</th>
                                <th>";
        // line 44
        echo gettext("Data início");
        echo "</th>
                                <th>";
        // line 45
        echo gettext("Data fim");
        echo "</th>
                                <th>";
        // line 46
        echo gettext("Triagem");
        echo "</th>
                                <th>";
        // line 47
        echo gettext("Atendente");
        echo "</th>
                                <th>";
        // line 48
        echo gettext("Situação");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 61
        echo "<div id=\"dialog-view\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 66
        echo gettext("Atendimento");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <input id=\"senha_id\" type=\"hidden\" />
                <fieldset>
                    <legend>";
        // line 71
        echo gettext("Senha|Bilhete");
        echo "</legend>
                    <div>
                        <label>";
        // line 73
        echo gettext("Número");
        echo "</label>
                        <span id=\"senha_numero\"></span>
                    </div>
                    <div>
                        <label>";
        // line 77
        echo gettext("Prioridade");
        echo "</label>
                        <span id=\"senha_prioridade\"></span>
                    </div>
                    <div>
                        <label>";
        // line 81
        echo gettext("Serviço");
        echo "</label>
                        <span id=\"senha_servico\"></span>
                    </div>
                    <div>
                        <label>";
        // line 85
        echo gettext("Data chegada");
        echo "</label>
                        <span id=\"senha_chegada\"></span>
                    </div>
                    <div>
                        <label>";
        // line 89
        echo gettext("Tempo de espera");
        echo "</label>
                        <span id=\"senha_espera\"></span>
                    </div>
                    <div>
                        <label>";
        // line 93
        echo gettext("Data início");
        echo "</label>
                        <span id=\"senha_inicio\"></span>
                    </div>
                    <div>
                        <label>";
        // line 97
        echo gettext("Data fim");
        echo "</label>
                        <span id=\"senha_fim\"></span>
                    </div>
                    <div>
                        <label>";
        // line 101
        echo gettext("Situação");
        echo "</label>
                        <span id=\"senha_status\"></span>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 106
        echo gettext("Cliente");
        echo "</legend>
                    <div>
                        <label>";
        // line 108
        echo gettext("Nome");
        echo "</label>
                        <span id=\"cliente_nome\"></span>
                    </div>
                    <div>
                        <label>";
        // line 112
        echo gettext("Documento");
        echo "</label>
                        <span id=\"cliente_documento\"></span>
                    </div>
                </fieldset>
            </div>
            <div class=\"modal-footer\">
                <button id=\"btn-reativar\"
                        class=\"btn btn-primary\"
                        onclick=\"SGA.Monitor.Senha.reativar(\$('#senha_id').val())\">
                    ";
        // line 121
        echo gettext("Reativar senha");
        // line 122
        echo "                </button>
                <button id=\"btn-transferir\"
                        class=\"btn btn-default\"
                        onclick=\"SGA.Monitor.Senha.transfere(\$('#senha_id').val(), \$('#senha_numero').text(), \$('#senha_servico').text())\">
                    ";
        // line 126
        echo gettext("Transferir / Alterar senha");
        // line 127
        echo "                </button>
                <button id=\"btn-cancelar\"
                        class=\"btn btn-danger\"
                        onclick=\"SGA.Monitor.Senha.cancelar(\$('#senha_id').val())\">
                    ";
        // line 131
        echo gettext("Cancelar senha");
        // line 132
        echo "                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 139
        echo "<div id=\"dialog-transfere\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 144
        echo gettext("Tranferir Senha");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <input id=\"transfere_id\" type=\"hidden\" />
                <div class=\"form-group\">
                    <label>";
        // line 149
        echo gettext("Senha|Bilhete");
        echo "</label>
                    <span id=\"transfere_numero\"></span>
                </div>
                <div class=\"form-group\">
                    <label for=\"transfere_servico\">";
        // line 153
        echo gettext("Novo serviço");
        echo "</label>
                    <select id=\"transfere_servico\" class=\"form-control\">
                        ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 156
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()) == (isset($context["transfere_servico"]) ? $context["transfere_servico"] : null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 161
        echo gettext("Nova prioridade");
        echo "</label>
                    <select id=\"transfere_prioridade\" class=\"form-control\">
                        ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prioridades"]) ? $context["prioridades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 164
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button id=\"btn-transferir\"
                        class=\"btn btn-primary\"
                        onclick=\"SGA.Monitor.Senha.transferir()\">
                    ";
        // line 173
        echo gettext("Transferir");
        // line 174
        echo "                </button>
            </div>
        </div>
    </div>
</div>


<div id=\"sga-clock\" title=\"";
        // line 181
        echo gettext("Data e hora no servidor");
        echo "}\"></div>
<script type=\"text/javascript\">
    \$('.servico').each(function(i,v) {
        var servico = \$(v);
        SGA.Monitor.ids.push(servico.data('id'));
    });
    SGA.Clock.init(\"sga-clock\", ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["milis"]) ? $context["milis"] : null), "html", null, true);
        echo ");
    SGA.Monitor.alertCancelar = '";
        // line 188
        echo gettext("Deseja realmente cancelar essa senha?");
        echo "';
    SGA.Monitor.alertReativar = '";
        // line 189
        echo gettext("Deseja realmente reativar essa senha?");
        echo "';
    SGA.Monitor.init();
</script>
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
        return array (  384 => 189,  380 => 188,  376 => 187,  367 => 181,  358 => 174,  356 => 173,  347 => 166,  336 => 164,  332 => 163,  327 => 161,  322 => 158,  307 => 156,  303 => 155,  298 => 153,  291 => 149,  283 => 144,  276 => 139,  268 => 132,  266 => 131,  260 => 127,  258 => 126,  252 => 122,  250 => 121,  238 => 112,  231 => 108,  226 => 106,  218 => 101,  211 => 97,  204 => 93,  197 => 89,  190 => 85,  183 => 81,  176 => 77,  169 => 73,  164 => 71,  156 => 66,  149 => 61,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  97 => 35,  92 => 33,  84 => 28,  77 => 23,  73 => 20,  60 => 15,  53 => 14,  49 => 13,  45 => 11,  43 => 10,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "module.html.twig" %}*/
/* {% block moduleContent %}*/
/* <div id="monitor">*/
/*     <form class="form-inline" role="search" onsubmit="return false">*/
/*         <div class="form-group">*/
/*             <input type="text" id="buscar-senha" class="form-search form-control" placeholder="{% trans %}buscar senha{% endtrans %}" />*/
/*         </div>*/
/*         <button id="btn-open-consulta" class="btn btn-primary" onclick="SGA.Monitor.Senha.consulta()">*/
/*             <span class="glyphicon glyphicon-search"></span>&nbsp;*/
/*             {% trans %}Consultar{% endtrans %}*/
/*         </button>*/
/*     </form>*/
/*     {% for su in servicos %}*/
/*     <div id="servico-{{ su.servico.id }}" class="servico empty" data-id="{{ su.servico.id }}">*/
/*         <span class="title">{{ su.sigla }} - {{ su.servico.nome }}</span>*/
/*         <ul class="fila">*/
/*         </ul>*/
/*     </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* {# busca #}*/
/* <div id="dialog-busca" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">{% trans %}Busca{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <form class="form-inline" role="form" onsubmit="return false">*/
/*                     <div class="form-group">*/
/*                         <input id="numero_busca" type="text" maxlength="5" class="form-search form-control" placeholder="{% trans %}Número{% endtrans %}" />*/
/*                     </div>*/
/*                     <button id="btn-consultar" class="btn btn-primary" onclick="SGA.Monitor.Senha.consultar()">{% trans %}Consultar{% endtrans %}</button>*/
/*                 </form>*/
/*                 <div class="result">*/
/*                     <table id="result_table" class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>{% trans %}Número{% endtrans %}</th>*/
/*                                 <th>{% trans %}Serviço{% endtrans %}</th>*/
/*                                 <th>{% trans %}Data chegada{% endtrans %}</th>*/
/*                                 <th>{% trans %}Data início{% endtrans %}</th>*/
/*                                 <th>{% trans %}Data fim{% endtrans %}</th>*/
/*                                 <th>{% trans %}Triagem{% endtrans %}</th>*/
/*                                 <th>{% trans %}Atendente{% endtrans %}</th>*/
/*                                 <th>{% trans %}Situação{% endtrans %}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {# view #}*/
/* <div id="dialog-view" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">{% trans %}Atendimento{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <input id="senha_id" type="hidden" />*/
/*                 <fieldset>*/
/*                     <legend>{% trans %}Senha|Bilhete{% endtrans %}</legend>*/
/*                     <div>*/
/*                         <label>{% trans %}Número{% endtrans %}</label>*/
/*                         <span id="senha_numero"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Prioridade{% endtrans %}</label>*/
/*                         <span id="senha_prioridade"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Serviço{% endtrans %}</label>*/
/*                         <span id="senha_servico"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Data chegada{% endtrans %}</label>*/
/*                         <span id="senha_chegada"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Tempo de espera{% endtrans %}</label>*/
/*                         <span id="senha_espera"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Data início{% endtrans %}</label>*/
/*                         <span id="senha_inicio"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Data fim{% endtrans %}</label>*/
/*                         <span id="senha_fim"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Situação{% endtrans %}</label>*/
/*                         <span id="senha_status"></span>*/
/*                     </div>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <legend>{% trans %}Cliente{% endtrans %}</legend>*/
/*                     <div>*/
/*                         <label>{% trans %}Nome{% endtrans %}</label>*/
/*                         <span id="cliente_nome"></span>*/
/*                     </div>*/
/*                     <div>*/
/*                         <label>{% trans %}Documento{% endtrans %}</label>*/
/*                         <span id="cliente_documento"></span>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button id="btn-reativar"*/
/*                         class="btn btn-primary"*/
/*                         onclick="SGA.Monitor.Senha.reativar($('#senha_id').val())">*/
/*                     {% trans %}Reativar senha{% endtrans %}*/
/*                 </button>*/
/*                 <button id="btn-transferir"*/
/*                         class="btn btn-default"*/
/*                         onclick="SGA.Monitor.Senha.transfere($('#senha_id').val(), $('#senha_numero').text(), $('#senha_servico').text())">*/
/*                     {% trans %}Transferir / Alterar senha{% endtrans %}*/
/*                 </button>*/
/*                 <button id="btn-cancelar"*/
/*                         class="btn btn-danger"*/
/*                         onclick="SGA.Monitor.Senha.cancelar($('#senha_id').val())">*/
/*                     {% trans %}Cancelar senha{% endtrans %}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {# transfere #}*/
/* <div id="dialog-transfere" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">{% trans %}Tranferir Senha{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <input id="transfere_id" type="hidden" />*/
/*                 <div class="form-group">*/
/*                     <label>{% trans %}Senha|Bilhete{% endtrans %}</label>*/
/*                     <span id="transfere_numero"></span>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="transfere_servico">{% trans %}Novo serviço{% endtrans %}</label>*/
/*                     <select id="transfere_servico" class="form-control">*/
/*                         {% for su in servicos %}*/
/*                         <option value="{{ su.servico.id }}"{% if su.servico.nome == transfere_servico %}selected="selected"{% endif %}>{{ su.servico.nome }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>{% trans %}Nova prioridade{% endtrans %}</label>*/
/*                     <select id="transfere_prioridade" class="form-control">*/
/*                         {% for prioridade in prioridades %}*/
/*                         <option value="{{ prioridade.id }}">{{ prioridade.nome }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button id="btn-transferir"*/
/*                         class="btn btn-primary"*/
/*                         onclick="SGA.Monitor.Senha.transferir()">*/
/*                     {% trans %}Transferir{% endtrans %}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div id="sga-clock" title="{% trans %}Data e hora no servidor{% endtrans %}}"></div>*/
/* <script type="text/javascript">*/
/*     $('.servico').each(function(i,v) {*/
/*         var servico = $(v);*/
/*         SGA.Monitor.ids.push(servico.data('id'));*/
/*     });*/
/*     SGA.Clock.init("sga-clock", {{ milis }});*/
/*     SGA.Monitor.alertCancelar = '{% trans %}Deseja realmente cancelar essa senha?{% endtrans %}';*/
/*     SGA.Monitor.alertReativar = '{% trans %}Deseja realmente reativar essa senha?{% endtrans %}';*/
/*     SGA.Monitor.init();*/
/* </script>*/
/* {% endblock %}*/
/* */
