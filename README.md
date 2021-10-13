# think-captcha

thinkphp6 验证码类库

## 安装
> composer require yzh52521/think-captcha



## API使用

### 返回验证码

~~~
public function captcha($id = '')
{
   return yzh52521\captcha\Captcha($id,true);
}
~~~



### api验证

~~~
if (!yzh52521\captcha\Captcha::checkApi($data['verify'], $data['key'])) {
   throw new ValidateException('验证码错误');
}
~~~
