<?php

namespace App\Controllers;

class Soal extends BaseController
{
    public function index(): string
    {
        return view('soal');
    }
}
