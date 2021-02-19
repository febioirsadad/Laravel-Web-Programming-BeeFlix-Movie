<?php

use Illuminate\Database\Seeder;

class genresseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'drama'], ['name'=>'kids'], ['name'=>'tv series']
        ]);
    }
}
