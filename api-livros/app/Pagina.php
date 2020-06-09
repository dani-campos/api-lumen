<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    public $timestamps = false;
    protected $fillable = ['capitulo', 'numero', 'lido', 'livro_id'];

    public function livro(){
        return $this->belongsTo(Livro::class);
    }

    public function getLidoAttribute($lido): bool
    {
        return $lido;
    }
}
