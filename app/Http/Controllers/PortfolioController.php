<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class PortfolioController extends Controller
{
  public Collection $categories;

  public function __construct(){
    $this->categories = collect([
      (object) [
        'name' => 'Logos',
        'path' => 'img/portfolio/categories/Logos/thumb',
        'files' => glob('img/portfolio/categories/Logos/thumb/*'),
        'id' => 'catLogo'
      ],
      (object) [
        'name' => 'Posts<br>publicitarios',
        'path' => 'img/portfolio/categories/Posts/thumb',
        'files' => glob('img/portfolio/categories/Posts/thumb/*'),
        'id' => 'catPost'
      ],
      (object) [
        'name' => 'Tarjetas de<br>presentación',
        'path' => 'img/portfolio/categories/Presentacion/thumb',
        'files' => glob('img/portfolio/categories/Presentacion/thumb/*'),
        'id' => 'catPresentacion'
      ],
    ]);    
  }


  public function index(){
      
    return view('portafolio', ['categories' => $this->categories]);
  }
}
