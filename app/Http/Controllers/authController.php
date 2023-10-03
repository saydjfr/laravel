<?php
namespace App\Http\Controllers;
use App\Http\Controllers\authController;
use Illuminate\Http\Request;




class authController extends Controller
{
    public function reg()
    {
        return view ('form');
    }

    public function halo(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        return view ('welcome',[
            'firstname'=> $firstname,
            'lastname' => $lastname
        ]);

    }
}
