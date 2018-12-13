<?php

namespace Ysnowflake;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: youthage
 * Date: 2018/12/13 1:40 PM
 */

class SnowflakeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'snowflake';
    }
}