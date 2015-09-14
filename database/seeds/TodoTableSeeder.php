<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo')->delete();

        Todo::create(array(
            'title' => 'Hockey Practice',
            'description' => 'give blood, play hockey' ,
            'author' => 'Wayne Gretzky'
        ));

        Todo::create(array(
            'title' => 'Software Development Task',
            'description' => 'Make this App Better!',
            'author' => 'David Knight'
        ));

        Todo::create(array(
            'title' => 'Interview Preparation',
            'description' => 'Study hard for Interviews!',
            'author' => 'David Knight'
        ));
    }
}
