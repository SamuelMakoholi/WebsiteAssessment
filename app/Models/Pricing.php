<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;


    public function pricingFeature()
    {
        return $this->hasMany(PricingFeature::class, 'pricing_plan_id');
    }
}
