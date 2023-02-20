<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    private ProductService $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request): JsonResponse
    {
        $request->validate([
            'user_id'             => 'numeric',
            'product_category_id' => 'numeric',
            'naming'              => 'email',
            'factory_designation' => 'max:32',
            'vendor_code'         => 'numeric|digits:10',
            'files[]'             => 'array',
            'tags'                => 'string',
            'producer_id'         => 'numeric',
            'characteristics'     => 'string',
            'weight_kg'           => 'int',
        ]);

        $product = $this->service->create($request);

        return new JsonResponse([
            'success' => true,
            'product' => $product,
        ]);
    }

    public function get(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'user'    => $this->service->get($request),
            'success' => true,
        ]);
    }
}
