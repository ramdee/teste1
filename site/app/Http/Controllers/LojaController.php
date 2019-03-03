<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function show(){
        $carros = [
            'A'=> 'https://blog.123carros.com.br/wp-content/uploads/2017/11/ipva-carro-importado.jpg',
            'B'=>'https://blog.123carros.com.br/wp-content/uploads/2018/05/2017-Jeep-Renegade-Sport-4x4-front-three-quarter-03-1.jpg',
            'C'=>'https://blog.123carros.com.br/wp-content/uploads/2018/04/2017foc270001_640_01-640x445.jpg'
        ];
     
        return view ('loja',compact('carros'));
    }
}
