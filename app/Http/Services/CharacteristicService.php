<?php declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Characteristic;
use App\Repositories\CharacteristicRepository;
use Illuminate\Http\Request;

class CharacteristicService
{
    private CharacteristicRepository $repository;

    public function __construct(CharacteristicRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(Request $request): Characteristic
    {
        return $this->repository->create($request);
    }
}
