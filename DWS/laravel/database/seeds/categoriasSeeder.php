<?php

use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
          'name' => Str::random(10),
           'descripcion'=> Str::random(10)
        ]);
    }
}
