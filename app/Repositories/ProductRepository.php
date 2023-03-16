<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductRepository
{
    public function create(Request $request): Product
    {
        $product             = new Product();
        $product->dimensions = $request->json('dimensions');

        $filePaths = [];
        /** @var UploadedFile $file */
        foreach ($request->allFiles() as $filesArray) {
            if (is_array($filesArray)) {
                foreach ($filesArray as $file) {
                    $filePaths[] = $this->storeFile($file);
                }
            }
            else {
                $filePaths[] = $this->storeFile($file);
            }
        }

        $product->files               = json_encode($filePaths);
        $product->product_category_id = $request->get('product_category_id');
        $product->vendor_code         = $request->get('vendor_code');
        // if ($request->get('tags')){
        //     $product->tags                = Tag::factory()->createMany($request->get('tags'));
        // }
        $product->producer_id     = $request->get('producer_id');
        $product->characteristics = $request->get('characteristics');
        $product->price_type_id   = $request->get('price_type_id');
        $product->weight_kg       = $request->get('weight_kg');
        $product->save();

        return $product;
    }

    private function storeFile(UploadedFile $file): string
    {
        $fileHash      = md5($file->getFilename());
        $fileHash      = str_replace('.', '', $fileHash);
        $fileHashArray = str_split($fileHash, 2);
        $path          = "public/$fileHashArray[0]/$fileHashArray[1]/$fileHash.{$file->guessClientExtension()}";
        Storage::disk('local')->put($path, $file->getContent());

        return $path;
    }

    public function drop(int $productId): bool|null
    {
        $product = Product::find($productId);

        /**
         * @var $product Product
         */
        return $product->delete();
    }

    public function get(Request $request)
    {
        return Product::findOrFail($request->get('id'));
    }

    public function patch(Request $request)
    {
        $product             = Product::findOrFail($request->get('id'));
        $product->dimensions = $request->json('dimensions');

        $filePaths = [];
        /** @var UploadedFile $file */
        foreach ($request->allFiles() as $filesArray) {
            if (is_array($filesArray)) {
                foreach ($filesArray as $file) {
                    $filePaths[] = $this->storeFile($file);
                }
            }
            else {
                $filePaths[] = $this->storeFile($file);
            }
        }

        $product->files               = json_encode($filePaths);
        $product->product_category_id = $request->get('product_category_id');
        $product->vendor_code         = $request->get('vendor_code');
        // if ($request->get('tags')){
        //     $product->tags                = Tag::factory()->createMany($request->get('tags'));die();
        // }
        $product->producer_id     = $request->get('producer_id');
        $product->characteristics = $request->get('characteristics');
        $product->price_type_id   = $request->get('price_type_id');
        $product->weight_kg       = $request->get('weight_kg');
        $product->save();

        return $product;
    }

    /**
     * @param string $query
     *
     * @return Collection
     */
    public function getWithPagination(string $query): Collection
    {
        return Product::all()->where('vendor_code', 'like', '%' . $query . '%');
    }
}
