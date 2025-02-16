<?php

use App\Enums\Type;
use App\Enums\Wood;
use App\GuitarSpec;
use App\Enums\Builder;
use App\Inventory;

require 'vendor/autoload.php';

$inventory = new Inventory();
$inventory->initialize();

$whatErinLikes = new GuitarSpec(Builder::FENDER, "Stratocastor", Type::ELECTRIC, 6, Wood::ALDER, Wood::ALDER);

$matchingGuitars = $inventory->search($whatErinLikes);

if(count($matchingGuitars)) {
    echo "Erin, you might like these guitars:<br/><br/>";

    foreach($matchingGuitars as $guitar) {
        $spec = $guitar->getSpec();
        echo "  We have a " . $spec->getBuilder()->value . " " . $spec->getModel() . " " . $spec->getType()->value . " guitar:<br/>";
        echo $spec->getBackWood()->value . " back and side,<br/>   "; 
        echo $spec->getTopWood()->value . " top.<br/>";
        echo "    You can have it for only $" . $guitar->getPrice() . "!<br/>";
        echo "  -----<br/>";
    }
}

else {
    echo "Sorry, Erin, we have nothing for you.<br/>";
}



