<?php

declare(strict_types=1);

namespace ArashAnvari\ApiResponse\HttpResponses;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;

class HttpUnauthorized
{
    /**
     * @var string|array|Application|Translator|null
     */
    readonly public string|null|Translator|array|Application $message;

    /**
     * @param  int  $statusCode
     */
    public function __construct(
        readonly public int $statusCode = 401
    ) {
        $this->message = trans('responses.401');
    }
}
