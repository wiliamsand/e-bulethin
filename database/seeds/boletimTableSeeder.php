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
            'registration' => '0000000',
            'name' => 'Ricardo',
            'note' => '7',
            'class' => 'Matemática',
            'period' => '3',
            'user_id' => 1
        ]);

         Boletim::create([
            'registration' => '0000001',
            'name' => 'Wilian',
            'note' => '7',
            'class' => 'Matemática',
            'period' => '3',
            'user_id' => 1
        ]);

          Boletim::create([
            'registration' => '0000002',
            'name' => 'Yuri',
            'note' => '7',
            'class' => 'Matemática',
            'period' => '3',
            'user_id' => 1
        ]);
    }
}