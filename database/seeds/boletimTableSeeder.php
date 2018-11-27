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
            'User' => 'Ricardo',
            'class' => 'Matemática',
            'note' => '7.0',
            'period' => '3'
        ]);
    }
}