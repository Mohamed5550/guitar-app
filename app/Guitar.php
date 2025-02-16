<?php

namespace App;

use App\GuitarSpec;

class Guitar {
    protected string $serialNumber;
    protected float $price;

    protected GuitarSpec $spec;
    
    public function __construct(string $serialNumber, float $price, GuitarSpec $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getSpec(): GuitarSpec
    {
        return $this->spec;
    }
}