<?php

namespace Infotech\ImgBB;

use Illuminate\Support\ServiceProvider;
use Infotech\ImgBB\ImgBB;

class ImgBBServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ImgBB.php' => config_path('ImgBB.php'),
            ], 'ImgBB');
        }

        $this->app->singleton('ImgBBAPI', function () {
            return new ImgBB;
        });
    }
}
