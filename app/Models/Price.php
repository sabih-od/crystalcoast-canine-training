<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lesson_or_week',
        'price',
        'pricing_category_id'
    ];

    public function priceCategory()
    {
        return $this->belongsTo(PricingCategory::class,'pricing_category_id','id');
    }
}
