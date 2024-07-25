<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'heading',
        'sub_heading',
        'written_by',
        'description',
        'button_text',
        'short_description',
        'is_feature'
    ];
    public function blogImage()
    {
        return $this->getMedia('blog_img')->first() ? $this->getMedia('blog_img')->first()->getUrl() : asset('images/No-Image.png');
    }

}
