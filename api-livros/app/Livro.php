<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $perPage = 3;
    protected $appends = ['links'];

    public function paginas(){
        return $this->hasMany(Pagina::class);
    }
    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/livros/' . $this->id,
            'paginas' => '/api/livros/' . $this->id . '/paginas'
        ];
    }
}
