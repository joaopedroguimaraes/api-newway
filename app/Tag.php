<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'nome'
    ];
    public $timestamps = false;

    public function livros()	{
    	return $this->belongsToMany('App\Livro', 'livro_tag', 'id_tag', 'id_livro');
	}
}
