<?php   
namespace App\Models;

interface Rentable{
    public function calculateRentalCost(int $days);
}