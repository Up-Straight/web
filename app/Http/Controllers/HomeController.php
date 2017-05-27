<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->setMetaData(['title' => 'Home', 'description' => '']);

        return view('welcome');
    }
}