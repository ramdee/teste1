<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function galeria()
    {
        $imagens = [
            'A'=>'https://artisnobilis.com/imgface/gallery/imagens-bonitas-para-facebook-325.jpg',
            'B'=>'https://jefpower.com/wp-content/uploads/2017/12/direitos-autorais-de-imagens-_-jefpower.jpg',
            'C'=>'http://caes.mundoentrepatas.com/imagenes/imagens-cao-shar-pei.jpg?phpMyAdmin=PfqG0iessiXP%2C5Zcan9pxZp0nv2'
        ];
        $carros = [
            'A'=> 'https://blog.123carros.com.br/wp-content/uploads/2017/11/ipva-carro-importado.jpg',
            'B'=>'https://blog.123carros.com.br/wp-content/uploads/2018/05/2017-Jeep-Renegade-Sport-4x4-front-three-quarter-03-1.jpg',
            'C'=>'https://blog.123carros.com.br/wp-content/uploads/2018/04/2017foc270001_640_01-640x445.jpg',
            
        ];

        return view('galeria', compact('imagens','carros'));
    }
}
