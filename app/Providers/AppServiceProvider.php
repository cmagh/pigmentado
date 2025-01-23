<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $phone = '74749286';

        $fecha = Carbon::now();

        $menu = [
            'Inicio' => 'home',
            'Diseñar' => 'aboutus',
            'Imprimir' => 'aboutus',
            'Ofertas' => 'aboutus',
            'Contactános' => 'contact',
        ];

        $redes = [
            'Facebook' => [
                'icon' => 'icons.facebook',
                'link' => '',
            ],
            'Whatsapp' => [
                'icon' => 'icons.whatsapp',
                'link' => $phone
            ]
        ];

    
        
        View::share('menu', $menu);
        View::share('redes', $redes);
        View::share('fecha', $fecha);
    }
}
