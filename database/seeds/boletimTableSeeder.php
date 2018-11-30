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
            'registration' => '7070707',
            'name' => 'Athirson',
            'note' => '10',
            'class' => 'Matemática',
            'period' => '3',
            'user_id' => 1
        ]);
    }
}