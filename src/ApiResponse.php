<?php

namespace ArashAnvari\ApiResponse;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class ApiResponse
{
    protected $meta;
    protected $data;
    protected string $message;
    protected int $statusCode;

    /**
     * @param $responseClass
     * @param $data
     * @param $message
     * @param $meta
     * @param $errors
     * @return JsonResponse
     */
    public function generate($responseClass, $data = null, $message = null, $meta = null, $errors = null): JsonResponse
    {
        $responsibleObject = new ($responseClass);
        $this->statusCode = $responsibleObject->statusCode;
        $this->message = $message ?? $responsibleObject->message;

        $response = [
            'statusCode' => $this->statusCode,
            'message' => $this->message,
            'data' => $data,
        ];

        if (!App::isProduction() || App::hasDebugModeEnabled()) {
            $response['errors'] = $errors;
        }

        if ($meta != null) {
            $meta = [
                'current_page' => $meta['current_page'],
                'first_page_url' => $meta['first_page_url'],
                'from' => $meta['from'],
                'last_page' => $meta['last_page'],
                'last_page_url' => $meta['last_page_url'],
                'links' => $meta['links'],
                'next_page_url' => $meta['next_page_url'],
                'path' => $meta['path'],
                'per_page' => $meta['per_page'],
                'prev_page_url' => $meta['prev_page_url'],
                'to' => $meta['to'],
                'total' => $meta['total'],
            ];
        }

        $response['meta'] = $meta;

        return response()->json($response)->setStatusCode($this->statusCode);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
