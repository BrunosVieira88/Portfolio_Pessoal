<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JogoController extends Controller
{

    public function retornaJogo(){

        $animais = [1,2,3,1,2,3];
        $aberto = ["fechado","fechado","fechado","fechado","fechado","fechado"];
        shuffle($animais);
        $numeroDeAnimais = count($animais);
        $animais_json = json_encode($animais);
        return view('indexJogoDaMemoria',compact('animais','aberto',"numeroDeAnimais","animais_json"));

    }



}
