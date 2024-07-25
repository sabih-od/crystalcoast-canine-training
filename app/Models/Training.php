<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Training extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'description'
    ];
    public function trainingImage()
    {
        return $this->getMedia('training_img')->first() ? $this->getMedia('training_img')->first()->getUrl() : asset('images/No-Image.png');
    }

}
