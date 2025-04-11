<?php

namespace App\Controllers;

class Kuis extends BaseController
{
    public function index(): string
    {
        return view('kuis');
    }
}
