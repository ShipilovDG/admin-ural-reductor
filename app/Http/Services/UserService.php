<?php declare(strict_types=1);

namespace App\Http\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(Request $request): User
    {
        return $this->repository->create($request);
    }

    public function saveUser(Request $request): User
    {
        return $this->repository->saveUser($request);
    }
    public function get(Request $request): User
    {
        return $this->repository->get($request);
    }

    public function delete(Request $request): ?bool
    {
        return $this->repository->delete($request);
    }
}
