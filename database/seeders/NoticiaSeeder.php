<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Noticia::factory(1000)->create();
    }
}
