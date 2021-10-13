<?php

namespace yzh52521\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package think\captcha\facade
 * @mixin \yzh52521\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \yzh52521\captcha\Captcha::class;
    }
}
