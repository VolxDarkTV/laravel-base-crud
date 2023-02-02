<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holy;

class MainController extends Controller
{
    public function holy(){

        return view('pages/home');
    }
}
