<?php declare(strict_types=1);

namespace App\Models\JsonModels;

class CharacteristicValue implements \JsonSerializable
{
    public string $designation;
    public string $printDesignation;

    public function jsonSerialize()
    {
        return [
            'designation'       => $this->designation,
            'print_designation' => $this->printDesignation,
        ];
    }
}
