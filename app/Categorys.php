<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = "categorys";
    protected $fillable = ['name'];

    public function news()
    {
        return $this->hasMany('App\News', 'cate_id', 'id');
    }
}
