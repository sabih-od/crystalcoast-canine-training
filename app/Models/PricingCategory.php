<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
