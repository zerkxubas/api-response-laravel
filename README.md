# API Response Laravel Package

This package provides a structured way to handle API responses in Laravel applications. It includes predefined status codes and a middleware to enforce JSON requests.

**NOTE** suitable for `Laravel v11+`

## Installation

You can install the package via composer:

```bash
composer require zerkxubas/api-response-laravel
```

## Publish Configuration

To publish the configuration file, run the following command:

```bash
php artisan vendor:publish --tag="apiresponse"
```

This will create a config/apiresponse.php file in your project where you can customize the package settings.

## Usages

### Status Codes

The package includes a set of predefined status codes which can be accessed as constants:

```php
use Zerkxubas\ApiResponseLaravel\StatusCode;

$status = StatusCode::OK;
```

### Middleware

The package provides a middleware to ensure that all API requests expect a JSON response. To use register it in your bootstrap/app.php file.

```php
// use this namespace.
use Zerkxubas\ApiResponseLaravel\Http\Middleware\RequiresJsonMiddleware;

// Add this line inside ->withMiddleware(){}
$middleware->api()->append(RequiresJsonMiddleware::class);
```

## Using ApiResponseController

To use the `ApiResponseController` provided by this package, you can extend it in your own controllers. This will allow you to use the standardized API response methods.

```php

use Zerkxubas\ApiResponseLaravel\Http\Controllers\ApiResponseController;

class MyCustomController extends ApiResponseController
{
    // send response
    return $this->sendResponse($data, $message, $code)

    // send errorResponse
    return $this->sendError($error, $errorMessages, $code);
}
```

More Example **SendResponse**
```php

// Example of sending a success response
$data = ['key' => 'value'];
return $this->sendResponse('Data retrieved successfully.', $data, 200);

// Or
return $this->sendResponse('Data retrieved successfully.', $data, StatusCode::OK);

```

More Example **SendErrorResponse**
```php
// Example of sending an error response
$errorMessages = [
    'error_detail' => 'Customized errors in bulk.'
];
return $this->sendError('File not found.', $errorMessages, 404);

// Or
return $this->sendError('File not found.', $errorMessages, StatusCode::NOT_FOUND);

```

## Currently Supported Status Codes & Usages

- 200
  ```StatusCode::OK```

- 201
  ```StatusCode::CREATED```

- 202
  ```StatusCode::ACCEPTED```

- 400
  ```StatusCode::BAD_REQUEST```

- 401
  ```StatusCode::UNAUTHORIZED```

- 403
  ```StatusCode::FORBIDDEN```

- 404
  ```StatusCode::NOT_FOUND```

- 500
  ```StatusCode::SERVER_ERROR```

## Customizing the API Response Implementation

You can customize the API response structure by specifying your own implementation of the `ApiResponseInterface` in the `config/apiresponse.php` configuration file.

**At First**, create your custom class implementing `ApiResponseInterface`:

```php
<?php

namespace App\Services;

use Zerkxubas\ApiResponseLaravel\Contracts\ApiResponseInterface;

class CustomApiResponse implements ApiResponseInterface
{
    public function sendResponse($message, $data = [], $code = 200)
    {
        // Your custom response structure
    }

    public function sendError($message, $data = [], $code = 400)
    {
        // Your custom error structure
    }
}
```

**Then**, update the `config/apiresponse.php` file to use your custom class:
```php

return [    
    'implementation' => App\Services\CustomApiResponse::class,
];
```


## License

- Open Source, free to use & distribute.

## Author

[@zerkxubas](https://www.github.com/zerkxubas)