<?php

namespace App\Http\Controllers;

use OpenApi\Generator;

class SwaggerController extends Controller
{
    public function getSwaggerSchema(): string
    {
        $openapi = Generator::scan([env('SWAGGER_PATH')]);
        header('Content-Type: application/json');
        return $openapi->toJson();
    }
}
