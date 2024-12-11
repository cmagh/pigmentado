<?php

namespace App\Providers;

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
        //

        $menu = [
            'Inicio' => 'home',
            'Quienes somos' => 'aboutus',
            'Contactanos' => 'contact',
        ];

        $redes = [
            'Facebook' => [

            ],
            'Whatsapp' => [

            ]
            ];
    
        // Compartir el array $menu en todas las vistas
        View::share('menu', $menu);
        View::share('redes', $redes);
    }
}
