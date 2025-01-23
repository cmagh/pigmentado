<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $mostWanted = collect([
            (object) [
                'img' => 'img/home/2151320694.webp', 
                'title' => '¡Quiero un diseño!'
            ],
            (object) [
                'img' => 'img/home/2149120730.webp', 
                'title' => '¡Quiero imprimir!'
            ],

            (object) [
                'img' => [
                    'img/home/aire_acondicionado.webp', 
                    'img/home/lampara_imporbocal.webp',
                ],
                'title' => 'Portafolio',
                'text' => 'Portafolio'
            ]            
        ]);

        return view('home', [ 'mostWanted' =>  $mostWanted]);
    }
}
