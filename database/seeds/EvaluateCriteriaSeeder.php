<?php

use Illuminate\Database\Seeder;
use App\Models\EvaluateCriteria;

class EvaluateCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EvaluateCriteria::create([
            'title' => 'Potencial de inovação tecnológica do projeto (Risco x Retorno)',
            'description' => 'Exemplo de Critério de Avaliação 1',
            'score' => '30',
            'user_id' => 1
        ]);

        EvaluateCriteria::create([
            'title' => 'Capacidade técnica (conhecimento + habilidade)',
            'description' => 'Exemplo de Critério de Avaliação 2',
            'score' => '10',
            'user_id' => 1
        ]);

        EvaluateCriteria::create([
            'title' => 'Experiência profissional (habilidade + atitude)',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '10',
            'user_id' => 1
        ]);

        EvaluateCriteria::create([
            'title' => 'Potencial de interação',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '30',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Impacto ambiental do projeto',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '15',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Abrangência do Negócio (escalabilidade x tamanho do mercado)',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '10',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Viabilidade mercadológica',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '30',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Viabilidade técnica do projeto',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '30',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Disponibilidade de recursos financeiros',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '10',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Defesa Verbal',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '10',
            'user_id' => 1
        ]);


        EvaluateCriteria::create([
            'title' => 'Potencial de geração de empregos e renda',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '20',
            'user_id' => 1
        ]);

        EvaluateCriteria::create([
            'title' => 'Nível de interação com comunidade e governo',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'score' => '20',
            'user_id' => 1
        ]);

    }
}
