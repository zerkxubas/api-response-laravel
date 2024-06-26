<?php

declare(strict_types=1);

namespace Zerkxubas\ApiResponseLaravel\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;
use Zerkxubas\ApiResponseLaravel\Http\Controllers\ApiResponseController;

final class RequiresJsonMiddleware
{
    protected $apiResponse;

    public function __construct(ApiResponseController $apiResponse )
    {
        $this->apiResponse = $apiResponse;
    }

    public function handle(Request $request, Closure $next)
    {
        if (!$request->wantsJson()) {
            $error = new NotAcceptableHttpException('Please request with HTTP header: Accept: application/json');
            $errorMessages = [
                'error' => 'Please request with HTTP header: Accept: application/json',
            ];
            return $this->apiResponse->sendError('Invalid http header request.', $errorMessages, $error->getStatusCode());

        }
        return $next($request);
    }
}

