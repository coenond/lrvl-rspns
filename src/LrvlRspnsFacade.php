<?php

namespace coenond\LrvlRspns;

use Illuminate\Support\Facades\Facade;

class LrvlRspnsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lrvl-rspns';
    }
}