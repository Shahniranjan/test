<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    protected $fillable = [
        'title','body','user_id','updated_at','created_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function setbodyAttribute($value){
       $this->attributes['body']=Str::words($value,20);
    }
}
