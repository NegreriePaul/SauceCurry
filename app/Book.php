<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 11:46
*/

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

Class Book extends Eloquent {

    protected $table = 'books';

    protected $fillable = array('title','isbn','cover','price','author_id');

    public function author(){

        return $this->belongsTo(Author::class,'author_id');

    }
}

