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
            'description' => 'Para quem criamos valor? Quais são os nossos clientes mais importantes?'
        ]);
        Help::create([
            'name' => 'Proposta de Valor',
            'description' => 'Que valor proporcionamos aos nossos clientes? Que problema de nossos clientes ajudamos a solucionar? Que pacotes de produtos ou serviços oferecemos a cada segmento de mercado?'
        ]);
        Help::create([
            'name' => 'Atividades Chave',
            'description' => 'Que atividades chave requerem nossas propostas de valor? Nossos canais de distribuição?'
        ]);
        Help::create([
            'name' => 'Relações com Clientes',
            'description' => 'Que tipo de relação esperam os diferentes segmentos de mercado? Que tipo de relações temos estabelecido?'
        ]);
        Help::create([
            'name' => 'Parcerias Chave',
            'description' => 'Quem são nossos parceiros chave? Que recursos chave adquirimos de nossos parceiros?'
        ]);
        Help::create([
            'name' => 'Canais',
            'description' => 'Que canais preferem nossos segmentos de mercado? Como entregamos nossa proposta de valor ao cliente? Quais têm melhores resultados?'
        ]);
        Help::create([
            'name' => 'Recursos Principais',
            'description' => 'Que recursos chave requerem nossas propostas de valor? Nossos canais de distribuição? Relações com clientes? Fontes de renda?'
        ]);
        Help::create([
            'name' => 'Concorrentes',
            'description' => 'Quem são nossos concorrentes? como trabalham?'
        ]);
        Help::create([
            'name' => 'Estágio de Evolução',
            'description' => 'Qual o estágio atual de evolução do produto ou serviço proposto?'
        ]);
        Help::create([
            'name' => 'Tecnologia e Processos (Não Poluentes)',
            'description' => 'Como nosso projeto está alinhado com a preservação de recursos naturais, sustentabilidade e possui valores nesse sentido?'
        ]);
        Help::create([
            'name' => 'Pontencial de Inovação Tecnológica',
            'description' => 'Qual a capacidade de gerar produtos ou serviços inovadores, que agreguem o uso de novas tecnologias?'
        ]);
        Help::create([
            'name' => 'Aplicações',
            'description' => 'A quem se aplica? Como? De que maneira?'
        ]);
        Help::create([
            'name' => 'Dificuldades Esperadas',
            'description' => 'Quais são nossas principais limitações?'
        ]);
        Help::create([
            'name' => 'Interação entre Empresa e Universidade',
            'description' => 'Em que sentido seremos parceiros da Universidade?'
        ]);
        Help::create([
            'name' => 'Interação entre Empresa, Comunidade e Governo',
            'description' => 'Qual será nossa importância para o meio em que estamos inseridos? Teremos relação com todos os envolvidos?'
        ]);
        Help::create([
            'name' => 'Infraestrutura Necessária para o Desenvolvimento e Produção',
            'description' => 'Quanto de espaço será necessário? Mobiliário? Equipamentos?'
        ]);
        Help::create([
            'name' => 'Formação dos Sócios',
            'description' => 'Cursos, Tecnólogos, Graduação, Pós-graduação, ...'
        ]);
        Help::create([
            'name' => 'Experiência Profissional dos Sócios',
            'description' => 'Já trabalhamos em áreas afim ao projeto?'
        ]);
        Help::create([
            'name' => 'Competência dos Sócios nas Áreas Técnicas, Administrativas e Comercial',
            'description' => 'Qual a experiência nos produtos ou serviços que serão comercializados? Em formação de equipes? Vendas?'
        ]);
        Help::create([
            'name' => 'Descrição da Participação Acionária',
            'description' => 'Haverão sócios? Quanto de participação terão?'
        ]);
        Help::create([
            'name' => 'Potencial de Geração de Emprego e Renda',
            'description' => 'Quantos empregos diretos e indiretos serão criados? Qual estimativa de renda total gerada?'
        ]);
        Help::create([
            'name' => 'Fontes de Receitas',
            'description' => 'Por que valor estão dispostos a pagar nossos clientes? Por que pagam atualmente? Como pagam atualmente?'
        ]);
        Help::create([
            'name' => 'Estrutura de Custos',
            'description' => 'Quais são os custos mais importantes inerentes ao nosso modelo de negócio? Quais são os recursos chave mais caros? Quais são as atividades chave mais caras?'
        ]);
        Help::create([
            'name' => 'Investimento Inicial',
            'description' => 'Quanto de recurso será necessário para iniciar?'
        ]);
        Help::create([
            'name' => 'Custos Fixos',
            'description' => 'Salários, Aluguel...'
        ]);
        Help::create([
            'name' => 'Custos Variáveis',
            'description' => 'Impostos, combustível, matéria-prima...'
        ]);
    }
}
