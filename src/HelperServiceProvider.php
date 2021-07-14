<?php

namespace duke\helper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__.'/helpers.php';
    }
}
