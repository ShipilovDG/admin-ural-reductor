<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\Characteristic;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CharacteristicRepository
{
    public function drop(int $characteristicId)
    {
        $product = Characteristic::find($characteristicId);

        /**
         * @var $product Product
         */
        return $product->delete();
    }

    public function getAll(Request $request): Collection
    {
        return Characteristic::all()->where('title', 'like', '%' . $request->get('title') . '%');
    }

    public function update(Request $request): Characteristic
    {
        $characteristic = Characteristic::findOrFail($request->get('characteristicId'));
        /**
         * @var Characteristic $characteristic
         */
        $characteristic->title  = $request->get('title');
        $characteristic->values = json_encode($request->get('values'));
        $characteristic->save();

        return $characteristic;
    }

    public function create(Request $request): Characteristic
    {
        $characteristic         = new Characteristic();
        $characteristic->title  = $request->get('title');
        $characteristic->values = json_encode($request->get('values'));
        $characteristic->save();

        return $characteristic;
    }
}
