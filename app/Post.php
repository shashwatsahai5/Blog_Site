<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //for table name -> protected $table = 'posts';
    //for primary key -> public $primaryKey = 'id';
    //foor timestamp -> public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
