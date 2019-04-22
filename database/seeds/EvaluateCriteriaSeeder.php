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
            'title' => 'Originalidade',
            'description' => 'Exemplo de Critério de Avaliação 1',
            'user_id' => 2
        ]);

        EvaluateCriteria::create([
            'title' => 'Inovação',
            'description' => 'Exemplo de Critério de Avaliação 2',
            'user_id' => 2
        ]);

        EvaluateCriteria::create([
            'title' => 'Example Evaluate Criteria',
            'description' => 'Exemplo de Critério de Avaliação 3',
            'user_id' => 1
        ]);
    }
}
