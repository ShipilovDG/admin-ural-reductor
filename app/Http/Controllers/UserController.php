<?php

namespace App\Http\Controllers;

use App\Enums\ErrorMessages;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @OA\Post(
     *     tags={"auth"},
     *     path="/login",
     *     description="Авторизация пользователя",
     *     @OA\Parameter(
     *         description="Логин пользователя",
     *         in="query",
     *         name="login",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Пароль пользователя",
     *         in="query",
     *         name="password",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success: true",
     *         @OA\JsonContent(),
     *     ),
     * )
     */
    public function login(Request $request)
    {
        $request->validate(
            [
                'login'    => 'required',
                'password' => 'min:8|required',
            ]
        );
        $formFields = $request->only(['login', 'password']);
        $user       = User::all()->where('login', '=', $formFields['login'])->first();

        if ($user && Hash::check($formFields['password'], $user->password)) {
            Auth::login($user);
            return redirect('userPage');
        }

        return redirect('login');
    }

    /**
     * @OA\Post(
     *     tags={"auth"},
     *     path="/register",
     *     description="Регистрация пользователя",
     *     @OA\Parameter(
     *         description="Логин пользователя",
     *         in="query",
     *         name="login",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Пароль пользователя",
     *         in="query",
     *         name="password",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="success: true",
     *         @OA\JsonContent(),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="success: false, errors: user alrady register",
     *         @OA\JsonContent(),
     *     ),
     * )
     */
    public function register(Request $request)
    {
        $request->validate(
            [
                'login'    => 'required',
                'password' => 'min:8|required',
            ]
        );
        try {
            $user = $this->service->createUser($request);
            Auth::login($user);
        }
        catch (QueryException $exception) {
            if ( ! str_contains($exception->getMessage(), "Duplicate")) {
                throw $exception;
            }

            return new JsonResponse([
                'success' => false,
                'errors'  => [ErrorMessages::USER_ALREADY_EXIST],
            ]);
        }

        return redirect('userPage');
    }

    /**
     * @OA\Get(
     *     tags={"auth"},
     *     path="/logout",
     *     description="Выход пользователя",
     *     @OA\Response(
     *         response=302,
     *         description="success: true"
     *     ),
     * )
     */
    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    /**
     * @OA\Patch(
     *     tags={"user"},
     *     path="/user",
     *     description="Изменение настроек пользователя",
     *     @OA\RequestBody(
     *         description="Pet to add to the store",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success: true",
     *         @OA\JsonContent(),
     *     ),
     * )
     */
    public function patch(Request $request): JsonResponse
    {
        $request->validate([
            'id'           => 'required|numeric',
            'login'        => 'required',
            'email'        => 'email',
            'full_name'    => 'max:32',
            'birth_date'   => 'date',
            'phone_number' => 'numeric|digits:10',
            'lang'         => 'string',
            'timezone'     => 'timezone',
            'password'     => 'min:8',
        ]);

        $user = $this->service->saveUser($request);

        return new JsonResponse([
            'success' => true,
            'user'    => $user,
        ]);
    }

    /**
     * @OA\Get (
     *     tags={"user"},
     *     path="/user",
     *     description="Получение пользователя по id",
     *     @OA\Parameter(
     *         description="ID пользователя",
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
    public function get(Request $request): JsonResponse
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'user'    => $this->service->get($request),
            'success' => true,
        ]);
    }

    /**
     * @OA\Delete(
     *     tags={"user"},
     *     path="/user",
     *     description="Удаляет пользователя по id",
     *     @OA\Parameter(
     *         description="ID пользователя",
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
    public function delete(Request $request): JsonResponse
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'success' => $this->service->delete($request),
        ]);
    }
    public function getCurrent(Request $request): JsonResponse
    {
        return new JsonResponse([$request->user()->id]);
    }
}
