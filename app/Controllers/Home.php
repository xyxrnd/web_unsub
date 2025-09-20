<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layouts/base'); // beranda
    }

    public function agenda()
    {
        return view('page/agenda'); // agenda
    }
}
