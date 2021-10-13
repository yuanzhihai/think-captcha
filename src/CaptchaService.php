<?php

namespace yzh52521\captcha;

use think\Route;
use think\Service;
use think\Validate;

class CaptchaService extends Service
{
    public function boot()
    {
        Validate::maker(function ($validate) {
            $validate->extend('captcha', function ($value) {
                return captcha_check($value);
            }, ':attribute错误!');
        });

        $this->registerRoutes(function (Route $route) {
            $route->get('captcha/[:config]', "\\yzh52521\\captcha\\CaptchaController@index");
        });
    }
}
