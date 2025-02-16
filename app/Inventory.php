<?php

namespace App;

use App\Enums\Type;
use App\Enums\Wood;
use App\GuitarSpec;
use App\Enums\Builder;

class Inventory {
    protected array $guitars;

    public function addGuitar(string $serialNumber, float $price, GuitarSpec $guitarSpec): void {
        $guitar = new Guitar($serialNumber, $price, $guitarSpec);
        $this->guitars[] = $guitar;
    }

    public function getGuitar(string $serialNumber): Guitar
    {
        foreach ($this->guitars as $guitar) {
            if ($guitar->getSerialNumber() === $serialNumber) {
                return $guitar;
            }
        }
        return null;
    }

    public function search(GuitarSpec $searchSpec): array
    {
        $matchedGuitars = [];

        foreach($this->guitars as $guitar) {
            if($guitar->getSpec()->matches($searchSpec)) $matchedGuitars[] = $guitar;
        }

        return $matchedGuitars;
    }

    public function initialize()
    {
        $this->addGuitar("11277", 3999.95, 
            new GuitarSpec(Builder::COLLINGS, "CJ", Type::ACOUSTIC, 6,
                           Wood::INDIAN_ROSEWOOD, Wood::SITKA));
        $this->addGuitar("V95693", 1499.95, 
            new GuitarSpec(Builder::FENDER, "Stratocastor", Type::ELECTRIC, 6,
                           Wood::ALDER, Wood::ALDER));
        $this->addGuitar("V9512", 1549.95, 
            new GuitarSpec(Builder::FENDER, "Stratocastor", Type::ELECTRIC, 6,
                           Wood::ALDER, Wood::ALDER));
        $this->addGuitar("122784", 5495.95, 
            new GuitarSpec(Builder::MARTIN, "D-18", Type::ACOUSTIC, 6,
                           Wood::MAHOGANY, Wood::ADIRONDACK));
        $this->addGuitar("76531", 6295.95, 
            new GuitarSpec(Builder::MARTIN, "OM-28", Type::ACOUSTIC, 6,
                           Wood::BRAZILIAN_ROSEWOOD, Wood::ADIRONDACK));
        $this->addGuitar("70108276", 2295.95, 
            new GuitarSpec(Builder::GIBSON, "Les Paul", Type::ELECTRIC, 6,
                           Wood::MAHOGANY, Wood::MAHOGANY));
        $this->addGuitar("82765501", 1890.95, 
            new GuitarSpec(Builder::GIBSON, "SG '61 Reissue", Type::ELECTRIC, 6,
                           Wood::MAHOGANY, Wood::MAHOGANY));
        $this->addGuitar("77023", 6275.95, 
            new GuitarSpec(Builder::MARTIN, "D-28", Type::ACOUSTIC, 6,
                           Wood::BRAZILIAN_ROSEWOOD, Wood::ADIRONDACK));
        $this->addGuitar("1092", 12995.95, 
            new GuitarSpec(Builder::OLSON, "SJ", Type::ACOUSTIC, 12,
                        Wood::INDIAN_ROSEWOOD, Wood::CEDAR));
        $this->addGuitar("566-62", 8999.95, 
            new GuitarSpec(Builder::RYAN, "Cathedral", Type::ACOUSTIC, 12,
                           Wood::COCOBOLO, Wood::CEDAR));
        $this->addGuitar("6 29584", 2100.95, 
            new GuitarSpec(Builder::PRS, "Dave Navarro Signature", Type::ELECTRIC, 
                        6, Wood::MAHOGANY, Wood::MAPLE));

    }
}