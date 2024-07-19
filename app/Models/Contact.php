<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Contact extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'subject',
        'message',
        'client_type'
    ];

    public function contactImage($collection_name)
    {
        return $this->getMedia($collection_name)->first() ? $this->getMedia($collection_name)->first()->getUrl() : asset('images/No-Image.png');
    }
}
