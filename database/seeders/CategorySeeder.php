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
            'title' => 'Lifestyle',
            'description' => 'Lifestyle is the interests, opinions, behaviours, and behavioural orientations of an individual, group, or culture.'
        ]);

        DB::table('categories')->insert([
            'title' => 'Food',
            'description' => 'One of the best ways to describe food on your menu is by indicating how it was prepared. '
        ]);

        DB::table('categories')->insert([
            'title' => 'Pets',
            'description' =>'The right pet description can not only describe your pets personality and disposition, it can tell your pets story and ultimately drive adoptions.'
        ]);
    }
}
