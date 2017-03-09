<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 12:33
 */
namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

Class Order extends Eloquent {

    protected $table = 'orders';

    protected $fillable = array('member_id','address','total');

    public function orderItems()
    {
        return $this->belongsToMany('Book') ->withPivot('amount','total');
    }

}