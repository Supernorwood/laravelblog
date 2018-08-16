<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            array(
                'name' => 'coding',
            ),
            array(
                'name' => 'software',
            ),
            array(
                'name' => 'sales',
            ),
            array(
                'name' => 'goals',
            ),
            array(
                'name' => 'practice',
            ),
        ));
    }
}
