<?php

namespace App\Http\Controllers;

use App\Pagina;

class PaginasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pagina::class;
    }

}
