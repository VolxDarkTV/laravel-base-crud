<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holy;

class MainController extends Controller
{
    public function holy(){
        $holies = Holy::all();
        $data = [
            'holies' => $holies
        ];
        return view('pages/home', $data);
    }
}
