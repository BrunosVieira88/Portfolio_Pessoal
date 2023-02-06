<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogodaVelha extends Controller
{

    public function retornaJogo(){
        $lista = ["pato","pato2","cachorro","cachorro2"];
        return view('/jogodavelha',compact('lista'));
    }

}
