<?php

namespace App\Controllers;

class Materi extends BaseController
{
    public function index(): string
    {
        return view('materi');
    }
}
