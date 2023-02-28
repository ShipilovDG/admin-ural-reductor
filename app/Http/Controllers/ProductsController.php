<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

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
            'product_category_id' => 'numeric',
            'naming'              => 'email',
            'factory_designation' => 'max:32',
            'vendor_code'         => 'numeric|digits:10',
            'attachment.*'        => [
                'required',
                File::types(['png', 'pdf'])
                    ->max(12 * 1024),
            ],
            'tags.*'              => 'string',
            'producer_id'         => 'numeric',
            'characteristics'     => 'string',
            'weight_kg'           => 'float',
            'description'         => 'string',
        ]);

        $product = $this->service->create($request);

        return new JsonResponse([
            'success' => true,
            'product' => $product,
        ]);
    }

    public function drop(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'int',
        ]);
        $responseResult = $this->service->drop((int) $request->get('product_id'));

        return new JsonResponse($responseResult);
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
