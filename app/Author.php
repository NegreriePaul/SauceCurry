<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 10:50
 */
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


Class Author extends Eloquent {

    protected $table = 'authors';

    protected $fillable = array('name','surname');

}

