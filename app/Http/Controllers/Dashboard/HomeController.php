<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->setMetaData(['title' => 'Dashboard', 'description' => '']);

        return view('dashboard/home');
    }
}