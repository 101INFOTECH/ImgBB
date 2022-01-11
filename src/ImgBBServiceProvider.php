<?php

namespace Infotech\ImgBB;

use Illuminate\Support\ServiceProvider;
use Infotech\ImgBB\ImgBB;

class ImgBBServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->app->singleton('ImgBBAPI', function ($app) {
            return new ImgBB;
        });
    }
}
