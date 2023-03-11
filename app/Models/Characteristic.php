<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Schema;

#[Schema]
class Characteristic extends Model
{
    use HasFactory;

    #[Property(type: "string")]
    private $title  = null;
    #[Property(
        description: "массив json строк подвидов характеристик",
        type: "json",
        example: "[
            {'designation': 'Red color', 'print_designation':'RC'},
            {'designation': 'Green color', 'print_designation':'GC'}
        ]"
    )]
    private $values = null;
}
