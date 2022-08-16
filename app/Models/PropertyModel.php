<?php

namespace App\Models;

use App\Helpers\CustomHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PropertyModel extends Model
{
    use HasFactory, HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $table = "models";
    protected $fillable = ['title', 'description', 'sqft', 'price', 'image'];

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

    /**
     * Get all of the galleryImages for the PropertyModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleryImages(): HasMany
    {
        return $this->hasMany(ModelImage::class, 'model_id');
    }

    protected function video(): Attribute
    {
        return Attribute::make(
            get:fn($value) => CustomHelper::getEmbedUrls($value)
        );
    }

    /**
     * Get the type that owns the PropertyModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listingType(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type');
    }
    /**
     * Get the ststus that owns the PropertyModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listingStatus(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status');
    }
}
