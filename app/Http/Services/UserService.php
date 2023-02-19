<?php declare(strict_types=1);

namespace App\Http\Services;

use App\Repositories\UserRepository;

class UserService
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(\Illuminate\Http\Request $request): \App\Models\User
    {
        return $this->repository->create($request);
    }

    public function saveUser(\Illuminate\Http\Request $request): \App\Models\User
    {
        return $this->repository->saveUser($request);
    }
}
