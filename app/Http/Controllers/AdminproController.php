<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminproController extends Controller
{
    public function index()
    {
        return view('pages.adminpro.dashboard');
    }
}
