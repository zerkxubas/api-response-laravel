<?php

declare(strict_types=1);

namespace Zerkxubas\ApiResponseLaravel;

use Zerkxubas\ApiResponseLaravel\Enums\StatusCodeEnum;

final class StatusCode
{
    const OK = StatusCodeEnum::OK;
    const CREATED = StatusCodeEnum::CREATED;
    const ACCEPTED = StatusCodeEnum::ACCEPTED;
    const BAD_REQUEST = StatusCodeEnum::BAD_REQUEST;
    const UNAUTHORIZED = StatusCodeEnum::UNAUTHORIZED;
    const FORBIDDEN = StatusCodeEnum::FORBIDDEN;
    const NOT_FOUND = StatusCodeEnum::NOT_FOUND;
    const SERVER_ERROR = StatusCodeEnum::SERVER_ERROR;
}