<?php

namespace Netosfer\Formstrap;

use \Illuminate\Support\Facades\Facade;

class FormstrapFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'formstrap';
    }

}
