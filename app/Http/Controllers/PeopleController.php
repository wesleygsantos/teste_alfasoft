<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class PeopleController extends Controller
{
   
    public function index() {

        $nome = "Ana Paula Guimarães";
        return view('welcome',['nome' => $nome]);

    }

    public function create(){
        return view('pessoas/create');
    }

    public function store(Request $request){

        $pessoa = new Pessoas;

        $pessoa->name = $request->nome;
        $pessoa->email = $request->email;

        $pessoa->save();

        return redirect('/');

    }

}
