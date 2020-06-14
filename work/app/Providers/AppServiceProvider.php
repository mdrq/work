<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      // OnePiece
      $this->app->bind(
        \App\Repositories\OnePiece\CharacterRepositoryInterface::class,
        \App\Repositories\OnePiece\CharacterRepository::class
      );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
