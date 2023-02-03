<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holy;

class MainController extends Controller
{
    // --- Home
    public function home(){
        $holies = Holy::all();
        $data = [
            'holies' => $holies
        ];
        return view('pages/home', $data);
    }

    // --- Show
    public function show($id){

        $holy = Holy::find($id);

        $data = [
            'holy' => $holy
        ];
         
        return view('pages/holy', $data);
    }

    // ---Create

    // --- Destroy
    public function detroy($id){

        $holy = Holy::find($id);

        $holy -> delete();

        return redirect() -> route('home');
    }
}
