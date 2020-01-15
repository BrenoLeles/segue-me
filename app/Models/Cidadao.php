<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    protected $fillable = [
        'nome_entrevistado',
        'sexo_entrevistado',
        'data_nascimento_entrevistado',
        'estado_civil_entrevistado',
        'naturalidade_entrevistado',
        'uf_entrevistado',
        'escolaridade_entrevistado',
        'rg_entrevistado',
        'orgao_expedidor_entrevistado',
        'cpf_entrevistado',
        'profissao_entrevistado',
        'ocupacao_entrevistado',
        'renda_entrevistado',
        'empresa_renda_entrevistado',
        'vinculo_empregaticio_entrevistado',
        'nis_entrevistado',
        'nome_conjuge',
        'sexo_conjuge',
        'data_nascimento_conjuge',
        'estado_civil_conjuge',
        'regime_uniao_conjuge',
        'juntos_desde_conjuge',
        'naturalidade_conjuge',
        'uf_conjuge',
        'escolaridade_conjuge',
        'rg_conjuge',
        'orgao_expedidor_conjuge',
        'cpf_conjuge',
        'profissao_conjuge',
        'ocupacao_conjuge',
        'renda_conjuge',
        'vinculo_empregaticio_conjuge',
        'endereco',
        'numero',
        'telefone',
        'cidade',
        'uf_habitacao',
        'cep',
        'ponto_referencia',
        'tempo_residencia',
        'tempo_endereco',
        'situacao',
        'aluguel_compromete',
        'tipo_construcao',
        'iluminacao',
        'agua',
        'destino_dejetos',
        'qtd_familias',
        'qtd_pessoas',
        'qtd_adultos',
        'qtd_idosos',
        'qtd_criancas',
        'qtd_gestantes',
        'qtd_deficientes',
        'total_despesas',
        'se_beneficiado_programa',
        'se_participa_programa',
        'observacoes'
    ];
}
