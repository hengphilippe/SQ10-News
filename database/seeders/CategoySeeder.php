<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Javascript",
            'desc' => "Javascript",
            'hex_code' => "#ff0000",
        ]);
        DB::table('categories')->insert([
            'name' => "PHP",
            'desc' => "PHP",
            'hex_code' => "#0011aa",
        ]);
        DB::table('categories')->insert([
            'name' => "Java",
            'desc' => "Java",
            'hex_code' => "#9018ac",
        ]);
    }
}
