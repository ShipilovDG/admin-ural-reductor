<?php

namespace App\Http\Controllers;

use App\Models\PriceType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PriceTypeController extends Controller
{
    public function create(Request $request)
    {
        $priceType              = new PriceType();
        $priceType->description = $request->get('description');
        $priceType->type       = $request->get('type');
        $priceType->save();

        return new JsonResponse(
            [
                'success'  => true,
                '$priceType' => $priceType,
            ]
        );
    }

    public function delete(Request $request)
    {
        $priceType = PriceType::findOrCreate($request->get('id'));
        /**
         * @var  $priceType PriceType
         */
        $priceType->delete();

        return new JsonResponse(['success' => true]);
    }

    public function patch(Request $request)
    {
        $priceType              = PriceType::findOrCreate($request->get('id'));
        $priceType->description = $request->get('description');
        $priceType->type       = $request->get('type');
        $priceType->save();

        return new JsonResponse(
            [
                'success'  => true,
                '$priceType' => $priceType,
            ]
        );
    }

    public function get(Request $request)
    {
        $request->validate(['id' => 'int']);

        $priceType = PriceType::find($request->get('id'));

        return new JsonResponse(
            [
                'success'  => true,
                '$priceType' => $priceType,
            ]
        );
    }
}
