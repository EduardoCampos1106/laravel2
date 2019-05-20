<?php

use Illuminate\Database\Seeder;
use App\messages;

class messagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Messages::create([
            'titulo' => 'Teste ',
            'texto' => 'Apenas uma mensagem de teste para o seeder.',
            'autor' => 'Eu'
        ]);

        Messages::create([
            'titulo' => 'Teste ',
            'texto' => 'Apenas uma mensagem de teste para o seeder.',
            'autor' => 'Eu'
        ]);
    }
}
