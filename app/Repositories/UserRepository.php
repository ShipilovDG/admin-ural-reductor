<?php declare(strict_types=1);

namespace App\Repositories;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function create(Request $request): User
    {
        $user           = new User();
        $user->login    = $request->get('login');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return $user;
    }

    public function saveUser(Request $request): User
    {
        $user = User::findorfail($request->get('id'));

        $user->login        = $request->get('login');
        $user->phone_number = $request->get('phone_number');
        $user->email        = $request->get('email');
        $user->full_name    = $request->get('full_name');
        $user->timezone     = $request->get('timezone');
        $user->lang         = $request->get('lang');
        $user->password     = Hash::make($request->get('password'));

        $user->save();

        return $user;
    }
}
