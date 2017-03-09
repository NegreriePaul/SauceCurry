<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 10:53
 */
use \Illuminate\Support\Facades\DB;
use \Illuminate\Database\Seeder;
use \App\Author;

Class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->delete();

        Author::create([
            'name' => 'Singh',
            'surname' => 'Gurnav'
        ]);

        Author::create(array(
            'name' => 'Negrerie',
            'surname' => 'Paul'
        ));

        Author::create(array(
            'name' => 'Dudoux',
            'surname' => 'Thomas'
        ));


    }
}