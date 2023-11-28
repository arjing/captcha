<?php

namespace LumenUtils\Captcha;

use Illuminate\Support\ServiceProvider;

/**
 * Class CaptchaServiceProvider
 * @package LumenUtils\Captcha
 */
class CaptchaServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind captcha
        $this->app->bind('captcha', fn($app) => new Captcha($app));
    }
}