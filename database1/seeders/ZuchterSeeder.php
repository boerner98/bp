<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZuchterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('zuchters')->insert([
            [
                'answer'   => 'Ja',
            ],
            [
                'answer'   => 'Nein',
            ],
        ]);
    }
}
