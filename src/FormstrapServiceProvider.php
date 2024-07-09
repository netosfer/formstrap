<?php

namespace Netosfer\Formstrap;

use Illuminate\Support\ServiceProvider;

class FormstrapServiceProvider extends ServiceProvider {

    protected $defer = true;

    public function register()
    {
        $this->app->singleton('formstrap', function() {
            return new FormService();
        });
    }

    public function provides()
    {
        return ['formstrap'];
    }

}
