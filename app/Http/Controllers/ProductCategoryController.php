<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use function Symfony\Component\Translation\t;

class ProductCategoryController extends Controller
{
    public function create(Request $request)
    {
        $category              = new ProductCategory;
        $category->description = $request->get('description');
        $category->title       = $request->get('title');
        $category->save();

        return new JsonResponse(
            [
                'success'  => true,
                'category' => $category,
            ]
        );
    }

    public function delete(Request $request)
    {
        $category = ProductCategory::findOrCreate($request->get('id'));
        /**
         * @var  $category ProductCategory
         */
        $category->delete();

        return new JsonResponse(['success' => true]);
    }

    public function patch(Request $request)
    {
        $category              = ProductCategory::findOrCreate($request->get('id'));
        $category->description = $request->get('description');
        $category->title       = $request->get('title');
        $category->save();

        return new JsonResponse(
            [
                'success'  => true,
                'category' => $category,
            ]
        );
    }

    public function get(Request $request)
    {
        $request->validate(['id' => 'int']);

        $category = ProductCategory::find($request->get('id'));

        return new JsonResponse(
            [
                'success'  => true,
                'category' => $category,
            ]
        );
    }
}
