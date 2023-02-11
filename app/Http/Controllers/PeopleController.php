<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
   
    public function index() {

        $nome = "Ana Paula Guimarães";
        return view('welcome',['nome' => $nome]);

    }

    public function create(){
        return view('pessoas/create');
    }

}
