<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function paginas(){
        $this->hasMany(Pagina::class);
    }
}
