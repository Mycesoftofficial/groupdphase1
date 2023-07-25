<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterAssemblyController extends Controller
{
    public function create(){
        return view('authentication.register');
    }
}
