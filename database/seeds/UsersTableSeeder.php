<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     /*   $user = App\User::create([

            'name' => 'Billy',
            'email' => 'billy@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1

        ]);*/

        DB::table('users')->insert(array(
            array(
                'name' => 'Greg',
                'email' => 'greg@gmail.com',
                'password' => bcrypt('gregory'),
                'admin' => '1',
            ),
            array(
                'name' => 'David',
                'email' => 'david@summit.com',
                'password' => bcrypt('david'),
                'admin' => '1',
            ),


        ));



     /*   App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'

        ]);*/


    }
}
