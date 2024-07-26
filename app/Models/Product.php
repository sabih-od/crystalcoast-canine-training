<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'name',
        'description',
        'product_category_id',
        'price_category_ids',
    ];

    protected $casts = [
        'price_category_ids' => 'array',
    ];

    public function productImage()
    {
        return $this->getMedia('product_image')->first() ? $this->getMedia('product_image')->first()->getUrl() : asset('images/No-Image.png');
    }

    public function priceCategoryIds()
    {
        return $this->hasManyThrough(
            PricingCategory::class,
            PricingCategory::class,
            'id',
            'id',
            'price_category_ids',
            'id'
        )->whereIn('id', $this->price_category_ids);
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
