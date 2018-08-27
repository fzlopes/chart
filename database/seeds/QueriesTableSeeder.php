<?php

use Illuminate\Database\Seeder;
use App\Query;

class QueriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Query::truncate();

        Query::create([
            'name'        => 'Fabio',
            'study'       => 'Biologia',
            'score'       =>  80
        ]);

        Query::create([
            'name'        => 'Fabio',
            'study'       => 'Ciências',
            'score'       =>  80
        ]);

        Query::create([
            'name'        => 'Teste',
            'study'       => 'Biologia',
            'score'       =>  70
        ]);

        Query::create([
            'name'        => 'Teste',
            'study'       => 'Ciências',
            'score'       =>  90
        ]);

        $this->command->info('The basic queries was created.');




    }
}
