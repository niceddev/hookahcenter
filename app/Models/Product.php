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

    protected $fillable = ['name', 'description', 'category_id', 'price', 'image_path'];

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
        if(!$category)
        {
            return $query;
        }

        return $query->where('category_id', $category);
    }

//    public function

}
