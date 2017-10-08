<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'name',
    	'author',
    	'pages'
    ];
    public $timestamps = false;

    public function tags() {
    	return $this->belongsToMany('App\Tag', 'book_tag', 'id_book', 'id_tag');
	}
}
