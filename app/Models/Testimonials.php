<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Helpers\CustomHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $table = "testimonials";
    protected $fillable = ['name', 'designation', 'description', 'video'];

    protected function video(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => CustomHelper::getEmbedUrls($value)
        );
    }
}
