<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gymController extends Controller
{
    public function index(){
        return view('gym-olympus.index');
    }
}
