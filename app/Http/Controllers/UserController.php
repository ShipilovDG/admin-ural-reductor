<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private UserService $service;
    /**
     * @OA\Info(
     *      version="3.0.0",
     *     title = "admin panel"
     * )
     * @OA\Get(
     *      path="/profiles",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *      ),
     *     @OA\PathItem (
     *     ),
     * )
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'login'    => 'required',
                'password' => 'min:8|required',
            ]
        );
        $formFields = $request->only(['login', 'password']);
        if (Auth::attempt($formFields)) {
            //TODO почитать по intended
            return redirect()->intended(route('userPage'));
        }

        return redirect('login');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'login'    => 'required',
                'password' => 'min:8|required',
            ]
        );

        $user = $this->service->createUser($request);
        Auth::login($user);

        return redirect('userPage');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

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

    public function get(Request $request): JsonResponse
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'user'    => $this->service->get($request),
            'success' => true,
        ]);
    }

    public function delete(Request $request): JsonResponse
    {
        $request->validate(['id' => 'required|numeric']);

        return new JsonResponse([
            'success' => $this->service->delete($request),
        ]);
    }
}
