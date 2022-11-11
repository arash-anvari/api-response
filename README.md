# Laravel API Response

<!-- BADGES_START -->
[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
[![Total Downloads][badge-downloads]][downloads]

[badge-tests]: https://github.com/arash-anvari/api-response/actions/workflows/test.yml/badge.svg
[badge-release]: https://img.shields.io/packagist/v/arash-anvari/api-response.svg?style=flat-square&label=release
[badge-php]: https://img.shields.io/packagist/php-v/arash-anvari/api-response.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/arash-anvari/api-response.svg?style=flat-square&colorB=mediumvioletred

[packagist]: https://packagist.org/packages/arash-anvari/api-response
[php]: https://php.net
[downloads]: https://packagist.org/packages/arash-anvari/api-response
[tests]: https://github.com/arash-anvari/api-response/actions/workflows/test.yml
<!-- BADGES_END -->

It helps to manage responses consistency

## Installation

```bash
composer require arash-anvari/api-response
```

## Usage
web.php

```bash
Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);
```

Controllre.php
```php
<?php

namespace App\Http\Controllers;

use ArashAnvari\ApiResponse\Facades\ApiResponse;
use ArashAnvari\ApiResponse\HttpResponses\HttpCreated;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return ApiResponse::generate(HttpCreated::class, [
            'firstName' => 'Arash',
            'lastName' => 'Anvari',
            'email' => 'arashanvari1988@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/anvariarash/',
        ]);
    }
}
```

## Credits

- [Arash Anvari](https://github.com/arash-anvari)
- [Farzane Khazaei](https://github.com/F4rzane)

## LICENSE

The MIT License (MIT). Please see [License File](./LICENSE) for more information.

