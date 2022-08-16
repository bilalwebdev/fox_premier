<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ReModel extends Model
{
    use HasFactory, HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $table = "re_models";
    protected $fillable = ['title', 'description','image'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get:fn($value) => $value ? [
                'key' => $value,
                'original' => env('AWS_IMG_RESIZER') . '/' . $value,
                'large' => env('AWS_IMG_RESIZER') . '/fit-in/1080x720/' . $value,
                'medium' => env('AWS_IMG_RESIZER') . '/fit-in/720x540/' . $value,
                'small' => env('AWS_IMG_RESIZER') . '/fit-in/540x360/' . $value,
            ] : [
                'key' => $value,
                'original' => "https://via.placeholder.com/1080x720?text=No%20Image",
                'large' => "https://via.placeholder.com/720x540?text=No%20Image",
                'medium' => "https://via.placeholder.com/540x360?text=No%20Image",
                'small' => "https://via.placeholder.com/360x240?text=No%20Image",
            ],
        );
    }
}
