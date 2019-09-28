<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table="Articles";
    protected $connection="pgsql";

    public function resources(){
        return $this->hasMany(resources::class,'article_id','id');
        //coleccon padre
    }
   
}
