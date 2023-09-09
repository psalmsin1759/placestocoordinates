<?php

namespace Psalmsin1759\PlacesToCoordinates;

use Illuminate\Support\ServiceProvider;
use Psalmsin1759\PlacesToCoordinates\Coordinates;


class CoordinatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton(Coordinates::class, function ($app) {
            return new Coordinates(env("GEOCODING_API_KEY"));
        });
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
