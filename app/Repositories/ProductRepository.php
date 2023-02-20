<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{
    public function create(Request $request): Product
    {
        $product                      = new Product();
        $product->user_id             = $request->get('user_id');
        $product->dimensions          = $request->json('dimensions');
        $product->files               = $request->get('files');
        $product->product_category_id = $request->get('user_id');
        $product->vendor_code         = $request->get('vendor_code');
        $product->tags                = $request->get('tags');
        $product->producer_id         = $request->get('producer_id');
        $product->characteristics     = $request->get('characteristics');
        $product->price_type_id       = $request->get('price_type_id');
        $product->weight_kg           = $request->get('weight_kg');
        $product->save();

        return $product;
    }

    public function getByIds()
    {

    }

    public function getWithPagination()
    {

    }

    public function patch()
    {
    }

}
