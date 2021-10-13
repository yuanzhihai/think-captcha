<?php

namespace yzh52521\captcha;

class CaptchaController
{
    public function index(Captcha $captcha, $config = null)
    {
        return $captcha->create($config);
    }
}
