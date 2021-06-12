<?php

namespace App\Traits;

use App\Image;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasImages
{
    /**
     * Get Image Attribute
     *
     * @return Collection
     */
    public function getImagesAttribute(): Collection
    {
        return $this->images()->get(['path', 'sort_order']);
    }

    /**
     * Relation for one Morphed image.
     *
     * @return MorphOne
     */
    public function images(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * Relation for Many Morphed image.
     *
     * @return MorphMany
     */
    public function imagesMany(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
