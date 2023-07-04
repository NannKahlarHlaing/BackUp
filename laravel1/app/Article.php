<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // use HasFactory;
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}
}
