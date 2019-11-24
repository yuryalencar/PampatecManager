<?php

use Illuminate\Database\Seeder;
use App\Models\Help;

class HelpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Help::create([
            'name' => 'Empresa/Projeto',
            'description' => 'Nome da empresa ou do Projeto'
        ]);
        Help::create([
            'name' => 'Empreendedores',
            'description' => 'Informe o e-mail de todos os empreendedores envolvidos'
        ]);
        Help::create([
            'name' => 'Segmento de Clientes',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Proposta de Valor',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Atividades Chave',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Relações com Clientes',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Parcerias Chave',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Canais',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Recursos Principais',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Concorrentes',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Estágio de Evolução',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Tecnologia e Processos (Não Poluentes)',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Pontencial de Inovação Tecnológica',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Aplicações',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Dificuldades Esperadas',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Interação entre Empresa e Universidade',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Interação entre Empresa, Comunidade e Governo',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Infraestrutura Necessária para o Desenvolvimento e Produção',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Formação dos Sócios',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Experiência Profissional dos Sócios',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Competência dos Sócios nas Áreas Técnicas, Administrativas e Comercial',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Descrição da Participação Acionária',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Potencial de Geração de Emprego e Renda',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Fontes de Receitas',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Estrutura de Custos',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Investimento Inicial',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Custos Fixos',
            'description' => ''
        ]);
        Help::create([
            'name' => 'Custos Variáveis',
            'description' => ''
        ]);
    }
}
