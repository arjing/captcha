<?php

namespace LumenUtils\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LumenUtils\Captcha
 * @mixin  \LumenUtils\Captcha
 * @method static array create(string $config = 'default')
 * @method static bool check($value, $key)
 * @method static void includeConfig($config)
 * @method static void includeAssets()
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}