<?php

use Illuminate\Database\Seeder;
use App\Models\BusinessPartners;

class BusinessPartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessPartners::create([
            'name' => 'Zallpy Group Ltda.',
            'responsible' => 'Example User',
            'responsible_email' => 'exampleEmail@email.com',
            'room' => 'P36',
//            'cnpj' => 'Potencial de inovação tecnológica do projeto (Risco x Retorno)',
            'is_company' => 1,
            'is_research_group' => 0,
        ]);

        BusinessPartners::create([
            'name' => 'LESSE',
            'responsible' => 'Example User 2',
            'responsible_email' => 'exampleEmail 2@email.com',
            'room' => 'P36',
//            'cnpj' => 'Potencial de inovação tecnológica do projeto (Risco x Retorno)',
            'is_company' => 0,
            'is_research_group' => 1,
        ]);
    }
}
