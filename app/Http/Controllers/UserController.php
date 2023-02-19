<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private UserService $service;

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
            return redirect()->intended(route('userPage'));
        }

        return redirect(route('login'))->withErrors(([
            'Invalid credentials',
        ]));
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


        return new JsonResponse([
                'user'    => $user,
                'success' => true,
            ]
        );
    }

    public function patch(Request $request)
    {
        $request->validate([
            'id'           => 'required|numeric',
            'login'        => 'required',
            'email'        => 'email',
            'full_name'    => 'max:32',
            'phone_number' => 'numeric|digits:10',
            'lang'         => 'string',
            'timezone'     => 'timezone',
            'password'     => 'min:8',
        ]);

        $user = $this->service->saveUser($request);
        return new JsonResponse([
            'success' => true,
            'user' => $user
        ]);
    }

    public function get(Request $request)
    {

    }
}
