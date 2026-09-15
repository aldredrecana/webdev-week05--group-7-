<?php
namespace App\Models;

use Override;

class Vehicle implements Rentable{
    private string $brand;
    private string $model;
    private string $color;
    protected string $platenumber;

    private float $dailyRate;

    private bool $isAvailable;

    function __construct(string $brand, string $model, string $color, string $platenumber, float $dailyRate){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->platenumber = $platenumber;
        $this->dailyRate = $dailyRate;
        $this->isAvailable = true;
    }
    

    #[Override]
    public function calculateRentalCost(int $days): float{
        return $this->dailyRate * $days;
    }


}