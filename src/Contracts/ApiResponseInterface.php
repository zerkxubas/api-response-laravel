<?php

namespace Zerkxubas\ApiResponseLaravel\Contracts;

interface ApiResponseInterface{
    /**
     * Send Response
     */
    public function sendResponse($result, $message, $code);

    /**
     * Error Response
     */
    public function sendError($error, $errorMessages, $code);
}