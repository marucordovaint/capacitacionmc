<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //
    protected $table="resources";
    protected $connection="pgsql";

    public function article(){
        return $this->belongsTo(Article::class,'article_id','id');
          //coleccon hijos
    }   
}
