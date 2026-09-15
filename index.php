<?php

use App\Models\Vehicle;
use App\Models\RentalRecord;

require 'vendor/autoload.php';

// Create a Vehicle object
$vehicle1 = new Vehicle("Toyota", "Vios", "Red", "ABC-1234", 1500.00);

// Create a RentalRecord object using that Vehicle
$rental1 = new RentalRecord("Juan Dela Cruz", 3, $vehicle1);

// Call methods and print readable output
echo "Renter: Juan Dela Cruz<br>";
echo "Vehicle: Toyota Vios (Red)<br>";
echo "Rental Days: 3<br>";
echo "Total Cost: ₱" . $rental1->getTotalCost() . "<br>";

echo "<br>---<br><br>";

// Create a second Vehicle + RentalRecord to satisfy "at least two objects"
$vehicle2 = new Vehicle("Honda", "Civic", "Black", "XYZ-5678", 2000.00);
$rental2 = new RentalRecord("Maria Santos", 5, $vehicle2);

echo "Renter: Maria Santos<br>";
echo "Vehicle: Honda Civic (Black)<br>";
echo "Rental Days: 5<br>";
echo "Total Cost: ₱" . $rental2->getTotalCost() . "<br>"; 