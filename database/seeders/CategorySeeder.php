<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Javascript',
            'desc' => 'Javascript'
        ]);
        DB::table('categories')->insert([
            'name' => 'PHP',
            'desc' => 'PHP'
        ]);
        DB::table('categories')->insert([
            'name' => 'Oracle',
            'desc' => 'Oracle'
        ]);
        DB::table('categories')->insert([
            'name' => 'SQLServer',
            'desc' => 'SQLServer'
        ]);
    }
}
