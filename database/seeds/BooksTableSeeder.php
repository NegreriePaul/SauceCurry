<?php

use \Illuminate\Support\Facades\DB;
use \Illuminate\Database\Seeder;
use \App\Book;


Class BooksTableSeeder extends Seeder {

    public function run()
    {
        DB::table('books')->delete();

        Book::create(array(
            'title'=>'Scala step by step',
            'isbn'=>'9780062014535',
            'price'=>'29.90',
            'cover'=>'scala.jpg',
            'author_id'=>1
        ));
        Book::create(array(
            'title'=>'SQL step by step',
            'isbn'=>'9780316015844',
            'price'=>'39.90',
            'cover'=>'sql.jpg',
            'author_id'=>2
        ));
        Book::create(array(
            'title'=>'PHP tep by step',
            'isbn'=>'9780671027384',
            'price'=>'69.90',
            'cover'=>'php.jpg',
            'author_id'=>3
        ));

    }

}
