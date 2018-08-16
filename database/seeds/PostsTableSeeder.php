<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(array(
            array(
                'title' => 'Amazon',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '1',
                'slug' => 'amazon',
                'featured' => 'uploads/avatars/Amabot.jpg',
                'user_id' => '1',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',
            ),
            array(
                'title' => 'Deep Work',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '1',
                'slug' => 'deep-work',
                'featured' => 'uploads/avatars/deepwork1.JPG',
                'user_id' => '1',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',
            ),
            array(
                'title' => 'Focus',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '1',
                'slug' => 'focus',
                'featured' => 'uploads/avatars/deepwork2.jpg',
                'user_id' => '1',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',
            ),
            array(
                'title' => 'Get Uncomfortable',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '2',
                'slug' => 'get_uncomfortable',
                'featured' => 'uploads/avatars/deepwork3.jpg',
                'user_id' => '2',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',
            ),
            array(
                'title' => 'Machine Learning',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '2',
                'slug' => 'machine_learning',
                'featured' => 'uploads/avatars/machinelearning.jpg',
                'user_id' => '2',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',
            ),
            array(
                'title' => 'Myelin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'category_id' => '2',
                'slug' => 'myelin',
                'featured' => 'uploads/avatars/myelin.jpg',
                'user_id' => '2',
                'created_at' => '2018-08-15 23:59:59',
                'updated_at' => '2018-08-15 23:59:59',            ),

        ));
    }
}
