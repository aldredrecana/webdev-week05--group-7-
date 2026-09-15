<?php
namespace App\Models;

class RentalRecord{
    private string $renterName;
    private int $numberOfDays;

    private Vehicle $vehicle;

    public function __construct(string $renterName, int $numberOfDays, Vehicle $vehicle){
        $this->renterName = $renterName;
        $this->numberOfDays = $numberOfDays;
        $this->vehicle = $vehicle;
    }

    public function getTotalCost(){
        return $this->vehicle->calculateRentalCost($this->numberOfDays);
    }
}