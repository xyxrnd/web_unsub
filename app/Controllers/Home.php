<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('page/home'); // beranda
    }

    public function agenda()
    {
        return view('page/agenda'); // agenda
    }
}
