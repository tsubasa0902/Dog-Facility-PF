<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogfacility extends Model
{
    protected $fillable = ['user_id', 'title', 'category_id', 'price', 'opening hours', 'summary', 'url',];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
