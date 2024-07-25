<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Behavior extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
    ];
    public function behaviorImage()
    {
        return $this->getMedia('behavior_img')->first() ? $this->getMedia('behavior_img')->first()->getUrl() : asset('images/No-Image.png');
    }
}
