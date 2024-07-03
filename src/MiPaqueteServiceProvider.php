<?php

namespace GatoJustiniano\InfoBolivia;

use Illuminate\Support\ServiceProvider;

class MiPaqueteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Carga de rutas
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Carga de vistas
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'miPaquete');

        // Carga de migraciones
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publicación de configuraciones
        $this->publishes([
            __DIR__.'/../config/miPaquete.php' => config_path('miPaquete.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge de configuraciones
        $this->mergeConfigFrom(
            __DIR__.'/../config/miPaquete.php', 'miPaquete'
        );
    }
}
