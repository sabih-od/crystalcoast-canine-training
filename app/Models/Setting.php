<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'header_logo',
        'footer_logo',
        'phone_no',
        'address',
        'email',
        'footer_bottom_text',
        'social_link_1',
        'social_link_2',
        'social_link_3'
    ];

    public function settingImage($collection_name)
    {
        return $this->getMedia($collection_name)->first() ? $this->getMedia($collection_name)->first()->getUrl() : asset('images/No-Image.png');
    }

}
