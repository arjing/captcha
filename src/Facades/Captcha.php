<?php

namespace LumenUtils\Captcha\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @see \LumenUtils\Captcha
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