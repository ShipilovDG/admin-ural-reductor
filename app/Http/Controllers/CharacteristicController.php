<?php

namespace App\Http\Controllers;

use App\Http\Services\CharacteristicService;
use App\Models\Characteristic;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CharacteristicController extends Controller
{


    private CharacteristicService $service;

    public function __construct(CharacteristicService $service)
    {
        $this->service = $service;
    }

    public function drop(Request $request)
    {
        $request->validate(['id' => 'int']);
        $char = Characteristic::find($request->get('id'));
        /**
         * @var $char Characteristic
         */
        $char->delete();

        return new JsonResponse(['success' => true]);
    }

    public function get(Request $request)
    {
        $request->validate(['id' => 'int']);
        $char = Characteristic::find($request->get('id'));

        return new JsonResponse(
            [
                'success'  => true,
                'category' => $char,
            ]
        );
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'int',
        ]);
        $char = Characteristic::find($request->get('id'));
        /**
         * @var $char Characteristic
         */
        $char->title  = $request->get('title');
        $char->values = $request->json('values');


        $char->delete();

        return new JsonResponse(['success' => true]);
    }

    public function create(Request $request)
    {
        $this->service->create($request);
    }
}
