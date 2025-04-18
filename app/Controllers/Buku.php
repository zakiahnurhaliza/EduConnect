<?php

namespace App\Controllers;

class Buku extends BaseController
{
    public function index(): string
    {
        return view('buku');
    }
}
