<?php
use Illuminate\Database\Seeder;
use App\Boletim;
class boletimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boletim::create([
            'title' => 'Prova de Matemática',
            'description' => 'Prova sobre números imaginários',
            'scheduledto' => '2018-09-01 13:15:00',
            'user_id' => 1
        ]);
        Boletim::create([
            'title' => 'Desenvolver o trabalho de Tópicos Especiais',
            'description' => 'Implementar o trabalho final da disciplina',
            'scheduledto' => '2018-10-01 13:15:00',
            'user_id' => 1
        ]);
        Boletim::create([
            'title' => 'Teste 3',
            'description' => 'Implementar o trabalho final da disciplina',
            'scheduledto' => '2018-10-01 13:15:00',
            'user_id' => 2
        ]);
    }
}