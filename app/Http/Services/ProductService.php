<?php declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    private ProductRepository $repository;

    public function __construct(
        ProductRepository $repository
    )
    {
        $this->repository = $repository;
    }

    public function create(Request $request): Product
    {
        return $this->repository->create($request);
    }

    public function patch(Request $request): Product
    {
        $this->repository->patch();
    }

    public function getWithPagination(Request $request): Product
    {
        $this->repository->getWithPagination();
    }

    public function drop(int $productId): bool|null
    {
        return $this->repository->drop($productId);
    }

    public function get(Request $request)
    {
        return $this->repository->get($request);
    }
}
