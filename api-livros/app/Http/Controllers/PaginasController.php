<?php

namespace App\Http\Controllers;

use App\Pagina;

class PaginasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pagina::class;
    }

    public function buscaPorLivro(int $livroId)
    {
        $paginas = Pagina::query()
            ->where('livro_id', $livroId)
            ->paginate();

        return $paginas;
    }

}
