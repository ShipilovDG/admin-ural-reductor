<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    public function drop(Request $request)
    {
        $request->validate(['characteristic_id' => 'int']);
    }

    public function getAll(Request $request)
    {

    }

    public function update(Request $request)
    {
        $request->validate([
            'characteristic_id' => 'int',
            'values'            => 'int',
        ]);

    }

    public function create(Request $request)
    {

    }
}
