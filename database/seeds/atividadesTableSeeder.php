<?php

use Illuminate\Database\Seeder;
use App\Atividade;

class atividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atividade::create([
            'title' => 'Prova de Bio',
            'description' => 'Prova sobre organelas',
            'scheduledto' => '2017-09-01 13:15:00'
        ]);

        Atividade::create([
            'title' => 'Trabalho de Tópicos Especiais',
            'description' => 'Postar no GitHub',
            'scheduledto' => '2017-09-01 13:15:00'
        ]);

    }
}
