<?php

declare(strict_types=1);

namespace Zerkxubas\ApiResponseLaravel\Enums;

final class StatusCodeEnum
{
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const SERVER_ERROR = 500;
    // more to be added.
}