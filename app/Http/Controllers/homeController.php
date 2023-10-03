<?php

namespace App\Http\Controllers;
use App\Http\Controllers\homeController;
// use App\Models\User;



class homeController extends Controller
{
    public function hmpage()
    {
        return view('index');
    }
}