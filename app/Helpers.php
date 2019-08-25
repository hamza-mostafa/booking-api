<?php

/**
 * Returns a json response with the data array and a code for HTTP response status
 *
 * @param array $messages
 * @param int $code
 * @return \Illuminate\Http\JsonResponse
 */
function success(int $code, array $messages = ['message' => 'This operation was successful'])
{
    return response()->json($messages, $code);
}

/**
 * Creates a model custom exception intentionally to abort
 *
 *
 * @param int $code
 * @param $errorMessage
 * @param Exception|null $exception
 * @return void
 */
function fail(int $code,Error $errorMessage, Exception $exception = null)
{
    $exceptionClass = $exception.'Class';
    throw $exception !== null ? new $exceptionClass($code, $errorMessage) : new BaseException($code,$errorMessage);
}

/**
 * @var for the OpenAPI documentation
 */
define('HOSTER', env('APP_URL'));
