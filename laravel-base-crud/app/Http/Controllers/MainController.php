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
    public function create(){

        return view('pages/create');
    }
    public function store(Request $request){

        $data = $request -> all();

        $holy = new Holy();

        $holy -> name = $data['name'];
        $holy -> surname = $data['surname'];
        $holy -> blessing_date = $data['blessing_date'];
        $holy -> num_miracles = $data['num_miracles'];
        
        $holy -> save();

        return redirect() -> route('home');
    }


    // --- Destroy
    public function destroy($id){

        $holy = Holy::find($id);

        $holy -> delete();

        return redirect() -> route('home');
    }


}
