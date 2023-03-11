<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Schema;

#[Schema]
class Product extends Model
{
    use HasFactory;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    #[Property(type: "int")]
    private $id                  = null;
    #[Property(type: "int")]
    private $product_category_id = null;
    #[Property(type: "string")]
    private $naming              = null;
    #[Property(type: "string")]
    private $factory_designation = null;
    #[Property(type: "int", example: 1111111111)]
    private $vendor_code         = null;
    #[Property(type: "json", example: '{"height":12, "width":12, "depth":12}')]
    private $dimensions          = null;
    #[Property(type: "float")]
    private $weight_kg           = null;
    #[Property(type: "int")]
    private $price_type_id       = null;
    #[Property(type: "int")]
    private $producer_id         = null;
    #[Property(
        description: "Состоит из массива ids объектов characteristics",
        type: "json",
        example: "[
        1,
        123123,
        9459
        ]"
    )]
    private $characteristics     = null;
}
