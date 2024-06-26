<?php

namespace Zerkxubas\ApiResponseLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
use Zerkxubas\ApiResponseLaravel\Contracts\ApiResponseInterface;
use Zerkxubas\ApiResponseLaravel\StatusCode;

class ApiResponseController extends Controller implements ApiResponseInterface
{
    public function sendResponse($result, $message, $code)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];

        return response()->json($response, $code);
    }

    public function sendError($error, $errorMessages = [], $code = StatusCode::NOT_FOUND)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}