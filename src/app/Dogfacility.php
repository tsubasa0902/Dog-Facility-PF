<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dogfacility extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['user_id', 'title', 'category_id', 'price', 'openinghours', 'summary', 'url',];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
