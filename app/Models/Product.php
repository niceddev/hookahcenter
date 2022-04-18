<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'description', 'price', 'category_id', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeWithCategory($query, $category)
    {
        if($category == '') {
            return $query;
        }

        return $query->where('category_id', $category);
    }

    public function scopeSortBy($query, $sortBy)
    {
        switch ($sortBy){
            case 'new':
                return $query->orderByDesc('created_at');
            case 'old':
                return $query->orderBy('created_at');
            case 'asc':
                return $query->orderBy('price');
            case 'desc':
                return $query->orderByDesc('price');
            default:
                return $query;
        }

    }

    public function getImagePathAttribute()
    {
        $media = $this->getMedia('products_image');

        return count($media) != 0 ? $media->last()->getUrl('thumb') : asset('images/noImage.jpg');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(353)
            ->height(245)
            ->sharpen(10);
    }

}
