<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(array(
            array(
                'tag' => 'money',
            ),
            array(
                'tag' => 'future',
            ),
            array(
                'tag' => 'adventure',
            ),
            array(
                'tag' => 'test',
            ),
            array(
                'tag' => 'faith',
            ),
        ));
    }
}
