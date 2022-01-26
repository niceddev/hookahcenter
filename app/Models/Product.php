<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'created_at', 'updated_at', 'image_path'];

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

}
