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
            'registration' => '7070200'
            'User' => 'Ricardo',
            'class' => 'Matemática',
            'note' => '7.0',
            'period' => '3'
        ]);

        Boletim::create([
            'registration' => '7070300'
            'User' => 'Ricardoo',
            'class' => 'Matemática',
            'note' => '7.1',
            'period' => '2'
        ]);
    }
}