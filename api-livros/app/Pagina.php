<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    public $timestamps = false;
    protected $fillable = ['capitulo', 'numero', 'lido', 'livro_id'];
    protected $appends = ['links'];

    public function livro(){
        return $this->belongsTo(Livro::class);
    }

    public function getLidoAttribute($lido): bool
    {
        return $lido;
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/paginas/' . $this->id,
            'livro' => '/api/livros/' . $this->livro_id
        ];
    }
}
