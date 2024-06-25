<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingFeature extends Model
{
    use HasFactory;


    public function pricing()
    {
        return $this->belongsTo(Pricing::class, 'pricing_plan_id');
    }
}
