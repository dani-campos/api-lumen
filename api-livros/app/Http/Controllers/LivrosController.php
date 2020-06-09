<?php

namespace App\Http\Controllers;

use App\Livro;

class LivrosController extends BaseController
{

    public function __construct()
    {
        $this->classe = Livro::class;
    }
}
