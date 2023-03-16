<?php

namespace App\Http\Controllers;

use App\Http\Services\CharacteristicService;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{


    private CharacteristicService $service;

    public function __construct(CharacteristicService $service)
    {
        $this->service = $service;
    }

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
        $this->service->create($request);
    }
}
