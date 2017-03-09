<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 12:35
 */
namespace App\Http\Controllers;

use App\Book;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller as BaseController;


class BookController extends BaseController{

    public function getIndex()
    {

        $books = Book::all();

     //   foreach($books as $book)
      //      var_dump($book->author);

        //    die('pas de mac do pour paul');
        return View::make('book_list')->with('books',$books);

    }
}