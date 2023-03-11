<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class ProductsController extends Controller
{
    private ProductService $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
    /**
     * @OA\Post (
     *     tags={"product"},
     *     path="/product",
     *     description="Создание товара",
     *     @OA\RequestBody(
     *         description="Товар",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success: true",
     *         @OA\JsonContent(ref="#/components/schemas/Product"),
     *     ),
     * )
     */
    public function create(Request $request): JsonResponse
    {
        $request->validate([
            'product_category_id' => 'numeric',
            'naming'              => '',
            'factory_designation' => 'max:32',
            'vendor_code'         => 'numeric|digits:10',
            'attachment.*'        => [
                File::types(['png', 'pdf'])
                    ->max(12 * 1024),
            ],
            'tags.*'              => 'string',
            'producer_id'         => 'numeric',
            'characteristics'     => 'string',
            'weight_kg'           => 'numeric',
            'description'         => 'string',
        ]);

        $product = $this->service->create($request);

        return new JsonResponse([
            'success' => true,
            'product' => $product,
        ]);
    }
    /**
     * @OA\Delete(
     *     tags={"product"},
     *     path="/product",
     *     description="Удаляет товар по id",
     *     @OA\Parameter(
     *         description="ID товара",
     *         in="query",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success: true",
     *         @OA\JsonContent()
     *     ),
     * )
     */
    public function drop(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'int',
        ]);
        $responseResult = $this->service->drop((int) $request->get('product_id'));

        return new JsonResponse($responseResult);
    }
    /**
     * @OA\Get (
     *     tags={"product"},
     *     path="/product",
     *     description="Получение товара по id",
     *     @OA\Parameter(
     *         description="ID товара",
     *         in="query",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success: true",
     *         @OA\JsonContent(),
     *     ),
     *
     * )
     */
    public function get(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'product'    => $this->service->get($request),
            'success' => true,
        ]);
    }
}
