## PASO 1:

```sh
composer create-project laravel/laravel recaptcha28nov2020 "6.*"
```

```sh
composer require anhskohbo/no-captcha
```

## PASO 2:

Modificar ``config/app.php``

## PASO 3:

Get Google Captcha Secrets: 
Registra un sitio nuevo > localhost > reCAPTCHA v2 > "I'm not a robot" Checkbox

https://www.google.com/recaptcha/admin/create
EMAIL:
dntic2020@gmail.com
KEYS:
CLIENT-SIDE:
6LfjdPEZAAAAADBVkvNYSAt6ZUJM8-ikB1x5omgt
SERVER-SIDE:
6LfjdPEZAAAAAPo-TA0-h-RC5QvZvKBFsG0wMppb

## REFERENCIAS

https://xpertphp.com/laravel-6-google-v2-recaptcha-form-validation-example-tutorial/
https://www.tutsmake.com/laravel-7-6-google-v2-recaptcha-form-validation-example/
