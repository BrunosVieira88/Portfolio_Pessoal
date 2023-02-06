<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JogoController extends Controller
{

    public function retornaJogo(){

        $animais = [1,2,3,1,2,3];
        $aberto = ["fechado","fechado","fechado","fechado","fechado","fechado"];
        return view('jogomemoria.jogomemoria',compact('animais','aberto'));

    }



}
