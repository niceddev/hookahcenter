<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'created_at', 'updated_at', 'image_path'];

    protected $allowedSorts = [
        'price',
        'category_id'
    ];

    protected $allowedFilters = [
        'name'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeWithFilters($query, $category)
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
                return $query->orderBy('created_at');
            case 'old':
                return $query->orderByDesc('created_at');
            case 'asc':
                return $query->orderBy('price');
            case 'desc':
                return $query->orderByDesc('price');
            default:
                return $query;
        }

    }

//    public function getImagePathAttribute()
//    {
//        if(!$this->attributes['image_path']) {
//            return '/images';
//        }
//
//        return $this->attributes['image_path'];
//    }

}
